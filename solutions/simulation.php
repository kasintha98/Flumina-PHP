<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Simulation.</title>

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
        style="margin-top: 150px; margin-bottom: 80px; font-family: myFirstFont; src: url(../fonts/Ubuntu-R.ttf);">
        <div class="container">

            <div class="row">
                <div class="col-12" style="position: relative;">
                    <img src="../img/sol-simul.svg" alt="" style="height: auto; width: auto; margin-left: -200px; margin-top: -200px;">
                </div>

                <div class="row no-gutters text-left"
                    style="left: 300px; position: absolute; margin-top: 20px;">

                    <!-- <div class="col-12 text-center" style="position: absolute; align-items: center; top: 50%;"> -->
                    <div class="col-10" style="margin-top: 100px;">
                    <h1 style="font-size: 64px; font-weight: bolder;"><strong>Simulation.</strong></h1>
                    </div>
                    <div class="col-12">
                    <p style="font-size: 36px; margin-top: 94px;">Transparenz in der Unternehmensplanung.</p>
                    </div>
                </div>
                <!-- </div>   -->
            </div>

            <div class="row mx-auto">          
            
                <div class="col-lg-12 text-center" style="top: 100px;">
                    <h1 style="font-size: 48px;">BESTMÖGLICHE REAKTION AUF
                    <br>STÖRFAKTOREN.</h1>
                    <p style="font-size: 36px; margin-top: 30px;">Positive Auswirkungen in allen Bereichen durch eine 
                    <br>kürzere Reaktionszeit auf Störfaktoren </p>
                    <p style="font-size: 24px; color: #C01466;">> Kundenzufriedenheit > Einhaltung der Lieferpläne 
                    <br>> Reduktion von Reklamationen
                    <br>> Erhöhung der Liefertreue </p>
                </div>

                <div class="col-lg-12 text-center" style="top: 300px;">
                    <h1 style="font-size: 48px;">OBJEKTIVE 
                    <br>ENTSCHEIDUNGSSTÜTZEN.</h1>
                    <p style="font-size: 36px; margin-top: 30px;">Strategische Entscheidungen können fundierter
                    <br>getroffen werden. </p>
                    <p style="font-size: 24px; color: #C01466;">>  gesamtheitliche Betrachtung der Auswirkungen 
                    <br>> Transparenz > Planungssicherheit</p>
                </div>

                <div class="col-lg-12 text-center" style="top: 500px;">
                    <h1 style="font-size: 48px;">KOSTENSENKUNG.</h1>
                    <p style="font-size: 36px; margin-top: 30px;">Gezielter Einsatz  
                    <br>der Ressourcen und Kapazitäten 
                    <br>von Mensch, Maschine und Material.</p>
                    <p style="font-size: 24px; color: #C01466;">> Abbau von Beständen > Reduktion der Durchlaufzeiten 
                    <br>> optimale Auslastung der Maschinen</p>
                </div>

                <div class="col-lg-12 text-center" style="top: 700px; margin-bottom: 800px;">
                    <h1 style="font-size: 48px;">MACHBARKEITSANALYSEN.</h1>
                    <p style="font-size: 36px; margin-top: 30px;">Erhöhung der Planungsqualität durch Simulation von  
                    <br>Chancen und Risiken </p>
                    <p style="font-size: 24px; color: #C01466;">> Einkauf > Produktion  
                    <br>>Verkauf</p>
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