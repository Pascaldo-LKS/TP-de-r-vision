
<?php
require 'config.php';

$id = $_GET['id']; 
 
$stmt = $pdo->prepare("SELECT * FROM etuddiants WHERE id=?"); 
$stmt->execute([$id]); 
$etuddiant = $stmt->fetch(); 
?>
<link rel="stylesheet" href="assets/css/style.css">

<form method="POST"> 
 
<input type="text" name="nom" value="<?= $etuddiant['nom'] ?>"> 
<input type="text" name="prenom" value="<?= $etuddiant['prenom'] ?>"> 
 
<select name="filiere"> 
<?php 
$filieres = $pdo->query("SELECT * FROM filiere"); 
 
foreach($filieres as $f): 
?> 
<option value="<?= $f['id'] ?>" 
<?= $f['id'] == $etuddiant['id_filiere'] ? 'selected' : '' ?>> 
<?= $f['nom'] ?> 
</option> 
<?php endforeach; ?> 
</select> 
 
<button type="submit">Modifier</button> 
 
</form>
<script src="assets/js/script.js"></script> 