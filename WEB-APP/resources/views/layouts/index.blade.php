<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Favicon -->
		<link rel="icon" href="{{asset("assets/images/brand/favicon.png") }}" type="image/icon"/>
		<!-- Title -->
		<title>@yield('title','Page') | {{ env("APP_NAME") }}</title>
		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{asset("assets/plugins/bootstrap/css/bootstrap.min.css") }}">
		<!-- Dashboard css -->
		<link href="{{asset("assets/css-dark/style.css") }}" rel="stylesheet" />
		<!-- Custom scroll bar css-->
		<link href="{{asset("assets/plugins/scroll-bar/jquery.mCustomScrollbar.css") }}" rel="stylesheet" />
		<!-- Sidemenu css -->
		<link href="{{asset("assets/plugins/toggle-sidebar/dark-sidemenu.css") }}" rel="stylesheet" />
		<!--Daterangepicker css-->
		<link href="{{asset("assets/plugins/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet" />
		<!-- Sidebar Accordions css -->
		<link href="{{asset("assets/plugins/accordion1/css/dark-easy-responsive-tabs.css") }}" rel="stylesheet">
		<!-- Rightsidebar css -->
		<link href="{{asset("assets/plugins/sidebar/dark-sidebar.css") }}" rel="stylesheet">
		<!---Font icons css-->
		<link href="{{asset("assets/plugins/iconfonts/plugin.css") }}" rel="stylesheet" />
		<link href="{{asset("assets/plugins/iconfonts/icons.css") }}" rel="stylesheet" />
		<link  href="{{asset("assets/fonts/fonts/font-awesome.min.css") }}" rel="stylesheet">
        <style>
            .bg-account .page:before, .bg-account .page:after{
                background: none!important;
            }
            body{
                overflow-y: hidden
            }
        </style>

	</head>
	<body class="bg-account">
	    <!-- page -->
		<div class="page">
			<!-- page-content -->
			<div class="page-content">
				@yield("content")
			</div>
			<!-- page-content end -->
		</div>
		<!-- page End-->
		<!-- Jquery js-->
		<script src="{{asset("assets/js-dark/vendors/jquery-3.2.1.min.js") }}"></script>
		<!--Bootstrap.min js-->
		<script src="{{asset("assets/plugins/bootstrap/popper.min.js") }}"></script>
		<script src="{{asset("assets/plugins/bootstrap/js/bootstrap.min.js") }}"></script>
		<!--Jquery Sparkline js-->
		<script src="{{asset("assets/js-dark/vendors/jquery.sparkline.min.js") }}"></script>
		<!-- Chart Circle js-->
		<script src="{{asset("assets/js-dark/vendors/circle-progress.min.js") }}"></script>
		<!-- Star Rating js-->
		<script src="{{asset("assets/plugins/rating/jquery.rating-stars.js") }}"></script>
		<!-- Sidebar Accordions js -->
		<script src="{{asset("assets/plugins/accordion1/js/easyResponsiveTabs.js") }}"></script>
		<!--Moment js-->
		<script src="{{asset("assets/plugins/moment/moment.min.js") }}"></script>
		<!-- Daterangepicker js-->
		<script src="{{asset("assets/plugins/bootstrap-daterangepicker/daterangepicker.js") }}"></script>
		<!-- Custom scroll bar js-->
		<script src="{{asset("assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js") }}"></script>
		<!-- Custom js-->
		<script src="{{asset("assets/js-dark/custom.js") }}"></script>
	</body>
</html>