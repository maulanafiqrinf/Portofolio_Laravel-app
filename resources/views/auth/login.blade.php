@extends('templates.auth.app')

@section('content')
    <div class="auth-wrapper">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="auth-box">
                <a href="{{ url('/') }}" class="auth-logo mb-4">
                    <img src="assets/images/logo.svg" alt="Bootstrap Gallery">
                </a>

                <h4 class="mb-4">Login</h4>

                <div class="mb-3">
                    <label class="form-label" for="email">Your email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        required autofocus autocomplete="email">
                    @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-label" for="password">Your password <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required
                            autocomplete="current-password">
                    </div>
                    @error('password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end mb-3">
                    <a href="forgot-password.html" class="text-decoration-underline">Forgot password?</a>
                </div>

                <div class="mb-3 d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

            </div>

        </form>
    </div>
@endsection
