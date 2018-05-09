<?php
include_once("cima.php");
include_once("conexao.php");
include_once("base.php");
$conexao = new BancoDeDados("localhost","root","unidavi","northwind");
$BaseDto = new BaseDto($conexao);
?>

  <h1 class="my-4 ">Novo Território</h1>
  <form method="POST" action="ter-c.php">
    <div class="form-row">
      <div class="form-group my-4 mx-3 col-md-2">
        <label for="idterritorio">ID</label>
        <input name="idter" type="text" class="form-control" id="idterritorio"  >
      </div>
      <div class="form-group my-4 mx-3 col-md-2">
        <label for="nome">Nome</label>
        <input name="nometer" type="text" class="form-control" id="nome" >
      </div>
    </div>
      <div class="form-row">
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="regiao">Regiao</label>
        <select name="regiaoter" id="regiao" class="form-control">
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
        <button type="submit" class="my-4 mx-3 btn btn-default">Cadastrar</button>
  </form>

