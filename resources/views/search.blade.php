@extends('layouts.app')

@section('content')
    <div class="container">
            @if(Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
        @endif
        <form action="{{route('member.search')}}">
            @csrf
            <input type="text" name="otp" class="form-control" placeholder="Input OTP Code">
            <button class="btn btn-primary" style="margin-top:20px; ">Search</button>
        </form>
    </div>
@endsection