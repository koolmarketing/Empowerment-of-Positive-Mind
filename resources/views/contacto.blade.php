@extends('layouts.master')

@section('content')



<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

	<br>
	<div class="container">
		<div class="row">


			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-7">
				<!-- page-title start -->
				<!-- ================ -->
				<h2>Envianos un mensaje</h2>
				<div class="separator-2"></div>
				<!-- page-title end -->
				
				<div class="alert alert-success hidden" id="MessageSent">
					We have received your message, we will contact you very soon.
				</div>
				<div class="alert alert-danger hidden" id="MessageNotSent">
					Oops! Something went wrong please refresh the page and try again.
				</div>
				<div class="contact-form">
					<form id="contact-form" class="margin-clear" role="form">
						<div class="form-group has-feedback">
							<label for="name">Nombre*</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="">
							<i class="fa fa-user form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<label for="email">Email*</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="">
							<i class="fa fa-envelope form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<label for="subject">Asunto*</label>
							<input type="text" class="form-control" id="subject" name="subject" placeholder="">
							<i class="fa fa-navicon form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<label for="message">Mensaje*</label>
							<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
							<i class="fa fa-pencil form-control-feedback"></i>
						</div>
						<input type="submit" value="Enviar" class="submit-button btn btn-default">
					</form>
				</div>
			</div>
			<!-- main end -->

			<!-- sidebar start -->
			<!-- ================ -->
			<aside class="col-md-5 col-lg-4 col-lg-offset-1">
				<div class="sidebar">
					<div class="block clearfix">
						<h4 class="title">Contáctos</h4>
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
								<div class="separator-2"></div>
								<a href="mailto:info@empoderamientodelamentepositiva.com.co">info@empoderamientodelamentepositiva.com.co</a>

							</div>
						</div>
						<div class="sidebar">
							<div class="block clearfix">
							<h4 class="title">Siguenos en</h4>
								<div class="separator-2"></div>
								<ul class="social-links circle small margin-clear clearfix animated-effect-1">

									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>

									<li class="facebook"><a target="_blank" href="https://www.facebook.com/Empowerment-of-Positive-Mind-200014647049343/info/?tab=overview"><i class="fa fa-facebook"></i></a></li>
								</ul>
							</div>
						</div>
					</aside>
					<!-- sidebar end -->

				</div>
			</div>
		</section>
		<!-- main-container end -->


		<!-- section start -->
		<!-- ================ -->
		<section class="section pv-40 background-img-6 dark-translucent-bg" style="background-position:50% 60%;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="call-to-action text-center">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<h2 class="title">Suscribete a nuestros Boletines</h2>

									<div class="separator"></div>
									<form class="form-inline margin-clear">
										<div class="form-group has-feedback">
											<label class="sr-only" for="subscribe2">Correo Electrónico</label>
											<input type="email" class="form-control" id="subscribe2" placeholder="Email" name="subscribe2" required="">
											<i class="fa fa-envelope form-control-feedback"></i>
										</div>
										<button type="submit" class="btn btn-gray-transparent btn-animated margin-clear">Suscribirme <i class="fa fa-send"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="clearfix"></div>
		<!-- section end -->


		@stop