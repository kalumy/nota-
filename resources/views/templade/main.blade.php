<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title','INICIO')</title>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>
@include('templade.nav')
<section>@yield('content')</section>
</body>
</html>