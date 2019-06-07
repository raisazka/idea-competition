@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            {{$errors->first()}}
        </div>    
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="container">
                <form action="{{route('expo.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">E-Mail</label>
                        <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter E-mail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">DOB</label>
                        <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter DOB">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <select class="form-control" name="gender" id="">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection