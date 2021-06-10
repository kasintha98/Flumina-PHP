<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Flumina</title>

    <link rel="stylesheet" type="text/css" href="css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/searchbar.css">
    <link rel="stylesheet" type="text/css" href="css/media.css" />
    <link rel="stylesheet" type="text/css" href="css/language.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
</head>

<body>
    <!--Including top bar and navigation bar start-->
    <?php
                include './components/header.php'
    ?>
    <!--Including top bar and navigation bar end-->

    <div class="mainBackgroundHolder"
        style="height: 900vh; width: 100vw; overflow: hidden; position: absolute; top: 0;"></div>

    <div id="mainBackground" class="mainBackground"></div>
    <!-- Animation -->
    <canvas id="particleCanvas" class="particleCanvas" width="1848" height="949"></canvas>

    <!------------banner section---------->
    <section class="banner">
        <div class="inner">
            <h1 style="padding-top: 100px">Wertströme</h1>
            <h1>im <span style="color: #c01466">Licht</span> mit digitalen</h1>
            <h1>Assistenz systemen.</h1>
            <p>Ergebnisse am Puls der</p>
            <p>Zeit für Kosten,</p>
            <p>Durchlaufzeiten und</p>
            <p>Bestände.</p>
        </div>
    </section>
    <!------------banner section---------->

    <!------------references-------------->
    <section id="customerReferences" class="references">
        <div id="referencesHolder">
            <a id="refTrumpf" class="referenceImageHolder" href="#">
                <img class="referenceImage" src="img/trumpf-logo.svg" />
            </a>
            <a id="refSchunk" class="referenceImageHolder" href="#">
                <img class="referenceImage" src="img/schunk-logo.png" />
            </a>
            <a id="refIngun" class="referenceImageHolder" href="#">
                <img class="referenceImage" src="img/ingun-logo.png" />
            </a>
        </div>
    </section>
    <!------------references-------------->

    <!------------award references-------------->
    <section id="awardReferences" class="references">
        <div id="sealsHolder">
            <div id="refSmig" class="sealImageHolder">
                <img class="sealImage" src="img/SMiG.png" />
            </div>
            <div id="refExz" class="sealImageHolder">
                <img class="sealImage" src="img/exzellenzpreis.png" />
            </div>
        </div>
    </section>
    <!------------award references-------------->

    <!------------footer------------------------->
    <footer id="footer" class="footer" style="position: fixed;">
        <div class="innerContent">
            <div class="content">
                <div class="footer-column">
                    <a class="footer-link" href="impressum.php">Impressum</a>
                </div>
                <div class="footer-column">
                    <a class="footer-link" href="privacy.php">Datenschutz</a>
                </div>
            </div>
        </div>
    </footer>
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
    <script src="js/main.js"></script>
    <script src="js/nav.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/actions.js"></script>

</body>

</html>