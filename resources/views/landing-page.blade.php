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
@if(session('message'))
<body>
<div id="register-message">
    <h1 class="text-center font-weight-bold">Thankyou For Registering</h1>
    <img src="{{asset('image/BIC.png')}}" alt="bic" class="img-fluid bic-message">
    <div style="width:90%; text-align:justify;">
        <h4 style="margin-bottom:1em;">Please check your inbox and 
            find an email from <b><i>admin@bncc.net</i></b> that contains your ticket for BNCC Idea 
            Competition Expo. Make sure to <b><i>take a screenshot of your ticket</i></b> (including the QR Code 
            and OTP Code) because it will be used a lot during BNCC Idea Competition Expo.</h4>
        <h4 style="margin-bottom:1em;">If you <b><i>don't get any email from admin@bncc.net</i></b> within an hour after you registered, please don't hesitate to contact us so we can send you another email :)</h4>        
    </div>
    <button type="button" id="close-notice" class="btn btn-success shadow">Ok I Understand</button>
</div>
@else
<body onload="loadingScene()">
<div id="loader">
    <img src="image/BIC.png" class="img-fluid img-loaderi" alt="">
    <h2 class="text-center"><i>"Influence Business <br>Through Innovative Idea"</i></h2>
</div>
@endif
<div class="body-content">
    <div class="landing-page" id="home-div">
        <div class="navbar" style="">
            <div class="nav-left">
                {{-- <img src="image/LogoBIC.png" class="img-fluid" alt="BIC Image  "> --}}
            </div>
            <div class="nav-right">
                <div class="no-burger">
                    <a href="#section-2">What is BIC</a>
                    <a href="#expo">Registration</a>
                    <a href="#time-line">Timeline</a>
                    <a href="#sponsor-platinum">Sponsor</a>
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
            <div class="section-navbar-list"><a href="#expo">Registration</a></div>
            <div class="section-navbar-list"><a href="#time-line">Timeline</a></div>
            <div class="section-navbar-list"><a href="#sponsor-platinum">Sponsor</a></div>
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
    <div class="expo" id="expo" style="background-color:#eff3f4">
        <div class="row m-0">
            <div class="col-lg-6 col-xl-6 col-md-12 col-xs-12 p-0">
                <div id="carouselId" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" style="bottom:0;">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div>
                                <div class="inner-carousel-content" style="justify-content:center;">
                                    <h1 class="font-weight-bold" style="font-size:3em;color:#556489">EXPO</h1>
                                    <img src="{{asset('image/expo.png')}}" alt="" style="max-width:15em;" >
                                    <h4 class="text-justify">
                                        Expo dimana terdapat booth-booth dari perusahaan IT dan pengunjung booth bisa mendapatkan merchandise exclusive dari perusahaan dengan gratis
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <div class="inner-carousel-content" style="justify-content:center;">
                                    <h1 class="font-weight-bold" style="font-size:3em;color:#556489">Fire-Side Chat</h1>
                                    <img src="{{asset('image/Fire-side.png')}}" alt="" style="max-width:15em;" >
                                    <h4  class="text-justify">
                                        Fire-side Chat adalah acara talk-show seputar bisnis dan teknologi untuk peserta Expo BNCC Idea Competition.
                                    </h4>    
                                    <button class="btn btn-primary">Fire-Side Chat detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <div class="inner-carousel-content" style="justify-content:center;">
                                    <h1 class="font-weight-bold" style="font-size:3em;color:#556489">Leaders' Talk</h1>
                                    <img src="{{asset('image/Lead-talk.png')}}" alt="" style="max-width:15em;" >
                                    <h4 class="text-justify">
                                        Leaders' Talk adalah acara seminar seputar bisnis dan teknologi dari para experts di bidangnya.
                                    </h4>
                                    <button class="btn btn-primary">Leaders' Talk detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-md-12 col-xs-12 bg-dark-blue height">
                <div class="inner-content color-white">
                    <span class="text-center">
                            <h4 class="color-white">Daftar Sebagai</h4>
                            <h1 class="color-white">Peserta Expo</h1>
                    </span>
                    <h4 class="text-center content-expo color-white">
                            Dapatkan kesempatan mengikuti seminar dan talkshow teknologi serta bisnis secara <b class="font-weight-bold color-white">gratis</b>
                            dan juga merchandise exclusive dari perusahaan dengan daftar sebagai peserta expo
                        </h4>
                    <div class="row container">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">
                            <a class="anti-a btn-regis-expo" href="{{route('expo.regis')}}" >
                                <button type="submit">REGISTER</button>
                            </a>
                        </div>
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
                <div class="containert right-t ">
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
                        <h1 class="text-center">22 Juni 2019</h1>
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
                        <h1 class="text-center">23 June 2019</h1>
                        <h2 class="text-center">Finalist Announcement
                            
                        {{-- <button class="btn-timeline">Click here for more info</button> --}}
                        </h2>                
                    </div>
                </div>
            </div>
            <div class="try-time-line try-time-left">
                <div class="containert left-t ">
                    <div class="contentt shadow">
                        <h1 class="text-center">23 June 2019</h1>
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
                <div class="containert right-t active-time">
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
    <div class="sponsor " id="sponsor-platinum">
        <div class="sponsor-header">
            <span></span>
            <h1>Platinum Sponsor</h1>
            <span></span>
        </div>
        <div class="d-flex justify-content-center align-items-center">
           <a href="https://www.tiket.com/" target="_blank"><img src="{{asset('image/logo/Tiket-small.png')}}" style="width:20em; margin: 5em 0 ;" alt=""></a> 
        </div>
        <div class="sponsor-header">
            <span></span>
            <h1>Gold Sponsor</h1>
            <span></span>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="width:100%;">
            <div class="d-flex justify-content-center align-items-center c7" style="flex-flow:wrap;">
                <a href="https://www.go-jek.com/" target="_blank"><img src="{{asset('image/logo/Gojek-small.png')}}" style="max-width:15em; margin:3em 2em;" alt=""></a> 
                <a href="https://www.bca.co.id/" target="_blank"><img src="{{asset('image/logo/BCA.png')}}" style="max-width:15em; margin:3em 2em;" alt=""></a>
                <a href="https://www.urbanhire.com/" target="_blank"><img src="{{asset('image/logo/UrbanHire.png')}}" style="max-width:15em; margin:3em 2em;" alt=""></a>
            </div>
        </div>
        <div class="sponsor-header">
            <span></span>
            <h1>Silver Sponsor</h1>
            <span></span>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="width:100%;">
            <div class="d-flex justify-content-center align-items-center" style="flex-flow:wrap;">
                <a href="https://fore.coffee/" target="_blank"><img src="{{asset('image/logo/Fore.png')}}" style="max-width:12em; margin:0 2em;" alt=""></a>
                <a href="https://vidvie.co.id/" target="_blank"><img src="{{asset('image/logo/Vidvie.png')}}" style="max-width:12em; margin:0 2em;" alt=""></a>
                <a href="https://shopee.co.id/" target="_blank"><img src="{{asset('image/logo/Shopee.png')}}" style="max-width:13em; margin:0 2em;" alt=""></a>
            </div>
        </div>
        <div class="sponsor-header">
            <span></span>
            <h1>Exhibitor</h1>
            <span></span>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="width:100%;margin-bottom:2em;">
            <div class="d-flex justify-content-center align-items-center" style="flex-flow:wrap;">
                <a data-toggle="modal" style=" margin:0 2em;" data-target="#Tiket"><img src="{{asset('image/logo/Tiket.png')}}" style="max-width:15em; " alt=""></a>
                <a data-toggle="modal" style=" margin:0 2em;" data-target="#BCA"><img src="{{asset('image/logo/BCA-big.png')}}" style="max-width:15em; " alt=""></a>
                <a data-toggle="modal" style=" margin:0 2em;" data-target="#Gojek"><img src="{{asset('image/logo/Gojek.png')}}" style="max-width:15em;" alt=""></a>
                <a data-toggle="modal" style=" margin:0 2em;" data-target="#UrbanHire"><img src="{{asset('image/logo/UrbanHire-big.png')}}" style="max-width:15em; " alt=""></a>
                <a data-toggle="modal" style=" margin:0 2em;" data-target="#GilaDiskon"><img src="{{asset('image/logo/GilaDiskon.png')}}" style="max-width:15em; " alt=""></a>
                <a data-toggle="modal" style=" margin:0 2em;" data-target="#Qwords"><img src="{{asset('image/logo/Qwords.png')}}" style="max-width:15em; " alt=""></a>
                <a data-toggle="modal" style=" margin:0 2em;" data-target="#Hacktiv8"><img src="{{asset('image/logo/Hacktiv8.png')}}" style="max-width:15em; " alt=""></a>
                <a data-toggle="modal" style=" margin:0 2em;" data-target="#Vidvie"><img src="{{asset('image/logo/Vidvie.png')}}" style="max-width:15em;" alt=""></a>
                <a data-toggle="modal" style=" margin:0 2em;" data-target="#Shopee"><img src="{{asset('image/logo/Shopee.png')}}" style="max-width:15em; " alt=""></a>
                <a data-toggle="modal" style=" margin:0 2em;" data-target="#Sirclo"><img src="{{asset('image/logo/Sirclo.png')}}" style="max-width:15em; " alt=""></a>
            </div>
        </div>
        <div class="sponsor-header">
            <span></span>
            <h1>Media Partner</h1>
            <span></span>
        </div>
        <div class="d-flex justify-content-center align-items-center" style="width:100%;">
            <div class="d-flex justify-content-center align-items-center" style="flex-flow:wrap;">
                <img src="{{asset('image/medpart.png')}}" style="max-width:85%; margin:0 0 2em 0;" alt="">
            </div>
        </div>
    </div >
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
                    <div class="faq-desc"> Setelah melakukan registrasi dan melakukan pembayaran biaya lomba, maka tombol untuk men-download case akan muncul dan peserta dapat langsung mengerjakan proposal sampai batas akhir pengumpulan yaitu Sabtu, 22 Juni 2019.</div>
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
    <div class="location" id="location">
        {{-- <div id="map"></div> --}}
        <div class="content-map">
            <h1 style="color:white;font-size:2.5em;font-weight:bold;">Location</h1>
            <div style="color:white;margin-top:1.2em;">
                <h3>Foodcourt Binus Anggrek</h3>
                <h3>25 - 26 June 2019</h3>
            </div>
            <a class="anti-a btn btn-primary" href="{{asset('image/expo-map.png')}}">
                View Denah Expo
            </a>
        </div>
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
    <!--Modals-->
    <div class="modal fade" id="Shopee" tabindex="-1" role="dialog" aria-labelledby="Shopee" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#212121;color:#ffffff;border-radius:0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Shopee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#ffffff;">&times;</span>
                </button>
                </div>
                <div class="modal-body" class="d-flex" style="padding: 1rem 2rem;">
                    <div style="display:flex; align-items:center; justify-content:center;">
                        <a href="https://shopee.co.id/" target="_blank" style="margin:1em 2em;">                        
                            <img src="{{asset('image/logo/Shopee.png')}}" style="max-width:15em;" alt="">
                        </a>
                    </div>
                    <h5 style="text-align:justify; width:90% margin:2em auto;">
                            Shopee is the leading e-commerce platform in Southeast Asia and Taiwan. 
                            It is a platform tailored for the region, providing customers with an easy, 
                            secure and 
                            fast online shopping experience through strong payment and logistical support. 
                    </h5>
                    <h5>
                            Shopee aims to continually enhance its platform and become the region’s e-commerce destination of choice. Shopee has a wide selection of product categories ranging from consumer electronics to home & living, health & beauty, baby & toys, fashion and fitness equipment. 
                    </h5>
                    <h5>
                            Shopee, a Sea company, was first launched in Singapore in 2015, and has since expanded its reach to Malaysia, Thailand, Taiwan, Indonesia, Vietnam and the Philippines. Sea is a leader in digital entertainment, e-commerce and digital financial services across Greater Southeast Asia. Sea's mission is to better the lives of consumers and small businesses with technology, and is listed on the NYSE under the symbol SE.
                    </h5>
                    <br>
                    <h5>
                        Visit : <a href="https://shopee.co.id/" target="_blank">https://shopee.co.id</a>
                    </h5>
                </div>
                <div class="modal-footer" style="background-color:#212121;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--Qwords-->
    <div class="modal fade" id="Qwords" tabindex="-1" role="dialog" aria-labelledby="Qwords" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#212121;color:#ffffff;border-radius:0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Qwords</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#ffffff;">&times;</span>
                </button>
                </div>
                <div class="modal-body" class="d-flex" style="padding: 1rem 2rem;">
                    <div style="display:flex; align-items:center; justify-content:center;">
                        <a href="https://www.qwords.com/" target="_blank" style="margin:1.5em 2em;">                        
                            <img src="{{asset('image/logo/Qwords-small.png')}}" style="max-width:15em;" alt="">
                        </a>
                    </div>
                    <h5 style="text-align:justify; width:90% margin:2em auto;">
                            PT Qwords Company International is a Technology Company, established in mid 2005.
                            Our Founder and Team has more than 10 years of experience in the IT & Managament
                            sector, and one of our subsidiaries serves more than 55.000 domestic and
                            International customers. We have capabilities in On Demand Hosting services, 
                            Cloud & Data center solutions, 
                            Integrated Marketing Communications, Research and Development Product. 
                    </h5>
                    <br>
                    <h5>
                        Visit : <a href="https://www.qwords.com/" target="_blank">https://www.qwords.com/</a>
                    </h5>
                </div>
                <div class="modal-footer" style="background-color:#212121;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--GilaDiskon-->
    <div class="modal fade" id="GilaDiskon" tabindex="-1" role="dialog" aria-labelledby="GilaDiskon" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#212121;color:#ffffff;border-radius:0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Giladiskon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#ffffff;">&times;</span>
                </button>
                </div>
                <div class="modal-body" class="d-flex" style="padding: 1rem 2rem;">
                    <div style="display:flex; align-items:center; justify-content:center;">
                        <a href="https://www.giladiskon.com/" target="_blank" style="margin:1em 2em;">                        
                            <img src="{{asset('image/logo/GilaDiskon-small.png')}}" style="max-width:15em;" alt="">
                        </a>
                    </div>
                    <h5 style="text-align:justify; width:90% margin:2em auto;">
                        Giladiskon adalah sebuah platform dan app bagi konsumen di Indonesia untuk mencari penawaran terbaik seperti diskon, 
                        voucher dan kode promosi dari berbagai macam brand favorit untuk F&B, Fashion, 
                        dan Entertainment. Member Giladiskon bisa menikmati voucher diskon dan promo 
                        sepuasnya tanpa ada batasan sepanjang tahun, dimana promo dan diskon yang 
                        diberikan akan terus bertambah dan semakin beragam.
                    </h5>
                    <br>
                    <h5>
                        Visit : <a href="https://www.giladiskon.com/" target="_blank">https://www.giladiskon.com</a>
                    </h5>
                </div>
                <div class="modal-footer" style="background-color:#212121;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Urban Hire-->

    <div class="modal fade" id="UrbanHire" tabindex="-1" role="dialog" aria-labelledby="UrbanHire" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#212121;color:#ffffff;border-radius:0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Urbanhire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#ffffff;">&times;</span>
                </button>
                </div>
                <div class="modal-body" class="d-flex" style="padding: 1rem 2rem;">
                    <div style="display:flex; align-items:center; justify-content:center;">
                        <a href="https://www.urbanhire.com/" target="_blank" style="margin:1em 2em;">                        
                            <img src="{{asset('image/logo/UrbanHire.png')}}" style="max-width:15em;" alt="">
                        </a>
                    </div>
                    <h5 style="text-align:justify; width:90% margin:2em auto;">
                        Urbanhire is the #1 Recruitment & Assessment Platform for leading companies in Indonesia. It is a collaborative platform empowering applicant-tracking and resume search by multiple users. Urbanhire partners with a broad range of third-party apps and tools who are solving very specific recruiting and HR tasks to provide a seamless and integrated experience; AON and Mercer for online assessments and Astronaut for video interview. As part of the services, Urbanhire provides multiple job distribution channel through 50+ job portals and top universities.
                    </h5>
                    <br>
                    <h5>
                        Visit : <a href="https://www.urbanhire.com/" target="_blank">https://www.urbanhire.com</a>
                    </h5>
                </div>
                <div class="modal-footer" style="background-color:#212121;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Sirclo-->

    <div class="modal fade" id="Sirclo" tabindex="-1" role="dialog" aria-labelledby="Sirclo" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#212121;color:#ffffff;border-radius:0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sirclo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#ffffff;">&times;</span>
                </button>
                </div>
                <div class="modal-body" class="d-flex" style="padding: 1rem 2rem;">
                    <div style="display:flex; align-items:center; justify-content:center;">
                        <a href="https://www.sirclo.com/" target="_blank" style="margin:1em 2em;">                        
                            <img src="{{asset('image/logo/Sirclo.png')}}" style="max-width:15em;" alt="">
                        </a>
                    </div>
                    <h5 style="text-align:justify; width:90% margin:2em auto;">
                       <h5>Dimulai pada tahun 2013, SIRCLO adalah perusahaan teknologi e-commerce yang menyediakan solusi untuk membantu brands berjualan online.</h5>
                        <h5>SIRCLO Store adalah sebuah platform SaaS (Software-as-a-Service) untuk membuat situs toko online yang menyasar bisnis lokal. SIRCLO Store didukung teknologi untuk membangun toko online secara instan berbasis template siap pakai.</h5>
                        <h5>SIRCLO Commerce adalah sebuah CMS (channel management solution) yang menjawab kebutuhan brand skala nasional dan multinasional untuk masuk ke jalur distribusi online. SIRCLO Commerce menggunakan teknologi yang dapat mensinkronisasi penjualan di berbagai marketplace.</h5>    
                    </h5>
                    <br>
                    <h5>
                        Visit : <a href="https://www.sirclo.com/" target="_blank">https://www.sirclo.com</a>
                    </h5>
                </div>
                <div class="modal-footer" style="background-color:#212121;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Hacktiv8-->

    <div class="modal fade" id="Hacktiv8" tabindex="-1" role="dialog" aria-labelledby="Hacktiv8" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#212121;color:#ffffff;border-radius:0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Hacktiv8</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#ffffff;">&times;</span>
                </button>
                </div>
                <div class="modal-body" class="d-flex" style="padding: 1rem 2rem;">
                    <div style="display:flex; align-items:center; justify-content:center;">
                        <a href="https://hacktiv8.com/" target="_blank" style="margin:1em 2em;">                        
                            <img src="{{asset('image/logo/Hacktiv8.png')}}" style="max-width:15em;" alt="">
                        </a>
                    </div>
                    <h5 style="text-align:justify; width:90% margin:2em auto;">
                        HACKTIV8 adalah program pembelajaran Full Stack JavaScript immersive pertama di Indonesia. Kami juga memiliki beragam program singkat untuk membangun fondasi menjadi seorang programmer yang handal. Kurikulum kami dirancang untuk membangun keahlian yang dapat diaplikasikan pada perkembangan dunia teknologi terkini.
                    </h5>
                    <br>
                    <h5>
                        Visit : <a href="https://hacktiv8.com/" target="_blank">https://hacktiv8.com</a>
                    </h5>
                </div>
                <div class="modal-footer" style="background-color:#212121;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Tiket.com-->

    <div class="modal fade" id="Tiket" tabindex="-1" role="dialog" aria-labelledby="Tiket" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#212121;color:#ffffff;border-radius:0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tiket.com</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#ffffff;">&times;</span>
                </button>
                </div>
                <div class="modal-body" class="d-flex" style="padding: 1rem 2rem;">
                    <div style="display:flex; align-items:center; justify-content:center;">
                        <a href="https://www.tiket.com/" target="_blank" style="margin:1em 2em;">                        
                            <img src="{{asset('image/logo/Tiket.png')}}" style="max-width:15em;" alt="">
                        </a>
                    </div>
                    <h5 style="text-align:justify; width:90% margin:2em auto;">
                        With a vision to be the most consumer centric Indonesian-built Online Travel Agent (OTA), tiket.com is one of the major player in Southeast Asian tourism industry, integrating and empowering easier travel, transport, and accommodation bookings for millions of our consumers globally. With rapid business growth in 2018, we aim to become the next Tech 'Unicorn' in ASEAN, operating in 9 offices in 5 countries including Indonesia, Malaysia, Singapore, India, & Canada to integrate hundred thousands of tourism business partners.    
                    </h5>
                    <br>
                    <h5>
                        Visit : <a href="https://www.tiket.com/" target="_blank">https://www.tiket.com</a>
                    </h5>
                </div>
                <div class="modal-footer" style="background-color:#212121;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Gojek-->

    <div class="modal fade" id="Gojek" tabindex="-1" role="dialog" aria-labelledby="Gojek" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#212121;color:#ffffff;border-radius:0">
                    <h5 class="modal-title" id="exampleModalLongTitle">GOJEK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#ffffff;">&times;</span>
                </button>
                </div>
                <div class="modal-body" class="d-flex" style="padding: 1rem 2rem;">
                    <div style="display:flex; align-items:center; justify-content:center;">
                        <a href="https://www.go-jek.com/" target="_blank" style="margin:3em 2em;">                        
                            <img src="{{asset('image/logo/Gojek-small.png')}}" style="max-width:15em;" alt="">
                        </a>
                    </div>
                    <h5 style="text-align:justify; width:90% margin:2em auto;">GOJEK is a tech company who provide on demand transport and 
                        lifestyle services that move the city. We now operates in more than 
                        200 cities across Southeast Asia and more to come. Driven by the spirit
                            of spreading positive social impacts through technology, GOJEK’s
                            expansion aims to improve the quality of life of our customers by 
                            ensuring efficiency in each market and to be the solution of every day’s
                            frustration.</h5>
                            <br>
                    <h5>
                        Visit Gojek Website : <a href="https://www.go-jek.com/" target="_blank">https://www.go-jek.com</a>
                    </h5>
                </div>
                <div class="modal-footer" style="background-color:#212121;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--Vidvie-->
    <div class="modal fade" id="Vidvie" tabindex="-1" role="dialog" aria-labelledby="Vidvie" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#212121;color:#ffffff;border-radius:0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Vidvie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#ffffff;">&times;</span>
                </button>
                </div>
                <div class="modal-body" class="d-flex" style="padding: 1rem 2rem;">
                    <div style="display:flex; align-items:center; justify-content:center;">
                        <a href="https://vidvie.co.id/" target="_blank" style="margin:0">                        
                            <img src="{{asset('image/logo/Vidvie.png')}}" style="max-width:15em;" alt="">
                        </a>
                    </div>
                    <h5 style="text-align:justify; width:90% margin:2em auto;">PT. TUNGGAL JAYA PRATAMA adalah agen tunggal resmi dari brand Vidvie untuk pasar Indonesia.
                        Vidvie merupakan sebuah brand international "Smartphone Accessories" dari Hong Kong yang sudah didistribusikan ke 75 negara termasuk Indonesia.<br>
                    <h5>
                        Visit Gojek Website : <a href="https://vidvie.co.id/" target="_blank">https://vidvie.co.id</a>
                    </h5>
                </div>
                <div class="modal-footer" style="background-color:#212121;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modals-->
    <div class="modal fade" id="Tiket" tabindex="-1" role="dialog" aria-labelledby="Tiket" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                <img src="{{asset('')}}" alt="">
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
</body>
</html>