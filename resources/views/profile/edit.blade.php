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
                                ? asset('storage/'.auth()->user()->profile_image)
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
                            <li class="d-flex gap-1 mb-12">
                                <span class="w-30 fw-semibold">Phone</span>
                                <span class="w-70">: {{ auth()->user()->phone ?? '-' }}</span>
                            </li>
                            <li class="d-flex gap-1 mb-12">
                                <span class="w-30 fw-semibold">Department</span>
                                <span class="w-70">: {{ auth()->user()->department ?? '-' }}</span>
                            </li>
                            <li class="d-flex gap-1 mb-12">
                                <span class="w-30 fw-semibold">Designation</span>
                                <span class="w-70">: {{ auth()->user()->designation ?? '-' }}</span>
                            </li>
                            <li class="d-flex gap-1 mb-12">
                                <span class="w-30 fw-semibold">Language</span>
                                <span class="w-70">: {{ auth()->user()->language ?? '-' }}</span>
                            </li>
                            <li class="d-flex gap-1">
                                <span class="w-30 fw-semibold">Bio</span>
                                <span class="w-70">: {{ auth()->user()->bio ?? '-' }}</span>
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

                                    <!-- PHONE -->
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="phone"
                                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                Phone
                                            </label>
                                            <input type="text" name="phone" id="phone"
                                                value="{{ old('phone', auth()->user()->phone) }}"
                                                class="form-control radius-8" placeholder="Enter phone number">
                                        </div>
                                    </div>

                                    <!-- DEPARTMENT -->
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="department"
                                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                Department
                                            </label>
                                            <input type="text" name="department" id="department"
                                                value="{{ old('department', auth()->user()->department) }}"
                                                class="form-control radius-8" placeholder="Enter department">
                                        </div>
                                    </div>

                                    <!-- DESIGNATION -->
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="designation"
                                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                Designation
                                            </label>
                                            <input type="text" name="designation" id="designation"
                                                value="{{ old('designation', auth()->user()->designation) }}"
                                                class="form-control radius-8" placeholder="Enter designation">
                                        </div>
                                    </div>

                                    <!-- LANGUAGE -->
                                    <div class="col-sm-6">
                                        <div class="mb-20">
                                            <label for="language"
                                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                Language
                                            </label>
                                            <input type="text" name="language" id="language"
                                                value="{{ old('language', auth()->user()->language) }}"
                                                class="form-control radius-8" placeholder="Enter language">
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

                                    <!-- BIO -->
                                    <div class="col-sm-12">
                                        <div class="mb-20">
                                            <label for="bio"
                                                class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                Description
                                            </label>
                                            <textarea name="bio" id="bio" class="form-control radius-8"
                                                placeholder="Write description...">{{ old('bio', auth()->user()->bio) }}</textarea>
                                        </div>
                                    </div>

                                </div>

                                <!-- ACTION BUTTONS -->
                                <div class="d-flex align-items-center justify-content-center gap-3">
                                    <button type="reset" class="border border-danger-600 bg-hover-danger-200
               text-danger-600 text-md px-56 py-11 radius-8">
                                        Cancel
                                    </button>

                                    <button type="submit" class="btn btn-primary border border-primary-600
               text-md px-56 py-12 radius-8">
                                        Save
                                    </button>
                                </div>

                            </form>
                        </div>

                        <!-- CHANGE PASSWORD -->
                        <div class="tab-pane fade" id="change-password">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                @method('put')
                                <label class="form-label">Current Password</label>
                                <input type="password" name="current_password" class="form-control mb-16"
                                    placeholder="Current Password" required>
                                <label class="form-label">New Password</label>
                                <input type="password" name="password" class="form-control mb-16"
                                    placeholder="New Password" required>
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control mb-16"
                                    placeholder="Confirm Password" required>

                                <button class="btn btn-primary">Update Password</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection