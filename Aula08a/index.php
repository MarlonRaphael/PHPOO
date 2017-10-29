<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso POO – 08a – Relacionamento de Agregação</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
        require_once('Luta.php');
        require_once('Lutador.php');

        $Lutadores = array(
            0 => new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 2, 1),
            1 => new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3),
            2 => new Lutador('Snapshadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1),
            3 => new Lutador('DeadCode', 'Austrália', 28, 1.93, 81.6, 13, 0, 2),
            4 => new Lutador('UfoCobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3),
            5 => new Lutador('NerdaArd', 'EUA', 30, 1.81, 105.7, 12, 2, 4)
        );

        $UEC01 = new Luta(); //$Lutadores[0], $Lutadores[1], 3, true

        $UEC01->marcarLuta($Lutadores[0], $Lutadores[1]);
        $UEC01->lutar();

        echo "<hr>";
        $Lutadores[0]->Status();
        echo "<br>";
        $Lutadores[1]->Status();
    ?>
    </body>
</html>