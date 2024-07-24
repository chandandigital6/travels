@extends('components.main')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Account Settings</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Account</a></li>
                    <li class="breadcrumb-item active text-white">Settings</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Account Settings Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <!-- Sidebar -->
                <div class="list-group">
                    <a href="#account-info" class="list-group-item list-group-item-action active" data-bs-toggle="list">Account Information</a>
                    <a href="#change-password" class="list-group-item list-group-item-action" data-bs-toggle="list">Change Password</a>
                    <a href="#notifications" class="list-group-item list-group-item-action" data-bs-toggle="list">Notifications</a>
                    <a href="#privacy-settings" class="list-group-item list-group-item-action" data-bs-toggle="list">Privacy Settings</a>
                </div>
            </div>
            <div class="col-lg-9">
                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- Account Information -->
                    <div class="tab-pane fade show active" id="account-info">
                        <h4>Account Information</h4>
                        <form>
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>

                    <!-- Change Password -->
                    <div class="tab-pane fade" id="change-password">
                        <h4>Change Password</h4>
                        <form>
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="currentPassword" placeholder="Enter your current password">
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPassword" placeholder="Enter your new password">
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your new password">
                            </div>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>

                    <!-- Notifications -->
                    <div class="tab-pane fade" id="notifications">
                        <h4>Notification Settings</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="notifyEmail" checked>
                            <label class="form-check-label" for="notifyEmail">
                                Receive email notifications
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="notifySMS">
                            <label class="form-check-label" for="notifySMS">
                                Receive SMS notifications
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save Settings</button>
                    </div>

                    <!-- Privacy Settings -->
                    <div class="tab-pane fade" id="privacy-settings">
                        <h4>Privacy Settings</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="makeProfilePublic">
                            <label class="form-check-label" for="makeProfilePublic">
                                Make my profile public
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="allowContacts">
                            <label class="form-check-label" for="allowContacts">
                                Allow contacts to find me by email
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save Settings</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Settings End -->

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
