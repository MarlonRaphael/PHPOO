    <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso POO PHP #11b - Herança (Parte 2)</title>
    </head>
    <body>
    <?php
        require_once('Visitante.php');
        require_once('Aluno.php');
        require_once('Bolsista.php');
        require_once('Tecnico.php');
        require_once('Professor.php');

        $v1 = new Visitante();
        $a1 = new Aluno();
        $b1 = new Bolsista();
        $t1 = new Tecnico();
        $p1 = new Professor();

        $v1->setNome('Marlon Raphael');
        $v1->setIdade(23);
        $v1->setSexo('Masculino');

        $a1->setNome('Wagner Ricardo');
        $a1->setIdade(30);
        $a1->setSexo('Masculino');
        $a1->setCurso('Engenharia de Software');
        $a1->setMatricula(1549864);

        $b1->setNome('Maria Rosa');
        $b1->setIdade(54);
        $b1->setSexo('Feminino');
        $b1->setCurso('Pedagogia');
        $b1->setMatricula(4582167);
        $b1->setBolsa(12.5);

        $t1->setNome('William Gabriel');
        $t1->setIdade(15);
        $t1->setSexo('Feminino');
        $t1->setCurso('Games');
        $t1->setMatricula(1684743);
        $t1->setRegistroProfissional(157157);

        $p1->setNome('Gustavo Guanabara');
        $p1->setIdade(32);
        $p1->setSexo('Masculino');
        $p1->setEspecialidade('Professor');
        $p1->setSalario(3456.00);

        echo "<pre>";
        print_r($v1);

        $a1->pagarMensalidade();
        print_r($a1);

        $b1->pagarMensalidade();
        $b1->renovarBolsa();
        print_r($b1);

        $t1->pagarMensalidade();
        print_r($t1);

        $p1->receberAumento(564.44);
        print_r($p1);

        echo "</pre>";
    ?>
    </body>
</html>