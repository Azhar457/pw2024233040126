<?php  

$mahasiswa = [
[
    'gambar' => 'apple.png',
    'nrp' => '233040112',
    'nama' => 'Apple',
    'email' => 'apple@gmail.com',
    'jurusan' => 'Brand HP'
],
[
    'gambar' => 'asus.png',
    'nrp' => '233040111',
    'nama' => 'Asus',
    'email' => 'asus@gmail.com',
    'jurusan' => 'Brand HP'
],
[
    'gambar' => 'huawei.png',
    'nrp' => '233040122',
    'nama' => 'Huawei',
    'email' => 'Huawei@gmail.com',
    'jurusan' => 'Brand HP'
],
[
    'gambar' => 'lenovo.png',
    'nrp' => '233040123',
    'nama' => 'Lenovo',
    'email' => 'lenovo@gmail.com',
    'jurusan' => 'Brand HP'
],
[
    'gambar' => 'oppo.png',
    'nrp' => '233040124',
    'nama' => 'Oppo',
    'email' => 'Oppo@gmail.com',
    'jurusan' => 'Brand HP'
],
[
    'gambar' => 'realme.png',
    'nrp' => '233040125',
    'nama' => 'Realme',
    'email' => 'Realme@gmail.com',
    'jurusan' => 'Brand HP'
],
[
    'gambar' => 'samsung.png',
    'nrp' => '233040126',
    'nama' => 'Samsung',
    'email' => 'samsung@gmail.com',
    'jurusan' => 'Brand HP'
],
[
    'gambar' => 'sony.png',
    'nrp' => '233040127',
    'nama' => 'Sony',
    'email' => 'sony@gmail.com',
    'jurusan' => 'Brand HP'
],
[
    'gambar' => 'vivo.png',
    'nrp' => '233040128',
    'nama' => 'Vivo',
    'email' => 'vivo@gmail.com',
    'jurusan' => 'Brand HP'
],
[
    'gambar' => 'xiaomi.png',
    'nrp' => '233040129',
    'nama' => 'Xiaomi',
    'email' => 'xiaomi@gmail.com',
    'jurusan' => 'Brand HP'
],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>
            <img src="img/<?= $m['gambar']; ?>" width = 200px >
        </li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        </li>
    </ul>
    <?php } ?>
</body>
</html>