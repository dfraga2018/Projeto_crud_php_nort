<?php 

    include_once("cima.php");
    include_once("conexao.php");
    include_once("base.php");
    $conexao = new BancoDeDados("localhost","root","unidavi","northwind");
    $BaseDto = new BaseDto($conexao);

?>
		<h1>Nova Região</h1>
		<form method="post" action="reg-c.php">
		  <div class="form-row">
				<div class="form-group  col-md-1">
					<label >ID</label>
					<input name="idreg" type="text" class="form-control" >
				</div>
			</div>
                <div class="form-row">
				<div class="form-group m col-md-2">
					<label >Nome</label>
					<input name="descreg" type="text" class="form-control" >
				</div>
		  </div>
		    <button type="submit" class=" btn btn-default">Cadastrar</button>
		</form>





