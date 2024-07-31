@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Cookie Policy</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                {{--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>--}}
                <li class="breadcrumb-item active text-white">Cookie Policy</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <div class="mt-5 pt-5">
        <div class="container py-5">
{{--            <h1 class="mb-4">Cookie Policy</h1>--}}

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="terms-section">
                        <h2>Cookie Policy</h2>
                        <p>When you consent to the use of cookies on our website, you agree to allow us to collect data related to your online activities. This includes analyzing web traffic and tracking your interaction with our site. Cookies help us tailor your experience, but they do not provide us with control over your computer. You can manage your cookie preferences through your browser settings. For instructions, please refer to the links for cookie settings for major browsers.</p>
                    </div>

                    <div class="terms-section">
                        <h2>External Links</h2>
                        <p>Our site may contain links to other websites. Please be aware that AV Vacations is not responsible for the privacy practices or data protection on these external sites. We encourage you to review the privacy policies of any third-party sites you visit.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Controlling Your Personal Data</h2>
                        <p>You have the option to limit the collection and use of your personal data:</p>
                        <ul class="terms-list">
                            <li><strong>Forms:</strong> When filling out forms on our website, look for options to exclude personal data if desired.</li>
                            <li><strong>Existing Permissions:</strong> If you have previously shared your information and wish to retract it, contact us via email to request changes.</li>
                        </ul>
                        <p>AV Vacations will not sell or lease your personal information to third parties without your consent. We may share data if legally required or for sending promotional materials, provided you agree to this policy.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Log Files</h2>
                        <p>AV Vacations uses log files to record various types of information, including IP addresses, browser types, and referring pages. This data helps us analyze trends and manage our site but is not linked to personally identifiable information.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Cookies and Web Beacons</h2>
                        <p>We use cookies to store visitor preferences and tailor our site content accordingly. Third-party advertisers on our site may also use cookies and web beacons to serve ads. We have no control over these third-party technologies. For details on their practices and how to opt out, refer to their privacy policies.</p>
                    </div>

                    <div class="terms-section">
                        <h2>DoubleClick DART Cookie</h2>
                        <p>Google and other third-party vendors use cookies to serve ads based on your visits to our site and other sites. You can opt out of DART cookies by visiting Google's ad privacy policy.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Conclusion</h2>
                        <p>By using AV Vacations’ website, you agree to our privacy practices outlined in this policy. We reserve the right to modify this policy as needed, so please check back regularly to stay informed.</p>
                    </div>

                    <div class="terms-section">
                        <h2>All Rights Reserved</h2>
                        <p>We reserve the right to manage comments and enforce our privacy policy rules.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
