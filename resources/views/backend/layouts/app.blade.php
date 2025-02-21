<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>CybarWind</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/animation.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/bootstrap.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/bootstrap-select.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css ') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/icon/style.css ') }}">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico ') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('backend/assets/images/favicon3.png ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/sweetalert.min.css ') }}">
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/custom.css ') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- Add Summernote CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css">


    @yield('styles')

    <style>
        .toast {
            font-size: 15px !important;
            /* Smaller font size */
            max-width: 450px !important;
            /* Set a max width for the message box */
        }
    </style>

</head>

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">

                {{-- <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div> --}}

                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="index.html" id="site-logo-inner">
                            <img class="" id="logo_header" alt=""
                                src="{{ asset('backend/assets/images/logo/cybarwind-logo.png') }}" data-light="images/logo/logo.png"
                                data-dark="images/logo/logo.png">
            
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>
                    </div>
                    <div class="center">
                        <div class="center-item">
                            <div class="center-heading">Main Home</div>
                            <ul class="menu-list">
                                <li class="menu-item">
                                    <a href="{{ route('admin.dashboard') }}" class="">
                                        <div class="icon"><i class="icon-grid"></i></div>
                                        <div class="text">Dashboard</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="center-item">
                            <ul class="menu-list">
            
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div><img src="{{ asset('backend\assets\icon\user.png') }}" alt="Example Image"
                                                style="height:18px"></div>
                                        <div class="text">Categories</div>
                                    </a>
            
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('resources-category.list') }}" class="">
                                                <div class="text"> Categories List</div>
                                            </a>
                                        </li>
            
            
                                        <li class="sub-menu-item">
                                            <a href="{{ route('resources-category.create') }}" class="">
                                                <div class="text">Add Categories</div>
                                            </a>
                                        </li>
            
                                    </ul>
                                </li>
            
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div><img src="{{ asset('backend\assets\icon\user.png') }}" alt="Example Image"
                                                style="height:18px"></div>
                                        <div class="text">Resources</div>
                                    </a>
            
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('resources.list') }}" class="">
                                                <div class="text"> Resources List</div>
                                            </a>
                                        </li>
            
            
                                        <li class="sub-menu-item">
                                            <a href="{{ route('resources.create') }}" class="">
                                                <div class="text">Add Resources</div>
                                            </a>
                                        </li>
            
                                    </ul>
                                </li>

                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div><img src="{{ asset('backend\assets\icon\user.png') }}" alt="Example Image"
                                                style="height:18px"></div>
                                        <div class="text">Blog</div>
                                    </a>
            
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('menublog.list') }}" class="">
                                                <div class="text"> Blog List</div>
                                            </a>
                                        </li>
            
            
                                        <li class="sub-menu-item">
                                            <a href="{{ route('menublog.create') }}" class="">
                                                <div class="text">Add Blog</div>
                                            </a>
                                        </li>
            
                                    </ul>
                                </li>

                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div><img src="{{ asset('backend\assets\icon\user.png') }}" alt="Example Image"
                                                style="height:18px"></div>
                                        <div class="text">Course Categories</div>
                                    </a>
            
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('course-category.list') }}" class="">
                                                <div class="text"> Course Categories List</div>
                                            </a>
                                        </li>
            
                                        <li class="sub-menu-item">
                                            <a href="{{ route('course-category.create') }}" class="">
                                                <div class="text">Course Categories </div>
                                            </a>
                                        </li>
            
                                    </ul>
                                </li>

                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div><img src="{{ asset('backend\assets\icon\user.png') }}" alt="Example Image"
                                                style="height:18px"></div>
                                        <div class="text"> Sub Category</div>
                                    </a>
            
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('sub-category.list') }}" class="">
                                                <div class="text"> Sub Categories List</div>
                                            </a>
                                        </li>
            
                                        <li class="sub-menu-item">
                                            {{-- <a href="{{ route('our-services.create, ['pageId' => 1]') }}" class="">
                                                <div class="text">Our Services </div>
                                            </a> --}}
                                            <a href="{{ route('sub-category.create') }}" class=""> <div class="text">Add Sub Category </div></a>

                                        </li>
            
                                    </ul>
                                </li>

                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div><img src="{{ asset('backend\assets\icon\user.png') }}" alt="Example Image"
                                                style="height:18px"></div>
                                        <div class="text">Our Services</div>
                                    </a>
            
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('our-services.list') }}" class="">
                                                <div class="text"> Our Services List</div>
                                            </a>
                                        </li>
            
                                        <li class="sub-menu-item">
                                            {{-- <a href="{{ route('our-services.create, ['pageId' => 1]') }}" class="">
                                                <div class="text">Our Services </div>
                                            </a> --}}
                                            <a href="{{ route('our-services.create', ['pageId' => 1]) }}" class=""> <div class="text">Our Services </div></a>

                                        </li>
            
                                    </ul>
                                </li>

                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div><img src="{{ asset('backend\assets\icon\user.png') }}" alt="Example Image"
                                                style="height:18px"></div>
                                        <div class="text">Corporate Training</div>
                                    </a>
            
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('corporate-training.list') }}" class="">
                                                <div class="text"> Corporate Training List</div>
                                            </a>
                                        </li>
            
                                        <li class="sub-menu-item">
                                            {{-- <a href="{{ route('our-services.create, ['pageId' => 1]') }}" class="">
                                                <div class="text">Our Services </div>
                                            </a> --}}
                                            <a href="{{ route('corporate-training.create', ['pageId' => 2]) }}" class=""> <div class="text">Add Corporate Training </div></a>

                                        </li>
            
                                    </ul>
                                </li>

                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div><img src="{{ asset('backend\assets\icon\user.png') }}" alt="Example Image"
                                                style="height:18px"></div>
                                        <div class="text">L3 Category</div>
                                    </a>
            
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('l3-category.list') }}" class="">
                                                <div class="text"> L3 Categories List</div>
                                            </a>
                                        </li>

                                        <li class="sub-menu-item">
                                            {{-- <a href="{{ route('our-services.create, ['pageId' => 1]') }}" class="">
                                                <div class="text">Our Services </div>
                                            </a> --}}
                                            <a href="{{ route('l3-category.create') }}" class=""> <div class="text">Add L3 Category </div></a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div><img src="{{ asset('backend\assets\icon\user.png') }}" alt="Example Image"
                                                style="height:18px"></div>
                                        <div class="text">L3 Content</div>
                                    </a>
            
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('l3-content.list') }}" class="">
                                                <div class="text"> L3 Content List</div>
                                            </a>
                                        </li>

                                        <li class="sub-menu-item">
                                            {{-- <a href="{{ route('our-services.create, ['pageId' => 1]') }}" class="">
                                                <div class="text">Our Services </div>
                                            </a> --}}
                                            <a href="{{ route('l3-content.create') }}" class=""> <div class="text">Add L3 Content </div></a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item has-children">
                                    <a href="{{ route('resources-comment.list') }}" class="menu-item-button">
                                        <div><img src="{{ asset('backend\assets\icon\user.png') }}" alt="" style="height:18px">
                                        </div>
                                        <div class="text">Comments</div>
                                    </a>
            
                                </li>
            
                                {{-- <li class="menu-item">
                                <a href="users.html" class="">
                                    <div class="icon"><i class="icon-user"></i></div>
                                    <div class="text">User</div>
                                </a>
                            </li> --}}
            
                                <li class="menu-item">
                                    <a href="settings.html" class="">
                                        <div class="icon"><i class="icon-settings"></i></div>
                                        <div class="text">Settings</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section-content-right">
                    {{-- dashboard header div --}}
                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">
                                <a href="index-2.html">
                                    <img class="" id="logo_header_mobile" alt=""
                                        src="{{ asset('backend/assets/images/logo/logo.png') }}"
                                        data-light="images/logo/logo.png" data-dark="images/logo/logo.png"
                                        data-width="154px" data-height="52px" data-retina="images/logo/logo.png">
                                </a>
                                <div class="button-show-hide">
                                    <i class="icon-menu-left"></i>
                                </div>
                            </div>
                            <div class="header-grid">

                                <div class="popup-wrap message type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-bell"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content"
                                            aria-labelledby="dropdownMenuButton2">
                                            <li>
                                                <h6>Notifications</h6>
                                                {{-- </li>
                                            <li>
                                                <div class="message-item item-1">
                                                    <div class="image">
                                                        <i class="icon-noti-1"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Discount available</div>
                                                        <div class="text-tiny">Morbi sapien massa, ultricies at rhoncus
                                                            at, ullamcorper nec diam</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-2">
                                                    <div class="image">
                                                        <i class="icon-noti-2"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Account has been verified</div>
                                                        <div class="text-tiny">Mauris libero ex, iaculis vitae rhoncus
                                                            et</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-3">
                                                    <div class="image">
                                                        <i class="icon-noti-3"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order shipped successfully</div>
                                                        <div class="text-tiny">Integer aliquam eros nec sollicitudin
                                                            sollicitudin</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-4">
                                                    <div class="image">
                                                        <i class="icon-noti-4"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order pending: <span>ID 305830</span>
                                                        </div>
                                                        <div class="text-tiny">Ultricies at rhoncus at ullamcorper
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all</a></li> --}}
                                        </ul>
                                    </div>
                                </div>




                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="image">
                                                    <img src="{{ asset('backend/assets/images/avatar/user-1.png') }}"
                                                        alt="">
                                                </span>
                                                {{-- <span class="flex flex-column"> --}}
                                                {{-- @if (Auth::guard('admin')->check()) --}}
                                                <!-- Check if the user is logged in -->
                                                <span class="body-title mb-2">
                                                    {{-- {{ Auth::guard('admin')->user()->first_name . ' ' . Auth::guard('admin')->user()->last_name }} --}}
                                                </span>
                                                {{-- <span --}}
                                                {{-- class="text-tiny">{{ Auth::guard('admin')->user()->role == 1 ? 'Super Admin' : 'Admin' }}</span> --}}
                                                {{-- @else --}}
                                                {{-- <p>You are not logged in.</p> --}}
                                                {{-- @endif --}}
                                                {{-- </span> --}}
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content"
                                            aria-labelledby="dropdownMenuButton3">
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <div class="body-title-2">Account</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-mail"></i>
                                                    </div>
                                                    <div class="body-title-2">Inbox</div>
                                                    <div class="number">27</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-file-text"></i>
                                                    </div>
                                                    <div class="body-title-2">Taskboard</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-headphones"></i>
                                                    </div>
                                                    <div class="body-title-2">Support</div>
                                                </a>
                                            </li>
                                            <li>
                                                 <a href="{{ route('admin.logout') }}" class="user-item">
                                                <div class="icon">
                                                    <i class="icon-log-out"></i>
                                                </div>
                                                <div class="body-title-2">Log out</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- main content  div --}}
                    <div class="main-content">
                        <!-- Success Message -->
                        @if (session('success'))
                            <div class="alert alert-success" style="font-size: 20px">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Error Message -->
                        @if ($errors->any())
                            <div class="alert alert-danger" style="font-size: 20px">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @yield('content')

                        <div class="bottom-page bottom-margin">
                            <div class="body-text">Copyright © 2025 Cybarwind</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- <script src="{{asset('backend/assets/js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap-select.min.js') }}"></script>
    {{-- <script src="{{asset('backend/assets/js/sweetalert.min.js') }}"></script>  --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
    <script src="{{ asset('backend/assets/js/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Add Summernote JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
    <!-- Summernote CSS -->

<!-- jQuery (Required for Summernote) -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('scripts')

    <script>
        toastr.options = {
            //   "closeButton": true,         // Display close button on the notification
            "debug": false,
            "newestOnTop": true, // Show newest notifications at the top
            "progressBar": true, // Show progress bar
            "positionClass": "toast-top-center", // Position where Toastr appears (top-r"preventDuplicates": true,   // Prevent duplicate notifications

        };

        // Check if there's a toastr message in the session and show it
    </script>

    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @elseif (session('error'))
            toastr.error("{{ session('error') }}");
        @elseif (session('info'))
            toastr.info("{{ session('info') }}");
        @elseif (session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    {{-- string to slug convert comman function for all pages  --}}
    <script>
        $("input[name='name']").on("change", function() {
            $("input[name='slug']").val(StringToSlug($(this).val()));
        });

        function StringToSlug(Text) {
            return Text.toLowerCase()
                .replace(/[^\w ]+/g, "")
                .replace(/ +/g, "-");
        }
    </script>
    {{-- script for image drag and drop and image preview while image uploads --}}
    <script>
        $(function() {
            $("#myFile").on("change", function(e) {
                const photoInp = $("#myFile");
                const [file] = this.files;
                if (file) {
                    $("#imgpreview img").attr('src', URL.createObjectURL(file));
                    $("#imgpreview").show();
                    $("#deleteImage").show(); // Show the delete button
                }
            });

            // Handle delete button click
            $("#deleteImage").on("click", function() {
                $("#imgpreview").hide(); // Hide the image preview
                $("#myFile").val(''); // Clear the file input
                $("#deleteImage").hide(); // Hide the delete button
            });
        });
    </script>


    <!-- Initialize Summernote -->
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200, // Set height for the editor
                minHeight: 100, // Minimum height
                maxHeight: 500, // Maximum height
                width: '100%', // Set width to 100% of the container
                toolbar: [
                    ['style', ['style']], // Enables Heading (H1, H2, etc.)
                    ['font', ['bold', 'italic', 'underline', 'clear']], // Font styles
                    ['fontsize', ['fontsize']], // Font size dropdown
                    ['fontname', ['fontname']], // Font family selection
                    ['color', ['color']], // Text color & background color
                    ['para', ['ul', 'ol', 'paragraph']], // Lists and paragraph alignment
                    ['table', ['table']], // Table insert option
                    ['insert', ['link', 'picture', 'video']], // Insert options
                    ['view', ['fullscreen', 'codeview', 'help']] // Fullscreen, Code view, Help
                ],
                styleTags: [
                    'p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' // Enables headings in dropdown
                ],
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather'], // Custom fonts

            });
        });
    </script>


</body>

</html>
