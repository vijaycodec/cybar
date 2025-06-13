@extends('frontend.layouts.app')

@section('title', 'Cybarwind | Cyber Security Industry Solutions')

<style>
    .cn-hover-box:hover .cn-content.height {
        height: 0px;
        display: block;
    }
</style>
{{-- <title>Cyber Security Industry Solutions Services Training in Delhi,NCR</title> --}}
{{--
<meta name="viewport" content="width=device-width, initial-scale=1"> --}}

{{-- @include('frontend.layouts.header-css') --}}
{{-- test --}}
@section('content')

    <body class="home-page" id="mian-body">
        <!-- Header start -->

        @include('frontend.layouts.header')
        <!-- Header end -->
        <!-- banner video start -->
        <div class="html5-banner parbase section mhspace" id="banner">
            <div class="video-container video500 mk-black">
                <div class="dark_cta"></div>
                <video autoplay="" loop="" muted="" playsinline="" class="row full-banner banner center-mk-vid"
                    poster="../content/dam/www/marketing/images/banners/solutions-insights-grow-2.webp">
                    <source src="{{ asset('assets/video/solutions-webbg-grow-v1-small.mp4') }}" type="video/mp4">
                    {{--
                    <source src="{{ asset('assets/video/solutions-webbg-grow-v1-small.mp4') }}" type="video/webm"> --}}
                    Your browser does not support the video tag.
                </video>
                <div class="video-content container">
                    <div class="text parbase section">
                        <div>
                            <div class="inner-text-div1  ">
                                <h6 style="text-align: center;color: rgb(255,255,255);">GROW BUSINESS</h6>
                            </div>
                        </div>
                    </div>
                    <div class="text parbase section">
                        <div>
                            <div class="inner-text-div1  ">
                                <h1 style="text-align: center;">Drive customer engagement, reduce attrition, and uncover
                                    business
                                    insights to propel growth
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="button parbase section">
                        <!-- Button Component Sightly -->
                        <div>
                            <div class="row top  txt-center">
                                <a href="javascript:void(0)">
                                    <button class="orange-btn ">
                                        <div class="btn-title"> Watch the webinar</div>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner video end -->
        <!-- empower industry start -->
        <section class="empower-industry home1 mhspace" id="mhome-div1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>We empower industry to Secure Digitally</h2>
                        <p>We empower industry to Secure Digitally </p>
                    </div>
                </div>
            </div>
            <div class="container p40">
                <div class="row">
                    <div class="col-md-4">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/vapt-services.webp') }}" style="aspect-ratio: 1 / 1; height: auto;">
                                </div>
                                <div class="cn-content">
                                    <p>Services to ensure the Integrity of Information Systems, Softwares & Applications,
                                        block
                                        illegal access and protect organizations against data theft, productivity loss and
                                        fraud.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="#" class="cn-main-content-enclosed scroll-link" data-target="#mhome-div2"
                                    data-offset="-60x" data-speed="400" style="display: block; text-decoration: none;">
                                    <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                    <p>Services to ensure the Integrity of Information Systems, Softwares & Applications,
                                        block
                                        illegal
                                        access and protect organizations against data theft, productivity loss and fraud.
                                    </p>
                                    Know more <i class="fa fa-chevron-right"></i>
                                </a>
                                {{-- <a href="https://www.cybarwind.com/new-demo/asaraf/codec/second-level.php">Know more <i
                                        class="fa fa-chevron-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/forensic-seervices.webp') }}" style="aspect-ratio: 1 / 1; height: auto;">
                                </div>
                                <div class="cn-content">
                                    <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                        cybercrime /
                                        online fraud and proactively manage 24x7 hours security risks.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="#" class="cn-main-content-enclosed scroll-link" data-target="#mhome-div4"
                                data-offset="-60x" data-speed="600" 
                                    style="display: block; text-decoration: none;">
                                    <h3>Governance, Risk &amp; Compliance</h3>
                                    <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                        cybercrime
                                        /
                                        online fraud and proactively manage 24x7 hours security risks.
                                    </p>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}" style="aspect-ratio: 1 / 1; height: auto;"> </div>
                                <div class="cn-content">
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat mitigation.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="#" class="cn-main-content-enclosed scroll-link" data-target="#mhome-div4-1"
                                data-offset="-60x" data-speed=" 800" 
                                    style="display: block; text-decoration: none;">
                                    <h3>SOC (Security Operation Center) as a Service</h3>
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat
                                        mitigation.
                                    </p>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}" style="aspect-ratio: 1 / 1; height: auto;"> </div>
                                <div class="cn-content">
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat mitigation.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="#" class="cn-main-content-enclosed scroll-link" data-target="#mhome-div6"
                                data-offset="-60x" data-speed=" 1000" 
                                    style="display: block; text-decoration: none;">
                                    <h3>Education</h3>
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat
                                        mitigation.
                                    </p>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}" style="aspect-ratio: 1 / 1; height: auto;"> </div>
                                <div class="cn-content">
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat mitigation.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="#" class="cn-main-content-enclosed scroll-link" data-target="#mhome-div11"
                                data-offset="-60x" data-speed=" 1500" 
                                    style="display: block; text-decoration: none;">
                                    <h3>CN Insight</h3>
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat
                                        mitigation.
                                    </p>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- empower industry end -->
        <!--Offering start -->
        <section class="Offering-bg1 home-sec mhspace" id="mhome-div2"
            style="    background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.2'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>Our Comprehensive Cyber Security Offerings</h2>
                        <p>We provide End-to-End IT Solutions & Services</p>
                    </div>
                </div>
            </div>
            <div class="container desktop-view">
                <div class="row">
                    <div class="cn-tabs1">
                        <ul id="tabs-nav1" class="home-tabs">
                            <li><a class="scr-tabs1" href="#tab11"> Application Vapt Services</a></li>
                            <li><a class="scr-tabs1" href="#tab12">Network Vapt Services</a></li>
                            <li><a class="scr-tabs1" href="#tab13">Cloud Vapt Services </a></li>
                            <li><a class="scr-tabs1" href="#tab14"> Server And Storage Vapt Services </a></li>
                            <li><a class="scr-tabs1" href="#tab15"> Digital Technologies Penetration Testing Services </a>
                            </li>
                        </ul>
                        <!-- END tabs-nav -->
                        <div id="tabs-content">
                            <div id="tab11" class="tab-content1">
                                <div class="container mobilewidth">
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider1_1" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Web Application / Website VAPT Services </h3>
                                                            <p>Web Application/Website VAPT services assess vulnerabilities
                                                                like XSS, SQL injection, and misconfigurations to enhance
                                                                security and protect sensitive user data.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>API VAPT Testing</h3>
                                                            <p>API VAPT testing detects vulnerabilities in endpoints,
                                                                focusing on authentication, data exposure, and injection
                                                                flaws to ensure secure communication and integration.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Mobile Application VAPT Testing (Android, IOS)</h3>
                                                            <p>Mobile Application VAPT testing identifies security flaws in
                                                                Android and iOS apps, including insecure storage, weak
                                                                authentication, and unauthorized data access risks.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>EPR System and Business Application VAPT Testing (SAP, HANA
                                                                PeopleSoft etc )</h3>
                                                            <p>ERP and Business Application VAPT testing identifies
                                                                vulnerabilities in systems like SAP, HANA, and PeopleSoft,
                                                                focusing on access control and data integrity risks.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Thick Client & Thin Client VAPT Testing </h3>
                                                            <p>Thick and Thin Client VAPT testing identifies security flaws
                                                                in client-server applications, focusing on data handling,
                                                                authentication, and communication vulnerabilities.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Secure Code Review ( SAST ) Testing</h3>
                                                            <p>Secure Code Review (SAST) analyzes source code to detect
                                                                security vulnerabilities early, ensuring code quality and
                                                                preventing potential exploits before deployment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Secure Code Review ( SAST ) Testing</h3>
                                                            <p>Secure Code Review (SAST) analyzes source code to detect
                                                                security vulnerabilities early, ensuring code quality and
                                                                preventing potential exploits before deployment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab12" class="tab-content1">
                                <div class="container mobilewidth">
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider1_2" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Network VAPT Testing - Internal and External </h3>
                                                            <p>Network VAPT testing evaluates internal and external network
                                                                security, identifying vulnerabilities in devices,
                                                                configurations, and protocols to prevent unauthorized access
                                                                and attacks.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Wireless Network VAPT Testing </h3>
                                                            <p>Wireless Network VAPT testing identifies vulnerabilities in
                                                                Wi-Fi networks, including encryption weaknesses,
                                                                unauthorized access points, and configuration flaws to
                                                                enhance wireless security.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>ICS - SCADA VAPT Testing </h3>
                                                            <p>ICS-SCADA VAPT testing identifies security vulnerabilities in
                                                                industrial control and SCADA systems, focusing on network
                                                                weaknesses, access controls, and potential operational
                                                                disruptions.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Network Security Architecture Review</h3>
                                                            <p>Network Security Architecture Review evaluates design and
                                                                implementation of network security controls to ensure
                                                                effective protection against threats and compliance with
                                                                best practices.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Firewall VAPT Testing</h3>
                                                            <p>Firewall VAPT testing assesses firewall configurations and
                                                                rules to identify weaknesses, ensuring proper traffic
                                                                filtering and protection against unauthorized network
                                                                access.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Configuration & Hardening Security Review AD IPT</h3>
                                                            <p>Configuration and Hardening Security Review for AD and IPT
                                                                ensures secure system settings, reduces vulnerabilities, and
                                                                strengthens defenses against unauthorized access and
                                                                attacks.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab13" class="tab-content1">
                                <div class="container mobilewidth">
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider1_3" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>AWS Cloud Security Penetration Testing</h3>
                                                            <p>AWS Cloud Security Penetration Testing identifies
                                                                vulnerabilities in AWS environments, including
                                                                misconfigurations, weak access controls, and insecure
                                                                services to enhance cloud security posture.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Azure (Office 365, AD) Penetration Testing</h3>
                                                            <p>Identify and exploit vulnerabilities in Office 365 and Azure
                                                                Active Directory to assess security posture and strengthen
                                                                cloud infrastructure defenses
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Google Cloud Security Penetration Testing</h3>
                                                            <p>Assess and exploit security gaps in Google Cloud environments
                                                                to evaluate configurations, detect vulnerabilities, and
                                                                enhance overall cloud security posture.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Oracle Cloud Security Penetration Testing</h3>
                                                            <p>Evaluate and test Oracle Cloud infrastructure for
                                                                misconfigurations, vulnerabilities, and access controls to
                                                                enhance security and ensure compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>SAAS Penetration Testing </h3>
                                                            <p>Simulate real-world attacks on SaaS applications to uncover
                                                                vulnerabilities, assess data exposure risks, and ensure
                                                                robust security controls.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>IAAS Penetration Testing </h3>
                                                            <p>Conduct security assessments on IaaS environments to identify
                                                                misconfigurations, access issues, and vulnerabilities across
                                                                virtual machines, networks, and storage.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Kubernetes Penetration Testing</h3>
                                                            <p>Assess Kubernetes clusters for misconfigurations, privilege
                                                                escalations, and insecure deployments to strengthen
                                                                container orchestration security and prevent breaches.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Containers Penetration Testing</h3>
                                                            <p>Identify vulnerabilities in container images, configurations,
                                                                and runtimes to uncover risks, prevent privilege escalation,
                                                                and secure containerized applications.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Virtualisation Penetration Testing</h3>
                                                            <p>Evaluate virtualized environments for hypervisor
                                                                vulnerabilities, misconfigurations, and isolation flaws to
                                                                ensure secure and resilient virtual infrastructure.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab14" class="tab-content1">
                                <div class="container mobilewidth">
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider1_4" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Operating System Security Testing</h3>
                                                            <p>Assess server OS (Windows, Linux, UNIX) for known
                                                                vulnerabilities, misconfigurations, and patch issues.
                                                                Identify privilege escalation paths and access risks.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Application and Service Layer Testing</h3>
                                                            <p>Evaluate hosted applications like web, database, and mail
                                                                servers for injection flaws, insecure APIs, and data
                                                                exposure vulnerabilities.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Network and Protocol Security Testing</h3>
                                                            <p>Analyze network-facing protocols like TCP/IP, SMB, FTP, and
                                                                NFS for misconfigurations, weaknesses, and potential
                                                                firewall rule bypasses.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Storage Systems and Data Protection Testing</h3>
                                                            <p>Test SAN/NAS devices and storage arrays for weak encryption,
                                                                default credentials, improper access controls, and outdated
                                                                firmware vulnerabilities.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Access Control and Identity Management Testing</h3>
                                                            <p>Verify roles, permissions, and authentication systems.
                                                                Evaluate MFA and privileged access to mitigate risks from
                                                                insider threats.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Virtualization and Hypervisor Security Testing</h3>
                                                            <p>Assess hypervisors and virtual environments for breakout
                                                                vulnerabilities, poor resource isolation, and insecure
                                                                virtual machine configurations.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab15" class="tab-content1">
                                <div class="container mobilewidth">
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider1_5" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Blockchain Security VAPT Testing Services</h3>
                                                            <p>Conduct Vulnerability Assessment and Penetration Testing
                                                                (VAPT) on blockchain networks and smart contracts to
                                                                identify security flaws, ensuring integrity and
                                                                trustworthiness.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>AI based Large Language Models (LLM) Penetration Testing
                                                                Services</h3>
                                                            <p>Perform specialized penetration testing on AI-powered Large
                                                                Language Models to identify vulnerabilities, data leaks, and
                                                                manipulation risks, ensuring robust and secure AI
                                                                deployments.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Machine Learning Penetration Testing Services</h3>
                                                            <p>
                                                                Evaluate machine learning systems for adversarial attacks,
                                                                data poisoning, and model vulnerabilities to strengthen
                                                                security and maintain reliable AI performance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Internet of Things (IoT) Penetration Testing Services</h3>
                                                            <p>Identify vulnerabilities in IoT devices, networks, and
                                                                protocols through penetration testing to secure connected
                                                                environments and prevent unauthorized access.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>AR-VR-XR Penetration Testing Services</h3>
                                                            <p>Assess AR, VR, and XR platforms for security flaws, data
                                                                privacy risks, and unauthorized access to protect immersive
                                                                experiences and sensitive user information.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Metaverse Penetration Testing Services</h3>
                                                            <p>Metaverse Penetration Testing Services Identify and mitigate
                                                                security vulnerabilities in metaverse platforms to protect
                                                                virtual assets, ensure data privacy, and maintain safe,
                                                                immersive user experiences.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Software Defines Networks SDN Penetration Testing Services
                                                            </h3>
                                                            <p>Software-Defined Networks (SDN) Penetration Testing Services
                                                                Evaluate SDN architectures for vulnerabilities in
                                                                controllers, switches, and APIs to ensure secure, flexible,
                                                                and resilient network operations.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END tabs-content -->
                </div>
                <!-- END tabs -->
            </div>
            <!-- mobile start -->
            <div class="container mobile-view significance-space significance-spac2">
                <!--  -->
                <div class="acc">
                    <!-- box first start -->
                    <div class="acc__card">
                        <a href="#significance1" class="acc__title active">Application Vapt Services</a>
                        <div class="acc__panel" style="display:block" id="significance1">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider16" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application / Website VAPT Services </h3>
                                            <p>Web Application/Website VAPT services assess vulnerabilities like XSS, SQL
                                                injection, and misconfigurations to enhance security and protect sensitive
                                                user data.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>API VAPT Testing</h3>
                                            <p>API VAPT testing detects vulnerabilities in endpoints, focusing on
                                                authentication, data exposure, and injection flaws to ensure secure
                                                communication and integration.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Mobile Application VAPT Testing (Android, IOS)</h3>
                                            <p>Mobile Application VAPT testing identifies security flaws in Android and iOS
                                                apps, including insecure storage, weak authentication, and unauthorized data
                                                access risks.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>EPR System and Business Application VAPT Testing (SAP, HANA PeopleSoft etc )
                                            </h3>
                                            <p>ERP and Business Application VAPT testing identifies vulnerabilities in
                                                systems like SAP, HANA, and PeopleSoft, focusing on access control and data
                                                integrity risks.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Thick Client & Thin Client VAPT Testing </h3>
                                            <p>Thick and Thin Client VAPT testing identifies security flaws in client-server
                                                applications, focusing on data handling, authentication, and communication
                                                vulnerabilities.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Secure Code Review ( SAST ) Testing</h3>
                                            <p>Secure Code Review (SAST) analyzes source code to detect security
                                                vulnerabilities early, ensuring code quality and preventing potential
                                                exploits before deployment.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count15" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box first end -->
                    <!-- box two end -->
                    <div class="acc__card">
                        <a href="#significance2" class="acc__title">Network Vapt Services</a>
                        <div class="acc__panel" id="significance2">
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider12" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network VAPT Testing - Internal and External </h3>
                                            <p>Network VAPT testing evaluates internal and external network security,
                                                identifying vulnerabilities in devices, configurations, and protocols to
                                                prevent unauthorized access and attacks.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network VAPT Testing </h3>
                                            <p>Wireless Network VAPT testing identifies vulnerabilities in Wi-Fi networks,
                                                including encryption weaknesses, unauthorized access points, and
                                                configuration flaws to enhance wireless security.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>ICS - SCADA VAPT Testing </h3>
                                            <p>ICS-SCADA VAPT testing identifies security vulnerabilities in industrial
                                                control and SCADA systems, focusing on network weaknesses, access controls,
                                                and potential operational disruptions.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Security Architecture Review</h3>
                                            <p>Network Security Architecture Review evaluates design and implementation of
                                                network security controls to ensure effective protection against threats and
                                                compliance with best practices.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Firewall VAPT Testing</h3>
                                            <p>Firewall VAPT testing assesses firewall configurations and rules to identify
                                                weaknesses, ensuring proper traffic filtering and protection against
                                                unauthorized network access.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Configuration & Hardening Security Review AD IPT</h3>
                                            <p>Configuration and Hardening Security Review for AD and IPT ensures secure
                                                system settings, reduces vulnerabilities, and strengthens defenses against
                                                unauthorized access and attacks.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count11" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#significance3" class="acc__title">Cloud Vapt Services</a>
                        <div class="acc__panel" id="significance3">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider13" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>AWS Cloud Security Penetration Testing</h3>
                                            <p>AWS Cloud Security Penetration Testing identifies vulnerabilities in AWS
                                                environments, including misconfigurations, weak access controls, and
                                                insecure services to enhance cloud security posture.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Azure (Office 365, AD) Penetration Testing</h3>
                                            <p>Identify and exploit vulnerabilities in Office 365 and Azure Active Directory
                                                to assess security posture and strengthen cloud infrastructure defenses
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Google Cloud Security Penetration Testing</h3>
                                            <p>Assess and exploit security gaps in Google Cloud environments to evaluate
                                                configurations, detect vulnerabilities, and enhance overall cloud security
                                                posture.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Oracle Cloud Security Penetration Testing</h3>
                                            <p>Evaluate and test Oracle Cloud infrastructure for misconfigurations,
                                                vulnerabilities, and access controls to enhance security and ensure
                                                compliance.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>SAAS Penetration Testing </h3>
                                            <p>Simulate real-world attacks on SaaS applications to uncover vulnerabilities,
                                                assess data exposure risks, and ensure robust security controls.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>IAAS Penetration Testing </h3>
                                            <p>Conduct security assessments on IaaS environments to identify
                                                misconfigurations, access issues, and vulnerabilities across virtual
                                                machines, networks, and storage.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Kubernetes Penetration Testing</h3>
                                            <p>Assess Kubernetes clusters for misconfigurations, privilege escalations, and
                                                insecure deployments to strengthen container orchestration security and
                                                prevent breaches.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Containers Penetration Testing</h3>
                                            <p>Identify vulnerabilities in container images, configurations, and runtimes to
                                                uncover risks, prevent privilege escalation, and secure containerized
                                                applications.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Virtualisation Penetration Testing</h3>
                                            <p>Evaluate virtualized environments for hypervisor vulnerabilities,
                                                misconfigurations, and isolation flaws to ensure secure and resilient
                                                virtual infrastructure.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count12" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box three end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#significance4" class="acc__title">Server And Storage Vapt Services.</a>
                        <div class="acc__panel" id="significance4">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider14" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Application and Service Layer Testing</h3>
                                            <p>Evaluate hosted applications like web, database, and mail servers for
                                                injection flaws, insecure APIs, and data exposure vulnerabilities.</p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Application and Service Layer Testing</h3>
                                            <p>Evaluate hosted applications like web, database, and mail servers for
                                                injection flaws, insecure APIs, and data exposure vulnerabilities.</p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network and Protocol Security Testing</h3>
                                            <p>Analyze network-facing protocols like TCP/IP, SMB, FTP, and NFS for
                                                misconfigurations, weaknesses, and potential firewall rule bypasses.</p>

                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Storage Systems and Data Protection Testing</h3>
                                            <p>Test SAN/NAS devices and storage arrays for weak encryption, default
                                                credentials, improper access controls, and outdated firmware
                                                vulnerabilities.</p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Access Control and Identity Management Testing</h3>
                                            <p>Verify roles, permissions, and authentication systems. Evaluate MFA and
                                                privileged access to mitigate risks from insider threats.</p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Virtualization and Hypervisor Security Testing</h3>
                                            <p>Assess hypervisors and virtual environments for breakout vulnerabilities,
                                                poor resource isolation, and insecure virtual machine configurations.</p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count13" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box four end -->
                    <!-- box 5 end -->
                    <div class="acc__card">
                        <a href="#significance5" class="acc__title">Digital Technologies Penetration Testing Services</a>
                        <div class="acc__panel" id="significance5">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider15" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Blockchain Security VAPT Testing Services</h3>
                                            <p>Conduct Vulnerability Assessment and Penetration Testing (VAPT) on blockchain
                                                networks and smart contracts to identify security flaws, ensuring integrity
                                                and trustworthiness.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>AI based Large Language Models (LLM) Penetration Testing
                                                Services</h3>
                                            <p>Perform specialized penetration testing on AI-powered Large Language Models
                                                to identify vulnerabilities, data leaks, and manipulation risks, ensuring
                                                robust and secure AI deployments.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Machine Learning Penetration Testing Services</h3>
                                            <p>
                                                Evaluate machine learning systems for adversarial attacks, data poisoning,
                                                and model vulnerabilities to strengthen security and maintain reliable AI
                                                performance.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Internet of Things (IoT) Penetration Testing Services</h3>
                                            <p>Identify vulnerabilities in IoT devices, networks, and protocols through
                                                penetration testing to secure connected environments and prevent
                                                unauthorized access.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>AR-VR-XR Penetration Testing Services</h3>
                                            <p>Assess AR, VR, and XR platforms for security flaws, data privacy risks, and
                                                unauthorized access to protect immersive experiences and sensitive user
                                                information.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Metaverse Penetration Testing Services</h3>
                                            <p>Metaverse Penetration Testing Services Identify and mitigate security
                                                vulnerabilities in metaverse platforms to protect virtual assets, ensure
                                                data privacy, and maintain safe, immersive user experiences.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Software Defines Networks SDN Penetration Testing Services
                                            </h3>
                                            <p>Software-Defined Networks (SDN) Penetration Testing Services Evaluate SDN
                                                architectures for vulnerabilities in controllers, switches, and APIs to
                                                ensure secure, flexible, and resilient network operations.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count14" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box 5 end -->
                </div>
                <!-- faq End -->
            </div>
            <!-- mobile ed -->
        </section>
        <!-- Offering end -->
        <!-- empower industry start -->
        <section class="empower-industry-bg mhspace" id="mhome-div3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>We empower industry to Secure Digitally, Reduce Threats & align
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container p40 desktop-view">
                <div class="row">
                    <div class="indu-moblie count-navigation home-slider-spacing">
                        <div id="owl-demo91" class="owl-carousel  inud-nav owl-theme">
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/vapt-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>SOC as a Service provides outsourced security monitoring,
                                                threat detection, and incident response to protect organizations from cyber
                                                threats 24/7.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>SOC as a Services </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/security-audit-compliance.webp') }}"> </div>
                                        <div class="cn-content">
                                            <p>Security Monitoring and SIEM Services offer real-time threat detection,
                                                log analysis, and incident response to enhance organizational cybersecurity
                                                posture.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Security Monitoring & SIEM Services </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/managed-it-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Managed Endpoint Detection & Response (EDR) delivers continuous monitoring,
                                                threat detection, and automated response to protect endpoints from
                                                cyberattacks.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Managed Endpoint Detection & Response (EDR) </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Extended Detection & Response (XDR) Services unify data across endpoints,
                                                networks, and cloud to detect, investigate, and respond to threats
                                                efficiently.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Extended Detection & Response (XDR) Services</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/soc-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>SOAR services integrate security tools, automate workflows, and coordinate
                                                response
                                                actions to streamline threat detection, investigation, and incident
                                                resolution.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Security Orchestration, Automation, and Response (SOAR) </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/vapt-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Cloud Security Monitoring & Protection ensures continuous visibility,
                                                threat detection, and compliance across cloud environments to safeguard data
                                                and applications.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Cloud Security Monitoring & Protection </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/security-audit-compliance.webp') }}"> </div>
                                        <div class="cn-content">
                                            <p>Dark Web Intelligence & Threat Hunting identifies exposed data,
                                                monitors cybercriminal activity, and proactively detects threats targeting
                                                your organization.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Dark Web Intelligence & Threat Hunting </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/managed-it-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Preferred Service Partner" for corporate clients with array of customized
                                                security
                                                solutions
                                                and services to operate in a secure environment.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Managed IT Security Solutions</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Identify and resolve Ecrime incidents that adversely impact organizations
                                                with
                                                cybercrime /
                                                online fraud and proactively manage 24x7 hours security risks.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/soc-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                                notification &
                                                threat mitigation.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>SOC (Security Operation Center) as a Service</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile code start -->
            <div class="mobile-view indu-moblie indu-moblie1 count-navigation mhome-space mhome-space1">
                <div id="mhome-slider17" class="owl-carousel owl-theme">
                    <!--  -->
                    <div class="item ">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img
                                        src="{{ asset('assets/images/security-audit-compliance.webp') }}"> </div>
                                <div class="cn-content">
                                    <p>SOC as a Service provides outsourced security monitoring, threat detection,
                                        and incident response to protect organizations from cyber threats 24/7.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>SOC as a Service </h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/vapt-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Security Monitoring and SIEM Services offer real-time threat detection,
                                        log analysis, and incident response to enhance organizational cybersecurity posture.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Security Monitoring & SIEM Services</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/managed-it-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Managed Endpoint Detection & Response (EDR) delivers continuous monitoring, threat
                                        detection,
                                        and automated response to protect endpoints from cyberattacks.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Managed Endpoint Detection & Response (EDR)</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Extended Detection & Response (XDR) Services unify data across endpoints, networks,
                                        and cloud to detect, investigate, and respond to threats efficiently.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Extended Detection & Response (XDR) Services</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>SOAR services integrate security tools, automate workflows, and coordinate response
                                        actions to streamline threat detection, investigation, and incident resolution.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Security Orchestration, Automation, and Response (SOAR)</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Cloud Security Monitoring & Protection ensures continuous visibility, threat
                                        detection,
                                        and compliance across cloud environments to safeguard data and applications.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Cloud Security Monitoring & Protection</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Dark Web Intelligence & Threat Hunting identifies exposed data,
                                        monitors cybercriminal activity, and proactively detects threats targeting your
                                        organization.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Dark Web Intelligence & Threat Hunting</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <div id="navigation-count16" class="count-nav-box"></div>
            </div>
            <!-- mobile code end -->
        </section>
        <!-- empower industry end -->
        <!--Offering start -->
        <section class="Offering mhspace" id="mhome-div4"
            style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.25'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>Our Comprehensive Cyber Security Offerings</h2>
                        <p>We provide End-to-End IT Solutions & Services </p>
                    </div>
                </div>
            </div>
            <div class="container desktop-view">
                <div class="row">
                    <div class="cn-tabs" style="margin-bottom: 40px">
                        <ul id="tabs-nav" class="home-tabs">
                            <li><a class="scr-tabs" href="#tab1">Vulnerability Assesement & Penetration Testing</a></li>
                            <li><a class="scr-tabs" href="#tab2">IT Security Audit, Risk & Compliance</a></li>
                            <li><a class="scr-tabs" href="#tab3">Managed IT Security Solutions </a></li>
                            <li><a class="scr-tabs" href="#tab4">Digital Forensic & Cyber Fraud Management </a></li>
                            <li><a class="scr-tabs" href="#tab5">SOC (Security Operations Center) as a Service </a></li>
                        </ul>
                        <!-- END tabs-nav -->
                        <div id="tabs-content">
                            <div id="tab1" class="tab-content">
                                <div class="container mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider2_1" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Network Architecture Design Review</h3>
                                                            <p>Security focused evaluation of your network-based computing
                                                                environment,
                                                                from both
                                                                an architecture and operational perspective.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Network Infrastructure Penetration Testing</h3>
                                                            <p>Identifies and exploits network infrastructure
                                                                vulnerabilities
                                                                and
                                                                validate result
                                                                with efficiently evaluate a security posture.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Web Application Penetration Testing</h3>
                                                            <p>Our comprehensive security assessment framework focuses to
                                                                evaluate and
                                                                analyse
                                                                existing vulnerabilities for web-based applications.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Wireless Network Penetration Testing</h3>
                                                            <p>We simulates real-world attacks to provide a real time
                                                                assessment
                                                                of
                                                                vulnerabilities
                                                                and threats to your wireless network infrastructure.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Mobile Application Penetration Testing</h3>
                                                            <p>We go beyond looking at API and web vulnerabilities to
                                                                examine
                                                                the risk
                                                                of the
                                                                application on a mobile platform.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Source Code Review</h3>
                                                            <p>Identifies and locate security risk and misconfigurations
                                                                that
                                                                have been
                                                                ignored
                                                                during SDLC process and can help invaders to abstract key
                                                                information.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Source Code Review</h3>
                                                            <p>Identifies and locate security risk and misconfigurations
                                                                that
                                                                have been
                                                                ignored
                                                                during SDLC process and can help invaders to abstract key
                                                                information.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Source Code Review</h3>
                                                            <p>Identifies and locate security risk and misconfigurations
                                                                that
                                                                have been
                                                                ignored
                                                                during SDLC process and can help invaders to abstract key
                                                                information.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab2" class="tab-content">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider2_2" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>IT Risk, Compliance & Governance</h3>
                                                            <p>We evaluate current IT governance, risk management and
                                                                compliance structures for process maturity and design
                                                                Effectiveness.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Security Management Systems</h3>
                                                            <p>We demonstrate business is compliant and is taking all
                                                                necessary measures
                                                                to secure
                                                                IT information in compliance with the ISO 27001 (ISMS)
                                                                standard.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab3" class="tab-content">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider2_3" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Firewall Management and Implementation</h3>
                                                            <p>Our Managed Firewall/UTM solution provides monitoring,
                                                                administration &
                                                                maintenance
                                                                of gateway level security along with policy supervision,
                                                                upgrades and
                                                                patch
                                                                deployment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Endpoint Security Protection</h3>
                                                            <p>We offers a wide range of EPS solutions which integrates new
                                                                and
                                                                innovative
                                                                technologies / features to protect endpoints from today’s
                                                                advanced
                                                                threats.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Leakage Protection Management</h3>
                                                            <p>Our Data Loss Prevention (DLP) comes with Unique capture
                                                                technology to
                                                                safeguards
                                                                intellectual property and protect sensitive data in-line
                                                                with
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Encryption Solution</h3>
                                                            <p>Our Data Encryption solution help businesses looking to
                                                                bolster their
                                                                data security,
                                                                increase customer confidence and ensure compliance with data
                                                                protection
                                                                laws.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Mobile Device & BYOD Security Management</h3>
                                                            <p>Our Mobile Device Management (MDM) Solutions allows business
                                                                to secure
                                                                and manage
                                                                employee-owned (BYOD) and company-owned devices to drive
                                                                effective team
                                                                conversations.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Secure Web Gateway Solution</h3>
                                                            <p>We provides an intuitive solution that filters unwanted
                                                                software and
                                                                malware from
                                                                user-initiated Web/Internet traffic and enforces corporate
                                                                and
                                                                regulatory policy
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab4" class="tab-content">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider2_4" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Firewall Management and Implementation</h3>
                                                            <p>Our Managed Firewall/UTM solution provides monitoring,
                                                                administration &
                                                                maintenance
                                                                of gateway level security along with policy supervision,
                                                                upgrades and
                                                                patch
                                                                deployment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Endpoint Security Protection</h3>
                                                            <p>We offers a wide range of EPS solutions which integrates new
                                                                and
                                                                innovative
                                                                technologies / features to protect endpoints from today’s
                                                                advanced
                                                                threats.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Leakage Protection Management</h3>
                                                            <p>Our Data Loss Prevention (DLP) comes with Unique capture
                                                                technology to
                                                                safeguards
                                                                intellectual property and protect sensitive data in-line
                                                                with
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Encryption Solution</h3>
                                                            <p>Our Data Encryption solution help businesses looking to
                                                                bolster their
                                                                data security,
                                                                increase customer confidence and ensure compliance with data
                                                                protection
                                                                laws.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Mobile Device & BYOD Security Management</h3>
                                                            <p>Our Mobile Device Management (MDM) Solutions allows business
                                                                to secure
                                                                and manage
                                                                employee-owned (BYOD) and company-owned devices to drive
                                                                effective team
                                                                conversations.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Secure Web Gateway Solution</h3>
                                                            <p>We provides an intuitive solution that filters unwanted
                                                                software and
                                                                malware from
                                                                user-initiated Web/Internet traffic and enforces corporate
                                                                and
                                                                regulatory policy
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab5" class="tab-content">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider2_5" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>SOC/SIEM Monitoring</h3>
                                                            <p>We provide comprehensive real-time monitoring of
                                                                infrastructure and
                                                                round-the clock
                                                                response to any security Breaches that may Occur.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Rapid Threat Containment</h3>
                                                            <p>WWe rapidly response to a security incident by locating,
                                                                analysing and
                                                                quarantining
                                                                the
                                                                affects followed by reducing the impact on the environment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Insider Threat Monitoring</h3>
                                                            <p>We uses a multi-tiered approach to identify the activities of
                                                                different
                                                                groups and
                                                                users in order to identify, monitor and respond to any
                                                                insider threats.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END tabs-content -->
                </div>
                <div class="row">
                    <div class="cn-tabs" style="margin-bottom: 20px">
                        <ul id="tabs-nav_1" class="home-tabs">
                            <li><a class="scr-tabs_1" href="#tab1_1">Vulnerability Assesement & Penetration Testing</a></li>
                            <li><a class="scr-tabs_1" href="#tab2_1">IT Security Audit, Risk & Compliance</a></li>
                            <li><a class="scr-tabs_1" href="#tab3_1">Managed IT Security Solutions </a></li>
                            <li><a class="scr-tabs_1" href="#tab4_1">Digital Forensic & Cyber Fraud Management </a></li>
                            <li><a class="scr-tabs_1" href="#tab5_1">SOC (Security Operations Center) as a Service </a></li>
                        </ul>
                        <!-- END tabs-nav -->
                        <div id="tabs-content">
                            <div id="tab1_1" class="tab-content_1">
                                <div class="container mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider2_6" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Network Architecture Design Review</h3>
                                                            <p>Security focused evaluation of your network-based computing
                                                                environment,
                                                                from both
                                                                an architecture and operational perspective.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Network Infrastructure Penetration Testing</h3>
                                                            <p>Identifies and exploits network infrastructure
                                                                vulnerabilities
                                                                and
                                                                validate result
                                                                with efficiently evaluate a security posture.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Web Application Penetration Testing</h3>
                                                            <p>Our comprehensive security assessment framework focuses to
                                                                evaluate and
                                                                analyse
                                                                existing vulnerabilities for web-based applications.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Wireless Network Penetration Testing</h3>
                                                            <p>We simulates real-world attacks to provide a real time
                                                                assessment
                                                                of
                                                                vulnerabilities
                                                                and threats to your wireless network infrastructure.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Mobile Application Penetration Testing</h3>
                                                            <p>We go beyond looking at API and web vulnerabilities to
                                                                examine
                                                                the risk
                                                                of the
                                                                application on a mobile platform.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Source Code Review</h3>
                                                            <p>Identifies and locate security risk and misconfigurations
                                                                that
                                                                have been
                                                                ignored
                                                                during SDLC process and can help invaders to abstract key
                                                                information.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Source Code Review</h3>
                                                            <p>Identifies and locate security risk and misconfigurations
                                                                that
                                                                have been
                                                                ignored
                                                                during SDLC process and can help invaders to abstract key
                                                                information.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Source Code Review</h3>
                                                            <p>Identifies and locate security risk and misconfigurations
                                                                that
                                                                have been
                                                                ignored
                                                                during SDLC process and can help invaders to abstract key
                                                                information.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab2_1" class="tab-content_1">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider2_7" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>IT Risk, Compliance & Governance</h3>
                                                            <p>We evaluate current IT governance, risk management and
                                                                compliance structures for process maturity and design
                                                                Effectiveness.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Security Management Systems</h3>
                                                            <p>We demonstrate business is compliant and is taking all
                                                                necessary measures
                                                                to secure
                                                                IT information in compliance with the ISO 27001 (ISMS)
                                                                standard.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab3_1" class="tab-content_1">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider2_8" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Firewall Management and Implementation</h3>
                                                            <p>Our Managed Firewall/UTM solution provides monitoring,
                                                                administration &
                                                                maintenance
                                                                of gateway level security along with policy supervision,
                                                                upgrades and
                                                                patch
                                                                deployment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Endpoint Security Protection</h3>
                                                            <p>We offers a wide range of EPS solutions which integrates new
                                                                and
                                                                innovative
                                                                technologies / features to protect endpoints from today’s
                                                                advanced
                                                                threats.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Leakage Protection Management</h3>
                                                            <p>Our Data Loss Prevention (DLP) comes with Unique capture
                                                                technology to
                                                                safeguards
                                                                intellectual property and protect sensitive data in-line
                                                                with
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Encryption Solution</h3>
                                                            <p>Our Data Encryption solution help businesses looking to
                                                                bolster their
                                                                data security,
                                                                increase customer confidence and ensure compliance with data
                                                                protection
                                                                laws.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Mobile Device & BYOD Security Management</h3>
                                                            <p>Our Mobile Device Management (MDM) Solutions allows business
                                                                to secure
                                                                and manage
                                                                employee-owned (BYOD) and company-owned devices to drive
                                                                effective team
                                                                conversations.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Secure Web Gateway Solution</h3>
                                                            <p>We provides an intuitive solution that filters unwanted
                                                                software and
                                                                malware from
                                                                user-initiated Web/Internet traffic and enforces corporate
                                                                and
                                                                regulatory policy
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab4_1" class="tab-content_1">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider2_9" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Firewall Management and Implementation</h3>
                                                            <p>Our Managed Firewall/UTM solution provides monitoring,
                                                                administration &
                                                                maintenance
                                                                of gateway level security along with policy supervision,
                                                                upgrades and
                                                                patch
                                                                deployment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Endpoint Security Protection</h3>
                                                            <p>We offers a wide range of EPS solutions which integrates new
                                                                and
                                                                innovative
                                                                technologies / features to protect endpoints from today’s
                                                                advanced
                                                                threats.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Leakage Protection Management</h3>
                                                            <p>Our Data Loss Prevention (DLP) comes with Unique capture
                                                                technology to
                                                                safeguards
                                                                intellectual property and protect sensitive data in-line
                                                                with
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Encryption Solution</h3>
                                                            <p>Our Data Encryption solution help businesses looking to
                                                                bolster their
                                                                data security,
                                                                increase customer confidence and ensure compliance with data
                                                                protection
                                                                laws.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Mobile Device & BYOD Security Management</h3>
                                                            <p>Our Mobile Device Management (MDM) Solutions allows business
                                                                to secure
                                                                and manage
                                                                employee-owned (BYOD) and company-owned devices to drive
                                                                effective team
                                                                conversations.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Secure Web Gateway Solution</h3>
                                                            <p>We provides an intuitive solution that filters unwanted
                                                                software and
                                                                malware from
                                                                user-initiated Web/Internet traffic and enforces corporate
                                                                and
                                                                regulatory policy
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab5_1" class="tab-content_1">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider2_10" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>SOC/SIEM Monitoring</h3>
                                                            <p>We provide comprehensive real-time monitoring of
                                                                infrastructure and
                                                                round-the clock
                                                                response to any security Breaches that may Occur.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Rapid Threat Containment</h3>
                                                            <p>WWe rapidly response to a security incident by locating,
                                                                analysing and
                                                                quarantining
                                                                the
                                                                affects followed by reducing the impact on the environment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Insider Threat Monitoring</h3>
                                                            <p>We uses a multi-tiered approach to identify the activities of
                                                                different
                                                                groups and
                                                                users in order to identify, monitor and respond to any
                                                                insider threats.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END tabs-content -->
                </div>
                <!-- END tabs -->
            </div>
            <!--  -->
            <div class="container mobile-view significance-space significance-space1">
                <!--  -->
                <div class="acc">
                    <!-- box first start -->
                    <div class="acc__card">
                        <a href="#offer1" class="acc__title active">Vulnerability Assese. & Penet. Testing</a>
                        <div class="acc__panel" style="display:block" id="offer1">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider2" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count1" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box first end -->
                    <!-- box two end -->
                    <div class="acc__card">
                        <a href="#offer2" class="acc__title">IT Security Audit, Risk & Compliance</a>
                        <div class="acc__panel" id="offer2">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider4" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count3" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#offer3" class="acc__title">Managed IT Security Solutions</a>
                        <div class="acc__panel" id="offer3">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider6" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count5" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box three end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#offer4" class="acc__title">Digital Forensic & Cyber Fraud Manag.</a>
                        <div class="acc__panel" id="offer4">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider8" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count7" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box four end -->
                    <!-- box 5 end -->
                    <div class="acc__card">
                        <a href="#offer5" class="acc__title">SOC as a Service</a>
                        <div class="acc__panel" id="offer5">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider10" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count9" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box 5 end -->
                    <!-- box first start -->
                    <div class="acc__card">
                        <a href="#offer6" class="acc__title">Vulnerability Assese. & Penet. Testing</a>
                        <div class="acc__panel" id="offer6">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider2_1" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count1_1" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box first end -->
                    <!-- box two end -->
                    <div class="acc__card">
                        <a href="#offer7" class="acc__title">IT Security Audit, Risk & Compliance</a>
                        <div class="acc__panel" id="offer7">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider4_1" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count3_1" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#offer8" class="acc__title">Managed IT Security Solutions</a>
                        <div class="acc__panel" id="offer8">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider6_1" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count5_1" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box three end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#offer9" class="acc__title">Digital Forensic & Cyber Fraud Manag.</a>
                        <div class="acc__panel" id="offer9">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider8_1" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count7_1" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box four end -->
                    <!-- box 5 end -->
                    <div class="acc__card">
                        <a href="#offer10" class="acc__title">SOC as a Service</a>
                        <div class="acc__panel" id="offer10">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider10_1" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count9_1" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box 5 end -->
                </div>
                <!-- faq End -->
            </div>
            <!--  -->
            </div>
        </section>
        <!-- Offering end -->
        <!-- empower industry start -->
        <section class="empower-industry-bg mhspace" id="mhome-div5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>We empower industry to Secure Digitally, Reduce Threats & align</h2>
                    </div>
                </div>
            </div>
            <div class="container p40 desktop">
                <div class="row">
                    <div class="indu-moblie count-navigation home-slider-spacing">
                        <div id="owl-demo92" class="owl-carousel  inud-nav owl-theme">
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/vapt-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Services to ensure the Integrity of Information Systems, Softwares &
                                                Applications,
                                                block
                                                illegal access and protect organizations against data theft, productivity
                                                loss and
                                                fraud.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/security-audit-compliance.webp') }}"> </div>
                                        <div class="cn-content">
                                            <p>Help organizations with regular and structured evaluation of compliance with
                                                the
                                                security
                                                policies,standards, guidelines and procedures.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>IT Security Audit, Risk & Compliance</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/managed-it-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Preferred Service Partner" for corporate clients with array of customized
                                                security
                                                solutions
                                                and services to operate in a secure environment.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Managed IT Security Solutions</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Identify and resolve Ecrime incidents that adversely impact organizations
                                                with
                                                cybercrime /
                                                online fraud and proactively manage 24x7 hours security risks.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/soc-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                                notification &
                                                threat mitigation.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>SOC (Security Operation Center) as a Service</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/vapt-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Services to ensure the Integrity of Information Systems, Softwares &
                                                Applications,
                                                block
                                                illegal access and protect organizations against data theft, productivity
                                                loss and
                                                fraud.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/security-audit-compliance.webp') }}"> </div>
                                        <div class="cn-content">
                                            <p>Help organizations with regular and structured evaluation of compliance with
                                                the
                                                security
                                                policies,standards, guidelines and procedures.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>IT Security Audit, Risk & Compliance</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/managed-it-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Preferred Service Partner" for corporate clients with array of customized
                                                security
                                                solutions
                                                and services to operate in a secure environment.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Managed IT Security Solutions</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Identify and resolve Ecrime incidents that adversely impact organizations
                                                with
                                                cybercrime /
                                                online fraud and proactively manage 24x7 hours security risks.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/soc-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                                notification &
                                                threat mitigation.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>SOC (Security Operation Center) as a Service</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile code start -->
            <div class="mobile-view indu-moblie indu-moblie1 count-navigation mhome-space mhome-space1">
                <div id="mhome-slider18" class="owl-carousel owl-theme">
                    <!--  -->
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                        cybercrime /
                                        online fraud and proactively manage 24x7 hours security risks.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img
                                        src="{{ asset('assets/images/security-audit-compliance.webp') }}"> </div>
                                <div class="cn-content">
                                    <p>Help organizations with regular and structured evaluation of compliance with the
                                        security
                                        policies,standards, guidelines and procedures.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>IT Security Audit, Risk & Compliance</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/vapt-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Services to ensure the Integrity of Information Systems, Softwares & Applications,
                                        block
                                        illegal access and protect organizations against data theft, productivity loss and
                                        fraud.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/managed-it-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Preferred Service Partner" for corporate clients with array of customized security
                                        solutions
                                        and services to operate in a secure environment.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Managed IT Security Solutions</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat mitigation.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>SOC (Security Operation Center) as a Service</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <div id="navigation-count17" class="count-nav-box"></div>
            </div>
            <!-- mobile code end -->
        </section>
        <!-- empower industry end -->
        <!--Offering start -->
        <section class="Offering mhspace" id="mhome-div4-1"
            style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.35'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>Our Comprehensive Cyber Security Offerings</h2>
                        <p>We provide End-to-End IT Solutions & Services </p>
                    </div>
                </div>
            </div>
            <div class="container desktop-view">
                <div class="row">
                    <div class="cn-tabs" style="margin-bottom: 40px">
                        <ul id="tabs-nav4_1" class="home-tabs">
                            <li><a class="scr-tabs_4" href="#tab_4_1">Vulnerability Assesement & Penetration Testing</a>
                            </li>
                            <li><a class="scr-tabs_4" href="#tab_4_2">IT Security Audit, Risk & Compliance</a></li>
                            <li><a class="scr-tabs_4" href="#tab_4_3">Managed IT Security Solutions </a></li>
                            <li><a class="scr-tabs_4" href="#tab_4_4">Digital Forensic & Cyber Fraud Management </a></li>
                            <li><a class="scr-tabs_4" href="#tab_4_5">SOC (Security Operations Center) as a Service </a>
                            </li>
                        </ul>
                        <!-- END tabs-nav -->
                        <div id="tabs-content">
                            <div id="tab_4_1" class="tab-content4_1">
                                <div class="container mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider4_1" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Network Architecture Design Review</h3>
                                                            <p>Security focused evaluation of your network-based computing
                                                                environment,
                                                                from both
                                                                an architecture and operational perspective.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Network Infrastructure Penetration Testing</h3>
                                                            <p>Identifies and exploits network infrastructure
                                                                vulnerabilities
                                                                and
                                                                validate result
                                                                with efficiently evaluate a security posture.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Web Application Penetration Testing</h3>
                                                            <p>Our comprehensive security assessment framework focuses to
                                                                evaluate and
                                                                analyse
                                                                existing vulnerabilities for web-based applications.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Wireless Network Penetration Testing</h3>
                                                            <p>We simulates real-world attacks to provide a real time
                                                                assessment
                                                                of
                                                                vulnerabilities
                                                                and threats to your wireless network infrastructure.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Mobile Application Penetration Testing</h3>
                                                            <p>We go beyond looking at API and web vulnerabilities to
                                                                examine
                                                                the risk
                                                                of the
                                                                application on a mobile platform.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Source Code Review</h3>
                                                            <p>Identifies and locate security risk and misconfigurations
                                                                that
                                                                have been
                                                                ignored
                                                                during SDLC process and can help invaders to abstract key
                                                                information.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Source Code Review</h3>
                                                            <p>Identifies and locate security risk and misconfigurations
                                                                that
                                                                have been
                                                                ignored
                                                                during SDLC process and can help invaders to abstract key
                                                                information.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Source Code Review</h3>
                                                            <p>Identifies and locate security risk and misconfigurations
                                                                that
                                                                have been
                                                                ignored
                                                                during SDLC process and can help invaders to abstract key
                                                                information.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab_4_2" class="tab-content4_1">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider4_2" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>IT Risk, Compliance & Governance</h3>
                                                            <p>We evaluate current IT governance, risk management and
                                                                compliance structures for process maturity and design
                                                                Effectiveness.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Security Management Systems</h3>
                                                            <p>We demonstrate business is compliant and is taking all
                                                                necessary measures
                                                                to secure
                                                                IT information in compliance with the ISO 27001 (ISMS)
                                                                standard.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab_4_3" class="tab-content4_1">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider4_3" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Firewall Management and Implementation</h3>
                                                            <p>Our Managed Firewall/UTM solution provides monitoring,
                                                                administration &
                                                                maintenance
                                                                of gateway level security along with policy supervision,
                                                                upgrades and
                                                                patch
                                                                deployment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Endpoint Security Protection</h3>
                                                            <p>We offers a wide range of EPS solutions which integrates new
                                                                and
                                                                innovative
                                                                technologies / features to protect endpoints from today’s
                                                                advanced
                                                                threats.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Leakage Protection Management</h3>
                                                            <p>Our Data Loss Prevention (DLP) comes with Unique capture
                                                                technology to
                                                                safeguards
                                                                intellectual property and protect sensitive data in-line
                                                                with
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Encryption Solution</h3>
                                                            <p>Our Data Encryption solution help businesses looking to
                                                                bolster their
                                                                data security,
                                                                increase customer confidence and ensure compliance with data
                                                                protection
                                                                laws.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Mobile Device & BYOD Security Management</h3>
                                                            <p>Our Mobile Device Management (MDM) Solutions allows business
                                                                to secure
                                                                and manage
                                                                employee-owned (BYOD) and company-owned devices to drive
                                                                effective team
                                                                conversations.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Secure Web Gateway Solution</h3>
                                                            <p>We provides an intuitive solution that filters unwanted
                                                                software and
                                                                malware from
                                                                user-initiated Web/Internet traffic and enforces corporate
                                                                and
                                                                regulatory policy
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab_4_4" class="tab-content4_1">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider4_4" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Firewall Management and Implementation</h3>
                                                            <p>Our Managed Firewall/UTM solution provides monitoring,
                                                                administration &
                                                                maintenance
                                                                of gateway level security along with policy supervision,
                                                                upgrades and
                                                                patch
                                                                deployment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Endpoint Security Protection</h3>
                                                            <p>We offers a wide range of EPS solutions which integrates new
                                                                and
                                                                innovative
                                                                technologies / features to protect endpoints from today’s
                                                                advanced
                                                                threats.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Leakage Protection Management</h3>
                                                            <p>Our Data Loss Prevention (DLP) comes with Unique capture
                                                                technology to
                                                                safeguards
                                                                intellectual property and protect sensitive data in-line
                                                                with
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Encryption Solution</h3>
                                                            <p>Our Data Encryption solution help businesses looking to
                                                                bolster their
                                                                data security,
                                                                increase customer confidence and ensure compliance with data
                                                                protection
                                                                laws.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Mobile Device & BYOD Security Management</h3>
                                                            <p>Our Mobile Device Management (MDM) Solutions allows business
                                                                to secure
                                                                and manage
                                                                employee-owned (BYOD) and company-owned devices to drive
                                                                effective team
                                                                conversations.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Secure Web Gateway Solution</h3>
                                                            <p>We provides an intuitive solution that filters unwanted
                                                                software and
                                                                malware from
                                                                user-initiated Web/Internet traffic and enforces corporate
                                                                and
                                                                regulatory policy
                                                                compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                            <div id="tab_4_5" class="tab-content4_1">
                                <div class="container  mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="home-slider home-slider-spacing">
                                            <div id="home-slider4_5" class="owl-carousel owl-theme ">
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>SOC/SIEM Monitoring</h3>
                                                            <p>We provide comprehensive real-time monitoring of
                                                                infrastructure and
                                                                round-the clock
                                                                response to any security Breaches that may Occur.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Rapid Threat Containment</h3>
                                                            <p>WWe rapidly response to a security incident by locating,
                                                                analysing and
                                                                quarantining
                                                                the
                                                                affects followed by reducing the impact on the environment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Insider Threat Monitoring</h3>
                                                            <p>We uses a multi-tiered approach to identify the activities of
                                                                different
                                                                groups and
                                                                users in order to identify, monitor and respond to any
                                                                insider threats.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR & Data Privacy</h3>
                                                            <p>Our deep portfolio enables businesses to reduce the time,
                                                                cost and
                                                                complexity of
                                                                responding to various international data privacy mandates
                                                                like GDPR.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Information Technology Service Management</h3>
                                                            <p>Our experts ensure the right processes, people and technology
                                                                are in
                                                                place to meet
                                                                business respective goals in agreement with industry
                                                                standards like ISO
                                                                20000
                                                                (ITSMS) and ISO 22301 (BCMS).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Incidence & Emergency Response Services</h3>
                                                            <p>Our key offerings involve and improve incident response
                                                                preparedness plan
                                                                and
                                                                minimize the impact of breaches with latest threat
                                                                intelligence
                                                                mechanism.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END tabs-content -->
                </div>
                <!-- END tabs -->
            </div>
            <!--  -->
            <div class="container mobile-view significance-space significance-space1">
                <!--  -->
                <div class="acc">
                    <!-- box first start -->
                    <div class="acc__card">
                        <a href="#offer1_1" class="acc__title active">Vulnerability Assese. & Penet. Testing</a>
                        <div class="acc__panel" style="display:block" id="offer1_1">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider2_21" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count1_21" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box first end -->
                    <!-- box two end -->
                    <div class="acc__card">
                        <a href="#offer2_1" class="acc__title">IT Security Audit, Risk & Compliance</a>
                        <div class="acc__panel" id="offer2_1">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider2_22" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count1_22" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#offer3_1" class="acc__title">Managed IT Security Solutions</a>
                        <div class="acc__panel" id="offer3_1">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider2_23" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count1_23" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box three end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#offer4_1" class="acc__title">Digital Forensic & Cyber Fraud Manag.</a>
                        <div class="acc__panel" id="offer4_1">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider2_24" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count1_24" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box four end -->
                    <!-- box 5 end -->
                    <div class="acc__card">
                        <a href="#offer5_1" class="acc__title">SOC as a Service</a>
                        <div class="acc__panel" id="offer5_1">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider2_25" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count1_25" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box 5 end -->
                </div>
                <!-- faq End -->
            </div>
            <!--  -->
            </div>
        </section>
        <!-- Offering end -->
        <!-- empower industry start -->
        <section class="empower-industry-bg mhspace" id="mhome-div3-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>We empower industry to Secure Digitally, Reduce Threats & align
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container p40 desktop-view">
                <div class="row">
                    <div class="indu-moblie count-navigation home-slider-spacing">
                        <div id="owl-demo91" class="owl-carousel  inud-nav owl-theme">
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/vapt-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>SOC as a Service provides outsourced security monitoring,
                                                threat detection, and incident response to protect organizations from cyber
                                                threats 24/7.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>SOC as a Services </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/security-audit-compliance.webp') }}"> </div>
                                        <div class="cn-content">
                                            <p>Security Monitoring and SIEM Services offer real-time threat detection,
                                                log analysis, and incident response to enhance organizational cybersecurity
                                                posture.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Security Monitoring & SIEM Services </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/managed-it-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Managed Endpoint Detection & Response (EDR) delivers continuous monitoring,
                                                threat detection, and automated response to protect endpoints from
                                                cyberattacks.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Managed Endpoint Detection & Response (EDR) </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Extended Detection & Response (XDR) Services unify data across endpoints,
                                                networks, and cloud to detect, investigate, and respond to threats
                                                efficiently.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Extended Detection & Response (XDR) Services</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/soc-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>SOAR services integrate security tools, automate workflows, and coordinate
                                                response
                                                actions to streamline threat detection, investigation, and incident
                                                resolution.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Security Orchestration, Automation, and Response (SOAR) </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/vapt-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Cloud Security Monitoring & Protection ensures continuous visibility,
                                                threat detection, and compliance across cloud environments to safeguard data
                                                and applications.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Cloud Security Monitoring & Protection </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/security-audit-compliance.webp') }}"> </div>
                                        <div class="cn-content">
                                            <p>Dark Web Intelligence & Threat Hunting identifies exposed data,
                                                monitors cybercriminal activity, and proactively detects threats targeting
                                                your organization.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Dark Web Intelligence & Threat Hunting </h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/managed-it-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Preferred Service Partner" for corporate clients with array of customized
                                                security
                                                solutions
                                                and services to operate in a secure environment.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Managed IT Security Solutions</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Identify and resolve Ecrime incidents that adversely impact organizations
                                                with
                                                cybercrime /
                                                online fraud and proactively manage 24x7 hours security risks.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img"> <img
                                                src="{{ asset('assets/images/soc-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                                notification &
                                                threat mitigation.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                            style="display: block; text-decoration: none;">
                                            <h3>SOC (Security Operation Center) as a Service</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile code start -->
            <div class="mobile-view indu-moblie indu-moblie1 count-navigation mhome-space mhome-space1">
                <div id="mhome-slider17_2" class="owl-carousel owl-theme">
                    <!--  -->
                    <div class="item ">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img
                                        src="{{ asset('assets/images/security-audit-compliance.webp') }}"> </div>
                                <div class="cn-content">
                                    <p>SOC as a Service provides outsourced security monitoring, threat detection,
                                        and incident response to protect organizations from cyber threats 24/7.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>SOC as a Service </h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/vapt-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Security Monitoring and SIEM Services offer real-time threat detection,
                                        log analysis, and incident response to enhance organizational cybersecurity posture.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Security Monitoring & SIEM Services</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/managed-it-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Managed Endpoint Detection & Response (EDR) delivers continuous monitoring, threat
                                        detection,
                                        and automated response to protect endpoints from cyberattacks.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Managed Endpoint Detection & Response (EDR)</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Extended Detection & Response (XDR) Services unify data across endpoints, networks,
                                        and cloud to detect, investigate, and respond to threats efficiently.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Extended Detection & Response (XDR) Services</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>SOAR services integrate security tools, automate workflows, and coordinate response
                                        actions to streamline threat detection, investigation, and incident resolution.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Security Orchestration, Automation, and Response (SOAR)</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Cloud Security Monitoring & Protection ensures continuous visibility, threat
                                        detection,
                                        and compliance across cloud environments to safeguard data and applications.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Cloud Security Monitoring & Protection</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Dark Web Intelligence & Threat Hunting identifies exposed data,
                                        monitors cybercriminal activity, and proactively detects threats targeting your
                                        organization.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed"
                                    style="display: block; text-decoration: none;">
                                    <h3>Dark Web Intelligence & Threat Hunting</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <div id="navigation-count16_2" class="count-nav-box"></div>
            </div>
            <!-- mobile code end -->
        </section>
        <!-- empower industry end -->

        <!-- bg banner start -->
        <section class="mhspace mhspace00" id="mhome-div6">
            <div class="traing-banner desktop-view">
                <img src="{{ asset('assets/images/clients/banner.png') }}">
            </div>
            <!-- bg banner end -->
            <!-- bg banner start -->
            <div class="traing-banner mobile-view">
                <img src="{{ asset('assets/images/mimg3.webp') }}">
            </div>
        </section>
        <!-- bg banner end -->
        <!--Offering start -->
        <section class="home-banner-sec" id="mhome-div6-1"
            style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23000000' fill-opacity='0.06'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>CYBARWIND COE - Education</h2>
                        <p>We provide End-to-End IT Solutions & Services</p>
                    </div>
                </div>
            </div>
            <div class="container desktop-view">
                <div class="row">
                    <div class="cn-tabs1">
                        <ul id="tabs-nav2" class="desktop home-nav-v2">
                            <li><a class="scr-tabs2" href="#tab116">Cybersecurity </a></li>
                            <li><a class="scr-tabs2" href="#tab117">Ethical Hacking </a></li>
                            <li><a class="scr-tabs2" href="#tab118">Penetration Testing </a></li>
                            <li><a class="scr-tabs2" href="#tab119">Vulnerability Assessment</a></li>
                            <li><a class="scr-tabs2" href="#tab110">Certification </a></li>
                        </ul>
                        <!-- END tabs-nav -->
                        <div id="tabs-content">
                            <div id="tab116" class="tab-content2">
                                <!--  -->
                                <div class="home-slider">
                                    <div id="home-slider1" class="owl-carousel owl-theme ">
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/Training-calendar-Codec-Networks.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/IT-Security.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/ec-council-training-certification.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/governance-risk-compliance.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <div id="tab117" class="tab-content2">
                                <!--  -->
                                <div class="home-content-tab">
                                    <div class="row rowp">
                                        <div class="col-md-7">
                                            <div class="red-title">
                                                <p> In a world teeming with digital threats, ethical hacking emerges as a
                                                    formidable
                                                    strategy to
                                                    fortify cyber defenses. Ethical hackers, or "white hat" hackers, are
                                                    cybersecurity
                                                    experts who use
                                                    their skills to identify vulnerabilities and strengthen security
                                                    measures. Explore
                                                    the realm of
                                                    ethical hacking with our comprehensive courses that empower individuals
                                                    and
                                                    organizations to
                                                    combat cyber threats proactively.
                                                </p>
                                                <p> In a world teeming with digital threats, ethical hacking emerges as a
                                                    formidable
                                                    strategy to
                                                    fortify cyber defenses. Ethical hackers, or "white hat" hackers, are
                                                    cybersecurity
                                                    experts who use
                                                    their skills to identify vulnerabilities and strengthen security
                                                    measures. Explore
                                                    the realm of
                                                    ethical hacking with our comprehensive courses that empower individuals
                                                    and
                                                    organizations to
                                                    combat cyber threats proactively.
                                                </p>
                                                <p> In a world teeming with digital threats, ethical hacking emerges as a
                                                    formidable
                                                    strategy to
                                                    fortify cyber defenses. Ethical hackers, or "white hat" hackers, are
                                                    cybersecurity
                                                    experts who use
                                                    their skills to identify vulnerabilities and strengthen security
                                                    measures. Explore
                                                    the realm of
                                                    ethical hacking with our comprehensive courses that empower individuals
                                                    and
                                                    organizations to
                                                    combat cyber threats proactively.
                                                </p>
                                                <a href="javascript:void(0)" class="homeread-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="template12-img">
                                                <img src="{{ asset('assets/images/working-1.webp') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <div id="tab118" class="tab-content2">
                                <!--  -->
                                <div class="home-slider">
                                    <div id="home-slider3" class="owl-carousel owl-theme">
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/Training-calendar-Codec-Networks.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/IT-Security.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/ec-council-training-certification.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/governance-risk-compliance.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <div id="tab119" class="tab-content2">
                                <!--  -->
                                <div class="home-slider">
                                    <div id="home-slider4" class="owl-carousel owl-theme">
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/Training-calendar-Codec-Networks.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/IT-Security.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/ec-council-training-certification.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/governance-risk-compliance.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <!--  -->
                            <div id="tab110" class="tab-content2">
                                <!--  -->
                                <div class="home-slider">
                                    <div id="home-slider5" class="owl-carousel owl-theme">
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/Training-calendar-Codec-Networks.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/IT-Security.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/ec-council-training-certification.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/governance-risk-compliance.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <!--  -->
                        </div>
                    </div>
                    <!-- END tabs-content -->
                </div>
                <!-- END tabs -->
            </div>
            </div>
            <!--  -->
            <!-- mobile start -->
            <div class="container mobile-view significance-space significance-spac2">
                <!--  -->
                <div class="acc">
                    <!-- box first start -->
                    <div class="acc__card">
                        <a href="#it1" class="acc__title active">Cybersecurity </a>
                        <div class="acc__panel" style="display:block" id="it1">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider19" class="owl-carousel owl-theme">
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg2.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count18" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box first end -->
                    <!-- box two end -->
                    <div class="acc__card">
                        <a href="#it2" class="acc__title">Ethical Hacking </a>
                        <div class="acc__panel" id="it2">
                            <!--  -->
                            <div class="it-box">
                                <div class="it-img">
                                    <img src="{{ asset('assets/images/working-1.webp') }}" alt="">
                                </div>
                                <div class="it-content">
                                    <p>In a world teeming with digital threats, ethical hacking emerges as a formidable
                                        strategy to
                                        fortify cyber defenses. Ethical hackers, or "white hat" hackers, are cybersecurity
                                        experts
                                        who use their skills to identify vulnerabilities and strengthen security measures.
                                        Explore
                                        the realm of ethical hacking with our comprehensive courses that empower individuals
                                        and
                                        organizations to combat cyber threats proactively.</p>
                                    <a href="javascript:void(0)">Read more</a>
                                </div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#it3" class="acc__title">Penetration Testing </a>
                        <div class="acc__panel" id="it3">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider20" class="owl-carousel owl-theme">
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg2.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count19" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box three end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#it4" class="acc__title">Vulnerability Assessment</a>
                        <div class="acc__panel" id="it4">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider21" class="owl-carousel owl-theme">
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg2.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count20" class="count-nav-box"></div>
                            </div>

                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box four end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#it5" class="acc__title">Certification </a>
                        <div class="acc__panel" id="it5">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider22" class="owl-carousel owl-theme">
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg2.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count20" class="count-nav-box"></div>
                            </div>

                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box four end -->
                </div>
                <!-- faq End -->
            </div>
            <!-- mobile ed -->
            <!--  -->
        </section>
        <!-- Offering end -->
        <!--Training Domains training-->
        <section class="training-domains-white mhspace" id="mhome-div7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>Featured Training Domains</h2>
                    </div>
                </div>
            </div>
            <div class="container p40 desktop">
                <div class="row">

                    <div class="col-md-4 mb-3 ">
                        <a href="javascript:void(0)">
                            <div class="tdw-box row">
                                <div class="col-md-4 pd0">
                                    <div class="tdw-img"> <img src="{{ asset('assets/images/ec-council-1.webp') }}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="feature-header">
                                        <h3>EC Council Accredited Certification Programs</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-4 mb-3">
                        <a href="">
                            <div class="tdw-box row">
                                <div class="col-md-4 pd0">
                                    <div class="tdw-img"> <img
                                            src="{{ asset('assets/images/PECB-Acc-Certification.webp') }}"> </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="feature-header">
                                        <h3>PECB Accredited Certification Programs</h3>
                                        <p>A global training provider offers expertise in domains including IT, Info Sec,
                                            Service/
                                            Quality Management, Risk Management, Health, Safety, and Environment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-4 mb-3">
                        <a href="">
                            <div class="tdw-box row">
                                <div class="col-md-4 pd0">
                                    <div class="tdw-img"> <img src="{{ asset('assets/images/cyber-security-pene.webp') }}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="feature-header">
                                        <h3>Cyber Security and Penetration Testing</h3>
                                        <p>Real-life attack scenarios based programs for professionals aspire to acquire the
                                            skillsets
                                            required for cyber security job roles.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="tdw-box row">
                            <div class="col-md-4 pd0">
                                <div class="tdw-img"> <img src="{{ asset('assets/images/Security-oprations-4.webp') }}">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="feature-header">
                                    <h3>Security Operations and Management</h3>
                                    <p>Extensive and meticulous knowledge with enhanced capabilities programs are engineered
                                        for
                                        analysts to achieve proficiency in performing SOC operations
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="tdw-box row">
                            <div class="col-md-4 pd0">
                                <div class="tdw-img"> <img src="{{ asset('assets/images/cyber-forensic-5.webp') }}">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="feature-header">
                                    <h3>Cyber Forensic and Fraud Management</h3>
                                    <p>Develops the strong logical skills needed to detect, investigate and prevent computer
                                        crime
                                        and
                                        to combat cyber fraud in a technology-driven world.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="tdw-box row">
                            <div class="col-md-4 pd0">
                                <div class="tdw-img"> <img src="{{ asset('assets/images/instructor-online.webp') }}">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="feature-header">
                                    <h3>IT / Security Risk, Compliance and Governance</h3>
                                    <p>Most up-to-date GRC training programs ensure to achieve required capabilities of
                                        shielding
                                        organization against threats in a challenging environment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="tdw-box row">
                            <div class="col-md-4 pd0">
                                <div class="tdw-img"> <img src="{{ asset('assets/images/Security-oprations-4.webp') }}">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="feature-header">
                                    <h3>Data Science, Analytics and Artificial Intelligence</h3>
                                    <p>Based on the most transformational fastest growing technologies in the build of data
                                        visualization, predictive analytics, machine learning and data science.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="tdw-box row">
                            <div class="col-md-4 pd0">
                                <div class="tdw-img"> <img src="{{ asset('assets/images/networks-8.webp') }}"> </div>
                            </div>
                            <div class="col-md-8">
                                <div class="feature-header">
                                    <h3>Network Administration and Security</h3>
                                    <p> Knowledge programs covers the policies and practices adopted to prevent, monitor and
                                        reduce
                                        risk network-accessible resources.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="tdw-box row">
                            <div class="col-md-4 pd0">
                                <div class="tdw-img"> <img src="{{ asset('assets/images/it-security-opration9.webp') }}">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="feature-header">
                                    <h3>IT Operation, Project and Service Management</h3>
                                    <p>Based on the most integrated programs like ITIL, PMP, Prince, DevOps, Agile, Scrum
                                        necessary
                                        to
                                        optimize IT strategies and resources across the organization.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="tdw-box row">
                            <div class="col-md-4 pd0">
                                <div class="tdw-img"> <img src="{{ asset('assets/images/other-quality10.webp') }}">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="feature-header">
                                    <h3>Other Quality Management Programs</h3>
                                    <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy etc) based
                                        QM
                                        programs assist executives in understanding the business processes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="tdw-box row">
                            <div class="col-md-4 pd0">
                                <div class="tdw-img"> <img src="{{ asset('assets/images/other-quality10.webp') }}">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="feature-header">
                                    <h3>Other Quality Management Programs</h3>
                                    <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy etc) based
                                        QM
                                        programs assist executives in understanding the business processes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="tdw-box row">
                            <div class="col-md-4 pd0">
                                <div class="tdw-img"> <img src="{{ asset('assets/images/other-quality10.webp') }}">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="feature-header">
                                    <h3>Other Quality Management Programs</h3>
                                    <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy etc) based
                                        QM
                                        programs assist executives in understanding the business processes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile code start -->
            <div class="mobile-view indu-moblie indu-moblie1 count-navigation mhome-space mhome-space1">

                <!-- slider 1 start -->
                <div class="slider1">
                    <div id="mhome-slider40" class="owl-carousel owl-theme">
                        <!--  -->
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/ec-council-1.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>EC Council Accredited Certification Programs</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/ec-council-1.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>EC Council Accredited Certification Programs</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/ec-council-1.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>EC Council Accredited Certification Programs</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--  -->
                    </div>
                    <div id="navigation-count40" class="count-nav-box"></div>
                </div>
                <!-- slider1 end  -->
                <!-- slider 1 start -->
                <div class="slider1">
                    <div id="mhome-slider41" class="owl-carousel owl-theme">
                        <!--  -->
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img
                                            src="{{ asset('assets/images/PECB-Acc-Certification.webp') }}"></div>
                                    <div class="ftd-header">
                                        <h3>PECB Accredited Certification Programs</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img
                                            src="{{ asset('assets/images/PECB-Acc-Certification.webp') }}"></div>
                                    <div class="ftd-header">
                                        <h3>PECB Accredited Certification Programs</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img
                                            src="{{ asset('assets/images/PECB-Acc-Certification.webp') }}"></div>
                                    <div class="ftd-header">
                                        <h3>PECB Accredited Certification Programs</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--  -->
                    </div>
                    <div id="navigation-count41" class="count-nav-box"></div>
                </div>
                <!-- slider1 end  -->
                <!-- slider 1 start -->
                <div class="slider1">
                    <div id="mhome-slider42" class="owl-carousel owl-theme">
                        <!--  -->
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/cyber-security-pene.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>Cyber Security and Penetration Testing</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/cyber-security-pene.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>Cyber Security and Penetration Testing</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/cyber-security-pene.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>Cyber Security and Penetration Testing</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--  -->
                    </div>
                    <div id="navigation-count42" class="count-nav-box"></div>
                </div>
                <!-- slider1 end  -->
                <!-- slider 1 start -->
                <div class="slider1">
                    <div id="mhome-slider43" class="owl-carousel owl-theme">
                        <!--  -->
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/Security-oprations-4.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>Security Operations and Management</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/Security-oprations-4.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>Security Operations and Management</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/Security-oprations-4.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>Security Operations and Management</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--  -->
                    </div>
                    <div id="navigation-count43" class="count-nav-box"></div>
                </div>
                <!-- slider1 end  -->
                <!-- slider 1 start -->
                <div class="slider1">
                    <div id="mhome-slider44" class="owl-carousel owl-theme">
                        <!--  -->
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/cyber-forensic-5.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>Cyber Forensic and Fraud Management</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/cyber-forensic-5.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>Cyber Forensic and Fraud Management</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="{{ asset('assets/images/cyber-forensic-5.webp') }}">
                                    </div>
                                    <div class="ftd-header">
                                        <h3>Cyber Forensic and Fraud Management</h3>
                                        <p>Offers buffey of security programs, tools and techniques that are globally
                                            accepted in
                                            Information and Cyber Security Assurance.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--  -->
                    </div>
                    <div id="navigation-count44" class="count-nav-box"></div>
                </div>
                <!-- slider1 end  -->
            </div>
            <!-- mobile code end -->
        </section>
        <!-- Training Domains end -->
        <!-- WHY CHOOSE Cybar Wind? start -->
        <section class="wccn mhspace" id="mhome-div8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wccn-title">
                            <h3 class="style2"><span style="color: #ffffff;"> Why Cybar Wind?</span></h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pb-4">
                                <div class="wccn-content">
                                    <h4><span><i class="fa fa-check border"></i> LIVING THE COMMITMENT</span></h4>
                                    <p><span> We always dedicated to maintain the high values of loyalty and integrity over
                                            the
                                            years.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="wccn-content">
                                    <h4><span><i class="fa fa-check border"></i> CHAIN OF SATISFIED CUSTOMERS</span></h4>
                                    <p><span> We are committed to ensuring that our customers receive an unrivalled level of
                                            service.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="wccn-content">
                                    <h4><span><i class="fa fa-check border"></i> STRATEGIC SOLUTIONS TO INDUSTRY
                                            NEEDS</span></h4>
                                    <p><span> We constantly sit with our customers on the same side of table to provide
                                            strategically
                                            business solutions to business problems.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="wccn-content">
                                    <h4><span><i class="fa fa-check border"></i> TRUSTED BUSINESS PARTNER</span></h4>
                                    <p><span> We follows strong ethics, strict code of conduct and high level of
                                            professionalism with
                                            structured and streamlined processes.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="wccn-content">
                                    <h4><span><i class="fa fa-check border"></i> ABILITY TO INNOVATE</span></h4>
                                    <p><span> We continuously work on the longevity and ability to move with the times and
                                            pioneer new
                                            ways.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="wccn-content">
                                    <h4><span><i class="fa fa-check border"></i> COMPREHENSIVE PROJECT MANAGEMENT</span>
                                    </h4>
                                    <p><span> We ensure cost effective and swift execution of project approach, processes,
                                            checklists
                                            and
                                            deliverables.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div id="client-logo" class="owl-carousel owl-theme">
                        <div class="item"> <img src="{{ asset('assets/images/clients/eccoincil-partnerlogo.webp') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="item"> <img src="{{ asset('assets/images/clients/pecb-partnerlogo.webp') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/clients/mcafee.webp') }}" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="{{ asset('assets/images/clients/being-cert-logopartner.webp') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/clients/quick-heal.webp') }}" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="{{ asset('assets/images/clients/shophospartnerlogo.webp') }}"
                                alt="Owl Image">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/clients/symantec.webp') }}" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="{{ asset('assets/images/clients/tenable.webp') }}" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="{{ asset('assets/images/clients/kesperskypartner.webp') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/clients/acunetix-partner-logo.webp') }}"
                                alt="Owl Image"></div>
                        <div class="item"><img src="{{ asset('assets/images/clients/seqrite.webp') }}" alt="Owl Image">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/clients/inspira-partnerlogo.webp') }}"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- WHY CHOOSE Cybar Wind? end -->
        <!--Offering start -->
        <section class="home-banner-sec mhspace" id="mhome-div91"
            style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='6' height='6' viewBox='0 0 6 6' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23000000' fill-opacity='0.12' fill-rule='evenodd'%3E%3Cpath d='M5 0h1L0 6V5zM6 5v1H5z'/%3E%3C/g%3E%3C/svg%3E&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>IT Education</h2>
                        <p>We provide End-to-End IT Solutions & Services
                        </p>
                    </div>
                </div>
            </div>
            <div class="container desktop-view">
                <div class="row">
                    <div class="cn-tabs1">
                        <ul id="tabs-nav4" class="desktop home-nav-v2">
                            <li><a class="scr-tabs4" href="#tab1116-1">Cybersecurity </a></li>
                            <li><a class="scr-tabs4" href="#tab1117-2">Ethical Hacking </a></li>
                            <li><a class="scr-tabs4" href="#tab1118-3">Penetration Testing </a></li>
                            <li><a class="scr-tabs4" href="#tab1119-4">Vulnerability Assessment</a></li>
                            <li><a class="scr-tabs4" href="#tab1110-5">Certification </a></li>
                        </ul>
                        <!-- END tabs-nav -->
                        <div id="tabs-content">
                            <div id="tab1116-1" class="tab-content4">
                                <!--  -->
                                <div class="home-slider">
                                    <div id="home-slider11" class="owl-carousel owl-theme">
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/Training-calendar-Codec-Networks.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/IT-Security.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/ec-council-training-certification.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/governance-risk-compliance.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <div id="tab1117-2" class="tab-content4">
                                <!--  -->
                                <div class="home-slider">
                                    <div id="home-slider12" class="owl-carousel owl-theme">
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/Training-calendar-Codec-Networks.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/IT-Security.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/ec-council-training-certification.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/governance-risk-compliance.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <div id="tab1118-3" class="tab-content4">
                                <!--  -->
                                <!--  -->
                                <div class="home-content-tab">
                                    <div class="row rowp">
                                        <div class="col-md-7">
                                            <div class="red-title">
                                                <p> In a world teeming with digital threats, ethical hacking emerges as a
                                                    formidable
                                                    strategy to
                                                    fortify cyber defenses. Ethical hackers, or "white hat" hackers, are
                                                    cybersecurity
                                                    experts who use
                                                    their skills to identify vulnerabilities and strengthen security
                                                    measures. Explore
                                                    the realm of
                                                    ethical hacking with our comprehensive courses that empower individuals
                                                    and
                                                    organizations to
                                                    combat cyber threats proactively.
                                                </p>
                                                <p> In a world teeming with digital threats, ethical hacking emerges as a
                                                    formidable
                                                    strategy to
                                                    fortify cyber defenses. Ethical hackers, or "white hat" hackers, are
                                                    cybersecurity
                                                    experts who use
                                                    their skills to identify vulnerabilities and strengthen security
                                                    measures. Explore
                                                    the realm of
                                                    ethical hacking with our comprehensive courses that empower individuals
                                                    and
                                                    organizations to
                                                    combat cyber threats proactively.
                                                </p>
                                                <p> In a world teeming with digital threats, ethical hacking emerges as a
                                                    formidable
                                                    strategy to
                                                    fortify cyber defenses. Ethical hackers, or "white hat" hackers, are
                                                    cybersecurity
                                                    experts who use
                                                    their skills to identify vulnerabilities and strengthen security
                                                    measures. Explore
                                                    the realm of
                                                    ethical hacking with our comprehensive courses that empower individuals
                                                    and
                                                    organizations to
                                                    combat cyber threats proactively.
                                                </p>
                                                <a href="javascript:void(0)" class="homeread-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="template12-img">
                                                <img src="{{ asset('assets/images/working-1.webp') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <!--  -->
                            </div>
                            <div id="tab1119-4" class="tab-content4">
                                <!--  -->
                                <div class="home-slider">
                                    <div id="home-slider14" class="owl-carousel owl-theme">
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/Training-calendar-Codec-Networks.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/IT-Security.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/ec-council-training-certification.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/governance-risk-compliance.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <!--  -->
                            <div id="tab1110-5" class="tab-content4">
                                <!--  -->
                                <div class="home-slider">
                                    <div id="home-slider15" class="owl-carousel owl-theme">
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/Training-calendar-Codec-Networks.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/IT-Security.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/ec-council-training-certification.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{ asset('assets/images/governance-risk-compliance.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <!--  -->
                        </div>
                    </div>
                    <!-- END tabs-content -->
                </div>
                <!-- END tabs -->
            </div>
            </div>

            <!--  -->
            <!-- mobile start -->
            <div class="container mobile-view significance-space significance-spac2">
                <!--  -->
                <div class="acc">
                    <!-- box first start -->
                    <div class="acc__card">
                        <a href="#its1" class="acc__title active">Cybersecurity </a>
                        <div class="acc__panel" style="display:block" id="its1">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider23" class="owl-carousel owl-theme">
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg2.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count22" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box first end -->
                    <!-- box two end -->
                    <div class="acc__card">
                        <a href="#its2" class="acc__title">Ethical Hacking </a>
                        <div class="acc__panel" id="its2">
                            <!--  -->
                            <div class="it-box">
                                <div class="it-img">
                                    <img src="{{ asset('assets/images/working-1.webp') }}" alt="">
                                </div>
                                <div class="it-content">
                                    <p>In a world teeming with digital threats, ethical hacking emerges as a formidable
                                        strategy to
                                        fortify cyber defenses. Ethical hackers, or "white hat" hackers, are cybersecurity
                                        experts
                                        who use their skills to identify vulnerabilities and strengthen security measures.
                                        Explore
                                        the realm of ethical hacking with our comprehensive courses that empower individuals
                                        and
                                        organizations to combat cyber threats proactively.</p>
                                    <a href="javascript:void(0)">Read more</a>
                                </div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#its3" class="acc__title">Penetration Testing </a>
                        <div class="acc__panel" id="its3">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider24" class="owl-carousel owl-theme">
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg2.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count23" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box three end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#its4" class="acc__title">Vulnerability Assessment</a>
                        <div class="acc__panel" id="its4">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider25" class="owl-carousel owl-theme">
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg2.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count24" class="count-nav-box"></div>
                            </div>

                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box four end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#its5" class="acc__title">Certification </a>
                        <div class="acc__panel" id="its5">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider26" class="owl-carousel owl-theme">
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg2.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg.webp') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="{{ asset('assets/images/mimg1.webp') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count25" class="count-nav-box"></div>
                            </div>

                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box four end -->
                </div>
                <!-- faq End -->
            </div>
            <!-- mobile ed -->
            <!--  -->
        </section>
        <!-- Offering end -->
        <!-- start Industries We Serve -->
        <section class="cn-iws mhspace" id="mhome-div9">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>Industry We Serve</h2>
                        <p>Serve large segment of SME & Hi-cap Enterprise customers</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!--  -->
                    <!--  -->
                    <div class="industry-slider">
                        <div id="industry-slider" class="owl-carousel owl-theme">
                            <!-- logo item1 -->
                            <div class="items active">
                                <a href="#partnter1">
                                    <div class="team-details">
                                        <div class="team-img part-bg1">
                                            <img src="{{ asset('assets/images/Industries/Technology-IT-Telecom.webp') }}"
                                                alt="" title="">
                                            <h3 class="team-name">Technology, IT <br>&amp; Telecom</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                            <!-- logo item1 -->
                            <div class="items">
                                <a href="#partnter2">
                                    <div class="team-details">
                                        <div class="team-img part-bg2">
                                            <img src="{{ asset('assets/images/Industries/Education.webp') }}" alt=""
                                                title="">
                                            <h3 class="team-name">Education</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                            <!-- logo item1 -->
                            <div class="items">
                                <a href="#partnter3">
                                    <div class="team-details">
                                        <div class="team-img part-bg3">
                                            <img src="{{ asset('assets/images/Industries/Banking-Finance-Insurance.webp') }}"
                                                alt="" title="">
                                            <h3 class="team-name">Banking, Finance <br>&amp; Insurance</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                            <!-- logo item1 -->
                            <div class="items">
                                <a href="#partnter4">
                                    <div class="team-details">
                                        <div class="team-img part-bg4">
                                            <img src="{{ asset('assets/images/Industries/Healthcare.webp') }}" alt=""
                                                title="">
                                            <h3 class="team-name">Healthcare</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text"> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                            <!-- logo item1 -->
                            <div class="items">
                                <a href="#partnter5">
                                    <div class="team-details">
                                        <div class="team-img part-bg5">
                                            <img src="{{ asset('assets/images/Industries/Retail-E-Commerce.webp') }}" alt=""
                                                title="">
                                            <h3 class="team-name">Retail <br>&amp; E-Commerce</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text"> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                            <!-- logo item1 -->
                            <div class="items">
                                <a href="#partnter6">
                                    <div class="team-details">
                                        <div class="team-img part-bg6">
                                            <img src="{{ asset('assets/images/Industries/Power-Energy.webp') }}" alt=""
                                                title="">
                                            <h3 class="team-name">Power &amp; Energy</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text"> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                            <!-- logo item1 -->
                            <div class="items">
                                <a href="#partnter7">
                                    <div class="team-details">
                                        <div class="team-img part-bg7">
                                            <img src="{{ asset('assets/images/Industries/Government-Defence.webp') }}"
                                                alt="" title="">
                                            <h3 class="team-name">Government <br>&amp; Defence</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text"> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                            <!-- logo item1 -->
                            <div class="items">
                                <a href="#partnter8">
                                    <div class="team-details">
                                        <div class="team-img part-bg8">
                                            <img src="{{ asset('assets/images/Industries/Utilities.webp') }}" alt=""
                                                title="">
                                            <h3 class="team-name">Utilities</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text"> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                            <!-- logo item1 -->
                            <div class="items">
                                <a href="#partnter9">
                                    <div class="team-details">
                                        <div class="team-img part-bg9">
                                            <img src="{{ asset('assets/images/Industries/Industruies-Manufacturing.webp') }}"
                                                alt="" title="">
                                            <h3 class="team-name">Industruies <br>&amp; Manufacturing</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text"> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                            <!-- logo item1 -->
                            <div class="items">
                                <a href="#partnter10">
                                    <div class="team-details">
                                        <div class="team-img part-bg10">
                                            <img src="{{ asset('assets/images/Industries/Tourism-Hospitality.webp') }}"
                                                alt="" title="">
                                            <h3 class="team-name">Tourism &amp; Hospitality</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text"> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                            <!-- logo item1 -->
                            <div class="items">
                                <a href="#partnter11">
                                    <div class="team-details">
                                        <div class="team-img part-bg11">
                                            <img src="{{ asset('assets/images/Industries/Media-Entertainment.webp') }}"
                                                alt="" title="">
                                            <h3 class="team-name">Media <br>&amp; Entertainment</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text"> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                            <!-- logo item1 -->
                            <div class="items">
                                <a href="#partnter12">
                                    <div class="team-details">
                                        <div class="team-img part-bg12">
                                            <img src="{{ asset('assets/images/Industries/RealEstate.webp') }}" alt=""
                                                title="">
                                            <h3 class="team-name">Real Estate</h3>
                                        </div>
                                        <div class="team-bottom">
                                            <div class="team-text"> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- logo item1 end -->
                        </div>
                        <!-- partner logo start -->
                        <div class="partner-mian">
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter1" style="display:block">
                                <h4>Technology, IT &amp; Telecom</h4>
                                <ul>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter2">
                                <h4>Education</h4>
                                <ul>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter3">
                                <h4>Banking, Finance &amp; Insurance</h4>
                                <ul>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter4">
                                <h4>Healthcare</h4>
                                <ul>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter5">
                                <h4>Retail &amp; E-Commerce</h4>
                                <ul>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter6">
                                <h4>Power & Energy</h4>
                                <ul>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter7">
                                <h4>Government &amp; Defence</h4>
                                <ul>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter8">
                                <h4>Utilities</h4>
                                <ul>
                                    <li>
                                        <img src="{{ asset('assets/images/clients/ncdc-client-logo.webp') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter9">
                                <h4>Industruies &amp; Manufacturing</h4>
                                <ul>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter10">
                                <h4>Tourism & Hospitality</h4>
                                <ul>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter11">
                                <h4>Media &amp; Entertainment</h4>
                                <ul>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter12">
                                <h4>Real Estate</h4>
                                <ul>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/ncdc-client-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/aic.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/MCX.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/Samsung.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/hcl-logo.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="assets/images/clients/metlife.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                        </div>
                        <!--  partner logo end-->
                    </div>
                    <!--  -->
                    <!--  -->
                </div>
            </div>
        </section>
        <!-- end Industries We Serve -->
        <!-- Our Customers start -->
        <section class="cn-customer mhspace" id="mhome-div10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>Our Customers</h2>
                        <p>We provide End-to-End IT Solutions & Services
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!--  -->
                    <div id="client-testimonials" class="owl-carousel owl-theme owl-arrow">
                        <!-- testo 1 start  -->
                        <div class="item">
                            <div class="ceh-testo-box" data-target="client-testimonials-popup1">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="ceh-testo-image"><img src="{{ asset('assets/images/testo.webp') }}"
                                                class="img-fluid" alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Vijay</h3>
                                                <span>Developer</span>
                                            </div>
                                            <div class="ceh-testo-body">
                                                <p>Fresh-Net has a way of changing my perspective so that life's
                                                    possibilities open up
                                                    tremendously
                                                    when I work with them. It feels great having when someone listens to you
                                                    and helps
                                                    you figure out
                                                    your own next steps in your life.&nbsp;
                                                </p>
                                                <span>Read More</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testo 1 end -->
                        <!-- testo 1 start  -->
                        <div class="item">
                            <div class="ceh-testo-box" data-target="client-testimonials-popup2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="ceh-testo-image"><img src="{{ asset('assets/images/testo.webp') }}"
                                                class="img-fluid" alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Sudeep Pandey</h3>
                                                <span>Developer</span>
                                            </div>
                                            <div class="ceh-testo-body">
                                                <p>Fresh-Net has a way of changing my perspective so that life's
                                                    possibilities open up
                                                    tremendously
                                                    when I work with them. It feels great having when someone listens to you
                                                    and helps
                                                    you figure out
                                                    your own next steps in your life.&nbsp;
                                                </p>
                                                <span onclick="openPopup1(2)">Read More</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testo 1 end -->
                        <!-- testo 1 start  -->
                        <div class="item">
                            <div class="ceh-testo-box" data-target="client-testimonials-popup3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="ceh-testo-image"><img src="{{ asset('assets/images/testo.webp') }}"
                                                class="img-fluid" alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Dhruv</h3>
                                                <span>Developer</span>
                                            </div>
                                            <div class="ceh-testo-body">
                                                <p>Fresh-Net has a way of changing my perspective so that life's
                                                    possibilities open up
                                                    tremendously
                                                    when I work with them. It feels great having when someone listens to you
                                                    and helps
                                                    you figure out
                                                    your own next steps in your life.&nbsp;
                                                </p>
                                                <span onclick="openPopup1(3)">Read More</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testo 1 end -->
                        <!-- testo 1 start  -->
                        <div class="item">
                            <div class="ceh-testo-box" data-target="client-testimonials-popup4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="ceh-testo-image"><img src="{{ asset('assets/images/testo.webp') }}"
                                                class="img-fluid" alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Deepak</h3>
                                                <span>Developer</span>
                                            </div>
                                            <div class="ceh-testo-body">
                                                <p>Fresh-Net has a way of changing my perspective so that life's
                                                    possibilities open up
                                                    tremendously
                                                    when I work with them. It feels great having when someone listens to you
                                                    and helps
                                                    you figure out
                                                    your own next steps in your life.&nbsp;
                                                </p>
                                                <span onclick="openPopup1(4)">Read More</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testo 1 end -->
                    </div>
                    <!--  -->
                </div>
                <div class="testo-view">
                    <a href="">View all</a>
                </div>
            </div>
        </section>

        <!-- resources/views/mobile-components/m-testimonials.blade.php  -->
        @include('frontend.layouts.mobile-components.m-testimonials')

        <!-- Our Customers end -->
        <section class="core-domain-section-blog mhspace mhspace1" id="mhome-div11" style="background-color: #e5e8ee;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>Our Media</h2>
                        <p>We provide End-to-End IT Solutions & Services
                        </p>
                    </div>
                </div>
            </div>
            <div class="container desktop-view">
                <div class="row">
                    <div class="cn-tabs1">
                        <ul id="tabs-nav3" class="desktop home-blog-navs">
                            <li><a class="scr-tabs3" href="#blog">Blog </a></li>
                            <li><a class="scr-tabs3" href="#podcast">Podcast </a></li>
                            <li><a class="scr-tabs3" href="#news">Newsletter </a></li>
                            <li><a class="scr-tabs3" href="#event">Event & Webinar </a></li>
                        </ul>
                        <!-- END tabs-nav -->
                        <div id="tabs-content">
                            <div id="blog" class="tab-content3">
                                <!--  -->
                                <div class="home-blog">
                                    <div class="row">
                                        <!-- blog box1 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="{{ asset('assets/images/networks-8.webp') }}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="javascript:void(0)">Network Administration and
                                                            Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="javascript:void(0)"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box1 end -->
                                        <!-- blog box2 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="{{ asset('assets/images/ec-council-1.webp') }}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="javascript:void(0)">Network Administration and
                                                            Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="javascript:void(0)"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box2 end -->
                                        <!-- blog box3 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="{{ asset('assets/images/PECB-Acc-Certification.webp') }}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="javascript:void(0)">Network Administration and
                                                            Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="javascript:void(0)"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box3 end -->
                                    </div>
                                    <div class="blog-view">
                                        <a href="javascript:void(0)">View all</a>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <div id="podcast" class="tab-content3">
                                <!--  -->
                                <div class="podcast">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                                class="podcast-video">
                                                <img src="{{ asset('assets/images/video-thumb.webp') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                                class="podcast-video">
                                                <img src="{{ asset('assets/images/video-thumb.webp') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                                class="podcast-video">
                                                <img src="{{ asset('assets/images/video-thumb.webp') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-view">
                                        <a href="javascript:void(0)">View all</a>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <div id="news" class="tab-content3">
                                <!--  -->
                                <!--  -->
                                <div class="home-blog">
                                    <div class="row">
                                        <!-- blog box1 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="{{ asset('assets/images/networks-8.webp') }}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="javascript:void(0)">Network Administration and
                                                            Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="javascript:void(0)"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box1 end -->
                                        <!-- blog box2 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="{{ asset('assets/images/ec-council-1.webp') }}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="javascript:void(0)">Network Administration and
                                                            Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="javascript:void(0)"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box2 end -->
                                        <!-- blog box3 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="{{ asset('assets/images/PECB-Acc-Certification.webp') }}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="javascript:void(0)">Network Administration and
                                                            Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="javascript:void(0)"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box3 end -->
                                    </div>
                                    <div class="blog-view">
                                        <a href="javascript:void(0)">View all</a>
                                    </div>
                                </div>
                                <!--  -->
                                <!--  -->
                            </div>
                            <!--  -->
                            <div id="event" class="tab-content3">
                                <!--  -->
                                <div class="home-blog">
                                    <div class="row">
                                        <!-- blog box1 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="{{ asset('assets/images/networks-8.webp') }}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="javascript:void(0)">Network Administration and
                                                            Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="javascript:void(0)"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box1 end -->
                                        <!-- blog box2 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="{{ asset('assets/images/ec-council-1.webp') }}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="javascript:void(0)">Network Administration and
                                                            Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="javascript:void(0)"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box2 end -->
                                        <!-- blog box3 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="{{ asset('assets/images/PECB-Acc-Certification.webp') }}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="javascript:void(0)">Network Administration and
                                                            Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="javascript:void(0)"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box3 end -->
                                    </div>
                                    <div class="blog-view">
                                        <a href="javascript:void(0)">View all</a>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <!--  -->
                        </div>
                    </div>
                    <!-- END tabs-content -->
                </div>
                <!-- END tabs -->
            </div>
            </div>

            <!--  -->
            <!-- mobile start -->
            <div class="container mobile-view significance-space significance-spac2">
                <!--  -->
                <div class="acc">
                    <!-- box first start -->
                    <div class="acc__card">
                        <a href="#media1" class="acc__title active">Blog </a>
                        <div class="acc__panel" style="display:block" id="media1">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider27" class="owl-carousel owl-theme">
                                    <!-- + -->
                                    <!-- blog box1 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="{{ asset('assets/images/networks-8.webp') }}">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="javascript:void(0)">Network Administration and Security</a>
                                                </h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="javascript:void(0)"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box1 end -->
                                    <!-- blog box2 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="{{ asset('assets/images/ec-council-1.webp') }}">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="javascript:void(0)">Network Administration and Security</a>
                                                </h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="javascript:void(0)"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box2 end -->
                                    <!-- blog box3 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="{{ asset('assets/images/PECB-Acc-Certification.webp') }}">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="javascript:void(0)">Network Administration and Security</a>
                                                </h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="javascript:void(0)"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box3 end -->
                                    <!--  -->
                                </div>
                                <div id="navigation-count26" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box first end -->
                    <!-- box two end -->
                    <div class="acc__card">
                        <a href="#media2" class="acc__title">Podcast </a>
                        <div class="acc__panel" id="media2">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider31" class="owl-carousel owl-theme">
                                    <!-- + -->
                                    <div class="item">
                                        <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                            class="podcast-video">
                                            <img src="{{ asset('assets/images/video-thumb.webp') }}">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                            class="podcast-video">
                                            <img src="{{ asset('assets/images/video-thumb.webp') }}">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                            class="podcast-video">
                                            <img src="{{ asset('assets/images/video-thumb.webp') }}">
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                                <div id="navigation-count30" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#media3" class="acc__title">Newsletter </a>
                        <div class="acc__panel" id="media3">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider28" class="owl-carousel owl-theme">
                                    <!-- + -->
                                    <!-- blog box1 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="{{ asset('assets/images/networks-8.webp') }}">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="javascript:void(0)">Network Administration and Security</a>
                                                </h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="javascript:void(0)"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box1 end -->
                                    <!-- blog box2 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="{{ asset('assets/images/ec-council-1.webp') }}">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="javascript:void(0)">Network Administration and Security</a>
                                                </h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="javascript:void(0)"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box2 end -->
                                    <!-- blog box3 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="{{ asset('assets/images/PECB-Acc-Certification.webp') }}}">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="javascript:void(0)">Network Administration and Security</a>
                                                </h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="javascript:void(0)"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box3 end -->
                                    <!--  -->
                                </div>
                                <div id="navigation-count27" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box three end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#media4" class="acc__title">Event & Webinar </a>
                        <div class="acc__panel" id="media4">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider30" class="owl-carousel owl-theme">
                                    <!-- + -->
                                    <!-- blog box1 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="{{ asset('assets/images/networks-8.webp') }}">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="javascript:void(0)">Network Administration and Security</a>
                                                </h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="javascript:void(0)"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box1 end -->
                                    <!-- blog box2 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="{{ asset('assets/images/ec-council-1.webp') }}">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="javascript:void(0)">Network Administration and Security</a>
                                                </h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="javascript:void(0)"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box2 end -->
                                    <!-- blog box3 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="{{ asset('assets/images/PECB-Acc-Certification.webp') }}">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="javascript:void(0)">Network Administration and Security</a>
                                                </h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="javascript:void(0)"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box3 end -->
                                    <!--  -->
                                </div>
                                <div id="navigation-count29" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box four end -->
                </div>
                <!-- faq End -->
            </div>
            <!-- mobile ed -->
            <!--  -->
        </section>
        <!-- career start -->
        <section class="cn-career mhspace" id="mhome-div12">
            <div class="container">
                <div class="row">
                    <div class="title-section">
                        <h2 class="txt-center-domain-career1"><i class="fa fa-line-chart" id="line-chart-career"
                                aria-hidden="true"></i>Become an Insider</h2>
                        <span class="border-title"></span>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="box-desccareer12">
                            <p>Working at Cybar Wind means feeling empowered to make a difference and inspired to bring
                                innovation to employee compensation.
                            </p>
                            <p>At Cybar Wind, we acknowledge and value our differences as well as our combined strengths. We
                                want all employees, regardless of their background, to feel respected personally and
                                professionally. We cultivate a working environment
                                that inspires new ideas, promotes ownership and experimentation, and supports
                                highly-motivated
                                individuals to be truly creative.
                            </p>
                            <p>We always believe in deliver quality through deep specialization and innovation. We hire
                                people who
                                share our values, maintain strong relationships, and bring ideas to the table.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-wrappercareer12">
                            <div class="box-image-career123"> <img src="{{ asset('assets/images/career-img-png.webp') }}"
                                    class="img-fluid-career12" alt=""> </div>
                            <div class="box-button-career">
                                <a href="https://www.cybarwind.com/new-demo/asaraf/codec/careers.php" target="_blank">Join
                                    Our
                                    Team</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- career end -->
        <section>
            <div class="coach">
                <div class="coach-img"> <img src="{{ asset('assets/images/career-opportunities.webp') }}" class="img-fluid"
                        alt="coach image">
                </div>
                <div class="coach-text">
                    <h3>Career Opportunities. <br></h3>
                    <h4>Explore opportunities at forefront of innovation</h4>
                    <p>We bring together the best and the brightest in the industry to solve transformative cases with Data.
                    </p>
                    <div class="wpb_wrapper bdr-top1 pt-4 mt-4">
                        <p class="text-center"><a class="chevron chevron link-more aos-init aos-animate" style="color:#fff;"
                                href="javascript:void(0)">Browse Cybar Wind Job </a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- modal end -->

        {{-- @include('frontend.layouts.footer') --}}
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

    {{--
    <script type="text/javascript">
        function addVersionToFiles() {
            var version = new Date().getTime();
            var links = document.getElementsByTagName('link');
            var scripts = document.getElementsByTagName('script');
            // Add version to CSS files
            for (var i = 0; i < links.length; i++) {
                var href = links[i].getAttribute('href');
                if (href && href.endsWith('.css')) {
                    links[i].setAttribute('href', href + '?v=' + version);
                }
            }
            // Add version to script files
            for (var i = 0; i < scripts.length; i++) {
                var src = scripts[i].getAttribute('src');
                if (src) {
                    scripts[i].setAttribute('src', src + '?v=' + version);
                }
            }
        }
        window.onload = function () {
            addVersionToFiles();
        };
    </script> --}}

    <script>
        $('.close-acrodin').click(function (e) {
            e.preventDefault();
            var $panel = $(this).closest('.acc__panel');
            $panel.slideUp();
            $(this).closest('.acc').find('.acc__title.active').removeClass('active');

            var $accTitle = $(this).closest('.acc__card').find('.acc__title');
            if ($accTitle.length > 0) {
                $('html, body').scrollTop($accTitle.offset().top - 60);
            }
        });
    </script>

    <script>
        $("#awrad-slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                900: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }

        });

        $("#client-logo").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                900: {
                    items: 3
                },
                1200: {
                    items: 7
                }
            }

        });
    </script>
    <script>
        $('.cn-content').click(function () {
            $(this).addClass('height');
        });
        $('.cn-hover-img').click(function () {
            $('.cn-content').removeClass('height');
        });
    </script>
    <script>
        function openPopup(target) {
            $('#' + target).fadeIn();
            $('body').addClass('popup-open');
        }

        function closePopup(target) {
            $('#' + target).fadeOut();
            $('body').removeClass('popup-open');
        }

        // Open the corresponding popup when clicking on elements with the class "popup-btn"
        $(".ceh-testo-box").click(function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            openPopup(target);
        });

        // Close the popup when clicking on elements with the class "close_1"
        $(".close_1").click(function (e) {
            e.preventDefault();
            var target = $(this).closest('.popup').attr('id');
            closePopup(target);
        });

        // Close the popup when clicking outside the popup
        $(".popup").click(function (event) {
            if ($(event.target).is('.popup')) {
                var target = $(this).attr('id');
                closePopup(target);
            }
        });

        $('.close_1, .popup').on('click', function () {
            $('.testo-popup-body').scrollTop(0);
        })
    </script>
    <script>
        // $('.mobile-ser-menu li a').click(function(e) {
        //   e.preventDefault();
        //   var target = $(this).attr("href");
        //   $('html, body').css({
        //     'scroll-behavior': 'smooth'
        //   });
        //   setTimeout(function() {
        //     $('html, body').scrollTop($(target).offset().top - 50);
        //     $('html, body').css({
        //       'scroll-behavior': 'unset'
        //     });
        //   }, 0.01);
        // });
    </script>
    <script>
        function isMobile() {
            const userAgent = navigator.userAgent.toLowerCase();
            return /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/.test(
                userAgent
            );
        }
        if (!isMobile()) {
            function scrollToFirstElement(className, offset = 100) {
                document.querySelectorAll(`.${className}`).forEach(element => {
                    element.addEventListener("click", function (e) {
                        e.preventDefault();
                        setTimeout(() => {
                            const firstElement = document.querySelector(`.${className}`);
                            if (firstElement) {
                                window.scrollTo({
                                    top: firstElement.offsetTop - offset,
                                    behavior: "smooth"
                                });
                            }
                        }, 0); // Ensures content loads before scrolling
                    });
                });
            }
        }

        // Example usage:
        scrollToFirstElement("scr-tabs", 80);
        scrollToFirstElement("scr-tabs_1", 80);
        scrollToFirstElement("scr-tabs1", 80);
        scrollToFirstElement("scr-tabs3", 80);
        scrollToFirstElement("scr-tabs_4", 80);
        scrollToFirstElement("industry-slider", 50);
    </script>
    <script>
        $(document).ready(function () {
            $('.scroll-link').on('click', function (e) {
                e.preventDefault();

                const target = $(this).data('target');     // e.g., "#section2"
                const offset = parseInt($(this).data('offset')) || 0;  // e.g., -100
                const speed = parseInt($(this).data('speed')) || 400;  // e.g., 800

                const $target = $(target);
                if ($target.length) {
                    $('html, body').animate({
                        scrollTop: $target.offset().top + offset
                    }, speed);
                }
            });
        });

    </script>
    @include('frontend.layouts.right-menu-js')
@endpush