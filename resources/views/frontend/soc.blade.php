@extends('frontend.layouts.app')

@section('title', 'SOC')

<style>
    .cn-hover-box:hover .cn-content .height {
        height: 0px;
        display: block;
    }

    #Ec-council-training {
    background-image: url('/assets/images/long_back.webp');
    background-size: cover;
    background-position: center;
    height: 390px; /* Let content height adjust naturally */
   
}

#heade_img {
    max-height: 150px; /* Adjust based on design */
    height: auto;
}

</style>
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style_old.css') }}">
    <body class="home-page" id="mian-body">

        @include('frontend.layouts.header')
        {{-- <div class="container" id="second_pad">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-heading">
                        <h1 id="second_h_1">SOC</h1>
                    </div>
                </div>
            </div>
        </div> --}}
    
        <div class="success" id="Ec-council-training" style="background-image: url({{ asset('assets/images/long_back.webp') }})">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('assets/images/Information-Security-Training-Course.png') }}" id="heade_img">
                    </div>
                    <div class="col-md-10">
                        <p id="second_p"><a href="{{ route('home') }}" id="txt_txt"><b>Cybarwind</b></a> is a premier organization re-sourcing intelligent technocrats and aspirant executives with corporate world together.</p>
                        <p id="second_p_1">Cybarwind also develops same leadership attributes and nimbleness as the new generation of executives require to suit Market dynamics.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <div class="container">
    
            <p id="second_p1">With an in-depth analysis and understanding of Corporate World requirements, we serve the industry with a new blend of innovation, dynamism in our training methodology and work practices.</p>
    
            <p id="second_p2">Codec Networks trained candidates for our clients with right knowledge of latest technology, hands-on technical expertise and groom them with right blend of leadership attributes and personality traits to suit our clients current
                Industry Product and Service offerings .</p>
    
            <div class="row" id="second_mar">
    
                <div class="col-md-4" id="sec_bg">
                    <a href="Trainings/EC-COUNCIL-Training-Certification-Programs.php" id="second_a">
                        <div class="panel-heading">
                            <h2 id="second-font">EC COUNCIL</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/ECCouncil-Training-Course.webp') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Codec Networks as a EC-Council Accredited partner provides completely Vendor neutral tactical security programs that are globally accepted in Information Security Assurance which teaches techniques of the worlds ..</p>
                                <p>
                                
                                
                                <div class="btn-success btn-sm" id="second_btn">Read More..</div>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4" id="sec_bg">
                    <a href="Trainings/Assessment-Audit-&-Compliance.php" id="second_a">
                        <div class="panel-heading">
                            <h2 id="second-font">PECB (AUDIT & COMPLIANCE)</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/Assessment-Audit-Compliance-Training-Course.webp') }}" alt="Assessment-Audit-Complaince">
                            <div class="caption">
                                <p id="second-p">Codec Networks as PECB Accredited Partner provides the most up-to-date ISO trainings that are needed to succeed and assure confidence in your everyday life and ensure that you have the necessary capabilities of shielding ...</p>
                                <p>
                                
                                
                                <div class="btn-success btn-sm" id="second_btn">Read More..</div>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4" id="sec_bg">
                    <a href="Trainings/ISACA-&-ISC2.php" id="second_a">
                        <div class="panel-heading">
                            <h2 id="second-font">
                                ISACA & ISC <sup>2</sup>
                            </h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/ISCA-Training-Course.webp') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Independent studies consistently rate ISACA and ISC2 designations among the highest paying IT and impactful certifications for an IT professional. Learn and Earn with ISACA and ISC2 Training and Certification.</p>
                                <p>
                                
                                
                                <div class="btn-success btn-sm" id="second_btn">Read More..</div>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4" id="sec_bg">
                    <a href="Trainings/CISCO-Training-Certification-Programs.php" id="second_a">
                        <div class="panel-heading">
                            <h2 id="second-font">NETWORK & NETWORK SECURITY</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/network-security.webp') }}" alt="">
                            <div class="caption">
                                <p id="second-p">For Professional interested in Network & Network Security Trainings, Codec Networks facilitates three levels of Network Courses i.e. Associate, Professional and Expert recommended as best Industry Practices
                                    Programs..</p>
                                <p>
                                
                                
                                <div class="btn-success btn-sm" id="second_btn">Read More..</div>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4" id="sec_bg">
                    <a href="Trainings/IT-Security-&-Pen-Testing.php" id="second_a">
                        <div class="panel-heading">
                            <h2 id="second-font">Specialised Security Programs</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/IT-Security-_-PEN-Testing.webp') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Codec Networks Specialize IT Security courses are the foundation, from where anyone can sign up for our Security Courses and can get the most up-to-date information, complete hands-on labs and certification preparation ..</p>
                                <p>
                                
                                
                                <div class="btn-success btn-sm" id="second_btn">Read More..</div>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4" id="sec_bg">
                    <a href="Trainings/Forensic-&-Fraud-Investigation.php" id="second_a">
                        <div class="panel-heading">
                            <h2 id="second-font">FORENSIC & FRAUD INVESTIGATION</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/Forensic-Freaud-Investigation-Training-Course.webp') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Codec Networks specialist Forensics & Fraud Investigation courses drivend by our experts in the field of high-tech forensic lab and focuses on Technological issues including cyber security, encryption, cryptography and digital forensics...</p>
                                <p>
                                
                                
                                <div class="btn-success btn-sm" id="second_btn">Read More..</div>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            <div class="col-md-4" id="sec_bg">
                    <a href="Trainings/Big-Data-Analytics.php" id="second_a">
                        <div class="panel-heading">
                            <h2 id="second-font">Data Science / Analytic</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/Data-Science-python.webp') }}" alt="">
                            <div class="caption">
                                <p id="second-p">With Codec Networks' Data Science & Analytics training; gain skills in data-driven business strategy and learn tools / techniques to Analytics technology falls into four major: analysts, scientists, developer and administrator...</p>
                                <p>
                                
                                
                                <div class="btn-success btn-sm" id="second_btn">Read More..</div>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>  
            </div>
    
        <a href="#mian-body" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>
    </body>
@endsection

@push('scripts')
    <!-- Jquery code -->
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js?v-1') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/homepage.js?v14') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mobile-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js?v=32') }}"></script>

    @include('frontend.layouts.right-menu-js')
@endpush