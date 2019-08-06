<?php

class ArmarMueble{
    public function armarFoto($imagen){
        $nombre = $imagen["foto"]["name"];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        $archivoOrigen = $imagen["foto"]["tmp_name"];
        $archivoDestino = dirname(__DIR__);
        $archivoDestino = $archivoDestino."/imagenes/";
        $foto = uniqid();
        $archivoDestino = $archivoDestino.$foto;
        $archivoDestino = $archivoDestino.".".$ext;
        move_uploaded_file($archivoOrigen,$archivoDestino);
        $foto = $foto.".".$ext;

        return $foto;
    }

  
}
