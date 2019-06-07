@extends('admin.layouts.app')

@section('app-title')
<h1 class="text-center col-md-12 col-xs-12 col-lg-4 col-xl-4 text-center">CV & KTM</h1>  
@php
$cv = 0;
$KTM = 0;
foreach($users as $user){
    foreach ($user->members as $member) {
        if($member->cv != null)
        {
            if($member->cv_check == null)
            {
                $cv++;
            }
        }
        if($member->ktp != null)
        {
            if($member->ktp_check == null)
            {
                $KTM++;
            }
        }
    }
}    
@endphp 
<div class="d-flex flex-column black-theme col-md-12 col-xs-12 col-lg-4 col-xl-4 text-center" style="padding:1em;border-radius:1em;">
    <span class="text-warning"><b> CV belum check : {{$cv}}</b></span>
    <span class="text-danger"> KTM belum check : {{$KTM}}</span>
</div> 
@endsection
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

<div class="row">
@foreach ($users as $user)
    <div class="col-12 row container-fluid my-2 mx-auto pt-4 pb-4 shadow" style="max-width:90%;">
        <h5 class="col-lg-12 col-md-12 col-sm-12" class="small-t"><b> Group Name : </b><u>{{$user->name}} </u></h5>
        <h5 class="col-lg-12 col-md-12 col-sm-12" class="small-t"><b> User name  : </b><u> {{$user->username}}</u> </h5>
    @foreach($user->members as $member)
        <div class="container col-lg-4 col-xl-4 col-md-12 col-xs-12">
            <div class="card shadow " style="width: 90%;">
                    <div class="card-body container black-theme">
                    <h4 class="text-center">{{$member->member_name}}</h4>
                    <div class="row">
                        <p class="col-6">Email :</p>
                        <p class="col-6">{{$member->email}}</p>
                    </div>
                    <div class="row">
                        <p class="col-6">Phone Number :</p>
                        <p class="col-6">{{$member->phone}}</p>
                    </div>
                    <div class="row">
                        <p class="col-6">Line Id :</p>
                        <p class="col-6">{{$member->line}}</p>
                    </div>
                    <div class="row">
                        <p class="col-6">DOB :</p>
                        <p class="col-6">{{$member->dob}}</p>
                    </div>
                    <div class="row">
                        <p class="col-6">KTM :</p>
                        <p class="col-6">@if($member->ktp!=null)<a class="anti-a" href="{{asset('storage/ktp/'.$member->ktp)}}">{{$member->ktp}}</a>@else Belum Upload @endif</p>
                    </div>
                    <div class="row @if($member->cv==null) text-danger @endif ">
                        <p class="col-6">CV :</p>
                        <p class="col-6">@if($member->cv!=null)<a class="anti-a" href="{{asset('storage/cv/'.$member->cv)}}">{{$member->cv}}</a>@else Belum Upload @endif</p>
                    </div>
                    @if($member->ktp!=null)
                        <div class="row  @if($member->ktp_check==null) text-warning @elseif($member->ktp_check=="Verified") text-success @endif ">
                            <p class="col-6">Check KTM :</p>
                            <p class="col-6">@if($member->ktp_check==null) Belum di cek @else{{$member->ktp_check}} @endif</p>
                        </div>
                    @endif
                    @if($member->cv!=null)
                        <div class="row  @if($member->cv_check==null) text-warning @elseif($member->cv_check=="Verified") text-success @endif ">
                            <p class="col-6">Check cv :</p>
                            <p class="col-6">@if($member->cv_check==null) Belum di cek @else{{$member->cv_check}} @endif</p>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12 d-flex justify-content-around mt-2 mb-2">
                            @if($member->ktp!=null&&$member->ktp_check!="Verified")
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verifyktm{{$member->id}}">Verify KTM</button>
                            @endif
                            @if($member->cv!=null&&$member->cv_check!="Verified")
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verifycv{{$member->id}}">Verify CV</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="verifycv{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="verifycv{{$member->id}}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">CV Verification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <p>Are you sure want to verify <b>{{$member->member_name}}</b> cv ? </p>
                        <div class="row d-flex justify-content-around">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <form action="{{route('admin.cv.verify', $member->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Verify</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="verifyktm{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="verifyktm{{$member->id}}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">KTM Verification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <p>Are you sure want to verify <b>{{$member->member_name}}</b> KTM ? </p>
                        <div class="row d-flex justify-content-around">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <form action="{{route('admin.ktm.verify', $member->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Verify</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-12 my-3 text-center">
            <a href="{{route('admin.edit-data',$user->id)}}" class="btn btn-primary "> Edit Group data</a>
        </div>
    </div>
</div>
@endforeach
     
@endsection