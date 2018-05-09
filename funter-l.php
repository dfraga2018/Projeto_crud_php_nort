<?php 
	include_once("cima.php");
	include_once("conexao.php");
	include_once("base.php");
    $conexao = new BancoDeDados ("localhost","root","","northwind");
    $BaseDto = new BaseDto($conexao);
?>

		<table class="table table-striped table-bordered">
			<tr>
				<td>IDFuncionário</td>
				<td>IDTerritorio</td>
				<td>Ações</td>
			  </tr>

			  <?php
				  $funs = $BaseDto->funcionarioterritoriolista();
				  foreach ($funs as $fun) :
			  ?>
				
				  <tr>
					  <td><?=$fun["IDFuncionario"]?></td>
					  <td><?=$fun["IDTerritorio"]?></td>
					  <td>
					  		<form class="" action = "#" method="post">
								<input type="hidden" name="IDRegiao"  value="<?=$fun['IDRegiao']?>"/>
								<input type="hidden" name="IDTerritorio"  value="<?=$fun['IDTerritorio']?>"/>
								<button class="btn btn-default">update</button>
							</form>
							<form class="" action = "#" method="post">
								<input type="hidden" name="IDRegiao" value="<?=$fun['IDRegiao']?>"/>
								<input type="hidden" name="IDTerritorio" value="<?=$fun['IDTerritorio']?>"/>
								<button class="btn btn-danger">delete</button>
							</form>
						</td>
				</tr>

				  <?php
					endforeach
				  ?>
		</table>

