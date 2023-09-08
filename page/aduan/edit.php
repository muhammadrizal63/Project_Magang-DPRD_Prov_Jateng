<?php

$nik = $_GET['id'];
$sql = $koneksi->query("select * from tb_aduan where nik='$nik'");
$tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
    <div class="panel-heading">
        Edit Data
    </div>
    <div class="panel-body">

        <div class="row">
            <div class="col-md-12">

                <form method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="namapelapor" value="<?php echo $tampil['namapelapor']; ?>">
                    </div>

                    <div class="form-group">
                        <label>NIK</label>
                        <input class="form-control" name="nik" value="<?php echo $tampil['nik']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" value="<?php echo $tampil['email']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Pesan</label>
                        <input class="form-control" name="pesan" value="<?php echo $tampil['pesan']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Nama File</label>
                        <div>Nama File: <?php echo $tampil['file_name']; ?></div>
                        <input class="form-control" name="file" type="file" value="" />
                        <input type="hidden" name="fotolama" value="<?php echo $tampil['file_name']; ?>" />
                    </div>

                    <div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>

            </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php
$koneksi = new mysqli("localhost", "root", "", "dprdjateng");
if (isset($_POST['simpan'])) {
    $namapelapor = $_POST['namapelapor'];
    $nik = $_POST['nik'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $fotolama = $_POST['fotolama'];
    $foto = $_FILES['file']['name'];
    $lokasi_file = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $new_size = $file_size / 1024;
    $folder = "upload/";

    if ($foto) {
        unlink($folder . $fotolama);
        move_uploaded_file($lokasi_file, $folder . $foto);
        $sqlQuery = "update tb_aduan set namapelapor='$namapelapor', email='$email', 
        pesan='$pesan', file_name='$foto', type='$file_type', size='$new_size' where nik='$nik'";

        echo "<script> alert('Data Berhasil Terupdate');window.location='?page=aduan' </script>";
    } else {
        $sqlQuery = "update tb_aduan set namapelapor='$namapelapor', email='$email', 
        pesan='$pesan' where nik='$nik'";

        echo "<script> alert('Data Berhasil Terupdate');window.location='?page=aduan' </script>";
    }
    $hasil = $koneksi->query($sqlQuery);
}
?>