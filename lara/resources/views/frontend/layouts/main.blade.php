<!DOCTYPE html>
<html>
<head>
	<title>E-Health Sytem</title>
	@include('frontend.partials.style')
</head>
<body>
<div class="wrapper">
 	@include('frontend.partials.nav')
 	<!-- @include('frontend.partials.sidebar') -->
  	@yield('content')		
  	@include('frontend.partials.footer') 
	@include('frontend.partials.scripts')

</body>
</html>
