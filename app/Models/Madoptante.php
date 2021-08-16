<?php

namespace App\Models;

use CodeIgniter\Model;

class Madoptante extends Model
{
    protected $table = 'ADOPTANTE';

    protected $primaryKey = 'ADOP_ID';

    protected $allowedFields = [
        'ADOP_CC',
        'ADOP_PNOMBRE',
        'ADOP_SNOMBRE',
        'ADOP_PAPELLIDO',
        'ADOP_SAPELLIDO',
        'ADOP_SEXO',
        'ADOP_CELULAR',
        'ADOP_NACAD',
        'ADOP_PROFESION',
        'ADOP_ECIVIL',
        'ADOP_DIRECCION',
        'ADOP_EDAD',
        'ADOP_NHIJOS',
        'ADOP_EMAIL'
    ];
}
