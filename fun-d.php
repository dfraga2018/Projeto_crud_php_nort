<?php

    include_once("conexao.php");
    include_once("base.php");
    $conexao = new BancoDeDados ("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);
    $idfun = $_POST['IDFuncionario'];
    $BaseDto->funcionariodelete($idfun);
?>
 <script> window.location.href = 'fun-l.php'; </script>
