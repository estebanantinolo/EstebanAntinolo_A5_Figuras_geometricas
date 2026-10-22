<?php

include 'figuraGeometrica.php';

class triangulo extends figuraGeometrica {

    private $lado2;
    private $lado3;


    function setlado2($lado2) {
        $this->lado2 = $lado2;
    }

    function getLado2() {
        return $this->lado2;
    }

    function setLado3($lado3) {
        $this->lado3 = $lado3;
    }

    function getLado3() {
        return $this->lado3;
    }

    function __construct($tipoFigura, $lado1, $lado2, $lado3) {
    parent::__construct($tipoFigura, $lado1);
    $this->setLado2($lado2);
    $this->setLado3($lado3);
    }

    function calcularArea() {
    $semiperimetro = ($this->getLado1() + $this->getLado2() + $this->getLado3()) / 2;
        // sqrt = calcular raiz cuadrada
    return sqrt($semiperimetro * ($semiperimetro - $this->getLado1()) * ($semiperimetro - $this->getLado2()) * ($semiperimetro - $this->getLado3()));
    }

    function calcularPerimetro() {
    return $this->getLado1() + $this->getLado2() + $this->getLado3();
    }

    function __toString() {
    return $this->getTipoFigura() . "Lado 1: " . $this->getLado1() . ", Lado 2: " . $this->getLado2() . ", Lado 3: " . $this->getLado3();
    }

    function __destruct() {

    }

}