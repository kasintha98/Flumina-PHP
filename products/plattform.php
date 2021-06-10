<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/searchbar.css" />
    <link rel="stylesheet" type="text/css" href="../css/media.css" />
    <link rel="stylesheet" type="text/css" href="../css/plattform.css" />
    <link rel="stylesheet" type="text/css" href="../css/language.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>Plattform</title>
</head>

<body>
    <!--Including top bar and navigation bar start-->
    <?php
                include './components/header.php'
    ?>
    <!--Including top bar and navigation bar end-->

    <!-- center bannner start-->
    <div class="container center-flyer">
        <div class="center-text">
            Plattform.
            <br></br>
            <p>Flumen bietet ein Framework für viele Lösungen.</p>
        </div>
    </div>

    <!-- Architektur start -->
    <div class="container main-text">
        <h2>Architektur</h2>
        <p>
            Das Zusammenspiel von ETL-Prozessoren, ERP-Systemen und Datenbanken, Expertensystemen und Webservices
            ermöglichen und bilden eine Basis für eine vielseitige Anwendung für verschiedenen Branchen und
            Anwendungsfälle.
        </p>
    </div>
    <!-- Architektur end -->

    <!-- Anbindung verschiedener Systeme start -->
    <div class="container main-text">
        <h2>Anbindung verschiedener Systeme</h2>
        <p>
            <span>Schnittstellen </span>zu anderen Datenbanken sind möglich und können schnell angebunden werden.
        </p>
    </div>
    <!-- Anbindung verschiedener Systeme end -->

    <!-- Smart factory start -->
    <div class="container main-text">
        <h2>Smart factory</h2>
        <p>

            Eine Vielzahl an <span>Analysen und Methoden </span>sowie ein <span>vorkonifguriertes </span>KPI-System für
            die vollständige Unternehmensanalyse. Wertstromanalysen sind auf Knopfdruck durchführbar.
            <br></br>
            <span>Simulation </span>von verschiedenen Szenarien, um strategische Entscheidungen zu treffen.
            <br></br>
            <span>Tracking </span>der wichtigsten Kennzahlen im executive Theater.
        </p>
    </div>
    <!-- Smart factory end -->

    <!-- Unternehmensanalysen start -->
    <div class="container main-text">
        <h2>Unternehmensanalysen</h2>
        <p>
            Vordefinierte Kennzahlen und Analysen für alle Unternehmensbereiche unterstützen bei der Auswertung der
            Daten.
        </p>
    </div>
    <!-- Unternehmensanalysen end -->

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