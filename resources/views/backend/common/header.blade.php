<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Cybarwind </title>
   <link rel="shortcut icon" href="assets2/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="assets2/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets2/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets2/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
    <script src="assets2/vendor/jquery/jquery.min.js"></script>
	<!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="assets2/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="assets2/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="assets2/stylesheets/custom.css">
	<link rel="stylesheet" href="assets2/vendor/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets2/vendor/bootstrap-select/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="assets2/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="assets2/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="assets2/vendor/nouisliderribute/nouislider.min.css">
	<script>
      var skin = localStorage.getItem('skin') || 'default';
      var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add flag class to html immediately
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script><!-- END THEME STYLES -->
  </head>
  <style> </style>
  <style>
.page-message {
    top: 0.25rem;
    width: auto;
    max-width: 39rem;
    border-radius: 1rem;
}


/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

.side_button{
	float: right; 
	margin-right: 15px;
}

a.btn.btn-sm.btn-icon.btn-danger {
    background-color: red;
    text-align: center;
}

@media only screen and (max-width: 600px) {
  .side_button{
     float: none;
     margin-right: 0px;
     margin-top: 10px;
  }
}

.form-actions {
    display: flex;
    padding-top: 0.5rem;
    float: right;
}
.pace.pace-active {
    display: none;
}

div#myTable_paginate {
    font-size: 15px;
}

a.paginate_button.current {
    border: 1px solid #346cb0fa;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 5px;
    border-radius: 6px;
    background-color: #346cb0fa;
    color: #fff;
    font-weight: 800;
    margin-left: 5px;
    margin-right: 5px;
    padding-bottom: 5px;
	cursor: pointer;
}

a.paginate_button {
	border: 1px solid #346cb0fa;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 5px;
    border-radius: 6px;
    background-color: #fff;
    color: #000;
    font-weight: 800;
    margin-left: 5px;
    margin-right: 5px;
    padding-bottom: 5px;
	cursor: pointer;
}

.flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange, .flatpickr-day.selected.inRange, .flatpickr-day.startRange.inRange, .flatpickr-day.endRange.inRange, .flatpickr-day.selected:focus, .flatpickr-day.startRange:focus, .flatpickr-day.endRange:focus, .flatpickr-day.selected:hover, .flatpickr-day.startRange:hover, .flatpickr-day.endRange:hover, .flatpickr-day.selected.prevMonthDay, .flatpickr-day.startRange.prevMonthDay, .flatpickr-day.endRange.prevMonthDay, .flatpickr-day.selected.nextMonthDay, .flatpickr-day.startRange.nextMonthDay, .flatpickr-day.endRange.nextMonthDay {
    background: #569ff7;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #fff;
    border-color: #569ff7;
    padding: 0px;
    margin-top: 9px;
}

.flatpickr-day.today, .flatpickr-day.today:focus, .flatpickr-day.today:hover {
    color: #fff;
    background-color: #346cb0;
    border-color: #346cb0;
    margin-top: 9px;
    padding: 0px;
}

.flatpickr-day.inRange, .flatpickr-day.prevMonthDay.inRange, .flatpickr-day.nextMonthDay.inRange, .flatpickr-day.today.inRange, .flatpickr-day.prevMonthDay.today.inRange, .flatpickr-day.nextMonthDay.today.inRange, .flatpickr-day:hover, .flatpickr-day.prevMonthDay:hover, .flatpickr-day.nextMonthDay:hover, .flatpickr-day:focus, .flatpickr-day.prevMonthDay:focus, .flatpickr-day.nextMonthDay:focus {
    cursor: pointer;
    outline: 0;
    background: #e6e6e6;
    border-color: #e6e6e6;
    margin-top: 9px;
    padding: 0px;
}


</style>
  <body>
    <!-- .app -->
    <div class="app">
      <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
      <!-- .app-header -->
      <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <!-- toggle aside menu -->
            <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
            <a href="" style="font-weight: 700;font-size: 20px;">Cybar Wind</a>
          </div><!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
             <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              <div class="dropdown d-none d-md-flex">
                <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="assets2/images/avatars/profile.jpg'" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"></span> <span class="account-description"></span></span></button> <!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                  <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> </h6>
				         <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> 
						 <a class="dropdown-item" href=""><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div><!-- /.dropdown-menu -->
              </div><!-- /.btn-account -->
            </div><!-- /.top-bar-item -->
          </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
      </header><!-- /.app-header -->