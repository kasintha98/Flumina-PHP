<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Flumina Products</title>

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
        style="margin-top: 100px; font-family: myFirstFont; src: url(../fonts/Ubuntu-R.ttf);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 products-main-title text-center">
                    <h3 style="font-size: 24px; line-height: 27.58px; font-weight: 400;"><strong>FLUMINA
                            products</strong></h3>
                </div>
                <div class="col-md-8 products-main-content mx-auto">
                    <p style="margin-top: 51px; font-size: 24px; text-align: left;">FLUMINA ist spezialisiert auf die
                        Visualisierung und Analyse komplexer Systeme und bietet Lösungen .. </p>
                </div>
                <div class="col-md-12 products-main-content text-center" style="margin-top: 113px;">
                    <img src="../img/image1.svg" alt="">
                    <p>Link to industry and legal</p>
                </div>

            </div>
            <div class="row no-gutters" style="margin-top: 36px; margin-left: 200px;">
                <div class="col-12 col-sm-6 col-md-8">
                    <h4><strong>Online-Services</strong></h4>
                    <p>FLUMINA bietet eine schnelle und unverbindliche Unternehmens-
                        analyse auf Knopfdruck an.</p>
                </div>
                <div class="col-6 col-md-4"><a href="online.php"><img src="../img/Group 18.svg" alt=""></a></div>
            </div>
            <div class="row no-gutters" style="margin-top: 50px; margin-left: 200px;">
                <div class="col-12 col-sm-6 col-md-8">
                    <h4><strong>Digitale Assistenzsysteme</strong></h4>
                    <p>FLUMINA unterstützt den Menschen in der Suche, Navigation, Methodik, Alerts und mit
                        Sonderfunktionen-
                        durch das Unternehmen.</p>
                </div>
                <div class="col-6 col-md-4"><a href="digitalAssist.php"><img src="../img/Group 18.svg" alt=""></a></div>
            </div>
            <div class="row no-gutters" style="margin-top: 36px; margin-left: 200px;">
                <div class="col-12 col-sm-6 col-md-8">
                    <h4><strong>Digitale Zwillinge</strong></h4>
                    <p>FLUMINA visualisiert die Unternehmensbereiche, garantiert die
                        Echtzeit der Daten und schafft Informationssymmetrie.</p>
                </div>
                <div class="col-6 col-md-4"><a href="digital.php"><img src="../img/Group 18.svg" alt=""></a></div>
            </div>
            <div class="row no-gutters" style="margin-top: 36px; margin-left: 200px;">
                <div class="col-12 col-sm-6 col-md-8">
                    <h4><strong>ETL-Prozessoren</strong></h4>
                    <p>FLUMINA verbindet, strukturiert und berechnet vorhandene Rohdaten aus dem ERP-System.</p>
                </div>
                <div class="col-6 col-md-4"><a href="etl.php"><img src="../img/Group 18.svg" alt=""></a></div>
            </div>
            <div class="row no-gutters" style="margin-top: 36px; margin-left: 200px;">
                <div class="col-12 col-sm-6 col-md-8">
                    <h4><strong>Bibiliothek</strong></h4>
                    <p>FLUMINA unterstützt mit vorkonfigurierten Methoden und Kennzahlen
                        bei der Analyse der gesamten Wertströme.</p>
                </div>
                <div class="col-6 col-md-4"><a href="bibliothek.php"><img src="../img/Group 18.svg" alt=""></a></div>
            </div>
            <div class="row no-gutters" style="margin-top: 36px; margin-left: 200px;">
                <div class="col-12 col-sm-6 col-md-8">
                    <h4><strong>Plattform</strong></h4>
                    <p>FLUMINA ist spezialisiert auf die Visualisierung und Analyse komplexer Systeme und bietet
                        Lösungen .. </p>
                </div>
                <div class="col-6 col-md-4"><a href="plattform.php"><img src="../img/Group 18.svg" alt=""></a></div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 products-main-title text-center" style="margin-top: 138px;">
                    <h1 style="font-size: 72px; font-weight: 1000;">Know <span style="color: #C01466;">Now.</span> </h1>
                </div>
                <div class="col-md-5 products-main-content mx-auto text-center" style="margin-top: 21px;">
                    <p style="font-size: 36px; font-weight: 300;">Flumen revolutioniert die
                        Art wie Organisationen
                        Ihre Wertschöpfungskette sehen
                        und Daten nutzen.</p>
                </div>
                <div class="col-md-12 products-main-content" style="left: 900px; top: -100px;">
                    <img src="../img/starTwo.svg" alt="">
                </div>
                <div class="col-md-12 products-main-content text-center">
                    <h1 style="font-size: 64px; font-weight: 300;"><strong>flumen enterprise</strong></h1>
                </div>
                <div class="col-md-11 products-main-content text-center mx-auto"
                    style="margin-top: 34px; margin-bottom: 50px;">
                    <p style="font-size: 36px; font-weight: 300; line-height: 41px;">Flumen enterprise ist ein digitales
                        Assistenzsystem,
                        welches die Ist-Zustände und Potenziale aller Unternehmensbereiche
                        aufzeigt und so eine transparente Entscheidungsgrundlage liefert.
                        <br>
                        <br>
                        Entwickelt wurde Flumen enterprise für mittelständische Unternehmen
                        in den Branchen Maschinenbau, Industrie, produzierendes Gewerbe und Handel.
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