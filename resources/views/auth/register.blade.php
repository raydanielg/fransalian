@extends('layouts.app')

@section('content')
<div class="auth-wrapper">
    <div class="auth-container">
        <!-- Left Side: Information -->
        <div class="auth-info-side">
            <h1>Fransalian School</h1>
            <p>Fransalian School is a dedicated institution providing quality primary education. Our system is designed to streamline school management and enhance student learning experiences.</p>
            
            <p>Join our community to manage academic data efficiently, ensuring a structured and productive environment for all students.</p>

            <div class="mt-auto">
                <small>Copyright © {{ date('Y') }} . All Rights Reserved</small>
            </div>
        </div>

        <!-- Right Side: Register Form -->
        <div class="auth-form-side">
            <div class="school-logo-container">
                <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="School Logo" class="school-logo">
            </div>

            <h2 class="mb-3">Create Account</h2>

            <form method="POST" action="{{ route('register') }}" class="w-100 px-lg-3">
                @csrf

                <div class="form-group mb-2">
                    <input id="name" type="text" class="custom-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
                    @error('name')
                        <span class="invalid-feedback d-block" role="alert" style="font-size: 0.7rem;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <input id="email" type="email" class="custom-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                    @error('email')
                        <span class="invalid-feedback d-block" role="alert" style="font-size: 0.7rem;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row g-2">
                    <div class="col-6">
                        <div class="form-group mb-2">
                            <input id="password" type="password" class="custom-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-2">
                            <input id="password-confirm" type="password" class="custom-input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm">
                        </div>
                    </div>
                </div>
                @error('password')
                    <span class="invalid-feedback d-block mb-2" role="alert" style="font-size: 0.7rem;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <button type="submit" class="btn-auth py-2 mt-2">
                    Register Now
                </button>

                <div class="auth-links mt-3">
                    <p class="register-link mb-0" style="font-size: 0.85rem;">Already have an account? <a href="{{ route('login') }}">Login Here</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
