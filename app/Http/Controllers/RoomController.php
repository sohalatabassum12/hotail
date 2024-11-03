<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('dahsboard.pages.rooms.room-list', ['rooms' => $rooms]);
    }
    public function roomCreate()
    {
        return view('dahsboard.pages.rooms.create-room');
    }
    public function roomStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
        ]);

        if (!file_exists(public_path('images/rooms'))) {
            mkdir(public_path('images/rooms'), 0777, true);
        }

        if (!empty($request->image)) {
            $image = $request->image;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('images/rooms');
            $image->move($destination, $imagename);
        }
        $data['image'] = 'images/rooms/' . $imagename;
        $data['title'] = $request->title;
        $data['price'] = $request->price;
        $data['bed'] = $request->bed;
        $data['bath'] = $request->bath;
        $data['description'] = $request->description;
        $data['wifi'] = $request->wifi == 'on' ? true : false;

        Room::create($data);
        Alert::success('You have successfully created a room!!');
        return redirect()->route('room.list');
    }

    public function editRoom($id)
    {
        $room = Room::where('id', $id)->first();
        return view('dahsboard.pages.rooms.edit-room', ['room' => $room]);
    }

    public function roomUpdate(Request $req)
    {

        if (!file_exists(public_path('images/rooms'))) {
            mkdir(public_path('images/rooms'), 0777, true);
        }

        if (!empty($req->image)) {
            $image = $req->image;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('images/rooms');
            $image->move($destination, $imagename);
            $data['image'] = 'images/rooms/' . $imagename;
        }


        $data['title'] = $req->title;
        $data['price'] = $req->price;
        $data['bed'] = $req->bed;
        $data['bath'] = $req->bath;
        $data['description'] = $req->description;
        $data['wifi'] = $req->wifi == 'on' ? true : false;

        Room::where('id', $req->id)->update($data);

        Alert::success('Your room is updated successfully!!');
        return redirect()->route('room.list');
    }

    public function roomBooking()
    {
        $data = Room::all();
        if(Auth::user()){

            return view('pages.booking', ['rooms' => $data]);
        }else{
            Alert::warning('Please login first to book a room!!');
            return view('pages.login');
        }
    }
    public function bookingStore(Request $request)
    {

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['adult'] = $request->adult;
        $data['child'] = $request->child;
        $data['checkIn'] = $request->checkIn;
        $data['checkOut'] = $request->checkOut;
        $data['room'] = $request->room;
        $data['specialRequest'] = $request->specialRequest;
        $data['user_id'] = Auth::user()->id;

        Booking::create($data);
        Alert::success('Congatulations!','Your booking request has been successfully sent!!');

        return redirect()->back();
    }
    
}
