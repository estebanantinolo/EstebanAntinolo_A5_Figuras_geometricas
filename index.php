<?php

session_start();

if (isset($_POST['nuevaFigura'])) {
    session_unset();
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Figuras geométricas ESCOGER</title>
        <link rel="stylesheet" href="./estilos/styles.css">
    </head>
        <body>
            <main>
                <h1>Calculadora de figuras geométricas</h1>
                    <form action="formulario.php" method="POST">

                        <select id="forma" name="forma" required> 
                        <option value="circulo">Círculo</option>
                        <option value="cuadrado">Cuadrado</option> 
                        <option value="rectangulo">Rectángulo</option> 
                        <option value="triangulo">Triángulo</option> 

                    </select>

                    <button type="submit">Continuar</button>

                    <div class="formas">
                        <img src="./img/circulo.png" alt="Círculo">
                        <img src="./img/cuadrado.png" alt="Cuadrado">
                        <img src="./img/rectangulo.png" alt="Rectángulo">
                        <img src="./img/triangulo.png" alt="Triángulo">
                    </div>

                    </form>
            </main>
            
        </body>
</html>