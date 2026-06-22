<?php
// 1. Déclaration du tableau des employés
$employes = [
    [
        "nom" => "Mamadou Diop",
        "poste" => "Développeur Web",
        "salaire" => 450000
    ],
    [
        "nom" => "Awa Ndiaye",
        "poste" => "Designer UX/UI",
        "salaire" => 500000
    ],
    [
        "nom" => "Idrissa Sane",
        "poste" => "Administrateur Système",
        "salaire" => 400000
    ],
    [
        "nom" => "Fatou Sow",
        "poste" => "Chef de Projet",
        "salaire" => 650000
    ]
];

// 2. Traitement des données
$salaire_total = 0;
$employe_max_salaire = null;

foreach ($employes as $employe) {
    // Calcul du salaire total
    $salaire_total += $employe['salaire'];
    
    // Recherche de l'employé avec le salaire le plus élevé
    if ($employe_max_salaire === null || $employe['salaire'] > $employe_max_salaire['salaire']) {
        $employe_max_salaire = $employe;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employés</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            padding: 40px 20px;
            max-width: 900px;
            margin: 0 auto;
        }

        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        /* Style du tableau HTML */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Style des blocs de résumé */
        .info-box {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-left: 5px solid #2ecc71;
        }

        .info-box.highlight {
            border-left-color: #e74c3c;
        }

        .info-box p {
            margin: 8px 0;
            font-size: 16px;
        }

        .bold {
            font-weight: bold;
            color: #2c3e50;
        }
    </style>
</head>
<body>

    <h2>Liste des employés</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Poste</th>
                <th>Salaire</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employes as $employe): ?>
                <tr>
                    <td><?php echo htmlspecialchars($employe['nom']); ?></td>
                    <td><?php echo htmlspecialchars($employe['poste']); ?></td>
                    <td><?php echo number_format($employe['salaire'], 0, ',', ' '); ?> FCFA</td>
                </tr>
            <?php end9foreach; ?>
        </tbody>
    </table>

    <div class="info-box">
        <p><span class="bold">Salaire total de l'entreprise :</span> <?php echo number_format($salaire_total, 0, ',', ' '); ?> FCFA</p>
    </div>

    <?php if ($employe_max_salaire !== null): ?>
        <div class="info-box highlight">
            <p><span class="bold">Employé le mieux payé :</span> <?php echo htmlspecialchars($employe_max_salaire['nom']); ?></p>
            <p><span class="bold">Poste :</span> <?php echo htmlspecialchars($employe_max_salaire['poste']); ?></p>
            <p><span class="bold">Salaire :</span> <?php echo number_format($employe_max_salaire['salaire'], 0, ',', ' '); ?> FCFA</p>
        </div>
    <?php endif; ?>

</body>
</html>