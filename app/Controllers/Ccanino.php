<?php

namespace App\Controllers;

use App\Models\Mcanino;

class Ccanino extends BaseController
{
    public function perros()
    {
        # realizamos la petición a la API y guardamos la respuesta en un arreglo
        $respuesta['datos'] = get('http://localhost:3000/api/perros/adopcion');

        # se arma la vista de caninos en adopción
        $pagina =

            view('partials/Vinicio', ["titulo" => "Adopta un perro"]) .
            view('partials/Vnavegacion') .
            view('Vcaninos', $respuesta) . # muestra la vista con el resultado
            view('partials/Vcierre');

        return $pagina;
    }

    public function agregarPerro()
    {
        # realizamos la petición a la API y guardamos la respuesta en un arreglo
        $respuesta['datos'] = get('http://localhost:3000/api/razas/todas');

        # se arma la vista de agregar canino
        $pagina =

            view('partials/Vinicio', ["titulo" => "Registrar un perro"]) .
            view('Vagregarcanino', $respuesta) . # muestra la vista con el resultado
            view('partials/Vcierre');

        return $pagina;
    }

    public function ficha($id)
    {
        # realizamos la petición a la API y guardamos la respuesta en un arreglo
        $respuesta['datos'] = get("http://localhost:3000/api/perros/id/$id");

        # se arma la vista de ficha del perro
        $pagina =

            view('partials/Vinicio', ["titulo" => "Información del perro"]) .
            view('partials/Vnavegacion') .
            view('Vficha', $respuesta) . # muestra la vista con el resultado
            view('partials/Vcierre');

        return $pagina;
    }

    /* public function adoptado($id)
    {
        # se crea el objeto de tipo de canino
        $canino = new Mcanino();

        # se consulta por el nombre de la foto
        $nombre = $canino->where('PRR_ID', $id)->findColumn('PRR_FOTO')[0];

        # se arma la ruta a la ubicación de la foto
        $rutaFoto = "../public/uploads/$nombre";

        # se verifica que la foto exista
        if (file_exists($rutaFoto)) {
            # se elimina la foto de la carpeta uploads
            if (unlink($rutaFoto)) {
                # se elimina el perro con la ID respectiva
                $canino->where('PRR_ID', $id)->delete($id);

                # se redirecciona a la vista caninos
                return $this->response->redirect(base_url('perros'));
            } else throw new \RuntimeException('Ocurrio un problema al eliminar el archivo');
        } else throw new \RuntimeException("No se encontro el archivo: $rutaFoto");
    } */

    public function registrarPerro()
    {
        # campos obligatorios:
        $canino = [
            'RAZA_ID' => $this->request->getVar('RAZA_ID'),
            'PRR_FING' => $this->request->getVar('PRR_FING'),
            'PRR_SEXO' => $this->request->getVar('PRR_SEXO'),
            'PRR_FOTO' => $this->request->getFile('PRR_FOTO'),
            'PRR_COLOR' => $this->request->getVar('PRR_COLOR'),
            'PRR_ALTURA' => $this->request->getVar('PRR_ALTURA'),
            'PRR_NOMBRE' => $this->request->getVar('PRR_NOMBRE'),
            'PRR_TAMANO' => $this->request->getVar('PRR_TAMANO'),
            'PRR_LONGEVIDAD' => $this->request->getVar('PRR_LONGEVIDAD')
        ];

        # se establece el formato de fecha MYSQL YYYY-MM-DD hh:mm:ss
        $canino['PRR_FING'] = str_replace('T', ' ', "{$canino['PRR_FING']}:00");

        # se consulta el codigo asociado a la raza
        $dato = get("http://localhost:3000/api/razas/id/{$canino['RAZA_ID']}");
        $canino['PRR_COD'] = $dato['breed']['RAZA_COD'];

        # campos opcionales:
        $canino['PRR_SALUD'] = $this->request->getVar('PRR_SALUD') ?? NULL;
        $canino['PRR_ESTERILIZADO'] = $this->request->getVar('PRR_ESTERILIZADO') ?? NULL;
        $canino['PRR_DESPARASITADO'] = $this->request->getVar('PRR_DESPARASITADO') ?? NULL;

        # todo canino empieza su proceso sin estar adoptado
        $canino['PRR_EMPAREJADO'] = NULL;

        # se sube la foto a la carpeta uploads dentro de public
        if ($canino['PRR_FOTO']->isValid() && !$canino['PRR_FOTO']->hasMoved()) 
        {
            if (in_array($canino['PRR_FOTO']->guessExtension(), ['jpg', 'jpeg', 'png'])) 
            {
                if ($canino['PRR_FOTO']->getSizeByUnit('mb') > 2) throw new \RuntimeException('La imagen supera el limite de 2MB');
                else 
                {
                    $nombre = $canino['PRR_FOTO']->getRandomName();

                    $canino['PRR_FOTO']->move('../public/uploads/', $nombre);

                    $canino['PRR_FOTO'] = $nombre;

                    # se registra el canino
                    post('http://localhost:3000/api/perros/agregar', $canino);

                    # por ultimo, se redirecciona a la vista admin
                    $this->response->redirect(base_url('admin'));
                }
            } else throw new \RuntimeException('Extensión de archivo invalida');
        } else throw new \RuntimeException($canino['PRR_FOTO']->getErrorString() . '(' . $canino['PRR_FOTO']->getError() . ')');
    }
    public function editarCanino($id)
    {
        # realizamos la petición a la API y guardamos la respuesta
        $respuesta = get("http://localhost:3000/api/perros/id/$id");

        # se consulta la raza asociada al perro
        $resultado = get("http://localhost:3000/api/razas/id/{$respuesta['dog']['RAZA_ID']}");

        # se anexa el dato al arreglo
        $respuesta['dog']['RAZA_NOMBRE'] = $resultado['breed']['RAZA_NOMBRE'];

        # datos a enviar a la vista
        $canino['datos'] = $respuesta;

        # se arma la vista del canino a editar
        $pagina =

            view('partials/Vinicio', ["titulo" => "Editar perro"]) .
            view('Veditarcanino', $canino) . # muestra la vista con los datos
            view('partials/Vcierre');

        return $pagina;
    }
    public function actualizarCanino()
    {
        # se captura los campos visibles en un arreglo
        $datos = [
            'PRR_COLOR' => $this->request->getVar('PRR_COLOR'),
            'PRR_SALUD' => $this->request->getVar('PRR_SALUD'),
            'PRR_ALTURA' => $this->request->getVar('PRR_ALTURA'),
            'PRR_TAMANO' => $this->request->getVar('PRR_TAMANO'),
            'PRR_LONGEVIDAD' => $this->request->getVar('PRR_LONGEVIDAD'),
            'PRR_ESTERILIZADO' => $this->request->getVar('PRR_ESTERILIZADO'),
            'PRR_DESPARASITADO' => $this->request->getVar('PRR_DESPARASITADO')
        ];

        # se recoge el id del perro
        $id = $this->request->getVar('PRR_ID');

        # se actualiza la información del perro con los nuevos datos
        post("http://localhost:3000/api/perros/actualizar/id/$id", $datos);

        # por ultimo, se redirije a la vista administrador
        return $this->response->redirect(base_url('admin'));
    }
}
