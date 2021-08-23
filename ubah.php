<?php
require 'function.php';

//ambil data URL
$id = $_GET["id"];

//query data menu produk berdasarkan id

$produk = query("SELECT * FROM menu_produk WHERE id =$id")[0];

//cek apakah tombol submit sudah ditekan atau belum

if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'menu_utama.php';  
            </script>
            
            ";
    } else {
        echo "<script>
            alert('data gagal diubah!');
            document.location.href = 'menu_utama.php';
        </script>
        ";
    }
}

?>
<html lang="en">

<head>

  <title>Ubah Data</title>
</head>

<body>
  <h1>
    Ubah Data Roti
  </h1>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $produk["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $produk["gambar"]; ?>">
    <ul>
      <li>
        <label for="jenis_produk">Jenis Produk:</label>
        <input type="text" name="jenis_produk" id="jenis_produk" required value="<?= $produk["jenis_produk"]; ?>">
      </li>
      <li>
        <label for="varian_produk">Varian Produk:</label>
        <input type="text" name="varian_produk" id="varian_produk" required value="<?= $produk["varian_produk"]; ?>">
      </li>
      <li>
        <label for="berat">Berat:</label>
        <input type="text" name="berat" id="berat" required value="<?= $produk["berat"]; ?>">
      </li>
      <li>
        <label for="gambar">Gambar:</label>
        <img src="gambar/<?= $produk['gambar']; ?>" width="40"> <br>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">Ubah Data!</button>
      </li>

    </ul>


  </form>
</body>

</html>