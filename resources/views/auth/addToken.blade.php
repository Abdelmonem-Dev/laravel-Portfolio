@extends('layouts.auth')
@section('content')
@section('title', 'Add Token Page')
<div class="add-token-container">
    <h1 class="add-token-title">Add Token</h1>
    <form class="add-token-form">
        <input type="text" name="token" class="add-token-input" placeholder="Enter your token" required />
        <button type="submit" class="add-token-button">Verify Token</button>
    </form>
    <p class="add-token-back-link">
        <a href="{{route('auth.forgotPassword')}}">Back to Forgot Password</a>
    </p>
</div>
@endsection
