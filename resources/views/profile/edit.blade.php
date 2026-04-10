@extends('admin.layouts.app')

@section('content')
    <div class="dashboard-main-body">

        <!-- HEADER -->
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">View Profile</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="{{ route('dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li>-</li>
                <li class="fw-medium">View Profile</li>
            </ul>
        </div>

        <div class="row gy-4">

            <!-- LEFT PROFILE CARD -->
            <div class="col-lg-4">
                <div class="user-grid-card position-relative border radius-16 overflow-hidden bg-base h-100">
                    <img src="{{ asset('admin/assets/images/user-grid/user-grid-bg1.png') }}"
                        class="w-100 object-fit-cover">

                    <div class="pb-24 ms-16 mb-24 me-16 mt--100">
                        <div class="text-center border border-top-0 border-start-0 border-end-0">

                            <img src="{{ auth()->user()->profile_image
                                ? asset('storage/' . auth()->user()->profile_image)
                                : asset('admin/assets/images/user-grid/user-grid-img14.png') }}"
                                class="border br-white border-width-2-px w-200-px h-200-px rounded-circle object-fit-cover">

                            <h6 class="mb-0 mt-16">{{ auth()->user()->name }}</h6>
                            <span class="text-secondary-light mb-16">{{ auth()->user()->email }}</span>
                        </div>

                        <div class="mt-24">
                            <h6 class="text-xl mb-16">Personal Info</h6>
                            <ul>
                                <li class="d-flex gap-1 mb-12">
                                    <span class="w-30 fw-semibold">Full Name</span>
                                    <span class="w-70">: {{ auth()->user()->name }}</span>
                                </li>
                                <li class="d-flex gap-1 mb-12">
                                    <span class="w-30 fw-semibold">Email</span>
                                    <span class="w-70">: {{ auth()->user()->email }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT TABS -->
            <div class="col-lg-8">
                <div class="card h-100">
                    <div class="card-body p-24">

                        <!-- TABS -->
                        <ul class="nav border-gradient-tab nav-pills mb-20">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#edit-profile">
                                    Edit Profile
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#change-password">
                                    Change Password
                                </button>
                            </li>
                        </ul>
                       <x-alert />
                        <div class="tab-content">

                            <!-- EDIT PROFILE -->
                            <div class="tab-pane fade show active" id="edit-profile">

                                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <!-- Upload Image Start -->



                                    <div class="row">

                                        <!-- NAME -->
                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label for="name"
                                                    class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                    Full Name <span class="text-danger-600">*</span>
                                                </label>
                                                <input type="text" name="name" id="name"
                                                    value="{{ old('name', auth()->user()->name) }}"
                                                    class="form-control radius-8" placeholder="Enter Full Name" required>
                                            </div>
                                        </div>

                                        <!-- EMAIL -->
                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label for="email"
                                                    class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                    Email <span class="text-danger-600">*</span>
                                                </label>
                                                <input type="email" name="email" id="email"
                                                    value="{{ old('email', auth()->user()->email) }}"
                                                    class="form-control radius-8" placeholder="Enter email address"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">

                                            <div class="mb-20">
                                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                    Upload Image
                                                </label>

                                                <input type="file" name="profile_image" accept=".png,.jpg,.jpeg"
                                                    class="form-control radius-8">
                                            </div>

                                        </div>
                                        <!-- Upload Image End -->

                                    </div>

                                    <!-- ACTION BUTTONS -->
                                    <div class="d-flex align-items-center justify-content-center gap-3">

                                        <!-- CANCEL BUTTON -->
                                        <button type="reset"
                                            class="btn btn-danger radius-8 px-20 py-11 d-flex align-items-center gap-2">
                                            <iconify-icon icon="mdi:close-circle-outline" class="text-xl"></iconify-icon>
                                            Cancel
                                        </button>

                                        <!-- SAVE BUTTON -->
                                        <button type="submit"
                                            class="btn btn-primary-600 radius-8 px-20 py-11 d-flex align-items-center gap-2">
                                            <iconify-icon icon="mdi:content-save-outline" class="text-xl"></iconify-icon>
                                            Save
                                        </button>

                                    </div>

                                </form>
                            </div>

                            <!-- CHANGE PASSWORD -->
                            <!-- CHANGE PASSWORD -->
                            <div class="tab-pane fade" id="change-password">



                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    @method('put')

                                   

                                    <!-- CURRENT PASSWORD -->
                                    <div class="mb-20">
                                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Current Password <span class="text-danger-600">*</span>
                                        </label>
                                        <div class="position-relative">
                                            <input type="password" name="current_password" class="form-control radius-8"
                                                id="current-password" placeholder="Enter Current Password" required>

                                            <span
                                                class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                                                data-toggle="#current-password"></span>
                                        </div>
                                    </div>

                                    <!-- NEW PASSWORD -->
                                    <div class="mb-20">
                                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            New Password <span class="text-danger-600">*</span>
                                        </label>
                                        <div class="position-relative">
                                            <input type="password" name="password" class="form-control radius-8"
                                                id="new-password" placeholder="Enter New Password" required>

                                            <span
                                                class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                                                data-toggle="#new-password"></span>
                                        </div>
                                    </div>

                                    <!-- CONFIRM PASSWORD -->
                                    <div class="mb-20">
                                        <label class="form-label fw-semibold text-primary-light text-sm mb-8">
                                            Confirm Password <span class="text-danger-600">*</span>
                                        </label>
                                        <div class="position-relative">
                                            <input type="password" name="password_confirmation"
                                                class="form-control radius-8" id="confirm-password"
                                                placeholder="Confirm Password" required>

                                            <span
                                                class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                                                data-toggle="#confirm-password"></span>
                                        </div>
                                    </div>

                                    <!-- SUBMIT BUTTON -->
                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-primary-600 radius-8 px-20 py-11 d-flex align-items-center gap-2">
                                            <iconify-icon icon="mdi:lock-reset" class="text-xl"></iconify-icon>
                                            Update Password
                                        </button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
