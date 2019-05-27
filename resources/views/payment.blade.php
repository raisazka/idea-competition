<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/payment.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <img src="image/wave_atas.png" class="wave wave_atas">
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
    <div class="container start">
        <h1 class="text-header">Payment</h1>
        <div class="card-payment">
            <ol class="list-group list-group-flush no-bg">
                <li class="list-group-item">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique maiores dolorem exercitationem itaque sed quam amet repellat obcaecati ex, unde accusamus mollitia, nulla assumenda totam quos, quis ad! Ad, perspiciatis maxime. Eaque magni laborum dolores corrupti cumque animi perferendis doloremque. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius dolor tempora sed?</li>
                <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eos veniam ex sed alias fuga ut quisquam earum saepe. Quidem. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui praesentium saepe, ratione ad illo ullam veniam officiis provident rem eius ea sed, odio ducimus animi corrupti, accusantium explicabo iusto excepturi.</li>
            </ol>
        </div>    
    </div>
        @if ($payment != null)
            <label>Bukti Bayar Anda</label>
            <a href="{{asset('storage/payment/'.$payment->payment)}}">
                <img src="{{asset('storage/payment/'.$payment->payment)}}" alt="no-image" width="200" height="200">
            </a>
        @endif

<div class="container end">
    <form action="{{route('payment.upload')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row d-flex align-items-end">   
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <label for="payment"><h1 class="text-header">Upload Bukti Bayar</h1></label>
                <input type="file" accept=".pdf,.png,.jpg,.PDF,.PNG,.JPG,.JPEG,.jpeg"  class="form-control @error('payment') is-invalid @enderror" id="payment" name="payment" required autofocus>
                <span class="pay_wrong" style="color:red; font-weight:700; font-size: .8em">
                    @if ($errors->has('payment'))
                    {{ $errors->first('payment') }}
                    @endif
                </span>
            </div> 
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <button class="btn btn-me" id="btn-payment" type="submit">Upload</button>
            </div>
        </div>
    </form>  
</div>
        
    <img src="image/wave_bawah.png" class="wave wave_bawah">
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/payment.js')}}"></script>  
</body>
</html>
