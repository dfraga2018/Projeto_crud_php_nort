<?php

    include_once("cima.php");
    include_once("conexao.php");
    include_once("base.php");
    $conexao = new BancoDeDados("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);
?>
  <h1>Novo Funcionário</h1>
  <form method="POST" action="fun-c.php">
    <div class="form-row">
      <div class="form-group col-md-1">
        <label >ID</label>
        <input name="idfun" type="text" class="form-control"   >
      </div>
      <div class="form-group  col-md-3">
        <label >Sobrenome</label>
        <input name="sobrenomefun" type="text" class="form-control"  >
      </div>
      <div class="form-group  col-md-2">
        <label>Nome</label>
        <input name="nomefun" type="text" class="form-control" >
      </div>
      <div class="form-group col-md-2">
        <label >Nascimento</label>
        <input name="nascimentofun" type="date" class="form-control"  >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group  col-md-2">
        <label >Título</label>
        <input name="titulofun" type="text" class="form-control"   >
      </div>
      <div class="form-group  col-md-3">
        <label >Título de Cortesia</label>
        <input name="titulocortesiafun" type="text" class="form-control"   >
      </div>
   
      <div class="form-group col-md-2">
        <label >Data de Admissão</label>
        <input name="admissaofun" type="date" class="form-control"  >
      </div>
      <div class="form-group  col-md-2">
        <label >Telefone</label>
        <input name="telefonefun" type="tel" class="form-control"  >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group  col-md-2">
        <label >Endereço</label>
        <input name="enderecofun" type="text" class="form-control"   >
      </div>
      <div class="form-group  col-md-3">
        <label >Cidade</label>
        <input name="cidadefun" type="text" class="form-control" >
      </div>
      <div class="form-group  col-md-2">
        <label >CEP</label>
        <input name="cepfun" type="text" class="form-control">
      </div>
      <div class="form-group  col-md-2">
        <label >Pais</label>
        <input name="paisfun" type="text" class="form-control" >
      </div>
    </div>
      <div class="form-row">
      <div class="form-group  col-md-2">
        <label>Regiao</label>
          <select name="regiaofun" class="form-control">
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
      <div class="form-group col-md-2">
        <label >Extensão</label>
        <input name="extensaofun" type="text" class="form-control"   >
      </div>
      <div class="form-group  col-md-2">
        <label >Notas</label>
        <input name="notasfun" type="text" class="form-control"  >
      </div>
    </div>
    <button type="submit" class=" btn btn-default">Cadastrar</button>
   </div>
  