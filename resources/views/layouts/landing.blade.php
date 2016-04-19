<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Institut de l'Ebre : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('/img/favicon.ico') }}"/>
    <!-- Font Awesome -->
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/slick.css')}}"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('/css/jquery.fancybox.css')}}" type="text/css" media="screen"/>
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}"/>
    <!-- Theme color -->
    <link id="switcher" href="{{asset('/css/lite-blue-theme.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('/css/style_landing.css')}}" type="text/css">

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div class="loader">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header section -->
<header id="header">
    <div class="header-inner">
        <!-- Header image -->
        <img src="{{asset('/img/header-bg.jpg')}}" alt="img">
        <div class="header-overlay">
            <div class="header-content">
                <!-- Start header content slider -->
                <h2 class="header-slide">ebre-escool ng
                    <span>Intranet</span>
                    <span>Aplicació</span>
                    de l'Institut de l'Ebre</h2>
                <!-- End header content slider -->
                <!-- Header btn area -->
                <div class="header-btn-area">
                    <a class="knowmore-btn" href="{{ url('/register') }}">Registra't</a>
                    <a class="download-btn" href="{{ url('/login') }}">Loga't</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->

<!-- Start menu section -->
<section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <a class="navbar-brand logo" href="#"><img src="{{ asset('/img/logo.png') }}" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#team">TEAM</a></li>
                    <li><a href="#service">SERVICE</a></li>
                    <li><a href="#portfolio">PORTFOLIO</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    @if (Auth::guest())
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                    @else
                        <li><a href="#">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
            <div class="search-area">
                <form action="">
                    <input id="search" name="search" type="text" placeholder="Introdueix el text a cercar...">
                    <input id="search_submit" value="Rechercher" type="submit">
                </form>
            </div>
        </div>
    </nav>
</section>
<!-- End menu section -->

<!-- Start about section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Start welcome area -->
                <div class="welcome-area">
                    <div class="title-area">
                        <h2 class="tittle">Benvinguts a l'Intranet de l'Institut de l'Ebre <span>ebre-escool ng</span>
                        </h2>
                        <span class="tittle-line"></span>
                        <p>l'ebre-escool ng està pensat per gestionar, consulta el teu compte, passar llista, matrícular
                            alumnes, ...</p>
                    </div>
                    <div class="welcome-content">
                        <ul class="wc-table">
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-users wc-icon"></span>
                                    <h4 class="wc-tittle">Gestió</h4>
                                    <p>Gestió d'usuaris des de una sola Aplicació, passar faltes, inventari i moltes més
                                        utilitats més.</p>
                                </div>
                            </li>
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-sellsy wc-icon"></span>
                                    <h4 class="wc-tittle">Disseny Escalable</h4>
                                    <p>S'adapta a tot tipus de dispositius, tablets, phablets, smartphones, Ordinadors
                                        de Sobretaula, Portàtils...</p>
                                </div>
                            </li>
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-hand-peace-o wc-icon"></span>
                                    <h4 class="wc-tittle">Disseny Amigable</h4>
                                    <p>Casa cosa al seu lloc, a ebre-escool ng tot està on a de estar, fàçil i ràpida de
                                        entendre.</p>
                                </div>
                            </li>
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-user-secret wc-icon"></span>
                                    <h4 class="wc-tittle">Rols i Usuaris</h4>
                                    <p>Es disposa de ROLs i usuaris, per tant cada usuari te el seu espai i els altres
                                        usauris no hi poden veurei. </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End welcome area -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="about-area">
                    <div class="row">
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="about-left wow fadeInLeft">
                                <img src="assets/images/about-img.jpg" alt="img">
                                <a class="introduction-btn" href="#">Introduction</a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <div class="about-right wow fadeInRight">
                                <div class="title-area">
                                    <h2 class="tittle">Donem-li <span>un cop</span> d'ull</h2>
                                    <span class="tittle-line"></span>
                                    <p>El disseny està escollit de la Plantilla AdminLTE, amb algunes modificacions
                                        visials, que li donen un caracter inovador.</p>
                                    <p>Cal destacar que aquest disseny s'adaptar a totes les pantalles, cada usuari es
                                        diferent per això es dona importancia a bon disseny.</p>
                                    <div class="about-btn-area">
                                        <a href="#" class="button button-default"
                                           data-text="REGISTRAT"><span>ANEM-HI</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about section -->

<!-- Start call to action -->
<section id="call-to-action">
    <img src="{{asset('img/call-to-action-bg.png')}}" alt="img">
    <div class="call-to-overlay">
        <div class="container">
            <div class="call-to-content wow fadeInUp">
                <h2>Descarregat l'Aplicació desde el GitHub</h2>
                <a href="https://github.com/INSEBRE/ebre-escool-ng" class="button button-default"
                   data-text="GitHub"><span>GitHub</span></a>
            </div>
        </div>
    </div>
</section>
<!-- End call to action -->

<!-- Start Team action -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="team-area">
                    <div class="title-area">
                        <h2 class="tittle">Qui som?</h2>
                        <span class="tittle-line"></span>
                        <p>Som tècnics de gra Superior d'Aplicacions Multiplataform</p>
                    </div>
                    <!-- Start team content -->
                    <div class="team-content">
                        <ul class="team-grid">
                            <li>
                                <div class="team-item team-img-1 wow fadeInUp">
                                    <div class="team-info">
                                        <p> I must explain to you how all this mistaken idea of denouncing pleasure
                                            n</p>
                                        <a href="#"><span class="fa fa-facebook"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-pinterest"></span></a>
                                        <a href="#"><span class="fa fa-rss"></span></a>
                                    </div>
                                </div>
                                <div class="team-address">
                                    <p>John Richerd</p>
                                    <span>CEO & Founder</span>
                                </div>
                            </li>
                            <li>
                                <div class="team-item team-img-3 wow fadeInUp">
                                    <div class="team-info">
                                        <p> I must explain to you how all this mistaken idea of denouncing pleasure
                                            n</p>
                                        <a href="#"><span class="fa fa-facebook"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-pinterest"></span></a>
                                        <a href="#"><span class="fa fa-rss"></span></a>
                                    </div>
                                </div>
                                <div class="team-address">
                                    <p>MIKE BATTON</p>
                                    <span>Co-founder</span>
                                </div>
                            </li>
                        </ul>
                        <!-- End team content -->
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Start Team action -->

<!-- Start service section -->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="service-area">
                    <div class="title-area">
                        <h2 class="tittle">Service we offer</h2>
                        <span class="tittle-line"></span>
                        <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                            totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                    </div>
                    <!-- service content -->
                    <div class="service-content">
                        <ul class="service-table">
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-edit service-icon"></span>
                                    <h4 class="service-title">UX Design</h4>
                                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-sort-amount-asc service-icon"></span>
                                    <h4 class="service-title">Strategy</h4>
                                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-map-o service-icon"></span>
                                    <h4 class="service-title">UI Design</h4>
                                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-rocket service-icon"></span>
                                    <h4 class="service-title">Analystic</h4>
                                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-car service-icon"></span>
                                    <h4 class="service-title">Usibility</h4>
                                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-bank service-icon"></span>
                                    <h4 class="service-title">Business solution</h4>
                                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-user-secret service-icon"></span>
                                    <h4 class="service-title">Creative concept</h4>
                                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="single-service wow slideInUp">
                                    <span class="fa fa-support service-icon"></span>
                                    <h4 class="service-title">Support</h4>
                                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service section -->

<!-- Start counter section -->
<section id="counter">
    <img src="{{asset('/img/counter-bg.jpg')}}" alt="img">
    <div class="counter-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start counter area -->
                    <div class="counter-area">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-counter">
                                <span class="fa fa-users"></span>
                                <div class="counter-count">
                                    <span class="counter">1200</span>
                                    <p>Usuaris</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-counter">
                                <span class="fa fa-eye"></span>
                                <div class="counter-count">
                                    <span class="counter">300</span>
                                    <p>Visites diaries</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-counter">
                                <span class="fa fa-facebook"></span>
                                <div class="counter-count">
                                    <span class="counter">30</span>
                                    <p>Els Agrada</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-counter">
                                <span class="fa fa-twitter"></span>
                                <div class="counter-count">
                                    <span class="counter">20</span>
                                    <p>Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End counter section -->

<!-- Start Contact section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="contact-left wow fadeInLeft">
                    <h2>Contacta</h2>
                    <address class="single-address">
                        <h4>Adreça:</h4>
                        <p>Institut de l'Ebre Avd. Colom 34-42</p>
                    </address>
                    <address class="single-address">
                        <h4>Municipi:</h4>
                        <p>Tortosa</p>
                        <p>Codi Postal: 43500</p>
                    </address>
                    <address class="single-address">
                        <h4>Telèfon - Fax</h4>
                        <p>Tel: 977500949</p>
                        <p>Fax: 977503064</p>
                    </address>
                    <address class="single-address">
                        <h4>Correu electronic</h4>
                        <p>iesebre@iesebre.com</p>
                        <p>e43004441@xtec.com</p>
                    </address>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="contact-right wow fadeInRight">
                    <h2>Envia un missatge</h2>
                    <form action="" class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Correu electronic">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Cos del Misstage"></textarea>
                        </div>
                        <button type="submit" data-text="Envia" class="button button-default"><span>Envia</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact section -->

<!-- Start Footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-top-area">
                        <a class="footer-logo" href="#"><img src="{{asset('/img/logo.png')}}" alt="Logo"></a>
                        <div class="footer-social">
                            <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
                            <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
                            <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
                            <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
                            <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
                            <a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Designed by <a href="http://paolodavila.com">Paolo Dàvila</a> & <a href="https://ebrematic.com">Roger
                Melich</a></p>
    </div>
</footer>
<!-- End Footer -->

<!-- initialize jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{asset('/js/bootstrap.js')}}"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="{{asset('/js/slick.js')}}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{asset('/js/waypoints.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery.counterup.js')}}"></script>
<!-- mixit slider -->
<script type="text/javascript" src="{{asset('/js/jquery.mixitup.js')}}"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{asset('/js/jquery.fancybox.pack.js')}}"></script>
<!-- Wow animation -->
<script type="text/javascript" src="{{asset('/js/wow.js')}}"></script>

<!-- Custom js -->
<script type="text/javascript" src="{{asset('/js/custom.js')}}"></script>

</body>
</html>
