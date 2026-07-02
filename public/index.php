<?php

require_once "../class/persona.php";

$persona1 = new persona("Javier", "Ortiz", 17, "andres13ytoo@gmail.com");
$persona2 = new persona("María", "Ossa", 17, "mariaossa@gmail.com");


echo $persona1->saludar();
echo $persona2->saludar();


