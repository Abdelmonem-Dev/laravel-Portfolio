@extends('layouts.auth')
@section('content')
@section('title', 'Sign Up Page')

<div class="signup-container">
        <h1 class="signup-title">SIGN UP</h1>
        <form class="signup-form" action="#" method="post">
            <input type="text" name="name" placeholder="Name" class="signup-input" required>
            <input type="email" name="email" placeholder="Email" class="signup-input" required>
            <input type="password" name="password" placeholder="Password" class="signup-input" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="signup-input" required>
            <button type="submit" class="signup-button">SIGN UP</button>
        </form>
        <p class="signup-login-link">Already have an account? <a href="{{route('auth.login')}}">Login</a></p>
    </div>
@endsection
