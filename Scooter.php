<?php

namespace abstractFactoria;



abstract class Scooter
{

    public function __construct(
        protected $modelo,
        protected $color,
        protected $potencia
    ) {
    }

    public abstract function mostrarCaracteristicas(); 
}
