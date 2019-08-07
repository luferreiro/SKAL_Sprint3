<?php
require_once ("loader.php");
require_once ("funciones.php");
require_once ("helpers.php");

if($_POST){
	$foto = $registro_mueble->armarFoto($_FILES);
 	//Aquí genero mi objeto usuario, partiendo de la clase Usuario
 	$mueble = new Mueble($_POST["nombre"],$_POST["precio"],$_POST["material"],$_POST["alto"],$_POST["ancho"],$_POST["profundidad"],$_POST["color"],$foto);
 	Mysql::guardarProducto($pdo,'muebles', $mueble, $foto);

	//Aquí redirecciono el usuario al login
  redirect ("alta_muebles.php");
}







?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   <!-- conecto a bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link rel="stylesheet" href="css/master.css">
</head>
<body>
 <!-- Pongo las Navbar de bootstrap -->
<?php include("nav_bar.php") ?>
  <!-- Pongo div de Body de bootstrap -->
  <div class="container">
  <div class="card-body">


    <h2 class="Register">Alta de Muebles</h2>

      <br>
        <form class="px-4 py-3 mx-auto text-center" action="" method="POST" enctype= "multipart/form-data">
          <div class="form-group">
            <input name="nombre" type="text" class="form-control" id="nombre" value="" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input name="precio" type="number" class="form-control" id="precio" value="" placeholder="Precio">
          </div>
          <div class="form-group">
            <input name="material" type="text" class="form-control" id="material" value="" placeholder="Material">
          </div>
          <div class="form-group">
            <input name="alto" type="number" class="form-control" id="alto" value="" placeholder="Alto (cm)">
          </div>
          <div class="form-group">
            <input name="ancho" type="number" class="form-control" id="ancho" value="" placeholder="Ancho (cm)">
          </div>
          <div class="form-group">
            <input name="profundidad" type="number" class="form-control" id="profundidad" value="" placeholder="Profundidad (cm)">
          </div>
          <div class="form-group">
            <input name="color" type="text" class="form-control" id="color" value="" placeholder="Color">
          </div>
          <div class="form-group">
            <input name="foto" type="file" class="form-control" id="foto" value="" placeholder="Foto del Mueble">
          </div>
              <button type="submit" class="btn btn-secondary">Registrar Mueble</button>
        </form>


  </div>
  </div>

<!-- Pongo div de footer -->
  <footer>
  <div class="card-footer text-muted">
  <i class="fab fa-facebook-square"></i>
  <i class="fab fa-instagram"></i>
  <i class="fab fa-pinterest"></i>
  <br>
  <p>2019 Powered by Trio </p>

  </div>

      </footer>

 <!-- JAVA de bootstrap  -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
