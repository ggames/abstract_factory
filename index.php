<?php
  namespace abstractFactoria;

  

  require_once("./Herramienta.php");
  require_once "FabricaVehiculoElectrico.php";
  require_once "FabricaVehiculoGasolina.php";


  define("NUM_AUTOS", 3);
  define("NUM_SCOOTER",2);

  $autos = [];

  $scooters = [];

  $option = \Herramientas::readln('Desea utilizar vehiculo electricos (1) o de Gasolina (2): ');

  if($option == '1') {
     $fabrica = new FabricaVehiculoElectrico();
  } else {
    $fabrica = new FabricaVehiculoGasolina();
  }

  for($index = 0; $index < NUM_AUTOS; $index++){
    $autos[$index] = $fabrica->crearAutomovil('Estandar', 'amarillo', 6 + $index, 3.2);
  }
  
  for($index = 0; $index < NUM_SCOOTER; $index++){
    $scooters[$index] = $fabrica->crearScooter('clásico ', 'rojo', 2 + $index   );
  }

  foreach($autos as $auto){
    $auto->mostrarCaracteristicas();
  }

  foreach($scooters as $scooter){
    $scooter->mostrarCaracteristicas();
  }