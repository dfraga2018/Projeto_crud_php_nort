<?php 
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-database.php");
?>

<div>

    <form class="form-horizontal" action="/funcionario-lista.php">

    <div class="form-group">
        <label class="control-label col-sm-2" for="nome">Nome:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="Enter Nome">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="nome">SobreNome:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="sobrenome" placeholder="Enter SobreNome">
        </div>
    </div>

     <div class="form-group">
        <label class="control-label col-sm-2" for="titulo">Titulo(cargo):</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="titulo" placeholder="Enter titulo">
        </div>
    </div>

     <div class="form-group">
        <label class="control-label col-sm-2" for="titulo">Titulo:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="titulo" placeholder="Enter titulo">
        </div>
    </div>

     <div class="form-group">
        <label class="control-label col-sm-2" for="titulocortesia">TituloCortesia:</label>
        <div class="col-sm-10">
        <select multiple>
            <option value="Mrs">Mrs</option>
            <option value="Dr">Dr</option>
        </select>
        </div>
    </div>

    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        </div>
    </div>

    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>

    </form>

</div>

<P> CADASTRO DE FUNCIONARIO </P>
<P> -----------------------</P>
<P> DELETAR FUNCIONARIOS </P>

<?php 
    include_once("rodape.php"); 
?>