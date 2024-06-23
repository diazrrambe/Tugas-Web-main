
@extends('layout.main-registration')

@section('container')
    <div class="wrapper">
    <h2>Registration</h2>
    <form action="/register" method="post">
        @csrf
        <div class="input-box">
        <input type="text" name="name" id="name" class=" form-control @error('name')is-invalid @enderror" placeholder="Enter your name" required value="{{ old('name') }}" autofocus>
        @error('name')
            <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="input-box">
        <input type="text" name="username" id="username" class=" form-control @error('username')is-invalid @enderror" placeholder="Enter your username" required value="{{ old('username') }}">
        @error('username')
            <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="input-box">
        <input type="email" name="email" id="email" class=" form-control @error('email')is-invalid @enderror" placeholder="Enter your email" required value="{{ old('email') }}">
        @error('email')
            <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="input-box">
        <input type="password" name="password" id="password" class=" form-control @error('password')is-invalid @enderror" placeholder="Create password" required>
        @error('password')
            <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="input-box button">
        <button type="submit">Register</button>
        </div>
        <div class="text">
        <h3>Already have an account? <a href="/login">Login now</a></h3>
        </div>
    </form>
    </div>

@endsection
