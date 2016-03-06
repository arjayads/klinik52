@extends('layouts.simple')

@section('title', 'Create New Password')

@section('content')
<div class="register-block">
    <div class="register-block-header">
        <h2 class="text-center">Reset Password</h2>
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
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
        {!! csrf_field() !!}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="input-group margin-bottom-20{{ $errors->has('email') ? ' has-error' : '' }}">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input placeholder="Email address" class="form-control" type="email" name="email" value="{{ $email or old('email') }}">
        </div>

        <div class="input-group margin-bottom-20{{ $errors->has('password') ? ' has-error' : '' }}">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input placeholder="Password" class="form-control" type="password" name="password">
        </div>

        <div class="input-group margin-bottom-20{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input placeholder="Confirm password" class="form-control" type="password" name="password_confirmation">
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <button type="submit" class="btn-u btn-block">Reset Password</button>
            </div>
        </div>
    </form>
</div>
@endsection
