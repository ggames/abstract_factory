<?php

namespace abstractFactoria;

require_once 'Automovil.php';
require_once 'Herramienta.php';

class AutomovilElectrico extends Automovil {

    public function __construct($modelo, $color, $potencia, $espacio)
    {
        parent::__construct($modelo, $color, $potencia, $espacio);
    }

    public function  mostrarCaracteristicas()
    {
        $txt = "Automoviles electrico de modelo: ". $this->modelo ;
        $txt .= ", de color: ". $this->color;
        $txt .= ", de potencia: ". $this->potencia;
        $txt .= " , de espacio: ". $this->espacio;
        \Herramientas::println($txt);
    }


}