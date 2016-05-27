@extends('layouts.master')

@section('content')
<!-- slideshow start -->
<!-- ================ -->
<div class="slideshow">

	<!-- slider revolution start -->
	<!-- ================ -->
	<div class="slider-banner-container">
		<div class="slider-banner-fullscreen">
			<ul class="slides">
				<!-- slide 1 start -->
				<!-- ================ -->
				<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" >

					<!-- main image -->
					<img src="img/slide-1.jpg" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

					<!-- Transparent Background -->
					<div class="tp-caption dark-translucent-bg"
					data-x="center"
					data-y="bottom"
					data-speed="500"
					data-easing="easeOutQuad"
					data-start="0">
				</div>

				<!-- LAYER NR. 1 -->
				<div class="tp-caption sfb fadeout large_white"
				data-x="left"
				data-y="100"
				data-speed="500"
				data-start="1000"
				data-easing="easeOutQuad">

				<!-- <span class="logo-font">The Beauty</span> -->
			</div>	


			<!-- LAYER NR. 3 -->
			<div class="tp-caption sfb fadeout medium_white"
			data-x="left"
			data-y="190"
			data-speed="500"
			data-start="1300"
			data-easing="easeOutQuad"
			data-endspeed="600"><h1 style="color: white;">“El secreto de la vida, no es hacer lo que a uno<br> le gusta, sino hallar gusto en lo que se hace” <small style="color:white">- Random.</small></h1><br>

		</div>

		<!-- LAYER NR. 4 -->
		<div class="tp-caption sfb fadeout small_white"
		data-x="left"
		data-y="300"
		data-speed="500"
		data-start="1600"
		data-easing="easeOutQuad"
		data-endspeed="600"><a href="{!! URL::to('autorretrato_personalidad') !!}" class="btn btn-gray btn-lg btn-animated">Ver más <i class="fa fa-info-circle"></i></a>
	</div>

	<!-- LAYER NR. 5 -->
	<div class="tp-caption fade fadeout"
	data-x="center"
	data-y="bottom"
	data-voffset="100"
	data-speed="500"
	data-easing="easeOutQuad"
	data-start="2000"
	data-endspeed="200">
	<a href="#page-start" class="btn btn-lg moving smooth-scroll"><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i></a>
</div>
</li>
<!-- slide 1 end -->

<!-- slide 2 start -->
<!-- ================ -->
<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">

	<!-- main image -->
	<img src="img/slide-2.jpg" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

	<!-- Transparent Background -->
	<div class="tp-caption dark-translucent-bg"
	data-x="center"
	data-y="bottom"
	data-speed="500"
	data-easing="easeOutQuad"
	data-start="0">
</div>

<!-- LAYER NR. 1 -->
<div class="tp-caption sfb fadeout large_white text-right"
data-x="right"
data-y="100"
data-speed="500"
data-start="1000"
data-easing="easeOutQuad"><!-- <span class="logo-font">The Beauty</span> - Unlimited Options and Layouts -->
</div>	

<!-- LAYER NR. 2 -->
<div class="tp-caption sfb fadeout large_white tp-resizeme"
data-x="right"
data-y="170"
data-speed="500"
data-start="1300"
data-easing="easeOutQuad"><div class="separator-3 light"></div>
</div>	

<!-- LAYER NR. 3 -->
<div class="tp-caption sfb fadeout medium_white text-right"
data-x="right"
data-y="190"
data-speed="500"
data-start="1300"
data-easing="easeOutQuad"
data-endspeed="600"><h1 style="color:white">“Si mejoras 1% cada día al final del<br> año habrás mejorado 365 %” <small style="color:#ffffff">-José Sixto Buitrago.</small></h1>
</div>

<!-- LAYER NR. 4 -->
<div class="tp-caption sfb fadeout small_white"
data-x="right"
data-y="300"
data-speed="500"
data-start="1600"
data-easing="easeOutQuad"
data-endspeed="600"><a href="{!! URL::to('contacto') !!}" class="btn btn-default btn-lg btn-animated">Contáctenos <i class="fa fa-envelope"></i></a>
</div>

<!-- LAYER NR. 5 -->
<div class="tp-caption fade fadeout"
data-x="center"
data-y="bottom"
data-voffset="100"
data-speed="500"
data-easing="easeOutQuad"
data-start="2000"
data-endspeed="200">
<a href="#page-start" class="btn btn-lg moving smooth-scroll"><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i></a>
</div>	
</li>
<!-- slide 2 end -->
</ul>
<div class="tp-bannertimer"></div>
</div>
</div>
<!-- slider revolution end -->

</div>
<!-- slideshow end -->

</div>
<!-- banner end -->

<div id="page-start"></div>

<!-- section start -->
<!-- ================ -->
<section class="light-gray-bg pv-30 clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">PORTAFOLIO DE SERVICIOS Y  <strong>CONSULTORÍA </strong></h2>
				<div class="separator"></div>
				
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
					<span class="icon large circle"><img class="img-circle" alt="beauty" src="img/compl/valores.jpg"></span>
					<h3>Valores</h3>
					<div class="separator clearfix"></div>
					<p class="text-muted">Siembra e interiorizacón de <b>156</b> valores</p>
					<a href="{!! URL::to("valores") !!}">Ver más<i class="pl-5 fa fa-angle-double-right"></i></a>
				</div>
			</div>

						<div class="col-md-4 col-sm-6">
				<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon large circle"><img class="img-circle" alt="beauty" src="images/service-2.jpg"></span>
					<h3>Competencias del Líder</h3>
					<div class="separator clearfix"></div>
					<p class="text-muted">
						<ul class="text-left">
							<li>Las 9 áreas del liderazgo G.P.T.W</li>
							<li>Habilidades Gerenciales "HAGE"</li>
						</ul>
					</p>
					<a href="{!! URL::to("competencias_lider") !!}">Ver más<i class="pl-5 fa fa-angle-double-right"></i></a>
				</div>
			</div>

						<div class="col-md-4 col-sm-6">
				<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
					<span class="icon large circle"><img class="img-circle" alt="beauty" src="images/service-3.jpg"></span>
					<h3>Clima laboral</h3>
					<div class="separator clearfix"></div>
					<p class="text-muted">
						<ul class="text-left">
							<li>Ventana de Johary</li>
							<li>El Autorretrato de la Personalidad</li>
							<li>Grupos Nominales</li>
						</ul>
					</p>
					<a class="link-dark" href="{!! URL::to("clima_laboral") !!}">Ver más<i class="pl-5 fa fa-angle-double-right"></i></a>
				</div>
			</div>


			<div class="col-md-4 col-sm-6">
				<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
					<span class="icon large circle"><img class="img-circle" alt="beauty" src="img/compl/competencias.jpg"></span>
					<h3>Selección de Personal</h3>
					<div class="separator clearfix"></div>
					<p class="text-muted">Conducir procesos de reclutamiento y selección de personal por competencias.
					<ul class="text-left">
						<li>Operativo</li>
						<li>Profesional</li>
					</ul></p>
					
					<a class="link-dark" href="{!! URL::to("seleccion_personal") !!}">Ver más<i class="pl-5 fa fa-angle-double-right"></i></a>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
					<span class="icon large circle"><img class="img-circle" alt="beauty" src="img/compl/salario_emocional.jpg"></span>
					<h3>Salario emocional</h3>
					<div class="separator clearfix"></div>
					<p class="text-muted">Crear una <b>CUENTA DE AHORROS EMOCIONAL</b> para los Empleados, genera bienestar en su: Salario Emocional, Vínculos  Emocionales...</p>
					<a href="{!! URL::to("salario_emocional") !!}">Ver más<i class="pl-5 fa fa-angle-double-right"></i></a>
				</div>
			</div>


			<div class="clearfix visible-md"></div>
			<div class="col-md-4 col-sm-6">
				<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon large circle"><img class="img-circle" alt="beauty" src="img/compl/familia_v.jpg"></span>
					<h3>Calidad de vida</h3>
					<div class="separator clearfix"></div>
					<p class="text-muted">
						
					</p><ul class="text-left">
							<li>Pildoras</li>
							<li>Capsulas</li>
						</ul>
					<a class="link-dark" href="{!! URL::to("calidad_vida") !!}">Ver más<i class="pl-5 fa fa-angle-double-right"></i></a>
				</div>
			</div>

			
		</div>
	</div>
</section>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<section class="section dark-bg clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="call-to-action text-center">
					<div class="row">
						<div class="col-sm-8">
							<h1 class="title">Entérate de nuestros planes empresariales</h1>							
						</div>
						<div class="col-sm-4">
							<br>
							<p><a href="#" class="btn btn-lg btn-gray-transparent btn-animated">Leer más<i class="fa fa-arrow-right pl-20"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<section class="full-width-section">
	<div class="full-image-container border-clear light-gray-bg">
		<img class="to-right-block" src="img/web_garantia.jpg" alt="">
		<div class="full-image-overlay text-right">
			<!-- <h3>With Compassionate Care Since 1930</h3>
			<ul class="list-icons">
				<li>We are here to support you <i class="icon-check-1"></i></li>
				<li>Free updates <i class="icon-check-1"></i></li>
				<li>ipsam asperiores fugiat quo <i class="icon-check-1"></i></li>
				<li>Animi veniam veritatis sint <i class="icon-check-1"></i></li>
				<li>Voluptatum officia suscipit <i class="icon-check-1"></i></li>
				<li>Unlimited options and variations <i class="icon-check-1"></i></li>
			</ul> -->
		</div>
	</div>
	<div class="full-text-container border-clear light-gray-bg">
		{!! HTML::image('img/logo-h.png','logo') !!}
		<div class="separator-2 visible-lg"></div>
		<p>Una  mentalidad positiva abrazando el  presente con pasión y amor, atando a la vida a una meta no a una persona  o a un  objeto; recogiendo y trasmitiendo la información adecuada y necesaria para implantar el cambio,tomando decisiones responsables, habilitadas para actuar y generar calidad,haciendo uso del EMPOWERMENT para encontrar soluciones adecuadas a problemas serios, delegando poder con limites que le permitan a cualquier organización agilizar los planes de acción y mejorar frente al mercado, dejar que las personas piensen y actúen.</p>
		<div class="separator-3 visible-lg"></div>
	</div>
</section>
<!-- section end -->
@stop