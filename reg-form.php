<?php 
include_once("cima.php");
include_once("conexao.php");
include_once("base.php");
$conexao = new BancoDeDados("localhost","root","unidavi","northwind");
$BaseDto = new BaseDto($conexao);
?>

		<h1 class="my-4 ">Nova Região</h1>
		<form method="post" action="reg-c.php">
		  <div class="form-row">
				<div class="form-group my-4 mx-3 col-md-2">
					<label for="inputEmail4">ID</label>
					<input name="idreg" type="text" class="form-control" id="inputEmail4">
				</div>
			</div>
                <div class="form-row">
				<div class="form-group my-4 mx-3 col-md-2">
					<label for="inputPassword4">Nome</label>
					<input name="descreg" type="text" class="form-control" id="inputPassword4">
				</div>
		  </div>

		    <button type="submit" class="my-4 mx-3 btn btn-default">Cadastrar</button>
		</form>





