@extends('layouts.auth')
@section('content')
@section('title', 'Reset Pass Page')

<div class="reset-password-container">
    <h1 class="reset-password-title">Reset Password</h1>
    <form class="reset-password-form">
        <input type="password" name="password" class="reset-password-input" placeholder="New Password" required />
        <input type="password" name="password_confirmation" class="reset-password-input" placeholder="Confirm New Password" required />
        <button type="submit" class="reset-password-button">Reset Password</button>
    </form>
    <p class="reset-password-back-link">
        <a href="{{route('auth.login')}}">Back to Login</a>
    </p>
</div>
@endsection
