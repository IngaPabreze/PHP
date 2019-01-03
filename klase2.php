<?php
    $asmuo = [
        'amzius'=> 27,
        'plaukai'=> 'juoda',
        'kompas'=>'senas'
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
    <?php echo $asmuo['amzius'];  ?>
    <?php foreach ($asmuo as $savybe => $reiksme) :?>
    <p><?= "$savybe yra $reiksme"; ?></p>
    <?php endforeach; ?>


</body>
</html>
