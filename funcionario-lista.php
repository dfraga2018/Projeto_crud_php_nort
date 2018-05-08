<?php 
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-database.php");
?>

    <table class="table table-striped table-bordered">
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Titulo</th>
            <th>TituloCortesia</th>
            <th>DataNascimento</th>
            <th>DataAdmissao</th>
            <th>Endereco</th>
            <th>Cidade</th>
            <th>Regiao</th>
            <th>Cep</th>
            <th>Pais</th>
            <th>TelefoneResidencial</th>
            <th>Extensao</th>
            <th>Notas</th>
            <th>Reportase</th>
            <th>FotoCaminho</th>
            <th>Acao</th>
        </tr>

        <?php
            $funcionarios = listaFuncionarios($conexao);
            foreach ($funcionarios as $funcionario) :
        ?>
                <tr>
                    <td><?=$funcionario["Nome"]?></td>
                    <td><?=$funcionario["Sobrenome"]?></td>
                    <td><?=$funcionario["Titulo"]?></td>
                    <td><?=$funcionario["TituloCortesia"]?></td>
                    <td><?=$funcionario["DataNac"]?></td>
                    <td><?=$funcionario["DataAdmissao"]?></td>
                    <td><?=$funcionario["Endereco"]?></td>
                    <td><?=$funcionario["Cidade"]?></td>
                    <td><?=$funcionario["Regiao"]?></td>
                    <td><?=$funcionario["Cep"]?></td>
                    <td><?=$funcionario["Pais"]?></td>
                    <td><?=$funcionario["TelefoneResidencial"]?></td>
                    <td><?=$funcionario["Extensao"]?></td>

                     <td ><div class="Notas"><?=$funcionario["Notas"]?></div></td>

                    <td><?=$funcionario["Reportase"]?></td>
                    <td><?=$funcionario["FotoCaminho"]?></td>
                   
                    <td>
                        <a class="btn btn-primary" href="funcionario-update-form.php">U</a>
                    </td>
                </tr>
                
        <?php
            endforeach
        ?>
    </table>

<?php 
    include_once("rodape.php"); 
?>