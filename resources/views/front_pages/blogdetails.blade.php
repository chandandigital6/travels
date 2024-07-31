@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="text-center py-5">
            <h3 class="text-white display-3 mb-4">{{$blog->title}}</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('blog')}}">Blog</a></li>
                <li class="breadcrumb-item active text-white">Blog Details</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Details Start -->
    <div class="container-fluid blog-details py-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="blog-details-item">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ asset('storage/'.$blog->image) }}" alt="Blog Image">
                    <div class="blog-info d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center me-4">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d, F Y') }}</span>
                        </div>
                        <div class="d-flex align-items-center me-4">
                            <i class="fa fa-user text-primary me-2"></i>
                            <span>{{$blog->author_name}}</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-box text-primary me-2"></i>
                            <span>{{$blog->categories}}</span>
                        </div>

                    </div>
                    <h1 class="mb-4">{{$blog->title}}</h1>
                {!! $blog->description !!}
{{--                    <blockquote class="bg-light rounded p-4 my-5">--}}
{{--                        <i class="fa fa-quote-left text-primary me-3"></i>--}}
{{--                        Traveling – it leaves you speechless, then turns you into a storyteller.--}}
{{--                        <footer class="blockquote-footer mt-3">Ibn Battuta</footer>--}}
{{--                    </blockquote>--}}
{{--                    <p>Praesent vehicula tortor id enim ultricies, a tincidunt justo pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam mattis risus facilisis dui fermentum, eget iaculis nulla tincidunt.</p>--}}
                </div>
            </div>

        </div>
    </div>
    <!-- Blog Details End -->

    @include('components.newsLater')
@endsection
