<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Booking;
use App\Models\Packege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    public function about()
    {
        $about = About::all();
        return view('pages.about',['about'=>$about,'menu' => 'about']);
    }


    public function index()
    {
        $about = About::all();
        return view('dahsboard.pages.about.about-list', ['about' => $about]);
    }
    public function aboutCreate()
    {
        $about = About::all();
        return view('dahsboard.pages.about.create-about', ['about' => $about]);
    }
    public function aboutStore(Request $request)
    {
        $request->validate([

            'message' => 'required',
        ]);




        $about['message'] = $request->message;





        About::create($about);
        Alert::success('You have successfully created a About!!');
        return redirect()->route('about.list');
    }

    public function editabout($id)
    {
        $about = About::where('id', $id)->first();
        return view('dahsboard.pages.about.edit-about', ['about' => $about]);
    }

    public function aboutUpdate(Request $req)
    {




        $data['message'] = $req->message;






        About::where('id', $req->id)->update($data);

        Alert::success('Your About  is updated successfully!!');
        return redirect()->route('about.list');
    }



    public function aboutDelete($id)
    {
        About::where('id', $id)->first()->delete();

        Alert::success("About deleted successfully!!");
        return redirect()->back();
     }
}
