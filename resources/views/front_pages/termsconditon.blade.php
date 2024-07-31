@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Terms & Conditions</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                {{--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>--}}
                <li class="breadcrumb-item active text-white">Terms & Conditions</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
    <div class="mt-5 pt-5">
        <div class="container py-5">
            <h1 class="mb-4">Terms & Conditions</h1>

            <div class="row">
                <div class="col-lg-8 mx-auto">

                    <div class="terms-section">
                        <h2>Interpretation and Definitions</h2>
                        <p>Interpretation: Capitalized words have specific meanings as defined in this section. These definitions apply whether the terms are singular or plural.</p>
                        <p>Definitions: For the purpose of these Terms and Conditions:</p>
                        <ul class="terms-list">
                            <li><strong>Affiliate:</strong> Refers to any entity that directly or indirectly controls, is controlled by, or is under common control with a party. “Control” signifies owning at least 50% of the shares, equity interest, or other voting securities.</li>
                            <li><strong>Company:</strong> Identified as “the Company,” “We,” “Us,” or “Our” in this document, and refers to av vacations.</li>
                            <li><strong>Country:</strong> Indicates Andhra Pradesh, India.</li>
                            <li><strong>Device:</strong> Any technology that can access the Service, including computers, cellphones, or tablets.</li>
                            <li><strong>Service:</strong> Refers to the Website.</li>
                            <li><strong>Terms and Conditions:</strong> These Terms outline the entire agreement between You and the Company concerning the use of the Service. This document has been generated with the help of a Terms and Conditions Generator.</li>
                            <li><strong>Third-party Social Media Service:</strong> Services or content provided by third parties that may be displayed or integrated into the Service.</li>
                            <li><strong>You:</strong> The individual accessing or using the Service, or the organization on whose behalf the individual is using the Service.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>Acknowledgement</h2>
                        <p>These Terms and Conditions govern your use of this Service and form an agreement between You and the Company. They define the rights and responsibilities of all users.</p>
                        <p>Access to and use of the Service is contingent upon your acceptance and adherence to these Terms. This applies to all visitors and users of the Service.</p>
                        <p>By using the Service, you agree to these Terms. If you do not agree with any part, you must not use the Service.</p>
                        <p>You confirm that you are over 18 years of age, as the Service is not permitted for individuals under 18.</p>
                        <p>Your use of the Service also requires acceptance of the Company's Privacy Policy, which details how we handle your personal information. Please review our Privacy Policy before using the Service.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Links to Other Websites</h2>
                        <p>The Service may contain links to external websites or services not owned or controlled by the Company.</p>
                        <p>The Company is not responsible for the content, privacy policies, or practices of these third-party sites. We disclaim any liability for damages or losses resulting from the use or reliance on such external content or services.</p>
                        <p>We recommend reviewing the terms and privacy policies of any third-party sites you visit.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Termination</h2>
                        <p>We may terminate or suspend your access immediately and without prior notice if you breach these Terms. Upon termination, your right to use the Service will cease immediately.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Limitation of Liability</h2>
                        <p>Despite any damages you might incur, the Company’s total liability and your exclusive remedy are limited to the amount you paid through the Service or 100 USD if no purchase was made.</p>
                        <p>To the fullest extent allowed by law, the Company is not liable for any special, incidental, indirect, or consequential damages, including loss of profits, data, or personal injury related to the use of the Service.</p>
                        <p>Certain jurisdictions may not allow such limitations, so these restrictions may not apply to you. In such cases, liability will be limited as much as possible under the law.</p>
                    </div>

                    <div class="terms-section">
                        <h2>“AS IS” and “AS AVAILABLE” Disclaimer</h2>
                        <p>The Service is provided “AS IS” and “AS AVAILABLE” without any warranties. The Company disclaims all implied warranties, including those related to merchantability, fitness for a particular purpose, and non-infringement.</p>
                        <p>The Company does not guarantee that the Service will meet your requirements, be error-free, or operate without interruptions.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Governing Law</h2>
                        <p>The laws of the Country will govern these Terms and your use of the Service, excluding its conflict of law rules. Your use of the Service may also be subject to local, state, or international laws.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Dispute Resolution</h2>
                        <p>If you have concerns or disputes regarding the Service, you agree to attempt informal resolution by contacting the Company first.</p>
                    </div>

                    <div class="terms-section">
                        <h2>For European Union (EU) Users</h2>
                        <p>EU consumers benefit from mandatory legal provisions applicable in their resident country.</p>
                    </div>

                    <div class="terms-section">
                        <h2>United States Legal Compliance</h2>
                        <p>You represent that you are not located in a country subject to a U.S. government embargo or listed as a “terrorist supporting” country and are not on any restricted U.S. government lists.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Severability and Waiver</h2>
                        <h3>Severability</h3>
                        <p>If any provision of these Terms is found to be unenforceable, it will be adjusted to achieve its intended purpose as closely as possible, while the remaining provisions will continue in full force.</p>
                        <h3>Waiver</h3>
                        <p>Failure to enforce any right or obligation under these Terms does not waive the ability to enforce such rights or obligations in the future.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Translation Interpretation</h2>
                        <p>If these Terms have been translated, the English version will prevail in case of disputes.</p>
                    </div>

                    <div class="terms-section">
                        <h2>Changes to These Terms</h2>
                        <p>We reserve the right to modify these Terms at any time. Significant changes will be communicated with at least 30 days' notice before taking effect. Continued use of the Service after changes implies acceptance of the new terms. If you do not agree with the changes, you should stop using the Service.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
