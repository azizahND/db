<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
</head>
<body>
    <h1>Input Barang</h1>
    <form action="/barang" method="post" enctype="multipart/form-data">

        <label for="id_subkategori">Subkategori:</label><br>
        <input type="number" id="id_subkategori" name="id_subkategori" required><br><br>

        <label for="brand">Brand:</label><br>
        <input type="text" id="brand" name="brand" required><br><br>

        <label for="nama_barang">Nama Barang:</label><br>
        <input type="text" id="nama_barang" name="nama_barang" required><br><br>

        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga" required><br><br>

        <label for="stok">Stok:</label><br>
        <input type="number" id="stok" name="stok" required><br><br>

        <label for="deksripsi">Deskripsi:</label><br>
        <textarea id="deksripsi" name="deksripsi" rows="5" cols="30" required></textarea><br><br>

        <label for="gambar">Gambar:</label><br>
        <input type="file" id="gambar" name="gambar" accept="image/*"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
