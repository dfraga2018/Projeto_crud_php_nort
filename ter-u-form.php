<?php

    include_once("cima.php");
    include_once("conexao.php");
    include_once("base.php");
    $conexao = new BancoDeDados("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);
    $idter = $_POST['IDTerritorio'];
    $ter = $BaseDto->territoriobuscar($idter);

?>
  <h1>Update Territrio</h1>
  <form method="POST" action="ter-u.php">
    <div class="form-row">
      <input  name="idter" type="hidden" class="form-control"  value="<?=$ter['IDTerritorio']?>">
      <div class="form-group  col-md-4">
        <label >Nome</label>
        <input  name="descter" type="text" class="form-control"  value="<?=$ter['DescricaoTerritorio']?>" >
      </div>
      <div class="form-group  col-md-3">
          <label >Regiao</label>
          <select name="regter"  class="form-control">
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
      <button type="submit" class=" btn btn-default">update</button>
  </form>

