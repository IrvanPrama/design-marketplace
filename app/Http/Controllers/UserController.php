<?php

namespace App\Http\Controllers;

use \App\Models\Review;
use \App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function designer()
    {
        return view('auths.signup-designer');
    }

    public function client()
    {
        return view('auths.signup-client');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
            'username' => $request->username,
            'no_hp' => $request->no_hp,
            'job' => $request->job
        ]);

        return redirect('/dashboard');
    }

    public function review()
    {
        return view('dashboard.review');
    }

    public function review_create(Request $request)
    {
        Review::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'review' => $request->review
        ]);

        return redirect('/dashboard');
    }
}
