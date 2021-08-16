<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$pagina =

			view('partials/Vinicio', ["titulo" => "Bienvenida"]) .
			view('Vbienvenida') .
			view('partials/Vcierre');

		return $pagina;
	}

	public function info()
	{
		$pagina =
		
			view('partials/Vinicio', ["titulo" => "Informacion"]) .
			view('partials/Vnavegacion') .
			view('Vinfo') .
			view('partials/Vcierre');

		return $pagina;
	}

	//--------------------------------------------------------------------

}
