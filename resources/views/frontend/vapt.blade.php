@extends('frontend.layouts.app')

@section('title', 'VAPT')

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
                        <h1 id="second_h_1">VAPT</h1>
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
                            <h2 id="second-font">Application Security Testing</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/Application-Security-Testing.jpg') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Application security testing identifies vulnerabilities in software 
                                    applications through static and dynamic analysis, ensuring robust
                                     protection against attacks and safeguarding sensitive data from exploitation.</p>
                                </p>
                                
                                <div class="btn-success btn-sm" id="second_btn">Read More..</div>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4" id="sec_bg">
                    <a href="javascript:void(0)" id="second_a">
                        <div class="panel-heading">
                            <h2 id="second-font">Network Security Testing</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/network-security.webp') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Network security testing evaluates the security posture of networks by identifying vulnerabilities, testing firewall effectiveness, detecting intrusions, and ensuring protection against unauthorized access and cyber threats.</p>
                                
                            </p>
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
                                Database Security Testing
                            </h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/Database Security Testing.webp') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Database security testing identifies vulnerabilities, misconfigurations, and access control issues to protect sensitive data from SQL injection, privilege escalation, data leaks, and unauthorized access.</p>
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
                            <h2 id="second-font">Server & Storage Security Testing</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/Security-Testing.jpg') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Server & storage security testing assesses configurations, access controls, and patch levels to prevent unauthorized access, data breaches, ransomware, and ensure resilience against cyber threats.</p>
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
                            <h2 id="second-font">People & Process Security Testing</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/People-&-Process-Security-Testing.jpg') }}" alt="">
                            <div class="caption">
                                <p id="second-p">People & process security testing evaluates human and procedural vulnerabilities, including insider threats, social engineering, and policy adherence to strengthen organizational security posture and reduce risk exposure.</p>
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
                            <h2 id="second-font">IT Security Auditing & Testing</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/IT-Security-Auditing-&-Testing.jpg') }}" alt="">
                            <div class="caption">
                                <p id="second-p">IT Security Auditing & Testing involves systematic evaluation of systems, networks, 
                                    and policies to identify vulnerabilities, ensure compliance,
                                     and validate the effectiveness of cybersecurity controls.</p>
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
                            <h2 id="second-font">Offensive Security & Ethical Hacking Services</h2>
                        </div>
                        <div class="panel-body">
                            <img id="image" src="{{ asset('assets/images/Offensive-Security-&-Ethical-Hacking-Services.jpg') }}" alt="">
                            <div class="caption">
                                <p id="second-p">Offensive Security & Ethical Hacking Services simulate real-world attacks to uncover vulnerabilities, test defenses, and strengthen security posture without causing harm to the target systems.</p>
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