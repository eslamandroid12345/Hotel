<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }


    public function create()
    {
        return view('hotels.create');

    }


    public function store(Request $request)
    {

        $rules = [
            'city_from' => 'required',
            'city_to' => 'required',
            'trip_time' => 'required',
            'children' => 'required',
            'date_arrive' => 'required',
            'date_leave' => 'required',

        ];

        $message = [
            'city_from.required' => 'برجاء ادخال مدينه الاقلاع',
            'city_to.required' => 'برجاء ادخال مدينه الوصول',
            'trip_time.required' => 'ادخل وقت الرحله',
            'children.required' => 'عدد الاطفال',
            'date_arrive.required' => 'تاريخ الوصول',
            'date_leave.required' => 'تاريخ المغادره',

        ];
        $request->validate($rules,$message);

        $room = Room::create($request->all());
        return redirect()->route('home')->with('success','تم تسجيل عمليه الحجز بنجاح');

    }


    public function show(Room $room)
    {
        return view('hotels.show',compact('room'));
    }


    public function edit(Room $room)
    {
        return view('hotels.edit',compact('room'));

    }


    public function update(Request $request, Room $room)
    {
        $request->validate([
            'city_from' => 'required',
            'city_to' => 'required',
            'trip_time' => 'required',
            'children' => 'required',
            'date_arrive' => 'required',
            'date_leave' => 'required',

        ]);

        $room->update($request->all());
        return redirect()->route('home')->with('success','تم تعديل عمليه الحجز بنجاح');

    }


    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('home')->with('success','تم حذف عمليه الحجز بنجاح');

    }
    public function softData($id){

        $room = Room::find($id)->delete();
        return redirect()->route('home')->with('success','تم حذف عمليه الحجز بنجاح');

    }

    public function trashData(){

           if(Auth::user()->role == 'admin'){

               $rooms = Room::onlyTrashed()->latest()->paginate(10);
               return view('hotels.trashed',compact('rooms'));

           }elseif (Auth::user()->role == 'user'){
               $rooms = Room::onlyTrashed()->where('client_id',Auth::id())->latest()->paginate(10);
               return view('hotels.trashed',compact('rooms'));
           }

    }

    public function backData($id){
        $rooms = Room::onlyTrashed()->where('id',$id)->restore();
        return redirect()->route('home')->with('success','تم عوده عمليه الحجز بنجاح');


    }


    public function forceData($id){
        $rooms = Room::onlyTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('trash')->with('success','تم حذف عمليه الحجز بنجاح');


    }
}
