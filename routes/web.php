<?php

use App\Http\Controllers\Admin\UserControllerAdmin;
use App\Models\Category;
use App\Models\Expense;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/display', [UserControllerAdmin::class, 'index']); //site users                OK



Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/user', function () {
    return view('user');
});


//USER
//Route::get('/users', function () {
//    return view('users', [
//        'users' => User::all()
//    ]);
//});

Route::get('/users', [UserControllerAdmin::class, 'index']); //site users                OK
Route::get('/user/{user:id}',[UserControllerAdmin::class, 'show']);

Route::get('/users/{user:id}/edit', function (User $user) {
    return view('editUser', [
        'user' => $user
    ]);
});


Route::get('/users/create', function () {
    return view('addUser');
});

Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');


//CATEGORY
Route::get('/categories', function () {
    return view('category', [
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:id}/edit', function (Category $category) {
    return view('editCategory', [
        'category' => $category
    ]);
});

Route::get('/categories/create', function () {
    return view('addCategory');
});

//EXPENSE
Route::get('/expenses', function () {
    return view('expense', [
        'expenses' => Expense::all()
    ]);
});

Route::get('/expenses/{expense:id}/edit', function (Expense $expense) {
    return view('editExpense',[
        'expense' => $expense
    ]);
});
Route::get('/expense/create', function () {
    return view('addExpense');
});


Route::get('/test', function () {
    return view('test');
});




/*Route::resource('users', 'App\Http\Controllers\UserController.php');

Route::resource('categories', 'App\Http\Controllers\CategoryController.php');

Route::resource('expenses', 'App\Http\Controllers\ExpenseController');*/
