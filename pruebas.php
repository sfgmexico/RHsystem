<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMPH00028</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <p>ESTOS SON LOS CANDIDATOS PENDIENTES DE ASIGNAR EXAMEN: </p>
  <table width="300" height="100" border="auto">
    <tr>
      <td bgcolor=""><span >NOMBRE DEL CANDIDATO</span></td>
      <td><span >Puesto</span></td>
      <?php
include('Conexion2.php');
$query="SELECT * from candidatos";
$result=mysqli_query($cnx,$query);
while(($row=mysqli_fetch_array($result)))
{
?>
    </tr>
    <tr>
      <td><input type="button" id="aceptar" value="<?php echo $row["Nombre"];?>" onclick="this.value='<?php echo $row["Nombre"];?>'"/></td>
      <td><?php echo $row["Puesto"];?></td>
    </tr>
    <?php
		
					}
   			?>
    <p>&nbsp;</p>
  </table>
  <br />
  <label>CLICK EN EL NOMBRE DE USUARIO DESPUES SELECCIONA LA ACCION A REALIZAR:</label>
  <!-- <input type"submit" name="Id_alumno" id="text" /> -->
  <input type="text" name="Nombre" value="<?php echo $row['Nombre'];?>" size="50" />
  <!-- <input type"submit" name="Id_alumno" id="text" /> -->
  <span class="footer-wrapper"> </span>
  </p>
  </p>
  <p>&nbsp;</p>
  <p></p>
</form>
<p>&nbsp;</p>
<!-- end of SOCIAL ICONS --><!-- end of MENU WRAPPER --><!----footer-wrapper-------->
<!-- end of WRAPPER -->
</body>
</html>