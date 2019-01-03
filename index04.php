<?php
    $cities = ['Berlynas','Roma','Londonas'];
    $cities[] = 'Tokijas';
    $cities2 = [
        'Tokijas'=> 13.6,
        'Vasingtonas'=> 0.6,
        'Maskva'=>11.5
    ];
    $cities2['Londonas'] = 8.6;
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <?php print_r($cities); ?>
    <ul>
        <li><?php echo $cities[1]; ?></li>
    </ul>
    <?php print_r($cities2); ?>
    <ul>
         <?php foreach ($cities2 as $miestas => $GyvSk ) :?>
            <li><?= "Gyventojų skaičius: ".$GyvSk; ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
