<?php
class Soporte {

public string $titulo;
protected int $numero;
private float $precio;
private const IVA = 0.21;
private float $precioConIva;

public function __construct(string $titulo, int $numero, float $precio) {

    $this->titulo = $titulo;
    $this->numero = $numero;
    $this->precio = $precio;
    $this->calcularPrecioConIva();

   }
  
    public function getTitulo() : string {
        return $this->titulo;
    }

    
    public function getNumero() : int {
        return $this->numero;
    }

    public function getPrecio() : float {
        return $this->precio;
    }

    public function muestraResumen() : string {
        return $this->precio . " euros (IVA no incluido)";
    }
    
    public function getPrecioConIva() : float {
        return $this->precioConIva;
    }


    public function calcularPrecioConIva() : void {
        $this->precioConIva = $this->precio * (1 + self :: IVA);


    }


}
?>