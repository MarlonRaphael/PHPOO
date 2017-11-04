<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso POO PHP #12b - Polimorfismo em PHP</title>
    </head>
    <body>
        <pre>
    <?php
        require_once('Mamife.php');
        require_once('Reptil.php');
        require_once('Peixe.php');
        require_once('Ave.php');
        require_once('Canguru.php');
        require_once('Cachorro.php');
        require_once('Cobra.php');
        require_once('Tartaruga.php');
        require_once('Goldfish.php');
        require_once('Arara.php');

        $m = new Mamifero();
        $r  = new Reptil();
        $p = new Peixe();
        $a = new Ave();
        $c = new Canguru();
        $k = new Cachorro();
        $t = new Tartaruga();
        $l = new Cobra();
        $g = new Goldfish();
        $b = new Arara();

        echo "<p>Mamífero</p>";
        $m->setPeso(85.3);
        $m->setIdade(2);
        $m->setMembros(4);
        $m->setCorPelo('Marrom');
        $m->locomover();
        $m->alimentar();
        $m->emitirSom();

        echo "<p>Réptil</p>";
        $r->setPeso(10);
        $r->setIdade(100);
        $r->setMembros(4);
        $r->setCorEscama('Esverdeada');
        $r->locomover();
        $r->alimentar();
        $r->emitirSom();

        echo "<p>Peixe</p>";
        $p->setPeso(0.35);
        $p->setIdade(1);
        $p->setMembros(2);
        $p->setCorEscama('Amarela');
        $p->locomover();
        $p->alimentar();
        $p->emitirSom();
        $p->soltarBolha();

        echo "<p>Ave</p>";
        $a->setPeso(0.89);
        $a->setIdade(2);
        $a->setMembros(2);
        $a->setCorPena('Azul');
        $a->locomover();
        $a->alimentar();
        $a->emitirSom();
        $a->fazerNinho();

        echo "<br>";
        echo "<br>";

        $c->locomover();
        $k->locomover();
        $t->locomover();

        echo "<br>";
        echo "<br>";

        $c->emitirSom();
        $k->emitirSom();
        $t->emitirSom();

        echo "<br>";
        echo "<br>";

        print_r($m);
        print_r($r);
        print_r($p);
        print_r($a);

    ?>
        </pre>
    </body>
</html>