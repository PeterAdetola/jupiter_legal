<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jupiter Legal Services</title>

    <meta name="keywords" content="Jupiter Legal Services" />
    <meta name="description" content="Jupiter Legal Services - Real Estate & Business Law Firm">
    <meta name="author" content="thepacmedia.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png" type="image/x-icon') }}" />
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('css/demos/demo-accounting-1.css') }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('css/skins/skin-accounting-1.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>
<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'pulse'}">
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="wrapper-pulse">
            <div class="cssload-pulse-loader"></div>
        </div>
    </div>
</div>
<div class="body">
    @include('partials.navbar')
    <div role="main" class="main px-3 px-lg-5">

        @yield('content')

        {{--PAGE CONTENT ENDS HERE--}}

        @include('partials.footer')

        @if(session('success'))
            @include('partials.feedback')
        @endif

    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasMain" aria-labelledby="offcanvasMain">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="mb-4" id="offCanvasLogo"></div>
            <nav class="offcanvas-nav w-100" id="offCanvasNav"></nav>
        </div>
    </div>

    <!-- Vendor -->
    <script src="{{ asset('js/vendor/plugins/js/plugins.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('js/theme.js') }}"></script>

    <!-- Demo -->
    <script src="{{ asset('js/demos/demo-accounting-1.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('js/theme.init.js') }}"></script>




</div>
@if (config('cookie-consent.enabled') && ! request()->hasCookie(config('cookie-consent.cookie_name')))
    @include('vendor.cookie-consent.dialogContents')
@endif
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toast = document.getElementById("toast");
        if (toast) {
            // Optional: remove element from DOM after fadeout animation
            setTimeout(() => {
                toast.remove(); // or toast.style.display = "none";
            }, 5000);
        }
    });
</script>


</body>
</html>
