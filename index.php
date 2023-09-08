<?php

session_start();
include "Laporan/function.php";
$koneksi = new mysqli("localhost", "root", "", "dprdjateng");
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($_SESSION['admin'] || $_SESSION['user']) {

?>

    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sistem Informasi</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #2f2d30;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="background-color: #2f2d30;" href="index.php">KOMISI D DPRD</a>
                </div>
                <div style="color: white;
                    padding: 15px 50px 5px 50px;
                    float: right;
                    font-size: 16px;"><?php
                                        date_default_timezone_set("Asia/Jakarta");
                                        echo date("l, d F Y") . "\n";

                                        ?><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
                </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="assets/img/logo.png" class="user-image img-responsive" />
                        </li>

                        <li>
                            <a href="index.php"><i class="fa fa-home fa-3x"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="?page=anggota"><i class="fa fa-user-tie fa-3x"></i> Data Anggota Komisi D</a>
                        </li>

                        <li>
                            <a href="?page=log"><i class="fa fa-book fa-3x"></i> Data Log Perjalanan</a>
                        </li>

                        <li>
                            <a href="?page=user"><i class="fa fa-address-card fa-3x"></i> Data User</a>
                        </li>

                        <li>
                            <a href="?page=aduan"><i class="fa fa-comment-dots fa-3x"></i> Data Aduan</a>
                        </li>

                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">

                            <?php

                            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                            $page = $_GET['page'];
                            $aksi = $_GET['aksi'];

                            if ($page == "hidrologi") {
                                if ($aksi == "") {
                                    include "page/hidrologi/hidrologi.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/hidrologi/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/hidrologi/edit.php";
                                } elseif ($aksi == "delete") {
                                    include "page/hidrologi/delete.php";
                                }
                            } elseif ($page == "anggota") {
                                if ($aksi == "") {
                                    include "page/anggota/anggota.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/anggota/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/anggota/edit.php";
                                } elseif ($aksi == "delete") {
                                    include "page/anggota/delete.php";
                                }
                            } elseif ($page == "dataentry") {
                                if ($aksi == "") {
                                    include "page/dataentry/dataentry.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/dataentry/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/dataentry/edit.php";
                                } elseif ($aksi == "delete") {
                                    include "page/dataentry/delete.php";
                                }
                            } elseif ($page == "user") {
                                if ($aksi == "") {
                                    include "page/user/user.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/user/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/user/edit.php";
                                } elseif ($aksi == "delete") {
                                    include "page/user/delete.php";
                                }
                            } elseif ($page == "aduan") {
                                if ($aksi == "") {
                                    include "page/aduan/aduan.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/aduan/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/aduan/edit.php";
                                } elseif ($aksi == "delete") {
                                    include "page/aduan/delete.php";
                                }
                            } elseif ($page == "log") {
                                if ($aksi == "") {
                                    include "page/log/log.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/log/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/log/edit.php";
                                } elseif ($aksi == "delete") {
                                    include "page/log/delete.php";
                                }
                            } elseif ($page == "") {
                                include "home.php";
                            }
                            ?>
                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->


        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $(' #dataTables-example').dataTable();
            });
        </script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>

    </body>

    </html>

<?php
} else {
    header("location:index.html");
}
?>