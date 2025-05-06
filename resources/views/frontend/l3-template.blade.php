@extends('frontend.layouts.app')

@section('title', $seoData['seo_title'])
@section('meta_description', $seoData['seo_description'])
@section('meta_keywords', $seoData['seo_keywords'])

{{--
<link rel="stylesheet" type="text/css" href="/assets/css/sample7.css"> --}}
<style>
    .cn-hover-box:hover .cn-content .height {
        height: 0px;
        display: block;
    }
</style>

{{-- @section('content') --}}
@include ('frontend.layouts.header-css')

<body class="sample-body" id="main-content-body">
    <!-- Header start -->

    @include ('frontend.layouts.l3-header', ['l3Categories' => $l3Categories])

    <section class="cn-bg" id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cn-header">
                        <h1>Don't just learn it, Master it!</h1>
                        <p>The most effective learning system. World's highest course completion rate.</p>
                        <h2>Top Categories</h2>
                        <ul>
                            <li>Blockchain </li>
                            <li>Big Data </li>
                            <li>Cloud Computing</li>
                            <li>Devops </li>
                            <li>Artificial Intelligence</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- breadcromb Start -->
    <section class="breadcromb desktop-view">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcromb-ul">
                        <li>
                            <a href="{{ route('home') }}"
                                style="background-color: #14426e; padding: 5px 5px; display: flex; align-items: center; justify-content: center;">
                                <img src="{{ asset('assets/images/Home-Codec-Networks.png') }}"
                                    alt="Home Codec Networks Logo" title="Home Codec Networks">
                            </a>
                        </li>
                        <li>
                            <a href="{{ $pageName == 'Services' ? route('services') : route('training') }}">
                                {{ $pageName == 'Services' ? 'Services' : 'Trainings' }}
                            </a>
                        </li>
                        <li><a href="javascript:void(0)">{{ $categoryName }}</a></li>
                        <li><a href="javascript:void(0)">{{ $subcategoryname }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcromb end -->

    <!-- tab menu start -->
    <section class="services-menu menu-fixed-cn"
        style="background: url({{ asset('assets/images/image-bg-top.jpg') }}) repeat fixed;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul id="sticky-control" class="anchor-nav">
                        @foreach ($l3Categories as $category)
                            <li><a href="#{{ strtolower(preg_replace('/[^a-zA-Z0-9\s-]/', '', str_replace([' ', '&', ','], '-', $category->l3_category))) }}"
                                    class="sticky_link {{ $loop->first ? 'sapme_active' : '' }}">{{ $category->l3_category }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- tab menu end -->

    @foreach ($l3Categories as $category)
        @php
            $slug = strtolower(
                preg_replace('/[^a-zA-Z0-9\s-]/', '', str_replace([' ', '&', ','], '-', $category->l3_category)),
            );
            $fieldKey = $category->field_key;
            $contents = $category->contentInfos;
        @endphp
        <!-- Overview start 1-->
        @if ($fieldKey == 'overview_description' && $contents->contains(fn($info) => $info->{$fieldKey}))
            <section class="light-grey sample7-line anchor-link space7_1" id="{{ $slug }}">
                <!--  -->
                <div class="container desktop-view">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="third-content" id="2">
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        <!-- Overview Section -->
                                        @if ($contentInfo->overview_title)
                                            <h3> {{ $contentInfo->overview_title }} </h3>
                                        @endif
                                        @if ($contentInfo->overview_description)
                                            {!! $contentInfo->overview_description !!} <!-- First overview Description -->
                                        @endif
                                        @if ($contentInfo->overview_description1)
                                            {!! $contentInfo->overview_description1 !!} <!-- Second overview Description -->
                                        @endif
                                        @if ($contentInfo->overview_description2)
                                            {!! $contentInfo->overview_description2 !!} <!-- Third overview Description -->
                                        @endif
                                        @if ($contentInfo->overview_description3)
                                            {!! $contentInfo->overview_description3 !!} <!-- Fourth overview Description -->
                                        @endif
                                        @if ($contentInfo->overview_description4)
                                            {!! $contentInfo->overview_description4 !!}<!-- Fifth overview Description -->
                                        @endif
                                    @endforeach
                                @endforeach
                                <div class="container">
                                    <div class="row overview-content">
                                        <!--  -->
                                        <div class="col-md-12">
                                            @php
                                                $firstTitle = null;

                                                foreach ($l3Categories as $category) {
                                                    foreach ($category->contentInfos as $contentInfo) {
                                                        foreach ($contentInfo->overviewSubDescriptions as $subDescription) {
                                                            if (!empty($subDescription->overview_subdescription_title)) {
                                                                $firstTitle = $subDescription->overview_subdescription_title;
                                                                break 3; // break all loops
                                                            }
                                                        }
                                                    }
                                                }
                                            @endphp
                                            @if ($firstTitle)
                                                <div class="third-content smple-box1">
                                                    <h4>{!! $firstTitle !!}</h4>
                                                </div>
                                            @endif
                                            <!--  -->
                                            <div class="info-graphic">
                                                <div class="row info-graphic-row">
                                                    <div class="col-md-12">
                                                        <!-- desktop start  -->
                                                        <div class="desktop-view">
                                                            @foreach ($l3Categories as $category)
                                                                @foreach ($category->contentInfos as $contentInfo)
                                                                    <!-- Checking and Displaying Sub Descriptions -->
                                                                    @if ($contentInfo->overviewSubDescriptions->isNotEmpty())
                                                                        @foreach ($contentInfo->overviewSubDescriptions as $index => $subDescription)
                                                                            <div class="wwyl-row">

                                                                                <!-- Dynamic Class for wwyl-box -->
                                                                                @php
                                                                                    $boxClasses = [
                                                                                        'wwyl-box', // For 0th index
                                                                                        'wwyl-box orange ', // For 1st index
                                                                                        'wwyl-box purple', // For 2nd index
                                                                                        'wwyl-box color4', // For 3rd index
                                                                                        'wwyl-box green', // For 4th index
                                                                                    ];

                                                                                    // Use the array index, if index > 4, default to 'wwyl-box'
                                                                                    $boxClass =
                                                                                        $boxClasses[$index] ??
                                                                                        'wwyl-box';

                                                                                    // Circle Class (Same as before)
                                                                                    $circleClasses = [
                                                                                        'wwyl-box-circle', // For 0th index
                                                                                        'wwyl-box-circle orange-circle', // For 1st index
                                                                                        'wwyl-box-circle purple-circle', // For 2nd index
                                                                                        'wwyl-box-circle color4-circle', // For 3rd index
                                                                                        'wwyl-box-circle green-circle', // For 4th index
                                                                                    ];

                                                                                    // Circle class for the current index
                                                                                    $circleClass =
                                                                                        $circleClasses[$index] ??
                                                                                        'wwyl-box-circle';
                                                                                @endphp

                                                                                <div class="{{ $boxClass }}">

                                                                                    {!! $subDescription->sub_description !!}


                                                                                    <!-- Dynamic Circle Class -->
                                                                                    <div class="{{ $circleClass }}">
                                                                                        <span>{{ $index + 1 }}</span>
                                                                                        <!-- Simple Iteration Number -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="container mobile-view">
                    <!--  -->
                    <div class="third-content">
                        {{-- <h3>Certified Ethical Hacker </h3> --}}
                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                <!-- Overview Section -->
                                @if ($contentInfo->overview_title)
                                    <h3> {{ $contentInfo->overview_title }} </h3>
                                @endif
                            @endforeach
                        @endforeach

                        <!-- slider start -->
                        {{-- <div class="mobile-view indu-moblie indu-moblie1 count-navigation">
                            <div id="owl-demo65" class="owl-carousel owl-theme">
                                @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                @if (!empty($contentInfo->overview_description))
                                @php
                                // Split the description into chunks of 50 words
                                $words = explode(' ', strip_tags($contentInfo->overview_description));
                                $chunks = array_chunk($words, 70); // Split into arrays of 50 words
                                @endphp

                                @foreach ($chunks as $chunk)
                                <div class="item">
                                    <div class="mobile-cont slider">
                                        <p>{!! implode(' ', $chunk) !!}</p>
                                        <!-- Convert chunk back to a string -->
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                @endforeach
                                @endforeach
                            </div>
                            <div id="navigation-count" class="count-nav-box"></div>
                        </div> --}}

                        <div class="mobile-view indu-moblie indu-moblie1 count-navigation">
                            <div id="owl-demo65" class="owl-carousel owl-theme">
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @foreach (range(0, 4) as $index)
                                            @php
                                                $descriptionField = 'overview_description' . ($index > 0 ? $index : '');
                                            @endphp
                                            @if (!empty($contentInfo->$descriptionField))
                                                <div class="item">
                                                    <div class="mobile-cont slider">
                                                        <p>{!! $contentInfo->$descriptionField !!}</p>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </div>
                            <div id="navigation-count" class="count-nav-box"></div>
                        </div>


                        <!-- slider end -->
                        @php
                            $firstTitle = null;

                            foreach ($l3Categories as $category) {
                                foreach ($category->contentInfos as $contentInfo) {
                                    foreach ($contentInfo->overviewSubDescriptions as $subDescription) {
                                        if (!empty($subDescription->overview_subdescription_title)) {
                                            $firstTitle = $subDescription->overview_subdescription_title;
                                            break 3; // break all loops
                                        }
                                    }
                                }
                            }
                        @endphp
                        @if ($firstTitle)
                            <h3>{!! $firstTitle !!}</h3>
                        @endif


                        <!-- mobile start -->
                        <div class="mobile-view indu-moblie count-navigation">
                            <div id="owl-demo64" class="owl-carousel owl-theme">
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @if ($contentInfo->overviewSubDescriptions->isNotEmpty())
                                            @foreach ($contentInfo->overviewSubDescriptions as $index => $subDescription)
                                                <div class="wwyl-box">
                                                    {!! $subDescription->sub_description !!}

                                                    <!-- Dynamic Circle Class -->
                                                    @php
                                                        $circleClasses = [
                                                            'wwyl-box-circle', // For 0th index
                                                            'wwyl-box-circle orange-circle', // For 1st index
                                                            'wwyl-box-circle purple-circle', // For 2nd index
                                                            'wwyl-box-circle color4-circle', // For 3rd index
                                                            'wwyl-box-circle green-circle', // For 4th index
                                                        ];

                                                        // Assign the class based on the index
                                                        $circleClass = $circleClasses[$index] ?? 'wwyl-box-circle'; // Default class if index exceeds
                                                    @endphp

                                                    <!-- Dynamic Circle -->
                                                    <div class="{{ $circleClass }}">
                                                        <span>{{ $index + 1}}</span>
                                                        <!-- Dynamic Number -->
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>

                            <div id="navigation-count1" class="count-nav-box"></div>
                        </div>
                        <!-- mobile end -->
                    </div>
                    <!--  -->
                </div>
                <!--  -->
            </section>
            <!-- Overview end  1 -->

            <!-- Significance start  2-->
        @elseif ($fieldKey == 'significanceCategory' && $contents->contains(fn($info) => $info->{$fieldKey}))
            <section class="anchor-link sample7-line space7" id="{{ $slug }}">
                <!-- title  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 cn-title">
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->significance_title)
                                        <h2>{!! $contentInfo->significance_title->title !!}</h2>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--title end-->
                <div class="container desktop-view significance">
                    <div class="row">
                        <!-- tab1 menu start  -->
                        @foreach ($l3Categories as $category)
                            <ul class="nav nav-tabs sample-tab2-menu1" id="tabmenu1">
                                {{-- <li class="active"><a data-toggle="tab" href="#ic">BANKING & FINANCE</a></li> --}}
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->significanceCategory)
                                        <li class="tab-pane fade {{ $loop->first ? 'active ' : '' }}"><a data-toggle="tab" class="codec-tab"
                                                href="#{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->significanceCategory->name)) }}">{{ $contentInfo->significanceCategory->name }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endforeach
                        <!-- tab1 menu end  -->
                        <!-- tab content box start -->
                        <div class="tab-content sample7-tb-content" style="">
                            <!-- tab1 conrent start -->
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->significanceCategory)
                                        <div id="{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->significanceCategory->name)) }}"
                                            class="tab-pane fade in {{ $loop->first ? 'active' : '' }}">
                                            <div class="container">
                                                <div class="row rowp">
                                                    @if ($contentInfo->images)
                                                        <div class="col-md-3">
                                                            <div class="template12-img">
                                                                <img src="{{ asset('storage/uploads/frontend/l3_template/significance/' . $contentInfo->images) }}"
                                                                    alt="Image">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="red-title">
                                                                @if ($contentInfo->significanceCategory)
                                                                    {!! $contentInfo->significance_short_description !!}
                                                                @endif
                                                                <a href="javascript:void(0);" class="btn-show">Read More
                                                                    ...</a>

                                                                <div class="content-hide" style="display: none;">
                                                                    {!! $contentInfo->significance_description !!}
                                                                    <a href="javascript:void(0);" class="btn-hide btn-hide_sig"
                                                                        style="display: none;">Hide Content ...</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    @else
                                                        <div class="col-md-12">
                                                            <div class="red-title">
                                                                @if ($contentInfo->significanceCategory)
                                                                    {!! $contentInfo->significance_short_description !!}
                                                                @endif
                                                                <a href="javascript:void(0);" class="btn-show">Read
                                                                    More
                                                                    ...</a>

                                                                <div class="content-hide" style="display: none;">
                                                                    {!! $contentInfo->significance_description !!}
                                                                    <a href="javascript:void(0);" class="btn-hide btn-hide_sig"
                                                                        style="display: none;">Hide Content ...</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach

                            <!-- tab1 content end  -->

                        </div>
                        <!-- tab content box end -->
                    </div>
                </div>

                <!-- mobile content start  -->
                <div class="container mobile-view significance-space" id="sf_mob">
                    <!--  -->
                    <div class="acc">

                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                @if ($contentInfo->significanceCategory)
                                    <div class="acc__card">
                                        <!-- Accordion Title -->
                                        <a href="#significance-{{ $loop->iteration }}"
                                            class="acc__title {{ $loop->first ? 'active' : ' ' }}"
                                            data-target="significance-{{ $loop->iteration }}">
                                            {{ $contentInfo->significanceCategory->name }}
                                        </a>

                                        <!-- Accordion Panel -->
                                        <div class="acc__panel" style="{{ $loop->first ? 'display:block;' : '' }}"
                                            id="significance-{{ $loop->iteration }}">
                                            <div class="box-height vert-box">
                                                <div class="red-title">
                                                    @if ($contentInfo->images)
                                                        <div class="template12-img">
                                                            <img
                                                                src="{{ asset('storage/uploads/frontend/l3_template/significance/' . $contentInfo->images) }}">
                                                        </div>
                                                        {{-- <div class="red-title"> --}}
                                                            @if ($contentInfo->significanceCategory)
                                                                {!! $contentInfo->significance_short_description !!}
                                                                {!! $contentInfo->significance_description !!}
                                                            @endif
                                                            {{--
                                                        </div> --}}
                                                    @else
                                                        {{-- <div class="red-title"> --}}
                                                            @if ($contentInfo->significanceCategory)
                                                                {!! $contentInfo->significance_short_description !!}
                                                                {!! $contentInfo->significance_description !!}
                                                            @endif
                                                            {{--
                                                        </div> --}}
                                                    @endif
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="close-acrodin">Close</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach


                    </div>
                    <!-- mobile content end  -->
                </div>
            </section>
            <!-- Significance end 2--->

            <!-- program info 3-->
        @elseif ($fieldKey == 'programCategory' && $contents->contains(fn($info) => $info->{$fieldKey}))
            <section class="anchor-link sample7-line space7 ceh-pro" id="{{ $slug }}">
                <!-- title  -->
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 cn-title ceh-title">

                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->program_title)
                                        <h2>{!! $contentInfo->program_title !!}</h2>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--title end-->
                <!-- body start -->
                <div class="container desktop-view ceh-program">
                    <div class="row">
                        <!-- tab1 menu start  -->
                        @php
                            $displayedFaqCategories = []; // Array to store displayed Program category IDs
                        @endphp
                        <ul class="nav nav-tabs program-tab program-tab1" id="program_tab1">
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->programCategory && !in_array($contentInfo->programCategory->id, $displayedFaqCategories))
                                        @php
                                            $displayedFaqCategories[] = $contentInfo->programCategory->id; // Mark this ID as displayed
                                        @endphp
                                        <li class="{{ $loop->first ? 'active' : '' }}">
                                            <a data-toggle="tab"
                                                href="#{{ strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace([' ', '&', ','], '-', $contentInfo->programCategory->name))) }}">
                                                {{ $contentInfo->programCategory->name }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>

                        <div class="tab-content program-content">
                            @php
                                $displayedProgramCategories = []; // Track displayed program categories
                            @endphp

                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->programCategory && !in_array($contentInfo->programCategory->id, $displayedProgramCategories))
                                        @php
                                            $displayedProgramCategories[] = $contentInfo->programCategory->id;
                                            $programCategorySlug = strtolower(
                                                preg_replace(
                                                    '/[^a-zA-Z0-9]/',
                                                    '',
                                                    str_replace(
                                                        [' ', '&', ','],
                                                        '-',
                                                        $contentInfo->programCategory->name,
                                                    ),
                                                ),
                                            );
                                        @endphp

                                        @if ($contentInfo->l3_layout_program == 'courseoutline')
                                            <div id="{{ $programCategorySlug }}" class="tab-pane fade in {{ $loop->first ? 'active' : '' }}">
                                                <div class="container module-tab">
                                                    <div class="row">
                                                        <div class="pro-title">
                                                            @if ($contentInfo->program_sub_title)
                                                                <h2>{!! $contentInfo->program_sub_title !!}</h2>
                                                            @endif
                                                        </div>

                                                        <div class="pro-ul-box">
                                                            <div class="acc__section">

                                                                @php
                                                                    $half = ceil(
                                                                        count(
                                                                            $contentInfo->programCategory
                                                                                ->programSubCategories,
                                                                        ) / 2,
                                                                    ); // Divide into two halves
                                                                @endphp

                                                                <div class="row">
                                                                    <!-- First col-md-6 -->
                                                                    <div class="col-md-6">
                                                                        <div class="pro-mod1">
                                                                            <div class="acc">
                                                                                @foreach ($contentInfo->programCategory->programSubCategories as $index => $subCategory)
                                                                                    @if ($index < $half)
                                                                                        @php
                                                                                            $uniqueId =
                                                                                                strtolower(
                                                                                                    preg_replace(
                                                                                                        '/[^a-zA-Z0-9]/',
                                                                                                        '',
                                                                                                        str_replace(
                                                                                                            [
                                                                                                                ' ',
                                                                                                                '&',
                                                                                                                ',',
                                                                                                            ],
                                                                                                            '-',
                                                                                                            $subCategory->name,
                                                                                                        ),
                                                                                                    ),
                                                                                                ) .
                                                                                                '-' .
                                                                                                $index;
                                                                                        @endphp
                                                                                        <div class="acc__card">
                                                                                            <!-- Subcategory Name -->
                                                                                            <a href="#{{ $uniqueId }}" class="acc__title">
                                                                                                {{ $subCategory->name }}
                                                                                            </a>

                                                                                            <!-- Subcategory Description -->
                                                                                            <div class="acc__panel" style="display: none;"
                                                                                                id="{{ $uniqueId }}">
                                                                                                {!! $subCategory->description !!}
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Second col-md-6 -->
                                                                    <div class="col-md-6">
                                                                        <div class="pro-mod1">
                                                                            <div class="acc">
                                                                                @foreach ($contentInfo->programCategory->programSubCategories as $index => $subCategory)
                                                                                    @if ($index >= $half)
                                                                                        @php
                                                                                            $uniqueId =
                                                                                                strtolower(
                                                                                                    preg_replace(
                                                                                                        '/[^a-zA-Z0-9]/',
                                                                                                        '',
                                                                                                        str_replace(
                                                                                                            [
                                                                                                                ' ',
                                                                                                                '&',
                                                                                                                ',',
                                                                                                            ],
                                                                                                            '-',
                                                                                                            $subCategory->name,
                                                                                                        ),
                                                                                                    ),
                                                                                                ) .
                                                                                                '-' .
                                                                                                $index;
                                                                                        @endphp
                                                                                        <div class="acc__card">
                                                                                            <!-- Subcategory Name -->
                                                                                            <a href="#{{ $uniqueId }}" class="acc__title">
                                                                                                {{ $subCategory->name }}
                                                                                            </a>

                                                                                            <!-- Subcategory Description -->
                                                                                            <div class="acc__panel" style="display: none;"
                                                                                                id="{{ $uniqueId }}">
                                                                                                {!! $subCategory->description !!}
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--  Second Program Category (Vertical Tabs Based) -->
                                        @elseif ($contentInfo->l3_layout_program == 'whatsnewinceh')
                                            <div id="{{ $programCategorySlug }}" class="tab-pane fade">
                                                <div class="container">
                                                    <div class="row">
                                                        <!-- Left Side Navigation -->
                                                        <div class="col-md-4">
                                                            <div class="vertical-ceh">
                                                                <ul class="nav nav-tabs vertical-ceh-nav">
                                                                    @foreach ($contentInfo->programCategory->programSubCategories as $index => $subCategory)
                                                                        <li class="{{ $loop->first ? 'active' : '' }} bg{{ $index + 1 }}">
                                                                            <a data-toggle="tab"
                                                                                href="#{{ strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace([' ', '&', ','], '-', $subCategory->name))) }}">
                                                                                {{ $subCategory->name }} <i class="fa fa-arrow-right"></i>
                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <!-- Right Side Content -->
                                                        <div class="col-md-8 tab-content program-content">
                                                            @foreach ($contentInfo->programCategory->programSubCategories as $subCategory)
                                                                <div id="{{ strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace([' ', '&', ','], '-', $subCategory->name))) }}"
                                                                    class="tab-pane fade {{ $loop->first ? 'in active' : '' }}">
                                                                    <div class="vert-box">

                                                                        <p>{!! $subCategory->description !!}</p>

                                                                        @if ($subCategory->image)
                                                                            <div class="template12-img">
                                                                                <img
                                                                                    src="{{ asset('storage/uploads/frontend/l3_template/program/' . $subCategory->image) }}">
                                                                            </div>
                                                                        @endif


                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif ($contentInfo->l3_layout_program == 'whoisitfor')
                                            <div id="{{ $programCategorySlug }}" class="tab-pane fade">
                                                <!--  -->
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="pro-title">

                                                            @if ($contentInfo->program_sub_title)
                                                                {!! $contentInfo->program_sub_title !!}
                                                            @endif

                                                        </div>
                                                        <!--  -->
                                                        <div class="pro-ul-box">

                                                            {!! $contentInfo->program_description !!}

                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                </div>
                                                <!--  -->
                                            </div>
                                        @elseif ($contentInfo->l3_layout_program == 'brochure')
                                            <div id="{{ $programCategorySlug }}" class="tab-pane brochure-row fade">
                                                <!--  -->
                                                <div class="container">
                                                    <div class="pro-ul-box">
                                                        <div class="row">
                                                            <!--  -->
                                                            <div class="col-md-8">
                                                                <!--  -->
                                                                <div class="brochure-box">
                                                                    {!! $contentInfo->program_description !!}

                                                                    @if (!empty($contentInfo->brochure_pdf) && $contentInfo->brochure_pdf !== null)
                                                                        <a href="{{ asset('storage/uploads/frontend/l3_template/program/' . $contentInfo->brochure_pdf) }}"
                                                                            download>Download Brochure</a>
                                                                    @else
                                                                        <a href="javascript:void(0);"
                                                                            onclick="alert('Brochure not available')">Download
                                                                            Brochure</a>
                                                                    @endif
                                                                </div>
                                                                <!--  -->
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="brochure-img">
                                                                    @if ($contentInfo->images)
                                                                        <img
                                                                            src="{{ asset('storage/uploads/frontend/l3_template/program/' . $contentInfo->images) }}">
                                                                    @else
                                                                        <img
                                                                            src="https://www.eccouncil.org/wp-content/uploads/2023/01/CEH-cover-broucher-scaled.jpg.webp">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <!--  -->
                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                </div>
                                                <!--  -->
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            @endforeach
                        </div>

                        <!-- tab content box end -->
                    </div>
                </div>
                <!-- body end -->
                <!-- mobile end -->
                <div class="container mobile-view" id="program_mob">
                    <!--  -->
                    <div class="acc">
                        @php
                            // Initialize tracking variable for displayed program categories
                            $displayedProgramCategories = [];
                        @endphp
                        @php
                            // Define an array of colors for alternating styles
                            $colors = [
                                'background: #3f5d8c !important; color: #fff !important;',
                                'background: #7a869a !important; color: #fff !important;',
                                'background: #4f9d92 !important; color: #fff !important;',
                                'background: #d98c7a !important; color: #fff !important;',
                            ];

                            $colorIndex = 0; // Start index for colors
                        @endphp

                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                @if ($contentInfo->programCategory && !in_array($contentInfo->programCategory->id, $displayedProgramCategories))
                                    @php
                                        // Mark this program category as displayed so it won't repeat
                                        $displayedProgramCategories[] = $contentInfo->programCategory->id;
                                        // Generate a slug from the program category name
                                        $programCategorySlug = strtolower(
                                            preg_replace(
                                                '/[^a-zA-Z0-9]/',
                                                '',
                                                str_replace([' ', '&', ','], '-', $contentInfo->programCategory->name),
                                            ),
                                        );
                                        // Get the color based on the iteration count
                                        $currentColor = $colors[$colorIndex % count($colors)];
                                        $colorIndex++; // Increment the color index for the next iteration
                                    @endphp

                                    <!-- Main Accordion Card for the Program Category -->
                                    <div class="acc__card">
                                        <a class="acc__title outer-pro-mbile" style="{{ $currentColor }}"
                                            href="#{{ $programCategorySlug }}mob">
                                            {{ $contentInfo->programCategory->name }}
                                        </a>

                                        {{-- Course Outline Category --}}
                                        @if ($contentInfo->l3_layout_program == 'courseoutline')
                                            <div id="{{ $programCategorySlug }}mob" style="{{ $loop->first ? 'display:block;' : '' }}"
                                                class="acc__panel">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="pro-title">
                                                            @if ($contentInfo->program_sub_title)
                                                                <h1>{!! $contentInfo->program_sub_title !!}</h1>
                                                            @endif

                                                        </div>
                                                        <div class="outline-heigh1">
                                                            <div class="row">
                                                                @php
                                                                    $subCategories =
                                                                        $contentInfo->programCategory
                                                                            ->programSubCategories;
                                                                    // Adjust chunk size as needed
                                                                    $chunks = $subCategories->chunk(1);
                                                                @endphp
                                                                <div class="acc" , style="padding: 0%">
                                                                    @foreach ($chunks as $chunk)
                                                                        <div class="col-md-6">
                                                                            <div class="pro-mod1">

                                                                                @foreach ($chunk as $subCategory)
                                                                                    @php
                                                                                        $subCategorySlug = strtolower(
                                                                                            preg_replace(
                                                                                                '/[^a-zA-Z0-9]/',
                                                                                                '',
                                                                                                str_replace(
                                                                                                    [' ', '&', ','],
                                                                                                    '-',
                                                                                                    $subCategory->name,
                                                                                                ),
                                                                                            ),
                                                                                        );
                                                                                    @endphp
                                                                                    <div class="acc__card">
                                                                                        <!-- Subcategory Title -->
                                                                                        <a href="#{{ $subCategorySlug }}mob" class="acc__title">
                                                                                            {{ $subCategory->name }}
                                                                                        </a>
                                                                                        <!-- Subcategory Description -->
                                                                                        <div id="{{ $subCategorySlug }}mob" class="acc__panel"
                                                                                            style="display: none;">
                                                                                            <div class="vert-box box-height">
                                                                                                {!! $subCategory->description !!}

                                                                                            </div>
                                                                                            <a href="javascript:void(0)" class="close-acrodin">Close</a>
                                                                                        </div>

                                                                                    </div>
                                                                                @endforeach

                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- What's New in CEH Category --}}
                                        @elseif ($contentInfo->l3_layout_program == 'whatsnewinceh')
                                            <div id="{{ $programCategorySlug }}mob" style="display:block;" class="acc__panel">
                                                <div class="pro-mbile pro-mbile1">
                                                    <div class="acc acc-m">
                                                        <!-- Loop through each subcategory -->
                                                        @foreach ($contentInfo->programCategory->programSubCategories as $index => $subCategory)
                                                            @php
                                                                $subCategorySlug = strtolower(
                                                                    preg_replace(
                                                                        '/[^a-zA-Z0-9]/',
                                                                        '',
                                                                        str_replace(
                                                                            [' ', '&', ','],
                                                                            '-',
                                                                            $subCategory->name,
                                                                        ),
                                                                    ),
                                                                );
                                                            @endphp
                                                            <div class="acc__card">
                                                                <!-- Accordion Title -->
                                                                <a href="#{{ $subCategorySlug }}mob" class="acc__title mbg{{ $index + 1 }} ">
                                                                    {{ $subCategory->name }} <i class="fa fa-arrow-down"></i>
                                                                </a>
                                                                <!-- Accordion Content Panel -->
                                                                <div id="{{ $subCategorySlug }}mob" class="acc__panel " style="">
                                                                    <div class="vert-box box-height">
                                                                        @if ($subCategory->image)
                                                                            <div class="template12-img">
                                                                                <img src="{{ asset('storage/uploads/frontend/l3_template/program/' . $subCategory->image) }}"
                                                                                    alt="{{ $subCategory->name }}">
                                                                            </div>
                                                                        @endif

                                                                        <p>{!! $subCategory->description !!}</p>

                                                                    </div>
                                                                    <a href="javascript:void(0)" class="close-acrodin">Close</a>
                                                                </div>
                                                                <!-- Close button (optional) -->

                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Who Is It For? Category --}}
                                        @elseif ($contentInfo->l3_layout_program == 'whoisitfor')
                                            <div id="{{ $programCategorySlug }}mob" class="acc__panel show">
                                                <div class="box-height">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="pro-title">
                                                                {{-- add dynamic title from backend --}}
                                                                @if ($contentInfo->program_sub_title)
                                                                    {!! $contentInfo->program_sub_title !!}
                                                                @endif
                                                            </div>
                                                            <div class="pro-ul-box">
                                                                <p>{!! $contentInfo->program_description !!}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0)" class="close-acrodin close-space">Close</a>
                                            </div>

                                            {{-- Brochure Category --}}
                                        @elseif ($contentInfo->l3_layout_program == 'brochure')
                                            <div id="{{ $programCategorySlug }}mob" class="acc__panel">
                                                <div class="container">
                                                    <div class="pro-ul-box">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="brochure-box">
                                                                    {!! $contentInfo->program_description !!}
                                                                    @if (!empty($contentInfo->brochure_pdf) && $contentInfo->brochure_pdf !== null)
                                                                        <a href="{{ asset('storage/uploads/frontend/l3_template/program/' . $contentInfo->brochure_pdf) }}"
                                                                            download>Download Brochure</a>
                                                                    @else
                                                                        <a href="javascript:void(0);"
                                                                            onclick="alert('Brochure not available')">Download
                                                                            Brochure</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="brochure-img">
                                                                    @if ($contentInfo->images)
                                                                        <img src="{{ asset('storage/uploads/frontend/l3_template/program/' . $contentInfo->images) }}"
                                                                            alt="Brochure Image">
                                                                    @else
                                                                        <img src="https://www.eccouncil.org/wp-content/uploads/2023/01/CEH-cover-broucher-scaled.jpg.webp"
                                                                            alt="Default Brochure Image">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>

                    <!-- faq End -->
                    <!--  -->
                </div>
                <!-- mobile start -->
                <!--  -->
            </section>

            <!-- program info 3-->

            <!-- course Feature start 4-->
        @elseif ($fieldKey == 'coursefeatureCategory' && $contents->contains(fn($info) => $info->{$fieldKey}))
            <section class="anchor-link sample7-line space7" id="{{ $slug }}">
                <!-- title  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 cn-title">
                            {{-- <h2>COURSE FEATURES</h2>
                            <p>The essential technology that matter most for business today</p> --}}
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->coursefeature_title)
                                        <h2>{!! $contentInfo->coursefeature_title->title !!}</h2>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--title end-->
                <!-- tab2 start  -->
                <div class="container desktop-view course-features">
                    <div class="row">
                        <!-- tab2 menu start -->
                        <ul class="nav nav-tabs sample-tab2-menu" id="tabmenu2">
                            @foreach ($l3Categories as $category)
                                {{-- <li class="active"><a data-toggle="tab" href="#ic">BANKING & FINANCE</a></li> --}}
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->coursefeatureCategory)
                                        <li class="{{ $loop->first ? 'active' : '' }}"><a data-toggle="tab" class="codec-tab"
                                                href="#{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->coursefeatureCategory->name)) }}">{{ $contentInfo->coursefeatureCategory->name }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                        <!--  tab2 menu end -->
                        <!-- tab2 content box start -->

                        <div class="tab-content sample7-tb-content" style="">
                            <!-- tab1 conrent start -->
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->coursefeatureCategory)
                                        <div id="{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->coursefeatureCategory->name)) }}"
                                            class="tab-pane tab-pane_cf_d fade in {{ $loop->first ? 'active' : '' }}">
                                            <div class="container">
                                                <div class="row rowp">
                                                    @if ($contentInfo->images)
                                                        <div class="col-md-3">
                                                            <div class="template12-img">
                                                                <img
                                                                    src="{{ asset('storage/uploads/frontend/l3_template/coursefeature/' . $contentInfo->images) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="red-title">
                                                                @if ($contentInfo->coursefeatureCategory)
                                                                    {!! $contentInfo->course_feature_short_description !!}
                                                                @endif
                                                                <a href="javascript:void(0);" class="btn-show">Read
                                                                    More
                                                                    ...</a>

                                                                <div class="content-hide" style="display: none;">
                                                                    {!! $contentInfo->course_feature_description !!}
                                                                    <a href="javascript:void(0);" class="btn-hide btn-hide_cf_d"
                                                                        style="display: none;">Hide Content ...</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="col-md-12">
                                                            <div class="red-title">
                                                                @if ($contentInfo->coursefeatureCategory)
                                                                    {!! $contentInfo->course_feature_short_description !!}
                                                                @endif
                                                                <a href="javascript:void(0);" class="btn-show">Read
                                                                    More
                                                                    ...</a>

                                                                <div class="content-hide" style="display: none;">
                                                                    {!! $contentInfo->course_feature_description !!}
                                                                    <a href="javascript:void(0);" class="btn-hide btn-hide_cf_d"
                                                                        style="display: none;">Hide Content ...</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach

                            <!-- tab1 content end  -->

                        </div>
                        <!--  tab2 content box end -->
                    </div>
                </div>
                <!-- tba2 end -->
                <!-- mobile content start  -->
                {{-- <div class="mobile-view indu-moblie count-navigation"> --}}
                    <div class="container mobile-view significance-space">
                        <div class="acc">
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->coursefeatureCategory)
                                        <div class="acc__card">
                                            <!-- Accordion Title -->
                                            <a href="#coursefeatures-{{ $loop->iteration }}"
                                                class="acc__title {{ $loop->first ? 'active' : '' }}"
                                                data-target="coursefeatures-{{ $loop->iteration }}">
                                                {{ $contentInfo->coursefeatureCategory->name }}
                                            </a>

                                            <!-- Accordion Panel -->
                                            <div class="acc__panel" style="{{ $loop->first ? 'display:block;' : '' }}"
                                                id="coursefeatures-{{ $loop->iteration }}">
                                                <div class="vert-box box-height">
                                                    <div class="red-title">
                                                        @if ($contentInfo->images)
                                                            <div class="template12-img">
                                                                <img
                                                                    src="{{ asset('storage/uploads/frontend/l3_template/coursefeature/' . $contentInfo->images) }}">
                                                            </div>
                                                            {{-- <div class="red-title"> --}}
                                                                @if ($contentInfo->coursefeatureCategory)
                                                                    {!! $contentInfo->course_feature_short_description !!}{!! $contentInfo->course_feature_description !!}
                                                                @endif
                                                                {{--
                                                            </div> --}}
                                                        @else
                                                            {{-- <div class="red-title"> --}}
                                                                @if ($contentInfo->coursefeatureCategory)
                                                                    {!! $contentInfo->course_feature_short_description !!}{!! $contentInfo->course_feature_description !!}
                                                                @endif
                                                                {{--
                                                            </div> --}}
                                                        @endif
                                                    </div>

                                                </div>
                                                <a href="javascript:void(0)" class="close-acrodin">Close</a>

                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach


                        </div>
                        {{-- <div id="owl-demo62" class="owl-carousel owl-theme">
                            @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                            @if ($contentInfo->coursefeatureCategory)
                            <div class="item">
                                @php
                                // Escape quotes to prevent breaking the HTML attribute
                                $description = addslashes($contentInfo->course_feature_description);
                                $short_description = addslashes($contentInfo->course_feature_short_description);
                                @endphp
                                <div class="mobile-cf" data-title="{{ $contentInfo->coursefeatureCategory->name }}"
                                    data-description="{{ e($short_description) }}{{ e($description) }}"
                                    data-image="{{ asset('storage/uploads/frontend/l3_template/coursefeature/' . $contentInfo->images) }}">

                                    <div class="mobile-cf-content">
                                        @if ($contentInfo->images)
                                        <img src="{{ asset('storage/uploads/frontend/l3_template/coursefeature/' . $contentInfo->images) }}"
                                            alt="">
                                        @else
                                        <img src="https://www.eccouncil.org/wp-content/uploads/2023/01/CEH-cover-broucher-scaled.jpg.webp"
                                            alt="Default Brochure Image">
                                        @endif

                                        <h3>{{ $contentInfo->coursefeatureCategory->name }}</h3>
                                        <p>{!! $contentInfo->course_feature_short_description !!}</p>
                                        <a href="javascript:void(0)" class="popup-btn">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @endforeach

                        </div> --}}

                        <!-- Navigation Dots -->
                        <div id="navigation-count2" class="count-nav-box couter-space"></div>
                    </div>
                    <!-- mobile content end  -->

                    {{-- @include ('frontend.mobile-components.m-course-features') --}}
            </section>
            <!-- course feature  end 4-->

            <!--ceh kit start 5>-->
        @elseif ($fieldKey == 'kit_title' && $contents->contains(fn($info) => $info->{$fieldKey}))
            <section class="anchor-link space7 sample7-line" id="{{ $slug }}">
                <!--  -->
                <!-- title  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 cn-title ceh-title">
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    <!-- Overview Section -->
                                    @if ($contentInfo->main_title)
                                        {!! $contentInfo->main_title !!}
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--title end-->
                <div class="container">
                    <div class="indu-moblie count-navigation">
                        <div id="owl-demo63" class="owl-carousel owl-theme">
                            <!-- col -->
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->ceh_description)
                                        <div class="item">
                                            <div class="price-box">
                                                <div class="pri-box-number"><span>{{ $loop->iteration }}</span></div>
                                                <div class="price-box-img">
                                                    <img src="{{ asset('storage/uploads/frontend/l3_template/cehkit/' . $contentInfo->images) }}"
                                                        alt="Image">
                                                </div>
                                                <div class="price-body">
                                                    <div class="price-title">
                                                        <h4>{{ $contentInfo->kit_title }}</h4>
                                                    </div>
                                                    <div class="price-content">
                                                        <ul>
                                                            <li>{!! $contentInfo->ceh_description !!}</li>
                                                        </ul>

                                                    </div>
                                                    <div class="price-btn1">
                                                        <a href="#" class="price-btn btn-color1">Inquire Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach

                        </div>
                        {{-- <div id="navigation-count4" class="count-nav-box"></div> --}}

                    </div>

                </div>

            </section>
            <!--ceh kit end 5>-->

            <!-- Incident info Start 6 -->
        @elseif ($fieldKey == 'incident_description' && $contents->contains(fn($info) => $info->{$fieldKey}))
            <section class="anchor-link sample7-line space7 light-grey ceh-video-sec" id="{{ $slug }}">
                <!-- title  -->

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 cn-title ceh-title">
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->incident_title)
                                        {!! $contentInfo->incident_title !!}
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--title end-->
                <!-- body start -->
                <div class="container">
                    <div class="row">
                        <!--  -->
                        <div class="col-md-6">
                            <div class="ceh-video-ul">
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @if ($contentInfo->incident_description)
                                            {!! $contentInfo->incident_description !!}
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>

                        </div>
                        <!--  -->
                        <div class="col-md-6">

                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    <!-- Overview Section -->
                                    @if ($contentInfo->Video_link)
                                        <div data-videourl="{{ $contentInfo->Video_link }}" class="ceh-video button">
                                            <img
                                                src="{{ asset('storage/uploads/frontend/l3_template/incidents/' . $contentInfo->images) }}">
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach

                        </div>
                        <!--  -->
                    </div>
                </div>
                <!-- body end -->
            </section>

            <!-- Incident info End 6-->

            <!-- industries section start 7 -->
        @elseif ($fieldKey == 'industryCategory' && $contents->contains(fn($info) => $info->{$fieldKey}))
            <section class="anchor-link sample7-line space7 inud-nav-sec " id="{{ $slug }}">
                <!--  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 cn-title ceh-title">
                            <!-- <h1>Industries we cater</h1> -->
                            @foreach ($l3Categories as $category)
                                {{-- <li class="active"><a data-toggle="tab" href="#ic">BANKING & FINANCE</a></li> --}}
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->industry_title)
                                        <h1>{!! $contentInfo->industry_title->title !!}</h1>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="container p40">
                    <div class="row">
                        <!--  -->
                        <div class="indu-moblie count-navigation">
                            <div id="owl-demo9" class="owl-carousel  inud-nav owl-theme">

                                @foreach ($l3Categories as $category)
                                    {{-- <li class="active"><a data-toggle="tab" href="#ic">BANKING & FINANCE</a></li> --}}
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @if ($contentInfo->industryCategory)
                                            <div class="item11 ">
                                                <div class="empower-industry-box">

                                                    <div class="cn-hover-box">
                                                        <div class="cn-hover-img">
                                                            @if ($contentInfo->industryCategory)
                                                                <img
                                                                    src="{{ asset('storage/uploads/frontend/l3_template/industry/' . $contentInfo->images) }}">
                                                            @endif
                                                        </div>
                                                        <div class="cn-content">

                                                            @if ($contentInfo->industryCategory)
                                                                <p> {!! $contentInfo->industry_description !!}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @if ($contentInfo->industryCategory)
                                                        <div class="cn-main-content">
                                                            <a href="#" class="cn-main-content-enclosed"
                                                                style="display: block; text-decoration: none;">
                                                                <h3>{{ $contentInfo->industryCategory->name }}</h3>
                                                                Know more <i class="fa"></i>
                                                            </a>
                                                        </div>
                                                    @endif


                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            <div id="navigation-count5" class="count-nav-box"></div>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </section>
            <!-- industries section end 7 -->

            <!-- Why Codec Network start 8 -->
        @elseif ($fieldKey == 'cyberwindCategory' && $contents->contains(fn($info) => $info->{$fieldKey}))
            <section class="anchor-link space7 light-grey sample7-line" id="{{ $slug }}">
                <!--  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 cn-title">
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->cyberwind_title)
                                        <h2>{!! $contentInfo->cyberwind_title->title !!}</h2>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="container desktop-view why-chossetab" id="industry_challenges">
                    <div class="row">
                        <div class="col-md-3 tab3-tab1 significance2-tab">
                            <!--  -->
                            <div class="tab3-tab significance2-subtab">

                                @foreach ($l3Categories as $category)
                                    {{-- <li class="active"><a data-toggle="tab" href="#ic">BANKING & FINANCE</a></li> --}}
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @if ($contentInfo->cyberwindCategory)
                                            {{-- <li class="{{ $loop->first ? 'active' : '' }}"><a data-toggle="tab" class="codec-tab"
                                                    href="#{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->cyberwindCategory->name)) }}">{{
                                                    $contentInfo->cyberwindCategory->name }}</a>
                                            </li> --}}
                                            <button class="tab3-tablinks"
                                                onclick="openCity(event, '{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->cyberwindCategory->name)) }}')"
                                                id="{{ $loop->first ? 'defaultOpen' : ' ' }}">
                                                {{ $contentInfo->cyberwindCategory->name }}</button>
                                        @endif
                                    @endforeach
                                @endforeach

                            </div>
                            <!--  -->
                        </div>
                        <div class="col-md-9 significance2-content-sub">
                            <!--  -->
                            <div class="tab3-content">
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @if ($contentInfo->cyberwindCategory)
                                            <div id="{{ strtolower(str_replace([' ', '&', ','], '-', $contentInfo->cyberwindCategory->name)) }}"
                                                class="tab3-tabcontent">
                                                <div class="container">
                                                    <div class="row rowp">
                                                        @if ($contentInfo->images)
                                                            <div class="col-md-5">
                                                                <div class="template12-img">
                                                                    <img
                                                                        src="{{ asset('storage/uploads/frontend/l3_template/cyberwind/' . $contentInfo->images) }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div class="red-title">
                                                                    @if ($contentInfo->cyberwind_short_description)
                                                                        {!! $contentInfo->cyberwind_short_description !!}
                                                                    @endif
                                                                    <a href="javascript:void(0);" class="btn-show">Read
                                                                        More
                                                                        ...</a>

                                                                    <div class="content-hide" style="display: none;">
                                                                        {!! $contentInfo->cyberwind_description !!}
                                                                        <a href="javascript:void(0);" class="btn-hide hide-btn_tab3"
                                                                            style="display: none;">Hide Content ...</a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="col-md-12">
                                                                <div class="red-title">
                                                                    @if ($contentInfo->cyberwind_short_description)
                                                                        {!! $contentInfo->cyberwind_short_description !!}
                                                                    @endif
                                                                    <a href="javascript:void(0);" class="btn-show">Read
                                                                        More
                                                                        ...</a>

                                                                    <div class="content-hide" style="display: none;">
                                                                        {!! $contentInfo->cyberwind_description !!}
                                                                        <a href="javascript:void(0);" class="btn-hide hide-btn_tab3"
                                                                            style="display: none;">Hide Content ...</a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach

                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
                <!--  -->
                <!-- mobile end -->
                <div class="container mobile-view">
                    <!--  -->
                    <div class="acc">

                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                @if ($contentInfo->cyberwindCategory)
                                    <div class="acc__card">
                                        <!-- Accordion Title -->
                                        <a href="#whycyberwind-{{ $loop->iteration }}" class="acc__title {{ $loop->first ? 'active' : '' }}"
                                            data-target="whycyberwind-{{ $loop->iteration }}">
                                            {{ $contentInfo->cyberwindCategory->name }}
                                        </a>

                                        <!-- Accordion Panel -->
                                        <div class="acc__panel" style="{{ $loop->first ? 'display:block;' : '' }}"
                                            id="whycyberwind-{{ $loop->iteration }}">
                                            <div class="vert-box box-height">
                                                <div class="red-title">
                                                    @if ($contentInfo->images)
                                                        <div class="template12-img">
                                                            <img
                                                                src="{{ asset('storage/uploads/frontend/l3_template/cyberwind/' . $contentInfo->images) }}">
                                                        </div>
                                                        {{-- <div class="red-title"> --}}
                                                            @if ($contentInfo->cyberwindCategory)
                                                                {!! $contentInfo->cyberwind_short_description !!}
                                                                {!! $contentInfo->cyberwind_description !!}
                                                            @endif
                                                            {{--
                                                        </div> --}}
                                                    @else
                                                        {{-- <div class="red-title"> --}}
                                                            @if ($contentInfo->cyberwindCategory)
                                                                {!! $contentInfo->cyberwind_short_description !!}
                                                                {!! $contentInfo->cyberwind_description !!}
                                                            @endif
                                                            {{--
                                                        </div> --}}
                                                    @endif
                                                </div>

                                            </div>
                                            <a href="javascript:void(0)" class="close-acrodin">Close</a>

                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach


                    </div>
                    <!-- faq End -->
                    <!--  -->
                </div>
                <!-- mobile start -->
            </section>

            <!-- Why Codec Network end 8 -->

            <!-- testimonials start 9 -->
        @elseif ($fieldKey == 'testimonials' && $contents->contains(fn($info) => $info->{$fieldKey}))
            <section class="anchor-link space7 sample7-line" id="{{ $slug }}">
                <!--  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tsto-title">
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @foreach ($contentInfo->testimonials as $index => $testimonial)
                                            @if ($testimonial->testimonial_title)
                                                <h2><i class="fa  fa-commenting"></i>{!! $testimonial->testimonial_title !!}</h2>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Testo monail satrt -->
                            <!-- Testimonials Carousel -->
                            <div id="client-testimonials" class="owl-carousel owl-theme owl-arrow">
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @foreach ($contentInfo->testimonials as $index => $testimonial)
                                            <div class="item">
                                                <div class="ceh-testo-box" data-target="#global-testimonial-popup"
                                                    data-name="{{ $testimonial->testimonial_name }}"
                                                    data-designation="{{ $testimonial->designation }}"
                                                    data-description="{{ $testimonial->testimonial_description }}"
                                                    data-image="{{ asset('storage/uploads/frontend/l3_template/testimonials/' . $testimonial->images) }}">

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="ceh-testo-image">
                                                                <img src="{{ asset('storage/uploads/frontend/l3_template/testimonials/' . $testimonial->images) }}"
                                                                    class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="ceh-testo-cont">
                                                                <div class="ceh-testo-title">
                                                                    <h3>{{ $testimonial->testimonial_name }}</h3>
                                                                    <span>{{ $testimonial->designation }}</span>
                                                                </div>
                                                                <div class="ceh-testo-body">
                                                                    <p>{{ $testimonial->testimonial_short_description }}
                                                                    </p>
                                                                    <span>Read More</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- .item ends here -->
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </div> <!-- #client-testimonials ends here -->

                            <!-- Testo monail satrt -->
                        </div>
                    </div>
                </div>

                </div>
                <!--  -->
            </section>
            <!-- testimonials End 9 -->

            {{-- blog Section Start 10 --}}
        @elseif ($fieldKey == 'blogCategory' && $contents->contains(fn($info) => $info->{$fieldKey}))
            <section class="anchor-link space7 light-grey " id="{{ $slug }}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 cn-title">
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->blog_title)
                                        {{-- <h2>{!! $contentInfo->blog_title->title !!}</h2> --}}
                                        <h2
                                            style="margin: auto; font-weight: 500; line-height: 1.2; font-size: 24px; letter-spacing: 2px; color: rgb(66, 66, 66); text-align: center; font-family: &quot;Roboto Medium&quot;; max-width: 100%; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; background-color: rgb(241, 242, 248); scroll-behavior: smooth !important;">
                                            {{ $contentInfo->blog_title->title }}
                                        </h2>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $index => $contentInfo)
                                @if ($contentInfo->blogCategory)
                                    <div class="col-md-6" style="padding-bottom: 20px;">
                                        <div class="industry-box black-bg" style="background-color: {{ $contentInfo->style_class_id }}">
                                            <p>{{ $contentInfo->blogCategory->name }}</p> <!-- Blog Category Name -->
                                            <h3>{{ $contentInfo->blog_description }}</h3> <!-- Blog Title -->
                                            <a href="#">Watch Now</a>
                                        </div>
                                    </div>
                                    <!-- Add bottom margin after every 2 items (full row) -->
                                    @if (($index + 1) % 2 == 0)
                                        <div class="w-100"></div>
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>

            </section>

            {{-- blog section end 10 --}}

            <!-- FAQ info start 11 -->
        @elseif ($fieldKey == 'FaqCategory' && $contents->contains(fn($info) => $info->{$fieldKey}))
            <section class="anchor-link sample7-line space7 ceh-pro ceh-pro1 faqclass" id="{{ $slug }}">
                {{-- <section class="anchor-link sample7-line space7 ceh-pro ceh-pro1" id="{{ $slug }}"> --}}
                    <!-- title  -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 cn-title ceh-title">
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @if ($contentInfo->faqCategory)
                                            @foreach ($contentInfo->faqCategory->faqSubCategory as $faqSubCategory)
                                                @if ($faqSubCategory->title)
                                                    {!! $faqSubCategory->title !!}
                                                    @php break 2; @endphp
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--title end-->
                    <!-- body start -->

                    <!-- Faq backup section -->

                    <div class="container desktop-view faq">

                        @php
                            $displayedFaqCategories = []; // Array to store displayed FAQ category IDs
                        @endphp

                        <div class="row">
                            <!-- Tab Menu Start -->
                            <ul class="nav nav-tabs nav-tabs3 program-tab program-tab2" id="program_tab2">
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @if ($contentInfo->faqCategory && !in_array($contentInfo->faqCategory->id, $displayedFaqCategories))
                                            @php
                                                $displayedFaqCategories[] = $contentInfo->faqCategory->id; // Mark this ID as displayed
                                            @endphp
                                            <li class="{{ $loop->first ? 'active' : '' }}">
                                                <a data-toggle="tab"
                                                    href="#{{ strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace([' ', '&', ','], '-', $contentInfo->faqCategory->name))) }}">
                                                    {{ $contentInfo->faqCategory->name }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endforeach
                            </ul>
                            <!-- Tab Menu End -->

                            <!-- Tab Content Start -->
                            <div class="tab-content program-content">
                                @php
                                    $displayedFaqCategories = []; // Reset array for tab content
                                @endphp
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @if ($contentInfo->faqCategory && !in_array($contentInfo->faqCategory->id, $displayedFaqCategories))
                                            @php
                                                $displayedFaqCategories[] = $contentInfo->faqCategory->id; // Mark this ID as displayed
                                            @endphp
                                            <div id="{{ strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace([' ', '&', ','], '-', $contentInfo->faqCategory->name))) }}"
                                                class="tab-pane tab-pane3 fade {{ $loop->first ? 'active' : '' }}">
                                                <!-- FAQ Subcategories -->
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="acc__section_faq">
                                                            <div class="pro-faq">
                                                                <div class="acc">
                                                                    @foreach ($contentInfo->faqCategory->faqSubCategory as $faqSubCategory)
                                                                        <div class="acc__card">
                                                                            <!-- Subcategory Name -->
                                                                            <a href="#faqsub{{ strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace([' ', '&', ','], '-', $faqSubCategory->id))) }}"
                                                                                class="acc__title ">
                                                                                {{ $faqSubCategory->name }}
                                                                            </a>

                                                                            <!-- Subcategory Description -->
                                                                            <div class="acc__panel" style="display: "
                                                                                id="faqsub{{ strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', str_replace([' ', '&', ','], '-', $faqSubCategory->id))) }}">
                                                                                {{ $faqSubCategory->description }}
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            <!-- Tab Content End -->
                        </div>

                    </div>

                    <!-- jQuery Script to Fix Tab Switching Issue -->


                    <!-- body end -->
                    <!-- mobile end -->
                    <div class="container mobile-view" id="faqs_mob">
                        <div class="acc">
                            @php
                                $displayedFaqCategories = []; // Reset array for tab content
                            @endphp

                            @php
                                // Define an array of colors for alternating styles
                                $colors = [
                                    'background: #345995 !important; color: #fff !important;',
                                    'background: #4a4a4a !important; color: #fff !important;',
                                    'background: #2e6e4c !important; color: #fff !important;',
                                    'background: #702f42 !important; color: #fff !important;',
                                ];

                                $colorIndex = 0; // Start index for colors
                            @endphp

                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $contentInfo)
                                    @if ($contentInfo->faqCategory && !in_array($contentInfo->faqCategory->id, $displayedFaqCategories))
                                        @php
                                            $displayedFaqCategories[] = $contentInfo->faqCategory->id; // Mark this ID as displayed

                                            // Get the color based on the iteration count
                                            $currentColor = $colors[$colorIndex % count($colors)];
                                            $colorIndex++; // Increment the color index for the next iteration
                                        @endphp


                                        <!-- FAQ Category -->
                                        <div class="acc__card">
                                            <a class="acc__title" style="{{ $currentColor }}"
                                                href="#{{ strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace([' ', '&', ','], '-', $contentInfo->faqCategory->name))) }}mob"
                                                data-target="{{ strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace([' ', '&', ','], '-', $contentInfo->faqCategory->name))) }}mob">
                                                {{ $contentInfo->faqCategory->name }}
                                            </a>

                                            <div id="{{ strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace([' ', '&', ','], '-', $contentInfo->faqCategory->name))) }}mob"
                                                class="acc__panel" style="{{ $loop->first ? 'display:block;' : '' }}">

                                                <div class="pro-faq m-pro-faq">
                                                    <div class="acc">
                                                        @foreach ($contentInfo->faqCategory->faqSubCategory as $faqSubCategory)
                                                            <div class="acc__card">
                                                                <!-- Subcategory Name -->
                                                                <a class="acc__title"
                                                                    href="#faqsub{{ strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace([' ', '&', ','], '-', $faqSubCategory->id))) }}mob">
                                                                    {{ $faqSubCategory->name }}
                                                                </a>

                                                                <!-- Subcategory Description -->
                                                                <div id="faqsub{{ strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace([' ', '&', ','], '-', $faqSubCategory->id))) }}mob"
                                                                    class="acc__panel">
                                                                    {{ $faqSubCategory->description }}
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <!-- mobile start -->
                    <!--  -->
                </section>
                <!-- FAQ info End 11 -->

                <!-- Global Popup fot Testomonials (Only One in the Page) -->
        @elseif ($fieldKey == 'overview2Descriptions' && $contents->contains(fn($info) => $info->{$fieldKey}))
                <section class="light-grey sample7-line anchor-link space7_1" id="{{ $slug }}">
                    <!--  -->
                    <div class="container desktop-view">
                        <div class="row">
                            @foreach ($l3Categories as $category)
                                @foreach ($category->contentInfos as $info)
                                    @if ($info->l3_layout_type === 'overview2' && $info->overview2Descriptions->count())
                                        <div class="col-md-12">
                                            <div class="third-content" id="overview2">
                                                @foreach ($info->overview2Descriptions as $desc)
                                                    @if($desc->overview2_title)
                                                        <h3>{{ $desc->overview2_title }}</h3>
                                                    @endif
                                                    @if($desc->overview2_paragraph1)
                                                        {!! $desc->overview2_paragraph1 !!}
                                                    @endif
                                                    <a href="javascript:void(0)" class="btn-show">Read More ...</a>
                                                    <div class="content-hide">
                                                        {!! $desc->overview2_paragraph2 !!}
                                                        {!! $desc->overview2_paragraph3 !!}
                                                        {!! $desc->overview2_paragraph4 !!}
                                                        {!! $desc->overview2_paragraph5 !!}
                                                    </div>
                                                @endforeach
                                                <a href="#overview2" class="btn-hide" id="btn-hide1">Hide Content ...</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <!--  -->
                    <div class="container mobile-view">
                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $info)
                                @if ($info->l3_layout_type === 'overview2' && $info->overview2Descriptions->count())
                                    <div class="third-content">
                                        <h3>{{ $info->overview2Descriptions->first()->overview2_title ?? 'Overview' }}</h3>
                                        <!-- Slider start -->
                                        <div class="mobile-view indu-moblie indu-moblie1 count-navigation">
                                            <div id="owl-overview2" class="owl-carousel owl-theme">
                                                @foreach ($info->overview2Descriptions as $desc)
                                                    @foreach (range(1, 5) as $i)
                                                        @php
                                                            $paragraph = $desc->{'overview2_paragraph' . $i};
                                                        @endphp
                                                        @if (!empty($paragraph))
                                                            <div class="item">
                                                                <div class="mobile-cont">
                                                                    <p>{!! $paragraph !!}</p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </div>
                                            <div id="navigation-count-overview2" class="count-nav-box"></div>
                                        </div>
                                        <!-- Slider end -->
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>

                </section>
            @elseif ($fieldKey == 'overview2SubDescriptions' && $contents->contains(fn($info) => $info->{$fieldKey}))
                <section class="light-grey sample7-line anchor-link space7_1" id="{{ $slug }}">
                    @foreach ($l3Categories as $category)
                        @foreach ($category->contentInfos as $contentInfo)
                            @if ($contentInfo->l3_layout_type === 'overview2subdescription')
                                <!-- Desktop View -->
                                <div class="container desktop-view">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="third-content">
                                                @if($contentInfo->overview3_title)
                                                    <h4>{!! $contentInfo->overview3_title !!}</h4>
                                                @endif
                                                <div class="info-graphic">
                                                    <div class="row info-graphic-row">
                                                        <div class="col-md-12">
                                                            <div class="desktop-view">
                                                                <div class="wwyl-row">
                                                                    @foreach ($contentInfo->overview2SubDescriptions as $key => $sub)
                                                                        @php
                                                                            $colors = ['', 'orange', 'purple', 'color4', 'green'];
                                                                            $color = $colors[$key % count($colors)];
                                                                        @endphp
                                                                        <div class="wwyl-box {{ $color }}">
                                                                            <p>{!! $sub->overview2_sub_description !!}</p>
                                                                            <div class="wwyl-box-circle {{ $color ? $color . '-circle' : '' }}">
                                                                                <span>{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile View -->
                                <div class="container mobile-view">
                                    <div class="third-content">
                                        @if($contentInfo->overview3_title)
                                            <h3 class="space1">{!! $contentInfo->overview3_title !!}</h3>
                                        @endif
                                        <div class="mobile-view indu-moblie count-navigation">
                                            <div id="owl-overview2subdescription" class="owl-carousel owl-theme">
                                                @foreach ($contentInfo->overview2SubDescriptions as $key => $sub)
                                                    @php
                                                        $colors = ['', 'orange', 'purple', 'color4', 'green'];
                                                        $color = $colors[$key % count($colors)];
                                                    @endphp
                                                    <div class="wwyl-box {{ $color }}">
                                                        <p>{!! $sub->overview2_sub_description !!}</p>
                                                        <div class="wwyl-box-circle {{ $color ? $color . '-circle' : '' }}">
                                                            <span>{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div id="navigation-overview2subdescription" class="count-nav-box"></div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </section>

            @elseif ($fieldKey == 'industry2_description' && $contents->contains(fn($info) => $info->{$fieldKey}))
                <section class="sec-wrap-cod-2" style="background: #dceff6;" id="{{ $slug }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <!-- Dynamic Title -->
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @if (!empty($contentInfo->industry2title))
                                            <h3 class="temp-head">{!! $contentInfo->industry2title->title !!}</h3>
                                            @break <!-- We only need one title -->
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>

                        @php
                            $testimonials = collect();
                            foreach ($l3Categories as $category) {
                                foreach ($category->contentInfos as $contentInfo) {
                                    if (!empty($contentInfo->industry2_description)) {
                                        $testimonials->push($contentInfo);
                                    }
                                }
                            }
                        @endphp

                        @foreach ($testimonials->chunk(3) as $testimonialChunk)
                            <div class="row">
                                @foreach ($testimonialChunk as $contentInfo)
                                    <div class="col-sm-4 testi-temp">
                                        <p>{{ $contentInfo->industry2_description }}</p>
                                        <p class="sign">{{ $contentInfo->industry2_testimonial_name }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </section>
            @elseif ($fieldKey == 'overview15s' && $contents->contains(fn($info) => $info->{$fieldKey}))
                <section class="sec-wrap-cod-2"
                    style="background-image:url('assets/images/image-bg-top.jpg'); background-repeat: repeat;" id="{{ $slug }}">
                    <div class="container">
                        @foreach ($l3Categories as $category)
                            @foreach ($category->contentInfos as $contentInfo)
                                @foreach ($contentInfo->overview15s as $overview)
                                    <div class="row">
                                        <div class="col-sm-7 mid-banner temp-3-sec">
                                            <h3 class="temp-head">{{ $overview->overview15_title }}</h3>
                                            <p>{!! $overview->overview15_descriptions !!}</p>
                                        </div>
                                        <div class="col-sm-5 mid-banner temp-3-sec">
                                            @if($overview->image)
                                                <img src="{{ asset('storage/uploads/frontend/l3_template/overview15/' . $overview->image) }}"
                                                    alt="Overview Image" class="img-fluid">
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        @endforeach
                    </div>
                </section>

            @elseif ($fieldKey == 'significance2s' && $contents->contains(fn($info) => $info->{$fieldKey}))
                <section class="why-codec codec-page-section anchor-link light-grey" id="{{ $slug }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 cn-title">
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $info)
                                        @foreach ($info->significance2s as $significance)
                                            @if ($significance->significance2_title)
                                                {!! $significance->significance2_title !!}
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                @php
                    $categoriesMap = [];

                    foreach ($l3Categories as $category) {
                        foreach ($category->contentInfos as $index => $contentInfo) {
                            if ($contentInfo->significance2Category) {
                                $categoryId = $contentInfo->significance2Category->id;

                                if (!isset($categoriesMap[$categoryId])) {
                                    $categoriesMap[$categoryId] = [
                                        'category' => $contentInfo->significance2Category,
                                        'significance2s' => [],
                                        'index' => $index+2,
                                    ];
                                }

                                foreach ($contentInfo->significance2s as $significance2) {
                                    $categoriesMap[$categoryId]['significance2s'][] = $significance2;
                                }
                            }
                        }
                    }
                @endphp

                        <div class="container desktop-view">
                            <div class="row">
                                <div class="cn-tabs1">
                                    {{-- Tab Navigation --}}
                                    <ul id="tabs-nav100" class="tabs-signi2sec">
                                        @foreach ($categoriesMap as $group)
                                            <li class="{{ $loop->first ? 'active' : '' }}">
                                                <a href="#{{ strtolower(str_replace([' ', '&', ','], '-', $group['category']->name)) }}">
                                                    {{ $group['category']->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                    {{-- Tab Content --}}
                                    <div id="tabs-content100">
                                        @foreach ($categoriesMap as $group)
                                            <div id="{{ strtolower(str_replace([' ', '&', ','], '-', $group['category']->name)) }}"
                                                class="tab-content100"
                                                style="display: {{ $loop->first ? 'block' : 'none' }};">
                                                <div class="container">
                                                    <div class="row rowp">
                                                        <div class="container desktop-view why-chossetab">
                                                            <div class="row">
                                                                {{-- Left Side Buttons --}}
                                                                <div class="col-md-3 tab3-tab1 significance2-tab">
                                                                    <div class="tab3-tab significance2-subtab" id="tab3_why_us">
                                                                        @foreach ($group['significance2s'] as $significance)
                                                                            <button class="tablinks{{ $group['index'] }} {{ $loop->first ? 'tab3-active' : '' }}"
                                                                                    onclick="openCity{{ $group['index'] }}(event, '{{ strtolower(str_replace([' ', '&', ','], '-', $significance->name)) }}')">
                                                                                {{ $significance->name }}
                                                                            </button>
                                                                        @endforeach
                                                                    </div>
                                                                </div>

                                                                {{-- Right Side Content --}}
                                                                <div class="col-md-9 significance2-content-sub">
                                                                    <div class="tab3-content">
                                                                        @foreach ($group['significance2s'] as $significance)
                                                                            <div id="{{ strtolower(str_replace([' ', '&', ','], '-', $significance->name)) }}"
                                                                                class="tabcontent{{ $group['index'] }}"
                                                                                style="display: {{ $loop->first ? 'block' : 'none' }};">
                                                                                <div class="container">
                                                                                    <div class="row rowp">
                                                                                        <div class="col-md-5">
                                                                                            <div class="template12-img">
                                                                                                <img src="{{ asset($significance->image ?? 'assets/images/placeholder.jpg') }}">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-7">
                                                                                            <div class="red-title">
                                                                                                {!! $significance->significance2_short_description !!}
                                                                                                <a href="javascript:void(0);" class="btn-show">Read More ...</a>
                                                                                                <div class="content-hide">
                                                                                                    {!! $significance->significance2_long_description !!}
                                                                                                </div>
                                                                                                <a href="javascript:void(0);" class="btn-hide hide-btn_tab3">Hide Content ...</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div> <!-- /.row -->
                                                        </div> <!-- /.why-chossetab -->
                                                    </div> <!-- /.rowp -->
                                                </div> <!-- /.container -->
                                            </div>
                                        @endforeach
                                    </div> <!-- /#tabs-content100 -->
                                </div>
                            </div>
                        </div>

                       
                        @php
                        $groupedSignificance2 = [];
                    
                        foreach ($l3Categories as $category) {
                            foreach ($category->contentInfos as $contentInfo) {
                                if ($contentInfo->significance2Category) {
                                    $categoryId = $contentInfo->significance2Category->id;
                    
                                    if (!isset($groupedSignificance2[$categoryId])) {
                                        $groupedSignificance2[$categoryId] = [];
                                    }
                    
                                    foreach ($contentInfo->significance2s as $significance) {
                                        $groupedSignificance2[$categoryId][] = $significance;
                                    }
                                }
                            }
                        }
                    @endphp
                    
                    <div class="container mobile-view significance-space" id="sf_mob">
                        <div class="acc">
                            @foreach ($groupedSignificance2 as $group)
                                @foreach ($group as $index => $significance)
                                    <div class="acc__card">
                                        <!-- Accordion Title: Subcategory Name -->
                                        <a href="#significance2s-{{ $significance->id }}"
                                            class="acc__title {{ $loop->first ? 'active' : '' }}"
                                            data-target="significance2s-{{ $significance->id }}">
                                            {{ $significance->name }}
                                        </a>
                    
                                        <!-- Accordion Panel -->
                                        <div class="acc__panel" style="{{ $loop->first ? 'display:block;' : '' }}"
                                            id="significance2s-{{ $significance->id }}">
                                            <div class="box-height vert-box">
                                                <div class="red-title">
                                                    @if ($significance->image)
                                                        <div class="template12-img">
                                                            <img src="{{ asset('storage/uploads/frontend/l3_template/significance2/' . $significance->image) }}"
                                                                 alt="{{ $significance->significance2_title }}">
                                                        </div>
                                                    @endif
                    
                                                    {{-- Content --}}
                                                    {!! $significance->significance2_short_description !!}
                                                   
                                                    {!! $significance->significance2_long_description !!}
                                                   
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="close-acrodin">Close</a>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>

                </section>

            @elseif ($fieldKey == 'overview16_short_descriptions' && $contents->contains(fn($info) => $info->{$fieldKey}))
                <section class="empower-industry-bg codec-page-section anchor-link"
                    style="padding-bottom: 20px !important; padding-top: 40px !important;" id="{{ $slug }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 cn-title">
                                @foreach ($l3Categories as $category)
                                    @foreach ($category->contentInfos as $contentInfo)
                                        @if (!empty($contentInfo->overview16_title))
                                            <h2>{!! $contentInfo->overview16_title !!}</h2>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>

                    @php $index = 0; @endphp
                    @foreach ($l3Categories as $category)
                        @foreach ($category->contentInfos as $contentInfo)
                            @if (!empty($contentInfo->overview16_short_descriptions) || !empty($contentInfo->overview16_long_descriptions))
                                <div class="container">
                                    <div class="row rowp">
                                        @if ($index % 2 == 0)
                                            {{-- Even Index: Image Left, Content Right --}}
                                            <div class="col-md-5">
                                                <div class="template12-img">
                                                    <img src="{{ $contentInfo->images ? asset('storage/uploads/frontend/l3_template/overview16/' . $contentInfo->images) : asset('assets/images/intelligent-automation.webp') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="red-title">
                                                    {!! $contentInfo->overview16_short_descriptions !!}
                                                    @if (!empty($contentInfo->overview16_long_descriptions))
                                                        <a href="javascript:void(0);" class="btn-show" id="btn-show-{{ $index }}">Read More ...</a>
                                                        <div class="content-hide" id="content-hide-{{ $index }}">
                                                            {!! $contentInfo->overview16_long_descriptions !!}
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn-hide" id="btn-hide-{{ $index }}">Hide Content
                                                            ...</a>
                                                    @endif
                                                </div>
                                            </div>
                                        @else
                                            {{-- Odd Index: Content Left, Image Right --}}
                                            <div class="col-md-7">
                                                <div class="red-title">
                                                    {!! $contentInfo->overview16_short_descriptions !!}
                                                    @if (!empty($contentInfo->overview16_long_descriptions))
                                                        <a href="javascript:void(0);" class="btn-show" id="btn-show-{{ $index }}">Read More ...</a>
                                                        <div class="content-hide" id="content-hide-{{ $index }}">
                                                            {!! $contentInfo->overview16_long_descriptions !!}
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn-hide" id="btn-hide-{{ $index }}">Hide Content
                                                            ...</a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="template12-img">
                                                    <img src="{{ $contentInfo->images ? asset('storage/uploads/frontend/l3_template/overview16/' . $contentInfo->images) : asset('assets/images/intelligent-automation.webp') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @php $index++; @endphp
                            @endif
                        @endforeach
                    @endforeach
                </section>
            @elseif ($fieldKey == 'overview17_descriptions' && $contents->contains(fn($info) => $info->{$fieldKey}))
                <section class="light-grey sample7-line anchor-link space7_1" id="{{ $slug }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="third-content" id="">
                                    @foreach ($l3Categories as $category)
                                        @foreach ($category->contentInfos as $contentInfo)
                                            @if (!empty($contentInfo->overview17_descriptions))
                                                <h2>{!! $contentInfo->overview17_descriptions !!}</h2>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
    @endforeach

       
        <div class="popup" id="global-testimonial-popup">
            <div class="popup-box popup-testo">
                <div class="testo-popup">
                    <div class="testo-popup-cont-top">
                        <div class="testo-popup-cont-top-img">
                            <img src="" id="popup-image" class="img-fluid" alt="Testimonial Image">
                        </div>
                        <div class="testo-popup-cont-top-title">
                            <h3 id="popup-name"></h3>
                            <span id="popup-designation"></span>
                        </div>
                    </div>
                    <div class="testo-popup-body">
                        <p id="popup-description"></p>
                    </div>
                </div>
                <a href="javascript:void(0)" class="bottom-close-d close_1"><i class="fa fa-times"></i></a>
                <a href="javascript:void(0)" class="close_21 close_1"> Close</a>
            </div>
        </div>
        <!-- Global Popup for mobile course -features read more (Only One in the Page) start-->
        <div class="popup " id="mobilecf1" style="display: none;">
            <div class="popup-box ">
                <div class="mobile-cf-popup">

                    <img src="" id="popup-images" class="" alt="course-features Image">
                    <div class="mobile-cf-content-popup">

                        <h3></h3>
                        <p></p>
                    </div>
                </div>
                <a href="javascript:void(0)" class="bottom-close close_1">Close</a>
                <a href="javascript:void(0)" class="bottom-close-d close_1"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <!-- Global Popup for mobile course -features read more (Only One in the Page) End-->
        <a href="#main-content-body" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>
        <a href="#back" class="backButton"><i class="fa fa-arrow-left"></i></a>
</body>

{{-- @endsection --}}
<!-- Jquery code -->
@push('scripts')
    <script>
        $(document).ready(function () {
            // When the "Read More" button is clicked
            $(".btn-show").click(function () {
                $(this).hide(); // Hide "Read More" button
                var content = $(this).next(".content-hide");

                // Smoothly slide down content and show "Hide Content"
                content.stop(true, true).slideDown(0, function () {
                    $(this).find(".btn-hide").fadeIn();
                });
            });

            // When the "Hide Content" button is clicked
            $(".btn-hide").click(function () {
                var content = $(this).closest(".content-hide");

                // Smoothly slide up content and show "Read More" button
                content.stop(true, true).slideUp(0, function () {
                    $(this).prev(".btn-show").fadeIn();
                });

                // Hide the "Hide Content" button after hiding the content
                $(this).fadeOut();
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            // Open the popup dynamically when clicking a testimonial box
            $(document).on("click", ".ceh-testo-box", function () {
                console.log("clicked");
                // Get data from the clicked testimonial
                var name = $(this).data("name");
                var designation = $(this).data("designation");
                var description = $(this).data("description");
                var image = $(this).data("image");
                console.log(name);
                // Populate the global popup with dynamic content
                $("#popup-name").text(name);
                $("#popup-designation").text(designation);
                $("#popup-description").text(description);
                $("#popup-image").attr("src", image);

                // Show the popup
                $("#global-testimonial-popup").fadeIn();
            });

            // Close the popup when clicking on the close button (using delegated event handling)
            $(document).on("click", ".close_1, .close_21", function () {
                $(this).closest(".popup").fadeOut(); // Close the closest popup
            });

            // Close the popup when clicking outside of the popup content
            $("#global-testimonial-popup").click(function (e) {
                if ($(e.target).hasClass("popup")) {
                    $(this).fadeOut();
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".btn-toggle").forEach(function (button) {
                button.addEventListener("click", function () {
                    let content = this.previousElementSibling; // Get the description container
                    let shortText = content.querySelector(".short-text");
                    let fullText = content.querySelector(".full-text");
                    let hideButton = this.nextElementSibling; // The hide button

                    shortText.style.display = "none";
                    fullText.style.display = "inline";
                    this.style.display = "none";
                    hideButton.style.display = "inline";
                });
            });

            document.querySelectorAll(".btn-hide").forEach(function (button) {
                button.addEventListener("click", function () {
                    let content = this.previousElementSibling
                        .previousElementSibling; // Get the description container
                    let shortText = content.querySelector(".short-text");
                    let fullText = content.querySelector(".full-text");
                    let readMoreButton = this.previousElementSibling; // The "Read More" button

                    shortText.style.display = "inline";
                    fullText.style.display = "none";
                    this.style.display = "none";
                    readMoreButton.style.display = "inline";
                });
            });
        });
    </script>



    <script>
        $(document).ready(function () {
            // Bootstrap tab fix
            $('.nav-tabs3 a').on('click', function (e) {
                e.preventDefault();
                $('.nav-tabs3 li').removeClass('active');
                $(this).parent().addClass('active');

                var target = $(this).attr("href");
                $('.tab-pane3').removeClass('show active');
                $(target).addClass('show active');
            });

        });
    </script>
    <script>
        if (!isMobile()) {
            function scrollToFirstElement(className, offset = 100) {
                document.querySelectorAll(`.${className}`).forEach(element => {
                    element.addEventListener("click", function (e) {
                        e.preventDefault();
                        setTimeout(() => {
                            const firstElement = document.querySelector(`.${className}`);
                            if (firstElement) {
                                window.scrollTo({
                                    top: firstElement.offsetTop - offset,
                                    behavior: "smooth"
                                });
                            }
                        }, 0); // Ensures content loads before scrolling
                    });
                });
            }
        }

        // Example usage:
        scrollToFirstElement("tabs-signi2sec", 120);
    </script>

    <script type="text/javascript" src="{{ asset('assets/js/common.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/l3-check.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slider.js') }}"></script>
    @include ('frontend.layouts.right-menu-js')
@endpush