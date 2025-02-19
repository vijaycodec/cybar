@extends('frontend.layouts.app')

@section('title', 'Resources')
{{-- <link rel="stylesheet" type="text/css" href="/assets/css/sample7.css"> --}}
<style>
    .cn-hover-box:hover .cn-content.height {
        height: 0px;
        display: block;
    }
</style>
@section('content')
    {{-- @include ('frontend.layouts.header-css') --}}

    <body class="sample-body" id="main-content-body">
        <!-- Header start -->

        @include ('frontend.layouts.l3-header');

        <!--  -->
        <section class="cn-bg" id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cn-header">
                            <h1>Don't just learn it, Master it!</h1>
                            <p>The most effective learning system. World's highest course completion rate.</p>
                            <h2>Top Categories</h2>
                            <ul>
                                <li>Blockchain </li>
                                <li>Big Data </li>
                                <li>Cloud Computing</li>
                                <li>Devops </li>
                                <li>Artificial Intelligence</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- tab menu start -->
        <section class="services-menu menu-fixed-cn" style="background: url('assets/images/image-bg-top.jpg') repeat fixed;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul id="sticky-control" class="anchor-nav">
                            @foreach ($l3Categories as $category)
                                <li><a href="#{{ strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace([' ', '&', ','], '-', $category->l3_category))) }}"
                                        class="sticky_link {{ $loop->first ? 'sapme_active' : '' }}">{{ $category->l3_category }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- tab menu end -->

        <!-- Overview start 1-->
        <section class="light-grey sample7-line anchor-link space7_1" id="overview">
            <!--  -->
            <div class="container desktop-view">
                <div class="row">
                    <div class="col-md-12">
                        <div class="third-content" id="overview2">
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    <!-- Overview Section -->
                                    @if ($contentInfo->overview_description)
                                        {!! $contentInfo->overview_description !!}
                                    @endif
                                @endforeach
                            @endforeach
                            <a href="javascript:void(0)" class="btn-show">Read More ...</a>
                            <div class="content-hide">

                                <div class="container">
                                    <div class="row overview-content">
                                        <!--  -->
                                        <div class="col-md-12">


                                            <div class="third-content smple-box1">
                                                <h4>What Technical Skills you Learn</h4>
                                                <p>In the process of becoming a Certified Ethical Hacker (CEH), individuals
                                                    acquire a diverse
                                                    set of technical skills essential for effectively identifying and
                                                    mitigating cybersecurity
                                                    risks. These skills include:</p>
                                            </div>
                                            <!--  -->
                                            <div class="info-graphic">
                                                <div class="row info-graphic-row">
                                                    <div class="col-md-12">
                                                        <!-- desktop start  -->
                                                        <div class="desktop-view">
                                                            <div class="wwyl-row">
                                                                <div class="wwyl-box">
                                                                    <p> Ethical Hacking: CEH imparts practical skills in
                                                                        ethical hacking, enabling
                                                                        professionals to identify and exploit
                                                                        vulnerabilities, assess security postures, and
                                                                        strengthen defenses against cyber threats. </p>
                                                                    <div class="wwyl-box-circle">
                                                                        <span>01</span>
                                                                    </div>
                                                                </div>
                                                                <div class="wwyl-box orange ">
                                                                    <p> Penetration Testing: CEH equips individuals with the
                                                                        expertise to conduct
                                                                        penetration
                                                                        tests, simulating cyber attacks to evaluate system
                                                                        vulnerabilities and assess the
                                                                        effectiveness of security measures. </p>
                                                                    <div class="wwyl-box-circle orange-circle">
                                                                        <span>02</span>
                                                                    </div>
                                                                </div>
                                                                <div class="wwyl-box purple">
                                                                    <p> Incident Response: CEH provides knowledge in
                                                                        incident handling and response,
                                                                        enabling
                                                                        professionals to effectively manage and mitigate the
                                                                        impact of cybersecurity
                                                                        incidents,
                                                                        minimizing downtime and data loss. </p>
                                                                    <div class="wwyl-box-circle purple-circle">
                                                                        <span>03</span>
                                                                    </div>
                                                                </div>
                                                                <div class="wwyl-box color4">
                                                                    <p> Network Security: CEH covers network security
                                                                        concepts, offering skills in securing
                                                                        networks, configuring firewalls, and implementing
                                                                        intrusion detection systems to
                                                                        protect
                                                                        against unauthorized access and data breaches. </p>
                                                                    <div class="wwyl-box-circle color4-circle">
                                                                        <span>04</span>
                                                                    </div>
                                                                </div>
                                                                <div class="wwyl-box green">
                                                                    <p>Forensic Analysis: CEH includes training in digital
                                                                        forensics, allowing professionals
                                                                        to investigate and analyze cyber incidents, gather
                                                                        evidence, and support legal actions
                                                                        against cybercriminals.</p>
                                                                    <div class="wwyl-box-circle green-circle">
                                                                        <span>05</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- desktop end -->

                                                        </div>
                                                        <!--  -->
                                                        <!-- mobile start -->
                                                        <!-- mobile end -->
                                                        <!--  -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a href="#overview2" class="btn-hide" id="btn-hide1">Hide Content ...</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="container mobile-view">
                <!--  -->
                <div class="third-content">
                    {{-- <h3>Certified Ethical Hacking Certification</h3> --}}
                    <!-- slider start -->
                    <div class="mobile-view indu-moblie indu-moblie1 count-navigation">
                        <div id="owl-demo65" class="owl-carousel owl-theme">
                            <!--  -->
                            <div class="item">
                                <div class="mobile-cont slider">
                                    @foreach ($l3Categories as $category)
                                        @foreach ($category->contentInfos as $contentInfo)
                                            @if (!empty($contentInfo->overview_description))
                                                @php
                                                    $chunks = array_chunk(
                                                        explode(' ', strip_tags($contentInfo->overview_description)),
                                                        50,
                                                    );
                                                @endphp
                                                @foreach ($chunks as $chunk)
                                                    <div class="slide">
                                                        <p>{!! implode(' ', $chunk) . '...' !!}</p>
                                                    </div>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <!--  -->

                            <!--  -->
                            {{-- <div class="item">
                                <div class="mobile-cont">
                                    <p>A Certified Ethical Hacker (CEH) is a trained professional who legally penetrates
                                        networks and
                                        systems to identify vulnerabilities and weaknesses. Unlike malicious hackers, CEHs
                                        operate with
                                        permission and adhere to ethical guidelines. They utilize the same tools and
                                        techniques as
                                        cybercriminals but with the goal of improving security rather than causing harm.
                                        CEHs employ various
                                        methods such as penetration testing, vulnerability assessments, and social
                                        engineering to assess the
                                        security posture of organizations.</p>
                                </div>
                            </div> --}}
                            <!--  -->

                            <!--  -->
                            {{-- <div class="item">
                                <div class="mobile-cont">
                                    <p>A Certified Ethical Hacker (CEH) is a trained professional who legally penetrates
                                        networks and
                                        systems to identify vulnerabilities and weaknesses. Unlike malicious hackers, CEHs
                                        operate with
                                        permission and adhere to ethical guidelines. They utilize the same tools and
                                        techniques as
                                        cybercriminals but with the goal of improving security rather than causing harm.
                                        CEHs employ various
                                        methods such as penetration testing, vulnerability assessments, and social
                                        engineering to assess the
                                        security posture of organizations.</p>
                                </div>
                            </div> --}}
                            <!--  -->

                            <!--  -->
                            {{-- <div class="item">
                                <div class="mobile-cont">
                                    <p>A Certified Ethical Hacker (CEH) is a trained professional who legally penetrates
                                        networks and
                                        systems to identify vulnerabilities and weaknesses. Unlike malicious hackers, CEHs
                                        operate with
                                        permission and adhere to ethical guidelines. They utilize the same tools and
                                        techniques as
                                        cybercriminals but with the goal of improving security rather than causing harm.
                                        CEHs employ various
                                        methods such as penetration testing, vulnerability assessments, and social
                                        engineering to assess the
                                        security posture of organizations.</p>
                                </div>
                            </div> --}}
                            <!--  -->
                        </div>

                        <div id="navigation-count" class="count-nav-box"></div>
                    </div>
                    <!-- slider end -->
                    <h3 class="space1">What Technical Skills you Learn</h3>
                    <!-- mobile start -->
                    <div class="mobile-view indu-moblie count-navigation">
                        <div id="owl-demo64" class="owl-carousel owl-theme">
                            <!--  -->
                            <div class="wwyl-box">
                                <p> Ethical Hacking: CEH imparts practical skills in ethical hacking, enabling
                                    professionals to identify and exploit vulnerabilities, assess security postures, and
                                    strengthen defenses against cyber threats. </p>
                                <div class="wwyl-box-circle">
                                    <span>01</span>
                                </div>
                            </div>
                            <div class="wwyl-box orange ">
                                <p> Penetration Testing: CEH equips individuals with the expertise to conduct penetration
                                    tests, simulating cyber attacks to evaluate system vulnerabilities and assess the
                                    effectiveness of security measures. </p>
                                <div class="wwyl-box-circle orange-circle">
                                    <span>02</span>
                                </div>
                            </div>
                            <div class="wwyl-box purple">
                                <p> Incident Response: CEH provides knowledge in incident handling and response, enabling
                                    professionals to effectively manage and mitigate the impact of cybersecurity incidents,
                                    minimizing downtime and data loss. </p>
                                <div class="wwyl-box-circle purple-circle">
                                    <span>03</span>
                                </div>
                            </div>
                            <div class="wwyl-box color4">
                                <p> Network Security: CEH covers network security concepts, offering skills in securing
                                    networks, configuring firewalls, and implementing intrusion detection systems to protect
                                    against unauthorized access and data breaches. </p>
                                <div class="wwyl-box-circle color4-circle">
                                    <span>04</span>
                                </div>
                            </div>
                            <div class="wwyl-box green">
                                <p>Forensic Analysis: CEH includes training in digital forensics, allowing professionals
                                    to investigate and analyze cyber incidents, gather evidence, and support legal actions
                                    against cybercriminals.</p>
                                <div class="wwyl-box-circle green-circle">
                                    <span>05</span>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                        <div id="navigation-count1" class="count-nav-box"></div>
                    </div>
                    <!-- mobile end -->
                </div>
                <!--  -->
            </div>
            <!--  -->
        </section>
        <!-- Overview end  1-->

        <!-- Significance start  2-->
        <section class="anchor-link sample7-line space7" id="significance">
            <!-- title  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>SIGNIFICANCE OF CEH IN DIFFERENT INDUSTRY</h2>
                        <p>CEH training and certification hold significant importance in the cybersecurity industry as they
                            validate
                            an individual's proficiency in ethical hacking techniques and practices.</p>
                    </div>
                </div>
            </div>
            <!--title end-->
            <div class="container desktop-view significance">
                <div class="row">
                    <!-- tab1 menu start  -->
                    @foreach ($l3Categories as $category)
                        <ul class="nav nav-tabs sample-tab2-menu1" id="tabmenu1">
                            {{-- <li class="active"><a data-toggle="tab" href="#ic">BANKING & FINANCE</a></li> --}}
                            @foreach ($category->contentInfos as $contentInfo)
                                @if ($contentInfo->significanceCategory)
                                    <li class="{{ $loop->first ? 'active' : '' }}"><a data-toggle="tab" class="codec-tab"
                                            href="#{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->significanceCategory->name)) }}">{{ $contentInfo->significanceCategory->name }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endforeach
                    <!-- tab1 menu end  -->
                    <!-- tab content box start -->
                    <div class="tab-content sample7-content" style="">
                        <!-- tab1 conrent start -->
                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                @if ($contentInfo->significanceCategory)
                                    <div id="{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->significanceCategory->name)) }}"
                                        class="tab-pane fade in {{ $loop->first ? 'active' : '' }}">
                                        <div class="container">
                                            <div class="row rowp">
                                                @if ($contentInfo->images)
                                                    <div class="col-md-3">
                                                        <div class="template12-img">
                                                            <img
                                                                src="{{ asset('uploads/frontend/l3_template/significance/' . $contentInfo->images) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="red-title">
                                                            @if ($contentInfo->significanceCategory)
                                                                {!! $contentInfo->significance_description !!}
                                                            @endif
                                                            <a href="javascript:void(0);" class="btn-hide">Hide Content
                                                                ...</a>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="col-md-12">
                                                        <div class="red-title">
                                                            @if ($contentInfo->significanceCategory)
                                                                {!! $contentInfo->significance_description !!}
                                                            @endif
                                                            <a href="javascript:void(0);" class="btn-hide">Hide Content
                                                                ...</a>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach

                        <!-- tab1 content end  -->

                    </div>
                    <!-- tab content box end -->
                </div>
            </div>

            <!-- mobile content start  -->
            <div class="container mobile-view significance-space">
                <!--  -->
                <div class="acc">
                    <div class="acc__card">
                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                @if ($contentInfo->significanceCategory)
                                    <!-- Accordion Title -->
                                    <a href="javascript:void(0)" class="acc__title {{ $loop->first ? 'active' : '' }}"
                                        data-target="significance-{{ $loop->iteration }}">
                                        {{ $contentInfo->significanceCategory->name }}
                                    </a>
                                @endif
                                <!-- Accordion Panel -->
                                <div class="acc__panel {{ $loop->first ? 'open' : '' }}"
                                    id="significance-{{ $loop->iteration }}">
                                    <div class="box-height">
                                        <div class="red-title">
                                            @if ($contentInfo->images)
                                                <div class="template12-img">
                                                    <img
                                                        src="{{ asset('uploads/frontend/l3_template/significance/' . $contentInfo->images) }}">
                                                </div>
                                                {{-- <div class="red-title"> --}}
                                                @if ($contentInfo->significanceCategory)
                                                    {!! $contentInfo->significance_description !!}
                                                @endif
                                                {{-- </div> --}}
                                            @else
                                                {{-- <div class="red-title"> --}}
                                                @if ($contentInfo->significanceCategory)
                                                    {!! $contentInfo->significance_description !!}
                                                @endif
                                                {{-- </div> --}}
                                            @endif
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="close-acrodin">Close</a>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                    <!-- box first end -->
                    {{-- <!-- box two end -->
                    <div class="acc__card">
                        <a href="#significance2" class="acc__title">CRITICAL INFRASTRUCTURE </a>
                        <div class="acc__panel" id="significance2">
                            <!--  -->
                            <div class="box-height">
                                <div class="red-title">
                                    <div class="template12-img">
                                        <img src="assets/images/Technological Challenges.jpg">
                                    </div>
                                    <h4 style="color: #000"><strong>Infrastructure Resilience:</strong> </h4>
                                    <p> CEH expertise ensures robust cybersecurity measures, safeguarding critical
                                        infrastructure from
                                        cyber threats, preventing disruptions in power generation, aviation</p>
                                    <h4 style="color: #000"><strong> Operational Continuity: </strong> </h4>
                                    <p> CEH-certified professionals contribute to uninterrupted operations by identifying
                                        vulnerabilities, implementing security measures, and responding effectively to cyber
                                        incidents,
                                        crucial for sustaining essential services. </p>
                                </div>
                                <!--  -->
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#significance3" class="acc__title">APPLICATION SOFTWATE</a>
                        <div class="acc__panel" id="significance3">
                            <!--  -->
                            <div class="box-height">
                                <div class="red-title">
                                    <div class="template12-img">
                                        <img src="assets/images/Technological Challenges.jpg">
                                    </div>
                                    <h4 style="color: #000"><strong>Infrastructure Resilience:</strong> </h4>
                                    <p> CEH expertise ensures robust cybersecurity measures, safeguarding critical
                                        infrastructure from
                                        cyber threats, preventing disruptions in power generation, aviation</p>
                                    <h4 style="color: #000"><strong> Operational Continuity: </strong> </h4>
                                    <p> CEH-certified professionals contribute to uninterrupted operations by identifying
                                        vulnerabilities, implementing security measures, and responding effectively to cyber
                                        incidents,
                                        crucial for sustaining essential services. </p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box three end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#significance4" class="acc__title">HEALTH CARE</a>
                        <div class="acc__panel" id="significance4">
                            <!--  -->
                            <div class="box-height">
                                <div class="red-title">
                                    <div class="template12-img">
                                        <img src="assets/images/Technological Challenges.jpg">
                                    </div>
                                    <h4 style="color: #000"><strong>Infrastructure Resilience:</strong> </h4>
                                    <p> CEH expertise ensures robust cybersecurity measures, safeguarding critical
                                        infrastructure from
                                        cyber threats, preventing disruptions in power generation, aviation</p>
                                    <h4 style="color: #000"><strong> Operational Continuity: </strong> </h4>
                                    <p> CEH-certified professionals contribute to uninterrupted operations by identifying
                                        vulnerabilities, implementing security measures, and responding effectively to cyber
                                        incidents,
                                        crucial for sustaining essential services. </p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box four end -->
                    <!-- box 5 end -->
                    <div class="acc__card">
                        <a href="#significance5" class="acc__title">GOVERMENT, PSU & DEFENCE</a>
                        <div class="acc__panel" id="significance5">
                            <!--  -->
                            <div class="box-height">
                                <div class="red-title">
                                    <div class="template12-img">
                                        <img src="assets/images/Technological Challenges.jpg">
                                    </div>
                                    <h4 style="color: #000"><strong>Infrastructure Resilience:</strong> </h4>
                                    <p> CEH expertise ensures robust cybersecurity measures, safeguarding critical
                                        infrastructure from
                                        cyber threats, preventing disruptions in power generation, aviation</p>
                                    <h4 style="color: #000"><strong> Operational Continuity: </strong> </h4>
                                    <p> CEH-certified professionals contribute to uninterrupted operations by identifying
                                        vulnerabilities, implementing security measures, and responding effectively to cyber
                                        incidents,
                                        crucial for sustaining essential services. </p>
                                </div>
                                <!--  -->
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box 5 end --> --}}

                </div>
                <!-- faq End -->
                <!--  -->
            </div>
            <!-- mobile content end  -->

        </section>
        <!-- Significance end 2--->

        <!-- program info 3-->
        <section class="anchor-link sample7-line space7 ceh-pro" id="ceh-program">
            <!-- title  -->
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 cn-title ceh-title">
                        <h2>CEH Program Information</h2>
                    </div>
                </div>
            </div>
            <!--title end-->
            <!-- body start -->
            <div class="container desktop-view ceh-program">
                <div class="row">
                    <!-- tab1 menu start  -->
                    @php
                    $displayedFaqCategories = []; // Array to store displayed FAQ category IDs
                   @endphp
                    <ul class="nav nav-tabs program-tab program-tab1">
                        @foreach ($l3Categories as $category)
                        @foreach ($category->contentInfos as $contentInfo)
                            @if ($contentInfo->programCategory && !in_array($contentInfo->programCategory->id, $displayedFaqCategories))
                                @php
                                    $displayedFaqCategories[] = $contentInfo->programCategory->id; // Mark this ID as displayed
                                @endphp
                                <li class="{{ $loop->first ? 'active' : '' }}">
                                    <a data-toggle="tab"
                                        href="#{{ strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace([' ', '&', ','], '-', $contentInfo->programCategory->name))) }}">
                                        {{ $contentInfo->programCategory->name }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                    </ul>

                    <!-- tab1 menu end  -->
                    <!-- tab content box start -->
                    <div class="tab-content program-content">
                        <!-- tab1 conrent start -->
                        <div id="co" class="tab-pane fade in active">
                            <!--  -->
                            <div class="container module-tab">
                                <div class="row">
                                    <div class="pro-title">
                                        <h3>CEH Course Syllabus/Outline</h3>
                                        <p>20-module program, designed to prepare you for success in the challenging CEH
                                            certification exam.
                                        </p>
                                    </div>
                                    <!--  -->
                                    <div class="pro-ul-box">
                                        <div class="row">
                                            <!-- tab 1 start  -->
                                            <div class="col-md-6">
                                                <div class="pro-mod1">
                                                    <div class="acc">

                                                        <div class="acc__card">
                                                            <a href="#module_m1" class="acc__title">Module 01:
                                                                Introduction to Ethical Hacking</a>
                                                            <div class="acc__panel" id="module_m1">
                                                                <ul class="acc_panel-ul">
                                                                    <li>Overview of ethical hacking concepts.</li>
                                                                    <li>Understanding the importance of ethical hacking in
                                                                        cybersecurity.</li>
                                                                    <li>Introduction to hacking methodologies and tools.
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_m2" class="acc__title">Module 02 :
                                                                Footprinting and Reconnaissance</a>
                                                            <div class="acc__panel" id="module_m2">
                                                                <div class="pro-box-height">
                                                                    <p>Learn how to identify security loopholes in a target
                                                                        organization’s network,
                                                                        communication infrastructure, and end systems</p>
                                                                    <div class="row acc__panel_space">
                                                                        <div class="col-md-4">
                                                                            <p><strong> Lab Exercises:</strong></p>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="left-content">
                                                                                <p>Over 5 hands-on exercises with real-life
                                                                                    simulated targets to build skills on
                                                                                    how
                                                                                    to:</p>
                                                                                <ul>
                                                                                    <li>Perform Vulnerability Research using
                                                                                        Vulnerability Scoring Systems and
                                                                                        Databases</li>
                                                                                    <li>Perform Vulnerability Assessment
                                                                                        using Various Vulnerability
                                                                                        Assessment
                                                                                        Tools
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <p><strong> Lab Exercises:</strong></p>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="left-content">
                                                                                <p>Over 5 hands-on exercises with real-life
                                                                                    simulated targets to build skills on
                                                                                    how
                                                                                    to:</p>
                                                                                <ul>
                                                                                    <li>Perform Vulnerability Research using
                                                                                        Vulnerability Scoring Systems and
                                                                                        Databases</li>
                                                                                    <li>Perform Vulnerability Assessment
                                                                                        using Various Vulnerability
                                                                                        Assessment
                                                                                        Tools
                                                                                    </li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="close-acrodin close-acrodin1"> Close</a>

                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- tab 1 end -->
                                            <!-- tab 1 start  -->
                                            {{-- <div class="col-md-6">
                                                <div class="pro-mod1">
                                                    <div class="acc">

                                                        <div class="acc__card">
                                                            <a href="#module_m11" class="acc__title">Module 11: Session
                                                                Hijacking </a>
                                                            <div class="acc__panel" id="module_m11">
                                                                <ul>
                                                                    <li>Understanding session hijacking concepts.</li>
                                                                    <li>Exploring session hijacking tools and methods.</li>
                                                                    <li>Implementing safeguards against session hijacking.
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_m12" class="acc__title">Module 12 : Hacking
                                                                Web Servers </a>
                                                            <div class="acc__panel" id="module_m12">
                                                                <ul>
                                                                    <li>Techniques for compromising web server security.
                                                                    </li>
                                                                    <li>Analyzing web server vulnerabilities.</li>
                                                                    <li>Implementing measures to secure web servers.</li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <!-- tab 1 end -->
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>

                            <!--  -->
                        </div>



                        <!-- tab1 conrent end  -->
                        <!-- tab2 conrent start -->
                        <div id="wnc" class="tab-pane fade">
                            <!--  -->
                            <div class="container">
                                <div class="row">
                                    <!--  -->
                                    <div class="col-md-4">
                                        <div class="vertical-ceh">
                                            <ul class="nav nav-tabs vertical-ceh-nav">
                                                <li class="active bg1"><a data-toggle="tab" href="#learn">Learn <i
                                                            class="fa fa-arrow-right"></i></a>
                                                </li>
                                                <li class="bg2"><a data-toggle="tab" href="#certify">Certify <i
                                                            class="fa fa-arrow-right"></i></a>
                                                </li>
                                                <li class="bg3"><a data-toggle="tab" href="#engage">Engage <i
                                                            class="fa fa-arrow-right"></i></a>
                                                </li>
                                                <li class="bg4"><a data-toggle="tab" href="#compete">Compete <i
                                                            class="fa fa-arrow-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--  -->
                                    <div class="col-md-8 tab-content program-content">
                                        <!-- tab1 conrent start -->
                                        <div id="learn" class="tab-pane fade in active">
                                            <div class="vert-box">
                                                <h4>What You Will Learn</h4>
                                                <p>
                                                    CIEH is divided into 20 modules and delivered through a carefully
                                                    curated training plan that
                                                    typically spans 5 days. As you progress through your training, each
                                                    module offers extensive
                                                    hands-on lab components that allow you to practice the techniques and
                                                    procedures taught in the
                                                    program in real time on live machines.
                                                </p>

                                                <h4>Ethical Hacking Labs</h4>
                                                <p>With over 220 hands-on labs conducted in our cyber range environment, you
                                                    will have the
                                                    opportunity to practice every learning objective on live machines and
                                                    vulnerable targets in the
                                                    course. Pre-loaded with over 3,500 hacking tools and various operating
                                                    systems, you will gain
                                                    unprecedented exposure to and hands-on experience with the most common
                                                    security tools, the
                                                    latest vulnerabilities, and widely used operating systems on the market.
                                                    Our range is web
                                                    accessible, allowing you to study and practice from anywhere with a
                                                    connection.</p>


                                            </div>
                                        </div>
                                        <!--  -->
                                        <!-- tab1 conrent start -->
                                        <div id="certify" class="tab-pane fade">
                                            <div class="vert-box">
                                                <h4>How you Will Get Certified</h4>
                                                <p>Prove Your Skills and Abilities with Online, Practical Examinations</p>
                                                <div class="template12-img">
                                                    <img src="assets/images/EC-Council-CEH-V12.png">
                                                </div>
                                                <!-- Accordion -->
                                                <!-- Accordion -->
                                                <div class="certify-box">
                                                    <div class="acc">
                                                        <div class="acc__card">
                                                            <a href="#faq1" class="acc__title active">Accordion Title
                                                                #1</a>
                                                            <div class="acc__panel" style="display:block" id="faq1">
                                                                I am the content found under accordion #1.
                                                                You can't see me while "active" is not present.
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#faq2" class="acc__title">Accordion Title #2</a>
                                                            <div class="acc__panel" id="faq2">
                                                                <!--  -->
                                                                <div class="ceh-table">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>Exam Details</th>
                                                                                <th>C|EH MCQ(Exam)</th>
                                                                                <th>C|EH (Practical)</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Number of Questions/ Practical
                                                                                    Challenges</td>
                                                                                <td>125</td>
                                                                                <td>20</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Test Duration</td>
                                                                                <td>4 Hours</td>
                                                                                <td>6 Hours</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Test Format</td>
                                                                                <td>Multiple Choice Questions</td>
                                                                                <td>iLabs Cyber Range</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Test Delivery</td>
                                                                                <td>
                                                                                    <ul class="acc_panel-ul">
                                                                                        <li>Overview of ethical hacking
                                                                                            concepts.</li>
                                                                                        <li>Understanding the importance of
                                                                                            ethical hacking in
                                                                                            cybersecurity.</li>
                                                                                        <li>Introduction to hacking
                                                                                            methodologies and tools.</li>
                                                                                    </ul>
                                                                                </td>
                                                                                <td>–</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Availability</td>
                                                                                <td>–</td>
                                                                                <td>Aspen – iLabs</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Exam Prefix</td>
                                                                                <td>312-50(ECC EXAM), 312-50(VUE)</td>
                                                                                <td>–</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Passing Score</td>
                                                                                <td>Please refer to </td>
                                                                                <td>70%</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <!--  -->
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <!-- faq End -->
                                                <!-- faq End -->
                                            </div>
                                        </div>
                                        <!--  -->
                                        <!-- tab1 conrent start -->
                                        <div id="engage" class="tab-pane fade">
                                            <div class="vert-box">
                                                <h4>How You Will Engage</h4>
                                                <p>The CIEH V12 program helps you develop real-world experience in ethical
                                                    hacking through the
                                                    hands-on CIEH practice environment. CIEH Engage equips you with the
                                                    skills to prove that you
                                                    have what it takes to be a great ethical hacker. Your security
                                                    assessment objectives will be
                                                    presented as a series of flags (questions you must answer in the Cyber
                                                    Range by performing
                                                    ethical hacking activities on the target organization). New to CIEH v12,
                                                    students will embark on
                                                    their first emulated ethical hacking engagement. This 4-phase engagement
                                                    requires students to
                                                    think critically and test the knowledge and skills gained by capturing a
                                                    series of flags in each
                                                    phase, demonstrating the live application of skills and abilities in a
                                                    consequence-free
                                                    environment through EC-Council's new Cyber Range. As you complete your
                                                    training and hands-on
                                                    labs, CIEH Engage lets you apply everything you have learned in a mock
                                                    ethical hacking
                                                    engagement. This 4-part security engagement gives you a real ethical
                                                    hacking engagement
                                                    experience from start to finish against an emulated organization. Using
                                                    our
                                                    capture-the-flag-style range, you will complete your engagement by
                                                    answering "flag" questions as
                                                    you progress.</p>
                                                <!--  -->
                                                <div class="ceh-table">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th>PHASE 1</th>
                                                                <th>PHASE 2</th>
                                                                <th>PHASE 3</th>
                                                                <th>PHASE 4</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Vulnerability Assessment</td>
                                                                <td>Gaining Access</td>
                                                                <td>Perimeter and Web App Exploitation</td>
                                                                <td>Mobile, IoT, OT Exploitation</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <ul class="acc_panel-ul">
                                                                        <li> Foot Printing &amp; Reconnaissance</li>
                                                                        <li>Scanning</li>
                                                                        <li>Enumeration</li>
                                                                        <li>Vulnerability Analysis</li>
                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <div>

                                                                        <ul class="acc_panel-ul">
                                                                            <li> System Hacking</li>
                                                                            <li> Malware Threats</li>
                                                                            <li>Sniffing</li>
                                                                            <li> Social Engineering</li>
                                                                            <li>Denial-of-Service</li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <ul class="acc_panel-ul">
                                                                        <li> Session Hijacking</li>
                                                                        <li>Evading IDS</li>
                                                                        <li> Firewalls</li>
                                                                        <li>Honeypots</li>
                                                                        <li>Hacking</li>
                                                                        <li> Web Servers</li>
                                                                        <li>Hacking Web Applications</li>
                                                                        <li> SQL Injection</li>
                                                                    </ul>
                                                                </td>
                                                                <td>

                                                                    <ul class="acc_panel-ul">
                                                                        <li> Hacking Wireless Networks</li>
                                                                        <li> Hacking Mobile Platforms</li>
                                                                        <li> IoT Hacking</li>
                                                                        <li> OT Hacking</li>
                                                                        <li> Cloud Computing</li>
                                                                        <li>Cryptography</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--  -->
                                            </div>
                                        </div>
                                        <!-- tab1 conrent start -->
                                        <div id="compete" class="tab-pane fade">
                                            <div class="vert-box">
                                                <h4>Where You Will Compete</h4>
                                                <p>The CIEH Global Challenges occur every month, providing capture-the-flag
                                                    style competitions
                                                    that expose students to various new technologies and platforms, from web
                                                    applications, OT, IoT,
                                                    SCADA, and ICS systems to cloud and hybrid environments. Our Compete
                                                    structure lets ethical
                                                    hackers fight their way to the top of the leaderboard each month in
                                                    these 4-hour curated CTFs.
                                                    Objective-based flags are designed around the ethical hacking process,
                                                    keeping skills current,
                                                    testing critical thinking abilities, and covering the latest
                                                    vulnerabilities and exploits as
                                                    they are discovered. Hosted 100% online in EC-Council's Cyber Range,
                                                    candidates race the clock
                                                    in scenario-based engagements against fully developed network and
                                                    application environments with
                                                    real operating systems, real networks, tools, and vulnerabilities to
                                                    practice, engage, compete,
                                                    build, and hone their cyber skills against various new target
                                                    organizations.</p>

                                            </div>
                                        </div>
                                        <!--  -->

                                    </div>
                                    <!--  -->

                                    <!--  -->
                                </div>
                            </div>

                            <!--  -->
                        </div>
                        <!-- tab2 conrent end -->
                        <!-- tab3 conrent start -->
                        <div id="who_it" class="tab-pane fade">
                            <!--  -->
                            <div class="container">
                                <div class="row">
                                    <div class="pro-title">
                                        <h3>Who is it for?</h3>
                                        <p>20-module program, designed to prepare you for success in the challenging CEH
                                            certification exam.
                                        </p>
                                    </div>
                                    <!--  -->
                                    <div class="pro-ul-box">
                                        <ul>
                                            <li>Mid-Level Information Security Auditor</li>
                                            <li> Cybersecurity Auditor</li>
                                            <li> Security Administrator</li>
                                            <li>IT Security Administrator</li>
                                            <li> Cyber Defense Analyst</li>
                                            <li> Vulnerability Assessment Analyst</li>
                                            <li> Warning Analyst</li>
                                            <li> Information Security Analyst 1</li>
                                            <li> Security Analyst L1</li>
                                            <li> Infosec Security Administrator</li>
                                            <li> Cybersecurity Job Roles Mapped to C|EH</li>
                                            <li> Cybersecurity Analyst Level 1, Level 2, & Level 3</li>
                                            <li> Network Security Engineer</li>
                                            <li> SOC Security Analyst</li>
                                            <li> Security Analyst</li>
                                            <li> Network Engineer</li>
                                            <li> Senior Security Consultant</li>
                                            <li> Information Security Manager</li>
                                            <li> Senior SOC Analyst</li>
                                            <li> Solution Architect</li>
                                            <li> Cybersecurity Consultant</li>
                                        </ul>

                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                            <!--  -->
                        </div>
                        <!-- tab3 conrent end -->
                        <!-- tab4 conrent start -->
                        <div id="brochure" class="tab-pane brochure-row fade">
                            <!--  -->
                            <div class="container">
                                <div class="pro-ul-box">
                                    <div class="row">
                                        <!--  -->
                                        <div class="col-md-8">
                                            <!--  -->
                                            <div class="brochure-box">
                                                <p>Making an informed decision is difficult, and that’s where the
                                                    EC-Council’s C|EH brochure comes
                                                    to your rescue. The Certified Ethical Hacker (C|EH) credential is the
                                                    most trusted ethical
                                                    hacking certification that employers worldwide value. And for good
                                                    reasons.</p>
                                                <p>The comprehensive curriculum covers the fundamentals of ethical hacking,
                                                    footprinting and
                                                    reconnaissance, scanning, enumeration, vulnerability threats, social
                                                    engineering, SQL injection,
                                                    and much more.</p>
                                                <p>When you successfully achieve the C|EH certification, you will be
                                                    equipped with every skill you
                                                    need to uncover vulnerabilities and secure the systems, networks,
                                                    applications, databases, and
                                                    critical data from malicious hackers.</p>
                                                <p>This is only an overview of C|EH and what you will learn.</p>
                                                <p><strong>For complete information, download the brochure now.</strong></p>
                                                <a href="#">Download Brochure</a>
                                            </div>
                                            <!--  -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="brochure-img">
                                                <img
                                                    src="https://www.eccouncil.org/wp-content/uploads/2023/01/CEH-cover-broucher-scaled.jpg.webp">
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                            <!--  -->
                        </div>
                        <!-- tab4 conrent end -->

                    </div>
                    <!-- tab content box end -->
                </div>
            </div>
            <!-- body end -->
            <!-- mobile end -->
            <div class="container mobile-view">
                <!--  -->
                <div class="acc">
                    <!-- box first start -->
                    <div class="acc__card">
                        <a href="#program_1" class="acc__title active"
                            style=" background: #deecfb !important;  color:#222 !important;">Course Outline</a>
                        <div class="acc__panel" style="display:block" id="program_1">
                            <!--  -->
                            <!--  -->
                            <div class="container">
                                <div class="row">
                                    <div class="pro-title">
                                        <h3>CEH Course Syllabus/Outline</h3>
                                        <p>20-module program, designed to prepare you for success in the challenging CEH
                                            certification exam.
                                        </p>
                                    </div>
                                    <!--  -->
                                    <div class="outline-heigh1">
                                        <div class="row">
                                            <!-- tab 1 start  -->
                                            <div class="col-md-6">
                                                <div class="pro-mod1">
                                                    <div class="acc">

                                                        <div class="acc__card">
                                                            <a href="#module_1" class="acc__title">Module 01: Introduction
                                                                to Ethical Hacking</a>
                                                            <div class="acc__panel" id="module_1">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_2" class="acc__title">Module 02 :
                                                                Footprinting and Reconnaissance</a>
                                                            <div class="acc__panel" id="module_2">
                                                                <div class="mobile-outline">
                                                                    <p>Learn how to identify security loopholes in a target
                                                                        organization’s network,
                                                                        communication infrastructure, and end systems</p>
                                                                    <div class="row acc__panel_space">
                                                                        <div class="col-md-4">
                                                                            <p><strong> Lab Exercises:</strong></p>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="left-content">
                                                                                <p>Over 5 hands-on exercises with real-life
                                                                                    simulated targets to build skills on
                                                                                    how
                                                                                    to:</p>
                                                                                <ul>
                                                                                    <li>Perform Vulnerability Research using
                                                                                        Vulnerability Scoring Systems and
                                                                                        Databases</li>
                                                                                    <li>Perform Vulnerability Assessment
                                                                                        using Various Vulnerability
                                                                                        Assessment
                                                                                        Tools
                                                                                    </li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <p><strong> Lab Exercises:</strong></p>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="left-content">
                                                                                <p>Over 5 hands-on exercises with real-life
                                                                                    simulated targets to build skills on
                                                                                    how
                                                                                    to:</p>
                                                                                <ul>
                                                                                    <li>Perform Vulnerability Research using
                                                                                        Vulnerability Scoring Systems and
                                                                                        Databases</li>
                                                                                    <li>Perform Vulnerability Assessment
                                                                                        using Various Vulnerability
                                                                                        Assessment
                                                                                        Tools
                                                                                    </li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>

                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_3" class="acc__title">Module 03: Scanning
                                                                Networks </a>
                                                            <div class="acc__panel" id="module_3">
                                                                <div class="mobile-outline">
                                                                    <!-- content start -->
                                                                    <p>Learn how to identify security loopholes in a target
                                                                        organization’s network,
                                                                        communication infrastructure, and end systems</p>
                                                                    <div class="row acc__panel_space">
                                                                        <div class="col-md-4">
                                                                            <p><strong> Lab Exercises:</strong></p>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="left-content">
                                                                                <p>Over 5 hands-on exercises with real-life
                                                                                    simulated targets to build skills on
                                                                                    how
                                                                                    to:</p>
                                                                                <ul>
                                                                                    <li>Perform Vulnerability Research using
                                                                                        Vulnerability Scoring Systems and
                                                                                        Databases</li>
                                                                                    <li>Perform Vulnerability Assessment
                                                                                        using Various Vulnerability
                                                                                        Assessment
                                                                                        Tools
                                                                                    </li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <p><strong> Lab Exercises:</strong></p>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="left-content">
                                                                                <p>Over 5 hands-on exercises with real-life
                                                                                    simulated targets to build skills on
                                                                                    how
                                                                                    to:</p>
                                                                                <ul>
                                                                                    <li>Perform Vulnerability Research using
                                                                                        Vulnerability Scoring Systems and
                                                                                        Databases</li>
                                                                                    <li>Perform Vulnerability Assessment
                                                                                        using Various Vulnerability
                                                                                        Assessment
                                                                                        Tools
                                                                                    </li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <!-- content end -->
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <!--  -->
                                                        <div class="acc__card">
                                                            <a href="#module_4" class="acc__title">Module 04 : Enumeration
                                                            </a>
                                                            <div class="acc__panel" id="module_4">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <!--  -->
                                                        <!--  -->
                                                        <!-- <div class="acc__card">
                                                                                                                    <a href="#module_5" class="acc__title">Module 05 : Vulnerability Analysis </a>
                                                                                                                    <div class="acc__panel" id="module_5">
                                                                                                                      <div class="mobile-outline">
                                                                                                                      <ul class="acc_panel-ul">
                                                                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                                                                        <li>Understanding the importance of ethical hacking in cybersecurity.</li>
                                                                                                                        <li>Introduction to hacking methodologies and tools.</li>
                                                                                                                      </ul>
                                                                                                                      </div>
                                                                                                                       <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                                                                                                                    </div>
                                                                                                                  </div> -->
                                                        <!--  -->
                                                        <!--  -->
                                                        <div class="acc__card">
                                                            <a href="#module_61" class="acc__title">Module 05 :
                                                                Vulnerability Analysis</a>
                                                            <div class="acc__panel" id="module_61">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>

                                                        <div class="acc__card">
                                                            <a href="#module_6" class="acc__title">Module 06 : System
                                                                Hacking </a>
                                                            <div class="acc__panel" id="module_6">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_7" class="acc__title">Module 07 : Malware
                                                                Threats </a>
                                                            <div class="acc__panel" id="module_7">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_71" class="acc__title">Module 08 :
                                                                Sniffing</a>
                                                            <div class="acc__panel" id="module_71">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_72" class="acc__title">Module 09 : Social
                                                                Engineering </a>
                                                            <div class="acc__panel" id="module_72">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="acc__card">
                                                                                                                    <a href="#module_8" class="acc__title">Module 08 : Sniffing </a>
                                                                                                                    <div class="acc__panel" id="module_8">
                                                                                                                     <div class="mobile-outline">
                                                                                                                        <ul class="acc_panel-ul">
                                                                                                                          <li>Overview of ethical hacking concepts.</li>
                                                                                                                          <li>Understanding the importance of ethical hacking in cybersecurity.</li>
                                                                                                                          <li>Introduction to hacking methodologies and tools.</li>
                                                                                                                        </ul>
                                                                                                                      </div>
                                                                                                                       <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                                                                                                                    </div>
                                                                                                                  </div>
                                                                                                                  <div class="acc__card">
                                                                                                                    <a href="#module_9" class="acc__title">Module 09 : Social Engineering </a>
                                                                                                                    <div class="acc__panel" id="module_9">
                                                                                                                      <div class="mobile-outline">
                                                                                                                      <ul class="acc_panel-ul">
                                                                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                                                                        <li>Understanding the importance of ethical hacking in cybersecurity.</li>
                                                                                                                        <li>Introduction to hacking methodologies and tools.</li>
                                                                                                                      </ul>
                                                                                                                      </div>
                                                                                                                       <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                                                                                                                    </div>
                                                                                                                  </div> -->
                                                        <div class="acc__card">
                                                            <a href="#module_10" class="acc__title">Module 10 :
                                                                Denial-of-Service (DoS) </a>
                                                            <div class="acc__panel" id="module_10">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- tab 1 end -->
                                            <!-- tab 1 start  -->
                                            <div class="col-md-6">
                                                <div class="pro-mod1">
                                                    <div class="acc">

                                                        <div class="acc__card">
                                                            <a href="#module_11" class="acc__title">Module 11: Session
                                                                Hijacking </a>
                                                            <div class="acc__panel" id="module_11">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_12" class="acc__title">Module 12 : Hacking
                                                                Web Servers </a>
                                                            <div class="acc__panel" id="module_12">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_13" class="acc__title">Module 13 : Hacking
                                                                Web Applications </a>
                                                            <div class="acc__panel" id="module_13">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_14" class="acc__title">Module 14 : SQL
                                                                Injection </a>
                                                            <div class="acc__panel" id="module_14">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_15" class="acc__title">Module 15 : Hacking
                                                                Wireless Networks </a>
                                                            <div class="acc__panel" id="module_15">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_16" class="acc__title">Module 16 : Evading
                                                                IDS, Firewalls, and Honeypots
                                                            </a>
                                                            <div class="acc__panel" id="module_16">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_17" class="acc__title">Module 17 : Buffer
                                                                Overflow </a>
                                                            <div class="acc__panel" id="module_17">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_18" class="acc__title">Module 18 :
                                                                Cryptography </a>
                                                            <div class="acc__panel" id="module_18">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_19" class="acc__title">Module 19 :
                                                                Penetration Testing </a>
                                                            <div class="acc__panel" id="module_19">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                        <div class="acc__card">
                                                            <a href="#module_20" class="acc__title">Module 20 : Ethical
                                                                Hacking Best Practices </a>
                                                            <div class="acc__panel" id="module_20">
                                                                <div class="mobile-outline">
                                                                    <ul class="acc_panel-ul">
                                                                        <li>Overview of ethical hacking concepts.</li>
                                                                        <li>Understanding the importance of ethical hacking
                                                                            in cybersecurity.</li>
                                                                        <li>Introduction to hacking methodologies and tools.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <a href="javascript:void(0)" class="close-acrodin">
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- tab 1 end -->
                                        </div>

                                    </div>

                                    <a href="javascript:void(0)" class="close-acrodin close-space close-space50">
                                        Close</a>
                                    <!--  -->


                                </div>
                            </div>

                            <!--  -->
                            <!--  -->

                        </div>
                    </div>
                    <!-- box first end -->
                    <!-- box two end -->
                    <div class="acc__card">
                        <a href="#program_2" class="acc__title"
                            style=" background: #fbe79f !important;  color:#222 !important;">What's New in CEH</a>
                        <div class="acc__panel" id="program_2">
                            <!--  -->
                            <!--  -->
                            <!-- mobile end -->
                            <div class="pro-mbile pro-mbile1 ">
                                <!--  -->
                                <div class="acc acc-m">
                                    <!-- box first start -->
                                    <div class="acc__card">
                                        <a href="#Learn_1" class="acc__title mbg1 active">Learn <i
                                                class="fa fa-arrow-right"></i></a>
                                        <div class="acc__panel" style="display:block" id="Learn_1">
                                            <!--  -->
                                            <div class="vert-box box-height">
                                                <h4>What You Will Learn</h4>
                                                <p>
                                                    CIEH is divided into 20 modules and delivered through a carefully
                                                    curated training plan that
                                                    typically spans 5 days. As you progress through your training, each
                                                    module offers extensive
                                                    hands-on lab components that allow you to practice the techniques and
                                                    procedures taught in the
                                                    program in real time on live machines.
                                                </p>

                                                <h4>Ethical Hacking Labs</h4>
                                                <p>With over 220 hands-on labs conducted in our cyber range environment, you
                                                    will have the
                                                    opportunity to practice every learning objective on live machines and
                                                    vulnerable targets in the
                                                    course. Pre-loaded with over 3,500 hacking tools and various operating
                                                    systems, you will gain
                                                    unprecedented exposure to and hands-on experience with the most common
                                                    security tools, the
                                                    latest vulnerabilities, and widely used operating systems on the market.
                                                    Our range is web
                                                    accessible, allowing you to study and practice from anywhere with a
                                                    connection.</p>
                                            </div>
                                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <!-- box first end -->
                                    <!-- box two end -->
                                    <div class="acc__card">
                                        <a href="#Certify_1" class="acc__title  mbg2">Certify <i
                                                class="fa fa-arrow-right"></i> </a>
                                        <div class="acc__panel" id="Certify_1">
                                            <!--  -->
                                            <div class="vert-box box-height">
                                                <h4>How you Will Get Certified</h4>
                                                <p>Prove Your Skills and Abilities with Online, Practical Examinations</p>
                                                <div class="template12-img">
                                                    <img src="assets/images/EC-Council-CEH-V12.png">
                                                </div>
                                                <!-- Accordion -->
                                                <div class="acc certify-box">
                                                    <div class="acc__card">
                                                        <a href="#certify-box_1" class="acc__title active">Accordion Title
                                                            #1</a>
                                                        <div class="acc__panel" style="display:block" id="certify-box_1">
                                                            I am the content found under accordion #1.
                                                            You can't see me while "active" is not present.
                                                        </div>
                                                    </div>
                                                    <div class="acc__card">
                                                        <a href="#certify-box_2" class="acc__title">Accordion Title #2</a>
                                                        <div class="acc__panel" id="certify-box_2">
                                                            <!--  -->
                                                            <div class="ceh-table">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Exam Details</th>
                                                                            <th>C|EH MCQ(Exam)</th>
                                                                            <th>C|EH (Practical)</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Number of Questions/ Practical Challenges
                                                                            </td>
                                                                            <td>125</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Test Duration</td>
                                                                            <td>4 Hours</td>
                                                                            <td>6 Hours</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Test Format</td>
                                                                            <td>Multiple Choice Questions</td>
                                                                            <td>iLabs Cyber Range</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Test Delivery</td>
                                                                            <td>
                                                                                <ul class="acc_panel-ul">
                                                                                    <li>Overview of ethical hacking
                                                                                        concepts.</li>
                                                                                    <li>Understanding the importance of
                                                                                        ethical hacking in cybersecurity.
                                                                                    </li>
                                                                                    <li>Introduction to hacking
                                                                                        methodologies and tools.</li>
                                                                                </ul>
                                                                            </td>
                                                                            <td>–</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Availability</td>
                                                                            <td>–</td>
                                                                            <td>Aspen – iLabs</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Exam Prefix</td>
                                                                            <td>312-50(ECC EXAM), 312-50(VUE)</td>
                                                                            <td>–</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Passing Score</td>
                                                                            <td>Please refer to </td>
                                                                            <td>70%</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--  -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- faq End -->
                                            </div>
                                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                                            <!--  -->
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!-- box two end -->
                                    <!-- box three end -->
                                    <div class="acc__card">
                                        <a href="#Engage_1" class="acc__title  mbg3">Engage <i
                                                class="fa fa-arrow-right"></i></a>
                                        <div class="acc__panel" id="Engage_1">
                                            <!--  -->
                                            <div class="vert-box box-height">
                                                <h4>How You Will Engage</h4>
                                                <p>The CIEH V12 program helps you develop real-world experience in ethical
                                                    hacking through the
                                                    hands-on CIEH practice environment. CIEH Engage equips you with the
                                                    skills to prove that you
                                                    have what it takes to be a great ethical hacker. Your security
                                                    assessment objectives will be
                                                    presented as a series of flags (questions you must answer in the Cyber
                                                    Range by performing
                                                    ethical hacking activities on the target organization). New to CIEH v12,
                                                    students will embark on
                                                    their first emulated ethical hacking engagement. This 4-phase engagement
                                                    requires students to
                                                    think critically and test the knowledge and skills gained by capturing a
                                                    series of flags in each
                                                    phase, demonstrating the live application of skills and abilities in a
                                                    consequence-free
                                                    environment through EC-Council's new Cyber Range. As you complete your
                                                    training and hands-on
                                                    labs, CIEH Engage lets you apply everything you have learned in a mock
                                                    ethical hacking
                                                    engagement. This 4-part security engagement gives you a real ethical
                                                    hacking engagement
                                                    experience from start to finish against an emulated organization. Using
                                                    our
                                                    capture-the-flag-style range, you will complete your engagement by
                                                    answering "flag" questions as
                                                    you progress.</p>
                                                <!--  -->
                                                <div class="ceh-table">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th>PHASE 1</th>
                                                                <th>PHASE 2</th>
                                                                <th>PHASE 3</th>
                                                                <th>PHASE 4</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Vulnerability Assessment</td>
                                                                <td>Gaining Access</td>
                                                                <td>Perimeter and Web App Exploitation</td>
                                                                <td>Mobile, IoT, OT Exploitation</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <ul class="acc_panel-ul">
                                                                        <li> Foot Printing &amp; Reconnaissance</li>
                                                                        <li>Scanning</li>
                                                                        <li>Enumeration</li>
                                                                        <li>Vulnerability Analysis</li>
                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <div>

                                                                        <ul class="acc_panel-ul">
                                                                            <li> System Hacking</li>
                                                                            <li> Malware Threats</li>
                                                                            <li>Sniffing</li>
                                                                            <li> Social Engineering</li>
                                                                            <li>Denial-of-Service</li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <ul class="acc_panel-ul">
                                                                        <li> Session Hijacking</li>
                                                                        <li>Evading IDS</li>
                                                                        <li> Firewalls</li>
                                                                        <li>Honeypots</li>
                                                                        <li>Hacking</li>
                                                                        <li> Web Servers</li>
                                                                        <li>Hacking Web Applications</li>
                                                                        <li> SQL Injection</li>
                                                                    </ul>
                                                                </td>
                                                                <td>

                                                                    <ul class="acc_panel-ul">
                                                                        <li> Hacking Wireless Networks</li>
                                                                        <li> Hacking Mobile Platforms</li>
                                                                        <li> IoT Hacking</li>
                                                                        <li> OT Hacking</li>
                                                                        <li> Cloud Computing</li>
                                                                        <li>Cryptography</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--  -->
                                            </div>
                                            <!--  -->
                                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!-- box three end -->
                                    <!-- box 5 end -->
                                    <div class="acc__card">
                                        <a href="#Compete_1" class="acc__title mbg4">Compete <i
                                                class="fa fa-arrow-right"></i></a>
                                        <div class="acc__panel" id="Compete_1">
                                            <!--  -->
                                            <div class="vert-box box-height">
                                                <h4>Where You Will Compete</h4>
                                                <p>The CIEH Global Challenges occur every month, providing capture-the-flag
                                                    style competitions
                                                    that expose students to various new technologies and platforms, from web
                                                    applications, OT, IoT,
                                                    SCADA, and ICS systems to cloud and hybrid environments. Our Compete
                                                    structure lets ethical
                                                    hackers fight their way to the top of the leaderboard each month in
                                                    these 4-hour curated CTFs.
                                                    Objective-based flags are designed around the ethical hacking process,
                                                    keeping skills current,
                                                    testing critical thinking abilities, and covering the latest
                                                    vulnerabilities and exploits as
                                                    they are discovered. Hosted 100% online in EC-Council's Cyber Range,
                                                    candidates race the clock
                                                    in scenario-based engagements against fully developed network and
                                                    application environments with
                                                    real operating systems, real networks, tools, and vulnerabilities to
                                                    practice, engage, compete,
                                                    build, and hone their cyber skills against various new target
                                                    organizations.</p>

                                            </div>
                                            <!--  -->
                                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                                        </div>
                                    </div>
                                    <!-- box 5 end -->

                                </div>
                                <!-- faq End -->
                                <!--  -->
                            </div>
                            <!-- mobile start -->

                            <!--  -->
                            <!--  -->
                        </div>
                    </div>
                    <!--  -->
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#program_3" class="acc__title"
                            style=" background: #a9efa9 !important;  color:#222 !important;">Who
                            is it for?</a>
                        <div class="acc__panel" id="program_3">
                            <!--  -->
                            <!--  -->
                            <div class="box-height">
                                <div class="container">
                                    <div class="row">
                                        <div class="pro-title">
                                            <h3>Who is it for?</h3>
                                            <p>20-module program, designed to prepare you for success in the challenging CEH
                                                certification exam.
                                            </p>
                                        </div>
                                        <!--  -->
                                        <div class="pro-ul-box">
                                            <ul>
                                                <li>Mid-Level Information Security Auditor</li>
                                                <li> Cybersecurity Auditor</li>
                                                <li> Security Administrator</li>
                                                <li>IT Security Administrator</li>
                                                <li> Cyber Defense Analyst</li>
                                                <li> Vulnerability Assessment Analyst</li>
                                                <li> Warning Analyst</li>
                                                <li> Information Security Analyst 1</li>
                                                <li> Security Analyst L1</li>
                                                <li> Infosec Security Administrator</li>
                                                <li> Cybersecurity Job Roles Mapped to C|EH</li>
                                                <li> Cybersecurity Analyst Level 1, Level 2, & Level 3</li>
                                                <li> Network Security Engineer</li>
                                                <li> SOC Security Analyst</li>
                                                <li> Security Analyst</li>
                                                <li> Network Engineer</li>
                                                <li> Senior Security Consultant</li>
                                                <li> Information Security Manager</li>
                                                <li> Senior SOC Analyst</li>
                                                <li> Solution Architect</li>
                                                <li> Cybersecurity Consultant</li>
                                            </ul>

                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin close-space"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!--  -->
                    <!-- box three end -->
                    <!-- box 5 end -->
                    <div class="acc__card">
                        <a href="#program_4" class="acc__title"
                            style=" background: #eee !important;  color:#222 !important;">Brochure</a>
                        <div class="acc__panel" id="program_4">
                            <!--  -->
                            <div class="box-height">
                                <!--  -->
                                <div class="container">
                                    <div class="pro-ul-box">
                                        <div class="row">
                                            <!--  -->
                                            <div class="col-md-8">
                                                <!--  -->
                                                <div class="brochure-box">
                                                    <p>Making an informed decision is difficult, and that’s where the
                                                        EC-Council’s C|EH brochure
                                                        comes
                                                        to your rescue. The Certified Ethical Hacker (C|EH) credential is
                                                        the most trusted ethical
                                                        hacking certification that employers worldwide value. And for good
                                                        reasons.</p>
                                                    <p>The comprehensive curriculum covers the fundamentals of ethical
                                                        hacking, footprinting and
                                                        reconnaissance, scanning, enumeration, vulnerability threats, social
                                                        engineering, SQL
                                                        injection,
                                                        and much more.</p>
                                                    <p>When you successfully achieve the C|EH certification, you will be
                                                        equipped with every skill
                                                        you
                                                        need to uncover vulnerabilities and secure the systems, networks,
                                                        applications, databases, and
                                                        critical data from malicious hackers.</p>
                                                    <p>This is only an overview of C|EH and what you will learn.</p>
                                                    <p><strong>For complete information, download the brochure now.</strong>
                                                    </p>
                                                    <a href="#">Download Brochure</a>
                                                </div>
                                                <!--  -->
                                            </div>
                                            <div class="col-md-4">
                                                <div class="brochure-img">
                                                    <img
                                                        src="https://www.eccouncil.org/wp-content/uploads/2023/01/CEH-cover-broucher-scaled.jpg.webp">
                                                </div>
                                            </div>
                                            <!--  -->
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin close-space"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box 5 end -->

                </div>
                <!-- faq End -->
                <!--  -->
            </div>
            <!-- mobile start -->
            <!--  -->
        </section>
        <!-- program info 3-->

        <!-- course Feature start -->
        <section class="anchor-link sample7-line cf-desktop space7" id="coursefeatures">
            <!-- title  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>COURSE FEATURES</h2>
                        <p>The essential technology that matter most for business today</p>
                    </div>
                </div>
            </div>
            <!--title end-->
            <!-- tab2 start  -->
            <div class="container desktop-view course-features">
                <div class="row">
                    <!-- tab2 menu start -->

                    @foreach ($l3Categories as $category)
                        <ul class="nav nav-tabs sample-tab2-menu" id="tabmenu1">
                            {{-- <li class="active"><a data-toggle="tab" href="#ic">BANKING & FINANCE</a></li> --}}
                            @foreach ($category->contentInfos as $contentInfo)
                                @if ($contentInfo->coursefeatureCategory)
                                    <li class="{{ $loop->first ? 'active' : '' }}"><a data-toggle="tab"
                                            class="codec-tab"
                                            href="#{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->coursefeatureCategory->name)) }}">{{ $contentInfo->coursefeatureCategory->name }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endforeach
                    <!--  tab2 menu end -->
                    <!-- tab2 content box start -->

                    <div class="tab-content sample7-tb-content" style="">
                        <!-- tab1 conrent start -->
                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                @if ($contentInfo->coursefeatureCategory)
                                    <div id="{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->coursefeatureCategory->name)) }}"
                                        class="tab-pane fade in {{ $loop->first ? 'active' : '' }}">
                                        <div class="container">
                                            <div class="row rowp">
                                                @if ($contentInfo->images)
                                                    <div class="col-md-3">
                                                        <div class="template12-img">
                                                            <img
                                                                src="{{ asset('uploads/frontend/l3_template/coursefeature/' . $contentInfo->images) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="red-title">
                                                            @if ($contentInfo->coursefeatureCategory)
                                                                {!! $contentInfo->course_feature_description !!}
                                                            @endif
                                                            <a href="javascript:void(0);" class="btn-hide">Hide Content
                                                                ...</a>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="col-md-12">
                                                        <div class="red-title">
                                                            @if ($contentInfo->coursefeatureCategory)
                                                                {!! $contentInfo->course_feature_description !!}
                                                            @endif
                                                            <a href="javascript:void(0);" class="btn-hide">Hide Content
                                                                ...</a>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach

                        <!-- tab1 content end  -->

                    </div>
                    <!--  tab2 content box end -->
                </div>
            </div>
            <!-- tba2 end -->
            <!-- mobile content start  -->
            <div class="mobile-view indu-moblie count-navigation">
                <div id="owl-demo62" class="owl-carousel owl-theme">
                    @foreach ($l3Categories as $category)
                        @foreach ($category->contentInfos as $contentInfo)
                            @if ($contentInfo->coursefeatureCategory)
                                <div class="item">
                                    <div class="mobile-cf"
                                        data-target="{{ $loop->parent->iteration }}-{{ $loop->iteration }}">
                                        @if ($contentInfo->images)
                                            <img src="{{ asset('uploads/frontend/l3_template/coursefeature/' . $contentInfo->images) }}"
                                                alt="Course Feature Image">
                                        @endif
                                        <div class="mobile-cf-content">
                                            <h3>{{ $contentInfo->coursefeatureCategory->name }}</h3>
                                            {!! $contentInfo->course_feature_description !!}
                                            {{-- {!! Str::words(strip_tags($contentInfo->course_feature_description), 50, '...') !!} --}}
                                            {{-- <a href="javascript:void(0)" class="popup-btn" data-target="popup-{{ $loop->parent->iteration }}-{{ $loop->iteration }}">Read More</a> --}}
                                            <a href="javascript:void(0)" class="popup-btn"
                                                data-target="{{ $loop->parent->iteration }}-{{ $loop->iteration }}">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Popup Modal -->
                            @endif
                        @endforeach
                    @endforeach
                </div>

                <!-- Navigation Dots -->
                <div id="navigation-count2" class="count-nav-box couter-space"></div>
            </div>
            <!-- mobile content end  -->

            @include ('frontend.mobile-components.m-course-features')
        </section>
        <!-- course feature  end -->

        <!--<section class="empower-industry-bg codec-page-section anchor-link" id="industry" style="padding-bottom: 20px !important;">-->
        <!--</section>-->
        <!--ceh kit section>-->
        <section class="anchor-link space7 sample7-line" id="ceh-kit">
            <!--  -->
            <!-- title  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title ceh-title">
                        @foreach ($l3Categories as $category)
                        @foreach ($category->contentInfos as $contentInfo)
                            <!-- Overview Section -->
                            @if ($contentInfo->main_title)
                            {!! $contentInfo->main_title !!}
                            @endif
                        @endforeach
                    @endforeach
                    </div>
                </div>
            </div>
            <!--title end-->
            <div class="container">
                <div class="indu-moblie count-navigation">
                    <div id="owl-demo63" class="owl-carousel owl-theme">
                        <!-- col -->
                        @foreach ($l3Categories as $category)
                    @foreach ($category->contentInfos as $contentInfo)
                        <!-- Overview Section -->
                        @if ($contentInfo->ceh_description)
                        <div class="item">
                            <div class="price-box">
                                <div class="pri-box-number"><span>01</span></div>
                                <div class="price-box-img"><img src="assets/images/ceh1.png"></div>
                                <div class="price-body">
                                    <div class="price-title">
                                        <h4>{{ $contentInfo->kit_title}}</h4>
                                    </div>
                                    <div class="price-content">
                                       {!! $contentInfo->ceh_description !!}
                                    </div>
                                    <div class="price-btn1">
                                        <a href="#" class="price-btn btn-color1">Inquire Now</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endforeach
                       
                      
                    </div>
                    {{-- <div id="navigation-count4" class="count-nav-box"></div> --}}

                </div>

            </div>
            <!--  -->
            <!--  -->
        </section>
        <!--  end -->

        <!--  end -->
        <!-- Incident info Start -->
        <!-- Incident info Start -->
        <section class="anchor-link sample7-line space7 light-grey ceh-video-sec" id="incidents">
            <!-- title  -->
            <div class="container">
                <div class="row">
                    @foreach ($l3Categories as $category)
                    @foreach ($category->contentInfos as $contentInfo)
                        <!-- Overview Section -->
                        @if ($contentInfo->incident_title)
                            {!! $contentInfo->incident_title !!}
                        @endif
                    @endforeach
                @endforeach
                    </div>
                </div>
            </div>
            <!--title end-->
            <!-- body start -->
            <div class="container">
                <div class="row">
                    <!--  -->
                    <div class="col-md-6">
                        <div class="ceh-video-ul">
                            @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                <!-- Overview Section -->
                                @if ($contentInfo->incident_description)
                                    {!! $contentInfo->incident_description !!}
                                @endif
                            @endforeach
                        @endforeach
                        </div>

                    </div>
                    <!--  -->
                    <div class="col-md-6">

                        @foreach ($l3Categories as $category)
                        @foreach ($category->contentInfos as $contentInfo)
                            <!-- Overview Section -->
                            @if ($contentInfo->Video_link)
                            <div data-videourl="{{ $contentInfo->Video_link }}" class="ceh-video button">
                                <img src="{{ asset('uploads/frontend/l3_template/incidents/' . $contentInfo->images) }}">
                            </div>
                            @endif
                        @endforeach
                    @endforeach
                        
                    </div>
                    <!--  -->
                </div>
            </div>
            <!-- body end -->
        </section>
        <!-- Incident info End -->

        <!-- Incident info End -->
        <!--  -->

        <!-- industries section start-->
        <section class="anchor-link sample7-line space7 inud-nav-sec " id="industries">
            <!--  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title ceh-title">
                        <!-- <h1>Industries we cater</h1> -->
                        <h2> Industries We empower through our commitment towards growth
                        </h2>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="container p40">
                <div class="row">
                    <!--  -->
                    <div class="indu-moblie count-navigation">
                        <div id="owl-demo9" class="owl-carousel  inud-nav owl-theme">

                            @foreach ($l3Categories as $category)
                                {{-- <li class="active"><a data-toggle="tab" href="#ic">BANKING & FINANCE</a></li> --}}
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->industryCategory)
                                        <div class="item11 ">
                                            <div class="empower-industry-box">

                                                <div class="cn-hover-box">
                                                    <div class="cn-hover-img">
                                                        @if ($contentInfo->industryCategory)
                                                            <img
                                                                src="{{ asset('uploads/frontend/l3_template/industry/' . $contentInfo->images) }}">
                                                        @endif
                                                    </div>
                                                    <div class="cn-content">

                                                        @if ($contentInfo->industryCategory)
                                                            {!! $contentInfo->industry_description !!}
                                                        @endif
                                                    </div>
                                                </div>
                                                @if ($contentInfo->industryCategory)
                                                    <div class="cn-main-content">
                                                        <h3>{{ $contentInfo->industryCategory->name }}</h3>
                                                        <a href="#">Know more <i class="fa"></i></a>
                                                    </div>
                                                @endif


                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach




                        </div>
                        <div id="navigation-count5" class="count-nav-box"></div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </section>
        <!-- industries section end -->

        <!-- Why Codec Network start  -->
        <section class="anchor-link space7 light-grey sample7-line" id="whycyberwind">
            <!--  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title">
                        <h2>What next for the essential eight?</h2>
                        <p>The technology – still been unexplored meet different challenges. The challenges act as the force
                            that
                            obligates us to evolve</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="container desktop-view why-chossetab">
                <div class="row">
                    <div class="col-md-3 tab3-tab1">
                        <!--  -->
                        <div class="tab3-tab">

                            @foreach ($l3Categories as $category)
                                {{-- <li class="active"><a data-toggle="tab" href="#ic">BANKING & FINANCE</a></li> --}}
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->cyberwindCategory)
                                        {{-- <li class="{{ $loop->first ? 'active' : '' }}"><a data-toggle="tab" class="codec-tab"
                                                href="#{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->cyberwindCategory->name)) }}">{{ $contentInfo->cyberwindCategory->name }}</a>
                                        </li> --}}
                                        <button class="tab3-tablinks"
                                            onclick="openCity(event, '{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->cyberwindCategory->name)) }}')"
                                            id="defaultOpen"> {{ $contentInfo->cyberwindCategory->name }}</button>
                                    @endif
                                @endforeach
                            @endforeach

                        </div>
                        <!--  -->
                    </div>
                    <div class="col-md-9">
                        <!--  -->
                        <div class="tab3-content">
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->cyberwindCategory)
                                        <div id="{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->cyberwindCategory->name)) }}"
                                            class="tab3-tabcontent">
                                            <div class="container">
                                                <div class="row rowp">
                                                    @if ($contentInfo->images)
                                                        <div class="col-md-5">
                                                            <div class="template12-img">
                                                                <img
                                                                    src="{{ asset('uploads/frontend/l3_template/cyberwind/' . $contentInfo->images) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="red-title">
                                                                @if ($contentInfo->cyberwindCategory)
                                                                    {!! $contentInfo->cyberwind_description !!}
                                                                @endif

                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="col-md-7">
                                                            <div class="red-title">
                                                                @if ($contentInfo->cyberwindCategory)
                                                                    {!! $contentInfo->cyberwind_description !!}
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach

                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
            <!--  -->
            <!-- mobile end -->
            <div class="container mobile-view">
                <!--  -->
                <div class="acc">
                    <div class="acc__card">
                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                @if ($contentInfo->cyberwindCategory)
                                    <!-- Accordion Title -->
                                    <a href="javascript:void(0)" class="acc__title {{ $loop->first ? 'active' : '' }}"
                                        data-target="significance-{{ $loop->iteration }}">
                                        {{ $contentInfo->cyberwindCategory->name }}
                                    </a>
                                @endif
                                <!-- Accordion Panel -->
                                <div class="acc__panel {{ $loop->first ? 'open' : '' }}"
                                    id="significance-{{ $loop->iteration }}">
                                    <div class="box-height">
                                        <div class="red-title">
                                            @if ($contentInfo->images)
                                                <div class="template12-img">
                                                    <img
                                                        src="{{ asset('uploads/frontend/l3_template/cyberwind/' . $contentInfo->images) }}">
                                                </div>
                                                {{-- <div class="red-title"> --}}
                                                @if ($contentInfo->cyberwindCategory)
                                                    {!! $contentInfo->cyberwind_description !!}
                                                @endif
                                                {{-- </div> --}}
                                            @else
                                                {{-- <div class="red-title"> --}}
                                                @if ($contentInfo->cyberwindCategory)
                                                    {!! $contentInfo->cyberwind_description !!}
                                                @endif
                                                {{-- </div> --}}
                                            @endif
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="close-acrodin">Close</a>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                    <!-- box first end -->
                    {{-- <!-- box two end -->
                    <div class="acc__card">
                        <a href="#significance2" class="acc__title">CRITICAL INFRASTRUCTURE </a>
                        <div class="acc__panel" id="significance2">
                            <!--  -->
                            <div class="box-height">
                                <div class="red-title">
                                    <div class="template12-img">
                                        <img src="assets/images/Technological Challenges.jpg">
                                    </div>
                                    <h4 style="color: #000"><strong>Infrastructure Resilience:</strong> </h4>
                                    <p> CEH expertise ensures robust cybersecurity measures, safeguarding critical
                                        infrastructure from
                                        cyber threats, preventing disruptions in power generation, aviation</p>
                                    <h4 style="color: #000"><strong> Operational Continuity: </strong> </h4>
                                    <p> CEH-certified professionals contribute to uninterrupted operations by identifying
                                        vulnerabilities, implementing security measures, and responding effectively to cyber
                                        incidents,
                                        crucial for sustaining essential services. </p>
                                </div>
                                <!--  -->
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box two end -->
                    <!-- box three end -->
                    <div class="acc__card">
                        <a href="#significance3" class="acc__title">APPLICATION SOFTWATE</a>
                        <div class="acc__panel" id="significance3">
                            <!--  -->
                            <div class="box-height">
                                <div class="red-title">
                                    <div class="template12-img">
                                        <img src="assets/images/Technological Challenges.jpg">
                                    </div>
                                    <h4 style="color: #000"><strong>Infrastructure Resilience:</strong> </h4>
                                    <p> CEH expertise ensures robust cybersecurity measures, safeguarding critical
                                        infrastructure from
                                        cyber threats, preventing disruptions in power generation, aviation</p>
                                    <h4 style="color: #000"><strong> Operational Continuity: </strong> </h4>
                                    <p> CEH-certified professionals contribute to uninterrupted operations by identifying
                                        vulnerabilities, implementing security measures, and responding effectively to cyber
                                        incidents,
                                        crucial for sustaining essential services. </p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box three end -->
                    <!-- box four end -->
                    <div class="acc__card">
                        <a href="#significance4" class="acc__title">HEALTH CARE</a>
                        <div class="acc__panel" id="significance4">
                            <!--  -->
                            <div class="box-height">
                                <div class="red-title">
                                    <div class="template12-img">
                                        <img src="assets/images/Technological Challenges.jpg">
                                    </div>
                                    <h4 style="color: #000"><strong>Infrastructure Resilience:</strong> </h4>
                                    <p> CEH expertise ensures robust cybersecurity measures, safeguarding critical
                                        infrastructure from
                                        cyber threats, preventing disruptions in power generation, aviation</p>
                                    <h4 style="color: #000"><strong> Operational Continuity: </strong> </h4>
                                    <p> CEH-certified professionals contribute to uninterrupted operations by identifying
                                        vulnerabilities, implementing security measures, and responding effectively to cyber
                                        incidents,
                                        crucial for sustaining essential services. </p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box four end -->
                    <!-- box 5 end -->
                    <div class="acc__card">
                        <a href="#significance5" class="acc__title">GOVERMENT, PSU & DEFENCE</a>
                        <div class="acc__panel" id="significance5">
                            <!--  -->
                            <div class="box-height">
                                <div class="red-title">
                                    <div class="template12-img">
                                        <img src="assets/images/Technological Challenges.jpg">
                                    </div>
                                    <h4 style="color: #000"><strong>Infrastructure Resilience:</strong> </h4>
                                    <p> CEH expertise ensures robust cybersecurity measures, safeguarding critical
                                        infrastructure from
                                        cyber threats, preventing disruptions in power generation, aviation</p>
                                    <h4 style="color: #000"><strong> Operational Continuity: </strong> </h4>
                                    <p> CEH-certified professionals contribute to uninterrupted operations by identifying
                                        vulnerabilities, implementing security measures, and responding effectively to cyber
                                        incidents,
                                        crucial for sustaining essential services. </p>
                    </div>
                    </div>
                    <!-- box 7 end -->
                    <!-- box 8 end -->
                    <div class="acc__card">
                        <a href="#ic_8" class="acc__title">Networks Security</a>
                        <div class="acc__panel" id="ic_8">
                            <!--  -->
                                </div>
                                </div>
                                <div class="why-mobile-content">
                                    <h3> Infrastructure 2</h3>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box 5 end -->
                    <!-- box 6 end -->
                    <div class="acc__card">
                        <a href="#ic_6" class="acc__title">Information Technology</a>
                        <div class="acc__panel" id="ic_6">
                            <!-- 6 -->
                            <!--  -->
                            <div class="why-mobile box-height">
                                <div class="why-mobile-img">
                                    <img src="assets/images/Industry Challenges.jpg">
                                </div>
                        </div>
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                            <!--  -->
                        </div>
                    </div>
                    <!-- box 5 end -->
                    <!-- box 6 end -->
                    <div class="acc__card">
                        <a href="#ic_6" class="acc__title">Information Technology</a>
                        <div class="acc__panel" id="ic_6">
                            <!-- 6 -->
                            <!--  -->
                            <div class="why-mobile box-height">
                                <div class="why-mobile-img">
                                    <img src="assets/images/Industry Challenges.jpg">
                                </div>
                                <div class="why-mobile-content">
                                    <h3> Infrastructure 2</h3>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                        </div>
                    </div>
                    <!-- box 6 end -->
                                </div>
                    </div>
                    <!-- box 6 end -->
                    <!-- box 7 end -->
                    <!-- box 8 end -->
                    <div class="acc__card">
                        <a href="#ic_8" class="acc__title">Networks Security</a>
                        <div class="acc__panel" id="ic_8">
                            <!--  -->
                            <!--  -->
                            <!--  -->
                            <div class="why-mobile box-height">
                                <div class="why-mobile-img">
                                    <img src="assets/images/Industry Challenges.jpg">
                                </div>
                                <div class="why-mobile-content">
                                    <h3> Infrastructure 2</h3>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                </div>
                                <!--  -->
                            <div class="why-mobile box-height">
                                <div class="why-mobile-img">
                                    <img src="assets/images/Industry Challenges.jpg">
                                </div>
                                <div class="why-mobile-content">
                                    <h3> Infrastructure 2</h3>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                    <p>Replacing outdated infrastructure with traditional legacy systems continues to be a
                                        major
                                        challenge for most organizations. As discussed earlier Artificial Intelligence based
                                        solutions
                                        have a high level of computational speed, which means replacing the existing
                                        infrastructure i.e.
                                        an integrating AI have cost attached in various aspects.</p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="close-acrodin"> Close</a>
                        </div>
                    </div>
                    <!-- box 5 end --> --}}

                </div>
                <!-- faq End -->
                <!--  -->
            </div>
            <!-- mobile start -->
        </section>
        <!-- Why Codec Network end--->
        <!-- testimonials start -->
        <section class="anchor-link space7 sample7-line" id="testimonials1">
            <!--  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tsto-title">
                            <h2><i class="fa  fa-commenting"></i>What our customers have to say about cybarwind</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Testo monail satrt -->
                        <div id="client-testimonials" class="owl-carousel owl-theme owl-arrow">
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @foreach ($contentInfo->testimonials as $index => $testimonial)
                                        <div class="item">
                                            <div class="ceh-testo-box"
                                                data-target="client-testimonials-popup{{ $index }}">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="ceh-testo-image">
                                                            <img src="{{ asset('uploads/frontend/l3_template/testimonials/' . $testimonial->images) }}"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="ceh-testo-cont">
                                                            <div class="ceh-testo-title">
                                                                <h3>{{ $testimonial->testimonial_name }}</h3>
                                                                <!-- Dynamic Name -->
                                                                <span>{{ $testimonial->designation }}</span>
                                                                <!-- Dynamic Designation -->
                                                            </div>
                                                            <div class="ceh-testo-body">
                                                                <p>{{ $testimonial->testimonial_description }}</p>
                                                                <!-- Dynamic Description -->
                                                                <span>Read More</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .item ends here -->
                                    @endforeach
                                @endforeach
                            @endforeach
                        </div> <!-- #client-testimonials ends here -->

                        <!-- Testo monail satrt -->
                    </div>
                </div>
            </div>

            </div>
            <!--  -->
        </section>
        <!-- testimonials End -->
        @include ('frontend.mobile-components.m-course-features')
        <!-- end -->
        {{-- blog Section Start --}}
        <section class="anchor-link space7 light-grey " id="news1">

            <div class="container">
                <div class="row">
                    @foreach ($l3Categories as $category)
                        @foreach ($category->contentInfos as $index => $contentInfo)
                            @if ($contentInfo->blogCategory)
                                <div class="col-md-6" style="padding-bottom: 20px;">
                                    <div class="industry-box "
                                        style="background-color: {{ $contentInfo->style_class_id }}">
                                        <p>{{ $contentInfo->blogCategory->name }}</p> <!-- Blog Category Name -->
                                        <h3>{{ $contentInfo->blog_description }}</h3> <!-- Blog Title -->
                                        <a href="#">Watch Now</a>
                                    </div>
                                </div>
                                <!-- Add bottom margin after every 2 items (full row) -->
                                @if (($index + 1) % 2 == 0)
                                    <div class="w-100"></div>
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>

        </section>
        {{-- blog section end --}}
        <!--  -->
        <!-- FAQ info start -->
        <section class="anchor-link sample7-line space7 ceh-pro ceh-pro1" id="faqs">
            <!-- title  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cn-title ceh-title">
                        <h2>Is This C|EH Course For Me?</h2>
                        <p>We have helped over 250,000 people answer this question over the past 20 years and we are excited
                            to help
                            you with this big decision! Choosing the right credential can seem like a difficult task, here
                            are some
                            things you should consider</p>
                    </div>
                </div>
            </div>
            <!--title end-->
            <!-- body start -->
            <div class="container desktop-view faq">

                @php
                    $displayedFaqCategories = []; // Array to store displayed FAQ category IDs
                @endphp

                <div class="row">
                    <!-- Tab Menu Start -->
                    <ul class="nav nav-tabs program-tab program-tab2">
                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                @if ($contentInfo->faqCategory && !in_array($contentInfo->faqCategory->id, $displayedFaqCategories))
                                    @php
                                        $displayedFaqCategories[] = $contentInfo->faqCategory->id; // Mark this ID as displayed
                                    @endphp
                                    <li class="{{ $loop->first ? 'active' : '' }}">
                                        <a data-toggle="tab"
                                            href="#{{ strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace([' ', '&', ','], '-', $contentInfo->faqCategory->name))) }}">
                                            {{ $contentInfo->faqCategory->name }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endforeach
                    </ul>
                    <!-- Tab Menu End -->

                    <!-- Tab Content Start -->
                    <div class="tab-content program-content">
                        @php
                            $displayedFaqCategories = []; // Reset array for tab content
                        @endphp
                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                @if ($contentInfo->faqCategory && !in_array($contentInfo->faqCategory->id, $displayedFaqCategories))
                                    @php
                                        $displayedFaqCategories[] = $contentInfo->faqCategory->id; // Mark this ID as displayed
                                    @endphp
                                    <div id="{{ strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace([' ', '&', ','], '-', $contentInfo->faqCategory->name))) }}"
                                        class="tab-pane fade {{ $loop->first ? 'active' : '' }}">
                                        <!-- FAQ Subcategories -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="pro-faq">
                                                    <div class="acc">
                                                        @foreach ($contentInfo->faqCategory->faqSubCategory as $faqSubCategory)
                                                            <div class="acc__card">
                                                                <!-- Subcategory Name -->
                                                                <a href="#{{ strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace([' ', '&', ','], '-', $faqSubCategory->name))) }}"
                                                                    class="acc__title {{ $loop->first ? 'active' : '' }}">
                                                                    {{ $faqSubCategory->name }}
                                                                </a>

                                                                <!-- Subcategory Description -->
                                                                <div class="acc__panel"
                                                                    style="display: {{ $loop->first ? 'block' : 'none' }}"
                                                                    id="{{ strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace([' ', '&', ','], '-', $faqSubCategory->name))) }}">
                                                                    {{ $faqSubCategory->description }}
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                    <!-- Tab Content End -->
                </div>

            </div>
            <!-- body end -->
            <!-- mobile end -->
            <div class="container mobile-view">
                <div class="acc">
                    @php
                        $displayedFaqCategories = []; // Reset array for tab content
                    @endphp
                    
                    @foreach ($l3Categories as $category)
                        @foreach ($category->contentInfos as $contentInfo)
                            @if ($contentInfo->faqCategory && !in_array($contentInfo->faqCategory->id, $displayedFaqCategories))
                                @php
                                    $displayedFaqCategories[] = $contentInfo->faqCategory->id; // Mark this ID as displayed
                                @endphp
            
                                <!-- FAQ Category -->
                                <div class="acc__card">
                                    <a class="acc__title" 
                                       data-toggle="collapse" 
                                       href="#{{ strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace([' ', '&', ','], '-', $contentInfo->faqCategory->name))) }}">
                                        {{ $contentInfo->faqCategory->name }}
                                    </a>
            
                                    <div id="{{ strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace([' ', '&', ','], '-', $contentInfo->faqCategory->name))) }}"
                                        class="acc__panel collapse">
                                        
                                        <div class="pro-faq m-pro-faq">
                                            <div class="acc">
                                                @foreach ($contentInfo->faqCategory->faqSubCategory as $faqSubCategory)
                                                    <div class="acc__card">
                                                        <!-- Subcategory Name -->
                                                        <a class="acc__title" 
                                                           data-toggle="collapse" 
                                                           href="#{{ strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace([' ', '&', ','], '-', $faqSubCategory->name))) }}">
                                                            {{ $faqSubCategory->name }}
                                                        </a>
            
                                                        <!-- Subcategory Description -->
                                                        <div id="{{ strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace([' ', '&', ','], '-', $faqSubCategory->name))) }}"
                                                            class="acc__panel collapse">
                                                            {{ $faqSubCategory->description }}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
            <!-- mobile start -->
            <!--  -->
        </section>
        <!-- FAQ info End-->
        {{-- </div> --}}
        <!-- <div class="codec-top">
                                                                                                                        <div class="codec-top-right">

                                                                                                                        </div>
                                                                                                                    </div> -->

        {{-- <a href="#main-content-body" class="scrollToTop"><i class="fa fa-arrow-up"></i></a> --}}
       
        {{-- @include ('frontend.layouts.footer') --}}
        <!--  -->
    </body>
@endsection
<!-- Jquery code -->
@push('scripts')
    <script type="text/javascript">
        // vertical tab

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab3-tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab3-tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace("tab3-active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " tab3-active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

        // bottom to top scrollbar
        // var btn = $('.codec-top a');
        // $(window).scroll(function () {
        //   if ($(window).scrollTop() > 1000) {
        //     btn.addClass('show');
        //   } else {
        //     btn.addClass('show');
        //   }
        // });

        // btn.on('click', function (e) {
        //   e.preventDefault();
        //   $('html, body').animate({ scrollTop: 0 }, '1000');
        // });
    </script>

    <script>
        $(document).ready(function() {
            // Smooth scrolling to target content
            $('.smooth-content').on('click', function(event) {
                var target = $($(this).attr('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 160
                    }, 200);
                }
            });
        });
    </script>
    <!-- <script type="text/javascript">
        $('.smooth-content-main').on('click', function(event) {
            var target = $($(this).attr('href'));
            if (target.length) {
                event.preventDefault();
                $('.red-title').stop().animate({
                    scrollTop: target.offset().top + 160
                }, 200);
            }
        });
    </script> -->

    <!-- <script type="text/javascript">
        $('.codec-tab').on('click', function(event) {
            var target = $($(this).attr('href'));
            if (target.length) {
                event.preventDefault();
                $('.sample7-tb-content').stop().animate({
                    scrollTop: target.offset().top + 0
                }, 200);
            }
        });
    </script> -->
    <script>
        $('#btn-hide1').on('click', function() {
            $('body, html').animate({
                scrollTop: $('#overview2').offset().top - 140
            }, 50);
        });
        $('.nav-tabs li').on('click', function() {
            $('.tab-content').animate({
                scrollTop: 0
            }, 0);
        })
        $('.tab3-tablinks').on('click', function() {
            $('.tab3-content').animate({
                scrollTop: 0
            }, 1000);
        })
        $('.mobile-view .acc__title').on('click', function() {
            $('.mobile-view .acc__title.active').animate({
                scrollTop: ($(".mobile-view .acc__title.active").offset().top) - 40
            }, 500);
        })

        //   $('.mobile-view .acc__title').on('click', function() {
        //     var $this = $(this);
        //     if ($this.hasClass('active')) {
        //         $('html, body').animate({
        //             scrollTop: $this.offset().top - 200
        //         }, 1000);
        //     }
        // });
    </script>

    <script type="text/javascript">
        $(function() {
            $("#owl-demo63").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                navigationText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
                    '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'
                ],
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
                        items: 3
                    }
                },
                onInitialized: updateNavigationCount,
                onChanged: updateNavigationCount
            });


            function updateNavigationCount(e) {
                if (!e.namespace) {
                    return;
                }
                var carousel = e.relatedTarget;
                $("#navigation-count4").html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items()
                    .length);
            }

        });
    </script>
    <script type="text/javascript">
        $(function() {
            var owl = $("#owl-demo64");

            owl.owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                navigationText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
                    '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'
                ],
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
                        items: 4
                    }
                },
                onInitialized: updateNavigationCount,
                onChanged: updateNavigationCount
            });


            function updateNavigationCount(e) {
                if (!e.namespace) {
                    return;
                }
                var carousel = e.relatedTarget;
                $("#navigation-count1").html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items()
                    .length);
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".btn-show").click(function() {
                $(this).next(".content-hide").show();
                $(this).hide();
                $(this).siblings(".btn-hide").show();
            });

            $(".btn-hide").click(function() {
                $(this).prev(".content-hide").hide();
                $(this).hide();
                $(this).siblings(".btn-show").show();
                $('.tab-content').animate({
                    scrollTop: 0
                }, 0);
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            var owl = $("#owl-demo65");

            owl.owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                navigationText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
                    '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'
                ],
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
                },
                onInitialized: updateNavigationCount,
                onChanged: updateNavigationCount
            });

            function updateNavigationCount(e) {
                if (!e.namespace) {
                    return;
                }
                var carousel = e.relatedTarget;
                $("#navigation-count").html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items()
                    .length);
            }
        });
    </script>
    <!--  -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script type="text/javascript">
        $(function() {
            $("#client-testimonials").owlCarousel({
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
                        items: 2
                    }
                }
            });
        });

        // Function to open the popup
        // function openPopup1(target) {
        //   $('#' + target).fadeIn();
        //   $('body').addClass('popup-open');
        // }

        // // Function to close the popup
        // function closePopup1(target) {
        //   $('#' + target).fadeOut();
        //   $('body').removeClass('popup-open');
        // }
        // function closePopup2(target) {
        //   $('#' + target).fadeOut();
        //   $('body').removeClass('popup-open');
        // }


        // // Open the corresponding popup when clicking on elements with the class "popup-btn"
        // $(".popup-btn").click(function () {
        //   var target = $(this).data('target');
        //   openPopup1(target);
        // });

        // // Close the popup when clicking on elements with the class "close"
        // $(".close_2").click(function () {
        //   var target = $(this).closest('.popup').attr('id');
        //   closePopup(target);
        // });

        // // Close the popup when clicking outside the popup
        // $(".popup").click(function (event) {
        //   if ($(event.target).is('.popup')) {
        //     var target = $(this).attr('id');
        //     closePopup(target);
        //   }
        // });
    </script>
    <script>
        $("#owl-demo9").owlCarousel({
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
                    items: 4
                },
                1200: {
                    items: 5
                }
            },
            onInitialized: updateNavigationCount,
            onChanged: updateNavigationCount
        });

        function updateNavigationCount(e) {
            if (!e.namespace) {
                return;
            }
            var carousel = e.relatedTarget;
            $("#navigation-count5").html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
        }
    </script>
    <script type="text/javascript">
        $(function() {
            $("#owl-demo62").owlCarousel({
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

                },
                onInitialized: updateNavigationCount,
                onChanged: updateNavigationCount
            });

            function updateNavigationCount(e) {
                if (!e.namespace) {
                    return;
                }
                var carousel = e.relatedTarget;
                $("#navigation-count2").html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items()
                    .length);
            }
        });

        function openPopup(target) {
            $('#' + target).fadeIn();
            $('body').addClass('popup-open');
        }

        function closePopup(target) {
            $('#' + target).fadeOut();
            $('body').removeClass('popup-open');
        }

        // Open the corresponding popup when clicking on elements with the class "popup-btn"
        $(".popup-btn, .mobile-cf, .ceh-testo-box").click(function(e) {
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
        //         $('#owl-demo62').on('click', '.owl-nav, .owl-dots', function (e) {
        //     e.stopPropagation();
        // });
        //   $('.owl-carousel').on('changed.owl.carousel', function(event) {
        //     var target = $('.owl-item.active').find('.popup-btn').data('target');
        //     openPopup(target);
        // });
    </script>
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
        $('.pro-mbile1 .acc__title').click(function() {
            $(this).addClass("acc-top");
        });
    </script>
    <script>
        $(document).ready(function() {
            // Define a function to handle the click events and scrolling animation
            function scrollToElement(elementClass, offset) {
                $('html, body').animate({
                    scrollTop: $(elementClass).offset().top - offset
                }, 300);
            }

            // Attach click event handlers to the respective elements
            $('.sample7-tab li a').click(function() {
                scrollToElement(".significance", 100);
            });

            $('.sample-tab2-menu li a').click(function() {
                scrollToElement(".course-features", 100);
            });

            $('.program-tab1 li a').click(function() {
                scrollToElement(".ceh-program", 100);
            });

            $('.tab3-tab .tab3-tablinks').click(function() {
                scrollToElement(".why-chossetab", 120);
            });

            $('.program-tab2 li a').click(function() {
                scrollToElement(".faq", 100);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            "use strict";
            var offSetTop = 100;
            var $scrollToTopButton = $('.scrollToTop');
            //Check to see if the window is top if not then display button
            $(window).scroll(function() {
                if ($(this).scrollTop() > offSetTop) {
                    $scrollToTopButton.fadeIn();
                } else {
                    $scrollToTopButton.fadeOut();
                }
            });

            //Click event to scroll to top
            $scrollToTopButton.click(function() {
                $('.services-menu ul li a').removeClass("sapme_active");

            });

        });

        $('.close_1, .popup').on('click', function() {
            $('.mobile-cf-popup').scrollTop(0);
        })
        $('.close-acrodin, .mobile-view .acc__title').on('click', function() {
            $('.box-height').scrollTop(0);
        })
        $('.mobile-view .acc__title').on('click', function() {
            $('.mobile-outline').scrollTop(0);
        })
        $('.popup-testo .close-acrodin, .bottom-close-d, .popup').on('click', function() {
            $('.testo-popup-body').scrollTop(0);
        })
        $('.cn-content').click(function() {
            $(this).addClass('height');
        });
        $('.cn-hover-img').click(function() {
            $('.cn-content').removeClass('height');
        });



        $('.close-acrodin').on('click', function() {
            var $accTitle = $(this).closest('.acc__card').find('.acc__title');
            if ($accTitle.length > 0) {
                $('html, body').animate({
                    scrollTop: $accTitle.offset().top - 60
                }, 300);
            }
        });

        $('.close-acrodin').click(function(e) {
            e.preventDefault();
            var $panel = $(this).closest('.acc__panel');
            $panel.slideUp();
            $(this).closest('.acc').find('.acc__title.active').removeClass('active');
        });
        $('.close-acrodin').click(function(e) {
            e.preventDefault();
            var $panel = $(this).closest('.acc__panel');
            $panel.slideUp();

            if ($(window).width() < 768) {
                $('.mobile-outline').scrollTop(0);
            } else {
                $('html, body').animate({
                    scrollTop: $(".acc__panel").offset().top - 230
                }, 300); // Added duration for the animation
            }
            $(this).closest('.acc').find('.acc__title.active').removeClass('active');
        });

        $('.close-acrodin1').on('click', function() {
            $('.pro-box-height').scrollTop(0);
        })
    </script>
    <script>
        $('.ser-menu').click(function() {
            $('.mobile-ser-tab').toggleClass('ser-menu-show');
            $('body').removeClass('nav-is-toggled');
            $('body').click(function(event) {

                // Check if the clicked element is not inside '.mobile-nav-top'
                if (!$(event.target).closest('.mobile-nav-top').length) {

                    $('.mobile-ser-tab').removeClass('ser-menu-show');
                }
            });
        });
        $('.ser-menu-close, .mobile-ser-menu li a, .right-back').click(function() {
            $('.mobile-ser-tab').removeClass('ser-menu-show');
        });
        $('.mobile-nav-top .hamburger').click(function() {
            $('.mobile-ser-tab').removeClass('ser-menu-show');
            //$('.nav-drill').css('transform', 'translateX(0)');
            $('body').click(function(event) {

                // Check if the clicked element is not inside '.mobile-nav-top'
                if (!$(event.target).closest('.mobile-nav-top').length) {

                    $('.mobile-ser-tab').removeClass('ser-menu-show');
                }
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            // Handle Subcategory Click
            $(document).on('click', '.acc__title', function(e) {
                e.preventDefault(); // Prevent default anchor behavior

                // Toggle active class
                $(this).toggleClass('active');

                // Toggle visibility of the description
                $(this).next('.acc__panel').slideToggle();
            });
        });
    </script>
    {{-- <script>
        $(document).ready(function(){
            $('.acc__title').click(function(){
                var targetPanel = $(this).attr('data-target');
    
                // Toggle active class for clicked title
                $('.acc__title').removeClass('active');
                $(this).addClass('active');
    
                // Show/hide the corresponding panel
                $('.acc__panel').slideUp();
                $('#' + targetPanel).slideDown();
            });
    
            $('.close-accordion').click(function(){
                $(this).closest('.acc__panel').slideUp();
                $('.acc__title').removeClass('active');
            });
        });
    </script> --}}
@endpush
{{-- @include ('frontend.layouts.right-menu-js') --}}
