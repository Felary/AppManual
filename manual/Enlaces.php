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
.Estilo3 {color: #FFFFFF; font-weight: bold; }
.Estilo6 {
	font-size: 24px;
	font-weight: bold;
	color: #FFFFFF;
}
.Estilo7 {color: #FFFFFF}
-->
    </style>
</head>
<body>
    <p>
      <header><img src="imagenes/fondo.png" width="100%" height="180px"></header>
      <?php
    include_once 'menu.html'
    ?>
     <?php
        echo "<h2>Bienvenido".$_SESSION['nombre']."</h2>";
    ?>
      <section>
      
    </p>
    
	<h1>Evidencias de los estudiantes 	</h1>
	
	<table width="767" border="2" align="center" cellpadding="5" cellspacing="5">
      <tr>
        <th colspan="2" bgcolor="#FF6600" scope="col"><span class="Estilo6">Ejercicios de estudiantes </span></th>
      </tr>
      <tr>
        <th width="268" bgcolor="#000000" scope="row"><span class="Estilo3">Nombre</span></th>
        <th width="456" bgcolor="#000000"><span class="Estilo3">Enlace</span></td>      
      </tr>
      <tr>
        <th bgcolor="#666666" scope="row"><span class="Estilo7">
        <!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        Felipe Ordoñez Arias<br/>
        </span></th>
        <td bgcolor="#666666"><span class="Estilo7">https://felary.github.io/</span></td>
      </tr>
      <tr>
        <th scope="row">Juan David Quintana</th>
        <td>https://felary.github.io/</td>
      </tr>
      <tr>
        <th bgcolor="#666666" scope="row"><p class="Estilo7">Johan Eduardo Viva Cristian David Robledo </p>        </th>
        <td bgcolor="#666666"><a href="https://vibras-1w0w.onrender.com/" class="Estilo7">https://vibras-1w0w.onrender.com/</a></td>
      </tr>
      <tr>
        <th scope="row"><!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        David Diaz Montenegro</th>
        <td><!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        <span data-sheets-root="1" data-sheets-value="{'1':2,'2':'https://cagiest-struts.000webhostapp.com/FincaRaiz/pages/home.php'}" data-sheets-userformat="{'2':1049149,'3':{'1':0},'5':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'6':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'7':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'8':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'12':0,'23':1}" data-sheets-hyperlink="https://cagiest-struts.000webhostapp.com/FincaRaiz/pages/home.php"><a href="https://cagiest-struts.000webhostapp.com/FincaRaiz/pages/home.php" target="_blank">https://cagiest-struts.000webhostapp.com/FincaRaiz/pages/home.php</a></span></td>
      </tr>
      <tr>
        <th bgcolor="#666666" scope="row"><!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        <span data-sheets-root="1" data-sheets-value="{'1':2,'2':'jose mauricio rodriguez'}" data-sheets-userformat="{'2':573,'3':{'1':0},'5':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'6':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'7':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'8':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'12':0}">jose mauricio rodriguez</span></th>
        <td bgcolor="#666666"><!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        <span data-sheets-root="1" data-sheets-value="{'1':2,'2':'https://joserodriguez11.github.io/ColHome/'}" data-sheets-userformat="{'2':1049149,'3':{'1':0},'5':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'6':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'7':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'8':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'12':0,'23':1}" data-sheets-hyperlink="https://joserodriguez11.github.io/ColHome/"><a href="https://joserodriguez11.github.io/ColHome/" target="_blank">https://joserodriguez11.github.io/ColHome/</a></span></td>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        Yimi Piedrahita</th>
        <td bgcolor="#FFFFFF"><!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        <span data-sheets-root="1" data-sheets-value="{'1':2,'2':'devsoftware-49d6f.web.app'}" data-sheets-userformat="{'2':1049089,'3':{'1':0},'12':0,'23':1}" data-sheets-hyperlink="https://devsoftware-49d6f.web.app/"><a href="https://devsoftware-49d6f.web.app/" target="_blank">devsoftware-49d6f.web.app</a></span></td>
      </tr>
      <tr>
        <th bgcolor="#666666" scope="row"><span class="Estilo7">Andrés David Muñoz </span></th>
        <td bgcolor="#666666"><span class="Estilo7">
          <!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        <span data-sheets-root="1" data-sheets-value="{'1':2,'2':'https://andres-dm.github.io/Empresa-TalaDrill/index.html'}" data-sheets-userformat="{'2':573,'3':{'1':0},'5':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'6':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'7':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'8':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'12':0}" data-sheets-hyperlink="https://andres-dm.github.io/Empresa-TalaDrill/index.html"><a href="https://andres-dm.github.io/Empresa-TalaDrill/index.html" target="_blank">https://andres-dm.github.io/Empresa-TalaDrill/index.html</a></span></span></td>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        <span data-sheets-root="1" data-sheets-value="{'1':2,'2':'Carlos  Jimenez'}" data-sheets-userformat="{'2':573,'3':{'1':0},'5':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'6':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'7':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'8':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'12':0}">Carlos  Jimenez</span></th>
        <td bgcolor="#FFFFFF"><!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        <span data-sheets-root="1" data-sheets-value="{'1':2,'2':'http://co.netbooks.s3-website-us-east-1.amazonaws.com'}" data-sheets-userformat="{'2':829,'3':{'1':0},'5':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'6':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'7':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'8':{'1':[{'1':2,'2':0,'5':{'1':2,'2':0}},{'1':0,'2':0,'3':3},{'1':1,'2':0,'4':1}]},'11':4,'12':0}" data-sheets-hyperlink="http://co.netbooks.s3-website-us-east-1.amazonaws.com"><a href="http://co.netbooks.s3-website-us-east-1.amazonaws.com" target="_blank">http://co.netbooks.s3-website-us-east-1.amazonaws.com</a></span></td>
      </tr>
      <tr>
        <th bgcolor="#666666" scope="row"><span class="Estilo7">
        <!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        Juan Sebastián Narvaez</span></th>
        <td bgcolor="#666666"><span class="Estilo7">
        <!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
          <a href="https://jsebas1103.github.io/Salchipapados/" target="_blank">https://jsebas1103.github.io/Salchipapados/</a></span></td>
      </tr>
      <tr>
        <th bgcolor="#666666" scope="row"><span class="Estilo7">
        <!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
        Jhean Marlon Piamba </span></th>
        <td bgcolor="#666666"><span class="Estilo7">
        <!--td {border: 1px solid #cccccc;}br {mso-data-placement:same-cell;}-->
          <a href="https://marlitonn.github.io/WebFinca/" target="_blank">https://marlitonn.github.io/WebFinca/</a></span></td>
      </tr>
</table>
	</section>
    <footer></footer>
</body>