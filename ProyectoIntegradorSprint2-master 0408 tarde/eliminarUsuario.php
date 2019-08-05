<!DOCTYPE html>

<?php
require_once("loader.php");

if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $usuario = Query::mostrarUsuario($pdo, "users", $id);
}
//esto se ejecuta si el usuario indica que desea borrar el usuario
if (isset($_POST["borrar"])&&$_POST["borrar"]=="Si") {
  Query::borrarUsuario($pdo, "users", $id);
  header('Location:abm.php');
  exit;
//var_dump($_POST);
}
elseif (isset ($_POST["no"])) {
  header("Location:abm.php");
  exit;
}
include ("nav_bar.php");

?>

<html lang="es" dir="ltr">
<div class="card-body">
    <form class="" action="" method="post">
      <p>¿Esta seguro que quiere eliminar al usuario seleccionado?</p>
      <input type="submit" name="borrar" value="Si">
      <input type="submit" name="no" value="No">
      <input type="hidden" name="id" value=5>
   </form>


</div>
