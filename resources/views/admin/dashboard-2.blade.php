@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Admin's</strong> Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Group Name</th>
                            <th scope="col">Name</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Whatsapp</th>
                            <th scope="col">KTP</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($members as $member)
                            <td>{{$loop->iteration}}</td>
                            <td>{{$member->users->name}}</td>
                            <td>{{$member->member_name}}</td>
                            <td>{{$member->email}}</td>
                            <td>{{$member->phone}}</td>
                            <td>
                                <a href="{{asset('storage/ktp/'.$member->ktp)}}">
                                <img src="{{asset('storage/ktp/'.$member->ktp)}}" alt="no-image" height="50" width="100">
                                </a>
                            </td>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('admin.dashboard')}}">View User Payment</a>
    <br>
    <a href="{{route('admin.member')}}">View Members</a>
</div>
@endsection