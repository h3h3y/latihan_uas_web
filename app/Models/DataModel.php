<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table            = 'tb_latihan';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id', 'nama', 'jenkel', 'hobi', 'tanggal_masuk', 'foto'];

    
}
