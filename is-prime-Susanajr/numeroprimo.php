<?php
$num = $_GET['numero'];
$primo = true;

// Verificar si el número es menor que 2
if ($num < 2) {
    $primo = false;
} else {
    // Verificar divisibilidad desde 2 hasta la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $primo = false;
            break;
        }
    }
}

// Mostrar el resultado
if ($primo) {
    echo "El número $num es primo";
} else {
    echo "El número $num no es primo";
}
?>

