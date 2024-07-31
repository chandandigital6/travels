@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Travel Packages</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
{{--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>--}}
                    <li class="breadcrumb-item active text-white">Packages</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Packages</h5>
                <h1 class="mb-0">Awesome Packages</h1>
            </div>
            <div class="packages-carousel owl-carousel">
                @foreach($packages as $package)


                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('storage/'.$package->image) }}" class="img-fluid w-100 rounded-top"
                                 alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                 style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>{{$package->city}}</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>
                                    {{$package->days}}</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>{{$package->number_of_person}}</small>
                            </div>
                            <div class="packages-price py-2 px-4">₹{{$package->price}}</div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">{{$package->title}}</h5>
                                <small class="text-uppercase">{{$package->sub_title}}</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">{!! $package->short_description !!}</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4" data-bs-toggle="modal"
                                       data-bs-target="#bookingModal">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Packages End -->

    <!-- Tour Booking Start -->
    <div class="container-fluid booking py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h5 class="section-booking-title pe-3">Booking</h5>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <p class="text-white mb-4">Experience seamless travel planning with AC Vacations' Online Reservation Start. Our user-friendly platform allows you to effortlessly browse and book your ideal vacation package from the comfort of your home.
                    </p>
                    <p class="text-white mb-4">With real-time availability, secure transactions, and instant confirmations, planning your next adventure has never been easier. Begin your journey today with just a few clicks and let us handle the rest for a hassle-free holiday experience.
                    </p>
                    {{--                    <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>--}}
                </div>
                <div class="col-lg-6">
                    <h1 class="text-white mb-3">Book A Tour Deals</h1>
                    {{--                    <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure--}}
                    {{--                        Trip With. Get More Deal Offers Here.</p>--}}
                    <form method="post" action="{{route('bookTable.store')}}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-0" id="name" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-white border-0" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="datetime-local" class="form-control bg-white border-0" id="datetime" name="date_time" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                    <label for="datetime">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-0" id="destination" name="destination" placeholder="Your destination Name">

                                    {{--                                    <select class="form-select bg-white border-0" id="select1" name="destination">--}}
                                    {{--                                        <option value="Destination 1">Destination 1</option>--}}
                                    {{--                                        <option value="Destination 2">Destination 2</option>--}}
                                    {{--                                        <option value="Destination 3">Destination 3</option>--}}
                                    {{--                                    </select>--}}
                                    <label for="select1">Destination</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-0" id="person" name="person" placeholder="persons">

                                    {{--                                    <select class="form-select bg-white border-0" id="SelectPerson" name="person">--}}
                                    {{--                                        <option value="1">Persons 1</option>--}}
                                    {{--                                        <option value="2">Persons 2</option>--}}
                                    {{--                                        <option value="3">Persons 3</option>--}}
                                    {{--                                    </select>--}}
                                    <label for="SelectPerson">Number of Guests</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-0" id="number" name="number" placeholder="Phone Number">

                                    {{--                                    <select class="form-select bg-white border-0" id="CategoriesSelect" name="categories">--}}
                                    {{--                                        <option value="Kids">Kids</option>--}}
                                    {{--                                        <option value="1">1</option>--}}
                                    {{--                                        <option value="2">2</option>--}}
                                    {{--                                        <option value="3">3</option>--}}
                                    {{--                                    </select>--}}
                                    <label for="CategoriesSelect">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" name="msg" style="height: 100px"></textarea>
                                    <label for="message">Messsage</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary text-white w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Tour Booking End -->

    @include('components.newsLater')

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

@endsection
