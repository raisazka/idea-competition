@extends('layouts.app')

@section('content')
<div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('email') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="email">

                                @if($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @if($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <hr>
                        <h2>Members</h2>
                        <div id="holder">
        <div class="form-group row">
                <label for="member_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="member_name" type="text" class="form-control @error('member_name') is-invalid @enderror" name="member_name[]" value="{{ old('member_name') }}" required autocomplete="member_name" autofocus>

                    @if($errors->has('member_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('member_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email[]" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @if($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone[]" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @if($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                            <label for="line" class="col-md-4 col-form-label text-md-right">{{ __('Line') }}</label>

                            <div class="col-md-6">
                                <input id="line" type="text" class="form-control @error('line') is-invalid @enderror" name="line[]" value="{{ old('line') }}" required autocomplete="line" autofocus>

                                @error('line')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>
    
                                <div class="col-md-6">
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob[]" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
    
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="ktp" class="col-md-4 col-form-label text-md-right">{{ __('Upload KTP') }}</label>
    
                                <div class="col-md-6">
                                    <input id="ktp" type="file" class="form-control @error('ktp') is-invalid @enderror" name="ktp[]" value="{{ old('ktp') }}" required autocomplete="ktp" autofocus>
    
                                    @error('ktp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row mb-0">
                                <div class="col-md-4">
                                        <a id="add">Add Person</a>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
    <script>
        var i = 1;
        
        $('#add').on('click', function(){
        i++;
        if(i <= 3){
        $('#holder').append(
            '<hr>' +
            '<div class="form-group row">' +
            '<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>' +
            '<div class="col-md-6">' +
            '<input id="member_name" type="text" class="form-control @error('name') is-invalid @enderror" name="member_name[]" value="{{ old('member_name') }}" required autocomplete="member_name" autofocus>'
            + '</div>' 
            + '</div>'
            + '<div class="form-group row">' +
            '<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>' +
            '<div class="col-md-6">' +
            '<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email[]" value="{{ old('email') }}" required autocomplete="email">'
            + '</div>' 
            + '</div>' +
            '<div class="form-group row">' +
            '<label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>' +
            '<div class="col-md-6">' +
            '<input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone[]" required autocomplete="tel">'
            + '</div>' 
            + '</div>' +
            '<div class="form-group row">' +
            '<label for="line" class="col-md-4 col-form-label text-md-right">{{ __('Line ID') }}</label>' +
            '<div class="col-md-6">' +
            '<input id="line" type="text" class="form-control" name="line[]"  required autocomplete="line">'
            + '</div>' 
            + '</div>' +
            '<div class="form-group row">' +
            '<label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>' +
            '<div class="col-md-6">' +
            '<input id="dob" type="date" class="form-control" name="dob[]"  required autocomplete="dob">'
            + '</div>' 
            + '</div>' +
            '<div class="form-group row">' +
            '<label for="ktp" class="col-md-4 col-form-label text-md-right">{{ __('Upload KTP') }}</label>' +
            '<div class="col-md-6">' +
           '<input id="ktp" type="file" class="form-control" name="ktp[]"  required autocomplete="ktp">'
            + '</div>' 
            + '</div>'
        );
        }
        });
    </script>
@endsection
