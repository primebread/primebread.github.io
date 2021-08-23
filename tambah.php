<?php
session_start();

if (isset($_SESSION["login"]) ){
header("Location: login.php");
exit;
}

require 'function.php';

//cek apakah tombol submit sudah ditekan atau belum

if (isset ($_POST["submit"])) {

        //cek apakah data berhasil ditambah atau tidak
        if (tambah ($_POST) > 0 ) {
            echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'menu_utama.php';  
            </script>
            
            ";
        } else {
            echo "<script>
            alert('data gagal ditambahkan!');
            document.location.href = 'menu_utama.php';
        </script>
        ";
        }
}

?>
<html lang="en">
<head>
    
    <title>Tambah Data</title>
</head>
<body>
    <h1>
        Tambah Data Roti
    </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="jenis_produk">Jenis Produk:</label>
                <input type="text" name="jenis_produk" id="jenis_produk">
            </li>
            <li>
                <label for="varian_produk">Varian Produk:</label>
                <input type="text" name="varian_produk" id="varian_produk">
            </li>
            <li>
                <label for="berat">Berat:</label>
                <input type="text" name="berat" id="berat">
            </li>
            <li>
                <label for="gambar">Gambar:</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
            <button type="submit" name="submit">Tambah Data!</button> 
            </li>

        </ul>


    </form>
</body>
</html>