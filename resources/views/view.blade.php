<!doctype html>
<html lang="en">
<head>
@include('layout.header')
@yield('style')
</head>
<body class="@yield('main-body-id')" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
@include('layout.nav')
<div class="ulockd-home-slider">
	@section('content')
	@show
	@include('layout.footer')
</div>
@include('layout.script')
@yield('script')
</body>
</html>