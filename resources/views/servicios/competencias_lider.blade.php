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
				<h2 style="font-family: times" class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Competencias del Lider </h2>			
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
					<div class="col-md-6">

						<h4>TEST-AUTORRETRATO DE LA PERSONALIDAD
							Aplicación Test de la prueba de personalidad.
							¿QUIEN SOY YO?, ¿QUIÉN ERES TÚ?, ¿ CUAL ES TU PROBLEMA?<h4>

							<h5>
								Manejo de las 6 Áreas importantes de mi vida
							</h5>
							<ol>
								<li>Su vida de relación (Relaciones interpersonales)</li>
								<li>Su vida sentimental, (su pareja- compatibilidad)</li>
								<li>Su vida emocional.(flexibilidad, adaptación y autocontrol)</li>
								<li>Su trabajo (desempeño, crecimiento, plan carrera) </li>
								<li>Que refleja y  cómo ve su  propia imagen, a nivel laboral, social y sentimental.</li>
								<li>Su autocontrol, impulsos y apetitos.</li>
								<li>El sentido de la realidad, (el aquí y el ahora)</li>
								<li>La espiritualidad.</li>
							</ol>
							<br>
							<a href="{!! URL::to('autorretrato_personalidad') !!}" type="button" class="btn btn-primary">Saber más</a>
						</div>

						<div class="col-md-6">
							<img src="img/mpersonalidad.jpg" class="img-responsive">
						</div>
					</div>
				</div>
				<!-- main end -->

			</div>
			<!-- Tabs and Pills start -->
			<!-- ============================================================================== -->							
			<br>


		</div>
		<!-- section start -->
		<!-- ================ -->

	</div>

	<br>




	@stop