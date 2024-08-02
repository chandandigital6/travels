{{-- <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="me-2" style="height: 100px; width: auto;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
                <a href="{{ route('packages') }}" class="nav-item nav-link">Packages</a>
                <a href="{{ route('blog') }}" class="nav-item nav-link">Blog</a>
                <div class="nav-item dropdown">
                    <a href="{{ route('destination') }}" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown">Destinations</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('india')}}" class="dropdown-item">
                            India Destinations</a>
                        <a href="" class="dropdown-item">
                            London Itinerary</a>
                        <a href="" class="dropdown-item">
                            Italy Itinerary</a>
                        <a href="" class="dropdown-item">Singapore Itinerary</a>
                        <a href="" class="dropdown-item">
                            Vietnam Itinerary</a>
                        <a href="" class="dropdown-item">Turkey Itinerary</a>
                        <a href="" class="dropdown-item">
                            Thailand Itinerary</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('destination') }}" class="dropdown-item">Destination</a>
                        <a href="{{ route('tour') }}" class="dropdown-item">Explore Tour</a>
                        <a href="{{ route('booking') }}" class="dropdown-item">Travel Booking</a>
                        <a href="{{ route('gallery') }}" class="dropdown-item">Our Gallery</a>
                        <a href="{{ route('guides') }}" class="dropdown-item">Travel Guides</a>
                        <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                        <a href="{{ route('page404') }}" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4" data-bs-toggle="modal"
                data-bs-target="#bookingModal">Book Now</a>
        </div>
    </nav>
</div> --}}


<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="me-2" style="height: 100px; width: auto;">
        </a>


        <!-- Mobile view only -->
        <div class="d-lg-none ml-auto">
            <a href="#" class="btn btn-primary rounded-pill py-2 px-4" data-bs-toggle="modal"
                data-bs-target="#bookingModal">Book Now</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('services') }}" class="nav-item nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                <a href="{{ route('packages') }}" class="nav-item nav-link {{ request()->routeIs('packages') ? 'active' : '' }}">Packages</a>
                <a href="{{ route('blog') }}" class="nav-item nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
                <div class="nav-item dropdown">
                    <a href="{{ route('destination') }}" class="nav-link dropdown-toggle {{ request()->routeIs('destination') ? 'active' : '' }}" data-bs-toggle="dropdown">Destinations</a>
                    <div class="dropdown-menu m-0">

                        <a href="{{ route('india') }}" class="dropdown-item {{ request()->routeIs('india') ? 'active' : '' }}">India </a>
                        <a href="{{route('dubai')}}" class="dropdown-item {{ request()->routeIs('dubai') ? 'active' : '' }}">Dubai </a>
                        <a href="{{route('hongKong')}}" class="dropdown-item {{ request()->routeIs('hongKong') ? 'active' : '' }}">Hong Kong </a>
                        <a href="{{route('malaysia')}}" class="dropdown-item {{ request()->routeIs('malaysia') ? 'active' : '' }}">Malaysia </a>
                        <a href="{{route('europe')}}" class="dropdown-item {{ request()->routeIs('europe') ? 'active' : '' }}">Europe </a>
                        <a href="{{route('indonesia')}}" class="dropdown-item {{ request()->routeIs('indonesia') ? 'active' : '' }}">Indonesia </a>
{{--                        <a href="{{route('london')}}" class="dropdown-item {{ request()->routeIs('london') ? 'active' : '' }}">London </a>--}}
{{--                        <a href="{{route('italy')}}" class="dropdown-item {{ request()->routeIs('italy') ? 'active' : '' }}">Italy </a>--}}
                        <a href="{{route('singapore')}}" class="dropdown-item {{ request()->routeIs('singapore') ? 'active' : '' }}">Singapore </a>
{{--                        <a href="{{route('vietnam')}}" class="dropdown-item {{ request()->routeIs('vietnam') ? 'active' : '' }}">Vietnam </a>--}}
                        <a href="{{route('turkey')}}" class="dropdown-item {{ request()->routeIs('turkey') ? 'active' : '' }}">Turkey </a>
                        <a href="{{route('thailand')}}" class="dropdown-item {{ request()->routeIs('thailand') ? 'active' : '' }}">Thailand </a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Others</a>
                    <div class="dropdown-menu m-0">
                        {{-- <a href="{{ route('destination') }}" class="dropdown-item">Destination</a> --}}
                        <a href="{{ route('destination') }}" class="dropdown-item {{ request()->routeIs('india') ? 'active' : '' }}"> Destinations</a>

                        <a href="{{ route('gallery') }}" class="dropdown-item {{ request()->routeIs('gallery') ? 'active' : '' }}">Our Gallery</a>
                        <a href="{{ route('testimonial') }}" class="dropdown-item {{ request()->routeIs('testimonial') ? 'active' : '' }}">Testimonial</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Resort</a>
                    <div class="dropdown-menu m-0">
                        {{-- <a href="{{ route('destination') }}" class="dropdown-item">Destination</a> --}}
                        <a href="{{ route('domestic') }}" class="dropdown-item {{ request()->routeIs('domestic') ? 'active' : '' }}"> Domestic</a>

                        <a href="{{ route('international') }}" class="dropdown-item {{ request()->routeIs('international') ? 'active' : '' }}">International</a>
{{--                        <a href="{{ route('testimonial') }}" class="dropdown-item {{ request()->routeIs('testimonial') ? 'active' : '' }}">Testimonial</a>--}}
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </div>

        </div>

        <!-- Large devices (desktops, tablets) -->
        <div class="d-none d-lg-block">
            <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4" data-bs-toggle="modal"
                data-bs-target="#bookingModal">Book Now</a>
        </div>
    </nav>
</div>


<!-- Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"
            style="background-image: url('{{ asset('asset/img/blog-1.jpg') }}'); background-size: cover; background-repeat: no-repeat; color: white;">
            <div class="modal-header" style="background: rgba(0, 0, 0, 0.7);">
                <h5 class="modal-title text-white" id="bookingModalLabel">Travel Booking Form</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background: rgba(0, 0, 0, 0.7);">
                <form action="{{ route('appointment.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile No</label>
                        <input type="tel" class="form-control" id="number" name="number" required>
                    </div>
                    <div class="mb-3">
                        <label for="destination" class="form-label">Destination</label>
                        <input type="text" class="form-control" id="destination" name="destination" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Travel Date</label>
                        <input type="date" class="form-control" id="travel_date" name="travel_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="guests" class="form-label">Number of Guests</label>
                        <input type="number" class="form-control" id="guest" name="guest" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Book Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
