<?php

namespace App\Models;

use CodeIgniter\Model;

class Mraza extends Model
{
    # nombre de la tabla
    protected $table = 'RAZA';

    # id de la tabla raza
    protected $primaryKey = 'RAZA_ID';

    # resto de los campos de la tabla
    protected $allowedFields = ['RAZA_COD', 'RAZA_NOMBRE', 'RAZA_DESCRIPCION'];
}
