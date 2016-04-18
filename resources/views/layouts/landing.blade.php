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
    <link rel="stylesheet" href="{{asset('/css/jquery.fancybox.css')}}" type="text/css" media="screen" />
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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
                    <li><a href="#pricing-table">PRICE </a></li>
                    <li><a href="#from-blog">BLOG </a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
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
                        <h2 class="tittle">Welcome to <span>Nex</span></h2>
                        <span class="tittle-line"></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore et dolore magna aliqua. Ut enim ad minim veniamo laboris nis</p>
                    </div>
                    <div class="welcome-content">
                        <ul class="wc-table">
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-users wc-icon"></span>
                                    <h4 class="wc-tittle">Creative concept</h4>
                                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
                                </div>
                            </li>
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-sellsy wc-icon"></span>
                                    <h4 class="wc-tittle">interface design</h4>
                                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
                                </div>
                            </li>
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-line-chart wc-icon"></span>
                                    <h4 class="wc-tittle">strategy</h4>
                                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
                                </div>
                            </li>
                            <li>
                                <div class="single-wc-content wow fadeInUp">
                                    <span class="fa fa-bus wc-icon"></span>
                                    <h4 class="wc-tittle">business solution</h4>
                                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
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
                                    <h2 class="tittle">About <span>Nex</span> design</h2>
                                    <span class="tittle-line"></span>
                                    <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illotore itatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores e</p>
                                    <div class="about-btn-area">
                                        <a href="#" class="button button-default" data-text="KNOW MORE"><span>KNOW MORE</span></a>
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
    <img src="assets/images/call-to-action-bg.png" alt="img">
    <div class="call-to-overlay">
        <div class="container">
            <div class="call-to-content wow fadeInUp">
                <h2>The most impressive templete you will find</h2>
                <a href="#" class="button button-default" data-text="GET IT NOW"><span>GET IT NOW</span></a>
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
                        <h2 class="tittle">Meet our team</h2>
                        <span class="tittle-line"></span>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                    </div>
                    <!-- Start team content -->
                    <div class="team-content">
                        <ul class="team-grid">
                            <li>
                                <div class="team-item team-img-1 wow fadeInUp">
                                    <div class="team-info">
                                        <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
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
                                <div class="team-item team-img-2 wow fadeInUp">
                                    <div class="team-info">
                                        <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
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
                            <li>
                                <div class="team-item team-img-3 wow fadeInUp">
                                    <div class="team-info">
                                        <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                                        <a href="#"><span class="fa fa-facebook"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-pinterest"></span></a>
                                        <a href="#"><span class="fa fa-rss"></span></a>
                                    </div>
                                </div>
                                <div class="team-address">
                                    <p>JOHN VICK</p>
                                    <span>Developer</span>
                                </div>
                            </li>
                            <li>
                                <div class="team-item team-img-4 wow fadeInUp">
                                    <div class="team-info">
                                        <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                                        <a href="#"><span class="fa fa-facebook"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-pinterest"></span></a>
                                        <a href="#"><span class="fa fa-rss"></span></a>
                                    </div>
                                </div>
                                <div class="team-address">
                                    <p>ROB HANSOM</p>
                                    <span>Senior designer</span>
                                </div>
                            </li>
                        </ul>
                    </div>
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
                        <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore</p>
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

<!-- Start Portfolio section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-area">
                    <div class="title-area">
                        <h2 class="tittle">Recent portfolio</h2>
                        <span class="tittle-line"></span>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                    </div>
                    <!-- Portfolio content -->
                    <div class="portfolio-content">
                        <!-- portfolio menu -->
                        <div class="portfolio-menu">
                            <ul>
                                <li class="filter" data-filter="all">All</li>
                                <li class="filter" data-filter=".branding">Branding</li>
                                <li class="filter" data-filter=".design">Design</li>
                                <li class="filter" data-filter=".development">Development</li>
                                <li class="filter" data-filter=".photography">Photography</li>
                            </ul>
                        </div>
                        <!-- Portfolio container -->
                        <div id="mixit-container" class="portfolio-container">
                            <div class="single-portfolio mix branding">
                                <div class="single-item">
                                    <img src="assets/images/portfolio-img-small1.jpg" alt="img">
                                    <div class="single-item-content">
                                        <div class="portfolio-social-icon">
                                            <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big1.jpg"><i class="fa fa-eye"></i></a>
                                            <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="portfolio-title">
                                            <h4>Mobile application</h4>
                                            <span>UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-portfolio mix design">
                                <div class="single-item">
                                    <img src="assets/images/portfolio-img-small2.jpg" alt="img">
                                    <div class="single-item-content">
                                        <div class="portfolio-social-icon">
                                            <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big2.jpg"><i class="fa fa-eye"></i></a>
                                            <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="portfolio-title">
                                            <h4>Mobile application</h4>
                                            <span>UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-portfolio mix development">
                                <div class="single-item">
                                    <img src="assets/images/portfolio-img-small3.jpg" alt="img">
                                    <div class="single-item-content">
                                        <div class="portfolio-social-icon">
                                            <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big3.jpg"><i class="fa fa-eye"></i></a>
                                            <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="portfolio-title">
                                            <h4>Mobile application</h4>
                                            <span>UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-portfolio mix photography">
                                <div class="single-item">
                                    <img src="assets/images/portfolio-img-small4.jpg" alt="img">
                                    <div class="single-item-content">
                                        <div class="portfolio-social-icon">
                                            <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big4.jpg"><i class="fa fa-eye"></i></a>
                                            <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="portfolio-title">
                                            <h4>Mobile application</h4>
                                            <span>UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-portfolio mix photography">
                                <div class="single-item">
                                    <img src="assets/images/portfolio-img-small5.jpg" alt="img">
                                    <div class="single-item-content">
                                        <div class="portfolio-social-icon">
                                            <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big5.jpg"><i class="fa fa-eye"></i></a>
                                            <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="portfolio-title">
                                            <h4>Mobile application</h4>
                                            <span>UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-portfolio mix photography">
                                <div class="single-item">
                                    <img src="assets/images/portfolio-img-small6.jpg" alt="img">
                                    <div class="single-item-content">
                                        <div class="portfolio-social-icon">
                                            <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big6.jpg"><i class="fa fa-eye"></i></a>
                                            <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="portfolio-title">
                                            <h4>Mobile application</h4>
                                            <span>UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-portfolio mix photography">
                                <div class="single-item">
                                    <img src="assets/images/portfolio-img-small7.jpg" alt="img">
                                    <div class="single-item-content">
                                        <div class="portfolio-social-icon">
                                            <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big7.jpg"><i class="fa fa-eye"></i></a>
                                            <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="portfolio-title">
                                            <h4>Mobile application</h4>
                                            <span>UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-portfolio mix photography">
                                <div class="single-item">
                                    <img src="assets/images/portfolio-img-small2.jpg" alt="img">
                                    <div class="single-item-content">
                                        <div class="portfolio-social-icon">
                                            <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big2.jpg"><i class="fa fa-eye"></i></a>
                                            <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="portfolio-title">
                                            <h4>Mobile application</h4>
                                            <span>UI Design</span>
                                        </div>
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
<!-- End Portfolio section -->

<!-- Start counter section -->
<section id="counter">
    <img src="assets/images/counter-bg.jpg" alt="img">
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
                                    <span class="counter">1050</span>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-counter">
                                <span class="fa fa-bus"></span>
                                <div class="counter-count">
                                    <span class="counter">750</span>
                                    <p>Project delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-counter">
                                <span class="fa fa-twitter"></span>
                                <div class="counter-count">
                                    <span class="counter">2,300</span>
                                    <p>Followers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-counter">
                                <span class="fa fa-tasks"></span>
                                <div class="counter-count">
                                    <span class="counter">800</span>
                                    <p>Project done</p>
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

<!-- Start Pricing Table section -->
<section id="pricing-table">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pricing-table-area">
                    <div class="title-area">
                        <h2 class="tittle">Pricing table</h2>
                        <span class="tittle-line"></span>
                        <p>unde omnis iste natus error sit voluptatem accusantium doloremque laudantium  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                    </div>
                    <!-- service content -->
                    <div class="pricing-table-content">
                        <ul class="price-table">
                            <li class="wow slideInUp">
                                <div class="single-price">
                                    <h4 class="price-header">Basic</h4>
                                    <span class="price-amount">$0.00/mo</span>
                                    <p>5GB Storage</p>
                                    <p>1GB RAM</p>
                                    <p>400GB Bandwidth</p>
                                    <p>10 Email Address</p>
                                    <p>Unlimited access</p>
                                    <p>Forum Support</p>
                                    <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                                </div>
                            </li>
                            <li class="wow slideInUp">
                                <div class="single-price standard-price">
                                    <h4 class="price-header">Standard</h4>
                                    <span class="price-amount">$10.00/mo</span>
                                    <p>5GB Storage</p>
                                    <p>1GB RAM</p>
                                    <p>400GB Bandwidth</p>
                                    <p>10 Email Address</p>
                                    <p>Unlimited access</p>
                                    <p>Forum Support</p>
                                    <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                                </div>
                            </li>
                            <li class="wow slideInUp">
                                <div class="single-price">
                                    <h4 class="price-header">Advance</h4>
                                    <span class="price-amount">$19.00/mo</span>
                                    <p>5GB Storage</p>
                                    <p>1GB RAM</p>
                                    <p>400GB Bandwidth</p>
                                    <p>10 Email Address</p>
                                    <p>Unlimited access</p>
                                    <p>Forum Support</p>
                                    <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                                </div>
                            </li>
                            <li class="wow slideInUp">
                                <div class="single-price">
                                    <h4 class="price-header">Mighty</h4>
                                    <span class="price-amount">$39.00/mo</span>
                                    <p>5GB Storage</p>
                                    <p>1GB RAM</p>
                                    <p>400GB Bandwidth</p>
                                    <p>10 Email Address</p>
                                    <p>Unlimited access</p>
                                    <p>Forum Support</p>
                                    <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Table section -->

<!-- Start Testimonial section -->
<section id="testimonial">
    <img src="assets/images/testimonial-bg.jpg" alt="img">
    <div class="counter-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start Testimonial area -->
                    <div class="testimonial-area">
                        <div class="title-area">
                            <h2 class="tittle">What people say about us</h2>
                            <span class="tittle-line"></span>
                        </div>
                        <div class="testimonial-conten">
                            <!-- Start testimonial slider -->
                            <div class="testimonial-slider">
                                <!-- single slide -->
                                <div class="single-slide">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoquat. Duis aute irure d olor in reprehenderit</p>
                                    <div class="single-testimonial">
                                        <img class="testimonial-thumb" src="assets/images/testimonial-image1.png" alt="img">
                                        <p>Jonna Hike</p>
                                        <span>CEO, Themeforest</span>
                                    </div>
                                </div>
                                <!-- single slide -->
                                <div class="single-slide">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoquat. Duis aute irure d olor in reprehenderit</p>
                                    <div class="single-testimonial">
                                        <img class="testimonial-thumb" src="assets/images/team-member2.png" alt="img">
                                        <p>Jonna Hike</p>
                                        <span>CEO, Themeforest</span>
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
<!-- End Testimonial section -->

<!-- Start from blog section -->
<section id="from-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="from-blog-area">
                    <div class="title-area">
                        <h2 class="tittle">Our blog</h2>
                        <span class="tittle-line"></span>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
                    </div>
                    <!-- From Blog content -->
                    <div class="from-blog-content">
                        <div class="row">
                            <div class="col-md-4">
                                <article class="single-from-blog">
                                    <figure>
                                        <a href="blog-single.html"><img src="assets/images/the-sky.jpg" alt="img"></a>
                                    </figure>
                                    <div class="blog-title">
                                        <h2><a href="blog-single.html">Here is the post title</a></h2>
                                        <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                                    </div>
                                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                                    <div class="blog-footer">
                                        <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                                        <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="single-from-blog">
                                    <figure>
                                        <a href="blog-single.html"><img src="assets/images/photographer.jpg" alt="img"></a>
                                    </figure>
                                    <div class="blog-title">
                                        <h2><a href="blog-single.html">Here is the post title</a></h2>
                                        <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                                    </div>
                                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                                    <div class="blog-footer">
                                        <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                                        <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="single-from-blog">
                                    <figure>
                                        <a href="blog-single.html"><img src="assets/images/sealand.jpg" alt="img"></a>
                                    </figure>
                                    <div class="blog-title">
                                        <h2><a href="blog-single.html">Here is the post title</a></h2>
                                        <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                                    </div>
                                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                                    <div class="blog-footer">
                                        <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                                        <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End from blog section -->

{{--<section id="client">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="client-area">--}}
                    {{--<ul class="client-table">--}}
                        {{--<li><img src="assets/images/envato.png" alt="client logo"></li>--}}
                        {{--<li><img src="assets/images/google.png" alt="client logo"></li>--}}
                        {{--<li><img src="assets/images/amazon.png" alt="client logo"></li>--}}
                        {{--<li><img src="assets/images/discovery.png" alt="client logo"></li>--}}
                        {{--<li><img src="assets/images/envato.png" alt="client logo"></li>--}}
                        {{--<li><img src="assets/images/tuenti.png" alt="client logo"></li>--}}
                        {{--<li><img src="assets/images/envato.png" alt="client logo"></li>--}}
                        {{--<li><img src="assets/images/google.png" alt="client logo"></li>--}}
                        {{--<li><img src="assets/images/amazon.png" alt="client logo"></li>--}}
                        {{--<li><img src="assets/images/discovery.png" alt="client logo"></li>--}}
                        {{--<li><img src="assets/images/envato.png" alt="client logo"></li>--}}
                        {{--<li><img src="assets/images/tuenti.png" alt="client logo"></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- Start Contact section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="contact-left wow fadeInLeft">
                    <h2>Contact with us</h2>
                    <address class="single-address">
                        <h4>Postal address:</h4>
                        <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                    </address>
                    <address class="single-address">
                        <h4>Headquarters:</h4>
                        <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                    </address>
                    <address class="single-address">
                        <h4>Phone</h4>
                        <p>Phone Number: (123) 456 7890</p>
                        <p>Fax Number: (123) 456 7890</p>
                    </address>
                    <address class="single-address">
                        <h4>E-Mail</h4>
                        <p>Support: Support@example.com</p>
                        <p>Sales: sales@example.com</p>
                    </address>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="contact-right wow fadeInRight">
                    <h2>Send a message</h2>
                    <form action="" class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control"></textarea>
                        </div>
                        <button type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact section -->
<!-- Start Google Map -->
{{--<section id="google-map">--}}
    {{--<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d6303.67022361714!2d144.955652!3d-37.817331!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-37.8173306!2d144.9556518!5e0!3m2!1sen!2sbd!4v1442411159706" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
{{--</section>--}}
<!-- End Google Map -->

<!-- Start Footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-top-area">
                        <a class="footer-logo" href="#"><img src="{{asset('/css/logo.png')}}" alt="Logo"></a>
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
        <p>Designed by <a href="http://paolodavila.com">Paolo Dàvila</a> & <a href="https://ebrematic.com">Roger Melich</a></p>
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
