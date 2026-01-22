@extends('layouts.app')

@section('content')
<section class="auth bg-base d-flex flex-wrap">

    <!-- LEFT IMAGE -->
    <div class="auth-left d-lg-block d-none">
        <div class="d-flex align-items-center flex-column h-100 justify-content-center">
            <img src="{{ asset('admin/assets/images/auth/auth-img.png') }}" alt="Auth Image">
        </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
        <div class="max-w-464-px mx-auto w-100">

            <div>
                <a href="{{ url('/') }}" class="mb-40 max-w-290-px d-inline-block">
                    <img src="{{ asset('admin/assets/images/logo.png') }}" alt="Logo">
                </a>

                <h4 class="mb-12">Sign In to your Account</h4>
                <p class="mb-32 text-secondary-light text-lg">
                    Welcome back! please enter your detail
                </p>
            </div>

            <!-- 🔐 LOGIN FORM -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- EMAIL -->
                <div class="icon-field mb-16">
                    <span class="icon top-50 translate-middle-y">
                        <iconify-icon icon="mage:email"></iconify-icon>
                    </span>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-control h-56-px bg-neutral-50 radius-12"
                        placeholder="Email"
                        required
                        autofocus
                    >
                </div>
                @error('email')
                    <small class="text-danger d-block mb-8">{{ $message }}</small>
                @enderror

                <!-- PASSWORD -->
                <div class="position-relative mb-20">
                    <div class="icon-field">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                        </span>
                        <input
                            type="password"
                            name="password"
                            class="form-control h-56-px bg-neutral-50 radius-12"
                            id="your-password"
                            placeholder="Password"
                            required
                        >
                    </div>

                    <span
                        class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                        data-toggle="#your-password">
                    </span>
                </div>
                @error('password')
                    <small class="text-danger d-block mb-8">{{ $message }}</small>
                @enderror

                <!-- REMEMBER + FORGOT -->
                <div class="d-flex justify-content-between gap-2">
                    <div class="form-check style-check d-flex align-items-center">
                        <input
                            class="form-check-input border border-neutral-300"
                            type="checkbox"
                            name="remember"
                            id="remember"
                        >
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>

                    <a href="{{ route('password.request') }}"
                       class="text-primary-600 fw-medium">
                        Forgot Password?
                    </a>
                </div>

                <!-- SUBMIT -->
                <button type="submit"
                        class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">
                    Sign In
                </button>

                <!-- SIGN UP -->
                <div class="mt-32 text-center text-sm">
                    <p class="mb-0">
                        Don’t have an account?
                        <a href="{{ route('register') }}"
                           class="text-primary-600 fw-semibold">
                            Sign Up
                        </a>
                    </p>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection
