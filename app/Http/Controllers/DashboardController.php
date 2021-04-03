<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Review;
use App\Models\Order;
use App\Models\User;

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

    public function view_designer()
    {
        if (auth()->user()->role == 'user') {
            return redirect('/dashboard');
        }
        $id = auth()->user()->id;
        $datadesign = Design::where('user_id', $id)->get();
        $dataorder = Order::where('designer_id', $id)->get();
        return view('dashboard-designer.index', ['datadesign' => $datadesign, 'dataorder' => $dataorder]);
    }

    public function admin()
    {
        if (auth()->user()->role !== 'admin') {
            return back();
        }

        $design = Design::all();
        $order = Order::all();
        $designer = User::where('role', 'designer');
        $user = User::where('role', 'user');

        return view('dashboard-admin.index', ['design' => $design, 'order' => $order, 'designer' => $designer, 'user' => $user]);
    }
}
