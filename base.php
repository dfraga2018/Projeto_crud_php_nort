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
	   


    }