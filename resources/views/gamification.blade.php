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
        .bola2{
            width: 30em;
            height: 30em;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: rgba(255, 255, 255, 0.4);
            border-radius: 100%;
            
        }
        @media only screen and (max-width:500px) 
        {
            .bola2{
                width: 24em;
                height: 24em;
                margin-bottom: 0;
            }
        }
        .context h1{
    text-align: center;
    color: #fff;
    font-size: 50px;
}


.area{
    width: 100%;
    height: 100vh;
    background-color: rgba(115, 101, 152, 1);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 2000;

}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: -1;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px; 
    background-color: rgba(255, 255, 255, .6);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}
.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}
ul {
    padding: 0;
    margin: 0;
}
        </style>
</head>
<body>
    
        <div class="area" >
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
        <h1 style="border:none; color:white"> Game Booth</h1>
        <form action="{{route('gamification.play')}}" method="POST" class="bola2" style="color:white !important;">
            @csrf
            <div class="form-group">
                    <label for="exampleFormControlInput1" ><h1 style="border:none;">Input OTP Code</h1></label>
                    <input type="text" class="form-control" style="border-color:white !important; color:white" name="otp">
                    <span class="line_wrong" style="color:red; font-weight:700; font-size: .8em">
                        @if ($errors->has('otp'))
                            {{ $errors->first('otp') }}
                        @endif
                   </span>
                </div>
                <button type="submit" class="btn btn-lg btn-success">Submit</button>
        </form>

            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/dashboard-home.js')}}"></script>
</body>
</html>