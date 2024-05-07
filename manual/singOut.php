
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
    <nav>
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>
        </ul>
    </nav>
    <?php
    session_start();
    session_destroy();
    echo "<h1> A finalizado la session"
    ?>

    <section>
    </section>
    <footer></footer>
</body>

</html>