<?php


namespace App\Controllers;

use App\Models\BarangModel;

use App\Models\ShippingModel;
use App\Models\CustomerModel;
use App\Models\PemesananModel;

class ProdukController extends BaseController
{
    public function deskripsi($id)
{
    $barangModel = new BarangModel();
    $produk = $barangModel->find($id);

    if (!$produk) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException("Produk tidak ditemukan");
    }

    // Hitung subtotal (contoh jumlah default = 1)
    $jumlah = 1; // Jumlah barang yang dibeli (bisa diubah sesuai input user)
    $subtotal = $produk['harga'] * $jumlah;

    // Kirim data produk dan subtotal ke view
    return view('deskripsi', [
        'produk' => $produk,
        'subtotal' => $subtotal,
    ]);
}


     // Menampilkan produk berdasarkan ID (untuk halaman cart.php)
     public function cart($id)
     {
        $barangModel = new BarangModel();
    
    // Memuat model ShippingModel
    $shippingModel = new ShippingModel();

    // Mengambil data produk berdasarkan ID
    $data['produk'] = $barangModel->find($id);

    // Mengambil data shipping
    $data['shippingOptions'] = $shippingModel->findAll();

    // Pastikan data produk ditemukan
    if ($data['produk']) {
        // Mengembalikan view dengan data produk dan shipping options
        return view('cart', $data);
    } else {
        // Jika produk tidak ditemukan, redirect atau tampilkan error
        return redirect()->to('/produk')->with('error', 'Produk tidak ditemukan');
    }
     }
 
     // Menampilkan gambar produk berdasarkan ID
     public function lihatGambar($id)
     {
         // Memuat model BarangModel
         $barangModel = new BarangModel();
     
         // Mengambil data produk berdasarkan ID
         $produk = $barangModel->find($id);
     
         // Pastikan gambar ada
         if ($produk && $produk['gambar']) {
             // Tentukan path gambar
             $path = WRITEPATH . 'uploads/' . $produk['gambar'];
     
             // Pastikan file gambar ada
             if (file_exists($path)) {
                 // Set header untuk menampilkan gambar langsung di browser
                 $mimeType = mime_content_type($path); // Tentukan tipe MIME gambar
                 $this->response->setHeader('Content-Type', $mimeType);
                 return $this->response->setBody(file_get_contents($path));
             } else {
                 return redirect()->to('/produk')->with('error', 'Gambar produk tidak ditemukan');
             }
         } else {
             return redirect()->to('/produk')->with('error', 'Produk atau gambar tidak ditemukan');
         }
     }
     

     public function submit()
    {
        $this->validate([
            'nama_penerima' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required|valid_email',
            'jumlah' => 'required|numeric',
            'shipping' => 'required',
        ]);
    
        // Check if validation passes
        if ($this->validator->getErrors()) {
            return redirect()->back()->withInput()->with('error', 'Please correct the form fields.');
        }
    
        // Initialize models
        $customerModel = new CustomerModel();
        $pemesananModel = new PemesananModel();
    
        // Customer data
        $customerData = [
            'nama' => $this->request->getPost('nama_penerima'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
            'email' => $this->request->getPost('email'),
        ];
    
        // Check if customer exists based on email
        $existingCustomer = $customerModel->where('email', $customerData['email'])->first();
        if ($existingCustomer) {
            // Update customer if exists
            $customerModel->update($existingCustomer['id'], $customerData);
        } else {
            // Insert new customer
            $customerModel->insert($customerData);
            $existingCustomer = $customerModel->find($customerModel->getInsertID()); // Retrieve inserted customer
        }
    
        // Pemesanan data
        $pemesananData = [
            'email_customer' => $existingCustomer['email'], // Use updated customer email
            'id_shipping' => $this->request->getPost('shipping'),
            'kode_voucher' => $this->request->getPost('kode_voucher'), // Make sure this value exists
            'id_barang' => $this->request->getPost('id_barang'), // Ensure this field is properly passed
        ];
    
        // Save pemesanan data
        if ($pemesananModel->insert($pemesananData)) {
            // Redirect with success message
            return redirect()->to('/transaksi/submit')->with('success', 'Pesanan berhasil disimpan');
        } else {
            // Handle error in saving pemesanan
            return redirect()->back()->withInput()->with('error', 'Failed to save pemesanan.');
        }
}

public function index()
    {
        // Membuat instance dari model BarangModel
        $barangModel = new BarangModel();

        // Mengambil data semua barang
        $data['barang'] = $barangModel->findAll();

        // Memanggil view dan mengirim data barang
        return view('produk', $data);
    }


}