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

    public function getPersonData($otp)
    {
        $person = ExpoMember::where('otp', $otp)->first();
        return response()->json($person);
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

        $qr = QrCode::format('png')->size(250)->generate(route('expo.data', $otp));
        $expo->otp = $otp;
        Mail::to($expo->email)->send(new ExpoRegisterMail($expo, $qr));
        $expo->save();
        return redirect('/');
    }
}
