<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        if(isset($_POST['mygtukas'])){
            if($_POST['name'] && $_POST['surname']){
                echo  $_POST['name'].' '.$_POST['surname'];
                }else{
                echo 'Įveskite vardą ir pavardę!';
                }
        }else{
            ?>
                <form action ="<?php $_PHP_SELF; ?>"; method="post">
                    <p> Vardas: <input type="text" name="name"></p>
                    <p> Pavardė: <input type="text" name="surname"></p>
                    <input type="submit" value="Send" name="mygtukas">
                </form>
            <?php
        };
   ?>

</body>
</html>
