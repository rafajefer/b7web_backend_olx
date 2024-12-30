<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatesController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $states = \App\Models\State::all();
        return response()->json(['data' => $states]);
    }
}
