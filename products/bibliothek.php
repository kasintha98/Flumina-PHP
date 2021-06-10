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
    <link rel="stylesheet" type="text/css" href="../css/bibliothek.css" />
    <link rel="stylesheet" type="text/css" href="../css/language.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>Bibliothek</title>
</head>

<body>
    <!--Including top bar and navigation bar start-->
    <?php
                include './components/header.php'
    ?>
    <!--Including top bar and navigation bar end-->

    <!-- center bannner start-->
    <div class="center-flyer">
        <img src="../img/bibliothek-bg.svg" alt="img" style="width: 600px;">
        <div class="center-text" style='font-family: myFirstFont;'>
            <div style='font-weight: 900; padding-bottom: 15px;'>Bibliotheken.</div>
            <p style='font-family: myFirstFont;'>
                Fachwissen bereits integriert.
            </p>
        </div>
    </div>

    <!-- Methodik start -->
    <div class="row align-items-center main-text">
        <div class="col-6" style='left: 10vw;'>
            <img src="../img/bib-Group.svg" />
        </div>
        <div class="col-6">
            <h2 style='font-family: myFirstFont; font-weight: 900;'>Methodik</h2>
            <p style='font-family: myFirstFont;'>
                Vordefinierte Kennzahlen und Analysen für alle Unternehmensbereiche unterstützen bei der Auswertung der
                Daten.
            </p>
        </div>
    </div>
    <!-- Methodik end -->

    <!-- Algorithmen start -->
    <div class="row align-items-center main-text">
        <div class="col-6" style='left: 10vw;'>
            <h2 style='font-family: myFirstFont; font-weight: 900;'>Algorithmen</h2>
            <p style='font-family: myFirstFont;'>
                In allen Expertensystemen arbeiten Algorithmen für den User:
                Zur Berechnung des Lagerbestandes oder für die Suche nach jurisitischen Vergleichsfällen...
            </p>
        </div>
        <div class="col-6" style='left: 10vw;'>
            <img src="../img/bib-Group-1.svg" />
        </div>
    </div>
    <!-- Algorithmen end -->

    <!-- Simulation start -->
    <div class="row align-items-center main-text">
        <div class="col-6" style='left: 10vw;'>
            <img src="../img/bib-Group.svg" />
        </div>
        <div class="col-6">
            <h2 style='font-family: myFirstFont; font-weight: 900;'>Simulation</h2>
            <p style='font-family: myFirstFont;'>
                Auswirkungen verschiedener Szenarien simulieren und strategische Entscheidungen fundierter treffen.
            </p>
        </div>
    </div>
    <!-- Simulation end -->

    <!-- Fachwissen start -->
    <div class="row align-items-center main-text">
        <div class="col-6" style='left: 10vw;'>
            <h2 style='font-family: myFirstFont; font-weight: 900;'>Fachwissen</h2>
            <p style='font-family: myFirstFont;'>
                Mathematiker oder Juristen, Berater und Kooperationskunden bringen Ihr Fachwissen in unsere Bibliothek
                ein.
            </p>
        </div>
        <div class="col-6" style='left: 10vw;'>
            <img src="../img/bib-Group-1.svg" />
        </div>
    </div>
    <!-- Fachwissen end -->

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