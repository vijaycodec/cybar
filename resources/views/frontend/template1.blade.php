@extends('frontend.layouts.app')

@section('content')

    <body id="mian-body">
        <a id="button"></a>
        <!-- Header start -->
        @include('frontend.layouts.header')
        <!-- banner  start -->
        <section class="banner-top-new" style="background-image:url('assets/images/resouces.jpg') ;">
            <div class="container">
                <div class="row">
                    <div class="col-12 top-quote text-center">
                        <h2>Experian Gets a 360 Degree Customer View</h2>
                        <p>Experian Powers Customer Insight with 50x Performance Increase</p>
                        <a class="Click-here" href="#">
                            <!--  <img src="http://techcaffee.com/codec/resources/images/play-button.png" />-->
                            <img src="http://codecnetworks.in/codec/images/playbutton.png" class="img-fluid"
                                style="width:100px;">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- banner end -->
        <!-- Section 1 start -->
        <section class="sec-wrap-cod-2 bg-color-green" id="overview" role="Overview">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 top-banner-btm">
                        <p>With 15,000+ employees and annual revenues exceeding $4 billion (USD), Experian is a global
                            leader in credit reporting and marketing services. The company is comprised of four main
                            business units: Credit Information Services, Decision Analytics, Business Information Services,
                            and Marketing Services.</p>

                        <div><button class="white-button-2">Read the case study</button></div>
                    </div>

                    <!--<div class="col-sm-4"><img src="http://techcaffee.com/codec/resources/images/experian.jpg" /></div>-->
                    <div class="col-sm-4"><img src="https://i.ytimg.com/vi/YSxeXPD-p8g/maxresdefault.jpg"
                            style="width: 100%;"></div>
                </div>
            </div>
        </section>
        <!-- Section 2 start -->
        <section class="sec-wrap-cod-2" id="overview" role="Overview">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 overview-new">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 pdg-0 overview-new-2">
                                    <h3>Overview</h3>

                                    <p>Experian Marketing Services (EMS) has built its business on the effective collection,
                                        analysis and use of data. EMS helps marketers connect with customers through
                                        relevant communications across a variety of channels, driven by advanced analytics
                                        on an extensive database of geographic, demographic, and lifestyle data.</p>

                                    <p>Our Hadoop infrastructure has become a real transformational change. Deploying
                                        Cloudera allows us to process orders of magnitude more information through our
                                        systems, and that technological capability in combination with Experian’s expertise
                                        in bringing together data assets is driving new, real insights into tomorrow’s
                                        marketing environments.<br>
                                        <br>
                                        <b>Jeff Hassemer, VP of Product Strategy, Experian</b>
                                    </p>

                                    <p>Today’s consumers leave a digital trail of behaviors and preferences for marketers to
                                        leverage so they can enhance the customer experience. Experian’s clients have
                                        started asking for more frequent updates on consumers’ latest purchasing behaviors,
                                        online browsing patterns and social media activity so they can respond in real time.
                                        But the data exhaust from these digital channels is massive and requires a
                                        technological infrastructure that can accommodate rapid processing, large-scale
                                        storage, and flexible analysis of multi-structured data.</p>
                                </div>

                                <div class="col-12 pdg-0">
                                    <h3>Meeting Client SLAs with 24x7 Reliability</h3>

                                    <p>Hadoop and HBase quickly surfaced as a natural fit for Experian’s needs, such as
                                        meeting client SLAs and having 24x7 reliability, so the organization invested in
                                        Cloudera Enterprise.</p>

                                    <p>A few months of exploration into Hadoop translated into a production version of
                                        Experian’s Cross-Channel Identity Resolution (CCIR) engine: a linkage engine that is
                                        used to keep a persistent repository of client touch points.</p>
                                </div>

                                <div class="col-12 pdg-0 overview-new-2">
                                    <h3>Delivering Operational Efficiency at a Fraction of the Cost</h3>

                                    <p>Hadoop is delivering operational efficiency to Experian by accelerating processing
                                        performance by 50x. They can process 100 million records per hour with the new
                                        Hadoop environment, whereas they used to process 50 million matches per day. And the
                                        cost of their new infrastructure is only a fraction of the legacy environment.</p>

                                    <p>Nobody is doing what we’re doing with Hadoop today, especially at this order of
                                        magnitude. Ours is the first data management platform of its kind that accepts data,
                                        links information together across an entire marketing ecosystem, and puts it into a
                                        usable format for a solid customer experience.<br>
                                        <br>
                                        <b>Jeff Hassemer, VP of Product Strategy, Experian</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Column -->

                    <div class="col-sm-4">
                        <div class="container-fluid right-bg-gray">
                            <div class="row">
                                <div class="col-xs-12 right-bg-gray-wrap">
                                    <!-- title -->
                                    <h1>Key Highlights</h1>
                                    <!-- categories -->

                                    <div>
                                        <h2 class="highlight">Category</h2>

                                        <p>Digital Marketing</p>
                                    </div>
                                    <!-- challenge -->

                                    <div>
                                        <h2 class="highlight">Challenges</h2>

                                        <ul id="challenges">
                                            <li><span>Clients demand a single, integrated view of their customers across all
                                                    channels, encompassing real-time behaviors, to build more meaningful
                                                    interactions with them.</span></li>
                                        </ul>
                                    </div>
                                    <!-- solution -->

                                    <div>
                                        <h2 class="highlight">Solution Highlights</h2>

                                        <ul id="solutions">
                                            <li><span>Cloudera Enterprise</span></li>
                                        </ul>
                                    </div>
                                    <!-- partnership highlights -->

                                    <div>&nbsp;</div>
                                    <!-- applications -->

                                    <div>&nbsp;</div>
                                    <!-- data sources: three cases (empty array, one item, multiple items) -->

                                    <div>&nbsp;</div>
                                    <!-- impact: three cases (empty array, one item, multiple items) -->

                                    <div>
                                        <h2 class="highlight">Impact</h2>

                                        <ul id="impacts">
                                            <li><span>50x performance gains</span></li>
                                            <li><span>Processing 500% more matches per day</span></li>
                                            <li><span>Deployment in less than 6 months</span></li>
                                        </ul>
                                    </div>
                                    <!-- technologies in use: three cases (empty array, one item, multiple items) -->
                                    <!-- big data scale: three cases (empty array, one item, multiple items) -->

                                    <div>&nbsp;</div>

                                    <div class="side-bar-btn1">
                                        <div><button class="black-button-2">Browse Customer Stories</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Column End -->
                </div>
            </div>
        </section>
        </div>
    </body>
    <div class="custom-model-main popup1">
        <div class="custom-model-inner">
            <div class="close-btn">&#10006;</div>
            <div class="custom-model-wrap">
                <div class="pop-up-content-wrap">
                    <video width="100%" controls="" id="video-inn">
                        <source src="http://codecnetworks.in/codec/uploads/events/20181017181030-2018-10-17events181025.mp4"
                            type="video/mp4">
                        <source src="http://codecnetworks.in/codec/uploads/events/20181017181030-2018-10-17events181025.mp4"
                            type="video/ogg">
                    </video>
                </div>
            </div>
        </div>
        <div class="bg-overlay"></div>
    </div>
    <!-- Jquery code -->
@endsection



