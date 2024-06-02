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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
<div class="container">
    <div class="row">
        <?php foreach($mahasiswa as $m) { ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="img/<?= $m['gambar']; ?>" class="card-img-top" alt="<?= $m['nama']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $m['nama']; ?></h5>
                    <p class="card-text">
                        <strong>NRP:</strong> <?= $m['nrp']; ?><br>
                        <strong>Email:</strong> <?= $m['email']; ?><br>
                        <strong>Jurusan:</strong> <?= $m['jurusan']; ?>
                    </p>
                    <!-- Jika Anda ingin menambahkan tombol, bisa diletakkan di sini -->
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
