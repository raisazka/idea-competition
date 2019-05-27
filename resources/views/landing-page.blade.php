<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/landing-page.css">
    <link href="fontawesome-free-5.8.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome-free-5.8.2-web/css/brands.css" rel="stylesheet">
    <link href="fontawesome-free-5.8.2-web/css/solid.css" rel="stylesheet">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div class="landing-page" id="home-div">
    <div class="navbar" style="">
        <div class="nav-left">
            {{-- <img src="image/LogoBIC.png" class="img-fluid" alt="BIC Image  "> --}}
        </div>
        <div class="nav-right">
            <div class="no-burger">
                <a href="#section-2">What is BIC</a>
                <a href="#regis-page">Registration</a>
                <a href="#time-line">Timeline</a>
                <a href="#contact-us">Contact Us</a>
            </div>
            <button class="btn-burger">
                <span class="span-1 color-super-dark"></span>
                <span class="span-2 color-super-dark"></span>
                <span class="span-3 color-super-dark"></span>
            </button>
        </div>
    </div>
   
    <div class="section-navbar">
        <img src="image/wave_atas.png" style="width:100%;">
        <div class="section-navbar-list"><a href="#section-2">What is BIC</a></div>
        <div class="section-navbar-list"><a href="#regis-page">Registration</a></div>
        <div class="section-navbar-list"><a href="#time-line">Timeline</a></div>
        <div class="section-navbar-list"> <a href="#contact-us">Contact Us</a></div>
        <img src="image/wave_bawah.png" style="width:100%">
    </div>
    <div class="landing-content">
        <div class="containers">
            <h1><b>BNCC</b><br> Idea Competition</h1>
            <h5>lorem ipsum dolor sit amet lorem ipsum dolor sit amet amet amet amet the best 2019</h5>
            <label for="button-regis">
                <div class="my-button">
                    <div>Learn More</div>
                    <span>&rarr;</span>
                </div>
            </label>
            <input type="hidden" id="button-regis">
        </div>
        <img src="image/LogoBIC.png" class="img-fluid bic-img" alt="">    
    </div>
</div> 
<div id="section-2" class="section-2">
    <div class="landing-content direction-wrap">
        <div class="containers">
            <h1>What is</h1>
            <h2> BNCC Idea Competition ?</h2>
            <h6 style="text-align:justify">BNCC Idea Competition merupakan lomba business IT case dimana 
                peserta akan diberikan suatu persoalan yang dimiliki perusahaan 
                dan setiap peserta wajib menyelesaikannya menggunakan solusi 
                teknologi melalui karya tulis atau proposal. Selain itu, ada juga 
                expo atau exhibition dimana terdapat perusahaan-perusahaan yang 
                akan melakukan branding dan pengenalan tentang perusahaan tersebut.
            </h6>
        </div>
        <img src="image/flatBIC.png" class="img-fluid bic-img" alt="">    
    </div>
</div>
<div class="register-page" id="register-page">
    <img src="image/cloud-bg.png" alt="hello" class="awan" >
    <img src="image/cloud-bg.png" alt="hello" class="awan mob-awan" >
    <div style="width:100%;" class="d-flex flex-row flex-wrap awan-content">
        <div class="bg-dark-blue d-flex justify-content-center flex-column ">
            <div class="inner-content">
                <span class="text-center">
                    <h4>Daftar Sebagai</h4>
                    <h1>Peserta Expo</h1>
                </span>
                <h4 class="text-center content-regis">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Ducimus laboriosam quasi in illum sequi! Velit dolorem sit eos 
                    aliquid iste!
                </h4>
                <button type="submit">REGISTER</button>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <div class="inner-content">
                <span class="text-center">
                    <h4>Daftar Sebagai</h4>
                    <h1>Peserta Lomba</h1>
                </span>
                <h4 class="text-center content-regis">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Ducimus laboriosam quasi in illum sequi! Velit dolorem sit eos 
                    aliquid iste!
                </h4>
                <button type="submit">REGISTER</button>
            </div>
        </div>
    </div>
</div>
{{-- <div class="event-exp" id="event-exp">
        <p id="tescar">hello world</p>
        <div class="" style="text-align:center; width:50%; height:10%;">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">0</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">1</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">2</li>
        </div>

    <div id="carouselExampleIndicators" class="carousel slide content" data-ride="carousel">
        <div class="carousel-inner explaination">
            <div class="carousel-item active">
                lorem1
            </div>
            <div class="carousel-item">
                Lorem.
            </div>
            <div class="carousel-item">
                Lorem, ipsum.
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>    
    </div>
</div> --}}
<div class="time-line" id="time-line">
    <h1>TIMELINE</h1>
    <div class="timeline">
        <div class="try-time-line try-time-left">
            <div class="containert left-t active-time">
                <div class="contentt shadow">
                    <h1 class="text-center">24 Mei 2019</h1>
                    <h2 class="text-center">Open Registration
                        <br><br>
                    <button class="btn-timeline">Click here to Register</button>
                    </h2>
                </div>
            </div>
            <div class="containert-icon">
                <img class="img-fluid" src="image/OpenRegis1-01.png" alt="openregis">
            </div>
        </div>
        <div class="try-time-line try-time-right">
            <div class="containert-icon">
                <img class="img-fluid" src="image/Distribution-01.png" alt="openregis">
            </div>
            <div class="containert right-t">
                <div class="contentt shadow">
                    <h1 class="text-center">30 Mei 2019</h1>
                    <h2 class="text-center">Case Distribution
                        <br><br>
                    <button class="btn-timeline">Click</button>
                    </h2>                
                </div>
            </div>
        </div>
        <div class="try-time-line try-time-left">
            <div class="containert left-t">
                <div class="contentt shadow">
                    <h1 class="text-center">14 Juni 2019</h1>
                    <h2 class="text-center">Closed Registration & Proposal Must be Submmited
                        <br><br>
                    <button class="btn-timeline">Click here for more info</button>
                    </h2>
                </div>
            </div>
            <div class="containert-icon">
                <img class="img-fluid" src="image/ClosedRegis-01.png" alt="openregis">
            </div>
        </div>
        <div class="try-time-line try-time-right">
            <div class="containert-icon">
                <img class="img-fluid" src="image/Megaphone-01.png" alt="openregis">
            </div>
            <div class="containert right-t">
                <div class="contentt shadow">
                    <h1 class="text-center">20 June 2019</h1>
                    <h2 class="text-center">Semi-Final Annoucement
                        <br><br>
                    <button class="btn-timeline">Click here for more info</button>
                    </h2>                
                </div>
            </div>
        </div>
        <div class="try-time-line try-time-left">
            <div class="containert left-t">
                <div class="contentt shadow">
                    <h1 class="text-center">22 June 2019</h1>
                    <h2 class="text-center">Technical Meeting
                        <br><br>
                    <button class="btn-timeline">Click here for more info</button>
                    </h2>
                </div>
            </div>
            <div class="containert-icon">
                <img class="img-fluid" src="image/Meeting-01.png" alt="openregis">
            </div>
        </div>
        <div class="try-time-line try-time-right">
            <div class="containert-icon">
                <img class="img-fluid" src="image/DDay-01.png" alt="openregis">
            </div>
            <div class="containert right-t">
                <div class="contentt shadow">
                    <h1 class="text-center">25-26 June 2019</h1>
                    <h2 class="text-center">BIC Finale & Expo
                        <br><br>
                    <button class="btn-timeline">Click here for more info</button>
                    </h2>                
                </div>
            </div>
        </div>
        <div class="" style="height:0;" >
                <div class="" style="color:transparent">
                <h2 style="height:0;">2007</h2>
                <p style="height:0;">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                </div>
        </div>
    </div>
</div>
<div class="location" id="location">
    
</div>
<div class="contact-us" id="contact-us">
    <div class="contact-left">
        <img src="image/contact-us.png" alt="">
        <div class="social-media">
            <span>
                <a href="http://line.me/ti/p/~@joy0117j"  target="_blank" class="container-sosmed" >
                    <i class="fab fa-line"></i>
                    <p style="font-size: 2vh;">@joy0117j</p>
                </a>
            </span>
            <span>
                <a href="mailto: technoevent@bncc.net" class="container-sosmed" >
                    <i class="fas fa-envelope"></i>
                    <p style="font-size: 2vh; width:60%;" class="email-big">technoevent@bncc.net</p>
                    <p style="font-size: 2vh; width:60%;" class="email-small">technoevent @bncc.net</p>
                </a>
            </span>
            <span>
                <a href="https://www.facebook.com/bina.nusantara.computer.club/"  target="_blank" class="container-sosmed">
                    <i class="fab fa-facebook-square" style="border-radius:0;"></i>
                    <p style="font-size: 2vh; ">Bina Nusantara Computer Club</p>
                </a>
            </span>
            <span>
                <a href="https://www.instagram.com/technoeventbncc/?hl=en"  target="_blank" class="container-sosmed">
                    <i class="fab fa-instagram"></i>
                    <p style="font-size: 2vh;">technoeventbncc</p></a>        
            </span>
        </div>
    </div>
    <div class="contact-right">
        <div class="container form-container shadow">
            <h4>Send Us a Message</h4>
            <form class="text-center">
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn-contact text-center">Submit</button>
            </form>
        </div>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/landing-page.js')}}"></script>
</body>
</html>