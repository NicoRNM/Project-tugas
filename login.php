<?php
$koneksi = mysqli_connect('localhost','root','','jdm')or die(mysqli_error($koneksi));
if( isset($_POST["submit"])){
  $Username = $_POST['name'];
  $Password = $_POST['password'];

  $cek_user = mysqli_query($koneksi,"SELECT * FROM register WHERE Username = '$Username' AND Password = '$Password'");

  if(mysqli_num_rows($cek_user)> 0){
    echo "<script>
    alert('Login Berhasil');
    window.location = 'index.php';
    </script>";
  }else{
    echo "<script>
    alert('Mohon di isi dahulu');
    window.location = 'login.php';
    </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Itsme Nico</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="css/style1.css" />
  </head>
  <body>

<!-- database reg -->


<!-- login -->
<div class="login-box">
      <img src="img/logo.png" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
      <form action="" method="post" >
        <!-- USERNAME INPUT -->
        <label for="username">Username</label>
        <input type="text" name="name" placeholder="Enter Username">
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" value="Log In" name="submit" >
        <a href="#">Lost your Password?</a><br>
        <a href="register.php">Create Account?</a>
      </form>
    </div>


  </body>
</html>
