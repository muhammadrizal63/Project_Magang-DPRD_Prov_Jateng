<?php

$id = $_GET['id'];
$sql = $koneksi->query("select * from tb_anggota where id='$id'");
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

                    <input name="id" type="hidden" value="<?php echo $tampil['id']; ?>">

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Nip</label>
                        <input class="form-control" name="nip" value="<?php echo $tampil['nip']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control" name="tempat_lahir" value="<?php echo $tampil['tempat_lahir']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control" name="tanggal_lahir" value="<?php echo $tampil['tanggal_lahir']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Fraksi</label>
                        <input class="form-control" name="fraksi" value="<?php echo $tampil['fraksi']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <input class="form-control" name="jabatan" value="<?php echo $tampil['jabatan']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <div><img src="upload/<?php echo $tampil['file_name']; ?>" alt=""></div>
                        <div>Nama file: <?php echo $tampil['file_name']; ?></div>
                        <input class="form-control" type="file" name="file" />
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
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $fraksi = $_POST['fraksi'];
    $jabatan = $_POST['jabatan'];
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

        $sqlQuery = "update tb_anggota set nama='$nama', nip='$nip', tempat_lahir='$tempat_lahir', 
        tanggal_lahir='$tanggal_lahir', fraksi='$fraksi', jabatan='$jabatan', file_name='$foto', type='$file_type', size='$new_size' where id='$id'";
        echo "<script>window.location='?page=anggota' </script>";
    } else {
        $sqlQuery = "update tb_anggota set nama='$nama', nip='$nip', tempat_lahir='$tempat_lahir', 
        tanggal_lahir='$tanggal_lahir', fraksi='$fraksi', jabatan='$jabatan' where id='$id'";
        echo "<script>window.location='?page=anggota' </script>";
    }

    $hasil = $koneksi->query($sqlQuery);
}

?>