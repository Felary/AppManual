<?php
session_start();
if(!isset($_SESSION['nombre'])){
    header("Location: login.php");
}
?>
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
        -->
    </style>
</head>

<body>
    <header> <img src="imagenes/fondo.png" width="100%" height="180px"> </header>
    <?php
    include_once 'menu.html'
        ?>
         <?php
        echo "<h2>Bienvenido".$_SESSION['nombre']."</h2>";
    ?>
    <section>
        <?php
        $_SESSION['nombre'] = " eruifhadui";
       
        print ("<h1> nombre " . $_SESSION['nombre']. "</h1>");

        echo "<a href=sesion2.php> ir a Sesión 2</a>";

        ?>
    </section>
    <footer></footer>
</body>

</html>