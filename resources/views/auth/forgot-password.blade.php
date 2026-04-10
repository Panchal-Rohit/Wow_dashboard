@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <section class="auth forgot-password-page bg-base d-flex flex-wrap">

            <!-- LEFT IMAGE -->
            <div class="auth-left d-lg-block d-none">
                <div class="d-flex align-items-center flex-column h-100 justify-content-center">
                    <img src="{{ asset('admin/assets/images/auth/forgot-pass-img.png') }}" alt="">
                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
                <div class="max-w-464-px mx-auto w-100">

                    <div>
                        <h4 class="mb-12">Forgot Password</h4>
                        <p class="mb-32 text-secondary-light text-lg">
                            Enter the email address associated with your account and we will send you a link to reset your
                            password.
                        </p>
                    </div>

                     <x-alert />

                    <!-- EMAIL FIELD -->
                    <div class="icon-field">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="mage:email"></iconify-icon>
                        </span>

                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Enter Email" required
                            autofocus>
                    </div>

                    <!-- SUBMIT BUTTON -->
                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">
                        Send Reset Link
                    </button>

                    <!-- BACK -->
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="text-primary-600 fw-bold mt-24 d-inline-block">
                            Back to Sign In
                        </a>
                    </div>

                    <!-- FOOTER -->
                    <div class="mt-120 text-center text-sm">
                        <p class="mb-0">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-primary-600 fw-semibold">Sign In</a>
                        </p>
                    </div>

                </div>
            </div>

        </section>

    </form>
@endsection
