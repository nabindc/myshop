<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Admin Panel MyShop</title>
		<meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="{{asset('public/adminpanel/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

		<!-- imported style.css -->
		
<link rel="stylesheet" href="{{asset('public/adminpanel/vendors/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/vendors/bower_components/switchery/dist/switchery.min.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/vendors/bower_components/owl.carousel/dist/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/vendors/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/vendors/bower_components/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/dist/fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/dist/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/dist/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/dist/animate.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/dist/simple-line-icons.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/dist/linea-icon.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/dist/pe-icon-7-stroke.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/dist/pe-icon-7-styles.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/dist/material-design-iconic-font.min.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/dist/filter.css')}}">
<link rel="stylesheet" href="{{asset('public/adminpanel/dist/lightgallery.css')}}">


		
		<!-- end of imported css -->
		
		<!-- Custom CSS -->
		<link href="{{asset('public/adminpanel/dist/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper  pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
					<!-- 	<img class="brand-img mr-10" src="../img/logo.png" alt="brand"/> -->
						<span class="brand-text">MyShop</span>
					</a>
				</div>
				<!-- <div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10 txt-light-grey">Don't have an account?</span>
					<a class="inline-block btn btn-warning  btn-rounded " href="signup.html">Sign Up</a>
				</div> -->
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign in to MyShop</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										<div class="form-wrap">
											<form action="{{route('admin.login')}}" method="post">
												@csrf
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
													<input type="email" class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter email" name="email">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													<!-- <a class="capitalize-font txt-orange block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a> -->
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Enter pwd" name="password">
												</div>
												
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" required="" type="checkbox">
														<label for="checkbox_2"> Keep me logged in</label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-warning  btn-rounded">sign in</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="{{asset('public/adminpanel/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('public/adminpanel/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

		<script src="{{asset('public/adminpanel/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="{{asset('public/adminpanel/dist/js/jquery.slimscroll.js')}}"></script>
		
		<!-- Init JavaScript -->
		<script src="{{asset('public/adminpanel/dist/js/init.js')}}"></script>
	</body>
</html>
