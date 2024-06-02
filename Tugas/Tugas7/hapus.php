<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "tugas_pw");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Mengambil NRP dari query string
$nrp = $_GET['nrp'];

// SQL untuk menghapus data
$sql = "DELETE FROM mahasiswa WHERE nrp = '$nrp'";

if ($koneksi->query($sql) === TRUE) {
    echo "
    <script>
    alert('data berhasil dihapus!');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "<script>
    aler('data gagal dihapus!');
    document.location.href = 'index.php';
    </script>";
}

$koneksi->close();
exit();