<?php 
	class conexao{
		private $dsn;
		private $array;
		private $numRows;
		private $query;
		private $retornoAll;

		public function __construct(){

			$this->dsn = new PDO("mysql:dbname=bancoacon;host=localhost","JaromAdmin","toor@toor");

		}
		public function query2($sql){

			$query = $this->dsn->query($sql);
			
		}

		public function query($sql){

			$query = $this->dsn->query($sql);
			$this->numRows = $query->rowcount();
			$this->array = $query->fetch();
			$this->retornoAll = $query->fetchAll();

			
			
		}
		public function getRetorno(){

			return $this->array;


		} 
		public function contador(){

			if($this->numRows == null){

					return $this->numRows = 'vazio';

				}
				else{
					return $this->numRows;
				}

			}

	public function retornoAll(){

		return $this->retornoAll;

	}
}


?>