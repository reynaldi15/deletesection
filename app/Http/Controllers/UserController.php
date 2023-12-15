<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('dashboard',compact('users'));
    }
    public function softDelete($id){
        User::find($id)->delete();
        // return back();
        // $title = 'Delete Data!';
        // $text = "Are you sure you want to delete?";
        return redirect()->back()->withSuccess('User data in the Recycle Bin!');
    }
    public function forceDelete($id){
        User::find($id)->forceDelete();
        return redirect()->back()->withSuccess('You Delete Permanent User!');
    }
    public function trashed(){
        $users=User::onlyTrashed()->get();
        return view('trashed',compact('users'));
    }
    public function restore($id){
        User::whereId($id)->restore();
      
        return redirect()->back()->withSuccess('Nunga Mulak Ibana!');
    }
    public function restoreall(){
        User::onlyTrashed()->restore();
        // return back();
        //  session()->flash('message', 'Post successfully updated.');
        return redirect()->back()->withSuccess('You Have Been Restore the User!');
    }

}
