<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Job Utsob 2022</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="{{asset('frontend/assets/images/favicon.ico')}}" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend/assets/images/apple-icon-114x114.png')}}">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend/assets/images/apple-icon-72x72.png')}}">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="{{asset('frontend/assets/images/apple-icon-57x57.png')}}">
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/libraries/lib.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/libraries/Stroke-Gap-Icon/stroke-gap-icon.css')}}">
	
	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/navigation-menu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/libraries/lightslider-master/lightslider.css')}}">
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/shortcode.css')}}">
	<!--[if lt IE 9]>		
		<script src="js/html5/respond.min.js"></script>

    <![endif]-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-82MK1FNXH0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-82MK1FNXH0');
</script>

	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    <!-- Loader -->
    @include('frontend.layouts.loader')
    <!-- Loader -->
    
	<!-- Header -->
	@include('frontend.layouts.header')
    <!-- Header /- -->	
	
	<!-- Slider Section -->
    
	<!-- Slider Section /- -->
	
	
	@yield('content')
	
	
	<!-- Footer Main -->
    @include('frontend.layouts.footer')
	<!-- Footer Main /- -->
	
	<!-- JQuery v1.11.3 -->
	<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
	
	<!-- Library - Js -->
	<script src="{{asset('frontend/assets/libraries/lib.js')}}"></script><!-- Bootstrap JS File v3.3.5 -->
	<script src="{{asset('frontend/assets/libraries/jquery.countdown.min.js')}}"></script>
	
	<script src="{{asset('frontend/assets/libraries/lightslider-master/lightslider.js')}}"></script>
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn3Z6i1AYolP3Y2SGis5qhbhRwmxxo1wU"></script>
	<script src="{{asset('frontend/assets/js/functions.js')}}"></script>
	<script src="{{asset('frontend/assets/js/main_one.js')}}"></script>
	<script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
</body>
</html>