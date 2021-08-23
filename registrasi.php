<?php

require 'function.php';
if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert ('user baru berhasil ditambahkan!')
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>



<html lang="en">

<head>
  <title>Halaman Registrasi</title>
  <style>
  label {
    display: block;
  }

  .btn-login{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#2979ff;
    font-size: 18px;
    color: #fafafa;
  }
  </style>
</head>

<body>
  <h1> Halaman Registrasi</h1>

  <link rel="stylesheet" href="registrasi.css">
</head>
<body>
    <div class="container">
        <div class='gambar'>
            <img src="gambar/op.gif">
        </div>
    </div>
    <div class="container">
        <div class='badut'>
            <img src="gambar/op.gif">
        </div>
    </div>
    <style>
      .container
{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 25px ;
    width: 400px;
    background-color: sandybrown;;
    box-shadow: 0 0 10px rgba(52, 119, 182, 0.3)
    
}
    </style>
    
    <div class="container">
        <div class='hero'>
            <img src='gambar/logoprimebread.png' height='auto' width='100%'/></a></img>
                 
              </div>
            <div class="gambar">
            <style>
            .gambar {
              position: absolute;
              top: -150;
              left: -310;
            }    
            </style>
            </div>
            <div class="badut">
            <style>
            .badut {
              position: absolute;
              top: -140;
              left: 460;
            }
            
            </style>
            </div>

  <form action="" method="post">
    <li>
      <label for="username"> username</label>
      <input type="text" name="username" autocomplete="off" id="username">

    </li>
    <li>
      <label for="password">password</label>
      <input type="password" name="password" id="password">
    </li>
    <li>
      <label for="password2">konfirmasi password</label>
      <input type="password" name="password2" id="password2">
    </li>
    <button type="submit" name="register" >Register!</button><br><br>
    <button><a class="btn-login" href="login.php" style="text-decoration:none">Login</a></button>

  </form>
</body>

</html>