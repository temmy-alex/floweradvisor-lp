@extends('layouts.base-auth')

@section('title', 'Login')

@section('content')
<div class="row cdvfdfd">
    <div class="col-lg-10 col-md-12 login-box">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 log-det">
                    <div class="small-logo mb-4">
                        <i class="fab fa-asymmetrik"></i> Login
                    </div>

                    <div class="text-box-cont">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="email">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" 
                                class="form-control" name="email" placeholder="Email" aria-label="Email"
                                aria-describedby="email" class="form-control @error('email') has-error @enderror" value="{{ old('email') }}">

                            <br>
                            @error('email')
                                <p class="text-danger">
                                    <small>{{ $message }}</small>
                                </p>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="password"><i class="fas fa-lock"></i></span>
                            </div>

                            <input type="password" 
                                name="password" class="form-control @error('password') has-error @enderror" 
                                placeholder="Password" aria-label="Password"
                                aria-describedby="password">
                            <br>

                            @error('password')
                                <p class="text-danger">
                                    <small>{{ $message }}</small>
                                </p>
                            @enderror
                        </div>

                        <div class="form-group">
                            {{-- Captcha --}}
                            <label for="captcha" class="sr-only">Captcha</label>
                            {!! app('captcha')->display() !!}
        
                            @error('g-recaptcha-response')
                                <p class="text-danger">
                                    <small>{{ $message }}</small>
                                </p>
                            @enderror
                        </div>

                        <div class="input-group center">
                            <button class="btn btn-danger btn-round">Sign In</button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="forget-p"><span><a href="{{ route('register') }}">Sign Up</a></span></p>
                            </div>
                            <div class="col-md-6">
                                <p class="forget-p"><span><a href="{{ route('password.request') }}">Forgot Password</a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 box-de">
                    <div class="inn-cover"></div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


@push('script')
    {!! NoCaptcha::renderJs() !!}
@endpush