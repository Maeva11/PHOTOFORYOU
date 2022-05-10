<?php 

require_once("include/accessAdmin.inc.php");
require_once("include/header.inc.php");
require_once("include/navbar.php");


//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(isset($_GET['id_produit']))  { 
    $resultat =$db->prepare("SELECT * FROM produit WHERE id_produit = '$_GET[id_produit]'");
    $resultat ->execute(); }
 
$produit = $resultat->fetch(PDO::FETCH_ASSOC);

$image = "images/".($produit['photo']); 

$contenu .= '<div class="contenu"></br></br></br>';
$contenu .= "<h2> Titre : $produit[titre]</h2><hr><br> <p class='text'>Categorie: $produit[categorie]</p>";
$contenu .= "<img id='photo' src='$image'></br>";
$contenu .= "<p><i class='text'>Description: $produit[description]</i></p><br>";
$contenu .= "<p class='text'>Prix : $produit[prix] €</p><br>";
 
$contenu .= '<form method="post" action="panier.php">';
    $contenu .= "<input type='hidden' name='id_produit' value='$produit[id_produit]'>";
    $contenu .= '<p><label for="quantite"> Quantité : </label></p>';
    $contenu .= '<select id="quantite" name="quantite"><option> 1 </option></select>';
    $contenu .= '<input class="boutonAchat" type="submit" name="ajout_panier" value="ajouter au panier">';
$contenu .= '</form>';
$contenu .= '<div>';

echo $contenu;

