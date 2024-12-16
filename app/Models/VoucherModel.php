<?php

namespace App\Models;

use CodeIgniter\Model;

class VoucherModel extends Model
{
    // Nama tabel yang digunakan
    protected $table = 'voucher';

    // Primary key tabel
    protected $primaryKey = 'kode_voucher';

    // Daftar field yang dapat diisi (fillable)
    protected $allowedFields = [
        'kode_voucher', 
        'potongan', 
        'tanggal_mulai', 
        'tanggal_berakhir'
    ];

    // Menetapkan tipe data untuk kolom
    protected $returnType = 'array'; // Data akan dikembalikan dalam bentuk array

    // Mengaktifkan fitur timestamp jika ingin otomatis menangani created_at dan updated_at
    // protected $useTimestamps = true;
    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';

    // Validasi untuk field (optional)
    protected $validationRules = [
        'kode_voucher' => 'required|min_length[3]|max_length[50]|is_unique[voucher.kode_voucher]',
        'potongan'     => 'required|integer|greater_than[0]',
        'tanggal_mulai' => 'required|valid_date',
        'tanggal_berakhir' => 'required|valid_date|greater_than[tanggal_mulai]',
    ];
    
    // Pesan validasi (optional)
    protected $validationMessages = [
        'kode_voucher' => [
            'required' => 'Kode voucher harus diisi',
            'min_length' => 'Kode voucher minimal 3 karakter',
            'max_length' => 'Kode voucher maksimal 50 karakter',
            'is_unique' => 'Kode voucher sudah terdaftar',
        ],
        'potongan' => [
            'required' => 'Potongan harus diisi',
            'integer' => 'Potongan harus berupa angka',
            'greater_than' => 'Potongan harus lebih besar dari 0',
        ],
        'tanggal_mulai' => [
            'required' => 'Tanggal mulai harus diisi',
            'valid_date' => 'Tanggal mulai tidak valid',
        ],
        'tanggal_berakhir' => [
            'required' => 'Tanggal berakhir harus diisi',
            'valid_date' => 'Tanggal berakhir tidak valid',
            'greater_than' => 'Tanggal berakhir harus lebih besar dari tanggal mulai',
        ],
    ];

    // Menambahkan fitur pencarian berdasarkan kode voucher
    public function findVoucherByCode($kode_voucher)
    {
        return $this->where('kode_voucher', $kode_voucher)->first();
    }
}
