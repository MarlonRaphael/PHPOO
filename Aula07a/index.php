<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso POO – 07a – Relacionamento entre Classes</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"/>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
        require_once('Lutador.php');

        $Lutadores = array(
            0 => new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 2, 1),
            1 => new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3),
            2 => new Lutador('Snapshadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1),
            3 => new Lutador('DeadCode', 'Austrália', 28, 1.93, 81.6, 13, 0, 2),
            4 => new Lutador('UfoCobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3),
            5 => new Lutador('NerdaArd', 'EUA', 30, 1.81, 105.7, 12, 2, 4)
        );

        $Lutadores[0]->Apresentar();
        $Lutadores[0]->Status();
        $Lutadores[0]->getCategoria();
        echo "<hr>";
//        $prettyBoy = new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 2, 1);
//        $Putscript = new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3);
//        $Snapshadow = new Lutador('Snapshadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1);
//        $DeadCode = new Lutador('DeadCode', 'Austrália', 28, 1.93, 81.6, 13, 0, 2);
//        $UfoCobol = new Lutador('UfoCobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3);
//        $NerdaArd = new Lutador('NerdaArd', 'EUA', 30, 1.81, 105.7, 12, 2, 4);
    ?>
    </body>
</html>