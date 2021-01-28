@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card" style="border-radius: 25px;border:2px solid #f47321;">
                <div class="row"> 
                    <div class="col-5">
                        <img src="{{ URL::asset('frontend/images/aboutus.png') }}" style="border-radius: 25px 0 0 25px;height:320px;" class="img-fluid" alt="">
                    </div> 
                    <div class="col-7">
                    <div class="col-4 mt-4 mx-auto">
                        <img src="{{ asset ('img/logo/mainlogo.png')}}" class="img-fluid" alt="">
                    </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right "><b>{{ __('E-Mail Address') }}</b></label>

                                    <div class="col-md-6">
                                        <input style="height:30px;border-color:#f47321" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"><b>{{ __('Password') }}</b></label>

                                    <div class="col-md-6">
                                        <input style="height:30px;border-color:#f47321" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                <b>{{ __('Remember Me') }}</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-5">
                                        <button type="submit" class="btn " style="background-color:#f47321;color:white;border-radius:10px;width:100px">
                                            {{ __('Login') }}   
                                        </button>

                                        
                                    </div>
                                    @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size:12px;">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                </div>
                            </form>
                        </div>
                    </div>       
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection