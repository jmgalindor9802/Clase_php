<?php

// 1. Mensaje de bienvenida
function bienvenida() {
    echo "Hola bienvenido al desarrollo de programación\n";
}

// 2. Nombres y apellidos del realizador
function mostrarRealizador() {
    echo "Nombre: [Tu Nombre]\nApellido: [Tu Apellido]\n";
}

// 3. Mensaje personalizado con el nombre del realizador
function mensajePersonalizado($nombre) {
    echo "Hola $nombre bienvenido a la programación\n";
}

// 4. Mostrar un número
function mostrarNumero($numero) {
    echo "Número ingresado: $numero\n";
}

// 5. Multiplicar un número por 10
function multiplicarPor10($numero) {
    $resultado = $numero * 10;
    echo "El resultado de multiplicar $numero por 10 es: $resultado\n";
}

// 6. Leer dos números y mostrarlos
function leerDosNumeros() {
    $num1 = readline("Ingrese el primer número: ");
    $num2 = readline("Ingrese el segundo número: ");
    echo "Primer número: $num1\nSegundo número: $num2\n";
}

// 7. Suma de dos números
function sumaDosNumeros() {
    $num1 = readline("Ingrese el primer número: ");
    $num2 = readline("Ingrese el segundo número: ");
    $suma = $num1 + $num2;
    echo "La suma de $num1 y $num2 es: $suma\n";
}

// 8. Conversión de pesos a dólares y euros
function conversionMoneda($cantidadPesos) {
    $dolares = $cantidadPesos / 2000;
    $euros = $cantidadPesos / 3000;
    echo "$cantidadPesos pesos son aproximadamente $dolares dólares y $euros euros\n";
}

// 9. Conversión de pesos a dólares y euros con valores ingresados por el usuario
function conversionMonedaUsuario($cantidadPesos, $valorDolar, $valorEuro) {
    $dolares = $cantidadPesos / $valorDolar;
    $euros = $cantidadPesos / $valorEuro;
    echo "$cantidadPesos pesos son aproximadamente $dolares dólares y $euros euros\n";
}

// 10. Conversión de grados Celsius a Fahrenheit
function conversionFahrenheit($gradosCelsius) {
    $fahrenheit = ($gradosCelsius * 9 / 5) + 32;
    echo "$gradosCelsius grados Celsius son aproxim
