@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Login</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-white">Home</a></li>
                <li class="breadcrumb-item active text-white">Login</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Login Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5" style="max-width: 600px;">
            <div class="text-center mb-5">
                <h1 class="mb-4">Login to Your Account</h1>
                <p class="mb-0 text-muted">Enter your email and password to access your account.</p>
            </div>
            <div class="card border-0 shadow-lg">
                <div class="card-body p-5">
                    <!-- Display success message -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="name@example.com" value="{{ old('email') }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
                    </form>
                    <div class="text-center mt-4">
                        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}"
                                class="text-decoration-none">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->
@endsection
