<?php

class Cliente {

    public string $nombre;
    private int $numero;
    private int $numSoportesAlquilados;
    private int $maxAlquilerConcurrente;
    private int $soportesAlquilados;
    
public function __construct(string $nombre, int $numero,
 int $maxAlquilerConcurrente = 3) {

$this->nombre = $nombre;
$this->numero = $numero;
$this->numSoportesAlquilados = $numSoportesAlquilados;
$this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
$this->soportesAlquilados = $soportesAlquilados;


public function getNumero(): int {
    return $this->numero;
}

public function setNumero($numero) {
    return $this->numero = $numero;
}

public function getNumSoportesAlquilados(): int {
    return $this->numSoportesAlquilados;
}

}

public function numSoportesAlquilados(): array {
    return [
        new 
    ]
}




}

?>