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
                        <h2 class="form-title">INSCRIPTION</h2><hr></br>
                        <form method="POST" action="ajoutUser.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="pseudo"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo"/>
                            </div>
                            <div class="form-group">
                                <label for="nom"><i class="zmdi zmdi-pin-account"></i></label>
                                <input type="text" name="nom" id="nom" placeholder="Votre prénom"/>
                            </div>
                            <div class="form-group">
                                <label for="prenom"><i class="zmdi zmdi-pin-account"></i></label>
                                <input type="text" name="prenom" id="prenom" placeholder="Votre nom" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre Email"/>
                            </div>
                            <div class="form-group">
                                <label for="mdp"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="mdp" id="mdp" placeholder="Votre Mot de Passe" required="required" /> 
                            </div> </br>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-info">
                                    <input type="radio" name="civilite" class="civilite" value="m" checked>
                                    Homme </label>
                                <label class="btn btn-info">
                                <input type="radio" name="civilite" class="civilite" value="f">
                                Femme </label>
                            </div>
                            <div class="form-group">
                                <label for="ville"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" id="ville" name="ville" placeholder="Votre ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_."/>
                            </div>
                            <div class="form-group">
                                <label for="cp"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" id="code_postal" name="code_postal" placeholder="Code postal" pattern="[0-9]{5}" title="5 chiffres requis : 0-9"/>
                            </div>
                            <div class="form-group">
                                <label for="adresse"><i class="zmdi zmdi-pin"></i></label>
                                <textarea id="adresse" name="adresse" placeholder="Votre Adresse" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés :  a-zA-Z0-9-_."></textarea>
                            </div></br>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-info">
                                    <input type="radio" name="choixType" id="client" value="c" checked>
                                    Client </label>
                                <label class="btn btn-info">
                                <input type="radio" name="choixType" id="photographe" value="p">
                                Photographe </label>
                            </div>
                            <input type="hidden" id="credit" name="credit" value="0">

                    <div class="form-group form-button">
                                <input type="submit" name="Valider" class="form-submit" value="S'inscrire"/>
                            </div>
                            </form>
                    </div>
                    <div class="signup-image"></br></br></br></br></br></br></br></br>
                        <figure><img src="images/inscription.png" alt="sing up image"></figure> 
                        <a href="connexion.php" class="signup-image-link"> &#x25A0; I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script> 

</script>
 
<?php require_once("include/script.inc.php"); ?>

<?php require_once("include/footer.inc.php"); ?>