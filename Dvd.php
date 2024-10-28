<?php

include_once "Soporte.php";

class Dvd extends Soporte {

public string $idiomas;
private string $formatPantalla;

public function __construct(string $titulo, int $numero, float $precio, 
string $idiomas, string $formatPantalla) {

parent::__construct($titulo, $numero, $precio);

$this->idiomas = $idiomas;
$this->formatPantalla = $formatPantalla;

}

public function getIdiomas(): string {
    return $this->idiomas;
}

public function getFormatPantalla(): string {
    return $this->formatPantalla;
}

public function muestraResumen() : string {

$resumenPadre = parent::muestraResumen();
return $resumenPadre . "<br> idiomas: " . $this->idiomas .
 "<br> y ". $this->formatPantalla.
" como formato de pantalla";

}
}

?>