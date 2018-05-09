<?php
include_once("conexao.php");
include_once("base.php");
$conexao = new BancoDeDados("localhost","root","","northwind");
$BaseDto = new BaseDto($conexao);
?>
<?php
	$idfun =$_POST['idfun'];
	$sobrenomefun =$_POST['sobrenomefun'];
	$nomefun =$_POST['nomefun'];
	$titulofun =$_POST['titulofun'];
    $titulocortesiafun = $_POST['titulocortesiafun'];
    $nascimentofun = $_POST['nascimentofun'];
    $admissaofun = $_POST['admissaofun'];
    $enderecofun = $_POST['enderecofun'];
    $cidadefun = $_POST['cidadefun'];
    $regiaofun = $_POST['regiaofun'];
    $cepfun = $_POST['cepfun'];
    $paisfun = $_POST['paisfun'];
    $telefonefun = $_POST['telefonefun'];
    $extensaofun = $_POST['extensaofun'];
    $notasfun = $_POST['notasfun'];
    $cadastrar = $BaseDto->funcionariocadastrar($idfun, $sobrenomefun, $nomefun, $titulofun, $titulocortesiafun, $nascimentofun, $admissaofun, $enderecofun, $cidadefun, $regiaofun, $cepfun, $paisfun, $telefonefun, $extensaofun, $notasfun);
     if($cadastrar) {
       ?>
      <script>
           window.location.href = 'fun-l.php';
       </script>
       <?php
       } else {
       ?>
       <script>
           alert("Erro!");
           window.location.href = 'fun-l.php';
       </script>
       <?php
       }
   ?>


