@extends('layouts.app')

@section('content')
<div class="auth-wrapper">
    <div class="auth-container">
        <!-- Left Side: Information -->
        <div class="auth-info-side">
            <h1>Fransalian School</h1>
            <p>Fransalian School is a dedicated institution providing quality primary education. Our system is designed to streamline school management and enhance student learning experiences.</p>
            
            <p>Through our portal, parents and staff can manage academic data efficiently, ensuring a structured and productive environment for all students.</p>

            <div class="mt-auto">
                <small>Copyright © {{ date('Y') }} . All Rights Reserved</small>
            </div>
        </div>

        <!-- Right Side: Login Form -->
        <div class="auth-form-side">
            <div class="school-logo-container">
                <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="School Logo" class="school-logo">
            </div>

            <h2>Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input id="email" type="email" class="custom-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert" style="display: block;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="custom-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert" style="display: block;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn-auth">
                    Login
                </button>

                <div class="auth-links">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    @endif
                    
                    @if (Route::has('register'))
                        <p class="register-link">Don't have an account? <a href="{{ route('register') }}">Register Here</a></p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
