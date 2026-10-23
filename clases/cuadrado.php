<?php 

include 'figuraGeometrica.php';

class cuadrado extends figuraGeometrica { 

    function __construct($tipoFigura, $lado1) {
        parent::__construct($tipoFigura, $lado1);

    }

    function calcularArea() {
        return $this->getLado1() * $this->getLado1();
    }

    function calcularPerimetro() {
    return ($this->getLado1()) * 4;
    }

    function __toString() {
    return $this->getTipoFigura() . " Lado 1: " . $this->getLado1() . ", Área: " . $this->calcularArea() . ", Perímetro: " . $this->calcularPerimetro();
    }

    function __destruct() {

    }

}