<!doctype html>
<html lang="en">
<head>
	<!-- Basic Page Needs
	================================================== -->
	<title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="{{ url('/public/') }}/assets/plugins/css/plugins.css">
    <link href="{{ url('/public/') }}/assets/css/style.css" rel="stylesheet">
	
</head>

	<body>
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">

				<div class="container">            
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
						
					</div><!-- /.navbar-collapse -->
				</div>   
			</nav>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(http://via.placeholder.com/1920x850);">
				<div class="container">
					<h1>Login</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Tab Section Start -->
			<section class="tab-sec gray">
				<div class="container">
					<div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
						<div class="new-logwrap">
						
							<form method="post" action="{{route('user_login')}}">
							@csrf
							<div class="form-group">
								<label>Email</label>
								<div class="input-with-icon">
									<input name="email" type="email" class="form-control" placeholder="Enter Your Email">
									<i class="theme-cl ti-email"></i>
								</div>
							</div>
							
							<div class="form-group">
								<label>Password</label>
								<div class="input-with-icon">
									<input type="password" name="password" class="form-control" placeholder="Enter Your Password">
									<i class="theme-cl ti-lock"></i>
								</div>
							</div>
							@include('alerts')
							
							
							<div class="form-groups">
								<button type="submit" class="btn btn-primary theme-bg full-width">Login</button>
							</div>
							</form>
							<div class="register-account text-center">
								Not registered <a href="{{ url('/signup/') }}" class="btn btn-call-to-act"><span class="theme-cl">SignUp Link Here</span></a>
							</div>
							
							
						</div>
					</div>
				</div>
			</section>
			<!-- Tab section End -->
			
			
			
			
			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer">
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-6 col-md-6">
								<p class="mb-0">© 2019 Job Stock. Designd By <a href="https://themezhub.com">Themez Hub</a> All Rights Reserved</p>
							</div>
							
							<div class="col-lg-6 col-md-6 text-right">
								<ul class="footer-bottom-social">
									<li><a href="#"><i class="ti-facebook"></i></a></li>
									<li><a href="#"><i class="ti-twitter"></i></a></li>
									<li><a href="#"><i class="ti-instagram"></i></a></li>
									<li><a href="#"><i class="ti-linkedin"></i></a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			
			<!-- Scripts
			================================================== -->
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/jquery.min.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/viewportchecker.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/bootsnav.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/select2.min.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/wysihtml5-0.3.0.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/bootstrap-wysihtml5.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/datedropper.min.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/dropzone.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/loader.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/owl.carousel.min.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/slick.min.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/gmap3.min.js"></script>
			<script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
			<!-- Custom Js -->
			<script src="{{ url('/public/') }}/assets/js/custom.js"></script><script type="text/javascript" src="{{ url('/public/') }}/assets/plugins/js/counterup.min.js"></script>
			
		</div>
	</body>
</html>