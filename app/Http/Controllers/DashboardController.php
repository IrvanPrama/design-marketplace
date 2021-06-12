<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Review;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function user()
    {
        if (auth()->user()->role == 'designer') {
            return redirect('/dashboard/designer');
        }

        $datadesign = Design::all();
        $row = 1;
        $datareview = Review::where('row', $row)->get();
        $datareview2 = Review::where('row', $row + 1)->get();
        return view('dashboard.index', ['datadesign' => $datadesign, 'datareview' => $datareview, 'datareview2' => $datareview2]);
    }

    public function order()
    {
        $id = auth()->user()->id;
        $dataorder = Order::where('user_id', $id)->get();
        return view('dashboard.order', compact('dataorder'));
    }



    public function view_design(Request $request)
    {
        if ($request->has('category')) {
            $datadesign = Design::where('title', 'LIKE', '%' . $request->category . '%')->get();
        } else {
            $datadesign = Design::latest()->get();
        }
        return view('dashboard.dashboard-design', compact('datadesign'));
    }

    public function index()
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
        $dataorder = Order::where('designer_id', $id)->get();
        $datadesign = Design::where('user_id', $id)->get();
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

    public function profile_view()
    {
        $id = auth()->user()->id;

        $datauser = User::where('id', $id)->get();

        return view('dashboard-designer.profile-edit', compact('datauser'));
    }

    public function portofolio_view()
    {
        $id = auth()->user()->id;

        $datadesign = Design::where('user_id', $id)->get();

        return view('dashboard-designer.portofolio-edit', compact('datadesign'));
    }

    // User
    public function profile_view_user()
    {
        $id = auth()->user()->id;

        $datauser = User::where('id', $id)->get();

        return view('dashboard.profile-edit', compact('datauser'));
    }
}
