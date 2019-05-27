<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/regis.css')}}">
    <style>
        #grup > .row > .input-container, #member1 > .row > .input-container{
            padding: 2em;
            border-radius: inherit;
            background: white;
            border-radius: 20px;
            background: none;
        }
        .wave{
            animation: wavy 5s ease-in-out infinite;
        }
        .input-container > h1{
            margin-bottom: .5em;
        }
    </style>
</head>
<body>
    <img src="image/wave_atas.png" class="wave wave_bawah">
    <form action="{{url('login')}}" method="POST">
        @csrf
        <div class="content-promosi text-center container">
            <img src="image/BIC.png" alt="bic" class="img-fluid bic-logo">
            <h1>With</h1>
            <img src="image/tiket.png" alt="">
            <h3>BNCC Idea Competition</h3>
            <h3>Solve The Case WIth Your Best It Solution</h3>
            <h3>Registration Deadline : 12 june 2019</h3>
        </div>
        <div class="container-fluid form-container" id="grup">
            <div class="row">
                <div class="container-fluid gambar-input col-lg-4 col-md-4 col-sm-12 col-xs-12 "> <img src="image/team.png" class="img-fluid" alt="hello"> </div>
            <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 order-sm-last order-xs-last">
                    <h1>Login</h1>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="username">Username</label>
                            <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus >
                            <span class="line_wrong" style="color:red; font-weight:700; font-size: .8em">
                                 @error('username')
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </span>
                        </div>
                        <div class="form-group col-12">
                            <label for="password">Password</label>                            
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"  name="password" autocomplete="current-password"  placeholder="Enter Password"  required autofocus >
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
        <div class="container-fluid form-container " id="info">
            <div class="row" >
            <a class="col-12 text-right" href="{{url('regis')}}" >
                <h5  style="text-decoration:underline; cursor:pointer;" id="try">don't have account? register now</h5>
            </a>
            </div>
        </div>
    </form>
    
    <img src="image/wave_bawah.png" class="wave wave_bawah">
    <script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/login.js')}}"></script>
</body>
</html>