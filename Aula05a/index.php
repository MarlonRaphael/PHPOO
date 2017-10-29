<!doctype html>
<html lang="pt-br">
    <head lang="pt-br">
    	<meta charset="utf-8">
        <title>Curso em vídeo - Aula 05A</title>
    </head>
    <body>
    	<?php 
    	   require_once ('ContaBanco.php');
//    	   echo "Hello World!";

			$p1 = new ContaBanco(); //Jubileu
			$p2 = new ContaBanco(); //Creuza

			$p1->abrirConta('cc');
			$p1->setDono('Jubileu');
			$p1->setNumConta();
			$p1->depositar(300);
			$p1->pagarMensal();
//			$p1->sacar(600);
			$p1->sacar(338);
			$p1->fecharConta();

			$p2->abrirConta('cp');
			$p2->setDono('Creuza');
			$p2->setNumConta();
			$p2->depositar(500);
			$p2->sacar(100);
			$p2->pagarMensal();
//			$p2->sacar(600);
			$p2->sacar(530.00);
			$p2->fecharConta();

    	   echo "<pre>";
    	   print_r($p1);
    	   echo "</pre>";

    	   echo "<pre>";
    	   print_r($p2);
    	   echo "</pre>";
    	?>
    </body>
</html>