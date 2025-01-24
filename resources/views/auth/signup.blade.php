@extends('layouts.auth')
@section('content')
@section('title', 'Sign Up Page')

<div class="default-container">
        <h1 class="default-title">SIGN UP</h1>
        <form class="default-form" action="{{route('auth.signupAction')}}" method="post">
        @csrf
        
            <input type="text" name="name" placeholder="Name" class="default-input" required>
            @error('name')
            <div class="alert alert-danger" style="color:red; font-size: 12px;">{{ $message }}</div>
            @enderror
            <input type="email" name="email" placeholder="Email" class="default-input" required>
            @error('email')
            <div class="alert alert-danger" style="color:red; font-size: 12px;">{{ $message }}</div>
            @enderror
            <input type="password" name="password" placeholder="Password" class="default-input" required>
            @error('password')
            <div class="alert alert-danger" style="color:red; font-size: 12px;">{{ $message }}</div>
            @enderror
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="default-input" required>
            @error('password_confirmation')
            <div class="alert alert-danger" style="color:red; font-size: 12px;">{{ $message }}</div>
            @enderror
            <button type="submit" class="default-button">SIGN UP</button>
        </form>
        <p class="signup-login-link">Already have an account? <a href="{{route('auth.login')}}">Login</a></p>
    </div>
@endsection
