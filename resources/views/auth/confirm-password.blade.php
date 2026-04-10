@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <section class="auth confirm-password-page bg-base d-flex flex-wrap">

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
                        <h4 class="mb-12">Confirm Password</h4>
                        <p class="mb-32 text-secondary-light text-lg">
                            This is a secure area. Please confirm your password before continuing.
                        </p>
                    </div>

                     <x-alert />

                    <!-- PASSWORD FIELD -->
                    <div class="icon-field mb-20 position-relative">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="mdi:lock-outline"></iconify-icon>
                        </span>

                        <input type="password" name="password" id="password"
                            class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Enter Your Password" required
                            autocomplete="current-password">

                        <span
                            class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                            data-toggle="#password"></span>
                    </div>

                    <!-- SUBMIT BUTTON -->
                    <button type="submit"
                        class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 d-flex align-items-center justify-content-center gap-2">
                        <iconify-icon icon="mdi:shield-check-outline" class="text-xl"></iconify-icon>
                        Confirm Password
                    </button>

                    <!-- BACK -->
                    <div class="text-center">
                        <a href="{{ route('dashboard') }}" class="text-primary-600 fw-bold mt-24 d-inline-block">
                            Back to Dashboard
                        </a>
                    </div>

                </div>
            </div>

        </section>

    </form>

@endsection
