
<?php

include 'figuraGeometrica.php';

class rectangulo extends figuraGeometrica {

    private $lado2;

    function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    function getLado2() {
        return $this->lado2;
    }

    function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1);
        $this->setLado2($lado2);
    }

    function calcularArea() {
        return $this->getLado1() * $this->getLado2();
    }

    function calcularPerimetro() {
        return 2 * ($this->getLado1() + $this->getLado2());
    }

    function __toString() {
        return $this->getTipoFigura() . " Lado 1: " . $this->getLado1() . ", Lado 2: " . $this->getLado2() . ", Área: " . $this->calcularArea() . ", Perímetro: " . $this->calcularPerimetro();
    }

    function __destruct() {

    }

}
