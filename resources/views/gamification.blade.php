@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
        @endif
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <form action="{{route('gamification.play')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">OTP Code</label>
                <input type="text" class="form-control" name="otp">
                <span class="line_wrong" style="color:red; font-weight:700; font-size: .8em">
                    @if ($errors->has('otp'))
                        {{ $errors->first('otp') }}
                    @endif
               </span>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection