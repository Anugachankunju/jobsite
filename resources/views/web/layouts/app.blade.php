<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JobPortal') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
   

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slidr.css') }}">
    <link id="preset" rel="stylesheet" href="{{ asset('css/presets/preset1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/bootstrap.mins.css') }}" rel="stylesheet">
   
   
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>
    
    <script src="https://www.google.com/recaptcha/api.js"></script>
   
</head>
    <body>
        
       
   

 
            @yield('content')
      
       
        @include('include.footer')
<script src="{{ asset('js/jquery.min.js') }}" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script src="{{ asset('js/popper.min.js') }}" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script src="{{ asset('js/modernizr.min.js') }}" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script src="{{ asset('js/gmaps.min.js') }}" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script src="{{ asset('js/scrollup.min.js') }}" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script src="{{ asset('js/price-range.js') }}" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script src="{{ asset('js/jquery.countdown.js') }}" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script src="{{ asset('js/custom.js') }}" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script src="{{ asset('js/switcher.js') }}" type="555e025ee1a7dc4f78787461-text/javascript"></script>
<script type="555e025ee1a7dc4f78787461-text/javascript">
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73239902-1', 'auto');
	  ga('send', 'pageview');

    </script>
    


   </body>
</html>