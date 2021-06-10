<!-------------top bar---------------->
<div id="top-bar" class="row top-bar" style="margin-top: 20px;">
    <div class="col top-bar-link">
        <span>
            <form class="searchbar" action="../search.php" method="get" style="top:3.5px; outline: none;">
                <input type="text" placeholder="Search" name="k" value="" style="outline: none;" />
                <a href="#" type="submit"><i class="fas fa-search" style="padding-right: 15px;"></i>Search</a>
                <!-- <div class="icon">
                                    <a href="#"><i class="fas fa-search"></i> Search</a>
                                </div> -->
            </form>
        </span>
        <!-- <span>
                            <a href="#"><i class="fas fa-search"></i> Search</a>
                        </span> -->
        <span>
            <a href="../contactform/contact.php"><i class="fas fa-envelope" style="padding-right: 15px;"></i>
                Contact</a>
        </span>
        <span style="padding-right: 0px;">
            <!--  <i class="fas fa-globe-africa"></i> -->
            <div class="row justify-content-end">
                <!--                     <div class="col">
 -->
            </div>
            <div class="col" style="display: -webkit-box; padding-right: 0px;">
                <i class="fas fa-globe-africa"></i>
                <div style="top:0px !important;" id="google_translate_element"></div>
            </div>


        </span>
        <?php
                          if(isset($_SESSION["userFirstName"])){
                            echo '<span>
                                  <a href="../includes/logout.inc.php" class="top-bar-login"><i class="fas fa-user-circle" style="padding-right: 15px;"></i> Logout</a>
                                  </span>';
                            echo "<span>Hello " . $_SESSION["userFirstName"] . "!<span>";
                          }
                          else{
                            echo '<span>
                                  <a href="../login.php" class="top-bar-login"><i class="fas fa-user-circle" style="padding-right: 15px;"></i> Login</a>
                                  </span>';
                          }
                          ?>
    </div>

</div>
</div>
</section>
</header>
<!-------------top bar---------------->

<!-------------nav bar---------------->
<header id="header" class="active">
    <section class="top-nav-bar">
        <div class="wrapper">
            <nav class="" style="top: 55px;">
                <div class="logo">
                    <a href="../index.php"><img src="../img/SignetColored.svg" /></a>
                </div>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x" style="color: #000"></i>
                </div>
                <div class="menu">
                    <ul class="showing">
                        <li data-li="products" id="btn" class="open-overlay prod-btn">
                            <a>Products</a>
                        </li>
                        <li data-li="solutions" id="btn" class="open-overlay sol-btn">
                            <a>Solutions</a>
                        </li>
                        <li data-li="company" id="btn" class="open-overlay com-btn">
                            <a>Company</a>
                        </li>
                        <li data-li="careers" id="btn" class="open-overlay car-btn">
                            <a>Careers</a>
                        </li>
                        <li data-li="partners" class="five par-btn" id="btn" class="open-overlay">
                            <a>Partners</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
</header>
<!-------------nav bar---------------->

<header>
    <section id="allCategorySection" class="hidden">



        <!-------------product category------------>
        <div id="div1" class="item products overlay col-md-12" style="display: none; top: 50px" aria-hidden="true">
            <div class="is-closeBtn close-overlay clsBtnPro">
                <a>Close</a>
                <i class="fas fa-window-close"></i>
            </div>
            <div class="productCategoryHeader">
                <div class="productCategoryHeaderOne">
                    <h2>Products</h2>
                </div>
                <div class="productCategoryHeaderTwo">
                    <h4 style="font-weight: 100"> <a style='color: #000;' href="../products/products.php">ENTIRE OVERVIEW
                            PRODUCTION</a> </h4>
                </div>
                <div class="productCategoryHeaderImg">
                    <img src="../img/parquet.png" />
                </div>
            </div>
            <hr class="h" />
            <div class="productCategory" style="padding-bottom: 300px; padding-top: 100px;">
                <div class="childZero" style="
                align-items: left;
                padding-right: 50px;
                padding-top: 0px;
                padding-bottom: 130px;
              ">
                    <p><a style='color: #000;' href="../products/anwendungsfälle.php">Anwendungsfälle</a></p>
                    <br />
                    <p><a style='color: #000;' href="../products/branch.php">Branchen</a></p>
                </div>
                <div class="childOne">
                    <h3><a style='color: #000;' href="../products/plattform.php">Platform ></a></h3>
                    <p>Connect, transform & visualize</p>

                    <h3><a style='color: #000;' href="../products/digitalAssist.php">Digital assistants ></a></h3>
                    <p>Empower humans with algorithms & ai</p>

                    <h3><a style='color: #000;' href="../products/etl.php">ETL processors ></a></h3>
                    <p>Connect, structure & calculate</p>
                </div>
                <div class="childTwo">
                    <h3><a style='color: #000;' href="../products/online.php">Online services ></a></h3>
                    <p>Enterprise analysis at the push of a button</p>

                    <h3><a style='color: #000;' href="../products/digital.php">digital twins ></a></h3>
                    <p>Visualization of complex systems</p>

                    <h3><a style='color: #000;' href="../products/bibliothek.php">Libraries ></a></h3>
                    <p>Methods, Knowledge & Simulation</p>
                </div>
            </div>
        </div>
        <!-------------product category------------>

        <!-------------solutions category------------>
        <div id="div2" class="item solutions overlay" style="display: none; top: 50px" aria-hidden="true">
            <div class="is-closeBtn close-overlay clsBtnSol">
                <a>Close</a>
                <i class="fas fa-window-close"></i>
            </div>
            <div class="productCategoryHeader">
                <div class="productCategoryHeaderOne">
                    <h2>Solutions</h2>
                </div>
                <div class="productCategoryHeaderTwo">
                    <h4 style="font-weight: 100"><a style='color: #000;' href="../solutions/solutions.php">ENTIRE OVERVIEW SOLUTIONS</a></h4>
                </div>
                <div class="productCategoryHeaderImg">
                    <img src="../img/parquet.png" />
                </div>
            </div>
            <hr class="h" />
            <div class="productCategory" style="padding-bottom: 300px; padding-top: 100px;">
                <!-- <div class="childZero" style="align-items: left; padding-right: 50px; padding-top: 0px; padding-bottom: 130px;">
				<p>Anwendungsfälle</p>
				<br>
				<p>Branchen</p>
			</div> -->

            <div class="childZero" style="
                align-items: left;
                padding-right: 50px;
                padding-top: 0px;
                padding-bottom: 0px;
              ">
                    <p><a style='color: #000;' href="./products/anwendungsfälle.php">Anwendungsfälle</a></p>
                    <br />
                    <p><a style='color: #000;' href="../solutions/branch.php">Branchen</a></p>
                    <br>
                    <p><a style='color: #000;' href="../solutions/installation.php">Installation</a></p>
                    <br />
                    <p><a style='color: #000;' href="../solutions/user.php">User</a></p>
 
            </div>

                <div class="childOne">
                    <h3><a style='color: #000;' href="../solutions/werts.php">Value Stream Analysis ></a></h3>
                    <p>At the push of a button</p>

                    <h3><a style='color: #000;' href="../solutions/flumen.php">Flumen Lens ></a></h3>
                    <p>Einfach und schnell ans Ziel.</p>

                    <h3><a style='color: #000;' href="../solutions/simulation.php">Simulation ></a></h3>
                    <p>What would you do</p>
                </div>
                <div class="childTwo">
                    <h3><a style='color: #000;' href="../solutions/newsfeed.php">News Feed ></a></h3>
                    <p>Update & Morningbriefing</p>

                    <h3><a style='color: #000;' href="../solutions/executive.php">Executive Theater ></a></h3>
                    <p>See things as they are</p>

                    <h3><a style='color: #000;' href="../solutions/kpi.php">KPI system ></a></h3>
                    <p>All your key performance indicators</p>
                </div>
            </div>
        </div>
        <!-------------solutions category------------>




        <!-------------company category------------>
        <div id="div3" class="item company overlay" style="display: none; top: 50px" aria-hidden="true">
            <div class="is-closeBtn close-overlay clsBtnCom">
                <a>Close</a>
                <i class="fas fa-window-close"></i>
            </div>
            <div class="productCategoryHeader">
                <div class="productCategoryHeaderOne">
                    <h2>Company</h2>
                </div>
                <div class="productCategoryHeaderTwo">
                    <h4 style="font-weight: 100">ENTIRE OVERVIEW COMPANY</h4>
                </div>
                <div class="productCategoryHeaderImg">
                    <img src="../img/parquet.png" />
                </div>
            </div>
            <hr class="h" />
            <div class="productCategory" style="padding-bottom: 300px; padding-top: 100px;">
                <!-- <div class="childZero" style="align-items: left; padding-right: 50px; padding-top: 0px; padding-bottom: 130px;">
				<p>Anwendungsfälle</p>
				<br>
				<p>Branchen</p>
			</div> -->
                <div class="childOne">
                    <h3>Company profile ></h3>
                    <p>About us and what we do.</p>

                    <h3>Now ></h3>
                    <p>Who are we today</p>

                    <h3>Milestones ></h3>
                    <p>Experience and sucess</p>
                </div>
                <div class="childTwo">
                    <h3>Coming ></h3>
                    <p>Where we are coming from</p>

                    <h3>Where to ></h3>
                    <p>Who will we be</p>

                    <h3>Values ></h3>
                    <p>Be yourself</p>
                </div>
            </div>
        </div>
        <!-------------company category------------>

        <!-------------careers category------------>
        <div id="div4" class="item careers overlay" style="display: none; top: 50px" aria-hidden="true">
            <div class="is-closeBtn close-overlay clsBtnCar">
                <a>Close</a>
                <i class="fas fa-window-close"></i>
            </div>
            <div class="productCategoryHeader">
                <div class="productCategoryHeaderOne">
                    <h2>Careers</h2>
                </div>
                <div class="productCategoryHeaderTwo">
                    <h4 style="font-weight: 100">ENTIRE OVERVIEW CAREERS</h4>
                </div>
                <div class="productCategoryHeaderImg">
                    <img src="../img/parquet.png" />
                </div>
            </div>
            <hr class="h" />
            <div class="productCategory" style="padding-bottom: 300px; padding-top: 100px;">
                <!-- <div class="childZero" style="align-items: left; padding-right: 50px; padding-top: 0px; padding-bottom: 130px;">
				<p>Anwendungsfälle</p>
				<br>
				<p>Branchen</p>
			</div> -->
                <div class="childOne">
                    <h3>Item ></h3>
                    <p>Text</p>

                    <h3>Item ></h3>
                    <p>Text</p>

                    <h3>Item ></h3>
                    <p>Text</p>
                </div>
                <div class="childTwo">
                    <h3>Item ></h3>
                    <p>Text</p>

                    <h3>Item ></h3>
                    <p>Text</p>

                    <h3>Item ></h3>
                    <p>Text</p>
                </div>
            </div>
        </div>
        <!-------------careers category------------>

        <!-------------Partners category------------>
        <div id="div5" class="item partners overlay" style="display: none; top: 50px" aria-hidden="true">
            <div class="is-closeBtn close-overlay clsBtnPar">
                <a>Close</a>
                <i class="fas fa-window-close"></i>
            </div>
            <div style="background-color: transparent" class="productCategoryHeader">
                <div class="productCategoryHeaderOne">
                    <h2>Partners</h2>
                </div>
                <div class="productCategoryHeaderTwo">
                    <h4 style="font-weight: 100">ENTIRE OVERVIEW PARTNERS</h4>
                </div>
                <div class="productCategoryHeaderImg">
                    <img src="../img/parquet.png" />
                </div>
            </div>
            <hr class="h" />
            <div class="productCategory" style="padding-bottom: 300px; padding-top: 100px;">
                <!-- <div class="childZero" style="align-items: left; padding-right: 50px; padding-top: 0px; padding-bottom: 130px;">
				<p>Anwendungsfälle</p>
				<br>
				<p>Branchen</p>
			</div> -->
                <div class="childOne">
                    <h3>Item ></h3>
                    <p>Text</p>

                    <h3>Item ></h3>
                    <p>Text</p>

                    <h3>Item ></h3>
                    <p>Text</p>
                </div>
                <div class="childTwo">
                    <h3>Item ></h3>
                    <p>Text</p>

                    <h3>Item ></h3>
                    <p>Text</p>

                    <h3>Item ></h3>
                    <p>Text</p>
                </div>
            </div>
        </div>
        <!-------------Partners category------------>
    </section>
</header>