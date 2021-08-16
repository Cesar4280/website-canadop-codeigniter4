<?php

namespace App\Models;

use CodeIgniter\Model;

class Musuario extends Model
{
    # nombre de la tabla
    protected $table = 'usuario';

    # id de la tabla perro
    protected $primaryKey  = 'USER_ID';

    # resto de los campos de la tabla
    protected $allowedFields = [
        'USER_USUARIO', 
        'USER_CONTRASENA'
    ];
}
