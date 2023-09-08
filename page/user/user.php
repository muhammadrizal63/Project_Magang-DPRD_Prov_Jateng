<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <center>
                    <h1>Data User</h1>
                </center>

            </div><br>
            <a href="?page=user&aksi=tambah" class="btn btn-primary" style="margin-bottom: 8px">Tambah data</a>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $no = 1;

                            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                            $sql = $koneksi->query("SELECT * from tb_user");
                            while ($data = $sql->fetch_assoc()) {

                            ?>

                                <tr align="center">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['name']; ?></td>
                                    <td><?php echo $data['username']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['password']; ?></td>
                                    <td>
                                        <a href="?page=user&aksi=edit&id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fa fa-pencil-square-o fa-1x"></i></a>
                                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=user&aksi=delete&id=<?php echo $data['id']; ?> " class="btn btn-danger"><i class="fa fa-trash fa-1x"></i></a>
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
                        <a href="./laporan/export_user.php" class="btn btn-success class" style="margin-bottom: 5px">
                            <i class="fa fa-print"></i>Export</a>
                    </div>

                </div>
            </div>
        </div>
    </div>