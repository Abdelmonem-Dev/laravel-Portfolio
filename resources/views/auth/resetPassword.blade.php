@extends('layouts.auth')
@section('content')
@section('title', 'Reset Pass Page')

<div class="default-container">
    <h1 class="default-title">Reset Password</h1>
    <form class="default-form" action="{{route('auth.ResetPasswordAction')}}" method="post">
    @csrf

    <input type="hidden" name="email" value="{{ $email }}">
    <input type="password" name="password" class="default-input" placeholder="New Password" required />
    @error('password')
    <div class="alert alert-danger" style="color:red; font-size: 12px;">{{ $message }}</div>
    @enderror
        <input type="password" name="password_confirmation" class="default-input" placeholder="Confirm New Password" required />
        @error('password_confirmation')
        <div class="alert alert-danger" style="color:red; font-size: 12px;">{{ $message }}</div>
        @enderror
        <button type="submit" class="default-button">Reset Password</button>
    </form>
    <p class="reset-password-back-link">
        <a href="{{route('auth.login')}}">Back to Login</a>
    </p>
</div>
@endsection
