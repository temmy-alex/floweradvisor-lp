@extends('layouts.base-auth')

@section('content')
<div class="row cdvfdfd">
    <div class="col-lg-10 col-md-12 login-box">
        <form action="{{ route('password.email') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-lg-6 col-md-6 log-det">
                    <div class="small-logo mb-4">
                        <i class="fab fa-asymmetrik"></i> Reset Password
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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

                        <div class="input-group center">
                            <button class="btn btn-danger btn-round">Send Password Reset Link</button>
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
