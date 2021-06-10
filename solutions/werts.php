<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Wertstromanalyse.</title>

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
        style="margin-top: 100px; margin-bottom: 50px; font-family: myFirstFont; src: url(../fonts/Ubuntu-R.ttf);">

        <div class="container">

            <div class="row mx-auto align-items-center">
                <div class="col-8" style="margin-top: 80px;">
                    <h1 style="font-size: 64px; font-weight: 500; font-weight: bolder;">Wertstromanalyse.</h1>
                    <p style="font-size: 36px; margin-top: 50px;">Für jedes Produkt. Vollautomatisiert.</p>
                    <p style="font-size: 24px">Stellen Sie sich vor, <br>Sie können die Wertströme für alle Produkte auf <br>Knopfdruck visualisieren und berechnen. <br>Wie? </p>
                    <p style="font-size: 24px; color: #C01466; margin-top: 10px;">Mit Flumen.</p>
                </div>
                <div class="col-4">
                    <img src="../img/sol-werts-img1.svg" alt="">
                </div>
            </div>

            <div class="row mx-auto align-items-center">
                <div class="col-8" style="margin-top: 100px;">
                    <h1 style="font-size: 48px; font-weight: 500; color: #C01466;">ECHTZEIT.</h1>
                    <p style="font-size: 36px; margin-top: 50px;">Wöchentlich, täglich, minütlich.</p>
                    <p style="font-size: 24px">Sie bestimmen wie aktuell Ihre Kennzahlen sind. <br>Ein Cronjob für die Berechnung kann <br>individuell eingestellt werden.<br></p>
                </div>
                <div class="col-4">
                    <img src="../img/sol-werts-img2.svg" alt="" style="margin-top:100px">
                </div>
            </div>

            <div class="row mx-auto align-items-center">
                <div class="col-8" style="margin-top: 100px;">
                    <h1 style="font-size: 48px; font-weight: 500; color: #C01466;">TRANSPARENZ.</h1>
                    <p style="font-size: 36px; margin-top: 50px;">Vom Mangement bis zum Shopfloor.</p>
                    <p style="font-size: 24px">Flumen vereint die Ebenen von der Geschäftsführung und Strategie,
                    <br>den operativ tätigen Bereichen, bis zur Shopfloor- und Expertenebene.
                    <br><span style="color: #C01466;">Für die Problem- und Ursachenforschung entlang den Prozessen der 
                    <br>Wertschöpfung.</span></p>
                </div>
                
            </div>

            <div class="row mx-auto align-items-center">
                <div class="col-8" style="margin-top: 100px;">
                    <h1 style="font-size: 48px; font-weight: 500; color: #C01466;">VISUALISIERUNG.</h1>
                    <p style="font-size: 36px; margin-top: 50px;">Zusammenhänge sehen.</p>
                    <p style="font-size: 24px">Einfache Elemente repräsentieren alle am Wertstrom 
                    <br>beteiligten Objekte.
                    <br><span style="color: #C01466;">Abhängigkeiten werden schnell identifiziert.</span></p>
                </div>
                <div class="col-4">
                    <img src="../img/sol-werts-img3.svg" alt="">
                </div>
            </div>

            <div class="row mx-auto align-items-center">
                <div class="col-8" style="margin-top: 100px;">
                    <h1 style="font-size: 48px; font-weight: 500; color: #C01466;">FÜR ALLE PRODUKTE.</h1>
                    <p style="font-size: 36px; margin-top: 50px;">Wissensvorsprung durch <br> Geschwindigkeit.</p>
                    <p style="font-size: 24px">Die neu gewonne Zeit fließt in die Lösung 
                    <br>komplexer Sachverhalte und 
                    <br><span style="color: #C01466;">die Implementierung von Maßnahmen.</span></p>
                </div>
                <div class="col-4">
                    <img src="../img/sol-werts-img4.svg" alt="">
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