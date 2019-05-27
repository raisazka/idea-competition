<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Auth;
use Validator;
use App\User;


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
        $user = User::where('id', Auth::user()->id)->first();
        return view('Dashboard')->with('user',$user);
    }

    public function updateMemberData(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            // "member_name" => 'required|max:255',
            // "email" => 'required|email|distinct',
            "phone" => 'required|max:12',
            "line" => 'required|max:255|alpha_dash',
            // "dob" => 'required|date',
            // "ktp" => 'required'
            "cv" => 'required'
        ]);

        if($validator->fails()){
            dd($validator);
            return back()->withErrors($validator);
        }
        $member = Member::findOrFail($id);
        // unlink(storage_path('app/public/ktp/'.$member->ktp));
    
        // uploadFile($request->ktp, 'public/ktp');
        $fileNametoStore2 = $this->uploadFile($request->cv, 'public/cv');

        $member->update([
            // 'member_name' => $request->member_name,
            // 'email' => $request->email,
            // 'dob' => $request->dob,
            'phone' => $request->phone,
            'line' => $request->line,
            // 'ktp' => $fileNametoStore,
            'cv' => $fileNametoStore2
        ]);

        return back()->with('success', 'Success Update Member Data');
    }

    public function uploadFile($data, $folder)
    {
        $fileNameWithExt = $data->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $data->getClientOriginalExtension();
        $fileNametoStore = $filename.'_'.time().'.'.$extension;
        $path= $data->storeAs($folder, $fileNametoStore);
        return $fileNametoStore;
    }

}
