<?php
include('koneksi.php');

// Ambil data produk berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM produk WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
    
    $data = mysqli_fetch_assoc($result);
    if (!$data) {
        echo "Produk tidak ditemukan!";
        exit;
    }
} else {
    echo "ID tidak ditemukan!";
    exit;
}

// Proses update produk
if (isset($_POST['update'])) {
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];

    // Update query
    $query_update = "UPDATE produk SET nama_produk='$nama_produk', deskripsi='$deskripsi', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id=$id";
    $result_update = mysqli_query($koneksi, $query_update);

    if ($result_update) {
        header("Location: index.php");
    } else {
        echo "Gagal memperbarui data!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <style>
        * { font-family: "Trebuchet MS"; }
        .base { width: 400px; margin: auto; padding: 20px; background-color: #f4f4f4; border-radius: 5px; }
        input, textarea { width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #ddd; }
        button { background-color: salmon; color: white; border: none; padding: 10px; cursor: pointer; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Edit Produk</h2>
    <div class="base">
        <form method="POST">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" required>
            
            <label>Deskripsi</label>
            <textarea name="deskripsi" rows="3" required><?php echo $data['deskripsi']; ?></textarea>

            <label>Harga Beli</label>
            <input type="number" name="harga_beli" value="<?php echo $data['harga_beli']; ?>" required>

            <label>Harga Jual</label>
            <input type="number" name="harga_jual" value="<?php echo $data['harga_jual']; ?>" required>
            
            <button type="submit" name="update">Update Produk</button>
        </form>
    </div>
</body>
</html>
