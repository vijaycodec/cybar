@extends('frontend.layouts.app')

@section('title', 'Training')

@section('content')

    <body class="with-zoom1" id="training-page">
        <!-- Header start -->
        @include('frontend.layouts.training-header')
        <!-- main section-->
        <section class="training-page desktop-view">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 filtercatsec ">
                        <div class="categories training_cat">
                            <div class="cc-sidebar">
                                <div class="categorytitle sign-arrow">Course Categories</div>
                                <div class="ecsp_div">
                                    <ul class="tab2">
                                        @foreach ($categories as $category)
                                            <li id="li_border"><a 
                                                    href="#{{ strtolower(str_replace(' ', '-', $category->name)) }} ">{{ $category->name }}</a>

                                            </li>
                                        @endforeach
                                        {{-- <li id="li_border"><a href="#eccouncil" class="tablinks1 active" onclick="openCity(event, 'eccouncil')">EC Council Accredited Certification Programs</a></li>
                                 <li id="li_border"><a href="#pecb" class="tablinks1" onclick="openCity(event, 'pecb')">PECB Accredited Certification Programs</a></li>
                                 <li id="li_border"><a href="#information" class="tablinks1" onclick="openCity(event, 'information')">Information security industry specialized Training </a></li>
                                 <li id="li_border"><a href="#security" class="tablinks1" onclick="openCity(event, 'security')">IT / Security Risk, Compliance and Governance</a></li>
                                 <li id="li_border"><a href="#datascience" class="tablinks1" onclick="openCity(event, 'datascience')">Data Science & Business Analytics</a></li>
                                 <li id="li_border"><a href="#digital" class="tablinks1" onclick="openCity(event, 'digital')">Digital Transformation</a></li>
                                 <li id="li_border"><a href="#it" class="tablinks1" onclick="openCity(event, 'it')">IT Operation, Project and Service Management</a></li>
                                 <li id="li_border"><a href="#industry" class="tablinks1" onclick="openCity(event, 'industry')">Industry Specific Quality Management Programs</a></li>
                                 <li id="li_border"><a href="#server" class="tablinks1" onclick="openCity(event, 'server')">Server, Storage, Cloud and Virtualization</a></li> --}}
                                    </ul>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-sm-6 col-md-9">
                        <div id="code-content">
                            <!-- 11 -->   
                            @foreach ($categories as $category)
                                    <div class="mrgn-brdr">
                                        <div class="row box-wrap">

                                            <h4 class="cat-title" id="{{ strtolower(str_replace(' ', '-', $category->name)) }}">{{ $category->name }}</h4>

                                            <!--  -->
                                           
                                           @foreach ($trainings->where('category_id', $category->id)->all() as $index => $training)
                                            <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                                {{-- <a href="{{route('l3-template')}}"> --}}
                                                <div class="iconbox">
                                                    <div class="box-header">
                                                        <div class="box-icon pst-listing"></div>
                                                        <h4 class="box-title">{{ $training->subcategory->sub_category }}</h4>
                                                    </div>

                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>{{ $training->description }}</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            <a href="{{ route('l3-template',['sub_category_id' => $training->subcategory->id, 'pageid' => $page_id,'category_id'=>$category->id]) }}">Learn more
                                                                <i class="fa fa-chevron-right"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                           @endforeach
                                            <!--11  -->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            
                            <!--11  -->
                            <!-- 11 -->
                            <div id="pecb" class="tabcontent1">
                                <div class="mrgn-brdr">
                                    <div class="row box-wrap">
                                        <h4 class="cat-title">PECB Accredited Certification Programs</h4>
                                        <!--  -->
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">GD</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>GDPR Introduction training course enables you to comprehend
                                                                the basic concepts and requirements of the General Data
                                                                Protection Regulation (GDPR). This training will also help
                                                                you understand the responsibility of data handling,
                                                                processing and the role of a data controller.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">GDPR Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become familiar with the concepts and requirements of General
                                                                Data Protection Regulation (GDPR). This course will help you
                                                                learn the basic elements of implementing and managing a
                                                                compliance framework in terms of protecting personal data.
                                                            </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">General Data Protection Regulation (GDPR)
                                                        </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>The General Data Protection Regulation (GDPR) is a regulation
                                                                that will enforce a stronger data protection regime for
                                                                organizations that operate in the European Union (EU) and
                                                                handle EU citizens’ data. GDPR constitutes the protection of
                                                                personal data of employees</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27001 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Information
                                                                Security Management Systems (ISMS) based on ISO/IEC 27001.
                                                            </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27001 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mastering the implementation and management of an Information
                                                                Security Management System (ISMS) based on ISO/IEC 27001.
                                                            </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27001 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mastering the audit of an Information Security Management
                                                                System (ISMS) based on ISO/IEC 27001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27005 Risk Manager </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mastering the fundamental principles and concepts of Risk
                                                                Assessment and Optimal Risk Management in Information
                                                                Security based on ISO/IEC 27005.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27005 Lead Risk Manager </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master Risk Assessment and Optimal Risk Management in
                                                                Information Security based on ISO/IEC 27005</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27034 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation of Application Security (AS)
                                                                techniques based on ISO/IEC 27034.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27034 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of Application Security (AS) based on
                                                                ISO/IEC 27034</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Lead SCADA Security Manager</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>This five-day intensive course enables participants to
                                                                develop the necessary expertise to plan, design, and
                                                                implement an effective program to protect SCADA systems.
                                                                Participants will be able to understand common Industrial
                                                                Control System (ICS) threats, </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Lead Digitalization and Electronic Archiving
                                                            Manager</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p> Master digitalization and electronic retention/archiving</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 31000 Risk Manager</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p> Understand the implementation of a Risk Management processes
                                                                based on ISO 31000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 31000 Lead Risk Manager </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation of a Risk Management Process based
                                                                on ISO 31000.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 31000 Transition</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Understand the main differences between ISO 31000:2009 and
                                                                ISO 31000:2018 and become acquainted with the new ISO
                                                                31000:2018 principles and recommendations </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 37001 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Anti-bribery
                                                                Management Systems (ABMS) based on ISO 37001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 37001 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Anti-bribery
                                                                Management Systems (ABMS) based on ISO 37001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 37001 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of Anti-bribery Management Systems (ABMS)
                                                                based on ISO 37001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 22301 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Business
                                                                Continuity Management Systems (BCMS) based on ISO 22301</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 22301 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mastering the implementation and management of a Business
                                                                Continuity Management System (BCMS) based on ISO 22301</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 22301 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mastering the Audit of a Business Continuity Management
                                                                System (BCMS) based on ISO 22301</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Disaster Recovery Manager</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Understand the implementation and management of Disaster
                                                                Recovery Services.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Lead Disaster Recovery Managerr</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Disaster Recovery
                                                                Services</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 38500 IT Governance Manager </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Understand the fundamental concepts and principles of IT
                                                                Governance based on ISO/IEC 38500</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 38500 Lead IT Governance Manager
                                                        </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the principles and model of IT Governance based on
                                                                ISO/IEC 38500</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 20000 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Service
                                                                Management Systems (SMS) based on ISO/IEC 20000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 20000 LEAD IMPLEMENTER</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of a Service
                                                                Management System (SMS) based on the ISO/IEC 20000-1
                                                                standard.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 20000 LEAD AUDITOR</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of IT Service Management Systems (ITSMS)
                                                                based on ISO/IEC 20000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 20000:2018 Transition</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Prepare for the transition from ISO/IEC 20000:2011 SMS to
                                                                ISO/IEC 20000:2018</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 21500 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Project
                                                                Management based on ISO 21500</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 21500 Lead Project Management</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Projects based on
                                                                ISO 21500.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 21500 Lead Assessor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Assessment of a Project based on ISO 21500</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 27035 Lead Incident Management</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Information Security Incident Management based on
                                                                ISO/IEC 27035.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 28000 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Supply Chain
                                                                Security Management Systems (SCSMS) based on ISO 28000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 28000 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Supply Chain
                                                                Security Management Systems (SCSMS) based on ISO 28000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 28000 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of Supply Chain Security Management Systems
                                                                (SCSMS)based on ISO 28000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Six Sigma Yellow Belt</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the fundamental concepts and
                                                                principles of Six Sigma</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Six Sigma Green Belt</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation of Six Sigma projects based on best
                                                                practices</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 9001 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Quality
                                                                Management System (QMS) based on ISO 9001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 9001 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Quality
                                                                Management Systems (QMS) based on ISO 9001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 9001 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of Quality Management Systems (QMS) based on
                                                                ISO 9001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 9001:2015 Transition</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Prepare for the transition from an ISO 9001:2008 Quality
                                                                Management System (QMS) to ISO 9001:2015</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 13485 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Medical Devices
                                                                Quality Management Systems (MDQMS) based on ISO 13485</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 13485 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Medical Devices
                                                                Quality Management Systems (MDQMS) based on ISO 13485</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 13485 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mastering the Audit of a Medical Devices Quality Management
                                                                System (MDQMS) based on ISO 13485</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 17025 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Laboratory
                                                                Management Systems (LMS) based on ISO/IEC 17025</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 17025 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Laboratory
                                                                Management Systems (LMS) based on ISO/IEC 17025</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 17025 Lead Assessor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Assessment of Testing and Calibration Laboratories
                                                                based on ISO/IEC 17025</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">AS9100 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Aerospace
                                                                Quality Management Systems based on AS9100</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">AS9100 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of an Aerospace
                                                                Quality Management System (AQMS) based on AS9100</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">AS9100 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of an Aerospace Quality Management System
                                                                (AQMS) based on AS9100</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">IATF 16949 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Automotive
                                                                Quality Management Systems (AQMS) based on IATF 16949</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">IATF 16949 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Automotive
                                                                Quality Management Systems (AQMS) based on IATF 16949</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">IATF 16949 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of Automotive Quality Management Systems
                                                                (AQMS) based on IATF 16949</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/TS 29001 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Quality
                                                                Management Systems for petroleum, petrochemical and natural
                                                                gas industries, sector-specific for product and service
                                                                supply organizations based on ISO/TS 29001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/TS 29001 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Quality
                                                                Management Systems for petroleum, petrochemical and natural
                                                                gas industries, sector-specific for product and service
                                                                supply organizations (OGQMS) based on ISO/TS 29001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/TS 29001 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of Quality Management Systems for petroleum,
                                                                petrochemical and natural gas industries, sector-specific
                                                                for product and service supply organizations (OGQMS) based
                                                                on ISO/TS 29001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 50001 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Energy
                                                                Management Systems (EnMS) based on ISO 50001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 50001 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Energy Management
                                                                Systems (EnMS) based on ISO 50001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 50001 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of Energy Management Systems (EnMS) based on
                                                                ISO 50001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 50001:2018 Transition</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Prepare for the transition from ISO 50001:2011 Energy
                                                                Management System (EnMS) to ISO 50001:2018</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 22000 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Food Safety
                                                                Management Systems (FSMS) based on ISO 22000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 22000 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Food Safety
                                                                Management Systems (FSMS) based on ISO 22000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 22000 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of Food Safety Management Systems (FSMS)
                                                                based on ISO 22000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 22000:2018 Transition</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Prepare for the transition from an ISO 22000:2005 Food Safety
                                                                Management System (FSMS) to ISO 22000:2018</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 18001 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p></p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 18001 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Occupational
                                                                Health and Safety Management Systems (OHSMS) based on OHSAS
                                                                18001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 18001 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of Occupational Health and Safety Management
                                                                Systems (OHSMS) based on OHSAS 18001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 21001 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Educational
                                                                Organizations Management System (EOMS) based on ISO 21001.
                                                            </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 21001 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Educational
                                                                Organizations Management Systems (EOMS) based on ISO 21001
                                                            </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 21001 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of Educational Organizations Management
                                                                System (EOMS)based on ISO 21001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 26000 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Social
                                                                Responsibility Program (SRP) based on ISO 26000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 26000 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the integration, promotion and management of Social
                                                                Responsibility Programs (SRP) based on ISO 26000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 26000 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the Audit of Social Responsibility Programs (SRP)
                                                                based on ISO 26000</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                            <!--11  -->
                            <!-- 11 -->
                            <div id="information" class="tabcontent1">
                                <div class="mrgn-brdr">
                                    <div class="row box-wrap">
                                        <h4 class="cat-title">Information security industry specialized Training</h4>
                                        <!--  -->
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>A Certified Ethical Hacker is a skilled professional who
                                                            understands and knows how to look for weaknesses and
                                                            vulnerabilities in target systems and uses the same knowledge
                                                            and tools as a malicious hacker</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">EC-Council Certified Security Analyst V10</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>The ECSA pentest program takes the tools and techniques you
                                                            learned in the Certified Ethical Hacker course (CEH) and
                                                            enhances your ability into full exploitation by teaching you how
                                                            to apply the skills learned</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Licensed Penetration Tester (LPT)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>EC-Council´s Licensed Penetration Tester (LPT) certification is a
                                                            natural evolution and extended value addition to its series of
                                                            security related professional certifications. The LPT
                                                            standardizes the knowledge</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">PECB Certified Lead Pen Test Professional</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master Professional Penetration Testing. This course is designed
                                                            by industry experts with in-depth experience in the Penetration
                                                            Testing field</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified Penetration Tester (CPT)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Certified Penetration Tester course provides you with a real
                                                            world hands-on penetration testing experience and is a globally
                                                            accepted hacking and penetration testing class available that
                                                            covers the testing of modern infrastructures</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Advance Penetration Testing (APT)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>There are good penetration testers and then there are great
                                                            penetration testers. Unless you are bent on being nothing other
                                                            than the best in penetration testing, don’t bother registering
                                                            for this program, as you are probably not cut out for it.</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Web Application penetration Testing (WAPT)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Web Application penetration Testing (WAPT) is the Security
                                                            testing techniques for vulnerabilities or security holes in
                                                            corporate websites and web applications. These vulnerabilities
                                                            leave websites open to exploitation.</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Bug Bounty Hunter</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>“Bugs” are errors or flaws in computer software, web applications
                                                            and websites and responsible for making a particular software
                                                            perform erratically.</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Reverse Engineering and Malware Analysis</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Every computer incident involves a Trojan, backdoor, virus, or
                                                            rootkit. Incident responders must be able to perform rapid
                                                            analysis on the malware encountered in an effort to cure current
                                                            infections and prevent future ones. </p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Exploit Developer Practitioner and Reverse
                                                        Engineering</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>The course is focused on a comprehensive coverage of software
                                                            exploitation. It will present different domains of code
                                                            exploitation and how they can be used together to test the
                                                            security of an application. </p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Secure Code review</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Software defects, bugs, and flaws in the logic of the program are
                                                            consistently the cause for application vulnerabilities. Analysis
                                                            by software security professionals has proven that most
                                                            vulnerabilities are due to errors in programming.</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">IoT Penetration Tester</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>IoT or the Internet of Things is the new buzzword all around and
                                                            refers to a networked computing environment that enables devices
                                                            able to monitor, record and report data, as well as allows users
                                                            to interact with devices, perform actions remotely or use a
                                                            stream of useful information when performing tasks. </p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified Cloud Security Professional (CCSP)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Certified Cloud Security Professional (CCSP) is a registered
                                                            trademark and course developed by (ISC) ² and the Cloud Security
                                                            Alliance (CSA). CCSP course and certification exam ensure that
                                                            cloud security professionals .</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified Cloud Security Knowledge (CCSK Plus)
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Certificate of Cloud Security Knowledge (CCSK) is a registered
                                                            trademark and course of the Cloud Security Alliance (CSA). The
                                                            Cloud Security Alliance (CSA) has developed a catalog of
                                                            security best practices</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified SOC Analyst (CSA)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>The Certified SOC Analyst (CSA) program is the first step to
                                                            joining a security operations center (SOC). It is engineered for
                                                            current and aspiring Tier I and Tier II SOC analysts to achieve
                                                            proficiency in performing entry-level and intermediate-level
                                                            operations. </p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified Threat Intelligence Analyst (CTIA)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Certified Threat Intelligence Analyst (C|TIA) is designed and
                                                            developed in collaboration with cybersecurity and threat
                                                            intelligence experts across the globe to help organizations
                                                            identify and mitigate business risks by converting unknown
                                                            internal and external threats</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">IoT Penetration Tester</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>IoT or the Internet of Things is the new buzzword all around and
                                                            refers to a networked computing environment that enables devices
                                                            able to monitor, record and report data, as well as allows users
                                                            to interact with devices, perform actions remotely or use a
                                                            stream of useful information when performing tasks. </p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified Cloud Security Professional (CCSP)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>(ISC)<sup>2</sup> and the Cloud Security Alliance (CSA) developed
                                                            the Certified Cloud Security Professional (CCSP) credential to
                                                            ensure that cloud security professionals have the required
                                                            knowledge, skills, and abilities in cloud security design,
                                                            implementation, architecture </p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified SOC Analyst (CSA)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>The Certified SOC Analyst (CSA) program is the first step to
                                                            joining a security operations center (SOC). It is engineered for
                                                            current and aspiring Tier I and Tier II SOC analysts to achieve
                                                            proficiency in performing entry-level and intermediate-level
                                                            operations. </p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified Threat Intelligence Analyst (CTIA)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Certified Threat Intelligence Analyst (C|TIA) is designed and
                                                            developed in collaboration with cybersecurity and threat
                                                            intelligence experts across the globe to help organizations
                                                            identify and mitigate business risks by converting unknown
                                                            internal and external threats</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/SOC-SIEM/Security-Monitoring(SIEM).php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Security Monitoring, Log Analysis and Event
                                                            Management</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>This course primarily focus on Security Information and Event
                                                                Management (SIEM) architecture and process, by navigating
                                                                the candidate through the steps of deploying a SIEM in
                                                                Security Operations Center (SOC) integration. </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/SOC-SIEM/SPLUNK-Training.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Splunk User and Administration</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>This Splunk User and Admin Training includes concepts which
                                                                are required for both Splunk Users and Splunk
                                                                Administrators. By the end of this training, you will learn
                                                                their roles, responsibilities and be ready for
                                                                implementation. </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/SOC-SIEM/QRadar.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">IBM QRadar SIEM</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>IBM QRadar SIEM provides deep visibility into network, user,
                                                                and application activity. It provides collection,
                                                                normalization, correlation, and secure storage of events,
                                                                flows, asset profiles, and vulnerabilities. </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/SOC-SIEM/SPLUNK-Data-Scientist-Analytics.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">SPLUNK for Data Scientist and Analytics</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>This course designed for participants who want to attain
                                                                operational intelligence business insights and wants to
                                                                cover implementing analytics and data science projects using
                                                                Splunk's statistics. </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a
                                                href="../../Trainings/SOC-SIEM/SPLUNK-SOC-Cyber-Security-Professionals.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">SPLUNK for SOC & Cyber Security
                                                            Professionals</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>SPLUNK for SOC & Cyber Security Professionals training
                                                                program specifically designed for professionals which
                                                                required to learn the use of Splunk Enterprise Security (ES)
                                                            </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a
                                                href="../../Trainings/IT-Security-&-PEN-Testing/Reverse-Engineering-&-Malware-Analysis.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Reverse Engineering and Malware Analysis
                                                        </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Every computer incident involves a Trojan, backdoor, virus,
                                                                or rootkit. Incident responders must be able to perform
                                                                rapid analysis on the malware encountered in an effort to
                                                                cure current infections and prevent future ones. </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a
                                                href="../../Trainings/EC-Council/Computer-Cyber-Security-Incident-Response-Management-ECIH-Training-Certification.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Certified Incident Handler (ECIH)</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>The EC-Council Certified Incident Handler program is designed
                                                                to provide the fundamental skills to handle and respond to
                                                                the computer security incidents in an information system.The
                                                                course addresses various</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a
                                                href="../../Trainings/EC-Council/COMPUTER-HACKING-FORENSIC-CHFI-Training-Certification-Programs.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Computer Hacking Forensic investigator</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Computer forensics training teaches that computer forensic
                                                                investigation is the process of hacking attacks and properly
                                                                extracting evidence to report the crime and conduct audits
                                                                to prevent future attacks.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/PECB-Lead-Computer-Forensics.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">PECB Certified Lead Computer Forensics
                                                            Examiner</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Lead Computer Forensics Examiner training enables you to
                                                                acquire the necessary expertise to perform Computer
                                                                Forensics processes in order to obtain complete and reliable
                                                                digital evidence.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a
                                                href="../../Trainings/Forensic-&-Fraud-Investigation/Digital-Forensic-Investigator.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Digital Forensic Investigator</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Digital Forensic or Computer Forensic is the process of
                                                                detecting hacking attacks and properly extracting evidence
                                                                to report the crime and conduct audits to prevent future
                                                                attacks.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Windows Forensic Analysis and Data Triage </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Windows Forensic Analysis focuses on building in-depth digital
                                                            forensics knowledge of Microsoft Windows operating systems and
                                                            digital artefacts.</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a
                                                href="../../Trainings/Forensic-&-Fraud-Investigation/Mobile-Forensic-Investigation.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Mobile Forensic Analysis</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mobile Forensics is fast becoming a lucrative and constantly
                                                                evolving field, this is no surprise as the mobile phone
                                                                industry has been witnessing some unimaginable growth, some
                                                                experts say it may even replace the Computer for those only
                                                                wishing to send and receive emails </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a
                                                href="../../Trainings/Forensic-&-Fraud-Investigation/Cyber-Crime-&-Evidence-Management.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Cyber Crimes Investigation & Evidence
                                                            Management</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>This course explores how a "networked" world has bred new
                                                                crimes and new responses, and investigates how information
                                                                and communication technology (ICT) has become a tool, a
                                                                target, and a place of criminal activity and national
                                                                security threats, </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a
                                                href="../../Trainings/Forensic-&-Fraud-Investigation/Cyber-Fraud-&-Security-(Banks).php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Cyber Fraud & Security Management (Banks)
                                                        </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Protecting public funds is a high priority for all
                                                                governments. The Uniform Commercial Code (UCC) regulates and
                                                                defines the responsibilities of counterparties in business
                                                                and banking transactions. The UCC states that, in certain
                                                                situations</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Firewall Administration (CIsco, Palo Alto,
                                                        Checkpoint)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">UTM Administration (Sophos, Sequirte, Fortigate)
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Proxy Solutions (Bluecoat, Zscaler)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">End Point Security Solutions (McAfee, Sophos,
                                                        Symantec, Carbon Black, Cylance)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">DLP Solutions (McAfee, Symactec, Forcepoint)
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">E-Mail Security (Symantec Messaging Gateway)
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Security Automation (Phantom)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                            <!-- 11 -->
                            <!-- 11 -->
                            <div id="security" class="tabcontent1">
                                <div class="mrgn-brdr">
                                    <div class="row box-wrap">
                                        <h4 class="cat-title">IT / Security Risk, Compliance and Governance</h4>
                                        <!--  -->
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Disaster Recovery Professional (EDRP)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>EDRP provides the professionals with a strong understanding of
                                                            business continuity and disaster recovery principles, including
                                                            conducting business impact analysis, assessing of risks,
                                                            developing policies and procedures, and implementing a plan.</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified Chief Information Security
                                                        Professional</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>EC-Council´s CCISO Program has certified leading information
                                                            security professionals around the world. A core group of
                                                            high-level information security executives, the CCISO Advisory
                                                            Board, contributed by forming the foundation of the program</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified Information Systems Auditor (CISA)
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Certified Information Systems Auditor (CISA) is a registered
                                                            trademark and course developed by ISACA and the most globally
                                                            recognized certification for IT Audit professionals serves to
                                                            validate competence in the fields of audit </p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified Information Security Manager (CISM)
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Certified Information Security Manager (CISM) is a registered
                                                            trademark and course developed by ISACA and the most globally
                                                            recognized certification among information security management
                                                            professionals</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Certified in Risk and Information Systems
                                                        Control (CRISC)</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Certified in Risk and Information Systems Control (CRISC)is a
                                                            registered trademark and course developed by ISACA and the most
                                                            globally recognized certification towards risk professionals
                                                            designed </p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/CGEIT-Certified-Governance-Enterprise-IT.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Certified in the Governance of Enterprise IT
                                                            (CGEIT)</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Certified in the Governance of Enterprise IT (CGEIT) is a
                                                                registered trademark and course developed by ISACA and the
                                                                most globally recognized certification towards T governance
                                                                personnel designed to excel their knowledge</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/ISC2CISSP.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Certified Information Systems Security
                                                            Professional (CISSP)</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Certified Information Systems Security Professional (CISSP)
                                                                is a registered trademark and course developed by (ISC)² and
                                                                the most globally recognized certification in the
                                                                information security market. </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/iso-iec-27001-foundation.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27001 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Information
                                                                Security Management Systems (ISMS) based on ISO/IEC 27001.
                                                            </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/ISOIEC-27001.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27001 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mastering the implementation and management of an Information
                                                                Security Management System (ISMS) based on ISO/IEC 27001.
                                                            </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/ISOIEC-27001.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27001 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mastering the audit of an Information Security Management
                                                                System (ISMS) based on ISO/IEC 27001</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/ISOIEC-27005-Risk-Manager.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27005 Risk Manager </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mastering the fundamental principles and concepts of Risk
                                                                Assessment and Optimal Risk Management in Information
                                                                Security based on ISO/IEC 27005.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/ISOIEC-27005-Lead-Risk-Manager.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 27005 Lead Risk Manager</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master Risk Assessment and Optimal Risk Management in
                                                                Information Security based on ISO/IEC 27005</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/iso-iec-38500-it-governance.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 38500 IT Corporate Governance
                                                            Manager</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Understand the fundamental concepts and principles of IT
                                                                Governance based on ISO/IEC 38500</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/iso-iec-38500-Lead-it-governance.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 38500 Lead IT Governance Manager
                                                        </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the principles and model of IT Governance based on
                                                                ISO/IEC 38500</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/ISO-22301-Foundation.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 22301 Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become acquainted with the best practices of Business
                                                                Continuity Management Systems (BCMS) based on ISO 22301</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/ISOIEC-22301.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 22301 Lead Implementer</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mastering the implementation and management of a Business
                                                                Continuity Management System (BCMS) based on ISO 22301</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/ISOIEC-22301.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO 22301 Lead Auditor</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Mastering the Audit of a Business Continuity Management
                                                                System (BCMS) based on ISO 22301</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/Disaster-Recovery-Manager.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Disaster Recovery Manager</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Understand the implementation and management of Disaster
                                                                Recovery Services</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/Lead-Disaster-Recovery-Manager.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Lead Disaster Recovery Manager</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of Disaster Recovery
                                                                Services</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/gdpr-introduction.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">GDPR Introduction</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>GDPR Introduction training course enables you to comprehend
                                                                the basic concepts and requirements of the General Data
                                                                Protection Regulation (GDPR). This training will also help
                                                                you understand the responsibility of data handling,
                                                                processing and the role of a data controller.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="thirdlevel.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">GDPR Foundation</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Become familiar with the concepts and requirements of General
                                                                Data Protection Regulation (GDPR). This course will help you
                                                                learn the basic elements of implementing and managing a
                                                                compliance framework in terms of protecting personal data.
                                                            </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/General-Data-Protection-Regulation.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">General Data Protection Regulation (GDPR)
                                                        </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>The General Data Protection Regulation (GDPR) is a regulation
                                                                that will enforce a stronger data protection regime for
                                                                organizations that operate in the European Union (EU) and
                                                                handle EU citizens’ data. GDPR constitutes the protection of
                                                                personal data of employees</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/ISOIEC-29100-Lead-Privacy-Implementer.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">ISO/IEC 29100 Lead Privacy Implementer
                                                            (CLPI)</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Master the implementation and management of a Privacy
                                                                Framework based onISO/IEC 29100</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/PECB/Lead-SCADA-Security-Manager.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Lead SCADA Security Manager</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>This five-day intensive course enables participants to
                                                                develop the necessary expertise to plan, design, and
                                                                implement an effective program to protect SCADA systems.
                                                                Participants will be able to understand common Industrial
                                                                Control System (ICS) threats, </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a
                                                href="../../Trainings/IT-Security-&-PEN-Testing/HIPAA-Privacy-Security.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">HIPAA Privacy and Security Awareness Program
                                                        </h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>HIPAA Privacy and Security classroom training program focuses
                                                                on the implications of Health Insurance Portability and
                                                                Accountability Act of 1996 (HIPAA) legislation and critical
                                                                compliance requirements for business/client.</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/IT-Security-&-PEN-Testing/PCI-DSS-Awareness.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">PCI-DSS Awareness Program</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>The Payment Card Industry Data Security Standard (PCI DSS)
                                                                was developed to encourage and enhance cardholder data
                                                                security and facilitate the broad adoption of consistent
                                                                data security measures globally and applies to all merchants
                                                                and service providers that transmit</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                            <!-- 11 -->
                            <!-- Data Science & Business Analytics start -->
                            <div id="datascience" class="tabcontent1">
                                <div class="mrgn-brdr">
                                    <div class="row box-wrap">
                                        <h4 class="cat-title">Data Science & Business Analytics</h4>
                                        <!--  -->
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Big data hadoop Certification training </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Apache spark and scala certification training
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">python Spark certification Using pyspark</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Splunk Training & Certification- power user &
                                                        admin</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Apache kafka certification Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Hadoop Administration Certification Training
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ELK Starck Training & Crtification</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Comperhensive Hive Certification Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Mastering Apache Ambari Certification Training
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">MapReduce Design Patterns Certifiacation
                                                        Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Apache Solr Certification Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Comperhensive HBase Certification Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Comperhensive Pig Certification Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Comperhensive MapReduce Certification Training
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Apache Srorm Certification Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Tableau Training & Certification</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Microsoft Power BI Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">MicroStrategy 10 Power BI Certification Training
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Advanced MS Excel 2016 Certification Training
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Pentaho BI Certification Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">QlikView Certification Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Microsoft BI Certification Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Microsoft Excel VBA Certification Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/Big-Data-Analytics/Data-Science-with-Python.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Python Certification Training For Data
                                                            Science</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Artificial Intelligence, Machine Learning, and Deep Learning
                                                                are new trend in Information Technology we here at Codec
                                                                will ensure that you are not left behind in this fast moving
                                                                world of Big Data and its Use in sense of Analytics and
                                                                developing models in Deep Learning </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a
                                                href="../../Trainings/Application-Development/Python-Programming-Training-Course.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Pythn Programming Certification Course</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Python is a functional and flexible programming language that
                                                                is powerful enough for experienced programmers to use, but
                                                                simple enough for beginners as well. Python is a
                                                                well-developed, stable and fun to use programming language
                                                            </p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            <a href="../../Trainings/Big-Data-Analytics/Machine-Learning.php">
                                                <div class="iconbox">
                                                    <div class="box-header">

                                                        <h4 class="box-title">Machine Learining Certification Training
                                                            Using Python</h4>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>Machine Learning with Python is the new arenaof modern
                                                                Artificial Intelligence; Machine Learningis new trend in
                                                                Information Technology. We here at Codec Networks will
                                                                ensure that you are not leftbehind in this fast moving world
                                                                of Big Data</p>
                                                        </div>
                                                        <span class="box-readmore">
                                                            Learn More
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Data Analytics with R Certification Training
                                                    </h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Data Analytics with R is new trend in Information Technology. We
                                                            here at Codec Networks will ensure that you are not left behind
                                                            in this fast moving world of Big Data and its Use in sense of
                                                            Analytics. R programming language and its packages implement a
                                                            wide variety of statistical and graphical techniques, </p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Data Science Certification Course Using R</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">SAS Training and Certification</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Advanced Predictive Modelling in R Certification
                                                        Training</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Statidtics Essentials For Analytics</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p></p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                            {{-- <a href="{{route('l3-template')}}"> --}}
                                            <div class="iconbox">

                                                <h4 class="box-title">Decision Tree Modeling Using R Certification
                                                    Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Analytics For Retail Banks</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">AI & Deep Learning with TensorFlow</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Natural Language Processing with Python
                                                    Certification Course</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Machine Learning with Mahout Crttification Training
                                                </h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Reinforcement Learning</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Graphical Models Certification Trianing</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <!-- Data Science & Business Analytics end -->
                        <!-- Digital Transformation start -->
                        <div id="digital" class="tabcontent1">
                            <div class="mrgn-brdr">
                                <div class="row box-wrap">
                                    <h4 class="cat-title">Digital Transformation</h4>
                                    <!--  -->
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Robotic Process Automation Training using UiPath
                                                </h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">RPA Using Automation Anywhere</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Blockchain and Etherum Certification Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Ethereum Developerx</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Certified IoT Professional</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>In this constantly developing world, the requirements of IT industry
                                                        keep on changing and there is a need for a nimble system that is
                                                        applicable for all the projects. </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Certified Blockchain Professional</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Blockchain helps in managing distributed database and maintain
                                                        records of digital transaction. Blockchain technology is initially
                                                        used in Bitcoins and digital currencies </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">Informatica Training & Certification</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p> </p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Talend for Data Integration and Big Data</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Data Warehousing and BI Certification Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Data Warehousing Certification Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Digitalization and Electronic Archiving Manager</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <!-- Digital Transformation end  -->
                        <!-- IT Operation, Project and Service Management start -->
                        <div id="it" class="tabcontent1">
                            <div class="mrgn-brdr">
                                <div class="row box-wrap">
                                    <h4 class="cat-title">IT Operation, Project and Service Management</h4>
                                    <!--  -->
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 20000 Foundation</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Become acquainted with the best practices of Service Management
                                                        Systems (SMS) based on ISO/IEC 20000</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO/IEC 20000 LEAD IMPLEMENTER</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the implementation and management of a Service Management
                                                        System (SMS) based on the ISO/IEC 20000-1 standard.</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO/IEC 20000 LEAD AUDITOR</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the Audit of IT Service Management Systems (ITSMS) based on
                                                        ISO/IEC 20000</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 20000:2018 Transition</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Prepare for the transition from ISO/IEC 20000:2011 SMS to ISO/IEC
                                                        20000:2018 </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 21500 Foundation</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Become acquainted with the best practices of Project Management based
                                                        on ISO 21500 </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 21500 Lead Project Management</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the implementation and management of Projects based on ISO
                                                        21500.</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 21500 Lead Assessor</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the Assessment of a Project based on ISO 21500</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Six Sigma Yellow Belt</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Become acquainted with the fundamental concepts and principles of Six
                                                        Sigma</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Six Sigma Green Belt</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the implementation of Six Sigma projects based on best
                                                        practices</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Certified Scrum Foundation</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Certified Scrum Professional</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Certified Scrum Master</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Agile Scrum Foundation</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Agile Scrum Master</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Agile Scrum Product Owner</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p></p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <!-- IT Operation, Project and Service Management end  -->
                        <!-- Industry Specific Quality Management Programs start -->
                        <div id="industry" class="tabcontent1">
                            <div class="mrgn-brdr">
                                <div class="row box-wrap">
                                    <h4 class="cat-title">Industry Specific Quality Management Programs</h4>
                                    <!--  -->
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 9001 Foundation</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Become acquainted with the best practices of Quality Management
                                                        System (QMS) based on ISO 9001</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 9001 Lead Implementer</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the implementation and management of Quality Management
                                                        Systems (QMS) based on ISO 9001</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 9001 Lead Auditor</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the Audit of Quality Management Systems (QMS) based on ISO
                                                        9001</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 9001:2015 Transition</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Prepare for the transition from an ISO 9001:2008 Quality Management
                                                        System (QMS) to ISO 9001:2015</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 13485 Foundation</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Become acquainted with the best practices of Medical Devices Quality
                                                        Management Systems (MDQMS) based on ISO 13485</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 13485 Lead Implementer</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the implementation and management of Medical Devices Quality
                                                        Management Systems (MDQMS) based on ISO 13485 </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO 13485 Lead Auditor</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Mastering the Audit of a Medical Devices Quality Management System
                                                        (MDQMS) based on ISO 13485 </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO/IEC 17025 Foundation</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Become acquainted with the best practices of Laboratory Management
                                                        Systems (LMS) based on ISO/IEC 17025</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO/IEC 17025 Lead Implementer</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the implementation and management of Laboratory Management
                                                        Systems (LMS) based on ISO/IEC 17025</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO/IEC 17025 Lead Assessor</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the Assessment of Testing and Calibration Laboratories based
                                                        on ISO/IEC 17025</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">AS9100 Foundation</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Become acquainted with the best practices of Aerospace Quality
                                                        Management Systems based on AS9100</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">AS9100 Lead Implementer</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the implementation and management of an Aerospace Quality
                                                        Management System (AQMS) based on AS9100</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">AS9100 Lead Auditor</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the Audit of an Aerospace Quality Management System (AQMS)
                                                        based on AS9100</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">IATF 16949 Foundation</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Become acquainted with the best practices of Automotive Quality
                                                        Management Systems (AQMS) based on IATF 16949 </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">IATF 16949 Lead Implementer</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the implementation and management of Automotive Quality
                                                        Management Systems (AQMS) based on IATF 16949</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">IATF 16949 Lead Auditor</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the Audit of Automotive Quality Management Systems (AQMS)
                                                        based on IATF 16949</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO/TS 29001 Foundation</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Become acquainted with the best practices of Quality Management
                                                        Systems for petroleum, petrochemical and natural gas industries,
                                                        sector-specific for product and service supply organizations based
                                                        on ISO/TS 29001</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">ISO/TS 29001 Lead Implementer</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>Master the implementation and management of Quality Management
                                                        Systems for petroleum, petrochemical and natural gas industries,
                                                        sector-specific for product and service supply organizations (OGQMS)
                                                        based on ISO/TS 29001</p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-TS-29001-Lead-Auditor.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO/TS 29001 Lead Auditor</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master the Audit of Quality Management Systems for petroleum,
                                                            petrochemical and natural gas industries, sector-specific for
                                                            product and service supply organizations (OGQMS) based on ISO/TS
                                                            29001</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO 50001 Foundation.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 50001 Foundation</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Become acquainted with the best practices of Energy Management
                                                            Systems (EnMS) based on ISO 50001</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-50001-Lead-Implementer.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 50001 Lead Implementer</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master the implementation and management of Energy Management
                                                            Systems (EnMS) based on ISO 50001</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-50001-Lead-Auditor.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 50001 Lead Auditor</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master the Audit of Energy Management Systems (EnMS) based on ISO
                                                            50001</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-50001-2018-Transition.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 50001:2018 Transition</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Prepare for the transition from ISO 50001:2011 Energy Management
                                                            System (EnMS) to ISO 50001:2018</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-22000-Foundation.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 22000 Foundation</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Become acquainted with the best practices of Food Safety
                                                            Management Systems (FSMS) based on ISO 22000</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-22000-Lead-Implementer.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 22000 Lead Implementer</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master the implementation and management of Food Safety
                                                            Management Systems (FSMS) based on ISO 22000</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-22000-Lead-Auditor.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 22000 Lead Auditor</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master the Audit of Food Safety Management Systems (FSMS) based
                                                            on ISO 22000</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-22000-2018-Transition.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 22000:2018 Transition</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Prepare for the transition from an ISO 22000:2005 Food Safety
                                                            Management System (FSMS) to ISO 22000:2018</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">OHSAS 18001 Foundation</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ohsas.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 18001 Lead Implementer</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master the implementation and management of Occupational Health
                                                            and Safety Management Systems (OHSMS) based on OHSAS 18001</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ohsas.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 18001 Lead Auditor</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master the Audit of Occupational Health and Safety Management
                                                            Systems (OHSMS) based on OHSAS 18001</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-21001-Foundation.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 21001 Foundation</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Become acquainted with the best practices of Educational
                                                            Organizations Management System (EOMS) based on ISO 21001.</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-21001-Lead-Implementer.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 21001 Lead Implementer</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master the implementation and management of Educational
                                                            Organizations Management Systems (EOMS) based on ISO 21001</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-21001-Lead-Auditor.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 21001 Lead Auditor</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master the Audit of Educational Organizations Management System
                                                            (EOMS)based on ISO 21001</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-26000-Foundation.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 26000 Foundation</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Become acquainted with the best practices of Social
                                                            Responsibility Program (SRP) based on ISO 26000</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-26000-Lead-Implementer.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 26000 Lead Implementer</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master the integration, promotion and management of Social
                                                            Responsibility Programs (SRP) based on ISO 26000</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        <a href="../../Trainings/PECB/ISO-26000-Lead-Auditor.php">
                                            <div class="iconbox">
                                                <div class="box-header">

                                                    <h4 class="box-title">ISO 26000 Lead Auditor</h4>
                                                </div>
                                                <div class="box-content" id="clr-learn">
                                                    <div class="box-content-p">
                                                        <p>Master the Audit of Social Responsibility Programs (SRP) based on
                                                            ISO 26000</p>
                                                    </div>
                                                    <span class="box-readmore">
                                                        Learn More
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <!-- Industry Specific Quality Management Programs end  -->
                        <!-- Server, Storage, Cloud and Virtualization start -->
                        <div id="server" class="tabcontent1">
                            <div class="mrgn-brdr">
                                <div class="row box-wrap">
                                    <h4 class="cat-title">Server, Storage, Cloud and Virtualization</h4>
                                    <!--  -->
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">
                                                <h4 class="box-title"> Windows Server Administration Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Redhat Server Administration Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Citrix Xenserver</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">AWS Solution Architech Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">AWS Development Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Azure Solution Architech Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Azure Adminsitrator Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Azure Developer Associate Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Openstack Administration Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Google Cloud Architect Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Google Cloud Developer Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Saleforce Administration Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Saleforce Developer Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Certified DevOps Professional</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p>DevOps is an emerging set of principles, methods and practices for
                                                        communication, collaboration and integration between software
                                                        development and IT operation professionals. </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Kubernetes Administrator Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Docker Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">AWS DevOps Engineer Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Google Cloud DevOps Engineer Training</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Puppet Foundation Training Course</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                        {{-- <a href="{{route('l3-template')}}"> --}}
                                        <div class="iconbox">
                                            <div class="box-header">

                                                <h4 class="box-title">Salt Foundation Training Course</h4>
                                            </div>
                                            <div class="box-content" id="clr-learn">
                                                <div class="box-content-p">
                                                    <p> </p>
                                                </div>
                                                <span class="box-readmore">
                                                    Learn More
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <!-- Server, Storage, Cloud and Virtualization end  -->
                    </div>
                </div>
                <!--  -->
            </div>
            </div>
        </section>
        <!-- main section end -->
        <div class="ser-h"></div>
        <!-- mobile start  -->
        <section class="training-page training-page-m mobile-view">
            <!-- box 1 start  -->
            <div class="m-container" id="m-ec">
                <div class="m-title ">
                    <h3>EC Council Certification Programs</h3>
                </div>
                <!-- slider 1  -->
                <div class="ser-slider1">
                    <!-- box 1 start -->
                    <div id="navigation-count" class="count-nav-box couter-space"></div>
                    <div id="ser-demo1" class="owl-carousel owl-theme indu-moblie">
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Network Defender (CND)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>Certified Network Defender (CND) is a vendor-neutral, hands-on,
                                                instructor-led comprehensive network security certification training
                                                program. It is a skills-based, lab intensive program based</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>A Certified Ethical Hacker is a skilled professional who understands and
                                                knows how to look for weaknesses and vulnerabilities in target systems and
                                                uses the same knowledge and tools as a malicious hacker</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate
                                                the application of ethical hacking techniques such as threat vector
                                                identification, network scanning, OS detection, vulnerability analysis,
                                                system hacking, web app hacking, etc</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>

                        </div>


                        <!--  -->

                    </div>
                    <!-- box 1 end -->

                </div>
                <!-- slider 1 end -->
                <!-- slider 2  -->
                <div class="ser-slider2">
                    <!-- box 1 start -->
                    <div id="navigation-count1" class="count-nav-box couter-space"></div>
                    <div id="ser-demo2" class="owl-carousel owl-theme indu-moblie">
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Network Defender (CND)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>Certified Network Defender (CND) is a vendor-neutral, hands-on,
                                                instructor-led comprehensive network security certification training
                                                program. It is a skills-based, lab intensive program based</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>A Certified Ethical Hacker is a skilled professional who understands and
                                                knows how to look for weaknesses and vulnerabilities in target systems and
                                                uses the same knowledge and tools as a malicious hacker</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate
                                                the application of ethical hacking techniques such as threat vector
                                                identification, network scanning, OS detection, vulnerability analysis,
                                                system hacking, web app hacking, etc</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <!-- box 1 end -->
                </div>
                <!-- slider 2 end -->
            </div>
            <!--box 1 end  -->
            <!-- box 2 start  -->
            <div class="m-container ser-bg" id="m-pecb">
                <div class="m-title m-bg1">
                    <h3>PECB Accredited Certification Programs </h3>
                </div>
                <!-- slider 1  -->
                <div class="ser-slider1">
                    <div id="navigation-count2" class="count-nav-box couter-space"></div>
                    <!-- box 1 start -->
                    <div id="ser-demo3" class="owl-carousel owl-theme indu-moblie">
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Network Defender (CND)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>Certified Network Defender (CND) is a vendor-neutral, hands-on,
                                                instructor-led comprehensive network security certification training
                                                program. It is a skills-based, lab intensive program based</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>A Certified Ethical Hacker is a skilled professional who understands and
                                                knows how to look for weaknesses and vulnerabilities in target systems and
                                                uses the same knowledge and tools as a malicious hacker</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate
                                                the application of ethical hacking techniques such as threat vector
                                                identification, network scanning, OS detection, vulnerability analysis,
                                                system hacking, web app hacking, etc</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <!-- box 1 end -->
                </div>
                <!-- slider 1 end -->
                <!-- slider 2  -->
                <div class="ser-slider2">
                    <div id="navigation-count3" class="count-nav-box couter-space"></div>
                    <!-- box 1 start -->
                    <div id="ser-demo4" class="owl-carousel owl-theme indu-moblie">
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Network Defender (CND)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>Certified Network Defender (CND) is a vendor-neutral, hands-on,
                                                instructor-led comprehensive network security certification training
                                                program. It is a skills-based, lab intensive program based</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>A Certified Ethical Hacker is a skilled professional who understands and
                                                knows how to look for weaknesses and vulnerabilities in target systems and
                                                uses the same knowledge and tools as a malicious hacker</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate
                                                the application of ethical hacking techniques such as threat vector
                                                identification, network scanning, OS detection, vulnerability analysis,
                                                system hacking, web app hacking, etc</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <!-- box 1 end -->
                </div>
                <!-- slider 2 end -->
            </div>
            <!--box 2 end  -->
            <!-- box 3 start  -->
            <div class="m-container" id="m-isist">
                <div class="m-title m-bg2">
                    <h3>Information security industry specialized Training</h3>
                </div>
                <!-- slider 1  -->
                <div class="ser-slider1">
                    <!-- box 1 start -->
                    <div id="navigation-count4" class="count-nav-box couter-space"></div>
                    <div id="ser-demo5" class="owl-carousel owl-theme indu-moblie">
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Network Defender (CND)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>Certified Network Defender (CND) is a vendor-neutral, hands-on,
                                                instructor-led comprehensive network security certification training
                                                program. It is a skills-based, lab intensive program based</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>A Certified Ethical Hacker is a skilled professional who understands and
                                                knows how to look for weaknesses and vulnerabilities in target systems and
                                                uses the same knowledge and tools as a malicious hacker</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate
                                                the application of ethical hacking techniques such as threat vector
                                                identification, network scanning, OS detection, vulnerability analysis,
                                                system hacking, web app hacking, etc</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <!-- box 1 end -->
                </div>
                <!-- slider 1 end -->
                <!-- slider 2  -->
                <div class="ser-slider2">
                    <!-- box 1 start -->
                    <div id="navigation-coun5" class="count-nav-box couter-space"></div>
                    <div id="ser-demo6" class="owl-carousel owl-theme indu-moblie">
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Network Defender (CND)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>Certified Network Defender (CND) is a vendor-neutral, hands-on,
                                                instructor-led comprehensive network security certification training
                                                program. It is a skills-based, lab intensive program based</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>A Certified Ethical Hacker is a skilled professional who understands and
                                                knows how to look for weaknesses and vulnerabilities in target systems and
                                                uses the same knowledge and tools as a malicious hacker</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate
                                                the application of ethical hacking techniques such as threat vector
                                                identification, network scanning, OS detection, vulnerability analysis,
                                                system hacking, web app hacking, etc</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <!-- box 1 end -->
                </div>
                <!-- slider 23 end -->
            </div>
            <!--box 3 end  -->
            <!-- box 4 start  -->
            <div class="m-container ser-bg" id="m-it">
                <div class="m-title m-bg3">
                    <h3>IT / Security Risk, Compliance and Governance</h3>
                </div>
                <!-- slider 1  -->
                <div class="ser-slider1">
                    <!-- box 1 start -->
                    <div id="navigation-count6" class="count-nav-box couter-space"></div>
                    <div id="ser-demo7" class="owl-carousel owl-theme indu-moblie">
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Network Defender (CND)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>Certified Network Defender (CND) is a vendor-neutral, hands-on,
                                                instructor-led comprehensive network security certification training
                                                program. It is a skills-based, lab intensive program based</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>A Certified Ethical Hacker is a skilled professional who understands and
                                                knows how to look for weaknesses and vulnerabilities in target systems and
                                                uses the same knowledge and tools as a malicious hacker</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate
                                                the application of ethical hacking techniques such as threat vector
                                                identification, network scanning, OS detection, vulnerability analysis,
                                                system hacking, web app hacking, etc</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <!-- box 1 end -->
                </div>
                <!-- slider 1 end -->
                <!-- slider 2  -->
                <div class="ser-slider2">
                    <!-- box 1 start -->
                    <div id="navigation-coun7" class="count-nav-box couter-space"></div>
                    <div id="ser-demo8" class="owl-carousel owl-theme indu-moblie">
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Network Defender (CND)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>Certified Network Defender (CND) is a vendor-neutral, hands-on,
                                                instructor-led comprehensive network security certification training
                                                program. It is a skills-based, lab intensive program based</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>A Certified Ethical Hacker is a skilled professional who understands and
                                                knows how to look for weaknesses and vulnerabilities in target systems and
                                                uses the same knowledge and tools as a malicious hacker</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate
                                                the application of ethical hacking techniques such as threat vector
                                                identification, network scanning, OS detection, vulnerability analysis,
                                                system hacking, web app hacking, etc</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <!-- box 1 end -->
                </div>
                <!-- slider 2 end -->
            </div>
            <!--box 4 end  -->
            <!-- box 5 start  -->
            <div class="m-container" id="m-datascience">
                <div class="m-title m-bg4">
                    <h3>Data Science & Business Analytics</h3>
                </div>
                <!-- slider 1  -->
                <div class="ser-slider1">
                    <!-- box 1 start -->
                    <div id="navigation-count8" class="count-nav-box couter-space"></div>
                    <div id="ser-demo9" class="owl-carousel owl-theme indu-moblie">
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Network Defender (CND)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>Certified Network Defender (CND) is a vendor-neutral, hands-on,
                                                instructor-led comprehensive network security certification training
                                                program. It is a skills-based, lab intensive program based</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>A Certified Ethical Hacker is a skilled professional who understands and
                                                knows how to look for weaknesses and vulnerabilities in target systems and
                                                uses the same knowledge and tools as a malicious hacker</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate
                                                the application of ethical hacking techniques such as threat vector
                                                identification, network scanning, OS detection, vulnerability analysis,
                                                system hacking, web app hacking, etc</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <!-- box 1 end -->
                </div>
                <!-- slider 1 end -->
                <!-- slider 2  -->
                <div class="ser-slider2">
                    <!-- box 1 start -->
                    <div id="navigation-count9" class="count-nav-box couter-space"></div>
                    <div id="ser-demo10" class="owl-carousel owl-theme indu-moblie">
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Network Defender (CND)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>Certified Network Defender (CND) is a vendor-neutral, hands-on,
                                                instructor-led comprehensive network security certification training
                                                program. It is a skills-based, lab intensive program based</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>A Certified Ethical Hacker is a skilled professional who understands and
                                                knows how to look for weaknesses and vulnerabilities in target systems and
                                                uses the same knowledge and tools as a malicious hacker</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="item">
                            <div class="mrgn-btm-iconbx">
                                {{-- <a href="{{route('l3-template')}}"> --}}
                                <div class="iconbox">
                                    <div class="box-header">

                                        <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                                    </div>
                                    <div class="box-content" id="clr-learn">
                                        <div class="box-content-p">
                                            <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate
                                                the application of ethical hacking techniques such as threat vector
                                                identification, network scanning, OS detection, vulnerability analysis,
                                                system hacking, web app hacking, etc</p>
                                        </div>
                                        <span class="box-readmore">
                                            Learn More
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <!-- box 1 end -->
                </div>
                <!-- slider 23 end -->
            </div>
            <!--box 5 end  -->
            <!-- box 6 start  -->

            <!--box 6 end  -->
            <!-- box 5 start  -->

            <!--box 5 end  -->
            <!-- box 6 start  -->

            <!--box 6 end  -->
        </section>
        <!-- mobile end -->
        {{-- <a href="#training-page" class="scrollToTop"><i class="fa fa-arrow-up"></i></a> --}}

        {{-- @include('frontend.layouts.footer') --}}

    </body>

@endsection

@push('scripts')
    <!-- Jquery code -->
    <script src="assets/js/slider.js"></script>
    <script type="text/javascript" src="assets/js/common.js?v-1"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ecsp_div a').bind('click', function(e) {
                e.preventDefault();
                var target = $(this).attr("href");
                $('html, body').stop().animate({
                    scrollTop: $(target).offset().top - 80
                }, 100, function() {
                    // location.hash = target;
                });
                return false;
            });
        });
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

    <script type="text/javascript">
        $(function() {
            function initializeCarousel(carouselId, navigationCountId) {
                $("#" + carouselId).owlCarousel({
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
                    onInitialized: function(event) {
                        updateNavigationCount(event, navigationCountId);
                    },
                    onChanged: function(event) {
                        updateNavigationCount(event, navigationCountId);
                    }
                });
            }


            function updateNavigationCount(event, navigationCountId) {
                if (!event.namespace) {
                    return;
                }
                var carousel = event.relatedTarget;
                $("#" + navigationCountId).html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items()
                    .length);
            }


            initializeCarousel("ser-demo1", "navigation-count");
            initializeCarousel("ser-demo2", "navigation-count1");
            initializeCarousel("ser-demo3", "navigation-count2");
            initializeCarousel("ser-demo4", "navigation-count3");
            initializeCarousel("ser-demo5", "navigation-count4");
            initializeCarousel("ser-demo6", "navigation-count5");
            initializeCarousel("ser-demo7", "navigation-count6");
            initializeCarousel("ser-demo8", "navigation-count7");
            initializeCarousel("ser-demo9", "navigation-count8");
            initializeCarousel("ser-demo10", "navigation-count9");
            initializeCarousel("ser-demo11", "navigation-count10");
            initializeCarousel("ser-demo12", "navigation-count11");
            initializeCarousel("ser-demo13", "navigation-count12");
            initializeCarousel("ser-demo14", "navigation-count13");
            initializeCarousel("ser-demo15", "navigation-count14");
            initializeCarousel("ser-demo16", "navigation-count15");
        });
    </script>
@endpush
@include('frontend.layouts.right-menu-js')
