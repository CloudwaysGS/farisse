<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restaurant</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="resta-master/image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="resta-master/css/bootstrap.min.css">
    <link rel="stylesheet" href="resta-master/css/owl.carousel.min.css">
    <link rel="stylesheet" href="resta-master/css/magnific-popup.css">
    <link rel="stylesheet" href="resta-master/css/font-awesome.min.css">
    <link rel="stylesheet" href="resta-master/css/themify-icons.css">
    <link rel="stylesheet" href="resta-master/css/gijgo.css">
    <link rel="stylesheet" href="resta-master/css/nice-select.css">
    <link rel="stylesheet" href="resta-master/css/flaticon.css">
    <link rel="stylesheet" href="resta-master/css/slicknav.css">

    <link rel="stylesheet" href="resta-master/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <style>
        .cart-icon {
            position: relative;
            display: inline-block;
        }

        .cart-count {
            position: absolute;
            top: -10px; /* Ajustez la valeur en fonction de votre mise en page */
            right: -5px; /* Ajustez la valeur en fonction de votre mise en page */
            background-color: #DB9A64; /* Couleur de fond du nombre */
            color: #fff; /* Couleur du texte du nombre */
            border-radius: 50%; /* Bordure arrondie pour créer un cercle */
            padding: 1px 5px; /* Ajustez la valeur pour l'espacement intérieur */
            font-size: 12px; /* Ajustez la taille de la police */
        }
    </style>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="header_bottom_border">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="resta-master/index.html">
                                    <img src="resta-master/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{url('/')}}">Accueil</a></li>
                                        <li><a href="{{url('/menu')}}">Menu</a></li>
                                        <li><a href="resta-master/contact.html">Réserver une table</a></li>
                                        <li>

                                            @auth
                                                <a href="{{url('/showcart',Auth::user()->id)}}" class="cart-icon">panier
                                                    <i class="fa fa-shopping-cart" style="font-size: 24px;"></i>
                                                    <span class="cart-count">{{$count}}</span>
                                                </a>
                                            @endauth
                                            @guest
                                                <a href="" class="cart-icon">
                                                    <i class="fa fa-shopping-cart" style="font-size: 24px;"></i>
                                                    <span class="cart-count">0</span>
                                                </a>
                                            @endguest
                                        </li>

                                        <li>
                                            @if (Route::has('login'))
                                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                                    @auth
                                                        <x-app-layout>

                                                        </x-app-layout>
                                                    @else
                                                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Se Connecter</a>

                                                        @if (Route::has('register'))
                                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">S'inscrire</a>
                                                        @endif
                                                    @endauth
                                                </div>
                                            @endif
                                        </li>


                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<div class="bradcam_area bradcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Notre Carte</h3>
                </div>
            </div>
        </div>
    </div>
</div>

@include("repas");
<div class="Reservation_area">
    <div class="rev_icon_1 d-none d-md-block">
        <img src="resta-master/img/icon/4.png" alt="">
    </div>
    <div class="rev_icon_2 d-none d-md-block">
        <img src="resta-master/img/icon/5.png" alt="">
    </div>
    <div class="rev_icon_3 d-none d-md-block">
        <img src="resta-master/img/icon/6.png" alt="">
    </div>
@include("réservation")
</div>

<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3 ">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="resta-master/img/footer_logo.png" alt="">
                            </a>
                        </div>
                        <a href="https://www.google.com/maps/dir//14.1388268,-16.0758694/@14.1389317,-16.0784228,17z/data=!4m2!4m1!3e0?entry=ttu">4WQF+HM Kaolack, N1, <br> Kaolack<br>
                            <a href="#">+221 76 626 82 82</a> <br>
                            <a href="#">lefarise@gmail.com</a>
                        </a>
                        <p>



                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 offset-xl-1">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Useful Links
                        </h3>
                        <ul>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#"> Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Subscribe
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                            luckily.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="resta-master/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="resta-master/js/vendor/jquery-1.12.4.min.js"></script>
<script src="resta-master/js/popper.min.js"></script>
<script src="resta-master/js/bootstrap.min.js"></script>
<script src="resta-master/js/owl.carousel.min.js"></script>
<script src="resta-master/js/isotope.pkgd.min.js"></script>
<script src="resta-master/js/ajax-form.js"></script>
<script src="resta-master/js/waypoints.min.js"></script>
<script src="resta-master/js/jquery.counterup.min.js"></script>
<script src="resta-master/js/imagesloaded.pkgd.min.js"></script>
<script src="resta-master/js/scrollIt.js"></script>
<script src="resta-master/js/jquery.scrollUp.min.js"></script>
<script src="resta-master/js/wow.min.js"></script>
<script src="resta-master/js/gijgo.min.js"></script>
<script src="resta-master/js/nice-select.min.js"></script>
<script src="resta-master/js/jquery.slicknav.min.js"></script>
<script src="resta-master/js/jquery.magnific-popup.min.js"></script>
<script src="resta-master/js/plugins.js"></script>



<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>


<script src="resta-master/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-calendar-o"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-calendar-o"></span>'
        }

    });
</script>

<script>
    $(document).ready(function(){
        $('.count').prop('disabled', true);
        $(document).on('click','.plus',function(){
            $('.count').val(parseInt($('.count').val()) + 1 );
        });
        $(document).on('click','.minus',function(){
            $('.count').val(parseInt($('.count').val()) - 1 );
            if ($('.count').val() == 0) {
                $('.count').val(1);
            }
        });
    });
</script>

<script>
    function initMap() {
        var uluru = {
            lat: -25.363,
            lng: 131.044
        };
        var grayStyles = [{
            featureType: "all",
            stylers: [{
                saturation: -90
            },
                {
                    lightness: 50
                }
            ]
        },
            {
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#ccdee9'
                }]
            }
        ];
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: -31.197,
                lng: 150.744
            },
            zoom: 9,
            styles: grayStyles,
            scrollwheel: false
        });
    }
</script>



</body>

</html>
