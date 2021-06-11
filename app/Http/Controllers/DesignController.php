<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Str;

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
        return view('guest.design', compact('datadesign'));
    }

    function search(Request $request)
    {
        $datadesign = $request->get('q');
        $datadesign = Design::where('title', 'LIKE', '%' . $datadesign . '%')->get();

        return view('guest.design', compact('datadesign'));
    }

    function dashboard_design(Request $request)
    {
        if ($request->has('category')) {
            $datadesign = Design::where('title', 'LIKE', '%' . $request->category . '%')->get();
        } else {
            $datadesign = Design::latest()->get();
        }
        return view('guest.dashboard-design', compact('datadesign'));
    }

    public function store(Request $request)
    {

        $token = Str::random(5);
        $id = auth()->user()->id;
        $data1 = $request->design1;
        $data2 = $request->design2;
        $data3 = $request->design3;

        $filename1 = $token . 'designer' . $id . '_' . $data1->getClientOriginalName();
        $filename2 = $token . 'designer' . $id . '_' . $data2->getClientOriginalName();
        $filename3 = $token . 'designer' . $id . '_' . $data3->getClientOriginalName();

        $dataupload = new Design;
        $dataupload->name = $request->name;
        $dataupload->avatar = $request->avatar;
        $dataupload->user_id = $request->user_id;
        $dataupload->title = $request->title;
        $dataupload->description = $request->description;
        $dataupload->design1 = $filename1;
        $dataupload->design2 = $filename2;
        $dataupload->design3 = $filename3;


        // $data1 = $request->design1;
        // if ($request->hasFile('avatar')) {
        //     $locations = 'public/images/design/';
        //     $image = $request->file('avatar');
        //     $image_name = $image->getClientOriginalName();
        //     $path = $request->file('avatar')->storeAs($locations, $image_name);

        //     $data1['avatar'] = $image_name;
        // }

        // $locations = 'public/images/design/';

        // $request->file('design1')->storeAs($locations, $filename1);
        // $request->file('design2')->storeAs($locations, $filename2);
        // $request->file('design3')->storeAs($locations, $filename3);
        $data1->move(public_path() . '/assets/design/', $filename1);
        $data2->move(public_path() . '/assets/design/', $filename2);
        $data3->move(public_path() . '/assets/design/', $filename3);
        $dataupload->save();

        return redirect('/dashboard/designer/edit-portofolio');
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

    public function update_avatar(Request $request, $id)
    {

        $change = Design::findorfail($id);
        $avatar = $change->avatar;

        $data = [
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'avatar' => $avatar,
        ];

        $request->design1->move(public_path() . '/assets/design/', $avatar);
        $change->update($data);
        return redirect('/dashboard/designer/edit-profile');
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
