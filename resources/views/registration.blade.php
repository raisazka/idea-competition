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
    <form action="" method="" class="form-form-form">
        <div class="content-promosi text-center container">
            <img src="image/BIC.png" alt="bic" class="img-fluid bic-logo">
            <h1>With</h1>
            <img src="image/tiket.png" alt="">
            <h3>BNCC Idea Competition</h3>
            <h3>Solve The Case WIth Your Best It Solution</h3>
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
                            <input type="text" class="form-control" id="name" placeholder="Full Name" required>
                            <span style="color:red; font-size:0; font-weight:700;  " class="name_wrong" ></span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="Whatsapp">Whatsapp Number</label>
                            <input type="text" class="form-control" id="Whatsapp" placeholder="WhatsApp Number" required>
                            <span style="color:red; font-size:0; font-weight:700;  " class="phone_wrong" ></span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email Address" required>
                            <span style="color:red; font-size:0; font-weight:700;  " class="email_wrong" ></span>
                        </div>              
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="Line">Line Id</label>
                            <input type="text" class="form-control" id="Line" placeholder="Line Id" required>
                            <span style="color:red; font-size:0; font-weight:700;  " class="line_wrong" ></span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="dob">Date Of Birth</label>
                            <input type="date" min="1997-01-01" max="2002-01-01"  class="form-control" id="dob" placeholder="Date Of Birth" required>
                            <span style="color:red; font-size:0; font-weight:700;  " class="dob_wrong" ></span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-ktp">
                            <label for="ktp">Kartu Mahasiswa</label>
                            <input type="file" accept=".pdf,.png,.jpg,.PDF,.PNG,.JPG,.JPEG,.jpeg" class="form-control" id="ktp" required>
                            <span style="color:red; font-size:0; font-weight:700;  ;" class="ktp_wrong" ></span>
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
                            <label for="name1">Full Name</label>
                            <input type="text" class="form-control" id="name1" placeholder="Full Name" >
                            <span style="color:red; font-size:0; font-weight:700;  " class="name_wrong" ></span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="Whatsapp1">Whatsapp Number</label>
                            <input type="text" class="form-control" id="Whatsapp1" placeholder="WhatsApp Number" >
                            <span style="color:red; font-size:0; font-weight:700;  " class="phone_wrong" ></span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="email1">Email</label>
                            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Email Address"> 
                            <span style="color:red; font-size:0; font-weight:700;  " class="email_wrong" ></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="Line1">Line Id</label>
                            <input type="text" class="form-control" id="Line1" placeholder="Line Id">
                            <span style="color:red; font-size:0; font-weight:700;  " class="line_wrong" ></span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <label for="dob1">Date Of Birth</label>
                            <input type="date" min="1997-01-01" max="2002-01-01"  class="form-control" id="dob1" placeholder="Date Of Birth">
                            <span style="color:red; font-size:0; font-weight:700;  " class="dob_wrong" ></span>
                        </div>
                        <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-ktp">
                            <label for="ktp1">Kartu Mahasiswa</label>
                            <input type="file" class="form-control" id="ktp1" required>
                            <span style="color:red; font-size:0; font-weight:700;  " class="ktp_wrong" ></span>
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
                        <label for="name2">Full Name</label>
                        <input type="text" class="form-control" id="name2" placeholder="Full Name" required> 
                        <span style="color:red; font-size:0; font-weight:700;  " class="name_wrong" ></span>
                    </div>
                    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <label for="Whatsapp2">Whatsapp Number</label>
                        <input type="text" class="form-control" id="Whatsapp2" placeholder="WhatsApp Number" required>
                        <span style="color:red; font-size:0; font-weight:700;  " class="phone_wrong" ></span>
                    </div>
                    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <label for="email2">Email</label>
                        <input type="email" class="form-control" id="email2" aria-describedby="emailHelp" placeholder="Email Address" required> 
                        <span style="color:red; font-size:0.6em; font-weight:bold;  " class="email_wrong"></span> 
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <label for="Line2">Line Id</label>
                        <input type="text" class="form-control" id="Line2" placeholder="Line Id" required> 
                        <span style="color:red; font-size:0; font-weight:700;  " class="line_wrong" ></span>
                    </div>
                    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <label for="dob2">Date Of Birth</label>
                        <input type="date" min="1997-01-01" max="2002-01-01" class="form-control" id="dob2" placeholder="Date Of Birth" required> 
                        <span style="color:red; font-size:0; font-weight:700;  " class="dob_wrong" ></span>
                    </div>
                    <div class="form-group col-md-4 col-lg-4 col-sm-12 col-xs-12 form-ktp">
                        <label for="ktp2">Kartu Mahasiswa</label>
                        <input type="file" class="form-control" id="ktp2" required> 
                        <span style="color:red; font-size:0; font-weight:700;  " class="ktp_wrong" ></span>
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
                            <input type="text" class="form-control" id="Group" placeholder="Group Name" required>
                            <span style="color:red; font-size:0; font-weight:700;  " class="name_wrong" ></span>
                        </div>
                        <div class="form-group col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                            <span style="color:red; font-size:0; font-weight:700;  " class="line_wrong" ></span>
                        </div>
                        <div class="form-group col-12">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password" required>
                            <span style="color:red; font-size:0; font-weight:700;" class="pass_wrong" ></span>
                        </div>
                        <div class="form-group col-12">
                            <label for="c-password">Confirm Password</label>
                            <input type="password" class="form-control" id="c-password" placeholder="Confirm Password" required>
                            <span style="color:red; font-size:0; font-weight:700;  " class="passc_wrong" ></span>
                        </div>
                        <div class="form-check" style="margin-left:1em;">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Agree with Terms & Condition</label>
                        </div>
                    </div>
                    <button class=" btn-regis" id="btn-register">Register</button>
                </div>
            </div>
        </div>
        <div class="container-fluid form-container " id="info">
            <div class="row">
                <h5 class="col-12" style="text-decoration:underline; cursor:pointer;">already have account? click-here</h5>
            </div>
        </div>
    </form>
    <img src="image/wave_bawah.png" class="wave wave_bawah">
    <script src="js/app.js"></script>
    <script src="js/regis.js"></script>
</body>
</html>