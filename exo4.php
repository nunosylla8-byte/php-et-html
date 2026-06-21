<?php
$menu = ["Acceuil", "Service", "Produits", "Contact"];

echo "<nav>\n";
    foreach ($menu as $menus){
     echo '<a href="#"> '. $menus . "</a>\n";
    }
    echo "</nav>";

    ?>