<?php
class conexaoMysql{
	 private $host, $user, $pass, $dbName, $con;
	 
	 public function __construct(){
		 $this->host = 'localhost';
		 $this->user = 'root';
		 $this->pass = '';
		 $this->dbName = 'montaja';
	 }
	 public function conexao(){
		 $this->con = new mysqli($this->host, $this->user, $this->pass, $this->dbName);
	 }
	 public function execSql($sql){
		 $this->conexao();
		 return $query = $this->con->query($sql);
                 $this->con->close();
	 }
}






