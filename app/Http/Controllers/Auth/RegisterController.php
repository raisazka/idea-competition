<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function registerUser(Request $request)
    {

       $validator = Validator::make($request->all(),[
            "name"  => "required|string|min:5",
            "username" => 'required|string|alpha_dash|distinct|unique:users,username',
            "password" => 'required|string|min:6',
            "member_name.*" => 'required|max:255',
            "email.*" => 'required|email|distinct|unique:members,email',
            "phone.*" => 'required|max:12|distinct|unique:members,phone',
            "line.*" => 'required|max:255|distinct|unique:members,line',
            "dob.*" => 'required|date',
            "ktp.*" => 'required'
        ]);
        
       $name = $request->name;
       $username = $request->username;
       $password = $request->password;
       $m_name = $request->member_name;
       $email = $request->email;
       $dob = $request->dob;
       $phone = $request->phone;
       $line = $request->line;
       $ktp = $request->file('ktp');
       
       $count = count($email);
       if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        
        $group = new User;
        $group->name = $name;
        $group->username = $username;
        $group->password = Hash::make($password);
        $group->save();
       for($i=0; $i < $count; $i++){
        $fileNameWithExt[] = $ktp[$i]->getClientOriginalName();
        $filename[] = pathinfo($fileNameWithExt[$i], PATHINFO_FILENAME);
        $extension = $ktp[$i]->getClientOriginalExtension();
        $fileNametoStore[] = $filename[$i].'_'.time().'.'.$extension;
        $path[]= $ktp[$i]->storeAs('public/ktp', $fileNametoStore[$i]);
        $group->members()->create([
            'member_name' => $m_name[$i],
            'email' => $email[$i],
            'dob' => $dob[$i],
            'phone' => $phone[$i],
            'line' => $line[$i],
            'ktp' => $fileNametoStore[$i],
        ]);
       }   
       return redirect()->route('login');
    }
}
