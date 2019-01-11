<?php
$id = intval($_GET['id']);
$nom = $_GET['name'];
$cat=$_GET['cat'];
try{
    $conn = new PDO("mysql:host=localhost;dbname=produits;charset=utf8","root","");
    $sql = "INSERT INTO produit VALUES ($id, '$nom','$cat')";
    $reponse = $conn->query($sql);
    }
catch(Exception $e){
    echo "error : ".$e->getMessage();
}
header("location:ajouter.php");
?>