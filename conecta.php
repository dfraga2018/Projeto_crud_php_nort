<?php 
    $conexao = mysqli_connect("localhost", "root", "", "norte"); 

if (mysqli_connect_error()) {
?>
<html>
  <body>
    <title>Erro ao Conectar com o Banco de Dados</title>
  </body>
  <body>
    Erro ao conectar com o banco de dados: <?php echo mysqli_connect_error()?>
  </body>
</html>
<?php
  die();
}
?>