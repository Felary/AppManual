<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="short cut icon" href="imagenes/carita.ico" type="image/x-icon">
  <link rel="stylesheet" src="style.css" href="css/estilo1.css">
  <title> Manual PHP </title>
  <style type="text/css">
    <!--
    .Estilo1 {
      color: #FF9900
    }

    .Estilo2 {
      color: #CCCCCC
    }
    -->
  </style>
</head>

<body>
  <p>
  <header> <img src="imagenes/fondo.png" width="100%" height="180px"> </header>
  <?php
  include_once 'menu.html'
    ?>
  <section> </section>
  <footer></footer>
  </p>
  <p>Un
    array
    es sencillamente unatabla de valores </p>
  <h2 class="Estilo1">Vectores Escalares</h2>
  <p>Es un&nbsp;<strong>tipo de array</strong>&nbsp;que tiene &iacute;ndices num&eacute;ricos y se accede con un
    n&uacute;mero entero a cada valor del mismo.</p>
  <p>$variable = array($valor1, $valor2, $valor2,...);</p>

  <p>
    <?php
    $lista = array("Aquiles Tumbo Rico", "Sebastian Verdugo", "Elton Tito", "Soyla Rosa Espinoza", "Armando Hoyos");



    ?>
  </p>
  <table width="372" border="5" cellspacing="5" cellpadding="5">
    <tr>
      <th colspan="2" bordercolor="#FF6600" bgcolor="#FF9933" scope="col">Lista de nombres</th>
    </tr>
    <tr>
      <th width="55" bgcolor="#000000"><span class="Estilo2">Posicion</span></td>
      <th width="268" bgcolor="#000000"><span class="Estilo2">Nombre</span></td>
    </tr>
    <?php
    for ($posicion = 0; $posicion < count($lista); $posicion++) {
      if ($posicion % 2 == 0)
        echo "<tr> <td>  $posicion <td> $lista[$posicion] ";
      else
        echo "<tr bgcolor=#afaba1> <td >  $posicion <td> $lista[$posicion] ";
    }
    ?>
  </table>

  <p>&nbsp;</p>
  <h2>Vectores Asociativos </h2>
  <p>Este es un array cuyos valores se asignan mediante claves:</p>
  <p>Ejemplo</p>
  <p>$equipo = array(portero=&gt;'Cech', defensa=&gt;'Terry', medio=&gt;'Lampard', delantero=&gt;'Torres');</p>
  <div id="crayon-660c6476a9489369388854-2">&nbsp;</div>

  <?php
  $equipo = array('portero' => 'Camilo Vargas', 'defensa' => 'Yerry Mina', 'medio' => 'James', 'delantero' => 'Luis Noches');

  echo "<h3>Mi equipo la furia tamalera </h3><hr>";
  foreach ($equipo as $posicion => $jugador) {
    echo "El " . $posicion . " es " . $jugador;
    echo "<hr>";

  }
  ?>
  <table width="372" border="5" cellspacing="5" cellpadding="5">
    <tr>
      <th colspan="2" bordercolor="#FF6600" bgcolor="#FF9933" scope="col">Liga Colombiana</th>
    </tr>
    <tr>
      <th width="55" bgcolor="#000000"><span class="Estilo2">Puntaje</span></td>
      <th width="268" bgcolor="#000000"><span class="Estilo2">Equipo</span></td>
    </tr>

    <?php
    $tablaColombia = array(35 => "Tolima", 32 => "Bucaramanga", 31 => "Santa fe", 30 => "Pereira", 29 => "Equidad");
    $aux = 0;
    foreach ($tablaColombia as $puntaje => $equipo) {

      if ($aux % 2 == 0)
        echo "<tr> <td>  $puntaje <td> $equipo ";
      else
        echo "<tr bgcolor=#afaba1> <td >  $puntaje <td> $equipo ";
      $aux++;
    }

    ?>
  </table>
  <br>
  <p>&nbsp; </p>
</body>