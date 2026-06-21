<?php
$produits = ["Ordinateur", "Téléphone", "Imprimante", "Clavier"];

echo "<ul>";
    foreach ($produits as $produit){
     echo "<li>" . $produit . "</li>";
    }
    echo "</ul>";

    echo  "<p> Le nombre de produits est : " . count($produits) . "</p>";
    ?>
   