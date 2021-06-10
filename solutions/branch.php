<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Branchen.</title>

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
            <div class="row mx-auto align-items-center">
                <div class="branchBg">
                    <img src="../img/branch-img1.svg" alt=""
                        style="height: auto; width: 100%; left: -300px; right: 23.09%; top:-300px; bottom: -188.27%; position: absolute; ">
                </div>
                <div class="col-10" style="margin-top: 100px;">
                    <h1 style="font-size: 64px; font-weight: 500;"><strong>Branchen.</strong></h1>
                </div>
                <div class="col-12">
                    <p style="font-size: 36px; margin-top: 94px;">
                    Die produzierende Industrie ist unsere Zielgruppe.
                    <br><span style="color: #C01466; font-size: 24px;">Transparenz in allen Wertströmen. Branchenunabhängig.</span></p>
                </div>
            </div>

            <div class="row no-gutters text-center" style="margin-top: 200px;">
                <div class="col-12 text-center">            
                    <div class="col-12" style="margin-top: 80px; left: 315px;">
                        <p style="font-size: 36px; text-align: left; color: #B0DEED; font-weight: bolder;">
                        > Maschinen- und Anlagenbau<br>
                        > Serien- und Komponentenhersteller<br>
                        > Automobilhersteller- und Zulieferer
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row no-gutters text-center" style="margin-top: 150px;">
                <div class="col-12">
                    <h1 style="font-size: 48px;">PRODUKTIONSPROZESSE</h1>
            
                    <div class="col-12" style="margin-top: 80px;">
                        <p style="font-size: 36px;">
                        flexibel gestalten, digitalisieren, analysieren.
                        </p>
                        <p style="font-size: 24px; text-align: center; font-weight: bolder;">
                        > Auswirkungen der Auftragslage auf die Losgröße  <br>
                        > Lieferantenmanagement >Lagerlogistik <br> > Qualitätssicherung > Versand <br>
                        >Service
                        </p>
                    </div>
                </div>

                <img src="../img/branch-img2.svg" alt="" style="width: 70%; margin-left: -400px; margin-top: -200px;">

                <p style="font-size: 36px; text-align: center; color: #C01466; font-weight: bolder; margin-top: 300px;">
                > Medizin und Pharma  <br>
                > Chemische Industrie
                </p>

                <div class="col-12">
                    <h1 style="font-size: 48px;">SUPPLY CHAIN.</h1>
            
                    <div class="col-12" style="margin-top: 80px;">
                        <p style="font-size: 36px;">
                        transparent und vollständig abgebildet
                        </p>
                        <p style="font-size: 24px; text-align: center; color: #C01466; font-weight: bolder;">
                        > Sicherstellung von Lieferketten  > Qualitätssicherung  <br>
                        der Rohstoff > Gewährleistung der  <br>
                        Qualitätsanforderung
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