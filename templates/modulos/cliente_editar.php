
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
               <form class="col s12" id="frm-Cliente" action="?c=Cliente&a=Guardar" method="post" enctype="multipart/form-data">
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










<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Clientes</h4>
                        <p class="category"></p>
                    </div>
                    <div class="card-content table-responsive">
                        <div class="form-group">
                            <h4 class="form-group">
                                <?php echo $alm->__GET('id') != null ? $alm->__GET('Nombre').' '. $alm->__GET('Apellido') : 'Nuevo Registro'; ?>
                            </h4>
                        </div>

                        <ol class="breadcrumb">
                          <li><a href="?c=Cliente">Lista de clientes</a></li>
                          <li class="active"><?php echo $alm->__GET('id') != null ? $alm->__GET('Nombre') : 'Nuevo Registro'; ?></li>
                      </ol>

                      <form id="frm-Cliente" action="?c=Cliente&a=Guardar" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                        <div class="form-group">
                            <label>DUI</label>
                            <input type="text" name="DUI" id="dui" value="<?php echo $alm->__GET('DUI'); ?>" class="form-control" placeholder="00000000-0" data-validacion-tipo="requerido|max:10" required/>
                        </div>
                        <div class="form-group">
                            <label>Nombres</label>
                            <input type="text" name="Nombre" value="<?php echo $alm->__GET('Nombre'); ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" required/>
                        </div>

                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" name="Apellido" value="<?php echo $alm->__GET('Apellido'); ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:3" required/>
                        </div>

                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" name="Correo" value="<?php echo $alm->__GET('Correo'); ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" required/>
                        </div>
                        <div class="form-group">
                            <label>Direccion</label>
                            <textarea name="direccion" id="direccion" value="<?php echo $alm->__GET('direccion'); ?>" class="form-control" placeholder="Ingrese su domicilio" data-validacion-tipo="requerido|direccion" cols="20" rows="3" required><?php echo $alm->__GET('direccion'); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" name="telefono" id="movil" value="<?php echo $alm->__GET('telefono'); ?>" class="form-control" placeholder="000-0000-0000" data-validacion-tipo="requerido|N° celular" required/>
                        </div>
                        <div class="form-group">
                            <label>Sexo</label>
                            <select name="Sexo" class="form-control" required>
                                <option <?php echo $alm->__GET('Sexo') == 1 ? 'selected' : ''; ?> value="1">Masculino</option>
                                <option <?php echo $alm->__GET('Sexo') == 2 ? 'selected' : ''; ?> value="2">Femenino</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Fecha de nacimiento</label>
                            <input  type="date" name="FechaNacimiento" value="<?php echo $alm->__GET('FechaNacimiento'); ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" required/>
                        </div>

                        <hr />

                        <div class="text-right">
                            <button class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                    <div class="text-left">
                        <a href="./lista_empleados.php"><button class="btn btn-danger">Cancelar</button></a>
                    </div>
                    <footer class="footer">
                        <div class="container-fluid">
                        </div>
                    </footer>
                </div>
            </div>
        </body>
        <script>
            $(document).ready(function(){
                $("#frm-Cliente").submit(function(){
                    return $(this).validate();
                });
            })
        </script>
        <?php include"../body/footermain2.php";?>
        </html>
