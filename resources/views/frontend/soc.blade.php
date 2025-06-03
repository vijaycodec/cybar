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
                    <a href="javascript:void(0)" id="second_a">
                        <div class="panel-heading">
                            <h2 id="second-font">Cyber Forensic And Threat Analysis as a Service</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/cybersapiens-soc-as-a-service-socaas-page-featured-image.jpg') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Cyber Forensic and Threat Analysis as a Service identifies root causes of incidents, analyzes threat vectors, preserves digital evidence, and supports legal or compliance-driven investigations.</p>
                                <p>
                                
                                
                                <div class="btn-success btn-sm" id="second_btn">Read More..</div>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4" id="sec_bg">
                    <a href="javascript:void(0)" id="second_a">
                        <div class="panel-heading">
                            <h2 id="second-font">Brand Reputation Threat Analysis and Risk Management Services</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/Brand Reputation Threat Analysis and Risk Management Services.png') }}" alt="Assessment-Audit-Complaince">
                            <div class="caption">
                                <p id="second-p">Brand Reputation Threat Analysis and Risk Management Services identify online risks, monitor digital presence, detect impersonation or defamation, and mitigate potential brand damage effectively.</p>
                                <p>
                                
                                
                                <div class="btn-success btn-sm" id="second_btn">Read More..</div>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4" id="sec_bg">
                    <a href="javascript:void(0)" id="second_a">
                        <div class="panel-heading">
                            <h2 id="second-font">
                                Managed SOC Service
                            </h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/managed-soc.jpg') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Managed SOC Service provides 24/7 threat monitoring, detection,
                                     incident response, and log analysis, ensuring proactive cybersecurity defense with expert
                                      analysts and advanced threat intelligence.</p>
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