<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Redirect;
use App\Http\Requests;

class EpmController extends Controller
{
	public function home()
	{
		return view('inicio');
	}
	public function servicios()
	{
		return view('servicios');
	}

	public function consultoria()
	{
		return view('consultoria');
	}

	public function autoretrato()
	{
		return view('autoretrato');
	}

	public function contacto()
	{
		return view('contacto');
	}

	public function nosotros()
	{
		return view('nosotros');
	}


	/*
		
		Servicios
		
	*/

		public function Valores()
		{
			return view('servicios.valores');
		}

		public function CompetenciasLider()
		{
			return view('servicios.competencias_lider');
		}

		public function ClimaLaboral()
		{
			return view('servicios.clima_laboral');
		}

		public function SeleccionPersonal()
		{
			return view('servicios.seleccion_personal');
		}

		public function SalarioEmocional()
		{
			return view('servicios.salario_emocional');
		}

		public function CalidadVida()
		{
			return view('servicios.calidad_vida');
		}
		public function SendForm(Request $request)
		{

			$para      = 'info@empoderamientodelamentepositiva.com.co';
			$titulo    = 'Mensaje del sitio Web';

				$mensaje   = '<h3>Información de Usuario</h3><p><b>Propietario: 
				</b>            '. $request->input("nombre") .'</p>	  
			<p><b>Email:</b>                       '. $request->input("email") .' </p>
			<p><b>Asunto:</b>                      '. $request->input("asunto") .'</p>
			<p><b>Mensaje:</b>                     '. $request->input("mensaje") .'</p>';	  

			$cabeceras = "From: info@empoderamientodelamentepositiva.com.co" . "\r\n" .	"Reply-To: info@empoderamientodelamentepositiva.com.co" . "\r\n" .			"Content-type: text/html; charset=UTF-8" . "\r\n".
			"X-Mailer: PHP/" . phpversion().'';


			mail($para, $titulo, $mensaje, $cabeceras);


			return $request->input();
		}

	}
