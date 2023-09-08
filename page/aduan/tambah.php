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
                        <input class="form-control" name="namapelapor" />
                    </div>

                    <div class="form-group">
                        <label>NIK</label>
                        <input class="form-control" name="nik" />
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" />
                    </div>

                    <div class="form-group">
                        <label>Pesan</label>
                        <input class="form-control" name="pesan" />
                    </div>

                    <div class="form-group">
                        <label>Nama File</label>
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
    $namapelapor = $_POST['namapelapor'];
    $nik = $_POST['nik'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

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
        $sql = "INSERT INTO tb_aduan (namapelapor, nik, email, pesan, file_name, type, size)
        VALUES('$namapelapor', '$nik', '$email', '$pesan', '$final_file', '$file_type', '$new_size')";
        mysqli_query($koneksi, $sql);

        echo "<script>alert('Data Berhasil Ditambahkan');window.location='?page=aduan'</script>";
    } else {

        echo "<script> alert('Data Gagal Ditambahkan'); </script>";
    }
}
?>