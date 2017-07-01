<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/icono.ico" />
<?php

if(!isset($_SESSION)){
	
	session_start();
}
include("Conexion2.php");

$nombreperfil= $_SESSION['Nombre2'];

$query="SELECT * from candidatos WHERE (Nombre='$nombreperfil')";
$result2=mysqli_query($cnx,$query);

if($result2 === FALSE) { 
    die(mysqli_error()); // TODO: better error handling
}
if($newres=mysqli_fetch_array($result2))
{				  
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMPH00028</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
.page.padding-bottom .content_wrap .left-panel .generic-content .title form table {
	color: #FFF;
	font-size: 14px;
	
}

.mio{
	background:#91a3c2; width:100%; text-indent:5px;
}

</style>
</head>
<body>
<div class="clear"></div>
<!-- end of SOCIAL ICONS -->
<div class="header">
  <div class="row">
    <div class="logo">
      <h1><img src="../images/logo.png" width="78" height="78" /></h1>
    </div>
         
    <div class="menu">
      <ul>
   
       <li><a href="index.html" class="active">Home</a></li>
        <li><a href="LoginUsuario.php" class="active">Login</a></li>
         <li><a href="LoginAdministrador.php" class="active">Administración</a></li>
      </ul>
    </div>
  </div>
  <div class="clear"></div>
</div>
<!-- end of MENU WRAPPER -->
<div class="page padding-bottom">
  <div class="content_wrap">
    <div class="left-panel">
      <div class="generic-content">
        <div class="title">
          <h1>ADMINISTRADOR:          </h1>
          <form action="" enctype="multipart/form-data">
          <p>&nbsp;</p>
          <table width="100%" border="0" id="tab1">
            <tr>
              <td width="40%"><h2>DESCRIPCIÓN DEL CANDIDATO</h2></td>
              <td width="60%"><input name="nombre2" type="text" class="footer-wrapper"  style="text-align:center"  value="<?php echo $nombreperfil?>" size="15" readonly="readonly"  hidden=""/></td>
            </tr>
            <tr>
              <td>NOMBRE DEL CANDIDATO:</td>
              <td><input name="name2" type="text" class="mio" id="name2" value="<?php echo $newres["Nombre"];?>" size="100%" readonly="readonly" /></td>
            </tr>
            <tr>
              <td>ESCOLARIDAD:</td>
              <td><input name="school2" type="text" class="mio" id="school2" value="<?php echo $newres["Escolaridad"];?>" readonly="readonly"/></td>
            </tr>
            <tr>
              <td>EDAD:</td>
              <td><input name="age2" type="text" class="mio" id="age2" value="<?php echo $newres["Edad"];?>" size="2" readonly="readonly"/></td>
            </tr>
            <tr>
              <td>PUESTO:</td>
              <td><input name="charge6" type="text" class="mio" id="charge6" value="<?php echo $newres["Puesto"];?>" readonly="readonly"/></td>
            </tr>
            <tr>
              <td>CORREO: </td>
              <td><input name="charge7" type="text" class="mio" id="charge7" value="<?php echo $newres["Correo"];?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td>ESTADO CIVIL:</td>
              <td><input name="charge8" type="text" class="mio" id="charge8" value="<?php echo $newres["Estado"];?>" readonly="readonly"/></td>
            </tr>
            <tr>
              <td>SEXO:</td>
              <td><input name="charge9" type="text" class="mio" id="charge9" value="<?php echo $newres["prueba"];?>" size="5" readonly="readonly"/></td>
            </tr>
            <tr>
              <td>USUARIO:</td>
              <td><input name="charge10" type="text" class="mio" id="charge10" value="<?php echo $newres["User"];?>" readonly="readonly"/></td>
            </tr>
        </table>
          <p>&nbsp;</p>
          <p><a href="IndexAdministrador.php" target="_parent">REGRESAR</a></p>
          </form>
           <?php
				}
		   ?>
          <p>
          </p>
           
        </div>
           
        <div class="content">
          <div class="address martop"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
   
    <div class="clear"></div>
  </div>
  <!-- end of BOX WRAPPER -->
  <div class="clear"></div>
</div>
<div class="footer-wrapper">
  <div class="footer">
    <div class="panel">
      <div class="title">
        <h1>Contáctanos        </h1>
        <div class="content">
          <P><a href="http://www.vw-guadiana.com.mx/Contactanos">Volkswagen Guadiana<br />
            Blvd. Francisco Villa y Estaño, Ciudad Industrial, Durango, Durango<br />
          </a> </P>
          <h3>Tel (618)814-22-55</h3>
          <p><a href="http://www.vw-guadiana.com.mx/Contactanos">vw@vwdgo.com</a></p>
        </div>
      </div>
    
    </div>
  </div>
  <div class="clear"></div>
</div>
 
<!----footer-wrapper-------->
<!-- end of WRAPPER -->
</body>
</html>



