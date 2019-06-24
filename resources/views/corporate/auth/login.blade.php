<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contestant Login</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/regis.css')}}">
<link rel="shortcut icon" href="image/BIC.png">
    <style>
        #grup > .row > .input-container, #member1 > .row > .input-container{
            padding: 2em;
            border-radius: inherit;
            background: white;
            border-radius: 20px;
            background: none;
        }
        .input-container > h1{
            margin-bottom: .5em;
        }
    </style>
</head>
<body>
<img src="{{asset('image/wave_atas.png')}}" class="wave wave_bawah">
    <form method="POST" action="{{ route('corporate.auth.loginCorporate') }}">
        @csrf
        <div class="content-promosi text-center container">
            <h1>Dashboard Login</h1>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success text-center">
                {{session()->get('success')}}
            </div>
            @endif
        <div class="container-fluid form-container" id="grup">
            <div class="row">
                <div class="container-fluid gambar-input col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <a href="http://bic.bncc.net/">
                        <img src="{{asset('image/BIC.png')}}" alt="bic" class="img-fluid bic-logo">
                    </a>
                </div>
        <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 order-sm-last order-xs-last">
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="username">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="username"  placeholder="Example@bncc.net" required autofocus >
                            <span class="line_wrong" style="color:red; font-weight:700; font-size: .8em">
                                 @error('email')
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </span>
                        </div>
                        <div class="form-group col-12">
                            <label for="password">Password</label>                            
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="passwords"  name="password" autocomplete="current-password"  placeholder="Enter Password"  required autofocus >
                            <span class="pass_wrong" style="color:red; font-weight:700; font-size: .8em">
                                 @error('password')
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </span>
                        </div>
                    </div>
                    <button class="btn btn-regis" id="btn-login">Login</button>
                </div>
            </div>
        </div>
    </form>
    
<img src="{{asset('image/wave_bawah.png')}}" class="wave wave_bawah">
    <script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/login.js')}}"></script>
</body>
</html>
