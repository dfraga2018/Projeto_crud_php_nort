<?php 
	include_once("cima.php");
	include_once("conexao.php");
	include_once("base.php");
    $conexao = new BancoDeDados ("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);
?>


		<table class="table table-striped table-bordered ">
			<tr>
				<td>ID Região</td>
				<td>Descrição</td>
				<td>Acões</td>
				</tr>
			<?php
				$regs = $BaseDto->regiaolista();
				foreach ($regs as $reg) :
			?>
					<tr>
						<td><?=$reg["IDRegiao"]?></td>
						<td><?=$reg["DescricaoRegiao"]?></td>
						<td>

							<form class="" action = "reg-u-form.php" method="post">
								<input type="hidden" name="IDRegiao"  value="<?=$reg['IDRegiao']?>"/>
								<button class="btn btn-default">update</button>
							</form>
							<form class="" action = "reg-dc.php" method="post">
								<input type="hidden" name="IDRegiao" value="<?=$reg['IDRegiao']?>"/>
								<button class="btn btn-danger">delete</button>
							</form>

                        </td>
					</tr>
			<?php
				endforeach
			?>
		</table>
 