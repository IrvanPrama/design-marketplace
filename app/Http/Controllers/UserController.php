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
            'avatar' => $request->avatar,
            'role' => $request->role,
            'password' => bcrypt($request->password),
            'username' => $request->username,
            'no_hp' => $request->no_hp,
            'job' => $request->job
        ]);

        return redirect('/login');
    }

    public function review()
    {
        return view('dashboard.review');
    }

    public function review_create(Request $request)
    {
        Review::create([
            'name' => $request->name,
            'avatar' => $request->avatar,
            'user_id' => $request->user_id,
            'review' => $request->review
        ]);

        return redirect('/dashboard');
    }

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $change = User::findorfail($id);
        $avatarname = $request->avatar;
        $filename = $avatarname->getClientOriginalName();

        $data = [
            'name' => $request['name'],
            'avatar' => $filename,
        ];

        $request->avatar->move(public_path() . '/assets/profile/', $filename);
        $change->update($data);

        if (auth()->user()->role == 'user') {
            return redirect('/dashboard');
        }
        return redirect('/dashboard/designer');
    }
}
