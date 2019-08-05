<!DOCTYPE html>

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
<div class="container">
    <form class="" action="" method="post">
        <h3><?= $usuarioAModificar ["nombre"] ;?></h3>
        <br>
        <?php foreach ($usuarioAModificar as $key => $value) : ?>

            <label><?= $key?> :</label>
            <?php if($key =="id"){?>
                <input type="text" disabled name="<?= $key?>" value="<?= $value?> ">
            <?php }else{?>
                <input type="text" name="<?= $key?>" value="<?= $value?>">
            <?php }?>
            <br>
      <?php endforeach;?>
    <br>
    <p>Esta seguro que quieres editar este usuario?</p>
      <input type="submit" name="editar" value="si">
      <input type="submit" name="no" value="no">
      <input type="hidden" name="id" value="<?=$id;?>">
   </form>
</div>
  </body>
