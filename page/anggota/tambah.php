<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">

        <div class="row">
            <div class="col-md-12">

                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" />
                    </div>

                    <div class="form-group">
                        <label>NIP</label>
                        <input class="form-control" name="nip" />
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control" name="tempat_lahir" />
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tanggal_lahir" />
                    </div>

                    <div class="form-group">
                        <label>Fraksi</label>
                        <input class="form-control" name="fraksi" />
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <input class="form-control" name="jabatan" />
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input class="form-control" type="file" name="file" />
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
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $fraksi = $_POST['fraksi'];
    $jabatan = $_POST['jabatan'];

    $file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $new_size = $file_size / 1024;
    $folder = "upload/";

    if (move_uploaded_file($file_loc, $folder . $file)) {
        $sql = "INSERT INTO tb_anggota (nama, nip, tempat_lahir, tanggal_lahir, fraksi, jabatan, file_name, type, size) VALUES('$nama', '$nip', '$tempat_lahir', '$tanggal_lahir', '$fraksi', '$jabatan','$file','$file_type', '$new_size')";
        mysqli_query($koneksi, $sql);

        echo "<script> alert('Data Berhasil Ditambahkan');window.location='?page=anggota' </script>";
    } else {

        echo "<script> alert('Data Gagal Ditambahkan'); </script>";
    }
}
?>