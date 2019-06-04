@extends('admin.layouts.app')

@section('app-title')
<h1 class="text-center col-md-12 col-xs-12 col-lg-4 col-xl-4 text-center">Payment</h1>  
@php
$pending = 0;
$verified = 0;
$belum = 0;
foreach($users as $user){
    if($user->payments != null){
        if($user->payments->status == "Pending"){
            $pending++;
        }
        elseif ($user->payments->status == "Verified") {
            $verified++;
        }
    }
    elseif($user->payments == null){
        $belum++;
    }
}    
@endphp 
<div class="d-flex flex-column black-theme col-md-12 col-xs-12 col-lg-4 col-xl-4 text-center" style="padding:1em;border-radius:1em;">
    <span class="text-warning"><b> Pending : {{$pending}}</b></span>
    <span class="text-success"> Verified : {{$verified}}</span>
    <span class="text-danger"> belum bayar : {{$belum}}</span>
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
<div class="container mb-5 col-lg-3 col-xl-3 col-md-6 col-xs-12">
    <div class="card shadow " style="width: 20rem;">
        @if($user->payments!=null)
        <a class="anti-a" href="{{asset('storage/payment/'.$user->payments->payment)}}">
            <img class="card-img-top" src="{{asset('storage/payment/'.$user->payments->payment)}}" alt="no-image" height="100" width="200">
        </a>
        @else
        <h2 class="text-danger text-center">Belum transfer</h2>
        @endif
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
                <p class="col-6">Payment time :</p>
                <p class="col-6">
                    @if($user->payments!=null)
                        {{$user->payments->updated_at}}
                    @else
                        belum upload
                    @endif
                </p>
            </div>
            <div class="row">
                <p class="col-6">Payment Status :</p>
                <p class="col-6 
                    @if($user->payments==null)text-danger 
                    @elseif($user->payments->status == "Verified") text-success 
                    @elseif($user->payments->status == "Pending") text-warning 
                    @else text-danger @endif ">
                        @if($user->payments!=null)
                            {{$user->payments->status}}
                        @else 
                            Belum bayar 
                        @endif
                </p>
            </div>
            <div class="row">
                <p class="col-6">Payment :</p>
                <p class="col-6">@if($user->payments!=null)<a class="anti-a" href="{{asset('storage/payment/'.$user->payments->payment)}}">{{$user->payments->payment}}</a>@else Belum bayar @endif</p>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-around mt-2 mb-2">
                    @if($user->payments == null)
                        <h2>Belum bayar</h2>
                    @elseif($user->payments->status == "Pending")
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verify{{$loop->iteration}}">Verify</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reject{{$loop->iteration}}">Rejected</button>
                    @elseif($user->payments->status == "Verified")
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reject{{$loop->iteration}}">Rejected</button>
                    @elseif($user->payments->status == "Rejected")
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verify{{$loop->iteration}}">Verify</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reject{{$loop->iteration}}">Rejected</button>                    
                    @else
                        <h3 class="alert alert-danger">Something is Wrong</h3>
                    @endif
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
        <div class="modal-body">
            <div class="container-fluid">
                <p>Are you sure want to verify <b>{{$user->name}}</b> with username <b>{{$user->username}} ?</b>  </p>
                <div class="row d-flex justify-content-around">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <form action="{{route('admin.verify', $user->id)}}" method="POST">
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
<div class="modal fade" id="reject{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="reject{{$loop->iteration}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Rejection</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <p>Are you sure want to Reject <b>{{$user->name}}</b> with username <b>{{$user->username}} ?</b>  </p>
                <div class="row  d-flex justify-content-around">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <form action="{{route('admin.reject', $user->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger">Reject</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endforeach
@endsection