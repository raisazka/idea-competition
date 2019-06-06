<?php

namespace App\Http\Controllers;

use App\User;
use App\Member;
use App\ContactUs;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::All();
        $contactus = ContactUs::All();
        return view('admin.dashboard', compact('users','contactus'));
    }
    public function cv_check()
    {
        $users = User::All();
        $contactus = ContactUs::All();
        return view('admin.cv_check', compact('users','contactus'));
    }
    public function proposal_check()
    {
        $users = User::All();
        $contactus = ContactUs::All();
        return view('admin.proposal_check', compact('users','contactus'));
    }
    public function contact_admin()
    {
        $users = User::All();
        $contactus = ContactUs::All();
        return view('admin.contact_us', compact('users','contactus'));
    }
    public function updateUserData(Request $req){
        $id = $req->user_id;
        $messages = [
            'unique' => 'Already Taken',
            'phone.max' => 'Maximum 12 Digits',
            'ktp.max' => 'Max File 2MB',
	        'mimes' => 'file format must be jpg,png,jpeg' 
         ];
         $this->validate($req, [
            "name"  => "required|string|min:5",
            "username" => 'required|string|alpha_dash',
            "member_name.*" => 'required|max:255',
            "email.*" => 'required|email',
            "phone.*" => 'required|max:12',
            "line.*" => 'required|max:255|alpha_dash',
            "dob.*" => 'required|date',
         ], $messages);
         if($req->password!=null)
         {
            $this->validate($req,[
                "password" => 'string|min:6'
            ],$messages);
         }
         
       
        $name = $req->name;
        $username = $req->username;
        $password = $req->password;
        $m_name = $req->member_name;
        $email = $req->email;
        $dob = $req->dob;
        $phone = $req->phone;
        $line = $req->line;
        
        $user = User::findorFail($id);
        $user->name = $name;
        $user->username = $username;
        if($req->password != null){
            $user->password = Hash::make($password);
        }
        $i=0;
        foreach($user->members as $member){
            $member->update([
                'member_name' => $m_name[$i],
                'email' => $email[$i],
                'dob' => $dob[$i],
                'phone' => $phone[$i],
                'line' => $line[$i],
            ]);
            $i++;
        }
        $user->save();
        return redirect()->route('admin.cv_check');
        
    }
    public function editDataView($id)
    {
        $user = User::findorFail($id);
        return view('admin.edit_data',compact('user','contactus'));
    }
    public function viewMember()
    {
        $members = Member::all();
        return view('admin.dashboard-2', compact('members'));
    }

    public function readContactUs (Request $req)
    {
        $id = $req->id;
        if($req->message == "read")
        {
            $read = 2;
        }   
        else if($req->message == "unread"){
            $read = 1;
        }
        else{
            return back()->with('error','Something is Wrong Plis contact Peter % Rais');
        }

        $contact = ContactUs::findorFail($id);
        $contact->viewed = $read;
        $contact->save();
        return back()->with('success', 'Success '.$req->message);
    }
    public function verifyPayment($id)
    {
        $users = User::findOrFail($id);
        $users->payments->status = 'Verified';
        $users->payments->save();
        return back()->with('success', 'Success Verify Payment');
    }
    public function verifycv($id)
    {
        $member = Member::findOrFail($id);
        $member->cv_check = 'Verified';
        $member->save();
        return back()->with('success', 'Success Verify cv');
    }
    public function verifyktm($id)
    {
        $member = Member::findOrFail($id);
        $member->ktp_check = 'Verified';
        $member->save();
        return back()->with('success', 'Success Verify ktm');
    }
    public function rejectPayment($id)
    {
        $users = User::findOrFail($id);
        $users->payments->status = 'Rejected';
        $users->payments->save();
        return back()->with('success', 'Success Reject Payment');
    }
}
