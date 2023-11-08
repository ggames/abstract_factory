<?php
  namespace abstractFactoria;

  require_once 'Scooter.php';
  require_once 'Herramienta.php';

  class ScooterElectrico extends Scooter{

    public function __construct($modelo, $color, $potencia){

        parent::__construct($modelo, $color, $potencia);
    }

    public function mostrarCaracteristicas()
    {
        $txt = "Scooter electrico de modelo: ". $this->modelo;
        $txt .= " , de color: ". $this->color;
        $txt .= " , de potencia: ". $this->potencia;

        \Herramientas::println($txt);
    }

  }