<?php
require_once ("loader.php");
require_once ("funciones.php");
require_once ("helpers.php");

if($_POST){
 //Aquí genero mi objeto usuario, partiendo de la clase Usuario
 $usuario = new Usuario($_POST["nombre"],$_POST["apellido"],$_POST["email"],$_POST["password"],$_POST["repassword"],$_FILES);
 //Aquí verifico si los datos registrados por el usuario pasan las validaciones
 $errores = $validar->validacionUsuario($usuario, $_POST["repassword"]);
 //De no existir errores entonces:
 if(count($errores)==0){
   //Busco a ver si el usuario existe o no en la base de datos
   $usuarioEncontrado = Mysql::buscarPorEmail($usuario->getEmail(),$pdo,'users');
   if($usuarioEncontrado != false){
     $errores["email"]= "Usuario ya Registrado";
   }else{
     //Aquí guardo en el servidor la foto que el usuario seleccionó
     $avatar = $registro->armarAvatar($usuario->getAvatar());
     //Aquí procedo a guardar los datos del usuario en la base de datos, ,aquí le paso el objeto PDO, el objeto usuario, la tabla donde se va a guardar los datos y el nombre del archivo de la imagen del usuario.
     Mysql::guardarUsuario($pdo,$usuario,'users',$avatar);
     //Aquí redirecciono el usuario al login
     redirect ("login.php");
   }
 }
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

    <?php
        if (isset($errores)) :?>
        <ul>
          <?php foreach ($errores as $key => $value) :?>
              <li class="alert alert-danger"> <?=$value; ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>


    <h2 class="Register">Registrarse</h2>

      <br>
        <form class="px-4 py-3 mx-auto text-center" action="" method="POST" enctype= "multipart/form-data">
          <div class="form-group">
            <input name="nombre" type="text" class="form-control" id="nombre" value="<?= isset($errores["nombre"])? "": persistir("nombre") ?>" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input name="apellido" type="text" class="form-control" id="apellido" value="<?= isset($errores["apellido"])? "": persistir("apellido") ?>" placeholder="Apellido">
          </div>
          <div class="form-group">
            <input name="email" type="email" class="form-control" id="email" value="<?= isset($errores["email"])? "": persistir("email") ?>" placeholder="Email">
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" id="password" value="" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <input name="repassword" type="password" class="form-control" id="repassword" value="" placeholder="Rectifique su Contraseña">
          </div>
          <div class="form-group">
            <input name="avatar" type="file" class="form-control" id="avatar" value="" placeholder="Adjunte su foto de perfil">
          </div>
              <button type="submit" class="btn btn-secondary">Registrarse</button>
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
