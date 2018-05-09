<?php
    class BancoDeDados{
        private $conn;
        public function __construct($host, $user, $pass, $database){
            $this->conn = mysqli_connect($host, $user, $pass, $database);
        } 
        public function getConexao(){ 
            return $this->conn;
        }
    }
    
