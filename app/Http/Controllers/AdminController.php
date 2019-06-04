<?php

namespace App\Http\Controllers;

use App\User;
use App\Member;
use App\ContactUs;
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
    
    public function viewMember()
    {
        $members = Member::all();
        return view('admin.dashboard-2', compact('members'));
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
