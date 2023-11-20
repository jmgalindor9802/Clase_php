<!DOCTYPE html>
<html>

<head>
    <title>Script PHP y HTML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Ejercicio 1</button>
  </div>
</nav>

<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0" style="padding: 2%;">
<form >
        <!-- Punto 1 -->
        <h3>PUNTO 1</h3>
        <p>Diseñar un Algoritmo que permita determinar a partir de dos números digitados cuál de los
dos es mayor</p>
      <p>Ingrese un número 1: <input type='text' name='numero1'></p>
      <p>Ingrese un número 2: <input type='text' name='numero2'></p>
      <button type=submit>Enviar</button>
  </form>
  <?php
  $numero1 = $_GET["numero1"];
  $numero2 = $_GET["numero2"];

        if ($numero1 > $numero2) {
            echo "<p>$numero1 es mayor que $numero2</p>";
        } elseif ($numero1 < $numero2) {
            echo "<p>$numero2 es mayor que $numero1</p>";
        } else {
            echo "<p>Ambos números son iguales</p>";
        }
  
  ?>    
</div>

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
