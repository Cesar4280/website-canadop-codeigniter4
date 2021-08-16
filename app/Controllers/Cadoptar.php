<?php

namespace App\Controllers;

class Cadoptar extends BaseController
{
    public function index()
    {
        # recogemos el id del perro
        $id = $this->request->getVar('PRR_ID');

        # realizamos la petición a la API y guardamos la respuesta
        $perro = get("http://localhost:3000/api/perros/id/$id");

        # recogemos los datos del adoptante
        $adoptante = [
            'ADOP_CC' => $this->request->getVar('ADOP_CC'),
            'ADOP_EDAD' => $this->request->getVar('ADOP_EDAD'),
            'ADOP_SEXO' => $this->request->getVar('ADOP_SEXO'),
            'ADOP_NACAD' => $this->request->getVar('ADOP_NACAD'),
            'ADOP_EMAIL' => $this->request->getVar('ADOP_EMAIL'),
            'ADOP_ECIVIL' => $this->request->getVar('ADOP_ECIVIL'),
            'ADOP_NHIJOS' => $this->request->getVar('ADOP_NHIJOS'),
            'ADOP_ANTIGUO' => $this->request->getVar('ADOP_ANTIGUO'),
            'ADOP_CELULAR' => $this->request->getVar('ADOP_CELULAR'),
            'ADOP_PNOMBRE' => $this->request->getVar('ADOP_PNOMBRE'),
            'ADOP_SNOMBRE' => $this->request->getVar('ADOP_SNOMBRE'),
            'ADOP_PAPELLIDO' => $this->request->getVar('ADOP_PAPELLIDO'),
            'ADOP_SAPELLIDO' => $this->request->getVar('ADOP_SAPELLIDO'),
            'ADOP_PROFESION' => $this->request->getVar('ADOP_PROFESION'),
            'ADOP_DIRECCION' => $this->request->getVar('ADOP_DIRECCION')
        ];

        # unimos ambas entidades en un solo arreglo
        $adopcion = array_merge($adoptante, $perro['dog']);

        $pagina =

            view('partials/Vinicio', ["titulo" => "Adopción"]) .
            view('partials/Vnavegacion') .
            view('Vadoptar', $adopcion) .
            view('partials/Vcierre');

        return $pagina;
    }

    public function finalizar()
    {
        # se abstraen los sgtes datos
        $PRR_ID = $this->request->getVar('PRR_ID');
        $PRR_COD = $this->request->getVar('PRR_COD');
        $ADOP_CC = $this->request->getVar('ADOP_CC');
        $PRR_SALUD = $this->request->getVar('PRR_SALUD');
        $ADOPTAR_FECHA = $this->request->getVar('ADOPTAR_FECHA');

        # se carga los datos del cliente
        $adoptante = [
            'ADOP_EDAD' => $this->request->getVar('ADOP_EDAD'),
            'ADOP_EMAIL' => $this->request->getVar('ADOP_EMAIL'),
            'ADOP_NACAD' => $this->request->getVar('ADOP_NACAD'),
            'ADOP_ECIVIL' => $this->request->getVar('ADOP_ECIVIL'),
            'ADOP_NHIJOS' => $this->request->getVar('ADOP_NHIJOS'),
            'ADOP_CELULAR' => $this->request->getVar('ADOP_CELULAR'),
            'ADOP_PROFESION' => $this->request->getVar('ADOP_PROFESION'),
            'ADOP_DIRECCION' => $this->request->getVar('ADOP_DIRECCION')
        ];

        if ($this->request->getVar('ADOP_ANTIGUO')) {

            # se actualiza los datos del adoptante
            post("http://localhost:3000/api/adoptantes/actualizar/cedula/$ADOP_CC", $adoptante);

        } else {
            # se carga el resto de campos
            $adoptante['ADOP_CC'] = $ADOP_CC;
            $adoptante['ADOP_SEXO'] = $this->request->getVar('ADOP_SEXO')[0];
            $adoptante['ADOP_PNOMBRE'] = $this->request->getVar('ADOP_PNOMBRE');
            $adoptante['ADOP_SNOMBRE'] = $this->request->getVar('ADOP_SNOMBRE');
            $adoptante['ADOP_PAPELLIDO'] = $this->request->getVar('ADOP_PAPELLIDO');
            $adoptante['ADOP_SAPELLIDO'] = $this->request->getVar('ADOP_SAPELLIDO');

            # se registra el adoptante
            post('http://localhost:3000/api/adoptantes/registrar', $adoptante);
        }

        # se consulta el adoptante del proceso
        $ADOPTANTE = get("http://localhost:3000/api/adoptantes/cedula/$ADOP_CC");

        # se extrae el id del registro
        $ADOP_ID = $ADOPTANTE['adopter']['ADOP_ID'];

        # se actualiza el estado del perro a emparejado
        post("http://localhost:3000/api/perros/actualizar/id/$PRR_ID", ["PRR_EMPAREJADO" => 1]);

        # se carga los datos de la adopción
        $adopcion = [
            'PERRO_PRR_ID' => $PRR_ID,
            'ADOPTANTE_ADOP_ID' => $ADOP_ID,
            'ADOPTAR_FECHA' => $ADOPTAR_FECHA,
            'ADOPTAR_RECOMENDACIONES' => $PRR_SALUD,
            'ADOPTAR_COD' => adoptionCode($ADOPTAR_FECHA, $ADOP_CC, $PRR_COD)
        ];

        # se registra el proceso de adopción
        post('http://localhost:3000/api/adopciones/registrar', $adopcion);

        $to = $this->request->getVar('ADOP_EMAIL');
        $PRR_FOTO = $this->request->getVar('PRR_FOTO');

        $message = "¡Felicitaciones ya eres un nuevo Adoptante!

        Enhorabuena, ciudadano con cedula $ADOP_CC!, acaba de hacer la peticion de adopción de uno de nuestros canes disponibles:<br><br>
        
        fecha de adopcion: $ADOPTAR_FECHA<br>
        codigo de la adopcion: {$adopcion['ADOPTAR_COD']}<br><br>
        
        Datos del nuevo integrante en tu familia:<br><br>
        
        Codigo: $PRR_COD<br>
        Nombre: {$this->request->getVar('PRR_NOMBRE')}<br>
        Sexo: {$this->request->getVar('ADOP_SEXO')}<br>
        Pelaje: {$this->request->getVar('PRR_COLOR')}<br>
        Tamaño: {$this->request->getVar('PRR_TAMANO')}<br>
        Altura: {$this->request->getVar('PRR_ALTURA')}<br>
        Longevidad: {$this->request->getVar('PRR_LONGEVIDAD')}<br>
        Esterilizado: {$this->request->getVar('PRR_ESTERILIZADO')}<br><br>

        Datalles: $PRR_SALUD<br><br>
        
        le informamos que su proceso de adopción aún no acaba tiene que mostrar su 'codigo de adopcion' en nuestras instalaciones 
        para poder entregarle a su nueva mascota y que firme un documento de cuidado de la mascota para certificar que le dará lo
        necesario para que el perro viva de manera digna.<br>
        
        CANADOP<br>
        Carrera 24 # 75B - 07<br>
        3012448311";
        $filepath = "../public/uploads/$PRR_FOTO";

        sendEmail($to, $message, $filepath);

        # por ultimo, se redirecciona al index
        return $this->response->redirect(site_url());
    }
}
