@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf

        <section class="auth verify-email-page bg-base d-flex flex-wrap">

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
                        <h4 class="mb-12">Verify Your Email</h4>
                        <p class="mb-32 text-secondary-light text-lg">
                            Thanks for signing up! Please verify your email by clicking the link we just sent.
                            If you didn’t receive it, we’ll send another.
                        </p>
                    </div>

                    <x-alert />

                    <!-- RESEND BUTTON -->
                    <button type="submit"
                        class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 d-flex align-items-center justify-content-center gap-2">
                        <iconify-icon icon="mdi:email-send-outline" class="text-xl"></iconify-icon>
                        Resend Verification Email
                    </button>

    </form>

    <!-- LOGOUT -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit"
            class="btn btn-outline-danger text-sm btn-sm px-12 py-16 w-100 radius-12 mt-16 d-flex align-items-center justify-content-center gap-2">
            <iconify-icon icon="lucide:power" class="text-xl"></iconify-icon>
            Log Out
        </button>
    </form>

    <!-- BACK -->
    <div class="text-center">
        <a href="{{ route('login') }}" class="text-primary-600 fw-bold mt-24 d-inline-block">
            Back to Login
        </a>
    </div>

    </div>
    </div>

    </section>
@endsection
