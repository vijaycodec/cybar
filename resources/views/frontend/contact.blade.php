@extends('frontend.layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/contact.css') }}">


    @section('content')

    <body class="static-menu">
        <!-- Header start -->
        @include('frontend.layouts.header')
        <section class="sec_ban" id="resources-banner">
          <div class="home-ban">
              <div class="rs-img">
                  <img src="assets/images/contact.png" class="img-fluid rs-banner" alt="home banner">
              </div>
              <div class="over-h2">
                  <h2></h2>
                  <p></p>
              </div>
          </div>
      </section>
        <!-- Header end -->
        <!-- breadcrumbs -->
        
        <!-- breadcrumbs -->
        <!-- main section-->
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1>
                <div class="page_head">Contact Us</div>
              </h1>
            </div>
          </div>
    
    
          <div class="con_display">
    
            <div class="row">
    
              <div class="col-md-7">
                <div class="con_left">
                  <ul>
                    <li>
                      <div class="con_box con_loc">
                        <div class="add_head">Head Office Location</div>
                        <div class="add_det">Codec Networks Private Limited, 5th Floor, Office No. 507, New Delhi House Near by Barakhamba Metro station 6, New Delhi, Delhi 110001</div>
                        <div class="add_map">
                          <a class="map_direc"
                            href="https://www.google.com/maps/place/Codec+Networks/@28.6299034,77.2230114,17z/data=!3m1!4b1!4m6!3m5!1s0x390cfddfdd6c4c85:0xfb0032ea09ed20e7!8m2!3d28.6299034!4d77.2230114!16s%2Fg%2F11s0jgxzpr?entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank">Get Direction on Google Map </a>
                        </div>
    
                      </div>
                    </li>
                    <li>
                      <div class="con_box con_metro">
                        <div class="add_head">Nearest metro station</div>
                        <div class="add_det">Barakhamba Road</div>
                      </div>
                    </li>
                    <li>
                      <div class="con_box con_call">
                        <div class="add_head">Call us on</div>
                        <!--<div class="add_det">1800-313-2545&nbsp;(Mon to Fri (09:15AM-07:30PM) &amp; Sat-Sun (09:00AM-07:00PM)) </div>-->
                        <div class="add_det">+91-11-43752299, 43049696&nbsp;Mon-Fri (9:30AM to 7:00PM) &amp; Sat,Sun (9:30AM to 6:30PM)
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="con_box con_mail">
                        <div class="add_head">Drop us a query</div>
                        <div class="add_det"><a href="mailto:mktg@codecnetworks.com">mktg@codecnetworks.com</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="con_box con_whatsapp">
                        <div class="add_head">Chat with Us</div>
                        <div class="add_det"><a href="https://wa.me/919971676124">+91 9971676124</a></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-5">
                <!--contact us form-->
                <style type="text/css">
                  .coun_flag_form {
                    display: block;
                  }
    
                  #hmx_country {
                    text-indent: 35px;
                  }
                </style>
                <div class="con_form">
                  <div class="con_form_place">
                    <form method="post" id="enquiry_frm" name="enquiry_frm"
                      action="">
                      <input type="hidden" name="_token" value="GeK41YTXVlC1LLUw6DF8sbOlhlmMIb3Y3O9sE8OX">
                      <input type="hidden" id="country_id" name="country_id" value="99">
                      <input type="hidden" id="page_nm" name="page_nm"
                        value="">
                      <input type="hidden" name="source" value="Google">
    
                      <h3>Let us help you</h3>
                      <div class="form_fileds mhmhm_frm_fld">
                        <ul>
                          <li class="wid_half">
                            <input type="text" id="txt_name" name="name" data-validation="required"
                              data-validation-error-msg="Please enter your name" placeholder="Full Name" value="">
                            <span id="txt_name_err" class="error" style="display:none"></span>
    
                          </li>
                          <li class="wid_half">
                            <input type="text" name="email" id="txt_email" placeholder="Email Address"
                              data-validation="required" data-validation-error-msg="Please enter your email" value="">
                            <span id="txt_email_err" class="error" style="display:none"></span>
    
                          </li>
    
                          <li>
                            <div class="hm_cn_hol home_frm_mobs">
                              <div class="coun_flag_form">
                                <img id="country_icon"
                                  src=""
                                  alt="">
                              </div>
                              <select id="hmx_country" class="form-control banner_country" data-validation="required"
                                data-validation-error-msg="&lt;br&gt;&lt;br&gt;Please Select your country" name="country"
                                style="height:42px;">
    
                                <option value="" class="optionValue" data-mytag="">--Select Country--</option>
                                <!-- <option  value="US"  class="optionValue" mytag='+1'>United States</option>  -->
                              </select>
                              <div class="mh_num_place">
                                <div class="hm_num">
                                  <input type="hidden" id="phone_code" name="phone_code" value="+91">
                                  <span id="countryCode" style="top:11px !important;">+91</span>
                                  <input id="banner_phone" class="form-control banner_phone hmm_nmnm" name="phone_no"
                                    type="number" placeholder="" style="text-indent:32px;" data-validation="required"
                                    data-validation-error-msg="Please enter your phone" value="">
                                </div>
                                <input type="hidden" value="" id="country-code" name="country_code">
                              </div>
                              <span id="mx_Country_err" class="error" style="display:none"></span>
    
                              <span id="banner_phone_err" class="error" style="display:none"></span>
    
    
                            </div>
    
                          </li>
    
                          <li>
                            <input type="text" id="txt_course" name="course" placeholder="Course" data-validation="required"
                              data-validation-error-msg="Please enter your course" value="">
                            <span id="txt_course_err" class="error" style="display:none"></span>
    
                          </li>
    
                          <li>
                            <textarea placeholder="Message" id="txt_message" name="message" class=""
                              data-validation="required" data-validation-error-msg="Please enter your message"></textarea>
                            <span id="txt_message_err" style="display:none"></span>
    
    
                          </li>
                          <!-- added new captcha-->
                          <li>
                            <div class="new_captcha">
                              <input type="text" name="captcha" id="txtInput" class="form_txtfildsty" style="width:55%"
                                placeholder="Type the code" value="" maxlength="10" data-validation="required"
                                data-validation-error-msg="Please enter your captcha">
                              <!-- <span id="txtcaptcha" class="captcha_value_new">Habcdd</span> -->
                              <span id="txtcaptcha" class="captcha_value_new" style="top:0px;right:0px;"></span>
                              <input type="hidden" id="confirm_captcha" name="confirm_captcha" value="">
    
                              <span class="error" style="display:none" id="txtInput_err"></span>
    
                            </div>
                          </li>
                          <li>
                            <input type="submit" name="btn_submit" id="btn_submit_frm" value="Submit" class="con_sub">
                          </li>
                        </ul>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </div>
    
        <!-- main section end -->
    </body>
    @endsection
      
   
   
