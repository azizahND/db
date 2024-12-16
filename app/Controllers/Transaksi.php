<?php

namespace App\Controllers;


use App\Models\CustomerModel;
use App\Models\PemesananModel;
use App\Models\PemesananBarangModel;
use App\Models\BarangModel;
use App\Models\ShippingModel;
use App\Models\VoucherModel;



class Transaksi extends BaseController
{
    
    public function saveTransaction()
    {
       
        // Ambil data dari request (seperti dari form di HTML)
        $customerData = [
            'email' => $this->request->getPost('email'),
            'nama_customer' => $this->request->getPost('nama_customer'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
        ];

        // Simpan customer jika belum ada
        $customerModel = new CustomerModel();
        $customerModel->save($customerData);

        // Ambil data pengiriman
        $shippingData = [
            'nama_shipping' => $this->request->getPost('shipping_name'),
        ];
        $shippingModel = new ShippingModel();
        $shippingModel->save($shippingData);
        

        // Ambil data voucher (jika ada)
        $voucherCode = $this->request->getPost('voucher_code');
        $voucherModel = new VoucherModel();
        $voucher = $voucherModel->where('kode_voucher', $voucherCode)->first();

        // Simpan transaksi (order)
        $orderData = [
            'email_customer' => $customerData['email'],
            
            'kode_voucher' => $voucher ? $voucher['kode_voucher'] : null,
            'total_harga' => $this->calculateTotal(), // Misalnya, fungsi untuk menghitung total harga
            'status' => 'pending', // Atau status lain sesuai dengan kebutuhan
        ];

        $orderModel = new PemesananModel();
        $orderModel->save($orderData);

        // Redirect atau tampilkan hasil transaksi
        return redirect()->to('/produk/cart/(:num)');
    }

    // Fungsi untuk menghitung total harga (misalnya berdasarkan produk yang dipesan)
    private function calculateTotal()
    {
        $total = 0;
        // Proses hitung total harga dari produk yang dipesan (misalnya menggunakan data produk yang disimpan sebelumnya)
        return $total;
    }


    public function submit()
{
    $customerModel = new CustomerModel();
    $pemesananModel = new PemesananModel();
    $pemesananBarangModel = new PemesananBarangModel();

    // Ambil data dari POST
    $email = $this->request->getPost('email');
    $nama_penerima = $this->request->getPost('nama_penerima');
    $alamat = $this->request->getPost('alamat');
    $no_hp = $this->request->getPost('no_hp');
    $kode_voucher = $this->request->getPost('kode_voucher');
    $produk = session()->get('produk'); // Ambil data produk dari sesi
    $tanggal_pemesanan = date('Y-m-d'); // Tanggal transaksi

    try {
        // Inisialisasi variabel untuk status penyimpanan
        $status = [
            'customer_saved' => false,
            'pemesanan_saved' => false,
            'pemesanan_barang_saved' => true, // Asumsikan true, akan diubah jika ada error
        ];

        // 1. Simpan data customer (jika belum ada)
        $existingCustomer = $customerModel->find($email);
        if (!$existingCustomer) {
            $customerModel->insert([
                'email' => $email,
                'nama_customer' => $nama_penerima,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
            ]);
            $status['customer_saved'] = true;
        } else {
            $status['customer_saved'] = true; // Sudah ada di database
        }

        // 2. Simpan data pemesanan
        $pemesananModel->insert([
            'email' => $email,
            'id_shipping' => null, // Ganti sesuai input shipping (jika ada)
            'kode_voucher' => $kode_voucher,
            'tanggal_pemesanan' => $tanggal_pemesanan,
            'kode_pos' => null, // Ganti sesuai input (jika ada)
        ]);
        $id_pemesanan = $pemesananModel->getInsertID();
        $status['pemesanan_saved'] = (bool)$id_pemesanan;

        // 3. Simpan data ke tabel pemesanan_barang
        foreach ($produk as $item) {
            $inserted = $pemesananBarangModel->insert([
                'id_pemesanan' => $id_pemesanan,
                'id_barang' => $item['id_barang'],
                'jumlah' => $item['jumlah'],
                'total' => $item['harga'] * $item['jumlah'],
            ]);
            if (!$inserted) {
                $status['pemesanan_barang_saved'] = false; // Jika ada error
                break;
            }
        }

        // Berikan respons JSON dengan status
        return $this->response->setJSON([
            'status' => true,
            'message' => 'Data has been successfully saved.',
            'details' => $status,
        ]);
    } catch (\Exception $e) {
        // Tangkap error jika ada
        return $this->response->setJSON([
            'status' => false,
            'message' => 'An error occurred: ' . $e->getMessage(),
        ]);
    }

    
}


        
    

    public function success()
    {
        return view('transaksi/success');
    }

    public function tampilkanSemuaPemesanan()
    {
        // Inisialisasi model
        $pemesananModel = new PemesananBarangModel();

        // Ambil semua data pemesanan
        $dataPemesanan = $pemesananModel->findAll();

        // Tampilkan data (untuk kebutuhan API/JSON response)
        return $this->response->setJSON([
            'status' => 'success',
            'data' => $dataPemesanan
        ]);
    }
}
