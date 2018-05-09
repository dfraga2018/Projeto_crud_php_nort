<?php 

	include_once("cima.php");
	include_once("conexao.php");
	include_once("base.php");
    $conexao = new BancoDeDados ("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);

?>
		<table class="table table-striped table-bordered">
			<tr>
				<td>id funcionário</td>
				<td>id territorio</td>
			  </tr>

			  <?php
				  $funs = $BaseDto->funcionarioterritoriolista();
				  foreach ($funs as $fun) :
			  ?>
				
				  <tr>
					  <td><?=$fun["IDFuncionario"]?></td>
					  <td><?=$fun["IDTerritorio"]?></td>
				</tr>

				  <?php
					endforeach
				  ?>
		</table>

