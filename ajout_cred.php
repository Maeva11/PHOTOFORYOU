<?php
require_once("include/accessAdmin.inc.php");
require_once("include/header.inc.php");
require_once("include/navbar.php");


$nom=$_SESSION["nom"];

if(isset($_POST['credit10'])){

$cumul1 = 10;

$requet=$db->prepare('UPDATE site.membre SET credit =:requete WHERE nom=:nom');
$requet->bindParam(':requete', $cumul1, PDO::PARAM_STR);
$requet->bindParam(':nom', $nom, PDO::PARAM_STR);

$requet->execute();
echo '<SCRIPT>alert("Vous avez 10 crédits!");</SCRIPT>';
header('Location:index.php');

/* Ne fonctionne pas --> pour ajouter et non d'ecraser les crédits

    $creditAvant = $_SESSION['credit'];
    $creditApres = $creditAvant + $cumul1;
    
    $data = $db->prepare("UPDATE credit FROM membre SET credit=:requete WHERE nom = :nom");
    $data->bindParam(':requete', $creditApres, PDO::PARAM_STR);
    $data->bindParam(':nom', $nom, PDO::PARAM_STR);
  
    $data->execute();
  
}*/
}else if(isset($_POST['credit100'])){

$cumul2 = 100;

$requet=$db->prepare('UPDATE site.membre SET credit =:requete WHERE nom=:nom');
$requet->bindParam(':requete', $cumul2, PDO::PARAM_STR);
$requet->bindParam(':nom', $nom, PDO::PARAM_STR);

$requet->execute();
echo '<SCRIPT>alert("Vous avez 100 crédits!");</SCRIPT>';
header('Location:index.php');

}else if(isset($_POST['credit1000'])){

    $cumul3 = 1000;
    
    $requet=$db->prepare('UPDATE site.membre SET credit =:requete WHERE nom=:nom');
    $requet->bindParam(':requete', $cumul3, PDO::PARAM_STR);
    $requet->bindParam(':nom', $nom, PDO::PARAM_STR);
    
    $requet->execute();
    echo '<SCRIPT>alert("Vous avez 1000 crédits!");</SCRIPT>';
    header('Location:index.php');
    }
?>


