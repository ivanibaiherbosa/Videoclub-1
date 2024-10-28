<?php

include_once "Soporte.php";

class Juego extends Soporte {


    public string $consola;
    private int $minNumJugadores;
    private int $maxNumJugadores;

    public function __construct(string $titulo, int $numero, float $precio, 
    string $consola, int $minNumJugadores, int $maxNumJugadores) {

    parent::__construct($titulo, $numero, $precio);

    $this->consola=$consola;
    $this->minNumJugadores=$minNumJugadores;
    $this->maxNumJugadores=$maxNumJugadores;

    }

    public function getMinNumJugadores(): int {
        return $this->minNumJugadores;
    }

    public function getMaxNumJugadores(): int {
        return $this->maxNumJugadores;
    }

    public function muestraJugadoresPosibles(): string {

        if ($this->minNumJugadores === 1 && $this->maxNumJugadores === 1) {
            return "para un jugador";

        } elseif ($this->minNumJugadores === $this->maxNumJugadores) {
            return "para {$this->minNumJugadores} jugadores";
        } else {
            return "de {$this->minNumJugadores} a {$this->maxNumJugadores} jugadores";
        }

    }

    public function muestraResumen() : string {
       
        $resumenPadre = parent::muestraResumen();

        return $resumenPadre . "<br> tipo de consola ". $this->consola . "<br>". 
        "numero minimo de jugadores: " . $this->minNumJugadores . "<br>". 
        "numero maximo de jugadores: " . $this->maxNumJugadores;
    }

}

?>