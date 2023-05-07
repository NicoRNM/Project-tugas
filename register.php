<?php
$koneksi = mysqli_connect('localhost','root','','jdm')or die(mysqli_error($koneksi));
if( isset($_POST["submit"])){
  $Email = $_POST['Email'];
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];
  $cek_user = mysqli_query($koneksi,"SELECT * FROM register WHERE Username = '$Username' AND Password = '$Password'");
  $cek_login = mysqli_num_rows($cek_user);

  if($cek_login > 0){
    echo "<script>
    alert('Username Telah terdafrat');
    window.location = 'login.php';
    </script>";
  }else{
    mysqli_query($koneksi, "INSERT INTO register VALUES ('','$Email','$Password','$Username')");
    echo "<script>
    alert('Data Anda Telah Dimasukkan');
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

    <link rel="stylesheet" href="css/style2.css" />
  </head>
  <body>

<!-- database reg -->


<!-- Register -->
<div class="login-box">
      <img src="img/logo1.png" class="avatar" alt="Avatar Image">
      <h1>Register ya dek!</h1>
      <form action="" method="POST">
        <!-- Email Nya -->
        <label for="username">Email</label>
        <input name="Email" type="email" placeholder="Masukin Email">
        <!-- USERNAME Nya -->
        <label for="username">Username</label>
        <input name="Username" type="text" placeholder="Ketik Username Lu">
        <!-- PASSWORD Nya Anjing -->
        <label for="password">Password</label>
        <input name="Password" type="password" placeholder="Masukin Password">
        <input type="submit" name="submit"value="Register Yuk">
        <a href="register.php">Create Account?</a>
      </form>
    </div>
  </body>
</html>
