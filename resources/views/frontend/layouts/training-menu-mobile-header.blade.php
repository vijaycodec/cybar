<nav class="nav-drill">
    @php
    $categories = \App\Models\CourseCategory::with('services')->where('page_category', 1)->get();
    $trainings = \App\Models\CourseCategory::with('training')->where('page_category', 2)->get();
   
 @endphp
 
 {{-- @foreach ($services as $service)
 @php
 echo "$service->name" ;
 
 @endphp
 @endforeach
 
 @php
 die ;
 @endphp --}}
 
 
       <ul class="nav-items nav-level-1">
          <!-- Services menu start -->
          <li class="nav-item"><a class="mobile-nav-link" href="{{ route('services') }}">Services</a></li>

          <!--  -->
          <!-- Corporate Trainings menu start  -->
          <li class="nav-item nav-expand">
             <a class="mobile-nav-link nav-expand-link" href="#">
                Corporate Trainings
             </a>
             <!-- Menu derop 1 level 1  -->
             <ul class="nav-items nav-expand-content">
                @foreach ($trainings as $category) 
                <li class="nav-item nav-expand">
                   <a class="mobile-nav-link nav-expand-link" href="#">
                      {{ $category->name }}
                   </a>
             
                   @php
                      // Retrieve related training data using Eloquent relationship
                      // $filteredTraining = $training->where('category_id', $category->id);
                      $filteredTraining = $category->training;
                   @endphp
                   
                   @if($filteredTraining->isNotEmpty()) {{-- Ensure trainings exist --}}
                   <ul class="nav-items nav-expand-content">
                      @foreach ($filteredTraining as $training)
                         @if(isset($training->subcategory)) {{-- Ensure subcategory exists --}}
                         <li class="nav-item nav-expand">
                            <a class="mobile-nav-link nav-expand-link" href="#">
                               {{ $training->subcategory->sub_category }}
                            </a>
                            <ul class="nav-items nav-expand-content">
                               {{-- <li class="nav-item">
                                  <a class="mobile-nav-link" href="#">
                                     CEH
                                  </a>
                               </li> --}}
                               {{-- <div class="mobile-img">
                                  <img src="upload/menuimg/CEH.png">
                               </div> --}}
                            </ul>
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