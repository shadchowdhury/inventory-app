@extends('layouts.guest')

@section('content')
<div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
    <div class="signin-logo tx-center tx-28 tx-bold tx-inverse mg-b-40"><span class="tx-normal">[</span><span class="tx-info">BLUE</span>BELL<span class="tx-normal">]</span></div>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="email" id="email" class="form-control @error('email') border border-danger @enderror" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" placeholder="Enter your email">
            @error('email')
            <p class="tx-danger tx-12 d-block mg-t-10">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" class="form-control @error('password') border border-danger @enderror" id="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
            @error('password')
            <p class="tx-danger tx-12 d-block mg-t-10">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group d-flex justify-content-between">
            <label class="ckbox ckbox-success">
                <input type="checkbox" name="remember">
                <span>Remember me</span>
            </label>

            <a href="{{ route('password.request') }}" class="x-info tx-13 d-block">Forgot your password?</a>
        </div>

        <button type="submit" class="btn btn-info btn-block">Log In</button>
    </form>
    <div class="mg-t-40 tx-center">Not yet a member? <a href="{{ route('register') }}" class="tx-info">Sign Up</a></div>
</div>

@endsection
