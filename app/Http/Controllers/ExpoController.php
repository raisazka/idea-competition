<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterExpoRequest;
use QrCode;
use Illuminate\Support\Facades\Mail;
use App\Mail\ExpoRegisterMail;
use App\ExpoMember;

class ExpoController extends Controller
{
    public function index()
    {
        return view('qrCode');
    }

    public function create()
    {
        return view('register-expo');
    }

    public function register(RegisterExpoRequest $request)
    {
        $expo = new ExpoMember;
        $expo->name = $request->name;
        $expo->email = $request->email;
        $expo->phone = $request->phone;
        $expo->gender = $request->gender;
        $expo->dob = $request->dob;

        do{
            $otp = str_random(7);
            $otp_exist = ExpoMember::where('otp', $otp)->first();
        }while($otp_exist);

        $expo->otp = $otp;
        Mail::to($expo->email)->send(new ExpoRegisterMail($expo));
        //$expo->save();
        return redirect('/');
    }
}
