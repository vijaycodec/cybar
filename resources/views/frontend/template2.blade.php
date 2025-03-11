@extends('frontend.layouts.app')
@section('content')

    <body class="stop-animation">
        <a id="button"></a>
        <!-- Header start -->
        @include('frontend.layouts.header')
        <!-- banner  start -->
        <section class="sec_ban" style="background-image:url('assets/images/resouces.jpg') !important;">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="assets/images/careers.jpg" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h2>About</h2>
                </div>
            </div>
        </section>

        <!-- banner end -->
        <!-- Section 1 start -->
        <section class="sec-wrap-cod-2" role="NA">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 temp-3-sec">

                        <p class="temp-head">
                            To understand what drives our technology, one must first take a look under the hoodie.Cloudera
                            was founded in 2008 by some of the brightest minds at Silicon Valley’s leading companies,
                            including Google (Christophe Bisciglia), Yahoo! (Amr Awadallah), Oracle (Mike Olson), and
                            Facebook (Jeff Hammerbacher). Our founders held at their core the belief that open source, open
                            standards, and open markets are best. That belief remains central to our values. Doug Cutting,
                            co-creator of Hadoop, joined the company in 2009 as Chief Architect and remains in that role.
                            Today, Cloudera has more than 1,600 employees — each with their own hoodie. We have offices in
                            24 countries around the globe, with our headquarters in Palo Alto, California.</p>

                        <p>Cloudera was founded in 2008 by some of the brightest minds at Silicon Valley’s leading
                            companies, including Google (Christophe Bisciglia), Yahoo! (Amr Awadallah), Oracle (Mike Olson),
                            and Facebook (Jeff Hammerbacher). Our founders held at their core the belief that open source,
                            open standards, and open markets are best. That belief remains central to our values. Doug
                            Cutting, co-creator of Hadoop, joined the company in 2009 as Chief Architect and remains in that
                            role. Today, Cloudera has more than 1,600 employees — each with their own hoodie. We have
                            offices in 24 countries around the globe, with our headquarters in Palo Alto, California.</p>
                    </div>

                    <div class="col-sm-6 text-center">
                        <figure><img
                                src="http://codecnetworks.in/codec/uploads/pages/20190426114708-2019-04-26resources11470235.jpg"
                                style="width: 100%;">
                            <figcaption>Cloudera Founders, 2008</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div><button class="black-button-2"><a href="http://codecnetworks.in/codec/single/courses/391">Codec
                                Leadership</a></button></div>
                </div>
            </div>
            </div>
        </section>
        <!-- Section 2 start -->
        <section class="sec-wrap-cod-2" role="NA"
            style="background-image:url('assets/images/image-bg-top.jpg'); background-repeat: repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 mid-banner temp-3-sec">
                        <h3 class="temp-head">Cloudera Cares. Do-gooders unite.</h3>

                        <p>Cloudera Cares is the arm of the company that does the really good stuff. We've donated software,
                            professional service hours, hosted hackathons for nonprofits, cleaned up parks, served food to
                            the less fortunate, and everything in between. To date, Clouderans have donated more than 3,900
                            hours to doing good.</p>
                    </div>
                    <div class="col-sm-5 mid-banner temp-3-sec">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiN6qXhtzwuv1MSV5CY9tQrL9s4juOLQ4B8XaTuh3oXnkoLB3T"
                            target="_blank">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="sec-wrap-cod-2" role="NA" style="background: #dceff6;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="temp-head"> Don't just take our word for it</h3>
                    </div>

                    <div class="col-sm-4 testi-temp">
                        <p> When we were managing Apache Spark and Kafka in-house, we had issues with corrupt messages and
                            the pipeline failing. With Cloudera’s expertise, we’ve been able to solve those problems.</p>

                        <p class="sign"> Jeremy Kayne, CTO, Bidtellect.</p>
                    </div>

                    <div class="col-sm-4 testi-temp">
                        <p> When we were managing Apache Spark and Kafka in-house, we had issues with corrupt messages and
                            the pipeline failing. With Cloudera’s expertise, we’ve been able to solve those problems.</p>

                        <p class="sign"> Jeremy Kayne, CTO, Bidtellect</p>
                    </div>

                    <div class="col-sm-4 testi-temp">
                        <p> When we were managing Apache Spark and Kafka in-house, we had issues with corrupt messages and
                            the pipeline failing. With Cloudera’s expertise, we’ve been able to solve those problems.</p>

                        <p class="sign"> Jeremy Kayne, CTO, Bidtellect</p>
                    </div>
                </div>


            </div>
        </section>

        <section class="sec-wrap-cod-2" role="NA">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="temp-head"> Awards</h3>
                    </div>

                    <div class="col-md-3 awards-wrap text-center">
                        <figure><img
                                src="http://codecnetworks.in/codec/uploads/pages/20190426114708-2019-04-26resources11470236.jpg">
                            <figcaption> Enterprise Management 360 Top 10</figcaption>
                        </figure>
                    </div>

                    <div class="col-md-3 text-center awards-wrap">
                        <figure><img
                                src="http://codecnetworks.in/codec/uploads/pages/20190426114708-2019-04-26resources11470237.jpg">
                            <figcaption>Enterprise Management 360 Top 10</figcaption>
                        </figure>
                    </div>

                    <div class="col-md-3 text-center awards-wrap">
                        <figure><img
                                src="http://codecnetworks.in/codec/uploads/pages/20190426114708-2019-04-26resources11470238.jpg">
                            <figcaption>Enterprise Management 360 Top 10</figcaption>
                        </figure>
                    </div>

                    <div class="col-md-3 text-center awards-wrap">
                        <figure><img
                                src="http://codecnetworks.in/codec/uploads/pages/20190426114708-2019-04-26resources11470239.jpg">
                            <figcaption>Enterprise Management 360 Top 10</figcaption>
                        </figure>
                    </div>

                    <div class="col-12 text-center">
                        <div><button class="black-button-2">Browse Awards</button></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- LAst section -->
        <section class="btm-banner sec-wrap-cod-2" role="NA"
            style="background-image:url('https://image.shutterstock.com/image-illustration/testimonials-icon-isolated-on-special-260nw-1149227165.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 temp-btm">
                        <h3>Mind your business</h3>

                        <p>It’s never been more important for businesses to be ready for anything. The expected. The
                            unexpected. And whatever lies between.</p>
                        <a href="#"><b>Contact us today - we'll show you how</b> &nbsp;</a><br>
                        <a href="#"><b>Investor relations</b> &nbsp;</a>
                    </div>
                </div>
            </div>
        </section>

    </body>
@endsection
