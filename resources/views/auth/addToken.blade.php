@extends('layouts.auth')
@section('content')
@section('title', 'Add Token Page')
<div class="default-container">
    <h1 class="default-title">Add Token</h1>
    <form class="default-form" action="{{route('auth.addTokenAction')}}" method="post">
    @csrf


        <input type="hidden" name="email" value="{{ $email }}">
        <input type="text" name="token" class="default-input" placeholder="Enter your token" required />
        @error('token')
        <div class="alert alert-danger" style="color:red; font-size: 12px;">{{ $message }}</div>
        @enderror
        <button type="submit" class="default-button">Verify Token</button>
    </form>
    <p class="add-token-back-link">
        <a href="{{route('auth.forgotPassword')}}">Back to Forgot Password</a>
    </p>
</div>
@endsection
