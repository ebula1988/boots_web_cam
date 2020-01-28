
<?php

require '../../config/Conexion.php';



$sqla="SELECT * FROM modelos";

$consulta= mysqli_query($conexion,$sqla);


$array=mysqli_fetch_array($consulta);



print_r($array);





?>