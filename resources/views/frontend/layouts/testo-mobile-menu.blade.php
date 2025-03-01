<div class="mobile-menu2 mobile-menu3">
   <header class="mobile-nav-top ser-menu-top">
      <div class="menu-col"><span class="hamburger material-icons" id="ham"><i class="fa fa-bars"></i></span></div>
      <div class="mobile-logo">
         <a href="index.php"> <img src="{{ asset('assets/images/logo-codec.svg') }}"></a>
      </div>
      <div class="ser-menu">
      <span class="ser-icon-right"><i class="fa fa-bars"></i></span>
      </div>
   </header>
   <!--  -->
 
   @include('frontend.layouts.menu-data')
   <div class="mobile-ser-tab">
      <h4>Testimonials Categories</h4>
      <ul class="mobile-ser-menu">
            @foreach ($categories as $event)
          <li><a href="#{{ Str::slug($event->name) }}">{{ $event->name }}</a></li>
          @endforeach      
      </ul>
      <div class="bottom-btn">
         <a href="javascript:void(0)" class="right-back">Back</a>
      </div>
      <div class="ser-menu-close">
            <span class="ser-icon-close"><i class="fa fa-times"></i></span>
      </div>
   </div>
   <!--  -->
</div>
<!--  -->
<!--  -->



