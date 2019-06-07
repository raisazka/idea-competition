@extends('admin.layouts.app')

@section('app-title')
<h1 class="text-center col-md-12 col-xs-12 col-lg-4 col-xl-4 text-center">Proposal uploaded</h1>  
@php
$proposal = 0;
foreach($users as $user){
    if($user->proposals != null){
        $proposal++;
    }
}    
@endphp 
<div class="d-flex flex-column black-theme col-md-12 col-xs-12 col-lg-4 col-xl-4 text-center" style="padding:1em;border-radius:1em;">
    <span class="text-warning"><b> Uploaded : {{$proposal}}</b></span>
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
<div class="container mb-5 col-lg-4 col-xl-4 col-md-6 col-xs-12" style="width:90%;">
    <div class="card shadow " style="width: 20rem;">
        <div class="card-body container black-theme">
            <div class="row">
                <p class="col-6">No :</p>
                <p class="col-6">{{$loop->iteration}}</p>
            </div>
            <div class="row">
                <p class="col-6">Group Name :</p>
                <p class="col-6">{{$user->name}}</p>
            </div>
            <div class="row">
                <p class="col-6">Username Name :</p>
                <p class="col-6">{{$user->username}}</p>
            </div>
            <div class="row">
                <p class="col-6">Upload time :</p>
                <p class="col-6">
                    @if($user->proposals!=null)
                        {{$user->proposals->updated_at}}
                    @else
                        belum upload
                    @endif
                </p>
            </div>
            <div class="row @if($user->proposals==null) text-danger @endif ">
                <p class="col-6">Proposal :</p>
                <p class="col-6">@if($user->proposals!=null)<a class="anti-a" href="{{asset('storage/proposal/'.$user->proposals->proposal)}}">{{$user->proposals->proposal}}</a>@else Belum Upload @endif</p>
            </div>
            @if($user->proposals!=null)
            <div class="row @if($user->proposals==null) text-danger @endif ">
                <a class="anti-a" href="{{asset('storage/proposal/'.$user->proposals->proposal)}}">
                    <button class="btn btn-success">Download Proposal</button>
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
@endforeach
@endsection