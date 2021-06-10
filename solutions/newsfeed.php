<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>News Feed.</title>

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
                <div class="col-6" style="margin-top: 100px;">
                    <h1 style="font-size: 64px; font-weight: 500;">News Feed.</h1>
                    <p style="font-size: 36px; margin-top: 94px;">Auf dem aktuellsten Stand.</p>
                </div>
                <div class="col-6">
                    <img src="../img/sol-newsfeed.svg" alt="">
                </div>
            </div>

            <div class="row no-gutters text-center" style="margin-top: 200px;">
                <div class="col-12">
                    <h1 style="font-size: 48px;">MORNING BRIEFING.</h1>
            
                    <div class="col-12" style="margin-top: 80px;">
                        <p style="font-size: 36px;">
                        Individuelle und relevante Themen über den Verlauf der Prozesse und Kennzahlen. Auf Wunsch jeden Morgen in Ihrem Postfach.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row no-gutters text-center" style="margin-top: 150px;">
                <div class="col-12">
                    <h1 style="font-size: 48px;">ALERTS.</h1>
            
                    <div class="col-12" style="margin-top: 80px;">
                        <p style="font-size: 36px;">
                        Bei Unter- oder Überschreitung von Schwellenwerten der KPIś wird der User über eine Benachrichtigung per Email informiert.
                        </p>
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