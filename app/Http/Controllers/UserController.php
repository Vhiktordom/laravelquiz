<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use File;
use App\Quiz as Quiz;
use App\User as User;

class UserController extends Controller
{
    //
    public function profile()
    {
    	return view('profile', array('user' => Auth::user()));
    }

    public function update_avatar(Request $request){

    	$user = User::find(Auth::user()->id);

    	//Handle the user upload of avatar


    	if($request->hasFile('avatar')){
    		//storing it in a variable
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();


    		// Delete current image before uploading new image
            if ($user->avatar !== 'default.png') {
                // $file = public_path('uploads/avatars/' . $user->avatar);
                $file = 'uploads/avatars/' . $user->avatar;
                //$destinationPath = 'uploads/' . $id . '/';

                if (File::exists($file)) {
                    unlink($file);
                }

            }



    		//Making an image
    		Image::make($avatar)->fit(300,300)->save( public_path('/uploads/avatars/' . $filename ) );

    		//Getting the current logged in user
    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return view('profile', array('user'=>Auth::user()));
}

        public function quiz()
        {
            //$quiz = Quiz::simplepaginate(1);
             $quiz = Quiz::get();
           // echo $quiz->question;
            return view('quiz', compact('quiz'));
        }

        public function check(Request $request)
        {
            $ans = $request->all();
            //print_r($ans);
            return view('check', compact('ans'));

        }
}