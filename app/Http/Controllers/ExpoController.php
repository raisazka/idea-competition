<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterExpoRequest;
use QrCode;
use Illuminate\Support\Facades\Mail;
use App\Mail\ExpoRegisterMail;
use App\ExpoMember;
use Carbon;

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

    public function updateAbsensi($otp)
    {
        $date = Carbon::now();
        $person = ExpoMember::where('otp', $otp)->first();
        if($date->toDateString() == '2019-06-13'){
            $person->absen1 == 1;
        }else if($date->toDateString() == '2019-06-14'){
            $person->absen2 == 1;
        }else{
            echo 'Event has not started yet';
        }
        $person->save();
        echo 'Success';
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
            $otp = strtoupper(str_random(7));
            $otp_exist = ExpoMember::where('otp', $otp)->first();
        }while($otp_exist);

        $qr = QrCode::format('png')->size(250)->generate(route('expo.data', $otp));
        $expo->otp = $otp;
        Mail::to($expo->email)->send(new ExpoRegisterMail($expo, $qr));
        $expo->save();
        return redirect('/');
    }
}
