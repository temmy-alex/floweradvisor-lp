@extends('layouts.base-auth')

@section('title', 'Register')

@section('content')
<div class="row cdvfdfd">
    <div class="col-lg-10 col-md-12 login-box">
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-lg-6 col-md-6 log-det">
                    <div class="small-logo mb-4">
                        <i class="fab fa-asymmetrik"></i> Register
                    </div>

                    <div class="text-box-cont">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="name">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" 
                                class="form-control" name="name" placeholder="Name" aria-label="name"
                                aria-describedby="name" class="form-control @error('name') has-error @enderror" value="{{ old('name') }}">

                            <br>
                            @error('name')
                                <p class="text-danger">
                                    <small>{{ $message }}</small>
                                </p>
                            @enderror
                        </div>

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

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="password"><i class="fas fa-lock"></i></span>
                            </div>

                            <input type="password"  
                                placeholder="Password Confirmation" aria-label="Password Confirmation"
                                name="password_confirmation" id="password-confirm" 
                                class="form-control"
                                aria-describedby="password">
                            <br>
                        </div>

                        {{-- <div class="form-group">
                            <label for="captcha" class="sr-only">Captcha</label>
                            {!! app('captcha')->display() !!}
        
                            @error('g-recaptcha-response')
                                <p class="text-danger">
                                    <small>{{ $message }}</small>
                                </p>
                            @enderror
                        </div> --}}

                        <div class="input-group center">
                            <button class="btn btn-danger btn-round">Sign Up</button>
                        </div>
                        <div class="row">
                            <p class="forget-p">Already have an account? 
                                <span><a href="{{ route('login') }}">Sign In</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 box-de">
                    <div class="inn-cover">
                        {{-- <div class="foter-credit">
                            <a href="{{ url('/') }}">{{ env('APP_NAME') }}</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


{{-- @push('script')
    {!! NoCaptcha::renderJs() !!}
@endpush --}}