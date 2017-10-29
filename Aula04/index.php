<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PRO PHP - </title>
    </head>
    <body>
    <?php

        require_once('Caneta.php');

        $c1 = new Caneta("Bic", "Azul", 0.5, false);
        $c2 = new Caneta("FaberCastel", "Vermelha", 1.0, true);

//        $c1->setModelo("Bic");
//        $c1->setPonta(0.5);

        echo "<pre>";
        print_r($c1);
        print_r($c2);
        echo "<pre>";

//        print "Eu tenho uma caneta <strong>{$c1->getModelo()}</strong> de ponta <strong>{$c1->getPonta()}</strong>.";

    ?>
    </body>
</html>