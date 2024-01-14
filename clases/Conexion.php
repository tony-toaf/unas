<?php 
// iniciando la conceccion ala base de datos

	class Conectar{

		public function conexio(){
			$server="localhost";
			$usuario="root";
			$pass="";
			$base_datos="GESTOR";

			$conexion = mysqli_connect( $server, $usuario, $pass, $base_datos);

			return $conexion;


		}
	}

 ?>