<?php
include("nav_bar.php");
require_once("loader.php");

if (isset($_GET["id"])) {
  $id=$_GET["id"];
  $muebleAModificar =  Query::muebleModificar($pdo,'muebles',$id);
}
if (isset($_POST["editar"])) {
    foreach ($_POST as $key => $value) {
    $sql="update muebles set $key='$value' where muebles.id=:id";
    $query=$pdo->prepare($sql);
    $query->bindValue(':id',$_POST['id']);
    $query->execute();
    header('Location:abm_muebles.php');
    }
  } elseif (isset($_POST["no"])){
      header('Location:abm_muebles.php');
      exit;
  }
 ?>
<html lang="es" dir="ltr">
  <head>
    <title>Editar muebles</title>
  </head>
  <body>
<div class="Register">
    <form class="px-4 py-3 mx-auto text-center" action="" method="POST" enctype= "multipart/form-data">
        <h3><?= $muebleAModificar ["nombre"] ;?></h3>
        <br>
        <?php foreach ($muebleAModificar as $key => $value) : ?>
            <label><?= $key?> :</label>
            <?php if($key =="id"){?>
                <input class="form-control" type="text" disabled name="<?= $key?>" value="<?= $value?> ">
            <?php }else{?>
                <input class="form-control" type="text" name="<?= $key?>" value="<?= $value?>">
            <?php }?>
            <br>
      <?php endforeach;?>
    <br>
    <p>Esta seguro que quieres editar este mueble?</p>
      <button class="btn btn-secondary" type="submit" name="editar" value="si"> Sí </button>
      <button class="btn btn-secondary" type="submit" name="editar" value="si"> No </button>
      <input type="hidden" name="id" value="<?=$id;?>">
   </form>
</div>
  </body>
