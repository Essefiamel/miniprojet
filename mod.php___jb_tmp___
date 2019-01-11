<?php
$id = intval($_GET['id']);
$nom = $_GET['name'];
$cat=$_GET['cat'];
try
{

    $conn = new PDO("mysql:host=localhost;dbname=produits;charset=utf8","root","");
    $sql = "UPDATE produit SET nom_prod='$nom', categorie='$cat'  where num_prod='$id'";
    $reponse = $conn->query($sql);

}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
header("location:modifier.php");