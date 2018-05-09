<?php
include_once("cima.php");
include_once("conexao.php");
include_once("base.php");
$conexao = new BancoDeDados("localhost","root","","northwind");
$BaseDto = new BaseDto($conexao);
?>

  <h1 class="my-4 ">Novo Funcionário</h1>
  <form method="POST" action="fun-c.php">
    <div class="form-row">
      <div class="form-group my-4 mx-3 col-md-1">
        <label for="idfuncionario">ID</label>
        <input name="idfun" type="text" class="form-control" id="idfuncionario"  >
      </div>
      <div class="form-group my-4 mx-3 col-md-3">
        <label for="sobrenome">Sobrenome</label>
        <input name="sobrenomefun" type="text" class="form-control" id="sobrenome"  >
      </div>
      <div class="form-group mx-3  my-4 col-md-2">
        <label for="nome">Nome</label>
        <input name="nomefun" type="text" class="form-control" id="nome">
      </div>
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="datanascimento">Nascimento</label>
        <input name="nascimentofun" type="text" class="form-control" id="datanascimento" >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="titulo">Título</label>
        <input name="titulofun" type="text" class="form-control" id="titulo"  >
      </div>
      <div class="form-group mx-3  my-4 col-md-3">
        <label for="titulocortesia">Título de Cortesia</label>
        <input name="titulocortesiafun" type="text" class="form-control" id="titulocortesia"  >
      </div>
   
      <div class="form-group mx-3  my-4 col-md-2">
        <label for="dataadmissao">Data de Admissão</label>
        <input name="admissaofun" type="text" class="form-control" id="dataadmissao" >
      </div>
      <div class="form-group mx-3  my-4 col-md-2">
        <label for="telefone">Telefone</label>
        <input name="telefonefun" type="tel" class="form-control" id="telefone"  >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="endereco">Endereço</label>
        <input name="enderecofun" type="text" class="form-control" id="endereco"  >
      </div>
      <div class="form-group mx-3 my-4 col-md-3">
        <label for="cidade">Cidade</label>
        <input name="cidadefun" type="text" class="form-control" id="cidade" >
      </div>
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="cep">CEP</label>
        <input name="cepfun" type="text" class="form-control" id="cep">
      </div>
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="pais">Pais</label>
        <input name="paisfun" type="text" class="form-control" id="pais" >
      </div>
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="regiao">Regiao</label>
          <select name="regiaofun" id="regiao" class="form-control">
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
        <input name="extensaofun" type="text" class="form-control" id="extensao"  >
      </div>
      <div class="form-group mx-3 my-4 col-md-2">
        <label for="notas">Notas</label>
        <input name="notasfun" type="text" class="form-control" id="notas" >
      </div>
    </div>
    <button type="submit" class="my-4 mx-3 btn btn-default">Cadastrar</button>
   </div>
  