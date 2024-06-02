<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "tugas_pw");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Mengambil NRP dari query string
$nrp = $_GET['nrp'];

// SQL untuk mengambil data mahasiswa yang akan diubah
$sql = "SELECT * FROM mahasiswa WHERE nrp = '$nrp'";
$result = $koneksi->query($sql);
$data = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $gambar = $_POST['gambar'];

    // SQL untuk update data
    $updateSql = "UPDATE mahasiswa SET nama='$nama', email='$email', jurusan='$jurusan', gambar='$gambar' WHERE nrp='$nrp'";
    if ($koneksi->query($updateSql) === TRUE) {
        echo "Data berhasil diupdate.";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $koneksi->error;
    }
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h2>Ubah Data Mahasiswa</h2>
    <form method="post">
        Nama: <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
        Jurusan: <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"><br>
        Gambar: <input type="text" name="gambar" value="<?php echo $data['gambar']; ?>"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>