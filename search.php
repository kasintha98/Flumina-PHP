<?php

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

    <br>
    <br>
    <br>
    <h2></h2>
    <hr>
    <div class="container justify-content-center" style="font-family: myFirstFont; src: url(../fonts/Ubuntu-Th.ttf);">
        <div class="d-flex justify-content-center input-group px-5">
            <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
                <input class="form-control mr-sm-2" type="text" name="k" style="width: 500px;"
                    value="<?php echo $_GET['k'];?>">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                <!-- <input type="submit" value="Search"> -->
            </form>
        </div>
        <?php
    $k = isset($_GET['k']) ? $_GET['k'] : '';

    $search_string = "SELECT * FROM search WHERE  ";
    $display_words = "";

    $keywords = explode(' ', $k);			
    foreach ($keywords as $word){
        $search_string .= "keywords LIKE '%".$word."%' OR ";
        $display_words .= $word.' ';
    }

    $search_string = substr($search_string, 0, strlen($search_string)-4);
    $display_words = substr($display_words, 0, strlen($display_words)-1);


    // connect to the database
    //$conn = mysqli_connect("localhost:3307", "root", "", "search");
    require_once './includes/dbh.inc.php';

    $query = mysqli_query($conn, $search_string);
    $result_count = mysqli_num_rows($query);

    echo '<div class="right"><b><u>'.number_format($result_count).'</u></b> results found</div>';
    echo 'Your search for <i>"'.$display_words.'"</i><hr />';

    // check if the search query returned any results
    if ($result_count > 0){

        // display the header for the display table
        echo '<table class="search">';
        
        // loop though each of the results from the database and display them to the user
        while ($row = mysqli_fetch_assoc($query)){
            echo '<tr>
                <td><h3><a href="'.$row['link'].'">'.$row['title'].'</a></h3></td>
            </tr>
            <tr>
                <td>'.$row['description'].'</td>
            </tr>
            <tr>
                <td><i>'.$row['link'].'</i></td>
            </tr>';
        }
        
        // end the display of the table
        echo '</table>';
    }
    else
        echo 'There were no results for your search. Try searching for something else.';

    ?>
    </div>

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