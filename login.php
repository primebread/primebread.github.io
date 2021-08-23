<?php
//cek cookie
if (isset($_COOKIE['login']) && iseet($_COOKIE['key']) ) {
 $id = $_COOKIE['id'];
 
}
session_start();
if (isset($_SESSION["login"]) ) {
  header("location: index.php");
  exit;
}

require 'function.php';
$option= ['cost' => 10,
];
if (isset($_POST['login'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM login 
    WHERE username ='$username'");


    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        // var_dump(password_verify($password, $row["password"]) );
        // echo password_hash("secret password", PASSWORD_DEFAULT, $option);
        // var_dump( $row["password"]);
        // die();
   
          
        if (password_verify($password, $row['password']) ){
        // if ($password == $row["password"])
          
            $_SESSION["login"] = true;
            // cek rememberme
            if (isset($_POST ['remember']) ) {
              //buat cookie
              setcookie('id',$row['id'],'time'()+60);
              setcookie('key',hash('sha256', $row['username']), time()+60);
            }
            // captcha
$username = $_POST["username"];
$password = $_POST["password"]; 
    //memanggil lagi session untuk dimulai 
    session_start();
    //mengecek apakah user menginput captcha dengan benar
    //jika captcha salah, maka akan menjalankan yang pertama
    if ($_SESSION["code"] != $_POST["kodecaptcha"]) {
      echo "Username anda adalah <b>$username</b>"; echo "<br />";
      echo "Password anda adalah <b>$password</b>"; echo "<br />"; echo "<br/>";
      echo "Kode CAPTCHA anda salah";
  } else { // jika captcha benar, maka perintah yang bawah akan dijalankan
    echo "Username anda <b>$username</b>"; echo "<br/>";
    echo "Password anda <b>$password</b>"; echo "<br/>"; echo "<br/>";
    echo "Kode CAPTCHA anda benar";
  }
// captcha


            header("Location:index.php");
            exit;
          // echo 'oke';
        }
    }
    $error = true;
}

?>

<html lang="en">

<head>
  <title>Login</title>
</head>

<body>
  <h1>Halaman Login</h1>
  <?php if (isset($error)) : ?>
  <p style="color : red; font-style: italic;">username/password salah</p>
  <?php endif; ?>

  <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col sm-3 lg-6">
        
        <div class='gambar'>
            <img src="gambar/op.gif">
        </div>

        </div>
    </div>
</div>

     <div class="container">
          <div class="row">
              <div class="col sm-3 lg-6">
              <div class='badut'>
            <img src="gambar/op.gif">
          </div>
              </div>
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



  <form action="" method="post">          
    <ul>
      <li>
        <label for="username">username</label>
        <input type="text" name="username" autocomplete="off" id="username">
      </li><br><br>
      <li>
        <label for="password">password</label>
        <input type="password" name="password"  id="password">
      </li>
      <li>masukan kode captcha </li> <br>
      <li><img src="capcha.php" alt="gambar" /> </li>
</li>

<li><input name="kodecaptcha" value="" maxlength="5"/></li>
<li>
      <li>
        <button type="submit" name="login">Login</button>
      </li><br>
      <button><a class href="registrasi.php" style="text-decoration:none">Register</a></button>
           </div>

</body>

</html>