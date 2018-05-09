<?php 
	include_once("cima.php");
	include_once("conexao.php");
	include_once("base.php");
	$conexao = new BancoDeDados('localhost', 'root', 'unidavi', 'northwind');
	$BaseDto = new BaseDto($conexao);
    $idreg = $_POST["IDRegiao"];
    $reg = $BaseDto->regiaobuscar($idreg);
 ?>
	<form action="reg-d.php" method="post">
      <input type="hidden" name="IDRegiao" value="<?=$reg['IDRegiao']?>">
		<p class="alert alert-warning col-md-4"> Nome regiao a ser deletada</p>
		<p>Nome: <?=$reg['IDRegiao']?></p>
        <hr>
		<button class="btn btn-default">delete</button>
     </form>
