<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="@yield('page_description', 'Pacmedia Creatives - Business Startup Solution Agency')">
    <meta name="keywords" content="@yield('software solutions')">
    <meta name="author" content="Pacmedia Creatives">
    <title>@yield('page_title', 'Admin Authentication')</title>
    <link rel="apple-touch-icon" href="{{ asset('backend/assets/images/favicon/icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/images/favicon/icon_bg.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/pages/login.css') }}">
    @yield('page_level_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/custom/custom.css') }}">
    @yield('custom_css')
    <style type="text/css">
        form:invalid button {
            pointer-events: none;
            /*opacity: .8;*/
        }
    </style>
</head>
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
<div class="row">
    <div class="col s12">
        <div class="container">
            <div id="login-page" class="row">
                <div class="col s12 m6 l4" style="margin: auto;">
                    <div class="flex justify-center" style="width:5em; margin: auto;">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 101.5 101.5" style="enable-background:new 0 0 101.5 101.5;" xml:space="preserve">
                                <defs><style>.cls-1{fill:#1c1c1c;}</style></defs><path class="cls-1" d="M0,0V92.7H92.7V0ZM44.13,85.55,25.84,68.33V48.91H44.13Zm0-40.42H25.84V24l18.29-4.59ZM66.44,63.74,48.15,66V48.91H66.44Zm0-18.61H48.15V26.91l18.29,2.87Z"/>
                            </svg>
                    </div>
                    <div class="card border-radius-6 bg-opacity-8" style="padding-top:0 ;">
                        <div class="progress collection">
                            <div id="preloader" class="indeterminate" style="display:none; border:2px #ebebeb solid;"></div>
                        </div>
                        <div style="padding:0 2em 2em 2em">
                            @yield('content')
                        </div>
                    </div>
                    <div class="row center">Made with <span style="color:red">&#10084;</span> by Pacmedia Creatives</div>
                </div>
            </div>
        </div>
        <div class="content-overlay"></div>
    </div>
</div>

<script src="{{ asset('backend/assets/js/vendors.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins.js') }}"></script>
<script src="{{ asset('backend/assets/js/search.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/custom-script.js') }}"></script>
@yield('page_level_js')
<script type='text/javascript'>
    function ShowPreloader() {
        document.getElementById('preloader').style.display = "block";
    }
</script>
</body>
</html>
