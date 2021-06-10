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

    <style>
    body {
        overflow-y: hidden;
    }
    </style>

    <script>
    function validate() {
        var email = document.forms["form"]["companyEmail"].value;
        var pwd = document.forms["form"]["password"].value;

        //email validation check
        if (email == "") {
            document.getElementById("emailErr").innerHTML =
                '<div class="alert alert-danger" role="alert">Company email cannot be empty!</div>';
            return false;
        } else {
            var re =
                /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
            var x = re.test(email);

            if (!x) {
                document.getElementById("emailErr").innerHTML =
                    '<div class="alert alert-danger" role="alert">Choose a proper company email!</div>';
                return false;
            }
        }

        //password validation check
        if (pwd == "") {
            document.getElementById("pwdErr").innerHTML =
                '<div class="alert alert-danger" role="alert">Password cannot be empty!</div>';
            return false;
        }
    }
    </script>

    <title>Login</title>
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
                    <h1 class="font-weight-bold py-3">Login</h1>
                    <form name="form" class="login-form" action="./includes/login.inc.php" method="post"
                        onsubmit="return validate()">
                        <!--Display Error Messages-->
                        <?php 
                            if(isset($_GET["error"])){
                                if($_GET["error"]=="emptyinput"){
                                    echo '<div class="alert alert-danger" role="alert">Fill in all the fields!</div>';
                                }
                                else if($_GET["error"]=="wronglogin"){
                                    echo '<div class="alert alert-danger" role="alert">Incorrect login credentials!</div>';
                                }
                                else if($_GET["error"]=="none"){
                                    echo '<div class="alert alert-success" role="alert">You have signed up successfully, Please login!</div>';
                                }
                                else if($_GET["error"]=="emailnotverified"){
                                    echo '<div class="alert alert-danger" role="alert">Please verify your email before logging in! <br></br> To verify your email follow the steps in the verification email that you have recieved when registering!</div>';
                                }
                            }else if(isset($_GET["newpwd"])){
                                if($_GET["newpwd"]=="passwordupdated"){
                                    echo '<div class="alert alert-success" role="alert">You have changed your password successfully, Please login to continue!</div>';
                                }
                            }else if(isset($_GET["reset"])){
                                if($_GET["reset"]=="failed"){
                                    echo '<div class="alert alert-danger" role="alert">Error! can not reset your password, Please try again!</div>';
                                }
                            }
                        ?>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <p>Company Email Address</p>
                                <input type="text" name="companyEmail" placeholder="Company Email Address"
                                    class="form-control my-3 p-3" />
                                <small id="emailErr"></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <p>Password</p>
                                <input type="password" name="password" placeholder="Password"
                                    class="form-control my-3 p-3" />
                                <small id="pwdErr"></small>
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
                                <button type="submit" name="submit" class="btn1 mt-3 mb-5">LOG IN</button>
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