@extends('layout.main-registration')

@section('container')


<div class="wrapper">
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
    @if (session()->has('loginError'))
    <div class="alert alert-danger" role="alert">
        {{ session('loginError') }}
    </div>
@endif
    <h2>Login</h2>
    <form action="/login" method="post">
        @csrf
        <div class="input-box">
        <input type="email" name="email" id="email" class=" form-control @error('email')is-invalid @enderror" placeholder="Enter your email" required value="{{ old('email') }}" autofocus>
        @error('email')
            <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="input-box">
        <input type="password" name="password" id="password" class=" form-control @error('password')is-invalid @enderror" placeholder="Enter your password" required>
        @error('password')
            <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="input-box button">
        <button type="submit">Login</button>
        </div>
        <div class="text">
        <h3>Don't have an account? <a href="/register">Register Now</a></h3>
        </div>
    </form>
    </div>

@endsection
