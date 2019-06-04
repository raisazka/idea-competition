<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>
<body>
    @if(count($users)<=0)
    <h1>Belum ada user yang regis sabar Admin!!!</h1>
    @else
    @guest('admin')
        <a href="{{ route('admin.auth.login') }}">Login</a>
    @else
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <span class="navbar-brand">Admin BIC</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @php
                $cont = 0;
                $pending = 0;
                $ktp = 0;
                $cv = 0;
                $proposal = 0;
                foreach($users as $user){
                    if($user->payments != null){
                        if($user->payments->status == "Pending"){
                            $pending++;
                        }
                        
                    }
                    if($user->proposals != null){
                        $proposal++;
                    }
                    foreach($user->members as $member){
                        if($member->cv != null)
                        {
                            if($member->cv_check == null)
                            {
                                $cv++;
                            }
                        }
                        if($member->ktp != null)
                        {
                            if($member->ktp_check == null)
                            {
                                $ktp++;
                            }
                        }
                    }
                }
                @endphp 
                <li class="nav-item">
                <a class="nav-link" href="{{route('admin.auth.login')}}">Payment <span class="ml-1 mr-1 badge badge-pill badge-danger">{{$pending}}</span><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.cv_check')}}">CV & KTM<span class="ml-1 mr-1 badge badge-pill badge-danger">{{$cv+$ktp}}</span><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.proposal_check')}}">Proposal Uploaded<span class="ml-1 mr-1 badge badge-pill badge-success">{{$proposal}}</span><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" >Contact us<span class="ml-1 mr-1 badge badge-pill badge-danger">{{count($contactus)}}</span><span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <a class="btn anti-a nav-item btn-rounded btn-danger color-white" href="{{ route('admin.auth.logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                Log Out &rarr;
            </a>
            <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @endguest
        </div>
    </nav>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center row" style="margin:3em 0;">
        <h3 class="col-md-12 col-xs-12 col-lg-4 col-xl-4 text-center">Registered : {{count($users)}} Team</h3>
            @yield('app-title')
        </div>
        @yield('content')
    </div>
@endif
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>