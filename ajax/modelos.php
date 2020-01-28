<?php 
require_once "../modelos/Modelos.php";

$modelos=new Modelos();

$idmodelo=isset($_POST["idmodelo"])? limpiarCadena($_POST["idmodelo"]):"";
$user_name=isset($_POST["user_name"])? limpiarCadena($_POST["user_name"]):"";
$iframe=isset($_POST["iframe"])? limpiarCadena($_POST["iframe"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idcategoria)){
			$rspta=$categoria->insertar($nombre,$descripcion);
			echo $rspta ? "Categoría registrada" : "Categoría no se pudo registrar";
		}
		else {
			$rspta=$categoria->editar($idcategoria,$nombre,$descripcion);
			echo $rspta ? "Categoría actualizada" : "Categoría no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$categoria->desactivar($idcategoria);
 		echo $rspta ? "Categoría Desactivada" : "Categoría no se puede desactivar";
	break;

	case 'activar':
		$rspta=$categoria->activar($idcategoria);
 		echo $rspta ? "Categoría activada" : "Categoría no se puede activar";
	break;

	case 'mostrar':
		$rspta=$modelos->mostrar($idmodelo);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$modelos->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(

 			

 				"0"=>($reg->condicion)?'<a class="btn btn-primary" onclick="mostrar('.$reg->idmodelo.')">Registrar usuarios en sala</a>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idmodelo.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idmodelo.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idmodelo.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->user_name,
 				"2"=>$reg->iframe,
 				"3"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>',
 				
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
}
?>