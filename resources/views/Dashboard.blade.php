<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/regis.css">
</head>
<body>
    <img src="image/wave_atas.png" class="wave wave_atas">
    <div class="form-form-form">
        <div class="content-promosi text-center container">
            <img src="image/BIC.png" alt="bic" class="img-fluid bic-logo">
            <h1>With</h1>
            <img src="image/tiket.png" alt="">
            <h3>BNCC Idea Competition</h3>
            <h3>Solve The Case WIth Your Best It Solution</h3>
            <h3>Registration Deadline : 12 june 2019</h3>
        </div>
    @foreach ($members as $member)
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
                                <input type="text" class="form-control @error('member_name') is-invalid @enderror" value="{{$member->member_name}}" autocomplete="member_name" name="member_name" @if($loop->first)id="name" @elseif($loop->index ==1)id="name1" @else id="name2" @endif  placeholder="Full Name" required autofocus disabled>
                                <span class="name_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('member_name'))
                                        {{ $errors->first('member_name') }}
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
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <label @if($loop->first)for="email" @elseif($loop->index ==1)for="email1" @else for="email2" @endif>Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" @if($loop->first)id="email" @elseif($loop->index ==1)id="email1" @else id="email2" @endif value="{{$member->email}}" aria-describedby="emailHelp" placeholder="Email Address" required autofocus>
                                <span class="email_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('email'))
                                        {{ $errors->first('email') }}
                                    @endif
                                </span>
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
                                <label @if($loop->first)for="dob" @elseif($loop->index ==1)for="dob1" @else for="dob2" @endif>Date Of Birth</label>
                                <input type="date" min="1997-01-01" max="2002-01-01" name="dob" value="{{$member->dob}}" class="form-control  @error('dob') is-invalid @enderror" @if($loop->first)id="dob" @elseif($loop->index ==1)id="dob1" @else id="dob2" @endif placeholder="Date Of Birth" required autofocus>
                                <span class="dob_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('dob'))
                                        {{ $errors->first('dob') }}
                                    @endif
                                </span>
                            </div>
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-ktp">
                                <label @if($loop->first)for="ktp" @elseif($loop->index ==1)for="ktp1" @else for="ktp2" @endif>Kartu Mahasiswa</label>
                                <input type="file" accept=".pdf,.png,.jpg,.PDF,.PNG,.JPG,.JPEG,.jpeg" class="form-control @error('ktp') is-invalid @enderror" @if($loop->first)id="ktp" @elseif($loop->index ==1)id="ktp1" @else id="ktp2" @endif name="ktp" required autofocus>
                                <span class="ktp_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('ktp'))
                                        {{ $errors->first('ktp') }}
                                    @endif
                                </span>
                            </div>              
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-ktp">
                                <label @if($loop->first)for="cv" @elseif($loop->index ==1)for="cv1" @else for="cv2" @endif>Curriculum Vitae</label>
                                <input type="file" accept=".pdf,.png,.jpg,.PDF,.PNG,.JPG,.JPEG,.jpeg" class="form-control @error('cv') is-invalid @enderror" @if($loop->first)id="cv" @elseif($loop->index ==1)id="cv1" @else id="cv2" @endif name="cv" required autofocus>
                                <span class="ktp_wrong" style="color:red; font-weight:700; font-size: .8em">
                                    @if ($errors->has('cv'))
                                        {{ $errors->first('cv') }}
                                    @endif
                                </span>
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <div class="container-fluid form-container" id="grup">
            <div class="row">
                <div class="container-fluid gambar-input col-lg-4 col-md-4 col-sm-12 col-xs-12 "> <img src="image/team.png" class="img-fluid" alt="hello"> </div>
                <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 order-sm-first order-xs-first">
                    <h1>Grup</h1>
                    <div class="row">
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <label for="Group">Group Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="Group" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Group Name" required autofocus>
                            <span class="name_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('name'))
                                    {{ $errors->first('name') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <label for="username">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="Username" autocomplete="username" required autofocus >
                            <span class="line_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('username'))
                                    {{ $errors->first('username') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-12">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}" autocomplete="password"  placeholder="Enter Password"  required autofocus >
                            <span class="pass_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('password'))
                                    {{ $errors->first('password') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-12">
                            <label for="c-password">Confirm Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="c-password" value="{{ old('password') }}" name="password" placeholder="Confirm Password" required autofocus>
                            <span class="passc_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('password'))
                                    {{ $errors->first('password') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-check" style="margin-left:1em;">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Agree with Terms & Condition</label>
                        </div>
                    </div>
                    <button class=" btn-regis" id="btn-register" type="button">Register</button>
                </div>
            </div>
        </div>
        <div class="container-fluid form-container " id="info">
            <div class="row">
                <h5 class="col-12" style="text-decoration:underline; cursor:pointer;" id="try">already have account? click-here</h5>
            </div>
        </div>
    </div>
    <img src="image/wave_bawah.png" class="wave wave_bawah">
    <script src="js/app.js"></script>
    <script src="js/regis.js"></script>
</body>
</html>