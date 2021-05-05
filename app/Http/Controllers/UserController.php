<?php

namespace App\Http\Controllers;

use \App\Models\Review;
use \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function admin()
    {
        return view('auths.signup-admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|max:20|email:filter',
            'role' => 'required',
            'password' => 'required|min:8',
            'password2' => 'required|max:20',
            'username' => 'required|max:20',
            'no_hp' => 'required|numeric|digits_between:9,13',
            'job' => 'required|max:15',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
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

    public function update_designer(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'username' => 'required|max:15',
            'about' => 'required|max:300',
            'no_hp' => 'required|numeric|digits_between:10,14',
            'born' => 'required|date|before:today',
            'job' => 'required|max:20',
            'start' => 'required|date|before:today',
            'until' => 'required|date',
            'step' => 'required',
        ]);

        $id = auth()->user()->id;
        $change = User::findorfail($id);

        $data = [
            'name' => $request['name'],
            'username' => $request['username'],
            'about' => $request['about'],
            'no_hp' => $request['no_hp'],
            'born' => $request['born'],
            'job' => $request['job'],
            'position' => $request['position'],
            'start' => $request['start'],
            'until' => $request['until'],
            'step' => $request['step'],
        ];

        $change->update($data);
        return redirect('/dashboard/designer');
    }

    public function update_password_designer(Request $request)
    {
        $id = auth()->user()->id;
        $change = User::findorfail($id);

        if ($request->password === $request->password_lama) {

            $data = [
                'password' => bcrypt($request['password']),
            ];
            $change->update($data);
            return redirect('/dashboard/designer');
        } else {
            return redirect('/dashboard/designer/edit-profile');
        };
    }

    public function update_avatar_designer(Request $request)
    {
        $id = auth()->user()->id;
        $change = User::findorfail($id);

        if ($change->avatar !== 'default.jpg') {
            $file = public_path('/assets/design/') . $change->avatar;
            if (file_exists($change->avatar)) {
                @unlink($file);
            }
        }

        $avatarname = $request->avatar;
        $filename =  $id . 'designer_' . $avatarname->getClientOriginalName();

        $data = [
            'avatar' => $filename,
        ];

        $request->avatar->move(public_path() . '/assets/profile/', $filename);
        $change->update($data);

        return back();
    }


    // User
    public function update_user(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'username' => 'required|max:12',
            'about' => 'required|max:300',
            'no_hp' => 'required|numeric|digits_between:10,14',
            'born' => 'required|before:today',
            'job' => 'required|max:20',
        ]);

        $id = auth()->user()->id;
        $change = User::findorfail($id);

        $data = [
            'name' => $request['name'],
            'username' => $request['username'],
            'about' => $request['about'],
            'no_hp' => $request['no_hp'],
            'born' => $request['born'],
            'job' => $request['job'],
        ];

        $change->update($data);
        return redirect('/dashboard');
    }

    public function update_password_user(Request $request)
    {
        $id = auth()->user()->id;
        $change = User::findorfail($id);

        if ($request->password === $request->password_lama) {

            $data = [
                'password' => bcrypt($request['password']),
            ];
            $change->update($data);
            return redirect('/dashboard');
        } else {
            return redirect('/dashboard/user/edit-profile');
        };
    }

    public function update_avatar_user(Request $request)
    {
        $id = auth()->user()->id;
        $change = User::findorfail($id);

        if ($change->avatar !== 'default.jpg') {
            $file = public_path('/assets/design/') . $change->avatar;
            if (file_exists($change->avatar)) {
                @unlink($file);
            }
        }

        $avatarname = $request->avatar;
        $filename =  $id . 'designer_' . $avatarname->getClientOriginalName();

        $data = [
            'avatar' => $filename,
        ];

        $request->avatar->move(public_path() . '/assets/profile/', $filename);
        $change->update($data);

        return back();
    }
}
