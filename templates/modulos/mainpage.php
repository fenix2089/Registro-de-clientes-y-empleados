<?php
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<body>
  <?php include"../body/header2.php";?>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="center"><i class="large material-icons  green-text text-darken-3"></i></div>
      <h1 class="header center green-text text-darken-3">BIENVENIDO</h1>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <a href="?c=Usuario&a=Crud"><h2 class="center light-blue-text"><i class="material-icons">account_circle
</i></h2>
            <h5 class="center">Registrar cliente</h5></a>

            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos sapiente, deserunt sed quae enim eum numquam! Deleniti accusamus ipsam sequi ipsum ratione nobis ad, blanditiis, dolorum explicabo dignissimos alias sed.</p>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block">
            <a href=""><h2 class="center light-blue-text"><i class="material-icons">assignment_ind</i></h2>
            <h5 class="center">Registrar empleado</h5></a>

            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, nesciunt, reiciendis. Illum commodi quae error ratione neque dignissimos incidunt eligendi, distinctio delectus doloribus deserunt est ullam facilis sint optio qui!.</p>
          </div>
        </div>

      </div>

    </div>
    <br><br>
  </div>

  <footer> <?php include"../body/pie.php";?></footer>
</body>
  

</html>
