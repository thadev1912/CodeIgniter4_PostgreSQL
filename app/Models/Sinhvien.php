<?php

namespace App\Models;

use CodeIgniter\Model;

class Sinhvien extends Model
{
   
    protected $table            = 'sinhvien';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;   
    protected $allowedFields    = [
        'ma_sv',
        'ten_sv',
        'gioitinh',
        'diachi',
        'ma_lop',
        'sdt',
        'ghichu',
    ];

   
   
}
