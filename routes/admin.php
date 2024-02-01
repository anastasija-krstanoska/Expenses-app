<?php

 use App\Http\Controllers\Admin\UserControllerAdmin;

use Illuminate\Support\Facades\Route;



 ///////
Route::get('/display', [UserControllerAdmin::class, 'index']); //site users                OK
