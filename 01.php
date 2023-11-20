<!DOCTYPE html>
<html>

<head>
    <title>Script PHP y HTML</title>
</head>

<body>

    <?php
    // Punto 1
    echo "<p>1. Hola bienvenido al desarrollo de programación</p>";

    // Punto 2
    $nombre = "Juan Manuel";
    $apellido = "Galindo Rojas";
    echo "<p>2. Nombres y apellidos del realizador: $nombre $apellido</p>";

    // Punto 3
    echo "<p>3. Hola $nombre, bienvenido a la programación</p>";
    ?>

    <form action="">
        <!-- Punto 4 -->
        <p>4. Ingrese un número: <input type='text' name='numero'></p>
        <button type=submit>Enviar</button>
    </form>

    <?php
    // Punto 4
    $numero = $_GET["numero"];
    echo "El numero es $numero";
    ?>

    <form action="">
        <!-- Punto 5 -->
        <p>5. Ingrese un número para multiplicar por 10: <input type='text' name='numero_multiplicar'></p>
        <button type=submit>Enviar</button>
    </form>

    <?php
    // Punto 5
    $numero_multiplicar = $_GET["numero_multiplicar"];
    $numero_multiplicar = $numero_multiplicar * 10;
    echo "El numero es $numero_multiplicar";
    ?>

    <?php
    // Punto 6
    echo "<p>6. Ingrese dos números: </p>";
    ?>
    <form action="">
        <p>Ingrese un número 1: <input type='text' name='numero1'></p>
        <p>Ingrese un número 2: <input type='text' name='numero2'></p>
        <button type=submit>Enviar</button>
    </form>

    <?php
    $numero1 = $_GET["numero1"];
    echo "El numero 1 es $numero1 <br>";

    $numero2 = $_GET["numero2"];
    echo "El numero 2 es $numero2";
    ?>

    <form action="">
        <!-- Punto 7 -->
        <h3>PUNTO 7</h3>
        <p>Desarrollar un algoritmo que permita saber la suma de dos números digitados por el usuario.</p>
        <p>Ingrese un número 1: <input type='text' name='numero1'></p>
        <p>Ingrese un número 2: <input type='text' name='numero2'></p>
        <button type=submit>Enviar</button>
    </form>
    <?php
    $numero11 = $_GET["numero1"];
    $numero22 = $_GET["numero2"];
    $sumar = $numero11 + $numero22;
    echo "La suma es: $sumar";
    ?>

    <form action="">
        <!-- Punto 8 -->
        <h3>PUNTO 8</h3>
        <p>Diseñar un algoritmo que a partir de una cantidad de pesos ingresada, permita tener el valor equivalente en dólares y euros (suponga que 1 dólar son 2000 pesos y 1 euro son 3000 pesos).</p>
        <p>Ingrese una cantidad: <input type='text' name='pesos'></p>
        <button type=submit>Enviar</button>
    </form>
    <?php
    $pesos = $_GET["pesos"];
    $dolares = $pesos * 2000;
    $euros = $pesos * 3000;
    echo "$ $pesos son $dolares dolares <br>";
    echo "$ $pesos son $euros euros";
    ?>

    <form action="">
        <!-- Punto 9 -->
        <h3>PUNTO 9</h3>
        <p>Realizar una variación del algoritmo del punto 8 de forma que sea el usuario quien digite el valor del dólar y el valor del euro.</p>
        <p>Ingrese una cantidad: <input type='text' name='pesos2'></p>
        <p>Ingrese el valor del dolar: <input type='text' name='valor_dolar'></p>
        <p>Ingrese el valor del euro: <input type='text' name='valor_euro'></p>
        <button type=submit>Enviar</button>
    </form>
    <?php
    $pesos2 = $_GET["pesos2"];
    $valor_dolar = $_GET["valor_dolar"];
    $valor_euro = $_GET["valor_euro"];
    $dolares2 = $pesos2 * $valor_dolar;
    $euros2 = $pesos2 * $valor_euro;
    echo "$ $pesos2 son $dolares2 dolares <br>";
    echo "$ $pesos2 son $euros2 euros";
    ?>

    <form action="">
        <!-- Punto 10 -->
        <h3>PUNTO 10</h3>
        <p>Diseñar un algoritmo que a partir de grados centígrados digitados por el usuario, pueda obtener su equivalente en grados Fahrenheit. Utilice para ello la siguiente fórmula: 1. F= C*9/5 + 32</p>
        <p>Ingrese una cantidad: <input type='text' name='grados_c'></p>
        <button type=submit>Enviar</button>
    </form>
    <?php
    $grados_c = $_GET["grados_c"];
    $grados_f = $grados_c * 9 / 5 + 32;
    echo "$grados_c °C son equivalentes a $grados_f F<br>";
    ?>

    <form action="">
        <!-- Punto 11 -->
        <h3>PUNTO 11</h3>
        <p>Desarrollar un algoritmo que a partir de la fecha de nacimiento digitada (año de nacimiento) permita determinar la edad de una persona.</p>
        <p>Ingrese su año de nacimiento: <input type='text' name='ano_nac'></p>
        <button type=submit>Enviar</button>
    </form>
    <?php
    $ano_nac = $_GET["ano_nac"];
    $añoActual = 2023;
    $edad = $añoActual - $ano_nac;
    echo "Su edad es de $edad años<br>";
    ?>

    <?php
    // Punto 12
    echo "<p>12. Tabla de multiplicar del 1 al 10:</p>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>$i * 1 = " . ($i * 1) . "</li>";
    }
    echo "</ul>";

    // Punto 13
    echo "<p>13. Tabla de multiplicar del 5 al 10:</p>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>$i * 5 = " . ($i * 5) . "</li>";
    }
    echo "</ul>";

    // Punto 14
    echo "<p>14. Ingrese un número para la tabla de multiplicar: <input type='text' name='numero_tabla'></p>";
    ?>

<form action="">
        <!-- Punto 14 -->
        <h3>PUNTO 11</h3>
        <p>Realizar un algoritmo que imprima la tabla de multiplicar del número digitado por pantalla desde o hasta 10</p>
        <p>Ingrese un número: <input type='text' name='num_tabla'></p>
        <button type=submit>Enviar</button>
    </form>
    <?php
    $num_tabla = $_GET["num_tabla"];

    for ($i = 1; $i <= 10; $i++) {
        echo "<li>$i * $num_tabla = " . ($i * $num_tabla) . "</li>";
    }
    echo "</ul>";
    ?>

</body>

</html>
