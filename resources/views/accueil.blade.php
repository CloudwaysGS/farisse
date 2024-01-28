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
    @livewireStyles
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
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Des Aliments frais et délicieux
                                     Pour votre santé</h3>
                                <a href="{{url('/menu')}}" class="boxed-btn3">Afficher Les Menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Des Aliments frais et délicieux
                                     Pour votre santé</h3>
                                <a href="{{url('/menu')}}" class="boxed-btn3">Afficher Les Menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Des Aliments frais et délicieux
                                     Pour votre santé</h3>
                                <a href="{{url('/menu')}}" class="boxed-btn3">Afficher Les Menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="icon_1 d-none d-md-block">
            <img src="resta-master/img/icon/1.png" alt="">
        </div>
        <div class="icon_2 d-none d-md-block">
            <img src="resta-master/img/icon/2.png" alt="">
        </div>
        <div class="icon_3 d-none d-md-block">
            <img src="resta-master/img/icon/3.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_info_wrap">
                            <h3>Sed ut perspiciatis unde  <br>
                                omnis iste natus</h3>
                            <span class="long_dash"></span>
                        <p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. Exercitation photo booth stumptown tote bag todo Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation photo booth et 8-bit kale chips proident chillwave deep vow laborum. Aliquip veniam delectus, marfa eiusmod pinterest.</p>
                        <ul class="food_list">
                            <li>
                                <img src="resta-master/img/svg_icon/salad.svg" alt="">
                                <span>Fresh Ingredients</span>
                            </li>
                            <li>
                                <img src="resta-master/img/svg_icon/tray.svg" alt="">
                                <span>Expert cooker</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_img">
                        <div class="img_1">
                            <img src="resta-master/img/about/big.png" alt="">
                        </div>
                        <div class="small_img">
                            <img src="resta-master/img/about/small.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- Delicious area start  -->

    @include("repas")

    <!--/ Delicious area start  -->
    <!-- testimonial_area  -->
    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <p>Testimonials</p>
                        <h3>Our Customer’s Say</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed
                                        neque.</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="resta-master/img/testimonial/author.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Robert Thomson</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed
                                        neque.</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="resta-master/img/testimonial/author2.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Kristiana Chouhan</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed
                                        neque.</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="resta-master/img/testimonial/author2.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Kristiana Chouhan</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed
                                        neque.</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="resta-master/img/testimonial/author.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Robert Thomson</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed
                                        neque.</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="resta-master/img/testimonial/author2.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Kristiana Chouhan</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
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
    <!-- /testimonial_area  -->

    <!-- gallery_start -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-75">
                        <h3>Photo Gallery</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="resta-master/img/gallery/1.png"></a>
            <img src="resta-master/img/gallery/1.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="img/gallery/2.png"></a>
            <img src="resta-master/img/gallery/2.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="resta-master/img/gallery/3.png"></a>
            <img src="resta-master/img/gallery/3.png" alt="">
        </div>

        <div class="single_gallery small_img">
            <a class="popup-image" href="resta-master/img/gallery/4.png"></a>
            <img src="resta-master/img/gallery/4.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="resta-master/img/gallery/5.png"></a>
            <img src="resta-master/img/gallery/5.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="resta-master/img/gallery/6.png"></a>
            <img src="resta-master/img/gallery/6.png" alt="">
        </div>
    </div>

    <!-- gallery end -->
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

    <!-- footer_start  -->
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
                            <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                                <a href="#">+10 367 826 2567</a> <br>
                                <a href="#">contact@carpenter.com</a>
                            </p>
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
    <!-- footer_end  -->

    <!-- JS here -->
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



</body>

</html>
