<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Online Services.</title>

    <link rel="stylesheet" type="text/css" href="../css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="../css/searchbar.css">
    <link rel="stylesheet" type="text/css" href="../css/media.css" />
    <link rel="stylesheet" type="text/css" href="../css/language.css" />
    <link rel="stylesheet" type="text/css" href="../css/privacy.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
</head>

<body>
    <!--Including top bar and navigation bar start-->
    <?php
                include './components/header.php'
    ?>
    <!--Including top bar and navigation bar end-->

    <!-- <div class="mainBackgroundHolder"
        style="height: 900vh; width: 100vw; overflow: hidden; position: absolute; top: 0;"></div> -->

    <!-- <div id="mainBackground" class="mainBackground"></div> -->
    <!-- Animation -->
    <!-- <canvas id="particleCanvas" class="particleCanvas" width="1848" height="949"></canvas> -->


    <main id="main" class="products-main"
        style="margin-top: 150px; font-family: myFirstFont; src: url(../fonts/Ubuntu-R.ttf);">
        <div class="container">
            <div class="row mx-auto align-items-center">
                <div class="col-6" style="margin-top: 100px;">
                    <h1 style="font-size: 64px; font-weight: 500;"><strong>Online Services.</strong></h1>
                    <p style="font-size: 36px; margin-top: 94px;">Unverbindlich und ohne Lizenz.</p>
                </div>
                <div class="col-6">
                    <img src="../img/star3.svg" alt="">
                </div>
            </div>
            <div class="row no-gutters" style="margin-top: 200px;">
                <div class="col-12">
                    <p style="font-size: 24px;">Werten Sie alle Abläufe und Prozesse der Wertschöpfungskette mit Flumen
                        aus. </p>
                    <h1 style="font-size: 48px; margin-top: 100px;"><strong>In drei Schritten erhalten Sie Ihre erste
                            Analyse:</strong></h1>
                    <div class="col-10" style="margin-top: 80px;">
                        <p style="font-size: 24px;">
                            1. Nach der Registierung erhalten Sie per Email einen Link, um die Registration
                            abzuschließen
                            <br>
                            2. Folgen Sie der Anleitung für den Datendownload aus dem ERP-System und laden Sie die Daten
                            sicher und verschlüsselt auf unseren sicherheitszertifierten Server.
                            <br>
                            3. Sie erhalten nach kurzer Zeit Ihre Unternehmensanalyse per Email.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6" style="margin-top: 277px;">
                    <img src="../img/computer.svg" alt="">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p style="font-size: 24px; margin-top: 318px;">Die Unternehmensanalyse dient als Basisinformationen
                        zur
                        <span><strong>Identifikation der größten Kostentreiber</strong></span> über einzelne Produkte
                        bzw. Produktgruppen anhand der Kategorien
                        Menge, Zeit und Kosten.
                    </p>
                </div>
            </div>
            <div class="row" style="margin-top: 200px; margin-bottom: 100px;">
                <div class="col-12">
                    <p style="font-size: 24px;">
                        Diese drei Kategorien werden u.a. anhand folgender Kennzahlen dargestellt:
                        Durchlaufzeiten, Flussgrade, Lagerbestände, Informationen zur Aussschussmenge, Umsatz sowie
                        Deckungsbeiträge
                    </p>
                </div>
            </div>
        </div>


    </main>









    <!------------footer------------------------->
    <?php
                include './components/footer.html'
    ?>
    <!------------footer------------------------->

    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".fa-search").click(function() {
            $(".icon").toggleClass("active");
            $("input[type='text']").toggleClass("active");
        });
    });
    </script>
    <script src="../js/main.js"></script>
    <script src="../js/nav.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../js/actions.js"></script>

</body>

</html>