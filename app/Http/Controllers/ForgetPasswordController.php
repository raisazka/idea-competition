<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;

class ForgetPasswordController extends Controller
{
    public function index()
    {
        return view('forget-password');
    }

    public function forgetPassword(Request $request)
    {
        $username = User::where('username', $request->username)->first();
        if($username === null){
            return back()->with('error', 'Username Not Found')->withInput();
        }else if($username->members->first()->dob === $request->dob){
            $username->password = Hash::make(str_replace("-","",$username->members->first()->dob));
            $username->save();
            return redirect('/user-login');
        }else{
            return back()->with('error', 'DOB does not match')->withInput();
        }
    }

}
