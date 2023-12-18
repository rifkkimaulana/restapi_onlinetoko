<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'harga',
        'deskripsi',
        'img',
        'kategori'
    ];

    public function fetch_data($limit, $start, $search)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');

        if (!empty($search)) {
            $builder->like('nama', $search);
        }

        $builder->limit($limit, $start);
        $builder->orderBy('id', 'ASC');

        return $builder->get();
    }
}
