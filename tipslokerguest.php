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
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                    <a href="tampilan_guest.php" class="nav-item nav-link">Beranda</a>
                        <a href="lokerguest.php" class="nav-item nav-link">Cari Lowongan</a>
                        <a href="tipslokerguest.php" class="nav-item nav-link active">Tips Loker</a>
                        <a href="guest.php" class="nav-item nav-link">Job Saya</a>
                    </div>
                    <button><a href="masuk.php">Masuk</a></button>
                    <button><a href="daftar.php">Daftar</a></button>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container py-5 px-lg-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 text-center">
                            <h1>
                                <p class="text-center text-white mb-4"><span></span>Temukan tips terkini seputar karier<span></span></p>
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
        </div>
        <!-- Navbar & Hero End -->


        <!-- Projects Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-center mb-5">Apa tujuanmu hari ini?</h1>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="mx-2 active" data-filter="*">All</li>
                            <li class="mx-2" data-filter=".first">Kariermu</li>
                            <li class="mx-2" data-filter=".second">Pencarian Kerja</li>
                            <li class="mx-2" data-filter=".third">Kesejahteraan Hidup</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <a href="kat1.html" class="text-primary fw-medium mb-2 nav-link">Ketahui Hal ini sebelum Memulai Pekerjaan Business Consultant!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <a href="kat2.html" class="text-primary fw-medium mb-2 nav-link">5 Contoh Pertanyaan Job Interview Bahasa Inggris + Jawabannya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <a href="kat3.html" class="text-primary fw-medium mb-2 nav-link">Makin Siap Berkarir, Cek Dulu Perbedaan Auditing dan Akuntansi!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <a href="kat4.html" class="text-primary fw-medium mb-2 nav-link">Berkarir di Industri Perbankan? Ini Jenjang Karir & Persyaratannya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <a href="kat5.html" class="text-primary fw-medium mb-2 nav-link">7 Skills Wajib Pekerjaan Marketing Manager Agar Karir Melejit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item third wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <a href="kat6.html" class="text-primary fw-medium mb-2 nav-link">10 Cara Buat Balikin Semangatmu Setelah Sibuk Bekerja</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects End -->


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