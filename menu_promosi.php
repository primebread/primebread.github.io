<?php
session_start();

if (!isset($_SESSION["login"]) ){
  header("Location: login.php");
  exit;
  }
require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "primebread");
$result = mysqli_query($conn, "SELECT * FROM menu_promosi");

$promo = query ("SELECT * FROM menu_promosi ORDER BY id DESC");
// tombol cari ditekan
if (isset ($_POST ["cari"]) ) {
    $promo = cari ($_POST["keyword"]);
} 
?>
<!--  -->
<!--  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Promosi</title>
</head>
<body>
    
<h1>MENU PROMO</h1>
<a href="tambah_promo.php"> Tambah Promosi</a>
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
        <th>promo</th>
        <th>jenis</th>
        <th>tanggal</th>
        <th>gambar</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach($promo as $row):?>
    <tr>
    <td> <?= $i;?></td>
    <td>
        <a href="ubah.php?id=<?= $row["id"];?>">ubah</a>
        <a href="hapus.php?id=<?= $row["id"]; ?>" 
        onclick="return confirm('yakin untuk menghapus?');">hapus</a>
    </td>
    <td><?= $row["promo"]; ?></td>
    <td><?= $row["jenis"]; ?></td>
    <td><?= $row["tanggal"]; ?></td>
    <td><img src="gambar/<?= $row["gambar"]; ?>" width="80"></td>
 </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>