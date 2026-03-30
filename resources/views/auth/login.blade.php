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

        <!-- Right Side: Login Form -->
        <div class="auth-form-side">
            <a href="{{ url('/') }}" class="go-back-btn">
                <i class="fas fa-arrow-left"></i> GO BACK
            </a>

            <div class="school-logo-container">
                <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="School Logo" class="school-logo">
            </div>

            <h2>Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="custom-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert" style="display: block;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="custom-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert" style="display: block;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn-auth">
                    {{ __('Login') }}
                </button>

                <div class="auth-links">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    
                    @if (Route::has('register'))
                        <p class="text-muted mt-2">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                    @endif
                </div>
            </form>

            <div class="auth-footer d-md-none">
                <p>© {{ date('Y') }} Fransalian School Bombambili</p>
            </div>
        </div>
    </div>
</div>
@endsection
