@extends('layouts.simple')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="reg-block">
        <div class="reg-block-header">
            <h2>Sign In</h2>
            <p>Don't Have Account? Click <a class="color-green" href="/register">Sign Up</a> to registration.</p>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger fade in">
                <ul style="list-style-type: none; padding-left: 5px;">
                    @foreach ($errors->all() as $error)
                        <li class="color-dark-red">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="input-group margin-bottom-20 {{ $errors->has('email') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input placeholder="Email" class="form-control" type="email" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="input-group margin-bottom-20 {{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input placeholder="Password"  type="password" class="form-control" id="password" name="password">
            </div>
            <hr/>
            <div class="checkbox">
                <label>
                    <label><input type="checkbox" name="remember"> Remember Me</label>
                </label>
            </div>
            <div class="row text-center">
                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <button type="submit" class="btn-u btn-block">Log In</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection
