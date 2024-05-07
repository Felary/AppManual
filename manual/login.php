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

    <section>

        <nav>
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
            </ul>
        </nav>
        <h1> Inicion de sesion</h1>

        <p>&nbsp;</p>
    </section>
    <footer></footer>
    <form name="form1" method="post" action="login.php">
        <table width="224" border="1" align="center">
            <tr bordercolor="#000000">
                <th colspan="2" bgcolor="#FF6600" scope="col">User Login </th>
            </tr>
            <tr>
                <th width="64" bordercolor="#F0F0F0" bgcolor="#000000" scope="row"><label><img
                            src="imagenes/usuario.png" width="50" height="50"></label></th>
                <td width="144" bordercolor="#000000" bgcolor="#000000"><label>
                        <input name="txtUsuario" type="text" id="txtUsuario">
                    </label></td>
            </tr>
            <tr>
                <th bgcolor="#000000" scope="row"><img src="imagenes/password.png" width="50" height="50"></th>
                <td bordercolor="#000000" bgcolor="#000000"><label>
                        <input name="txtPassword" type="password" id="txtPassword">
                    </label></td>
            </tr>
            <tr>
                <th colspan="2" bgcolor="#FF6600" scope="row"><label>
                        <input name="btnIniciar" type="submit" id="btnIniciar" value="Verificar">
                    </label></th>
            </tr>
            <tr>
                <th colspan="2" bgcolor="#000000" scope="row"><label>
                        <input name="btnRegistrar" type="submit" id="btnRegistrar" value="Registrar">
                    </label></th>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['btnIniciar'])) {
        $nombre=" felipe";
        header("Location: index.php?nombre=$nombre");
    }
    ?>
</body>

</html>