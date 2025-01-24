@extends('layouts.auth')
@section('content')
@section('title', 'Forgot Pass Page')

<div class="default-container">
    <h1 class="default-title">Forgot Password</h1>
    <form class="default-form" action="{{route('auth.forgotPasswordAction')}}" method="post">
    @csrf

        <input type="email" name="email" class="default-input" placeholder="Enter your email"  required />
        @error('email')
        <div class="alert alert-danger" style="color:red; font-size: 12px;">{{ $message }}</div>
        @enderror
        <button type="submit" class="default-button">Send Reset Link</button>
    </form>
    <p class="forgot-password-back-link">
        <a href="{{route('auth.login')}}">Back to Login</a>
    </p>
</div>
@endsection
