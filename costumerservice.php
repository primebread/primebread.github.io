<?php
require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "primebread");
$result = mysqli_query($conn, "SELECT * FROM costumer_service");

// if (isset ($_POST["submit"])) {
//             $nama = mysqli_real_escape_string($koneksi, $_POST["nama"]);
//            $nomer  = mysqli_real_escape_string($koneksi, $_POST["nomer"]);
//           $instansi = mysqli_real_escape_string($koneksi, $_POST["instansi"]);
//             $komentar = mysqli_real_escape_string($koneksi, $_POST["komentar"]);
//             $file = mysqli_real_escape_string($koneksi, $_POST["file"]);
               
//             mysqli_query($conn, "INSERT INTO costumer_service values('','$nama','$nomer','$instansi','$komentar','$file')");
//             echo'<script>window.alert('data berhasil di submit...')
//             window.location="index.php" </script>';
//       //  cek apakah data berhasil ditambah atau tidak
//         if (kontak ($_POST) > 0 ) {
//             echo "
//             <script>
//                 alert('data berhasil ditambahkan!');
//                 document.location.href = 'index.php';  
//             </script>
            
//             ";
//         } else {
//             echo "<script>
//             alert('data gagal ditambahkan!');
//             document.location.href = 'index.php';
//         </script>
//         ";
//         }
// }


// require "function.php";
// if (isset($_POST)['cetak'])){
//   mysqli_query($conn, "insert into kontak set
//   nama = '$_POST[nama]',
//   nomer = '$_POST[nomer]',
//   instansi = '$_POST[instansi]',
//   komentar = '$_POST[komentar]',
//   file = '$_POST[file]',
//   ");
// //   echo "Data sekolah telah berhasil ditambahkan!"

// }


if (isset ($_POST["submit"])) {

  mysqli_query($conn, "insert into tabel_product
  nama = '$_POST[nama]',
  email = '$_POST[email]',
  sekolah = '$_POST[sekolah]',
  alamat = '$_POST[alamat]',
  kota = '$_POST[kota]',
  kabupaten = '$_POST[kabupaten]'
  ");
  //cek apakah data berhasil ditambah atau tidak
  if (kontak ($_POST) > 0 ) {
      echo "
      <script>
          alert('data berhasil ditambahkan!');
          document.location.href = 'kontak.php';  
      </script>
      
      ";
  } else {
      echo "<script>
      alert('data gagal ditambahkan!');
      document.location.href = 'kontak.php';
  </script>
  ";
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Prime Bread</title>
  <link rel="stylesheet" href="kontak.css">
  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <a href="stylesheet" href="kontak.css"></a>


  </head>

<body>
  <div class="background">

    <body background="gambar/wood_pattern.png">


      <!-- Header -->
      <div class="container">
        <div class="hero">
          <img src="gambar/header.jpg" height="auto" width="100%" />
        </div>
      </div>
      <!-- Akhir Header -->


      <!-- Navbar -->
      <div class="container">
        <div class="row text-center">
          <div class="row justify-conter-center">
            <div class="col-md-7 mb-5">
            </div>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-blues">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">Beranda</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Menu Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item btn-btn-primary" href="sejarah.php">Sejarah Perusahaan</a></li>
                      <li><a class="dropdown-item" href="alur.php">Proses Produksi</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      News
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item btn-btn-primary" href="#promosi">Promosi</a></li>
                      <li><a class="dropdown-item" href="#">Penghargaan & Sertifikat</a></li>
                      <li><a class="dropdown-item" href="galeri.php">Galeri</a></li>
                      <li><a class="dropdown-item" href="#Contact">Hubungi Kami</a></li>
                      <li><a class="dropdown-item" href="#berita_acara">Berita Acara</a></li>
                      <li><a class="dropdown-item" href="#berita_terbaru">Berita Terbaru</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Produk
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item btn-btn-primary" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another Action</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Event
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item btn-btn-primary" href="#pesan">Pemesanan</a></li>
                      <li><a class="dropdown-item" href="#jam_buka">Jam Buka</a></li>
                      <li><a class="dropdown-item" href="#">Innovation</a></li>
                      <li><a class="dropdown-item" href="#Contact">Hubungi Kami</a></li>
                    </ul>
                  </li>
                  <div class="row text-center">
                    <div class="row justify-content-center">
                    <div class="col-md-3">
                    
                    <li><li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                     Exit
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item btn-btn-primary" href="logout.php">Keluar</a></li>
                      </div>
                    </div>
                  </div>
                </ul>
              </div>
            </div>
          </nav>
          </div>
      </div>
      <!-- Akhir Navbar -->


          <h1>
           Costumer Service
        </h1>
            <div class="container">
            <div class="komplain">
              <form class="row g-3">
                  <div class="col-md-4">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama"  placeholder="Nama"> 
                  </div>
                  <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Nomer Handphone</label>
                    <input type="angka" class="form-control" id="nomer"  placeholder="Nomer yang bisa di hubungi">
                  </div>
      
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Instansi</label>
                    <input type="text" class="form-control" id="instansi" placeholder="Profesi">
                  </div>
                  <div class="mb-3 form-floating">
                    <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="komentar" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Komentar</label>
                  </div>
                  <div class="mb-3">
                  <label for="formFile" class="form-label">Sertakan Foto</label>
                  <input class="form-control" type="file" id="file">
                  <div class="mb-3">
                    <div class="done"> 
                  <button type="submit" class="btn btn-primary" id="pesan" onclick="komplain()">Submit</button>
                  <p id="kc"></p>
                  </div>
                  </div>

                      <!--kunci  -->
                </form>
                </div>
              </div>
              </div>
         </div>
  <div class="blank">
    
  </div>
  <!--  footer-->
  <footer>
    @copyright 2021 | PT. Gardenia Makmur Selaras
  </footer>


  </div>

</body>
</div>
</body>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        -->

</html>