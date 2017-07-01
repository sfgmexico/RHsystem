<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/icono.ico" />
<?php

if(!isset($_SESSION)){
	
	session_start();
}
include("Conexion2.php");


$nombreUser= $_SESSION['User'];
	
//$Nick = $_SESSION['Nickname'];

$query="SELECT * from administradores WHERE (User='$nombreUser')";
$result=mysqli_query($cnx,$query);

if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
if($res=mysqli_fetch_array($result))
{				  
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Volkswagen Guadiana - Bienvenido</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
.page.padding-bottom .content_wrap .left-panel .generic-content .title form table {
	color: #FFF;
}
.page.padding-bottom .content_wrap .left-panel .generic-content .title form table tr td span {
	text-align: center;
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
          <form method="post" action="">
          <p>BIENVENIDO:
           
		   
              <input name="nombre" type="text" class="libg"  style="text-align:center"  value="<?php echo $res['Nombre'];?>" size="15" readonly />
              <?php
}
			?>         
            </p>
          <p>ESTOS SON LOS CANDIDATOS PENDIENTES DE ASIGNAR EXAMEN:            </p>
            <table width="293" height="108" border="0" align="center" cellpadding="3" cellspacing="5">
        <tr>
       
          <td width="115"  align="center" height="47" bgcolor=""><span >NOMBRE DEL CANDIDATO</span></td>
          <td width="63" align="center"><span >PUESTO</span></td>
              <?php
include('Conexion2.php');
$query="SELECT * from candidatos";
$result=mysqli_query($cnx,$query);

while(($row=mysqli_fetch_array($result)))
{
?>
	    </tr>
         
        <tr>
      
          <td align="center"><input type="button" class="libg" id="aceptar" onClick="hola.value='<?php echo $row["Nombre"]?>'" value="<?php echo $row["Nombre"];?>"></td>
          
          <td align="center"><?php echo $row["Puesto"];?></td>
          
        </tr>     
              <p>
              
               <?php
			   
	  }
	  
	  
	  
	  ?>

            </table>
               
            <p><br />
                    <label>CLICK EN EL NOMBRE DE USUARIO DESPUES SELECCIONA LA ACCION A REALIZAR:<br />
                      <br />
                     
              </label>
                  
              <input name="hola" type="text" class="text-field" value="<?php echo $row['Nombre'];?>" size="15" readonly>
              <span class="footer-wrapper">
                      
              </span>
            </p>
         
                    </p>
                  </p>
                  <p>
                    <input type="submit" name="perfil" id="perfil" value="VER PERFIL" />
                    <input type="submit" name="calificaciones" id="calificaciones" value="VER CALIFICACIONES" />
                    <input type="submit" name="eliminar" id="eliminar" value="ELIMINAR" />
                    
                    <input type="submit" name="barsit" id="barsit" value="ACTIVAR BARSIT" />
                    <input type="submit" name="cleaver" id="cleaver" value="ACTIVAR CLEAVER" />
                  </p>
                  <p>
                    
                    <input type="submit" name="domino" id="domino" value="ACTIVAR DOMINO" />
                    <input type="submit" name="ipv" id="ipv" value="ACTIVAR IPV" />
                    <input type="submit" name="kostick" id="kostick" value="ACTIVAR KOSTICK" />
                    <input type="submit" name="terman" id="terman" value="ACTIVAR TERMAN" />
                  </p>
                  <p><h2><a href="actadmn.php">GENERAR ACTA ADMINISTRATIVA</a></h2></p>
                  <p>&nbsp;</p>
                  
          </form>
          <form id="form1" name="form1" method="post" action="">
          </form>
          <p> </p>
           
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

<?php
////////////////////////////////////////////////////VER PERFIL////////////////////////////////////////////////////////////////////////////////////		
include("Conexion2.php");
if(isset($_POST["perfil"])){
$us=$_REQUEST['hola'];
if($us==""){
?>
<script>
	alert("PRIMERO SELECCIONA UN USUARIO");
</script>
<?php
}else{
$result = mysqli_query($cnx,"SELECT * FROM candidatos WHERE (Nombre = '$us')"); 
if($result === FALSE) { 
   die(mysql_error()); // TODO: better error handling
}
if($wow=mysqli_fetch_array($result))	{	

$_SESSION['Nombre2']= $wow['Nombre'] ;	
header("Location:/verperfil.php");	

}else{
	
?>
	<script> 
	alert("No existe!");
	</script>
<?php 

}
	}
		}
////////////////////////////////////////////////////FIN VER PERFIL////////////////////////////////////////////////////////////////////////////////////		
	
?>

<?php
////////////////////////////////////////////////////ACTIVAR BARSIT////////////////////////////////////////////////////////////////////////////////////
include("Conexion2.php");
if(isset($_POST["barsit"])){
$us=$_REQUEST['hola'];
if($us==""){
?>
<script>
	alert("SELECCIONA PRIMERO UN USUARIO");
</script>
<?php
}else{
mysqli_query($cnx,"UPDATE candidatos SET StatusBarsit='Yes' WHERE Nombre='$us'"); 
if($result === FALSE) { 
   die(mysql_error()); // TODO: better error handling
}

?>
	<script>
alert("BARSIT ACTIVADO!");
	</script>
<?php
}
	}
		
////////////////////////////////////////////////////FIN ACTIVAR BARSIT////////////////////////////////////////////////////////////////////////////////////	
?>

<?php
////////////////////////////////////////////////////ELIMINAR USUARIO////////////////////////////////////////////////////////////////////////////////////
include("Conexion2.php");
if(isset($_POST["eliminar"])){
$us=$_REQUEST['hola'];
if($us==""){
?>
<script>
	alert("SELECCIONA PRIMERO UN USUARIO");
</script>
<?php
}else{
mysqli_query($cnx,"DELETE from candidatos WHERE(Nombre='$us')"); 
if($result === FALSE) { 
   die(mysql_error()); // TODO: better error handling
}

?>
	<script>
	alert("USUARIO ELIMINADO!");
	</script>
<?php
	 

}
	}
		
//////////////////////////////////////////////////FIN ELIMINAR USUARIO///////////////////////////////////////////////////////////////////////
?>

<?php
////////////////////////////////////////////////////VER CALIFICACIONES////////////////////////////////////////////////////////////////////////////////////
include("Conexion2.php");
if(isset($_POST["calificaciones"])){
$us=$_REQUEST['hola'];
if($us==""){
?>
<script>
	alert("SELECCIONA PRIMERO UN USUARIO");
</script>
<?php
}else{
$result = mysqli_query($cnx,"SELECT * FROM candidatos WHERE (Nombre = '$us')"); 
if($result === FALSE) { 
   die(mysql_error()); // TODO: better error handling
}
if($wow=mysqli_fetch_array($result))	{	

$_SESSION['Nombre2']= $wow['Nombre'] ;

header("Location: /verresultados.php");
/*		  
?>
	<script>
window.location.assign("http://localhost/Psico2/verresultados.php")	
	</script>
<?php
	*/ 
}else{
	
?>
	<script> 
	alert("No existe!");
	</script>
<?php 

}
	}
		}
		
//////////////////////////////////////////////////VER CALIFICACIONES///////////////////////////////////////////////////////////////////////
/////////////// ACTIVAR CLEAVER
include("Conexion2.php");
if(isset($_POST["cleaver"])){
$us=$_REQUEST['hola'];
if($us==""){
?>
<script>
	alert("SELECCIONA PRIMERO UN USUARIO");
</script>
<?php
}else{
mysqli_query($cnx,"UPDATE candidatos SET StatusCleaver='Yes' WHERE Nombre='$us'"); 
if($result === FALSE) { 
   die(mysql_error()); // TODO: better error handling
}

?>
	<script>
alert("CLEAVER ACTIVADO!");
	</script>
<?php
}
	}
/////////////// FIN ACTIVAR CLEAVER
//////////////////////////////////////////////////
////////////////// ACTIVAR DOMINO
include("Conexion2.php");
if(isset($_POST["domino"])){
$us=$_REQUEST['hola'];
if($us==""){
?>
<script>
	alert("SELECCIONA PRIMERO UN USUARIO");
</script>
<?php
}else{
mysqli_query($cnx,"UPDATE candidatos SET StatusDomino='Yes' WHERE Nombre='$us'"); 
if($result === FALSE) { 
   die(mysql_error()); // TODO: better error handling
}

?>
	<script>
alert("DOMINO ACTIVADO!");
	</script>
<?php
}
	}
////////////////////////////////// FIN ACTIVAR DOMINO
//////////////////////7 INICIO ACTIVAR IPV
include("Conexion2.php");
if(isset($_POST["ipv"])){
$us=$_REQUEST['hola'];
if($us==""){
?>
<script>
	alert("SELECCIONA PRIMERO UN USUARIO");
</script>
<?php
}else{
mysqli_query($cnx,"UPDATE candidatos SET StatusIPV='Yes' WHERE Nombre='$us'"); 
if($result === FALSE) { 
   die(mysql_error()); // TODO: better error handling
}

?>
	<script>
alert("IPV ACTIVADO!");
	</script>
<?php
}
	}
//////////////////////////// FIN ACTIVAR IPV
/////////////////////// ACTIVAR KOSTICK
include("Conexion2.php");
if(isset($_POST["kostick"])){
$us=$_REQUEST['hola'];
if($us==""){
?>
<script>
	alert("SELECCIONA PRIMERO UN USUARIO");
</script>
<?php
}else{
mysqli_query($cnx,"UPDATE candidatos SET StatusKostick='Yes' WHERE Nombre='$us'"); 
if($result === FALSE) { 
   die(mysql_error()); // TODO: better error handling
}

?>
	<script>
alert("KOSTICK ACTIVADO!");
	</script>
<?php
}
	}
/////////////////// FIN ACTIVAR KOSCTICK
/////////////ACTIVAR TERMAN
include("Conexion2.php");
if(isset($_POST["kostick"])){
$us=$_REQUEST['hola'];
if($us==""){
?>
<script>
	alert("SELECCIONA PRIMERO UN USUARIO");
</script>
<?php
}else{
mysqli_query($cnx,"UPDATE candidatos SET StatusTerman='Yes' WHERE Nombre='$us'"); 
if($result === FALSE) { 
   die(mysql_error()); // TODO: better error handling
}

?>
	<script>
alert("TERMAN ACTIVADO!");
	</script>
<?php
}
	}
///////////////FIN ACTIVAR TERMAN










?>