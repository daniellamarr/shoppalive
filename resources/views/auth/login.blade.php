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
            <div class="login-body row">
                <div class="col-md-12 mb-3">
                    <label for="username">Username or Email</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="col-md-12 mb-3">
                    <button class="btn essence-btn">Login</button>
                </div>
            </div>
        </div>
    </center>
@endsection
