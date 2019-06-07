<!DOCTYPE html>
<html lang="en">
<head>
    <title>BNCC Idea Competition</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing-page.css')}}">
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
    <meta name="theme-color" content="#556489"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body onload="loadingScene()">
<div id="loader">
    <img src="image/BIC.png" class="img-fluid img-loaderi" alt="">
    <h2 class="text-center"><i>"Influence Business <br>Through Innovative Idea"</i></h2>
</div>
<div class="body-content">
    <div class="landing-page" id="home-div">
        <div class="navbar" style="">
            <div class="nav-left">
                {{-- <img src="image/LogoBIC.png" class="img-fluid" alt="BIC Image  "> --}}
            </div>
            <div class="nav-right">
                <div class="no-burger">
                    <a href="#section-2">What is BIC</a>
                    <a href="#register-page">Registration</a>
                    <a href="#time-line">Timeline</a>
                    <a href="#faq">FAQ</a>
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
            <div class="section-navbar-list"><a href="#register-page">Registration</a></div>
            <div class="section-navbar-list"><a href="#time-line">Timeline</a></div>
            <div class="section-navbar-list"><a href="#faq">FAQ</a></div>
            <div class="section-navbar-list"> <a href="#contact-us">Contact Us</a></div>
            <img src="image/wave_bawah.png" style="width:100%">
        </div>
        <div class="landing-content">
            <div class="containers rightreveal-1">
                <h1><b>BNCC</b><br> Idea Competition</h1>
                <h2><i>"Influence Business <br>Through Innovative Idea"</i></h2>
                <h4>25 - 26 June 2019</h4>
                <h4><i class="fas fa-map-marker-alt icon-location"></i>Foodcourt Binus Anggrek</h4>
                <label for="button-regis">
                    <a style="text-decoration:none" href="#register-page">
                        <div class="my-button">
                            <div>Register Now</div>
                            <span class="btn-arrow">&rarr;</span>
                        </div>
                    </a>
                </label>
            </div>
            <img src="image/LogoBIC.png" class="img-fluid bic-img upreveal-1"  alt="">    
        </div>
    </div> 
    <div id="section-2" class="section-2">
        <div class="landing-content direction-wrap">
            <div class="containers rightreveal">
                <h1>What is</h1>
                <h2> BNCC Idea Competition ?</h2>
                <h5 style="text-align:justify">
                        BNCC Idea Competition merupakan lomba <b>Business IT case </b> 
                        dimana peserta akan diberikan suatu persoalan yang 
                        dimiliki perusahaan dan setiap peserta wajib menyelesaikannya 
                        menggunakan <b>solusi teknologi </b>melalui <b>karya tulis atau proposal. </b>  
                        Selain itu, ada juga<b> expo atau exhibition</b> dimana terdapat 
                        perusahaan-perusahaan yang akan melakukan <b>branding</b> dan pengenalan 
                        tentang perusahaan tersebut melalui <i><b>interactive challenges</b></i> dengan 
                        pengunjung expo.
                </h5>
            </div>
            <img src="image/flatBIC.png" class="img-fluid bic-img upreveal" alt="">    
        </div>
    </div>
    <div class="register-page" id="register-page">
        <img src="image/cloud-bg.png" alt="hello" class="awan">
        <div class="register-content-cloud row">
            <div class="col-lg-6 col-xl-6 col-md-6 col-xs-12 bg-dark-blue">
                <div class="general-rule container-fluid">
                    <h1>General Rules </h1>
                    <img src="image/Rules.png" alt="rules" class="img-fluid" style="max-width:10em;">
                    <ul>
                        <li><h5>Setiap tim terdiri dari 1-3 orang yang merupakan mahasiswa aktif dari universitas di Indonesia</h5></li>
                        <li><h5>Setiap peserta wajib berkewarganegaraan Indonesia</h5></li>
                        <li><h5>Setiap tim wajib melakukan registrasi dan membayar uang pendaftaran sejumlah Rp 150.000 untuk umum dan Rp 75.000 untuk binusian</h5></li>
                        <li><h5>Seleksi tahap pertama dilakukan secara online, 10 tim yang terpilih nantinya akan dihubungi panitia untuk lanjut ke tahap presentasi</h5></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-md-6 col-xs-12">
                <div class="inner-content">
                    <span class="text-center">
                            <h4>Daftar Sebagai</h4>
                            <h1>Peserta Lomba</h1>
                        </span>
                    <h4 class="text-center content-regis">
                                Uji kemampuan case-solving kalian di sini dan menangkan hadiah uang jutaan rupiah serta dapatkan benefit-benefit menarik lainnya
                        </h4>
                    <div class="row container">
                        @guest
                        <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 text-center">
                            <a class="anti-a" href="{{url('user-login')}}">
                                <button type="submit">LOGIN</button>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 text-center">
                            <a class="anti-a" href="{{url('regis')}}">
                                <button type="submit">REGISTER</button>
                            </a>
                        </div>
                        @else
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">
                            <a class="anti-a" href="{{url('dashboard')}}">
                                <button type="submit">Dashboard</button>
                            </a>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="time-line" id="time-line">
        <h1>TIMELINE</h1>
        <div class="timeline">
            <div class="try-time-line try-time-right">
                <div class="containert-icon">
                    <img class="img-fluid" src="image/Distribution-01.png" alt="openregis">
                </div>
                <div class="containert right-t active-time">
                    <div class="contentt shadow">
                        <h1 class="text-center">05 Juni 2019</h1>
                        <h2 class="text-center">
				            Open registration and case distribution
                        </h2>                
                    </div>
                </div>
            </div>
            <div class="try-time-line try-time-left">
                <div class="containert left-t">
                    <div class="contentt shadow">
                        <h1 class="text-center">17 Juni 2019</h1>
                        <h2 class="text-center">
                            Registration and Proposal Submission Deadline
                        {{-- <button class="btn-timeline">Click here for more info</button> --}}
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
                        <h1 class="text-center">21 June 2019</h1>
                        <h2 class="text-center">Finalist Announcement
                            
                        {{-- <button class="btn-timeline">Click here for more info</button> --}}
                        </h2>                
                    </div>
                </div>
            </div>
            <div class="try-time-line try-time-left">
                <div class="containert left-t">
                    <div class="contentt shadow">
                        <h1 class="text-center">22 June 2019</h1>
                        <h2 class="text-center">Technical Meeting
                            
                        {{-- <button class="btn-timeline">Click here for more info</button> --}}
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
                            
                        {{-- <button class="btn-timeline">Click here for more info</button> --}}
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
    <div class="faq row" id="faq">
        <div class="row col-xs-12 col-md-12 col-xl-10 col-lg-10" style="margin:0;display:flex;justify-content:center;align-items:center;">
            <div class="col-xs-12 col-md-12 col-xl-6 col-lg-6">
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span>Apa itu BNCC Idea Competition (BIC)?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc"> BNCC Idea Competition merupakan lomba Business IT case dimana peserta akan diberikan suatu persoalan yang dimiliki perusahaan dan setiap peserta wajib menyelesaikannya menggunakan solusi teknologi melalui karya tulis atau proposal.</div>
                </div>
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span>Siapa saja yang bisa ikut berpartisipasi dalam lomba ini?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc">Orang yang berstatus mahasiswa aktif di Universitas yang ada di Indonesia.</div>
                </div>
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span> Apakah semua anggota tim harus berasal dari universitas yang sama?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc"> Tidak, peserta dengan asal universitas yang berbeda dapat mendaftarkan diri dalam satu tim yang sama.</div>
                </div>
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span>Berapa jumlah anggota yang dapat saya daftarkan?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc">Peserta dapat mendaftarkan diri secara individu maupun tim. Jumlah maksimal anggota dari tim yang dapat didaftarkan adalah tiga orang.</div>
                </div>
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span> Apakah saya bisa menambahkan anggota jika saya telah mendaftarkan diri secara individu?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc"> Ya, kamu masih bisa menambahkan anggota baru asalkan kamu belum melakukan pembayaran biaya lomba.</div>
                </div>
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span>Berapa jumlah proposal yang dapat saya upload?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc">Setiap individu maupun tim hanya boleh mendaftarkan 1 (satu) proposal, yaitu yang terakhir kali diupload pada dashboard masing-masing.</div>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-xl-6 col-lg-6">
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span> Kapan pemberitahuan tentang tahap selanjutnya dan dimana tahap final akan dilaksanakan?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc">Pengumuman peserta yang lolos akan diberitahukan melalui email atau pada dashboard setiap tim. Tahap final dari BNCC Idea Competition akan dilaksanakan pada tanggal 25-26 Juni 2019 di Foodcourt Binus Anggrek.</div>
                </div>
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span>Berapa lama proses pembuatan proposal diperbolehkan?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc"> Setelah melakukan registrasi dan melakukan pembayaran biaya lomba, maka tombol untuk men-download case akan muncul dan peserta dapat langsung mengerjakan proposal sampai batas akhir pengumpulan yaitu Senin, 17 Juni 2019.</div>
                </div>
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span> Siapa yang akan melakukan seleksi?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc">Seleksi akan dilakukan oleh pihak terpilih yang berasal dari sponsor, bukan oleh panitia.</div>
                </div>
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span>Apakah ada outline atau template untuk mengerjakan case yang diberikan?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc">Ada, template atau outline dapat di-download dalam dashboard masing-masing tim/peserta.</div>
                </div>
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span>Apa saja aspek penilaian dalam lomba ini?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc">Yang akan dinilai adalah solusi yang dihasilkan, dampak, implementasi teknologi, pemahaman kasus, dan cara penyampaian.</div>
                </div>
                <div class="faq-card">
                    <div class="faq-caption d-flex flex-row justify-content-between align-items-center"><span>Berapa banyak tim yang akan berlomba?</span> <i class="fas fa-arrow-left text-align:left"></i></div>
                    <div class="faq-desc">Tidak ada batasan, karena hasil dari semua individu ataupun tim akan diseleksi secara online untuk menentukan individu atau tim mana yang akan maju ke tahap berikutnya.</div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center col-xs-12 col-md-12 col-xl-2 col-lg-2 order-first  order-md-last order-xs-last">
            <h1 style="color:white; font-size:2.5em;font-weight:bold;margin-bottom:1.2em" class="text-center">FAQ</h1>
            <img src="image/faq.png" alt="faq">
        </div>
    </div>
    {{-- <div class="location row container-fluid" id="location">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex flex-column justify-content-around align-items-center">
            <h1 style="color:white">Apa aja yang akan ada di BIC ?</h1>
            <div class="promotion-card row left-border right-border shadow">
                <div style="border-right:1px solid grey" class="promotion-logo col-sm-12 col-md-12 col-lg-2 col-xl-2 d-flex justify-content-center align-items-center">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="promotion-content col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <h3>BIC Final Presentation</h3>
                    <p>
                        disini kamu akan melihat para finalis dari lomba BNCC Idea Competition menyampaikan ide mereka di depan para juri secara langsung dan dapatkan keseruannya
                    </p>
                </div>
            </div>
            <div class="promotion-card row left-border right-border shadow">
                <div style="border-right:1px solid grey" class="promotion-logo col-sm-12 col-md-12 col-lg-2 col-xl-2 d-flex justify-content-center align-items-center">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="promotion-content col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <h3>BIC Final Presentation</h3>
                    <p>
                        disini kamu akan melihat para finalis dari lomba BNCC Idea Competition menyampaikan ide mereka di depan para juri secara langsung dan dapatkan keseruannya
                    </p>
                </div>
            </div>
            <div class="promotion-card row left-border right-border shadow">
                <div style="border-right:1px solid grey" class="promotion-logo col-sm-12 col-md-12 col-lg-2 col-xl-2 d-flex justify-content-center align-items-center">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="promotion-content col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <h3>BIC Final Presentation</h3>
                    <p>
                        disini kamu akan melihat para finalis dari lomba BNCC Idea Competition menyampaikan ide mereka di depan para juri secara langsung dan dapatkan keseruannya
                    </p>
                </div>
            </div>
            <div class="promotion-card row left-border right-border shadow">
                <div style="border-right:1px solid grey" class="promotion-logo col-sm-12 col-md-12 col-lg-2 col-xl-2 d-flex justify-content-center align-items-center">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="promotion-content col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <h3>BIC Final Presentation</h3>
                    <p>
                        disini kamu akan melihat para finalis dari lomba BNCC Idea Competition menyampaikan ide mereka di depan para juri secara langsung dan dapatkan keseruannya
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 container d-flex flex-column justify-content-center"> --}}
            {{-- <h1 style="color:white;font-size:2.5em;font-weight:bold;">Location</h1>
            <div id="map"></div>
            <div style="color:white;margin-top:1.2em;">
                <h3>Foodcourt Binus Anggrek</h3>
                <h3>25 - 26 June 2019</h3>
            </div> --}}
        {{-- </div>
    </div> --}}
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
                <form class="text-center" action="{{route('contactus')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">    
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn-contact text-center">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div id="footer" class="footer container-fluid row" style="width:100%; margin:0;background-color:#365676;">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 d-flex justify-kiri">
            <div style="max-width:10em;">
                <h5 class="text-center" style="transform:translateY(2em); color:white">Organized by:</h5>
                <a href="http://bncc.net/" target="_blank" class="anti-a"><img src="{{asset('image/BNCC.png')}}" class="img-fluid" style="max-width:8em;" alt="BNCC"></a>
            </div>
        </div>
        <div class=" col-lg-6 col-md-6 col-xs-12 col-sm-12 d-flex justify-kanan">
            <div style="max-width:10em;" >
                <h5 class="text-center" style="transform:translateY(2em); color:white">Powered by:</h5>
                <a href="http://bncc.net/" target="_blank" class="anti-a"><img src="{{asset('image/binus.png')}}" class="img-fluid" style="max-width:8em;" alt="Binus"></a>
            </div>
        </div>
    </div>
 </div> 

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/landing-page.js')}}"></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWjXXUDGAmsn2Ac1_-oRQUgDG7sNTQbWw&callback=initMap" async defer></script> --}}
</body>
</html>