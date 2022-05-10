<?php
require_once("include/navbar.php");


//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("include/header.inc.php");?>

<div class="main">

    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h1 class="form-title">Formulaire Produit</h1><hr>
                <form method="post" enctype="multipart/form-data" action="verifBoutiq.php">
                    <label for="reference"></label><br>
                    <input type="text" id="reference" name="reference" placeholder="la référence de produit"> <br>

                    <select name="categorie" multiple="yes">
                        <option>Tous</option>
                        <option>Portrait </option>
                        <option>Paysage</option>
                        <option>Artistique</option>
                        <option>Nature</option>
                    </select> </br>

                    <label for="titre"></label><br>
                    <input type="text" id="titre" name="titre" placeholder="le titre du produit"> <br>

                    <label for="description"></label><br>
                    <textarea name="description" id="description" placeholder="la description du produit"></textarea><br>


                    <label for="photo"></label><br>
                    <input type="file" id="photo" name="photo"><br>

                    <label for="prix"></label><br>
                    <input type="text" id="prix" name="prix" min="2" max="100" placeholder="le prix du produit"><br>


                    <input type="submit" value="enregistrement du produit" name="produitok">
                    </form>
                </div>
                <div class="signup-image"></br></br></br></br></br>
                    <figure><img src="images/plus.png" alt="sing up image"></figure>
                </div>
            </div>
        </div>
    </section></br></br>
</div>