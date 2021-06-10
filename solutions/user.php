<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>User.</title>

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
        style="margin-top: 100px; margin-bottom: 80px; font-family: myFirstFont; src: url(../fonts/Ubuntu-R.ttf);">

        <div class="container">

            <div class="row mx-auto align-items-center">
                <div class="col-8" style="margin-top: 50px;">
                    <h1 style="font-size: 64px; font-weight: 500; font-weight: bolder;">Einen Mehrwert.<br>Für viele Rollen.</h1>
                    <p style="font-size: 36px; margin-top: 50px;">Vom Shopfloor bis zum Management.<br>Vom DataScientist zum Prozessoptimierer.</p>
                    <p style="font-size: 24px; color: #C01466; margin-top: 50px;">Flumen ist individuell konfigurierbar und bietet auf jedem Level einen Mehrwert.</p>
                </div>
                <div class="col-4">
                    <img src="../img/sol-user-img1.svg" alt="">
                </div>
            </div>

            <div class="row no-gutters" style="margin-top: 200px;">
                <div class="col-12">
                    <h1 style="font-size: 48px;">GESCHÄFTSFÜHRER</h1>
            
                    <div class="col-12" style="margin-top: 10px; padding-left: 0px;">
                        <p style="font-size: 36px;">
                        Mit dem executive Theater alle wichtigen KPI´s im Blick.
                        </p>
                    </div>

                    <p style="font-size: 24px; color: #C01466;">
                    >> mehr
                    </p>

                </div>
            </div>
            
            <div class="row no-gutters" style="margin-top: 150px; margin-bottom: 800px;">

                <div class="col-12 text-right">
                    <h1 style="font-size: 48px;">DATASCIENTISTS</h1>
            
                    <div class="col-12" style="margin-top: 10px; padding-right: 0px;">
                        <p style="font-size: 36px;">
                        Eine Vielzahl an Analysemöglichkeiten zur <br> Ursache-Wirkungsforschung.
                        </p>
                    </div>

                    <p style="font-size: 24px; color: #C01466;">
                    >> mehr
                    </p>
                </div>

                <div class="col-12">
                    <img src="../img/sol-user-img2.svg" alt=""
                        style="width: auto; position: absolute; left: 100px; right: 0px; top: -50px;">
                </div> 

                <div class="col-12" style="top: 600px;">
                    <h1 style="font-size: 48px;">LEAN-MANAGER</h1>
            
                    <div class="col-12" style="margin-top: 10px; padding-left: 0px;">
                        <p style="font-size: 36px;">
                        Unterstützung durch Analysen und <br> Datenverarbeitung in allen Phasen des <br> DMAIC-Zyklus. 
                        </p>
                    </div>

                    <p style="font-size: 24px; color: #C01466;">
                    >> mehr
                    </p>

                </div>

                <div class="col-12 text-right" style="top: 700px;">
                    <h1 style="font-size: 48px;">BEREICHSLEITER</h1>
            
                    <div class="col-12" style="margin-top: 10px; padding-right: 0px;">
                        <p style="font-size: 36px;">
                        Tracking der Kapazitäten, <br> Volumen und Zeiten auf Shopfloorebene.
                        </p>
                    </div>

                    <p style="font-size: 24px; color: #C01466;">
                    >> mehr
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