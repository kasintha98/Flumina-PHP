<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Executive Theater</title>

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

   
    <main id="main" class="products-main" style="margin-top: 0px; margin-bottom: 0px; font-family: myFirstFont; src: url(../fonts/Ubuntu-R.ttf);">
        <div class="container">
            <div class="row mx-auto align-items-center">

                <div class="mx-auto" style="position: relative;">
                <img class="center" src="../img/sol-installbg.svg" alt="" style="height: 200%; width: 160%; margin-top: 100px; margin-left: -350px;">
                </div>

                <div class="col-lg-6" style="position: absolute; top: 0px; margin-top: 10px; padding-left: 0px;">
                   

                    <div class="col-lg-12 text-center mx-auto">

                       <div class="col-lg-12 text-center" style="margin-top: 300px; left: 150px;">
                            <h2 style="font-size: 64px; font-family: url(../fonts/Ubuntu-B.ttf);">Executive Theater.</h2>
                            <p style="font-size: 36px; margin-top: 50px;">Alles auf einen Blick.</p>
                            <p style="font-size: 24px;">
                            > Ein Überblick über alle Unternehmensbereiche.<br>
                            > Unterstützung des täglichen Workflows. <br>
                            > Konfiguration von KPI´s und Analysen <br>

                                </p>
                        </div>


                        <div class="col-lg-12 text-center" style="margin-top: 150px; left: 150px;">
                            <h2 style="font-size: 48px; font-family: url(../fonts/Ubuntu-B.ttf);">KONFIGURATION VON ANALYSEN & KPI´s.</h2>
                           
                            <p style="font-size: 24px;">
                            Alle Kennzahlen und Analysen können leicht individuell konfiguriert und als Favoriten erstellt werden.
                                </p>
                        </div>

                        <div class="col-lg-12 text-center" style="margin-top: 150px; left: 150px;">
                            <h2 style="font-size: 48px;">UPDATES & ALERTS.</h2>
                            <p style="font-size: 24px;">Tägliche Updates sobald KPI’s abweichen. Trenddarstellung der Kennzahlen.
                                </p>
                        </div>

                        <div class="col-lg-12 text-center" style="margin-top: 150px; left: 150px;">
                            <h2 style="font-size: 48px;">ZIELEMANAGEMENT.</h2>
                            <p style="font-size: 24px;">Kollaboration aller Unternehmensbereiche durch eine Definition  und Verfolgung einer gemeinsamen Zielsetzung.
                                </p>
                        </div>

                        <div class="col-lg-12 text-center" style="margin-top: 150px; left: 150px;">
                            <h2 style="font-size: 48px;">FÜR ALLE USER-GRUPPEN</h2>
                            <p style="font-size: 24px;">
                            Individuelle Einstellungen und Vergabe von Berechtigungen ermöglichen einen Nutzen für alle User-Gruppen: Dashboards im Shopfloor und KPI-Tracking für strategische Entscheidungen des Managements. 
                            </p>
                        </div>

                        <div class="col-lg-12 text-center" style="margin-top: 150px; left: 150px;">
                            <h2 style="font-size: 48px;">AMPELSYSTEM.</h2>
                            <p style="font-size: 24px;">
                            Ein einfaches System für komplexe und wichtige Inhalte.Die Farben grün, gelb und rot zeigen den Status quo der wichtigen KPI’s.
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