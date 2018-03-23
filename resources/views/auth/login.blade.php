
@extends('layouts.app')
@section('content')
@include('layouts.nav')

<div class="container auth">
    
    <h3>Login</h3>

    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>

            <a class="btn link forgot-password" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        </div>
    </form>       
</div>
@endsection
