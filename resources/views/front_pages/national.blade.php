@extends('components.main',['seos' => $seos])

@section('content')
    <div class="container-fluid p-0">
        <!-- Header Section -->
        <div class="position-relative">
            <img src="{{ asset('asset/img/india.jpg') }}" class="img-fluid w-100" alt="India Itinerary"
                 style="object-fit: cover; height: 80vh;">
            <div class="position-absolute top-50 start-50 translate-middle text-white text-center bg-dark bg-opacity-75 p-4 rounded"
                 style="font-family: 'Roboto', sans-serif;">
                <h1 class="display-4 text-warning mb-4" style="font-size: 3.5rem;">National <span
                        class="text-warning"></span></h1>
                <div class="breadcrumb d-flex justify-content-center">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none mx-2">Home</a>
                    <span class="text-white mx-2">/</span>
                    <a href="{{ route('india') }}" class="text-white text-decoration-none mx-2">national</a>
                </div>
            </div>
        </div>

        <!-- Destination Start -->
        <div class="container-fluid destination py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Destination</h5>
                    <h1 class="mb-0">Popular Destination</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        @foreach($resortStates as $resorts)
                            @if($resorts->name === 'national')
                                @foreach($resorts->resortStates as $state)
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
                        @foreach($resortStates as $resorts)
                            @if($resorts->name === 'national')
                                @foreach($resorts->resortStates as $state)
                                    <div id="tab-{{ $state->id }}" class="tab-pane fade show p-0 {{ $loop->parent->first && $loop->first ? 'active' : '' }}">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100" src="{{ asset('storage/' . $state->image) }}" alt="">
                                                    <div class="destination-overlay p-4">
{{--                                                        <a href="#"--}}
{{--                                                           class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>--}}
{{--                                                        <h4 class="text-white mb-2 mt-3">{{ $state->title }}</h4>--}}
{{--                                                        <a href="{{ route('destination-details', ['title'=>$state->title]) }}" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>--}}
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




{{--        <!-- Destination Start -->--}}
{{--        <div class="container-fluid destination ">--}}
{{--            <div class="container py-5">--}}
{{--                <div class="mx-auto text-center mb-5" style="max-width: 900px;">--}}
{{--                    <h5 class="section-title px-3">Resort</h5>--}}
{{--                    <h1 class="mb-0">Popular Resort</h1>--}}
{{--                </div>--}}
{{--                <div class="tab-class text-center">--}}
{{--                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">--}}
{{--                        @foreach($resortStates as $resorts)--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill {{ $loop->first ? 'active' : '' }}"--}}
{{--                                   data-bs-toggle="pill" href="#tab-{{ $resorts->id }}">--}}
{{--                                    <span class="text-dark" style="width: 150px;">{{ $resorts->name }}</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                    <div class="tab-content">--}}
{{--                        @foreach($resortStates as $resorts)--}}
{{--                            <div id="tab-{{ $resorts->id }}" class="tab-pane fade show p-0 {{ $loop->first ? 'active' : '' }}">--}}
{{--                                <div class="row g-4">--}}
{{--                                    @foreach($resorts->resortStates as $state)--}}
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="destination-img">--}}
{{--                                                <img class="img-fluid rounded w-100" src="{{ asset('storage/' . $state->image) }}" alt="">--}}
{{--                                                <div class="destination-overlay p-4">--}}
{{--                                                    <a href="#"--}}
{{--                                                       class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>--}}
{{--                                                    <h4 class="text-white mb-2 mt-3">{{ $state->title }}</h4>--}}
{{--                                                    <a href="{{route('destination-details',['title'=>$state->title])}}" class="btn-hover text-white">View All Place <i--}}
{{--                                                            class="fa fa-arrow-right ms-2"></i></a>--}}
{{--                                                </div>--}}
{{--                                                <div class="search-icon">--}}
{{--                                                    <a href="{{ asset('storage/' . $state->image) }}"--}}
{{--                                                       data-lightbox="destination-{{ $state->id }}"><i--}}
{{--                                                            class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Destination End -->--}}






    </div>
@endsection
