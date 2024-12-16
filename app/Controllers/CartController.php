<?php

namespace App\Controllers;

use App\Models\PemesananModel;
use App\Models\PemesananBarangModel;
use App\Models\BarangModel;

class CartController extends BaseController
{
    public function index()
    {
        $pemesananModel = new PemesananModel();
        $pemesananBarangModel = new PemesananBarangModel();
        $barangModel = new BarangModel();

        // Menentukan email yang digunakan
        $email = 'azizahnovidelfianti@gmail.com';

        // Ambil data pemesanan berdasarkan email
        $pemesanan = $pemesananModel->where('email', $email)->first();
        
        if ($pemesanan) {
            // Ambil data barang yang dipesan berdasarkan id_pemesanan
            $pemesananBarang = $pemesananBarangModel->where('id_pemesanan', $pemesanan['id_pemesanan'])->findAll();

            $cartItems = [];
            $total = 0;

            foreach ($pemesananBarang as $item) {
                $barang = $barangModel->find($item['id_barang']);
                $barang['jumlah'] = $item['jumlah'];
                $barang['total'] = $item['total'];
                $cartItems[] = $barang;
                $total += $barang['total'];
            }

            // Kirim data ke view
            return view('shoppingcart', ['cartItems' => $cartItems, 'total' => $total]);
        } else {
            return redirect()->to('/')->with('error', 'Keranjang belanja kosong.');
        }
    }

    public function add_to_cart($id_barang)
    {
        // Fungsi untuk menambah barang ke keranjang belanja
        // (Kode ini sama seperti yang ada sebelumnya)
    }
}
