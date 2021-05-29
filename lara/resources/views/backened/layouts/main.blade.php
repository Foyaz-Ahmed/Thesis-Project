<!DOCTYPE html>
<html>
<head>
	<title>yield('title')</title>
	@include('backened.partials.style')
</head>
<body>
<div class="wrapper">
 	@include('backened.partials.navbar')
  	@yield('content')		
  	@include('backened.partials.footer') 
	@include('backened.partials.scripts')

</body>
</html>
