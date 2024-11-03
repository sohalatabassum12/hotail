<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Booking;
use App\Models\Room;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $room = Room::all();
        $totalRoom = Room::all()->count();
        $totalUser = User::all()->count();
        $about=About::all();
        $staff=Staff::all();
        //$data = [$room,$totalRoom, $totalRoom];
        return view('pages.home', ['rooms'=>$room,'about'=>$about,'staff'=>$staff,'menu'=>'home']);
    }


    // public function home1()
    // {
    //     $totalUser = User::all()->count();
    //     $totalRoom = Room::all()->count();
    //     $totalBooking = Booking::all()->count();
    //     $pendingBooking = Booking::where('status','pending')->count();

    //     $data = [$totalUser, $totalRoom, $totalBooking, $pendingBooking];

    //     return view('pages.home', ['data'=>$data]);
    // }

}
