<?php
	include_once("conexao.php");
	include_once("base.php");
	$conexao = new BancoDeDados ("localhost","root","","northwind");
    $BaseDto = new BaseDto($conexao);
    
	$idter = $_POST['IDTerritorio'];
	$BaseDto->territoriodelete($idter);
    ?>

    <script>  window.location.href = 'ter-l.php'; </script>