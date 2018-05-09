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
        function regiaocadastra($idreg,$descreg){
            $sql = "insert into regiao(IDRegiao, DescricaoRegiao ) values ('$idreg','$descreg')";
            return mysqli_query($this->database->getConexao(),$sql);
        }
        //cadastrar territorio
        function territoriocadastra($idter,$descter,$regter){
            $sql = "insert into territorios(IDTerritorio, DescricaoTerritorio, IDRegiao ) values ('$idter','$descter','$regter')";
            return mysqli_query($this->database->getConexao(),$sql);
        }

    }