<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => Category::findOrFail($id)
        ]);
    }
}
