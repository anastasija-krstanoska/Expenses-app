<?php

use App\Http\Controllers\Api\ExpenseController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthenticationController;

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

Route::post('register', [AuthenticationController::class, 'createUser']);
Route::post('/login', [AuthenticationController::class, 'login']);


Route::middleware(['token'])->group(function () {

//User
//Route::apiResource('users', UserController::class);
    Route::group(['prefix'=>'users'],function (){
        Route::get('/', [UserController::class, 'index']); //site users                OK
        Route::get('/{id}', [UserController::class, 'show']); //konkreten korisnik    OK
        Route::post('/store', [UserController::class, 'store']); //create,update      OK
        Route::delete('/{id}', [UserController::class, 'destroy']); //delete          OK
    });



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

//ako gi stavam vo midd vnatre vika 404 nf

});
