@extends('auth.main')
@section('title', 'Shoppa - Login')
@section('content')
<section id="login">
    <center>
        <div class="login">
            <div class="login-title">
                <h3>Login to Shoppa Live</h3>
                <p>Don't have an account ? <a href="{{ url('register') }}">Register</a></p>
            </div>
            <div class="login-body">
                <form class="row" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="col-md-12 mb-3">
                        <label for="username">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-12 mb-3">
                        <button class="btn essence-btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </center>
@endsection
