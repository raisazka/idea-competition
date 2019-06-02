@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif
    <form action="{{route('forget-password')}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Enter Group Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Leader DOB</label>
          <input type="date" class="form-control" id="exampleInputPassword1" name="dob" placeholder="Enter Leader DOB">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection