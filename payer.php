<?php 
include_once("include/accessAdmin.inc.php");
include_once("include/fonction.inc.php");
//include_once("include/navbar.php");
include_once("include/header.inc.php");



var_dump($_SESSION);
if(isset($_POST['payer'])){
    if($_SESSION['credit'] < montantTotal()) {
        echo '
        <br>
            Vous n\'avez pas assez de crédits pour acheter cette photo.';
    }else {

        
        $nom=$_SESSION['nom'];
        $prix=$_SESSION['panier']['prix'];

        //mettre à jour les crédits du client 
        $req = $db->prepare('UPDATE site.membre SET credit = credit - :prix WHERE nom = :nom');
        $req->bindParam(':prix', $prix, PDO::PARAM_INT);
        $req->bindParam('nom', $nom, PDO::PARAM_STR);
        $req->execute();

        //télecharge la photo 
        
    }
}
?>