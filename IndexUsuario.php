<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/icono.ico" />
<?php

if(!isset($_SESSION)){
	
	session_start();
}

?>

<?php
include("Conexion2.php");
$nombreasesor= $_SESSION['Nombre'];
$nombreUser= $_SESSION['User'];
	
//$Nick = $_SESSION['Nickname'];

$query="SELECT * from candidatos WHERE (User='$nombreUser')";
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
          <h1>EXAMENES:          </h1>
          <form id="form1" name="form1" method="post" action="">
          <p>BIENVENIDO:
              <input name="nombre" type="text" class="libg"  style="text-align:center"  value="<?php echo $res['Nombre']?>" size="15" readonly />
            </p>
            <p>&nbsp;</p>
            <?php 
include('Conexion2.php');
$query="SELECT * from candidatos where User='$nombreUser'";
//$querydos="SELECT * from historial where asesor='$nombreasesor'";
$result=mysqli_query($cnx,$query);
//$periodo=mysql_query($querydos);
while(($row=mysqli_fetch_array($result))) //and ($periodos=mysql_fetch_array($periodo)))
{
if($row['StatusBarsit']=="Yes"){
?>
<a href="examenbarsit.php">EXAMEN BARSIT</a>
            <p>&nbsp;</p>
          
        
           <?php
}

if($row['StatusCleaver']=="Yes"){
?>
<a href="examencleaver.php">EXAMEN CELAVER</a>
            <p>&nbsp;</p>
            
              <?php
}

if($row['StatusDomino']=="Yes"){
?>
              <a href="examendomino.php">EXAMEN DOMINO</a>            
            <p>&nbsp;</p>
            
        
           <?php
}

if($row['StatusIPV']=="Yes"){
?>
              <a href="examenipv.php">EXAMEN IPV</a>            
            <p>&nbsp;</p>
            
        
           <?php
}

if($row['StatusKostick']=="Yes"){
?>
<a href="examencleaver.php">EXAMEN KOSTICK</a>
            <p>&nbsp;</p>
            
              <?php
}

if($row['StatusTerman']=="Yes"){
?>
              <a href="examenterman.php">EXAMEN TERMAN</a>            
            <p>&nbsp;</p>
            
        
           <?php
}



		} 
			}
?>	
</div>
</form>
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
          <p><a href="http://www.vw-guadiana.com.mx/Contactanos">vw@vwdgo.com</a><a href="info@sitename.com"></a></p>
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





