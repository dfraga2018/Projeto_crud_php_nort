<?php

	include_once("conexao.php");
	include_once("base.php");

	$conexao = new BancoDeDados ("localhost", "root", "unidavi", "northwind");
	$BaseDto = new BaseDto($conexao);

	$idter = $_POST['idter'];
	$descter = $_POST['descter'];
    $regter = $_POST['regter'];

	$atualizar = $BaseDto->territorioatualizar($idter,$descter,$regter);
    if($atualizar) {
        ?>
       <script>
            window.location.href = 'ter-l.php';
        </script>
        <?php
        } else {
        ?>
        <script>
            alert("Erro!");
            window.location.href = 'ter-l.php';
        </script>
        <?php
        }
    ?>