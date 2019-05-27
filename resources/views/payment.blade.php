<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
            <h1>Payment</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea culpa enim veritatis illo perferendis vitae hic, 
                harum consequuntur animi autem voluptatem inventore 
                cumque perspiciatis similique tempora, rem omnis quis rerum?</p>
        
                @if ($payment == null)
                    <h1>Anda Belum Bayar</h1>
                @else
                    <label>Bukti Bayar Anda</label>
            <a href="{{asset('storage/payment/'.$payment->payment)}}">
                        <img src="{{asset('storage/payment/'.$payment->payment)}}" alt="no-image" width="200" height="200">
                    </a>
                @endif
        
            <form action="{{route('payment.upload')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <label for="payment">Upload payment</label>
                <input type="file" id="payment" class="form-control" name="payment">
                <button class="btn btn-success" type="submit">Upload</button>
            </form>    
</body>
</html>
