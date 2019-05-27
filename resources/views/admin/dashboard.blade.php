@extends('admin.layouts.app')

@section('content')
<div class="container">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
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
                            <th scope="col">Payment</th>
                            <th scope="col">Verify</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>
                                <a href="{{asset('storage/payment/'.$user->payments->payment)}}">
                                    <img src="{{asset('storage/payment/'.$user->payments->payment)}}" alt="no-image" height="100" width="200">
                                </a>
                            </td>
                            <td>
                            <form action="{{route('admin.verify', $user->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success"{{$user->payments->status == 'Verified' ? 'disabled':'' }}>Verify</button>
                            </form>
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