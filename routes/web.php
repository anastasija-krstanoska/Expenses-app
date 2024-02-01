<?php

use App\Http\Controllers\Backend\AuthenticationController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ExpenseController;
use App\Http\Controllers\Backend\UserControllerAdmin;
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


Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserControllerAdmin::class, 'index']); //site users                OK
    Route::get('/show/{id?}', [UserControllerAdmin::class, 'show']);
    Route::match(['get', 'post'], '/store/{id?}', [UserControllerAdmin::class, 'store']);
    Route::post('/delete/{id}', [UserControllerAdmin::class, 'destroy']);
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [CategoryController::class, 'index']); //site users                OK
    Route::get('/show/{id?}', [CategoryController::class, 'show']);
    Route::match(['get', 'post'], '/store/{id?}', [CategoryController::class, 'store']);
    Route::post('/delete/{id}', [CategoryController::class, 'destroy']);
});

// todo expenses controller
Route::group(['prefix' => 'expenses'], function () {
    Route::get('/', [ExpenseController::class, 'index']); //site users                OK
    Route::get('/show/{id?}', [ExpenseController::class, 'show']);
    Route::match(['get', 'post'], '/store/{id?}', [ExpenseController::class, 'store']);
    Route::post('/delete/{id}', [ExpenseController::class, 'destroy']);
});
