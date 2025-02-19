<!DOCTYPE html>
<html>
   <head>
      <title> CN Insight</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS start -->
      <link rel="stylesheet" type="text/css"   href="assets/css/bootstrap.min.css">
      <link  rel="stylesheet" type="text/css" href="assets/css/style.css" >
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link  rel="stylesheet" type="text/css" href="assets/css/owlcarousel.css" >
      <link  rel="stylesheet" type="text/css" href="assets/css/swiper.css" >
      <link  rel="stylesheet" type="text/css" href="assets/css//menu.css" >
      <link  rel="stylesheet" type="text/css" href="assets/css/menutoggle.css" >
      <link  rel="stylesheet" type="text/css" href="assets/css/menubar.css" >
      <link  rel="stylesheet" type="text/css" href="assets/css/mobile-menu.css" >
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/ceh2.css">
      <link rel="stylesheet" type="text/css" href="assets/css/services.css">
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/main-menu.js"></script>
      <style type="text/css">
         .with-zoom1 .container{
         width: 100%;
         max-width: 1370px;
         }
         .codec-top-fixed{
         position: relative;
         left: 0;
         text-align: center;
         margin-left: auto;
         margin-right: auto;
         top: 5px;
         }
         .cspace{
         padding-top: 100px;
         }
         .training_cat{
         position: sticky;
         top: 80px;
         }
      </style>
   </head>
   <body class="with-zoom1" id="training-page">
      <!-- Header start -->
         @include('frontend.layouts.training-header')
      <!-- Header end -->
      <!-- breadcrumbs -->
      <!--<div class="breadcrumbs">-->
      <!--   <div class="container">-->
      <!--      <div class="col-md-7">-->
      <!--         <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">-->
      <!--            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>-->
      <!--            <li><a href="Training.php">Training</a></li>-->
      <!--         </ol>-->
      <!--      </div>-->
      <!--   </div>-->
      <!--</div>-->
      <!-- breadcrumbs -->
      <!-- main section-->
      <section class="pb-5 training-page desktop-view">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-3 filtercatsec training_cat">
                  <div class="categories">
                     <div class="cc-sidebar">
                        <div class="categorytitle sign-arrow"> CN Insight Categories</div>
                        <div class="ecsp_div">
                           <ul class="tab2">
                              <li id="li_border"><a href="#eccouncil" class="tablinks1 active" onclick="openCity(event, 'eccouncil')">EC Council Accredited </a></li>
                              <li id="li_border"><a href="#pecb" class="tablinks1" onclick="openCity(event, 'pecb')">PECB Accredited </a></li>
                              <li id="li_border"><a href="#information" class="tablinks1" onclick="openCity(event, 'information')">Information security industry specialized Training </a></li>
                              <li id="li_border"><a href="#security" class="tablinks1" onclick="openCity(event, 'security')">IT / Security Risk, Compliance and Governance</a></li>
                              <li id="li_border"><a href="#datascience" class="tablinks1" onclick="openCity(event, 'datascience')">Data Science & Business Analytics</a></li>
                              <li id="li_border"><a href="#digital" class="tablinks1" onclick="openCity(event, 'digital')">Digital Transformation</a></li>
                              <li id="li_border"><a href="#it" class="tablinks1" onclick="openCity(event, 'it')">IT Operation, Project and Service Management</a></li>
                              <li id="li_border"><a href="#industry" class="tablinks1" onclick="openCity(event, 'industry')">Industry Specific Quality Management Programs</a></li>
                              <li id="li_border"><a href="#server" class="tablinks1" onclick="openCity(event, 'server')">Server, Storage, Cloud and Virtualization</a></li>
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
                     <div id="eccouncil" class="tabcontent1">
                        <div class="mrgn-brdr">
                           <div class="row box-wrap">
                              <h4 class="cat-title">EC Council Accredited </h4>
                              <!-- cn insight box start -->
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/ec-council-1.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>EC Council Accredited Certification Programs</h3>
                                          <p>Offers buffey of security programs, tools and techniques that are globally accepted in Information and Cyber Security Assurance. </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/PECB-Acc-Certification.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">PECB Accredited Certification Programs</a></h3>
                                       <p>A global training provider offers expertise in domains including IT, Info Sec, Service/ Quality Management, Risk Management, Health, Safety, and Environment.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/cyber-security-pene.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">Cyber Security and Penetration Testing</a></h3>
                                       <p>Real-life attack scenarios based programs for professionals aspire to acquire the skillsets required for cyber security job roles. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/Security-oprations-4.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Security Operations and Management</h3>
                                          <p>Extensive and meticulous knowledge with enhanced capabilities programs are engineered for analysts to achieve proficiency in performing SOC operations  </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/cyber-forensic-5.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Cyber Forensic and Fraud Management</h3>
                                          <p>Develops the strong logical skills needed to detect, investigate and prevent computer crime and to combat cyber fraud in a technology-driven world.</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/instructor-online.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT / Security Risk, Compliance and Governance</h3>
                                       <p>Most up-to-date GRC training programs ensure to achieve required capabilities of shielding organization against threats in a challenging environment. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/Security-oprations-4.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Data Science, Analytics and Artificial Intelligence</h3>
                                       <p>Based on the most transformational fastest growing technologies in the build of data visualization, predictive analytics, machine learning and data science. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/networks-8.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Network Administration and Security</h3>
                                       <p> Knowledge programs covers the policies and practices adopted to prevent, monitor and reduce risk network-accessible resources.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/it-security-opration9.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT Operation, Project and Service Management</h3>
                                       <p>Based on the most integrated programs like ITIL, PMP, Prince, DevOps, Agile, Scrum necessary to optimize IT strategies and resources across the organization. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- cn insight box end  -->
                           </div>
                        </div>
                     </div>
                     <!--11  -->
                     <!-- 11 -->
                     <div id="pecb" class="tabcontent1">
                        <div class="mrgn-brdr">
                           <div class="row box-wrap">
                              <h4 class="cat-title">PECB Accredited </h4>
                              <!-- cn insight box start -->
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/ec-council-1.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>EC Council Accredited Certification Programs</h3>
                                          <p>Offers buffey of security programs, tools and techniques that are globally accepted in Information and Cyber Security Assurance. </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/PECB-Acc-Certification.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">PECB Accredited Certification Programs</a></h3>
                                       <p>A global training provider offers expertise in domains including IT, Info Sec, Service/ Quality Management, Risk Management, Health, Safety, and Environment.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/cyber-security-pene.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">Cyber Security and Penetration Testing</a></h3>
                                       <p>Real-life attack scenarios based programs for professionals aspire to acquire the skillsets required for cyber security job roles. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/Security-oprations-4.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Security Operations and Management</h3>
                                          <p>Extensive and meticulous knowledge with enhanced capabilities programs are engineered for analysts to achieve proficiency in performing SOC operations  </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/cyber-forensic-5.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Cyber Forensic and Fraud Management</h3>
                                          <p>Develops the strong logical skills needed to detect, investigate and prevent computer crime and to combat cyber fraud in a technology-driven world.</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/instructor-online.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT / Security Risk, Compliance and Governance</h3>
                                       <p>Most up-to-date GRC training programs ensure to achieve required capabilities of shielding organization against threats in a challenging environment. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/Security-oprations-4.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Data Science, Analytics and Artificial Intelligence</h3>
                                       <p>Based on the most transformational fastest growing technologies in the build of data visualization, predictive analytics, machine learning and data science. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/networks-8.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Network Administration and Security</h3>
                                       <p> Knowledge programs covers the policies and practices adopted to prevent, monitor and reduce risk network-accessible resources.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/it-security-opration9.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT Operation, Project and Service Management</h3>
                                       <p>Based on the most integrated programs like ITIL, PMP, Prince, DevOps, Agile, Scrum necessary to optimize IT strategies and resources across the organization. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- cn insight box end  -->
                           </div>
                        </div>
                     </div>
                     <!--11  -->
                     <!-- 11 -->
                     <div id="information" class="tabcontent1">
                        <div class="mrgn-brdr">
                           <div class="row box-wrap">
                              <h4 class="cat-title">Information security industry specialized Training </h4>
                              <!-- cn insight box start -->
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/ec-council-1.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>EC Council Accredited Certification Programs</h3>
                                          <p>Offers buffey of security programs, tools and techniques that are globally accepted in Information and Cyber Security Assurance. </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/PECB-Acc-Certification.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">PECB Accredited Certification Programs</a></h3>
                                       <p>A global training provider offers expertise in domains including IT, Info Sec, Service/ Quality Management, Risk Management, Health, Safety, and Environment.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/cyber-security-pene.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">Cyber Security and Penetration Testing</a></h3>
                                       <p>Real-life attack scenarios based programs for professionals aspire to acquire the skillsets required for cyber security job roles. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/Security-oprations-4.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Security Operations and Management</h3>
                                          <p>Extensive and meticulous knowledge with enhanced capabilities programs are engineered for analysts to achieve proficiency in performing SOC operations  </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/cyber-forensic-5.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Cyber Forensic and Fraud Management</h3>
                                          <p>Develops the strong logical skills needed to detect, investigate and prevent computer crime and to combat cyber fraud in a technology-driven world.</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/instructor-online.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT / Security Risk, Compliance and Governance</h3>
                                       <p>Most up-to-date GRC training programs ensure to achieve required capabilities of shielding organization against threats in a challenging environment. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/Security-oprations-4.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Data Science, Analytics and Artificial Intelligence</h3>
                                       <p>Based on the most transformational fastest growing technologies in the build of data visualization, predictive analytics, machine learning and data science. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/networks-8.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Network Administration and Security</h3>
                                       <p> Knowledge programs covers the policies and practices adopted to prevent, monitor and reduce risk network-accessible resources.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/it-security-opration9.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT Operation, Project and Service Management</h3>
                                       <p>Based on the most integrated programs like ITIL, PMP, Prince, DevOps, Agile, Scrum necessary to optimize IT strategies and resources across the organization. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- cn insight box end  -->
                           </div>
                        </div>
                     </div>
                     <!-- 11 -->
                     <!-- 11 -->
                     <div id="security" class="tabcontent1">
                        <div class="mrgn-brdr">
                           <div class="row box-wrap">
                              <h4 class="cat-title">IT / Security Risk, Compliance and Governance </h4>
                              <!-- cn insight box start -->
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/ec-council-1.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>EC Council Accredited Certification Programs</h3>
                                          <p>Offers buffey of security programs, tools and techniques that are globally accepted in Information and Cyber Security Assurance. </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/PECB-Acc-Certification.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">PECB Accredited Certification Programs</a></h3>
                                       <p>A global training provider offers expertise in domains including IT, Info Sec, Service/ Quality Management, Risk Management, Health, Safety, and Environment.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/cyber-security-pene.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">Cyber Security and Penetration Testing</a></h3>
                                       <p>Real-life attack scenarios based programs for professionals aspire to acquire the skillsets required for cyber security job roles. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/Security-oprations-4.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Security Operations and Management</h3>
                                          <p>Extensive and meticulous knowledge with enhanced capabilities programs are engineered for analysts to achieve proficiency in performing SOC operations  </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/cyber-forensic-5.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Cyber Forensic and Fraud Management</h3>
                                          <p>Develops the strong logical skills needed to detect, investigate and prevent computer crime and to combat cyber fraud in a technology-driven world.</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/instructor-online.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT / Security Risk, Compliance and Governance</h3>
                                       <p>Most up-to-date GRC training programs ensure to achieve required capabilities of shielding organization against threats in a challenging environment. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/Security-oprations-4.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Data Science, Analytics and Artificial Intelligence</h3>
                                       <p>Based on the most transformational fastest growing technologies in the build of data visualization, predictive analytics, machine learning and data science. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/networks-8.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Network Administration and Security</h3>
                                       <p> Knowledge programs covers the policies and practices adopted to prevent, monitor and reduce risk network-accessible resources.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/it-security-opration9.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT Operation, Project and Service Management</h3>
                                       <p>Based on the most integrated programs like ITIL, PMP, Prince, DevOps, Agile, Scrum necessary to optimize IT strategies and resources across the organization. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- cn insight box end  -->
                           </div>
                        </div>
                     </div>
                     <!-- 11 -->
                     <!-- Data Science & Business Analytics start -->
                     <div id="datascience" class="tabcontent1">
                        <div class="mrgn-brdr">
                           <div class="row box-wrap">
                              <h4 class="cat-title">Data Science & Business Analytics</h4>
                              <!-- cn insight box start -->
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/ec-council-1.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>EC Council Accredited Certification Programs</h3>
                                          <p>Offers buffey of security programs, tools and techniques that are globally accepted in Information and Cyber Security Assurance. </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/PECB-Acc-Certification.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">PECB Accredited Certification Programs</a></h3>
                                       <p>A global training provider offers expertise in domains including IT, Info Sec, Service/ Quality Management, Risk Management, Health, Safety, and Environment.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/cyber-security-pene.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">Cyber Security and Penetration Testing</a></h3>
                                       <p>Real-life attack scenarios based programs for professionals aspire to acquire the skillsets required for cyber security job roles. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/Security-oprations-4.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Security Operations and Management</h3>
                                          <p>Extensive and meticulous knowledge with enhanced capabilities programs are engineered for analysts to achieve proficiency in performing SOC operations  </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/cyber-forensic-5.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Cyber Forensic and Fraud Management</h3>
                                          <p>Develops the strong logical skills needed to detect, investigate and prevent computer crime and to combat cyber fraud in a technology-driven world.</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/instructor-online.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT / Security Risk, Compliance and Governance</h3>
                                       <p>Most up-to-date GRC training programs ensure to achieve required capabilities of shielding organization against threats in a challenging environment. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/Security-oprations-4.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Data Science, Analytics and Artificial Intelligence</h3>
                                       <p>Based on the most transformational fastest growing technologies in the build of data visualization, predictive analytics, machine learning and data science. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/networks-8.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Network Administration and Security</h3>
                                       <p> Knowledge programs covers the policies and practices adopted to prevent, monitor and reduce risk network-accessible resources.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/it-security-opration9.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT Operation, Project and Service Management</h3>
                                       <p>Based on the most integrated programs like ITIL, PMP, Prince, DevOps, Agile, Scrum necessary to optimize IT strategies and resources across the organization. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- cn insight box end  -->
                           </div>
                        </div>
                     </div>
                     <!-- Data Science & Business Analytics end -->
                     <!-- Digital Transformation start -->
                     <div id="digital" class="tabcontent1">
                        <div class="mrgn-brdr">
                           <div class="row box-wrap">
                              <h4 class="cat-title">Digital Transformation </h4>
                              <!-- cn insight box start -->
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/ec-council-1.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>EC Council Accredited Certification Programs</h3>
                                          <p>Offers buffey of security programs, tools and techniques that are globally accepted in Information and Cyber Security Assurance. </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/PECB-Acc-Certification.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">PECB Accredited Certification Programs</a></h3>
                                       <p>A global training provider offers expertise in domains including IT, Info Sec, Service/ Quality Management, Risk Management, Health, Safety, and Environment.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/cyber-security-pene.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">Cyber Security and Penetration Testing</a></h3>
                                       <p>Real-life attack scenarios based programs for professionals aspire to acquire the skillsets required for cyber security job roles. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/Security-oprations-4.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Security Operations and Management</h3>
                                          <p>Extensive and meticulous knowledge with enhanced capabilities programs are engineered for analysts to achieve proficiency in performing SOC operations  </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/cyber-forensic-5.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Cyber Forensic and Fraud Management</h3>
                                          <p>Develops the strong logical skills needed to detect, investigate and prevent computer crime and to combat cyber fraud in a technology-driven world.</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/instructor-online.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT / Security Risk, Compliance and Governance</h3>
                                       <p>Most up-to-date GRC training programs ensure to achieve required capabilities of shielding organization against threats in a challenging environment. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/Security-oprations-4.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Data Science, Analytics and Artificial Intelligence</h3>
                                       <p>Based on the most transformational fastest growing technologies in the build of data visualization, predictive analytics, machine learning and data science. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/networks-8.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Network Administration and Security</h3>
                                       <p> Knowledge programs covers the policies and practices adopted to prevent, monitor and reduce risk network-accessible resources.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/it-security-opration9.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT Operation, Project and Service Management</h3>
                                       <p>Based on the most integrated programs like ITIL, PMP, Prince, DevOps, Agile, Scrum necessary to optimize IT strategies and resources across the organization. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- cn insight box end  -->
                           </div>
                        </div>
                     </div>
                     <!-- Digital Transformation end  -->
                     <!-- IT Operation, Project and Service Management start -->
                     <div id="it" class="tabcontent1">
                        <div class="mrgn-brdr">
                           <div class="row box-wrap">
                              <h4 class="cat-title">IT Operation, Project and Service Management</h4>
                              <!-- cn insight box start -->
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/ec-council-1.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>EC Council Accredited Certification Programs</h3>
                                          <p>Offers buffey of security programs, tools and techniques that are globally accepted in Information and Cyber Security Assurance. </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/PECB-Acc-Certification.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">PECB Accredited Certification Programs</a></h3>
                                       <p>A global training provider offers expertise in domains including IT, Info Sec, Service/ Quality Management, Risk Management, Health, Safety, and Environment.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/cyber-security-pene.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">Cyber Security and Penetration Testing</a></h3>
                                       <p>Real-life attack scenarios based programs for professionals aspire to acquire the skillsets required for cyber security job roles. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/Security-oprations-4.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Security Operations and Management</h3>
                                          <p>Extensive and meticulous knowledge with enhanced capabilities programs are engineered for analysts to achieve proficiency in performing SOC operations  </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/cyber-forensic-5.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Cyber Forensic and Fraud Management</h3>
                                          <p>Develops the strong logical skills needed to detect, investigate and prevent computer crime and to combat cyber fraud in a technology-driven world.</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/instructor-online.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT / Security Risk, Compliance and Governance</h3>
                                       <p>Most up-to-date GRC training programs ensure to achieve required capabilities of shielding organization against threats in a challenging environment. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/Security-oprations-4.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Data Science, Analytics and Artificial Intelligence</h3>
                                       <p>Based on the most transformational fastest growing technologies in the build of data visualization, predictive analytics, machine learning and data science. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/networks-8.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Network Administration and Security</h3>
                                       <p> Knowledge programs covers the policies and practices adopted to prevent, monitor and reduce risk network-accessible resources.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/it-security-opration9.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT Operation, Project and Service Management</h3>
                                       <p>Based on the most integrated programs like ITIL, PMP, Prince, DevOps, Agile, Scrum necessary to optimize IT strategies and resources across the organization. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- cn insight box end  -->
                           </div>
                        </div>
                     </div>
                     <!-- IT Operation, Project and Service Management end  -->
                     <!-- Industry Specific Quality Management Programs start -->
                     <div id="industry" class="tabcontent1">
                        <div class="mrgn-brdr">
                           <div class="row box-wrap">
                              <h4 class="cat-title">Industry Specific Quality Management Program </h4>
                              <!--  -->
                              <!-- cn insight box start -->
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/ec-council-1.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="thirdlevel.php">EC Council Accredited Certification Programs</a></h3>
                                       <p>Offers buffey of security programs, tools and techniques that are globally accepted in Information and Cyber Security Assurance. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/PECB-Acc-Certification.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="thirdlevel.php">PECB Accredited Certification Programs</a></h3>
                                       <p>A global training provider offers expertise in domains including IT, Info Sec, Service/ Quality Management, Risk Management, Health, Safety, and Environment.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/cyber-security-pene.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="thirdlevel.php">Cyber Security and Penetration Testing</a></h3>
                                       <p>Real-life attack scenarios based programs for professionals aspire to acquire the skillsets required for cyber security job roles. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/Security-oprations-4.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="thirdlevel.php">Security Operations and Management</a></h3>
                                       <p>Extensive and meticulous knowledge with enhanced capabilities programs are engineered for analysts to achieve proficiency in performing SOC operations  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/cyber-forensic-5.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="thirdlevel.php">Cyber Forensic and Fraud Management</a></h3>
                                       <p>Develops the strong logical skills needed to detect, investigate and prevent computer crime and to combat cyber fraud in a technology-driven world.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/instructor-online.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT / Security Risk, Compliance and Governance</h3>
                                       <p>Most up-to-date GRC training programs ensure to achieve required capabilities of shielding organization against threats in a challenging environment. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/Security-oprations-4.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Data Science, Analytics and Artificial Intelligence</h3>
                                       <p>Based on the most transformational fastest growing technologies in the build of data visualization, predictive analytics, machine learning and data science. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/networks-8.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Network Administration and Security</h3>
                                       <p> Knowledge programs covers the policies and practices adopted to prevent, monitor and reduce risk network-accessible resources.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/it-security-opration9.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT Operation, Project and Service Management</h3>
                                       <p>Based on the most integrated programs like ITIL, PMP, Prince, DevOps, Agile, Scrum necessary to optimize IT strategies and resources across the organization. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- cn insight box end  -->
                              <!--  -->
                           </div>
                        </div>
                     </div>
                     <!-- Industry Specific Quality Management Programs end  -->
                     <!-- Server, Storage, Cloud and Virtualization start -->
                     <div id="server" class="tabcontent1">
                        <div class="mrgn-brdr">
                           <div class="row box-wrap">
                              <h4 class="cat-title">Server, Storage, Cloud and Virtualization </h4>
                              <!-- cn insight box start -->
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/ec-council-1.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>EC Council Accredited Certification Programs</h3>
                                          <p>Offers buffey of security programs, tools and techniques that are globally accepted in Information and Cyber Security Assurance. </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/PECB-Acc-Certification.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">PECB Accredited Certification Programs</a></h3>
                                       <p>A global training provider offers expertise in domains including IT, Info Sec, Service/ Quality Management, Risk Management, Health, Safety, and Environment.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/cyber-security-pene.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3><a href="javascript:void(0)">Cyber Security and Penetration Testing</a></h3>
                                       <p>Real-life attack scenarios based programs for professionals aspire to acquire the skillsets required for cyber security job roles. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/Security-oprations-4.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Security Operations and Management</h3>
                                          <p>Extensive and meticulous knowledge with enhanced capabilities programs are engineered for analysts to achieve proficiency in performing SOC operations  </p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <a href="blog-view.php">
                                    <div class="col-md-4 pd0">
                                       <div class="tdw-img">
                                          <img src="assets/images/cyber-forensic-5.jpg">
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="feature-header">
                                          <h3>Cyber Forensic and Fraud Management</h3>
                                          <p>Develops the strong logical skills needed to detect, investigate and prevent computer crime and to combat cyber fraud in a technology-driven world.</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/instructor-online.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT / Security Risk, Compliance and Governance</h3>
                                       <p>Most up-to-date GRC training programs ensure to achieve required capabilities of shielding organization against threats in a challenging environment. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/Security-oprations-4.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Data Science, Analytics and Artificial Intelligence</h3>
                                       <p>Based on the most transformational fastest growing technologies in the build of data visualization, predictive analytics, machine learning and data science. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/networks-8.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Network Administration and Security</h3>
                                       <p> Knowledge programs covers the policies and practices adopted to prevent, monitor and reduce risk network-accessible resources.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/it-security-opration9.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>IT Operation, Project and Service Management</h3>
                                       <p>Based on the most integrated programs like ITIL, PMP, Prince, DevOps, Agile, Scrum necessary to optimize IT strategies and resources across the organization. </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 tdw-box tdw-box1">
                                 <div class="col-md-4 pd0">
                                    <div class="tdw-img">
                                       <img src="assets/images/other-quality10.jpg">
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="feature-header">
                                       <h3>Other Quality Management Programs</h3>
                                       <p>Industry specific (Aerospace, Oil, Gas, Health, Education, Medical, Energy  etc) based QM programs assist executives in understanding the business processes.  </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- cn insight box end  -->
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
               <h3>EC Council </h3>
            </div>
            <!-- slider 1  -->
            <div class="ser-slider1">
               <!-- box 1 start -->
               <div id="navigation-count" class="count-nav-box couter-space"></div>
               <div id="ser-demo1" class="owl-carousel owl-theme indu-moblie">
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
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
                        <div class="videoinsight" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                         <img src="assets/images/video-thumb.jpg">
                        </div>                        
                  </div>
                  <!--  -->
                  <div class="item">
                        <div class="videoinsight" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                         <img src="assets/images/video-thumb.jpg">
                        </div>   
                  </div>
                  <!--  -->
                  <div class="item">
                        <div class="videoinsight" data-videourl="https://www.youtube.com/watch?v=GFHlGYB6Cio">
                         <img src="assets/images/video-thumb.jpg">
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
               <h3>PECB Accredited  </h3>
            </div>
            <!-- slider 1  -->
            <div class="ser-slider1">
               <div id="navigation-count2" class="count-nav-box couter-space"></div>
               <!-- box 1 start -->
               <div id="ser-demo3" class="owl-carousel owl-theme indu-moblie">
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
               </div>
               <!-- box 1 end -->
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Network Defender (CND)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>Certified Network Defender (CND) is a vendor-neutral, hands-on, instructor-led comprehensive network security certification training program. It is a skills-based, lab intensive program based</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>A Certified Ethical Hacker is a skilled professional who understands and knows how to look for weaknesses and vulnerabilities in target systems and uses the same knowledge and tools as a malicious hacker</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate the application of ethical hacking techniques such as threat vector identification, network scanning, OS detection, vulnerability analysis, system hacking, web app hacking, etc</p>
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
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
               </div>
               <!-- box 1 end -->
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Network Defender (CND)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>Certified Network Defender (CND) is a vendor-neutral, hands-on, instructor-led comprehensive network security certification training program. It is a skills-based, lab intensive program based</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>A Certified Ethical Hacker is a skilled professional who understands and knows how to look for weaknesses and vulnerabilities in target systems and uses the same knowledge and tools as a malicious hacker</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate the application of ethical hacking techniques such as threat vector identification, network scanning, OS detection, vulnerability analysis, system hacking, web app hacking, etc</p>
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
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
               </div>
               <!-- box 1 end -->
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Network Defender (CND)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>Certified Network Defender (CND) is a vendor-neutral, hands-on, instructor-led comprehensive network security certification training program. It is a skills-based, lab intensive program based</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>A Certified Ethical Hacker is a skilled professional who understands and knows how to look for weaknesses and vulnerabilities in target systems and uses the same knowledge and tools as a malicious hacker</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate the application of ethical hacking techniques such as threat vector identification, network scanning, OS detection, vulnerability analysis, system hacking, web app hacking, etc</p>
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
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
               </div>
               <!-- box 1 end -->
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Network Defender (CND)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>Certified Network Defender (CND) is a vendor-neutral, hands-on, instructor-led comprehensive network security certification training program. It is a skills-based, lab intensive program based</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>A Certified Ethical Hacker is a skilled professional who understands and knows how to look for weaknesses and vulnerabilities in target systems and uses the same knowledge and tools as a malicious hacker</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate the application of ethical hacking techniques such as threat vector identification, network scanning, OS detection, vulnerability analysis, system hacking, web app hacking, etc</p>
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
         <div class="m-container ser-bg" id="m-dt">
            <div class="m-title m-bg5">
               <h3>Digital Transformation</h3>
            </div>
            <!-- slider 1  -->
            <div class="ser-slider1">
               <!-- box 1 start -->
               <div id="navigation-count10" class="count-nav-box couter-space"></div>
               <div id="ser-demo11" class="owl-carousel owl-theme indu-moblie">
                 <!--  -->
                 <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
               </div>
               <!-- box 1 end -->
               </div>
               <!-- box 1 end -->
            </div>
            <!-- slider 1 end -->
            <!-- slider 2  -->
            <div class="ser-slider2">
               <!-- box 1 start -->
               <div id="navigation-count11" class="count-nav-box couter-space"></div>
               <div id="ser-demo12" class="owl-carousel owl-theme indu-moblie">
                  <!--  -->
                  <div class="item">
                     <div class="mrgn-btm-iconbx">
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Network Defender (CND)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>Certified Network Defender (CND) is a vendor-neutral, hands-on, instructor-led comprehensive network security certification training program. It is a skills-based, lab intensive program based</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>A Certified Ethical Hacker is a skilled professional who understands and knows how to look for weaknesses and vulnerabilities in target systems and uses the same knowledge and tools as a malicious hacker</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate the application of ethical hacking techniques such as threat vector identification, network scanning, OS detection, vulnerability analysis, system hacking, web app hacking, etc</p>
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
         <!--box 6 end  -->
         <!-- box 5 start  -->
         <div class="m-container" id="m-sm">
            <div class="m-title m-bg6">
               <h3>IT Operation, Project and Service Management</h3>
            </div>
            <!-- slider 1  -->
            <div class="ser-slider1">
               <div id="navigation-count12" class="count-nav-box couter-space"></div>
               <!-- box 1 start -->
               <div id="ser-demo13" class="owl-carousel owl-theme indu-moblie">
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
               </div>
               <!-- box 1 end -->
               </div>
               <!-- box 1 end -->
            </div>
            <!-- slider 1 end -->
            <!-- slider 2  -->
            <div class="ser-slider2">
               <!-- box 1 start -->
               <div id="navigation-count13" class="count-nav-box couter-space"></div>
               <div id="ser-demo14" class="owl-carousel owl-theme indu-moblie">
                  <!--  -->
                  <div class="item">
                     <div class="mrgn-btm-iconbx">
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Network Defender (CND)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>Certified Network Defender (CND) is a vendor-neutral, hands-on, instructor-led comprehensive network security certification training program. It is a skills-based, lab intensive program based</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>A Certified Ethical Hacker is a skilled professional who understands and knows how to look for weaknesses and vulnerabilities in target systems and uses the same knowledge and tools as a malicious hacker</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate the application of ethical hacking techniques such as threat vector identification, network scanning, OS detection, vulnerability analysis, system hacking, web app hacking, etc</p>
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
         <div class="m-container ser-bg" id="m-server">
            <div class="m-title m-bg7">
               <h3>Industry Specific Quality Management Programs</h3>
            </div>
            <!-- slider 1  -->
            <div class="ser-slider1">
               <!-- box 1 start -->
               <div id="navigation-count14" class="count-nav-box couter-space"></div>
               <div id="ser-demo15" class="owl-carousel owl-theme indu-moblie">
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
                  <div class="item">
                     <a href="blog-view.php">
                        <div class="m-insight-box">
                           <div class="m-insight-img">
                              <img src="assets/images/ec-council-1.jpg" />
                           </div>
                           <div class="m-insight-content">
                              <h3>EC Council Accredited Certification Programs</h3>
                              <p>
                                 Offers buffey of security programs, tools and techniques that are
                                 globally accepted in Information and Cyber Security Assurance.
                              </p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!--  -->
               </div>
               <!-- box 1 end -->
               </div>
               <!-- box 1 end -->
            </div>
            <!-- slider 1 end -->
            <!-- slider 2  -->
            <div class="ser-slider2">
               <!-- box 1 start -->
               <div id="navigation-count15" class="count-nav-box couter-space"></div>
               <div id="ser-demo16" class="owl-carousel owl-theme indu-moblie">
                  <!--  -->
                  <div class="item">
                     <div class="mrgn-btm-iconbx">
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Network Defender (CND)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>Certified Network Defender (CND) is a vendor-neutral, hands-on, instructor-led comprehensive network security certification training program. It is a skills-based, lab intensive program based</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker (CEH V10)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>A Certified Ethical Hacker is a skilled professional who understands and knows how to look for weaknesses and vulnerabilities in target systems and uses the same knowledge and tools as a malicious hacker</p>
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
                        <a href="case2.php">
                           <div class="iconbox">
                              <div class="box-header">
                                 <div class="box-icon pst-listing"><i class="fa fa-cube"></i></div>
                                 <h4 class="box-title">Certified Ethical Hacker - Practical (CEH Practical)</h4>
                              </div>
                              <div class="box-content" id="clr-learn">
                                 <div class="box-content-p">
                                    <p>C|EH Practical is a six-hour, rigorous exam that requires you to demonstrate the application of ethical hacking techniques such as threat vector identification, network scanning, OS detection, vulnerability analysis, system hacking, web app hacking, etc</p>
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
         <!--box 6 end  -->
      </section>
      <!-- mobile end -->
      <a href="#training-page" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>
      @include('frontend.layouts.footer')
   </body>
   <!-- Jquery code -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script type="text/javascript" src="assets/js/custom.js"></script>
   <script type="text/javascript" src="assets/js/mobile-menu.js?v=2"></script>
   <script type="text/javascript"> $(document).ready(function(){
      "use strict";
      var offSetTop = 100;
      var $scrollToTopButton = $('.scrollToTop');
      //Check to see if the window is top if not then display button
      $(window).scroll(function(){
      if ($(this).scrollTop() > offSetTop) {
      $scrollToTopButton.fadeIn();
      } else {
      $scrollToTopButton.fadeOut();
      }
      });
      });
   </script>
   <script type="text/javascript">
      $(document).ready(function () {
      $('.ecsp_div a').bind('click', function (e) {
      e.preventDefault();
      var target = $(this).attr("href");
      $('html, body').stop().animate({
      scrollTop: $(target).offset().top - 80
      }, 100, function () {
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
      window.onload = function () {
      addVersionToFiles();
      };
   </script>
   <script type="text/javascript">
      $(function () {
      function initializeCarousel(carouselId, navigationCountId) {
      $("#" + carouselId).owlCarousel({
          loop: true,
          margin: 10,
          nav: true,
          dots: true,
          navigationText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
          responsive: {
              0: { items: 1 },
              600: { items: 1 },
              900: { items: 1 },
              1200: { items: 3 }
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
      if (!event.namespace)  {
      return;
      }
      var carousel = event.relatedTarget;
      $("#" + navigationCountId).html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
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
   <script>
      var youtubeVideo = {
      videoBtn:'[data-videourl]',
      
      model: function() {
      
          function videoinit() {
              $('body').on('click', youtubeVideo.videoBtn, function(event) {
                event.preventDefault();
                  var videoSrc = $(this).data('videourl');
      
                  var ID = '';
                  var url = videoSrc.replace(/(>|<)/gi, '').split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
                  if (url[2] !== undefined) {
                      ID = url[2].split(/[^0-9a-z_\-]/i);
                      ID = ID[0];
                  } else {
                      ID = url;
                  }
      
                  var videoElement = $('<div class="video-popup-model">' + '<div class="video-layer">' + '<div class="video-model-close-layer">' + '</div>' + '<div class="model-wrapper">' + '<div class="videomodel">' + '<div class="videoscreen">' + '<iframe width="100%" height="auto" class="videlement"' + 'src="https://www.youtube.com/embed/' + ID + '?rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=1' + '" frameborder="0"' + 'allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"' + 'allowfullscreen></iframe>' + '</div>' + '<div class="modelCloseBtn">' + '</div>' + '</div>' + '</div>' + '</div>' + '</div>');
      
                  $('body').prepend(videoElement);
                  var videoWidth = $('.video-popup-model .videlement').width();
                  var videHeight = (9 / 16) * videoWidth;
                  $('.video-popup-model .videlement').height(videHeight);
                  $('body').find('.video-popup-model').addClass('smooth_show');
              });
          }
          videoinit();
      
          function modelClose() {
              $('body').on('click', '.modelCloseBtn', function(event) {
                  var model = $(this).parents('.video-popup-model')
                  model.removeClass('smooth_show');
                  setTimeout(function() {
                      model.remove();
                  }, 500);
                  $('body').removeClass('no-reload');
              });
          }
          modelClose();
      
          function modelLayerClose() {
              $('body').on('click', '.video-model-close-layer', function(event) {
                  $(".modelCloseBtn").trigger('click');
              });
          }
          modelLayerClose();
      },
      init: function() {
          youtubeVideo.model();
      }
      };
      
      youtubeVideo.init();
   </script>
   
   @include('frontend.layouts.right-menu-js')
</html>