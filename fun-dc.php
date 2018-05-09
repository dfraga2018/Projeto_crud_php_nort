<?php 
include_once("cima.php");
include_once("conexao.php");
include_once("base.php");
 $conexao = new BancoDeDados('localhost', 'root', 'unidavi', 'northwind');
 $BaseDto = new BaseDto($conexao);

  $idfun = $_POST["IDFuncionario"];
  $fun = $BaseDto->funcionariobuscar($idfun);
 ?>

	<form action="fun-d.php" method="post">
      <input type="hidden" name="IDFuncionario" value="<?=$fun['IDFuncionario']?>">
		<p class="alert alert-warning col-md-4"> Nome do funcionario a ser deletado</p>
		<p>Nome: <?=$fun['Nome']?></p>
        <hr>
		<button class="btn btn-default">delete</button>
     </form>