@extends('admin.layouts.app')

@section('app-title')
<h1 class="text-center col-md-12 col-xs-12 col-lg-4 col-xl-4 text-center">Contact Us</h1>   
<div class="d-flex flex-column black-theme col-md-12 col-xs-12 col-lg-4 col-xl-4 text-center" style="padding:1em;border-radius:1em;">
</div> 
@endsection
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
<div class="row">
@foreach ($contactus as $contactus)
<div class="container mb-5 col-lg-3 col-xl-3 col-md-6 col-xs-12">
    <div class="card shadow " style="width: 20rem;">
        <div class="card-body container black-theme">
            <div class="row">
                <p class="col-6">No :</p>
                <p class="col-6">{{$loop->iteration}}</p>
            </div>
            <div class="row">
                <p class="col-6">Nama Pengirim :</p>
                <p class="col-6">{{$contactus->name}}</p>
            </div>
            <div class="row">
                <p class="col-6">E-mail :</p>
                <p class="col-6">{{$contactus->email}}</p>
            </div>
            <div class="row">
                <p class="col-6">Subject :</p>
                <p class="col-6">{{$contactus->subject}}</p>
            </div>
            <div class="row">
                <p class="col-6">message :</p>
                <p class="col-6">{{$contactus->message}}</p>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-around mt-2 mb-2">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verify{{$loop->iteration}}">Verify</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reject{{$loop->iteration}}">Rejected</button>
                    
                        <h3 class="alert alert-danger">Something is Wrong</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="verify{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="verify{{$loop->iteration}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Verification</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endforeach
@endsection