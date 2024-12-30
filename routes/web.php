<?php

use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/ping', function (): JsonResponse {
    return response()->json(['pong' => true]);
});

Route::get('/states', [\App\Http\Controllers\StatesController::class, 'index']);
Route::get('/categories', [\App\Http\Controllers\CategoriesController::class, 'index']);


// Route::post('user/signup', [\App\Http\Controllers\UserController::class, 'signup'])->withoutMiddleware(VerifyCsrfToken::class);
Route::post('user/signup', [\App\Http\Controllers\UserController::class, 'signup']);
Route::post('user/signin', [\App\Http\Controllers\UserController::class, 'signin']);
Route::get('user/me', [\App\Http\Controllers\UserController::class, 'me'])->middleware('auth:sanctum');