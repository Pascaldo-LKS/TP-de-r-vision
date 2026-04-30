<?php 
    require "config.php";
    $filiere = $pdo->query("SELECT * FROM filiere");


    $sql = "SELECT etuddiants.*, filiere.nom AS filiere 
        FROM etuddiants 
        JOIN filiere ON etuddiants.id_filiere = filiere.id"; 
 
    $result = $pdo->query($sql); 
?>
<link rel="stylesheet" href="assets/css/style.css"> 

<div> 
    <h2>Formulaire d'Etudiants</h2>

    <form method="POST" action="traitement.php"> 
   
 
    <input type="text" name="nom" placeholder="Nom"> 
    <input type="text" name="prenom" placeholder="Prénom"> 
 
    <select name="filiere"> 
        <?php foreach($filiere as $f): ?> 
            <option value="<?= $f['id'] ?>"> 
                <?= $f['nom'] ?> 
            </option> 
        <?php endforeach; ?> 
    </select> 
 
    <button type="submit">Enregistrer</button> 
</div>
 
</form>
<div class="for">
    <table border="1"> 
        <tr> 
            <th>Nom</th> 
            <th>Prénom</th> 
            <th>Filière</th> 
            <th>Actions</th> 
        </tr> 
 
        <?php foreach($result as $e): ?> 
        <tr> 
            <td><?= $e['nom'] ?></td> 
            <td><?= $e['prenom'] ?></td> 
            <td><?= $e['filiere'] ?></td> 
            <td> 
                <a href="update.php?id=<?= $e['id'] ?>">Modifier</a> 
                <a href="delete.php?id=<?= $e['id'] ?>">Supprimer</a> 
            </td> 
        </tr> 
        <?php endforeach; ?> 

 
 
    </table>
</div>


<script src="assets/js/script.js"></script> 