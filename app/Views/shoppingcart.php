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

    <style>
        .cart-item {
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }
        .cart-item img {
            width: 100px;
            height: auto;
        }
        .cart-totals {
            border-top: 1px solid #ddd;
            padding-top: 15px;
            margin-top: 15px;
        }
    </style>
  </head>
  <body>

    <div class="navbar">
        <ul class="nav">
            <li class="nav-item">
                <img src="<?= base_url('images/image.png'); ?>" style="width: 150px; height: 70px;">
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/" style="margin-top: 15px; color: rgb(204, 167, 35); font-weight: bold;">Home</a>
            </li>
            <!-- Additional navbar items... -->
        </ul>
    </div>

    <div class="container mt-5">
    <h2>Shopping Cart</h2>
    <div class="row">
        <!-- Bagian Daftar Barang -->
        <div class="col-md-8">
            <?php if (!empty($cartItems)): ?>
                <?php foreach ($cartItems as $item): ?>
                    <div class="cart-item">
                        <div class="d-flex">
                            <!-- Gambar Barang -->
                            <img src="<?= base_url('images/' . $item['image']); ?>" alt="Product Image">
                            <div class="ms-3">
                                <!-- Detail Barang -->
                                <h5><?= $item['nama_barang']; ?></h5>
                                <p class="mb-0">Price: Rp <?= number_format($item['harga'], 0, ',', '.'); ?></p>
                                <div class="d-flex align-items-center">
                                    <!-- Kontrol Jumlah -->
                                    <button class="btn btn-outline-secondary btn-sm">-</button>
                                    <span class="mx-2"><?= $item['jumlah']; ?></span>
                                    <button class="btn btn-outline-secondary btn-sm">+</button>
                                </div>
                            </div>
                            <div class="ms-auto text-end">
                                <!-- Total Harga -->
                                <h5>Rp <?= number_format($item['total'], 0, ',', '.'); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Your cart is empty.</p>
            <?php endif; ?>
        </div>

        <!-- Bagian Ringkasan Total -->
        <div class="col-md-4">
            <h4>Cart Totals</h4>
            <div class="cart-totals">
                <div class="d-flex justify-content-between">
                    <span>Subtotal</span>
                    <span>Rp <?= number_format($total, 0, ',', '.'); ?></span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Total</span>
                    <span>Rp <?= number_format($total, 0, ',', '.'); ?></span>
                </div>
                <!-- Tombol Checkout -->
                <button class="btn btn-primary w-100 mt-3">Proceed to checkout</button>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
