<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->design;
        $filename = $data->getClientOriginalName;

        $dataupload = new Design;
        $dataupload->name = $request->name;
        $dataupload->user_id = $request->user_id;
        $dataupload->title = $request->title;
        $dataupload->design = $request->design;

        $data->move(public_path() . '/assets', $filename);
        $dataupload->save();

        return redirect('/dashboard');
    }
}
