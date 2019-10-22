<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="smelle - Creative One Page Bootstrap Template">
    <meta name="keywords" content="onepageboss, new, html, one page, bootstrap, new html template, design, creative, onepage, clean, modern">
    <meta name="author" content="Tanvir Rahman Hridoy">
    <!-- PAGE TITLE -->
    <title>B-Travel - Banyuwangi</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/bootstrap/css/bootstrap.min.css ') }}">
    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,800,900" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/fonts/linear-fonts.css ') }}">
    <link rel="stylesheet" href="{{ asset ('assets/fonts/font-awesome.css ') }}">
    <!-- OWL CAROSEL CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/owlcarousel/css/owl.carousel.css ') }}">
    <link rel="stylesheet" href="{{ asset ('assets/owlcarousel/css/owl.theme.css ') }}">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/magnific-popup.css ') }}">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/animate.min.css ') }}">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css ') }}">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/responsive.css ') }}">
    <![if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- START PRELOADER AREA-->
    <div class="preloader-area">
        <div class="spinner">
            <i class="fa fa-plane" aria-hidden="true"></i>
            <h2>BTravel</h2>
        </div>
    </div>
    <!-- END PRELOADER AREA -->

    <!-- START HOMEPAGE DESIGN AREA -->
    <header id="home" class="welcome-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- START LOGO DESIGN AREA -->
                        <div class="logo">
                            <a href="http://localhost/magangbesar/public">
                                <img src="{{ asset ('assets/images/logo1.png') }}" style="margin-top:-10px;margin-bottom:10px;">
                            </a>
                        </div>
                        <!-- END LOGO DESIGN AREA -->
                    </div>
                    <div class="col-md-9">
                        <!-- START MENU DESIGN AREA -->
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#place">Places</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#About">About</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#gallery">gallery</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#testimonial">Clients</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#team">Team</a>
                                        </li>
                                        @guest

                                        <li>
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @else
                                        <li class="nav-item navbar-nobg">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="login" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                       
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item text-warning" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                 {{ __('Logout') }}
                                                </a>
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                            </form>
                                        </div>
                                        
                                    </li>
                                        @endguest

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END MENU DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->
@yield('content')

     <!-- START FOOTER DESIGN AREA -->
     <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="footer-text">
                        <h6>&copy;copyright | B-travel Banyuwangi 2019</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / END CONTACT DETAILS DESIGN AREA -->

    <!-- START SCROOL UP DESIGN AREA -->
    <div class="scroll-to-up">
        <div class="scrollup">
            <span class="lnr lnr-chevron-up"></span>
        </div>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->




    <!-- LATEST JQUERY -->
    <script src="{{ asset ('assets/js/jquery.min.js') }}"></script>
    <!-- BOOTSTRAP JS -->
    <script src="{{ asset ('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- OWL CAROUSEL JS  -->
    <script src="{{ asset ('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- MAGNIFICANT JS -->
    <script src="{{ asset ('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- STEALLER JS -->
    <script src="{{ asset ('assets/js/jquery.stellar.min.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset ('assets/js/wow.min.js') }}"></script>
    <!-- CONTCAT FORM JS -->
    <script src="{{ asset ('assets/js/form-contact.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset ('assets/js/scripts.js') }}"></script>
</body>
</html>
