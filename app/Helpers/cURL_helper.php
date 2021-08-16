<?php
function get($url)
{
    # iniciamos una nueva sesión cURL
    $ch = curl_init($url);

    # establecemos configuraciones
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    # ejecutamos la petición HTTP
    $res = curl_exec($ch);

    # preguntamos si hubo error y guardamos la respuesta
    $res = curl_errno($ch) ? curl_error($ch) : json_decode($res, TRUE);

    # cerramos la sesión cURL
    curl_close($ch);

    # retornamos la respuesta
    return $res;
}
function post($url, $data)
{
    # iniciamos una nueva sesión cURL
    $ch = curl_init($url);

    # convertimos los datos a JSON
    $data = json_encode($data);

    # establecemos configuraciones
    curl_setopt($ch, CURLOPT_POST, TRUE); # indicamos el metodo de petición POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  # asignamos los campos a enviar por POST
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); # indicamos que nos retorne los datos
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']); # indicamos el tipo de contenido application/json

    # ejecutamos la petición
    $res = curl_exec($ch);

    # preguntamos si hubo error y guardamos la respuesta
    $res = curl_errno($ch) ? curl_error($ch) : json_decode($res, TRUE);

    # cerramos la sesión cURL
    curl_close($ch);

    # retornamos la respuesta
    return $res;
}
