<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Splash Screen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/framework.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/washington.css')}}">
    <script src="{{asset('js/webfont.js')}}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Montserrat:400,700"]
            }
        });
    </script>
    <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logoStandford32.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('images/logoStandford32.ico')}}">

    <link href="{{asset('css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<section class="w-section mobile-wrapper">
    <!-- Content Here-->
    @yield('content')
</section>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/framework.js')}}"></script>
<!--[if lte IE 9]><script src="{{asset('js/placeholders.min.js')}}"></script><![endif]-->

</body>
</html>