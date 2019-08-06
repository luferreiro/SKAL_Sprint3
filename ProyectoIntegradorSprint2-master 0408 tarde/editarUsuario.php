<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   <!-- conecto a bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Usuario</title>
  <link rel="stylesheet" href="css/master.css">
  <?php include("nav_bar.php") ?>
    <!-- Pongo div de Body de bootstrap -->
    <div class="container">
    <div class="card-body">
<?php
require_once("loader.php");

if (isset($_GET["id"])) {
  $id=$_GET["id"];
  $usuarioAModificar =  Query::usuarioModificar($pdo,'users',$id);
}
if (isset($_POST["editar"])) {
    foreach ($_POST as $key => $value) {
    $sql="update users set $key='$value' where users.id=:id";
    $query=$pdo->prepare($sql);
    $query->bindValue(':id',$_POST['id']);
    $query->execute();
    header('Location:abm.php');
    }
  } elseif (isset($_POST["no"])){
      header('Location:abm.php');
      exit;
  }
 ?>
<html lang="es" dir="ltr">
  <head>
    <title>Editar usuario</title>
  </head>
  <body>
<div class="Register">
    <form class="px-4 py-3 mx-auto text-center" action="" method="POST" enctype= "multipart/form-data">
        <h3><?= $usuarioAModificar ["nombre"] ;?></h3>
        <br>
        <?php foreach ($usuarioAModificar as $key => $value) : ?>
            <label><?= $key?> :</label>
            <?php if($key =="id"){?>
                <input class="form-control" type="text" disabled name="<?= $key?>" value="<?= $value?> ">
            <?php }else{?>
                <input class="form-control" type="text" name="<?= $key?>" value="<?= $value?>">
            <?php }?>
            <br>
      <?php endforeach;?>
    <br>
    <p>Esta seguro que quieres editar este usuario?</p>
      <button class="btn btn-secondary" type="submit" name="editar" value="si"> Sí </button>
      <button class="btn btn-secondary" type="submit" name="editar" value="si"> No </button>
      <input type="hidden" name="id" value="<?=$id;?>">
   </form>
</div>
  </body>
