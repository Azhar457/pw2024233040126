<?php
// Sertakan file koneksi
include 'koneksi.php';

// Ambil data dari formulir HTML
$nama = $_POST['nama'];

// Query untuk menyimpan data ke database
$sql = "INSERT INTO User (Username) VALUES ('$nama')";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
