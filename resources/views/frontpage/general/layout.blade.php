<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Layanan Wisata Bali</title>


    <!-- ==== LightBox ==== -->
    <link rel="stylesheet" href="{{ asset('assets/template_user/assets/dist/css/lightbox.min.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon"
        href="{{ asset('assets/template_user/assets/img/hub-pasien/Logo-Hub-Pasien-Real-isi-WhatsApp.png') }}"
        title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- ====== font awesome cdn ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/template_user/assets/css/lib/bootstrap.min.css') }}">

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/template_user/assets/css/lib/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/template_user/assets/css/lib/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/template_user/assets/css/lib/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/template_user/assets/css/lib/lity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/template_user/assets/css/lib/swiper.min.css') }}" />

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('assets/template_user/assets/css/style.css') }}" />

    <!-- ===== parallax ===== -->
    <link rel="stylesheet" href="{{ asset('assets/template_user/assets/css/parallax.css') }}">

</head>

<body>

    <!-- ====== start loading page ====== -->
    <div id="preloader">
    </div>
    <!-- ====== end loading page ====== -->

    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-light style-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('assets/template_user/assets/img/hub-pasien/logo2.png') }}" alt=""
                    style="max-width: 80px; height: auto;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fitur">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#harga">
                            List Wisata
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeri">
                            Harga
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">
                            Kontak Kami
                        </a>
                    </li>
                </ul>
                <div class="nav-side">
                    <div class="d-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn rounded-pill blue5-3Dbutn hover-blue3 sm-butn fw-bold dropdown-toggle"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i class="fa-brands fas fa-user fs-10 mx-1"></i> Login \ Register</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">
                                    <i class="fa-brands fs-5 mx-1"></i> Registrasi
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-brands fs-5 mx-1"></i> Login
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->

    <!-- ====== start header ====== -->

    <!-- ====== end header ====== -->

    <!--Contents-->
    @yield('content')
    <!--End-Contents-->

    <!-- ====== start footer ====== -->
    <footer class="style-5 border-top brd-gray" id="kontak">
        <div class="container">
            <div class="row gx-0 justify-content-between">
                <div class="col-lg-3 col-sm-6">
                    <div class="items">
                        <div class="title">
                            Tentang Kami
                        </div>
                        <small class="text">
                            Kami memberikan Pelayanan & Kenyamanan Maksimal bagi Pengguna ReminderPasien.com
                        </small>
                        <div class="socail-icons">
                            <a href="https://www.facebook.com/reminderpasien"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/reminderpasien"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="items">
                        <div class="title">
                            Daftar Menu
                        </div>
                        <ul>
                            <li>
                                <a href="#"> Beranda </a>
                            </li>
                            <li>
                                <a href="#fitur"> Fitur </a>
                            </li>
                            <li>
                                <a href="#harga"> Harga </a>
                            </li>
                            <li>
                                <a href="#galeri"> Galeri Aplikasi </a>
                            </li>
                            <li>
                                <a href="#blog"> Blog </a>
                            </li>
                            <li>
                                <a href="#kontak"> Kontak Kami </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="items">
                        <div class="title">
                            Kontak Kami
                        </div>
                        <ul>
                            <li>
                                <a
                                    href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB">
                                    <i class="fa-solid fa-phone"></i> 0812 3737 6068 </a>
                            </li>
                            <li>
                                <a href="mailto:reminderpasien@gmail.com"> <i class="fa-solid fa-envelope"></i>
                                    reminderpasien@gmail.com </a>
                            </li>
                            <li>
                                <a href=""> <i class="fa-solid fa-location-dot"></i> Tembau, Jl. Sangalangit,
                                    Penatih, Kec.
                                    Denpasar Tim., Kota Denpasar, Bali 80238 </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="foot">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="logo">
                            <img src="{{ asset('assets/template_user/assets/img/hub-pasien/reminder-pasien-logo.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <small class="small">
                            © copyright 2022 by <a href="#"
                                class="fw-bold text-decoration-underline">reminderpasien.com</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== end footer ====== -->

    <!-- ====== start to top button ====== -->
    <a href="https://api.whatsapp.com/send?phone=6281237376068&text=Hello%20Bapak%2FIbu%2C%20%F0%9F%99%82%0ATolong%20isi%20form%20dibawah%20untuk%20Registrasi%20%3A%0ANama%20Anda%20%3A%20%0ANama%20Klinik%20%3A%20%0AAlamat%20Klinik%20%3A%20%0APertanyaan%20%3A%20%0A%0ATerima%20Kasih%20%F0%9F%99%8F%F0%9F%8F%BB"
        class="" style="position:fixed; z-index:999999; right: 70px; bottom: 15px;">
        <img src="{{ asset('assets/template_user/assets/img/hub-pasien/whatsapp-kontak.png') }}" class="w-100 h-100"
            alt="">
    </a>
    <a href="#"
        class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->

    <script src="{{ asset('assets/template_user/assets/dist/js/lightbox-plus-jquery.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/lib/lity.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/lib/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/lib/jquery.counterup.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/lib/pace.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/lib/scrollIt.min.js') }}"></script>
    <script src="{{ asset('assets/template_user/assets/js/main.js') }}"></script>

</body>

</html>
