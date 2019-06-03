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
        $ctr = 0;
        $cv = 0;
        $message= "";
        foreach($user->members as $member){
            $ctr++;
            if($member->cv != null){
                $cv++;
            }
        } 
        if($ctr == $cv){
            $message = "CVOK";
        }
        else{
            $message = "NONE";
        }
        return view('Dashboard')->with('user',$user)->with('message',$message)->with('count',$ctr);
    }
    public function addUser(Request $request){
        $messages = [
            'unique' => 'Already Taken',
            'phone.max' => 'Maximum 12 Digits'
        ];
        
            $this->validate($request, [
                "member_name_add" => 'required|max:255',
                "email_add" => 'required|email|distinct|unique:members,email',
                "phone_add" => 'required|max:12|distinct|unique:members,phone',
                "line_add" => 'required|max:255|distinct|unique:members,line|alpha_dash',
                "dob_add" => 'required|date',
                "ktp_add" => 'required|mimes:jpg,png,jpeg|max:2048'
            ], $messages);
            if(count(Auth::user()->members)>2){
                return redirect('home')->with('error','Maximum member is 3!');
            }
            $m_name = $request->member_name_add;
            $email = $request->email_add;
            $dob = $request->dob_add;
            $phone = $request->phone_add;
            $line = $request->line_add;
            $ktp = $request->file('ktp_add');
            $group =  Auth::user();
            $fileNameWithExt = $ktp->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $ktp->getClientOriginalExtension();
            $fileNametoStore = $filename.'_'.time().'.'.$extension;
            $path= $ktp->storeAs('public/ktp', $fileNametoStore);
            $group->members()->create([
                'member_name' => $m_name,
                'email' => $email,
                'dob' => $dob,
                'phone' => $phone,
                'line' => $line,
                'ktp' => $fileNametoStore,
            ]);
        return redirect()->route('home');
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
        $file = $this->uploadFile($request->file('cv'), 'public/cv');
        $member->update([
            'phone' => $request->phone,
            'line' => $request->line,
            'cv' => $file
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
