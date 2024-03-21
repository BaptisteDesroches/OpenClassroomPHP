<?php
$recipes = [
    ['Cassoulet','mickael.andrieu@exemple.com'],
    ['Couscous', 'mickael.andrieu@exemple.com'],
    ['Risotto','mickael.andrieu@exemple.com'],
    ['Ratatouille','alban.margo@exemple.com'],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines = 0; $lines <= 3; $lines++): ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][1] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>

