<?php require_once("include/accessAdmin.inc.php");
 require_once("include/header.inc.php");
 require_once("include/navbar.php");

//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("include/header.inc.php"); 

//--- AFFICHAGE DES CATEGORIES ---//

$categories_des_produits = $db -> prepare("SELECT DISTINCT categorie FROM produit");
$categories_des_produits->execute();

$contenu .= '<div class="boutique-gauche"></br>';
$contenu .= '<ul style ="padding-left: 800px;">';
while($cat = $categories_des_produits->fetch(PDO::FETCH_ASSOC))
{
    $contenu .= "<li><a href='?categorie=" . $cat['categorie'] . "'>" . $cat['categorie'] . "</a></li>";
}
$contenu .= "</ul>";
$contenu .= "</div>";
echo $contenu; ?>


<div class="container">
<div class="row row-cols-1 row-cols-md-3">

<?php

if(isset($_GET['categorie']))
{
$query = "SELECT * from site.produit where categorie='$_GET[categorie]'";
$requete = $db->query($query);

$card="";
// boucle foreach qui parcours le tableau et affiche une card 
foreach ($requete as $ligne) { 
          $image = "images/".($ligne['photo']); 

            $card .="<div class='col-sm-4 mb-4 boutique-produit'></br>";
            $card .= "<form action='panier.php' method='POST'>";
            $card .= "<div class=''>";
            $card .= "<input type='number' name='prix' value=".$ligne['prix']." style='display: none;'/> ";
            $card .= "<img src=".$image." \' =\'130\' height=\'100\' class='card-img-top' alt='".$ligne['photo']."'/>";
            $card .= "<div class='card-body'>";
            $card .= "<h5 class='card-title'>".$ligne['reference']."</h5>";
            $card .= "<p class='card-text'>".$ligne['description']."</p> <form>";
            $card .= "<a href='fiche_produit.php?id_produit=".$ligne['id_produit'] ."' class='boutonAchat'>Voir la fiche</a> </form>
                  </div>
                </div>
              </form>
            </div>";

            echo $card;

        }
       } ?>

        
  </div>
  </div>