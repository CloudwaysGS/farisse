<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <base href="/public">

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

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .containers {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;

        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        section {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #cart {
            height: 25rem;
            width: 30%;
            margin-top: 20px; /* Ajustez la valeur selon vos besoins */
        }

        #products {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            width: 68%;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }

        .add-to-cart {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        #cart-total {
            font-weight: bold;
        }

        #checkout-button {
            background-color: #e44d26;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
        }


        .plus-minus-input {
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .plus-minus-input .input-group-field {
            text-align: center;
            margin-left: 0.5rem;
            margin-right: 0.5rem;
            padding: 1rem;
            width: 4rem;
            height: 2rem;
        }

        .plus-minus-input .input-group-field::-webkit-inner-spin-button,
        .plus-minus-input .input-group-field ::-webkit-outer-spin-button {
            -webkit-appearance: none;
            appearance: none;
        }

        .plus-minus-input .input-group-button .circle {
            border-radius: 50%;
            padding: 0.25em 0.8em;
            background-color: #DB9A64;
            border: none;
        }

        .card:hover {
            border: 1px solid #ddd;
            border-radius: 8px;
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
                                        <li><a href="{{url('/redirects')}}">Menu</a></li>
                                        <li><a href="resta-master/contact.html">Réserver une table</a></li>
                                        <li>

                                            @auth
                                                <a href="{{url('/showcart',Auth::user()->id)}}" class="cart-icon">
                                                    <i class="fa fa-shopping-cart" style="font-size: 24px;"></i>
                                                    <span class="cart-count">{{$count}}</span>
                                                </a>
                                            @endauth
                                            @guest
                                                <span class="cart-count">0</span>
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
                                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registre</a>
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
<style>

    .title{
        margin-bottom: 5vh;
    }
    .card{
        margin: auto;
        max-width: 950px;
        width: 90%;
        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 1rem;
        border: transparent;
    }
    @media(max-width:767px){
        .card{
            margin: 3vh auto;
        }
    }
    .cart{
        background-color: #fff;
        padding: 4vh 5vh;
        border-bottom-left-radius: 1rem;
        border-top-left-radius: 1rem;
    }
    @media(max-width:767px){
        .cart{
            padding: 4vh;
            border-bottom-left-radius: unset;
            border-top-right-radius: 1rem;
        }
    }
    .summary{
        background-color: #ddd;
        border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem;
        padding: 4vh;
        color: rgb(65, 65, 65);
    }
    @media(max-width:767px){
        .summary{
            border-top-right-radius: unset;
            border-bottom-left-radius: 1rem;
        }
    }
    .summary .col-2{
        padding: 0;
    }
    .summary .col-10
    {
        padding: 0;
    }.row{
         margin: 0;
     }
    .title b{
        font-size: 1.5rem;
    }
    .main{
        margin: 0;
        padding: 2vh 0;
        width: 100%;
    }
    .col-2, .col{
        padding: 0 1vh;
    }
    a{
        padding: 0 1vh;
    }
    .close{
        margin-left: auto;
        font-size: 0.7rem;
    }
    img{
        width: 3.5rem;
    }
    .back-to-shop{
        margin-top: 4.5rem;
    }
    h5{
        margin-top: 4vh;
    }
    hr{
        margin-top: 1.25rem;
    }
    form{
        padding: 2vh 0;
    }
    select{
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1.5vh 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247);
    }
    input{
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247);
    }
    input:focus::-webkit-input-placeholder
    {
        color:transparent;
    }
    .btn{
        background-color: #000;
        border-color: #000;
        color: white;
        width: 100%;
        font-size: 0.7rem;
        margin-top: 4vh;
        padding: 1vh;
        border-radius: 0;
    }
    .btn:focus{
        box-shadow: none;
        outline: none;
        box-shadow: none;
        color: white;
        -webkit-box-shadow: none;
        -webkit-user-select: none;
        transition: none;
    }
    .btn:hover{
        color: white;
    }
    a{
        color: black;
    }
    a:hover{
        color: black;
        text-decoration: none;
    }
    #code{
        background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253) , rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
        background-repeat: no-repeat;
        background-position-x: 95%;
        background-position-y: center;
    }
</style>



<header>
    <h1>Mon Panier</h1>
</header>

<form action="{{url('/orderconfirm')}}" method="post">
@csrf
<div class="card mt-3">
    <div class="row">
        <div class="col-md-8 cart" style="height: 400px; overflow-y: auto;">
            <div class="title">
                <div class="row">
                    <div class="col"><h4><b>Panier</b></h4></div>
                    <div class="col align-self-center text-right text-muted">{{$count}} articles</div>
                </div>
            </div>

            @foreach($data as $data)

            <div class="row border-top border-bottom" >
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="/repasimage/{{ $data->image }}"></div>
                    <div class="col">
                        <input type="hidden" value="{{ $data->nom }}" name="nomrepas[]">
                        <div class="row text-muted">{{ $data->nom }}</div>
                        <div class="row">

                        </div>
                    </div>
                    <div class="col">
                        <a href="{{url('/decrement',$data->id)}}">-</a>
                        <input type="hidden" value="{{ $data->quantity }}" name="quantity[]">
                        <a href="#" class="border">{{ $data->quantity }}</a>
                        <a href="{{url('/increment', $data->id)}}">+</a>
                    </div>
                    <input type="hidden" value="{{ $data->prix }}" name="prix[]">

                    <div class="col"> {{ $data->prix }} F<a href="{{url('/remove', $data->id) }}"><span class="close">&#10005;</span></a></div>
                </div>
            </div>
            @endforeach

            <div class="back-to-shop"><a href="{{url('/redirects')}}">&leftarrow;</a><span class="text-muted">Retourner au menu</span></div>
        </div>
        <div class="col-md-4 summary">
            <div><h5><b>Résumé</b></h5></div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">{{$count}} ARTICLES</div>
                <div class="col text-right">{{ $totalPrice }} F</div>
            </div>
                <p>EXPÉDITION</p>
                <select><option class="text-muted">Frais de Livraison  500 F</option></select>

            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">PRIX TOTAL</div>
                <div class="col text-right">{{ $totalPrice + $livraison }} F</div>
            </div>
            <input class="form-control" name="nom" placeholder="Nom">
            <input class="form-control" type="number" name="phone" placeholder="Téléphone">
            <input class="form-control" type="text" name="adresse" placeholder="Adresse">
            <button class="btn">COMMANDER</button>
        </div>
    </div>

</div>
</form>




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
