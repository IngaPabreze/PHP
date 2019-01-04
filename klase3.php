<?php
    echo 'Labas, '.$_GET['vardas'].'<br>'.
    'Amzius: '.$_GET['amzius'];
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>

    </style>

</head>

<body>
    <form action ="<?php $_PHP_SELF ?>"; method="get">
<!--        klaida virsuj reikia php-->
       Name: <input type="text" name="vardas">
        Age: <input type="text" name="amzius">
        <input type="submit" value="Send">

    </form>
</body>
</html>
