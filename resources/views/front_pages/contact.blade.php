@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Contact Us</h3>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
{{--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>--}}
                    <li class="breadcrumb-item active text-white">Contact</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Contact Us</h5>
                <h1 class="mb-0">Contact For Any Query</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-4">
                    <div class="bg-white rounded p-4">
                        <div class="text-center mb-4">
                            <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                            <h4 class="text-primary">
                                <Address></Address>
                            </h4>
                            <p>
                                Miran Tower
                                E331, Phase 8B, Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar, Punjab 160055
                            </p>
                        </div>
                        <div class="text-center mb-4">
                            <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                            <h4 class="text-primary">Mobile</h4>
                            <p class="mb-0">+91-73473-15059</p>
{{--                            <p class="mb-0">+012 345 67890</p>--}}
                        </div>

                        <div class="text-center">
                            <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                            <h4 class="text-primary">Email</h4>
                            <p class="mb-0"> info@avvacation.in</p>
{{--                            <p class="mb-0">info@example.com</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h3 class="mb-2">Send us a message</h3>
{{--                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with--}}
{{--                        Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a--}}
{{--                            href="">Download Now</a>.</p>--}}
                    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 @error('name') is-invalid @enderror" id="name"
                                           name="name" placeholder="Your Name" value="{{ old('name') }}">
                                    <label for="name">Your Name</label>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 @error('email') is-invalid @enderror" id="email"
                                           name="email" placeholder="Your Email" value="{{ old('email') }}">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 @error('subject') is-invalid @enderror" id="subject"
                                           name="subject" placeholder="Subject" value="{{ old('subject') }}">
                                    <label for="subject">Subject</label>
                                    @error('subject')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 @error('msg') is-invalid @enderror" placeholder="Leave a message here"  id="message" name="msg" style="height: 160px">{{ old('msg') }}</textarea>
                                    <label for="message">Message</label>
                                    @error('msg')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <div class="rounded">
                        <iframe class="rounded w-100" style="height: 450px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.342954011524!2d76.68131897557947!3d30.708757674595812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fefaac39346cb%3A0xeba090b46ccc46df!2sMiran%20Tower!5e0!3m2!1sen!2sin!4v1722410352483!5m2!1sen!2sin"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @include('components.newsLater')
@endsection
