<?php

class Cliente {

    public string $nombre;
    private int $numero;
    private array $soportesAlquilados = []; // array para almacenar los soportes que ha alquilado
    private int $numSoportesAlquilados = 0; // contador de alquileres realizados por elñ cliente
    private int $maxAlquilerConcurrente;
    
// constructor que a diferencia de Cintavideo, Dvd y Juego NO está sobreescrito
// ya que eso eran soportes y el cliente va a tener su propio constructor porque es un objeto distinto

public function __construct(string $nombre, int $numero,
 int $maxAlquilerConcurrente = 3) {    // maxAlquilerConcurrente para este cliente es 3 pero esto se puede modificar segun cliente

$this->nombre = $nombre;
$this->numero = $numero;
$this->maxAlquilerConcurrente = $maxAlquilerConcurrente;

 }

// Getter y setter de numero, de nombre no hace falta porque es public 

public function getNumero(): int {
    return $this->numero;
}

public function setNumero(int $numero): void {
    $this->numero = $numero;
}

// solamente getter de numSoportesAlquilados

public function getNumSoportesAlquilados(): int {
    return $this->numSoportesAlquilados;
}

// maxAlquilerConcurrente es private asi que hago un getter para acceder 
// en Inicio.php, no hago setter porque no necesito permitir cambios tras crear el objeto

public function getMaxAlquilerConcurrente(): int {
    return $this->maxAlquilerConcurrente;
}


// Método para alquilar un soporte

public function alquilarSoporte(Soporte $soporte): void {
    if ($this->numSoportesAlquilados < $this->maxAlquilerConcurrente) {
        $this->soportesAlquilados[] = $soporte;
        $this->numSoportesAlquilados++;
        echo "Soporte alquilado: " . $soporte->getTitulo() . "<br>";

    } else {
        echo "No se pueden alcanzar mas soportes, límite alcanzado. <br>";
    }
}

//Recorrer array soportesAlquilados y comprobar si el soporte ya está alquilado (no se puede usar)

public function tieneAlquilado(Soporte $S): bool {
    foreach ($this->soportesAlquilados as $soporteAlquilado) {
        if ($soporteAlquilado === $S) {
            return true; // si encuentra el soporte te devuelve true
        }
    }

    return false; // si no encuentra el soporte en soportesAlquilados devuelve false
}

// muestraResumen() para que en inicio.php aparezca el resumen del cliente elegido

public function muestraResumen(): void {
    echo "cliente: " . $this->nombre . "<br>";
    echo "Numero: " .  $this->getNumero() . "<br>";
    echo "Total de alquileres: " . count($this->soportesAlquilados) . "<br>";
}

}

?>