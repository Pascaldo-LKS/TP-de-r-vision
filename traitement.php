<?php 
require 'config.php'; 
 
$nom = $_POST['nom']; 
$prenom = $_POST['prenom']; 
$filiere = $_POST['filiere']; 
 

 
$sql = "INSERT INTO etuddiants (nom, prenom, id_filiere) VALUES (?, ?, ?)"; 
$stmt = $pdo->prepare($sql); 
$stmt->execute([$nom, $prenom, $filiere]); 
 
header("Location: index.php"); 
?>