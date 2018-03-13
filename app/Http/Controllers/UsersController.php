<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $ads = auth()->user()->ads()->latest()->get();
        return view('users.index', compact('ads'));
    }

    public function show(User $user)
    {   
        return view('users.show', compact('user'));
    }
}
