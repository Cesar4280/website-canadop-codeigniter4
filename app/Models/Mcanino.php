<?php

namespace App\Models;

use CodeIgniter\Model;

class Mcanino extends Model
{
    # nombre de la tabla
    protected $table = 'PERRO';

    # id de la tabla perro
    protected $primaryKey  = 'PRR_ID';

    # resto de los campos de la tabla
    protected $allowedFields = [
        'PRR_COD',
        'PRR_NOMBRE',
        'PRR_SEXO',
        'PRR_FING',
        'PRR_TAMANO',
        'PRR_LONGEVIDAD',
        'PRR_ALTURA',
        'PRR_COLOR',
        'PRR_DESPARASITADO',
        'PRR_ESTERILIZADO',
        'PRR_SALUD',
        'PRR_FOTO',
        'PRR_EMPAREJADO',
        'RAZA_ID'
    ];
}
