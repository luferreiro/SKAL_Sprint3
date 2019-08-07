<?php
require_once ("funciones.php");
require_once ("helpers.php");
require_once("loader.php");

$muebles = Query::listado($pdo, 'muebles');
include ("nav_bar.php");

 ?>
 <!-- Aca van los productos-->
 <div class="card-deck mt-5">

   <?php foreach ($muebles as $key => $mueble) : ?>

     <div class="card">
       <img src="imagenes/<?= $mueble['foto']?>" class="card-img-top" alt="...">
       <div class="card-body">
         <h5 class="card-title"><?= $mueble['nombre']?>-</h5>
         <p class="card-text">
           Alto: <?= $mueble['alto']?> <br>
           Ancho: <?= $mueble['ancho']?> <br>
           Profundidad:<?= $mueble['profundidad']?><br>
           Madera:<?= $mueble['material']?> <br>
           Precio:<?= $mueble['precio']?> <br>
         </p>
       </div>
       <div class="card-footer">EN STOCK</div>
     </div>

   <?php endforeach ?>



     <div class="card-footer">
       <small class="text-muted">EN STOCK</small>
     </div>
   </div>
