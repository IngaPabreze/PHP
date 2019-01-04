<?php
    $temp = [-4,3,9,19,19,9,12,20,24,20,12,14,18,21,20,23,16,16,15,19,19,17,17,15,12,13,13,15,19,21];

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
     <?php
        $average= round(array_sum($temp)/count($temp));
        echo '<p> Vidutinė mėn temperatūra: '.$average.' laipsnių<p>';
        rsort($temp);
        $auksciausios =  array_slice($temp,0,5);
        $zemiausios = array_slice($temp,-5,5);
        echo '<p> Aukščiausios temperatūros:<p>';
         foreach ($auksciausios as $auksciausia){
            echo $auksciausia.' ,';
            };
        echo '<p> Žemiausios temperatūros:<p>';
         foreach ($zemiausios as $zemiausia){
            echo $zemiausia.' ,';
            };
    ?>


</body>
</html>
