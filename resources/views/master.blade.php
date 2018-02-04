<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head lang="sk">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= isset( $page_title ) ? "$page_title / " : '' ?>this is a blog</title>

	<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">-->
	<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap-theme.min.css">-->
	<link rel="stylesheet" href="{{asset('css/bootstrap-tagsinput.css')}}">
	<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/themes/github.css">-->
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">

	<script>
		var baseURL = 'http://localhost:8000';
	</script>
</head>
<body class="{{ 'home' }}">

<header class="container">
{{--{{ flash()->display() }}--}}
<!--navigation all that-->

</header>

<main>
	<div class="container">

		@yield('content')

	</div>
</main>

<footer>
	<!--copyright and other crap-->
</footer>

<script src="{{asset( 'js/jquery.js' )}}"></script>
<script src="{{asset( 'js/plugins.js' )}}"></script>
<script src="{{asset( 'js/app_my.js' )}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
<script src="{{asset('js/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('js/bootstrap-tagsinput-angular.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/rainbow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/generic.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/html.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/javascript.js"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/app_bs3.js')}}"></script>

</body>
</html>
