@extends('layouts.guest')

@section('content')
<div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
    <div class="signin-logo tx-center tx-28 tx-bold tx-inverse mg-b-10"><span class="tx-normal">[</span><span class="tx-info">BLUE</span>BELL<span class="tx-normal">]</span></div>
    <div class="tx-center tx-gray-600 mg-b-10">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</div>

    @if (session('status'))
    <div class="tx-success tx-14 mg-b-10">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control @error('email') border border-danger @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email">
            @error('email')
            <p class="tx-danger tx-13 d-block mg-t-10">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-info btn-block">Email Password Reset Link</button>
    </form>
</div>
@endsection
