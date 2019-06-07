<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/regis.css')}}">
    <link href="{{asset('fontawesome-free-5.8.2-web/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-free-5.8.2-web/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-free-5.8.2-web/css/solid.css')}}" rel="stylesheet">
    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            {{$errors}}
        </div>
    @endif
    <div class="text-right" >
            <button type="button" class="btn btn-success float-button" data-toggle="modal" data-target="#exampleModalLong">
                Update Data <i class="fas fa-pen"></i>
            </button>
        </div>
        <form id="logout-form" action="{{ route('admin.update_data') }}" method="POST" style="width:100%;height:100vh;">
                @csrf
                @method('PATCH')
        <input type="hidden" value="{{$user->id}}" name="user_id">
<div class="container-fluid form-container">
    <div class="row">
        <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
            <h2 class="container">Group</h2>
            <div class="row">
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <label for="Group">Group Name</label>
                    <input type="text" class="form-control" id="Group" name="name" value="{{ $user->name }}" autocomplete="name" placeholder="Group Name" required autofocus>
                    <span class="name_wrong" style="color:red; font-weight:700; font-size: .8em">
                        @if ($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                    </span>
                </div>
                <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <label for="username">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ $user->username }}" placeholder="Username" autocomplete="username" required autofocus >
                    <span class="line_wrong" style="color:red; font-weight:700; font-size: .8em">
                        @if ($errors->has('username'))
                            {{ $errors->first('username') }}
                        @endif
                    </span>
                </div>
                <div class="form-group col-12">
                    <label for="c-password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="c-password"  name="password" placeholder="isi kalau mau Password ganti" autofocus>
                </div>
            </div>
        </div>
    </div>
    @foreach ($user->members as $member)
    <div class="row my-5">
        <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
            <h2 class="container">Member {{$loop->index+1}}</h2>
            <div class="row">
                <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control @error('member_name.{{$loop->index}}') is-invalid @enderror" value="{{$member->member_name}}" autocomplete="member_name" name="member_name[{{$loop->index}}]" id="name" placeholder="Full Name" required autofocus>
                </div>
                <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label for="Whatsapp">WhatsApp Number</label>
                    <input type="text" class="form-control @error('phone.{{$loop->index}}') is-invalid @enderror" id="Whatsapp" value="{{$member->phone}}" autocomplete="phone" name="phone[{{$loop->index}}]" placeholder="WhatsApp Number" required autofocus>
                </div>
                <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email.{{$loop->index}}') is-invalid @enderror" name="email[{{$loop->index}}]" id="email" value="{{ $member->email }}" aria-describedby="emailHelp" placeholder="Email Address" required autofocus>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label for="Line">Line Id</label>
                    <input type="text" class="form-control @error('line.{{$loop->index}}') is-invalid @enderror" id="Line" name="line[{{$loop->index}}]" value="{{ $member->line }}" placeholder="Line Id" required autofocus>
                </div>
                <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" min="1997-01-01" max="2002-01-01" name="dob[{{$loop->index}}]" value="{{ $member->dob }}" class="form-control  @error('dob.{{$loop->index}}') is-invalid @enderror" id="dob" placeholder="Date Of Birth" required autofocus>
                </div>
                <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-ktp">
                    <label for="ktp">Kartu Mahasiswa</label>
                <p class="font-weight-bold">{{$member->ktp}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</form>
<div class="form-form-form">
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="border:none">
                    <div class="modal-header" style="border:none">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center" >
                        <h3>Are you sure want update the data ?</h3>
                    </div>
                    <div class="modal-footer d-flex justify-content-between" style="border:none">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Update</button>
                    </div>
                </div>
            </div>
        </div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>