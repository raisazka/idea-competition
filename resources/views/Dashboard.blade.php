<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/regis.css">
    <link href="{{asset('fontawesome-free-5.8.2-web/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-free-5.8.2-web/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-free-5.8.2-web/css/solid.css')}}" rel="stylesheet">
</head>
<body>
    <img src="image/wave_atas.png" class="wave wave_atas">
    <div class="form-form-form">
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border:none">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center" >
                        <h3>Are you sure want to log out ?</h3>
                    </div>
                    <div class="modal-footer d-flex justify-content-between" style="border:none">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Log Out</button>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-promosi text-center container">
            <a href="{{url('/')}}">
                <img src="image/BIC.png" alt="bic" class="img-fluid bic-logo">
            </a>
            <h1>With</h1>
            <a href="https://www.tiket.com/" target="_blank">
                <img src="image/tiket.png" alt="">
            </a>
            <h3>BNCC Idea Competition</h3>
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif
        </div>
        <div class="text-right" >
            <button type="button" class="btn btn-danger float-button" data-toggle="modal" data-target="#exampleModalLong">
                Log Out <i class="fas fa-sign-out-alt"></i>
            </button>
        </div>
        <div class="container-fluid form-container" id="grup">
            <div class="row">
                <div class="container-fluid gambar-input col-lg-4 col-md-4 col-sm-12 col-xs-12 "> <img src="image/team.png" class="img-fluid" alt="hello"> </div>
                <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 order-sm-first order-xs-first">
                    <h1>Grup</h1>
                    <div class="row">
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <label for="Group">Group Name</label>
                            <input disabled style="border-radius:0; border:none;font-weight:900;font-size:1.5em;padding:6px 0;" type="text" class="form-control" id="Group" name="name" value="{{$user->name}}" autocomplete="name" placeholder="Group Name" required autofocus>
                        </div>
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <label for="username">Username</label>
                            <input disabled style="border-radius:0; border:none;font-weight:900;font-size:1.5em;padding:6px 0;" type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" placeholder="Username" autocomplete="username" required autofocus >
                        </div>
                    </div>
                    <div class="row d-md-flex d-lg-flex align-items-md-end align-items-lg-end">
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <label for="Group">Payment status</label><br>
                            <span @if($user->payments == null || $user->payments->status == "Rejected")class="text-danger" @elseif($user->payments->status == "Pending") class="text-warning-dark" @elseif($user->payments->status == "Verified") class="text-success" @else class="text-danger" @endif style="border-radius:0; border:none;font-weight:900;font-size:1em;padding:6px 0;" >
                                @if($user->payments == null)
                                You have not paid. Please do your payment before 13 June 2019 to access the case.
                                @elseif($user->payments->status == "Pending")
                                    your payment is waiting to be Verified
                                @elseif($user->payments->status == "Verified")
                                    Your payment is Verified 
                                @elseif($user->payments->status == "Rejected")
                                    Your Payment is Rejected please check it again
                                @else
                                    Something is wrong
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            @if($user->payments == null || $user->payments->status == "Rejected")
                                <a href="{{route('payment.index')}}" class="anti-a"> <button class="button-payment">Pay Now</button></a>
                            @elseif($user->payments->status == "Pending")
                                <i class="fas fa-clock text-warning-dark" style="font-size:2em"></i>
                            @elseif($user->payments->status == "Verified")
                                <i class="fas fa-check-circle text-success" style="font-size:2em"></i>
                            @endif

                        </div>
                    </div>
                @if($user->payments == null)
                @elseif($user->payments->status == "Verified")    
                    <div class="row d-md-flex d-lg-flex align-items-md-center align-items-lg-center">    
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <label for="Group">Proposal Tempalte</label><br>
                            <span style="border-radius:0; border:none;font-weight:900;font-size:1em;padding:6px 0;" >Template yang harus dipakai dalam pegerjaan case BIC</span>
                        </div>
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <a href="{{route('proposal.download')}}" class="anti-a"> <button class="button-payment">Download Now</button></a>
                        </div>
                    </div>
                    <div class="row d-md-flex d-lg-flex align-items-md-center align-items-lg-center">    
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <label for="Group">BIC Case</label><br>
                            <span style="border-radius:0; border:none;font-weight:900;font-size:1em;padding:6px 0;" >Selesaikan Case ini sebelum tanggal 14 Juni 2019</span>
                        </div>
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <a href="{{route('proposal.download')}}" class="anti-a"> <button class="button-payment">Download Now</button></a>
                        </div>
                    </div>
                    <form action="{{route('proposal.upload')}}" enctype="multipart/form-data" method="POST" class="row d-md-flex d-lg-flex align-items-md-center align-items-lg-center">
                        @csrf
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <label for="Group">Submit Proposal</label><br>
                            <input type="file" accept=".pdf,.png,.jpg,.PDF,.PNG,.JPG,.JPEG,.jpeg" id="proposal" class=" @error('proposal') is-invalid @enderror"  name="proposal" style="border:none; padding:auto 0;" required autofocus>
                            <br>
                            <span class="cv_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('proposal'))
                                    {{ $errors->first('proposal') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <button class="button-payment" type="button" id="btn-proposal">Submit Proposal</button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    @foreach ($user->members as $member)
        @if($loop->first)
            <div class="container-fluid form-container">
                <div class="row">
                    <div class="container-fluid gambar-input col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <img src="image/ketua.png" class="img-fluid" alt="hello">
                    </div>
                    <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 ">        
                        <h2 class="container">Leader</h2>
        @elseif($loop->index == 1)
            <div id="member1" class="container-fluid form-container">
                <div class="row">
                    <div class="container-fluid gambar-input col-lg-4 col-md-4 col-sm-12 col-xs-12 "> 
                        <img src="image/member1.png" class="img-fluid" alt="hello"> 
                    </div>
                    <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 order-sm-first order-xs-first">
                        <h2 class="container">Member 1</h2>
        @else
            <div id="member2" class="container-fluid form-container">
                <div class="row">
                    <div class="container-fluid gambar-input col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
                        <img src="image/member2.png" class="img-fluid" alt="hello"> 
                    </div>
                    <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2 class="container">Member2</h2>
        @endif
                    <form action="{{route('member.update', $member->id)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <label @if($loop->first)for="name" @elseif($loop->index ==1)for="name1" @else for="name2" @endif>Full Name</label>
                                <input type="text" style="border-radius:0; border:none; font-weight:900; padding:6px 0;" class="form-control @error('member_name') is-invalid @enderror" value="{{$member->member_name}}" autocomplete="member_name" name="member_name" @if($loop->first)id="name" @elseif($loop->index ==1)id="name1" @else id="name2" @endif  placeholder="Full Name" required autofocus disabled>
                            </div>
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <label @if($loop->first)for="dob" @elseif($loop->index ==1)for="dob1" @else for="dob2" @endif>Date Of Birth</label>
                                <input type="date" disabled style="border-radius:0; border:none; font-weight:900; padding:6px 0;" min="1997-01-01" max="2002-01-01" name="dob" value="{{$member->dob}}" class="form-control  @error('dob') is-invalid @enderror" @if($loop->first)id="dob" @elseif($loop->index ==1)id="dob1" @else id="dob2" @endif placeholder="Date Of Birth" required autofocus>
                            </div>
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <label @if($loop->first)for="email" @elseif($loop->index ==1)for="email1" @else for="email2" @endif>Email</label>
                                <input type="email" disabled style="border-radius:0; border:none; font-weight:900; padding:6px 0;" class="form-control @error('email') is-invalid @enderror" name="email" @if($loop->first)id="email" @elseif($loop->index ==1)id="email1" @else id="email2" @endif value="{{$member->email}}" aria-describedby="emailHelp" placeholder="Email Address" required autofocus>
                            </div>              
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <label @if($loop->first)for="Line" @elseif($loop->index ==1)for="Line1" @else for="Line2" @endif>Line Id</label>
                                <input type="text" class="form-control @error('line') is-invalid @enderror" @if($loop->first)id="Line" @elseif($loop->index ==1)id="Line1" @else id="Line2" @endif name="line" value="{{$member->line}}" placeholder="Line Id" required autofocus> 
                                <span class="line_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('line'))
                                        {{ $errors->first('line') }}
                                    @endif
                                </span>
                            </div>
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <label @if($loop->first)for="Whatsapp" @elseif($loop->index ==1)for="Whatsapp1" @else for="Whatsapp2" @endif>Whatsapp Number</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" @if($loop->first)id="Whatsapp" @elseif($loop->index ==1)id="Whatsapp1" @else id="Whatsapp2" @endif value="{{$member->phone}}" autocomplete="phone" name="phone" placeholder="WhatsApp Number" required autofocus>
                                <span class="phone_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('phone'))
                                        {{ $errors->first('phone') }}
                                    @endif
                                </span>
                            </div>
                            {{-- <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-ktp">
                                <label @if($loop->first)for="ktp" @elseif($loop->index ==1)for="ktp1" @else for="ktp2" @endif>Kartu Mahasiswa</label>
                                <input type="file"  accept=".pdf,.png,.jpg,.PDF,.PNG,.JPG,.JPEG,.jpeg" class="form-control @error('ktp') is-invalid @enderror" @if($loop->first)id="ktp" @elseif($loop->index ==1)id="ktp1" @else id="ktp2" @endif name="ktp" required autofocus>
                                <span class="ktp_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('ktp'))
                                        {{ $errors->first('ktp') }}
                                    @endif
                                </span>
                            </div>               --}}
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-ktp">
                                <label @if($loop->first)for="cv" @elseif($loop->index ==1)for="cv1" @else for="cv2" @endif>Curriculum Vitae</label>
                                <input type="file" accept=".pdf,.png,.jpg,.PDF,.PNG,.JPG,.JPEG,.jpeg" class="form-control @error('cv') is-invalid @enderror" @if($loop->first)id="cv" @elseif($loop->index ==1)id="cv1" @else id="cv2" @endif name="cv" required autofocus>
                                <span class="cv_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('cv'))
                                        {{ $errors->first('cv') }}
                                    @endif
                                </span>
                            </div>  
                        </div>
                        <div class="row d-md-flex d-lg-flex align-items-md-center align-items-lg-center justify-content-md-end justify-content-lg-end">
                            <button class="btn-update " style="margin-right:15px;" @if($loop->first)id="btn-up" @elseif($loop->index ==1)id="btn-up-1" @else id="btn-up-2" @endif type="button">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <img src="image/wave_bawah.png" class="wave wave_bawah">
    <script src="js/app.js"></script>
    <script src="js/dashboard-home.js"></script>
</body>
</html>