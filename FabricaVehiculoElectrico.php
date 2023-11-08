<?php
   namespace abstractFactoria;

   require_once 'FabricaVehiculo.php';
   require_once 'AutomovilElectrico.php';
   require_once 'ScooterElectrico.php';

   class FabricaVehiculoElectrico implements FabricaVehiculo {

    public function crearAutomovil($modelo, $color, $potencia, $espacio)
    {
        return new AutomovilElectrico($modelo, $color, $potencia, $espacio);
    }


    public function crearScooter($modelo, $color, $potencia)
    {
        return new ScooterElectrico($modelo, $color, $potencia);
    }

   }