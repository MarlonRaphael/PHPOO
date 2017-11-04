<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso PRO PHP - </title>
    </head>
    <body>
    <?php
        require_once('Video.php');
        require_once('Gafanhoto.php');
        require_once('Visualizacao.php');

        $videos = array();

        $videos[0] = new Video("Aula 1 de POO");
        $videos[1] = new Video("Aula 12 de PHP");
        $videos[2] = new Video("Aula 15 de HTML5");

        $Gafanhotos = array();

        $Gafanhotos[0] = new Gafanhoto("Marlon Raphael", 23, "Masculino", 'marlonraphael');
        $Gafanhotos[1] = new Gafanhoto("Wagner Ricardo", 30, "Masculino", 'flipz');

        $vis = array();

        $vis[0] = new Visualizacao($Gafanhotos[0], $videos[0]);  //Marlon Assiste Aula 1 POO
        $vis[1] = new Visualizacao($Gafanhotos[0], $videos[1]);  //Marlon Assiste Aula 12 PHP

        $vis[0]->Avaliar();
        $vis[1]->AvaliarPorc(85);

        echo "<pre>";
//        print_r($videos);
//        print_r($Gafanhotos);
        print_r($vis[0]);
        print_r($vis[1]);
        echo "</pre>";
    ?>
    </body>
</html>