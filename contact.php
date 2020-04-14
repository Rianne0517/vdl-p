<?php

$activePage = "contact.php";
include "navbar.php";

?>

<!DOCTYPE html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container1">
        <div class="row row1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lr-6 col-xl-6" id="evensparren">
                <h1>Even sparren?</h1>
                <p>Ben je klaar voor de volgende stap? Weet je al precies wat je wilt of wil je eerst ons advies?</p>
                <p>Om je nog even een beeld te geven van onze ervaring: we hebben inmiddels meer dan 900 projecten gedraaid. Van groot tot klein, van drukwerk tot websites en bedrijfskritische webapplicaties.</p>
                <p>Enthousiast, ambitieus? Neem dan zo snel mogelijk contact op.</p>
                <p>Bel ons op 0513 654 445 of vul het formulier in.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lr-3 col-xl-3">
                <form class="form1">
                    <div class="wrap-input1">
                        <input class="input1" type="text" name="name" placeholder="Naam">
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1">
                        <input class="input1" type="text" name="email" placeholder="E-mail/tel.nr.">
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1">
                        <textarea class="input1" name="message" placeholder="Bericht"></textarea>
                        <span class="shadow-input1"></span>
                    </div>

                    <div>
                        <button class="verstuur-btn"><span>Verstuur!</span></button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lr-3 col-xl-3" id="contactgegevens">
                <h5>Adres</h5>
                <p>Herenwal 137</p>
                <p>8441 BE Heerenveen</p>
                <br>
                <h5>Postadres</h5>
                <p>Postbus 496</p>
                <p>8440 AL Heerenveen</p>
                <br>
                <p>T 0513 654 445</p>
                <p>F 0513 654 761</p>
                <br>
                <p>Storing buiten kantooruren? 06 53977580</p>
                <br>
                <p>Tip of klacht? – Neem contact op </p>
                <br>
                <p>KVK Leeuwarden nr. 01075288</p>
                <p>BTW NL8102.59.710.B01</p>
                <p>IBAN NL35 INGB 0678 6302 08</p>
                <p>BIC INGBNL2A</p>
            </div>
        </div>
    </div>
    <div class="container2">
        <div id="googlemaps">
            <script>
                function initMap() {

                    var uluru = {
                        lat: 52.965074,
                        lng: 5.912988
                    };

                    var map = new google.maps.Map(
                        document.getElementById('googlemaps'), {
                            zoom: 15,
                            center: uluru
                        });

                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                }
            </script>

            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw-cDSK3e1SG3odRuFi-FugrEOA2gFTyA&callback=initMap">
            </script>
        </div>
    </div>
</body>

</html>