<?php

$etudiants = [
    ["nom"=>"Ali","note"=>12],
    ["nom"=>"Fatou","note"=>8],
    ["nom"=>"Awa","note"=>15],
    ["nom"=>"Moussa","note"=>9]
];

echo "<h2>Tous les étudiants</h2>";

echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Note</th><th>Statut</th></tr>";

foreach($etudiants as $etudiant){

    if($etudiant["note"] >= 10){
        $statut = "Admis";
    }else{
        $statut = "Ajourné";
    }

    echo "<tr>";
    echo "<td>".$etudiant["nom"]."</td>";
    echo "<td>".$etudiant["note"]."</td>";
    echo "<td>".$statut."</td>";
    echo "</tr>";
}

echo "</table>";

echo "<h2>Étudiants admis</h2>";

foreach($etudiants as $etudiant){

    if($etudiant["note"] >= 10){
        echo $etudiant["nom"]." - ".$etudiant["note"]."<br>";
    }

}
?>