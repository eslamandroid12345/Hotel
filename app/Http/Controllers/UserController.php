<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //controller update now

    public function __construct(){

        $this->middleware('admin');
    }

    public function index()
    {
        $users = User::latest()->paginate(4);
        return view('users.index',compact('users'));

    }


    public function show(User $user)
    {
        return view('users.show',compact('user'));

    }


    public function edit(User $user)
    {
        return view('users.edit',compact('user'));


    }


    public function update(Request $request, User $user)
    {
        $request->validate([
           'name' =>'required',
            'email'=>'required',
            'role'=>'required'

        ]);

        $user->update($request->all());
        return redirect()->route('users.index')->with('success','نم تعديل بيانات المستخدم بنجاح');

    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','نم حذف بيانات المستخدم بنجاح');


    }

    public function softData($id){

        $user = User::find($id)->delete();
        return redirect()->route('users.index')->with('success','نم حذف بيانات المستخدم بنجاح');

    }


    public function trashData(){

        $users = User::onlyTrashed()->latest()->paginate(10);
        return view('users.trashed',compact('users'));
    }


    public function backData($id){

        $user = User::onlyTrashed()->where('id',$id)->restore();
        return redirect()->route('users.index')->with('success','نم رجوع بيانات المستخدم بنجاح');


    }


    public function forceData($id){

        $user = User::onlyTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('trash')->with('success','نم حذف بيانات المستخدم بنجاح');


    }
}
