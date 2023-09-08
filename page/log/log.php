<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <center>
                    <h1>Log Harian Kunjungan Anggota</h1>
                </center>

            </div><br>
            <a href="?page=log&aksi=tambah" class="btn btn-primary" style="margin-bottom: 8px">Tambah data</a>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Asal Berangkat</th>
                                <th>Tanggal Jalan</th>
                                <th>Tempat Tujuan</th>
                                <th>Agenda</th>
                                <th>Anggaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $no = 1;

                            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                            $sql = $koneksi->query("SELECT * from tb_log");
                            while ($data = $sql->fetch_assoc()) {

                            ?>

                                <tr align="center">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['nip']; ?></td>
                                    <td><?php echo $data['asal_berangkat']; ?></td>
                                    <td><?php echo $data['tanggal_jalan']; ?></td>
                                    <td><?php echo $data['tempat_tujuan']; ?></td>
                                    <td><?php echo $data['agenda']; ?></td>
                                    <td><?php echo $data['anggaran']; ?></td>
                                    <td>
                                        <a href="?page=log&aksi=edit&id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fa fa-pencil-square-o fa-1x"></i></a>
                                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=log&aksi=delete&id=<?php echo $data['id']; ?> " class="btn btn-danger"><i class="fa fa-trash fa-1x"></i></a>
                                    </td>

                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>

                    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
                    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#dataTables-example').dataTable();
                        });
                    </script>
                    <!-- CUSTOM SCRIPTS -->
                    <script src="assets/js/custom.js"></script>

                    <!-- @dhannynggod -->
                    <div>
                        <a href="./laporan/export_log.php" class="btn btn-success class" style="margin-bottom: 5px">
                            <i class="fa fa-print"></i>Export</a>
                    </div>

                </div>
            </div>
        </div>
    </div>