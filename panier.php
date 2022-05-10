<?php 
include_once("include/accessAdmin.inc.php");
include_once("include/fonction.inc.php");
//include_once("include/navbar.php");
include_once("include/header.inc.php");



if (internauteEstPhotographe() || internauteNonConnecte()){
    header("Location:boutique.php");
}

if(isset($_POST['ajout_panier'])) 
{   // debug($_POST);
    $resultat = $db->prepare("SELECT * FROM produit WHERE id_produit='$_POST[id_produit]'");
    $resultat->execute();
    $produit = $resultat->fetch(PDO::FETCH_ASSOC);
    ajouterProduitDansPanier($produit['titre'],$_POST['id_produit'],$_POST['quantite'],$produit['prix'], $produit['photo']);
}


//--- VIDER PANIER ---//
if(isset($_GET['action']) && $_GET['action'] == "vider")
{
    unset($_SESSION['panier']);
}

echo '<section class="h-200 " style="background-color: #eee;">
  <div class="container h-100 py-5">
        <img src="images/panier.png">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="fw-normal mb-0 text-black">Votre panier</h2>
        </div>';
              // si vide alors echo vide 
              if(empty($_SESSION['panier']['id_produit'])) // panier vide
{
    echo "<tr><td colspan='5'>Votre panier est vide</td></tr>";
}
else
{
    for($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++) 
    {
        echo '<div class="card mb-2"><div class="card-body p-4"><p class="lead fw-normal">Nom : '. $_SESSION['panier']['titre'][$i].'</p>';
        echo '<p class="lead fw-normal"> Quantité : '. $_SESSION['panier']['quantite'][$i];
        echo '<div><p class="lead fw-normal">' . $_SESSION['panier']['prix'][$i] . ' euros </div>';
        echo '</div></div>';
    }
    echo '<div><p class="lead fw-normal">Total : '. montantTotal() . " euros</div>";
    if(internauteEstConnecte()) 
    {
        echo '    <div class="card">
        <div class="card-body">
         <form method=POST action="payer.php"><input type="submit" name="payer" class="btn btn-warning btn-block btn-lg" value="PAYER LE PANIER"/></form>
        </div>
      </div>';
       }
    else
    {
        echo '<tr><td colspan="3">Veuillez vous <a href="inscription.php">inscrire</a> ou vous <a href="connexion.php">connecter</a> afin de pouvoir payer</td></tr>';
    }
    echo "<div colspan='5'><a href='?action=vider'>Vider mon panier</a></tdcolspan=></tr>";
}
   echo'</div>

  </div>
</section>';
?>
