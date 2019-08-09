<?php
$server = "localhost";
$user = "id5963901_nicolas";
$clave = "nicolas0825";
$db_name="id5963901_pruebareal";

$con = mysqli_connect($server, $user, $clave, $db_name)or die(mysqli_error());



    if(isset($_REQUEST['enviar'])){
        $comentarios = $_REQUEST['comentarios'];
        $nombre = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];
        $query = "INSERT INTO `registros`(`comentarios`,`nombre`,`email` ) VALUES ('$comentarios','$nombre','$email')";
        
      
        $result = mysqli_query($con, $query);
        if($result){
		//echo "creacion exitosa";
}else{
	//echo "no esta haciendo nada";
}
header('Location: index.html');
    }
    ?>
