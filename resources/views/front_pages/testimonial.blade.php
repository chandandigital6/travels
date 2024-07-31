@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Our Testimonial</h3>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
{{--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>--}}
                    <li class="breadcrumb-item active text-white">Testimonial</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Testimonial</h5>
                <h1 class="mb-0">Our Clients Say!!!</h1>
            </div>



            <div class="testimonial-carousel owl-carousel">
                @foreach($testimonials as $testimonial)
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">
                                {!! $testimonial->msg !!}
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="{{ asset('storage/'.$testimonial->image) }}" class="img-fluid rounded-circle"
                                 alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">{{$testimonial->name}}</h5>
                            {{--                        <p class="mb-0">New York, USA</p>--}}
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    @include('components.newsLater')
@endsection
