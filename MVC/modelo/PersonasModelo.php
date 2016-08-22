<?php

	/**
	*
	*/
	class PersonasModel
	{
		private $db;
		private $personas;

		public function __construct()
		{
			require_once("modelo/Conectar.php");
			$this->db=Conectar::Conexion();
			$this->personas=array();
		}

		public function getPersonas()
		{
			require("Paginacion.php");
			$consulta=$this->db->query("SELECT * FROM datos_usuarios LIMIT  $empezar_desde,$tamanio_paginas");
			while ($fila = $consulta->fetch(PDO::FETCH_ASSOC))
			{
				$this->personas[]=$fila;
			}
			return $this->personas;
		}

		public function setPersonas($nom, $ape, $dir)
		{
			if (isset($_POST["cr"]))
		  {
				$nom = $_POST["Nom"];
		    $ape = $_POST["Ape"];
		    $dir = $_POST["Dir"];
		    $sql = "INSERT INTO datos_usuarios (Nombre, Apellido, Direccion) VALUES (:nom, :ape, :dir)";
		    $resultado = $base->prepare($sql);
		    $resultado->execute(array(":nom"=>$nom, ":ape"=>$ape, ":dir"=>$dir));
		    header("Location:index.php");
			}
		}
	}

?>
