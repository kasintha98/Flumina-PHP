<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/language.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/validation.js"></script>

    <style>
    .required {
        color: red;
    }
    </style>

    <title>Register</title>
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
                    <div class="contact-form" style="font-family: myFirstFont; src: url(Ubuntu-Th.ttf)">
                        <h1 class="font-weight-bold py-3">Register</h1>
                        <form name="form" class="login-form" action="includes/register.inc.php" method="post"
                            onsubmit="return validate()">
                            <!--Errors Display-->
                            <?php 
                                if(isset($_GET["error"])){
                                    if($_GET["error"]=="emptyinput"){
                                        echo '<div class="alert alert-danger" role="alert">Fill in all the fields!</div>';
                                    }
                                    else if($_GET["error"]=="invalidcompanyname"){
                                        echo '<div class="alert alert-danger" role="alert">Choose a proper company name!</div>';
                                    }
                                    else if($_GET["error"]=="invalidcompanyemail"){
                                        echo '<div class="alert alert-danger" role="alert">Choose a proper company email!</div>';
                                    }
                                    else if($_GET["error"]=="invalidfirstname"){
                                        echo '<div class="alert alert-danger" role="alert">Choose a proper first name!</div>';
                                    }
                                    else if($_GET["error"]=="invalidlastname"){
                                        echo '<div class="alert alert-danger" role="alert">Choose a proper last name!</div>';
                                    }
                                    else if($_GET["error"]=="passwordsdontmatch"){
                                        echo '<div class="alert alert-danger" role="alert">Passwords does not match!</div>';
                                    }
                                    else if($_GET["error"]=="stmtfailed"){
                                        echo '<div class="alert alert-danger" role="alert">Something went wrong, please try again!</div>';
                                    }
                                    else if($_GET["error"]=="emailalreadyexists"){
                                        echo '<div class="alert alert-danger" role="alert">Email already exists, please try another one!</div>';
                                    }
                                    else if($_GET["error"]=="telephonealreadyexists"){
                                        echo '<div class="alert alert-danger" role="alert">Telephone already exists, please try another one!</div>';
                                    }
                                    else if($_GET["error"]=="passwordnotstrong"){
                                        echo '<div class="alert alert-danger" role="alert">Password must be at least 8 characters!</div>';
                                    }
                                }
                            ?>
                            <p id="errorMsg"></p>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <p>First Name <span class='required'>*</span></p>
                                    <input type="text" name="firstName" placeholder="First Name"
                                        class="form-control my-3 p-3" />
                                    <small id="fnameErr"></small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <p>Last Name <span class='required'>*</span></p>
                                    <input type="text" name="lastName" placeholder="Last Name"
                                        class="form-control my-3 p-3" />
                                    <small id="lnameErr"></small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <p>Company Name <span class='required'>*</span></p>
                                    <input type="text" name="companyName" placeholder="Company Name"
                                        class="form-control my-3 p-3" />
                                    <small id="companyNameErr"></small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <p>Company Email Address <span class='required'>*</span></p>
                                    <input id="companyEmail" type="text" name="companyEmail"
                                        placeholder="Company Email Address" class="form-control my-3 p-3 success" />
                                    <small id="emailErr"></small>
                                </div>

                            </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <p>Position <span class='required'>*</span></p>
                            <select name="position" class="selectpicker form-control my-3 p-3">
                                <optgroup label="">
                                    <option value="Marketing Manager">Marketing Manager</option>
                                    <option value="Product Manager">Product Manager</option>
                                    <option value="Project Manager">Project Manager</option>
                                    <option value="Finance Manager">Finance Manager</option>
                                    <option value="Human Resources Manager">Human Resources Manager</option>
                                </optgroup>
                                <optgroup label="">
                                    <option value="Chief Executive Officer (CEO)">Chief Executive Officer (CEO)
                                    </option>
                                    <option value="Chief Operating Officer (COO)">Chief Operating Officer (COO)
                                    </option>
                                    <option value="Chief Financial Officer (CFO)">Chief Financial Officer (CFO)
                                    </option>
                                    <option value="Chief Marketing Officer (CMO)">Chief Marketing Officer (CMO)
                                    </option>
                                    <option value="Chief Technology Officer (CTO)">Chief Technology Officer
                                        (CTO)
                                    </option>
                                    <option value="President">President</option>
                                    <option value="Vice President">Vice President</option>
                                    <option value="Executive Assistant">Executive Assistant</option>
                                </optgroup>
                                <optgroup label="">
                                    <option value="Marketing specialist">Marketing specialist</option>
                                    <option value="Business analyst">Business analyst</option>
                                    <option value="Human resource personnel">Human resource personnel</option>
                                    <option value="Accountant">Accountant</option>
                                    <option value="Sales representative">Sales representative</option>
                                    <option value="Customer service representative">Customer service
                                        representative
                                    </option>
                                    <option value="Administrative assistant">Administrative assistant</option>
                                </optgroup>
                                <optgroup label="">
                                    <option value="Other">Other</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <p>Telephone (Optional)</p>
                            <input type="tel" name="telephone" placeholder="Telephone" class="form-control my-3 p-3">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <p>Password <span class='required'>*</span></p>
                            <input type="password" name="password" placeholder="Password" class="form-control my-3 p-3"
                                id="Password" />
                            <small id="pwdErr"></small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <p>Confirm Password <span class='required'>*</span></p>
                            <input type="password" name="passwordConfirm" placeholder="Confirm Password"
                                class="form-control my-3 p-3" id="ConfirmPassword" />
                            <small id="pwdRptErr"></small>
                        </div>
                    </div>
                    <div class="forgot-link col-lg-7">
                        <div class="form-check col-lg-7">
                            <input type="checkbox" name="agreeTerms" class="form-check-input" id="agreeTerms"
                                required />
                            <label for="agreeTerms">I Agree To The Terms & Conditions <span
                                    class='required'>*</span></label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <button type="submit" name="submit" class="btn1 mt-3 mb-5">NEXT</button>
                        </div>
                    </div>
                    <p>Already have an account? <a href="login.php">Login</a></p>
                    <p><a href="index.php">Go Back to Home</a></p>
                    </form>
                </div>
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
    <!-- <script>
    function Validate() {
        var password = document.getElementById("Password").value;
        var confirmPassword = document.getElementById("ConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
    </script> -->

</body>

</html>