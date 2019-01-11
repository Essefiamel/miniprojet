<?php
$nom = $_GET['name'];
try{
    $conn = new PDO("mysql:host=localhost;dbname=produits;charset=utf8","root","");
    $sql = "DELETE FROM produit WHERE nom_prod='$nom'";
    $reponse = $conn->query($sql);

}
catch(Exception $e){
    echo "error : ".$e->getMessage();
}
header("location:supprimer.php");

?>