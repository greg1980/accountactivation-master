<?php

namespace App\Http\Controllers;
use Auth;
use Image;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function profile(){
    	return view('profile', array('user' => Auth::user() ) );
     }

    public function update_avatar(Request $request ){

    	//Handle the user uplaod of avatars
    	//
    	if($request->hasFile('avatar')){
    		$avatar =$request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatar/'. $filename) );

    		$user = Auth::user();
    		$user->avatar =$filename;
    		$user->save();
    	}
            return view('profile', array('user' => Auth::user() ) );
    }
}
