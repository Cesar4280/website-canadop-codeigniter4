<?php
function strfdate($str)
{
    $arr = explode(' ', $str);
    [$dia,, $mes] = $arr;
    $dia = substr($dia, 0, -1);
    $arr[0] = getDay($dia) . ',';
    $arr[2] = getMonth($mes);
    return substr(implode(' ', $arr), 0, -4);
}
function getDay($day)
{
    return [
        'Mon' => 'Lunes',
        'Tue' => 'Martes',
        'Wed' => 'Miercoles',
        'Thu' => 'Jueves',
        'Fri' => 'Viernes',
        'Sat' => 'Sabado',
        'Sun' => 'Domingo'
    ][$day];
}
function getMonth($month)
{
    return [
        'Jan' => 'Enero',
        'Feb' => 'Febrero',
        'Mar' => 'Marzo',
        'Apr' => 'Abril',
        'May' => 'Mayo',
        'Jun' => 'Junio',
        'Jul' => 'Julio',
        'Aug' => 'Agosto',
        'Sep' => 'Septiembre',
        'Oct' => 'Octubre',
        'Nov' => 'Noviembre',
        'Dec' => 'Diciembre'
    ][$month];
}
function adoptionCode($date, $dni, $code)
{
    return sprintf('T%sA%s%s', strtotime($date), $dni, $code);
}
function sendEmail($to, $message, $filepath)
{
    $subject='Notification';

    $email = \Config\Services::email();

    $email->setFrom('canadop.inc@gmail.com', 'CANADOP Notification');
    $email->setTo($to);

    $email->setSubject($subject);
    $email->setMessage($message);
    $email->attach($filepath);

    if ($email->send()){
        echo "success";

    }else{
        echo "invalid";
    }
}
