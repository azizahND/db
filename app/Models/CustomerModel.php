<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table            = 'customer'; // Nama tabel
    protected $primaryKey       = 'email'; // Primary key (email)
    protected $returnType       = 'array'; // Format data yang dikembalikan
    protected $useAutoIncrement = false; // Tidak menggunakan auto increment
    protected $useSoftDeletes   = false; // Soft delete tidak digunakan

    // Kolom yang diizinkan untuk insert/update
    protected $allowedFields    = [
        'email',
        'nama_customer',
        'alamat',
        'no_hp',
    ];

    // Validasi otomatis (opsional)
    protected $validationRules    = [
        'email'          => 'required|valid_email|max_length[100]|is_unique[customer.email]',
        'nama_customer'  => 'required|string|max_length[100]',
        'alamat'         => 'required|string',
        'no_hp'          => 'required|string|max_length[15]',
    ];

    protected $validationMessages = [
        'email' => [
            'required'   => 'Email wajib diisi.',
            'valid_email' => 'Masukkan email yang valid.',
            'is_unique'  => 'Email sudah terdaftar.',
        ],
        'nama_customer' => [
            'required' => 'Nama customer wajib diisi.',
        ],
        'alamat' => [
            'required' => 'Alamat wajib diisi.',
        ],
        'no_hp' => [
            'required' => 'Nomor HP wajib diisi.',
        ],
    ];
    protected $skipValidation     = false; // Validasi otomatis aktif
}
