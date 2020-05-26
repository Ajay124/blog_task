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

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
						
					</div><!-- /.navbar-collapse -->
				</div>   
			</nav>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="login-plane-sec">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="login-panel panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Create An Account</h3>
								</div>
								<div class="panel-body">
								@include('alerts')
								
									<form method="post" action="{{route('user_reg')}}">
									@csrf
										<fieldset id='tab1'>
											<div class="form-group">
												<input class="form-control" placeholder="E-mail" name="email" id="email" type="email" required autofocus>
											</div>
											<button type="button" id="next" class="btn btn-login">Next</button>
											<div class="register-account text-center">
												<a href="{{ url('/login/') }}" class="btn btn-call-to-act"><span class="theme-cl">Login Link Here</span></a>
											</div>
											{{--<button href="index.html" class="btn btn-login">Sign Up</button>--}}
										</fieldset>
										<fieldset id='tab2'>
											<div class="form-group">
												<input class="form-control" required placeholder="Password" id="password" name="password" type="password" value="">
											</div>
											<div class="form-group">
												<input class="form-control" required placeholder="Confirm Password" data-rule-equalTo="#password" name="password_c" type="password" value="">
											</div>
											
											<button type="button" id="prev" class="btn btn-login">Prev</button>
											<!-- Change this to a button or input when using this as a form -->
											<button id="submit" type="submit" class="btn btn-login">Sign Up</button>
										</fieldset>
									</form>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- ============================ Before Footer ================================== -->
			
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
			<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
			<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

			<script type="text/javascript">
			$('#tab2').hide();
			$('#next').click(function() {
				
				var abc = $('#email').valid();
				if(abc) {
					$('#tab1').hide();
					$('#tab2').show();
				}
			});
			$('#prev').click(function(){
				$('#tab2').hide();
				$('#tab1').show();
			});

			/*$('#submit').click(function(){
				$('#tab2').hide();
				$('#tab1').show();
			});*/
			</script>
		</div>
	</body>
</html>