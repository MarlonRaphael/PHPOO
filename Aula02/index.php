<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
    <?php
        require_once('Caneta.php');

        //Objeto 1 da classe caneta
        $c1 = new Caneta();
        $c1->cor = "Azul";
        $c1->ponta = "0.5";
//        $c1->tampada = true;
//        $c1->tampar();
//        $c1->destampar();
//        $c1->tampar();
//        echo "<pre>";
//        print_r($c1);
//        echo "</pre>";
        $c1->rabiscar();

        echo "<br>";

        //Objeto 2 da classe Caneta
        $c2 = new Caneta();
        $c2->cor = "Verde";
        $c2->carga = 50;
        $c2->tampar();

        echo "<pre>";
        print_r($c2);
        echo "</pre>";
    ?>
    </body>
</html>