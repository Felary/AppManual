<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short cut icon" href="imagenes/carita.ico" type="image/x-icon" >
    <link rel="stylesheet" src="style.css" href="css/estilo1.css">
    <title> Manual PHP </title>
    <style type="text/css">
<!--
.Estilo1 {
	font-size: 24px;
	font-weight: bold;
}
-->
    </style>
</head>
<body>
    <header> <img src="imagenes/fondo.png" width="100%" height="180px"> </header>
    <?php
    include_once 'menu.html'
    ?>
    <section>
        <h1>&nbsp;</h1>
        <h1>Variables en PHP </h1>
        <p>Las variables PHP <strong>son utilizadas para almacenar valores como los numéricos, caracteres, líneas de caracteres, o memoria para que puedan ser utilizados en cualquier parte de la programación</strong>.</p>
        <p class="Estilo1">Ejemplo</p>
        <p>$nombre = &quot;Helena Nito del bosque&quot;;         </p>
        <p>
          <?php
    $auxiliar = "AlqTomas LLamas";
    echo "Nombre $auxiliar";
    $auxiliar = 7;
    echo "Numero: $auxiliar";
?>
        </p>
        <p>&nbsp;            </p>
    </section>
    <footer></footer>
</body>
</html>