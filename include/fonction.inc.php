<?php 
//------------------------------------
function debug($var, $mode = 1)
{
    echo '<div style="background: orange; padding: 5px; float: right; clear: both; ">';
    $trace = debug_backtrace();
    $trace = array_shift($trace);
    echo 'Debug demandé dans le fichier : $trace[file] à la ligne $trace[line].';
    if($mode === 1)
    {
        print '<pre>'; print_r($var); print '</pre>';
    }
    else
    {
        print '<pre>'; var_dump($var); print '</pre>';
    }
    echo '</div>';
}
//------------------------------------
function internauteEstConnecte()
{ 
    if(!isset($_SESSION['login'])) return false;
    else return true;
}
//------------------------------------
function internauteEstClient()
{
    if(internauteEstConnecte() && $_SESSION['choixType'] == 'c') return true;
    else return false;
}
//------------------------------------
function internauteEstPhotographe()
{
    if(internauteEstConnecte() && $_SESSION['choixType'] == 'p') return true;
    else return false;
}
//------------------------------------
function internauteNonConnecte()
{
    if(!internauteEstPhotographe() && !internauteEstClient()) return true;
    else return false;
}

//------------------------------------
function creationDuPanier()
{
   if(!isset($_SESSION['panier']))
   {
      $_SESSION['panier'] = array();
      $_SESSION['panier']['titre'] = array();
      $_SESSION['panier']['id_produit'] = array();
      $_SESSION['panier']['quantite'] = array();
      $_SESSION['panier']['prix'] = array();
      $_SESSION['panier']['photo']= array();
   }
}
//------------------------------------
function ajouterProduitDansPanier($titre, $id_produit, $quantite, $prix)
{
    creationDuPanier(); 
    $position_produit = array_search($id_produit,  $_SESSION['panier']['id_produit']);
    if($position_produit !== false)
    {
         $_SESSION['panier']['quantite'][$position_produit] += $quantite ;
    }
    else
    {
        $_SESSION['panier']['titre'][] = $titre;
        $_SESSION['panier']['id_produit'][] = $id_produit;
        $_SESSION['panier']['quantite'][] = $quantite;
        $_SESSION['panier']['prix'][] = $prix;

    }
}
//------------------------------------
function montantTotal()
{
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++)
   {
      $total += $_SESSION['panier']['quantite'][$i] * $_SESSION['panier']['prix'][$i];
   }
   return round($total,2); 
}

//------------------------------------
?>