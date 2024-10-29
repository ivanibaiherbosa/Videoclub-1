<?php

class Cliente {

    public string $nombre;
    private int $numero;
    private array $soportesAlquilados = [];
    private int $numSoportesAlquilados = 0;
    private int $maxAlquilerConcurrente;
    
public function __construct(string $nombre, int $numero,
 int $maxAlquilerConcurrente = 3) {

$this->nombre = $nombre;
$this->numero = $numero;
$this->maxAlquilerConcurrente = $maxAlquilerConcurrente;

 }

public function getNumero(): int {
    return $this->numero;
}

public function setNumero(int $numero): void {
    $this->numero = $numero;
}

public function getNumSoportesAlquilados(): int {
    return $this->numSoportesAlquilados;
}


public function alquilarSoporte(Soporte $soporte): void {
    if ($this->numSoportesAlquilados < $this->maxAlquilerConcurrente) {
        $this->soportesAlquilados[] = $soporte;
        $this->numSoportesAlquilados++;
        echo "Soporte alquilado: " . $soporte->getTitulo() . "<br>";

    } else {
        echo "No se pueden alcanzar mas soportes, límite alcanzado. <br>";
    }
}

public function muestraResumen(): void {
    echo "cliente: $this->nombre <br>";
    echo "Numero: $this->numero <br>";
    echo "Total de alquileres: " . count($this->soportesAlquilados) . "<br>";
}

}

?>