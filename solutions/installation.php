<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Installation.</title>

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
    
    <?php
            include './components/header.php'
    ?>

    <!-- <div class="mainBackgroundHolder"
        style="height: 900vh; width: 100vw; overflow: hidden; position: absolute; top: 0;"></div> -->

    <!-- <div id="mainBackground" class="mainBackground"></div> -->
    <!-- Animation -->
    <!-- <canvas id="particleCanvas" class="particleCanvas" width="1848" height="949"></canvas> -->

   
    <main id="main" class="products-main" style="margin-top: 150px; margin-bottom: 10px; font-family: myFirstFont; src: url(../fonts/Ubuntu-R.ttf);">
        <div class="container">
            <div class="row mx-auto align-items-center">

                <div class="mx-auto" style="position: relative;">
                <img class="center" src="../img/sol-installbg.svg" alt="" style="height: 200%; width: 130%; margin-top: 150px; margin-left: -175px;">
                </div>

                <div class="col-lg-6" style="position: absolute; top: 0px; margin-top: 300px; margin-bottom: 100px; padding-left: 0px;">
                    <h1 style="font-size: 64px; font-weight: 500;"><strong>Von der Anfrage bis hin zum Use Case.</strong></h1>
                    <p style="font-size: 36px; margin-top: 50px;">Schritt für Schritt.</p>

                    <div class="col-lg-12 text-center mx-auto">
                        <div class="col-lg-12 text-center" style="margin-top: 150px; left: 150px;">
                            <h2 style="font-size: 48px; font-family: url(../fonts/Ubuntu-B.ttf);"><strong>Briefing</strong></h2>
                            <p style="font-size: 36px; margin-top: 50px;">Im ersten Schritt stellen wir fest, wie wir die Prozesse
                                unserer Kunden mit Flumen optimieren können:</p>
                            <p style="color: #C01466; font-size: 24px;">> Unternehmensvorstellung

                                    > Briefing/ Re-Briefing

                                    > Prüfung der Voraussetzungen

                                    > Angebot/ Beauftragung

                                    > Kick-Off aller Beteiligten
                                </p>
                        </div>

                        <div class="col-lg-12 text-center" style="margin-top: 150px; left: 150px;">
                            <h2 style="font-size: 48px;"><strong>Installation</strong></h2>
                            <p style="font-size: 36px; margin-top: 50px;">Wir unterstützen bei der Installation.</p>
                            <p style="color: #C01466; font-size: 24px;">> Vorbereitungen und Freigaben

                                > Kick-Off Installation

                                > Datendownload

                                > Aufsetzen der virtuelle Maschine und Konfiguration 
                                des Betriebssystems

                                > Datentransfer
                                </p>
                        </div>

                        <div class="col-lg-12 text-center" style="margin-top: 150px; left: 150px;">
                            <h2 style="font-size: 48px;"><strong>Anwendung</strong></h2>
                            <p style="font-size: 36px; margin-top: 50px;">Los geht´s.</p>
                            <p style="color: #C01466; font-size: 24px;">
                                > Definition der ersten UseCases
                                > Gemeinsame Websession

                                > Individuelles Set-up des Systems

                                > Anwenderschulung

                                > Verifizieren  und Analysieren
                                </p>
                        </div>
                    </div>

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