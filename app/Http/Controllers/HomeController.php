<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        if(Auth::user()->role == 'admin'){

            $rooms = Room::latest()->paginate(4);
            return view('hotels.index',compact('rooms'));
        }elseif (Auth::user()->role == 'user'){

            $rooms = Room::where('client_id',Auth::id())->latest()->paginate(2);
            return view('hotels.index',compact('rooms'));
        }
    }
}
