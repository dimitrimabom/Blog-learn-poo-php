<?php

	namespace App;

	use \PDO;

	class Database
	{

		private $db_name;
		private $user;
		private $pass;
		private $host;
		private $pdo;
		
		function __construct($db_name, $user = 'root', $pass = '', $host = 'localhost') {
			
			$this->db_name = $db_name;
			$this->user = $user;
			$this->pass = $pass;
			$this->host = $host;

		}

		private function getPDO() {
			if ($this->pdo === null) {
				$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->pdo = $pdo;
			}

			return $this->pdo;
		}

		public function query($statement) {
			$req = $this->getPDO()->query($statement);
			$datas = $req->fetchAll(PDO::FETCH_ASSOC);

			return $datas;
		}
	}
?>