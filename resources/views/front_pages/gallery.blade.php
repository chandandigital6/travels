@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Our Gallery</h3>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
{{--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>--}}
                    <li class="breadcrumb-item active text-white">Gallery</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid gallery my-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Gallery</h5>
            <h1 class="mb-4">Tourism & Traveling Gallery.</h1>
{{--            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto--}}
{{--                doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti--}}
{{--                eum cum repellat a laborum quasi.--}}
{{--            </p>--}}
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#GalleryTab-1">
                        <span class="text-dark" style="width: 150px;">All</span>
                    </a>
                </li>
                @foreach($clientLogos->groupBy('title') as $title => $logos)
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-{{ Str::slug($title) }}">
                            <span class="text-dark" style="width: 150px;">{{ $title }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content">
                <div id="GalleryTab-1" class="tab-pane fade show active p-0">
                    <div class="row g-2">
                        @foreach($clientLogos as $logo)
                            @if (is_string($logo->image) && !empty($logo->image))
                                @php
                                    $imagePaths = explode(',', $logo->image);
                                @endphp
                                @foreach($imagePaths as $imagePath)
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 gallery-item" data-category="{{ $logo->category_id }}">
                                        <div class="h-100">
                                            <img src="{{ asset('storage/'.$imagePath) }}" class="img-fluid w-100 h-100 rounded" alt="{{ $logo->title }}">
                                            <div class="gallery-content">
                                                <div class="gallery-info">
                                                    <h5 class="text-white text-uppercase mb-2"></h5>
                                                    {{--                                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>--}}
                                                </div>
                                            </div>
                                            <div class="gallery-plus-icon">
                                                <a href="{{ asset('storage/'.$imagePath) }}" data-lightbox="gallery-{{ $logo->id }}" class="my-auto">
                                                    <i class="fas fa-plus fa-2x text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>
                @foreach($clientLogos->groupBy('title') as $title => $logos)
                    <div id="GalleryTab-{{ Str::slug($title) }}" class="tab-pane fade p-0">
                        <div class="row g-2">
                            @foreach($logos as $logo)
                                @if (is_string($logo->image) && !empty($logo->image))
                                    @php
                                        $imagePaths = explode(',', $logo->image);
                                    @endphp
                                    @foreach($imagePaths as $imagePath)
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 gallery-item" data-category="{{ $logo->category_id }}">
                                            <div class="h-100">
                                                <img src="{{ asset('storage/'.$imagePath) }}" class="img-fluid w-100 h-100 rounded" alt="{{ $logo->title }}">
                                                <div class="gallery-content">
                                                    <div class="gallery-info">
                                                        {{--                                                        <h5 class="text-white text-uppercase mb-2">{{ $logo->title }}</h5>--}}
                                                        {{--                                                        <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>--}}
                                                    </div>
                                                </div>
                                                <div class="gallery-plus-icon">
                                                    <a href="{{ asset('storage/'.$imagePath) }}" data-lightbox="gallery-{{ $logo->id }}" class="my-auto">
                                                        <i class="fas fa-plus fa-2x text-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



    </div>
    <!-- Gallery End -->

    @include('components.newsLater')
@endsection
