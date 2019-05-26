<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Validator;
use Hash;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('edit-group', compact('user'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);
        $users = User::where('id', Auth::user()->id)->first();

        $users->update([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return back()->with('success', 'Success Update Group Data');
    }
}
