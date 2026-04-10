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

                    <h4 class="mb-12">Sign Up to your Account</h4>
                    <p class="mb-32 text-secondary-light text-lg">
                        Welcome! please enter your detail
                    </p>
                </div>

                <!-- 📝 REGISTER FORM -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- NAME -->
                    <div class="icon-field mb-16">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="f7:person"></iconify-icon>
                        </span>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Full Name" required autofocus>
                    </div>
                    @error('name')
                        <small class="text-danger d-block mb-8">{{ $message }}</small>
                    @enderror

                    <!-- EMAIL -->
                    <div class="icon-field mb-16">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="mage:email"></iconify-icon>
                        </span>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Email" required>
                    </div>
                    @error('email')
                        <small class="text-danger d-block mb-8">{{ $message }}</small>
                    @enderror

                    <!-- PASSWORD -->
                    <div class="mb-20">
                        <div class="position-relative">
                            <div class="icon-field">
                                <span class="icon top-50 translate-middle-y">
                                    <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                                </span>
                                <input type="password" name="password" class="form-control h-56-px bg-neutral-50 radius-12"
                                    id="password" placeholder="Password" required>
                            </div>
                            <span
                                class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                                data-toggle="#password">
                            </span>
                        </div>
                        <span class="mt-12 text-sm text-secondary-light">
                            Your password must have at least 8 characters
                        </span>
                    </div>
                    @error('password')
                        <small class="text-danger d-block mb-8">{{ $message }}</small>
                    @enderror

                    <!-- CONFIRM PASSWORD -->
                    
                    <div class="mb-20">
                        <div class="position-relative">
                            <div class="icon-field">
                                <span class="icon top-50 translate-middle-y">
                                    <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                                </span>

                                <input type="password" name="password_confirmation" id="confirm_password"
                                    class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Confirm Password"
                                    required>
                            </div>

                            <!-- 👁️ TOGGLE ICON -->
                            <span
                                class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                                data-toggle="#confirm_password">
                            </span>
                        </div>
                    </div>

                    <!-- TERMS -->
                    <div class="mb-16">
                        <div class="form-check style-check d-flex align-items-start">
                            <input class="form-check-input border border-neutral-300 mt-4" type="checkbox" required
                                id="condition">
                            <label class="form-check-label text-sm" for="condition">
                                By creating an account you agree to the
                                <span class="text-primary-600 fw-semibold">Terms & Conditions</span>
                                and
                                <span class="text-primary-600 fw-semibold">Privacy Policy</span>
                            </label>
                        </div>
                    </div>

                    <!-- SUBMIT -->
                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">
                        Sign Up
                    </button>

                    <!-- LOGIN LINK -->
                    <div class="mt-32 text-center text-sm">
                        <p class="mb-0">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-primary-600 fw-semibold">
                                Sign In
                            </a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
