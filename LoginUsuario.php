<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/icono.ico" />
<?php

if(!isset($_SESSION)){
	
	session_start();
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Volkswagen Guadiana</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans' rel='stylesheet' type='text/css'>
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
          <h1>INGRESA TU USUARIO Y CONTRASEÑA:          </h1>
          <form id="form1" name="form1" method="post" action="">
            <p>&nbsp;</p>
            <p>USUARIO:</p>
            <p>
              <label for="caja"></label>
              <input type="text" name="caja" id="caja" />
            </p>
            <p>PASSWORD:</p>
            <p>
              <label for="caja2"></label>
              <input type="password" name="caja2" id="caja2" />
            </p>
            <p>
              <input type="submit" name="boton" id="boton" value="ENTRAR" />
            </p>
            <p>&nbsp;</p>
          </form>
          <h2>&nbsp;</h2>
        </div>
        <div class="content">
          <div class="address martop"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <p>&nbsp;</p>
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



<!-----------------COMIENZO PHP------------------------------>
<?php
include("Conexion2.php");
if(isset($_POST['boton'])){
$us=$_REQUEST['caja'];
$pass=md5($_REQUEST['caja2']);
if($us=="" | $pass==""){
?>
<script>
	alert("INTRODUCE USUARIO Y CONTRASEÑA");
</script>
<?php
}else{
$result = mysqli_query($cnx,"SELECT * FROM candidatos WHERE (User = '$us' AND Password = '$pass')"); 
if($result === FALSE) { 
   die(mysql_error()); // TODO: better error handling
}
if($res=mysqli_fetch_array($result))	{				  
	
	$_SESSION['Nombre']= $res['Nombre'] ;
	$_SESSION['User']= $res['User'] ;
	 
header('Location: /IndexUsuario.php');
}else{
?>
	<script> 
	alert("EL USUARIO O CONTRASEÑA SON INCORRECTOS");
	</script>
<?php 

}
?>
<?php
}
	}
?>