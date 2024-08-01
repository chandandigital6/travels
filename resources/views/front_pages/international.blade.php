@extends('components.main',['seos' => $seos])

@section('content')
    <style>
        .gallery-item {
            position: relative;
            overflow: hidden;
        }

        .gallery-item img {
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-content, .gallery-plus-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-content, .gallery-item:hover .gallery-plus-icon {
            opacity: 1;
        }

        .gallery-plus-icon i {
            font-size: 2rem;
        }

    </style>
    <div class="container-fluid p-0">
        <!-- Header Section -->
        <div class="position-relative">
            <img src="{{ asset('asset/img/destination-1.jpg') }}" class="img-fluid w-100" alt="India Itinerary"
                 style="object-fit: cover; height: 80vh;">
            <div class="position-absolute top-50 start-50 translate-middle text-white text-center bg-dark bg-opacity-75 p-4 rounded"
                 style="font-family: 'Roboto', sans-serif;">
                <h1 class="display-4 text-warning mb-4" style="font-size: 3.5rem;">International <span
                        class="text-warning"></span></h1>
                <div class="breadcrumb d-flex justify-content-center">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none mx-2">Home</a>
                    <span class="text-white mx-2">/</span>
                    <a href="{{ route('india') }}" class="text-white text-decoration-none mx-2">International</a>
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
                            @if($resorts->name === 'international')
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
                            @if($resorts->name === 'international')
                                @foreach($resorts->resortStates as $state)
                                    <div id="tab-{{ $state->id }}" class="tab-pane fade show p-0 {{ $loop->parent->first && $loop->first ? 'active' : '' }}">
                                        <div class="row g-2">
                                            @if (is_string($state->image) && !empty($state->image))
                                                @php
                                                    $imagePaths = explode(',', $state->image);
                                                @endphp
                                                @foreach($imagePaths as $imagePath)
                                                    <div class="col-12 gallery-item">
                                                        <div class="h-100">
                                                            <img src="{{ asset('storage/'.$imagePath) }}" class="img-fluid w-100 rounded" alt="{{ $state->title }}">
                                                            <div class="gallery-content">
                                                                <div class="gallery-info">
                                                                    <h5 class="text-white text-uppercase mb-2">{{ $state->title }}</h5>
                                                                </div>
                                                            </div>
                                                            <div class="gallery-plus-icon">
                                                                <a href="{{ asset('storage/'.$imagePath) }}" data-lightbox="destination-{{ $state->id }}" class="my-auto">
                                                                    <i class="fas fa-plus fa-2x text-white"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
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

        <!-- Lightbox2 JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

        <script>
            document.querySelectorAll('.nav-pills .nav-item a').forEach(tab => {
                tab.addEventListener('click', function() {
                    document.querySelectorAll('.nav-pills .nav-item a').forEach(item => {
                        item.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });
        </script>




        {{--        <!-- Destination Start -->--}}
        {{--        <div class="container-fluid destination py-5">--}}
        {{--            <div class="container py-5">--}}
        {{--                <div class="mx-auto text-center mb-5" style="max-width: 900px;">--}}
        {{--                    <h5 class="section-title px-3">Destination</h5>--}}
        {{--                    <h1 class="mb-0">Popular Destination</h1>--}}
        {{--                </div>--}}
        {{--                <div class="tab-class text-center">--}}
        {{--                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">--}}
        {{--                        @foreach($resortStates as $resorts)--}}
        {{--                            @if($resorts->name === 'international')--}}
        {{--                                @foreach($resorts->resortStates as $state)--}}
        {{--                                    <li class="nav-item">--}}
        {{--                                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill {{ $loop->parent->first && $loop->first ? 'active' : '' }}"--}}
        {{--                                           data-bs-toggle="pill" href="#tab-{{ $state->id }}">--}}
        {{--                                            <span class="text-dark" style="width: 150px;">{{ $state->title }}</span>--}}
        {{--                                        </a>--}}
        {{--                                    </li>--}}
        {{--                                @endforeach--}}
        {{--                            @endif--}}
        {{--                        @endforeach--}}
        {{--                    </ul>--}}
        {{--                    <div class="tab-content">--}}
        {{--                        @foreach($resortStates as $resorts)--}}
        {{--                            @if($resorts->name === 'international')--}}
        {{--                                @foreach($resorts->resortStates as $state)--}}
        {{--                                    <div id="tab-{{ $state->id }}" class="tab-pane fade show p-0 {{ $loop->parent->first && $loop->first ? 'active' : '' }}">--}}
        {{--                                        <div class="row g-2">--}}
        {{--                                            @if (is_string($state->image) && !empty($state->image))--}}
        {{--                                                @php--}}
        {{--                                                    $imagePaths = explode(',', $state->image);--}}
        {{--                                                @endphp--}}
        {{--                                                @foreach($imagePaths as $imagePath)--}}
        {{--                                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 gallery-item">--}}
        {{--                                                        <div class="h-100">--}}
        {{--                                                            <img src="{{ asset('storage/'.$imagePath) }}" class="img-fluid w-100 h-100 rounded" alt="{{ $state->title }}">--}}
        {{--                                                            <div class="gallery-content">--}}
        {{--                                                                <div class="gallery-info">--}}
        {{--                                                                    <h5 class="text-white text-uppercase mb-2">{{ $state->title }}</h5>--}}
        {{--                                                                </div>--}}
        {{--                                                            </div>--}}
        {{--                                                            <div class="gallery-plus-icon">--}}
        {{--                                                                <a href="{{ asset('storage/'.$imagePath) }}" data-lightbox="destination-{{ $state->id }}" class="my-auto">--}}
        {{--                                                                    <i class="fas fa-plus fa-2x text-white"></i>--}}
        {{--                                                                </a>--}}
        {{--                                                            </div>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                @endforeach--}}
        {{--                                            @endif--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                @endforeach--}}
        {{--                            @endif--}}
        {{--                        @endforeach--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <!-- Destination End -->--}}

        {{--        <script>--}}
        {{--            document.querySelectorAll('.nav-pills .nav-item a').forEach(tab => {--}}
        {{--                tab.addEventListener('click', function() {--}}
        {{--                    document.querySelectorAll('.nav-pills .nav-item a').forEach(item => {--}}
        {{--                        item.classList.remove('active');--}}
        {{--                    });--}}
        {{--                    this.classList.add('active');--}}
        {{--                });--}}
        {{--            });--}}
        {{--        </script>--}}




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
