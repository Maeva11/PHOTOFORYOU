<?php require_once("include/accessAdmin.inc.php");
 require_once("include/header.inc.php");
 require_once("include/navbar.php");

 ?> 
 <form  method="post" action="ajout_cred.php">
<section class="wrapper">
    <div class="container-fostrap">
        <div>
            <img src="images/sous.jpg" class="fostrap-logo"/>
            <h1 class="heading">
                ACHETER DES CREDITS
            </h1>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="#">
                            <img src="images/10.png" style="width:100%; height:100%;"/>
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#"> CREDITS DE 10 
                                  </a>
                                </h4>
                                <p class="">N'hésitez pas et acheter 10 crédits pour vos achats de photos !</p>
                            </div>
                            <div class="card-read-more">
                            <input type="submit" name="credit10" class="btn btn-link btn-block" value="Acheter"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="#">
                            <img src="images/100.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">CREDITS DE 100</a>
                                </h4>
                                <p class="">N'hésitez pas et acheter 100 crédits pour vos achats de photos ! </p>
                            </div>
                            <div class="card-read-more">
                            <input type="submit" name="credit100" class="btn btn-link btn-block" value="Acheter"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="#">
                            <img src="images/1000.jpg" style="width:100%;height:45%; margin-top:20%;" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">5 CREDITS DE 1000 </a>
                                </h4>
                                <p class="">N'hésitez pas et acheter 1000 crédits pour vos achats de photos !</p>
                            </div>
                            <div class="card-read-more">
                            <input type="submit" name="credit1000" class="btn btn-link btn-block" value="Acheter"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
