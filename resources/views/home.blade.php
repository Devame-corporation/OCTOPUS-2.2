<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{env('APP_NAME')}}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}"></script>

        <!-- themekit admin template asstes -->
        <link rel="stylesheet" href="{{ asset('all.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
		<div class="container">
		    <div class="row justify-content-center">
		        <div class="col-md-12 m-5 text-center">
		        	<a href="http://rakibul.dev">
		            	<img height="60" src="{{ asset('img/horizontal-logo.png') }}">
		            </a>
		        </div>
		        <div class="col-md-12 m-5 mt-0 text-center">
		            <h6>Welcome to <span class="text-primary">{{env('APP_NAME')}}</span></h6>
		            <h1 class="m-5">This is your homepage!</h1>
		            <a href="{{url('login')}}" class="btn btn-success">Go to Admin</a>
		            <a href="https://www.postman.com/Amineelkhal/workspace/octopus/overview" target="_blank" class="btn btn-primary">API Endpoint</a>
		            <br>
		            <br>
		            <br>
		            <hr>
		            <p>Need more help ?</p>
                    ATORANTIS GROUP<br>
		            Email: contact@atorantisgroup.com <br>
		            Website : <a href="http://atorantisgroup.com">www.atorantisgroup.com</a>  <br>
		        </div>

		        </div>
		    </div>
		</div>
		<script src="{{ asset('all.js') }}"></script>

    </body>
</html>

