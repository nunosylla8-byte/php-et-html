<?php

$produits = [
    [
        "nom" => "PC Portable",
        "prix" => 350000
    ],
    [
        "nom" => "Téléphone",
        "prix" => 150000
    ]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercice 6</title>
</head>
<body>

<h2>Liste des produits</h2>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prix HT</th>
        <th>Prix TTC</th>
    </tr>

    <?php
    foreach($produits as $produit){
        $prixTTC = $produit["prix"] + ($produit["prix"] * 18 / 100);

        echo "<tr>";
        echo "<td>".$produit["nom"]."</td>";
        echo "<td>".$produit["prix"]."</td>";
        echo "<td>".$prixTTC."</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>