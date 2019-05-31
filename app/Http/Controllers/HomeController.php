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
            "phone" => 'required|max:12',
            "line" => 'required|max:255|alpha_dash',
            "cv" => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $member = Member::findOrFail($id);
        $fileNametoStore2 = $this->uploadFile($request->cv, 'public/cv');
        $member->update([
            'phone' => $request->phone,
            'line' => $request->line,
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
