<?php
  require_once("clases/baseDeDatos.php");
  require_once("clases/mysql.php");
  require_once("clases/productos.php");
  require_once("helpers.php");
  require_once("clases/validador.php");
  require_once("clases/armarRegistro.php");
  require_once("clases/query.php");
  require_once("clases/Autenticador.php");
  require_once("clases/Usuario.php");
  require_once("clases/Encriptar.php");
  require_once("clases/Mueble.php");
  require_once("clases/ArmarMueble.php");
/*
require_once("clases/ArmarRegistro.php");
require_once("clases/BaseJSON.php");

*/

  $host = "localhost";
  $bd = "sistema_venta";
  $usuario = "root";
  $password = "";
  $puerto = "3306";
  $charset = "utf8mb4";

  $pdo = Mysql::conexion($host,$bd,$usuario,$password,$puerto,$charset);

//Agregado por Lu el 22/7
  $validar = new Validador();
  $registro = new ArmarRegistro();
  $registro_mueble = new ArmarMueble();
  //$json = new BaseJSON("usuarios.json");
  Autenticador::iniciarSession();

 ?>
