

<!DOCTYPE html>
<html>
<head>
	<title>cargar pagina </title>

	<link rel="stylesheet" type="text/css" href="css/main.css">


</head>
<body >

	<img src="chartubee.png">

	<h1> <marquee>Estamos transmitiendo informacion a lo servidores de charturbate con <?php $cantidad= $_GET['cantidad'];
	 echo $cantidad; ?> usuarios ONLINE, en la sala de la modelo  <?php $user_name= $_GET['user_name'];
	 echo $user_name; ?></marquee></h1>
	



	<div id="contenedor_carga">

		



		<div id="carga">
			
			
		</div>


	</div>

	




<div id="reproductor">	

     <div  style="display: none" >
     <?php 
     $iframe = $_GET['iframe'];
     $cantidad= $_GET['cantidad'];
     $i=1;

     while ($i <= $cantidad) {?>
     <iframe  src=<?php echo $iframe ?>></iframe>
	 <?php $i++;
} 
?>
     </div>

</div>






</body>

<script >
	window.onload= function(){

		

		
		alert("todos los usuarios han sido cargado a esta sala, no cerrar la pagina para no desconectarlos");



		
 
	}
</script>



</script>
</html>
