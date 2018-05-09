<?php
include_once("cima.php");
include_once("conexao.php");
include_once("base.php");
 $conexao = new BancoDeDados('localhost', 'root', 'unidavi', 'northwind');
 $BaseDto = new BaseDto($conexao);
  $idfun = $_POST["IDFuncionario"];
  $fun = $BaseDto->funcionariobuscar($idfun);
?>

  <h1 class="my-4 ">Update Funcionário</h1>
  <form method="POST" action="fun-u.php">
    <div class="form-row">
      <div> <input name="idfun" type="hidden" class="form-control" id="idfuncionario" value="<?=$fun['IDFuncionario']?>"> </div>
      <div class="form-group my-4 mx-3 col-md-3">
        <label for="sobrenome">Sobrenome</label>
        <input name="sobrenomefun" type="text" class="form-control" id="sobrenome" value="<?=$fun['Sobrenome']?>" >
      </div>
      <div class="form-group mx-3  my-4 col-md-2">
        <label for="nome">Nome</label>
        <input name="nomefun" type="text" class="form-control" id="nome" value="<?=$fun['Nome']?>">
      </div>
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="datanascimento">Nascimento</label>
        <input name="nascimentofun" type="date" class="form-control" id="datanascimento"  >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="titulo">Título</label>
        <input name="titulofun" type="text" class="form-control" id="titulo" value="<?=$fun['Titulo']?>"  >
      </div>
      <div class="form-group mx-3  my-4 col-md-3">
        <label for="titulocortesia">Título de Cortesia</label>
        <input name="titulocortesiafun" type="text" class="form-control" id="titulocortesia" value="<?=$fun['TituloCortesia']?>" >
      </div>
   
      <div class="form-group mx-3  my-4 col-md-2">
        <label for="dataadmissao">Data de Admissão</label>
        <input name="admissaofun" type="date" class="form-control" id="dataadmissao"  >
      </div>
      <div class="form-group mx-3  my-4 col-md-2">
        <label for="telefone">Telefone</label>
        <input name="telefonefun" type="tel" class="form-control" id="telefone"  value="<?=$fun['TelefoneResidencial']?>" >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="endereco">Endereço</label>
        <input name="enderecofun" type="text" class="form-control" id="endereco"  value="<?=$fun['Endereco']?>" >
      </div>
      <div class="form-group mx-3 my-4 col-md-3">
        <label for="cidade">Cidade</label>
        <input name="cidadefun" type="text" class="form-control" id="cidade" value="<?=$fun['Cidade']?>" >
      </div>
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="cep">CEP</label>
        <input name="cepfun" type="text" class="form-control" id="cep" value="<?=$fun['Cep']?>">
      </div>
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="pais">Pais</label>
        <input name="paisfun" type="text" class="form-control" id="pais" value="<?=$fun['Pais']?>">
      </div>
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="regiao">Regiao</label>
          <select name="regiaofun" id="regiao" class="form-control" >
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
    <div class="form-row">
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="extensao">Extensão</label>
        <input name="extensaofun" type="text" class="form-control" id="extensao" value="<?=$fun['Extensao']?>" >
      </div>
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="notas">Notas</label>
        <input name="notasfun" type="text" class="form-control" id="notas" value="<?=$fun['Notas']?>" >
      </div>
    </div>
    <button type="submit" class="my-4 mx-3 btn btn-default">Update</button>
   </div>
  