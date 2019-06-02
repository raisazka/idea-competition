<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('image/BIC.png')}}">
    <link href="{{asset('fontawesome-free-5.8.2-web/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-free-5.8.2-web/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-free-5.8.2-web/css/solid.css')}}" rel="stylesheet">
    <meta name="keywords" content="BNCC Idea Competition,Business IT case,Business IT case Indonesia,BNCC">
    <meta name="description" content="Influence Business Through Innovative Idea">
    <meta name="title" content="BNCC Idea Competition">
    {{-- <meta name="image" content="{{asset('image/BIC.png')}}"> --}}
    {{-- <meta property="og:title" content="BNCC Idea Competition"> --}}
    {{-- <meta property="og:description" content="Influence Business Through Innovative Idea"> --}}
    <meta property="og:image" content="{{asset('image/BIC.png')}}">
    {{-- <meta property="og:type" content="Website"> --}}
    <meta property="og:url" content="http://bic.bncc.net/">
    {{-- <meta property="og:site_name" content="BNCC Idea Competition">
    <meta name="twitter:title" content="BNCC Idea Competition">
    <meta name="twitter:description" content="Influence Business Through Innovative Idea">
    <meta name="twitter:image" content="http://bic.bncc.net/">
    <meta name="twitter:card" content="{{asset('image/BIC.png')}}">
    <meta name="twitter:card" content="summary_large_image"> --}}
    <meta name="theme-color" content="#bfc6d8"/>
    <title>Document</title>
<style>
    body,html{
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        margin: 0;
        overflow-x: hidden;
    }
    img{
        width: 100%;
    }
    .wave_bawah{
        transform: translateY(0);
    }
    .wave_atas{
        transform: translateY(0);
    }
    .container-404{
        text-align: center;
        width: 
    }
    .img-fluid{
        max-width: 40%;   
    }  
    @media only screen and (max-width:500px){
        .wave_bawah{
        transform: translateY(-1em) scale(2);
        }
        .wave_atas{
            transform: translateY(1em) scale(2);
        } 
        .container-404{
            text-align: center;
        }
        .img-fluid{
            max-width: 90%;   
        }  
    }
</style>
</head>
<body>
    <img src="image/wave_atas.png" class="wave wave_atas">
    <div class="container-404">
    <a href="{{url('/')}}"><img src="image/404.png" class="img-fluid" alt=""></a> 
    </div>
    <img src="image/wave_bawah.png" class="wave wave_bawah">
</body>
</html>