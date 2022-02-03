<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once('./clases/Animal.php');
    require_once('./clases/Perro.php');
    require_once('./clases/Gato.php');
    $perro=new Perro();
    $gato=new Gato();
    $perro->comer();
    $perro->protectedDormirperro("Perro");
    $gato->comer();
    $gato->protectedDormirgato("Gato");
    ?>
</body>
</html>
