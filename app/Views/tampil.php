<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>

    <!-- Looping untuk menampilkan semua barang -->
    <?php if (!empty($barang)): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Brand</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($barang as $item): ?>
                    <tr>
                        <td><?= esc($item['nama_barang']); ?></td>
                        <td><?= esc($item['brand']); ?></td>
                        <td><?= esc($item['harga']); ?></td>
                        <td><?= esc($item['stok']); ?></td>
                        <td><?= esc($item['deksripsi']); ?></td>
                        <td style="width: 700px; text-align: center;">
                        <td style="width: 700px; text-align: center;">
                            <?php if ($item['gambar']): ?>
                                <img src="<?= base_url('lihat/' . $item['id_barang']); ?>" alt="<?= esc($item['nama_barang']); ?>" style="max-width: 100px; max-height: 100px;">
                            <?php else: ?>
                                <p>No image available</p>
                            <?php endif; ?>
                        </td>

                        


                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Data barang tidak tersedia.</p>
    <?php endif; ?>

</body>
</html>
