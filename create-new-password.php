<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/language.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Create New Password</title>
</head>

<body>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="img/design.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-7 px-5 pt-0">
                    <!-- <img src="SignetColored.png" alt="Logo"> -->
                    <h1 class="font-weight-bold py-3">Create New Password</h1>
                    <!--Display Error Messages-->
                    <?php
                        $selector = $_GET['selector'];
                        $validator = $_GET['validator'];

                        if(isset($_GET["newpwd"])){
                            if($_GET["newpwd"]=="empty"){
                                echo '<div class="alert alert-danger" role="alert">Fill in all the fields!</div>';
                            }else if($_GET["newpwd"]=="passworddontmatch"){
                                echo '<div class="alert alert-danger" role="alert">Passwords does not match!</div>';
                            }else if($_GET["newpwd"]=="passwordnotstrong"){
                                echo '<div class="alert alert-danger" role="alert">Password must be at least 8 characters!</div>';
                            }
                        }

                        if(empty($selector) || empty($validator)){
                            echo '<div class="alert alert-danger" role="alert">Could not validate your request!</div>';
                        }else{
                            if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
                    ?>
                    <form class="login-form" action="./includes/reset-password.inc.php" method="post">

                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">

                        <div class="form-row">
                            <div class="col-lg-7">
                                <p>Enter Your New Password</p>
                                <input type="password" name="pwd" placeholder="New Password"
                                    class="form-control my-3 p-3" id="floatingInput" required>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <p>Repeat Your New Password</p>
                                <input type="password" name="pwd-repeat" placeholder="Repeat New Password"
                                    class="form-control my-3 p-3" id="floatingInput" required>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type='submit' name='reset-password-submit' class="btn1 mt-3 mb-5">Reset
                                    Password</button>
                            </div>
                        </div>
                        <p>New User? <a href="register.php">Register</a></p>
                        <p><a href="index.php">Go Back to Home</a></p>
                    </form>
                    <?php
          }
      }
      ?>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="js/actions.js"></script>
</body>

</html>