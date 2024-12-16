<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BarangController::showBarang');


$routes->get('/produk', 'ProdukController::index');

$routes->get('/deskripsi', 'Home::deskripsiProduk');

$routes->get('/cart', 'Home::cart');

$routes->get('/barang', 'Home::barang');

$routes->post('barang', 'BarangController::simpan');

$routes->get('/lihat', 'BarangController::show');

$routes->get('uploads/(:segment)', 'BarangController::show/$1');

$routes->get('lihat/(:num)', 'BarangController::lihatGambar/$1');

$routes->get('/produk/deskripsi/(:num)', 'ProdukController::deskripsi/$1');



$routes->get('/produk/cart/(:num)', 'ProdukController::cart/$1');
$routes->post('/produk/cart/(:num)', 'ProdukController::submit/$1');


$routes->get('transaksi/submit/(:num)', 'Transaksi::tampilkanSemuaPemesanan');

$routes->post('/produk/cart/(:num)', 'Transaksi::submit/$1');





// Rute untuk menampilkan gambar produk berdasarkan ID
$routes->get('/produk/lihatGambar/(:num)', 'ProdukController::lihatGambar/$1');

$routes->get('/shopping', 'Home::shopping');
$routes->get('/produk/cart/(:num)', 'CartController::add_to_cart/$1');
$routes->get('/customer', 'CustomerController::index');





