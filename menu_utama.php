<?php
session_start();

if (!isset($_SESSION["login"]) ){
  header("Location: login.php");
  exit;
  }

require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "primebread");
$result = mysqli_query($conn, "SELECT * FROM menu_produk");

$produk = query ("SELECT * FROM menu_produk ORDER BY id DESC");
// tombol cari ditekan
if (isset ($_POST ["cari"]) ) {
    $produk = cari ($_POST["keyword"]);
} 
?>
<!--  -->
<!--  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
</head>
<body>
    
<h1>MENU PRODUK</h1>
<a href="tambah.php"> Tambah Roti</a>
<!--  -->
<!-- <br><br> -->
<form action="" method="post">
<input type="text" name="keyword" size="30" autofocus placeholder
="masukan keyword pencarian..." autocomplete="off">
<button type ="submit" name="cari">Cari!</button>
</form>
<br>
<!--  -->
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Jenis</th>
        <th>varian</th>
        <th>berat</th>
        <th>gambar</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach($produk as $row):?>
    <tr>
    <td> <?= $i;?></td>
    <td>
        <a href="ubah.php?id=<?= $row["id"];?>">ubah</a>
        <a href="hapus.php?id=<?= $row["id"]; ?>" 
        onclick="return confirm('yakin untuk menghapus?');">hapus</a>
    </td>
    <td><?= $row["jenis_produk"]; ?></td>
    <td><?= $row["varian_produk"]; ?></td>
    <td><?= $row["berat"]; ?></td>
    <td><img src="gambar/<?= $row["gambar"]; ?>" width="80"></td>
 </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>