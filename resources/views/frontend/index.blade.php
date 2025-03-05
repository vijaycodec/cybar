@extends('frontend.layouts.app')

@section('title', 'Home | Cyber Security Industry Solutions')

<style>
    .cn-hover-box:hover .cn-content.height {
        height: 0px;
        display: block;
    }
</style>
{{-- <title>Cyber Security Industry Solutions Services Training in Delhi,NCR</title> --}}
{{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

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
                    poster="../content/dam/www/marketing/images/banners/solutions-insights-grow-2.jpg">
                    <source src="{{ asset('assets/video/solutions-webbg-grow-v1-small.mp4') }}" type="video/mp4">
                    {{-- <source src="{{ asset('assets/video/solutions-webbg-grow-v1-small.mp4') }}" type="video/webm"> --}}
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
                                <a href="#">
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
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/vapt-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Services to ensure the Integrity of Information Systems, Softwares & Applications,
                                        block
                                        illegal access and protect organizations against data theft, productivity loss and
                                        fraud.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                <p>Services to ensure the Integrity of Information Systems, Softwares & Applications, block
                                    illegal
                                    access and protect organizations against data theft, productivity loss and fraud.
                                </p>
                                <a href="https://www.cybarwind.com/new-demo/asaraf/codec/second-level.php">Know more <i
                                        class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/forensic-seervices.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                        cybercrime /
                                        online fraud and proactively manage 24x7 hours security risks.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                <p>Identify and resolve Ecrime incidents that adversely impact organizations with cybercrime
                                    /
                                    online fraud and proactively manage 24x7 hours security risks.
                                </p>
                                <a href="https://www.cybarwind.com/new-demo/asaraf/codec/AIML.php">Know more <i
                                        class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/soc-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat mitigation.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>SOC (Security Operation Center) as a Service</h3>
                                <p>Provides round-the-clock proactive event monitoring with prioritized alert notification &
                                    threat
                                    mitigation.
                                </p>
                                <a href="https://www.cybarwind.com/new-demo/cns/sample1.php">Know more <i
                                        class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- empower industry end -->
        <!--Offering start -->
        <section class="Offering-bg1 home-sec mhspace" id="mhome-div2">
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
                            <li><a href="#tab11">Vulnerability Assesement & Penetration Testing</a></li>
                            <li><a href="#tab12">IT Security Audit, Risk & Compliance</a></li>
                            <li><a href="#tab13">Managed IT Security Solutions </a></li>
                            <li><a href="#tab14">Digital Forensic & Cyber Fraud Management </a></li>
                            <li><a href="#tab15">SOC (Security Operation Center) as a Service </a></li>
                        </ul>
                        <!-- END tabs-nav -->
                        <div id="tabs-content">
                            <div id="tab11" class="tab-content1">
                                <div class="container mobilewidth">
                                    <div class="row">
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Network Architecture Design Review</h3>
                                                <p>Security focused evaluation of your network-based computing environment,
                                                    from both
                                                    an architecture and operational perspective.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Network Infrastructure Penetration Testing</h3>
                                                <p>Identifies and exploits network infrastructure vulnerabilities and
                                                    validate result
                                                    with efficiently evaluate a security posture.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Web Application Penetration Testing</h3>
                                                <p>Our comprehensive security assessment framework focuses to evaluate and
                                                    analyse
                                                    existing vulnerabilities for web-based applications.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Wireless Network Penetration Testing</h3>
                                                <p>We simulates real-world attacks to provide a real time assessment of
                                                    vulnerabilities
                                                    and threats to your wireless network infrastructure.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Mobile Application Penetration Testing</h3>
                                                <p>We go beyond looking at API and web vulnerabilities to examine the risk
                                                    of the
                                                    application on a mobile platform.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Source Code Review</h3>
                                                <p>Identifies and locate security risk and misconfigurations that have been
                                                    ignored
                                                    during SDLC process and can help invaders to abstract key information.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab12" class="tab-content1">
                                <div class="container mobilewidth">
                                    <div class="row">
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>IT Risk, Compliance & Governance</h3>
                                                <p>We evaluate current IT governance, risk management and compliance
                                                    structures for
                                                    process maturity and design Effectiveness.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Information Security Management Systems</h3>
                                                <p>We demonstrate business is compliant and is taking all necessary measures
                                                    to secure
                                                    IT information in compliance with the ISO 27001 (ISMS) standard.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>GDPR & Data Privacy</h3>
                                                <p>Our deep portfolio enables businesses to reduce the time, cost and
                                                    complexity of
                                                    responding to various international data privacy mandates like GDPR.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Information Technology Service Management</h3>
                                                <p>Our experts ensure the right processes, people and technology are in
                                                    place to meet
                                                    business respective goals in agreement with industry standards like ISO
                                                    20000
                                                    (ITSMS) and ISO 22301 (BCMS).
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Incidence & Emergency Response Services</h3>
                                                <p>Our key offerings involve and improve incident response preparedness plan
                                                    and
                                                    minimize the impact of breaches with latest threat intelligence
                                                    mechanism.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab13" class="tab-content1">
                                <div class="container mobilewidth">
                                    <div class="row">
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Firewall Management and Implementation</h3>
                                                <p>Our Managed Firewall/UTM solution provides monitoring, administration &
                                                    maintenance
                                                    of gateway level security along with policy supervision, upgrades and
                                                    patch
                                                    deployment.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Endpoint Security Protection</h3>
                                                <p>We offers a wide range of EPS solutions which integrates new and
                                                    innovative
                                                    technologies / features to protect endpoints from today’s advanced
                                                    threats.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Data Leakage Protection Management</h3>
                                                <p>Our Data Loss Prevention (DLP) comes with Unique capture technology to
                                                    safeguards
                                                    intellectual property and protect sensitive data in-line with
                                                    compliance.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Data Encryption Solution</h3>
                                                <p>Our Data Encryption solution help businesses looking to bolster their
                                                    data security,
                                                    increase customer confidence and ensure compliance with data protection
                                                    laws.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Mobile Device & BYOD Security Management</h3>
                                                <p>Our Mobile Device Management (MDM) Solutions allows business to secure
                                                    and manage
                                                    employee-owned (BYOD) and company-owned devices to drive effective team
                                                    conversations.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Secure Web Gateway Solution</h3>
                                                <p>We provides an intuitive solution that filters unwanted software and
                                                    malware from
                                                    user-initiated Web/Internet traffic and enforces corporate and
                                                    regulatory policy
                                                    compliance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab14" class="tab-content1">
                                <div class="container mobilewidth">
                                    <div class="row">
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Malware Analysis & Investigation</h3>
                                                <p>Our comprehensive approach for malware analysis gains an deeper
                                                    understanding of
                                                    malware functions to protect business IT Infrastructure.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Cyber Fraud Forensic Investigation</h3>
                                                <p>Our key services help businesses to traces financial trails and key data
                                                    from
                                                    thousands of documents to identify the fraudsters.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Email Fraud Forensic Investigation</h3>
                                                <p>Our digital forensic examiners investigates and examine evidences related
                                                    to email
                                                    scams, email hacking, phishing attacks, tracing and recovering of data.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Data Recovery Forensic & Management</h3>
                                                <p>technology, our experts provide the resources and methods to recover
                                                    inaccessible
                                                    data in case of lost or intentionally hidden password.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Disk Imaging & Analysis</h3>
                                                <p>We secure an exact copy of a storage device by investigating and
                                                    restoring drive
                                                    image files, bit-by-bit copies of a partition, physical disk or volume.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>E-Discovery & Content Analysis</h3>
                                                <p>Our eDiscovery consultants can assist you with the entire electronic
                                                    discovery
                                                    process, defensible and accurate e-discovery.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab15" class="tab-content1">
                                <div class="container mobilewidth">
                                    <div class="row">
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>SOC/SIEM Monitoring</h3>
                                                <p>We provide comprehensive real-time monitoring of infrastructure and
                                                    round-the clock
                                                    response to any security Breaches that may Occur.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Rapid Threat Containment</h3>
                                                <p>WWe rapidly response to a security incident by locating, analysing and
                                                    quarantining
                                                    the
                                                    affects followed by reducing the impact on the environment.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Insider Threat Monitoring</h3>
                                                <p>We uses a multi-tiered approach to identify the activities of different
                                                    groups and
                                                    users in order to identify, monitor and respond to any insider threats.
                                                </p>
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
            </div>
            <!-- mobile start -->
            <div class="container mobile-view significance-space significance-spac2">
                <!--  -->
                <div class="acc">
                    <!-- box first start -->
                    <div class="acc__card">
                        <a href="#significance1" class="acc__title active">Vulnerability Assese. & Penet. Testing</a>
                        <div class="acc__panel" style="display:block" id="significance1">
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider16" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. We provide End-to-End
                                                Information Security
                                                Solutions and Services to help our Clients secure their
                                                most critical business data assets and operate business in most secure
                                                environment We
                                                provide End-to-End Information Security Solutions and Services to help our
                                                Clients
                                                secure their
                                                most critical business data assets and operate business in most secure
                                                environment
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. We provide End-to-End
                                                Information Security
                                                Solutions and Services to help our Clients secure their
                                                most critical business data assets and operate business in most secure
                                                environment We
                                                provide End-to-End Information Security Solutions and Services to help our
                                                Clients
                                                secure their
                                                most critical business data assets and operate business in most secure
                                                environment
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. We provide End-to-End
                                                Information Security
                                                Solutions and Services to help our Clients secure their
                                                most critical business data assets and operate business in most secure
                                                environment We
                                                provide End-to-End Information Security Solutions and Services to help our
                                                Clients
                                                secure their
                                                most critical business data assets and operate business in most secure
                                                environment
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. We provide End-to-End
                                                Information Security
                                                Solutions and Services to help our Clients secure their
                                                most critical business data assets and operate business in most secure
                                                environment We
                                                provide End-to-End Information Security Solutions and Services to help our
                                                Clients
                                                secure their
                                                most critical business data assets and operate business in most secure
                                                environment
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
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
                        <a href="#significance2" class="acc__title">IT Security Audit, Risk & Compliance</a>
                        <div class="acc__panel" id="significance2">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider12" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective.Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective.Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective.Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective.Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count11" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#significance3" class="acc__title">Managed IT Security Solutions</a>
                        <div class="acc__panel" id="significance3">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider13" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Identifies and exploits network infrastructure vulnerabilities and validate
                                                result
                                                with efficiently evaluate a security posture. Identifies and exploits
                                                network
                                                infrastructure vulnerabilities and validate result
                                                with efficiently evaluate a security posture. Identifies and exploits
                                                network
                                                infrastructure vulnerabilities and validate result
                                                with efficiently evaluate a security posture.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Identifies and exploits network infrastructure vulnerabilities and validate
                                                result
                                                with efficiently evaluate a security posture. Identifies and exploits
                                                network
                                                infrastructure vulnerabilities and validate result
                                                with efficiently evaluate a security posture. Identifies and exploits
                                                network
                                                infrastructure vulnerabilities and validate result
                                                with efficiently evaluate a security posture.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>Identifies and exploits network infrastructure vulnerabilities and validate
                                                result
                                                with efficiently evaluate a security posture. Identifies and exploits
                                                network
                                                infrastructure vulnerabilities and validate result
                                                with efficiently evaluate a security posture. Identifies and exploits
                                                network
                                                infrastructure vulnerabilities and validate result
                                                with efficiently evaluate a security posture.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
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
                        <a href="#significance4" class="acc__title">Digital Forensic & Cyber Fraud Manag.</a>
                        <div class="acc__panel" id="significance4">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider14" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
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
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
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
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
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
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
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
                        <a href="#significance5" class="acc__title">SOC as a Service</a>
                        <div class="acc__panel" id="significance5">
                            <!--  -->
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider15" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
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
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
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
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
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
                                                an architecture and operational perspective. Security focused evaluation of
                                                your
                                                network-based computing environment, from both
                                                an architecture and operational perspective.
                                            </p>
                                            <!--  -->
                                            <div class="know-more">
                                                <a href="#">Know More</a>
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
                    <div class="col-md-2 width238 ">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/vapt-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Services to ensure the Integrity of Information Systems, Softwares & Applications,
                                        block
                                        illegal access and protect organizations against data theft, productivity loss and
                                        fraud.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 width238">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/security-audit-compliance.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Help organizations with regular and structured evaluation of compliance with the
                                        security
                                        policies,standards, guidelines and procedures.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>IT Security Audit, Risk & Compliance</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 width238">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/managed-it-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Preferred Service Partner" for corporate clients with array of customized security
                                        solutions
                                        and services to operate in a secure environment.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Managed IT Security Solutions</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 width238">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/forensic-seervices.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                        cybercrime /
                                        online fraud and proactively manage 24x7 hours security risks.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 width238">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/soc-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat mitigation.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>SOC (Security Operation Center) as a Service</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
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
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/security-audit-compliance.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Help organizations with regular and structured evaluation of compliance with the
                                        security
                                        policies,standards, guidelines and procedures.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>IT Security Audit, Risk & Compliance</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/vapt-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Services to ensure the Integrity of Information Systems, Softwares & Applications,
                                        block
                                        illegal access and protect organizations against data theft, productivity loss and
                                        fraud.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/managed-it-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Preferred Service Partner" for corporate clients with array of customized security
                                        solutions
                                        and services to operate in a secure environment.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Managed IT Security Solutions</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/forensic-seervices.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                        cybercrime /
                                        online fraud and proactively manage 24x7 hours security risks.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/soc-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat mitigation.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>SOC (Security Operation Center) as a Service</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
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
        <section class="Offering mhspace" id="mhome-div4">
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
                    <div class="cn-tabs">
                        <ul id="tabs-nav" class="home-tabs">
                            <li><a href="#tab1">Vulnerability Assesement & Penetration Testing</a></li>
                            <li><a href="#tab2">IT Security Audit, Risk & Compliance</a></li>
                            <li><a href="#tab3">Managed IT Security Solutions </a></li>
                            <li><a href="#tab4">Digital Forensic & Cyber Fraud Management </a></li>
                            <li><a href="#tab5">SOC (Security Operation Center) as a Service </a></li>
                        </ul>
                        <!-- END tabs-nav -->
                        <div id="tabs-content">
                            <div id="tab1" class="tab-content">
                                <div class="container mobilewidth">
                                    <!-- box start -->
                                    <div class="row">
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Network Architecture Design Review</h3>
                                                <p>Security focused evaluation of your network-based computing environment,
                                                    from both
                                                    an architecture and operational perspective.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Network Infrastructure Penetration Testing</h3>
                                                <p>Identifies and exploits network infrastructure vulnerabilities and
                                                    validate result
                                                    with efficiently evaluate a security posture.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Web Application Penetration Testing</h3>
                                                <p>Our comprehensive security assessment framework focuses to evaluate and
                                                    analyse
                                                    existing vulnerabilities for web-based applications.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Wireless Network Penetration Testing</h3>
                                                <p>We simulates real-world attacks to provide a real time assessment of
                                                    vulnerabilities
                                                    and threats to your wireless network infrastructure.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Mobile Application Penetration Testing</h3>
                                                <p>We go beyond looking at API and web vulnerabilities to examine the risk
                                                    of the
                                                    application on a mobile platform.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Source Code Review</h3>
                                                <p>Identifies and locate security risk and misconfigurations that have been
                                                    ignored
                                                    during SDLC process and can help invaders to abstract key information.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                    <!-- box start -->
                                    <div class="row home-space">
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Network Architecture Design Review</h3>
                                                <p>Security focused evaluation of your network-based computing environment,
                                                    from both
                                                    an architecture and operational perspective.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Network Infrastructure Penetration Testing</h3>
                                                <p>Identifies and exploits network infrastructure vulnerabilities and
                                                    validate result
                                                    with efficiently evaluate a security posture.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Web Application Penetration Testing</h3>
                                                <p>Our comprehensive security assessment framework focuses to evaluate and
                                                    analyse
                                                    existing vulnerabilities for web-based applications.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Wireless Network Penetration Testing</h3>
                                                <p>We simulates real-world attacks to provide a real time assessment of
                                                    vulnerabilities
                                                    and threats to your wireless network infrastructure.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Mobile Application Penetration Testing</h3>
                                                <p>We go beyond looking at API and web vulnerabilities to examine the risk
                                                    of the
                                                    application on a mobile platform.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Source Code Review</h3>
                                                <p>Identifies and locate security risk and misconfigurations that have been
                                                    ignored
                                                    during SDLC process and can help invaders to abstract key information.
                                                </p>
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
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Network Architecture Design Review</h3>
                                                <p>Security focused evaluation of your network-based computing environment,
                                                    from both
                                                    an architecture and operational perspective.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Network Infrastructure Penetration Testing</h3>
                                                <p>Identifies and exploits network infrastructure vulnerabilities and
                                                    validate result
                                                    with efficiently evaluate a security posture.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Web Application Penetration Testing</h3>
                                                <p>Our comprehensive security assessment framework focuses to evaluate and
                                                    analyse
                                                    existing vulnerabilities for web-based applications.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Wireless Network Penetration Testing</h3>
                                                <p>We simulates real-world attacks to provide a real time assessment of
                                                    vulnerabilities
                                                    and threats to your wireless network infrastructure.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Mobile Application Penetration Testing</h3>
                                                <p>We go beyond looking at API and web vulnerabilities to examine the risk
                                                    of the
                                                    application on a mobile platform.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Source Code Review</h3>
                                                <p>Identifies and locate security risk and misconfigurations that have been
                                                    ignored
                                                    during SDLC process and can help invaders to abstract key information.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                    <!-- box start -->
                                    <div class="row home-space">
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Network Architecture Design Review</h3>
                                                <p>Security focused evaluation of your network-based computing environment,
                                                    from both
                                                    an architecture and operational perspective.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Network Infrastructure Penetration Testing</h3>
                                                <p>Identifies and exploits network infrastructure vulnerabilities and
                                                    validate result
                                                    with efficiently evaluate a security posture.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Web Application Penetration Testing</h3>
                                                <p>Our comprehensive security assessment framework focuses to evaluate and
                                                    analyse
                                                    existing vulnerabilities for web-based applications.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Wireless Network Penetration Testing</h3>
                                                <p>We simulates real-world attacks to provide a real time assessment of
                                                    vulnerabilities
                                                    and threats to your wireless network infrastructure.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Mobile Application Penetration Testing</h3>
                                                <p>We go beyond looking at API and web vulnerabilities to examine the risk
                                                    of the
                                                    application on a mobile platform.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Source Code Review</h3>
                                                <p>Identifies and locate security risk and misconfigurations that have been
                                                    ignored
                                                    during SDLC process and can help invaders to abstract key information.
                                                </p>
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
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Network Architecture Design Review</h3>
                                                <p>Security focused evaluation of your network-based computing environment,
                                                    from both
                                                    an architecture and operational perspective.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Network Infrastructure Penetration Testing</h3>
                                                <p>Identifies and exploits network infrastructure vulnerabilities and
                                                    validate result
                                                    with efficiently evaluate a security posture.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Web Application Penetration Testing</h3>
                                                <p>Our comprehensive security assessment framework focuses to evaluate and
                                                    analyse
                                                    existing vulnerabilities for web-based applications.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Wireless Network Penetration Testing</h3>
                                                <p>We simulates real-world attacks to provide a real time assessment of
                                                    vulnerabilities
                                                    and threats to your wireless network infrastructure.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Mobile Application Penetration Testing</h3>
                                                <p>We go beyond looking at API and web vulnerabilities to examine the risk
                                                    of the
                                                    application on a mobile platform.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Source Code Review</h3>
                                                <p>Identifies and locate security risk and misconfigurations that have been
                                                    ignored
                                                    during SDLC process and can help invaders to abstract key information.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                    <!-- box start -->
                                    <div class="row home-space">
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Network Architecture Design Review</h3>
                                                <p>Security focused evaluation of your network-based computing environment,
                                                    from both
                                                    an architecture and operational perspective.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Network Infrastructure Penetration Testing</h3>
                                                <p>Identifies and exploits network infrastructure vulnerabilities and
                                                    validate result
                                                    with efficiently evaluate a security posture.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Web Application Penetration Testing</h3>
                                                <p>Our comprehensive security assessment framework focuses to evaluate and
                                                    analyse
                                                    existing vulnerabilities for web-based applications.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Wireless Network Penetration Testing</h3>
                                                <p>We simulates real-world attacks to provide a real time assessment of
                                                    vulnerabilities
                                                    and threats to your wireless network infrastructure.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Mobile Application Penetration Testing</h3>
                                                <p>We go beyond looking at API and web vulnerabilities to examine the risk
                                                    of the
                                                    application on a mobile platform.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Source Code Review</h3>
                                                <p>Identifies and locate security risk and misconfigurations that have been
                                                    ignored
                                                    during SDLC process and can help invaders to abstract key information.
                                                </p>
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
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Network Architecture Design Review</h3>
                                                <p>Security focused evaluation of your network-based computing environment,
                                                    from both
                                                    an architecture and operational perspective.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Network Infrastructure Penetration Testing</h3>
                                                <p>Identifies and exploits network infrastructure vulnerabilities and
                                                    validate result
                                                    with efficiently evaluate a security posture.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Web Application Penetration Testing</h3>
                                                <p>Our comprehensive security assessment framework focuses to evaluate and
                                                    analyse
                                                    existing vulnerabilities for web-based applications.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Wireless Network Penetration Testing</h3>
                                                <p>We simulates real-world attacks to provide a real time assessment of
                                                    vulnerabilities
                                                    and threats to your wireless network infrastructure.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Mobile Application Penetration Testing</h3>
                                                <p>We go beyond looking at API and web vulnerabilities to examine the risk
                                                    of the
                                                    application on a mobile platform.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Source Code Review</h3>
                                                <p>Identifies and locate security risk and misconfigurations that have been
                                                    ignored
                                                    during SDLC process and can help invaders to abstract key information.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                    <!-- box start -->
                                    <div class="row home-space">
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Network Architecture Design Review</h3>
                                                <p>Security focused evaluation of your network-based computing environment,
                                                    from both
                                                    an architecture and operational perspective.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Network Infrastructure Penetration Testing</h3>
                                                <p>Identifies and exploits network infrastructure vulnerabilities and
                                                    validate result
                                                    with efficiently evaluate a security posture.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Web Application Penetration Testing</h3>
                                                <p>Our comprehensive security assessment framework focuses to evaluate and
                                                    analyse
                                                    existing vulnerabilities for web-based applications.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5 ">
                                            <div class="tab-content-box">
                                                <h3>Wireless Network Penetration Testing</h3>
                                                <p>We simulates real-world attacks to provide a real time assessment of
                                                    vulnerabilities
                                                    and threats to your wireless network infrastructure.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Mobile Application Penetration Testing</h3>
                                                <p>We go beyond looking at API and web vulnerabilities to examine the risk
                                                    of the
                                                    application on a mobile platform.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 p5">
                                            <div class="tab-content-box">
                                                <h3>Source Code Review</h3>
                                                <p>Identifies and locate security risk and misconfigurations that have been
                                                    ignored
                                                    during SDLC process and can help invaders to abstract key information.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box end -->
                                </div>
                            </div>
                        </div>
                        <div id="tab5" class="tab-content">
                            <div class="container  mobilewidth">
                                <!-- box start -->
                                <div class="row">
                                    <div class="col-md-2 p5 ">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both an
                                                architecture and operational perspective.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 p5">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Identifies and exploits network infrastructure vulnerabilities and validate
                                                result with
                                                efficiently evaluate a security posture.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 p5 ">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Our comprehensive security assessment framework focuses to evaluate and
                                                analyse
                                                existing vulnerabilities for web-based applications.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 p5 ">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>We simulates real-world attacks to provide a real time assessment of
                                                vulnerabilities
                                                and threats to your wireless network infrastructure.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 p5">
                                        <div class="tab-content-box">
                                            <h3>Mobile Application Penetration Testing</h3>
                                            <p>We go beyond looking at API and web vulnerabilities to examine the risk of
                                                the
                                                application on a mobile platform.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 p5">
                                        <div class="tab-content-box">
                                            <h3>Source Code Review</h3>
                                            <p>Identifies and locate security risk and misconfigurations that have been
                                                ignored during
                                                SDLC process and can help invaders to abstract key information.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- box end -->
                                <!-- box start -->
                                <div class="row home-space">
                                    <div class="col-md-2 p5 ">
                                        <div class="tab-content-box">
                                            <h3>Network Architecture Design Review</h3>
                                            <p>Security focused evaluation of your network-based computing environment, from
                                                both an
                                                architecture and operational perspective.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 p5">
                                        <div class="tab-content-box">
                                            <h3>Network Infrastructure Penetration Testing</h3>
                                            <p>Identifies and exploits network infrastructure vulnerabilities and validate
                                                result with
                                                efficiently evaluate a security posture.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 p5 ">
                                        <div class="tab-content-box">
                                            <h3>Web Application Penetration Testing</h3>
                                            <p>Our comprehensive security assessment framework focuses to evaluate and
                                                analyse
                                                existing vulnerabilities for web-based applications.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 p5 ">
                                        <div class="tab-content-box">
                                            <h3>Wireless Network Penetration Testing</h3>
                                            <p>We simulates real-world attacks to provide a real time assessment of
                                                vulnerabilities
                                                and threats to your wireless network infrastructure.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 p5">
                                        <div class="tab-content-box">
                                            <h3>Mobile Application Penetration Testing</h3>
                                            <p>We go beyond looking at API and web vulnerabilities to examine the risk of
                                                the
                                                application on a mobile platform.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 p5">
                                        <div class="tab-content-box">
                                            <h3>Source Code Review</h3>
                                            <p>Identifies and locate security risk and misconfigurations that have been
                                                ignored during
                                                SDLC process and can help invaders to abstract key information.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- box end -->
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count1" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider3" class="owl-carousel owl-theme">
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count2" class="count-nav-box"></div>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count3" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider5" class="owl-carousel owl-theme">
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count4" class="count-nav-box"></div>
                            </div>
                            <!--  -->
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count5" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider7" class="owl-carousel owl-theme">
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count6" class="count-nav-box"></div>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count7" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider9" class="owl-carousel owl-theme">
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count8" class="count-nav-box"></div>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count9" class="count-nav-box"></div>
                            </div>
                            <!--  -->
                            <div class="indu-moblie indu-moblie1 mhslider count-navigation">
                                <div id="mhome-slider11" class="owl-carousel owl-theme">
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
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
                                                <a href="#">Know More</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                                <div id="navigation-count10" class="count-nav-box"></div>
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
        <section class="empower-industry-green mhspace" id="mhome-div5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>We empower industry to Secure Digitally, Reduce Threats & align</h2>
                    </div>
                </div>
            </div>
            <div class="container p40 desktop">
                <div class="row">
                    <div class="col-md-2 width238 ">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/vapt-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Services to ensure the Integrity of Information Systems, Softwares & Applications,
                                        block
                                        illegal access and protect organizations against data theft, productivity loss and
                                        fraud.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 width238">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/security-audit-compliance.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Help organizations with regular and structured evaluation of compliance with the
                                        security
                                        policies,standards, guidelines and procedures.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>IT Security Audit, Risk & Compliance</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 width238">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/managed-it-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Preferred Service Partner" for corporate clients with array of customized security
                                        solutions
                                        and services to operate in a secure environment.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Managed IT Security Solutions</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 width238">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/forensic-seervices.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                        cybercrime /
                                        online fraud and proactively manage 24x7 hours security risks.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 width238">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/soc-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat mitigation.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>SOC (Security Operation Center) as a Service</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
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
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/forensic-seervices.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                        cybercrime /
                                        online fraud and proactively manage 24x7 hours security risks.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/security-audit-compliance.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Help organizations with regular and structured evaluation of compliance with the
                                        security
                                        policies,standards, guidelines and procedures.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>IT Security Audit, Risk & Compliance</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/vapt-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Services to ensure the Integrity of Information Systems, Softwares & Applications,
                                        block
                                        illegal access and protect organizations against data theft, productivity loss and
                                        fraud.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/managed-it-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Preferred Service Partner" for corporate clients with array of customized security
                                        solutions
                                        and services to operate in a secure environment.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>Managed IT Security Solutions</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="empower-industry-box">
                            <div class="cn-hover-box">
                                <div class="cn-hover-img"> <img src="{{asset('assets/images/soc-services.jpg')}}"> </div>
                                <div class="cn-content">
                                    <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                        notification &
                                        threat mitigation.
                                    </p>
                                </div>
                            </div>
                            <div class="cn-main-content">
                                <h3>SOC (Security Operation Center) as a Service</h3>
                                <a href="#">Know more <i class="fa">&#xf054;</i></a>
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
        <!-- bg banner start -->
        <section class="mhspace mhspace00" id="mhome-div6">
            <div class="traing-banner desktop-view">
                <img src="{{asset('assets/images/training-domain-bg.jpg')}}">
                <div class="cn-btn"> <a href="training.php">KNOW MORE</a> </div>
            </div>
            <!-- bg banner end -->
            <!-- bg banner start -->
            <div class="traing-banner mobile-view">
                <img src="/assets/images/mimg3.jpeg">
                <div class="cn-btn"> <a href="training.php">KNOW MORE</a> </div>
            </div>
        </section>
        <!-- bg banner end -->
        <!--Offering start -->
        <section class="home-banner-sec">
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
                            <li><a href="#tab116">Cybersecurity </a></li>
                            <li><a href="#tab117">Ethical Hacking </a></li>
                            <li><a href="#tab118">Penetration Testing </a></li>
                            <li><a href="#tab119">Vulnerability Assessment</a></li>
                            <li><a href="#tab110">Certification </a></li>
                        </ul>
                        <!-- END tabs-nav -->
                        <div id="tabs-content">
                            <div id="tab116" class="tab-content2">
                                <!--  -->
                                <div class="home-slider">
                                    <div id="home-slider1" class="owl-carousel owl-theme ">
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{asset('assets/images/Training-calendar-Codec-Networks.webp')}}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{asset('assets/images/IT-Security.webp')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{asset('assets/images/ec-council-training-certification.webp')}}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="{{asset('assets/images/governance-risk-compliance.webp')}}" alt="">
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
                                                <a href="#" class="homeread-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="template12-img">
                                                <img src="{{asset('assets/images/working-1.png')}}">
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
                                                <img src="/assets/images/Training-calendar-Codec-Networks.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="/assets/images/IT-Security.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="/assets/images/ec-council-training-certification.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="/assets/images/governance-risk-compliance.webp" alt="">
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
                                                <img src="/assets/images/Training-calendar-Codec-Networks.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="/assets/images/IT-Security.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/ec-council-training-certification.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="/assets/images/governance-risk-compliance.webp"
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
                                                <img src="/assets/images/Training-calendar-Codec-Networks.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="/assets/images/IT-Security.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="/assets/images/ec-council-training-certification.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="/assets/images/governance-risk-compliance.webp"
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
                                            <img src="/assets/images/mimg1.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="/assets/images/mimg2.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="/assets/images/mimg.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="/assets/images/mimg1.jpeg" alt="">
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
                                    <img src="/assets/images/working-1.png" alt="">
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
                                    <a href="#">Read more</a>
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
                                            <img src="/assets/images/mimg1.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="/assets/images/mimg2.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="/assets/images/mimg.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="/assets/images/mimg1.jpeg" alt="">
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
                                            <img src="/assets/images/mimg1.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg2.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg1.jpeg" alt="">
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
                                            <img src="assets/images/mimg1.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg2.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg1.jpeg" alt="">
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
                        <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                            <div class="tdw-box row">
                                <div class="col-md-4 pd0">
                                    <div class="tdw-img"> <img src="assets/images/ec-council-1.jpg"> </div>
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
                        <a href="https://www.cybarwind.com/new-demo/codec-demo/training-methodology-1.php">
                            <div class="tdw-box row">
                                <div class="col-md-4 pd0">
                                    <div class="tdw-img"> <img src="assets/images/PECB-Acc-Certification.jpg"> </div>
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
                        <a href="https://www.cybarwind.com/new-demo/asaraf/codec/case2.php">
                            <div class="tdw-box row">
                                <div class="col-md-4 pd0">
                                    <div class="tdw-img"> <img src="assets/images/cyber-security-pene.jpg"> </div>
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
                                <div class="tdw-img"> <img src="assets/images/Security-oprations-4.jpg"> </div>
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
                                <div class="tdw-img"> <img src="assets/images/cyber-forensic-5.jpg"> </div>
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
                                <div class="tdw-img"> <img src="assets/images/instructor-online.jpg"> </div>
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
                                <div class="tdw-img"> <img src="assets/images/Security-oprations-4.jpg"> </div>
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
                                <div class="tdw-img"> <img src="assets/images/networks-8.jpg"> </div>
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
                                <div class="tdw-img"> <img src="assets/images/it-security-opration9.jpg"> </div>
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
                                <div class="tdw-img"> <img src="assets/images/other-quality10.jpg"> </div>
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
                                <div class="tdw-img"> <img src="assets/images/other-quality10.jpg"> </div>
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
                                <div class="tdw-img"> <img src="assets/images/other-quality10.jpg"> </div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/ec-council-1.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/ec-council-1.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/ec-council-1.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/PECB-Acc-Certification.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/PECB-Acc-Certification.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/PECB-Acc-Certification.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/cyber-security-pene.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/cyber-security-pene.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/cyber-security-pene.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/Security-oprations-4.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/Security-oprations-4.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/Security-oprations-4.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/cyber-forensic-5.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/cyber-forensic-5.jpg"></div>
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
                            <a href="https://www.cybarwind.com/new-demo/asaraf/codec/thirdlevel.php">
                                <div class="ftd-box">
                                    <div class="ftd-img"> <img src="assets/images/cyber-forensic-5.jpg"></div>
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
                    <div class="col-md-9">
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
                    <div class="col-md-3">
                        <div class="wccn-title">
                            <h3 class="style2"><span style="color: #ffffff;"> AWARDS & RECOGNITION</span></h3>
                        </div>
                        <div id="awrad-slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="award-img">
                                    <img src="assets/images/EC-Council-Accredited-Training-Center.jpg">
                                </div>
                            </div>
                            <div class="item">
                                <div class="award-img">
                                    <img src="assets/images/EC-Council-Accredited-Training-Center.jpg">
                                </div>
                            </div>
                            <div class="item">
                                <div class="award-img">
                                    <img src="assets/images/EC-Council-Accredited-Training-Center.jpg">
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div id="client-logo" class="owl-carousel owl-theme">
                        <div class="item"> <img src="assets/images/clients/eccoincil-partnerlogo.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="item"> <img src="assets/images/clients/pecb-partnerlogo.png" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="assets/images/clients/mcafee.png" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="assets/images/clients/being-cert-logopartner.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="item"><img src="assets/images/clients/quick-heal.png" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="assets/images/clients/shophospartnerlogo.png" alt="Owl Image">
                        </div>
                        <div class="item"><img src="assets/images/clients/symantec.png" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="assets/images/clients/tenable.png" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="assets/images/clients/kesperskypartner.png" class="img-fluid"
                                alt=""></div>
                        <div class="item"><img src="assets/images/clients/acunetix-partner-logo.png"
                                alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clients/seqrite.png" alt="Owl Image"></div>
                        <div class="item"><img src="assets/images/clients/inspira-partnerlogo.png" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- WHY CHOOSE Cybar Wind? end -->
        <!--Offering start -->
        <section class="home-banner-sec mhspace" id="mhome-div91">
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
                            <li><a href="#tab1116-1">Cybersecurity </a></li>
                            <li><a href="#tab1117-2">Ethical Hacking </a></li>
                            <li><a href="#tab1118-3">Penetration Testing </a></li>
                            <li><a href="#tab1119-4">Vulnerability Assessment</a></li>
                            <li><a href="#tab1110-5">Certification </a></li>
                        </ul>
                        <!-- END tabs-nav -->
                        <div id="tabs-content">
                            <div id="tab1116-1" class="tab-content4">
                                <!--  -->
                                <div class="home-slider">
                                    <div id="home-slider11" class="owl-carousel owl-theme">
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/Training-calendar-Codec-Networks.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/IT-Security.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/ec-council-training-certification.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/governance-risk-compliance.webp" alt="">
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
                                                <img src="assets/images/Training-calendar-Codec-Networks.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/IT-Security.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/ec-council-training-certification.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/governance-risk-compliance.webp" alt="">
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
                                                <a href="#" class="homeread-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="template12-img">
                                                <img src="assets/images/working-1.png">
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
                                                <img src="assets/images/Training-calendar-Codec-Networks.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/IT-Security.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/ec-council-training-certification.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/governance-risk-compliance.webp" alt="">
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
                                                <img src="assets/images/Training-calendar-Codec-Networks.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/IT-Security.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/ec-council-training-certification.webp"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="itmes">
                                            <div class="home-banner1">
                                                <img src="assets/images/governance-risk-compliance.webp" alt="">
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
                                            <img src="assets/images/mimg1.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg2.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg1.jpeg" alt="">
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
                                    <img src="assets/images/working-1.png" alt="">
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
                                    <a href="#">Read more</a>
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
                                            <img src="assets/images/mimg1.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg2.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg1.jpeg" alt="">
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
                                            <img src="assets/images/mimg1.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg2.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg1.jpeg" alt="">
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
                                            <img src="assets/images/mimg1.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg2.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="itme">
                                        <div class="home-banner1">
                                            <img src="assets/images/mimg1.jpeg" alt="">
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
                                            <img src="assets/images/Industries/Technology-IT-Telecom.png" alt=""
                                                title="">
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
                                            <img src="assets/images/Industries/Education.png" alt=""
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
                                            <img src="assets/images/Industries/Banking-Finance-Insurance.png"
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
                                            <img src="assets/images/Industries/Healthcare.png" alt=""
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
                                            <img src="assets/images/Industries/Retail-E-Commerce.png" alt=""
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
                                            <img src="assets/images/Industries/Power-Energy.png" alt=""
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
                                            <img src="assets/images/Industries/Government-Defence.png" alt=""
                                                title="">
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
                                            <img src="assets/images/Industries/Utilities.png" alt=""
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
                                            <img src="assets/images/Industries/Industruies-Manufacturing.png"
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
                                            <img src="assets/images/Industries/Tourism-Hospitality.png" alt=""
                                                title="">
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
                                            <img src="assets/images/Industries/Media-Entertainment.png" alt=""
                                                title="">
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
                                            <img src="assets/images/Industries/RealEstate.png" alt=""
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
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter2">
                                <h4>Education</h4>
                                <ul>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter3">
                                <h4>Banking, Finance &amp; Insurance</h4>
                                <ul>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter4">
                                <h4>Healthcare</h4>
                                <ul>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter5">
                                <h4>Retail &amp; E-Commerce</h4>
                                <ul>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter6">
                                <h4>Power & Energy</h4>
                                <ul>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter7">
                                <h4>Government &amp; Defence</h4>
                                <ul>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter8">
                                <h4>Utilities</h4>
                                <ul>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter9">
                                <h4>Industruies &amp; Manufacturing</h4>
                                <ul>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter10">
                                <h4>Tourism & Hospitality</h4>
                                <ul>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter11">
                                <h4>Media &amp; Entertainment</h4>
                                <ul>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                </ul>
                            </div>
                            <!-- partner logo row 1 end  -->
                            <!-- partner logo row 1 -->
                            <div class="partner-logo" id="partnter12">
                                <h4>Real Estate</h4>
                                <ul>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/ncdc-client-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/aic.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/MCX.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/Samsung.webp"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/hcl-logo.jpg"
                                            alt="">
                                    </li>
                                    <li>
                                        <img src="https://www.cybarwind.com/demo/assets/images/clients/metlife.jpg"
                                            alt="">
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
                                        <div class="ceh-testo-image"><img src="/assets/images/testo.jpg"
                                                class="img-fluid" alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Aditi Malhotra</h3>
                                                <span>Student</span>
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
                                        <div class="ceh-testo-image"><img src="/assets/images/testo.jpg"
                                                class="img-fluid" alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Aditi Malhotra</h3>
                                                <span>Student</span>
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
                                        <div class="ceh-testo-image"><img src="/assets/images/testo.jpg"
                                                class="img-fluid" alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Aditi Malhotra</h3>
                                                <span>Student</span>
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
                                        <div class="ceh-testo-image"><img src="/assets/images/testo.jpg"
                                                class="img-fluid" alt="t1">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ceh-testo-cont">
                                            <div class="ceh-testo-title">
                                                <h3>Aditi Malhotra</h3>
                                                <span>Student</span>
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
                    <a href="https://www.cybarwind.com/new-demo/asaraf/codec/testimonials.php">View all</a>
                </div>
            </div>
        </section>

        <!-- resources/views/mobile-components/m-testimonials.blade.php  -->

        <!-- Our Customers end -->
        <section class="core-domain-section-blog mhspace mhspace1" id="mhome-div11"
            style="background-color: #e5e8ee;">
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
                            <li><a href="#blog">Blog </a></li>
                            <li><a href="#podcast">Podcast </a></li>
                            <li><a href="#news">Newsletter </a></li>
                            <li><a href="#event">Event & Webinar </a></li>
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
                                                    <img src="{{asset('assets/images/networks-8.jpg')}}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="blog-view.php"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box1 end -->
                                        <!-- blog box2 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="{{asset('assets/images/ec-council-1.jpg')}}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="blog-view.php"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box2 end -->
                                        <!-- blog box3 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="{{asset('assets/images/PECB-Acc-Certification.jpg')}}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="blog-view.php"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box3 end -->
                                    </div>
                                    <div class="blog-view">
                                        <a href="blog.php">View all</a>
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
                                                <img src="{{asset('assets/images/video-thumb.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                                class="podcast-video">
                                                <img src="{{asset('assets/images/video-thumb.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                                class="podcast-video">
                                                <img src="{{asset('assets/images/video-thumb.jpg')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-view">
                                        <a href="#">View all</a>
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
                                                    <img src="{{asset('assets/images/networks-8.jpg')}}">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="blog-view.php"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box1 end -->
                                        <!-- blog box2 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="/assets/images/ec-council-1.jpg">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="blog-view.php"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box2 end -->
                                        <!-- blog box3 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="/assets/images/PECB-Acc-Certification.jpg">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="blog-view.php"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box3 end -->
                                    </div>
                                    <div class="blog-view">
                                        <a href="#">View all</a>
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
                                                    <img src="/assets/images/networks-8.jpg">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="blog-view.php"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box1 end -->
                                        <!-- blog box2 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="/assets/images/ec-council-1.jpg">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="blog-view.php"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box2 end -->
                                        <!-- blog box3 -->
                                        <div class="col-md-4">
                                            <div class="template15-wrap-main">
                                                <div class="template15-wrap-main-img">
                                                    <img src="/assets/images/PECB-Acc-Certification.jpg">
                                                </div>
                                                <div class="template15-wrap-main-content">
                                                    <span><i>19 Oct 2020</i></span>
                                                    <h4><a href="blog-view.php">Network Administration and Security</a>
                                                    </h4>
                                                    <p>
                                                        Offers buffey of security programs, tools and techniques that are
                                                        globally
                                                        accepted in Information and Cyber Security Assurance.
                                                        <a href="blog-view.php"> Read More[...]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog box3 end -->
                                    </div>
                                    <div class="blog-view">
                                        <a href="blog.php">View all</a>
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
                                                <img src="/assets/images/networks-8.jpg">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="blog-view.php">Network Administration and Security</a></h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="blog-view.php"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box1 end -->
                                    <!-- blog box2 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="/assets/images/ec-council-1.jpg">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="blog-view.php">Network Administration and Security</a></h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="blog-view.php"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box2 end -->
                                    <!-- blog box3 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="/assets/images/PECB-Acc-Certification.jpg">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="blog-view.php">Network Administration and Security</a></h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="blog-view.php"> Read More[...]</a>
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
                                            <img src="/assets/images/video-thumb.jpg">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                            class="podcast-video">
                                            <img src="/assets/images/video-thumb.jpg">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio"
                                            class="podcast-video">
                                            <img src="/assets/images/video-thumb.jpg">
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
                                                <img src="/assets/images/networks-8.jpg">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="blog-view.php">Network Administration and Security</a></h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="blog-view.php"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box1 end -->
                                    <!-- blog box2 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="/assets/images/ec-council-1.jpg">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="blog-view.php">Network Administration and Security</a></h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="blog-view.php"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box2 end -->
                                    <!-- blog box3 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="/assets/images/PECB-Acc-Certification.jpg">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="blog-view.php">Network Administration and Security</a></h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="blog-view.php"> Read More[...]</a>
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
                                                <img src="/assets/images/networks-8.jpg">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="blog-view.php">Network Administration and Security</a></h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="blog-view.php"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box1 end -->
                                    <!-- blog box2 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="assets/images/ec-council-1.jpg">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="blog-view.php">Network Administration and Security</a></h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="blog-view.php"> Read More[...]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog box2 end -->
                                    <!-- blog box3 -->
                                    <div class="item">
                                        <div class="template15-wrap-main">
                                            <div class="template15-wrap-main-img">
                                                <img src="/assets/images/PECB-Acc-Certification.jpg">
                                            </div>
                                            <div class="template15-wrap-main-content">
                                                <span><i>19 Oct 2020</i></span>
                                                <h4><a href="blog-view.php">Network Administration and Security</a></h4>
                                                <p>
                                                    Offers buffey of security programs, tools and techniques that are
                                                    globally
                                                    accepted in Information and Cyber Security Assurance.
                                                    <a href="blog-view.php"> Read More[...]</a>
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
                            <div class="box-image-career123"> <img src="/assets/images/career-img-png.png"
                                    class="img-fluid-career12" alt=""> </div>
                            <div class="box-button-career">
                                <a href="https://www.cybarwind.com/new-demo/asaraf/codec/careers.php"
                                    target="_blank">Join Our
                                    Team</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- career end -->
        <section>
            <div class="coach">
                <div class="coach-img"> <img src="/assets/images/career-opportunities.jpg" class="img-fluid"
                        alt="coach image">
                </div>
                <div class="coach-text">
                    <h3>Career Opportunities. <br></h3>
                    <h4>Explore opportunities at forefront of innovation</h4>
                    <p>We bring together the best and the brightest in the industry to solve transformative cases with Data.
                    </p>
                    <div class="wpb_wrapper bdr-top1 pt-4 mt-4">
                        <p class="text-center"><a class="chevron chevron link-more aos-init aos-animate"
                                style="color:#fff;" href="#">Browse Cybar Wind Job </a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- modal end -->

        {{-- @include('frontend.layouts.footer') --}}
        {{-- <a href="#mian-body" class="scrollToTop"><i class="fa fa-arrow-up"></i></a> --}}
    </body>
@endsection

@push('scripts')
    <!-- Jquery code -->
    <script src="/assets/js/slider.js"></script>
    <script type="text/javascript" src="/assets/js/common.js?v-1"></script>
    <script type="text/javascript" src="/assets/js/homepage.js?v14"></script>
    <script type="text/javascript" src="/assets/js/mobile-menu.js"></script>
    <script type="text/javascript" src="/assets/js/main.js?v=32"></script>
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
        window.onload = function() {
            addVersionToFiles();
        };
    </script>

    <script>
        $('.close-acrodin').click(function(e) {
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

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'auto' // Remove this line or change 'smooth' to 'auto'
                });
            });
        });
    </script>
    <script>
        $('.cn-content').click(function() {
            $(this).addClass('height');
        });
        $('.cn-hover-img').click(function() {
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
        $(".ceh-testo-box").click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            openPopup(target);
        });

        // Close the popup when clicking on elements with the class "close_1"
        $(".close_1").click(function(e) {
            e.preventDefault();
            var target = $(this).closest('.popup').attr('id');
            closePopup(target);
        });

        // Close the popup when clicking outside the popup
        $(".popup").click(function(event) {
            if ($(event.target).is('.popup')) {
                var target = $(this).attr('id');
                closePopup(target);
            }
        });

        $('.close_1, .popup').on('click', function() {
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
@endpush

