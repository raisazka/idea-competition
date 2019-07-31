<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use User;

class ContestantAuthController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:contestant')->except('logout');
    }

    public function login()
    {
        return view('contestant.auth.login');
    }

    public function loginContestant(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
          ]);
            
          if(Auth::guard('contestant')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
              return redirect()->intended(route('contestant.dashboard'));
          }

          return back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('contestant')->logout();
        return redirect()->route('contestant.auth.login');
    }
}
