<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kintakuntables extends Migration
{
    public function up()
    {
        // Tabel Shipping
        $this->forge->addField([
            'id_shipping' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_shipping' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id_shipping', true);
        $this->forge->createTable('shipping');

        // Tabel Voucher
        $this->forge->addField([
            'kode_voucher' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'unique'     => true,
            ],
            'potongan' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'tanggal_mulai' => [
                'type' => 'DATE',
            ],
            'tanggal_berakhir' => [
                'type' => 'DATE',
            ],
        ]);
        $this->forge->addKey('kode_voucher', true);
        $this->forge->createTable('voucher');

        // Tabel Customer
        $this->forge->addField([
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true,
            ],
            'nama_customer' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
        ]);
        $this->forge->addKey('email', true);
        $this->forge->createTable('customer');

        // Tabel Pos
        $this->forge->addField([
            'kode_pos' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'unique'     => true,
            ],
            'provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'kota' => [
                'type' => 'TEXT',
            ],
            'kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'kelurahan' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
        ]);
        $this->forge->addKey('kode_pos', true);
        $this->forge->createTable('pos');

        // Tabel Kategori
        $this->forge->addField([
            'id_kategori' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id_kategori', true);
        $this->forge->createTable('kategori');

        // Tabel Sub Kategori
        $this->forge->addField([
            'id_subkategori' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_kategori' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'nama_subkategori' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id_subkategori', true);
        $this->forge->addForeignKey('id_kategori', 'kategori', 'id_kategori', 'CASCADE', 'CASCADE');
        $this->forge->createTable('sub_kategori');

        // Tabel Review
        $this->forge->addField([
            'id_review' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'review' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id_review', true);
        $this->forge->addForeignKey('email', 'customer', 'email', 'CASCADE', 'CASCADE');
        $this->forge->createTable('review');

        // Tabel Barang
        $this->forge->addField([
            'id_barang' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_subkategori' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'brand' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'harga' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'stok' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => 255, // Panjang nama file
                'null'       => true, // Membolehkan NULL jika gambar tidak diunggah
            ],

            'deksripsi' => [
               'type' => 'LONGTEXT',
               'null' => true,
            ],
        ]);
        $this->forge->addKey('id_barang', true);
        $this->forge->addForeignKey('id_subkategori', 'sub_kategori', 'id_subkategori', 'CASCADE', 'CASCADE');
        $this->forge->createTable('barang');

        // Tabel Pemesanan
        $this->forge->addField([
            'id_pemesanan' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'id_shipping' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'kode_voucher' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'tanggal_pemesanan' => [
                'type' => 'DATETIME',
            ],
            'kode_pos' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id_pemesanan', true);
        $this->forge->addForeignKey('email', 'customer', 'email', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_shipping', 'shipping', 'id_shipping', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('kode_voucher', 'voucher', 'kode_voucher', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('kode_pos', 'pos', 'kode_pos', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pemesanan');

        // Tabel Pemesanan Barang
        $this->forge->addField([
            'id_pemesanan' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'id_barang' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'jumlah' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'total' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addForeignKey('id_pemesanan', 'pemesanan', 'id_pemesanan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_barang', 'barang', 'id_barang', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pemesanan_barang');
    }

    public function down()
    {
        $this->forge->dropTable('pemesanan_barang', true);
        $this->forge->dropTable('pemesanan', true);
        $this->forge->dropTable('barang', true);
        $this->forge->dropTable('review', true);
        $this->forge->dropTable('sub_kategori', true);
        $this->forge->dropTable('kategori', true);
        $this->forge->dropTable('voucher', true);
        $this->forge->dropTable('shipping', true);
        $this->forge->dropTable('customer', true);
        $this->forge->dropTable('pos', true);
    }

}