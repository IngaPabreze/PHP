<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        function plotas($a,$b){
            $plotas= $a*$b;
            return $plotas;
        }

        if(isset($_POST['mygtukas'])){
            if($_POST['ilgis'] && $_POST['plotis']){
                echo  'Stačiakampio plotas: '.plotas($_POST['ilgis'],$_POST['plotis']);

                }else{
                echo 'Įveskite visus parametrus!';
                }
        }else{
            ?>
                <form action ="<?php $_PHP_SELF ?>"; method="post">
                <p> Įvesk ilgį: <input type="text" name="ilgis"></p>
                <p> Įvesk plotį: <input type="text" name="plotis"></p>
                <input type="submit" value="Send" name="mygtukas">
                </form>
            <?php
        };
   ?>

</body>
</html>
