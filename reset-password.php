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

    <title>Reset Your Password</title>
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
                    <h1 class="font-weight-bold py-3">Reset Your Password</h1>
                    <form class="login-form" action="./includes/reset-request.inc.php" method="post">
                        <!--Display Error Messages-->
                        <?php
                            if(isset($_GET["reset"])){
                                if($_GET["reset"] == "success"){
                                    echo '<div class="alert alert-success" role="alert">Password reset details sent. Please check your email!</div>';
                                }
                                if($_GET["reset"] == "failed"){
                                    echo '<div class="alert alert-danger" role="alert">Error! Can not send password reset details. Please try again!</div>';
                                }
                                if($_GET["reset"] == "stmtfailed"){
                                    echo '<div class="alert alert-danger" role="alert">There was an error, Please try again!</div>';
                                }
                                if($_GET["reset"] == "notregistered"){
                                    echo '<div class="alert alert-danger" role="alert">You are not a registered user! Please Register!</div>';
                                }       
                            }
                        ?>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <p>Enter Your Company Email Address</p>
                                <input type="email" name="email" placeholder="Company Email Address"
                                    class="form-control my-3 p-3" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type='submit' name='reset-request-submit' class="btn1 mt-3 mb-5">Receive Reset
                                    Email</button>
                            </div>
                        </div>
                        <p>New User? <a href="register.php">Register</a></p>
                        <p><a href="index.php">Go Back to Home</a></p>
                    </form>
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