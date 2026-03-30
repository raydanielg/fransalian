@extends('layouts.app')

@section('content')
<div class="auth-wrapper">
    <div class="auth-container">
        <!-- Left Side: Information -->
        <div class="auth-info-side">
            <h1>Fransalian School</h1>
            <div class="divider"></div>
            <p>Quality Education for a Better World.</p>
            
            <div class="mt-auto">
                <small>© {{ date('Y') }} Fransalian School. All Rights Reserved.</small>
            </div>
        </div>

        <!-- Right Side: Register Form -->
        <div class="auth-form-side">
            <a href="{{ url('/') }}" class="go-back-btn">
                <i class="fas fa-arrow-left"></i> GO BACK
            </a>

            <div class="school-logo-container">
                <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="School Logo" class="school-logo">
            </div>

            <h2>Register</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input id="name" type="text" class="custom-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your full name">
                    
                    @error('name')
                        <span class="invalid-feedback" role="alert" style="display: block;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="custom-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert" style="display: block;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="custom-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Create a password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert" style="display: block;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="custom-input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
                </div>

                <button type="submit" class="btn-auth">
                    {{ __('Register') }}
                </button>

                <div class="auth-links">
                    <p class="text-muted mt-2">Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                </div>
            </form>

            <div class="auth-footer d-md-none">
                <p>© {{ date('Y') }} Fransalian School Bombambili</p>
            </div>
        </div>
    </div>
</div>
@endsection
