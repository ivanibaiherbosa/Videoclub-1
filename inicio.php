<?php 
include_once "Soporte.php";
include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";
include_once "Cliente.php";

$soporte1 = new Soporte("Tenet", 22, 3);
$miCinta = new CintaVideo("los cazafantasmas", 23, 3.5, 107);
$miDvd = new Dvd("Origen", 24, 15, "es, en, fr", "16:9");
$miJuego = new Juego("the last of us", 26, 49, "ps4", 1, 1);

/* $cliente1 = new cliente("Iván", 1, 5); // en este caso especial maxAlquilerConcurrente no es el valor por defecto (3) y es 5

 $cliente1->alquilarSoporte($miCinta);
 $cliente1->alquilarSoporte($miDvd);

 $cliente1->devolver(22); // devolver soporte que SI tiene alquilado

 $cliente1->devolver(99); // devolver soporte que NO tiene alquilado (mensaje de que no estaba alquilado)

 $cliente2 = new Cliente("Alumno anónimo", 2);
 
 $cliente2->alquilarSoporte($soporte1);
*/ 

echo  $soporte1->titulo;

echo  "<br> precio: " . $soporte1->getPrecio() . " euros"; 
 
echo "<br> precio iva incluido: " . $soporte1->getPrecioConIva() . " euros"; ;
 
echo "<br> el resumen es: " . $soporte1->muestraResumen();

echo "<br> ----------------------------------------------";

//----------------------------------------------

echo "<br>" . $miCinta->titulo;

echo "<br> Precio: " . $miCinta->getPrecio() . "euros";

echo "<br> precio iva incluido: " . $miCinta->getPrecioConIva() . " euros"; 

echo "<br> el resumen es: " . $miCinta->muestraResumen();

echo "<br> ----------------------------------------------";

//-----------------------------------------------
 
echo "<br>". $miDvd->titulo;

echo "<br> Precio: ". $miDvd->getPrecio(). " euros";

echo "<br> precio iva incluido: " . $miDvd->getPrecioConIva() . " euros";

echo "<br> " . $miDvd->muestraResumen();

echo "<br> -----------------------------------------------";

//------------------------------------------------

echo "<br>". $miJuego->titulo;

echo "<br> Precio: " . $miJuego->getPrecio(). " euros";

echo "<br> precio con iva incluido: " . $miJuego->getPrecioConIva()."euros";

echo "<br> jugadores posibles: ". $miJuego->muestraJugadoresPosibles();

echo "<br> ". $miJuego->muestraResumen();

echo "<br> -----------------------------------------------";

//------------------------------------------------

/* echo "<br>Cliente número: " . $cliente1->getNumero();

echo "<br>Nombre: " . $cliente1->nombre;

echo "<br>Max Alquiler Concurrente: " . $cliente1->getMaxAlquilerConcurrente();

echo "<br>Resumen del Cliente: <br>";

$cliente1->muestraResumen();

echo "<br>-----------------------------------------------";

//----------------------------------------------------------

echo "<br> Cliente número: " . $cliente2->getNumero();

echo "<br> Nombre: " . $cliente2->nombre;

echo "<br> Max Alquiler Concurrente: " . $cliente2->getMaxAlquilerConcurrente();

echo "<br> Resumen del cliente: <br>";

$cliente2->muestraResumen();

echo "<br> listar alquileres: " . $cliente2->listarAlquileres();


echo "------------------------------------------";
*/

?>