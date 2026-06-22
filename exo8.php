<?php

$produits = ["Ordinateur", "Téléphone", "Imprimante"];

$message = "";

if(isset($_POST["recherche"])){

    $recherche = $_POST["recherche"];

    if(in_array($recherche, $produits)){
        $message = "Produit trouvé";
    }else{
        $message = "Produit introuvable";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercice 8</title>
</head>
<body>

<form method="post">
    <input type="text" name="recherche" placeholder="Rechercher un produit">
    <button type="submit">Rechercher</button>
</form>

<br>

<?php
echo $message;
?>

</body>
</html>