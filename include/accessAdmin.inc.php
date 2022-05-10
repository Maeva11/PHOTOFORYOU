<?php
// Permet d'initialiser pour le dynamisme du site web
//--------- BDD
$user="root";
$pass="";

try {
    $db = new PDO('mysql:host=localhost;dbname=site', $user, $pass);
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