<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
ob_start();
session_start();
$koneksi = new mysqli("localhost", "root", "", "dprdjateng");
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: loginuser.php");
}
if (isset($_POST['upload'])) {
    $namapelapor = $_POST["namapelapor"];
    $nik = $_POST["nik"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder = "upload/";

    /* new file size in KB */
    $new_size = $file_size / 1024;
    /* new file size in KB */

    /* make file name in lower case */
    $new_file_name = strtolower($file);
    /* make file name in lower case */

    $final_file = str_replace(' ', '-', $new_file_name);

    if (move_uploaded_file($file_loc, $folder . $final_file)) {
        $sql = "INSERT INTO tb_aduan(namapelapor, nik,email, pesan, file_name, type, size) VALUES('$namapelapor','$nik','$email','$pesan','$final_file','$file_type','$new_size')";
        mysqli_query($koneksi, $sql);


        echo "<script> alert('Aduan Berhasil Dikirim'); </script>";
    } else {

        echo "<script> alert('Aduan Gagal Dikirim'); </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Formulir Aduan</title>
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link href="css/form.css" rel="stylesheet" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="wrapper">
        <div class="page-wrapper bg-dark p-t-100 p-b-50">
            <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;"><?php echo $row["name"]; ?> &nbsp; <a href="logoutuser.php" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
            </nav>
            <div class="wrapper wrapper--w900">
                <div class="card card-6">
                    <div class="card-heading">
                        <h2 class="title">Formulir Aduan Masyarakat</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-row">
                                <div class="name">Nama Pelapor</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="namapelapor" id="namapelapor">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">NIK</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="nik" id="nik">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Email</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-6" type="email" name="email" id="email" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Pesan / Keterangan</div>
                                <div class="value">
                                    <div class="input-group">
                                        <textarea class="textarea--style-6" name="pesan" id="pesan" placeholder="Kronologi atau Keterangan Peristiwa"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Upload File / Gambar</div>
                                <div class="value">
                                    <div class="input-group js-input-file">
                                        <input class="input-file" type="file" name="file" id="file">
                                        <label class="label--file" for="file">Browse</label>
                                        <span class="input-file__info">File belum terupload</span>
                                    </div>
                                    <div class="label--desc">Upload File / Gambar Max file size 50 MB</div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn--radius-2 btn--blue-2" type="submit" name="upload" id="upload">Kirim Aduan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <script src="js/jquery.min.js"></script>


        <!-- Main JS-->
        <script src="js/form.js"></script>
</body>

</html>