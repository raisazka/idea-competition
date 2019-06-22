@extends('admin.layouts.app')

@section('content')

<h1>registered :{{$counter}}</h1>

@foreach ($expo as $expom)

{{$loop->index+1}}.&nbsp; {{$expom->name}} <br>

    
@endforeach


@endsection
