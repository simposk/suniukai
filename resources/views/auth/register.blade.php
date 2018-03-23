@extends('layouts.app')
@section('content')

@include('layouts.nav')
<div class="container auth">
    <h3>Register</h3>

    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group row">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </form>
</div>

@endsection
