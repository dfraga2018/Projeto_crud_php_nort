<?php 
	include_once("cima.php");
	include_once("conexao.php");
	include_once("base.php");
    $conexao = new BancoDeDados ("localhost","root","","northwind");
    $BaseDto = new BaseDto($conexao);
?>

        <table class="table table-striped table-bordered">
            <tr>
                <td>ID Território</td>
                <td>Descrição</td>
                <td>ID Região</td>
                <td>Ações</td>
            </tr>
            <?php
                $ters = $BaseDto->territoriolista();
                foreach ($ters as $ter) :
            ?>

                <tr>
                    <td><?=$ter["IDTerritorio"]?></td>
                    <td><?=$ter["DescricaoTerritorio"]?></td>
                    <td><?=$ter["IDRegiao"]?></td>

                    <td>
                            <form class="" action = "#" method="post">
								<input type="hidden" name="IDRegiao"  value="<?=$ter['IDTerritorio']?>"/>
								<button class="btn btn-default">update</button>
							</form>
							<form class="" action = "#" method="post">
								<input type="hidden" name="IDRegiao" value="<?=$ter['IDTerritorio']?>"/>
								<button class="btn btn-danger">delete</button>
							</form>
                    </td>
                </tr>
            <?php
                endforeach
            ?>
        </table>
 