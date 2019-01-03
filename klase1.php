<?php
    $studentai = [
        'Julius',
        'Inga',
        'Egle'
    ];
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masyvai ir ciklai</title>
</head>

<body>
    <?php $studentai[] = 'Ruta'; ?>
    <?php print_r($studentai); ?>
    <?php echo $studentai[2]='Jonas'; ?>
    <?php echo $studentai[2]; ?>
</body>
</html>
