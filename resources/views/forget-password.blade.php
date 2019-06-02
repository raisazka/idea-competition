<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
<link rel="stylesheet" href="{{asset('css/regis.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
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
    body{
      height: 100vh;
    }
    html{
      height: 100vh;
    }
</style>
</head>
<body>
    <img src="image/wave_atas.png" class="wave wave_bawah">
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
    <form action="{{route('forget-password')}}" method="POST" style="max-width:90%;">
        @csrf
        @method('PATCH')
        <div class="container-fluid form-container" id="grup">
            <div class="row">
            <div class="container input-container col-lg-12 col-md-12 col-sm-12 col-xs-12 order-sm-last order-xs-last">
                    <h1>Reset Password</h1>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="username">Username</label>
                            <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" name="username" value="{{ old('username') }}" placeholder="Enter Group Username" required autofocus >
                            <span class="line_wrong" style="color:red; font-weight:700; font-size: .8em">
                                 @error('username')
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </span>
                        </div>
                        <div class="form-group col-12">
                            <label for="password">Leader's DOB</label>                            
                            <input type="date" class="form-control @error('dob') is-invalid @enderror" id="password"  name="dob" autocomplete="current-password"  placeholder="Leader's DOB"  required autofocus >
                            <span class="pass_wrong" style="color:red; font-weight:700; font-size: .8em">
                                 @error('dob')
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </span>
                        </div>
                    </div>
                    <button class="btn-regis" id="btn-login" type="submit">Reset password</button>
                </div>
            </div>
        </div>
      </form>
      <img src="image/wave_bawah.png" class="wave wave_bawah">
</body>
</html>