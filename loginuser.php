<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
ob_start();
session_start();
$koneksi = new mysqli("localhost", "root", "", "dprdjateng");

if (!empty($_SESSION["id"])) {
  header("Location: form.php");
}
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if (mysqli_num_rows($duplicate) > 0) {
    echo
    "<script> alert('Username atau Email Sudah Dipakai'); </script>";
  } else {
    if ($password == $confirmpassword) {
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($koneksi, $query);
      echo
      "<script> alert('Registrasi Berhasil'); </script>";
    } else {
      echo
      "<script> alert('Username / Password Salah'); </script>";
    }
  }
}
if (isset($_POST["submit"])) {
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
    if ($password == $row['password']) {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: form.php");
    } else {
      echo
      "<script> alert('Password Salah'); </script>";
    }
  } else {
    echo
    "";
  }
}
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
  <link href="css/loginusercss.css" rel="stylesheet" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/dprd.jpeg" alt="">
        <div class="text">
          <span class="text-1">DPRD JAWA TENGAH <br> KOTA SEMARANG</span>
          <span class="text-2">2022</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="images/dprd.jpeg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login</div>
          <form action="" method="post" autocomplete="off">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fa fa-user-circle"></i>
                <input type="text" name="usernameemail" id="usernameemail" placeholder="Username/Email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
              </div>
              <div class="text"><a href="#">Lupa password?</a></div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Masuk">
              </div>
              <div class="text sign-up-text">Belum punya akun? <label for="flip">Daftar</label></div>
            </div>
          </form>
        </div>
        <div class="signup-form">
          <div class="title">Register</div>
          <form action="" method="post" autocomplete="off">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" id="name" placeholder="Masukkan nama" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="username" id="username" placeholder="username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="confirm password" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Daftar">
              </div>
              <div class="text sign-up-text">Sudah punya akun? <label for="flip">Masuk</label></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>