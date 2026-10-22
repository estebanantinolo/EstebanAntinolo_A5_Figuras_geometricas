<?php

class figuraGeometrica {


    private $tipoFigura;
    private $lado1;


    function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    function getTipoFigura() {
        return $this->tipoFigura;
    }

    function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    function getLado1() {
        return $this->lado1;
    }

    function __construct($tipoFigura, $lado1) {
    $this->setTipoFigura($tipoFigura);
    $this->setLado1($lado1);
    }

    function calcularArea() {
        
    }

    function __destruct() {

    }

}











