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


<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prime Bread</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="alur.css">
  <link rel="stylesheet" class="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <!-- Header -->
 
    <div class="container">
      <div class="medsos">
      <ul>
        <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
        <li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
        <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
      </ul>
      </div>
    </div>


    <header>
    <div class="container">
   
    <h1><a href="">Prime</a></h1> <h1>Bread</h1>
    <ul>
    <li>
      <a href="index.php">Beranda</a></li>
      <li class="active"><a href="alur.php">Alur Produksi</a></li>
      <li><a href="index.html">Service</a></li>
      <li><a href="index.html">Contact</a></li>   
    </ul>
  
  </header>
 

<!-- banners -->
<div class="container">
<section class="banner">
  <h2>ALUR PEMBUATAN ROTI PRIME BREAD</h2>
</section>
</div>

  <!-- about -->
        <div class="container">
         <div class="about">
            <h2><strong>ABOUT</strong></h2>
            <P>PT Gardenia Makmur Selaras memproduksi roti <strong>Primebread</strong> ke cabang indomaret melalui PT Indomarco Prismatama selaku pemegang toko Indomaret. 
            Adapun untuk penggunaan dan pemilihan mesin produksi, perencanaan layout area produksi pabrik dipercayakan ke rekanan PT Gardenia Bakery Kuala Lumpur Malaysia dan bekerja sama dengan konsultan Mr. G.H Fauser. PT Gardenia Bakery Kuala Lumpur Malaysia 
            sudah memiliki pengalaman di bidang pembuatan roti sejak tahun 1986 dengan merek Roti GARDENIA. Dalam proses produksi pembuatan roti <strong>Primebread</strong> sudah menggunakan mesin canggih agar mempermudah operator dan mempercepat produksi untuk hasil yang maksimal.</P>
         </div>
       </div>
               <!-- akhr container box -->
              </div>

              <div class="container">
              <div class="video-container">
                <div class="services">
                  <div class="row">
                   <div class="col-4">
                  <iframe width="420" height="315" src="gambar/company.mp4" frameborder="0" allowfullscreen></iframe>
                   <div class="col-8">8
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus possimus, tempore libero eius at tenetur et molestias voluptates labore cum ut neque quis quasi modi sit illum sapiente natus voluptatem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque enim amet facere culpa a aut, praesentium magnam ex nulla dolores odio sequi illo laudantium quos doloremque obcaecati, consequuntur minima rem.</p>
                   </div>
                 </div>
                </div>

                <div class="services">
                  <div class="row">
                   <div class="col-4"> <iframe width="420" height="315" src="gambar/company.mp4" frameborder="0" allowfullscreen></iframe></div>

                   <div class="col-6">8
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus possimus, tempore libero eius at tenetur et molestias voluptates labore cum ut neque quis quasi modi sit illum sapiente natus voluptatem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque enim amet facere culpa a aut, praesentium magnam ex nulla dolores odio sequi illo laudantium quos doloremque obcaecati, consequuntur minima rem.</p>
                   </div>
                 </div>
                </div>

                <div class="services">
                  <div class="row">
                   <div class="col-4">4</div>

                   <div class="col-8">8
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus possimus, tempore libero eius at tenetur et molestias voluptates labore cum ut neque quis quasi modi sit illum sapiente natus voluptatem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque enim amet facere culpa a aut, praesentium magnam ex nulla dolores odio sequi illo laudantium quos doloremque obcaecati, consequuntur minima rem.</p>
                   </div>
                 </div>
                </div>

                <div class="services">
                  <div class="row">
                   <div class="col-4">4</div>

                   <div class="col-8">8
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus possimus, tempore libero eius at tenetur et molestias voluptates labore cum ut neque quis quasi modi sit illum sapiente natus voluptatem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque enim amet facere culpa a aut, praesentium magnam ex nulla dolores odio sequi illo laudantium quos doloremque obcaecati, consequuntur minima rem.</p>
                   </div>
                 </div>
                </div>

                <div class="page">
                  <h2>Page</h2>
                  <ul>
                    <li class="active"><a href="alur.php">1</a></li>
                    <li><a href="alur_2.php">2</a></li>
                    <li><a href="alur_3.php">3</a></li>
                    <li><a href="alur_4.php">4</a></li>
                  </ul>
                </div> -->
                akhr container produksi
              </div>

             
              <!-- akhir container  -->
         </div>
         </div>
           <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>
</html>