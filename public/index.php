<?php

require_once "../class/persona.php";

$persona1 = new persona("Javier", "Ortiz", 17, "andres13ytoo@gmail.com");
$persona2 = new persona("María", "Ossa", 17, "mariaossa@gmail.com");


echo $persona1->saludar();
echo $persona2->saludar();

require_once "../class/jugador.php";

$jugador1 = new jugador("Lionel", "Messi", "Argentina", "Inter de Miami");
$jugador2 = new jugador("Cristiano", "Ronaldo", "Portugal", "Al Nassar");

echo $jugador1->saludar();
echo $jugador2->saludar();gi 

