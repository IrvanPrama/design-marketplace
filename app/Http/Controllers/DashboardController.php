<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Review;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function user()
    {
        $datadesign = Design::all();
        $row = 1;
        $datareview = Review::where('row', $row)->get();
        $datareview2 = Review::where('row', $row + 1)->get();
        return view('.dashboard.index', ['datadesign' => $datadesign, 'datareview' => $datareview, 'datareview2' => $datareview2]);
    }
}
