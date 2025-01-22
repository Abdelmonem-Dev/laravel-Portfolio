
@extends('layouts.auth')
@section('content')
@section('title', 'LogIn Page')

    <div class="login-container">
        <h1 class="login-title">LOGIN</h1>
        <form class="login-form">
            <input type="email" name="email" placeholder="Email" class="login-input" >
            <input type="password" name="password" placeholder="Password" class="login-input">
            <div class="login-form">
                <div class="login-actions">
                    <div class="login-checkbox-container">
                        <input type="checkbox" name="rememberMe" class="login-checkbox" id="rememberMe" />
                        <label for="rememberMe" class="login-checkbox-label">Remember Me</label>
                    </div>
                    <a href="{{route('auth.forgotPassword')}}" class="forgot-password-link">Forgot Password?</a>
                </div>
                <button type="submit" class="login-button">Login</button>
            </div>
        </form>
        <p class="signup-login-link">You don't have an account? <a href="{{route('auth.signup')}}">SignUp</a></p>
    </div>
@endsection

