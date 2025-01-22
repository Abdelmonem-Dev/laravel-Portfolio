@extends('layouts.auth')
@section('content')
@section('title', 'Forgot Pass Page')

<div class="forgot-password-container">
    <h1 class="forgot-password-title">Forgot Password</h1>
    <form class="forgot-password-form">
        <input type="email" name="email" class="forgot-password-input" placeholder="Enter your email"  required />
        <button type="submit" class="forgot-password-button">Send Reset Link</button>
    </form>
    <p class="forgot-password-back-link">
        <a href="{{route('auth.login')}}">Back to Login</a>
    </p>
</div>
@endsection
