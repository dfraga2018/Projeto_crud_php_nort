<?php

    include_once("cima.php");
    include_once("conexao.php");
    include_once("base.php");
    $conexao = new BancoDeDados("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);
    $idreg = $_POST['IDRegiao'];
    $reg = $BaseDto->regiaobuscar($idreg);

?>
  <h1>Update Regiao</h1>
  <form method="POST" action="reg-u.php">
        <div> <input  name="idreg" type="hidden" class="form-control"  value="<?=$reg['IDRegiao']?>"> </div>
        <div class="form-row">
      <div class="form-group  col-md-3">
        <label >Nome</label>
        <input  name="descricaoregiaoreg" type="text" class="form-control"  value="<?=$reg['DescricaoRegiao']?>"  >
      </div>
    </div>
      <button type="submit" class=" btn btn-default">update</button>
  </form>

