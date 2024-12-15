<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASELOLELOLE</title>
    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }
        body {
            margin: 0;
            padding: 0;
        }
        h1 {
            text-transform: uppercase;
            color: salmon;
            margin-top: 20px;
        }
        .base {
            width: 400px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ededed;
        }
        label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }
        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: salmon;
        }
        button {
            background-color: salmon;
            color: #fff;
            padding: 10px;
            font-size: 12px;
            border: 0;
            margin-top: 20px;
            cursor: pointer;
        }
        /* Tombol Kembali ke Shop */
        .back-to-shop {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: lightblue;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }
        .back-to-shop:hover {
            background-color: #3399cc;
        }
    </style>
</head>
<body>
    <!-- Tombol Kembali ke Shop -->
    <a href="shop.php" class="back-to-shop">Kembali ke Shop</a>

    <center><h1>Tambah Produk</h1></center>

    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" autofocus="" required="">
            </div>
            <div>
                <label>Deskripsi</label>
                <input type="text" name="deskripsi">
            </div>
            <div>
                <label>Harga Beli</label>
                <input type="text" name="harga_beli" required="">
            </div>
            <div>
                <label>Harga Jual</label>
                <input type="text" name="harga_jual" required="">
            </div>
            <div>
                <label>Gambar Produk</label>
                <input type="file" name="gambar_produk" required="">
            </div>
            <div>
                <button type="submit">Simpan Produk</button>
            </div>
        </section>
    </form>
</body>
</html>
