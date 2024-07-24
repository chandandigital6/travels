@extends('components.main')

@section('content')
    <div class="container-fluid p-0">
        <!-- Header Section -->
        <div class="position-relative">
            <img src="{{ asset('asset/img/Rajasthan-2.jpg') }}" class="img-fluid w-100" alt="Rajasthan Itinerary"
                style="object-fit: cover; height: 80vh;">
            <div class="position-absolute top-50 start-50 translate-middle text-white text-center bg-dark bg-opacity-75 p-4 rounded"
                style="font-family: 'Roboto', sans-serif;">
                <h1 class="display-4 text-warning mb-4" style="font-size: 3.5rem;">Rajasthan <span
                        class="text-warning">Itinerary</span></h1>
                <div class="breadcrumb d-flex justify-content-center">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none mx-2">Home</a>
                    <span class="text-white mx-2">/</span>
                    <a href="{{ route('india') }}" class="text-white text-decoration-none mx-2">India</a>
                    <span class="text-white mx-2">/</span>
                    <a href="{{ route('rajasthan') }}" class="text-white text-decoration-none mx-2">Rajasthan</a>
                </div>
            </div>
        </div>

        <!-- Banner Image Section -->
        <div class="banner-image mt-5 position-relative d-flex justify-content-center">
            <img src="{{ asset('asset/img/Rajasthan-2.jpg') }}" class="img-fluid rounded" alt="Rajasthan Itinerary"
                style="object-fit: cover; width: 95%; max-height: 80vh;">
        </div>


        <!-- Itinerary Section -->
        <main class="d-flex justify-content-center align-items-center" style="font-family: 'Roboto', sans-serif;">
            <div class="container py-5">
                <!-- Day 1 -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card shadow-lg border-0"
                            style="transition: transform 0.3s ease-in-out; cursor: pointer; max-width: 800px; margin: auto; border-radius: 15px; overflow: hidden;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt text-primary me-2" style="font-size: 1.5rem;"></i>
                                    <div class="badge bg-primary text-white"
                                        style="font-size: 1.25rem; padding: 0.5rem 1rem;">{{ __('Day 1') }}</div>
                                </div>
                                <h2 class="card-title text-primary">On arrival in Jaipur transfer to Hotel.</h2>
                                <p class="card-text">
                                    Jaipur Maharaja Jai Singh II built Jaipur in the 18th century. It is a planned city
                                    built with ancient Hindu rules as the colonial capital of a richly colorful state. The
                                    whole city
                                    was painted pink to welcome the visit of Prince Albert in 1853.
                                    Check in at hotel and after some rest visit local sightseeing
                                    Dinner and Overnight at hotel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Day 2 -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card shadow-lg border-0"
                            style="transition: transform 0.3s ease-in-out; cursor: pointer; max-width: 800px; margin: auto; border-radius: 15px; overflow: hidden;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt text-primary me-2" style="font-size: 1.5rem;"></i>
                                    <div class="badge bg-primary text-white"
                                        style="font-size: 1.25rem; padding: 0.5rem 1rem;">{{ __('Day 2') }}</div>
                                </div>
                                <h2 class="card-title text-primary">After breakfast at hotel proceed for local sightseeing.
                                </h2>
                                <p class="card-text">
                                    After breakfast, this morning, proceed to Gulmarg. In Gulmarg, take a ride in the
                                    world's highest cable car "Gondola" or enjoy your day by playing golf in the world's
                                    highest golf course. Overnight stay at Srinagar. (Gondola & Pony ride – Not
                                    Included) Note: In Winter’s, Snow Jeep transfers from Tangmarg to Gulmarg to Tangmarg:
                                    Applicable in Nov & Dec Month (Cost Extra) No Cars are allowed to move inside Gulmarg
                                    area, due to issue of horse owner’s association.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Day 3 -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card shadow-lg border-0"
                            style="transition: transform 0.3s ease-in-out; cursor: pointer; max-width: 800px; margin: auto; border-radius: 15px; overflow: hidden;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt text-primary me-2" style="font-size: 1.5rem;"></i>
                                    <div class="badge bg-primary text-white"
                                        style="font-size: 1.25rem; padding: 0.5rem 1rem;">{{ __('Day 3') }}</div>
                                </div>
                                <h2 class="card-title text-primary">After Breakfast at hotel proceed for sightseeing</h2>
                                <p class="card-text">
                                    After breakfast this morning, we check out from Srinagar, as we drive you to
                                    Pahalgam, the Valley of Shepherds, via Srinagar. Drive through saffron fields. Drive
                                    through the pine forest and along the Lidder River. Arrive in Pahalgam and transfer
                                    to your hotel. Rest of the day is at leisure. Overnight stay at a hotel in Pahalgam.
                                    Note: In Pahalgam: Horse Riding, Chandanwari, Betaab Valley, Aru Valley, and Baisaran
                                    Valley (Cost Extra).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Day 4 -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card shadow-lg border-0"
                            style="transition: transform 0.3s ease-in-out; cursor: pointer; max-width: 800px; margin: auto; border-radius: 15px; overflow: hidden;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt text-primary me-2" style="font-size: 1.5rem;"></i>
                                    <div class="badge bg-primary text-white"
                                        style="font-size: 1.25rem; padding: 0.5rem 1rem;">{{ __('Day 4') }}</div>
                                </div>
                                <h2 class="card-title text-primary">JAIPUR DEPARTURE (Stay in HouseBoat)</h2>
                                <p class="card-text">
                                    After breakfast, drive towards Srinagar & local sightseeing of Srinagar City. Visit:
                                    Mughal gardens: Chesma Shahi (Mughal Spring), Nishat (The Garden of Bliss), Shalimar
                                    (The Abode of Love). Overnight stay at Srinagar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Day 5 -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card shadow-lg border-0"
                            style="transition: transform 0.3s ease-in-out; cursor: pointer; max-width: 800px; margin: auto; border-radius: 15px; overflow: hidden;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt text-primary me-2" style="font-size: 1.5rem;"></i>
                                    <div class="badge bg-primary text-white"
                                        style="font-size: 1.25rem; padding: 0.5rem 1rem;">{{ __('Day 5') }}</div>
                                </div>
                                <h2 class="card-title text-primary">Proceed to Airport from Rajasthan</h2>
                                <p class="card-text">
                                    After breakfast, this morning, check out from your houseboat and get transferred to
                                    Srinagar Airport for your onward journey. Tour Ends.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Reservation Start -->
        <div class="container-fluid booking py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h5 class="section-booking-title pe-3">Reservation</h5>
                        <h1 class="text-white mb-4">Online Reservation Start</h1>
                        <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                            maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus
                            praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                        </p>
                        <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                            maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus
                            praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                        </p>
                        <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="text-white mb-3">Reserve A Tour Deals</h1>
                        <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure
                            Trip With. Get More Deal Offers Here.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-white border-0" id="email"
                                            placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control bg-white border-0" id="datetime"
                                            placeholder="Date & Time" data-target="#date3"
                                            data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="select1">
                                            <option value="1">Destination 1</option>
                                            <option value="2">Destination 2</option>
                                            <option value="3">Destination 3</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="SelectPerson">
                                            <option value="1">Persons 1</option>
                                            <option value="2">Persons 2</option>
                                            <option value="3">Persons 3</option>
                                        </select>
                                        <label for="SelectPerson">Persons</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="CategoriesSelect">
                                            <option value="1">Kids</option>
                                            <option value="2">0</option>
                                            <option value="3">1</option>
                                            <option value="4">2</option>
                                            <option value="5">3</option>
                                        </select>
                                        <label for="CategoriesSelect">Categories</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary text-white w-100 py-3" type="submit">Book
                                        Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation End -->

        <!-- Video Section -->
        <div class="container-fluid px-0">
            <div class="row g-0 mt-5 mb-5">
                <div class="col-12 col-md-10 col-lg-12 mx-auto">
                    <h2 class="text-center mb-4">Watch Our Rajasthan Journey</h2>
                    <div class="video-container">
                        <div class="ratio ratio-16x9">
                            <video controls muted class="rounded">
                                <source src="{{ asset('asset/img/rajasthanvideo.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Section End -->

    </div>
@endsection
