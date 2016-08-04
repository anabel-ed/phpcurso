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
			
			try
			{

				$this->conexion_db = new PDO('mysql:host=localhost; dbname=prueba', 'root', 'root');
				$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conexion_db->exec("SET CHARACTER SET utf8");
				return $this->conexion_db;


			}catch(Exception $e)
			{

				echo "La linea de error es: " . $e->getline();
			}



			/*$this->conexion_db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			if ($this->conexion_db->connect_errno)
			{
				
				echo "Fallo al conectar a Mysql: " . $this->conexion_db->connect_errno;
				return;

			}

			$this->conexion_db->set_charset(DB_CHARSET);*/

		}


	}


?>