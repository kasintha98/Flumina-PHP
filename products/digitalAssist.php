<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Digitaler Assistent.</title>

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
        style="margin-top: 150px; margin-bottom: 50px; font-family: myFirstFont; src: url(../fonts/Ubuntu-R.ttf);">
        <div class="container">
            <div class="row mx-auto align-items-center">
                <div class="col-xs-6" style="margin-top: 100px;">
                    <h1 style="font-size: 64px; font-weight: 500;"><strong>Digitaler Assistent.</strong></h1>
                </div>
                <div class="col-xs-6">
                    <img src="../img/digitalAssistTop.svg" alt="" style="margin-left: 150px;">
                </div>
                <div class="col-8">
                    <p style="font-size: 36px; margin-top:150px;">
                        Intelligente Assistenzsysteme unterstützen
                        den User.
                    </p>
                </div>
            </div>


            <div class="row">
                <div class="mx-auto" style="position: relative;">
                    <img src="../img/digitalAssistBg.svg" alt="" style="height: 100%; width: 100%;">
                </div>

                <div class="row no-gutters justify-content-center"
                    style="left: 300px; position: absolute; margin-top: 165px;">

                    <!-- <div class="col-12 text-center" style="position: absolute; align-items: center; top: 50%;"> -->
                    <div class="col-lg-8 col-sm-12 justify-content-center" style="text-align: left; display: block;">
                        <h1 style="font-weight: bolder; font-size: 48px;">NAVIGATION</h1>
                        <p class="col-10" style="font-size: 24px;">....durch Sichten und Ebenen im Unternehmen,
                            Trill-Down von der globalen Sicht bis auf Auftragsebene - oder umgekehrt. </p>
                    </div>

                    <div class="col-lg-8 col-sm-12 justify-content-center"
                        style="text-align: left; top: 50px; display: block;">
                        <h1 style="font-weight: bolder; font-size: 48px;">GRUPPIERUNG</h1>
                        <p class="col-10" style="font-size: 24px;">....nach Wunsch: Lieferanten, Länder, Arbeitsplätze,
                            Materialien, Produkte, Maschinen, Sparten,....</p>
                    </div>

                    <div class="col-lg-8 col-sm-12 justify-content-center"
                        style="text-align: left; top: 100px; display: block;">
                        <h1 style="font-weight: bolder; font-size: 48px;">METRIK</h1>
                        <p class="col-10" style="font-size: 24px;">...über 650 Kennzahlen im Standard. </p>
                    </div>

                    <div class="col-lg-8 col-sm-12 justify-content-center"
                        style="text-align: left; top: 150px; display: block;">
                        <h1 style="font-weight: bolder; font-size: 48px;">ANSICHTEN</h1>
                        <p class="col-10" style="font-size: 24px;">...Dashboards, Berichte, Exports, Favoriten</p>
                    </div>

                    <div class="col-lg-8 col-sm-12 justify-content-center"
                        style="text-align: left; top: 200px; display: block;">
                        <h1 style="font-weight: bolder; font-size: 48px;">ALERT</h1>
                        <p class="col-10" style="font-size: 24px;">...Benachrichtigungen im System oder per
                            Push-nachricht, sobald Schwellen erreicht sind</p>
                    </div>

                    <div class="col-lg-8 col-sm-12 justify-content-center"
                        style="text-align: left; top: 250px; display: block;">
                        <h1 style="font-weight: bolder; font-size: 48px;">METHODE</h1>
                        <p class="col-10" style="font-size: 24px;">...von der Wertstromanalyse über Kostenanalysen,
                            Portfolio-Analysen oder ABC-Analysen</p>
                    </div>

                </div>
                <!-- </div>   -->
            </div>

        </div>

        <!-- <div class="row mx-auto align-items-center" style="top: 80%;">
                <div class="mx-auto">
                <img src="../img/digitalAssistBg.svg" alt="" style="position: absolute; left: 20%; right: 0%; top:80%; height: 100%; width: auto; align-items: center;">
                </div>
                <div class="col-10">
                <h1>NAVIGATION</h1>
                <p>....durch Sichten und Ebenen im Unternehmen, Trill-Down von der globalen Sicht bis auf Auftragsebene - oder umgekehrt. </p>
                <h1>GRUPPIERUNG</h1>
                <p>....nach Wunsch: Lieferanten, Länder, Arbeitsplätze, Materialien, Produkte, Maschinen, Sparten,....</p>
                <h1>METRIK</h1>
                <p>...über 650 Kennzahlen im Standard. </p>
                <h1>ANSICHTEN</h1>
                <p>...Dashboards, Berichte, Exports, Favoriten</p>
                <h1>ALERT</h1>
                <p>...Benachrichtigungen im System oder per Push-nachricht, sobald Schwellen erreicht sind</p>
                <h1>METHODE</h1>
                <p>...von der Wertstromanalyse über Kostenanalysen, Portfolio-Analysen oder ABC-Analysen</p>
                
                </div>
        </div>  -->

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