<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GamificationType;
use App\ExpoMember;
use DB;
use App\Gamification;
use stdClass;

class GamificationController extends Controller
{
    public function index()
    {
        return view('gamification');
    }

    public function play(Request $request)
    {
        $this->validate($request,[
            'otp' => 'required|min:7|max:7',
        ]);

        $a = DB::table('attend_booths as ab')
        ->join('expo_members as em', 'ab.expo_member_id', 'em.id')
        ->join('corporates as c', 'ab.corporate_id', 'c.id')
        ->select(DB::raw('count(c.area) as countArea'))
        ->where('c.area', 'Area 1')
        ->where('em.otp', $request->otp)
        ->groupBy('c.area')->first();

        $b = DB::table('attend_booths as ab')
        ->join('expo_members as em', 'ab.expo_member_id', 'em.id')
        ->join('corporates as c', 'ab.corporate_id', 'c.id')
        ->select(DB::raw('count(c.area) as countArea'))
        ->where('c.area', 'Area 2')
        ->where('em.otp', $request->otp)
        ->groupBy('c.area')->first();

       $c = DB::table('attend_booths as ab')
        ->join('expo_members as em', 'ab.expo_member_id', 'em.id')
        ->join('corporates as c', 'ab.corporate_id', 'c.id')
        ->select(DB::raw('count(c.area) as countArea'))
        ->where('c.area', 'Area 3')
         ->where('em.otp', $request->otp)
        ->groupBy('c.area')->first();
        
       $d = DB::table('attend_booths as ab')
        ->join('expo_members as em', 'ab.expo_member_id', 'em.id')
        ->join('corporates as c', 'ab.corporate_id', 'c.id')
        ->where('em.otp', $request->otp)
        ->get();   
        
        $z = 99;
        if($a == null || $b == null || $c == null || $d == null){
           $z = 0;
           $a = new stdClass();
           $b =  new stdClass();
           $c = new stdClass();
           $a->countArea = 0;
           $b->countArea = 0;
           $c->countArea = 0;
        }
        if($z > $a->countArea){
            $z = $a->countArea;
        }
         if($z > $b->countArea){
            $z = $b->countArea;
        }
        if($z > $c->countArea){
            $z = $c->countArea;
        }

        $user = ExpoMember::where('otp', $request->otp)->first();
        if($user == null){
            return back()->with('error', 'OTP Code not Found');
        }else if($user->gamification){
            return back()->with('error', 'Already Played');
        }else if($z == 1){
            Gamification::create([
                'expo_member_id' => $user->id
            ]);
            return back()->with('success', 'You Got to Play Gamification 1');
        }else if($z == 2 ){
            Gamification::create([
                'expo_member_id' => $user->id
            ]);
            return back()->with('success', 'You Got to Play Gamification 2');
        }else if($z == 3 && count($d) < 10){
            Gamification::create([
                'expo_member_id' => $user->id
            ]);
            return back()->with('success', 'You Got to Play Gamification 2');
        }else if($z == 3 && count($d) >= 10){
            Gamification::create([
                'expo_member_id' => $user->id
            ]);
            return back()->with('success', 'You Got to Play Gamification 3');
        }else if($z == 0){
            return back()->with('error', 'You Can\'t Play, Minimum 1 Booth per Area');
        }
    }
}
