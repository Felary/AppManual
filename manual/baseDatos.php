<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short cut icon" href="imagenes/carita.ico" type="image/x-icon">
    <link rel="stylesheet" src="style.css" href="css/estilo1.css">
    <title> Manual PHP </title>

</head>

<body>
    <header> <img src="imagenes/fondo.png" width="100%" height="180px"> </header>
    <?php
    include_once 'menu.html'
    ?>
    <section>
        <h1>Base de Datos Maria DB</h1>
    </section>
    <footer></footer>

    <?php
    function mostrarTablaUsuarios()
    {
        echo "
    <!-- Se crea una tabla para mostrar los datos de la tabla usuario -->
    <table width=500 border=5 align=center cellpadding=3 cellspacing=3>
    <!--    Se crean las columnas de la tabla-->
    <tr><th bgcolor='#FF6600' scope='col' colspan='4'>Lista de Usuarios</th></tr>
    <tr>
    <th bgcolor='#6FB313' scope='col'>ID</th>
    <th bgcolor='#6FB313' scope='col'>NOMBRE</th>
    <th bgcolor='#6FB313' scope='col'>APELLIDO</th>
    <th bgcolor='#6FB313' scope='col'>ACTIVO</th>
    </tr>";
    }
    ?>

    <?php
    // PHP PDO data obajects es un conjunto de clases que permite interactuar con diferentes bases de datos
    $servidor = "127.0.0.1";
    $usuario = "root";
    $contraseña = "";

    //Se crea un boton para conectarse a la base de datos
    echo "<form action='baseDatos.php' method='post'>";
    echo "<input type='submit' name='conectar' value='Conectar'>";
    echo "</form>";
    //Se crea un boton para desconectarse de la base de datos
    echo "<br><form action='baseDatos.php' method='post'>";
    echo "<input type='submit' name='desconectar' value='Desconectar'>";
    echo "</form>";
    //Se crea un boton para insertar un registro en la base de datos
    echo "<br><form action='baseDatos.php' method='post'>";
    echo "<input type='submit' name='insertar' value='Insertar'>";
    echo "</form>";

    if (isset($_POST['conectar'])) {
        //Se Crea el try catch para manejar las excepciones
        try {
            //Se crea la conexion a la base de datos con PDO y se le pasa el servidor, la base de datos, el usuario y la contraseña 
            $conexion = new PDO("mysql:host=$servidor;dbname=bd_biblioteca", $usuario, $contraseña);
            //Se establece el modo de error a excepcion para que muestre los errores
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Se muestra un mensaje de conexion exitosa
            echo "<br> Conexion exitosa <br>";
        } catch (PDOException $msg) {
            //En caso de error se muestra un mensaje con el error
            echo "Conexion fallida: " . $msg->getMessage();
        }


        // Llamar a la función
        mostrarTablaUsuarios();

        //Se crea una sentencia para seleccionar todos los registros de la tabla usuario
        $sentencia = $conexion->prepare("SELECT * FROM usuario");
        //Se ejecuta la sentencia
        $sentencia->execute();
        //Se recorre el resultado de la sentencia   
        while ($consulta = $sentencia->fetch()) {
            //Se muestran los datos en la tabla
            echo "<tr>";
            echo "<td> " . $consulta['id'] . "</td>";
            echo "<td> " . $consulta['nombre'] . "</td>";
            echo "<td> " . $consulta['apellido'] . "</td>";
            echo "<td> " . $consulta['activo'] . "</td>";
            echo "</tr>";
        }
    }

    ?>
    </table>

</body>