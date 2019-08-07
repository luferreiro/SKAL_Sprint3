<?php
require_once('loader.php');

if (isset($_GET["id"])) {
  $id=$_GET["id"];
$usuario = Query::mostrarUsuario($pdo, "muebles", $id);
} else {
    header('Location:index.php');
}
include ("nav_bar.php");
?>
<div class="spacer"></div>
<div class="row mt-5">
    <div class="col-lg-4 offset-lg-4">
        <div class="card w-100">
            <img class="card-img-top" src=imagenes/<?= $usuario['foto']?> alt="Foto de perfil">

            <ul class="list-group list-group-flush">
              <div class="spacer"></div>
                <li class="list-group-item">Nombre: <?= $usuario['nombre']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Precio: <?= $usuario['precio']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Material: <?= $usuario['material']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Alto: <?= $usuario['alto']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Ancho: <?= $usuario['ancho']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Profundidad: <?= $usuario['profundidad']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Color: <?= $usuario['color']?></li>
                <div class="spacer"></div>
            </ul>
        </div>
        <br>
        <a href="abm_muebles.php">Volver</a>
    </div>

</div>
