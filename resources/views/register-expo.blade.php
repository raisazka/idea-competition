<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expo Registration</title>    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/regis.css')}}">
    <link rel="shortcut icon" href="image/BIC.png">
    <style>
        input{
            color: #EFF3F4!important;
        }
        ::-webkit-input-placeholder { 
            color: #D3D3D3!important;
        }
        ::-moz-placeholder { 
            color: #D3D3D3!important;
        }
        :-ms-input-placeholder { 
            color: #D3D3D3!important;
        }
        :-moz-placeholder { 
            color: #D3D3D3!important;
        }
        select{
            color: #D3D3D3!important;
        }
        #loader {
            position: fixed;
            z-index: 99;
            width: 100%;
            filter: opacity(0);
            height: 100vh;
            background: #556489;
            color: white;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            -webkit-transition:  .5s ease-in-out;
            transition: .5s ease-in-out;
            display: none;
        }
        .img-loaderi{
            width: 15em;
            transform: translateY(-2em);
            animation: logo 2s infinite cubic-bezier(0.280, 0.840, 0.420, 1);
        }
        @keyframes logo {
            0%   { transform: scale(1,1)      translateY(-2em); }
            10%  { transform: scale(1.1,.9)   translateY(-2em); }
            30%  { transform: scale(.9,1.1)   translateY(-6.5em); }
            50%  { transform: scale(1.05,.95) translateY(-2em); }
            57%  { transform: scale(1,1)      translateY(-4em); }
            64%  { transform: scale(1,1)      translateY(-2em); }
            100% { transform: scale(1,1)      translateY(-2em); }
        }
    </style>
</head>
<body class="expo-regis-body">
    <div id="loader">
        <img src="image/BIC.png" class="img-fluid img-loaderi" alt="">
        <h2 class="text-center" style="border:none;">Please wait for a while</h2>
    </div>
    <img src="image/wave_atas_expo.png" class="wave wave_atas">
@if ($errors->any())
    <div class="alert alert-danger" style="transform:translateY(-3.5em);">
        There is something wrong !!!
    </div>    
@endif
    <form action="{{route('expo.store')}}" class="form-form-form" method="POST" style="width:100%;">
        @csrf
        
        <div class="container-fluid form-container">
                <div class="row ">
                    <div class="animate-logo content-promosi content-promosi-expo text-center container col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <a href="http://bic.bncc.net/">
                            <img src="image/BIC.png" alt="bic" class="img-fluid bic-logo-expo">
                        </a>
                        <h5>With</h5>
                        <a href="https://www.tiket.com/" target="_blank">
                            <img src="image/tiket.png" alt="" class="tiket-logo">
                        </a>
                    </div>
                    <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 ">        
                        <h2 class="container">Expo Registration</h2>
                        <div class="row">
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" id="name" placeholder="Full Name" required autofocus>
                                <span class="name_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @endif
                                </span>
                            </div>
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <label for="Whatsapp">Phone Number</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="Whatsapp" value="{{ old('phone') }}" autocomplete="phone" placeholder="Phone Number" required autofocus>
                                <span class="phone_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('phone'))
                                        {{ $errors->first('phone') }}
                                    @endif
                                </span>
                            </div>
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <label for="email">E-Mail</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Email Address" required autofocus>
                                <span class="email_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('email'))
                                        {{ $errors->first('email') }}
                                    @endif
                                </span>
                            </div>              
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" style="color:#EFF3F4" min="1950-01-01" max="2019-01-01" name="dob" value="{{ old('dob') }}" class="form-control  @error('dob') is-invalid @enderror" id="dob" placeholder="Date Of Birth" required autofocus>
                                <span class="dob_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('dob'))
                                        {{ $errors->first('dob') }}
                                    @endif
                                </span>
                            </div>
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-gender">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                    <option value="male" style="color:#181818;">Male</option>
                                    <option value="female" style="color:#181818;">Female</option>
                                </select>
                                <span class="gender_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('gender'))
                                        {{ $errors->first('gender')}}
                                    @endif
                                </span>
                            </div>
                            <div class="small-justify-center d-flex col-md-4 col-lg-4 col-sm-12 col-xs-12 align-items-end justify-content-end">
                                <button class="btn-regis btn-regis-expo"  id="btn-register" type="button">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </form>
<img src="image/wave_bawah_expo.png" class="wave wave_bawah">
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/regis-expo.js')}}"></script>
</body>
</html>

