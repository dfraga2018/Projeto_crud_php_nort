<?php
include_once("cima.php");
include_once("conexao.php");
include_once("base.php");
    $conexao = new BancoDeDados ("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);
?>

<table class="table table-striped table-bordered ">
        <tr>
            <td>IDFuncionário</td>
            <td>Sobrenome</td>
            <td>Nome</td>
            <td>Título</td>
            <td>Título Cortesia</td>
            <td>Data Nascimento</td>
            <td>Data Admissão</td>
            <td>Endereço</td>
            <td>Cidade</td>
            <td>Região</td>
            <td>CEP</td>
            <td>Pais</td>
            <td>Telefone</td>
            <td>Notas</td>
            <td>foto</td>
            <td>Reportase</td>
            <td>Ações</td>
        </tr>
        <?php
            $funs = $BaseDto->funcionariolista();
            foreach ($funs as $fun) :
        ?>
                <tr>
					<td><?=$fun["IDFuncionario"]?></td>
					<td><?=$fun["Sobrenome"]?></td>
					<td><?=$fun["Nome"]?></td>
					<td><?=$fun["Titulo"]?></td>
					<td><?=$fun["TituloCortesia"]?></td>
					<td><?=$fun["DataNac"]?></td>
					<td><?=$fun["DataAdmissao"]?></td>
					<td><?=$fun["Endereco"]?></td>
					<td><?=$fun["Cidade"]?></td>
					<td><?=$fun["Regiao"]?></td>
					<td><?=$fun["Cep"]?></td>
					<td><?=$fun["Pais"]?></td>
					<td><?=$fun["TelefoneResidencial"]?></td>
					<td><//?=$fun["Notas"]?></td>
					<td><//?=$fun["Foto"]?></td>
					<td><?=$fun["Reportase"]?></td>
                    <td>
							<form class="" action = "fun-u-form.php" method="post">
								<input type="hidden" name="IDFuncionario"  value="<?=$fun['IDFuncionario']?>"/>
								<button class="btn btn-default">update</button>
							</form>
							<form class="" action = "fun-dc.php" method="post">
								<input type="hidden" name="IDFuncionario" value="<?=$fun['IDFuncionario']?>"/>
								<button class="btn btn-danger">delete</button>
							</form>
                   </td>
                </tr>
        <?php
            endforeach
        ?>
    </table>
