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
        <h1> Condiciones if y switch </h1>
        <form name="form1" method="post" action="condicionales.php">
          <table width="528" border="5" align="center" cellpadding="5" cellspacing="5">
            <tr>
              <th colspan="2" bgcolor="#6FB313" scope="col">Los numeros Pares </th>
            </tr>
            <tr>
              <th width="206" scope="row">Numero</th>
              <td width="273"><label>
                <input name="numero" type="text" id="numero">
              </label></td>
            </tr>
            <tr>
              <th scope="row"><label>
                <input type="submit" name="Verificar" value="Verificar">
              </label></th>
              <td><label>
                <input type="reset" name="Submit2" value="Restablecer">
              </label></td>
            </tr>
          </table>
      </form>
	  <?php 
	  
	  	if ( isset($_POST['Verificar'])) 
		{
				$numero = $_POST['numero'];
			if ($numero%2 ==0)
			{
				echo "<center><font color=red >  Es paraco </font> </center>";
			}
			else
			{
				echo "<center> <font color=blue >  No es paraco </font> </center>";
			}
		}	
			
			
	  
	  ?>
	  
    </section>
    <p>
      <footer></footer></p>
    <form name="form2" method="post" action="">
      <table width="360" border="5" align="center" cellpadding="5" cellspacing="5" bordercolor="#666666">
        <tr bgcolor="#F0F0F0">
          <th colspan="2" bgcolor="#FF9933" scope="col">Seleccionar numero </th>
        </tr>
        <tr>
          <th width="111" scope="row">Escoja numero </th>
          <td width="200"><label>
            <select name="opcion_dia" id="opcion_dia">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option>Escoja opcion</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <th scope="row"><label>
            <input name="dia" type="submit" id="dia" value="Enviar">
          </label></th>
          <td><label>
            <input type="submit" name="Submit3" value="Enviar">
          </label></td>
        </tr>
      </table>
</form>
    <p><?php 
	if(isset($_POST['dia']))  
	{
		$dia = $_POST['opcion_dia'];
		switch($dia)
		{
			case 1:
					echo "<center> <font color=blue >  Lunes </font> </center>"; break;
			case 2:
					echo "<center> <font color=blue >  Martes </font> </center>"; break;		
			case 3:
					echo "<center> <font color=blue >  Miercoles</font> </center>"; break;
			case 4:
					echo "<center> <font color=blue >  Jueves </font> </center>"; break;
			case 5:
					echo "<center> <font color=blue >  Viernes </font> </center>"; break;
			case 6:
					echo "<center> <font color=blue >  Sabado </font> </center>"; break;
			case 7:
					echo "<center> <font color=blue >  Domingo </font> </center>"; break;						
		}
	}
	?> </p>
	
	
	<form name="form2" method="post" action="condicionales.php">
      <table width="360" border="5" align="center" cellpadding="5" cellspacing="5" bordercolor="#666666">
        <tr bgcolor="#F0F0F0">
          <th colspan="2" bgcolor="#FF9933" scope="col">Seleccionar numero </th>
        </tr>
        <tr>
          <th width="111" scope="row">Escoja numero </th>
          <td width="200"><label>
            <select name="mes" id="opcion_dia">
              <option value="Enero">Enero</option>
              <option value="Febrero">Febrero</option>
              <option value="Marzo">Marzo</option>
              <option value="Abril">Abril</option>
              <option value="Mayo">Mayo</option>
              <option value="Junio">Junio</option>
              <option value="Julio">Julio</option>
			  <option value="Agosto">Agosto</option>
			  <option value="Septiembre">Septiembre</option>
              <option>Escoja opcion</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <th scope="row"><label>
            <input name="enviar_mes" type="submit" id="enviar_mes" value="Enviar">
          </label></th>
          <td><label>
            <input type="submit" name="Submit3" value="Enviar">
          </label></td>
        </tr>
      </table>
</form>
<?php















































































if(isset($_POST['enviar_mes']))  
	echo $_POST['mes'];
?>		
</body>
</html>