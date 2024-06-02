<?php 
// Informasi koneksi database
$host = 'localhost'; // Host database
$user = 'root'; // Username database
$password = ''; // Password database
$database = 'tugas_pw'; // Nama database

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query untuk mengambil data mahasiswa
$sql = "SELECT nrp, nama, email, jurusan, gambar FROM mahasiswa";
$result = $koneksi->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) {  ?>
            <?php $no = 1; ?>
            <?php while($row = $result->fetch_assoc()) { ?>
                    <tr>
                            <td> <?= $no++ ?></td>
                            <td><img src="./assets/img/<?= $row["gambar"]?> " alt="Gambar" style="width:100px;"></td>
                            <td><?= $row["nrp"]?></td>
                            <td><?= $row["nama"]?></td>
                            <td><?= $row["email"]?></td>
                            <td><?= $row["jurusan"]?></td>
                            <td><a href="ubah.php?nrp=<?= $row["nrp"] ?>" onclick="return confirm('yakin?');">Ubah</a> | <a href="hapus.php?nrp= <?= $row["nrp"]?>" onclick="return confirm('yakin?');">Hapus</a></td>
                          </tr>
            <?php    }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
            }
            ?>
            </tbody>
    </table>
            <form action="tambah.php" method="POST" enctype="multipart/form-data" >
        <label for="nrp">NRP: </label>
        <input type="text" id="nrp" name="nrp" required><br><br>
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="jurusan">Jurusan: </label>
        <input type="text" id="jurusan" name="jurusan" required><br><br>
        <label for="gambar">Gambar: </label>    
        <input type="file" id="gambar" name="gambar" required><br><br>
        <button type="submit">Tambah Data</button>
    </form> 
</body>
</html>