<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;

class DesignController extends Controller
{
    public function public()
    {
        $datadesign = Design::all();
        $row = 1;
        $datareview = Review::where('row', $row)->get();
        $datareview2 = Review::where('row', $row + 1)->get();
        return view('index', ['datadesign' => $datadesign, 'datareview' => $datareview, 'datareview2' => $datareview2]);
    }

    public function product_detail($id)
    {
        $dt = Design::where('id', $id)->get();
        $dtf = Design::find($id);
        $user_id = $dtf->user_id;
        $user = User::where('id', $user_id)->get();
        return view('public-detail-product', ['dt' => $dt, 'user' => $user]);
    }

    public function dashboard_product_detail($id)
    {
        $dt = Design::where('id', $id)->get();
        $dtf = Design::find($id);
        $user_id = $dtf->user_id;
        $user = User::where('id', $user_id)->get();
        return view('detail.user', ['dt' => $dt, 'user' => $user]);
    }

    function view_design(Request $request)
    {
        if ($request->has('category')) {
            $datadesign = Design::where('title', 'LIKE', '%' . $request->category . '%')->get();
        } else {
            $datadesign = Design::latest()->get();
        }
        return view('fragment.design', compact('datadesign'));
    }

    function dashboard_design(Request $request)
    {
        if ($request->has('category')) {
            $datadesign = Design::where('title', 'LIKE', '%' . $request->category . '%')->get();
        } else {
            $datadesign = Design::latest()->get();
        }
        return view('fragment.dashboard-design', compact('datadesign'));
    }

    public function store(Request $request)
    {
        $data1 = $request->design1;
        $data2 = $request->design2;
        $data3 = $request->design3;

        $filename1 = $data1->getClientOriginalName();
        $filename2 = $data2->getClientOriginalName();
        $filename3 = $data3->getClientOriginalName();

        $dataupload = new Design;
        $dataupload->name = $request->name;
        $dataupload->avatar = $request->avatar;
        $dataupload->user_id = $request->user_id;
        $dataupload->title = $request->title;
        $dataupload->description = $request->description;
        $dataupload->design1 = $filename1;
        $dataupload->design2 = $filename2;
        $dataupload->design3 = $filename3;

        $data1->move(public_path() . '/assets/design/', $filename1);
        $data2->move(public_path() . '/assets/design/', $filename2);
        $data3->move(public_path() . '/assets/design/', $filename3);
        $dataupload->save();

        return redirect('/dashboard/designer');
    }

    public function update_data(Request $request, $id)
    {
        $change = Design::findorfail($id);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        $change->update($data);
        return redirect('/dashboard/designer');
    }

    public function update(Request $request, $id)
    {
        if ($request->design1 === 0 && $request->design2 === 0 && $request->design3 === 0) {
            $change = Design::findorfail($id);
            $data = [
                'title' => $request->title,
                'description' => $request->description,
            ];
            $change->update($data);
            return redirect('/dashboard/designer');
        } else {
            $change = Design::findorfail($id);
            $firstname1 = $change->design1;
            $firstname2 = $change->design2;
            $firstname3 = $change->design3;

            $data = [
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description,
                'design1' => $firstname1,
                'design2' => $firstname2,
                'design3' => $firstname3,
            ];

            $request->design1->move(public_path() . '/assets/design/', $firstname1);
            $request->design2->move(public_path() . '/assets/design/', $firstname2);
            $request->design3->move(public_path() . '/assets/design/', $firstname3);
            $change->update($data);
            return redirect('/dashboard/designer');
        }
    }

    public function destroy($id)
    {
        $delete = Design::findorfail($id);

        $file1 = public_path('/assets/design/') . $delete->design1;
        if (file_exists($file1)) {
            @unlink($file1);
        }
        $delete->delete();

        $file2 = public_path('/assets/design/') . $delete->design2;
        if (file_exists($file2)) {
            @unlink($file2);
        }
        $delete->delete();

        $file3 = public_path('/assets/design/') . $delete->design3;
        if (file_exists($file3)) {
            @unlink($file3);
        }
        $delete->delete();

        return back();
    }
}
