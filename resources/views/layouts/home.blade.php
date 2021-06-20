<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="auto">
	<head>
		<!-- Title -->
		<title>@yield('title','Page') | {{ env("APP_NAME") }}</title>
		@include("includes.head")
	</head>
	<body class="app sidebar-mini ltr">
		<!--Global-Loader-->
		<div id="global-loader">
			<img src="{{ asset("assets/images/icons/loader.svg") }}" alt="loader">
		</div>
		<div class="page">
			<div class="page-main">
                @include("includes.header")
				@include("includes.sidebar")
                <!-- app-content-->
				<div class="app-content  my-3 my-md-5">
					<div class="side-app" style="height:88vh;">
						@yield("content")
					</div>
					@include("includes.sidebarRight")
					<!--footer-->
					<footer class="footer">
						<div class="container">
							<div class="row align-items-center flex-row-reverse">
								<div class="col-lg-12 col-sm-12 text-center">
									&copy; {{ __("All rights reserved OCTOPUS HYPERVISOR") }} - {{ env("APP_VERSION") }}
								</div>
							</div>
						</div>
					</footer>
					<!-- End Footer-->
				</div>
				<!-- End app-content-->
			</div>
		</div>
		<!-- End Page -->
		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
		@include("includes.js")
	</body>
</html>
