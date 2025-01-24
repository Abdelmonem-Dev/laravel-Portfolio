@extends('layouts.auth')
@section('content')
@section('title', 'Verify Your Email')

<div class="default-container">
    <h1 class="default-title">Verify Your Email</h1>
    <p class="default-text">
        We have sent a verification link to your email address. Please check your inbox and click the link to verify your email.
    </p>
    <form class="default-form" action="{{ route('auth.resendTokenAction') }}" method="post">
        @csrf
        <input type="hidden" name="email" value="{{ $email }}">
        <p class="default-text">
            Didn't receive the email? Click the button below to resend the verification link.
        </p>
        <button type="submit" class="default-button">Resend Verification Link</button>
    </form>
    <p class="add-token-back-link">
        <a href="{{ route('portfolio') }}">Do it later</a>
    </p>
</div>

@endsection
