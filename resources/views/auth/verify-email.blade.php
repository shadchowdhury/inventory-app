@extends('layouts.guest')

@section('content')

<div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">

    <div class="signin-logo tx-center tx-28 tx-bold tx-inverse mg-b-40"><span class="tx-normal">[</span><span class="tx-info">BLUE</span>BELL<span class="tx-normal">]</span></div>
    <div class="tx-center tx-gray-600 mg-b-10">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</div>

    @if (session('status') == 'verification-link-sent')
    <div class="tx-success tx-14 mg-b-10">
        <!-- {{ session('status') }} -->
        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
    </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf

        <button type="submit" class="btn btn-info btn-block mg-b-10">Resend Verification Email</button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="btn btn-info btn-block">Log Out</button>
    </form>
</div>

@endsection
