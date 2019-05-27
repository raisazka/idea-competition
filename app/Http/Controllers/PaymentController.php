<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Validator;
use Auth;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $payment = Payment::where('user_id', Auth::user()->id)->first();
        return view('payment', compact('payment'));
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'payment' => 'required|max:2048|mimes:jpg,jpeg,png'
        ]);
            
        if($validator->fails()){
            return back()->with('error', $validator->errors()->first());
        }

        $payment = Payment::where('user_id', Auth::user()->id)->first();

        $fileNameWithExt = $request->payment->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->payment->getClientOriginalExtension();
        $fileNametoStore = $filename.'_'.time().'.'.$extension;
        $path= $request->payment->storeAs('public/payment', $fileNametoStore);

        if($payment == null){
            Payment::create([
                'user_id' => Auth::user()->id,
                'payment' => $fileNametoStore,
                'status' => 'Pending'
            ]);
        }else{
            unlink(storage_path('app/public/payment/'.$payment->payment));
            $payment->payment = $fileNametoStore;
            $payment->save();
        }
        return back()->with('success', 'Success Upload payment');
    }
}
