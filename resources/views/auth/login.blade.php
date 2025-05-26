@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8fafc;
    }

    .card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
    }

    .card-header {
        background-color: transparent;
        border-bottom: none;
        font-size: 1.5rem;
        font-weight: 600;
        color: #1f2937;
        text-align: center;
        padding: 1.5rem;
    }

    .form-control {
        border-radius: 0.5rem;
    }

    .form-check-label {
        font-size: 0.95rem;
    }

    .btn-primary {
        background-color: #6366f1;
        border-color: #6366f1;
        border-radius: 0.5rem;
    }

    .btn-primary:hover {
        background-color: #4f46e5;
        border-color: #4f46e5;
    }

    .btn-link {
        color: #6366f1;
        font-size: 0.9rem;
    }

    .btn-link:hover {
        color: #4f46e5;
    }

    a {
        color: #6366f1;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
        color: #4f46e5;
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body px-4 py-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3 row">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">
                                @error('password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 align-items-center">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary px-4">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                <p class="mt-3">
                                    Don't have an account?
                                    <a href="{{ route('register') }}">Register here</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
