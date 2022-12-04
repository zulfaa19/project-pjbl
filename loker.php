<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PublicLoker</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">PublicLoker</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="tampilan_user.php" class="nav-item nav-link">Beranda</a>
                        <a href="loker.php" class="nav-item nav-link active">Cari Lowongan</a>
                        <a href="tipsloker.php" class="nav-item nav-link">Tips Loker</a>
                        <a href="profile.php" class="nav-item nav-link">Job Saya</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container py-5 px-lg-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 text-center">
                            <h1>
                                <p class="text-center text-white mb-4"><span></span>Temukan Pekerjaan yang Tepat Untukmu<span></span></p>
                                <div class="container h-100">
                                    <div class="d-flex justify-content-center h-100">
                                        <div class="searchbar">
                                            <input class="search_input" type="text" name="" placeholder="Search...">
                                            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar & Hero End -->


            <!-- Service Start -->
            <section id="services" class="services sections-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h1 class="text-center mb-5">Pilih Lowongan Untuk Melihat Lebih Detail</h1>
                    </div>

                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <img src="https://image-service-cdn.seek.com.au/6fcc73c836accc26d8595cc4ce80746f45d4d439/ee4dce1061f3f616224767ad58cb2fc751b8d2dc" alt="Avatar" style="width:50px" class="img"></img>
                                <h3>ADMIN STOCK</h3>
                                <p><strong>PT Pahala Bahari Nusantara<br></strong>Jawa Barat</p>
                                <a href="viewloker.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <img src="https://image-service-cdn.seek.com.au/d890731e4ad94f49c5215fb01269fa14cd97217b/ee4dce1061f3f616224767ad58cb2fc751b8d2dc" alt="Avatar" style="width:50px" class="img"></img>
                                <h3>GA Staff</h3>
                                <p><strong>PT Propan Raya Industrial (HCBP)<br></strong>Bandung</p>
                                <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <img src="https://image-service-cdn.seek.com.au/fa95994456a530bd3bfa23ffc22e1d3042ff7aec/ee4dce1061f3f616224767ad58cb2fc751b8d2dc" alt="Avatar" style="width:50px" class="img"></img>
                                <h3>HRGA Staff_Tourism</h3>
                                <p><strong>PT Sirius Surya Sentosa<br></strong>Jakarta Barat</p>
                                <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <img src="https://image-service-cdn.seek.com.au/ea717faf1e7385c17b7d81a23b0b681b09201788/ee4dce1061f3f616224767ad58cb2fc751b8d2dc" alt="Avatar" style="width:50px" class="img"></img>
                                <h3>OPERATOR PACKING GUDANG</h3>
                                <p><strong>PT. SKETSA KARYA PRIBUMI<br></strong>Banten</p>
                                <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <img src="https://image-service-cdn.seek.com.au/1497ffbf637cd9549b6922361d001e23b8e47e17/ee4dce1061f3f616224767ad58cb2fc751b8d2dc" alt="Avatar" style="width:50px" class="img"></img>
                                <h3>HProcurement Warehouse Inventory Supervisor</h3>
                                <p><strong>PT Sentosa Jaya Purnama<br></strong>Jambi</p>
                                <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <img src="https://image-service-cdn.seek.com.au/957314dd4a01d9cfe6d7eb49991cd1e197743480/ee4dce1061f3f616224767ad58cb2fc751b8d2dc" alt="Avatar" style="width:50px" class="img"></img>
                                <h3>Staff Accounting, Tax and Finance</h3>
                                <p><strong>PT BNG Consulting<br></strong>jakarta Selatan</p>
                                <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <img src="https://image-service-cdn.seek.com.au/54dd5bfcd26329d64833464716a150ba616fc4b4/ee4dce1061f3f616224767ad58cb2fc751b8d2dc" alt="Avatar" style="width:50px" class="img"></img>
                                <h3>Technical Engineer</h3>
                                <p><strong>PT Firman Indonesia<br></strong>Banten</p>
                                <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item  position-relative">
                                <img src="https://image-service-cdn.seek.com.au/df064a236872e22d6763ee74a02c1cf367e319b5/ee4dce1061f3f616224767ad58cb2fc751b8d2dc" alt="Avatar" style="width:50px" class="img"></img>
                                <h3>Area Manager</h3>
                                <p><strong>PT Bumi Berkah Boga<br></strong>Pematangsiantar</p>
                                <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                    </div>

                </div>
            </section>
            <!-- Service End -->

            <!-- Footer Start -->
            <footer id="footer">

                <div class="footer-top">

                    <div class="container">

                        <div class="row  justify-content-center">
                            <div class="col-lg-6">
                                <h3>PublicLoker</h3>
                                <p>Seiring dengan semakin berkembangnya teknologi, maka kami mencoba berinovasi dalam membagikan informasi. Salah satu bentuk inovasinya adalah dengan menyediakan layanan website kami melalui media internet, yang dapat membantu
                                    para pengangguran dengan cepat mencari lowongan kerja</p>
                            </div>
                        </div>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                        </div>

                    </div>
                </div>

                <div class="container footer-bottom clearfix">
                    <div class="copyright">
                        &copy; Copyright <a href="">PublicLoker</a>. All Rights Reserved
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>