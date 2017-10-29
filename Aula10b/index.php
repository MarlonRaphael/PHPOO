<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso POO PHP #10b - Herança (Parte 2)</title>
    </head>
    <body>
    <?php
        require_once('Pessoa.php');
        require_once('Aluno.php');
        require_once('Professor.php');
        require_once('Funcionario.php');

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome('Marlon');
        $p2->setNome('Wagner');
        $p3->setNome('Maria');
        $p4->setNome('Junior');

        $p2->setMatricula('46981368');
        $p3->setEspecialidade('Professor Infantil');



        $p1->setSexo('Masculino');
        $p2->setSexo('Masculino');
        $p3->setSexo('Feminino');
        $p4->setSexo('Masculino');

        $p1->setIdade(23);
        $p2->setIdade(30);
        $p3->setIdade(54);
        $p4->setIdade(56);

        $p2->setCurso('Informática');
        $p3->setSalario(2500.75);
        $p4->setSetor('Estoque');

        $p3->receberAum(550.20);
        $p4->mudarTrabalho();
        $p2->cancelarMatr();

        echo "<pre>";
        print_r($p1);
        echo "</pre>";
        echo "<pre>";
        print_r($p2);
        echo "</pre>";
        echo "<pre>";
        print_r($p3);
        echo "</pre>";
        echo "<pre>";
        print_r($p4);
        echo "</pre>";

    ?>
    </body>
</html>