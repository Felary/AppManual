<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short cut icon" href="imagenes/carita.ico" type="image/x-icon" >
    <link rel="stylesheet" src="style.css" href="css/estilo1.css">
    <title> Manual PHP </title>
</head>
<body>
    <header> <img src="imagenes/fondo.png" width="100%" height="180px"> </header>
    <?php
    include_once 'menu.html'
    ?>
    <section>
        <h1> Formularios con PHP </h1>
        <table align=center cellspacing=30>
            <tr><td>
        <form action="prueba.php" method=get>
            <table align=center bordercolor=orange border=5>
                <tr>
                    <th colspan=2> Datos Personales </th>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td><input type="text" name=nombre ></td>
                </tr>
                <tr>
                    <th>Apellido</th>
                    <td><input type="text" name=ape value="Cota" ></td>
                </tr>
                <tr>
                    <th>Login</th>
                    <td><input type="text" name=login ></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name=clave ></td>
                </tr>
                <tr>
                    <td> <input type="submit"></td>
                    <td> <input type="reset"></td>
                </tr>
            </table>

        </form>
        </td>
        <td>
        <form action="formularios.php" method=post>
            <table align=center bordercolor=orange border=5>
                <tr>
                    <th colspan=2> Calculadora </th>
                </tr>
                <tr>
                    <th>Numero 1</th>
                    <td><input type="text" name=numero1 ></td>
                </tr>
                <tr>
                    <th>Numero 2</th>
                    <td><input type="text" name=numero2 ></td>
                </tr>
                <tr>
                    <th>Resultado</th>
                    <td>
                        <?php
                        //isset permite saber si la variable existe
                        if(isset($_POST['operacion']))
                        {
                                $operacion = $_POST['operacion'];
                                $numero1 = $_POST['numero1'];
                                $numero2 = $_POST['numero2'];

                            if($operacion =="+")
                            {
                                $suma= $numero1 + $numero2; 
                            }
                            if($operacion =="-")
                            {
                                $suma= $numero1 - $numero2; 
                            }
                            if($operacion =="/")
                            {
                                $suma= $numero1 / $numero2; 
                            }
                            if($operacion =="*")
                            {
                                $suma= $numero1 - $numero2; 
                            }
                            
                            echo $suma;                        
                    }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name=operacion value="+" > </td>
                    <td><input type="submit" name=operacion value="-" > </td>
                </tr>
                <tr>
                    <td><input type="submit" name=operacion value="/" > </td>
                    <td><input type="submit" name=operacion value="*" > </td>
                </tr>
            </table>

        </form>
        </td>
    </tr>
        </table>
    </section>
    <footer></footer>
</body>
</html>