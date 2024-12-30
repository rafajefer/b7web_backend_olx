<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\SignInRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(CreateUserRequest $request): JsonResponse
    {
        $data = $request->only(['name', 'email', 'password', 'state_id']);
        $data['password'] = Hash::make($data['password']); // bcrypt($data['password']);
        $user = \App\Models\User::create($data);
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['token' => $token, 'error' => '']);
    }

    public function signin(SignInRequest $request): JsonResponse
    {
        $data = $request->only(['email', 'password']);
        if (Auth::attempt($data)) {
            $token = Auth::user()->createToken('auth_token')->plainTextToken;
            return response()->json(['token' => $token, 'error' => '']);
        }
        return response()->json(['error' => 'Usuário e/ou senha inválidos'], 401);
    }

    public function me(Request $r): JsonResponse
    {
        $user = Auth::user();
        return response()->json(['data' => [
            'name' => $user->name,
            'email' => $user->email,
            'state' => $user->state->name,
            'advertises' => $user->advertises
        ]]);
    }
}
