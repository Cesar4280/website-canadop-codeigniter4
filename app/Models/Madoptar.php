<?php

namespace App\Models;

use CodeIgniter\Model;

class Madoptar extends Model
{
    # nombre de la tabla
    protected $table = 'ADOPTAR';

    # id de la tabla adoptar
    protected $primaryKey = 'ADOPTAR_ID';

    # resto de los campos de la tabla
    protected $allowedFields = [
        'ADOPTAR_COD', 
        'PERRO_PRR_ID', 
        'ADOPTAR_FECHA', 
        'ADOPTANTE_ADOP_ID', 
        'ADOPTAR_RECOMENDACIONES'
    ];
}
