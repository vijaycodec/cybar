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
                        <div class="empower-industry-box empower-industry-box1">
                            <a href="#" class="scroll-link" data-target="#mhome-div2" data-offset="-90px" data-speed="400"
                                style="display: block; text-decoration: none;">
                                <div class="cn-hover-box">
                                    <div class="cn-hover-img"> <img src="{{ asset('assets/images/vapt-services.webp') }}"
                                            style="aspect-ratio: 1 / 1; height: auto;">
                                    </div>
                                    <div class="cn-content">
                                        <p>Codec Networks offers advanced VAPT services to identify, exploit, and mitigate
                                            security vulnerabilities across applications, networks, databases, and
                                            infrastructure, ensuring robust cyber defense and compliance.
                                        </p>
                                    </div>
                                </div>
                                <div class="cn-main-content">
                                    <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                    <p>Codec Networks offers advanced VAPT services to identify, exploit, and mitigate
                                        security vulnerabilities across applications, networks, databases, and
                                        infrastructure, ensuring robust cyber defense and compliance.
                                    </p>
                                    <p>
                                        Know more <i class="fa fa-chevron-right"></i>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="empower-industry-box empower-industry-box1">
                            <a href="#" class="scroll-link" data-target="#mhome-div4" data-offset="-100px" data-speed="600"
                                style="display: block; text-decoration: none;">
                                <div class="cn-hover-box">
                                    <div class="cn-hover-img"> <img
                                            src="{{ asset('assets/images/forensic-seervices.webp') }}"
                                            style="aspect-ratio: 1 / 1; height: auto;">
                                    </div>
                                    <div class="cn-content">
                                        <p>Codec Networks delivers expert consulting, audits, and compliance services to
                                            help
                                            businesses meet global cybersecurity standards, manage risks, and ensure
                                            regulatory
                                            readiness across industries.
                                        </p>
                                    </div>
                                </div>
                                <div class="cn-main-content">
                                    <h3>Governance, Risk &amp; Compliance</h3>
                                    <p>Codec Networks delivers expert consulting, audits, and compliance services to help
                                        businesses meet global cybersecurity standards, manage risks, and ensure regulatory
                                        readiness across industries
                                    </p>
                                    <p>
                                        Know more <i class="fa">&#xf054;</i>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="empower-industry-box empower-industry-box1">
                            <a href="#" class="scroll-link" data-target="#mhome-div4-1" data-offset="-100px"
                                data-speed=" 800" style="display: block; text-decoration: none;">
                                <div class="cn-hover-box">
                                    <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}"
                                            style="aspect-ratio: 1 / 1; height: auto;"> </div>
                                    <div class="cn-content">
                                        <p>Codec Networks provides 24x7 Managed SOC and Cyber Forensic services for
                                            real-time
                                            threat detection, incident response, and digital investigations across cloud,
                                            endpoint, and emerging tech environments.
                                        </p>
                                    </div>
                                </div>
                                <div class="cn-main-content">
                                    <h3>SOC (Security Operation Center) as a Service</h3>
                                    <p>Codec Networks provides 24x7 Managed SOC and Cyber Forensic services for real-time
                                        threat detection, incident response, and digital investigations across cloud,
                                        endpoint, and emerging tech environments.
                                    </p>
                                    <p>
                                        Know more <i class="fa">&#xf054;</i>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="empower-industry-box empower-industry-box1">
                            <a href="#" class="scroll-link" data-target="#mhome-div6" data-offset="-95px" data-speed=" 1000"
                                style="display: block; text-decoration: none;">
                                <div class="cn-hover-box">
                                    <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}"
                                            style="aspect-ratio: 1 / 1; height: auto;"> </div>
                                    <div class="cn-content">
                                        <p>Codec Networks’ CoPE offers industry-driven cybersecurity education, hands-on
                                            internships, and real-world projects to equip professionals with cutting-edge
                                            skills
                                            for today’s evolving threat landscape.
                                        </p>
                                    </div>
                                </div>
                                <div class="cn-main-content">
                                    <h3>Education</h3>
                                    <p>Codec Networks’ CoPE offers industry-driven cybersecurity education, hands-on
                                        internships, and real-world projects to equip professionals with cutting-edge skills
                                        for today’s evolving threat landscape.
                                    </p>
                                    <p>
                                        Know more <i class="fa">&#xf054;</i>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="empower-industry-box empower-industry-box1">
                            <a href="#" class="scroll-link" data-target="#mhome-div11" data-offset="-100px"
                                data-speed=" 1500" style="display: block; text-decoration: none;">
                                <div class="cn-hover-box">
                                    <div class="cn-hover-img"> <img src="{{ asset('assets/images/soc-services.webp') }}"
                                            style="aspect-ratio: 1 / 1; height: auto;"> </div>
                                    <div class="cn-content">
                                        <p>CN Insight by Codec Networks shares expert podcasts, blogs, and cybersecurity
                                            news—delivering sharp insights, threat updates, and trends to keep professionals
                                            informed and future-ready.
                                        </p>
                                    </div>
                                </div>
                                <div class="cn-main-content">
                                    <h3>CN Insight</h3>
                                    <p>CN Insight by Codec Networks shares expert podcasts, blogs, and cybersecurity
                                        news—delivering sharp insights, threat updates, and trends to keep professionals
                                        informed and future-ready.
                                    </p>
                                    <p>
                                        Know more <i class="fa">&#xf054;</i>
                                    </p>
                                </div>
                            </a>
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
                            <li><a class="scr-tabs1" href="#tab11"> Application Security Testing </a></li>
                            <li><a class="scr-tabs1" href="#tab12">Network Security Testing </a></li>
                            <li><a class="scr-tabs1" href="#tab13">Database Security Testing </a></li>
                            <li><a class="scr-tabs1" href="#tab14"> Server & Storage Security Testing </a></li>
                            <li><a class="scr-tabs1" href="#tab15"> People & Process Security Testing </a>
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
                                                            <h3>Web Application Penetration Testing</h3>
                                                            <p>Web Application Penetration Testing is the process of
                                                                identifying, exploiting, and reporting security
                                                                vulnerabilities in web apps to prevent real-world attacks.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Mobile App Security Testing </h3>
                                                            <p>Mobile App Security Testing involves analyzing mobile
                                                                applications to identify security flaws, data leaks, and
                                                                vulnerabilities across Android and iOS platforms.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>API Security Testing </h3>
                                                            <p>API Security Testing ensures APIs are protected against
                                                                vulnerabilities by identifying flaws like authentication
                                                                issues, data exposure, and injection attacks.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Thick Client/Desktop App Testing </h3>
                                                            <p>Thick Client/Desktop App Testing involves assessing security
                                                                risks in desktop applications, focusing on data storage,
                                                                authentication, and client-server communication
                                                                vulnerabilities.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Cloud-Native App Testing </h3>
                                                            <p>Cloud-Native App Testing evaluates the security of
                                                                applications built for cloud environments, focusing on
                                                                containers, microservices, APIs, and cloud configurations.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Smart Contract Audits </h3>
                                                            <p>Smart Contract Audits involve reviewing blockchain-based code
                                                                to identify vulnerabilities, logic errors, and security
                                                                risks before deployment on decentralized platforms.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>DApp Security Testing </h3>
                                                            <p>DApp Security Testing assesses decentralized applications for
                                                                vulnerabilities in smart contracts, blockchain interactions,
                                                                authentication, and data integrity across distributed
                                                                networks.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>SAST + DAST </h3>
                                                            <p>SAST + DAST combines static and dynamic analysis to identify
                                                                security vulnerabilities in source code and runtime behavior
                                                                of applications during development.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>CI/CD Pipeline Security Testing </h3>
                                                            <p>CI/CD Pipeline Security Testing evaluates automated build and
                                                                deployment workflows to detect vulnerabilities,
                                                                misconfigurations, and insecure integrations in DevOps
                                                                environments.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Zero-Day Vulnerability Exploitation Testing</h3>
                                                            <p>Zero-Day Vulnerability Exploitation Testing simulates attacks
                                                                using unknown vulnerabilities to assess an organization’s
                                                                ability to detect, prevent, and respond to emerging threats.
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
                                                            <h3>External/Internal Network Pentesting </h3>
                                                            <p>External/Internal Network Penetration Testing identifies
                                                                vulnerabilities in network infrastructure by simulating
                                                                real-world attacks from both outside and inside the
                                                                organization.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Wireless Security Testing </h3>
                                                            <p>Wireless Security Testing evaluates Wi-Fi networks for
                                                                vulnerabilities such as weak encryption, rogue access
                                                                points, and unauthorized access to ensure secure
                                                                communication.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Cloud Infrastructure Testing </h3>
                                                            <p>Cloud Infrastructure Testing assesses cloud environments for
                                                                misconfigurations, access control flaws, and vulnerabilities
                                                                to ensure secure deployment and management of resources.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>VPN & Remote Work Security Testing</h3>
                                                            <p>VPN & Remote Work Security Testing evaluates remote access
                                                                solutions for vulnerabilities, misconfigurations, and data
                                                                exposure risks to ensure secure remote connectivity.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>IoT/OT Network Testing </h3>
                                                            <p>IoT/OT Network Testing identifies security vulnerabilities in
                                                                Internet of Things and Operational Technology networks,
                                                                focusing on device communication, protocols, and access
                                                                controls.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Blockchain Node Testing </h3>
                                                            <p>Blockchain Node Testing assesses the security and integrity
                                                                of blockchain nodes, focusing on configuration, consensus
                                                                mechanisms, data validation, and network communication.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>5G Network Security Testing </h3>
                                                            <p>5G Network Security Testing evaluates 5G infrastructure for
                                                                vulnerabilities in protocols, slicing, authentication, and
                                                                data transmission to ensure secure connectivity and
                                                                performance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Red Team Exercises </h3>
                                                            <p>Red Team Exercises simulate real-world cyberattacks to test
                                                                an organization’s detection, response, and defense
                                                                capabilities across systems, networks, and employees.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>PCI DSS Network Compliance Testing</h3>
                                                            <p>PCI DSS Network Compliance Testing assesses network security
                                                                controls to ensure compliance with PCI standards for
                                                                protecting cardholder data and preventing breaches.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Zero Trust Architecture (ZTA) Assessments</h3>
                                                            <p>Zero Trust Architecture (ZTA) Assessments evaluate security
                                                                frameworks that enforce strict identity verification and
                                                                least privilege access across users, devices, and
                                                                applications.
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
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>SQL Injection & NoSQL Testing </h3>
                                                            <p>SQL Injection & NoSQL Testing identifies injection
                                                                vulnerabilities in traditional and NoSQL databases to
                                                                prevent unauthorized data access, manipulation, and
                                                                breaches.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Database Misconfiguration Reviews </h3>
                                                            <p>Database Misconfiguration Reviews assess database settings to
                                                                identify weak permissions, default credentials, and insecure
                                                                configurations that could lead to data breaches.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Encryption Testing </h3>
                                                            <p>Data Encryption Testing evaluates encryption methods used for
                                                                data at rest and in transit to ensure confidentiality,
                                                                integrity, and compliance with security standards.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Big Data Security Testing </h3>
                                                            <p>Big Data Security Testing examines large-scale data systems
                                                                for vulnerabilities in storage, processing, access controls,
                                                                and data leakage risks across distributed environments.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Active Directory (AD) Exploitation Testing </h3>
                                                            <p>Active Directory (AD) Exploitation Testing identifies
                                                                security weaknesses in AD configurations, permissions, and
                                                                trust relationships to prevent privilege escalation and
                                                                lateral movement.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Blockchain Storage Testing </h3>
                                                            <p>Blockchain Storage Testing evaluates the security of on-chain
                                                                and off-chain data storage to prevent tampering,
                                                                unauthorized access, and data integrity issues.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Masking & Anonymization Testing </h3>
                                                            <p>Data Masking & Anonymization Testing assesses techniques used
                                                                to protect sensitive data by replacing or obfuscating
                                                                identifiers while preserving usability and compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Database Audit Logging & Monitoring Tests</h3>
                                                            <p>Database Audit Logging & Monitoring Tests verify the
                                                                effectiveness of logging mechanisms to track access, detect
                                                                anomalies, and ensure compliance with data security
                                                                policies.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Cloud Database Testing </h3>
                                                            <p>Cloud Database Testing evaluates cloud-hosted databases for
                                                                vulnerabilities, access control flaws, encryption, and
                                                                configuration issues to ensure data security and compliance.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Data Exfiltration Simulation </h3>
                                                            <p>Data Exfiltration Simulation mimics unauthorized data
                                                                extraction techniques to assess an organization’s ability to
                                                                detect, prevent, and respond to data breaches.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Dark Web OSINT: Automate Threat Monitoring</h3>
                                                            <p>Dark Web OSINT: Automate Threat Monitoring uses open-source
                                                                intelligence tools to continuously monitor dark web sources
                                                                for leaked data, threats, and credentials.
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
                                            <div id="home-slider1_4" class="owl-carousel owl-theme">

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>OS Hardening Assessments</h3>
                                                            <p>Evaluate operating systems for weak configurations,
                                                                unnecessary services, missing patches, and privilege
                                                                escalation to strengthen endpoint-level cyber defenses.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Container Security Testing</h3>
                                                            <p>Test container images, configurations, and Kubernetes
                                                                environments to detect vulnerabilities, exposed APIs, and
                                                                insecure runtime or permission settings.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Cloud VM Pentesting</h3>
                                                            <p>Perform penetration testing on cloud virtual machines to
                                                                uncover misconfigurations, exposed services, insecure access
                                                                keys, and privilege escalation risks.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>SAN/NAS Storage Testing</h3>
                                                            <p>Assess SAN/NAS systems for data exposure, weak credentials,
                                                                encryption flaws, firmware vulnerabilities, and unauthorized
                                                                access or privilege escalation risks.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Serverless Security Testing</h3>
                                                            <p>Test cloud-native serverless apps for insecure triggers,
                                                                misconfigured roles, privilege abuse, and event injection
                                                                vulnerabilities affecting cloud functions.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Hypervisor & Virtualization Testing</h3>
                                                            <p>Evaluate hypervisors for breakout attacks, insecure
                                                                configurations, weak inter-VM isolation, and exposed
                                                                management interfaces in virtualized infrastructure.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Blockchain Validator Node Security</h3>
                                                            <p>Audit validator nodes for key exposure, consensus
                                                                manipulation, DDoS attack vectors, and insecure APIs within
                                                                blockchain infrastructure environments.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Backup Storage Security Testing</h3>
                                                            <p>Check backup storage for improper access controls, outdated
                                                                software, encryption failures, and vulnerabilities
                                                                exploitable by ransomware or insider threats.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Firmware Security Testing</h3>
                                                            <p>Analyze firmware for backdoors, hardcoded credentials,
                                                                outdated modules, insecure update mechanisms, and
                                                                vulnerabilities exploitable at the hardware layer.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Email Server Testing</h3>
                                                            <p>Test mail servers for spoofing, open relays, weak
                                                                authentication, vulnerable mail protocols, and exposure to
                                                                phishing or spam attacks.</p>
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
                                                            <h3>Phishing Simulation & Awareness Training</h3>
                                                            <p>Simulate phishing attacks to evaluate employee response and
                                                                improve security awareness, reducing organizational exposure
                                                                to social engineering threats.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Red Team Exercises</h3>
                                                            <p>Simulate real-world attacks across infrastructure,
                                                                applications, and users to identify security gaps and
                                                                validate defensive response effectiveness.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Insider Threat Simulations</h3>
                                                            <p>Test organizational resilience against insider threats by
                                                                simulating privileged misuse, sabotage, data exfiltration,
                                                                and policy circumvention scenarios.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>IAM & MFA Bypass Testing</h3>
                                                            <p>Assess identity and access management systems for
                                                                vulnerabilities that allow bypassing MFA, privilege abuse,
                                                                and unauthorized access escalation techniques.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Process Bypass Testing</h3>
                                                            <p>Test business workflows, security operations, and policy
                                                                enforcement mechanisms for weaknesses exploitable by
                                                                attackers or malicious insiders.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Crypto Social Engineering Tests</h3>
                                                            <p>Evaluate human-layer risks in crypto platforms using
                                                                phishing, impersonation, and manipulation to access wallets,
                                                                private keys, or assets.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>DAO Governance Attack Simulations</h3>
                                                            <p>Simulate governance manipulation attacks in DAOs to identify
                                                                vulnerabilities in smart contracts, quorum logic, and
                                                                decision-making processes.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Compliance Testing</h3>
                                                            <p>Validate cybersecurity posture against frameworks like ISO
                                                                27001, SOC2, GDPR, or HIPAA by auditing technical and
                                                                procedural security controls.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Tabletop Exercises</h3>
                                                            <p>Conduct scenario-based tabletop drills to assess incident
                                                                response capabilities, improve decision-making, and align
                                                                teams with security playbooks.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>AI-Powered Deepfake Testing</h3>
                                                            <p>Identify organizational vulnerabilities to AI-generated
                                                                deepfakes by simulating voice and video-based impersonation
                                                                for fraud, manipulation, or breaches.</p>
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
                        <a href="#significance1" class="acc__title active">Application Security Testing</a>
                        <div class="acc__panel" style="display:block" id="significance1">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider16" class="owl-carousel owl-theme">

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Web Application Penetration Testing is the process of identifying,
                                                exploiting, and reporting security vulnerabilities in web apps to prevent
                                                real-world attacks.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Mobile App Security Testing</h3>
                                            <p>Mobile App Security Testing involves analyzing mobile applications to
                                                identify security flaws, data leaks, and vulnerabilities across Android and
                                                iOS platforms.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>API Security Testing</h3>
                                            <p>API Security Testing ensures APIs are protected against vulnerabilities by
                                                identifying flaws like authentication issues, data exposure, and injection
                                                attacks.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Thick Client/Desktop App Testing</h3>
                                            <p>Thick Client/Desktop App Testing involves assessing security risks in desktop
                                                applications, focusing on data storage, authentication, and client-server
                                                communication vulnerabilities.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Cloud-Native App Testing</h3>
                                            <p>Cloud-Native App Testing evaluates the security of applications built for
                                                cloud environments, focusing on containers, microservices, APIs, and cloud
                                                configurations.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Smart Contract Audits</h3>
                                            <p>Smart Contract Audits involve reviewing blockchain-based code to identify
                                                vulnerabilities, logic errors, and security risks before deployment on
                                                decentralized platforms.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>DApp Security Testing</h3>
                                            <p>DApp Security Testing assesses decentralized applications for vulnerabilities
                                                in smart contracts, blockchain interactions, authentication, and data
                                                integrity across distributed networks.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>SAST + DAST</h3>
                                            <p>SAST + DAST combines static and dynamic analysis to identify security
                                                vulnerabilities in source code and runtime behavior of applications during
                                                development.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>CI/CD Pipeline Security Testing</h3>
                                            <p>CI/CD Pipeline Security Testing evaluates automated build and deployment
                                                workflows to detect vulnerabilities, misconfigurations, and insecure
                                                integrations in DevOps environments.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Zero-Day Vulnerability Exploitation Testing</h3>
                                            <p>Zero-Day Vulnerability Exploitation Testing simulates attacks using unknown
                                                vulnerabilities to assess an organization’s ability to detect, prevent, and
                                                respond to emerging threats.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
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
                        <a href="#significance2" class="acc__title">Network Security Testing </a>
                        <div class="acc__panel" id="significance2">
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider12" class="owl-carousel owl-theme">

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>External/Internal Network Pentesting</h3>
                                            <p>External/Internal Network Penetration Testing identifies vulnerabilities in
                                                network infrastructure by simulating real-world attacks from both outside
                                                and inside the organization.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Security Testing</h3>
                                            <p>Wireless Security Testing evaluates Wi-Fi networks for vulnerabilities such
                                                as weak encryption, rogue access points, and unauthorized access to ensure
                                                secure communication.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Cloud Infrastructure Testing</h3>
                                            <p>Cloud Infrastructure Testing assesses cloud environments for
                                                misconfigurations, access control flaws, and vulnerabilities to ensure
                                                secure deployment and management of resources.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>VPN & Remote Work Security Testing</h3>
                                            <p>VPN & Remote Work Security Testing evaluates remote access solutions for
                                                vulnerabilities, misconfigurations, and data exposure risks to ensure secure
                                                remote connectivity.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>IoT/OT Network Testing</h3>
                                            <p>IoT/OT Network Testing identifies security vulnerabilities in Internet of
                                                Things and Operational Technology networks, focusing on device
                                                communication, protocols, and access controls.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Blockchain Node Testing</h3>
                                            <p>Blockchain Node Testing assesses the security and integrity of blockchain
                                                nodes, focusing on configuration, consensus mechanisms, data validation, and
                                                network communication.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>5G Network Security Testing</h3>
                                            <p>5G Network Security Testing evaluates 5G infrastructure for vulnerabilities
                                                in protocols, slicing, authentication, and data transmission to ensure
                                                secure connectivity and performance.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Red Team Exercises</h3>
                                            <p>Red Team Exercises simulate real-world cyberattacks to test an organization’s
                                                detection, response, and defense capabilities across systems, networks, and
                                                employees.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>PCI DSS Network Compliance Testing</h3>
                                            <p>PCI DSS Network Compliance Testing assesses network security controls to
                                                ensure compliance with PCI standards for protecting cardholder data and
                                                preventing breaches.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Zero Trust Architecture (ZTA) Assessments</h3>
                                            <p>Zero Trust Architecture (ZTA) Assessments evaluate security frameworks that
                                                enforce strict identity verification and least privilege access across
                                                users, devices, and applications.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
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
                        <a href="#significance3" class="acc__title">Database Security Testing</a>
                        <div class="acc__panel" id="significance3">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider13" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>SQL Injection & NoSQL Testing</h3>
                                            <p>SQL Injection & NoSQL Testing identifies injection vulnerabilities in
                                                traditional and NoSQL databases to prevent unauthorized data access,
                                                manipulation, and breaches.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Database Misconfiguration Reviews</h3>
                                            <p>Database Misconfiguration Reviews assess database settings to identify weak
                                                permissions, default credentials, and insecure configurations that could
                                                lead to data breaches.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Data Encryption Testing</h3>
                                            <p>Data Encryption Testing evaluates encryption methods used for data at rest
                                                and in transit to ensure confidentiality, integrity, and compliance with
                                                security standards.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Big Data Security Testing</h3>
                                            <p>Big Data Security Testing examines large-scale data systems for
                                                vulnerabilities in storage, processing, access controls, and data leakage
                                                risks across distributed environments.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Active Directory (AD) Exploitation Testing</h3>
                                            <p>Active Directory (AD) Exploitation Testing identifies security weaknesses in
                                                AD configurations, permissions, and trust relationships to prevent privilege
                                                escalation and lateral movement.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Blockchain Storage Testing</h3>
                                            <p>Blockchain Storage Testing evaluates the security of on-chain and off-chain
                                                data storage to prevent tampering, unauthorized access, and data integrity
                                                issues.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Data Masking & Anonymization Testing</h3>
                                            <p>Data Masking & Anonymization Testing assesses techniques used to protect
                                                sensitive data by replacing or obfuscating identifiers while preserving
                                                usability and compliance.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Database Audit Logging & Monitoring Tests</h3>
                                            <p>Database Audit Logging & Monitoring Tests verify the effectiveness of logging
                                                mechanisms to track access, detect anomalies, and ensure compliance with
                                                data security policies.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Cloud Database Testing</h3>
                                            <p>Cloud Database Testing evaluates cloud-hosted databases for vulnerabilities,
                                                access control flaws, encryption, and configuration issues to ensure data
                                                security and compliance.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Data Exfiltration Simulation</h3>
                                            <p>Data Exfiltration Simulation mimics unauthorized data extraction techniques
                                                to assess an organization’s ability to detect, prevent, and respond to data
                                                breaches.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Dark Web OSINT: Automate Threat Monitoring</h3>
                                            <p>Dark Web OSINT: Automate Threat Monitoring uses open-source intelligence
                                                tools to continuously monitor dark web sources for leaked data, threats, and
                                                credentials.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
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
                        <a href="#significance4" class="acc__title">Server & Storage Security Testing.</a>
                        <div class="acc__panel" id="significance4">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider14" class="owl-carousel owl-theme">

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>OS Hardening Assessments</h3>
                                            <p>Evaluate operating systems for weak configurations, unnecessary services,
                                                missing patches, and privilege escalation to strengthen endpoint-level cyber
                                                defenses.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Container Security Testing</h3>
                                            <p>Test container images, configurations, and Kubernetes environments to detect
                                                vulnerabilities, exposed APIs, and insecure runtime or permission settings.
                                            </p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Cloud VM Pentesting</h3>
                                            <p>Perform penetration testing on cloud virtual machines to uncover
                                                misconfigurations, exposed services, insecure access keys, and privilege
                                                escalation risks.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>SAN/NAS Storage Testing</h3>
                                            <p>Assess SAN/NAS systems for data exposure, weak credentials, encryption flaws,
                                                firmware vulnerabilities, and unauthorized access or privilege escalation
                                                risks.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Serverless Security Testing</h3>
                                            <p>Test cloud-native serverless apps for insecure triggers, misconfigured roles,
                                                privilege abuse, and event injection vulnerabilities affecting cloud
                                                functions.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Hypervisor & Virtualization Testing</h3>
                                            <p>Evaluate hypervisors for breakout attacks, insecure configurations, weak
                                                inter-VM isolation, and exposed management interfaces in virtualized
                                                infrastructure.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Blockchain Validator Node Security</h3>
                                            <p>Audit validator nodes for key exposure, consensus manipulation, DDoS attack
                                                vectors, and insecure APIs within blockchain infrastructure environments.
                                            </p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Backup Storage Security Testing</h3>
                                            <p>Check backup storage for improper access controls, outdated software,
                                                encryption failures, and vulnerabilities exploitable by ransomware or
                                                insider threats.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Firmware Security Testing</h3>
                                            <p>Analyze firmware for backdoors, hardcoded credentials, outdated modules,
                                                insecure update mechanisms, and vulnerabilities exploitable at the hardware
                                                layer.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Email Server Testing</h3>
                                            <p>Test mail servers for spoofing, open relays, weak authentication, vulnerable
                                                mail protocols, and exposure to phishing or spam attacks.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
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
                        <a href="#significance5" class="acc__title">People & Process Security Testing</a>
                        <div class="acc__panel" id="significance5">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider15" class="owl-carousel owl-theme">

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Phishing Simulation & Awareness Training</h3>
                                            <p>Simulate phishing attacks to evaluate employee response and improve security
                                                awareness, reducing organizational exposure to social engineering threats.
                                            </p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Red Team Exercises</h3>
                                            <p>Simulate real-world attacks across infrastructure, applications, and users to
                                                identify security gaps and validate defensive response effectiveness.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Insider Threat Simulations</h3>
                                            <p>Test organizational resilience against insider threats by simulating
                                                privileged misuse, sabotage, data exfiltration, and policy circumvention
                                                scenarios.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>IAM & MFA Bypass Testing</h3>
                                            <p>Assess identity and access management systems for vulnerabilities that allow
                                                bypassing MFA, privilege abuse, and unauthorized access escalation
                                                techniques.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Process Bypass Testing</h3>
                                            <p>Test business workflows, security operations, and policy enforcement
                                                mechanisms for weaknesses exploitable by attackers or malicious insiders.
                                            </p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Crypto Social Engineering Tests</h3>
                                            <p>Evaluate human-layer risks in crypto platforms using phishing, impersonation,
                                                and manipulation to access wallets, private keys, or assets.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>DAO Governance Attack Simulations</h3>
                                            <p>Simulate governance manipulation attacks in DAOs to identify vulnerabilities
                                                in smart contracts, quorum logic, and decision-making processes.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Compliance Testing</h3>
                                            <p>Validate cybersecurity posture against frameworks like ISO 27001, SOC2, GDPR,
                                                or HIPAA by auditing technical and procedural security controls.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Tabletop Exercises</h3>
                                            <p>Conduct scenario-based tabletop drills to assess incident response
                                                capabilities, improve decision-making, and align teams with security
                                                playbooks.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>AI-Powered Deepfake Testing</h3>
                                            <p>Identify organizational vulnerabilities to AI-generated deepfakes by
                                                simulating voice and video-based impersonation for fraud, manipulation, or
                                                breaches.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
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
                                        <div class="cn-hover-img">
                                            <img src="{{ asset('assets/images/vapt-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Advanced penetration testing identifies security gaps by simulating
                                                sophisticated cyberattacks across networks, web apps, mobile platforms,
                                                APIs, and cloud infrastructure to prevent breaches before they occur and
                                                enhance cyber resilience effectively.</p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed" style="display: block; text-decoration: none;">
                                            <h3>Advanced Penetration Testing (Network, Web, Mobile, API, Cloud)</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img">
                                            <img src="{{ asset('assets/images/security-audit-compliance.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Red teaming simulates multi-layered attacks using real-world tactics to test
                                                your organization's detection, prevention, and incident response
                                                capabilities—ensuring your defenses can withstand persistent threats and
                                                advanced adversarial techniques.</p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed" style="display: block; text-decoration: none;">
                                            <h3>Red Teaming (Full-Scope Attack Simulation)</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img">
                                            <img src="{{ asset('assets/images/managed-it-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Purple teaming bridges the gap between offensive and defensive teams by
                                                fostering collaboration during simulated attacks, improving threat
                                                visibility, detection rules, response playbooks, and overall cybersecurity
                                                defense effectiveness.</p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed" style="display: block; text-decoration: none;">
                                            <h3>Purple Teaming (Collaborative Attack-Defense Drills)</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img">
                                            <img src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Cloud-native pentesting evaluates AWS, Azure, GCP, and Kubernetes platforms
                                                for misconfigurations, identity issues, privilege escalations, and insecure
                                                APIs—ensuring your cloud deployments meet security and compliance best
                                                practices.</p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed" style="display: block; text-decoration: none;">
                                            <h3>Cloud-Native Pentesting (AWS, Azure, GCP, Kubernetes)</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img">
                                            <img src="{{ asset('assets/images/soc-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>IoT and OT security assessments target embedded devices and industrial
                                                systems using firmware reverse engineering, protocol fuzzing, and hardware
                                                exploitation to identify vulnerabilities in smart factories, SCADA, and
                                                connected infrastructure.</p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed" style="display: block; text-decoration: none;">
                                            <h3>IoT & OT Security Hacking (Smart Devices, Industrial Systems)</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img">
                                            <img src="{{ asset('assets/images/vapt-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Wireless and RFID testing uncovers weaknesses in Wi-Fi, Bluetooth, and NFC
                                                environments by simulating proximity-based attacks to prevent unauthorized
                                                access, data leaks, and man-in-the-middle vulnerabilities in physical
                                                networks.</p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed" style="display: block; text-decoration: none;">
                                            <h3>Wireless & RFID Security Testing (Wi-Fi, Bluetooth, NFC)</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img">
                                            <img src="{{ asset('assets/images/security-audit-compliance.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Simulates social engineering attacks including phishing, vishing, baiting,
                                                and tailgating to test human susceptibility and evaluate how employees
                                                respond to manipulation attempts, helping improve organizational security
                                                awareness.</p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed" style="display: block; text-decoration: none;">
                                            <h3>Social Engineering & Phishing Simulations</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img">
                                            <img src="{{ asset('assets/images/managed-it-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>API and microservices testing identifies issues like broken object level
                                                authorization, data exposure, rate limiting flaws, and input tampering to
                                                secure communication between microservices and external applications
                                                effectively.</p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed" style="display: block; text-decoration: none;">
                                            <h3>API & Microservices Security Testing</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img">
                                            <img src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Zero-day vulnerability research involves discovering unknown software flaws
                                                that could be exploited by attackers, responsibly reporting them, and
                                                contributing to improved patch management and secure product development
                                                cycles.</p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed" style="display: block; text-decoration: none;">
                                            <h3>Zero-Day Vulnerability Research (For Critical Systems)</h3>
                                            Know more <i class="fa">&#xf054;</i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item11">
                                <div class="empower-industry-box">
                                    <div class="cn-hover-box">
                                        <div class="cn-hover-img">
                                            <img src="{{ asset('assets/images/soc-services.webp') }}">
                                        </div>
                                        <div class="cn-content">
                                            <p>Bug bounty programs encourage ethical hackers to discover and report
                                                vulnerabilities through managed disclosure channels, helping organizations
                                                reduce risk and improve product security posture with real-world feedback.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cn-main-content">
                                        <a href="javascript:void(0)" class="cn-main-content-enclosed" style="display: block; text-decoration: none;">
                                            <h3>Bug Bounty Program Management</h3>
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
                <div id="mhome-slider17" class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img">
                                    <img src="{{ asset('assets/images/vapt-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Advanced penetration testing identifies security gaps by simulating sophisticated
                                        cyberattacks across networks, web apps, mobile platforms, APIs, and cloud
                                        infrastructure to prevent breaches before they occur and enhance cyber resilience
                                        effectively.</p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed">
                                    <h3>Advanced Penetration Testing (Network, Web, Mobile, API, Cloud)</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img">
                                    <img src="{{ asset('assets/images/security-audit-compliance.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Red teaming simulates multi-layered attacks using real-world tactics to test your
                                        organization's detection, prevention, and incident response capabilities—ensuring
                                        your defenses can withstand persistent threats and advanced adversarial techniques.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed">
                                    <h3>Red Teaming (Full-Scope Attack Simulation)</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img">
                                    <img src="{{ asset('assets/images/managed-it-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Purple teaming bridges the gap between offensive and defensive teams by fostering
                                        collaboration during simulated attacks, improving threat visibility, detection
                                        rules, response playbooks, and overall cybersecurity defense effectiveness.</p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed">
                                    <h3>Purple Teaming (Collaborative Attack-Defense Drills)</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img">
                                    <img src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Cloud-native pentesting evaluates AWS, Azure, GCP, and Kubernetes platforms for
                                        misconfigurations, identity issues, privilege escalations, and insecure
                                        APIs—ensuring your cloud deployments meet security and compliance best practices.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed">
                                    <h3>Cloud-Native Pentesting (AWS, Azure, GCP, Kubernetes)</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img">
                                    <img src="{{ asset('assets/images/soc-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>IoT and OT security assessments target embedded devices and industrial systems using
                                        firmware reverse engineering, protocol fuzzing, and hardware exploitation to
                                        identify vulnerabilities in smart factories, SCADA, and connected infrastructure.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed">
                                    <h3>IoT & OT Security Hacking (Smart Devices, Industrial Systems)</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img">
                                    <img src="{{ asset('assets/images/vapt-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Wireless and RFID testing uncovers weaknesses in Wi-Fi, Bluetooth, and NFC
                                        environments by simulating proximity-based attacks to prevent unauthorized access,
                                        data leaks, and man-in-the-middle vulnerabilities in physical networks.</p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed">
                                    <h3>Wireless & RFID Security Testing (Wi-Fi, Bluetooth, NFC)</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img">
                                    <img src="{{ asset('assets/images/security-audit-compliance.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Simulates social engineering attacks including phishing, vishing, baiting, and
                                        tailgating to test human susceptibility and evaluate how employees respond to
                                        manipulation attempts, helping improve organizational security awareness.</p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed">
                                    <h3>Social Engineering & Phishing Simulations</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img">
                                    <img src="{{ asset('assets/images/managed-it-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>API and microservices testing identifies issues like broken object level
                                        authorization, data exposure, rate limiting flaws, and input tampering to secure
                                        communication between microservices and external applications effectively.</p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed">
                                    <h3>API & Microservices Security Testing</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img">
                                    <img src="{{ asset('assets/images/forensic-seervices.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Zero-day vulnerability research involves discovering unknown software flaws that
                                        could be exploited by attackers, responsibly reporting them, and contributing to
                                        improved patch management and secure product development cycles.</p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed">
                                    <h3>Zero-Day Vulnerability Research (For Critical Systems)</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img">
                                    <img src="{{ asset('assets/images/soc-services.webp') }}">
                                </div>
                                <div class="cn-content">
                                    <p>Bug bounty programs encourage ethical hackers to discover and report vulnerabilities
                                        through managed disclosure channels, helping organizations reduce risk and improve
                                        product security posture with real-world feedback.</p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <a href="javascript:void(0)" class="cn-main-content-enclosed">
                                    <h3>Bug Bounty Program Management</h3>
                                    Know more <i class="fa">&#xf054;</i>
                                </a>
                            </div>
                        </div>
                    </div>

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
                            <li><a class="scr-tabs" href="#tab1">Governance, Risk & Compliance (GRC) Services</a></li>
                            <li><a class="scr-tabs" href="#tab2">Data Privacy & Protection Services</a></li>
                            <li><a class="scr-tabs" href="#tab3">Strategic Risk Assessment & Management </a></li>
                            <li><a class="scr-tabs" href="#tab4">Emerging Tech & Web3.0 Security</a></li>
                            <li><a class="scr-tabs" href="#tab5">Industry-Specific Compliance & Advisory </a></li>
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
                                                            <h3>ISO 27001:2022 Implementation & Certification</h3>
                                                            <p>Implements and certifies ISO 27001:2022 for establishing an
                                                                effective ISMS to protect organizational data and ensure
                                                                regulatory compliance.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>NIST CSF (Cybersecurity Framework) Alignment</h3>
                                                            <p>Aligns cybersecurity policies and practices with the NIST CSF
                                                                to manage, detect, and respond to security risks
                                                                effectively.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>DPDPA 2023 (India Data Privacy Law) Compliance Advisory</h3>
                                                            <p>Guides businesses in complying with India’s DPDPA 2023 law
                                                                through risk assessments, policy implementation, and privacy
                                                                management frameworks.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR, CCPA, HIPAA Compliance Audits</h3>
                                                            <p>Performs audits to ensure data protection laws like GDPR,
                                                                CCPA, and HIPAA are followed across systems and business
                                                                processes.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>PCI DSS Compliance for Payment Gateways & FinTech</h3>
                                                            <p>Ensures secure handling of cardholder data in FinTech and
                                                                eCommerce platforms through PCI DSS implementation and audit
                                                                support.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>SOC 2 (Type 1 & Type 2) Audits</h3>
                                                            <p>Assists with SOC 2 audits to evaluate and report on internal
                                                                controls for security, availability, confidentiality, and
                                                                integrity.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>RBI Cyber Security Framework Audit</h3>
                                                            <p>Conducts RBI-mandated audits to ensure banking institutions
                                                                meet cybersecurity standards for risk, governance, and
                                                                incident response.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>SEBI Cyber Resilience Audit</h3>
                                                            <p>Assesses SEBI cyber resilience compliance for brokers and
                                                                exchanges to ensure operational continuity and regulatory
                                                                cyber defense readiness.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Third-Party Risk Management (TPRM) for Vendors</h3>
                                                            <p>Implements TPRM frameworks to identify, assess, and mitigate
                                                                cybersecurity and compliance risks arising from external
                                                                vendors and partners.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Fraud Risk Assessment & Forensic Audits</h3>
                                                            <p>Detects fraud risks and conducts forensic audits to
                                                                investigate financial irregularities, internal threats, and
                                                                compliance breaches.</p>
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
                                                            <h3>India DPDPA 2023 Readiness Assessment & Implementation</h3>
                                                            <p>Helps organizations assess readiness and implement frameworks
                                                                for India’s DPDPA 2023 with policy, consent, and data
                                                                handling controls.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>GDPR Compliance Audit & Data Protection Officer (DPO)
                                                                Services</h3>
                                                            <p>Conducts GDPR audits and provides outsourced DPO services to
                                                                meet global data privacy requirements across EU and
                                                                international operations.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>ISO 27701 (PIMS) Certification</h3>
                                                            <p>Implements and certifies ISO 27701 to extend your ISMS with
                                                                privacy controls for personal data processing and
                                                                accountability management.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Data Protection Impact Assessment (DPIA)</h3>
                                                            <p>Conducts DPIA to identify and reduce data processing risks
                                                                for high-risk activities as mandated by GDPR and privacy
                                                                laws.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Cross-Border Data Transfer Compliance (India DPDPA vs. GDPR)
                                                            </h3>
                                                            <p>Ensures legal compliance for cross-border personal data flows
                                                                between jurisdictions by aligning with DPDPA, GDPR, SCCs,
                                                                and transfer mechanisms.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Consent Management & Privacy Policy Design</h3>
                                                            <p>Designs transparent privacy policies and robust consent
                                                                mechanisms to comply with legal requirements and build user
                                                                trust in data practices.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Data Discovery & Classification (PII, Sensitive Data
                                                                Mapping)</h3>
                                                            <p>Identifies and classifies sensitive data such as PII to
                                                                enable privacy controls, reduce risk, and enhance breach
                                                                preparedness.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Breach Response & Incident Management</h3>
                                                            <p>Establishes incident response plans and supports timely
                                                                breach notification and containment aligned with global
                                                                privacy regulations.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Employee Data Privacy Training</h3>
                                                            <p>Provides structured awareness training to employees on
                                                                privacy principles, regulatory requirements, and handling of
                                                                sensitive personal data securely.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>AI & Big Data Privacy Risk Assessment</h3>
                                                            <p>Evaluates AI and big data platforms for privacy risks, bias,
                                                                and transparency to ensure responsible data processing and
                                                                governance.</p>
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
                                                            <h3>Enterprise Risk Management (ERM) – ISO 31000</h3>
                                                            <p>Implements ERM aligned with ISO 31000 to identify, assess,
                                                                and treat enterprise-level strategic, operational, and cyber
                                                                risks.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Cyber Risk Quantification (CRQ) & Financial Impact Modeling
                                                            </h3>
                                                            <p>Uses CRQ models to translate cyber risks into financial
                                                                impact, supporting investment decisions and board-level
                                                                reporting.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>M&A Cybersecurity Due Diligence</h3>
                                                            <p>Assesses cybersecurity maturity, risks, and liabilities
                                                                during mergers or acquisitions to inform valuations and
                                                                reduce exposure.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Third-Party & Supply Chain Risk Management (TPRM)</h3>
                                                            <p>Identifies and mitigates risks from third-party vendors and
                                                                supply chains through continuous monitoring and contractual
                                                                controls.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Fraud Risk Assessment & Forensic Audits</h3>
                                                            <p>Conducts fraud risk assessments and forensic audits to
                                                                detect, investigate, and prevent insider threats and
                                                                financial frauds.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Digital Transformation Risk Advisory</h3>
                                                            <p>Advises on risk governance during digital transformation
                                                                initiatives by aligning IT modernization with enterprise
                                                                risk objectives.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Web3.0 & DeFi Risk Assessment</h3>
                                                            <p>Evaluates risks in Web3, blockchain, and DeFi environments
                                                                including smart contract vulnerabilities, token misuse, and
                                                                platform governance.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Regulatory Compliance Risk (India DPDPA, GDPR, SEBI, RBI)
                                                            </h3>
                                                            <p>Analyzes regulatory exposure and gaps to ensure compliance
                                                                with global and Indian data, financial, and cybersecurity
                                                                mandates.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Board-Level Cyber Risk Reporting (NIST CSF, ISO 27005)</h3>
                                                            <p>Enables boardroom risk communication by mapping threats and
                                                                metrics to frameworks like NIST CSF and ISO 27005.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Stress Testing & Cyber War-Gaming</h3>
                                                            <p>Simulates advanced threat scenarios to test organizational
                                                                resilience, response readiness, and decision-making under
                                                                pressure.</p>
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
                                                            <h3>Smart Contract Audit (Ethereum, Solana, Polygon)</h3>
                                                            <p>Performs static and dynamic analysis of smart contracts to
                                                                detect logic flaws, reentrancy, and gas inefficiencies
                                                                across top blockchain platforms.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>DeFi & Crypto Exchange Security Assessment</h3>
                                                            <p>Evaluates DeFi protocols and exchanges for exploits in smart
                                                                contracts, wallet integrations, liquidity pools, and access
                                                                controls.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Blockchain Node & Consensus Security Review</h3>
                                                            <p>Audits blockchain node configurations and consensus
                                                                mechanisms to prevent manipulation, replay attacks, and
                                                                Sybil-based vulnerabilities.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>NFT Fraud Detection & Smart Contract Risks</h3>
                                                            <p>Detects phishing, counterfeit NFTs, and contract-level
                                                                exploits that threaten digital ownership and trust in NFT
                                                                ecosystems.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Metaverse Security (Virtual Asset Protection)</h3>
                                                            <p>Secures user identity, transactions, and virtual assets in
                                                                immersive platforms through behavioral analytics and
                                                                cryptographic asset protection.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>AI Security & ISO 42001 Compliance</h3>
                                                            <p>Advises on securing AI systems against poisoning, model
                                                                theft, and bias while aligning with ISO 42001 AI governance
                                                                framework.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Post-Quantum Cryptography Readiness</h3>
                                                            <p>Assesses cryptographic systems for quantum threats and
                                                                prepares transition plans using NIST-recommended
                                                                post-quantum cryptographic algorithms.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>5G & IoT Security Audits</h3>
                                                            <p>Reviews 5G and IoT deployments for flaws in network slicing,
                                                                edge computing, and embedded device authentication
                                                                protocols.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Decentralized Identity (DID) Security</h3>
                                                            <p>Evaluates decentralized identity systems for tamper
                                                                resistance, verifiable credentials integrity, and compliance
                                                                with W3C DID standards.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Web3 Regulatory Compliance (FATF, India Crypto Laws)</h3>
                                                            <p>Advises Web3 projects on anti-money laundering (AML), KYC,
                                                                and data protection requirements across FATF and Indian
                                                                crypto guidelines.</p>
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
                                                            <h3>BFSI: RBI Guidelines, PCI DSS, SWIFT CSP Audit</h3>
                                                            <p>Ensures regulatory compliance for banks and NBFCs across RBI
                                                                circulars, PCI DSS mandates, and SWIFT customer security
                                                                program.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Healthcare: HIPAA & HITRUST CSF Compliance</h3>
                                                            <p>Implements HIPAA and HITRUST controls to protect patient data
                                                                and meet regulatory needs across healthcare providers and
                                                                platforms.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Insurance: IRDA ISNP Audit</h3>
                                                            <p>Conducts ISNP security audits for insurance portals as
                                                                mandated by IRDA to ensure secure digital policy servicing
                                                                environment.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Critical Infrastructure: ISO 27019 (Energy/Power)</h3>
                                                            <p>Implements ISO 27019 controls to secure information systems
                                                                in energy and power sectors against targeted cyber-physical
                                                                threats.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>E-Commerce: PA-DSS & Payment Gateway Security</h3>
                                                            <p>Secures online transactions and payment systems with PA-DSS
                                                                compliance, gateway hardening, and secure customer data
                                                                handling practices.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>IT/ITES: ISO 20000 (ITSM) & Cloud Compliance</h3>
                                                            <p>Aligns IT services and cloud operations with ISO 20000, ISO
                                                                27017, and SOC 2 for managed service environments.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>Government: UIDAI AUA/KUA, GST Suvidha Audit</h3>
                                                            <p>Audits UIDAI AUA/KUA and GSP platforms for Aadhaar security
                                                                compliance and robust GST Suvidha provider cybersecurity
                                                                posture.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Manufacturing: OT/ICS Security (IEC 62443)</h3>
                                                            <p>Implements industrial cybersecurity using IEC 62443 to
                                                                protect OT networks, SCADA systems, and PLCs in
                                                                manufacturing environments.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5 ">
                                                        <div class="tab-content-box">
                                                            <h3>Startups: Seed-Stage Security & Compliance Setup</h3>
                                                            <p>Helps early-stage startups establish foundational security,
                                                                basic compliance, and investor-readiness for scaling and
                                                                funding discussions.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itmes">
                                                    <div class="col-md-2 p5">
                                                        <div class="tab-content-box">
                                                            <h3>M&A Cybersecurity Due Diligence</h3>
                                                            <p>Assesses cybersecurity maturity, controls, and liabilities in
                                                                target companies to minimize risks during mergers or
                                                                acquisitions.</p>
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
                        <a href="#offer1" class="acc__title active">Governance, Risk & Compliance (GRC) Services</a>
                        <div class="acc__panel" style="display:block" id="offer1">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider2" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>ISO 27001:2022 Implementation & Certification</h3>
                                            <p>Implements and certifies ISO 27001:2022 for establishing an effective ISMS to
                                                protect organizational data and ensure regulatory compliance.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>NIST CSF (Cybersecurity Framework) Alignment</h3>
                                            <p>Aligns cybersecurity policies and practices with the NIST CSF to manage,
                                                detect, and respond to security risks effectively.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>DPDPA 2023 (India Data Privacy Law) Compliance Advisory</h3>
                                            <p>Guides businesses in complying with India’s DPDPA 2023 law through risk
                                                assessments, policy implementation, and privacy management frameworks.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>GDPR, CCPA, HIPAA Compliance Audits</h3>
                                            <p>Performs audits to ensure data protection laws like GDPR, CCPA, and HIPAA are
                                                followed across systems and business processes.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>PCI DSS Compliance for Payment Gateways & FinTech</h3>
                                            <p>Ensures secure handling of cardholder data in FinTech and eCommerce platforms
                                                through PCI DSS implementation and audit support.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>SOC 2 (Type 1 & Type 2) Audits</h3>
                                            <p>Assists with SOC 2 audits to evaluate and report on internal controls for
                                                security, availability, confidentiality, and integrity.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>RBI Cyber Security Framework Audit</h3>
                                            <p>Conducts RBI-mandated audits to ensure banking institutions meet
                                                cybersecurity standards for risk, governance, and incident response.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>SEBI Cyber Resilience Audit</h3>
                                            <p>Assesses SEBI cyber resilience compliance for brokers and exchanges to ensure
                                                operational continuity and regulatory cyber defense readiness.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Third-Party Risk Management (TPRM) for Vendors</h3>
                                            <p>Implements TPRM frameworks to identify, assess, and mitigate cybersecurity
                                                and compliance risks arising from external vendors and partners.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Fraud Risk Assessment & Forensic Audits</h3>
                                            <p>Detects fraud risks and conducts forensic audits to investigate financial
                                                irregularities, internal threats, and compliance breaches.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
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
                        <a href="#offer2" class="acc__title">Data Privacy & Protection Services</a>
                        <div class="acc__panel" id="offer2">
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider4" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>India DPDPA 2023 Readiness Assessment & Implementation</h3>
                                            <p>Helps organizations assess readiness and implement frameworks for India’s
                                                DPDPA 2023 with policy, consent, and data handling controls.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>GDPR Compliance Audit & Data Protection Officer (DPO) Services</h3>
                                            <p>Conducts GDPR audits and provides outsourced DPO services to meet global data
                                                privacy requirements across EU and international operations.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>ISO 27701 (PIMS) Certification</h3>
                                            <p>Implements and certifies ISO 27701 to extend your ISMS with privacy controls
                                                for personal data processing and accountability management.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Data Protection Impact Assessment (DPIA)</h3>
                                            <p>Conducts DPIA to identify and reduce data processing risks for high-risk
                                                activities as mandated by GDPR and privacy laws.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Cross-Border Data Transfer Compliance (India DPDPA vs. GDPR)</h3>
                                            <p>Ensures legal compliance for cross-border personal data flows between
                                                jurisdictions by aligning with DPDPA, GDPR, SCCs, and transfer mechanisms.
                                            </p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Consent Management & Privacy Policy Design</h3>
                                            <p>Designs transparent privacy policies and robust consent mechanisms to comply
                                                with legal requirements and build user trust in data practices.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Data Discovery & Classification (PII, Sensitive Data Mapping)</h3>
                                            <p>Identifies and classifies sensitive data such as PII to enable privacy
                                                controls, reduce risk, and enhance breach preparedness.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Breach Response & Incident Management</h3>
                                            <p>Establishes incident response plans and supports timely breach notification
                                                and containment aligned with global privacy regulations.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Employee Data Privacy Training</h3>
                                            <p>Provides structured awareness training to employees on privacy principles,
                                                regulatory requirements, and handling of sensitive personal data securely.
                                            </p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>AI & Big Data Privacy Risk Assessment</h3>
                                            <p>Evaluates AI and big data platforms for privacy risks, bias, and transparency
                                                to ensure responsible data processing and governance.</p>
                                            <div class="know-more">
                                                <a href="javascript:void(0)">Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="navigation-count3" class="count-nav-box"></div>
                            </div>

                            <a href="javascript:void(0)" class="close-acrodin">Close</a>
                        </div>
                    </div>
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#offer3" class="acc__title">Strategic Risk Assessment & Management</a>
                        <div class="acc__panel" id="offer3">
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider6" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Enterprise Risk Management (ERM) – ISO 31000</h3>
                                            <p>Implements ERM aligned with ISO 31000 to identify, assess, and treat
                                                enterprise-level strategic, operational, and cyber risks.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Cyber Risk Quantification (CRQ) & Financial Impact Modeling</h3>
                                            <p>Uses CRQ models to translate cyber risks into financial impact, supporting
                                                investment decisions and board-level reporting.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>M&A Cybersecurity Due Diligence</h3>
                                            <p>Assesses cybersecurity maturity, risks, and liabilities during mergers or
                                                acquisitions to inform valuations and reduce exposure.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Third-Party & Supply Chain Risk Management (TPRM)</h3>
                                            <p>Identifies and mitigates risks from third-party vendors and supply chains
                                                through continuous monitoring and contractual controls.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Fraud Risk Assessment & Forensic Audits</h3>
                                            <p>Conducts fraud risk assessments and forensic audits to detect, investigate,
                                                and prevent insider threats and financial frauds.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Digital Transformation Risk Advisory</h3>
                                            <p>Advises on risk governance during digital transformation initiatives by
                                                aligning IT modernization with enterprise risk objectives.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web3.0 & DeFi Risk Assessment</h3>
                                            <p>Evaluates risks in Web3, blockchain, and DeFi environments including smart
                                                contract vulnerabilities, token misuse, and platform governance.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Regulatory Compliance Risk (India DPDPA, GDPR, SEBI, RBI)</h3>
                                            <p>Analyzes regulatory exposure and gaps to ensure compliance with global and
                                                Indian data, financial, and cybersecurity mandates.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Board-Level Cyber Risk Reporting (NIST CSF, ISO 27005)</h3>
                                            <p>Enables boardroom risk communication by mapping threats and metrics to
                                                frameworks like NIST CSF and ISO 27005.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Stress Testing & Cyber War-Gaming</h3>
                                            <p>Simulates advanced threat scenarios to test organizational resilience,
                                                response readiness, and decision-making under pressure.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div id="navigation-count5" class="count-nav-box"></div>
                            </div>

                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>

                    <!-- box three end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#offer4" class="acc__title">Emerging Tech & Web3.0 Security</a>
                        <div class="acc__panel" id="offer4">
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider8" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Smart Contract Audit (Ethereum, Solana, Polygon)</h3>
                                            <p>Performs static and dynamic analysis of smart contracts to detect logic
                                                flaws, reentrancy, and gas inefficiencies across top blockchain platforms.
                                            </p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>DeFi & Crypto Exchange Security Assessment</h3>
                                            <p>Evaluates DeFi protocols and exchanges for exploits in smart contracts,
                                                wallet integrations, liquidity pools, and access controls.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Blockchain Node & Consensus Security Review</h3>
                                            <p>Audits blockchain node configurations and consensus mechanisms to prevent
                                                manipulation, replay attacks, and Sybil-based vulnerabilities.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>NFT Fraud Detection & Smart Contract Risks</h3>
                                            <p>Detects phishing, counterfeit NFTs, and contract-level exploits that threaten
                                                digital ownership and trust in NFT ecosystems.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Metaverse Security (Virtual Asset Protection)</h3>
                                            <p>Secures user identity, transactions, and virtual assets in immersive
                                                platforms through behavioral analytics and cryptographic asset protection.
                                            </p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>AI Security & ISO 42001 Compliance</h3>
                                            <p>Advises on securing AI systems against poisoning, model theft, and bias while
                                                aligning with ISO 42001 AI governance framework.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Post-Quantum Cryptography Readiness</h3>
                                            <p>Assesses cryptographic systems for quantum threats and prepares transition
                                                plans using NIST-recommended post-quantum cryptographic algorithms.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>5G & IoT Security Audits</h3>
                                            <p>Reviews 5G and IoT deployments for flaws in network slicing, edge computing,
                                                and embedded device authentication protocols.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Decentralized Identity (DID) Security</h3>
                                            <p>Evaluates decentralized identity systems for tamper resistance, verifiable
                                                credentials integrity, and compliance with W3C DID standards.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web3 Regulatory Compliance (FATF, India Crypto Laws)</h3>
                                            <p>Advises Web3 projects on anti-money laundering (AML), KYC, and data
                                                protection requirements across FATF and Indian crypto guidelines.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div id="navigation-count7" class="count-nav-box"></div>
                            </div>

                            <a href="javascript:void(0)" class="close-acrodin">Close</a>
                        </div>
                    </div>
                    <!-- box four end -->
                    <!-- box 5 end -->
                    <div class="acc__card">
                        <a href="#offer5" class="acc__title">Industry-Specific Compliance & Advisory</a>
                        <div class="acc__panel" id="offer5">
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider10" class="owl-carousel owl-theme">

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>BFSI: RBI Guidelines, PCI DSS, SWIFT CSP Audit</h3>
                                            <p>Ensures regulatory compliance for banks and NBFCs across RBI circulars, PCI
                                                DSS mandates, and SWIFT customer security program.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Healthcare: HIPAA & HITRUST CSF Compliance</h3>
                                            <p>Implements HIPAA and HITRUST controls to protect patient data and meet
                                                regulatory needs across healthcare providers and platforms.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Insurance: IRDA ISNP Audit</h3>
                                            <p>Conducts ISNP security audits for insurance portals as mandated by IRDA to
                                                ensure secure digital policy servicing environment.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Critical Infrastructure: ISO 27019 (Energy/Power)</h3>
                                            <p>Implements ISO 27019 controls to secure information systems in energy and
                                                power sectors against targeted cyber-physical threats.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>E-Commerce: PA-DSS & Payment Gateway Security</h3>
                                            <p>Secures online transactions and payment systems with PA-DSS compliance,
                                                gateway hardening, and secure customer data handling practices.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>IT/ITES: ISO 20000 (ITSM) & Cloud Compliance</h3>
                                            <p>Aligns IT services and cloud operations with ISO 20000, ISO 27017, and SOC 2
                                                for managed service environments.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Government: UIDAI AUA/KUA, GST Suvidha Audit</h3>
                                            <p>Audits UIDAI AUA/KUA and GSP platforms for Aadhaar security compliance and
                                                robust GST Suvidha provider cybersecurity posture.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Manufacturing: OT/ICS Security (IEC 62443)</h3>
                                            <p>Implements industrial cybersecurity using IEC 62443 to protect OT networks,
                                                SCADA systems, and PLCs in manufacturing environments.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Startups: Seed-Stage Security & Compliance Setup</h3>
                                            <p>Helps early-stage startups establish foundational security, basic compliance,
                                                and investor-readiness for scaling and funding discussions.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>M&A Cybersecurity Due Diligence</h3>
                                            <p>Assesses cybersecurity maturity, controls, and liabilities in target
                                                companies to minimize risks during mergers or acquisitions.</p>
                                            <div class="know-more"><a href="javascript:void(0)">Know More</a></div>
                                        </div>
                                    </div>

                                </div>
                                <div id="navigation-count9" class="count-nav-box"></div>
                            </div>
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
        <section class="mhspace mhspace00" id="mhome-div6" style="padding-top: 25px;background: #E5E8ED;">
            <div class="traing-banner desktop-view">
                <img src="{{ asset('assets/images/clients/banner.png') }}">
            </div>
            <!-- bg banner end -->
            <!-- bg banner start -->
            <div class="traing-banner mobile-view">
                <img src="{{ asset('assets/images/banner2image.jpg') }}">
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
                        <div class="item"> <img src="{{ asset('assets/images/clients/eccounsil2.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/clients/beingcert_logo.jpeg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="item"> <img src="{{ asset('assets/images/clients/pecb.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/clients/Quick-Heal.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="{{ asset('assets/images/clients/Sophos.jpg') }}" alt="Owl Image">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/clients/mcafee.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="{{ asset('assets/images/clients/Symantec.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="{{ asset('assets/images/clients/tenable.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="{{ asset('assets/images/clients/Kaspersky.png') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/clients/acunetix.png') }}" alt="Owl Image">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/clients/Seqrite_logo.png') }}" alt="Owl Image">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/clients/INSPIRA.png') }}" class="img-fluid"
                                alt="">
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
                                        <div class="ceh-testo-image"><img src="{{ asset('assets/images/vijay.png') }}"
                                                class="img-fluid" alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Vijay Pratap</h3>
                                                <span>Security Analyst</span>
                                            </div>
                                            <div class="ceh-testo-body">
                                                <p>As a Security Analyst overseeing the protection of financial systems,
                                                    I’ve worked with several VAPT providers, but this team truly stood out.
                                                    Their in-depth vulnerability assessment
                                                    and real-world penetration testing techniques revealed gaps that our
                                                    internal tools had overlooked.&nbsp;
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
                                        <div class="ceh-testo-image"><img
                                                src="{{ asset('assets/images/sudeep_pandey.jpg') }}" class="img-fluid"
                                                alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Sudeep Pandey</h3>
                                                <span>Chief Information Security Officer</span>
                                            </div>
                                            <div class="ceh-testo-body">
                                                <p>As a CISO responsible for safeguarding sensitive healthcare data,
                                                    finding a trusted VAPT partner is critical. The team’s work exceeded all
                                                    expectations.&nbsp;
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
                                        <div class="ceh-testo-image"><img src="{{ asset('assets/images/Dhruv.jpg') }}"
                                                class="img-fluid" alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Dhruv</h3>
                                                <span>Security Analyst</span>
                                            </div>
                                            <div class="ceh-testo-body">
                                                <p>As a Security Analyst overseeing the protection of financial systems,
                                                    I’ve worked with several VAPT providers, but this team truly stood
                                                    out.&nbsp;
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
                                        <div class="ceh-testo-image"><img src="{{ asset('assets/images/deepak.jpg') }}"
                                                class="img-fluid" alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Deepak</h3>
                                                <span>Penetration Testing Lead</span>
                                            </div>
                                            <div class="ceh-testo-body">
                                                <p>Leading the internal red team for our e-commerce platform means I'm
                                                    constantly
                                                    testing our defenses—but an external VAPT audit offers a fresh, unbiased
                                                    perspective.&nbsp;
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
                    <a href="{{ route('testimonials') }}">View all</a>
                </div>
            </div>
        </section>

        <!-- resources/views/mobile-components/m-testimonials.blade.php  -->
        @include('frontend.layouts.mobile-components.m-testimonials')

        <!-- Our Customers end -->
        <section class="core-domain-section-blog mhspace mhspace1" id="mhome-div11">
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
        <!-- Place this just after your main header in index.blade.php -->
        <div id="home_float_head" class="desktop-view">
            <section class="services-menu">
                <div id="floating-sub-header" style="display:none;">
                    <!-- Your floating header content here -->
                    <div class="row body_container">
                        <div class="col-md-12 text-center">
                            <ul id="sticky-control" class="anchor-nav">
                                <li><a href="#mhome-div2" class="sticky_link">VAPT Services</a></li>
                                <li><a href="#mhome-div4" class="sticky_link">Governance, Risk & Compliance</a></li>
                                <li><a href="#mhome-div4-1" class="sticky_link">Managed SOC and Cyber Forensics</a></li>
                                <li><a href="#mhome-div6" class="sticky_link">CN Education</a></li>
                                <li><a href="#mhome-div11" class="sticky_link">CN Insight</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <style>
            /* Adjust the top value to the height of your main header */
            #floating-sub-header {
                position: fixed;
                top: 60px;
                /* Change this to your main header's height */
                left: 0;
                width: 100%;
                z-index: 995;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
                transition: top 0.3s;
                background-color: #cbdef1;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Cg fill='%23ffffff' fill-opacity='0.17'%3E%3Cpath fill-rule='evenodd' d='M0 0h4v4H0V0zm4 4h4v4H4V4z'/%3E%3C/g%3E%3C/svg%3E");
            }

            .floating-header-nav {
                padding: 16px;
                text-align: center;
                font-weight: bold;
            }
        </style>
    </body>
@endsection

@push('scripts')
    <!-- Jquery code -->
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common.js?v-1') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/homepage.js?v14') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mobile-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js?v=32') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var floatingHeader = document.getElementById('floating-sub-header');
            var targetSection = document.getElementById('mhome-div2');
            var mainHeader = document.querySelector('header'); // Adjust selector if needed

            function checkSectionInView() {
                var rect = targetSection.getBoundingClientRect();
                var mainHeaderHeight = mainHeader ? mainHeader.offsetHeight : 0;
                var floatingHeaderHeight = floatingHeader ? floatingHeader.offsetHeight : 0;
                // Show header if top of section is less than or equal to (mainHeaderHeight + floatingHeaderHeight)
                if (rect.top <= (mainHeaderHeight + floatingHeaderHeight)) {
                    floatingHeader.style.display = 'block';
                } else {
                    floatingHeader.style.display = 'none';
                }
            }

            // Run once to get correct floatingHeaderHeight after DOM is ready
            setTimeout(checkSectionInView, 100);
            window.addEventListener('scroll', checkSectionInView);
            window.addEventListener('resize', checkSectionInView);
        });
    </script>
    <script>
        $(document).ready(function () {
            $(document).on("scroll", onScroll);

            //smoothscroll
            $('.sticky_link').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");

                $('a').each(function () {
                    $(this).removeClass('sapme_active');
                })
                $(this).addClass('sapme_active');

                var target = this.hash,
                    menu = target;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 120
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });
    </script>
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
        scrollToFirstElement("scr-tabs", 140);
        scrollToFirstElement("scr-tabs1", 140);
        scrollToFirstElement("scr-tabs3", 140);
        scrollToFirstElement("scr-tabs_4", 140);
        scrollToFirstElement("industry-slider", 110);
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