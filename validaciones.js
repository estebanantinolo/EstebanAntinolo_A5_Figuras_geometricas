
function validarLado(id) {
    lado = document.getElementById(id).value;
    error = document.getElementById("error-" + id);

    if (lado.trim() == "") {
        error.textContent = "Este campo es obligatorio";
        error.style.color = "red";
        return false;
    } else if (isNaN(lado) || lado <= 0) {
        error.textContent = "Introduce un número válido mayor que 0";
        error.style.color = "red";
        return false;
    } else {
        error.textContent = "";
        return true;
    }
}

function validarFormulario() {
    lado1 = validarLado("lado1");

    if (document.getElementById("lado2")) {
        lado2 = validarLado("lado2");
    } else {
        lado2 = true;
    }

    if (document.getElementById("lado3")) {
        lado3 = validarLado("lado3");
    } else {
        lado3 = true;
    }

    return lado1 && lado2 && lado3;
}