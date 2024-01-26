<?php

use App\Http\Controllers\Api\ExpenseController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
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

//User
Route::apiResource('users', UserController::class);
Route::get('/users', [UserController::class, 'index']); //site users                OK
Route::get('/users/{id}', [UserController::class, 'show']); //konkreten korisnik    OK
Route::post('/users/store', [UserController::class, 'store']); //create,update      OK
Route::delete('/users/{id}', [UserController::class, 'destroy']); //delete          OK


//Category
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::post('/categories/store', [CategoryController::class, 'store']); //and update
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);


//Expense
Route::get('/expenses', [ExpenseController::class, 'index']);
Route::get('/expenses/{id}', [ExpenseController::class, 'show']);
Route::post('/expenses/store', [ExpenseController::class, 'store']); //and update
Route::delete('/expenses/{id}', [ExpenseController::class, 'destroy']);
