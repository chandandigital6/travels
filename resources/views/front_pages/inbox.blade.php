@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Inbox</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Inbox</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Inbox Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <!-- Sidebar -->
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        Inbox
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Sent</a>
                    <a href="#" class="list-group-item list-group-item-action">Drafts</a>
                    <a href="#" class="list-group-item list-group-item-action">Trash</a>
                </div>
            </div>
            <div class="col-lg-9">
                <!-- Message List -->
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Message Subject</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Brief summary or snippet of the message content.</p>
                        <small>Sender Name</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Another Message Subject</h5>
                            <small>5 days ago</small>
                        </div>
                        <p class="mb-1">Brief summary or snippet of the message content.</p>
                        <small>Sender Name</small>
                    </a>
                    <!-- More messages can be added here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Inbox End -->

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
