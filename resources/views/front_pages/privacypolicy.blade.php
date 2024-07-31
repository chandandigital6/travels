@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">PRIVACY POLICY</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                {{--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>--}}
                <li class="breadcrumb-item active text-white">PRIVACY POLICY</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
    <div class="mt-5 pt-5">
        <div class="container py-5">
{{--            <h1 class="mb-4">Privacy Policy</h1>--}}

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="terms-section">
                        <h2>Privacy Policy of AV Vacations</h2>
                        <p>Welcome to AV Vacations. This privacy policy explains how we collect, use, and protect the information you provide to us when you visit and interact with AVVacations.com. We may update this policy from time to time, and we encourage you to review this page regularly to stay informed of any changes.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Data Collection</h2>
                        <h3>Types of Data We Collect</h3>
                        <ul class="terms-list">
                            <li>IP Address: We collect your IP address for analytical purposes.</li>
                            <li>Contact Details: We may gather your contact and email information.</li>
                            <li>Personal Preferences: Information on your interests and preferences.</li>
                            <li>Online Behavior: Data on how you navigate and interact with our website.</li>
                        </ul>
                        <h3>Purpose of Data Collection</h3>
                        <ul class="terms-list">
                            <li>Understanding Your Needs: To tailor our services to better suit your preferences.</li>
                            <li>Enhancing Services: To refine and improve our offerings.</li>
                            <li>Promotional Communications: To send you information about offers and updates we believe will interest you.</li>
                            <li>Surveys and Research: To reach out for feedback and insights through surveys.</li>
                            <li>Personalized Experience: To customize our website based on your behavior and preferences.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>Data Protection and Security</h2>
                        <p>At AV Vacations, we are committed to safeguarding your data. We implement advanced technologies and practices to prevent unauthorized access, theft, and data breaches, ensuring that your information remains secure and confidential.</p>
                    </div>

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
                        <ul class="terms-list">
                            <li>Forms: When filling out forms on our website, look for options to exclude personal data if desired.</li>
                            <li>Existing Permissions: If you have previously shared your information and wish to retract it, contact us via email to request changes.</li>
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
