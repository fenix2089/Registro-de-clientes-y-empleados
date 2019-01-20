<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
}
?>

<body>
  <?php include"../body/header2.php";?>

  <br>
  <br>
  <div class="container">
    <div class="row">
      <center>
        <h4>Realizar busqueda de cliente o empleado registrado</h4>
      </center>
      <div class="col s12 m12 l12">
      <br>
      <br>
        <form method="POST" action="buscador.php">
          <div class="form-group">
            <label>Dui del cliente</label>
            <input type="text" class="form-control" name="id" >
          </div>
          <br>
          <center>
            <input type="submit" value="BUSCAR CLIENTE" class="btn btn-defalt bus">
          </center>   
        </form>
        <br><br><br>

        <form method="POST" action="buscador2.php">
          <div class="form-group">
            <label>Dui del empleado</label>
            <input type="text" class="form-control" name="id" >
          </div>
          <br>
          <center>
            <input type="submit" value="BUSCAR EMPLEADO" class="btn btn-default bus">
          </center>
          
        </form>
      </div>
    </div>
    
  </div>

<!-- <footer> <?php include"../body/pie.php";?></footer> -->
</body>


</html>
