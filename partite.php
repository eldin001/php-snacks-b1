<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Partite di Basket</h1>
<?php
$partite = [
    ["Olimpia Milano", "Cantù", 55, 60],
    ["Roma Basket", "Napoli", 70, 65],
    ["Virtus Bologna", "Varese", 80, 75],
    ["Brescia", "Trieste", 68, 72],
    ["Reggiana", "Pesaro", 62, 58],
    ["Fortitudo Bologna", "Brindisi", 75, 80],
    ["Cremona", "Universo Treviso", 72, 68],
    ["Trento", "Reggiana", 70, 67],
    ["Venezia", "Cantu", 85, 80],
];
?>
<ul>
    <?php foreach ($partite as $partita): ?>
        <li><?php echo $partita[0] . " - " . $partita[1] . " | " . $partita[2] . "-" . $partita[3]; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>