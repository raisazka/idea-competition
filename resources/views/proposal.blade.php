@extends('layouts.app')

@section('content')
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

    <h1>Proposal</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea culpa enim veritatis illo perferendis vitae hic, 
        harum consequuntur animi autem voluptatem inventore 
        cumque perspiciatis similique tempora, rem omnis quis rerum?</p>

    <a href="{{route('proposal.download')}}">Download Template Proposal</a>

    <form action="{{route('proposal.upload')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="proposal">Upload Proposal</label>
        <input type="file" id="proposal" class="form-control" name="proposal">
        <button class="btn btn-success" type="submit">Upload</button>
    </form>
@endsection