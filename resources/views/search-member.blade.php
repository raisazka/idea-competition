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
            <input type="text" name="otp" class="form-control">
            <button class="btn btn-primary">Search</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>Booth Name</th>
                    <th>Area</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members->attend as $member)
                    <tr>
                    <td>{{$member->corporates->name}}</td>
                    <td>{{$member->corporates->area}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection