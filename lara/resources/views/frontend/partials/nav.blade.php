<!-- <div class="wrapper">
	<div class="container-own">
 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
 		<div class="container">
	  <a style="color:red;" class="navbar-brand"  href="#">E-health System</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div  class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a  class="nav-link" href="{{route('frontend.pages.index')}}">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Services</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{route('login')}}">Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Registration</a>
	      </li>
	  		
	 
	      <div class="dropdown">
			  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
			    Others link
			  </a>

			  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			    <li><a class="dropdown-item" href="#">Action</a></li>
			    <li><a class="dropdown-item" href="#">Another action</a></li>
			    <li><a class="dropdown-item" href="#">Something else here</a></li>
			  </ul>
			</div>
			<li class="nav-item">
	        <a class="nav-link" href="#">Registration</a>
	      </li>

	    </ul>
	  </div>
	  </div>
</nav> -->



<div class="topnav">
  <a class="active" style="color:#EAEDED;" class="navbar-brand"  href="#">E-health System</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
  	  </button>
  <a class="" href="{{route('frontend.pages.index')}}">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="topnav-right">
    <a href="{{route('login')}}">Login</a>
    <a href="#about">Registration</a>
  </div>
</div>
