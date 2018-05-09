<?php 
	include_once("cima.php");
	include_once("conexao.php");
	include_once("base.php");
	$conexao = new BancoDeDados ("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);
    

	$idter = $_POST["IDTerritorio"];
	$ter = $BaseDto->territoriobuscar($idter);

 ?>

	<form action="ter-d.php" method="post">
      <input type="hidden" name="IDTerritorio" value="<?=$ter['IDTerritorio']?>">
      <p class="alert alert-warning col-md-4"> Nome do territorio a ser deletado</p>
		<p>Nome: <?=$ter['IDTerritorio']?></p>
        <hr>
		<button class="btn btn-default">delete</button>
     </form>

