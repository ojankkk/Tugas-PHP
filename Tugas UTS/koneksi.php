<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'web';

// Bikin koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    // Opsional ➔ buat ngecek kalo koneksi sukses
    // echo "Koneksi berhasil!";
}
?>
