<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PageController extends Controller
{

    public function editProfile(){
        return Inertia::render('EditUser');
    }

    public function postEditProfile(Request $request){
        $authUserId = Auth::user()->id;
        $user = User::findOrFail($authUserId);

        #check password
        if ($request->password){
            $password = Hash::make($request->password);
        }else{
            $password = $user->password;
        }

        #check image
        if ($file = $request->file('image')){
            $new_image_name = uniqid().$request->file('image')->getClientOriginalName();
            $path = "images/profile/";
            File::delete(public_path($user->image));
            $file->move($path,$new_image_name);
            $save_image_name_to_db = $path.$new_image_name;
        }else{
            $save_image_name_to_db = $user->image;
        }

        #update user
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'image' => $save_image_name_to_db
        ]);

        return redirect()->back()->with('success','Profile has been updated');
    }
}
