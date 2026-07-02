<?php

require_once "../class/persona.php";

$persona1 = new persona();

$persona1->nombre = "Javier";
$persona1->apellido = "Ortiz";
$persona1->edad = 17;
$persona1->correo = "andres13ytoo@gmail.com";

$persona2 = new persona();
$persona2->nombre = "María";
$persona2->apellido = "Ossa";
$persona2->edad = 17;
$persona2->correo = "mariaossa@gmail.com";

echo $persona1->saludar();
echo $persona2->saludar();
