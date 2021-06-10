<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Flumen Lens.</title>

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
    
    <?php
            include './components/header.php'
    ?>

    <!-- <div class="mainBackgroundHolder"
        style="height: 900vh; width: 100vw; overflow: hidden; position: absolute; top: 0;"></div> -->

    <!-- <div id="mainBackground" class="mainBackground"></div> -->
    <!-- Animation -->
    <!-- <canvas id="particleCanvas" class="particleCanvas" width="1848" height="949"></canvas> -->

   
    <main id="main" class="products-main" style="font-family: myFirstFont; src: url(../fonts/Ubuntu-R.ttf);">
        <div class="container">
            <div class="row mx-auto">          
                <div class="col-lg-12 text-center" style="top: 200px;">
                    <h1 style="font-size: 64px; font-weight: bolder;"><strong>Flumen Lens.</strong></h1>
                    <p style="font-size: 36px; margin-top: 30px;">Einfach und schnell ans Ziel.</p>
                    <p style="font-size: 24px;">Flumen enthält komplexe Informationen.
                    <br>Über unsere <span style="color: #C01466;">Suchmaschine</span> finden Sie
                    <br>Analysen, KPI´s, Dokumentationen, Favoriten.</p>
                </div>

                <div class="col-lg-12 text-center" style="top: 300px; margin-bottom: 350px;">
                    <h1 style="font-size: 48px;">USABILITY.</h1>
                    <p style="font-size: 36px; margin-top: 30px;">
                    Unternehmen sind komplex, die Analysen und Kennzahlen 
                    <br>ebenso. Uns ist es wichtig, dass unsere Kunden schnell an 
                    <br>die relevanten Informationen kommen. 
                    </p>
                    <p style="font-size: 24px; color: #C01466;">> effektiv > einfach
                    <br>> zufriedenstellend</p>
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