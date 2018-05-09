<?php
	include_once("conexao.php");
	include_once("base.php");
	$conexao = new BancoDeDados ("localhost", "root", "unidavi", "northwind");
	$BaseDto = new BaseDto($conexao);

	$idreg = $_POST['idreg'];
	$nomereg = $_POST['descricaoregiaoreg'];

	$atualizar = $BaseDto->regiaoatualizar($idreg,$nomereg);
    if($atualizar) {
        ?>
       <script>
            window.location.href = 'reg-l.php';
        </script>
        <?php
        } else {
        ?>
        <script>
            alert("Erro!");
            window.location.href = 'reg-l.php';
        </script>
        <?php
        }
    ?>