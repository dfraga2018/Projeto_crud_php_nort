<?php

   class BaseDto{
		private $database;
		public function __construct($conexao){
			$this->database = $conexao;
        }
        //listar funcionarios
        public function funcionariolista() {
            $funs = array();
            $resultado = mysqli_query($this->database->getConexao(), "select * from funcionarios");
            while ($fun = mysqli_fetch_assoc($resultado)) {
                array_push($funs, $fun);
            }
            return $funs;	
        }
        //listar regiao
        public function regiaolista() {
            $regs = array();
            $resultado = mysqli_query($this->database->getConexao(), "select * from regiao");
            while ($reg = mysqli_fetch_assoc($resultado)) {
                array_push($regs, $reg);
            }
            return $regs;
        }
        //listar territorio
        public function territoriolista() {
            $ters = array();	
            $sql = "select * from territorios";
            $resultado = mysqli_query($this->database->getConexao(), $sql);	
            while ($ter = mysqli_fetch_assoc($resultado)) {
                array_push($ters, $ter);
            }	
            return $ters;
        }
        //listar funcionario territorio
		function funcionarioterritoriolista() {
			$funs = array();
			$sql = "select * from funcionarios_territorios tb inner join territorios t on tb.IDTerritorio = t.IDTerritorio inner join funcionarios f on tb.IDFuncionario = f.IDFuncionario ";
			$resultado = mysqli_query($this->database->getConexao(),$sql);
			while ($fun = mysqli_fetch_assoc($resultado)) {
				array_push($funs, $fun);
			}
			return $funs;	
        }
        //cadastar funcionario
        public function funcionariocadastrar($idfun, $sobrenomefun, $nomefun, $titulofun, $titulocortesiafun, $nascimentofun, $admissaofun, $enderecofun, $cidadefun, $regiaofun, $cepfun, $paisfun, $telefonefun, $extensaofun, $notasfun){
			$sql = "insert into funcionarios(IDFuncionario, Sobrenome, Nome, Titulo, TituloCortesia, DataNac, DataAdmissao, Endereco, Cidade, Regiao, Cep, Pais, TelefoneResidencial, Extensao, Notas) values ('$idfun','$sobrenomefun','$nomefun','$titulofun','$titulocortesiafun','$nascimentofun','$admissaofun','$enderecofun','$cidadefun','$regiaofun','$cepfun','$paisfun','$telefonefun','$extensaofun','$notasfun')";
            return mysqli_query($this->database->getConexao(),$sql);
		}
	    //cadastar regiao
        public function regiaocadastra($idreg,$descreg){
            $sql = "insert into regiao(IDRegiao, DescricaoRegiao ) values ('$idreg','$descreg')";
            return mysqli_query($this->database->getConexao(),$sql);
        }
        //cadastrar territorio
        public function territoriocadastra($idter,$descter,$regter){
            $sql = "insert into territorios(IDTerritorio, DescricaoTerritorio, IDRegiao ) values ('$idter','$descter','$regter')";
            return mysqli_query($this->database->getConexao(),$sql);
        }
        //deletar funcionarios
        public function funcionariodelete($idfun) {
			$sql = "delete from `funcionarios` where `funcionarios`.`IDFuncionario` = {$idfun}";
			mysqli_query($this->database->getConexao(), $sql);
        }
        //buscar funcionario
        public function funcionariobuscar($idfun){
            $sql = "select * from funcionarios where IDFuncionario = '{$idfun}'";
            $resultado = mysqli_query($this->database->getConexao(),$sql);
            return mysqli_fetch_assoc($resultado);
        }
        //deletar regiao
        public function regiaodelete($idreg) {
			$sql = "delete from `regiao` where `regiao`.`IDRegiao` = {$idreg}";
			mysqli_query($this->database->getConexao(), $sql);
        }
        //buscar regiao
        public function regiaobuscar($idreg){
            $sql = "select * from regiao where IDRegiao = '{$idreg}'";
            $resultado = mysqli_query($this->database->getConexao(),$sql);
            return mysqli_fetch_assoc($resultado); 
         }
         //delete territorio
         public function territoriodelete($idter) {
            $sql = "delete from `territorios` where `territorios`.`IDTerritorio` = {$idter}";
            mysqli_query($this->database->getConexao(), $sql);
        }		
        //buscar territorio
        public function territoriobuscar($idter){
            $sql = "select * from territorios where IDTerritorio = '{$idter}'";
            $resultado = mysqli_query($this->database->getConexao(),$sql);
            return mysqli_fetch_assoc($resultado);
        }
        //atualizar funcionario
        public function funcionarioatualizar($idfun, $sobrenomefun, $nomefun, $titulofun, $titulocortesiafun, $nascimentofun, $admissaofun, $enderecofun, $cidadefun, $regiaofun, $cepfun, $paisfun, $telefonefun, $extensaofun, $notasfun){
            $sql = "update funcionarios set Sobrenome='{$sobrenomefun}', Nome='{$nomefun}', Titulo='{$titulofun}', TituloCortesia='{$titulocortesiafun}', DataNac='{$nascimentofun}', DataAdmissao='{$admissaofun}', Endereco='{$enderecofun}', Cidade='{$cidadefun}', Regiao='{$regiaofun}', Cep='{$cepfun}', Pais='{$paisfun}', TelefoneResidencial='{$telefonefun}', Extensao='{$extensaofun}', Notas='{$notasfun}'  WHERE   IDFuncionario={$idfun} ";
			  return mysqli_query($this->database->getConexao(), $sql);

        }
        //atualizar regiao
        public function regiaoatualizar($idreg, $nomereg){
            $sql = "update regiao set DescricaoRegiao='{$nomereg}' where IDRegiao = {$idreg}";
            return mysqli_query($this->database->getConexao(), $sql);
        }
        //atualiar territorio
        public function territorioatualizar($idter, $descter, $regter){	
            $sql = "update territorios set DescricaoTerritorio = '{$descter}', IDRegiao='{$regter}' where IDTerritorio = {$idter}";
            return mysqli_query($this->database->getConexao(), $sql);	
        }
    }