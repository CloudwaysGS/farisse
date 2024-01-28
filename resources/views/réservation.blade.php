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

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>

<div class="container p-0">
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title text-center mb-75">
                <h3>Reservation</h3>
            </div>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-xl-6 col-lg-6">
            <div class="map_area">
                <div id="map" style="height: 480px; overflow: hidden;"> </div>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="book_Form">
                <form id="contact" action="{{url('reservation')}}" method="post">
                    @csrf
                <h3>Réserver une table</h3>
                <div class="row ">

                        <div class="col-lg-6">
                            <div class="input_field mb_15">
                                <input type="text" name="nom" placeholder="Votre nom">
                            </div>
                        </div>
                    <div class="col-lg-6">
                            <div class="input_field mb_15">
                                <input type="email" name="email" placeholder="Votre adresse e-mail">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input_field mb_15">
                                <input type="text" name="phone" placeholder="Téléphone">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input_field">
                                <input id="datepicker2" name="date" placeholder="Date">
                            </div>
                        </div>
                    <div class="col-lg-6">
                        <div class="input_field mb_15">
                            <input type="number" name="invite" placeholder="Nombre d'invités">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input_field mb_15">
                            <input type="time" name="heure" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input_field mb_15">
                        <fieldset>
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                        </fieldset>
                        </div>
                    </div>
                        <div class="col-xl-12">
                            <button class="sumbit_btn" type="submit">Faire une réservation</button>
                        </div>


                    <div class="col-lg-6">
                        <div class="single_add d-flex">
                            <div class="icon">
                                <a href="https://www.google.com/maps/place/Le+Farisse/@14.1389265,-16.0758479,17z/data=!3m1!4b1!4m6!3m5!1s0xee9950f92bf98b5:0x78b22805374dff22!8m2!3d14.1389265!4d-16.0758479!16s%2Fg%2F11lgqlk6v7?entry=ttu">
                                <img src="resta-master/img/svg_icon/address.svg" alt="">
                                </a>
                            </div>
                            <div class="ifno">
                                <h4><a href="https://www.google.com/maps/place/Le+Farisse/@14.1389265,-16.0758479,17z/data=!3m1!4b1!4m6!3m5!1s0xee9950f92bf98b5:0x78b22805374dff22!8m2!3d14.1389265!4d-16.0758479!16s%2Fg%2F11lgqlk6v7?entry=ttu">Adresse</a></h4>
                                <p>4WQF+HM Kaolack, N1, Kaolack</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_add d-flex">
                            <div class="icon">
                                <img src="resta-master/img/svg_icon/head.svg" alt="">
                            </div>
                            <div class="ifno">
                                <h4>Reservation</h4>
                                <p>+221 76 626 82 82</p>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>



<script>
    // Coordonnées pour le centre de la carte
    var lat = 14.1389265;
    var lng = -16.0758479;

    // Créer la carte Leaflet
    var mymap = L.map('map').setView([lat, lng], 13);

    // Ajouter une couche de carte OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(mymap);

    // Ajouter un marqueur à la carte
    L.marker([lat, lng]).addTo(mymap);
</script>
