<?php
require_once("loader.php");
require_once("helpers.php");

if (isset($_SESSION['email']) == false or $_SESSION['perfil']==1){
  header('Location:index.php');
}
if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $mueble = Query::mostrarUsuario($pdo, "muebles", $id);
}
//esto se ejecuta si el usuario indica que desea borrar el usuario
if (isset($_POST["borrar"])&&$_POST["borrar"]=="Si") {

  Query::borrarUsuario($pdo, "muebles", $id);
  header('Location:abm_muebles.php');
  exit;
//var_dump($_POST);
}
elseif (isset ($_POST["no"])) {
  header("Location:abm_muebles.php");
  exit;
}
include ("nav_bar.php");

?>

<html lang="es" dir="ltr">
<div class="card-body">
    <form class="" action="" method="post">
      <p>¿Esta seguro que quiere eliminar al mueble seleccionado?</p>
      <input type="submit" name="borrar" value="Si">
      <input type="submit" name="no" value="No">
      <input type="hidden" name="id" value=5>
   </form>


</div>
<a href="abm_muebles.php">Volver</a>
