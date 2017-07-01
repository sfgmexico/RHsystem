<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

if(!isset($_SESSION)){
	
	session_start();
}

?>

<?php
include("Conexion2.php");
//include ("sesion.php");
$nombreasesor= $_SESSION['Nombre'];
$nombreUser= $_SESSION['User'];
	
//$Nick = $_SESSION['Nickname'];

$query="SELECT * from candidatos WHERE (User='$nombreUser')";
$result=mysqli_query($cnx,$query);

if($result === FALSE) { 
    die(mysqli_error()); // TODO: better error handling
}


if($res=mysqli_fetch_array($result))
{				  
$totalD=0;  
$porcentDM=0;
$totalDL=0;
$porcentDL=0;
$porcentDTOT=0;
$totalDML=0;

$totalIM=0;
$porcentIM=0;
$totalIL=0;
$porcentIL=0;
$totalIML=0;
$porcentITOT=0;

$totalSM=0;
$porcentSM=0;
$totalSL=0;
$porcentSL=0;
$totalSML=0;
$porcentSTOT=0;

$totalCM=0;
$porcentCM=0;
$totalCL=0;
$porcentCL=0;
$totalCML=0;
$porcentCTOT=0;

$ejemplo=0;

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examen Cleaver</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
        
		//Número máximo de casillas marcadas por cada fila 
var maxi=2; 
var encontradoF=0;
var encontradoC=0;
var cont=0;
//El contador es un arrayo de forma que cada posición del array es una linea del formulario 
var contador=new Array(2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
var contador2=new Array([1,3],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0]);
var columnas=new Array([1,2],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0]);




function validar(check,grupo,fila,columna) { 
   //Compruebo si la casilla está marcada 
   
   if (check.checked==true){ 
      	//está marcada, entonces aumento en uno el contador del grupo 
		contador[grupo]++;
		encontradoF=0;
		if(contador2[grupo][0]==fila){
			//no se agrega en columna 0 
			encontradoF=1;
			
		}else if(contador2[grupo][1]==fila){
			//no se agega 
			encontradoF=1;
			
		}else{
			//se agrega fila
			if(contador2[grupo][0]==0 && contador2[grupo][1]==0){
				contador2[grupo][0]=fila;
				
			}else if(contador2[grupo][0]==0 && contador2[grupo][1]!=0){
				contador2[grupo][0]=fila;
				
			}else if(contador2[grupo][0]!=0 && contador2[grupo][1]==0){
				contador2[grupo][1]=fila;
				
			}
		}
		
		encontradoC=0;
		if(columnas[grupo][0]==columna){
			//no se agrega en columna 0 
			encontradoC=1;
		}else if(columnas[grupo][1]==columna){
			//no se agega 
			encontradoC=1;
		}else{
			//se agrega fila
			if(columnas[grupo][0]==0 && columnas[grupo][1]==0){
				columnas[grupo][0]=columna;
			}else if(columnas[grupo][0]==0 && columnas[grupo][1]!=0){
				columnas[grupo][0]=columna;
			}else if(columnas[grupo][0]!=0 && columnas[grupo][1]==0){
				columnas[grupo][1]=columna;
			}
		}
		
		if(encontradoF==1 && encontradoC==1){
			alert('No se pueden elegir más de 1 por fila y columna.'); 
         	//desmarco la casilla, porque no se puede permitir marcar 
         	check.checked=false; 
         	//resto una unidad al contador de grupo, porque he desmarcado una casilla 
         	contador[grupo]--; 
		}else if(encontradoF==1 && encontradoC!=1){
			alert('No se pueden elegir más de 1 por fila.'); 
			if(columnas[grupo][0]==columna){
			columnas[grupo][0]=0;
		}else if(columnas[grupo][1]==columna){
			columnas[grupo][1]=0;
		}
         	//desmarco la casilla, porque no se puede permitir marcar 
         	check.checked=false; 
         	//resto una unidad al contador de grupo, porque he desmarcado una casilla 
         	contador[grupo]--; 
		}else if(encontradoF!=1 && encontradoC==1){
			alert('No se pueden elegir más de 1 por columna.'); 
			if(contador2[grupo][0]==fila){
			
			contador2[grupo][0]=0;
			
		}else if(contador2[grupo][1]==fila){
			
			contador2[grupo][1]=0;
			
		}
         	//desmarco la casilla, porque no se puede permitir marcar 
         	check.checked=false; 
         	//resto una unidad al contador de grupo, porque he desmarcado una casilla 
         	contador[grupo]--; 		
		}
		
		
      	//compruebo si el contador ha llegado al máximo permitido 
      	if (contador[grupo]>maxi) { 
         	//si ha llegado al máximo, muestro mensaje de error 
         	alert('No se pueden elegir más de '+maxi+' casillas a la vez.'); 
         	//desmarco la casilla, porque no se puede permitir marcar 
         	check.checked=false; 
         	//resto una unidad al contador de grupo, porque he desmarcado una casilla 
         	contador[grupo]--; 
      	}
		
		//for(var i=0;i<contador[grupo];i++){
			//alert(contador2[grupo][i]);
//		}
		
		
		
   }else { 
      	//si la casilla no estaba marcada, resto uno al contador de grupo 
		
		
		if(contador2[grupo][0]==fila){
			
			contador2[grupo][0]=0;
			
		}else if(contador2[grupo][1]==fila){
			
			contador2[grupo][1]=0;
			
		}
		
		
		if(columnas[grupo][0]==columna){
			columnas[grupo][0]=0;
		}else if(columnas[grupo][1]==columna){
			columnas[grupo][1]=0;
		}
		
		
		
		
		
      	contador[grupo]--; 
   } 
}
		
		
		
    </script>



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
          <form id="form1" name="form1" method="POST" action="">
          <p>BIENVENIDO:
              <input name="nombre" type="text" class="footer-wrapper"  style="text-align:center"  value="<?php echo $res['Nombre']?>" size="15" readonly />
              <?php
}
			  ?>
            </p>
            <div class="left-panel">
              <div class="generic-content">
                <div class="title">
                  <h1>EXAMEN CLEAVER</h1>
                  <p>LEA ESTO CON MUCHA ATENCIÓN</p>
                  <p> Las palabras descriptivas que verá a continuación se encuentran agrupadas en series de cuatro, examine las palabras de cada serie y anote un "x" bajo la columna "MAS" de la palabra que mejor describa su forma de ser o de comportarse. Después marque un "x" bajo la columna "MENOS" en la palabra que menos describa su forma de ser.<strong>&ldquo;EJEMPLOS&rdquo;</strong>.</p>
                  <p><strong>EJEMPLOS:</strong>                  
                  <table width="10%" border="0">
                    <tr>
                      <td align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                      <th align="center" valign="middle" scope="col"><p>Mas</p></th>
                      <th align="center" valign="middle" scope="col"><p>Menos</p></th>
                    </tr>
                    <tr>
                      <td align="center" valign="middle" scope="row"><p>Valiente</p></td>
                      <td align="center" valign="middle"><input name="ejems1" type="checkbox" id="ejems1" onclick='validar(form1.ejems1,0,1,1)' value="a" checked="checked" /></td>
                      <td align="center" valign="middle"><input name="ejems2" type="checkbox" onclick='validar(form1.ejems2,0,1,2)' id="ejems2" value="b" /></td>
                    </tr>
                    <tr>
                      <td align="center" valign="middle" scope="row"><p>Inspirador</p></td>
                      <td align="center" valign="middle"><input name="ejems3" type="checkbox" onclick='validar(form1.ejems3,0,2,1)' id="ejems3" value="a" /></td>
                      <td align="center" valign="middle"><input name="ejems4" type="checkbox" onclick='validar(form1.ejems4,0,2,2)' id="ejems4" value="a" /></td>
                    </tr>
                    <tr>
                      <td align="center" valign="middle" scope="row"><p>Sumiso</p></td>
                      <td align="center" valign="middle"><input name="ejems5" type="checkbox" onclick='validar(form1.ejems5,0,3,1)' id="ejems5" value="a" /></td>
                      <td align="center" valign="middle"><input name="ejems6" type="checkbox" id="ejems6" onclick='validar(form1.ejems6,0,3,2)' value="a" checked="checked" /></td>
                    </tr>
                    <tr>
                      <td align="center" valign="middle" scope="row"><p>Tímido</p></td>
                      <td align="center" valign="middle"><input name="ejems7" type="checkbox" onclick='validar(form1.ejems7,0,4,1)' id="ejems7" value="a" /></td>
                      <td align="center" valign="middle"><input name="ejems8" type="checkbox" onclick='validar(form1.ejems8,0,4,2)' id="ejems8" value="a" /></td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                  <p>En este ejemplo, el evaluado esta definiendo que la palabra que más lo describe es "Valiente" y que la que menos lo describe es "Sumiso".
 Favor de llenar toda la prueba con este mismo criterio.</p>
                  <table width="100%" border="0" align="center" cellspacing="10">
                    <tr>
                      <td><table width="10%" border="0">
                        <tr>
                          <td align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th align="center" valign="middle" scope="col"><p>Mas</p></th>
                          <th align="center" valign="middle" scope="col"><p>Menos</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Persuasivo</p></td>
                          <td align="center" valign="middle"><input name="p1r1c1" type="checkbox" onclick='validar(form1.p1r1c1,1,1,1)' id="p1r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p1r1c2" type="checkbox" onclick='validar(form1.p1r1c2,1,1,2)' id="p1r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Gentil</p></td>
                          <td align="center" valign="middle"><input name="p1r2c1" type="checkbox" onclick='validar(form1.p1r2c1,1,2,1)' id="p1r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p1r2c2" type="checkbox" onclick='validar(form1.p1r2c2,1,2,2)' id="p1r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Humilde</p></td>
                          <td align="center" valign="middle"><input name="p1r3c1" type="checkbox" onclick='validar(form1.p1r3c1,1,3,1)' id="p1r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p1r3c2" type="checkbox" onclick='validar(form1.p1r3c2,1,3,2)' id="p1r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Original</p></td>
                          <td align="center" valign="middle"><input name="p1r4c1" type="checkbox" onclick='validar(form1.p1r4c1,1,4,1)' id="p1r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p1r4c2" type="checkbox" onclick='validar(form1.p1r4c2,1,4,2)' id="p1r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="10%" border="0">
                        <tr>
                          <td align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th align="center" valign="middle" scope="col"><p>Mas</p></th>
                          <th align="center" valign="middle" scope="col"><p>Menos</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Fuerza de Voluntad</p></td>
                          <td align="center" valign="middle"><input name="p2r1c1" type="checkbox" onclick='validar(form1.p2r1c1,2,1,1)' id="p2r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p2r1c2" type="checkbox" onclick='validar(form1.p2r1c2,2,1,2)' id="p2r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Mente Abierta</p></td>
                          <td align="center" valign="middle"><input name="p2r2c1" type="checkbox" onclick='validar(form1.p2r2c1,2,2,1)' id="p2r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p2r2c2" type="checkbox" onclick='validar(form1.p2r2c2,2,2,2)' id="p2r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Complaciente</p></td>
                          <td align="center" valign="middle"><input name="p2r3c1" type="checkbox" onclick='validar(form1.p2r3c1,2,3,1)' id="p2r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p2r3c2" type="checkbox" onclick='validar(form1.p2r3c2,2,3,2)' id="p2r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Alegre</p></td>
                          <td align="center" valign="middle"><input name="p2r4c1" type="checkbox" onclick='validar(form1.p2r4c1,2,4,1)' id="p2r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p2r4c2" type="checkbox" onclick='validar(form1.p2r4c2,2,4,2)' id="p2r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="10%" border="0">
                        <tr>
                          <td align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th align="center" valign="middle" scope="col"><p>Mas</p></th>
                          <th align="center" valign="middle" scope="col"><p>Menos</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Obediente</p></td>
                          <td align="center" valign="middle"><input name="p3r1c1" type="checkbox" onclick='validar(form1.p3r1c1,3,1,1)' id="p3r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p3r1c2" type="checkbox" onclick='validar(form1.p3r1c2,3,1,2)' id="p3r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Quisquilloso</p></td>
                          <td align="center" valign="middle"><input name="p3r2c1" type="checkbox" onclick='validar(form1.p3r2c1,3,2,1)' id="p3r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p3r2c2" type="checkbox" onclick='validar(form1.p3r2c2,3,2,2)' id="p3r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Inconquistable</p></td>
                          <td align="center" valign="middle"><input name="p3r3c1" type="checkbox" onclick='validar(form1.p3r3c1,3,3,1)' id="p3r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p3r3c2" type="checkbox" onclick='validar(form1.p3r3c2,3,3,2)' id="p3r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Jugueton</p></td>
                          <td align="center" valign="middle"><input name="p3r4c1" type="checkbox" onclick='validar(form1.p3r4c1,3,4,1)' id="p3r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p3r4c2" type="checkbox" onclick='validar(form1.p3r4c2,3,4,2)' id="p3r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="10%" border="0">
                        <tr>
                          <td align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th align="center" valign="middle" scope="col"><p>Mas</p></th>
                          <th align="center" valign="middle" scope="col"><p>Menos</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Aventurero</p></td>
                          <td align="center" valign="middle"><input name="p4r1c1" type="checkbox" onclick='validar(form1.p4r1c1,4,1,1)' id="p4r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p4r1c2" type="checkbox" onclick='validar(form1.p4r1c2,4,1,2)' id="p4r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Receptivo</p></td>
                          <td align="center" valign="middle"><input name="p4r2c1" type="checkbox" onclick='validar(form1.p4r2c1,4,2,1)' id="p4r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p4r2c2" type="checkbox" onclick='validar(form1.p4r2c2,4,2,2)' id="p4r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Cordial</p></td>
                          <td align="center" valign="middle"><input name="p4r3c1" type="checkbox" onclick='validar(form1.p4r3c1,4,3,1)' id="p4r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p4r3c2" type="checkbox" onclick='validar(form1.p4r3c2,4,3,2)' id="p4r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Moderado</p></td>
                          <td align="center" valign="middle"><input name="p4r4c1" type="checkbox" onclick='validar(form1.p4r4c1,4,4,1)' id="p4r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p4r4c2" type="checkbox" onclick='validar(form1.p4r4c2,4,4,2)' id="p4r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Agresivo</p></td>
                          <td align="center" valign="middle"><input name="p5r1c1" type="checkbox" onclick='validar(form1.p5r1c1,5,1,1)' id="p5r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p5r1c2" type="checkbox" onclick='validar(form1.p5r1c2,5,1,2)' id="p5r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Alma de la Fiesta</p></td>
                          <td align="center" valign="middle"><input name="p5r2c1" type="checkbox" onclick='validar(form1.p5r2c1,5,2,1)' id="p5r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p5r2c2" type="checkbox" onclick='validar(form1.p5r2c2,5,2,2)' id="p5r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Comodino</p></td>
                          <td align="center" valign="middle"><input name="p5r3c1" type="checkbox" onclick='validar(form1.p5r3c1,5,3,1)' id="p5r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p5r3c2" type="checkbox" onclick='validar(form1.p5r3c2,5,3,2)' id="p5r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Temeroso</p></td>
                          <td align="center" valign="middle"><input name="p5r4c1" type="checkbox" onclick='validar(form1.p5r4c1,5,4,1)' id="p5r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p5r4c2" type="checkbox" onclick='validar(form1.p5r4c2,5,4,2)' id="p5r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Confiado</p></td>
                          <td align="center" valign="middle"><input name="p6r1c1" type="checkbox" onclick='validar(form1.p6r1c1,6,1,1)' id="p6r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p6r1c2" type="checkbox" onclick='validar(form1.p6r1c2,6,1,2)' id="p6r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Simpatizador</p></td>
                          <td align="center" valign="middle"><input name="p6r2c1" type="checkbox" onclick='validar(form1.p6r2c1,6,2,1)' id="p6r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p6r2c2" type="checkbox" onclick='validar(form1.p6r2c2,6,2,2)' id="p6r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Tolerante</p></td>
                          <td align="center" valign="middle"><input name="p6r3c1" type="checkbox" onclick='validar(form1.p6r3c1,6,3,1)' id="p6r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p6r3c2" type="checkbox" onclick='validar(form1.p6r3c2,6,3,2)' id="p6r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Afirmativo</p></td>
                          <td align="center" valign="middle"><input name="p6r4c1" type="checkbox" onclick='validar(form1.p6r4c1,6,4,1)' id="p6r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p6r4c2" type="checkbox" onclick='validar(form1.p6r4c2,6,4,2)' id="p6r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Respetuoso</p></td>
                          <td align="center" valign="middle"><input name="p7r1c1" type="checkbox" onclick='validar(form1.p7r1c1,7,1,1)' id="p7r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p7r1c2" type="checkbox" onclick='validar(form1.p7r1c2,7,1,2)' id="p7r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Emprendedor</p></td>
                          <td align="center" valign="middle"><input name="p7r2c1" type="checkbox" onclick='validar(form1.p7r2c1,7,2,1)' id="p7r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p7r2c2" type="checkbox" onclick='validar(form1.p7r2c2,7,2,2)' id="p7r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Optimista</p></td>
                          <td align="center" valign="middle"><input name="p7r3c1" type="checkbox" onclick='validar(form1.p7r3c1,7,3,1)' id="p7r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p7r3c2" type="checkbox" onclick='validar(form1.p7r3c2,7,3,2)' id="p7r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Servicial</p></td>
                          <td align="center" valign="middle"><input name="p7r4c1" type="checkbox" onclick='validar(form1.p7r4c1,7,4,1)' id="p7r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p7r4c2" type="checkbox" onclick='validar(form1.p7r4c2,7,4,2)' id="p7r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Indulgente</p></td>
                          <td align="center" valign="middle"><input name="p8r1c1" type="checkbox" onclick='validar(form1.p8r1c1,8,1,1)' id="p8r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p8r1c2" type="checkbox" onclick='validar(form1.p8r1c2,8,1,2)' id="p8r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Esteta</p></td>
                          <td align="center" valign="middle"><input name="p8r2c1" type="checkbox" onclick='validar(form1.p8r2c1,8,2,1)' id="p8r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p8r2c2" type="checkbox" onclick='validar(form1.p8r2c2,8,2,2)' id="p8r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Vigoroso</p></td>
                          <td align="center" valign="middle"><input name="p8r3c1" type="checkbox" onclick='validar(form1.p8r3c1,8,3,1)' id="p8r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p8r3c2" type="checkbox" onclick='validar(form1.p8r3c2,8,3,2)' id="p8r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Sociable</p></td>
                          <td align="center" valign="middle"><input name="p8r4c1" type="checkbox" onclick='validar(form1.p8r4c1,8,4,1)' id="p8r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p8r4c2" type="checkbox" onclick='validar(form1.p8r4c2,8,4,2)' id="p8r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Agradable</p></td>
                          <td align="center" valign="middle"><input name="p9r1c1" type="checkbox" onclick='validar(form1.p9r1c1,9,1,1)' id="p9r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p9r1c2" type="checkbox" onclick='validar(form1.p9r1c2,9,1,2)' id="p9r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Temeroso de Dios</p></td>
                          <td align="center" valign="middle"><input name="p9r2c1" type="checkbox" onclick='validar(form1.p9r2c1,9,2,1)' id="p9r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p9r2c2" type="checkbox" onclick='validar(form1.p9r2c2,9,2,2)' id="p9r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Tenaz</p></td>
                          <td align="center" valign="middle"><input name="p9r3c1" type="checkbox" onclick='validar(form1.p9r3c1,9,3,1)' id="p9r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p9r3c2" type="checkbox" onclick='validar(form1.p9r3c2,9,3,2)' id="p9r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Atractivo</p></td>
                          <td align="center" valign="middle"><input name="p9r4c1" type="checkbox" onclick='validar(form1.p9r4c1,9,4,1)' id="p9r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p9r4c2" type="checkbox" onclick='validar(form1.p9r4c2,9,4,2)' id="p9r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Ecuánime</p></td>
                          <td align="center" valign="middle"><input name="p10r1c1" type="checkbox" onclick='validar(form1.p10r1c1,10,1,1)' id="p10r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p10r1c2" type="checkbox" onclick='validar(form1.p10r1c2,10,1,2)' id="p10r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Preciso</p></td>
                          <td align="center" valign="middle"><input name="p10r2c1" type="checkbox" onclick='validar(form1.p10r2c1,10,2,1)' id="p10r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p10r2c2" type="checkbox" onclick='validar(form1.p10r2c2,10,2,2)' id="p10r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Nervioso</p></td>
                          <td align="center" valign="middle"><input name="p10r3c1" type="checkbox" onclick='validar(form1.p10r3c1,10,3,1)' id="p10r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p10r3c2" type="checkbox" onclick='validar(form1.p10r3c2,10,3,2)' id="p10r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Jovial</p></td>
                          <td align="center" valign="middle"><input name="p10r4c1" type="checkbox" onclick='validar(form1.p10r4c1,10,4,1)' id="p10r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p10r4c2" type="checkbox" onclick='validar(form1.p10r4c2,10,4,2)' id="p10r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Valiente</p></td>
                          <td align="center" valign="middle"><input name="p11r1c1" type="checkbox" onclick='validar(form1.p11r1c1,11,1,1)' id="p11r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p11r1c2" type="checkbox" onclick='validar(form1.p11r1c2,11,1,2)' id="p11r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Inspirador</p></td>
                          <td align="center" valign="middle"><input name="p11r2c1" type="checkbox" onclick='validar(form1.p11r2c1,11,2,1)' id="p11r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p11r2c2" type="checkbox" onclick='validar(form1.p11r2c2,11,2,2)' id="p11r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Sumiso</p></td>
                          <td align="center" valign="middle"><input name="p11r3c1" type="checkbox" onclick='validar(form1.p11r3c1,11,3,1)' id="p11r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p11r3c2" type="checkbox" onclick='validar(form1.p11r3c2,11,3,2)' id="p11r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Tímido</p></td>
                          <td align="center" valign="middle"><input name="p11r4c1" type="checkbox" onclick='validar(form1.p11r4c1,11,4,1)' id="p11r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p11r4c2" type="checkbox" onclick='validar(form1.p11r4c2,11,4,2)' id="p11r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Parlanchín</p></td>
                          <td align="center" valign="middle"><input name="p12r1c1" type="checkbox" onclick='validar(form1.p12r1c1,12,1,1)' id="p12r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p12r1c2" type="checkbox" onclick='validar(form1.p12r1c2,12,1,2)' id="p12r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Controlado</p></td>
                          <td align="center" valign="middle"><input name="p12r2c1" type="checkbox" onclick='validar(form1.p12r2c1,12,2,1)' id="p12r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p12r2c2" type="checkbox" onclick='validar(form1.p12r2c2,12,2,2)' id="p12r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Convencional</p></td>
                          <td align="center" valign="middle"><input name="p12r3c1" type="checkbox" onclick='validar(form1.p12r3c1,12,3,1)' id="p12r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p12r3c2" type="checkbox" onclick='validar(form1.p12r3c2,12,3,2)' id="p12r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Decisivo</p></td>
                          <td align="center" valign="middle"><input name="p12r4c1" type="checkbox" onclick='validar(form1.p12r4c1,12,4,1)' id="p12r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p12r4c2" type="checkbox" onclick='validar(form1.p12r4c2,12,4,2)' id="p12r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Cauteloso</p></td>
                          <td align="center" valign="middle"><input name="p13r1c1" type="checkbox" onclick='validar(form1.p13r1c1,13,1,1)' id="p13r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p13r1c2" type="checkbox" onclick='validar(form1.p13r1c2,13,1,2)' id="p13r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Determinado</p></td>
                          <td align="center" valign="middle"><input name="p13r2c1" type="checkbox" onclick='validar(form1.p13r2c1,13,2,1)' id="p13r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p13r2c2" type="checkbox" onclick='validar(form1.p13r2c2,13,2,2)' id="p13r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Convincente</p></td>
                          <td align="center" valign="middle"><input name="p13r3c1" type="checkbox" onclick='validar(form1.p13r3c1,13,3,1)' id="p13r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p13r3c2" type="checkbox" onclick='validar(form1.p13r3c2,13,3,2)' id="p13r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Bonachón</p></td>
                          <td align="center" valign="middle"><input name="p13r4c1" type="checkbox" onclick='validar(form1.p13r4c1,13,4,1)' id="p13r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p13r4c2" type="checkbox" onclick='validar(form1.p13r4c2,13,4,2)' id="p13r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Disciplinado</p></td>
                          <td align="center" valign="middle"><input name="p14r1c1" type="checkbox" onclick='validar(form1.p14r1c1,14,1,1)' id="p14r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p14r1c2" type="checkbox" onclick='validar(form1.p14r1c2,14,1,2)' id="p14r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Generoso</p></td>
                          <td align="center" valign="middle"><input name="p14r2c1" type="checkbox" onclick='validar(form1.p14r2c1,14,2,1)' id="p14r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p14r2c2" type="checkbox" onclick='validar(form1.p14r2c2,14,2,2)' id="p14r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Animoso</p></td>
                          <td align="center" valign="middle"><input name="p14r3c1" type="checkbox" onclick='validar(form1.p14r3c1,14,3,1)' id="p14r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p14r3c2" type="checkbox" onclick='validar(form1.p14r3c2,14,3,2)' id="p14r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Persistente</p></td>
                          <td align="center" valign="middle"><input name="p14r4c1" type="checkbox" onclick='validar(form1.p14r4c1,14,4,1)' id="p14r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p14r4c2" type="checkbox" onclick='validar(form1.p14r4c2,14,4,2)' id="p14r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Adaptable</p></td>
                          <td align="center" valign="middle"><input name="p15r1c1" type="checkbox" onclick='validar(form1.p15r1c1,15,1,1)' id="p15r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p15r1c2" type="checkbox" onclick='validar(form1.p15r1c2,15,1,2)' id="p15r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Disputador</p></td>
                          <td align="center" valign="middle"><input name="p15r2c1" type="checkbox" onclick='validar(form1.p15r2c1,15,2,1)' id="p15r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p15r2c2" type="checkbox" onclick='validar(form1.p15r2c2,15,2,2)' id="p15r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Indiferente</p></td>
                          <td align="center" valign="middle"><input name="p15r3c1" type="checkbox" onclick='validar(form1.p15r3c1,15,3,1)' id="p15r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p15r3c2" type="checkbox" onclick='validar(form1.p15r3c2,15,2,2)' id="p15r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Sangre Liviana</p></td>
                          <td align="center" valign="middle"><input name="p15r4c1" type="checkbox" onclick='validar(form1.p15r4c1,15,4,1)' id="p15r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p15r4c2" type="checkbox" onclick='validar(form1.p15r4c2,15,4,2)' id="p15r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Cohibido</p></td>
                          <td align="center" valign="middle"><input name="p16r1c1" type="checkbox" onclick='validar(form1.p16r1c1,16,1,1)' id="p16r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p16r1c2" type="checkbox" onclick='validar(form1.p16r1c2,16,1,2)' id="p16r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Exacto</p></td>
                          <td align="center" valign="middle"><input name="p16r2c1" type="checkbox" onclick='validar(form1.p16r2c1,16,2,1)' id="p16r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p16r2c2" type="checkbox" onclick='validar(form1.p16r2c2,16,2,2)' id="p16r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Franco</p></td>
                          <td align="center" valign="middle"><input name="p16r3c1" type="checkbox" onclick='validar(form1.p16r3c1,16,2,1)' id="p16r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p16r3c2" type="checkbox" onclick='validar(form1.p16r3c2,16,3,2)' id="p16r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Buen Compañero</p></td>
                          <td align="center" valign="middle"><input name="p16r4c1" type="checkbox" onclick='validar(form1.p16r4c1,16,4,1)' id="p16r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p16r4c2" type="checkbox" onclick='validar(form1.p16r4c2,16,4,2)' id="p16r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Dócil</p></td>
                          <td align="center" valign="middle"><input name="p17r1c1" type="checkbox" onclick='validar(form1.p17r1c1,17,1,1)' id="p17r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p17r1c2" type="checkbox" onclick='validar(form1.p17r1c2,17,1,2)' id="p17r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Atrevido</p></td>
                          <td align="center" valign="middle"><input name="p17r2c1" type="checkbox" onclick='validar(form1.p17r2c1,17,2,1)' id="p17r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p17r2c2" type="checkbox" onclick='validar(form1.p17r2c2,17,2,2)' id="p17r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Leal</p></td>
                          <td align="center" valign="middle"><input name="p17r3c1" type="checkbox" onclick='validar(form1.p17r3c1,17,3,1)' id="p17r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p17r3c2" type="checkbox" onclick='validar(form1.p17r3c2,17,3,2)' id="p17r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Encantador</p></td>
                          <td align="center" valign="middle"><input name="p17r4c1" type="checkbox" onclick='validar(form1.p17r4c1,17,4,1)' id="p17r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p17r4c2" type="checkbox" onclick='validar(form1.p17r4c2,17,4,2)' id="p17r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Competitivo</p></td>
                          <td align="center" valign="middle"><input name="p18r1c1" type="checkbox" onclick='validar(form1.p18r1c1,18,1,1)' id="p18r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p18r1c2" type="checkbox" onclick='validar(form1.p18r1c2,18,1,2)' id="p18r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Festivo</p></td>
                          <td align="center" valign="middle"><input name="p18r2c1" type="checkbox" onclick='validar(form1.p18r2c1,18,2,1)' id="p18r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p18r2c2" type="checkbox" onclick='validar(form1.p18r2c2,18,2,2)' id="p18r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Considerado</p></td>
                          <td align="center" valign="middle"><input name="p18r3c1" type="checkbox" onclick='validar(form1.p18r3c1,18,3,1)' id="p18r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p18r3c2" type="checkbox" onclick='validar(form1.p18r3c2,18,3,2)' id="p18r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Armonioso</p></td>
                          <td align="center" valign="middle"><input name="p18r4c1" type="checkbox" onclick='validar(form1.p18r4c1,18,4,1)' id="p18r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p18r4c2" type="checkbox" onclick='validar(form1.p18r4c2,18,4,2)' id="p18r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Amiguero</p></td>
                          <td align="center" valign="middle"><input name="p19r1c1" type="checkbox" onclick='validar(form1.p19r1c1,19,1,1)' id="p19r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p19r1c2" type="checkbox" onclick='validar(form1.p19r1c2,19,1,2)' id="p19r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Paciente</p></td>
                          <td align="center" valign="middle"><input name="p19r2c1" type="checkbox" onclick='validar(form1.p19r2c1,19,2,1)' id="p19r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p19r2c2" type="checkbox" onclick='validar(form1.p19r2c2,19,2,2)' id="p19r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Confianza en Sí Mismo</p></td>
                          <td align="center" valign="middle"><input name="p19r3c1" type="checkbox" onclick='validar(form1.p19r3c1,19,3,1)' id="p19r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p19r3c2" type="checkbox" onclick='validar(form1.p19r3c2,19,3,2)' id="p19r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Mesurado para Hablar</p></td>
                          <td align="center" valign="middle"><input name="p19r4c1" type="checkbox" onclick='validar(form1.p19r4c1,19,4,1)' id="p19r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p19r4c2" type="checkbox" onclick='validar(form1.p19r4c2,19,4,2)' id="p19r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Diplomático</p></td>
                          <td align="center" valign="middle"><input name="p20r1c1" type="checkbox" onclick='validar(form1.p20r1c1,20,1,1)' id="p20r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p20r1c2" type="checkbox" onclick='validar(form1.p20r1c2,20,1,2)' id="p20r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Audaz</p></td>
                          <td align="center" valign="middle"><input name="p20r2c1" type="checkbox" onclick='validar(form1.p20r2c1,20,2,1)' id="p20r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p20r2c2" type="checkbox" onclick='validar(form1.p20r2c2,20,2,2)' id="p20r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Refinado</p></td>
                          <td align="center" valign="middle"><input name="p20r3c1" type="checkbox" onclick='validar(form1.p20r3c1,20,3,1)' id="p20r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p20r3c2" type="checkbox" onclick='validar(form1.p20r3c2,20,3,2)' id="p20r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Satisfecho</p></td>
                          <td align="center" valign="middle"><input name="p20r4c1" type="checkbox" onclick='validar(form1.p20r4c1,20,4,1)' id="p20r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p20r4c2" type="checkbox" onclick='validar(form1.p20r4c2,20,4,2)' id="p20r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Dispuesto</p></td>
                          <td align="center" valign="middle"><input name="p21r1c1" type="checkbox" onclick='validar(form1.p21r1c1,21,1,1)' id="p21r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p21r1c2" type="checkbox" onclick='validar(form1.p21r1c2,21,1,2)' id="p21r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Deseoso</p></td>
                          <td align="center" valign="middle"><input name="p21r2c1" type="checkbox" onclick='validar(form1.p21r2c1,21,2,1)' id="p21r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p21r2c2" type="checkbox" onclick='validar(form1.p21r2c2,21,2,2)' id="p21r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Consecuente</p></td>
                          <td align="center" valign="middle"><input name="p21r3c1" type="checkbox" onclick='validar(form1.p21r3c1,21,3,1)' id="p21r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p21r3c2" type="checkbox" onclick='validar(form1.p21r3c2,21,3,2)' id="p21r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Entusiasta</p></td>
                          <td align="center" valign="middle"><input name="p21r4c1" type="checkbox" onclick='validar(form1.p21r4c1,21,4,1)' id="p21r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p21r4c2" type="checkbox" onclick='validar(form1.p21r4c2,21,4,2)' id="p21r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Admirable</p></td>
                          <td align="center" valign="middle"><input name="p22r1c1" type="checkbox" onclick='validar(form1.p22r1c1,22,1,1)' id="p22r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p22r1c2" type="checkbox" onclick='validar(form1.p22r1c2,22,1,2)' id="p22r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Bondadoso</p></td>
                          <td align="center" valign="middle"><input name="p22r2c1" type="checkbox" onclick='validar(form1.p22r2c1,22,2,1)' id="p22r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p22r2c2" type="checkbox" onclick='validar(form1.p22r2c2,22,2,2)' id="p22r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Resignado</p></td>
                          <td align="center" valign="middle"><input name="p22r3c1" type="checkbox" onclick='validar(form1.p22r3c1,22,3,1)' id="p22r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p22r3c2" type="checkbox" onclick='validar(form1.p22r3c2,22,3,2)' id="p22r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Carácter Firme</p></td>
                          <td align="center" valign="middle"><input name="p22r4c1" type="checkbox" onclick='validar(form1.p22r4c1,22,4,1)' id="p22r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p22r4c2" type="checkbox" onclick='validar(form1.p22r4c2,22,4,2)' id="p22r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Conforme</p></td>
                          <td align="center" valign="middle"><input name="p23r1c1" type="checkbox" onclick='validar(form1.p23r1c1,23,1,1)' id="p23r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p23r1c2" type="checkbox" onclick='validar(form1.p23r1c2,23,1,2)' id="p23r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Confiable</p></td>
                          <td align="center" valign="middle"><input name="p23r2c1" type="checkbox" onclick='validar(form1.p23r2c1,23,2,1)' id="p23r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p23r2c2" type="checkbox" onclick='validar(form1.p23r2c2,23,2,2)' id="p23r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Pacifico</p></td>
                          <td align="center" valign="middle"><input name="p23r3c1" type="checkbox" onclick='validar(form1.p23r3c1,23,3,1)' id="p23r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p23r3c2" type="checkbox" onclick='validar(form1.p23r3c2,23,3,2)' id="p23r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Positivo</p></td>
                          <td align="center" valign="middle"><input name="p23r4c1" type="checkbox" onclick='validar(form1.p23r4c1,23,4,1)' id="p23r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p23r4c2" type="checkbox" onclick='validar(form1.p23r4c2,23,4,2)' id="p23r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                      <td><table width="100%" border="0">
                        <tr>
                          <td width="68" align="center" valign="middle" scope="col"><p>&nbsp;</p></td>
                          <th width="31" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                          <th width="46" align="center" valign="middle" scope="col"><p>&nbsp;</p></th>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Inquieto</p></td>
                          <td align="center" valign="middle"><input name="p24r1c1" type="checkbox" onclick='validar(form1.p24r1c1,24,1,1)' id="p24r1c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p24r1c2" type="checkbox" onclick='validar(form1.p24r1c2,24,1,2)' id="p24r1c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Popular</p></td>
                          <td align="center" valign="middle"><input name="p24r2c1" type="checkbox" onclick='validar(form1.p24r2c1,24,2,1)' id="p24r2c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p24r2c2" type="checkbox" onclick='validar(form1.p24r2c2,24,2,2)' id="p24r2c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Buen Vecino</p></td>
                          <td align="center" valign="middle"><input name="p24r3c1" type="checkbox" onclick='validar(form1.p24r3c1,24,3,1)' id="p24r3c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p24r3c2" type="checkbox" onclick='validar(form1.p24r3c2,24,3,2)' id="p24r3c2" value="a" /></td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" scope="row"><p>Devoto</p></td>
                          <td align="center" valign="middle"><input name="p24r4c1" type="checkbox" onclick='validar(form1.p24r4c1,24,4,1)' id="p24r4c1" value="a" /></td>
                          <td align="center" valign="middle"><input name="p24r4c2" type="checkbox" onclick='validar(form1.p24r4c2,24,4,2)' id="p24r4c2" value="a" /></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table>
                  <p>                  
                  <p></p>
                  <p></p>
                  <p>&nbsp;</p>
                  <input name="register" type="submit" id="register" value="ENVIAR" />
                  <p>&nbsp;</p>
                </div>
                <div class="content">
                  <div class="address martop"></div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
<?php
///////////////////////////////////////////////////////////////////
////ejemplo
if(isset($_POST['register'])){
	if (isset($_POST['ejems6'])){
 
 	$ejemplo++;

	}
	
	
	
 			}



/////SUMA DE PUNTOS DE "D" en "M"



 if(isset($_POST['register'])){
	
 	if(isset($_POST['p3r3c1'])){
 	$totalD++;

	}
 			}

////////////////////////////////////////////////////////////////


 if(isset($_POST['register'])){
	
 	if(isset($_POST['p4r1c1'])){
 	$totalD++;

	}
 			}

//////////////////////////////////////////////////////////////////					P5A A1


 if(isset($_POST['register'])){

	if(isset($_POST['p5r1c1'])){ 
 	$totalD++;

	}
 			}
//////////////////////////////////////////////////////////////////  P6D D1


 if(isset($_POST['register'])){

 	if(isset($_POST['p6r4c1'])){
 	$totalD++;

	}
 			}
/////////////////////////////////////////////////////////////////// P7B B1

 if(isset($_POST['register'])){

	if(isset($_POST['p7r2c1'])){ 
 	$totalD++;

	}
 			}

///////////////////////////////////////////////////////////////////// P8C C1

 if(isset($_POST['register'])){

	if(isset($_POST['p8r3c1'])){ 
 	$totalD++;

	}
 			}
////////////////////////////////////////////////////////////////////////  P9C C1

 if(isset($_POST['register'])){

	if(isset($_POST['p9r3c1'])){ 
 	$totalD++;

	}
 			}
//////////////////////////////////////////////////////////////////// P11A A1

 if(isset($_POST['register'])){

	if(isset($_POST['p11r1c1'])){ 
 	$totalD++;

	}
 			}
/////////////////////////////////////////////////////////////////// p12d D1

 if(isset($_POST['register'])){

	if(isset($_POST['p12r4c1'])){ 
 	$totalD++;

	}
 			}
///////////////////////////////////////////////////////////////// p13b b1

 if(isset($_POST['register'])){

	if(isset($_POST['p13r2c1'])){ 
 	$totalD++;

	}
 			}
//////////////////////////////////////////////////////////////////// p14d d1

 if(isset($_POST['register'])){

	if(isset($_POST['p14r4c1'])){ 
 	$totalD++;

	}
 			}
//////////////////////////////////////////////////////////////////////// p15b b1

 if(isset($_POST['register'])){

	if(isset($_POST['p15r2c1'])){ 
 	$totalD++;

	}
 			}
////////////////////////////////////////////////////////////////// p16c c1

 if(isset($_POST['register'])){

	if(isset($_POST['p16r3c1'])){ 
 	$totalD++;

	}
 			}
////////////////////////////////////////////////////////////////// p17b b1

 if(isset($_POST['register'])){

	if(isset($_POST['p17r2c1'])){ 
 	$totalD++;

	}
 			}
/////////////////////////////////////////////////////////////////// p18a a1

 if(isset($_POST['register'])){

	if(isset($_POST['p18r1c1'])){ 
 	$totalD++;

	}
 			}
//////////////////////////////////////////////////////////////////// p19c c1

 if(isset($_POST['register'])){

	if(isset($_POST['p19r3c1'])){ 
 	$totalD++;

	}
 			}
/////////////////////////////////////////////////////////////// p20b b1

 if(isset($_POST['register'])){

	if(isset($_POST['p20r2c1'])){ 
 	$totalD++;

	}
 			}
/////////////////////////////////////////////////////////////////// p22d d1

 if(isset($_POST['register'])){

	if(isset($_POST['p22r4c1'])){ 
 	$totalD++;

	}
 			}
////////////////////////////////////////////////////////////////////p23d d1

 if(isset($_POST['register'])){

	if(isset($_POST['p23r4c1'])){ 
 	$totalD++;

	}
 			}
////////////////////////////////////////////////////////////////////7 p24a a1

 if(isset($_POST['register'])){

	if(isset($_POST['p24r1c1'])){ 
 	$totalD++;


	}
 			}
////////////////////////////////////////////////////////////////////////// PUNTOS D EN L

////////////////////////////////////////////////////////////////////////// p1d d2

 if(isset($_POST['register'])){

	if(isset($_POST['p1r4c2'])){ 
 	$totalDL++;


	}
 			}
/////////////////////////////////////////////////////////////////////		p2a a2

 if(isset($_POST['register'])){

	if(isset($_POST['p2r1c2'])){  
 	$totalDL++;


	}
 			}
///////////////////////////////////////////////////////////////////////// p3c c2

 if(isset($_POST['register'])){

	if(isset($_POST['p3r3c2'])){  
 	$totalDL++;


	}
 			}
///////////////////////////////////////////////////////////////////// p4a a2

 if(isset($_POST['register'])){

	if(isset($_POST['p4r1c2'])){  
 	$totalDL++;


	}
 			}
///////////////////////////////////////////////////////////////// p6d d2

 if(isset($_POST['register'])){

	if(isset($_POST['p6r4c2'])){  
 	$totalDL++;


	}
 			}
////////////////////////////////////////////////////////////////////////// p7b b2

 if(isset($_POST['register'])){

	if(isset($_POST['p7r2c2'])){  
 	$totalDL++;


	}
 			}
/////////////////////////////////////////////////////////////////////// p8c c2

 if(isset($_POST['register'])){

	if(isset($_POST['p8r3c2'])){  
 	$totalDL++;


	}
 			}
///////////////////////////////////////////////////////////////////////  p9c c2

 if(isset($_POST['register'])){

	if(isset($_POST['p9r3c2'])){  
 	$totalDL++;


	}
 			}
/////////////////////////////////////////////////////////////////////// p10c c2

 if(isset($_POST['register'])){

	if(isset($_POST['p10r3c2'])){  
 	$totalDL++;


	}
 			}
//////////////////////////////////////////////////////////////////////// p12d d2

 if(isset($_POST['register'])){

	if(isset($_POST['p12r4c2'])){  
 	$totalDL++;

	}
 			}
//////////////////////////////////////////////////////////////////////// p14d d2

 if(isset($_POST['register'])){

	if(isset($_POST['p14r4c2'])){  
 	$totalDL++;


	}
 			}
//////////////////////////////////////////////////////////////////// p15b b2

 if(isset($_POST['register'])){

	if(isset($_POST['p15r2c2'])){  
 	$totalDL++;



	}
 			}
///////////////////////////////////////////////////////////////////// p16c c2

 if(isset($_POST['register'])){

	if(isset($_POST['p16r3c2'])){  
 	$totalDL++;


	}
 			}
/////////////////////////////////////////////////////////////////////////// p17b b2

 if(isset($_POST['register'])){

	if(isset($_POST['p17r2c2'])){  
 	$totalDL++;


	}
 			}
//////////////////////////////////////////////////////////////// p18a a2

 if(isset($_POST['register'])){

	if(isset($_POST['p18r1c2'])){  
 	$totalDL++;


	}
 			}
////////////////////////////////////////////////////////////////////////// p19c c2

 if(isset($_POST['register'])){

	if(isset($_POST['p19r3c2'])){  
 	$totalDL++;


	}
 			}
/////////////////////////////////////////////////////////////////////////// p20b b2

 if(isset($_POST['register'])){

	if(isset($_POST['p20r2c2'])){  
 	$totalDL++;


	}
 			}
/////////////////////////////////////////////////////////////////////// p21d d2

 if(isset($_POST['register'])){

	if(isset($_POST['p21r4c2'])){  
 	$totalDL++;


	}
 			}
////////////////////////////////////////////////////////////////////// p22d d2

 if(isset($_POST['register'])){

	if(isset($_POST['p22r4c2'])){  
 	$totalDL++;


	}
 			}
///////////////////////////////////////////////////////////////////////  p23d d2

 if(isset($_POST['register'])){

	if(isset($_POST['p23r4c2'])){  
 	$totalDL++;


	}
 			}
/////////////////////////////////////////////////////////////////////// p24a a2

 if(isset($_POST['register'])){

	if(isset($_POST['p24r1c2'])){  
 	$totalDL++;


	}
 			}
/////////////////////////////////////////////////////////////////////////
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			
			
			
			
//////////////////////////////////////////////////////////////////// TOTAL PUNTAJE D EN M

 if(isset($_POST['register'])){
	

if($totalD==0){
	$porcentDM=1;
}
if($totalD==1){
	$porcentDM=5;
}
if($totalD==2){
	$porcentDM=10;
}
if($totalD==3){
	$porcentDM=20;
}
if($totalD==4){
	$porcentDM=30;
}
if($totalD==5){
	$porcentDM=40;
}
if($totalD==6){
	$porcentDM=50;
}
if($totalD==7){
	$porcentDM=60;
}
if($totalD==8){
	$porcentDM=65;
}
if($totalD==9){
	$porcentDM=75;
}
if($totalD==10){
	$porcentDM=84;
}
if($totalD==11){
	$porcentDM=87;
}
if($totalD==12){
	$porcentDM=90;
}
if($totalD==13){
	$porcentDM=93;
}
if($totalD==14){
	$porcentDM=95;
}
if($totalD==15 || $totalD==16){
	$porcentDM=97;
}
if($totalD==17 || $totalD==18 || $totalD==19){
	$porcentDM=98;
}
if($totalD==20){
	$porcentDM=99;
}

	
 			}

/////////////////////////////////////////////////////////////PORCENTAJE D EN L

 if(isset($_POST['register'])){
	

if($totalDL==0){
	$porcentDL=99;
}
if($totalDL==1){
	$porcentDL=95;
}
if($totalDL==2){
	$porcentDL=87;
}
if($totalDL==3){
	$porcentDL=80;
}
if($totalDL==4){
	$porcentDL=65;
}
if($totalDL==5){
	$porcentDL=55;
}
if($totalDL==6){
	$porcentDL=50;
}
if($totalDL==7){
	$porcentDL=35;
}
if($totalDL==8){
	$porcentDL=30;
}
if($totalDL==9){
	$porcentDL=20;
}
if($totalDL==10){
	$porcentDL=18;
}
if($totalDL==11){
	$porcentDL=15;
}
if($totalDL==12){
	$porcentDL=10;
}
if($totalDL==13){
	$porcentDL=6;
}
if($totalDL==14){
	$porcentDL=5;
}
if($totalDL==15){
	$porcentDL=4;
}
if($totalDL==16){
	$porcentDL=3;
}
if($totalDL==17 || $totalDL==18 || $totalDL==19 || $totalDL==20){
	$porcentDL=2;
}
if($totalDL==21){
	$porcentDL=1;
}

	
 			}
//////////////////////////////////////////////////////////////////////////////

 if(isset($_POST['register'])){
	$totalDML=$totalD-$totalDL;
	
	if($totalDML==-21){
		$porcentDTOT=1;
	}
	if($totalDML==-20 || $totalDML==-19 || $totalDML==-18 || $totalDML==-17 || $totalDML==-16 || $totalDML==-15 || $totalDML==-14){
		$porcentDTOT=2;
	}
	if($totalDML==-13){
		$porcentDTOT=4;
	}
	if($totalDML==-12 || $totalDML==-11){
		$porcentDTOT=5;
	}
	if($totalDML==-10){
		$porcentDTOT=9;
	}
	if($totalDML==-9){
		$porcentDTOT=13;
	}
	if($totalDML==-8){
		$porcentDTOT=15;
	}
	if($totalDML==-7){
		$porcentDTOT=16;
	}
	if($totalDML==-6){
		$porcentDTOT=20;
	}
	if($totalDML==-5){
		$porcentDTOT=25;
	}
	if($totalDML==-4){
		$porcentDTOT=29;
	}
	if($totalDML==-3){
		$porcentDTOT=35;
	}
	if($totalDML==-2){
		$porcentDTOT=40;
	}
	if($totalDML==-1){
		$porcentDTOT=45;
	}
	if($totalDML==0){
		$porcentDTOT=50;
	}
	if($totalDML==1){
		$porcentDTOT=55;
	}
	if($totalDML==2){
		$porcentDTOT=60;
	}
	if($totalDML==3){
		$porcentDTOT=65;
	}
	if($totalDML==4){
		$porcentDTOT=67;
	}
	if($totalDML==5){
		$porcentDTOT=70;
	}
	if($totalDML==6){
		$porcentDTOT=75;
	}
	if($totalDML==7){
		$porcentDTOT=80;
	}
	if($totalDML==8){
		$porcentDTOT=84;
	}
	if($totalDML==9){
		$porcentDTOT=85;
	}
	if($totalDML==10){
		$porcentDTOT=90;
	}
	if($totalDML==11){
		$porcentDTOT=91;
	}
	if($totalDML==12){
		$porcentDTOT=94;
	}
	if($totalDML==13){
		$porcentDTOT=95;
	}
	if($totalDML==14){
		$porcentDTOT=96;
	}
	if($totalDML==15){
		$porcentDTOT=97;
	}
	
 			}
			
			
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// COMIENZA CONTEO DE I EN M

/////////////// p1a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p1a'])&&($_POST['p1a'])=='a1'){
	if(isset($_POST['p1r1c1'])){  
 	$totalIM++;

	}
}
/////////////////////////////////////////////////////////////////////// p2d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p2d'])&&($_POST['p2d'])=='d1'){
 	if(isset($_POST['p2r4c1'])){  
 	$totalIM++;

	}
}
///////////////////////////////////////////////////////////////////////// p3d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p3d'])&&($_POST['p3d'])=='d1'){
 	if(isset($_POST['p3r4c1'])){  
 	$totalIM++;

	}
}
//////////////////////////////////////////////////////////////////////// p5b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p5b'])&&($_POST['p5b'])=='b1'){
 	if(isset($_POST['p5r2c1'])){  
 	$totalIM++;

	}
}
//////////////////////////////////////////////////////////////////////// p6a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p6a'])&&($_POST['p6a'])=='a1'){
 	if(isset($_POST['p6r1c1'])){  
 	$totalIM++;

	}
}
////////////////////////////////////////////////////////////////////// p7c c1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p7c'])&&($_POST['p7c'])=='c1'){
 	if(isset($_POST['p7r3c1'])){  
 	$totalIM++;

	}
}
//////////////////////////////////////////////////////////////////// p8d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p8d'])&&($_POST['p8d'])=='d1'){
 	if(isset($_POST['p8r4c1'])){  
 	$totalIM++;

	}
}
///////////////////////////////////////////////////////////////////// p9d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p9d'])&&($_POST['p9d'])=='d1'){
	if(isset($_POST['p9r4c1'])){   
 	$totalIM++;

	}
}
///////////////////////////////////////////////////////////////////// p11b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p11b'])&&($_POST['p11b'])=='b1'){
 	if(isset($_POST['p11r2c1'])){  
 	$totalIM++;

	}
}
////////////////////////////////////////////////////////////////////////// p12a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p12a'])&&($_POST['p12a'])=='a1'){
 	if(isset($_POST['p12r1c1'])){  
 	$totalIM++;

	}
}
///////////////////////////////////////////////////////////////////////// p13c c1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p13c'])&&($_POST['p13c'])=='c1'){
 	if(isset($_POST['p13r3c1'])){  
 	$totalIM++;

	}
}
/////////////////////////////////////////////////////////////////////////////// p15d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p15d'])&&($_POST['p15d'])=='d1'){
 	if(isset($_POST['p15r4c1'])){  
 	$totalIM++;

	}
}
/////////////////////////////////////////////////////////////////////////////// p16d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p16d'])&&($_POST['p16d'])=='d1'){
 	if(isset($_POST['p16r4c1'])){  
 	$totalIM++;

	}
}
//////////////////////////////////////////////////////////////////// p17d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p17d'])&&($_POST['p17d'])=='d1'){
 	if(isset($_POST['p17r4c1'])){  
 	$totalIM++;

	}
}
///////////////////////////////////////////////////////////////////////// p19a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p19a'])&&($_POST['p19a'])=='a1'){
 	if(isset($_POST['p19r1c1'])){  
 	$totalIM++;

	}
}
////////////////////////////////////////////////////////////////////////// p22a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p22a'])&&($_POST['p22a'])=='a1'){
 	if(isset($_POST['p22r1c1'])){  
 	$totalIM++;

	}
}
///////////////////////////////////////////////////////////////////////////p24b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p24b'])&&($_POST['p24b'])=='a1'){
 	if(isset($_POST['p24r2c1'])){  
 	$totalIM++;

	}
}

////////////////////////////////////////////////////////////////////////////COMIENZA PUNTOS I EN L
////// p2d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p2d'])&&($_POST['p2d'])=='d2'){
	if(isset($_POST['p2r4c2'])){   
 	$totalIL++;

	}
}
//////////////////////////////////////////////////////////////////// p3d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p3d'])&&($_POST['p3d'])=='d2'){
 	if(isset($_POST['p3r4c2'])){   
 	$totalIL++;

	}
}
///////////////////////////////////////////////////////////////// p4c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p4c'])&&($_POST['p4c'])=='c2'){
  	if(isset($_POST['p4r3c2'])){   
 	$totalIL++;

	}
}
//////////////////////////////////////////////////////////////////// p5b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p5b'])&&($_POST['p5b'])=='b2'){
  	if(isset($_POST['p5r2c2'])){   
 	$totalIL++;

	}
}
/////////////////////////////////////////////////////////////////// p7c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p7c'])&&($_POST['p7c'])=='c2'){
  	if(isset($_POST['p7r3c2'])){   
 	$totalIL++;

	}
}
////////////////////////////////////////////////////////////////// p8d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p8d'])&&($_POST['p8d'])=='d2'){
  	if(isset($_POST['p8r4c2'])){   
 	$totalIL++;

	}
}
//////////////////////////////////////////////////////////////////// p9d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p9d'])&&($_POST['p9d'])=='d2'){
  	if(isset($_POST['p9r4c2'])){   
 	$totalIL++;

	}
}
/////////////////////////////////////////////////////////////////// p10d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p10d'])&&($_POST['p10d'])=='d2'){
  	if(isset($_POST['p10r4c2'])){   
 	$totalIL++;

	}
}
////////////////////////////////////////////////////////////////////////// p12a a2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p12a'])&&($_POST['p12a'])=='a2'){
  	if(isset($_POST['p12r1c2'])){   
 	$totalIL++;

	}
}
////////////////////////////////////////////////////////////////////////////// p13c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p13c'])&&($_POST['p13c'])=='c2'){
  	if(isset($_POST['p13r3c2'])){   
 	$totalIL++;

	}
}
///////////////////////////////////////////////////////////////////////// p14c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p14c'])&&($_POST['p14c'])=='c2'){
  	if(isset($_POST['p14r3c2'])){   
 	$totalIL++;

	}
}
///////////////////////////////////////////////////////////////////// p15d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p15d'])&&($_POST['p15d'])=='d2'){
  	if(isset($_POST['p15r4c2'])){   
 	$totalIL++;

	}
}
//////////////////////////////////////////////////////////////////////// p16d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p16d'])&&($_POST['p16d'])=='d2'){
  	if(isset($_POST['p16r4c2'])){   
 	$totalIL++;

	}
}
////////////////////////////////////////////////////////////////////// p17d d2 

 if(isset($_POST['register'])){
//	if (!empty($_POST['p17d'])&&($_POST['p17d'])=='d2'){
  	if(isset($_POST['p17r4c2'])){   
 	$totalIL++;

	}
}
//////////////////////////////////////////////////////////////////// p18b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p18b'])&&($_POST['p18b'])=='b2'){
  	if(isset($_POST['p18r2c2'])){   
 	$totalIL++;

	}
}
///////////////////////////////////////////////////////////////////// p19a a2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p19a'])&&($_POST['p19a'])=='a2'){
  	if(isset($_POST['p19r1c2'])){   
 	$totalIL++;

	}
}
////////////////////////////////////////////////////////////////////// p20c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p20c'])&&($_POST['p20c'])=='c2'){
  	if(isset($_POST['p20r3c2'])){   
 	$totalIL++;

	}
}
//////////////////////////////////////////////////////////////////////// p23b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p23b'])&&($_POST['p23b'])=='b2'){
  	if(isset($_POST['p23r2c2'])){   
 	$totalIL++;

	}
}
/////////////////////////////////////////////////////////////////////////// p24b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p24b'])&&($_POST['p24b'])=='b2'){
  	if(isset($_POST['p24r2c2'])){   
 	$totalIL++;

	}
}
//////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////PORCENTAJE DE I EN M

 if(isset($_POST['register'])){
	if($totalIM==0){
		$porcentIM=4;
	}
	if($totalIM==1){
		$porcentIM=10;
	}
	if($totalIM==2){
		$porcentIM=25;
	}
	if($totalIM==3){
		$porcentIM=40;
	}
	if($totalIM==4){
		$porcentIM=55;
	}
	if($totalIM==5){
		$porcentIM=70;
	}
	if($totalIM==6){
		$porcentIM=82;
	}
	if($totalIM==7){
		$porcentIM=90;
	}
	if($totalIM==8){
		$porcentIM=95;
	}
	if($totalIM==9){
		$porcentIM=96;
	}
	if($totalIM==10 || $totalIM==11 || $totalIM==12 || $totalIM==13 || $totalIM==14 || $totalIM==15 || $totalIM==16){
		$porcentIM=97;
	}
	if($totalIM==17){
		$porcentIM=99;
	}


	
 			}
/////////////////////////////////////////////////////////////////////////////////////// PORCENTAJE DE I EN L

 if(isset($_POST['register'])){
	if($totalIL==0){
		$porcentIL=99;
	}
	if($totalIL==1){
		$porcentIL=95;
	}
	if($totalIL==2){
		$porcentIL=87;
	}
	if($totalIL==3){
		$porcentIL=75;
	}
	if($totalIL==4){
		$porcentIL=55;
	}
	if($totalIL==5){
		$porcentIL=40;
	}
	if($totalIL==6){
		$porcentIL=25;
	}
	if($totalIL==7){
		$porcentIL=16;
	}
	if($totalIL==8){
		$porcentIL=10;
	}
	if($totalIL==9){
		$porcentIL=5;
	}
	if($totalIL==10 || $totalIL==11){
		$porcentIL=4;
	}
	if($totalIL==12 || $totalIL==13 || $totalIL==14){
		$porcentIL=3;
	}
	if($totalIL==15 || $totalIL==16 || $totalIL==17 ||  	$totalIL==18){
		$porcentIL=2;
	}
	if($totalIL==19){
		$porcentIL=1;
	}


 }
////////////////////////////////////////////////////////////////////////////////////PORCENTAJE I TOTAL

 if(isset($_POST['register'])){
	$totalIML=$totalIM-$totalIL;
	
	if($totalIML==-19){
		$porcentITOT=1;
	}
	if($totalIML==-18 || $totalIML==-17 || $totalIML==-16 || $totalIML==-15|| $totalIML==-14 || $totalIML==-13 || $totalIML==-12 || $totalIML==-11){
		$porcentITOT=2;
	}
	if($totalIML==-10){
		$porcentITOT=3;
	}
	if($totalIML==-9){
		$porcentITOT=4;
	}
	if($totalIML==-8){
		$porcentITOT=5;
	}
	if($totalIML==-7){
		$porcentITOT=6;
	}
	if($totalIML==-6){
		$porcentITOT=10;
	}
	if($totalIML==-5){
		$porcentITOT=16;
	}
	if($totalIML==-4){
		$porcentITOT=20;
	}
	if($totalIML==-3){
		$porcentITOT=29;
	}
	if($totalIML==-2){
		$porcentITOT=35;
	}
	if($totalIML==-1){
		$porcentITOT=45;
	}
	if($totalIML==0){
		$porcentITOT=55;
	}
	if($totalIML==1){
		$porcentITOT=60;
	}
	if($totalIML==2){
		$porcentITOT=70;
	}
	if($totalIML==3){
		$porcentITOT=75;
	}
	if($totalIML==4){
		$porcentITOT=85;
	}
	if($totalIML==5){
		$porcentITOT=90;
	}
	if($totalIML==6){
		$porcentITOT=95;
	}
	if($totalIML==7){
		$porcentITOT=96;
	}
	if($totalIML==8 || $totalIML==9){
		$porcentITOT=97;
	}
	if($totalIML==10 || $totalIML==11 || $totalIML==12 || $totalIML==13 || $totalIML==14 || $totalIML==15 || $totalIML==16 ){
		$porcentITOT=98;
	}
	if($totalIML==17){
		$porcentITOT=99;
	}
	
 			}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// COMIENZA PUNTOS DE S EN M 

///////////////////////////////////////////////////////////////P1B B1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p1b'])&&($_POST['p1b'])=='b1'){
  	if(isset($_POST['p1r2c1'])){   
 	$totalSM++;

	}
}
////////////////////////////////////////////////////////////////////////// p2c c1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p2c'])&&($_POST['p2c'])=='c1'){
   	if(isset($_POST['p2r3c1'])){
 	$totalSM++;

	}
}
////////////////////////////////////////////////////////////// p3a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p3a'])&&($_POST['p3a'])=='a1'){
   	if(isset($_POST['p3r1c1'])){
 	$totalSM++;

	}
}
/////////////////////////////////////////////////////////////////////// p4d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p4d'])&&($_POST['p4d'])=='d1'){
   	if(isset($_POST['p4r4c1'])){
 	$totalSM++;

	}
}
/////////////////////////////////////////////////////////////////////// p5c c1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p5c'])&&($_POST['p5c'])=='c1'){
   	if(isset($_POST['p5r3c1'])){
 	$totalSM++;

	}
}
//////////////////////////////////////////////////////////////////////// p7d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p7d'])&&($_POST['p7d'])=='d1'){
   	if(isset($_POST['p7r4c1'])){
 	$totalSM++;

	}
}
////////////////////////////////////////////////////////////////// p8a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p8a'])&&($_POST['p8a'])=='a1'){
   	if(isset($_POST['p8r1c1'])){
 	$totalSM++;

	}
}
///////////////////////////////////////////////////////////////////// p10a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p10a'])&&($_POST['p10a'])=='a1'){
   	if(isset($_POST['p10r1c1'])){
 	$totalSM++;

	}
}
/////////////////////////////////////////////////////////////////// p12b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p12b'])&&($_POST['p12b'])=='b1'){
   	if(isset($_POST['p12r2c1'])){
 	$totalSM++;

	}
}
//////////////////////////////////////////////////////////////////////// p13d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p13d'])&&($_POST['p13d'])=='d1'){
   	if(isset($_POST['p13r4c1'])){
 	$totalSM++;

	}
}
////////////////////////////////////////////////////////////////////// p14b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p14b'])&&($_POST['p14b'])=='b1'){
   	if(isset($_POST['p14r2c1'])){
 	$totalSM++;

	}
}
/////////////////////////////////////////////////////////////////////////	p17c c1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p17c'])&&($_POST['p17c'])=='c1'){
   	if(isset($_POST['p17r3c1'])){
 	$totalSM++;

	}
}
/////////////////////////////////////////////////////////////////////// p18c c1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p18c'])&&($_POST['p18c'])=='c1'){
   	if(isset($_POST['p18r3c1'])){
 	$totalSM++;

	}
}
///////////////////////////////////////////////////////////////////////// p19b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p19b'])&&($_POST['p19b'])=='b1'){
   	if(isset($_POST['p19r2c1'])){
 	$totalSM++;

	}
}
////////////////////////////////////////////////////////////////////////// p20d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p20d'])&&($_POST['p20d'])=='d1'){
   	if(isset($_POST['p20r4c1'])){
 	$totalSM++;

	}
}
////////////////////////////////////////////////////////////////////////// p21a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p21a'])&&($_POST['p21a'])=='a1'){
   	if(isset($_POST['p21r1c1'])){
 	$totalSM++;

	}
}
//////////////////////////////////////////////////////////////////////// p22b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p22b'])&&($_POST['p22b'])=='b1'){
   	if(isset($_POST['p22r2c1'])){
 	$totalSM++;

	}
}
//////////////////////////////////////////////////////////////////////////	p23b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p23b'])&&($_POST['p23b'])=='b1'){
   	if(isset($_POST['p23r2c1'])){
 	$totalSM++;

	}
}
////////////////////////////////////////////////////////////////////////// p24c c1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p24c'])&&($_POST['p24c'])=='c1'){
   	if(isset($_POST['p24r3c1'])){
 	$totalSM++;

	}
}
/////////////////////////////////////////////////////////////////////// COMIENZA PUNTOS S EN L
//////P1B B2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p1b'])&&($_POST['p1b'])=='b2'){
   	if(isset($_POST['p1r2c2'])){
 	$totalSL++;

	}
}
////////////////////////////////////////////////////////////////////////// P2C C2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p2c'])&&($_POST['p2c'])=='c2'){
    	if(isset($_POST['p2r3c2'])){
 	$totalSL++;

	}
}
////////////////////////////////////////////////////////////////////// p4d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p4d'])&&($_POST['p4d'])=='d2'){
    	if(isset($_POST['p4r4c2'])){
 	$totalSL++;

	}
}
/////////////////////////////////////////////////////////////////////// p5c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p5c'])&&($_POST['p5c'])=='c2'){
    	if(isset($_POST['p5r3c2'])){
 	$totalSL++;

	}
}
///////////////////////////////////////////////////////////////////////// p6b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p6b'])&&($_POST['p6b'])=='b2'){
    	if(isset($_POST['p6r2c2'])){
 	$totalSL++;

	}
}
////////////////////////////////////////////////////////////////////// p7d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p7d'])&&($_POST['p7d'])=='d2'){
    	if(isset($_POST['p7r4c2'])){
 	$totalSL++;

	}
}
////////////////////////////////////////////////////////////////////////// p8a a2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p8a'])&&($_POST['p8a'])=='a2'){
    	if(isset($_POST['p8r1c2'])){
 	$totalSL++;

	}
}
/////////////////////////////////////////////////////////////////////// p9a a2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p9a'])&&($_POST['p9a'])=='a2'){
    	if(isset($_POST['p9r1c2'])){
 	$totalSL++;

	}
}
///////////////////////////////////////////////////////////////// p10a a2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p10a'])&&($_POST['p10a'])=='a2'){
    	if(isset($_POST['p10r1c2'])){
 	$totalSL++;

	}
}
/////////////////////////////////////////////////////////////////////// p11c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p11c'])&&($_POST['p11c'])=='c2'){
    	if(isset($_POST['p11r3c2'])){
 	$totalSL++;

	}
}
/////////////////////////////////////////////////////////////////////////// p12b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p12b'])&&($_POST['p12b'])=='b2'){
    	if(isset($_POST['p12r2c2'])){
 	$totalSL++;

	}
}
//////////////////////////////////////////////////////////////////////// p14b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p14b'])&&($_POST['p14b'])=='b2'){
    	if(isset($_POST['p14r2c2'])){
 	$totalSL++;

	}
}
//////////////////////////////////////////////////////////////////// p15c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p15c'])&&($_POST['p15c'])=='c2'){
    	if(isset($_POST['p15r3c2'])){
 	$totalSL++;

	}
}
/////////////////////////////////////////////////////////////////////// p16a a2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p16a'])&&($_POST['p16a'])=='a2'){
    	if(isset($_POST['p16r1c2'])){
 	$totalSL++;

	}
}
//////////////////////////////////////////////////////////////////////p18c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p18c'])&&($_POST['p18c'])=='c2'){
    	if(isset($_POST['p18r3c2'])){
 	$totalSL++;

	}
}
///////////////////////////////////////////////////////////////////////// p19b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p19b'])&&($_POST['p19b'])=='b2'){
    	if(isset($_POST['p19r2c2'])){
 	$totalSL++;

	}
}
///////////////////////////////////////////////////////////////////////p20d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p20d'])&&($_POST['p20d'])=='d2'){
    	if(isset($_POST['p20r4c2'])){
 	$totalSL++;

	}
}
/////////////////////////////////////////////////////////////////////////p23a a2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p23a'])&&($_POST['p23a'])=='a2'){
    	if(isset($_POST['p23r1c2'])){
 	$totalSL++;

	}
}
////////////////////////////////////////////////////////////////////// p24c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p24c'])&&($_POST['p24c'])=='c2'){
    	if(isset($_POST['p24r3c2'])){
 	$totalSL++;

	}
}
///////////////////////////////////////////////////////////////////////


















//////////////////////////////////////////////////////////////////////////// PORCENTAJE DE S EN M

 if(isset($_POST['register'])){
	if($totalSM==0){
		$porcentSM=5;
	}
	if($totalSM==1){
		$porcentSM=10;
	}
	if($totalSM==2){
		$porcentSM=16;
	}
	if($totalSM==3){
		$porcentSM=30;
	}
	if($totalSM==4){
		$porcentSM=40;
	}
	if($totalSM==5){
		$porcentSM=55;
	}
	if($totalSM==6){
		$porcentSM=63;
	}
	if($totalSM==7){
		$porcentSM=75;
	}
	if($totalSM==8){
		$porcentSM=84;
	}
	if($totalSM==9){
		$porcentSM=90;
	}
	if($totalSM==10){
		$porcentSM=95;
	}
	if($totalSM==11){
		$porcentSM=96;
	}
	if($totalSM==12 || $totalSM==13 || $totalSM==14 || $totalSM==15){
		$porcentSM=97;
	}
	if($totalSM==16 || $totalSM==17 || $totalSM==18){
		$porcentSM=98;
	}
	if($totalSM==19){
		$porcentSM=99;
	}
	


	
 }
///////////////////////////////////////////////////////////////////////// PORCENTAJE DE S EN L

 if(isset($_POST['register'])){
	if($totalSL==0){
		$porcentSL=99;
	}
	if($totalSL==1){
		$porcentSL=97;
	}
	if($totalSL==2){
		$porcentSL=95;
	}
	if($totalSL==3){
		$porcentSL=87;
	}
	if($totalSL==4){
		$porcentSL=80;
	}
	if($totalSL==5){
		$porcentSL=65;
	}
	if($totalSL==6){
		$porcentSL=55;
	}
	if($totalSL==7){
		$porcentSL=35;
	}
	if($totalSL==8){
		$porcentSL=28;
	}
	if($totalSL==9){
		$porcentSL=18;
	}
	if($totalSL==10){
		$porcentSL=10;
	}
	if($totalSL==11){
		$porcentSL=5;
	}
	if($totalSL==12){
		$porcentSL=4;
	}
	if($totalSL==13 || $totalSL==14 || $totalSL==15){
		$porcentSL=3;
	}
	if($totalSL==16 || $totalSL==17 || $totalSL==18){
		$porcentSL=2;
	}
	if($totalSL==19){
		$porcentSL=1;
	}

	
 }
 ////////////////////////////////////////////////////////////// PORCENTAJE TOTAL DE S

 if(isset($_POST['register'])){
	$totalSML=$totalSM-$totalSL;
	
	if($totalSML==-19){
		$porcentSTOT=1;
	}
	if($totalSML==-18 || $totalSML==-17 || $totalSML==-16 || $totalSML==-15|| $totalSML==-14 || $totalSML==-13){
		$porcentSTOT=2;
	}
	if($totalSML==-12){
		$porcentSTOT=3;
	}
	if($totalSML==-11){
		$porcentSTOT=4;
	}
	if($totalSML==-10){
		$porcentSTOT=5;
	}
	if($totalSML==-9){
		$porcentSTOT=8;
	}
	if($totalSML==-8){
		$porcentSTOT=10;
	}
	if($totalSML==-7){
		$porcentSTOT=15;
	}
	if($totalSML==-6){
		$porcentSTOT=20;
	}
	if($totalSML==-5){
		$porcentSTOT=25;
	}
	if($totalSML==-4){
		$porcentSTOT=30;
	}
	if($totalSML==-3){
		$porcentSTOT=35;
	}
	if($totalSML==-2){
		$porcentSTOT=40;
	}
	if($totalSML==-1){
		$porcentSTOT=50;
	}
	if($totalSML==0){
		$porcentSTOT=57;
	}
	if($totalSML==1){
		$porcentSTOT=60;
	}
	if($totalSML==2){
		$porcentSTOT=70;
	}
	if($totalSML==3){
		$porcentSTOT=75;
	}
	if($totalSML==4){
		$porcentSTOT=80;
	}
	if($totalSML==5){
		$porcentSTOT=84;
	}
	if($totalSML==6){
		$porcentSTOT=87;
	}
	if($totalSML==7){
		$porcentSTOT=91;
	}
	if($totalSML==8){
		$porcentSTOT=94;
	}
	if($totalSML==9){
		$porcentSTOT=96;
	}
	if($totalSML==10 || $totalSML==11){
		$porcentSTOT=97;
	}
	if($totalSML==12 || $totalSML==13 || $totalSML==14 || $totalSML==15 || $totalSML==16 || $totalSML==17){
		$porcentSTOT=98;
	}
	
 			}

//////////////////////////////////////////////////// INICIA PUNTOS C EN M
/////////////////////// P1C C1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p1c'])&&($_POST['p1c'])=='c1'){
    	if(isset($_POST['p1r3c1'])){
 	$totalCM++;

	}
}
//////////////////////////////////////////////////////////// p2b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p2b'])&&($_POST['p2b'])=='b1'){
     	if(isset($_POST['p2r2c1'])){
 	$totalCM++;

	}
}
/////////////////////////////////////////////////////////// p4b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p4b'])&&($_POST['p4b'])=='b1'){
     	if(isset($_POST['p4r2c1'])){
 	$totalCM++;

	}
}
////////////////////////////////////////////////////////// p7a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p7a'])&&($_POST['p7a'])=='a1'){
     	if(isset($_POST['p7r1c1'])){
 	$totalCM++;

	}
}
//////////////////////////////////////////////////////// p9b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p9b'])&&($_POST['p9b'])=='b1'){
     	if(isset($_POST['p9r2c1'])){
 	$totalCM++;

	}
}
//////////////////////////////////////////////////////// p10b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p10b'])&&($_POST['p10b'])=='b1'){
     	if(isset($_POST['p10r2c1'])){
 	$totalCM++;

	}
}
////////////////////////////////////////////////////// p13a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p13a'])&&($_POST['p13a'])=='a1'){
     	if(isset($_POST['p13r1c1'])){
 	$totalCM++;

	}
}
////////////////////////////////////////////////////// p14a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p14a'])&&($_POST['p14a'])=='a1'){
     	if(isset($_POST['p14r1c1'])){
 	$totalCM++;

	}
}
////////////////////////////////////////////////////// p15a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p15a'])&&($_POST['p15a'])=='a1'){
     	if(isset($_POST['p15r1c1'])){
 	$totalCM++;

	}
}
//////////////////////////////////////////////////////// p16b b1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p16b'])&&($_POST['p16b'])=='b1'){
     	if(isset($_POST['p16r2c1'])){
 	$totalCM++;

	}
}
///////////////////////////////////////////////////// p19d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p19d'])&&($_POST['p19d'])=='d1'){
     	if(isset($_POST['p19r4c1'])){
 	$totalCM++;

	}
}
//////////////////////////////////////////////////// p20a a1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p20a'])&&($_POST['p20a'])=='a1'){
     	if(isset($_POST['p20r1c1'])){
 	$totalCM++;

	}
}
//////////////////////////////////////////////////// p21c c1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p21c'])&&($_POST['p21c'])=='c1'){
     	if(isset($_POST['p21r3c1'])){
 	$totalCM++;

	}
}
//////////////////////////////////////////////////// p23c c1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p23c'])&&($_POST['p23c'])=='c1'){
     	if(isset($_POST['p23r3c1'])){
 	$totalCM++;

	}
}
/////////////////////////////////////////////////// p24d d1

 if(isset($_POST['register'])){
//	if (!empty($_POST['p24d'])&&($_POST['p24d'])=='d1'){
     	if(isset($_POST['p24r4c1'])){
 	$totalCM++;

	}
}
/////////////////////////////////////////////////////////////
//////////////// PUTNOS DE C EN L
/////////////// P1C C2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p1c'])&&($_POST['p1c'])=='c2'){
     	if(isset($_POST['p1r3c2'])){
 	$totalCL++;

	}
}
//////////////////////////////////////////////////// p3b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p3b'])&&($_POST['p3b'])=='b2'){
      	if(isset($_POST['p3r2c2'])){
 	$totalCL++;

	}
}
////////////////////////////////////////////////// p5d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p5d'])&&($_POST['p5d'])=='d2'){
      	if(isset($_POST['p5r4c2'])){
 	$totalCL++;

	}
}
/////////////////////////////////////////////////// p6c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p6c'])&&($_POST['p6c'])=='c2'){
      	if(isset($_POST['p6r3c2'])){
 	$totalCL++;

	}
}
/////////////////////////////////////////////////// p8b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p8b'])&&($_POST['p8b'])=='b2'){
      	if(isset($_POST['p8r2c2'])){
 	$totalCL++;

	}
}
/////////////////////////////////////////////////// p9b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p9b'])&&($_POST['p9b'])=='b2'){
      	if(isset($_POST['p9r2c2'])){
 	$totalCL++;

	}
}
/////////////////////////////////////////////////// p10b b2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p10b'])&&($_POST['p10b'])=='b2'){
      	if(isset($_POST['p10r2c2'])){
 	$totalCL++;

	}
}
/////////////////////////////////////////////////// p11d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p11d'])&&($_POST['p11d'])=='d2'){
      	if(isset($_POST['p11r4c2'])){
 	$totalCL++;

	}
}
////////////////////////////////////////////////// p12c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p12c'])&&($_POST['p12c'])=='c2'){
      	if(isset($_POST['p12r3c2'])){
 	$totalCL++;

	}
}
////////////////////////////////////////////////// p13a a2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p13a'])&&($_POST['p13a'])=='a2'){
      	if(isset($_POST['p13r1c2'])){
 	$totalCL++;

	}
}
//////////////////////////////////////////////////  p17a a2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p17a'])&&($_POST['p17a'])=='a2'){
      	if(isset($_POST['p17r1c2'])){
 	$totalCL++;

	}
}
//////////////////////////////////////////////// p18d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p18d'])&&($_POST['p18d'])=='d2'){
      	if(isset($_POST['p18r4c2'])){
 	$totalCL++;

	}
}
//////////////////////////////////////////////// p21c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p21c'])&&($_POST['p21c'])=='c2'){
      	if(isset($_POST['p21r3c2'])){
 	$totalCL++;

	}
}
/////////////////////////////////////////////////  p22c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p22c'])&&($_POST['p22c'])=='c2'){
      	if(isset($_POST['p22r3c2'])){
 	$totalCL++;

	}
}
///////////////////////////////////////////////// p23c c2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p23c'])&&($_POST['p23c'])=='c2'){
      	if(isset($_POST['p23r3c2'])){
 	$totalCL++;

	}
}
///////////////////////////////////////////////// p24d d2

 if(isset($_POST['register'])){
//	if (!empty($_POST['p24d'])&&($_POST['p24d'])=='d2'){
      	if(isset($_POST['p24r4c2'])){
 	$totalCL++;

	}
}
/////////////////////////////////////////////////////////////
///////////////////////////////////////////////


//////////////////////////////////////////////////////////////
///////////////// PORCENTAJE DE C EN M

 if(isset($_POST['register'])){
	if($totalCM==0){
		$porcentCM=1;
	}
	if($totalCM==1){
		$porcentCM=5;
	}
	if($totalCM==2){
		$porcentCM=16;
	}
	if($totalCM==3){
		$porcentCM=30;
	}
	if($totalCM==4){
		$porcentCM=55;
	}
	if($totalCM==5){
		$porcentCM=70;
	}
	if($totalCM==6){
		$porcentCM=84;
	}
	if($totalCM==7){
		$porcentCM=93;
	}
	if($totalCM==8){
		$porcentCM=95;
	}
	if($totalCM==9 || $totalCM==10 || $totalCM==11){
		$porcentCM=97;
	}
	if($totalCM==12 || $totalCM==13 || $totalCM==14){
		$porcentCM=98;
	}
	if($totalCM==15){
		$porcentCM=99;
	}
	

	
 }
 //////////////////////////////////////////////////////////////////
 ////////////////// PORCENTAJE DE C EN L

 if(isset($_POST['register'])){
	if($totalCL==0){
		$porcentCL=99;
	}
	if($totalCL==1){
		$porcentCL=97;
	}
	if($totalCL==2){
		$porcentCL=95;
	}
	if($totalCL==3){
		$porcentCL=90;
	}
	if($totalCL==4){
		$porcentCL=84;
	}
	if($totalCL==5){
		$porcentCL=70;
	}
	if($totalCL==6){
		$porcentCL=55;
	}
	if($totalCL==7){
		$porcentCL=40;
	}
	if($totalCL==8){
		$porcentCL=38;
	}
	if($totalCL==9){
		$porcentCL=23;
	}
	if($totalCL==10){
		$porcentCL=10;
	}
	if($totalCL==11){
		$porcentCL=5;
	}
	if($totalCL==12){
		$porcentCL=4;
	}
	if($totalCL==13){
		$porcentCL=3;
	}
	if($totalCL==14 || $totalCL==15){
		$porcentCL=2;
	}
	if($totalCL==16){
		$porcentCL=1;
	}
	

	
 }
 ////////////////////////////////////////////////
 //////////////////// PORCENTAJE TOTAL DE C 

 if(isset($_POST['register'])){
	$totalCML=$totalCM-$totalCL;
	
	if($totalCML==-16){
		$porcentCTOT=1;
	}
	if($totalCML==-15 || $totalCML==-14 || $totalCML==-13 || $totalCML==-12){
		$porcentCTOT=2;
	}
	if($totalCML==-11){
		$porcentCTOT=3;
	}
	if($totalCML==-10){
		$porcentCTOT=4;
	}
	if($totalCML==-9){
		$porcentCTOT=6;
	}
	if($totalCML==-8){
		$porcentCTOT=9;
	}
	if($totalCML==-7){
		$porcentCTOT=13;
	}
	if($totalCML==-6){
		$porcentCTOT=20;
	}
	if($totalCML==-5){
		$porcentCTOT=25;
	}
	if($totalCML==-4){
		$porcentCTOT=35;
	}
	if($totalCML==-3){
		$porcentCTOT=40;
	}
	if($totalCML==-2){
		$porcentCTOT=55;
	}
	if($totalCML==-1){
		$porcentCTOT=60;
	}
	if($totalCML==0){
		$porcentCTOT=70;
	}
	if($totalCML==1){
		$porcentCTOT=75;
	}
	if($totalCML==2){
		$porcentCTOT=84;
	}
	if($totalCML==3){
		$porcentCTOT=90;
	}
	if($totalCML==4){
		$porcentCTOT=95;
	}
	if($totalCML==5){
		$porcentCTOT=96;
	}
	if($totalCML==6 || $totalCML==7){
		$porcentCTOT=97;
	}
	if($totalCML==8 || $totalCML==9 || $totalCML==10 || $totalCML==11 || $totalCML==12 || $totalCML==13 || $totalCML==14){
		$porcentCTOT=98;
	}
	if($totalCML==15){
		$porcentCTOT=99;
	}
	
	
 			}
///////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// FIN DE TOMA DE PUNTOS Y PORCENTAJES

//////////////////// TRASPASO DE RESULTADOS A LA BASE DE DATOS
include("Conexion2.php");
 if(isset($_POST['register'])){




 mysqli_query($cnx,"UPDATE candidatos SET CleaverDM=$porcentDM,CleaverDL=$porcentDL,CleaverDML=$porcentDTOT,CleaverIM=$porcentIM,CleaverIL=$porcentIL,CleaverIML=$porcentITOT,CleaverSM=$porcentSM,CleaverSL=$porcentSL,CleaverSML=$porcentSTOT,CleaverCM=$porcentCM,CleaverCL=$porcentCL,CleaverCML=$porcentCTOT, StatusCleaver='No' WHERE User= '$nombreUser'");

header("Location: /IndexUsuario.php");
 
 }




?>
     
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
