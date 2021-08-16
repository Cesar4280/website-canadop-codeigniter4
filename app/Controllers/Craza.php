<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Mraza;

class Craza extends Controller
{
    public function index()
    {
        # realizamos la petición a la API y guardamos la respuesta en un arreglo
        $respuesta['datos'] = get('http://localhost:3000/api/razas');

        # se arma la vista de ficha del perro
        $pagina =

            view('partials/Vinicio', ["titulo" => "Razas caninas"]) .
            view('partials/Vnavegacion') .
            view('Vrazas', $respuesta) . # muestra la vista con el resultado
            view('partials/Vcierre');

        return $pagina;
    }
}
