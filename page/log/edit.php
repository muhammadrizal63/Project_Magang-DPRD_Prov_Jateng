<?php

$id = $_GET['id'];
$sql = $koneksi->query("select * from tb_log where id='$id'");
$tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
    <div class="panel-heading">
        Edit Data
    </div>
    <div class="panel-body">

        <div class="row">
            <div class="col-md-12">

                <form method="POST">

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>">
                    </div>

                    <div class="form-group">
                        <label>NIP</label>
                        <input class="form-control" name="nip" value="<?php echo $tampil['nip']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Asal Berangkat</label>
                        <input class="form-control" name="asal_berangkat" value="<?php echo $tampil['asal_berangkat']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Tanggal Jalan</label>
                        <input class="form-control" type="date" name="tanggal_jalan" value="<?php echo $tampil['tanggal_jalan']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Tempat Tujuan</label>
                        <input class="form-control" name="tempat_tujuan" value="<?php echo $tampil['tempat_tujuan']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Agenda</label>
                        <input class="form-control" name="agenda" value="<?php echo $tampil['agenda']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Anggaran</label>
                        <input class="form-control" name="anggaran" value="<?php echo $tampil['anggaran']; ?>" />
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
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$asal_berangkat = $_POST['asal_berangkat'];
$tanggal_jalan = $_POST['tanggal_jalan'];
$tempat_tujuan = $_POST['tempat_tujuan'];
$agenda = $_POST['agenda'];
$anggaran = $_POST['anggaran'];
$simpan = $_POST['simpan'];


if ($simpan) {
    $sql = $koneksi->query("update tb_log set nama='$nama', nip='$nip', asal_berangkat='$asal_berangkat', 
        tanggal_jalan='$tanggal_jalan', tempat_tujuan='$tempat_tujuan', agenda='$agenda', anggaran='$anggaran' where id='$id'");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Terupdate");
            window.location.href = "?page=log";
        </script>
<?php
    }
}
?>