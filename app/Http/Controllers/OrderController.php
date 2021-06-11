<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }

    public function order_form($id)
    {
        $datadesign = Design::where('id', $id)->get();
        return view('order.user', compact('datadesign'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'budget' => 'required|max:12',
            'category' => 'required',
            'deadline' => 'required|date|after:tomorrow',
            'description' => 'required|max:300',
        ]);

        // $designer = User::find($request->designer_id);
        // $nowa_designer = $designer->no_hp;

        $dataupload = new Order;
        $dataupload->name = auth()->user()->name;
        $dataupload->email = auth()->user()->email;
        $dataupload->designer_id = $request->designer_id;
        $dataupload->user_id = auth()->user()->id;
        $dataupload->design_id = $request->design_id;
        $dataupload->avatar = $request->avatar;
        $dataupload->title_design = $request->title_design;
        $dataupload->budget = $request->budget;
        $dataupload->category = $request->category;
        // $dataupload->no_hp_designer = $nowa_designer;
        $dataupload->no_hp = $request->no_hp;
        $dataupload->deadline = $request->deadline;
        $dataupload->description = $request->description;

        $dataupload->save();

        return redirect('/dashboard');
    }

    public function store_nodirect(Request $request)
    {
        $request->validate([
            'budget' => 'required|max:12',
            'category' => 'required',
            'deadline' => 'required|date|after:tomorrow',
            'example_img' => 'required',
            'description' => 'required|max:300',
        ]);

        $data = $request->example_img;
        $token = Str::random(5);
        $filename = $token . 'user_order';
        $dataupload = new Order;
        $dataupload->name = auth()->user()->name;
        $dataupload->email = auth()->user()->email;
        $dataupload->designer_id = $request->designer_id;
        $dataupload->user_id = auth()->user()->id;
        $dataupload->avatar = $request->avatar;
        $dataupload->title_design = $request->title_design;
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
