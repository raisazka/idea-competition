<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttendContestant;
use DB;
use App\ExpoMember;
use Auth;

class ContestantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:contestant');
    }

    public function index()
    {
        return view('contestant.dashboard');
    }

    public function attend(Request $request)
    {
        $this->validate($request,[
            'otp' => 'required|min:7|max:7'
        ]);

        $user = ExpoMember::where('otp', $request->otp)->first();
        $db = DB::table('contestants as c')
              ->join('attend_booths as ab', 'c.id', 'ab.corporate_id')
              ->join('expo_members as em', 'em.id', 'ab.expo_member_id')
              ->where('em.otp', $request->otp)
              ->where('c.id', Auth::user()->id)
              ->get();

            if($user == null){
                return back()->with('error', 'OTP Code not Found');
            }else if(count($db) > 0){
                return back()->with('error', 'Already Insert OTP Code in this Booth');
            }
            AttendContestant::create([
                'expo_member_id' => $user->id,
                'contestant_id' => Auth::user()->id
            ]);
            return back()->with('success', 'Success Input Data');
    }
}
