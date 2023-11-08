<?php
  namespace abstractFactoria;

  

  interface FabricaVehiculo {

     public function crearAutomovil($modelo, $color, $potencia, $espacio);
     
     public function crearScooter($modelo, $color, $potencia);     
  
}