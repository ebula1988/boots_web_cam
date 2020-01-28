<?php






require '../../config/Conexion.php';



$usuario = $_POST['usuario'];
$clave = $_POST['clave'];


$sql="SELECT COUNT(*) as contar from usuario where usuario= '$usuario'  and clave = '$clave' ";

$consulta= mysqli_query($conexion,$sql);

$array=mysqli_fetch_array($consulta);


if($array['contar']> 0){



	
	header("location:../modelos.php");



}else{
	echo "datos incorrectos";
}




?>