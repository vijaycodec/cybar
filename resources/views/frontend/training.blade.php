@extends('frontend.layouts.app')

@section('title', $seoData['seo_title'])
@section('meta_description', $seoData['seo_description'])
@section('meta_keywords', $seoData['seo_keywords'])
<style>
    .group-heading {
        background-color: #b6c9db;
        padding: 6px 10px;
        margin-bottom: 4px;
        border-radius: 3px;
    }

    .group-heading:hover {
        background-color: #ddd;
    }

    ul {
        /* Default list style (disc) */
        list-style-type: disc;
        /* or circle, square, etc. */
        padding-left: 20px;
        /* to keep indentation */
    }

    .group-heading {
        list-style-type: none;
        /* Remove bullet only for group heading */
        cursor: pointer;
        font-weight: bold;
        /* You can add padding/margin to align nicely */
        margin-top: 10px;
        margin-bottom: 5px;
    }

    /* Categories inside group can have bullets (default) */
    .group-categories {
        list-style-type: disc;
        /* keep bullets */
        padding-left: 20px;
    }
</style>
@section('content')

    <body class="" id="training-page">
        <!-- Header start -->
        @include('frontend.layouts.training-header', ['categories' => $categories_header])
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
                                        @php
                                            $firstCategorySet = false;
                                        @endphp

                                        @foreach ($categories as $groupName => $groupedCategories)
                                            @php
                                                $heading = $groupName ?: null; // If null or empty string, consider ungrouped
                                            @endphp

                                            @if ($heading)
                                                <!-- Group Category Heading -->
                                                <li class="group-heading"
                                                    style="font-weight: bold; cursor: pointer; position: relative; padding-right: 25px;"
                                                    onclick="toggleGroup('{{ Str::slug($heading) }}')">
                                                    {{ $heading }}
                                                    <span class="toggle-icon" id="icon-{{ Str::slug($heading) }}"
                                                        style="position: absolute; right: 5px; top: 50%; transform: translateY(-50%);">
                                                        +
                                                    </span>
                                                </li>

                                                <ul id="group-{{ Str::slug($heading) }}" class="group-categories"
                                                    style="display: none;">
                                                    @foreach ($groupedCategories as $category)
                                                        <li id="li_border">
                                                            <a class="tablinks1 {{ !$firstCategorySet ? 'active' : '' }}"
                                                                href="#{{ Str::slug($category->name) }}"
                                                                onclick="openCity(event, '{{ Str::slug($category->name) }}')">
                                                                {{ $category->name }}
                                                            </a>
                                                        </li>
                                                        @php $firstCategorySet = true; @endphp
                                                    @endforeach
                                                </ul>
                                            @else
                                                <!-- Directly show ungrouped categories -->
                                                @foreach ($groupedCategories as $category)
                                                    <li id="li_border">
                                                        <a class="tablinks1 {{ !$firstCategorySet ? 'active' : '' }}"
                                                            href="#{{ Str::slug($category->name) }}"
                                                            onclick="openCity(event, '{{ Str::slug($category->name) }}')">
                                                            {{ $category->name }}
                                                        </a>
                                                    </li>
                                                    @php $firstCategorySet = true; @endphp
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </ul>


                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-sm-6 col-md-9">
                        <div id="code-content">
                            @foreach ($categories as $groupName => $groupedCategories)
                                @foreach ($groupedCategories as $category)
                                    <div id="{{ Str::slug($category->name) }}" class="tabcontent1"
                                        style="display:{{ $loop->parent->first && $loop->first ? 'block' : 'none' }};">
                                        <div class="mrgn-brdr">
                                            <div class="row box-wrap">

                                                <h4 class="cat-title">{{ $category->name }}</h4>

                                                @foreach ($trainings->where('category_id', $category->id) as $training)
                                                    <div class="col-md-4 pdg-rght-0 mrgn-btm-iconbx">
                                                        <div class="iconbox">
                                                            <div class="box-header">
                                                                <div class="box-icon pst-listing"></div>
                                                                <h4 class="box-title">
                                                                    {{ $training->subcategory->sub_category ?? '-' }}</h4>
                                                            </div>

                                                            <div class="box-content" id="clr-learn">
                                                                <div class="box-content-p">
                                                                    <p>{{ $training->description }}</p>
                                                                </div>
                                                                <span class="box-readmore">
                                                                    <a
                                                                        href="{{ route('l3-template', ['sb' => $training->subcategory->id ?? 0, 'pg' => $page_id, 'ct' => $category->id]) }}">
                                                                        Learn more <i class="fa fa-chevron-right"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
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
            @foreach ($categories_header as $index => $category)
                <div class="m-container" id="m-{{ Str::slug($category->name) }}">
                    <div class="m-title m-bg{{ $index + 1 }}">
                        <h3>{{ $category->name }}</h3> <!-- Parent Category Name -->
                    </div>

                    @php
                        $categoryTrainings = $trainings->where('category_id', $category->id)->values(); // Get trainings for this category
                    @endphp

                    @foreach ($categoryTrainings->chunk(5) as $chunkIndex => $trainingChunk)
                        <div class="ser-slider1">
                            <div id="navigation-count{{ $index + 1 }}-{{ $chunkIndex + 1 }}"
                                class="count-nav-box couter-space"></div>
                            <div id="ser-demo{{ $index + 1 }}-{{ $chunkIndex + 1 }}"
                                class="owl-carousel owl-theme indu-moblie">
                                @foreach ($trainingChunk as $singleTraining)
                                    <div class="item">
                                        <div class="mrgn-btm-iconbx">
                                            <a
                                                href="{{ route('l3-template', ['sb' => $singleTraining->subcategory->id, 'pg' => $page_id, 'ct' => $category->id]) }}">
                                                <div class="iconbox">
                                                    <div class="box-header">
                                                        <div class="box-icon pst-listing">
                                                            <i class="fa fa-cube"></i>
                                                            <h4 class="box-title">
                                                                {{ $singleTraining->subcategory->sub_category }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="box-content" id="clr-learn">
                                                        <div class="box-content-p">
                                                            <p>{{ $singleTraining->description }}</p>
                                                        </div>
                                                        <span class="box-readmore">Learn More</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </section>
        <!-- mobile end -->
        <a href="#training-page" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>

        {{-- @include('frontend.layouts.footer') --}}

    </body>

@endsection

@push('scripts')
    <!-- Jquery code -->
    <script src="assets/js/slider.js"></script>
    <script type="text/javascript" src="assets/js/common.js?v-1"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script>
    @include('frontend.layouts.right-menu-js')
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


    {{-- <script type="text/javascript">
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
    </script> --}}

    <script>
        $(document).ready(function() {
            function initializeCarousel(carouselId, navigationCountId) {
                $("#" + carouselId).owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                    navText: [
                        '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
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
                if (!event.namespace) return;
                var carousel = event.relatedTarget;
                $("#" + navigationCountId).html(
                    (carousel.relative(carousel.current()) + 1) + "/" + carousel.items().length
                );
            }

            // 🚀 *Automatically Initialize All Carousels*
            $("[id^=ser-demo]").each(function() {
                let sliderId = $(this).attr("id");
                let countId = sliderId.replace("ser-demo",
                    "navigation-count"); // Generate corresponding count ID
                initializeCarousel(sliderId, countId);
            });
        });
    </script>


    {{-- <script>
    // Ensure the active tab and section are displayed based on URL hash
    document.addEventListener("DOMContentLoaded", function () {
        let pathSegments = window.location.pathname.split('/');
        let category = pathSegments[2]; // Extract category from URL (if available)

        if (category) {
            let targetTab = document.querySelector(`a[data-category="${category}"]`);
            if (targetTab) {
                targetTab.classList.add("active"); // Highlight active tab
                openCity(new Event("click"), category); // Open the category section
            }
        }
    });

    // This function will update the URL and call openCity to display the section
    function updateURLAndOpenCity(evt, category) {
        evt.preventDefault(); // Prevent default anchor action

        // Update the URL without reloading the page
        history.pushState(null, '', `/services/${category}`);

        // Call openCity to display the relevant content
        openCity(evt, category);

        // Scroll smoothly to the targeted section
        let targetSection = document.getElementById(category);
        if (targetSection) {
            targetSection.scrollIntoView({ behavior: 'smooth' });
        }

        // Remove the active class from all other tabs
        document.querySelectorAll('.tablinks1').forEach(el => el.classList.remove('active'));

        // Add the active class to the clicked tab
        evt.currentTarget.classList.add('active');
    }
</script> --}}


    <script>
        function toggleGroup(groupSlug) {
            const groupList = document.getElementById('group-' + groupSlug);
            if (!groupList) return;

            if (groupList.style.display === 'none' || groupList.style.display === '') {
                groupList.style.display = 'block'; // Show categories
            } else {
                groupList.style.display = 'none'; // Hide categories
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const firstGroup = document.querySelector('.group-categories');
            if (firstGroup) {
                firstGroup.style.display = 'block';
            }
        });
    </script>
@endpush
