<?php

namespace App\Http\Controllers;

use App\Proposal;
use Illuminate\Http\Request;
use Storage;
use Validator;
use Auth;

class ProposalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('proposal');
    }

    public function download()
    {
        return Storage::download('public/proposal/test.pdf');
    }
    
    public function upload(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'proposal' => 'required|max:2048|mimes:pdf,docx'
        ]);

        $proposal = Proposal::where('user_id', Auth::user()->id)->first();

        if($validator->fails()){
            return back()->with('error', $validator->errors()->first());
        }

        $fileNameWithExt = $request->proposal->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->proposal->getClientOriginalExtension();
        $fileNametoStore = $filename.'_'.time().'.'.$extension;
        if($proposal == null){
            Proposal::create([
                'user_id' => Auth::user()->id,
                'proposal' => $fileNametoStore
            ]);
        }else{
            unlink(storage_path('app/public/proposal/'.$proposal->proposal));
            $proposal->proposal = $fileNametoStore;
            $proposal->save();
        }
        $path= $request->proposal->storeAs('public/proposal', $fileNametoStore);
        return back()->with('success', 'Success Upload Proposal');
    }
}
