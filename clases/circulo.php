<?php 

include 'figuraGeometrica.php';

class circulo extends figuraGeometrica { 

    function __construct($tipoFigura, $lado1) {
        parent::__construct($tipoFigura, $lado1);

    }

    function calcularArea() {
        return ($this->getLado1() * $this->getLado1()) * pi();
    }

    function calcularPerimetro() {
    return ($this->getLado1()) * 2 * pi();
    }

    function __toString() {
    return $this->getTipoFigura() . " Lado 1: " . $this->getLado1() . ", Área: " . $this->calcularArea() . ", Perímetro: " . $this->calcularPerimetro();
    }

    function __destruct() {

    }

}