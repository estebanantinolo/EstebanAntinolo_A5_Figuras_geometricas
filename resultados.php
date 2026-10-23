<?php
session_start();

$forma = $_POST['forma'];

// en caso de que sea circulo o cuadrado solo recibe un parámetro
$lado1 = $_POST['lado1'];

// en caso de que sea trjangulo o rectangulo recibe mas parámetros + añadimos los includes segun la forma

if($forma == "rectangulo"){
    $lado2 = $_POST['lado2'];
    $_SESSION['lado2'] = $lado2;
    include 'clases/rectangulo.php';

} elseif($forma == "triangulo"){
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];
    $_SESSION['lado2'] = $lado2;
    $_SESSION['lado3'] = $lado3;
    include 'clases/triangulo.php';

} elseif($forma == "circulo"){
    include 'clases/circulo.php';

} elseif($forma == "cuadrado"){
    include 'clases/cuadrado.php';
}

$_SESSION['forma'] = $forma;
$_SESSION['lado1'] = $lado1;

// realizar funciones

if ($forma == "circulo") {
   
$figura = new circulo($forma, $lado1);
$nombre = "Círculo";

} elseif ($forma == "cuadrado") {

$figura = new cuadrado($forma, $lado1);
$nombre = "Cuadrado";

} elseif ($forma == "rectangulo") {

$figura = new rectangulo($forma, $lado1, $lado2);
$nombre = "Rectángulo";

} elseif ($forma == "triangulo") {

$figura = new triangulo($forma, $lado1, $lado2, $lado3);
$nombre = "Triángulo";

}

// calcular area y perimetro

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma geométrica: <?php echo $forma ?></title>
    <link rel="stylesheet" href="./estilos/styles.css">
</head>
<body>
    <main>
<h1>Resultados del <?php echo $nombre; ?></h1>

<img src="<?php echo './img/' . $forma . '.png'; ?>" style="width: 100px">
<p>Figura y medida/s: <?php echo $figura; ?></p>

<form action="formulario.php" method="POST">
    <input type="hidden" name="forma" value="<?php echo $forma; ?>">
    <button type="submit">Volver al formulario</button>
</form>

<form action="index.php" method="POST">
    <button type="submit" name="nuevaFigura">Elegir otra figura</button>
</form>
</main>
</body>
</html>