
<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <div class="form-group">
                <h4 class="form-group">
                    <?php echo $alm->__GET('id') != null ? $alm->__GET('Nombre').' '. $alm->__GET('Apellido') : 'Nuevo Registro'; ?>
                </h4>
            </div>

            <!-- formulario -->
            <div class="row">
             <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
             <form class="col s12" id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
                <div class="row">
<input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                    <div class="input-field col s6">
                        <i class="material-icons prefix blue-text">edit</i>
                        <input type="text" name="DUI" id="dui" class="validate" value="<?php echo $alm->__GET('DUI'); ?>" required>
                        <label>DUI</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix blue-text">account_circle</i>
                        <input type="text" class="validate" name="Nombre" value="<?php echo $alm->__GET('Nombre'); ?>" class="form-control"  required>
                        <label>Nombre</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix blue-text">account_circle</i>
                        <input type="text" class="validate" name="Apellido" value="<?php echo $alm->__GET('Apellido'); ?>" class="form-control" required>
                        <label>Apellidos</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix blue-text">email</i>
                        <input type="text" class="validate" name="Correo" value="<?php echo $alm->__GET('Correo'); ?>" class="form-control" required>
                        <label>Correo</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix blue-text">location_on</i>
                        <!-- <label>Direccion</label> -->
                        <input name="direccion" class="validate" id="direccion" value="<?php echo $alm->__GET('direccion'); ?>" class="form-control" placeholder="Ingrese su domicilio" data-validacion-tipo="requerido|direccion" cols="20" rows="3" required>
                        
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix blue-text">phone</i>
                        <input type="text" class="validate" name="telefono" id="movil" value="<?php echo $alm->__GET('telefono'); ?>" class="form-control" data-validacion-tipo="requerido|N° celular" required>
                        <label>Telefono</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix blue-text">wc</i>
                        <select name="Sexo" class="form-control" required>
                            <option <?php echo $alm->__GET('Sexo') == 1 ? 'selected' : ''; ?> value="1">Masculino</option>
                            <option <?php echo $alm->__GET('Sexo') == 2 ? 'selected' : ''; ?> value="2">Femenino</option>
                        </select>
                        <label >Sexo</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix blue-text">today</i>
                        <input  type="date" name="FechaNacimiento" value="<?php echo $alm->__GET('FechaNacimiento'); ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" required/>
                        <label>Fecha nacimiento</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix blue-text">verified_user</i>
                        <input  type="text" name="cargo" id="cargo" value="<?php echo $alm->__GET('cargo'); ?>" class="form-control" placeholder="Ingrese su cargo" data-validacion-tipo="requerido" autocomplete="off" required/>
                        <label>Cargo</label>
                    </div>

                    <div class="input-field col s12 center">
                      <div class="text-right">
                        <button class="btn btn-primary light-blue darken-4">Guardar</button>
                    </div>
                </div>
                <!-- <div class="input-field col s12 center">
                      <div class="text-right">
                        <a href="./lista_empleados.php"><button class="btn btn-danger">Cancelar</button></a>
                    </div>
                </div> -->

            </div>
        </form>
    </div>

</div>

</div>

</div>
<br><br>
</div>

<footer>
    <?php include"../body/pie.php";?>
</footer>
        </body>
        <script>
            $(document).ready(function(){
                $("#frm-alumno").submit(function(){
                    return $(this).validate();
                });
            })
        </script>

        </html>
