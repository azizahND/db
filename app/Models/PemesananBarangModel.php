<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananBarangModel extends Model
{
    protected $table            = 'pemesanan_barang'; // Nama tabel
    protected $primaryKey       = false; // Tidak ada primary key karena tabel menggunakan composite key
    protected $returnType       = 'array'; // Format pengembalian
    protected $useAutoIncrement = false; // Tidak menggunakan auto increment
    protected $useSoftDeletes   = false; // Soft delete tidak digunakan

    // Kolom yang diizinkan untuk insert/update
    protected $allowedFields    = [
        'id_pemesanan',
        'id_barang',
        'jumlah',
        'total',
    ];

    // Validasi otomatis (opsional)
    protected $validationRules    = [
        'id_pemesanan' => 'required|integer',
        'id_barang'    => 'required|integer',
        'jumlah'       => 'required|integer',
        'total'        => 'required|integer',
    ];

    protected $validationMessages = [];
    protected $skipValidation     = false; // Ubah ke `true` jika tidak ingin validasi otomatis
}
