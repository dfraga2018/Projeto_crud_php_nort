<?php
    include_once("conexao.php");
    include_once("base.php");
    $conexao = new BancoDeDados("localhost", "root", "unidavi", "northwind");
    $BaseDto = new BaseDto($conexao);
?>
<?php
  $idreg = $_POST['idreg'];
  $descreg = $_POST['descreg'];
  $cadastrar = $BaseDto->regiaocadastra($idreg,$descreg);
  if($cadastrar) {
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