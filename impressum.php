<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Impressum</title>

    <link rel="stylesheet" type="text/css" href="css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/searchbar.css">
    <link rel="stylesheet" type="text/css" href="css/media.css" />
    <link rel="stylesheet" type="text/css" href="css/language.css" />
    <link rel="stylesheet" type="text/css" href="css/privacy.css" />
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

    <main id="main" class="privacy-page" style="margin-top: 150px;">
        <div class="container">
            <div class="impressum-page-header">
                <h2 class="impressum-page-title">
                    <strong>Impressum</strong>
                </h2>
            </div>
            <div class="impressum-page-content">
                <h3><strong>Angaben gemäß § 5 TMG:</strong></h3>
                <p>
                    fLUMINA GmbH<br />
                    Blarerstraße 56<br />
                    78462 Konstanz
                </p>
                <p>
                    <strong>Telefon:</strong> +49-7531-122-9806<br />
                    <strong>E-Mail:</strong>
                    <a href="mailto:info@flumina.de">info@flumina.de</a>
                </p>
                <h4>Geschäftsführer:</h4>
                <p>Mauritius Geiger</p>
                <h4>Sitz der Gesellschaft:</h4>
                <p>Konstanz</p>
                <h4>Rechtliches:</h4>
                <p>Amtsgericht Konstanz | HRB718949</p>
                <p>USt-ID: DE 304548945</p>
                <h4>
                    <strong>Verantwortlich für den Inhalt gem. § 55 Abs. 2 RStV:</strong>
                </h4>
                <p>Mauritius Geiger</p>
            </div>
        </div>
    </main>

    <!------------footer------------------------->
    <?php
                include './components/footer.php'
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