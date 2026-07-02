<?php

class persona
{
  public $nombre;
  public $edad;
  public $correo;
  public $apellido;

  public function __construct($nombre = "", $apellido = "", $edad = 0, $correo = "")
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
    $this->correo = $correo;
  }
public function saludar(){
  
return "Mi nombre es " . $this->nombre. " ".$this->apellido. " y tengo " . $this->edad . " años. Mi correo es: " . $this->correo. "<br>";
}



      
}
?>