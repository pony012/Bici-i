<?php
	/**
	* Conexion a la base de datos
	*/
	class ConexionMySQL
	{
		private $server;
		private $user;
		private $pass;
		private $db;
		public $mysqli;
		function __construct($server, $user, $pass, $db)
		{
			$this->server = $server;
			$this->user = $user;
			$this->pass = $pass;
			$this->db = $db;
			$this->openConnection();

		}

		private function openConnection(){
			$this->mysqli = new mysqli($this->server, $this->user, $this->pass, $this->db);
		}
	}
		
		/*
		if($mysqli->connect_error)
			echo "Error";
		else
			print_r($mysqli);
		*/
?>