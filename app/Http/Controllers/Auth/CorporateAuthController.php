<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use User;

class CorporateAuthController extends Controller
{

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:corporate')->except('logout');
    }

    public function login()
    {
        return view('corporate.auth.login');
    }

    public function loginCorporate(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
          ]);
            
          if(Auth::guard('corporate')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
              return redirect()->intended(route('corporate.dashboard'));
          }

          return back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('corporate')->logout();
        return redirect()->route('corporate.auth.login');
    }
}
