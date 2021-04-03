<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }

    public function user($id)
    {
        $datadesign = Design::where('id', $id)->get();
        return view('order.user', compact('datadesign'));
    }

    public function store(Request $request)
    {
        $data = $request->example_img;

        $filename = $data->getClientOriginalName();
        $dataupload = new Order;
        $dataupload->name = $request->name;
        $dataupload->email = $request->email;
        $dataupload->designer_id = $request->designer_id;
        $dataupload->user_id = $request->user_id;
        $dataupload->avatar = $request->avatar;
        $dataupload->user_id = $request->user_id;
        $dataupload->budget = $request->budget;
        $dataupload->category = $request->category;
        $dataupload->no_hp = $request->no_hp;
        $dataupload->deadline = $request->deadline;
        $dataupload->description = $request->description;
        $dataupload->example_img = $filename;

        $data->move(public_path() . '/assets/order/', $filename);
        $dataupload->save();

        return redirect('/dashboard');
    }
}
