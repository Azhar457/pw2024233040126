<?php
// Konfigurasi koneksi database
$host = "localhost"; // Host database (biasanya localhost)
$user = "root"; // Nama pengguna database
$password = ""; // Kata sandi database (kosongkan jika tidak diatur)
$database = "test"; // Nama database

// Buat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
