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

    .Estilo3 {
        font-weight: bold;
        color: #000000;
    }

    .Estilo5 {
        color: #FFFFFF
    }
    -->
    </style>
</head>

<body>
    <header> <img src="imagenes/fondo.png" width="100%" height="180px"> </header>
    <?php
  include_once 'menu.html';
  ?>
    <?php
        echo "<h2>Bienvenido".$_SESSION['nombre']."</h2>";
    ?>
    <section>
        <h1 class="Estilo1"> Base de Datos Maria DB </h1>

        <p>MySQL es un <strong>sistema de gestión de bases de datos relacionales de código abierto</strong> (RDBMS, por
            sus siglas en inglés) con un modelo cliente-servidor. RDBMS es un software o servicio utilizado para crear y
            administrar bases de datos basadas en un modelo relacional. </p>
        <?php
    $id = 0;
    $nombre = "";
    $apellido = "";
    $activo = "Si";
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $nombre = $_GET['nombre'];
      $apellido = $_GET['apellido'];
      $activo = $_GET['activo'];
    }
    ?>


        <form name="form1" method="post" action="base.php">
            <table width="365" border="1" align="center" cellpadding="3" cellspacing="3">
                <tr>
                    <th colspan="2" bgcolor="#E87912" scope="col">Registrar Uusuario </th>
                </tr>
                <tr>
                    <th width="153" bgcolor="#000000" scope="row"><span class="Estilo5">Identificador</span></th>
                    <td><input type="text" name="id" size="20" value="<?php echo $id ?>"></td>
                </tr>

                <tr>
                    <th width="153" bgcolor="#000000" scope="row"><span class="Estilo5">Nombre</span></th>
                    <td width="185" bgcolor="#F7FFF2">
                        <input name="nombre" type="text" id="nombre" value="<?PHP echo $nombre ?>">
                    </td>
                </tr>
                <tr>
                    <th bgcolor="#000000" scope="row"><span class="Estilo5">Apellido</span></th>
                    <td bgcolor="#CCCCCC"><label>
                            <input name="apellido" type="text" id="apellido" value="<?PHP echo $apellido ?>">
                        </label></td>
                </tr>
                <tr>
                    <th bgcolor="#000000" scope="row"><span class="Estilo5">Activo</span></th>
                    <td bgcolor="#F7FFF2"><span class="Estilo3">
                            <label>
                                activo
                                <?php
                if ($activo == "Si") {
                  echo "<input name=activo type=radio value=Si checked >";
                  echo "<input name=activo type=radio value=No>";
                } else {

                  echo "<input name=activo type=radio value=Si checked >";
                  echo "<input name=activo type=radio value=No>";
                }
                ?>

                            </label>
                        </span></td>
                </tr>
                <tr>
                    <th bgcolor="#000000" scope="row"><label>
                            <input type="submit" name="registrar" value="Registrar">
                            <input type="submit" name="consultar" value="Consultar">
                        </label></th>
                    <th bgcolor="#000000"><label>
                            <input type="submit" name="eliminar" value="Eliminar">
                        </label>

                        <input type="submit" name="modificar" value="Modificar">
                        </label>
                    </th>
                </tr>
            </table>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>
            <?php

      include_once 'control/Mysql.sql';
      if (isset($_POST['registrar'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $activo = $_POST['activo'];


        $sentencia = $conexion->prepare("insert into usuario (nombre, apellido, activo)values(?,?,?);");
        $resultado = $sentencia->execute([$nombre, $apellido, $activo]);

        if ($resultado == true) {
          echo "REGISTRADO CORRECTAMENTE";
        }
      }
      if (isset($_POST['eliminar'])) {
        $id = $_POST['id'];
        $sentencia = $conexion->prepare("delete from  usuario where id=?");
        $resultado = $sentencia->execute([$id]);

        if ($resultado == true) {
          echo "ELIMINADO CORRECTAMENTE";
        }
      }
      if (isset($_POST['modificar'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $activo = $_POST['activo'];

        $sentencia = $conexion->prepare("update usuario set nombre=?, apellido=?, activo=? where id=?");
        $resultado = $sentencia->execute([$nombre, $apellido, $activo, $id]);

        if ($resultado == true) {
          echo "MODIFICADO CORRECTAMENTE";
        } else {
          echo "NO SE PUDO MODIFICAR";
        }
      }

      if (isset($_POST["consultar"])) {
      }




      //PHP PDO data objects es un conjunto de clases que permite interactuar con diferentes bases de datos


      $sentencia = $conexion->prepare("Select * from Usuario");
      $sentencia->execute();

      echo "<table width=528 border=5 align=center cellpadding=5 cellspacing=5>";
      echo "   <tr>";
      echo "<th colspan=6 bgcolor=#6FB313 scope=col> Lista de Usuarios </th> </tr>";
      echo "<tr bgcolor=#333333 > <th > <span class=Estilo1> Identificacion</span>   <th> <span class=Estilo1> Nombre </span>
       <th>  <span class=Estilo1> Apellido </span> 
       <th>  <span class=Estilo1> Activo </span> 
       <th>  <span class=Estilo1> Modificar </span> 
       <th>  <span class=Estilo1> Eliminar </span> ";
      while ($consulta = $sentencia->fetch()) {

        $nombre = $consulta['nombre'];
        $apellido = $consulta['apellido'];
        $activo = $consulta['activo'];
        if ($consulta['id'] % 2 == 0) {
          echo "<tr bgcolor=#f2f2f2><td>" . $consulta['id'] . "<td> " . $consulta['nombre'] . "<td> " . $consulta['apellido'] . " <td>  " . $consulta['activo']
            . "<td><a href=base.php?id=" . $consulta['id'] . "&nombre=$nombre&apellido=$apellido&activo=$activo >Modificar</a>   <td><a href=base.php?id=" . $consulta['id'] . " >Eliminar</a></tr>";
        } else {
          echo "<tr ><td>" . $consulta['id'] . "<td> " . $consulta['nombre'] . "<td> " . $consulta['apellido'] . " <td>  " . $consulta['activo']
            . "<td><a href=base.php?id=" . $consulta['id'] . "&nombre=$nombre&apellido=$apellido&activo=$activo >Modificar</a> <td><a  href=base.php?id=" . $consulta['id'] . " >Eliminar</a></tr>";
        }
      }
      echo "<table>";



      ?>
        </p>
        <p>&nbsp; </p>
    </section>
    <p>
    <footer></footer>
    </p>
    <p>&nbsp;</p>

    <p>&nbsp; </p>
</body>