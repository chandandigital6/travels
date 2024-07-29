@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Travel Destination</h3>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
{{--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>--}}
                    <li class="breadcrumb-item active text-white">Destination</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Destination Start -->
    <div class="container-fluid destination py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Destination</h5>
                <h1 class="mb-0">Popular Destination</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    @foreach($destinations as $destination)
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill {{ $loop->first ? 'active' : '' }}"
                               data-bs-toggle="pill" href="#tab-{{ $destination->id }}">
                                <span class="text-dark" style="width: 150px;">{{ $destination->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach($destinations as $destination)
                        <div id="tab-{{ $destination->id }}" class="tab-pane fade show p-0 {{ $loop->first ? 'active' : '' }}">
                            <div class="row g-4">
                                @foreach($destination->states as $state)
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="{{ asset('storage/' . $state->image) }}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                   class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                                <h4 class="text-white mb-2 mt-3">{{ $state->title }}</h4>
                                                <a href="{{route('destination-details',['title'=>$state->title])}}" class="btn-hover text-white">View All Place <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('storage/' . $state->image) }}"
                                                   data-lightbox="destination-{{ $state->id }}"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Destination End -->


    <!-- Subscribe Start -->
    <div class="container-fluid subscribe py-5">
        <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="subscribe-title px-3">Subscribe</h5>
                <h1 class="text-white mb-4">Our Newsletter</h1>
                <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam,
                    architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat
                    corrupti eum cum repellat a laborum quasi.
                </p>
                <div class="position-relative mx-auto">
                    <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->
@endsection
