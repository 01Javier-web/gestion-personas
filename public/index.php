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
echo $jugador2->saludar();

require_once "../class/estudiante.php";

$estudiante1 = new estudiante("Ana", "Gómez", 20, "ana.gomez@gmail.com");
$estudiante2 = new estudiante("Carlos", "López", 19, "carlos.lopez@gmail.com");

echo $estudiante1->saludar();
echo $estudiante2->saludar();

