@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                       
                    <hr>
                    @foreach ($members as $member)
                        @if($loop->first)
                        <h2>Leader</h2>
                        @else
                        <h2>Member</h2>
                        @endif
                    <form action="{{route('member.update', $member->id)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                            <div class="row">
                            <div class="col-lg-6" id="member{{$member->id}}">
                                    <label for="member_name">Member Name</label>
                                        <input id="member_name" type="text" class="form-control" name="member_name" placeholder="Member Name" value="{{$member->member_name}}">
                                            <label for="email">E-Mail</label>
                                        <input id="email" type="text" class="form-control" name="email" placeholder="Member E-mail" value="{{$member->email}}">
                                    <label for="phone">Phone Number</label>
                                <input id="phone" type="text" class="form-control" name="phone" placeholder="Member Phone" value="{{$member->phone}}">
                            </div>
                                <div class="col-lg-6">
                                        <label for="dob">DOB</label>
                                        <input id="dob" type="date" class="form-control" name="dob" placeholder="Date of Birth" value="{{$member->dob}}">
                                        <label for="line">Line</label>
                                            <input id="line" type="text" class="form-control" name="line" placeholder="Line ID" value="{{$member->line}}">
                                        <label for="ktp">KTP</label>
                                    <input id="ktp" type="file" class="form-control" name="ktp" placeholder="KTP">
                                    <label for="cv">CV</label>
                                    <input id="cv" type="file" class="form-control" name="cv" placeholder="CV">
                                    </div>
                                </div>
                                <button class="btn" type="submit">Update</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<a href="{{route('proposal.index')}}">Upload Proposal</a>
<a href="{{route('payment.index')}}">Upload Payment</a>
<a href="{{route('group.index')}}">Edit Group</a>
</div>
@endsection
