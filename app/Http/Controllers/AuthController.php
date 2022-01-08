<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login(){
        return Inertia::render('Auth/Login');
    }

    public function postLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $credential = $request->only('email','password');
        if (Auth::attempt($credential)){
            return redirect()->route('home')->with('success','Welcome '.Auth::user()->name);
        }
    }

    public function register(){
        return Inertia::render('Auth/Register');
    }

    public function postRegister(RegisterRequest $request){

        $image = $request->file('image');
        $image_path = "/images/profile/";
        $image_name = uniqid().str_replace(' ','',$image->getClientOriginalName());
        $image->move(public_path('images/profile'),$image_name);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $image_path.$image_name,
        ]);

        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
