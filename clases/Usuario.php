<?php 
// diciendole que requieree el archivo coneccion
	require_once "Conexion.php";

// creaando la clase usuarios y heredando de la clase concexion
	class Usuario extends Conectar{ 
		public function AgregarUsuario(){
			$conexion = Conectar::conexion();

		}
	}


 ?>