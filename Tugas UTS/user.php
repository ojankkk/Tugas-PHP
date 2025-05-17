<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['username'];
    $awal_kerja = $_POST['waktu'];
    $usia = $_POST['usia'];
    $nomor_telepon = $_POST['telp'];

    // Query simpan data
    $query = "INSERT INTO datadiri (nama, awal_kerja, usia, nomor_telepon) 
              VALUES ('$nama', '$awal_kerja', '$usia', '$nomor_telepon')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil disimpan!');</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Isi Biodata</title>
  <style>
    body {
      background-color: white;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Arial, sans-serif;
    }
    .login-box {
      width: 400px;
      padding: 20px;
      border-radius: 40px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    form {
      margin-top: 30px;
      text-align: left;
    }
    label {
      font-weight: bold;
      display: block;
      margin: 10px 0 5px;
      text-align: left;
      padding-left: 10%; 
    }
    input[type="text"],
    input[type="date"],
    input[type="number"] {
      width: 80%; 
      padding: 10px;
      margin: 0 auto 10px auto;
      display: block;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .login-btn {
      width: 80%;
      padding: 10px;
      margin: 0 auto 10px auto;
      display: block;
      background-color: #00b86b;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .tampil-btn{
      width: 80%;
      padding: 10px;
      margin: 0 auto 10px auto;
      display: block;
      background-color: green;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .tampil-btn:hover{
        background-color: green;
    }
    .login-btn:hover {
      background-color: #009e5b;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Data Kerja</h2>

    <!-- FORM FIX: tambahkan method="POST" dan action="" -->
    <form method="POST" action="">
      <label for="username">Nama Lengkap Anda</label>
      <input type="text" id="username" name="username" placeholder="Masukkan Nama" required>

      <label for="waktu">Kapan Awal Bekerja</label>
      <input type="date" id="waktu" name="waktu" required>

      <label for="usia">Berapa Usia Anda</label>
      <input type="number" id="usia" name="usia" placeholder="Masukkan Usia Anda" required>

      <label for="telp">Nomor Telepon</label>
      <input type="number" id="telp" name="telp" placeholder="Masukkan Nomor Telp Anda" required>

      <!-- Button submit harus ada name="submit" -->
      <button type="submit" name="submit" class="login-btn">Login</button>
    </form>

    <a href="tampil.php">
        <button type="submit" name="tampil" class="tampil-btn">Lihat Data</button>
      </a>
  </div>
</body>
</html>
