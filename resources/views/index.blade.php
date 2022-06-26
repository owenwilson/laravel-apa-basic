<!DOCTYPE html>
<html lang="en">

@include('layouts-homepage.head')

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
    <div class="site-wrapper overflow-hidden position-relative">
        <!-- Site Header -->
        <!-- Preloader -->
        <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader.gif" alt="preloader">
   </div>
   </div>    -->
        <!--Site Header Area -->
        <header
            class="site-header site-header--menu-center dark-mode-texts landing-17-menu  site-header--absolute site-header--sticky">
            <div class="container">
                <nav class="navbar site-navbar">
                    <!-- Brand Logo-->
                    <div class="brand-logo">
                        <a href="#">
                            <!-- light version logo (logo must be black)-->
                            <img src="image/logo/logo-black.png" alt="" class="light-version-logo">
                            <!-- Dark version logo (logo must be White)-->
                            <img src="image/logo/logo-white.png" alt="" class="dark-version-logo">
                        </a>
                    </div>
                    <div class="menu-block-wrapper">
                        <div class="menu-overlay"></div>
                        <nav class="menu-block" id="append-menu-header">
                            <div class="mobile-menu-head">
                                <div class="go-back">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="site-menu-main">
                                <li class="nav-item">
                                    <a href="#motivacion" class="nav-link-item">Motivacion</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#objetivo" class="nav-link-item">Objetivo</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#alcance" class="nav-link-item">Alcance</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://github.com/owenwilson" class="nav-link-item">Github - Wilson</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-btns  header-btn-l-17 ms-auto d-none d-xs-inline-flex align-items-center">
                        <a class="btn sign-in-btn focus-reset" href="{{ route('sign-in') }}">
                            Iniciar Sesion
                        </a>
                        <a class="start-trail-btn btn focus-reset" href="{{ route('sign-up') }}">
                            Registrate
                        </a>
                    </div>
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                    <!--/.Mobile Menu Hamburger Ends-->
                </nav>
            </div>
        </header>
        <!-- navbar- -->
        <!-- Hero Area -->
        <div class="hero-area-l-17 position-relative">
            <div class="container">
                <div class="row position-relative justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-11 order-lg-1 order-1" data-aos="fade-right"
                        data-aos-duration="800" data-aos-once="true">
                        <div class="content text-center">
                            <h1>CREA TU DOCUMENTO CON NORMA APA!</h1>
                            <p>Este sitio web fue creado para que puedas crear tu documento de investigacion con norma APA.</p>
                            <a href="{{ route('sign-up') }}" class="btn">Registrate</a>
                            <span>completamente gratis</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 order-lg-1 order-0">
                        <div class="hero-area-image">
                            <img src="image/l8/hero-img.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature Area -->
        <div class="feature-area-l-17 position-relative">
            <div class="container">
                <div class="row feature-area-l-17-items justify-content-center text-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="single-features single-border position-relative">
                            <div class="circle-dot-1">
                                <i class="fas fa-circle"></i>
                            </div>
                            <h4 id="motivacion">Motivacion</h4>
                            <p>Soy una persona dedicada a crear aplicaciones web, el cual me apaciona hacerlo para
                                poder crear soluciones a problemas cotidianos.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="single-features single-border position-relative">
                            <div class="circle-dot-2">
                                <i class="fas fa-circle"></i>
                            </div>
                            <h4 id="objetivo">Objetivo</h4>
                            <p>Tener disponible un sitio web donde los estudiantes tengan a disposicion un sitio web para
                                crear un documento de investigacion con la norma APA y puedan generarlo rapidamente.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="single-features">
                            <div class="circle-dot-3">
                                <i class="fas fa-circle"></i>
                            </div>
                            <h4 id="alcance">Alcance</h4>
                            <p>Llegar a todos las personas que realizar trabajamos de investigacion
                                y puedan tener esta herramienta web para su trabajo de investigacion con la norma <mark>APA</mark>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Area-->
        <footer class="footer-area-l-17 position-relative">
            <div class="footer-shape">
                <img src="image/l8/footer-shape.svg" alt="">
            </div>
            <!-- footer-bottom start -->
            <div class="copyright-area-l-17 text-center text-md-start">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4">
                            <div class="copyright">
                                <p> &copy; APA PROYECT <span id="spanYear"></span> Todo los derechos reservados</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="footer-menu">
                                <ul class="list-unstyled d-flex flex-wrap justify-content-center">
                                    <li><a href="#">Proyecto APA - UMSS</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2">
                            <div class="social-icons text-md-end">
                                <ul class="pl-0 list-unstyled">
                                    <li class="d-inline-block"><a href="https://www.facebook.com/0w3nw1ls0n"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="d-inline-block"><a href="https://twitter.com/0w3nW1ls0n"><i class="fab fa-twitter"></i></a></li>
                                    <li class="d-inline-block"><a href="https://www.linkedin.com/in/wilson-mamani-flores-822232212/"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Vendor Scripts -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- Plugin's Scripts -->
    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/aos/aos.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/menu/menu.js') }}"></script>
    <!-- Activation Script -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        window.onload = function(){document.getElementById("spanYear").innerHTML = new Date().getFullYear();}
    </script>
</body>

</html>
