<?php

namespace abstractFactoria;


abstract class Automovil
{

    public function __construct(
        protected $modelo,
        protected $color,
        protected $potencia,
        protected $espacio
    ) {
    }

    public abstract function mostrarCaracteristicas();
}
