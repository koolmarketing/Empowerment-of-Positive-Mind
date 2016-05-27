@extends('layouts.master')

@section('content')


<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('images/page-about-banner-1.jpg'); background-position: 50% 27%;">

	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center col-md-offset-2 pv-20 text-center">
				<h3 class="title logo-font object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><center><img src="img/logo-h-w.png"></center></h3>

				<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
				<h2 style="font-family: times" class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Selección de Personal</h2>			
			</div>
		</div>
	</div>
</div>
<!-- banner end -->


<!-- main-container start -->
<!-- ================ -->
<section class="main-container padding-bottom-clear">
	<div class="container">
		<div class="row">
			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-12">
				<div class="separator-2"></div>
				<div class="row">
					<div class="col-md-4">
						<img src="img/seleccionpersonal.jpg" class="img-responsive img-thumbnail">
					</div>
					<div class="col-md-8">
						<h4>Conducir procesos de reclutamiento y selección de personal por competencias</h4>
							<ol>
								<li>Operativo</li>
								<li>Profesional </li>
								<li>Prueba psicotécnica Test - <a href="{!! URL::to("autorretrato_personalidad") !!}">Autorretrato de la personalidad</a></li>
							</ol>									
						</div>						
					</div>
				</div>
			</div>				
			<br>
		</div>
	</div>

	<br>




	@stop