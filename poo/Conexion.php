<?php
	
	require "config.php";
	/**
	* conexion a la base de datos
	*/
	class Conexion
	{
		
		protected $conexion_db;

		public function Conexion()
		{
			
			$this->conexion_db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			if ($this->conexion_db->connect_errno)
			{
				
				echo "Fallo al conectar a Mysql: " . $this->conexion_db->connect_errno;
				return;

			}

			$this->conexion_db->set_charset(DB_CHARSET);

		}


	}


?>