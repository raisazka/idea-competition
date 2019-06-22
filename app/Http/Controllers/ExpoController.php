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
        if($date->toDateString() == '2019-06-25'){
            if($person->absen1 == 1){
                $respon = array(
                    'response' => "Success",
                    'status' => 'Sudah Pernah Absen hari 1',
                    'name' => $person->name,
                    'email' => $person->email,
                    'dob' => $person->dob,
                    'phone' => $person->phone,
                    'gender' => $person->gender,
                    ) ;
            }
            else{
                $person->update([
                    'absen1' => 1
                ]);
                $respon = array(
                    'response' => "Success",
                    'status' => "Absen hari 1 sukses",
                    'name' => $person->name,
                    'email' => $person->email,
                    'dob' => $person->dob,
                    'phone' => $person->phone,
                    'gender' => $person->gender,
                ) ;
            }
            //echo 'Absen hari 1 sukses';
        }else if($date->toDateString() == '2019-06-26'){
            if($person->absen2 == 1){
                $respon = array(
                    'response' => "Success",
                    'status' => 'Sudah Pernah Absen hari 2',
                    'name' => $person->name,
                    'email' => $person->email,
                    'dob' => $person->dob,
                    'phone' => $person->phone,
                    'gender' => $person->gender,
                    ) ;
            } else{
                $person->update([
                    'absen2' => 1
                ]);
                $respon = array(
                    'response' => "Success",
                    'status' => 'Absen hari 2 sukses',
                    'name' => $person->name,
                    'email' => $person->email,
                    'dob' => $person->dob,
                    'phone' => $person->phone,
                    'gender' => $person->gender,
                    ) ;
            }
        }else{
            $respon = array(
                'response' => "Success",
                'status' => "Expo has not started yet/Invalid OTP",
                'name' => $person->name,
                'email' => $person->email,
                'dob' => $person->dob,
                'phone' => $person->phone,
                'gender' => $person->gender,
                ) ;
        }
        $posts[0] = $respon;
    	return response()->json(['data' => $posts], 200, [], JSON_NUMERIC_CHECK);
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
