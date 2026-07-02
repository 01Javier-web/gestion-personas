<?php
require_once "persona.php";
class estudiante extends persona
{
 public function saludar()
 {
  return "Hola soy estudiante". "<br>";
 }
}