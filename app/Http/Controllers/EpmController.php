<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
			return view('servicios.seleccion_personal');
		}

	}
