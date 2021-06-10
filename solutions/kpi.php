<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>KPI System.</title>

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
                    <h1 style="font-size: 64px; font-weight: 500; font-weight: bolder;"><strong>KPI System.</strong></h1>
                    <p style="font-size: 36px; margin-top: 50px;">Vordefinierte Kennzahlen und Analysen.
                    <br>Für alle Unternehmensbereiche. </p>
                </div>
            </div>

            <div class="row mx-auto align-items-center">
                <div class="col-4">
                    <img src="../img/kpi-img1.svg" alt="" style="margin-top:100px">
                </div>
                <div class="col-8" style="margin-top: 100px;">
                    <p style="font-size: 24px">
                    <span style="margin-left: 150px;">Wartezeit</span> 
                    <span style="margin-left: 150px;">Umlaufbestand</span> 
                    <br><br><span style="color: #C01466; margin-left: 250px;">Durchlaufzeit</span>
                    <br><span>Kapazität </span>
                    <br><br><span style="color: #C01466; margin-left: 150px;">Aussschuss</span>                                      
                    <span style="margin-left: 150px;">Termintreue</span>
                    <br><br><span style="margin-left: 250px;">Auftragmenge</span>
                    </p>
                </div>              
            </div>

            <div class="row mx-auto align-items-center">
                <div class="col-12" style="margin-top: 100px;">
                    <p style="font-size: 24px">Der Standardumfang beinhaltet  über 
                    <span style="font-size: 36px; font-weight: bolder;">650 Kennzahlen</span> 
                    zur detaillierten 
                    <br>Analyse des Unternehmens.</p>
                </div>     
            </div>

            <div class="row mx-auto align-items-center">
                <div class="col-4">
                    <img src="../img/kpi-img-crown.svg" alt="" style="margin-top:100px">
                </div>
                <div class="col-8" style="margin-top: 100px;">
                    <p style="font-size: 24px">
                    <span style="margin-left: 150px;">Bestellvolumen</span> 
                    <span style="margin-left: 150px;"> Lieferdauer</span> 
                    <br><br><span style="margin-left: 250px;"> Liefertreue</span>
                    <br><span>Reklamationen </span>
                    <br><br><span style="margin-left: 150px;"> Rechnung</span>                                      
                    <span style="margin-left: 150px;"> Termintreue</span>
                    <br><br><span style="margin-left: 250px;"> Preisentwicklung</span>
                    </p>
                </div>              
            </div>

            <div class="row mx-auto align-items-center">
                <div class="col-12" style="margin-top: 100px;">
                    <p style="font-size: 24px">
                    <span style="font-size: 36px; font-weight: bolder;">Individuelle Kennzahlen,</span> deren Definition und Berechnung
                    <br>aus dem ERP System erfolgen, werden innherhalb eines Tages 
                    <br>implementiert.  
                    
                </div>     
            </div>

            <div class="row mx-auto align-items-center">
                <div class="col-4">
                    <img src="../img/sol-kpi-truck.svg" alt="" style="margin-top:100px">
                </div>
                <div class="col-8" style="margin-top: 100px;">
                    <p style="font-size: 24px">
                    <span style="margin-left: 150px;"> Lieferverzug</span> 
                    <span style="margin-left: 150px;"> Bestellvolumen</span> 
                    <br><br><span style="margin-left: 250px; color: #B0DEED;"> Liefertreue</span>
                    <br><span style="color: #B0DEED;">Lieferstruktur </span>
                    <br><br><span style="margin-left: 150px;">  Qualitätsquote</span>                                      
                    <span style="margin-left: 150px;"> Preisentwicklung</span>
                    <br><br><span style="margin-left: 250px; color: #B0DEED;">   Termintreue</span>
                    </p>
                </div>              
            </div>

            <div class="row mx-auto align-items-center">
                <div class="col-12" style="margin-top: 100px;">
                    <p style="font-size: 24px">
                    Der Standardumfang beinhaltet vordefinierte Workflows wie 
                    <br><span style="font-size: 36px; font-weight: bolder;">Potential-, Kosten-, Zeit- und Maßnahmenanalysen.</span>                     
                </div>     
            </div>

            <div class="row mx-auto align-items-center">
                <div class="col-4">
                    <img src="../img/sol-kpi-chart.svg" alt="" style="margin-top:100px">
                </div>
                <div class="col-8" style="margin-top: 100px;">
                    <p style="font-size: 24px">
                    <span style="margin-left: 50px; color: #C01466;"> Deckungsbeitrag I-III</span> 
                    <span style="margin-left: 150px;"> Rechnungsvolumen</span> 
                    <br><br><span style="margin-left: 250px;"> Selbstkosten</span>
                    <br><span style="color: #C01466;">Materialkosten </span>
                    <br><br><span style="margin-left: 50px;"> Vertriebs- und Verwaltungskosten</span>                                      
                    <br><span style="margin-left: 450px;"> Preisentwicklung</span>
                    <br><br><span style="margin-left: 250px; color: #C01466;"> Bestellpositionen</span>
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