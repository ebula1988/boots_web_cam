<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Cam</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../public/css/blue.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>




<?php 

ob_start();

session_start();

$usuario= $_SESSION['username'];

if (!isset($usuario)){


  header("location: login.html");

}else{


 




}



 ?>





<?php 
$iframe = $_GET['iframe'];

$cantidad= $_GET['cantidad'];

$user_name= $_GET['user_name'];





?>



 <body >

  <img src="chartubee.png">




 

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="iframe1.php?iframe=<?php echo urlencode("$iframe") ?>&cantidad=<?php echo $cantidad ?>&user_name=<?php echo $user_name ?>" target="_blank" class="btn btn-primary"  >modelo 1 = sharon_06 </a></li>
      <a href="iframe1.php?iframe=<?php echo urlencode("$iframe") ?>&cantidad=<?php echo $cantidad ?>&user_name=<?php echo $user_name ?>" target="_blank" class="btn btn-success"  >modelo 2 = natyyy </a></li>

    <li class="breadcrumb-item active"> <== pulse click en el boton de la modelo a confirmar </li>


     <a href="modelos.php"  class="btn btn-info"  >volver al menu principal </a></li>


  </ol>
</nav>



<div id="img">

<img src="char.webp">



</div>


<div id="imagen">

<img src="antena.gif">



</div>













 



 



    




        


    <!-- jQuery -->
    <script src="../public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../public/js/bootstrap.min.js"></script>
     <!-- Bootbox -->
    <script src="../public/js/bootbox.min.js"></script>

    <script type="text/javascript" src="scripts/login.js"></script>


  </body>
</html> 

