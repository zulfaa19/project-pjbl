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
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-3 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">PublicLoker</h1>
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                    <a href="tampilan_guest.php" class="nav-item nav-link active">Beranda</a>
                        <a href="lokerguest.php" class="nav-item nav-link">Cari Lowongan</a>
                        <a href="tipslokerguest.php" class="nav-item nav-link">Tips Loker</a>
                        <a href="guest.php" class="nav-item nav-link">Job Saya</a>
                    </div>
                    <button><a href="login.php">Masuk</a></button>
                    <button><a href="register.php">Daftar</a></button>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Cari informasi lowongan kerjaan mulai dari event job fair dan melalui situs lowongan kerja</h1>
                            <p class="text-white pb-3 animated slideInDown">Cara membuat iklan lowongan kerja pun tidak bisa sembarangan. Alih-alih mendapatkan pelamar, Anda malah tidak mendapatkan apa-apa. Oleh karena itu, ada beberapa contoh iklan lowongan pekerjaan yang bisa dijadikan referensi.</p>
                            <div class="search-box">
                                <input type="text" placeholder="Cari lowonganmu disini" />
                                <a href="service.html" class="search_icon"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-5">Panduan untuk Nego Naik Gaji (Infografis)</h1>
                        <p class="mb-4">Udah puas sama gaji kamu sekarang? Kalau kamu selalu kepikiran untuk nego naik gaji ke atasan, simak langkah-langkah bermanfaat berikut!</p>
                        <a href="read.html" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-center mb-5">Temukan tips karier dan informasi yang tepat untuk kamu di sini</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Bantuan Karier</h5>
                            <p class="m-0">Jelajahi berbagai fitur dan beberapa template kami untuk mencapai kesuksesan kariermu</p>
                            <a class="btn btn-square" href="karier.html"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Job Trends</h5>
                            <p class="m-0">Membangun Karier? Tetap terhubung dengan tren pekerjaan dan wawasan industri.</p>
                            <a class="btn btn-square" href="trendkarier.html"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Pencarian Kerja</h5>
                            <p class="m-0">Kamu yakin Gadget dan Sosial Media mu hanya bisa untuk komunikasi & bermain game saja?</p>
                            <a class="btn btn-square" href="carikerja.html"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-mail-bulk fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Alih Profesi</h5>
                            <p class="m-0">Sengaja berpindah profesi untuk menemukan kemampuan kerja?</p>
                            <a class="btn btn-square" href="alihprofesi.html"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-thumbs-up fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Surat Lamaran Kerja</h5>
                            <p class="m-0">Pelajari cara menulis Lamaran Kerja yang baik dan menjanjikan</p>
                            <a class="btn btn-square" href="suratlamarankerja.html"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-android fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Kehidupan Kerja</h5>
                            <p class="m-0">Temukan keseimbangan mu dalam kehidupan kerja dan Kesejahteraan Terbaru</p>
                            <a class="btn btn-square" href="kehidupankerja.html"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Projects Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-center mb-5">Apa tujuanmu hari ini?</h1>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="mx-2 active" data-filter="*">Semua</li>
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
                                <a href="tips.html" class="text-primary fw-medium mb-2 nav-link">Ketahui Hal ini sebelum Memulai Pekerjaan Business Consultant!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            </div>
                            <div class="bg-light p-4">
                                <a href="tips.html" class="text-primary fw-medium mb-2 nav-link">5 Contoh Pertanyaan Job Interview Bahasa Inggris + Jawabannya</a>
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
                        <a href="https://twitter.com/mrkeuff" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/isnzlfaa/" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.youtube.com/channel/UCcrr3nwpX8R3ECb-qhnYSww" class="youtube"><i class="fab fa-youtube"></i></a>
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