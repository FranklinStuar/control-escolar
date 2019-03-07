<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{url('images/favicon.png')}}" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>@yield('title')</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="{{url('admin/js/html5shiv.min.js')}}"></script>
	<script src="{{url('admin/js/respond.min.js')}}"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{url('admin/css/assets.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('admin/vendors/calendar/fullcalendar.css')}}">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{url('admin/css/typography.css')}}">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{url('admin/css/shortcodes/shortcodes.css')}}">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{url('admin/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('admin/css/dashboard.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{url('admin/css/color/color-1.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
    
    @include('layouts.laravel-csrf')
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar" data-url="{{url('/')}}">
	
	<!-- header start -->
        @include('layouts.header')
    <!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="#"><img alt="" src="{{url('images/logo.png')}}" width="122" height="27"></a>
				<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			@include('layouts.sidebar')
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">@yield('title','IEP')</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Inicio</a></li>
					<li>@yield('title','IEP')</li>
				</ul>
			</div>	
			@yield('content')
		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<script src="{{url('admin/js/jquery.min.js')}}"></script>
<script src="{{url('admin/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{url('admin/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('admin/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{url('admin/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{url('admin/vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{url('admin/vendors/counter/waypoints-min.js')}}"></script>
<script src="{{url('admin/vendors/counter/counterup.min.js')}}"></script>
<script src="{{url('admin/vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{url('admin/vendors/masonry/masonry.js')}}"></script>
<script src="{{url('admin/vendors/masonry/filter.js')}}"></script>
<script src="{{url('admin/vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src='{{url('admin/vendors/scroll/scrollbar.min.js')}}'></script>
<script src="{{url('admin/js/functions.js')}}"></script>
<script src="{{url('admin/vendors/chart/chart.min.js')}}"></script>
<script src="{{url('admin/js/admin.js')}}"></script>
<script src='{{url('admin/vendors/switcher/switcher.js')}}'></script>
@yield('script')
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>







