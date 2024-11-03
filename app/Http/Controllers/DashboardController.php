<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::all()->count();
        $totalRoom = Room::all()->count();
        $totalBooking = Booking::all()->count();
        $pendingBooking = Booking::where('status','pending')->count();
        $staff=Staff::all()->count();

        $data = [$totalUser, $totalRoom, $totalBooking, $pendingBooking,$staff];

        return view('dahsboard.pages.index', ['data'=>$data]);
    }

    public function userList()
    {
        $data = User::orderBy('id', 'desc')->get();

        return view('dahsboard.pages.user-list', ['users' => $data]);
    }

    public function userDelete($id)
    {
        User::where('id', $id)->first()->delete();

        Alert::success("User deleted successfully!!");
        return redirect()->back();
    }
  
}
