<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="../css/searchbar.css" />
    <link rel="stylesheet" type="text/css" href="../css/media.css" />
    <link rel="stylesheet" type="text/css" href="../css/etl.css" />
    <link rel="stylesheet" type="text/css" href="../css/language.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>ETL</title>
</head>

<body>
    <!--Including top bar and navigation bar start-->
    <?php
                include './components/header.php'
    ?>
    <!--Including top bar and navigation bar end-->

    <!-- center bannner start-->
    <div class="center-flyer container">
        <!-- <img src="../img/etl-bg" alt="img" style="width:100%;">
        <div class="center-text">
            ETL.
            <p>Automatisiert. Schnell. Fehlerfrei</p>
        </div> -->

        <div class="row align-items-center">
            <div class="col-6" style='font-family: myFirstFont;'>
                <div style='font-weight: 900; padding-bottom: 15px;'>ETL.</div>

                <p style='font-family: myFirstFont; font-weight: 400;'>Automatisiert. Schnell. Fehlerfrei</p>
            </div>
            <div class="col-6">
                <img src="../img/dotsDigital-c.svg" alt="img">
            </div>
        </div>
    </div>
    <!-- center bannner end-->

    <div class='container main-text' style='font-family: myFirstFont;'>
        <h2 style='font-family: myFirstFont; font-weight: 900;'>EXTRACT</h2>
        <p>Daten werden aus dem ERP-System und anderen Datenquellen (MES, BDE, Q-System, CRM, Zeiterfassung .. )
            extrahiert und relevante Informationen entlang des Wertstroms angeordnet.
        </p>

        <h2 style='font-family: myFirstFont; font-weight: 900;'>TRANSFORM</h2>
        <p>
            Ein Algorithmus berechnet und konvertiert die Daten in das Format, welches die Anforderungen
            für die nachfolgenden Analysen und Kennzahlen erfüllt.
        </p>

        <h2 style='font-family: myFirstFont; font-weight: 900;'>LOAD</h2>
        <p>
            Der bereinigte und vorberechnete Datensatz wird in eine Datenbank geladen und steht dem
            User für Analyse- und Berechnungsanfragen bereit.
        </p>
    </div>

    <!-- second bannner start-->
    <div class="second-flyer container">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="../img/dotsDigitalGray.svg" alt="img">
            </div>
            <div class="col-6" style='font-family: myFirstFont;'>
                <p><span style='font-family: myFirstFont; font-weight: 900;'>Schnittstellen </span>vereinfachen die
                    Anbindung von weiteren Datenquellen und das Mapping mit
                    den
                    relevanten Tabellenfeldern.
                </p>
            </div>
        </div>
    </div>
    <!-- second bannner end-->

    <!-- second main text start-->
    <div class='row container second-main-text'>
        <div class='col-5'></div>
        <div class='col-7' style='font-family: myFirstFont;'>
            <p> <span style='font-family: myFirstFont; font-weight: 900;'> Komplexe Datenverarbeitungsbedingungen
                </span>garantieren die Verabreitung von große Datenmengen
                in Stapeln oder
                Inkrementen, um die Daten für die umfassende Unternehmensanalyse vorzubereiten.</p>
        </div>
    </div>
    <!-- second main text end-->

    <!-- third main text start-->
    <div class='container third-main-text' style='font-family: myFirstFont;'>
        <p>Dabei extrahiert, transformiert und lädt der ETL-Prozessor die Daten nahezu in<span
                style='font-family: myFirstFont; font-weight: 900;'> Echtzeit </span>auf die
            Zieldatenbank.</p>
    </div>
    <!-- third main text end-->

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