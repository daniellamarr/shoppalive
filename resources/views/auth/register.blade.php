@extends('auth.main')
@section('title', 'Shoppa - Register')
@section('content')
<section id="login">
    <center>
        <div class="login">
            <div class="login-title">
                <h3>Register on Shoppa Live</h3>
                <p>Already have an account ? <a href="{{ url('login') }}">Login</a></p>
            </div>
            <div class="login-body">
                <form class="row" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="col-md-12 mb-3">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="username">Preferred Shop Name</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="password">Password *</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn essence-btn">Proceed ></button>
                    </div>
                </form>
            </div>
        </div>
    </center>
</section>
@endsection
