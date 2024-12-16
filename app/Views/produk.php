<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    <link rel="stylesheet" href="<?= base_url('css/product.css'); ?>">
    <title>Kintakun</title>
  </head>
  <body>
    

   <div class="navbar">
    <ul class="nav">
        <li class="nav-item">
            <img src="<?= base_url('images/image.png'); ?>", style="width: 150px; height: 70px;">
          </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url(''); ?>" style="margin-top: 15px; color: rgb(204, 167, 35); font-weight: bold;">Home</a>
          
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
          <li class="nav-item">
            <i class="bi bi-search"style="font-size:20px; color: #6b6161; margin-right:10px; margin-top: 20px; font-weight: bold;"></i>
          </li>
          <li class="nav-item">
            <i class="bi bi-person-fill" style="font-size:20px; color: #6b6161; margin-right:10px; margin-top: 15px;"></i>
          </li>
          <li class="nav-item">
            <i class="bi bi-bag-fill" style="font-size:20px;  color: #6b6161; margin-right:10px; margin-top: 15px;"></i>
          </li>
      </ul>
   </div>

   <div class="daftarProduct">
    <div class="container text-center">
        <div class="row">
            <?php foreach ($barang as $item): ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                         <!-- Tampilkan gambar -->
                    <?php if ($item['gambar']): ?>
                        <div class="image-container">
                            <img src="<?= base_url('lihat/' . $item['id_barang']); ?>" class="card-img-top" alt="<?= esc($item['nama_barang']); ?>" style="height: 300px; object-fit: cover;">
                            <!-- Quickview button -->
                            <div class="quickview">Quick View</div>
                        </div>
                    <?php else: ?>
                        <div class="image-container">
                            <img src="<?= base_url('images/default.jpg'); ?>" class="card-img-top" alt="Default Image" style="height: 300px; object-fit: cover;">
                            <!-- Quickview button -->
                            <div class="quickview">Quick View</div>
                        </div>
                    <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['nama_barang']; ?></h5>
                            <p class="card-text">Rp <?= number_format($item['harga'], 0, ',', '.'); ?></p>
                            <a href="<?= base_url('produk/deskripsi/' . $item['id_barang']); ?>" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

    
  </div>
</div>
   </div>

   



  
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  
   
  </body>
</html>