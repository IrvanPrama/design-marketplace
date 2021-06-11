<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Done;
use Illuminate\Http\Request;
use App\Models\Process;
use App\Models\Order;


class ProcessController extends Controller
{

    public function store(Request $request)
    {

        Process::create([
            'name' => $request->name,
            'designer_id' => $request->designer_id,
            'design_id' => $request->design_id,
            'user_id' => $request->user_id,
            'avatar' => $request->avatar,
            'title_design' => $request->title_design,
            'budget' => $request->budget,
            'deadline' => $request->deadline,
            'description' => $request->description,
        ]);

        $id = $request->id;

        $delete = Order::findorfail($id);
        $delete->delete();
        return redirect('/dashboard/designer/ongoing');
    }

    public function process()
    {
        $id = auth()->user()->id;
        $dataprocess = Process::where('designer_id', $id)->get();
        return view('dashboard-designer.proses', compact('dataprocess'));
    }

    public function process_user()
    {
        $id = auth()->user()->id;
        $dataprocess = Process::where('user_id', $id)->get();
        return view('dashboard.proses', compact('dataprocess'));
    }

    public function done_store(Request $request)
    {
        $designid = $request->design_id;
        $image = Design::find($designid);
        Done::create([
            'name' => $request->name,
            'designer_id' => $request->designer_id,
            'design_id' => $request->design_id,
            'user_id' => $request->user_id,
            'avatar' => $request->avatar,
            'title_design' => $request->title_design,
            'budget' => $request->budget,
            'deadline' => $request->deadline,
            'description' => $request->description,
            'image1' => $image->design1,
            'image2' => $image->design2,
            'image3' => $image->design3,
        ]);

        $id = $request->id;

        $delete = Process::findorfail($id);
        $delete->delete();
        return redirect('/dashboard/designer/done');
    }

    public function done()
    {
        $id = auth()->user()->id;
        $dataprocess = Done::where('designer_id', $id)->get();
        $datadetail = Design::where('id', $id)->get();
        return view('dashboard-designer.selesai', compact('dataprocess', 'datadetail'));
    }

    public function done_user()
    {
        $id = auth()->user()->id;
        $dataprocess = Done::where('user_id', $id)->get();
        $datadetail = Design::where('id', $id)->get();
        return view('dashboard.selesai', compact('dataprocess', 'datadetail'));
    }
}
