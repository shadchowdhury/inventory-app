@extends('layouts.guest')

@section('content')
<div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
    <div class="signin-logo tx-center tx-28 tx-bold tx-inverse mg-b-10"><span class="tx-normal">[</span><span class="tx-info">BLUE</span>BELL<span class="tx-normal">]</span></div>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-group">
            <input type="email" class="form-control @error('email') border border-danger @enderror" name="email" value="{{ old('email', $request->email) }}" required autocomplete="email" placeholder="Enter your email">
            @error('email')
            <p class="tx-danger tx-12 d-block mg-t-10">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" class="form-control @error('password') border border-danger @enderror" name="password" required autocomplete="new-password" placeholder="New password">
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

        <button type="submit" class="btn btn-info btn-block">Reset Password</button>
    </form>
</div>
@endsection
