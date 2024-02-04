<?php

namespace App\Models;

use CodeIgniter\Model;

class RentalModel extends Model
{
    protected $table = 'rentals';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_barang',
        'nama_penyewa',
        'durasi',
        'total_pembayaran'
    ];
}
