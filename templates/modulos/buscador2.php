
<body>
  <?php include"../body/header2.php";?>
  <br>
  <br>
  <div class="container">
   <div class="row">
     <div class="col s12 m12 l12">
      <center>
        <h5>Datos obtenidos</h5>
      </center> 
      <hr>
     </div>
   </div>
 </div>
<?php
require_once "conexion.php";
error_reporting(E_ALL);

CargarDatos();

function CargarDatos(){
  $id= trim($_POST['id']);
  $query= "SELECT * FROM empleados WHERE DUI = '$id' ";

 try{
 if(!$mysqli = conectarse()){
  die("Error al crear la conexion:  " .$mysqli->connect_error);
 }
 if(!$stmt= $mysqli->query($query)){
    die('Ocurrio un error: [' . $mysqli->error . ']');
}

 if($stmt->num_rows > 0){
 $stmt->num_rows;
    echo "";

    echo'';
 while($row = $stmt->fetch_object()) {
  echo'';

 echo '

<div id="tabla" class="container">
   <div class="row">
     <div class="col s12 m12 l12">     
<table class="bordered striped highlight responsive-table">
  <tbody><tr>
   <td><b>ID</b></td>
   <td><b>Dui</b></td>
   <td><b>Nombre</b></td>
   <td><b>Apellido</b></td>
   <td><b>Direccion</b></td>
   <td><b>Sexo</b></td>
   <td><b>Cargo</b></td>
   <td><b>Fecha de nacimiento</b></td>
   </tr><tr>
   <td>'.$row->id.'</td>
   <td>'.$row->DUI.'</td>
   <td>'.$row->Nombre.'</td>
   <td>'.$row->Apellido.'</td>
   <td>'.$row->direccion.'</td>
   <td>'.$row->Sexo.'</td>
   <td>'.$row->cargo.'</td>
   <td>'.$row->FechaNacimiento.'</td>
  </tr></tbody></table> 
  <br>
       <br>
       <center>
        <button class="btn waves-effect  light-blue darken-4">
        <a class="brand-logo white-text" href="busqueda.php"><i class="material-icons right">arrow_back</i>Regresar</a>
      </button>
       </center>  
     </div>
   </div>
 </div>





 ';
 }
 }else{
  echo '<div class="container">
  <div class="section">
    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12">
        <!-- datos -->
        <div class="row">
          <div class="card-panel center">
            <h2 class=" red-text"><i class="medium material-icons">error</i></h2>

            <span class="blue-text">
              No hay datos registrados con el Dui que ingreso por favor asegurese de escribir correctamente el numero de documento
            </span>
            <br>
            <br>
            <button class="btn waves-effect  light-blue darken-4">
              <a class="brand-logo white-text" href="busqueda.php"><i class="material-icons right">arrow_back</i>Regresar</a>
            </button>
            <br>
          </div>
        </div>
      </div>

    </div>

  </div>
  <br><br>  
</div>

';
    }
}catch(Exception $e){
 echo "Error  " .$e->getMessage();
}}



?>


</body>


</html>
