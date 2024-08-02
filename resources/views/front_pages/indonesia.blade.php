@extends('components.main',['seos' => $seos])

@section('content')
    <div class="container-fluid p-0">
        <!-- Header Section -->
        <div class="position-relative">
            @foreach($videos as $v)


                <img src="{{ asset('storage/'.$v->image) }}" class="img-fluid w-100" alt="India Itinerary"
                     style="object-fit: cover; height: 80vh;">
            @endforeach
            <div class="position-absolute top-50 start-50 translate-middle text-white text-center bg-dark bg-opacity-75 p-4 rounded"
                 style="font-family: 'Roboto', sans-serif;">
                <h1 class="display-4 text-warning mb-4" style="font-size: 3.5rem;">Indonesia <span
                        class="text-warning"></span></h1>
                <div class="breadcrumb d-flex justify-content-center">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none mx-2">Home</a>
                    <span class="text-white mx-2">/</span>
                    <a href="{{ route('indonesia') }}" class="text-white text-decoration-none mx-2">Indonesia </a>
                </div>
            </div>
        </div>

        <!-- Destination Start -->
        <div class="container-fluid destination ">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Destination</h5>
                    <h1 class="mb-0">Popular Destination</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        @foreach($destinations as $destination)
                            @if($destination->name === 'Indonesia')
                                @foreach($destination->states as $state)
                                    <li class="nav-item">
                                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill {{ $loop->parent->first && $loop->first ? 'active' : '' }}"
                                           data-bs-toggle="pill" href="#tab-{{ $state->id }}">
                                            <span class="text-dark" style="width: 150px;">{{ $state->title }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        @foreach($destinations as $destination)
                            @if($destination->name === 'Indonesia')
                                @foreach($destination->states as $state)
                                    <div id="tab-{{ $state->id }}" class="tab-pane fade show p-0 {{ $loop->parent->first && $loop->first ? 'active' : '' }}">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100" src="{{ asset('storage/' . $state->image) }}" alt="">
                                                    <div class="destination-overlay p-4">
                                                        <a href="#"
                                                           class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                                        <h4 class="text-white mb-2 mt-3">{{ $state->title }}</h4>
                                                        <a href="{{ route('destination-details', ['title'=>$state->title]) }}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                                    </div>
                                                    <div class="search-icon">
                                                        <a href="{{ asset('storage/' . $state->image) }}"
                                                           data-lightbox="destination-{{ $state->id }}"><i
                                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Destination End -->



        <!-- Destination Section -->
        {{-- <div class="container-fluid destination py-5">
            <div class="container">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Destination</h5>
                    <h1 class="mb-0">Indonesia Destinations</h1>
                </div>
                <div class="tab-class text-center">
                    <div class="tab-content">
                        <!-- Kashmir Itinerary -->
                        <div id="tab-2" class="tab-pane fade show active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="{{ asset('asset/img/kashmir-1.jpg') }}"
                                            alt="Kashmir Itinerary">
                                        <div class="destination-overlay p-4">
                                            <a href="#"
                                                class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                Photos</a>
                                            <h4 class="text-white mb-2 mt-3">Kashmir Itinerary</h4>
                                            <a href="{{ route('kashmir') }}" class="btn-hover text-white">View All Places <i
                                                    class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="{{ asset('asset/img/kashmir-1.jpg') }}" data-lightbox="destination-5">
                                                <i
                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="{{ asset('asset/img/Rajasthan-1.jpg') }}"
                                            alt="Rajasthan Itinerary">
                                        <div class="destination-overlay p-4">
                                            <a href="#"
                                                class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                Photos</a>
                                            <h4 class="text-white mb-2 mt-3">Rajasthan Itinerary</h4>
                                            <a href="{{ route('rajasthan') }}" class="btn-hover text-white">View All Places
                                                <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="{{ asset('asset/img/Rajasthan-1.jpg') }}"
                                                data-lightbox="destination-6">
                                                <i
                                                    class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more destinations as needed -->
                            </div>
                        </div>
                        <!-- Add more destination tabs as needed -->
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Destination Section End -->

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

        <!-- Video Section -->
        <div class="container-fluid px-0">
            <div class="row g-0 mt-5 mb-5">
                @foreach($videos as $vi)
                    <div class="col-12 col-md-10 col-lg-12 mx-auto">
                        <h2 class="text-center mb-4">{{$vi->sub_title}}</h2>
                        <div class="video-container">
                            <div class="ratio ratio-16x9">
                                @if ($vi->youTubeEmbedUrl)
                                    <iframe width="200" height="113" src="{{ $vi->youTubeEmbedUrl }}?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    {{--                                    <iframe width="200" height="113" src="{{ $vi->youTubeEmbedUrl }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                                @else
                                    No video available
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Video Section End -->


    </div>
@endsection
