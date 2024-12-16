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

   <div class="container-fluid" style="padding: left 20px; padding: right 20px">
          <div class="row">
              <div class="col-md-6">
              <?php if ($produk['gambar']): ?>
                        <img src="<?= base_url('lihat/' . $produk['id_barang']); ?>" class="card-img-top" alt="<?= esc($produk['nama_barang']); ?>" style="height: 800px; width:800px; object-fit: cover;">
                    <?php else: ?>
                        <img src="<?= base_url('images/default.jpg'); ?>" class="card-img-top" alt="Default Image" style="height: 400px; object-fit: cover;">
                        <?php endif; ?>
                      </div>
              <div class="col-md-4" style="margin-left:50px">
                  <h1><?= $produk['nama_barang']; ?></h1>
                  <h2>Brand: <?= $produk['brand']; ?></h2>
                  <h2>Rp <?= number_format($produk['harga'], 0, ',', '.'); ?></h2>
                  <p><?= $produk['deksripsi']; ?></p>
                  <p><strong>Size:</strong></p>
                <!-- Size Buttons -->
                <div class="btn-group" role="group" aria-label="Sizes">
                    <input type="radio" class="btn-check" id="size1" name="size" checked>
                    <label class="btn btn-outline-secondary" for="size1">120 x 200</label>

                    <input type="radio" class="btn-check" id="size2" name="size">
                    <label class="btn btn-outline-secondary" for="size2">160 x 200</label>

                    <input type="radio" class="btn-check" id="size3" name="size">
                    <label class="btn btn-outline-secondary" for="size3">180 x 200</label>

                    <input type="radio" class="btn-check" id="size4" name="size">
                    <label class="btn btn-outline-secondary" for="size4">200 x 200</label>
                </div>
                  <a href="<?= base_url('/produk/cart/' . $produk['id_barang']); ?>" class="btn btn-primary">Beli</a>
              </div>
          </div>
      </div>

  
      <div class="container my-5 ">
        <div class="row">
            <div class="col-12">
                <h3 class="fw-bold">Reviews (0)</h3>
                <p class="text-muted">There are no reviews yet.</p>
                <h4 class="mt-4">Be the first to review <strong></strong></h4>

                <!-- Review Form -->
                <form class="mt-4">
                    <!-- Rating -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Your Rating <span class="text-danger">*</span></label>
                        <div class="d-flex gap-1">
                            <i class="bi bi-star fs-4 text-muted"></i>
                            <i class="bi bi-star fs-4 text-muted"></i>
                            <i class="bi bi-star fs-4 text-muted"></i>
                            <i class="bi bi-star fs-4 text-muted"></i>
                            <i class="bi bi-star fs-4 text-muted"></i>
                        </div>
                    </div>

                    <!-- Review Textarea -->
                    <div class="mb-3">
                        <label for="review" class="form-label fw-bold">Your Review <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="review" rows="4" placeholder="Write your review here..." required></textarea>
                    </div>

                    <!-- Name and Email -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label fw-bold">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <!-- Save Checkbox -->
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="saveInfo">
                            <label class="form-check-label" for="saveInfo">
                                Save my name, email, and website in this browser for the next time I comment.
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit Review</button>
                </form>
            </div>
        </div>
    </div>


  
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  
   
  </body>
</html>