<?php
    include_once("cima.php");
    include_once("conexao.php");
    include_once("base.php");
    $conexao = new BancoDeDados("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);
    $idreg = $_POST['IDRegiao'];
    $reg = $BaseDto->regiaobuscar($idreg);
?>

  <h1 class="my-4 ">UpdateRegiao</h1>
  <form method="POST" action="reg-u.php">
        <div> <input  name="idreg" type="hidden" class="form-control" id="IDRegiao" value="<?=$reg['IDRegiao']?>"> </div>
        <div class="form-row">
      <div class="form-group mx-3  my-4 col-md-3">
        <label for="nome">Nome</label>
        <input  name="descricaoregiaoreg" type="text" class="form-control" id="nome" value="<?=$reg['DescricaoRegiao']?>"  >
      </div>
    </div>
      <button type="submit" class="my-4 mx-3 btn btn-default">update</button>
  </form>

