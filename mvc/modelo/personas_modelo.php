<?php

	/**
	* 
	*/
	class Personas_modelo
	{
		
		private $db;

		private $personas;

		public function __construct() {

			require_once("modelo/conectar.php");

			$this->db=Conectar::conexion();

			$this->personas=array();
		}

		public function get_personas() {

			require("paginacion.php");

			$consulta=$this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde, $tamano_paginas");

			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

				$this->personas[]=$filas;
			}

			return $this->personas;
		}
	}

?>