<?php
$prenoms = [];

if(isset($_POST['prenom']) && !empty($_POST['prenom'])){
    $prenoms[] = $_POST['prenom'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercice 5</title>
</head>
<body>

<form method="post">
    <input type="text" name="prenom" placeholder="Entrez un prénom">
    <button type="submit">Envoyer</button>
</form>

<h3>Liste des prénoms :</h3>

<?php
if(!empty($prenoms)){
    echo "<table border='1'>";
    echo "<tr><th>Prénom</th></tr>";

    foreach($prenoms as $prenom){
        echo "<tr><td>$prenom</td></tr>";
    }

    echo "</table>";
}else{
    echo "Aucun prénom ajouté.";
}
?>

</body>
</html>