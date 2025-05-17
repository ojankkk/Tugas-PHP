<?php
include 'koneksi.php';

$query = "SELECT * FROM datadiri ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Diri</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 14px;
    }
    th, td {
      padding: 8px;
      border: 1px solid #ddd;
      text-align: center;
    }
    th {
      background-color: #00b86b;
      color: white;
    }
    .back-btn {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 15px;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<h2>Data Diri yang Tersimpan</h2>

<table>
  <tr>
    <th>Nama</th>
    <th>Awal Kerja</th>
    <th>Usia</th>
    <th>No. Telepon</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['awal_kerja'] ?></td>
    <td><?= $row['usia'] ?></td>
    <td><?= $row['nomor_telepon'] ?></td>
  </tr>
  <?php } ?>
</table>

<!-- ✅ Tombol balik ke form -->
<a href="user.php">
    <button type="submit" class="back-btn" name="balik">balik ke halaman awal</button>
</a>

</body>
</html>
