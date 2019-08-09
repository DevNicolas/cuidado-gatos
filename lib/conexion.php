<?php



		$connect = new MySQLi("localhost", "root","", "cine");
		if ($connect -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $connect -> mysqli_connect_errno() 
				. ") " . $connect -> mysqli_connect_error());
		}
		else
			echo "Conexión exitosa!";
?>
