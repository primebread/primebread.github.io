<?php
session_start();

if (!isset($_SESSION["login"]) ){
  header("Location: login.php");
  exit;
  }
require 'function.php';
//$conn = mysqli_connect("localhost", "root", "", "primebread");
//$result = mysqli_query($conn, "SELECT * FROM menu_produk");

$produk = query("SELECT * FROM menu_produk ORDER BY id DESC");
// tombol cari ditekan
if (isset($_POST["cari"])) {
  $produk = cari($_POST["keyword"]);
}
?>
<!--  akhr php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Prime Bread</title>
  <link rel="stylesheet" href="sejarah.css">
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

      <!-- Caresoul -->
      <div class="container">
        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="gambar/gedung.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="gambar/Gudang_Produksi.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="gambar/iklan.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <!-- Caresoul -->




      <!-- Pemesanan dan Berita Acara -->

      <div class="container">
      <h1>SEJARAH PERUSAHAAN PRIMEBREAD</h1>
      <div class="paragraf">
      <p> <div class="judul">PT Gardenia Makmur Selaras didirikan pada tanggal 19 Agustus 2014 di Jakarta.</p>
      <p>PT Gardenia Makmur Selaras ini didirikan dengan tujuan memproduksi roti Cream Roll yang akan didistribusikan dan dijual lewat PT Indomarco Prismatama selaku pemegang toko Indomaret. Adapun untuk penggunaan dan pemilihan mesin produksi, perencanaan layout area produksi pabrik dipercayakan ke rekanan PT Gardenia Bakery Kuala Lumpur Malaysia dan bekerja sama dengan konsultan Mr. G.H Fauser. PT Gardenia Bakery Kuala Lumpur Malaysia sudah memiliki pengalaman di bidang pembuatan roti sejak tahun 1986 dengan merek Roti GARDENIA.
      </p>
      <P>Lokasi pabrik berada di Jalan Raya Jakarta – Bogor KM 46,6 Nanggewer Mekar Kecamatan Cibinong Kabupaten Bogor Jawa Barat dengan luas area +/- 9000 sqm. Kapasitas produksi yang direncanakan adalah 10,000 pcs roti / jam. Pembangunan pabrik dimulai pada bulan April 2015, dan selesai pada bulan Mei 2016.
      </P>

      <P>Produksi pabrik akan dilakukan hingga mencapai kapasitas 200,000 pcs / hari dengan 3 shift kerja. Mesin yang dipergunakan untuk mencapai kapasitas tersebut berasal dari berbagai negara seperti Amerika, Jerman, Italia, dan Asia. Pemasangan mesin dimulai pada bulan Maret 2016 hingga selesai bulan Agustus 2016. Proses Produksi dilakukan dengan memperhatikan tingkat kebersihan mulai dari personal, penerimaan bahan baku, hingga proses produksi.
      </P>
      <P>Bahan baku yang dipergunakan mempergunakan produk lokal maupun impor dan sudah memperoleh sertifikasi HALAL oleh MUI.
      </P>

      <P>PRIME BREAD hadir di toko Indomaret pada tanggal 18 Oktober 2016. PRIME BREAD memiliki 4 rasa unggulan pada saat awal kehadirannya yaitu : Coklat, Vanilla, Jagung dan Mentega Karamel. Seiring dengan perjalanan waktu di bulan September 2017 PRIME BREAD hadir dengan rasa baru, yaitu Stroberi Yogurt, Keju dan Sapi Panggang. 
      </P>
</div>


      </div>
      
      </div>
  <!--  -->
  <footer>
    @copyright 2021 | PT. Gardenia Makmur Selaras
  </footer>

  </div>
  </div>

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