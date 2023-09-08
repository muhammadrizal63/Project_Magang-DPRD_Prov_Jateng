<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
ob_start();
session_start();
$koneksi = new mysqli("localhost", "root", "", "dprdjateng");

if ($_SESSION['admin'] || $_SESSION['user']) {
    header("location:index.php");
} else {
?>

    <!DOCTYPE html>
    <!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
        <link rel="stylesheet" href="css/loginadmin.css">
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
                        <span class="text-1">SISTEM INFORMASI <br> DPRD JAWA TENGAH</span>
                        <span class="text-2">KOTA SEMARANG</span>
                    </div>
                </div>
            </div>
            <div class="forms">
                <div class="form-content">
                    <div class="login-form">
                        <div class="title">Login</div>
                        <form action="#" method="POST">
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" name="username" placeholder="Username" required>
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="button input-box">
                                    <input type="submit" name="login" value="Masuk">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>

    </body>

    </html>

    <?php

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = $koneksi->query("select * from db_user where username='$username' and password='$password'");

        $data = $sql->fetch_assoc();
        $ketemu = $sql->num_rows;

        if ($ketemu >= 1) {
            session_start();
            if ($data['level'] == "admin") {
                $_SESSION['admin'] = $data['id'];
                header("location:index.php");
            } else if ($data['level'] == "user") {
                session_start();
                $_SESSION['user'] = $data['id'];
                header("location:index.php");
            }
        } else {

    ?>
            <script type="text/javascript">
                alert("Username dan Password yang anda masukan salah. Silahkan Login ulang");
            </script>

<?php
        }
    }
}
?>