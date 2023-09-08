<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">

        <div class="row">
            <div class="col-md-12">

                <form method="POST">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" />
                    </div>

                    <div class="form-group">
                        <label>NIP</label>
                        <input class="form-control" name="nip" />
                    </div>

                    <div class="form-group">
                        <label>Asal Berangkat</label>
                        <input class="form-control" name="asal_berangkat" />
                    </div>

                    <div class="form-group">
                        <label>Tanggal Jalan</label>
                        <input class="form-control" type="date" name="tanggal_jalan" />
                    </div>

                    <div class="form-group">
                        <label>Tempat Tujuan</label>
                        <input class="form-control" name="tempat_tujuan" />
                    </div>

                    <div class="form-group">
                        <label>Agenda</label>
                        <input class="form-control" name="agenda" />
                    </div>

                    <div class="form-group">
                        <label>Anggaran</label>
                        <input class="form-control" name="anggaran" />
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
    $sql = $koneksi->query("INSERT INTO tb_log (nama, nip, asal_berangkat, tanggal_jalan, tempat_tujuan, agenda, anggaran)
        VALUES('$nama', '$nip', '$asal_berangkat', '$tanggal_jalan', '$tempat_tujuan', '$agenda', '$anggaran')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Ditambahkan");
            window.location.href = "?page=log";
        </script>
<?php
    }
}
?>