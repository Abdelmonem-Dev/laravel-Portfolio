
@extends('layouts.auth')
@section('content')
@section('title', 'LogIn Page')

    <div class="default-container">
        <h1 class="default-title">LOGIN</h1>
        <form class="default-form" method="post" action="{{route('auth.loginAction')}}">
        @csrf

            <input type="email" name="email" placeholder="Email" class="default-input" >
            @error('email')
            <div class="alert alert-danger" style="color:red; font-size: 12px;">{{ $message }}</div>
            @enderror
            <input type="password" name="password" placeholder="Password" class="default-input">
            @if(session('email'))
            <div class="alert alert-danger" style="color:red; font-size: 12px;">{{ session('email') }}</div>
            @endif
            @error('password')
            <div class="alert alert-danger" style="color:red; font-size: 12px;">{{ $message }}</div>
            @enderror
            <div class="default-form">
                <div class="login-actions">
                    <div class="login-checkbox-container">
                        <input type="checkbox" name="remember" class="login-checkbox" id="remember" />
                        <label for="rememberMe" class="login-checkbox-label">Remember Me</label>
                    </div>
                    <a href="{{route('auth.forgotPassword')}}" class="forgot-password-link">Forgot Password?</a>
                </div>
                <button type="submit" class="default-button">Login</button>
            </div>
        </form>
        <p class="signup-login-link">You don't have an account? <a href="{{route('auth.signup')}}">SignUp</a></p>
    </div>
@endsection

