<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/regis.css">
</head>
<body>
    <img src="image/wave_atas.png" class="wave wave_atas">
    <form action="{{route('user.register')}}" method="post" class="form-form-form" enctype="multipart/form-data">
        @csrf
        <div class="content-promosi text-center container">
            <img src="image/BIC.png" alt="bic" class="img-fluid bic-logo">
            <h1>With</h1>
            <img src="image/tiket.png" alt="">
            <h3>BNCC Idea Competition</h3>
            <h3>Solve The Case With Your Best IT Solution</h3>
            <h3>Registration Deadline : 12 june 2019</h3>
        </div>
        <div class="container-fluid form-container">  
            <h5 style="font-size:3em; margin-bottom:1em; text-decoration:underline" class="text-center">Registration</h5>
            <div class="row">
                <div class="container-fluid gambar-input col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <img src="image/ketua.png" class="img-fluid" alt="hello">
                </div>
                <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 ">        
                    <h2 class="container">Leader</h2>
                    <div class="row">
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control @error('member_name.0') is-invalid @enderror" value="{{ old('member_name.0') }}" autocomplete="member_name" name="member_name[]" id="name" placeholder="Full Name" required autofocus>
                            <span class="name_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('member_name.0'))
                                    {{ $errors->first('member_name') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="Whatsapp">Whatsapp Number</label>
                            <input type="text" class="form-control @error('phone.0') is-invalid @enderror" id="Whatsapp" value="{{ old('phone.0') }}" autocomplete="phone" name="phone[]" placeholder="WhatsApp Number" required autofocus>
                            <span class="phone_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('phone.0'))
                                    {{ $errors->first('phone.0') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email.0') is-invalid @enderror" name="email[]" id="email" value="{{ old('email.0') }}" aria-describedby="emailHelp" placeholder="Email Address" required autofocus>
                            <span class="email_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('email.0'))
                                    {{ $errors->first('email.0') }}
                                @endif
                            </span>
                        </div>              
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="Line">Line Id</label>
                            <input type="text" class="form-control @error('line.0') is-invalid @enderror" id="Line" name="line[]" value="{{ old('line.0') }}" placeholder="Line Id" required autofocus> 
                            <span class="line_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('line.0'))
                                    {{ $errors->first('line.0') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="dob">Date Of Birth</label>
                            <input type="date" min="1997-01-01" max="2002-01-01" name="dob[]" value="{{ old('dob.0') }}" class="form-control  @error('dob.0') is-invalid @enderror" id="dob" placeholder="Date Of Birth" required autofocus>
                            <span class="dob_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('dob.0'))
                                    {{ $errors->first('dob.0') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-ktp">
                            <label for="ktp">Kartu Mahasiswa</label>
                            <input type="file" accept=".pdf,.png,.jpg,.PDF,.PNG,.JPG,.JPEG,.jpeg" class="form-control @error('ktp.0') is-invalid @enderror" value="{{ old('ktp.0') }}" id="ktp" name="ktp[]" required autofocus>
                            <span class="ktp_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('ktp.0'))
                                    {{ $errors->first('ktp.0') }}
                                @endif
                            </span>
                        </div>              
                    </div>
                </div>
            </div>
        </div>
        <div id="member1" class="container-fluid form-container">
            <div class="row">
                <div class="container-fluid gambar-input col-lg-4 col-md-4 col-sm-12 col-xs-12 "> <img src="image/member1.png" class="img-fluid" alt="hello"> </div>
                <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12 order-sm-first order-xs-first">
                    <h2 class="container">Member 1</h2>
                    <div class="row">
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control @error('member_name.1') is-invalid @enderror" value="{{ old('member_name.1') }}" autocomplete="member_name" name="member_name[]" id="name1" placeholder="Full Name" required autofocus>
                            <span class="name_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('member_name.1'))
                                    {{ $errors->first('member_name.1') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="Whatsapp">Whatsapp Number</label>
                            <input type="text" class="form-control @error('phone.1') is-invalid @enderror" id="Whatsapp1" value="{{ old('phone.1') }}" autocomplete="phone" name="phone[]" placeholder="WhatsApp Number" required autofocus>
                            <span class="phone_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('phone.1'))
                                    {{ $errors->first('phone.1') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email.1') is-invalid @enderror" name="email[]" id="email1" value="{{ old('email.1') }}" aria-describedby="emailHelp" placeholder="Email Address" required autofocus>
                            <span class="email_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('email.1'))
                                    {{ $errors->first('email.1') }}
                                @endif
                            </span>
                        </div>              
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="Line">Line Id</label>
                            <input type="text" class="form-control @error('line.1') is-invalid @enderror" id="Line1" name="line[]" value="{{ old('line.1') }}" placeholder="Line Id" required autofocus> 
                            <span class="line_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('line.1'))
                                    {{ $errors->first('line.1') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="dob">Date Of Birth</label>
                            <input type="date" min="1997-01-01" max="2002-01-01" name="dob[]" value="{{ old('dob.1') }}" class="form-control  @error('dob.1') is-invalid @enderror" id="dob1" placeholder="Date Of Birth" required autofocus>
                            <span class="dob_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('dob.1'))
                                    {{ $errors->first('dob.1') }}
                                @endif
                            </span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-ktp">
                            <label for="ktp">Kartu Mahasiswa</label>
                            <input type="file" accept=".pdf,.png,.jpg,.PDF,.PNG,.JPG,.JPEG,.jpeg" class="form-control @error('ktp.1') is-invalid @enderror" value="{{ old('ktp.1') }}" id="ktp1" name="ktp[]" required autofocus>
                            <span class="ktp_wrong" style="color:red; font-weight:700; font-size: .8em">
                                @if ($errors->has('ktp.1'))
                                    {{ $errors->first('ktp.1') }}
                                @endif
                            </span>
                        </div>              
                    </div>
                </div>
            </div>
            <span class="button-dismiss" id="dis_1">X</span>
        </div>
        <div id="member2" class="container-fluid form-container">
        <div class="row">
            <div class="container-fluid gambar-input col-lg-4 col-md-4 col-sm-12 col-xs-12"> <img src="image/member2.png" class="img-fluid" alt="hello"> </div>
            <div class="container input-container col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2 class="container">Member2</h2>
                <div class="row">
                    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control @error('member_name.2') is-invalid @enderror" value="{{ old('member_name.2') }}" autocomplete="member_name" name="member_name[]" id="name2" placeholder="Full Name" required autofocus>
                        <span class="name_wrong" style="color:red; font-weight:700; font-size: .8em">
                            @if ($errors->has('member_name.2'))
                                {{ $errors->first('member_name.2') }}
                            @endif
                        </span>
                    </div>
                    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <label for="Whatsapp">Whatsapp Number</label>
                        <input type="text" class="form-control @error('phone.2') is-invalid @enderror" id="Whatsapp2" value="{{ old('phone.2') }}" autocomplete="phone" name="phone[]" placeholder="WhatsApp Number" required autofocus>
                        <span class="phone_wrong" style="color:red; font-weight:700; font-size: .8em">
                            @if ($errors->has('phone.2'))
                                {{ $errors->first('phone.2') }}
                            @endif
                        </span>
                    </div>
                    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email.2') is-invalid @enderror" name="email[]" id="email2" value="{{ old('email.2') }}" aria-describedby="emailHelp" placeholder="Email Address" required autofocus>
                        <span class="email_wrong" style="color:red; font-weight:700; font-size: .8em">
                            @if ($errors->has('email.2'))
                                {{ $errors->first('email.2') }}
                            @endif
                        </span>
                    </div>              
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <label for="Line">Line Id</label>
                        <input type="text" class="form-control @error('line.2') is-invalid @enderror" id="Line2" name="line[]" value="{{ old('line.2') }}" placeholder="Line Id" required autofocus> 
                        <span class="line_wrong" style="color:red; font-weight:700; font-size: .8em">
                            @if ($errors->has('line.2'))
                                {{ $errors->first('line.2') }}
                            @endif
                        </span>
                    </div>
                    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <label for="dob">Date Of Birth</label>
                        <input type="date" min="1997-01-01" max="2002-01-01" name="dob[]" value="{{ old('dob.2') }}" class="form-control  @error('dob.2') is-invalid @enderror" id="dob2" placeholder="Date Of Birth" required autofocus>
                        <span class="dob_wrong" style="color:red; font-weight:700; font-size: .8em">
                            @if ($errors->has('dob.2'))
                                {{ $errors->first('dob.2') }}
                            @endif
                        </span>
                    </div>
                    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-ktp">
                        <label for="ktp">Kartu Mahasiswa</label>
                        <input type="file" accept=".pdf,.png,.jpg,.PDF,.PNG,.JPG,.JPEG,.jpeg" class="form-control @error('ktp.2') is-invalid @enderror" value="{{ old('ktp.2') }}" id="ktp2" name="ktp[]" required autofocus>
                        <span class="ktp_wrong" style="color:red; font-weight:700; font-size: .8em">
                            @if ($errors->has('ktp.2'))
                                {{ $errors->first('ktp.2') }}
                            @endif
                        </span>
                    </div>              
                </div>
            </div>
        </div><span class="button-dismiss" id="dis_2">X</span></div>
        <div id="plus">
            <span>+</span>
            <div class="text-success">Add New Member</div>
        </div>
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
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Agree with Terms & Condition</label>
                        </div>
                    </div>
                    <button class=" btn-regis" id="btn-register" type="button">Register</button>
                </div>
            </div>
        </div>
        <div class="container-fluid form-container " id="info">
            <div class="row">
            <a href="{{url('login')}}"><h5 class="col-12" style="text-decoration:underline; cursor:pointer;" id="try">already have account? login now</h5></a>
            </div>
        </div>
    </form>
    <img src="image/wave_bawah.png" class="wave wave_bawah">
    <script src="js/app.js"></script>
    <script src="js/regis.js"></script>
</body>
</html>