<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Review;

class DesignController extends Controller
{
    public function public()
    {
        $datadesign = Design::all();
        $datareview = Review::all();
        return view('index', ['datadesign' => $datadesign, 'datareview' => $datareview]);
    }
    public function index()
    {
        if (auth()->user()->role == 'user') {
            $datadesign = Design::latest()->get();
            return view('dashboard.index', compact('datadesign'));
        }
        return redirect('/dashboard/designer');
    }

    public function view_designer()
    {
        if (auth()->user()->role == 'user') {
            return redirect('/dashboard');
        }
        $id = auth()->user()->id;
        $datadesign = Design::where('user_id', $id)->get();
        return view('dashboard-designer.index', compact('datadesign'));
    }

    public function store(Request $request)
    {
        $data = $request->design;
        $filename = $data->getClientOriginalName();

        $dataupload = new Design;
        $dataupload->name = $request->name;
        $dataupload->user_id = $request->user_id;
        $dataupload->title = $request->title;
        $dataupload->design = $filename;

        $data->move(public_path() . '/assets', $filename);
        $dataupload->save();

        return redirect('/dashboard/designer');
    }
}
