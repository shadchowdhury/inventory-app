@extends('layouts.guest-main')

@section('content')

<div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">

    <div class="signin-logo tx-center tx-28 tx-bold tx-inverse mg-b-40"><span class="tx-normal">[</span><span class="tx-info">BLUE</span>BELL<span class="tx-normal">]</span></div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="name" class="form-control @error('name') border border-danger @enderror" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Enter your fullname">
            @error('email')
            <p class="tx-danger tx-12 d-block mg-t-10">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" class="form-control @error('email') border border-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">
            @error('email')
            <p class="tx-danger tx-12 d-block mg-t-10">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" class="form-control @error('password') border border-danger @enderror" name="password" required autocomplete="new-password" placeholder="Enter password">
            @error('password')
            <p class="tx-danger tx-12 d-block mg-t-10">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" class="form-control @error('password') border border-danger @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
            @error('password')
            <p class="tx-danger tx-12 d-block mg-t-10">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-info btn-block">Register</button>
    </form>
    <div class="mg-t-20 tx-center"><a href="{{ route('login') }}" class="tx-info">Already registered?</a></div>
</div>


@endsection
