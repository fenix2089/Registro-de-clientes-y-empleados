<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../../img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SWERC</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="../../jquery/jquery-1.11.0.js"></script>
    <style type="text/css">
       @media print {
        .oculto {display:none}
        }
    </style>
    <style media='print'>
      input{display:none;} /* esto oculta los input cuando imprimes */
    </style>

    <style media='screen'>
      input{display:block;} /* muestra los input en la pantalla */
    </style>
</head>

<body>
<nav class="cyan darken-3">
    <div class="nav-wrapper ">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../modulos/mainpage.php" class="waves-effect waves-light btn men"><i class="material-icons left">home</i>Inicio</a></li>
         <li><a href="lista_empleados.php" class="waves-effect waves-light btn men"><i class="material-icons left">assignment_ind</i>Empleado</a></li>
           <li><a href="lista_cliente.php" class="waves-effect waves-light btn men"><i class="material-icons left">account_circle</i>cliente</a></li>
        <li><a href="busqueda.php" class="waves-effect waves-light btn men"><i class="material-icons left">account_circle</i>realizar-busqueda</a></li>
       
        <li><a href="../../index.php" class="waves-effect waves-light btn men"><i class="material-icons left">close</i>salir</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>

 <!--  <nav>
      <div class="nav-wrapper cyan darken-3">
        <a href="#" class="brand-logo right">Logo</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="lista_empleados.php">Empleados</a></li>
          <li><a href="lista_cliente.php">Clientes</a></li>
          <li><a href="busqueda.php">Buscar</a></li>
          <li><a href="../../index.php">Salida</a></li>
        </ul>
      </div>
    </nav> -->
