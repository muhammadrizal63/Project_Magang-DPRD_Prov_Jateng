<?php
$koneksi = new mysqli("localhost", "root", "", "dprdjateng");
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Form Aduan</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:400,500&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="#">
                    <div class="logo_box">
                        <img src="images/logodprd.png" alt="" />
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-2">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.html">Layanan</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control nav_search-input mr-sm-2 d-none" type="search" placeholder="Search" aria-label="Search" value="" />
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->

    <!-- story section -->
    <section class="layout_padding-top">
        <div class="service_detail">
            <h3 style="margin: 50px;">
                SELAMAT DATANG
            </h3>
            <h2>
                DI FORM PENGADUAN MASYARAKAT
            </h2>
            <h2>
                JIKA INGIN MELAPOR SILAHKAN LOGIN / REGISTER
                <br />
                <br />
                <br />
                <div>
                    <a href="loginuser.php" style="color: blue; font-weight: bold;">DISINI</a>
                </div>
            </h2>
        </div>
    </section>
    <!-- end story section -->


    <section class="welcome_section layout_padding-bottom">
        <div class="container-fluid">
            <div class="">

            </div>
        </div>
    </section>


    <!-- info section -->
    <section class="info_section layout_padding">
        <div class="container">
            <div class="row">
                <div class=" col-md-4 info_detail">
                    <div>
                        <p>
                            Pengaduan masyarakat merupakan elemen penting dalam instansi pemerintahan, karena pengaduan bertujuan memperbaiki kekurangan dari kegiatan yang sudah dilaksanakan oleh pemerintah.
                        </p>
                    </div>
                </div>
                <div class=" col-md-4 address_container">
                    <div>
                        <h3>
                            Hubungi Kami:
                        </h3>
                        <div class="address_link-container">
                            <a href="">
                                <img src="images/location.png" alt="">
                                <span> Alamat : Jl. Pahlawan No.7, Mugassari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50249
                                </span>
                            </a>
                            <a href="">
                                <img src="images/phone.png" alt="">
                                <span> Telepon : (024) 8415500
                                </span>
                            </a>
                            <a href="">
                                <img src="images/mail.png" alt="">
                                <span>
                                    Email : nggodsky@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 news_container">
                    <div>
                        <div>
                            <h3>
                                Kritik developer:
                            </h3>
                            <form action="">
                                <input type="email" placeholder="ENTER YOUR EMAIL">
                                <div>
                                    <button type="submit">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="social_container">
                            <div>
                                <img src="images/fb.png" alt="">
                            </div>
                            <div>
                                <img src="images/twitter.png" alt="">
                            </div>
                            <div>
                                <img src="images/linkedin.png" alt="">
                            </div>
                            <div>
                                <img src="images/youtube.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info section -->


    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; 2022 All Rights Reserved By
            <a href="">Sembar Empire</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
    <script type="text/javascript">
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            navText: [],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>

    <script>
        $(".nav_search-btn").click(function() {
            if ($(".nav_search-input").hasClass("d-none")) {
                event.preventDefault();
                $(".nav_search-input")
                    .animate({
                            left: "-1000px"
                        },
                        "1000000"
                    )
                    .removeClass("d-none");
            } else {
                $(".nav_search-input")
                    .animate({
                            left: "0px"
                        },
                        "1000000"
                    )
                    .addClass("d-none");
            }
        });
    </script>



</body>

</html>