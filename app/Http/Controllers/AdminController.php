<?php

namespace App\Http\Controllers;

use App\User;
use App\Member;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentMail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::whereHas('payments')->get();
        return view('admin.dashboard', compact('users'));
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
        Mail::to($users->members[0]->email)->send(new PaymentMail);
        return back()->with('success', 'Success Verify Payment');
    }
}
