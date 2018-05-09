<?php
    include_once("cima.php");
    include_once("conexao.php");
    include_once("base.php");

    $conexao = new BancoDeDados("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);

    $idter = $_POST['IDTerritorio'];
    $ter = $BaseDto->territoriobuscar($idter);

?>

  <h1 class="my-4 ">Update Territrio</h1>
  <form method="POST" action="ter-u.php">
    <div class="form-row">
      <input  name="idter" type="hidden" class="form-control" id="IDRegiao" value="<?=$ter['IDTerritorio']?>">
      <div class="form-group mx-3  my-4 col-md-4">
        <label for="nome">Nome</label>
        <input  name="descter" type="text" class="form-control" id="nome" value="<?=$ter['DescricaoTerritorio']?>" >
      </div>

      <div class="form-group mx-3 my-4 col-md-3">
          <label for="regiao">Regiao</label>
          <select name="regter" id="regiao" class="form-control">
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


      <button type="submit" class="my-4 mx-3 btn btn-default">update</button>

		
  </form>

