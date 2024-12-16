<?php

namespace App\Models;

use CodeIgniter\Model;

class ShippingModel extends Model
{
    // Nama tabel yang digunakan
    protected $table = 'shipping';

    // Primary key tabel
    protected $primaryKey = 'id_shipping';

    // Daftar field yang dapat diisi (fillable)
    protected $allowedFields = ['nama_shipping'];

    // Menetapkan tipe data untuk kolom
    protected $returnType = 'array'; // Data akan dikembalikan dalam bentuk array

    // Mengaktifkan fitur timestamp jika ingin otomatis menangani created_at dan updated_at
    // protected $useTimestamps = true;
    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';

    // Validasi untuk field (optional)
    protected $validationRules = [
        'nama_shipping' => 'required|min_length[3]|max_length[100]',
    ];
    
    // Pesan validasi (optional)
    protected $validationMessages = [
        'nama_shipping' => [
            'required' => 'Nama shipping harus diisi',
            'min_length' => 'Nama shipping minimal 3 karakter',
            'max_length' => 'Nama shipping maksimal 100 karakter',
        ],
    ];
}
