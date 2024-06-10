<?php
include('konekdb.php');

// Mendapatkan data dari form
$id = $_GET['id'];



// Menggunakan prepared statements untuk keamanan
$sql = "DELETE FROM mahasiswa WHERE id='$id'";

// Eksekusi dan cek hasil
if ($koneksi->query($sql) === true) {
    // Redirect ke halaman utama jika berhasil
    header("Location: ../index.php");
    exit;
} else {
    echo "Tidak dapat menghapus data!<br>";
}

// Menutup statement dan koneksi
$koneksi->close();
