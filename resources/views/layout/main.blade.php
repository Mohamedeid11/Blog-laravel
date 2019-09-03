<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('Title')</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link href="{{asset('css/app.css')}}" rel="stylesheet" media="screen">
	</head>
	<body>
		<h1 class="text-center">@yield('Bootstrappage')</h1>
        <div class="container">
            <div class="row">
            	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    @yield('content')
            	</div>
            </div>

        </div>
		<!-- Bootstrap JavaScript -->
		<script src="{{asset('js/app.js')}}"></script>
	</body>
</html>
