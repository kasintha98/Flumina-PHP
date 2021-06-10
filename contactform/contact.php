<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <!-- <link rel="stylesheet" href="contact.css" /> -->
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/language.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-lg-5">
                    <img src="../img/design.png" alt="" class="img-fluid">
                </div>

                <div class="col-lg-7 px-5 pt-0">
                    <div class="contact-form" style="font-family: myFirstFont; src: url(Ubuntu-Th.ttf)">
                        <h2>Contact Us</h2>
                        <form class='contact' method="post" action="index.php">
                            <?php
                                if(isset($_GET["msg"])){
                                    if($_GET["msg"] == "success"){
                                        echo '<div class="alert alert-success" role="alert">Message sent successfully!</div>';
                                    }else if($_GET["msg"] == "invalid"){
                                        echo '<div class="alert alert-danger" role="alert">Invalid captcha, please try again!</div>';
                                    }    
                                }
                            ?>

                            <div class="form-row">
                                <div class="col-lg-7">
                                    <p>Your Name</p>
                                    <?php
                                        if(isset($_SESSION["userFullName"])){
                                            echo '<input type="text" name="name" placeholder="Your Name" class="form-control my-3 p-3"
                                            required value='.$_SESSION["userFullName"].'>';
                                            
                                        }else{
                                            echo '<input type="text" name="name" placeholder="Your Name" class="form-control my-3 p-3"
                                            required />';
                                        }
                                        ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-7">
                                    <p>Company Email</p>
                                    <?php
                                        if(isset($_SESSION["userCompanyEmail"])){
                                            echo '<input type="email" name="email" placeholder="Company Email"
                                            class="form-control my-3 p-3" required value='.$_SESSION["userCompanyEmail"].'>';
                                            
                                        }else{
                                            echo '<input type="email" name="email" placeholder="Company Email"
                                            class="form-control my-3 p-3" required/>';
                                        }
                                        ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-7">
                                    <p>ERP-System</p>
                                    <input type="text" name="ERP-System" placeholder="ERP-System"
                                        class="form-control my-3 p-3" required />
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-7">
                                    <p>Your Message</p>
                                    <textarea name="message" placeholder="Your Message" class="form-control my-3 p-3"
                                        required></textarea>
                                </div>
                            </div>

                            <div class="forgot-link d-flex col-lg-7">
                                <input type="checkbox" class="form-check-input" id="remember" required />
                                <div class="form-check col-lg-7" style="display: inline-flex">

                                    <label for="remember">Hiermit akzeptiereich die
                                        <a style='text-decoration: none;'
                                            href="../privacy.php">Datenschutzrichtlinien</a> dieser Website.
                                    </label>
                                </div>
                            </div>

                            <div style='margin-top: 20px;' class="g-recaptcha"
                                data-sitekey="6LeRr7oaAAAAAIsRwia1wPGNjrjiPMlj9EGiqPXD"></div>

                            <div class="form-row" style='margin-top: 20px;'>
                                <div class="col-lg-7">
                                    <button type="submit" name="submit" class="submit-btn btn1">Send
                                        Message</button>
                                </div>
                            </div>

                            <p style='margin-top: 20px;'><a href="../index.php" style='text-decoration: none;'>Go Back
                                    to
                                    Home</a></p>

                        </form>


                    </div>
                </div>

                <!-- <div
          class="contact-form"
          style="font-family: myFirstFont; src: url(Ubuntu-Th.ttf)"
        >
          <h2>Contact Us</h2>
          <form method="post" action="">
            <input type="text" name="name" placeholder="Your Name" required />
            <input type="email" name="email" placeholder="Company Email" required />
            <input
              type="text"
              name="ERP-System"
              placeholder="ERP-System"
              required
            />
            <textarea name="message" placeholder="Your Message" required></textarea>

            <div class="forgot-link d-flex justify-content-between">
              <div class="form-check" style="display: inline-flex">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="remember"
                  style="width: 0%; margin-left: 0"
                  required
                />
                <label for="remember" style="text-align: left; margin-left: 10px"
                  >Hiermit akzeptiere ich die
                  <a href="../privacy.php">Datenschutzrichtlinien</a> dieser
                  Website.
                </label>
              </div>
            </div>

            <div
              class="g-recaptcha"
              data-sitekey="6LeRr7oaAAAAAIsRwia1wPGNjrjiPMlj9EGiqPXD"
            ></div>

            <input
              type="submit"
              name="submit"
              value="Send Message"
              class="submit-btn"
            />
            <p><a href="../index.php">Go Back to Home</a></p>
          </form>
          <div class="status">
           
          </div>
        </div> -->

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
    <script src="../js/actions.js"></script>

</body>

</html>