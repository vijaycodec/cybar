<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Cybarwind</title>
    <link rel="apple-touch-icon" sizes="144x144" href="assets2/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets2/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="assets2/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="assets2/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="assets2/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="assets2/stylesheets/custom.css">
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

<body>
    <style>
        .page-message {
            top: 0.25rem;
            width: auto;
            max-width: 39rem;
            border-radius: 1rem;
        }
    </style>
    <main class="auth">


  



        <header id="auth-header" class="auth-header"
            style="background-image: url(assets2/images/illustration/img-1.png);">
            <h1 style="margin-bottom: 75px;">CYBAR WIND </h1>
        </header><!-- form -->
        @if (session('success'))
        <div class="page-message alert alert-success" role="alert" style="display: flex;">
            <span>{{ session('success') }}</span>
            <a href="#" class="btn btn-sm btn-icon btn-warning ml-1" aria-label="Close" 
               onclick="$(this).parent().fadeOut()" style="margin-left: 15px !important;">
                <span aria-hidden="true"><i class="fa fa-times"></i></span>
            </a>
        </div>
    @endif
    
    @if (session('error'))
        <div class="page-message alert alert-danger" role="alert" style="display: flex;">
            <span>{{ session('error') }}</span>
            <a href="#" class="btn btn-sm btn-icon btn-warning ml-1" aria-label="Close" 
               onclick="$(this).parent().fadeOut()" style="margin-left: 15px !important;">
                <span aria-hidden="true"><i class="fa fa-times"></i></span>
            </a>
        </div>
    @endif
    
    @if ($errors->any())
        <div class="page-message alert alert-danger" role="alert" style="display: flex;">
            <ul style="margin: 0; padding: 0; list-style: none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <a href="#" class="btn btn-sm btn-icon btn-warning ml-1" aria-label="Close" 
               onclick="$(this).parent().fadeOut()" style="margin-left: 15px !important;">
                <span aria-hidden="true"><i class="fa fa-times"></i></span>
            </a>
        </div>
    @endif
        <form class="auth-form" action="{{ route('loginsave') }}" method="post">
            @csrf
            <!-- .form-group -->
            <div class="form-group">
                <div class="form-label-group">
                    <input type="text" id="inputUser" name="email" class="form-control cards"
                        placeholder="Username" autofocus="" required> <label for="inputUser">Username</label>
                </div>
            </div><!-- /.form-group -->
            <!-- .form-group -->
            <div class="form-group">
                <div class="form-label-group">
                    <input type="password" id="inputPassword" name="password" class="form-control cards"
                        placeholder="Password" required> <label for="inputPassword">Password</label>
                </div>
            </div><!-- /.form-group -->
            <!-- .form-group -->
            <div class="form-group">
                <input type="hidden" class="txt_csrfname" name="" value="">
                <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
            </div><!-- /.form-group -->
            <!-- recovery links -->
            <!--<div class="text-center pt-3">
          <span class="mx-2"></span> <a href="" class="link">Forgot Password?</a>
        </div>--><!-- /recovery links -->
        </form><!-- /.auth-form -->
        <!-- copyright -->
        <footer class="auth-footer"> 2024 © CYBAR WIND CRM.</footer>
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src="assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets2/vendor/popper.js/umd/popper.min.js"></script>
    <script src="assets2/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="assets2/vendor/particles.js/particles.js"></script>
    <script>
        /**
         * Keep in mind that your scripts may not always be executed after the theme is completely ready,
         * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
         */
        $(document).on('theme:init', () => {
            /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
            particlesJS.load('auth-header', 'assets2/javascript/pages/particles.json');
        })
    </script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets2/javascript/theme.js"></script> <!-- END THEME JS -->
</body>

</html>

<script>
    $('input').bind('input', function() {
        var c = this.selectionStart,
            r = /[^a-z0-9@ .]/gi,
            v = $(this).val();
        if (r.test(v)) {
            $(this).val(v.replace(r, ''));
            c--;
        }
        this.setSelectionRange(c, c);
    });


    var minLength = 5;
    var maxLength = 25;
    $(document).ready(function() {
        $('.cards').on('keydown keyup change', function() {
            var char = $(this).val();
            var charLength = $(this).val().length;
            if (charLength < minLength) {
                // $('.error').text('Length is short, minimum '+minLength+' required.');
            } else if (charLength > maxLength) {
                //$('.error').text('Length is not valid, maximum '+maxLength+' allowed.');
                $(this).val(char.substring(0, maxLength));
            } else {
                //$('.error').text('');
            }
        });
    });
</script>
