<?php

namespace App\Controllers;

class Cadmin extends BaseController
{

    public function admin()
    {
        # realizamos la petición a la API y guardamos la respuesta en un arreglo
        $resultados['datos'] = get("http://localhost:3000/api/admin/tablero");

        $pagina =
            view('Vadmin', $resultados) . # muestra la vista administrador
            view('partials/Vcierre');
        return $pagina;
    }
}
