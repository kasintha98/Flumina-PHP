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

    <title>Verify Email</title>
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
                    <h1 class="font-weight-bold py-3">Verify Your Email By Logging In</h1>
                    <!--Display Error Messages-->
                    <?php
                        $selector = $_GET['selector'];
                        $validator = $_GET['validator'];

                        if(isset($_GET["error"])){
                            if($_GET["error"]=="empty"){
                            echo '<div class="alert alert-danger" role="alert">Fill in all the fields!</div>';
                            }else if($_GET["error"]=="wronglogin"){
                            echo '<div class="alert alert-danger" role="alert">Incorrect login credentials!</div>';
                            }
                            else if($_GET["error"]=="err"){
                            echo '<div class="alert alert-danger" role="alert">There was an error, Please try again!</div>';
                            }
                            else if($_GET["error"]=="resubmit"){
                            echo '<div class="alert alert-danger" role="alert">There was an error, Please resubmit your verify request!</div>';
                            }
                        }


                    if(empty($selector) || empty($validator)){
                        echo '<div class="alert alert-danger" role="alert">Could not validate your request!</div>';
                    }else{
                        if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
                    ?>

                    <form class="login-form" action="./includes/emailVerify.inc.php" method="post">
                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">

                        <div class="form-row">
                            <div class="col-lg-7">
                                <p>Company Email Address</p>
                                <input type="email" name="companyEmail" placeholder="Company Email Address"
                                    class="form-control my-3 p-3" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <p>Password</p>
                                <input type="password" name="password" placeholder="Password"
                                    class="form-control my-3 p-3" required />
                            </div>
                        </div>
                        <div class="forgot-link d-flex align-items-center justify-content-between col-lg-7">
                            <div class="form-check col-lg-7">
                                <input type="checkbox" name="remember" class="form-check-input" id="remember" />
                                <label for="remember">Remember Me</label>
                            </div>
                            <a href="reset-password.php">Forget Password?</a>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="verify-submit" class="btn1 mt-3 mb-5">LOG IN</button>
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