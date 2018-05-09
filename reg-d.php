<?php
	include_once("conexao.php");
	include_once("base.php");
	$conexao = new BancoDeDados ("localhost","root","","northwind");
    $BaseDto = new BaseDto($conexao);
    
	$idreg = $_POST['IDRegiao'];
    $BaseDto->regiaodelete($idreg);
    
    ?>
    <script> window.location.href = 'reg-l.php'; </script>
