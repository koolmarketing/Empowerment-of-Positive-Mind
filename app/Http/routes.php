<?php


Route::group(['prefix' => '/', 'middleware' => 'web'], function()
{ 
	Route::auth();

	Route::get('', [		
		'as'   => 'Inicio', 
		'uses' => 'EpmController@home'
		]);
	Route::get('servicios', [		
		'as'   => 'Servicios', 
		'uses' => 'EpmController@servicios'
		]);
	Route::get('nosotros', [		
		'as'   => 'Servicios', 
		'uses' => 'EpmController@nosotros'
		]);

	Route::get('consultoria', [		
		'as'   => 'Servicios', 
		'uses' => 'EpmController@consultoria'
		]);

	Route::get('autorretrato_personalidad', [		
		'as'   => 'Servicios', 
		'uses' => 'EpmController@autoretrato'
		]);

	Route::get('contacto', [		
		'as'   => 'Servicios', 
		'uses' => 'EpmController@contacto'
		]);
	/*
*
*  Sitio Web
*
	*/

Route::get('valores', [		
	'as'   => 'valores', 
	'uses' => 'EpmController@valores'
	]);

Route::get('competencias_lider', [		
	'as'   => 'competencias.lider', 
	'uses' => 'EpmController@CompetenciasLider'
	]);

Route::get('clima_laboral', [		
	'as'   => 'clima.laboral', 
	'uses' => 'EpmController@ClimaLaboral'
	]);

Route::get('seleccion_personal', [		
	'as'   => 'seleccion.personal', 
	'uses' => 'EpmController@SeleccionPersonal'
	]);

Route::get('salario_emocional', [		
	'as'   => 'salario.emocional', 
	'uses' => 'EpmController@SalarioEmocional'
	]);

Route::get('seleccion_personal', [		
	'as'   => 'calidad.vida', 
	'uses' => 'EpmController@CalidadVida'
	]);






});



