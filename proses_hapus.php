<?php
include('koneksi.php');

// Ambil ID dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query hapus data
    $query = "DELETE FROM produk WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menghapus produk: " . mysqli_error($koneksi);
    }
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>
