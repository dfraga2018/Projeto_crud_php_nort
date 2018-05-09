<?php

    include_once("cima.php");
    include_once("conexao.php");
    include_once("base.php");
    $conexao = new BancoDeDados("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);
?>
  <h1>Novo Território</h1>
  <form method="POST" action="ter-c.php">
    <div class="form-row">
      <div class="form-group  col-md-2">
        <label >ID</label>
        <input name="idter" type="text" class="form-control"   >
      </div>
      <div class="form-group  col-md-2">
        <label >Nome</label>
        <input name="nometer" type="text" class="form-control"  >
      </div>
    </div>
      <div class="form-row">
      <div class="form-group  col-md-2">
        <label >Regiao</label>
        <select name="regiaoter"  class="form-control">
          <?php
              $regs = $BaseDto->regiaolista();
            foreach ($regs as $reg) :
            ?>
          <option value="<?=$reg["IDRegiao"]?>"><?=$reg["DescricaoRegiao"]?></option>
          <?php
            endforeach
            ?>
        </select>
   	  </div>
     </div>
        <button type="submit" class="btn btn-default">Cadastrar</button>
  </form>

