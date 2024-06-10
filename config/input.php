<?php
include('konekdb.php');

// Mendapatkan data dari form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];


// Menggunakan prepared statements untuk keamanan
$sql = "INSERT INTO mahasiswa (id, nip, nama, alamat, kota) VALUES ('', '$nip', '$nama', '$alamat', '$kota')";

// Eksekusi dan cek hasil
if ($koneksi->query($sql) === true) {
    // Redirect ke halaman utama jika berhasil
    header("Location: ../index.php");
    exit;
} else {
    echo "Tidak dapat menyimpan data!<br>";
}

// Menutup statement dan koneksi
$koneksi->close();
