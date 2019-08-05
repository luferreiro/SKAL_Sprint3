<?php
require_once ("funciones.php");
require_once ("helpers.php");
require_once("loader.php");
include ("nav_bar.php");

$usuarios = Query::listado($pdo,"users");
?>

<br>
<h2 class="text-center"> Panel de Control</h2>
<br>
<div class="spacer"></div>


<div class="card" style="overflow-x:auto;">
  <h3 class="card-header">Usuarios</h3>
<table class="table">

  <thead>
      <tr>
          <th>
              Id
          </th>
          <th>
              Nombre
          </th>
          <th>
              Apellido
          </th>
          <th>
              Email
          </th>
          <th>
              Perfil
          </th>
          <th>
              Ver
          </th>
          <th>
              Editar
          </th>
          <th>
              Eliminar
          </th>
      </tr>
  </thead>
  <tbody>
      <?php foreach ($usuarios as $key => $usuario) :?>
      <tr>
          <td>
              <?= $usuario['id'];?>
          </td>
          <td>
              <?= $usuario['nombre'];?>
          </td>
          <td>
              <?= $usuario['apellido'];?>
          </td>
          <td>
              <?= $usuario['email'];?>
          </td>
          <td>
              <?= $usuario['perfil'];?>
          </td>
          <td>
              <a href="perfilUsuario.php?id= <?= $usuario['id'];?>"><i class="fas fa-user-check"></i></a>
          </td>
          <td>
              <a href="editarUsuario.php?id= <?= $usuario['id'];?>"><i class="fas fa-user-edit"></i></a>
          </td>
          <td>
              <a href="eliminarUsuario.php"><i class="fas fa-user-slash"></i></a>
          </td>

      </tr>
      <?php endforeach;?>


  </tbody>


</table>
</div>
<div class="spacer"></div>
