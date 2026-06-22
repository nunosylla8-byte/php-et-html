<?php

$contacts = [
    [
        "nom" => "Ali",
        "telephone" => "770000001"
    ],
    [
        "nom" => "Fatou",
        "telephone" => "770000002"
    ]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercice 7</title>
</head>
<body>

<h2>Liste des contacts</h2>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Téléphone</th>
        <th>Action</th>
    </tr>

    <?php foreach($contacts as $contact) { ?>
        <tr>
            <td><?php echo $contact["nom"]; ?></td>
            <td><?php echo $contact["telephone"]; ?></td>
            <td>
                <button>Voir</button>
            </td>
        </tr>
    <?php } ?>

</table>

</body>
</html>