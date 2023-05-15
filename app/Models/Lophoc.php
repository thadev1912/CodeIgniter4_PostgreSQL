<?php

namespace App\Models;

use CodeIgniter\Model;

class Lophoc extends Model
{
  
    protected $table            = 'lophoc';
    protected $primaryKey       = 'id';    
    protected $allowedFields    = [
        'id',
        'ma_lop',
        'ten_lop',
    ];

  
}
