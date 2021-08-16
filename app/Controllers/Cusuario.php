<?php

namespace App\Controllers;

class Cusuario extends BaseController
{
    public function index() { return view('Vlogin'); }

    public function signIn()
    {
        $url='http://localhost:3000/login';

        // iniciamos el recurso de url
        $ch=curl_init($url);

        $datos=['user'=> $this->request->getVar('USER_USUARIO'), 'password'=> $this->request->getVar('USER_CONTRASENA')];

        $payload = json_encode($datos);
        //setup request to send json via POST
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        //establecer el tipo de retorno json
        //curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //establecer el tipo de retorno json
        //ejecutamos
        $resultado= curl_exec($ch);
        
        //cerramos
        curl_close($ch);
        
        $resultado_=json_decode($resultado,true) ;  

        print_r($resultado_['data'][0]);
    
        if(!$resultado_['data'][0]){

            return redirect()->to(base_url('login'));

        } else{

            $credenciales = $resultado_['data'][0];

            /* 
            $credenciales['USER_USUARIO']
            $credenciales['USER_ID']
            $credenciales['USER_CONTRASENA']
            */

            $datos_sesion=['user'=>$credenciales['USER_USUARIO']];

            $session = \Config\Services::session();
            $session->start();
            $session->set($datos_sesion);
            echo $session->get("user");

            return redirect()->to(base_url('admin'));

        }
    }

    public function salir()
    {
        $session = session();
        $session->destroy();
        return $this->response->redirect(site_url());
    }
}
