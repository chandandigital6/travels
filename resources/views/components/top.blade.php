<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-primary px-3 px-sm-5 d-block">
    <div class="row gx-0">
        <div class="col-12 col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-none d-sm-flex justify-content-center justify-content-lg-start align-items-center flex-wrap" style="min-height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                        class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                        class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
        <div class="col-12 col-lg-4 text-center text-lg-end">
            <div class="d-flex justify-content-center justify-content-lg-end align-items-center flex-wrap" style="min-height: 30px;">
                <a href="{{ route('register') }}" class="me-3 text-light mb-2 mb-sm-0"><small><i
                            class="fa fa-user me-2"></i>Register</small></a>
                <a href="{{ route('login') }}" class="me-3 text-light mb-2 mb-sm-0"><small><i
                            class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                <div class="dropdown mb-2 mb-sm-0">
                    <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i
                                class="fa fa-home me-2"></i> My Dashboard</small></a>
                    <div class="dropdown-menu rounded">
                        <a href="{{ route('myprofile') }}" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My
                            Profile</a>
                        {{--                        <a href="{{ route('inbox') }}" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i>--}}
                        {{--                            Inbox</a>--}}
                        {{--                        <a href="{{ route('notifications') }}" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>--}}
                        {{--                        <a href="{{ route('accountsetting') }}" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>--}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off me-2"></i> Log Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<style>
    @media (max-width: 575.98px) {
        .container-fluid {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
        .dropdown-menu {
            min-width: 200px;
        }
    }
</style>
