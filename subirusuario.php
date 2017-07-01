<!DOCTYPE HTML>










<html>
<head>
<title>Flippy</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen">
<link rel="stylesheet" href="nivo-slider/default/nivo-slider.css" type="text/css" media="screen">
<link rel="stylesheet" href="nivo-slider/default/default.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
</head>
<body>
<div class="black-wrapper">
  <div class="container">
    <header class="span-12">
      <h1 class="left">&nbsp;</h1>
    </header>
<p>&nbsp;</p>
    <p>&nbsp;</p>
      </div>
      
  <div class="header-info">
    <form name="form1" method="post" action="">
      <p>PORFAVOR LLENA LOS SIGUIENTES CAMPOS:</p>
      <p align="center">
        <label for="name3"></label>
        <input type="text" name="name" id="name">
      </p>
      <p align="center">
        <label for="school"></label>
        <input type="text" name="school" id="school">
      </p>
      <p align="center">
        <label for="age"></label>
        <input type="text" name="age" id="age">
      </p>
      <p align="center">
        <label for="charge"></label>
        <input type="text" name="charge" id="charge">
      </p>
      <p align="center">
        <label for="mail"></label>
        <input type="text" name="mail" id="mail">
      </p>
      <p align="center">
        <label for="relation"></label>
        <input type="text" name="relation" id="relation">
      </p>
      <p align="center">
        <label for="prueba2"></label>
        <input type="text" name="prueba2" id="prueba2">
      </p>
      <p align="center">
        <input type="text" name="user" id="user">
      </p>
      <p align="center">
        <label for="pass1"></label>
        <input type="text" name="pass1" id="pass1">
      </p>
      <p align="center">
        <input type="text" name="pass2" id="pass2">
      </p>
      <p align="center">
        <input type="submit" name="button" id="button" value="Enviar">
      </p>
      <p></p>
    </form>
<p>&nbsp;</p></form></div>
</div>
<span class="clearfix"></span>
<footer> <span class="container">UNIVERSIDAD POLITECNICA DE DURANGO<b> 2016</b><span class="right last"></span> </span> </footer>
<script src="scripts/jquery-1.7.1.min.js"></script>
<script src="scripts/jquery.nivo.slider.js"></script>
<script>
$(window).load(function () {
    $('#slider').nivoSlider();
});
</script>
</body>
</html>

<?php
include("Conexion2.php");
if(isset($_POST['button'])) {
    $nombre=$_REQUEST['name'];
	$escolaridad= $_REQUEST['school'];
	$edad=$_REQUEST['age'];
	$cargo=$_REQUEST['charge'];
	$correo=$_REQUEST['mail'];
	$estado=$_REQUEST['relation'];
	$hom=$_REQUEST['prueba2'];
	$nickname=$_REQUEST['user'];
	$contra1=$_REQUEST['pass1'];
	$contra2=$_REQUEST['pass2'];
	if($nombre==""| $escolaridad=="" | $edad=="" | $cargo==""| $correo==""| $estado=="" | $hom=""| $nickname=""| $contra1=""| $contra2="") 
    {
        echo 'Por favor llene todos los campos.';
    }
	
    else
    {   
        $sql = 'SELECT * FROM candidatos';
        $rec = mysqli_query($cnx,$sql);
		
		$verificar_usuario = 0;
while($result = mysqli_fetch_object($rec))
        {
            if($result->User == $_POST['user'])
            {
                $verificar_usuario = 1;
            }
        }
 
        if($verificar_usuario==0)
        {
            if($_POST['pass1'] == $_POST['pass2'])
            {
				
			//mysqli_query($cnx,"INSERT INTO candidatos(Nombre,Escolaridad,Edad,Puesto,Correo,Estado,prueba,User,Password) VALUES('$nombre','$escolaridad','$edad','$cargo','$correo','$estado','$hom','$nickname','$contra1') ")
              //            or die ("Problemas en el select".mysql_error());
			  
			  echo ($nombre);
			  ?>
						 
						  
				
               <script> 
			   
						//alert("SE HA REGISTRADO CORRECTAMENTE, POR FAVOR INGRESA CON TU NUMERO DE CONTROL Y CONTRASEÑA");
						//window.location='http://localhost/Psico2/contact2.php';

							
				</script>         
			<?php
									
            }
            else
            {
               ?>
               <script> 
						alert("LAS CONTRASEÑAS NO SON IGUALES, INTENTE OTRA VEZ");

							window.location='http://localhost/Psico2/subirusuario.php';
			</script>
			<?php
            }
        }
        else
        {
           ?>
               <script> 
						alert("EL NOMBRE DE USUARIO YA EXISTE, PRUEBE CON OTRO");

							window.location='http://localhost/Psico2/subirusuario.php';
			</script>
			<?php  
        }
    }
}
?>







