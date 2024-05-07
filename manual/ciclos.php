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
    <link rel="short cut icon" href="imagenes/carita.ico" type="image/x-icon" >
    <link rel="stylesheet" src="style.css" href="css/estilo1.css">
    <title> Manual PHP </title>
    <style type="text/css">
<!--
.Estilo1 {color: #FF9900}
.Estilo3 {font-size: 24px}
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
        <h2 class="Estilo1" >CICLO</h2>
        <p align="left" class="Estilo3"><strong>Es una expresión del lenguaje que permite repetir una parte determinada del código</strong>. Iteration </p>
        <h1 align="center">Ciclos en PHP </h1>
        <table width="553" border="5" align="center" cellpadding="5" cellspacing="5">
          <tr>
            <th width="185" bgcolor="#FF9900" scope="col">While</th>
            <th width="129" bgcolor="#FF9900" scope="col">for</th>
            <th width="173" bgcolor="#FF9900" scope="col">do while </th>
          </tr>
          <tr>
            <td><?php 
		$k=1;
		while($k<=3)
		{
				echo "<h$k> Titulo $k </h$k>";
				$k++;
		}
		?>		</td>
            <td><?php 
		
        $k=1;
        do
        {
            echo "<h1> Unimayor </h1>";
            $k++;
        }while($k<=3);

		?></td>
            <td><?php 
		
              echo "<ul>";
        for($k=1; $k<=5 ;$k++)
        {
            echo "<li> Colombia </li>";
        }
        echo "</ul>";
		


		?></td>
          </tr>
      </table>
		<form name="form1" method="post" action="ciclos.php">
		  <table width="528" border="5" align="center" cellpadding="5" cellspacing="5">
            <tr>
              <th colspan="2" bgcolor="#6FB313" scope="col">Crear Tabla </th>
            </tr>
            <tr>
              <th width="206" scope="row">Tabla</th>
              <td width="273"><label>
                <input name="numero" type="text" id="numero">
              </label></td>
            </tr>
            <tr>
              <th scope="row"><label>
                <input name="crear" type="submit" id="crear" value="Generar">
              </label></th>
              <td><label>
                <input type="reset" name="Submit2" value="Restablecer">
              </label></td>
            </tr>
          </table>
      </form>
		<p>
		<?php 
    if(isset($_POST['crear']))
    {
      $numero = $_POST['numero'];
      echo "<table border=5 bordercolor=orange align=center>";
      echo "<tr> <th colspan=5> TABLA DEL $numero";
      
      for($k=1; $k<=10 ;$k++)
      {
	  	  
          echo "<tr> <td> $numero <td> * <td> $k <td>=   <td>". ($numero * $k)  ." </tr>";
      }

    }
    		
    
    ?>
		</p>
		<table width="1398" border="5" align="center" cellpadding="5" cellspacing="5">
          <tr>
            <th colspan="5" bgcolor="#6FB313" scope="col">TABLAS DE MULTIPLICAR </th>
          </tr>
          <tr>
            <th>Tabla 1 </th>
            <tH>Tabla 2 </tH>
            <tH>Tabla 3 </tH>
            <tH>Tabla 4 </tH>
            <tH>Tabla 5 </tH>
          </tr>
          <tr>
            <th>Tabla 6 </th>
            <tH>Tabla 7 </tH>
            <tH>Tabla 8 </tH>
            <tH>Tabla 9 </tH>
            <tH>Tabla 10 </tH>
          </tr>
          <tr>
            <th colspan="5" bgcolor="#FF9900" scope="row"><label></label>              <label></label></th>
          </tr>
        </table>
		
		<p>
		  <?php
			echo "<table width=254 border=5 align=center cellpadding=3 cellspacing=3>";
			echo "<tr> <th colspan=10 bgcolor=#000000 > <font color=white>Los Primos </font></th> </tr>";
			echo "<tr> <td>1";
			for($numero=2;$numero<=100;$numero++)
			{
				if (esPrimo($numero))
					echo "<td bgcolor=#6FB313>". $numero;
				else
					echo "<td>". $numero;
				if($numero % 10 ==0)
					echo "<tr>";
			}
			echo "</table>";
		
		function esPrimo($numero)
		{
			$k=2;
			while( $k < $numero)
			{
				if( $numero % $k ==0  )
				return false;
				$k++;
			}
			return true;
		}
		
		?>
	  <h2>Las funciones de PHP</h2>
		<span class="Estilo3">Son acciones que se realizan de manera independiente. Son acciones que hacen que el código sea más legible y sencillo de depurar.
	    </p>
		</span>
		<p>&nbsp;</p>
</section>
</body>
</html>