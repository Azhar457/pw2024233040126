<?php
// Koneksi ke database
include 'index.php';

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];
$gambar = $_FILES['gambar']['name'];

$sql = "INSERT INTO mahasiswa (nrp, nama, email, jurusan, gambar) VALUES ('$nrp', '$nama', '$email', '$jurusan', '$gambar')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data baru berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$uploaddir = "./assets/img/";
$uploadfile = $uploaddir . basename($_FILES['gambar']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile)) {
    echo "
    <script>
    alert('data berhasil dihapus!');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('ada yang salah!');
    document.location.href = 'index.php';
    </script>
    ";
}
