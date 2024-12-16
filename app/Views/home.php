<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    <link rel="stylesheet" href="<?= base_url('css/home.css'); ?>">
    <title>Kintakun</title>
  </head>
  <body>
    

   <div class="navbar">
    <ul class="nav">
        <li class="nav-item">
            <img src="<?= base_url('images/image.png'); ?>", style="width: 150px; height: 70px;">
          </li>
        <li class="nav-item">
          <a class="nav-link active" href="" style="margin-top: 15px; color: rgb(204, 167, 35); font-weight: bold;">Home</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #6b6161; margin-top: 15px; font-weight: bold;" href="#">Bath & Bedding</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #6b6161; margin-top: 15px; font-weight: bold;" href="#">Home Decor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: #6b6161; margin-top: 15px; font-weight: bold;" href="#">Baby Product</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #6b6161; margin-top: 15px; font-weight: bold;">Exclusive Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: #6b6161; margin-top: 15px; font-weight: bold;">Hi Breath</a>
          </li>   
          <li class="nav-item ms-auto">
            <i class="bi bi-search" style="font-size:20px; color: #6b6161; margin-right:10px; margin-top: 20px; font-weight: bold;"></i>
        </li>
        <li class="nav-item ms-auto">
            <i class="bi bi-person-fill" style="font-size:20px; color: #6b6161; margin-right:10px; margin-top: 15px;"></i>
        </li>
        <li class="nav-item ms-auto">
            <i class="bi bi-bag-fill" style="font-size:20px; color: #6b6161; margin-right:10px; margin-top: 15px;"></i>
        </li>
      </ul>
   </div>

   <div class="iklan">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

      

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url('images/gambar1.png'); ?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('images/gambar2.png'); ?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('images/gambar3.png'); ?>" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
   </div>

   <div class="ket">
   <div class="container text-center ">
      <div class="row">
         <div class="col">
            <i class="bi bi-trophy-fill"></i> Garansi Produk
         </div>
         <div class="col">
            <i class="bi bi-truck"></i> Gratis Ongkir
         </div>
         <div class="col">
            <i class="bi bi-hand-thumbs-up-fill"></i> Produk Original
         </div>
      </div>
   </div>
</div>

   <div class="subkategori">
    <div class="container-fluid text-center p-4 shadow " style="background-color: #f9f9f9; border-radius: 50px;">
        <div class="row justify-content-around align-items-center">
            <div class="col-auto">
                <a href="<?= base_url('produk'); ?>">
                    <img src="<?= base_url('images/bed-sheets.png'); ?>" style="width: 90px; height: 80px;" alt="sprei">
                </a>
                <h4>Sprei</h4>
            </div>
            <div class="col-auto">
                <img src="<?= base_url('images/bed.png'); ?>" style="width: 90px; height: 80px;" alt="sprei">
                <h4>Bedcover</h4>
            </div>
            <div class="col-auto">
                <img src="<?= base_url('images/pillow.png'); ?>" style="width: 90px; height: 80px;" alt="pillow">
                <h4>P Tidur</h4>
            </div>
            <div class="col-auto">
                <img src="<?= base_url('images/towel.png'); ?>" style="width: 70px; height: 60px;" alt="handuk">
                <h4 style="margin-top:13px">Handuk</h4>
            </div>
            <div class="col-auto">
                <img src="<?= base_url('images/box.png'); ?>" style="width: 70px; height: 70px;" alt="box">
                <h4>Storage</h4>
            </div>
            <div class="col-auto">
                <img src="<?= base_url('images/carpet.png'); ?>" style="width: 70px; height: 70px;" alt="carpet">
                <h4>Dekorasi</h4>
            </div>
            <div class="col-auto">
                <img src="<?= base_url('images/baby-crib.png'); ?>" style="width: 70px; height: 70px;" alt="bayi">
                <h4>Produk Bayi</h4>
            </div>
            <div class="col-auto">
                <img src="<?= base_url('images/menu.png'); ?>" style="width: 70px; height: 70px;" alt="menu">
                <h4>Semua Item</h4>
            </div>
        </div>
    </div>
</div>


    




<div class="container-fluid mt-5 mb-10">
<div class="judul" style="margin-top: 20px; color: #808080;">
  <h1>Produk Populer</h1>
</div>
    <div class="row text-center d-flex justify-content-start flex-nowrap">
        <!-- Looping untuk menampilkan 5 produk -->
        <?php if (!empty($barang)): ?>
            <?php 
                // Ambil hanya 5 item pertama dari array barang
                $barang_limited = array_slice($barang, 0, 5);
            ?>
            <?php foreach ($barang_limited as $item): ?>
                <div class="card me-3" style="width: 20rem; height:30rem; margin:12px; margin-bottom:30px">
                    <!-- Tampilkan gambar -->
                    <?php if ($item['gambar']): ?>
                        <img src="<?= base_url('lihat/' . $item['id_barang']); ?>" class="card-img-top" alt="<?= esc($item['nama_barang']); ?>" style="height: 300px; object-fit: cover;">
                    <?php else: ?>
                        <img src="<?= base_url('images/default.jpg'); ?>" class="card-img-top" alt="Default Image" style="height: 400px; object-fit: cover;">
                    <?php endif; ?>

                    <div class="card-body">
                        <!-- Tampilkan nama barang -->
                        <h5 class="card-title"><?= esc($item['nama_barang']); ?></h5>
                        <!-- Tampilkan harga -->
                        <p class="card-text">Rp <?= number_format($item['harga'], 0, ',', '.'); ?></p>
                        <!-- Tombol -->
                        <a href="<?= base_url('produk/deskripsi/' . $item['id_barang']); ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Produk tidak tersedia.</p>
        <?php endif; ?>
    </div>
</div>





  
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  
   
  </body>
</html>