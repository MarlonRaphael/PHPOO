<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso POO PHP #09b - Exercício prático POO em PHP</title>
    </head>
    <body>
    <?php
        require_once('Pessoa.class.php');
        require_once('Livro.class.php');

        $leitor = new Pessoa('Marlon Raphael', 23, 'Masculino');

        $livro = new Livro('O Monge e o Executivo', 'Jhon Daily', 140, 80, true, $leitor);

        $livro->Detalhes();

        $livro->folhear();
        $livro->folhear();
        $livro->folhear();

        $livro->avancarPag();

        $livro->voltarPag();
        $livro->voltarPag();

        $livro->fechar();
        $livro->abrir();

        echo "<pre>";
        print_r($livro);
        echo "</pre>";
    ?>
    </body>
</html>