<?php
require 'koneksi.php';
require 'function.php';
?>
<html>

<head>
    <title>Data Log</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <h2>Data Log Perjalanan Dinas</h2>
        <div class="data-tables datatable-dark">

            <table class="table table-striped table-bordered table-hover" id="mauexport">
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

                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#mauexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>