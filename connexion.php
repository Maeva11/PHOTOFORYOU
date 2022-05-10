<?php require_once("include/accessAdmin.inc.php");?>
<?php require_once("include/navbar.php"); ?>
<?php require_once("include/header.inc.php");?>
<?php echo $contenu;?>
<!DOCTYPE html>  
<html>  
    <head>  
        <title>Inscription</title>  
    </head>  
    <body>  
    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">CONNEXION </h2> <hr> </br></br>
                        <form method="POST" action="verif.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre Email"/>
                            </div>
                            <div class="form-group">
                                <label for="mdp"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="mdp" id="mdp" placeholder="Votre Mot de Passe" required="required" /> 
                            </div> </br>
                    <div class="form-group form-button">
                                <input type="submit" name="Valider" class="form-submit" value="Se Connecter"/>
                            </div>
                            </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/connexion.jpg" alt="sing up image"></figure> 
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script> 

</script>
 
<?php require_once("include/script.inc.php"); ?>

<?php require_once("include/footer.inc.php"); ?>