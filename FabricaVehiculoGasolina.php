<?php
   
   namespace abstractFactoria;

   require_once 'FabricaVehiculo.php';
   require_once 'AutomovilGasolina.php';
   require_once 'ScooterGasolina.php';

   class FabricaVehiculoGasolina implements FabricaVehiculo {

    public function crearAutomovil($modelo, $color, $potencia, $espacio)
    {
        return new AutomovilGasolina($modelo, $color, $potencia, $espacio);
    }

    public function crearScooter($modelo, $color, $potencia)
    {
        return new ScooterGasolina($modelo, $color, $potencia);
    }
   }