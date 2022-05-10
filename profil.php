<?php require_once("include/navbar.php"); ?>
<?php require_once("include/header.inc.php");
require_once("include/accessAdmin.inc.php");
require_once("include/fonction.inc.php");


//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(!internauteEstConnecte()){
 header("location:connexion.php");
}else {
echo '<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="images/profil.jpg"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>';
            echo '<h4 class="mb-2">'.$_SESSION['pseudo'].'</h4>';
            echo '<p class="text-muted mb-4">'.$_SESSION['nom'].'<span class="mx-2">|</span></br>'.$_SESSION['email'].'</p>';
            echo '<button type="button" class="btn btn-primary btn-rounded btn-lg">
            <a href="credit.php">Acheter crédits
            </button>';
            echo '
              <div>
                <p class="text-muted mb-0">Vous êtes '.$_SESSION['choixType'].'</p>
              </div>
              <div class="px-3">
              <p class="text-muted mb-0">Nombre de crédits :</p>
                <p class="mb-2 h5">'.$_SESSION['credit'].' crédits</p>
 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>';
}?>