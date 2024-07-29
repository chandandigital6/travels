@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">My Profile</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-white">Home</a></li>
                <li class="breadcrumb-item active text-white">My Profile</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->



    @if (Auth::check())
        <!-- Profile Start -->
        <div class="container-fluid py-5 bg-light">
            <div class="container py-5" style="max-width: 800px;">
                <div class="text-center mb-5">
                    <h1 class="mb-4">My Profile</h1>
                    <p class="mb-0 text-muted">Manage your profile information.</p>
                </div>
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="mb-5 text-center">
{{--                            <img src="{{ Auth::user()->profile_image ?? 'default-profile.png' }}" alt="Profile Picture"--}}
{{--                                class="rounded-circle mb-3" style="width: 150px; height: 150px;">--}}
                            <h3>{{ Auth::user()->name }}</h3>
                            <p class="text-muted">{{ Auth::user()->email }}</p>
                        </div>
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
{{--                            <div class="mb-4">--}}
{{--                                <label for="profile_image" class="form-label">Profile Image</label>--}}
{{--                                <input type="file" class="form-control" id="profile_image" name="profile_image">--}}
{{--                            </div>--}}
                            <div class="mb-4">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ Auth::user()->name }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ Auth::user()->email }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Leave blank to keep current password">
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" placeholder="Leave blank to keep current password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile End -->
    @else
        <div class="container text-center py-5">
            <h1 class="mb-4">You are not logged in</h1>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        </div>
    @endif
@endsection
