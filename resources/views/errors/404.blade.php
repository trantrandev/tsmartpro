﻿<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adminty - Premium Admin Template by Colorlib</title>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	{{-- <link rel="icon" href="favicon.ico" type="image/x-icon"> --}}
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('errors/css/style.css') }}">
</head>
<body>
	<div id="container" class="container">
		<ul id="scene" class="scene">
			<li class="layer" data-depth="1.00"><img src="{{asset('errors/images/404-01.png')}}"></li>
			<li class="layer" data-depth="0.60"><img src="{{asset('errors/images/shadows-01.png')}}"></li>
			<li class="layer" data-depth="0.20"><img src="{{asset('errors/images/monster-01.png')}}"></li>
			<li class="layer" data-depth="0.40"><img src="{{asset('errors/images/text-01.png')}}"></li>
			<li class="layer" data-depth="0.10"><img src="{{asset('errors/images/monster-eyes-01.png')}}"></li>
		</ul>
		<h1>Our Site is Underconstruction and upgrate in future</h1>		
		
		<a href="{{ route('dashboard') }}" class="btn">Back to home</a>
	</div>
	<!-- Scripts -->
	<script src="{{ asset('errors/js\parallax.js') }}"></script>
	<script>
	// Pretty simple huh?
	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);
</script>

</body>
</html>
