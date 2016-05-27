<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Empowerment of Positive Mind</title>
	<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
	<meta name="author" content="Empowerment of positive Mind">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.ico">

	<!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

	{!! HTML::style('bootstrap/css/bootstrap.css') !!}
	{!! HTML::style('fonts/font-awesome/css/font-awesome.css') !!}
	{!! HTML::style('fonts/fontello/css/fontello.css') !!}

	{!! HTML::style('plugins/magnific-popup/magnific-popup.css') !!}
	{!! HTML::style('plugins/rs-plugin/css/settings.css') !!}
	{!! HTML::style('css/animations.css') !!}
	{!! HTML::style('plugins/owl-carousel/owl.carousel.css') !!}
	{!! HTML::style('plugins/owl-carousel/owl.transitions.css') !!}
	{!! HTML::style('plugins/hover/hover-min.css') !!}

	{!! HTML::style('css/style.css') !!}
	{!! HTML::style('css/skins/purple.css') !!}
	{!! HTML::style('style-switcher/style-switcher.css') !!}

	{!! HTML::style('css/custom.css') !!}
	

</head>



<body class="no-trans front-page transparent-header  page-loader-5">

	<!-- scrollToTop -->
	<!-- ================ -->
	<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

	<!-- page wrapper start -->
	<!-- ================ -->
	<div class="page-wrapper">
		
		<!-- header-container start -->
		<div class="header-container">


			<!-- ================ --> 
			<header class="header  fixed   dark clearfix">

				<div class="container">
					<div class="row">
						<div class="col-md-3 ">
							<!-- header-left start -->
							<!-- ================ -->
							<div class="header-left clearfix">

								<!-- header dropdown buttons -->

								<!-- header dropdown buttons end-->

								<!-- logo -->
								<div id="logo" class="logo">
									<a href="#"><img src="{!! URL::to('img/logo-h.png') !!}" alt=""></a>
								</div>
							</div>
							<!-- header-left end -->

						</div>
						<div class="col-md-9">

							<!-- header-right start -->
							<!-- ================ -->
							<div class="header-right clearfix">

								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<!-- main-menu -->
												<ul class="nav navbar-nav pull-right">
													<li class="active">
														<a href="{!! URL::to('/') !!}"><i class="icon-home"></i> Inicio</a>		
													</li>													
													<li>
														<a href="{!! URL::to('nosotros') !!}"><i class="fa fa-cogs"></i> Quienes somos</a>
													</li>								
													<li class="dropdown ">
														<a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-briefcase"></i> Servicios</a>
														<ul class="dropdown-menu">
															<li ><a href="{!! URL::to("autorretrato_personalidad") !!}">Autorretrato de la personalidad</a></li>
															<li><a href="{!! URL::to("valores") !!}">Valores</a></li>
															<li><a href="{!! URL::to("competencias_lider") !!}">Competencias del Lider</a></li>
															<li><a href="{!! URL::to("clima_laboral") !!}">Clima Laboral</a></li>
															<li><a href="{!! URL::to("seleccion_personal") !!}">Selección de Personal</a></li>
															<li><a href="{!! URL::to("salario_emocional") !!}">Salario Emocional</a></li>
															<li><a href="{!! URL::to("calidad_vida") !!}">Calidad de Vida</a></li>	
															<!-- <li ><a href="{!! URL::to("consultoria") !!}">Consultoría Empresarial y Empoderamiento</a></li>	 -->
														</ul>
													</li>
													<li>
														<a href="{!! URL::to('contacto') !!}" ><i class=" icon-mail"></i> Contactos</a>			
													</li>												
												</ul>
												<!-- main-menu end -->
												
												
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->
							</div>
							<!-- header-right end -->

						</div>
					</div>
				</div>

			</header>
			<!-- header end -->
		</div>
		<!-- header-container end -->
		
		<!-- banner start -->
		<!-- ================ -->
		<div class="banner clearfix">


			@yield('content')




			<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
			<footer id="footer" class="clearfix dark">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="footer-inner">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<div class="footer-content text-center padding-ver-clear">
										<div class="logo-footer"><img class="center-block" src="img/logo-h.png" alt=""></div>

										
										<span>
											<img src="img/United States.png" width="20" style="
											display: inline-block;">
											<a href="tel:+561  6673617" class="link-dark">
												<i class="text-default fa fa-phone pl-10 pr-5">												
												</i>US +561  667 3617</a>
											</span>
											<br>
											
											
											<span>
												<a href="tel:+57 3165343311" class="link-dark">
													<img src="img/Colombia.png" width="20" style="display: inline-block;">
													<i class="text-default fa fa-phone pl-10 pr-5">
													</i>COL +57 316 5343311</a>
												</span>
												<br>

												<i class="icon-mail"></i>info@empoderamientodelamentepositiva.com.co

												<ul class="social-links circle animated-effect-1 margin-clear">
													<li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
													<li class="linkedin"><a target="_blank" href="http://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
												</ul>
												<div class="separator"></div>
												<p class="text-center margin-clear">Copyright © 2016 Empowerment of Positive Mind by <a target="_blank" href="http://htmlcoder.me/">Koolmarketing</a>. All Rights Reserved</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- .footer end -->

					</footer>
					<!-- footer end -->

				</div>
				<!-- page-wrapper end -->

				<!-- JavaScript files placed at the end of the document so the pages load faster -->
				<!-- ================================================== -->
				<!-- Jquery and Bootstap core js files -->

				<script type="text/javascript" src="plugins/jquery.min.js"></script>
				<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
				<!-- Modernizr javascript -->
				<script type="text/javascript" src="plugins/modernizr.js"></script>
				<!-- jQuery Revolution Slider  -->
				<script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
				<script type="text/javascript" src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
				<!-- Isotope javascript -->
				<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
				<!-- Magnific Popup javascript -->
				<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
				<!-- Appear javascript -->
				<script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>
				<!-- Count To javascript -->
				<script type="text/javascript" src="plugins/jquery.countTo.js"></script>
				<!-- Parallax javascript -->
				<script src="plugins/jquery.parallax-1.1.3.js"></script>
				<!-- Contact form -->
				<script src="plugins/jquery.validate.js"></script>
				<!-- Google Maps javascript -->
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;signed_in=true"></script>
				<script type="text/javascript" src="js/google.map.config.js"></script>
				<!-- Background Video -->
				<script src="plugins/vide/jquery.vide.js"></script>
				<!-- Owl carousel javascript -->
				<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.js"></script>
				<!-- Pace javascript -->
				<script type="text/javascript" src="plugins/pace/pace.min.js"></script>
				<!-- SmoothScroll javascript -->
				<script type="text/javascript" src="plugins/jquery.browser.js"></script>
				<script type="text/javascript" src="plugins/SmoothScroll.js"></script>
				<!-- Initialization of Plugins -->
				<script type="text/javascript" src="js/template.js"></script>
				<!-- Custom Scripts -->
				<script type="text/javascript" src="js/custom.js"></script>
				<!-- Color Switcher (Remove these lines) -->
				<script type="text/javascript" src="style-switcher/style-switcher.js"></script>

				<!-- Color Switcher End -->
				<!-- Color Switcher (Remove these lines) -->

			</body>

			</html>
