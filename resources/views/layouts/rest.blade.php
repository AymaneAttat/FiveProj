<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XXXX Restaurant</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('dist/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('dist/images/apple-touch-icon.png')}}">
	<script src="https://kit.fontawesome.com/0f7fbb64e2.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('dist/css/responsive.css')}}">
    <!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('dist/css/custom.css')}}">

</head>
<body>
	<!-- Start header -->
	<header class="top-navbar">
		@include('nav')
	</header>
	<!-- End header -->
	@include('notification.messages')
	@yield('content')
	
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-4590
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							ADDrmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							800, Lorem Street, MAROCCO
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-4 col-md-6">
					<h3>HORAIRES D'OUVERTURES</h3>
					<p><span class="text-color">Lundi: </span>Closed</p>
					<p><span class="text-color">Mardi-Mercredi :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Jeudi-Vendredi :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Samdi-Dimanche :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
					<p class="lead"><a href="#">+01 2000 800 9999</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Subscribe</h3>
					<p class="lead">Suivez-nous dons les réseaux sociaux</p>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2020 </p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
	<!-- ALL JS FILES -->
	<script src="{{asset('dist/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('dist/js/popper.min.js')}}"></script>
	<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{asset('dist/js/jquery.superslides.min.js')}}"></script>
	<script src="{{asset('dist/js/images-loded.min.js')}}"></script>
	<script src="{{asset('dist/js/isotope.min.js')}}"></script>
	<script src="{{asset('dist/js/baguetteBox.min.js')}}"></script>
	<script src="{{asset('dist/js/form-validator.min.js')}}"></script>
    <script src="{{asset('dist/js/contact-form-script.js')}}"></script>
	<script src="{{asset('dist/js/custom.js')}}"></script>
	<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>