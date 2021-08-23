<?
session_start();

if (!isset($_SESSION["login"]) ){
  header("Location: login.php");
  exit;
  }
session_start();

require 'function.php';

$option= ['cost' => 10,
];

if (isset($_POST['login']) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($conn,"SELECT * FROM login WHERE username ='$username'");
    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ) {
            header("Location : index.php");
            exit;
        }
    }
    $error = true;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Login</title>

    <?php if (isset($error)) : ?>
  <p style="color : red; font-style: italic;">username/password salah</p>
  <?php endif; ?>

    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class='gambar'>
            <img src="gambar/MR.png">
        </div>
    </div>
    <div class="container">
        <div class='badut'>
            <img src="gambar/MR.png">
        </div>
    </div>
    
    
    <div class="container">
        <div class='hero'>
            <img src='gambar/logoprimebread.png' height='auto' width='100%'/></a></img>
                 
              </div>  
 
          <h1>Welcome Administor</h1>
            <form>
             <ul>
                    <li> <label for="username">Username</label><br>
                        <input type="text" name="username" id="username"><br>
                    </li>
               <li> <label>Password</label><br>
                    <input type="password" name="password" id="password"><br> 
               </li>
                    <li><button type="submit" name="login">Log in</button>
               </li>
                
                <div class="password">
                          <li><a href="#">Lupa Password?</a></li> 
              </ul>
                </div>
            </form>
            <div id="footer">
                <p>PT Gardenia Makmur Selaras</p>
              </div>
        </div>     
    </div>
    </body>
</html>
</body>
</html>