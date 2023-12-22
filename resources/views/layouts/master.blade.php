<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title') | {{--@lang('public.clarkwell')--}} We Venture</title>

    <meta name="author" content="themsflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/bootstrap.min.css') }}">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/style.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/colors/color1.css') }}" id="colors">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/responsive.css') }}">

    <!-- Favicon and touch icons  -->
    <link rel="apple-touch-icon" href="{{ asset('img/WV-apple-icon-01.jpg') }}">
    <link href="{{ asset('assets/icon/wv icon-01.png') }}" rel="shortcut icon">

</head>
<body>
<div class="boxed">
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    @include('layouts.inc.header')
    @include('layouts.inc.navbar')

    @yield('content')

    @include('layouts.inc.footer')

    <div class="button-go-top">
        <a href="#" title="" class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div><!-- /.button-go-top -->

</div> <!-- /.boxed -->

<!-- Javascript -->
<script type="text/javascript" src="{{ asset('assets/javascript/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/javascript/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/javascript/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/javascript/jquery.flexslider-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/javascript/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/javascript/jquery.easing.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/javascript/jquery-countTo.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/javascript/jquery.cookie.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/javascript/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/javascript/main.js') }}"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/slider_v1.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

@yield('script')

</body>
</html>
