

<?php 

ob_start();

session_start();



if (!isset($usuario)){

  $usuario= $_SESSION['username'];


  header("location: login.html");

}else{






}



 ?>


  
       

           

             
                 
                   

                    

                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">

                      <img src="chartubee.png">
                       <br>
                       <br>
                       <a class="btn btn-success" href='logica/salir.php'>cerrar sesion</a>
                      <br>
                      <br>





                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">

                          <thead>
                            <th>Opciones</th>
                            <th>user_name</th>
                            <th>iframe</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>user_name</th>
                            <th>iframe</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>


                        <h3> Transmision en vivo de modelos registradas</h3>

                    
                    <div>

                     <iframe src='https://chaturbate.com/in/?tour=SHBY&campaign=0c5TD&track=embed&room=sharon_06&bgcolor=white' height=528 width=850 style='border: none;'></iframe>

                    </div>


                     <iframe src='https://chaturbate.com/in/?tour=SHBY&campaign=0c5TD&track=embed&room=nattyyyyy&bgcolor=white' height=528 width=850 style='border: none;'>nattyyyyy</iframe>

                      
                    </div>






                    <div class="panel-body" style="height: 400px;" id="formularioregistros" style="background-color:#646464;">

                      <img src="chartubee.png">


                        <form name="frmiframe" id="frmiframe"  method='get' action='confirmacion.php' ">

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>id modelo:</label>
                            <input type="text" name="idmodelo" id="idmodelo" readonly="readonly"  class="form-control" maxlength="50" placeholder="Nombre" required>
                          </div>


                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>user_name:</label>
                            <input type="text" class="form-control" name="user_name" id="user_name" maxlength="50" placeholder="Nombre" readonly="readonly" required>
                          </div>


                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>iframe:</label>
                            <input type="text" class="form-control" name="iframe" id="iframe" maxlength="256" placeholder="Descripción" readonly="readonly">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Ingrese cantidad de usuarios en la sala:</label>
                            <input type="number" class="form-control" name="cantidad" id="cantidad" maxlength="256" placeholder="Ingrese la cantaidad de usuario en linea" required>
                          </div>

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btniframe"><i ></i>ir a confirmar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>


                    </div>



                    <div>








                    </div>


                    

                    

                  










                  
             
         
     

   

<?php 
require 'footer.php';
require 'header.php';

 ?>




<script type="text/javascript" src="scripts/modelos.js"></script>


