<?php
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
    
    <title>Tambah Promo</title>
</head>
<body>
    <h1>
        Tambah Data Roti
    </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="jenis_produk">Promo:</label>
                <input type="text" name="jenis_produk" id="jenis_produk">
            </li>
            <li>
                <label for="varian_produk">Jenis:</label>
                <input type="text" name="varian_produk" id="varian_produk">
            </li>
            <li>
                <label for="date">Tanggal</label>
                <input type="date" name="berat" id="date">
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