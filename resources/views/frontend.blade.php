<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Maulana Fiqri Nurul Fawaid - Personal Portfolio">
    <meta name="keywords" content="personal, portfolio">
    <meta name="author" content="Themesvila">
    <title>Maulana Fiqri Nurul Fawaid - Personal Portfolio</title>
    <link rel="apple-touch-icon" href="https://frontenddobs.netlify.app/assets/images/favicon.png">
    <link rel="shortcut icon" type="image/png" href="https://frontenddobs.netlify.app/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://frontenddobs.netlify.app/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://frontenddobs.netlify.app/assets/fonts/remixicon.css" />
    <link rel="stylesheet" href="https://frontenddobs.netlify.app/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="https://frontenddobs.netlify.app/assets/css/nice-select.min.css" />
    <link rel="stylesheet" href="https://frontenddobs.netlify.app/assets/css/animate.min.css" />
    <link rel="stylesheet" href="https://frontenddobs.netlify.app/assets/css/slick.min.css" />
    <link rel="stylesheet" href="https://frontenddobs.netlify.app/assets/css/spacing.css" />
    <link rel="stylesheet" href="https://frontenddobs.netlify.app/assets/css/style.css" />
    <link rel="stylesheet" href="https://frontenddobs.netlify.app/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tambahkan di bagian <head> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


</head>

<body>
    <header class="main-header">
        <div class="header-upper">
            <div class="container">
                <div class="header-inner d-flex align-items-center">
                    <div class="logo-outer">
                        <div class="logo">
                            <a href="/"><img src="{{ $pengaturan->image }}" alt="Logo" title="Logo"
                                    style="max-height: 55px; max-width: 55px; height: auto; width: auto;" /></a>
                        </div>
                    </div>
                    <!-- / END LOGO DESIGN AREA -->
                    <!-- START NAV DESIGN AREA -->
                    <div class="nav-outer clearfix mx-auto">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <div class="mobile-logo">
                                    <a href="/">
                                        <img src="{{ $pengaturan->image }}" alt="Logo" title="Logo" />
                                    </a>
                                </div>
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                    data-bs-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="navigation onepage clearfix">
                                    <li><a class="nav-link-click" href="#about">Tentang saya</a></li>
                                    <li><a class="nav-link-click" href="#service">Layanan</a></li>
                                    <li><a class="nav-link-click" href="#works">Proyek</a></li>
                                    <li><a class="nav-link-click" href="#pricing">Sertifikat</a></li>
                                    <li><a class="nav-link-click" href="#contact">Kontak</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- / END NAV DESIGN AREA -->
                    </div>
                    <div class="menu-btns">
                        <a href="#contact" class="theme-btn">Hire Me<i class="fa-regular fa-handshake"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('frontend.about.main')
    @include('frontend.service.main')
    @include('frontend.resume.main')
    @include('frontend.skill.main')
    @include('frontend.project.main')
    @include('frontend.certificate.main')
    {{-- @include('frontend.contact') --}}

    <section class="map_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <h2 class="map_title">Lihat Lokasi Saya</h2>
                    <div class="map">
                        <iframe src="{{ $pengaturan->map }}" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                        <h2 class="close_btn">Sembunyikan Map</h2>
                    </div>
                </div><!-- END COL-->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <footer class="main-footer">
        <div class="footer-bottom pt-50 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright-text">
                            <p>
                                Copyright @2025, <a href="https://github.com/maulanafiqrinf">MFDEV87</a> All
                                Rights Reserved.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright-text extra-copyright">
                            <p>
                                Crafted with ❤️ MFDEV87 <a href="{{ url('/login') }}">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / END FOOTER DESIGN AREA -->
    <!-- START SCROOL UP DESIGN AREA -->
    <div class="progress-wrap cursor-pointer">
        <i class="ri-arrow-up-double-line"></i>
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->
    <!-- JQUERY JS -->

    <!-- Tambahkan di bagian sebelum </body> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://frontenddobs.netlify.app/assets/js/jquery-3.7.1.min.js"></script>
    <!-- BOOTSTRAP JS-->
    <script src="https://frontenddobs.netlify.app/assets/js/bootstrap.min.js"></script>
    <!-- APPEAR JS -->
    <script src="https://frontenddobs.netlify.app/assets/js/appear.min.js"></script>
    <!-- jquery smooth-scroll JS -->
    <script src="https://frontenddobs.netlify.app/assets/js/smooth-scroll.js"></script>
    <!-- GSAP JS -->
    <script src="https://frontenddobs.netlify.app/assets/js/gsap.min.js"></script>
    <!-- MAGNIFICANT JS -->
    <script src="https://frontenddobs.netlify.app/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- SLICK JS-->
    <script src="https://frontenddobs.netlify.app/assets/js/slick.min.js"></script>
    <!-- NICE SELECT JS-->
    <script src="https://frontenddobs.netlify.app/assets/js/jquery.nice-select.min.js"></script>
    <!-- IMAGE LOADER JS-->
    <script src="https://frontenddobs.netlify.app/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- ISOTOPE JS-->
    <script src="https://frontenddobs.netlify.app/assets/js/isotope.pkgd.min.js"></script>
    <!--  WOW ANIMATION JS-->
    <script src="https://frontenddobs.netlify.app/assets/js/wow.min.js"></script>
    <!-- SCRIPT JS-->
    <script src="https://frontenddobs.netlify.app/assets/js/script.js"></script>
</body>

</html>
