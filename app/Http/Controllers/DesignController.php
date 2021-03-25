<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        $datadesign = Design::latest()->get();
        return view('dashboard.index', compact('datadesign'));
    }

    public function view_designer()
    {
        $datadesign = Design::latest()->get();
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

        return redirect('/dashboard');
    }
}
