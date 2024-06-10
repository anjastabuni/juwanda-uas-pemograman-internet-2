<?php

$localhost = "localhost";
$user = "root";
$password = "";
$db = "testdb";

// Membuat koneksi ke database
$koneksi = mysqli_connect($localhost, $user, $password, $db);

// Memeriksa koneksi
if (!$koneksi) {
    die("Gagal koneksi ke database: " . mysqli_connect_error());
}
