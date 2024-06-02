<?php
// Include file koneksi database
include 'koneksi.php';

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa apakah username dan password cocok
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil dieksekusi
if ($result) {
    // Periksa apakah ada baris yang sesuai (login berhasil)
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            // Login berhasil, arahkan pengguna ke halaman selanjutnya
            header('Location: dashboard.php');
            exit;
        } else {
            // Password tidak cocok
            echo "Login gagal. Username atau password salah.";
        }
    } else {
        // Tidak ada baris yang sesuai dengan username yang diberikan
        echo "Login gagal. Username atau password salah.";
    }
} else {
    // Jika query gagal dieksekusi, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
