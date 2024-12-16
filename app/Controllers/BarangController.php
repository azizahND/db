<?php

namespace App\Controllers;
use App\Models\BarangModel;

class BarangController extends BaseController
{
    public function simpan()
    {
        $model = new BarangModel();
    
        // Ambil data dari form
        $data = [
            'id_subkategori' => $this->request->getPost('id_subkategori'),
            'brand'          => $this->request->getPost('brand'),
            'nama_barang'    => $this->request->getPost('nama_barang'),
            'harga'          => $this->request->getPost('harga'),
            'stok'           => $this->request->getPost('stok'),
            'deksripsi'      => $this->request->getPost('deksripsi'),
        ];
    
        // Ambil gambar jika ada
        $gambarFile = $this->request->getFile('gambar');
        $gambarFile = $this->request->getFile('gambar');
        if ($gambarFile && $gambarFile->isValid()) {
            $data['gambar'] = file_get_contents($gambarFile->getTempName());
        } else {
            return redirect()->back()->with('error', 'Gagal mengunggah gambar.');
        }
    
        // Simpan ke database
        if ($model->insert($data)) {
            return redirect()->to('/barang')->with('success', 'Barang berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data.');
        }
    }
    


public function show()
    {
        $model = new BarangModel();

        // Ambil semua data barang dari database
        $data['barang'] = $model->findAll(); 

        // Kirim data ke view
        return view('tampil', $data);
    }

   
public function showBarang()
{
    $model = new BarangModel();

    // Ambil 5 produk dari tabel barang
    $data['barang'] = $model->orderBy('id_barang', 'DESC')->limit(5)->findAll();

    // Kirim data ke view
    return view('home', $data);
}

public function lihatGambar($id)
{
    $model = new BarangModel();
    $barang = $model->find($id);

    if ($barang && $barang['gambar']) {
        header("Content-Type: image/jpeg"); // Sesuaikan dengan format gambar
        echo $barang['gambar'];
        exit;
    } else {
        return redirect()->back()->with('error', 'Gambar tidak ditemukan.');
    }
}



}

