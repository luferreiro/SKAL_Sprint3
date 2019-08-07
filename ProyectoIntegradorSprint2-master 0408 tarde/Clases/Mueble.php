<?php

class Mueble{
  protected $nombre;
  protected $precio;
  protected $material;
  protected $alto;
  protected $ancho;
  protected $profundidad;
  protected $color;
  protected $foto;

  public function __construct($nombre=null, $precio=null, $material=null , $alto = null , $ancho=null, $profundidad=null, $color=null, $foto=null){
    $this->nombre= $nombre;
    $this->precio = $precio;
    $this->material = $material;
    $this->alto = $alto;
    $this->ancho = $ancho;
    $this->profundidad = $profundidad;
    $this->color = $color;
    $this->foto = $foto;
  }


  public function getSku(){
    return $this->sku;
  }

  public function setSku($sku){
    $this->sku = $sku;
  }

public function getNombre(){
  return $this->nombre;
}

public function setNombre($nombre){
  $this->nombre = $nombre;
}

public function getPrecio(){
  return $this->precio;
}

public function setPrecio($precio){
  $this->precio = $precio;
}

public function getMaterial(){
  return $this->material;
}

public function setMaterial($material){
  $this->material = $material;
}

public function getAlto(){
  return $this->alto;
}

public function setAlto($alto){
  $this->alto = $alto;
}

public function getAncho(){
  return $this->ancho;
}

public function setAncho($ancho){
  $this->ancho = $ancho;
}

public function getProfundidad(){
  return $this->profundidad;
}

public function setProfundidad($profundidad){
  $this->profundidad = $profundidad;
}

public function getColor(){
  return $this->color;
}

public function setColor($color){
  $this->color = $color;
}

public function getFoto(){
  return $this->foto;
}

public function setFoto($foto){
  $this->foto = $foto;
}


}


 ?>
