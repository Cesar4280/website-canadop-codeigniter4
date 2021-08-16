<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Madoptante;

class Cadoptante extends Controller
{
    public function formAdoptante($id)
    {
        $dato['PRR_ID'] = $id;

        $pagina =

            view('partials/Vinicio', ["titulo" => "Formulario de adopción"]) .
            view('partials/Vnavegacion') .
            view('Vadoptante', $dato) . # muestra la vista de formulario adopcion
            view('partials/Vcierre');

        return $pagina;
    }
}
