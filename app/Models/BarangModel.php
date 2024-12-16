<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table            = 'barang'; // Nama tabel sesuai dengan migrasi
    protected $primaryKey       = 'id_barang'; // Primary key sesuai migrasi
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [ // Sesuai dengan field di tabel migrasi
        'id_subkategori',
        'brand',
        'nama_barang',
        'harga',
        'stok',
        'gambar',
        'deksripsi',
    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false; // Aktifkan jika tabel mendukung timestamps
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at'; // Hanya relevan jika timestamps digunakan
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'id_subkategori' => 'required|integer',
        'brand'          => 'required|max_length[100]',
        'nama_barang'    => 'required|max_length[100]',
        'harga'          => 'required|integer',
        'stok'           => 'required|integer',
        'gambar'         => 'permit_empty|mime_in[gambar,image/png,image/jpg,image/jpeg]|max_size[gambar,2048]',
        'deksripsi'      => 'required|max_length[1000]',
    ];
    protected $validationMessages   = [
        'brand' => [
            'required'    => 'Brand tidak boleh kosong',
            'max_length'  => 'Brand maksimal 100 karakter',
        ],
        'harga' => [
            'required' => 'Harga tidak boleh kosong',
            'integer'  => 'Harga harus berupa angka',
        ],
        // Tambahkan pesan lainnya sesuai kebutuhan
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
