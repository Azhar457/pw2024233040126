<?php
// Include file koneksi database
include 'koneksi.php';

// Ambil data dari form registrasi
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Hash kata sandi sebelum disimpan
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query untuk memeriksa apakah username sudah ada
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil dieksekusi
if ($result) {
    // Periksa apakah username sudah digunakan
    if (mysqli_num_rows($result) > 0) {
        echo "Username sudah digunakan. Silakan pilih username lain.";
    } else {
        // Jika username belum digunakan, simpan data ke database
        $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
        if (mysqli_query($koneksi, $query)) {
            echo "Registrasi berhasil. Silakan login <a href='login.html'>di sini</a>.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    }
} else {
    // Jika query gagal dieksekusi, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
