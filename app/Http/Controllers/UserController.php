<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $users = User::all(); // Fetch all users from the database
        return view('user.show', compact('users')); // Pass users to the view
    }
}
