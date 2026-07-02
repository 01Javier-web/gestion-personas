<?php

class jugador
{
  public $nombre;
  public $apellido;
  public $nacionalidad;
  public $equipo;

  public function __construct($nombre = "", $apellido = "", $nacionalidad = "", $equipo = "")
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->nacionalidad = $nacionalidad;
    $this->equipo = $equipo;
  }
public function saludar(){
  
return "Mi nombre es " . $this->nombre. " ".$this->apellido. " y soy " . $this->nacionalidad . ". Juego para el " . $this->equipo . "<br>";
}



      
}
?>