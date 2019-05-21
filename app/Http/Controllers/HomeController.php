<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Auth;
use Validator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $members = Member::where('user_id', Auth::user()->id)->get();
        return view('home', compact('members'));
    }

    public function updateMemberData(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            "member_name" => 'required|max:255',
            "email" => 'required|email|distinct',
            "phone" => 'required|max:12',
            "line" => 'required|max:255|alpha_dash',
            "dob" => 'required|date',
            "ktp" => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $member = Member::findOrFail($id);
        unlink(storage_path('app/public/ktp/'.$member->ktp));
    
        $fileNameWithExt = $request->ktp->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->ktp->getClientOriginalExtension();
        $fileNametoStore = $filename.'_'.time().'.'.$extension;
        $path= $request->ktp->storeAs('public/ktp', $fileNametoStore);

        $fileNameWithExt2 = $request->cv->getClientOriginalName();
        $filename2 = pathinfo($fileNameWithExt2, PATHINFO_FILENAME);
        $extension2 = $request->cv->getClientOriginalExtension();
        $fileNametoStore2 = $filename2.'_'.time().'.'.$extension2;
        $path2= $request->cv->storeAs('public/cv', $fileNametoStore2);

        $member->update([
            'member_name' => $request->member_name,
            'email' => $request->email,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'line' => $request->line,
            'ktp' => $fileNametoStore,
            'cv' => $fileNametoStore2
        ]);

        return back()->with('success', 'Success Update Member Data');
    }

}
