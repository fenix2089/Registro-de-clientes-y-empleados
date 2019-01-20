<br>
<br>
<div id="tabla" class="container">
<div class="row">
<center>
    <h4>Clientes registrados</h4>
  </center>

  <div class="col s12 m12 l12">
    <hr>
    <ul class="separar">
      <li>   
        <a class="btn btn-default oculto" name="imprimir" onclick="window.print();">imprimir</a>
         <a class="btn btn-default oculto" href="?c=Cliente&a=Crud">Nuevo cliente</a>    
      </li>  
    </ul>
  </div>
  
  <div class="col s12 m12 l12">
    <table class="bordered striped highlight responsive-table">
    <thead>
        <tr>
            <th>Código</th>
            <th>DUI</th>
            <th>Cliente</th>
            <th>Correo</th>
            <th>Celular</th>
             <th>Dirección</th>
            <!--th style="width:100px;">Sexo</th-->
            <!--th style="width:100px;">Nacimiento</th -->
            <th> <i class="material-icons oculto">edit</i></th>
            <th> <i class="material-icons oculto">delete</i></th>
        </tr>
    </thead>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->__GET('id'); ?></td>
            <td><?php echo $r->__GET('DUI'); ?></td>
            <td><?php echo $r->__GET('Nombre').' '.$r->__GET('Apellido'); ?></td>
            <td><?php echo $r->__GET('Correo'); ?></td>
            <td><?php echo $r->__GET('telefono'); ?></td>
            <td><?php echo $r->__GET('direccion'); ?></td>
            <!--td><?php /*echo $r->__GET('Sexo') == 1 ? 'Hombre' : 'Mujer';*/ ?></td-->
            <!--td><?php /*echo $r->__GET('FechaNacimiento'); */?></td-->
            <td class="oculto">
                <a href="?c=Cliente&a=Crud&id=<?php echo $r->id; ?>"><button class="btn btn-default  btn-sm editar">Editar</button></a>
            </td>
            <td class="oculto">
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Cliente&a=Eliminar&id=<?php echo $r->id; ?>"><button class="btn btn-danger  btn-sm eliminar">Eliminar</button></a>
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


  <script type="text/javascript">
      $(document).ready(function() {

          // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();

      });
  </script>
</html>
