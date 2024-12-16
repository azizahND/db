<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table            = 'pemesanan'; // Nama tabel
    protected $primaryKey       = 'id_pemesanan'; // Primary key
    protected $useAutoIncrement = true; // Auto increment aktif
    protected $returnType       = 'array'; // Format pengembalian
    protected $useSoftDeletes   = false; // Soft delete tidak digunakan

    // Kolom yang diizinkan untuk insert/update
    protected $allowedFields    = [
        'email',
        'id_shipping',
        'kode_voucher',
        'tanggal_pemesanan',
        'kode_pos',
    ];

    // Validasi otomatis (opsional)
    protected $validationRules    = [
        'email'              => 'required|valid_email',
        'id_shipping'        => 'required|integer',
        'kode_voucher'       => 'permit_empty|string|max_length[50]',
        'tanggal_pemesanan'  => 'required|valid_date',
        'kode_pos'           => 'required|integer',
    ];

    protected $validationMessages = [];
    protected $skipValidation     = false; // Ubah ke `true` jika tidak ingin validasi otomatis
}
