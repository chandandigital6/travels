<div class="container-fluid footer py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Get In Touch</h4>
                    <a href=""><i class="fas fa-home me-2"></i> Miran Tower <br>
                        E331, Phase 8B, Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar, Punjab 160055</a>
                    <a href=""><i class="fas fa-envelope me-2"></i>
                        info@avvacation.in</a>
                    <a href=""><i class="fas fa-phone me-2"></i>+91-73473-15059</a>
{{--                    <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>--}}
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-white me-2"></i>
                        <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Company</h4>
                    <a href="{{ route('about') }}"><i class="fas fa-angle-right me-2"></i> About</a>
                    {{-- <a href=""><i class="fas fa-angle-right me-2"></i> Careers</a> --}}
                    <a href="{{ route('blog') }}"><i class="fas fa-angle-right me-2"></i> Blog</a>
                    {{-- <a href=""><i class="fas fa-angle-right me-2"></i> Press</a> --}}
                    {{-- <a href=""><i class="fas fa-angle-right me-2"></i> Gift Cards</a> --}}
                    {{-- <a href=""><i class="fas fa-angle-right me-2"></i> Magazine</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Support</h4>
                    <a href="{{ route('contact') }}"><i class="fas fa-angle-right me-2"></i> Contact</a>
                    <a href="{{ route('legalnotice') }}"><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                    <a href="{{ route('privacypolicy') }}"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                    <a href="{{ route('termsconditon') }}"><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                    {{-- <a href=""><i class="fas fa-angle-right me-2"></i> Sitemap</a> --}}
                    <a href="{{ route('cookiepolicy') }}"><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    {{-- <div class="row gy-3 gx-2 mb-4">
                        <div class="col-xl-6">
                            <form>
                                <div class="form-floating">
                                    <select class="form-select bg-dark border" id="select1">
                                        <option value="1">Arabic</option>
                                        <option value="2">German</option>
                                        <option value="3">Greek</option>
                                        <option value="3">New York</option>
                                    </select>
                                    <label for="select1">English</label>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-6">
                            <form>
                                <div class="form-floating">
                                    <select class="form-select bg-dark border" id="select1">
                                        <option value="1">USD</option>
                                        <option value="2">EUR</option>
                                        <option value="3">INR</option>
                                        <option value="3">GBP</option>
                                    </select>
                                    <label for="select1">$</label>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                    <h4 class="text-white mb-3">Payments</h4>
                    <div class="footer-bank-card">
                        <a href="#" class="text-white me-2"><i class="fab fa-cc-amex fa-2x"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-cc-visa fa-2x"></i></a>
                        <a href="#" class="text-white me-2"><i class="fas fa-credit-card fa-2x"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-cc-paypal fa-2x"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-cc-discover fa-2x"></i></a>

                    </div>
                    <a href="https://razorpay.me/@avvacationprivatelimited" > <img src="{{asset('asset/images/Screenshot-2023-10-04-070447.png.webp')}}" alt=""></a>

                </div>
            </div>
        </div>
    </div>
</div>



<!-- Copyright Start -->
<div class="container-fluid copyright text-body py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-end mb-md-0">
                <i class="fas fa-copyright me-2"></i><a class="text-white" href="{{route('home')}}">AV Vacations</a>,
                All right reserved.
            </div>
            <div class="col-md-6 text-center text-md-start">

                Developed By <a class="text-white" href="https://viralbusinessgroup.com">Viral Business Groups</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
