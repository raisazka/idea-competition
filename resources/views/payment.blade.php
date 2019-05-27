@extends('layouts.app')

@section('content')
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
@endsection