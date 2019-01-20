
  <br>
  <br>

  <div id="tabla" class="container">
  <div class="row">
  <center>
    <h4>Empleados registrados</h4>
  </center>
  <div class="col l12">
  <hr>
    <ul class="separar">
      <li>   
        <a class="btn btn-default oculto" name="imprimir" onclick="window.print();">imprimir</a>
         <a class="btn btn-default oculto" href="?c=Alumno&a=Crud">Nuevo Empleado</a>    
      </li>  
    </ul>
  </div>

   
   
    <div class="col s12 m12 l12">
   
      
  <table class="bordered striped highlight responsive-table">
      <thead>
          <tr>
              <th>Código</th>
              <th>DUI</th>
              <!--th style="width:100px;">DUI</th-->
              <th>Empleado</th>
              <th>Correo</th>
              <th>Celular</th>
              <th>Dirección</th>
              <!--th style="width:100px;">Sexo</th-->
              <!--th style="width:100px;">Nacimiento</th -->
              <th>Cargo</th>
              <th> <i class="material-icons oculto">edit</i></th>
            <th> <i class="material-icons oculto">delete</i></th>
          </tr>
      </thead>
      <?php foreach($this->model->Listar() as $r): ?>
          <tr>
              <td><?php echo $r->__GET('id'); ?></td>
              <td><?php echo $r->__GET('DUI') ?></td>
              <td><?php echo $r->__GET('Nombre').' '.$r->__GET('Apellido'); ?></td>
              <td><?php echo $r->__GET('Correo'); ?></td>
              <td><?php echo $r->__GET('telefono'); ?></td>
              <td><?php echo $r->__GET('direccion'); ?></td>
              <!--td><?php /*echo $r->__GET('Sexo') == 1 ? 'Hombre' : 'Mujer';*/ ?></td-->
              <!--td><?php /*echo $r->__GET('FechaNacimiento'); */?></td-->
              <td><?php echo $r->__GET('cargo'); ?></td>
              <td class="oculto">
                  <a href="?c=Alumno&a=Crud&id=<?php echo $r->id; ?>"><button class="btn btn-default btn-sm editar ">Editar</button></a>
              </td>
              <td class="oculto">
                  <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>"><button class="btn btn-danger  btn-sm eliminar">Eliminar</button></a>
              </td>
          </tr>
      <?php endforeach; ?>

      <tfoot>
          <tr>
              <td colspan="8" class="text-center">
                  <!--a href="?c=Alumno&a=excel">Exportar a Excel</a-->
              </td>
          </tr>
      </tfoot>
  </table>



    </div>
  </div>
    
  </div>








   <footer class="footer">
          <div class="container-fluid">
          </div>
      </footer>
      </div>
      </div>
    </body>
    <!--   Core JS Files   -->
    <script src="../../js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../js/material.min.js" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="../../js/chartist.min.js"></script>
    <!--  Dynamic Elements plugin -->
    <script src="../../js/arrive.min.js"></script>
    <!--  PerfectScrollbar Library -->
    <script src="../../js/perfect-scrollbar.jquery.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../js/bootstrap-notify.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="../../js/material-dashboard.js?v=1.2.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
  </html>
