<nav class="nav-drill">
   @php
   $categories = \App\Models\CourseCategory::with('services')->where('page_category', 1)->get();
   $trainings = \App\Models\CourseCategory::with('training')->where('page_category', 2)->get();
  
@endphp

      <ul class="nav-items nav-level-1">
         <!-- Services menu start -->
         <li class="nav-item nav-expand">
            <a class="mobile-nav-link nav-expand-link" href="#">
               Services
            </a>
            <!-- Menu derop 1 level 1  --> 
            <ul class="nav-items nav-expand-content">
               @foreach ($categories as $category)  {{-- Ensure we're looping over categories --}}
               <li class="nav-item nav-expand">
                  <a class="mobile-nav-link nav-expand-link" href="#">
                     {{ $category->name }}
                  </a>
            
                  <!-- Get services under this category -->
                  @php
                     // $filteredServices = $services->where('category_id', $category->id);
                     $filteredServices = $category->services;
                  @endphp
            
                  @if($filteredServices->isNotEmpty())  {{-- Check if category has services --}}
                  <ul class="nav-items nav-expand-content">
                     @foreach ($filteredServices as $service)
                        @if(isset($service->subcategory)) {{-- Ensure subcategory exists --}}
                        <li class="nav-item nav-expand">
                           <a class="mobile-nav-link  nav-expand-link" href="#">
                              {{ $service->subcategory->sub_category }}
                           </a>
                           <!-- Subcategory Dropdown -->
                           <ul class="nav-items nav-expand-content">
                              {{-- <li class="nav-item">
                                 <a class="mobile-nav-link" href="#">
                                    Mobile Application VAPT Testing
                                 </a>
                              </li> --}}
                              <li class="mobile-img">
                                 {{-- <img src="{{ asset('uploads/backend/services/' . $service->images) }}"> --}}
                                 <img src="{{ asset('storage/uploads/backend/services/' . $service->images) }}">

                              </li>
                           </ul>
                           <!-- Subcategory Dropdown End -->
                        </li>
                        @endif
                     @endforeach
                  </ul>
                  @endif
               </li>
               @endforeach
            </ul>
            

            <!-- Menu derop end -->
         </li>
         <!--  -->
         <!-- Corporate Trainings menu start  -->
         <li class="nav-item"><a class="mobile-nav-link" href="{{ route('training') }}">Training</a></li>

         <!--  -->
         <li class="nav-item">
            <a class="mobile-nav-link" href="{{ route('cn-insight') }}">
               CN Insight
            </a>
         </li>
         <li class="nav-item">
            <a class="mobile-nav-link" href="#">
               About Us
            </a>
         </li>
         <li class="nav-item"><a class="mobile-nav-link" href="{{ route('resources') }}">Resources</a></li>
         <li class="nav-item"><a class="mobile-nav-link" href="{{ route('blogs') }}">Blogs</a></li>
         <li class="nav-item"><a class="mobile-nav-link" href="{{ route('events') }}">Event</a></li>
         <li class="nav-item"><a class="mobile-nav-link" href="{{ route('testimonials') }}">Testimonial</a></li>
         <li class="nav-item"><a class="mobile-nav-link" href="{{ route('careers') }}">Careers</a></li>
         <li class="nav-item"><a class="mobile-nav-link" href="#">Contact Us</a></li>
      </ul>
      <div class="bottom-btn">
         <a href="#" class="left-back">Back</a>
      </div>
   </nav>