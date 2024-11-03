<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {

        $data = Booking::all();
        return view('dahsboard.pages.appointment-list', ['data' => $data]);
    }

    public function approve($id)
    {
        $booking = Booking::find($id);

        $data['status'] = "approved";

        $booking->update($data);
        return redirect()->back();
    }

    public function reject($id)
    {
        $booking = Booking::find($id);

        $data['status'] = "rejected";

        $booking->update($data);
        return redirect()->back();
    }

    public function myAppointment(){
        $data = Booking::where('user_id', Auth::user()->id)->get();
        return view('pages.my-appointment', ['data'=> $data]);
    }
}
