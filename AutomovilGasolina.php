<?php

 namespace abstractFactoria;

 require_once 'Automovil.php';
 require_once 'Herramienta.php';

 class AutomovilGasolina extends Automovil{

    public function __construct($modelo, $color, $potencia, $espacio)
    {
        parent::__construct($modelo, $color, $potencia, $espacio);     
    }

    public function mostrarCaracteristicas()
    {
        $txt = "Automovil  gasolina de modeulo: ". $this->modelo;
        $txt .= " , de color: ". $this->color;
        $txt .= ", de potencia: ".$this->potencia;
        $txt .= ", de espacio". $this->espacio;

       \Herramientas::println($txt);
    }

 } 