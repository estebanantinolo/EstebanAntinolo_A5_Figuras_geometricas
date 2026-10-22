<?php
session_start();

if (isset($_SESSION['lado1'])) {
    $lado1 = $_SESSION['lado1'];
}
if (isset($_SESSION['lado2'])) {
    $lado2 = $_SESSION['lado2'];
}
if (isset($_SESSION['lado3'])) {
    $lado3 = $_SESSION['lado3'];
}

if (isset($_POST['forma'])) {
    $forma = $_POST['forma'];
} else {
    $forma = $_SESSION['forma'];
}

$_SESSION['forma'] = $forma;

if ($forma == "circulo") {
    $nombre = "Círculo";
} elseif ($forma == "cuadrado") {
    $nombre = "Cuadrado";
} elseif ($forma == "rectangulo") {
    $nombre = "Rectángulo";
} elseif ($forma == "triangulo") {
    $nombre = "Triángulo";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras geométricas FORMULARIO</title>
    <script defer src="./validaciones.js"></script>
    <link rel="stylesheet" href="./estilos/styles.css">
</head>
<body>
<main>
<h1>¡Has seleccionado el <?php echo $nombre; ?> como forma geométrica!</h1>

<form action="resultados.php" method="POST" onsubmit="return validarFormulario()">

<?php
if ($forma == "circulo") {
    echo '<label>Introduce la medida del Radio: </label>';
    echo '<input type="text" name="lado1" id="lado1" value="' . (isset($lado1) ? $lado1 : '') . '" onblur="validarLado(\'lado1\')">';
    echo '<p id="error-lado1"></p>';
    echo '<br>', '<br>';
} elseif ($forma == "cuadrado"){
    echo '<label>Introduce la medida del Lado:</label>';
    echo '<input type="text" name="lado1" id="lado1" value="' . (isset($lado1) ? $lado1 : '') . '" onblur="validarLado(\'lado1\')">';
    echo '<p id="error-lado1"></p>';
    echo '<br>', '<br>';
} elseif ($forma == "rectangulo"){
    echo '<label>Introduce la medida del Lado 1: </label>';
    echo '<input type="text" name="lado1" id="lado1" value="' . (isset($lado1) ? $lado1 : '') . '" onblur="validarLado(\'lado1\')">';
    echo '<p id="error-lado1"></p>';
    echo '<br>', '<br>';

    echo '<label>Introduce la medida del Lado 2: </label>';
    echo '<input type="text" name="lado2" id="lado2" value="' . (isset($lado2) ? $lado2 : '') . '" onblur="validarLado(\'lado2\')">';
    echo '<p id="error-lado2"></p>';
    echo '<br>', '<br>';
} elseif ($forma == "triangulo"){
    echo '<label>Introduce la medida del Lado 1: </label>';
    echo '<input type="text" name="lado1" id="lado1" value="' . (isset($lado1) ? $lado1 : '') . '" onblur="validarLado(\'lado1\')">';
    echo '<p id="error-lado1"></p>';
    echo '<br>', '<br>';

    echo '<label>Introduce la medida del Lado 2: </label>';
    echo '<input type="text" name="lado2" id="lado2" value="' . (isset($lado2) ? $lado2 : '') . '" onblur="validarLado(\'lado2\')">';
    echo '<p id="error-lado2"></p>';
    echo '<br>', '<br>';

    echo '<label>Introduce la medida del Lado 3: </label>';
    echo '<input type="text" name="lado3" id="lado3" value="' . (isset($lado3) ? $lado3 : '') . '" onblur="validarLado(\'lado3\')">';
    echo '<p id="error-lado3"></p>';
    echo '<br>', '<br>';
}
?>

<input type="hidden" name="forma" value="<?php echo $forma; ?>">

<button type="submit">Calcular</button>

</form>
</main>
</body>
</html>