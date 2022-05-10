<?php
// Permet d'initialiser pour le dynamisme du site web
//--------- BDD
$selectionner="selectionner";
$pass="selectionner";

try {
    $db = new PDO('mysql:host=localhost;dbname=site', $selectionner, $pass);
    }
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
 
//--------- SESSION
session_start();
 
//--------- CHEMIN
define("RACINE_SITE","/site/");
 
//--------- VARIABLES
$contenu = '';
 
//--------- AUTRES INCLUSIONS
require_once("fonction.inc.php");
?>