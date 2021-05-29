<!DOCTYPE html>
<html>
<head>
	<title>E-Health System Home Page</title>
	<script src="https://kit.fontawesome.com/698b68e707.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	
</head>
<body>
<div class="wrapper">
	<div class="container-own">
 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
 		<div class="container">
	  <a class="navbar-brand" href="#">E-health System</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('home.index')}}">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Services</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Registration</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link disabled" href="#">Disabled</a>
	      </li>
	    </ul>
	     <div class="input-group mb-3">
		  <input type="text" class="form-control" placeholder="Search Services" aria-label="Recipient's username" aria-describedby="button-addon2">
		  <div class="input-group-append">
		  <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
  	</div>
	</div>
	  </div>
	  </div>
	</nav>
</div>

	<!--end navbar -->

 	<div class="container margin-top-20">
 		<div class="row">
 			<div class="col-md-4">
 				<ul class="list-group">
					  <li class="list-group-item">First Service</li>
					  <li class="list-group-item">Second Service</li>
					  <li class="list-group-item">Third Service</li>
				</ul>
 			</div>

 			<!--sidebar end -->

 			<!--content  -->

 			<div class="col-md-8">
 				<div class="widget">
 					<h3>Featured Products</h3>
 					<div class ="row">
 						<div class="col-md-3">
 							<div class="card " >
							  <img class="card-img-top feature-image" src="{{ asset('images/products/'. 'phone1.jpg') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">Samsung A50</h4>
							    <p class="card-text">Price:200000</p>
							    <a href="#" class="btn btn-outline-primary">Add to chart</a>
							  </div>
							</div>
 						</div>

 						<div class="col-md-3">
 							<div class="card " >
							  <img class="card-img-top feature-image" src="{{ asset('images/products/'. 'phone1.jpg') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">Samsung A50</h4>
							    <p class="card-text">Price:200000</p>
							    <a href="#" class="btn btn-outline-primary">Add to chart</a>
							  </div>
							</div>
 						</div>

 						<div class="col-md-3">
 							<div class="card" >
							  <img class="card-img-top feature-image" src="{{ asset('images/products/'. 'phone1.jpg') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">Samsung A50</h4>
							    <p class="card-text">Price:200000</p>
							    <a href="#" class="btn btn-outline-primary">Add to chart</a>
							  </div>
							</div>
 						</div>

 						<div class="col-md-3">
 							<div class="card " >
							  <img class="card-img-top feature-image" src="{{ asset('images/products/'. 'phone1.jpg') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">Samsung A50</h4>
							    <p class="card-text">Price:200000</p>
							    <a href="#" class="btn btn-outline-primary">Add to chart</a>
							  </div>
							</div>
 						</div>


 					</div>

 				</div>

 				<div class="widget">
 					
 				</div>
 			</div>
 			<!--contend end-->
 		</div>
 	</div>

 	<!--end sidebar + conten-->

   <div class="footer-design">
   		<footer >
   			<p class="text-center">&copy; 2021 all right reserved | E-business site</p>
   		</footer>
   </div>
 </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>