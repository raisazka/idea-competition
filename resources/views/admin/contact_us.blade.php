@php
$read = 0;
foreach($contactus as $contact){
    if($contact->viewed == 1){
        $read++;
    }
}    
@endphp
@extends('admin.layouts.app')

@section('app-title')
<h1 class="text-center col-md-12 col-xs-12 col-lg-4 col-xl-4 text-center">Contact Us</h1>   
<div class="d-flex flex-column black-theme col-md-12 col-xs-12 col-lg-4 col-xl-4 text-center" style="padding:1em;border-radius:1em;">
<h4 class="text-primary">Haven't read : {{$read}}</h4>
<h4 class="text-secondary">Total Message : {{count($contactus)}}</h4>
</div> 
@endsection
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
<div class="row">
@foreach ($contactus as $contact_us)
<div class="container mb-5 col-lg-6 col-xl-6 col-md-6 col-xs-12">
    <div class="card shadow-lg position-card">
        <div class="numbering">
            {{($loop->index+1)}}
        </div>
        <div class="card-body @if($contact_us->viewed==1) bg-primary @else bg-secondary @endif  black-theme">
            <div class="p-2">
                <div class="row">
                    <p class="col-6">Nama Pengirim :</p>
                    <p class="col-6">{{$contact_us->name}}</p>
                </div>
                <div class="row">
                    <p class="col-6">E-mail :</p>
                    <p class="col-6">{{$contact_us->email}}</p>
                </div>
                <div class="row">
                    <p class="col-6">Subject :</p>
                    <p class="col-6">{{$contact_us->subject}}</p>
                </div>
                <div class="row">
                    <p class="col-12 m-0">message :</p>
                    <p class="col-12 font-weight-bold">{{$contact_us->message}}</p>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-around mt-2 mb-2">
                    <form action="{{route('admin.readmessage')}}" method="POST">
                        @csrf
                        @if($contact_us->viewed==1)
                                <input type="hidden" value="{{$contact_us->id}}" name="id">
                                <input type="submit" class="btn btn-success" value="read" name="message">
                            @elseif($contact_us->viewed==2)
                                <input type="hidden" value="{{$contact_us->id}}" name="id">
                                <input type="submit" class="btn btn-danger" value="unread" name="message">
                        @endif
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endforeach
@endsection