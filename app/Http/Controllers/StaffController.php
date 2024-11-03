<?php

namespace App\Http\Controllers;

use App\Models\Staff;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::all();
        return view('dahsboard.pages.staff.staff-list', ['staff' => $staff]);
    }
    public function staffCreate()
    {
        $staff = Staff::all();

        return view('dahsboard.pages.staff.create-staff',['staff' => $staff]);
    }
    public function staffStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image'=>'required',
            'facebook_link'=> 'required'

        ]);

         //dd( $request);
        if (!file_exists(public_path('images/staff'))) {
            mkdir(public_path('images/staff'), 0777, true);
        }

        if (!empty($request->image)) {
            $image = $request->image;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('images/staff');
            $image->move($destination, $imagename);
        }
        $data['image'] = 'images/staff/' . $imagename;
        $data['name'] = $request->name;
        $data['facebook_link'] = $request->facebook_link;




        Staff::create($data);
        Alert::success('You have successfully enter a Staff details !!');
        return redirect()->route('staff.list');
    }

    public function editstaff($id)
    {
        $staff = Staff::where('id', $id)->first();
        return view('dahsboard.pages.staff.edit-staff', ['staff' => $staff]);
    }

    public function staffUpdate(Request $req)
    {

        if (!file_exists(public_path('images/staff'))) {
            mkdir(public_path('images/staff'), 0777, true);
        }

        if (!empty($req->image)) {
            $image = $req->image;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('images/staff');
            $image->move($destination, $imagename);
            $data['image'] = 'images/staff/' . $imagename;
        }


        $data['name'] = $req->name;

        $data['facebook_link'] = $req->facebook_link;




        Staff::where('id', $req->id)->update($data);

        Alert::success('Your Staff information is updated successfully!!');
        return redirect()->route('staff.list');
    }

    public function StaffDelete($id)
    {
        Staff::where('id', $id)->first()->delete();

        Alert::success("Staff Information deleted successfully!!");
        return redirect()->back();
    }
}



