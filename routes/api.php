<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('users', UserController::class);
Route::get('/users', [UserController::class, 'index']); //site users                OK
Route::get('/users/{id}', [UserController::class, 'show']); //konkreten korisnik    OK
Route::post('/users/store', [UserController::class, 'store']); //create                   OK
Route::delete('/users/{id}', [UserController::class, 'destroy']); //delete          OK

