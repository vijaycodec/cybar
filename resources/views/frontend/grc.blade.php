@extends('frontend.layouts.app')

@section('title', 'GRC')

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
                        <h1 id="second_h_1">GRC</h1>
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
                            <h2 id="second-font">Governance, Risk & Compliance (GRC) Services</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/grc-governance-risk-compliance.webp') }}" alt="">
                            <div class="caption">
                                <p id="second-p">We deliver global GRC services that streamline compliance, manage enterprise risks, ensure regulatory adherence, and enhance governance frameworks across multinational operations for business resilience and integrity</p>
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
                            <h2 id="second-font">Data Privacy & Protection Services </h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/Data-Privacy.webp') }}" alt="Assessment-Audit-Complaince">
                            <div class="caption">
                                <p id="second-p">Our Data Privacy & Protection Services ensure compliance with global regulations, safeguard sensitive information, mitigate breaches, and build trust through robust data governance and security frameworks</p>
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
                                Strategic Risk Assessment & Management
                            </h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/StrategicRiskAssessmentManagement.jpeg') }}" alt="">
                            <div class="caption">
                                <p id="second-p">We provide strategic risk assessment and management services to identify, evaluate, and mitigate business risks, enabling informed decisions, resilience, and long-term organizational success.</p>
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
                            <h2 id="second-font">Emerging Tech & Web3.0 Security</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/Strengthening-Cybersecurity-in-the-Web.jpg') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Our services secure emerging technologies and Web3.0 ecosystems, addressing blockchain, DeFi, metaverse, and AI risks with advanced threat protection, compliance strategies, and cybersecurity frameworks</p>
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
                            <h2 id="second-font">Industry-Specific Compliance & Advisory</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/Industry-Specific-compliance.jpeg') }}" alt="">
                            <div class="caption">
                                <p id="second-p">We offer tailored compliance and advisory services aligned with industry regulations, helping businesses navigate legal complexities, reduce risks, and achieve operational excellence across sectors.</p>
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