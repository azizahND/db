<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
    <link rel="stylesheet" href="<?= base_url('css/cart.css'); ?>">
    <title>Kintakun</title>
  </head>
  <body>
    

   <div class="navbar">
    <ul class="nav">
        <li class="nav-item">
            <img src="<?= base_url('images/image.png'); ?>", style="width: 150px; height: 70px;">
          </li>
        <li class="nav-item">
          <a class="nav-link active" href="/" style="margin-top: 15px; color: rgb(204, 167, 35); font-weight: bold;">Home</a>
          
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

   <div class="step">
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Shopping Cart ></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Checkout Details > </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Order Complete</a>
                </li>
                
            </ul>
            </div>
        </div>
</nav>
   </div>


<div class="transaksi">
<div class="container-fluid ">
  <div class="row align-items-start">
    <div class="col">
    <form method="POST" action="<?= base_url('transaksi/submit'); ?>">
                    <div class="mb-3">
                        <label for="nama_penerima" class="form-label">Nama Penerima</label>
                        <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Address</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Telepon">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="catatan" class="form-label">Catatan Tambahan</label>
                        <textarea class="form-control" id="catatan" name="catatan" rows="3" placeholder="Catatan Tambahan"></textarea>
                    </div>
                    
    </div>
    <div class="col">
      <h1>Your order</h1>
      <div class="det1">
      <div class="container ">
        <div class="row align-items-start">
          <div class="col">
            Product
          </div>
          <div class="col">
            Subtotal
          </div>
         
        </div>
      </div>
      </div>

      <div class="det2">
    <div class="container  mt-5">
        <div class="row align-items-start">
            <?php if ($produk): ?>
                <div class="col-md-4 mb-4">
                    <!-- Menampilkan gambar --> 
                    <?php if ($produk['gambar']): ?>
                      <img src="<?= base_url('produk/lihatGambar/' . $produk['id_barang']); ?>" class="card-img-top" alt="<?= esc($produk['nama_barang']); ?>" style="height: 500px; width: 800px; object-fit: cover;">

                    <?php else: ?>
                        <img src="<?= base_url('images/default.jpg'); ?>" class="card-img-top" alt="Default Image" style="height: 400px; object-fit: cover;">
                    <?php endif; ?>
                
                    <!-- Nama produk -->
                    <h5 class="mt-2"><?= $produk['nama_barang']; ?></h5>
                
                    <!-- Harga produk -->
                    
                </div>

                <div class="col">
                   
                    <p>Rp <?= number_format($produk['harga'], 0, ',', '.'); ?></p>
                </div>


            <?php else: ?>
                <p>Produk tidak ditemukan.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="Jumlah">
      <div class="container ">
        <div class="row align-items-start">
          <div class="col">
          <h3>Jumlah</h3>
          </div>
          <div class="col">
          <div class="mb-1">
                        
                        <input type="text" class="form-control" id="jumlah" name="jumlah" >
                    </div>
          </div>
         
      </div>
      </div>
      </div>



      <div class="shipping">
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <h3>Shipping</h3>
            </div>
            <div class="col">
                <form action="#" method="POST">
                   
                    <select id="shipping" name="shipping">
                        <?php foreach ($shippingOptions as $shipping): ?>
                            <option value="<?= $shipping['id_shipping']; ?>">
                                <?= $shipping['nama_shipping']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </form>
            </div>
        </div>
    </div>
</div>


      <div class="total">
      <div class="container ">
        <div class="row align-items-start">
          <div class="col">
          <h3>Total</h3>
          </div>
          <div class="col">
           total
          </div>
         
      </div>
      </div>
      </div>




      <div class="det3">
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="kode_voucher" class="form-label">Masukan Kode Voucher disini</label>
                                        <input type="text" class="form-control" id="kode_voucher" name="kode_voucher" placeholder="Kode Voucher">
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-success" style="margin-top:25px">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
         
       
      </div>
      </div>
      </div>

      

      <a href="<?= base_url('transaksi/submit/' . $produk['id_barang']); ?>" class="btn btn-success"
          onclick="storeProductToSession(<?= htmlspecialchars(json_encode($produk), ENT_QUOTES, 'UTF-8') ?>)">
          Bayar Sekarang
        </a>




    </div>
    
  </div>
</div>
</div>
  



  
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  
   
  </body>

  <script>
function storeProductToSession(product) {
    $.post('<?= base_url('cart/store') ?>', { product: product }, function(response) {
        console.log(response.message);
    });
}
</script>

</html>


