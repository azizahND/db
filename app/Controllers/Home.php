<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function produk(): string
    {
        return view('produk');
    }
    public function deskripsiProduk(): string
    {
        return view('deskripsi');
    }
    public function cart(): string
    {
        return view('cart');
    }

    public function barang(): string
    {
        return view('barang');
    }


    public function shopping(): string
    {
        return view('shoppingcart');
    }

    public function transaksi(): string
    {
        return view('cart');
    }


}
