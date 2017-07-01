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
    die(mysql_error()); // TODO: better error handling
}


if($res=mysqli_fetch_array($result))
{				  


$I=0;
$II=0;
$III=0;
$IV=0;
$V=0;
$VI=0;
$VII=0;
$VIII=0;
$IX=0;
$X=0;

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examen Terman</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
body,td,th {
	font-family: "Open Sans", sans-serif;
}
body {
	background-image: url();
}
</style>
</head>
<body>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
        
		//Número máximo de casillas marcadas por cada fila 
var maxi=2; 

//El contador es un arrayo de forma que cada posición del array es una linea del formulario 
var contador=new Array(2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);


function validar(check,grupo) { 
   //Compruebo si la casilla está marcada 
   
   if (check.checked==true){ 
      	//está marcada, entonces aumento en uno el contador del grupo 
      	contador[grupo]++; 
      	//compruebo si el contador ha llegado al máximo permitido 
      	if (contador[grupo]>maxi) { 
         	//si ha llegado al máximo, muestro mensaje de error 
         	alert('No se pueden elegir más de '+maxi+' casillas a la vez.'); 
         	//desmarco la casilla, porque no se puede permitir marcar 
         	check.checked=false; 
         	//resto una unidad al contador de grupo, porque he desmarcado una casilla 
         	contador[grupo]--; 
      	} 
   }else { 
      	//si la casilla no estaba marcada, resto uno al contador de grupo 
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
              <input name="nombre" type="text" class="libg"  style="text-align:center"  value="<?php echo $res['Nombre']?>" size="15" readonly />
              <?php
}
			  ?>
            </p>
            <div class="left-panel">
              <div class="generic-content">
                <div class="title">
                  <h1>EXAMEN TERMAN MERRILL</h1>
                  <p>&nbsp;</p>
                  <H2>SERIE I&nbsp;</H2>
                  <H2>&nbsp;</H2>
                  <p>LEA ESTO CON MUCHA ATENCIÓN</p>
                  <p>ELIJA LA RESPUESTAS  CORRESPONDIENTE A LA PALABRA QUE COMPLETE CORRECTAMENTE LA ORACIÓN, TAL COMO LO MUESTRA EL EJEMPLO: </p>
                  <p><br />
                    EJEMPLO: <br />
                    EL INICIADOR DE NUESTRA GUERRA DE INDEPENDENCIA FUE: <br />
                    <input type="radio" name="ejemplo1" id="radio" value="radio" />
MORELOS  
<input type="radio" name="ejemplo1" id="radio2" value="radio2" />
ZARAGOZA  
<input type="radio" name="ejemplo1" id="radio3" value="radio3" />
ITURBIDE  
<input name="ejemplo1" type="radio" id="radio4" value="radio4" checked="checked" />
HIDALGO</p>
                  <p>&nbsp;</p>
                  <p>PREGUNTAS:</p>
                  <p>1. LA GASOLINA SE EXTRAE DE:</p>
                  <p> 
                    <input type="radio" name="s1e1" id="radio5" value="a" />
GRANOS     
<input type="radio" name="s1e1" id="radio6" value="b" />
PETROLEO     
<input type="radio" name="s1e1" id="radio7" value="c" />
TREMENTINA     
<input type="radio" name="s1e1" id="radio8" value="d" />
SEMILLAS </p>
                  <p><br />
                  2. UNA TONELADA TIENE: </p>
                  <p>
                    <input type="radio" name="s1e2" id="radio9" value="a" /> 
                  1,000 KG.     
                  <input type="radio" name="s1e2" id="radio10" value="b" />
2,000 KG.     
<input type="radio" name="s1e2" id="radio11" value="c" />
3,000 KG.     
<input type="radio" name="s1e2" id="radio12" value="d" />
4,000 KG. </p>
                  <p><br />
                  3. LA MAYORÍA DE NUESTRAS EXPORTACIONES SALEN POR: </p>
                  <p>
                    <input type="radio" name="s1e3" id="radio13" value="a" /> 
                  MAZATLAN     
                  <input type="radio" name="s1e3" id="radio14" value="b" />
VERACRUZ    
<input type="radio" name="s1e3" id="radio15" value="c" />
PROGRESO   
<input type="radio" name="s1e3" id="radio16" value="d" />
ACAPULCO </p>
                  <p><br />
                  4. EL NERVIO ÓPTICO SIRVE PARA: </p>
                  <p>
                    <input type="radio" name="s1e4" id="radio17" value="a" /> 
                  VER     
                  <input type="radio" name="s1e4" id="radio18" value="b" />
OIR     
<input type="radio" name="s1e4" id="radio19" value="c" />
PROBAR     
<input type="radio" name="s1e4" id="radio20" value="d" />
SENTIR </p>
                  <p><br />
                  5. EL CAFÉ ES UNA ESPECIE DE: </p>
                  <p>
                    <input type="radio" name="s1e5" id="radio21" value="a" /> 
                  CORTEZA     
                  <input type="radio" name="s1e5" id="radio22" value="b" />
FRUTO     
<input type="radio" name="s1e5" id="radio23" value="c" />
 HOJAS     
 <input type="radio" name="s1e5" id="radio24" value="d" />
RAÍZ </p>
                  <p><br />
                  6. EL JAMON ES CARNE DE: </p>
                  <p>
                    <input type="radio" name="s1e6" id="radio25" value="a" /> 
                  CARNERO     
                  <input type="radio" name="s1e6" id="radio26" value="b" />
VACA     
<input type="radio" name="s1e6" id="radio27" value="c" />
GALLINA     
<input type="radio" name="s1e6" id="radio28" value="d" />
CERDO </p>
                  <p><br />
                  7. LA LARINGE ESTA EN: </p>
                  <p>
                    <input type="radio" name="s1e7" id="radio29" value="a" /> 
                  ABDOMEN     
                  <input type="radio" name="s1e7" id="radio30" value="b" />
CABEZA     
<input type="radio" name="s1e7" id="radio31" value="c" />
GARGANTA     
<input type="radio" name="s1e7" id="radio32" value="d" />
ESPALDA </p>
                  <p><br />
                  8. LA GUILLOTINA CAUSA: </p>
                  <p>
                    <input type="radio" name="s1e8" id="radio33" value="a" /> 
                  MUERTE     
                  <input type="radio" name="s1e8" id="radio34" value="b" />
ENFERMEDAD     
<input type="radio" name="s1e8" id="radio35" value="c" />
FIEBRE     
<input type="radio" name="s1e8" id="radio36" value="d" />
MALESTAR </p>
                  <p><br />
                  9. LA GRUA SE USA PARA: </p>
                  <p>
                    <input type="radio" name="s1e9" id="radio37" value="a" /> 
                  PERFORAR     
                  <input type="radio" name="s1e9" id="radio38" value="b" />
CORTAR     
<input type="radio" name="s1e9" id="radio39" value="c" />
LEVANTAR     
<input type="radio" name="s1e9" id="radio40" value="d" />
EXPRIMIR </p>
                  <p><br />
                  10.  UNA FIGURA DE SEIS LADOS SE LLAMA: </p>
                  <p>
                    <input type="radio" name="s1e10" id="radio41" value="a" /> 
                  PENTAGONO  
                  <input type="radio" name="s1e10" id="radio42" value="b" />
PARALELOGRAMO  
<input type="radio" name="s1e10" id="radio43" value="c" />
HEXAGONO   
<input type="radio" name="s1e10" id="radio44" value="d" />
TRAPECIO </p>
                  <p><br />
                  11.  EL KILOWATT MIDE: </p>
                  <p>
                    <input type="radio" name="s1e11" id="radio45" value="a" /> 
                  LLUVIA     
                  <input type="radio" name="s1e11" id="radio46" value="b" />
VIENTO     
<input type="radio" name="s1e11" id="radio47" value="c" />
ELECTRICIDAD    
<input type="radio" name="s1e11" id="radio48" value="d" />
PRESION </p>
                  <p><br />
                  12.  LA PAUTA SE UTILIZA EN: </p>
                  <p>
                    <input type="radio" name="s1e12" id="radio49" value="a" /> 
                  AGRICULTURA     
                  <input type="radio" name="s1e12" id="radio50" value="b" />
MÚSICA     
<input type="radio" name="s1e12" id="radio51" value="c" />
FOTOGRAFIA     
<input type="radio" name="s1e12" id="radio52" value="d" />
ESTENOGRAFIA </p>
                  <p><br />
                  13.  LAS ESMERALDAS SON: </p>
                  <p>
                    <input type="radio" name="s1e13" id="radio53" value="a" /> 
                  AZULES     
                  <input type="radio" name="s1e13" id="radio54" value="b" />
VERDES     
<input type="radio" name="s1e13" id="radio55" value="c" />
ROJAS     
<input type="radio" name="s1e13" id="radio56" value="d" />
AMARILLAS </p>
                  <p><br />
                  14. EL METRO ES APROXIMADAMENTE IGUAL A: </p>
                  <p>
                    <input type="radio" name="s1e14" id="radio57" value="a" /> 
                  PIE     
                  <input type="radio" name="s1e14" id="radio58" value="b" />
PULGADA     
<input type="radio" name="s1e14" id="radio59" value="c" />
YARDA     
<input type="radio" name="s1e14" id="radio60" value="d" />
MILLA </p>
                  <p><br />
                  15. LAS ESPONJAS SE OBTIENEN DE: </p>
                  <p>
                    <input type="radio" name="s1e15" id="radio61" value="a" /> 
                  ANIMALES     
                  <input type="radio" name="s1e15" id="radio62" value="b" />
HIERBAS     
<input type="radio" name="s1e15" id="radio63" value="c" />
BOSQUES     
<input type="radio" name="s1e15" id="radio64" value="d" />
MINAS </p>
                  <p><br />
                    16. FRAUDE ES UN TÉRMINO UTILIZADO EN: </p>
                  <p>
                    <input type="radio" name="s1e16" id="radio65" value="a" /> 
                  MEDICINA     
                  <input type="radio" name="s1e16" id="radio66" value="b" />
TEOLOGÍA     
<input type="radio" name="s1e16" id="radio67" value="c" />
LEYES     
<input type="radio" name="s1e16" id="radio68" value="d" />
PEDAGOGÍA </p>
                  <p>&nbsp;</p>
                  <H2>SERIE II</H2>
                  
<p>&nbsp;</p>
<p>INSTRUCCIONES: <br />
  LEA CADA CUESTION Y ELIJA LA OPCIÓN CORRESPONDIENTE A LA MEJOR RESPUESTA TAL COMO LO MUESTRA EL EJEMPLO. </p>
<p><br />
  EJEMPLO: <br />
  ¿POR QUÉ COMPRAMOS RELOJES?   POR QUE: <br />
  <input type="radio" name="ejemplo2" id="radio69" value="radio69" />
NOS GUSTAN OÍRLOS SONAR. 
<input type="radio" name="ejemplo2" id="radio70" value="radio69" />
TIENE MANECILLAS. 
<input name="ejemplo2" type="radio" id="radio71" value="radio69" checked="checked" />
NOS INDICAN LAS HORAS </p>
             
                  <p></p>
                  <p></p>
                  <p>PREGUNTAS:</p>
                  <p>1. SI LA TIERRA ESTUVIERA MAS CERCA DEL SOL: </p>
                  <p>
                    <input type="radio" name="s2e1" id="radio72" value="a" /> 
                  LAS ESTRELLAS DESAPARECERÍAN. </p>
                  <p>
                    <input type="radio" name="s2e1" id="radio73" value="b" /> 
                  LOS MESES SERÍAN MAS LARGOS. </p>
                  <p>
                    <input type="radio" name="s2e1" id="radio74" value="c" /> 
                  LA TIERRA ESTARIA MÁS CALIENTE. </p>
                  <p><br />
                  2. LOS RAYOS DE UNA RUEDA ESTÁN FRECUENTEMENTE HECHOS DE NOGAL PORQUE: </p>
                  <p>
                    <input type="radio" name="s2e2" id="radio75" value="a" /> 
                  EL NOGAL ES FUERTE. </p>
                  <p>
                    <input type="radio" name="s2e2" id="radio76" value="b" /> 
                  SE CORTA FÁCILMENTE. </p>
                  <p>
                    <input type="radio" name="s2e2" id="radio77" value="c" /> 
                  SUS FRENOS NO SON BUENOS. </p>
                  <p><br />
                  3. UN TREN SE DETIENE CON MAS DIFICULTAD QUE UN AUTOMOVIL. POR QUE: </p>
                  <p>
                    <input type="radio" name="s2e3" id="radio78" value="a" /> 
                  TIENE MAS RUEDA. </p>
                  <p>
                    <input type="radio" name="s2e3" id="radio79" value="b" /> 
                  ES MÁS PESADO. </p>
                  <p>
                    <input type="radio" name="s2e3" id="radio80" value="c" /> 
                  SUS FRENOS NO SON BUENOS. </p>
                  <p><br />
                  4. EL DICHO &quot;A GOLPECITOS SE DERRIBA UN ROBLE&quot; QUIERE DECIR: </p>
                  <p>
                    <input type="radio" name="s2e4" id="radio81" value="a" /> 
                  QUE LOS ROBLES SON DÉBILES. </p>
                  <p>
                    <input type="radio" name="s2e4" id="radio82" value="b" /> 
                  QUE SON MEJORES LOS GOLPES PEQUEÑOS. </p>
                  <p>
                    <input type="radio" name="s2e4" id="radio83" value="c" /> 
                  QUE EL ESFUERZO CONSTANTE LOGRA RESULTADOS SORPRENDENTES. </p>
                  <p><br />
                  5. EL DICHO &quot;UNA OLLA VIGILADA NUNCA HIERVE&quot; QUIERE DECIR: </p>
                  <p>
                    <input type="radio" name="s2e5" id="radio84" value="a" /> 
                  QUE NO DEBEMOS VIGILARLA, CUANDO ESTE EN EL FUEGO. </p>
                  <p>
                    <input type="radio" name="s2e5" id="radio85" value="b" /> 
                  QUE TARDA EN HERVIR. </p>
                  <p>
                    <input type="radio" name="s2e5" id="radio86" value="c" /> 
                  QUE EL TIEMPO SE ALARGA CUANDO ESPERAMOS ALGO. </p>
                  <p><br />
                  6. EL DICHO &quot;SIEMBRA PASTO MIENTRAS HAYA SOL&quot; QUIERE DECIR: </p>
                  <p>
                    <input type="radio" name="s2e6" id="radio87" value="a" /> 
                  QUE EL PASTO SE SIEMBRA EN EL VERANO. </p>
                  <p>
                    <input type="radio" name="s2e6" id="radio88" value="b" /> 
                  QUE DEBEMOS APROVECHAR NUESTRAS OPORTUNIDADES. </p>
                  <p>
                    <input type="radio" name="s2e6" id="radio89" value="c" /> 
                  QUE EL PASTO NO DEBE CORTARSE EN LA NOCHE. </p>
                  <p><br />
                  7. EL DICHO &quot;ZAPATERO A TUS ZAPATOS&quot; QUIERE DECIR: </p>
                  <p>
                    <input type="radio" name="s2e7" id="radio90" value="a" /> 
                  QUE UN ZAPATERO NO DEBE ABANDONAR SUS ZAPATOS. </p>
                  <p>
                    <input type="radio" name="s2e7" id="radio91" value="b" /> 
                  QUE LOS ZAPATEROS NO DEBEN ESTAR OCIOSOS. </p>
                  <p>
                    <input type="radio" name="s2e7" id="radio92" value="c" /> 
                  QUE DEBEMOS TRABAJAR EN LO QUE PODEMOS HACER MEJOR. </p>
                  <p><br />
                  8. EL DICHO &quot;LA CUÑA PARA QUE APRIETE TIENE QUE SER DEL MISMO PALO&quot; QUIERE DECIR: </p>
                  <p>
                    <input type="radio" name="s2e8" id="radio93" value="a" /> 
                  QUE EL PALO SIRVE PARA APRETAR. </p>
                  <p>
                    <input type="radio" name="s2e8" id="radio94" value="b" /> 
                  QUE LAS CUÑAS SIEMPRE SON DE MADERA. </p>
                  <p>
                    <input type="radio" name="s2e8" id="radio95" value="c" /> 
                  NOS EXIGEN MAS LAS PERSONAS QUE NOS CONOCEN. </p>
                  <p><br />
                  9. UN ACORAZADO DE ACERO FLOTA  PORQUE: </p>
                  <p>
                    <input type="radio" name="s2e9" id="radio96" value="a" /> 
                  LA MAQUINA LO HACE FLOTAR. </p>
                  <p>
                    <input type="radio" name="s2e9" id="radio97" value="b" /> 
                  PORQUE TIENE GRANDES ESPACIOS HUECOS. </p>
                  <p>
                    <input type="radio" name="s2e9" id="radio98" value="c" /> 
                  CONTIENE ALGO DE MADERA. </p>
                  <p><br />
                  10.  LAS PLUMAS DE LAS ALAS AYUDAN AL PAJARO A VOLAR PORQUE: </p>
                  <p>
                    <input type="radio" name="s2e10" id="radio99" value="a" /> 
                  LAS ALAS OFRECEN UNA AMPLIA SUPERFICIE LIGERA. </p>
                  <p>
                    <input type="radio" name="s2e10" id="radio100" value="b" /> 
                  MANTIENEN EL AIRE FUERA DEL CUERPO. </p>
                  <p>
                    <input type="radio" name="s2e10" id="radio101" value="c" /> 
                  DISMINUYEN SU PESO. </p>
                  <p><br />
                    11. EL DICHO &quot;UNA GOLONDRINA NO HACE VERANO&quot; QUIERE DECIR: </p>
                  <p>
                    <input type="radio" name="s2e11" id="radio102" value="a" /> 
                  QUE LAS GOLONDRINAS REGRESAN. </p>
                  <p>
                    <input type="radio" name="s2e11" id="radio103" value="b" /> 
                  QUE UN SIMPLE DATO NO ES SUPERFICIE. </p>
                  <p>
                    <input type="radio" name="s2e11" id="radio104" value="c" /> 
                  QUE LOS PAJAROS SE AGREGAN A NUESTROS PLACERES DE VERANO. </p>
                  <p>&nbsp;</p>
                  <p><h2>SERIE III</h2>&nbsp;</p>
                  <p>INSTRUCCIONES: <br />
                  CUANDO LAS DOS PALABRAS SIGNIFIQUEN LO MISMO, PONGA LA LETRA (I) DE IGUAL, CUANDO SIGNIFIQUE LO OPUESTO, PONGA LA LETRA (O) DE OPUESTO. </p>
                  <p><br />
                    EJEMPLO: <br />
                    TIRAR     -     ARROJAR................................................................   ( I ) <br />
                  NORTE   -     SUR...........................................................................   (O) </p>
                  <p>&nbsp;</p>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <table width="100%" border="0">
                    <tr>
                      <td><p>1. SALADO  -  DULCE </p></td>
                     <td><input name="s3e1" type="text" id="s3e1" /></td>
                    </tr>
                    <tr>
                      <td><p>2.  ALEGRE  -  REGOCIJARSE </p></td>
                      <td><input name="s3e2" type="text" id="s3e2" /></td>
                    </tr>
                    <tr>
                      <td> <p>3. MAYOR  -  MENOR </p></td>
                      <td><input name="s3e3" type="text" id="s3e3" /></td>
                    </tr>
                    <tr>
                      <td><p>4. SENTARSE  -  PARARSE </p></td>
                      <td><input name="s3e4" type="text" id="e4" /></td>
                    </tr>
                    <tr>
                      <td><p>5. DESPERDICIAR -  APROVECHAR </p></td>
                      <td><input name="s3e5" type="text" id="e5" /></td>
                    </tr>
                    <tr>
                      <td><p>6. CONCEDER  -  NEGAR </p></td>
                      <td><input name="s3e6" type="text" id="e6" /></td>
                    </tr>
                    <tr>
                      <td><p>7.  TONICO  -  ESTIMULANTE </p></td>
                      <td><input name="s3e7" type="text" id="e7" /></td>
                    </tr>
                    <tr>
                      <td><p>8. REBAJAR  -  DENIGRAR </p></td>
                      <td><input name="s3e8" type="text" id="e8" /></td>
                    </tr>
                    <tr>
                      <td><p>9. PROHIBIR  -  PERMITIR </p></td>
                      <td><input name="s3e9" type="text" id="e9" /></td>
                    </tr>
                    <tr>
                      <td><p>10. OSADO  -  AUDAZ  </p></td>
                      <td><input name="s3e10" type="text" id="e10" /></td>
                    </tr>
                    <tr>
                      <td><p>11. ARREBATADO  -  PRUDENTE </p></td>
                      <td><input name="s3e11" type="text" id="e11" /></td>
                    </tr>
                    <tr>
                      <td><p>12. OBTUSO  -  AGUDO </p></td>
                      <td><input name="s3e12" type="text" id="e12" /></td>
                    </tr>
                    <tr>
                      <td><p>13. INEPTO  -  EXPERTO </p></td>
                      <td><input name="s3e13" type="text" id="e13" /></td>
                    </tr>
                    <tr>
                      <td><p>14. ESQUIVAR  -  HUIR </p></td>
                      <td><input name="s3e14" type="text" id="e14" /></td>
                    </tr>
                    <tr>
                      <td><p>15. REBELARSE  -  SOMETERSE </p></td>
                      <td><input name="s3e15" type="text" id="e15" /></td>
                    </tr>
                    <tr>
                      <td><p>16. MONOTONIA  -  VARIEDAD </p></td>
                      <td><input name="s3e16" type="text" id="e16" /></td>
                    </tr>
                    <tr>
                      <td><p>17. CONFORTAR  -  CONSOLAR </p></td>
                      <td><input name="s3e17" type="text" id="e17" /></td>
                    </tr>
                    <tr>
                      <td><p>18. EXPELER  -  RETENER </p></td>
                      <td><input name="s3e18" type="text" id="e18" /></td>
                    </tr>
                    <tr>
                      <td><p>19. DOCIL   -  SUMISO </p></td>
                      <td><input name="s3e19" type="text" id="e19" /></td>
                    </tr>
                    <tr>
                      <td><p>20. TRANSITORIO  -  PERMANENTE</p></td>
                      <td><input name="s3e20" type="text" id="e20" /></td>
                    </tr>
                    <tr>
                      <td><p>21.  SEGURIDAD  -  RIESGO </p></td>
                      <td><input name="s3e21" type="text" id="e21" /></td>
                    </tr>
                    <tr>
                      <td><p>22. APROBAR  -  OBJETAR </p></td>
                      <td><input name="s3e22" type="text" id="e22" /></td>
                    </tr>
                    <tr>
                      <td><p>23. EXPELER  -  ARROJAR </p></td>
                      <td><input name="s3e23" type="text" id="e23" /></td>
                    </tr>
                    <tr>
                      <td><p>24. ENGAÑO  -  IMPOSTURA </p></td>
                      <td><input name="s3e24" type="text" id="e24" /></td>
                    </tr>
                    <tr>
                      <td><p>25. MITIGAR  -  APACIGUAR</p></td>
                      <td><input name="s3e25" type="text" id="e25" /></td>
                    </tr>
                    <tr>
                      <td><p>26.  INICITAR  -  APLACAR </p></td>
                      <td><input name="s3e26" type="text" id="e26" /></td>
                    </tr>
                    <tr>
                      <td><p>27. REVERENCIA  -  VENERACION </p></td>
                      <td><input name="s3e27" type="text" id="e27" /></td>
                    </tr>
                    <tr>
                      <td><p>28.  SOBRIEDAD  -  FRUGALIDAD </p></td>
                      <td><input name="s3e28" type="text" id="e28" /></td>
                    </tr>
                    <tr>
                      <td><p>29. AUMENTAR  -  MENGUAR </p></td>
                      <td><input name="s3e29" type="text" id="e29" /></td>
                    </tr>
                    <tr>
                      <td><p>30. INCITAR  -  INSTIGAR</p></td>
                      <td><input name="s3e30" type="text" id="e30" /></td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                  
                  <p><h2>SERIE IV</h2></p>
                  <p>INSTRUCCIONES: <br />
                  ANOTE EN LA HOJA DE RESPUESTAS LAS LETRAS CORRESPONDIENTES A LAS DOS PALABRAS QUE INDICAN ALGO QUE SIEMPRE TIENE EL SUJETO. ANOTE SOLAMENTE DOS PARA CADA RENGLÓN. </p>
                  <p><br />
                    EJEMPLO: <br />
                    UN HOMBRE SIEMPRE TIENE: <br />
                    <input name="ejems1" type="checkbox" onclick='validar(form1.ejems1,0)' id="ejems1" value="a" checked="checked" />
CUERPO     
<input name="ejems2" type="checkbox" onclick='validar(form1.ejems2,0)' id="ejems2" value="b" />
GORRA     
<input name="ejems3" type="checkbox" onclick='validar(form1.ejems3,0)' id="ejems3" value="c" />
GUANTES     
<input name="ejems4" type="checkbox" onclick='validar(form1.ejems4,0)' id="ejems4" value="d" checked="checked" />
BOCA     
<input name="ejems5" type="checkbox" onclick='validar(form1.ejems5,0)' id="ejems5" value="e" />
DINERO </p>
                  <p>1. UN CÍRCULO TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e1a" id="s4e1a"  onclick='validar(form1.s4e1a,1)' /> 
                    ALTURA     
                    <input type="checkbox" name="s4e1b" id="s4e1b"  onclick='validar(form1.s4e1b,1)' />
CIRCUNFERENCIA     
<input type="checkbox" name="s4e1c" id="s4e1c"  onclick='validar(form1.s4e1c,1)' />
LATITUD     
<input type="checkbox" name="s4e1d" id="s4e1d"  onclick='validar(form1.s4e1d,1)' />
LONGITUD     
<input type="checkbox" name="s4e1e" id="s4e1e"  onclick='validar(form1.s4e1e,1)' />
RADIO <br />
                  </p>
                  <p>2. UN PÁJARO TIENE SIEMPRE: </p>
                  <p> 
                    <input type="checkbox" name="s4e2a" id="s4e2a"  onclick='validar(form1.s4e2a,2)' />
                    HUESOS     
                    <input type="checkbox" name="s4e2b" id="s4e2b"  onclick='validar(form1.s4e2b,2)' />
HUEVOS     
<input type="checkbox" name="s4e2c" id="s4e2c"  onclick='validar(form1.s4e2c,2)' />
PICO     
<input type="checkbox" name="s4e2d" id="s4e2d"  onclick='validar(form1.s4e2d,2)' />
NIDO     
<input type="checkbox" name="s4e2e" id="s4e2e"  onclick='validar(form1.s4e2e,2)' />
CANTO <br />
                  </p>
                  <p>3. LA MÚSICA TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e3a" id="s4e3a" onclick='validar(form1.s4e3a,3)'/> 
                    OYENTE     
                    <input type="checkbox" name="s4e3b" id="s4e3b" onclick='validar(form1.s4e3b,3)'/>
PIANO     
<input type="checkbox" name="s4e3c" id="s4e3c" onclick='validar(form1.s4e3c,3)'/>
RITMO     
<input type="checkbox" name="s4e3d" id="s4e3d" onclick='validar(form1.s4e3d,3)'/>
SONIDO     
<input type="checkbox" name="s4e3e" id="s4e3e" onclick='validar(form1.s4e3e,3)'/>
VIOLIN <br />
                  </p>
                  <p>4. UN BANQUETE TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e4a" id="s4e4a" onclick='validar(form1.s4e4a,4)'/> 
                    ALIMENTOS     
                    <input type="checkbox" name="s4e4b" id="s4e4b" onclick='validar(form1.s4e4b,4)'/>
MUSICA     
<input type="checkbox" name="s4e4c" id="s4e4c" onclick='validar(form1.s4e4c,4)'/>
PERSONAS     
<input type="checkbox" name="s4e4d" id="s4e4d" onclick='validar(form1.s4e4d,4)'/>
DISCURSOS     
<input type="checkbox" name="s4e4e" id="s4e4e" onclick='validar(form1.s4e4e,4)'/>
ANFITRION <br />
                  </p>
                  <p>5. UN CABALLO TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e5a" id="s4e5a" onclick='validar(form1.s4e5a,5)'/> 
                    ARNES     
                    <input type="checkbox" name="s4e5b" id="s4e5b" onclick='validar(form1.s4e5b,5)'/>
CASCOS     
<input type="checkbox" name="s4e5c" id="s4e5c" onclick='validar(form1.s4e5c,5)'/>
HERRADURAS     
<input type="checkbox" name="s4e5d" id="s4e5d" onclick='validar(form1.s4e5d,5)'/>
ESTABLO     
<input type="checkbox" name="s4e5d" id="s4e5d" onclick='validar(form1.s4e5e,5)'/>
COLA <br />
                  </p>
                  <p>6. UN JUEGO TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e6a" id="s4e6a" onclick='validar(form1.s4e6a,6)'/> 
                    CARTAS     
                    <input type="checkbox" name="s4e6b" id="s4e6b" onclick='validar(form1.s4e6b,6)'/>
MULTAS     
<input type="checkbox" name="s4e6c" id="s4e6c" onclick='validar(form1.s4e6c,6)'/>
JUGADORES     
<input type="checkbox" name="s4e6d" id="s4e6d" onclick='validar(form1.s4e6d,6)'/>
CASTIGOS     
<input type="checkbox" name="s4e6e" id="s4e6e" onclick='validar(form1.s4e6e,6)'/>
REGLAS <br />
                  </p>
                  <p>7. UN OBJETO TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e7a" id="s4e7a" onclick='validar(form1.s4e7a,7)'/> 
                    COLOR     
                    <input type="checkbox" name="s4e7b" id="s4e7b" onclick='validar(form1.s4e7b,7)'/>
TAMAÑO     
<input type="checkbox" name="s4e7c" id="s4e7c" onclick='validar(form1.s4e7c,7)'/>
SABOR    
<input type="checkbox" name="s4e7d" id="s4e7d" onclick='validar(form1.s4e7d,7)'/>
VALOR     
<input type="checkbox" name="s4e7e" id="s4e7e" onclick='validar(form1.s4e7e,7)'/>
PESO <br />
                  </p>
                  <p>8. UNA CONVERSACIÓN TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e8a" id="s4e8a" onclick='validar(form1.s4e8a,8)'/> 
                    ACUERDOS     
                    <input type="checkbox" name="s4e8b" id="s4e8b" onclick='validar(form1.s4e8b,8)'/>
PERSONAS     
<input type="checkbox" name="s4e8c" id="s4e8c" onclick='validar(form1.s4e8c,8)'/>
PREGUNTAS     
<input type="checkbox" name="s4e8d" id="s4e8d" onclick='validar(form1.s4e8d,8)'/>
INGENIO     
<input type="checkbox" name="s4e8e" id="s4e8e" onclick='validar(form1.s4e8e,8)'/>
PALABRAS <br />
                  </p>
                  <p>9. UNA DEUDA IMPLICA SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e9a" id="s4e9a" onclick='validar(form1.s4e9a,9)'/> 
                    ACREEDOR     
                    <input type="checkbox" name="s4e9b" id="s4e9b" onclick='validar(form1.s4e9b,9)'/>
DEUDOR     
<input type="checkbox" name="s4e9c" id="s4e9c" onclick='validar(form1.s4e9c,9)'/>
INTERES     
<input type="checkbox" name="s4e9d" id="s4e9d" onclick='validar(form1.s4e9d,9)'/>
HIPOTECA     
<input type="checkbox" name="s4e9e" id="s4e9e" onclick='validar(form1.s4e9e,9)'/>
PAGO <br />
                  </p>
                  <p>10. UN CIUDADANO TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e10a" id="s4e10a" onclick='validar(form1.s4e10a,10)'/> 
                  PAIS     
                  <input type="checkbox" name="s4e10b" id="s4e10b" onclick='validar(form1.s4e10b,10)'/>
OCUPACIÓN     
<input type="checkbox" name="s4e10c" id="s4e10c" onclick='validar(form1.s4e10c,10)'/>
DERECHOS     
<input type="checkbox" name="s4e10d" id="s4e10d" onclick='validar(form1.s4e10d,10)'/>
PROPIEDAD     
<input type="checkbox" name="s4e10e" id="s4e10e" onclick='validar(form1.s4e10e,10)'/>
VOTO </p>
                  <p>11. UN MUSEO TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e11a" id="s4e11a" onclick='validar(form1.s4e11a,11)'/> 
                    ANIMALES     
                    <input type="checkbox" name="s4e11b" id="s4e11b" onclick='validar(form1.s4e11b,11)'/>
ORDEN     
<input type="checkbox" name="s4e11c" id="s4e11c" onclick='validar(form1.s4e11c,11)'/>
COLECCIONES     
<input type="checkbox" name="s4e11d" id="s4e11d" onclick='validar(form1.s4e11d,11)'/>
MINERALES     
<input type="checkbox" name="s4e11e" id="s4e11e" onclick='validar(form1.s4e11e,11)'/>
VISITANTES <br />
                  </p>
                  <p>12. UN COMPROMISO IMPLICA SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e12a" id="s4e12a" onclick='validar(form1.s4e12a,12)'/> 
                    OBLIGACION     
                    <input type="checkbox" name="s4e12b" id="s4e12b" onclick='validar(form1.s4e12b,12)'/>
ACUERDO     
<input type="checkbox" name="s4e12c" id="s4e12c" onclick='validar(form1.s4e12c,12)'/>
AMISTAD     
<input type="checkbox" name="s4e12d" id="s4e12d" onclick='validar(form1.s4e12d,12)'/>
RESPETO     
<input type="checkbox" name="s4e12e" id="s4e12e" onclick='validar(form1.s4e12e,12)'/>
SATISFACCION <br />
                  </p>
                  <p>13. UN BOSQUE TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e13a" id="s4e13a" onclick='validar(form1.s4e13a,13)'/> 
                    ANIMALES     
                    <input type="checkbox" name="s4e13b" id="s4e13b" onclick='validar(form1.s4e13b,13)'/>
FLORES     
<input type="checkbox" name="s4e13c" id="s4e13c" onclick='validar(form1.s4e13c,13)'/>
SOMBRAS     
<input type="checkbox" name="s4e13d" id="s4e13d" onclick='validar(form1.s4e13d,13)'/>
MALEZA     
<input type="checkbox" name="s4e13e" id="s4e13e" onclick='validar(form1.s4e13e,13)'/>
ÁRBOLES <br />
                  </p>
                  <p>14. LOS OBSTÁCULOS TIENEN SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e14a" id="s4e14a" onclick='validar(form1.s4e14a,14)'/> 
                    DIFICULTAD 
                    <input type="checkbox" name="s4e14b" id="s4e14b" onclick='validar(form1.s4e14b,14)'/>
                    DESALIENTO     
                    <input type="checkbox" name="s4e14c" id="s4e14c" onclick='validar(form1.s4e14c,14)'/>
FRACASO     
<input type="checkbox" name="s4e14d" id="s4e14d" onclick='validar(form1.s4e14d,14)'/>
IMPEDIMENTO     
<input type="checkbox" name="s4e14e" id="s4e14e" onclick='validar(form1.s4e14e,14)'/>
ESTIMULO <br />
                  </p>
                  <p>15. EL ABORRECIMIENTO TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e15a" id="s4e15a" onclick='validar(form1.s4e15a,15)'/> 
                    AVERSION     
                    <input type="checkbox" name="s4e15b" id="s4e15b" onclick='validar(form1.s4e15b,15)'/>
DESAGRADO     
<input type="checkbox" name="s4e15c" id="s4e15c" onclick='validar(form1.s4e15c,15)'/>
TEMOR     
<input type="checkbox" name="s4e15d" id="s4e15d" onclick='validar(form1.s4e15d,15)'/>
IRA     
<input type="checkbox" name="s4e15e" id="s4e15e" onclick='validar(form1.s4e15e,15)'/>
TIMIDEZ <br />
                  </p>
                  <p>16. UNA REVISTA TIENE SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e16a" id="s4e16a" onclick='validar(form1.s4e16a,16)'/> 
                    ANUNCIOS   
                    <input type="checkbox" name="s4e16b" id="s4e16b" onclick='validar(form1.s4e16b,16)'/>
PAPEL     
<input type="checkbox" name="s4e16c" id="s4e16c" onclick='validar(form1.s4e16c,16)'/>
FOTOGRAFIAS     
<input type="checkbox" name="s4e16d" id="s4e16d" onclick='validar(form1.s4e16d,16)'/>
GRABADOS     
<input type="checkbox" name="s4e16d" id="s4e16d" onclick='validar(form1.s4e16e,16)'/>
IMPRESION <br />
                  </p>
                  <p>17. LA CONTROVERSIA IMPLICA SIEMPRE: </p>
                  <p>
                    <input type="checkbox" name="s4e17a" id="s4e17a" onclick='validar(form1.s4e17a,17)'/> 
                    ARGUMENTOS      
                    <input type="checkbox" name="s4e17b" id="s4e17b" onclick='validar(form1.s4e17b,17)'/>
DESACUERDOS     
<input type="checkbox" name="s4e17c" id="s4e17c" onclick='validar(form1.s4e17c,17)'/>
AVERSION     
<input type="checkbox" name="s4e17d" id="s4e17d" onclick='validar(form1.s4e17d,17)'/>
PÚBLICO     
<input type="checkbox" name="s4e17e" id="s4e17e" onclick='validar(form1.s4e17e,17)'/>
RESUMEN <br />
                    </p>
                  <p>18. UN BARCO TIENE SIEMPRE </p>
                  <p>
                    <input type="checkbox" name="s4e18a" id="s4e18a" onclick='validar(form1.s4e18a,18)'/> 
                  MAQUINARIA     
                  <input type="checkbox" name="s4e18b" id="s4e18b" onclick='validar(form1.s4e18b,18)'/>
CAÑONES     
<input type="checkbox" name="s4e18c" id="s4e18c" onclick='validar(form1.s4e18c,18)'/>
QUILLA     
<input type="checkbox" name="s4e18d" id="s4e18d" onclick='validar(form1.s4e18d,18)'/>
TIMON     
<input type="checkbox" name="s4e18e" id="s4e18e" onclick='validar(form1.s4e18e,18)'/>
VELAS </p>
                  <p>&nbsp;</p>
                  <h2>SERIE V</h2></p>
                  <p>INSTRUCCIONES: <br />
                  </p>
                  <p>ENCUENTRE LAS RESPUESTAS LO MÁS PRONTO POSIBLE. ESCRÍBALAS EN LA HOJA DE RESPUESTAS. </p>
                  <p><br />
                    PUEDE USAR UNA HOJA  HACER LAS OPERACIONES.</p>
                  <p>1. A 2 POR 5 PESOS, ¿CUÁNTOS LÁPICES PUEDEN COMPRARSE CON 50 PESOS? <br />
                  </p>
                  <p>
                    <input type="text" name="s5e1" id="s5e1" />
                  </p>
                  <p>2. ¿CUÁNTAS HORAS TARDARÁ UN AUTOMOVIL EN RECORRER 660 KILÓMETROS A LA VELOCIDAD DE 60 KILÓMETROS POR HORA? <br />
                  </p>
                  <p>
                    <input type="text" name="s5e2" id="s5e2" />
                  </p>
                  <p>3. SI UN HOMBRE GANA $200.00 DIARIOS Y GASTA $140.00, ¿CUÁNTOS DÍAS TARDARÁ EN AHORRAR $3,000.00? <br />
                  </p>
                  <p>
                    <input type="text" name="s5e3" id="s5e3" />
                  </p>
                  <p>4. SI DOS PASTELES CUESTAN $600.00, ¿CUÁNTOS PESOS CUESTA LA SEXTA PARTE DE UN PASTEL? <br />
                  </p>
                  <p>
                    <input type="text" name="s5e4" id="s5e4" />
                  </p>
                  <p>5. ¿CUÁNTAS VECES MAS ES 2x3x4x6, QUE 3x4? <br />
                  </p>
                  <p>
                    <input type="text" name="s5e5" id="s5e5" />
                  </p>
                  <p>6. ¿CUÁNTO ES EL 15 POR CIENTO DE $120.00? <br />
                  </p>
                  <p>
                    <input type="text" name="s5e6" id="s5e6" />
                  </p>
                  <p>7. ¿EL CUATRO POR CIENTO DE $1,000.00, ES IGUAL AL OCHO POR CIENTO DE QUÉ CANTIDAD? <br />
                  </p>
                  <p>
                    <input type="text" name="s5e7" id="s5e7" />
                  </p>
                  <p>8. LA CAPACIDAD DE UN REFRIGERADOR RECTANGULAR ES DE 48 METROS CUBICOS. SI TIENE SEIS METROS DE LARGO POR CUATRO DE ANCHO ¿CUÁL ES SU ALTURA? <br />
                  </p>
                  <p>
                    <input type="text" name="s5e8" id="s5e8" />
                  </p>
                  <p>9. SI 7 HOMBRES HACEN UN POZO DE 40 METROS EN 2 DÍAS ¿CUÁNTOS SE NECESITAN PARA HACERLO EN MEDIO DÍA? <br />
                  </p>
                  <p>
                    <input type="text" name="s5e9" id="s5e9" />
                  </p>
                  <p>10. ‘A’ TIENE $180.00, ’B’ TIENE 2/3 DE LO QUE TIENE ‘A’, ‘C’ TIENE 1/2 DE LO QUE TIENE ‘B’. ¿CUÁNTO TIENEN TODOS JUNTOS? <br />
                  </p>
                  <p>
                    <input type="text" name="s5e10" id="s5e10" />
                  </p>
                  <p>11. SI UN HOMBRE CORRE 100 METROS EN 10 SEGUNDOS, ¿CUÁNTOS METROS CORRERA COMO PROMEDIO EN 1/5 DE SEGUNDO? <br />
                    </p>
                  <p>
                    <input type="text" name="s5e11" id="s5e11" />
                  </p>
                  <p>12. UN HOMBRE GASTA 1/4 DE SU SUELDO EN CASA Y ALIMENTOS, Y 4/8 EN OTROS GASTOS. ¿QUÉ TANTO POR CIENTO DE SU SUELDO AHORRA? </p>
                  <p>
                    <input type="text" name="s5e12" id="s5e12" />
                  </p>
                  <p>&nbsp;</p><h2>SERIE VI</h2></p>
                  <p>INSTRUCCIONES: <br />
                  </p>
                  <p>ANOTE LA CONTESTACIÓN CORRECTA COMO LO MUESTRAN LOS EJEMPLOS. <br />
                  </p>
                  <p>EJEMPLO: <br />
                    SE HACE EL CARBON DE MADERA...................................................SI <br />
                  TIENEN TODOS LOS HOMBRES 1.70 MTS. DE ALTURA..................NO </p>
                  <p>1. LA HIGIENE ES ESENCIAL PARA LA SALUD. <br />
                  </p>
                  <p>
                    <select name="s6e1" size="1" id="s6e1">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>2. LOS TAQUIGRAFOS USAN EL MICROSCOPIO. <br />
                  </p>
                  <p>
                    <select name="s6e2" size="1" id="s6e2">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>3. LOS TIRANOS SON JUSTOS CON SUS INFERIORES. <br />
                  </p>
                  <p>
                    <select name="s6e3" size="1" id="s6e3">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>4. LAS PERSONAS DESAMPARADAS ESTÁN SUJETAS CON FRECUENCIA A LA CARIDAD. <br />
                  </p>
                  <p>
                    <select name="s6e4" size="1" id="s6e4">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>5. LAS PERSONAS VENERABLES SON POR LO COMUN RESPETADAS. <br />
                  </p>
                  <p>
                    <select name="s6e5" size="1" id="s6e5">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>6. ES EL ESCORBUTO UN MEDICAMENTO. <br />
                  </p>
                  <p>
                    <select name="s6e6" size="1" id="s6e6">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>7. ES LA AMONESTACIÓN UNA CLASE DE INSTRUMENTO MUSICAL. <br />
                  </p>
                  <p>
                    <select name="s6e7" size="1" id="s6e7">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>8. SON LOS COLORES OPACOS PREFERIDOS PARA LAS BANDAS NACIONALES. <br />
                  </p>
                  <p>
                    <select name="s6e8" size="1" id="s6e8">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>9. LAS COSAS MISTERIOSAS SON A VECES PAVOROSAS. <br />
                  </p>
                  <p>
                    <select name="s6e9" size="1" id="s6e9">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>10. PERSONAS CONSCIENTES COMETEN ALGUNA VEZ ERRORES. <br />
                  </p>
                  <p>
                    <select name="s6e10" size="1" id="s6e10">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>11. SON CARNIVOROS LOS CARNEROS. <br />
                  </p>
                  <p>
                    <select name="s6e11" size="1" id="s6e11">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>12. SE DAN ASIGNATURAS A LOS CABALLOS. <br />
                  </p>
                  <p>
                    <select name="s6e12" size="1" id="s6e12">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>13. LAS CARTAS ANÓNIMAS LLEVAN ALGUNA FIRMA DE QUIEN LAS ESCRIBE. <br />
                  </p>
                  <p>
                    <select name="s6e13" size="1" id="s6e13">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>14. SON DISCONTINUOS LOS SONIDOS INTERMITENTES. <br />
                  </p>
                  <p>
                    <select name="s6e14" size="1" id="s6e14">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>15. LAS ENFERMEDADES ESTIMULAN EL BUEN JUICIO. <br />
                  </p>
                  <p>
                    <select name="s6e15" size="1" id="s6e15">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>16. SON SIEMPRE PERVERSOS LOS HECHOS PREMEDITADOS. <br />
                  </p>
                  <p>
                    <select name="s6e16" size="1" id="s6e16">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>17. EL CONTACTO SOCIAL TIENDE A REDUCIR LA TIMIDEZ. <br />
                  </p>
                  <p>
                    <select name="s6e17" size="1" id="s6e17">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>18. SON ENFERMAS LAS PERSONAS QUE TIENEN MAL CARÁCTER. <br />
                  </p>
                  <p>
                    <select name="s6e18" size="1" id="s6e18">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>19. SE CARACTERIZA GENERALMENTE EL RENCOR POR LA PERSISTENCIA. <br />
                  </p>
                  <p>
                    <select name="s6e19" size="1" id="s6e19">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>20. METICULOSO QUIERE DECIR LO MISMO QUE CUIDADOSO. </p>
                  <p>
                    <select name="s6e20" size="1" id="s6e20">
                      <option value="--------" selected="selected">--------</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
</select>
                  </p>
                  <p>&nbsp;</p><h2>SERIE VII</h2></p>
                  <p>INSTRUCCIONES: <br />
                  </p>
                  <p>SELECCIONE LA RESPUESTA CORRECTA. <br />
                  </p>
                  <p>EJEMPLO: <br />
                  </p>
                  <p>OIDO ES A OIR COMO EL OJO ES A: </p>
                  <p>
                    <input type="radio" name="s7ejem1" id="radio105" value="radio105" /> 
                    MESA      
                    <input name="s7ejem1" type="radio" id="radio106" value="radio105" checked="checked" />
                    VER     
                    <input type="radio" name="s7ejem1" id="radio107" value="radio105" />
MANO     
<input type="radio" name="s7ejem1" id="radio108" value="radio105" />
JUGAR<br />
                    </p>
                  <p>EL SOMBRERO ES A LA CABEZA COMO ZAPATO ES A: </p>
                  <p>
                    <input type="radio" name="s7ejem2" id="radio109" value="radio105" /> 
                  BRAZO     
                  <input type="radio" name="s7ejem2" id="radio110" value="radio105" />
ABRIGO     
<input name="s7ejem2" type="radio" id="radio111" value="radio105" checked="checked" />
PIE     
<input type="radio" name="s7ejem2" id="radio112" value="radio105" />
PIERNA</p>
                  <p>&nbsp;</p>
                  <p>1. ABRIGO ES A USAR COMO PAN ES A: </p>
                  <p>
                    <input type="radio" name="s7e1" id="radio113" value="a" /> 
                    COMER     
                    <input type="radio" name="s7e1" id="radio114" value="b" />
HAMBRE     
<input type="radio" name="s7e1" id="radio115" value="c" />
AGUA     
<input type="radio" name="s7e1" id="radio116" value="d" />
COCINAR <br />
                  </p>
                  <p>2. SEMANA ES A MES COMO MES ES A: </p>
                  <p>
                    <input type="radio" name="s7e2" id="radio117" value="a" /> 
                    AÑO     
                    <input type="radio" name="s7e2" id="radio118" value="b" />
HORA     
<input type="radio" name="s7e2" id="radio119" value="c" />
MINUTO     
<input type="radio" name="s7e2" id="radio120" value="d" />
SIGLO <br />
                  </p>
                  <p>3. LEON ES A ANIMAL COMO ROSA ES A: </p>
                  <p>
                    <input type="radio" name="s7e3" id="radio121" value="a" /> 
                  OLOR     
                  <input type="radio" name="s7e3" id="radio122" value="b" />
HOJA     
<input type="radio" name="s7e3" id="radio123" value="c" />
PLANTA     
<input type="radio" name="s7e3" id="radio124" value="d" />
ESPINA </p>
                  <p>4. LIBERTAD ES A INDEPENDENCIA COMO CAUTIVERIO ES A: </p>
                  <p>
                    <input type="radio" name="s7e4" id="radio125" value="a" /> 
                    NEGRO     
                    <input type="radio" name="s7e4" id="radio126" value="b" />
ESCLAVITUD     
<input type="radio" name="s7e4" id="radio127" value="c" />
LIBRE     
<input type="radio" name="s7e4" id="radio128" value="d" />
SUFRIR <br />
                  </p>
                  <p>5. DECIR ES A DIJO COMO ESTAR ES A: </p>
                  <p>
                    <input type="radio" name="s7e5" id="radio129" value="a" /> 
                    CANTAR     
                    <input type="radio" name="s7e5" id="radio130" value="b" />
ESTUVO     
<input type="radio" name="s7e5" id="radio131" value="c" />
HABLANDO     
<input type="radio" name="s7e5" id="radio132" value="d" />
CANTÓ <br />
                  </p>
                  <p>6. LUNES ES A MARTES COMO VIERNES ES A: </p>
                  <p>
                    <input type="radio" name="s7e6" id="radio133" value="a" /> 
                    SEMANA     
                    <input type="radio" name="s7e6" id="radio134" value="b" />
JUEVES     
<input type="radio" name="s7e6" id="radio135" value="c" />
DIA     
<input type="radio" name="s7e6" id="radio136" value="d" />
SÁBADO <br />
                  </p>
                  <p>7. PLOMO ES A PESADO COMO CORCHO ES A: </p>
                  <p>
                    <input type="radio" name="s7e7" id="radio137" value="a" /> 
                    BOTELLA     
                    <input type="radio" name="s7e7" id="radio138" value="b" />
PESO     
<input type="radio" name="s7e7" id="radio139" value="c" />
LIGERO     
<input type="radio" name="s7e7" id="radio140" value="d" />
FLOTAR <br />
                  </p>
                  <p>8. ÉXITO ES A ALEGRÍA COMO FRACASO ES A: </p>
                  <p>
                    <input type="radio" name="s7e8" id="radio141" value="a" /> 
                    TRISTEZA     
                    <input type="radio" name="s7e8" id="radio142" value="b" />
SUERTE     
<input type="radio" name="s7e8" id="radio143" value="c" />
FRACASAR     
<input type="radio" name="s7e8" id="radio144" value="d" />
TRABAJO <br />
                  </p>
                  <p>9. GATO ES A TIGRE COMO PERRO ES A: </p>
                  <p>
                    <input type="radio" name="s7e9" id="radio145" value="a" /> 
                    LOBO     
                    <input type="radio" name="s7e9" id="radio146" value="b" />
LADRIDO     
<input type="radio" name="s7e9" id="radio147" value="c" />
MORDIDA     
<input type="radio" name="s7e9" id="radio148" value="d" />
AGARRAR <br />
                  </p>
                  <p>10. 4 ES A 16 COMO 5 ES A: </p>
                  <p>
                    <input type="radio" name="s7e10" id="radio149" value="a" /> 
                    7    
                    <input type="radio" name="s7e10" id="radio150" value="b" />
45    
<input type="radio" name="s7e10" id="radio151" value="c" />
35    
<input type="radio" name="s7e10" id="radio152" value="d" />
25 <br />
                  </p>
                  <p>11. LLORAR ES A REIR COMO TRISTE ES A: </p>
                  <p>
                    <input type="radio" name="s7e11" id="radio153" value="a" /> 
                    MUERTE     
                    <input type="radio" name="s7e11" id="radio154" value="b" />
ALEGRE     
<input type="radio" name="s7e11" id="radio155" value="c" />
MORTAJA     
<input type="radio" name="s7e11" id="radio156" value="d" />
DOCTOR <br />
                  </p>
                  <p>12. VENENO ES A MUERTE COMO ALIMENTO ES A: </p>
                  <p>
                    <input type="radio" name="s7e12" id="radio157" value="a" /> 
                    COMER     
                    <input type="radio" name="s7e12" id="radio158" value="b" />
PÁJARO     
<input type="radio" name="s7e12" id="radio159" value="c" />
VIDA     
<input type="radio" name="s7e12" id="radio160" value="d" />
MALO <br />
                  </p>
                  <p>13. 1 ES A 3 COMO 9 ES A: </p>
                  <p>
                    <input type="radio" name="s7e13" id="radio161" value="a" /> 
                    18     
                    <input type="radio" name="s7e13" id="radio162" value="b" />
27     
<input type="radio" name="s7e13" id="radio163" value="c" />
36     
<input type="radio" name="s7e13" id="radio164" value="d" />
45 <br />
                  </p>
                  <p>14. ALIMENTO ES A HAMBRE COMO AGUA ES A: </p>
                  <p>
                    <input type="radio" name="s7e14" id="radio165" value="a" /> 
                    BEBER     
                    <input type="radio" name="s7e14" id="radio166" value="b" />
CLARO     
<input type="radio" name="s7e14" id="radio167" value="c" />
SED     
<input type="radio" name="s7e14" id="radio168" value="d" />
PURO <br />
                  </p>
                  <p>15. AQUÍ ES ALLI COMO ESTE ES A: </p>
                  <p>
                    <input type="radio" name="s7e15" id="radio169" value="a" /> 
                    ESTOS     
                    <input type="radio" name="s7e15" id="radio170" value="b" />
AQUEL     
<input type="radio" name="s7e15" id="radio171" value="c" />
ESE     
<input type="radio" name="s7e15" id="radio172" value="d" />
ENTONCES <br />
                  </p>
                  <p>16. TIGRE ES A PELO COMO TRUCHA ES A: </p>
                  <p>
                    <input type="radio" name="s7e16" id="radio173" value="a" /> 
                    AGUA     
                    <input type="radio" name="s7e16" id="radio174" value="b" />
PEZ     
<input type="radio" name="s7e16" id="radio175" value="c" />
ESCAMA     
<input type="radio" name="s7e16" id="radio176" value="d" />
NADAR <br />
                  </p>
                  <p>17. PERVERTIDO ES A DEPRAVADO COMO INCORRUPTO ES A: </p>
                  <p>
                    <input type="radio" name="s7e17" id="radio177" value="a" /> 
                    PATRIA     
                    <input type="radio" name="s7e17" id="radio178" value="b" />
HONRADO     
<input type="radio" name="s7e17" id="radio179" value="c" />
SANCIÓN     
<input type="radio" name="s7e17" id="radio180" value="c" />
ESTUDIO <br />
                  </p>
                  <p>18. ‘B’ ES A ‘D’ COMO SEGUNDO ES A: </p>
                  <p>
                    <input type="radio" name="s7e18" id="radio181" value="a" /> 
                    TERCERO      
                    <input type="radio" name="s7e18" id="radio182" value="b" />
                    ÚLTIMO     
                    <input type="radio" name="s7e18" id="radio183" value="c" />
CUARTO     
<input type="radio" name="s7e18" id="radio184" value="d" />
POSTERIOR <br />
                  </p>
                  <p>19. ESTADO ES A GOBIERNO COMO EJÉRCITO ES A: </p>
                  <p>
                    <input type="radio" name="s7e19" id="radio185" value="a" /> 
                    MARINA     
                    <input type="radio" name="s7e19" id="radio186" value="b" />
SOLDADO     
<input type="radio" name="s7e19" id="radio187" value="c" />
GENERAL     
<input type="radio" name="s7e19" id="radio188" value="d" />
SARGENTO <br />
                    </p>
                  <p>20. SUJETO ES A PREDICADO COMO NOMBRE ES A: </p>
                  <p>
                    <input type="radio" name="s7e20" id="radio189" value="a" /> 
                  PRONOMBRE     
                  <input type="radio" name="s7e20" id="radio190" value="b" />
ADVERBIO     
<input type="radio" name="s7e20" id="radio191" value="c" />
VERBO     
<input type="radio" name="s7e20" id="radio192" value="d" />
ADJETIVO </p>
                  <p>&nbsp;</p><h2>SERIE VIII</h2></p>
                  <p>INSTRUCCIONES: <br />
                  </p>
                  <p>LAS PALABRAS DE CADA UNA DE LAS ORACIONES SIGUIENTES ESTÁN MEZCLADAS. ORDENE CADA UNA DE LAS ORACIONES. SI EL SIGNIFICADO DE LA ORACIÓN ES VERDADERO, ANOTE LA LETRA V; SI EL SIGNIFICADO ES FALSO, ANOTE LA LETRA F. <br />
                  </p>
                  <p>EJEMPLO: <br />
                  </p>
                  <p>OIR SON PARA LOS OIDOS<br />
                  </p>
                  <p>
                    <select name="s8ejem1" id="s8ejem1">
                      <option value="----">----</option>
                      <option value="V" selected="selected">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>COMER PARA POLVORA LA BUENA ES</p>
                  <p>
                    <select name="s8ejem2" id="s8ejem2">
                      <option value="----">----</option>
                      <option value="V">V</option>
                      <option value="F" selected="selected">F</option>
                    </select>
                  </p>
                  <p>&nbsp;</p>
                  <p>1. CON CRECEN LOS NIÑOS EDAD LA. <br />
                  </p>
                  <p>
                    <select name="s8e1" id="s8e1">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>2. BUENA MAR BEBER EL PARA AGUA DE ES. <br />
                  </p>
                  <p>
                    <select name="s8e2" id="s8e2">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>3. LO ES PAZ LA GUERRA OPUESTO LA A. <br />
                  </p>
                  <p>
                    <select name="s8e3" id="s8e3">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>4. CABALLOS AUTOMOVIL UN QUE CAMINAN LOS DESPACIO MAS. <br />
                  </p>
                  <p>
                    <select name="s8e4" id="s8e4">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>5. CONSEJO A VECES ES BUEN SEGUIR UN DIFICIL. <br />
                  </p>
                  <p>
                    <select name="s8e5" id="s8e5">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>6. CUATROSCIENTAS TODOS PAGINAS CONTIENEN LIBROS LOS. <br />
                  </p>
                  <p>
                    <select name="s8e6" id="s8e6">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>7. CRECEN LAS QUE FRESAS EL MÁS ROBLE. <br />
                  </p>
                  <p>
                    <select name="s8e7" id="s8e7">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>8. VERDADERA COMPRADA NO PUEDE AMISTAD SER. <br />
                  </p>
                  <p>
                    <select name="s8e8" id="s8e8">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>9. ENVIDIA LA PERJUDICIALES GULA SON Y LA. <br />
                  </p>
                  <p>
                    <select name="s8e9" id="s8e9">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>10. NUNCA ACCIONES PREMIADAS LAS DEBEN BUENAS SER. <br />
                  </p>
                  <p>
                    <select name="s8e10" id="s8e10">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>11. EXTERIORES ENGAÑAN NUNCA APARIENCIAS LAS NOS. <br />
                  </p>
                  <p>
                    <select name="s8e11" id="s8e11">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>12. NUNCA ES HOMBRE LAS QUE ACCIONES DEMUESTRAN UN LO. <br />
                  </p>
                  <p>
                    <select name="s8e12" id="s8e12">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>13. CIERTAS SIEMPRE MUERTE DE CAUSAN CLASES ENFERMEDADES. <br />
                  </p>
                  <p>
                    <select name="s8e13" id="s8e13">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>14. ODIO INDESEABLES AVERSION SENTIMIENTOS EL SON Y LA. <br />
                  </p>
                  <p>
                    <select name="s8e14" id="s8e14">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>15. FRECUENTEMENTE POR JUZGAR PODEMOS ACCIONES HOMBRES NOSOTROS SUS A LOS. <br />
                  </p>
                  <p>
                    <select name="s8e15" id="s8e15">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>16. UNA ES SABANA SARAPES TAN NUNCA LOS CALIENTE COMO. <br />
                    </p>
                  <p>
                    <select name="s8e16" id="s8e16">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>17. NUNCA QUE DESCUIDADOS LOS TROPIEZAN SON. </p>
                  <p>
                    <select name="s8e17" id="s8e17">
                      <option value="---" selected="selected">---</option>
                      <option value="V">V</option>
                      <option value="F">F</option>
                    </select>
                  </p>
                  <p>&nbsp;</p><h2>SERIE IX</h2></p>
                  <p>INSTRUCCIONES: <br />
                  </p>
                  <p>SELECCIONA LA PALABRA QUE NO CORRESPONDA CON LAS DEMÁS DEL RENGLÓN. <br />
                  </p>
                  <p>EJEMPLO: <br />
                  </p>
                  <p>
                    <input type="radio" name="s9ejem1" id="radio193" value="a" /> 
                    BALA    
                    <input type="radio" name="s9ejem1" id="radio194" value="a" />
CAÑON    
<input type="radio" name="s9ejem1" id="radio195" value="a" />
PISTOLA    
<input type="radio" name="s9ejem1" id="radio196" value="a" />
ESPADA    
<input name="s9ejem1" type="radio" id="radio197" value="a" checked="checked" />
LAPIZ<br />
                    </p>
                  <p>
                    <input type="radio" name="s9ejem2" id="radio198" value="a" /> 
                  CANADA   
                  <input name="s9ejem2" type="radio" id="radio199" value="a" checked="checked" />
SONORA   
<input type="radio" name="s9ejem2" id="radio200" value="a" />
CHINA   
<input type="radio" name="s9ejem2" id="radio201" value="a" />
INDIA   
<input type="radio" name="s9ejem2" id="radio202" value="a" />
FRANCIA</p>
                  <p>&nbsp;</p>
                  <p>1. 
                    <input type="radio" name="s9e1" id="radio203" value="a" />
SALTAR     
<input type="radio" name="s9e1" id="radio204" value="b" />
CORRER     
<input type="radio" name="s9e1" id="radio205" value="c" />
BRINCAR     
<input type="radio" name="s9e1" id="radio206" value="d" />
PARARSE     
<input type="radio" name="s9e1" id="radio207" value="e" />
CAMINAR <br />
                  </p>
                  <p>2. 
                    <input type="radio" name="s9e2" id="radio208" value="a" />
MONARQUIA 
<input type="radio" name="s9e2" id="radio209" value="b" />
COMUNISTA 
<input type="radio" name="s9e2" id="radio210" value="c" />
DEMÓCRATA 
<input type="radio" name="s9e2" id="radio211" value="d" />
ANARQUISTA 
<input type="radio" name="s9e2" id="radio212" value="e" />
CATÓLICO <br />
                  </p>
                  <p>3. 
                    <input type="radio" name="s9e3" id="radio213" value="a" />
MUERTE     
<input type="radio" name="s9e3" id="radio214" value="b" />
DUELO     
<input type="radio" name="s9e3" id="radio215" value="c" />
PASEO     
<input type="radio" name="s9e3" id="radio216" value="d" />
POBREZA     
<input type="radio" name="s9e3" id="radio217" value="e" />
TRISTEZA <br />
                  </p>
                  <p>4. 
                    <input type="radio" name="s9e4" id="radio218" value="a" />
CARPINTERO  
<input type="radio" name="s9e4" id="radio219" value="b" />
DOCTOR  
<input type="radio" name="s9e4" id="radio220" value="c" />
ABOGADO  
<input type="radio" name="s9e4" id="radio221" value="d" />
INGENIERO  
<input type="radio" name="s9e4" id="radio222" value="e" />
PROFESOR <br />
                  </p>
                  <p>5. 
                    <input type="radio" name="s9e5" id="radio223" value="a" />
CAMA     
<input type="radio" name="s9e5" id="radio224" value="b" />
SILLA    
<input type="radio" name="s9e5" id="radio225" value="c" />
PLATO     
<input type="radio" name="s9e5" id="radio226" value="d" />
SOFÁ     
<input type="radio" name="s9e5" id="radio227" value="e" />
MESA <br />
                  </p>
                  <p>6. 
                    <input type="radio" name="s9e6" id="radio228" value="a" />
FRANCISCO     
<input type="radio" name="s9e6" id="radio229" value="b" />
SANTIAGO     
<input type="radio" name="s9e6" id="radio230" value="c" />
JUAN     
<input type="radio" name="s9e6" id="radio231" value="d" />
SARA     
<input type="radio" name="s9e6" id="radio232" value="e" />
GUILLERMO <br />
                  </p>
                  <p>7. 
                    <input type="radio" name="s9e7" id="radio233" value="a" />
DURO     
<input type="radio" name="s9e7" id="radio234" value="b" />
ASPERO     
<input type="radio" name="s9e7" id="radio235" value="c" />
LISO     
<input type="radio" name="s9e7" id="radio236" value="d" />
SUAVE     
<input type="radio" name="s9e7" id="radio237" value="e" />
DULCE <br />
                </p>
                  <p>8. 
                    <input type="radio" name="s9e8" id="radio238" value="a" />
DIGESTION     
<input type="radio" name="s9e8" id="radio239" value="b" />
ODIO     
<input type="radio" name="s9e8" id="radio240" value="c" />
VISTA     
<input type="radio" name="s9e8" id="radio241" value="d" />
OLFATO     
<input type="radio" name="s9e8" id="radio242" value="e" />
TACTO <br />
                  </p>
                  <p>9. 
                    <input type="radio" name="s9e9" id="radio243" value="a" />
AUTOMOVIL    
<input type="radio" name="s9e9" id="radio244" value="b" />
BICICLETA    
<input type="radio" name="s9e9" id="radio245" value="c" />
AVION   
<input type="radio" name="s9e9" id="radio246" value="d" />
TELEGRAFO   
<input type="radio" name="s9e9" id="radio247" value="e" />
TREN <br />
                  </p>
                  <p>10. 
                    <input type="radio" name="s9e10" id="radio248" value="a" />
ABAJO     
<input type="radio" name="s9e10" id="radio249" value="b" />
ACÁ     
<input type="radio" name="s9e10" id="radio250" value="c" />
RECIENTE     
<input type="radio" name="s9e10" id="radio251" value="d" />
ARRIBA     
<input type="radio" name="s9e10" id="radio252" value="e" />
ALLÁ <br />
                  </p>
                  <p>11. 
                    <input type="radio" name="s9e11" id="radio253" value="a" />
HIDALGO    
<input type="radio" name="s9e11" id="radio254" value="b" />
MORELOS    
<input type="radio" name="s9e11" id="radio255" value="c" />
BRAVO    
<input type="radio" name="s9e11" id="radio256" value="d" />
MATAMOROS    
<input type="radio" name="s9e11" id="radio257" value="e" />
BOLIVAR <br />
                  </p>
                  <p>12. 
                    <input type="radio" name="s9e12" id="radio258" value="a" />
DANES     
<input type="radio" name="s9e12" id="radio259" value="b" />
GALGO     
<input type="radio" name="s9e12" id="radio260" value="c" />
BULLDOG     
<input type="radio" name="s9e12" id="radio261" value="d" />
PEKINÉS     
<input type="radio" name="s9e12" id="radio262" value="e" />
LONGHORN <br />
                  </p>
                  <p>13. 
                    <input type="radio" name="s9e13" id="radio263" value="a" />
TELA     
<input type="radio" name="s9e13" id="radio264" value="b" />
ALGODÓN     
<input type="radio" name="s9e13" id="radio265" value="c" />
LINO     
<input type="radio" name="s9e13" id="radio266" value="d" />
SEDA     
<input type="radio" name="s9e13" id="radio267" value="e" />
LANA <br />
                  </p>
                  <p>14. 
                    <input type="radio" name="s9e14" id="radio268" value="a" />
IRA     
<input type="radio" name="s9e14" id="radio269" value="b" />
ODIO     
<input type="radio" name="s9e14" id="radio270" value="c" />
ALEGRÍA     
<input type="radio" name="s9e14" id="radio271" value="d" />
PIEDAD     
<input type="radio" name="s9e14" id="radio272" value="e" />
RAZONAMIENTO <br />
                  </p>
                  <p>15. 
                    <input type="radio" name="s9e15" id="radio273" value="a" />
EDISON  
<input type="radio" name="s9e15" id="radio274" value="b" />
FRANKLIN    
<input type="radio" name="s9e15" id="radio275" value="c" />
MARCONI    
<input type="radio" name="s9e15" id="radio276" value="d" />
FULTON    
<input type="radio" name="s9e15" id="radio277" value="e" />
SHAKESPEARE <br />
                  </p>
                  <p>16. 
                    <input type="radio" name="s9e16" id="radio278" value="a" />
MARIPOSA 
<input type="radio" name="s9e16" id="radio279" value="b" />
HALCÓN 
<input type="radio" name="s9e16" id="radio280" value="c" />
AVESTRUZ 
<input type="radio" name="s9e16" id="radio281" value="d" />
PETIRROJO  
<input type="radio" name="s9e16" id="radio282" value="e" />
GOLONDRINA <br />
                  </p>
                  <p>17. 
                    <input type="radio" name="s9e17" id="radio283" value="a" />
DAR     
<input type="radio" name="s9e17" id="radio284" value="b" />
PRESTAR     
<input type="radio" name="s9e17" id="radio285" value="c" />
PERDER     
<input type="radio" name="s9e17" id="radio286" value="d" />
AHORRAR     
<input type="radio" name="s9e17" id="radio287" value="e" />
DERROCHAR <br />
                    </p>
                  <p>18. 
                    <input type="radio" name="s9e18" id="radio288" value="a" />
AUSTRALIA     
<input type="radio" name="s9e18" id="radio289" value="b" />
CUBA     
<input type="radio" name="s9e18" id="radio290" value="c" />
CÓRCEGA     
<input type="radio" name="s9e18" id="radio291" value="d" />
IRLANDA     
<input type="radio" name="s9e18" id="s9e18" value="e" />
ESPAÑA </p>
                  <p>&nbsp;</p><h2>SERIE X</h2></p>
                  <p>INSTRUCCIONES: <br />
                  </p>
                  <p>EN CADA RENGLON PROCURE ENCONTRAR COMO ESTAN HECHAS LAS SERIES. DESPUES ESCRIBA EN LA HOJA DE RESPUESTAS, LOS DOS NÚMEROS QUE DEBAN SEGUIR EN CADA SERIE. <br />
                  </p>
                  <p>EJEMPLO: <br />
                  </p>
                  <p>5 10 15 20 25 
                    <input name="textfield" type="text" id="textfield" value="30" size="2" readonly="readonly" />
                    <input name="textfield2" type="text" id="textfield2" value="35" size="2" readonly="readonly" />
                    <br />
                    </p>
                  <p>20 18 16 14 12 
                    <input name="textfield3" type="text" id="textfield3" value="10" size="2" readonly="readonly" />
                    <input name="textfield4" type="text" id="textfield4" value="8" size="2" readonly="readonly" />
                  </p>
                  <p>&nbsp;</p>
                  <p>1° RENGLON   8, 7, 6, 5, 4, 3, ...
                    <input name="s10e1n1" type="text" id="s10e1n1" size="2" />
                    <input name="s10e1n2" type="text" id="s10e1n2" size="2" />
                    <br />
                  </p>
                  <p>2° RENGLON   3, 8, 13, 18, 23, 28, ...
                    <input name="s10e2n1" type="text" id="s10e2n1" size="2" />
                    <input name="s10e2n2" type="text" id="s10e2n2" size="2" />
                    <br />
                  </p>
                  <p>3° RENGLON   1, 2, 4, 8, 16, 32, ... 
                    <input name="s10e3n1" type="text" id="s10e3n1" size="2" />
                    <input name="s10e3n2" type="text" id="s10e3n2" size="2" />
                    <br />
                  </p>
                  <p>4° RENGLON   8, 8, 6, 6, 4, 4, ... 
                    <input name="s10e4n1" type="text" id="s10e4n1" size="2" />
                    <input name="s10e4n2" type="text" id="s10e4n2" size="2" />
                  </p>
                  <p>5° RENGLON   11 3/4,  12,     12 1/4,  12 2/4,    12 3/4, ... 
                    <input name="s10e5n1" type="text" id="s10e5n1" size="2" />
                    <input name="s10e5n2" type="text" id="s10e5n2" size="2" />
                    <br />
                  </p>
                  <p>6° RENGLON   8, 9, 12, 13, 16, 17, ... 
                    <input name="s10e6n1" type="text" id="s10e6n1" size="2" />
                    <input name="s10e6n2" type="text" id="s10e6n2" size="2" />
                    <br />
                  </p>
                  <p>7° RENGLON   16, 8, 4, 2, 1, 1/2, ... 
                    <input name="s10e7n1" type="text" id="s10e7n1" size="2" />
                    <input name="s10e7n2" type="text" id="s10e7n2" size="2" />
                    <br />
                  </p>
                  <p>8° RENGLON   31.3,      40.3,      49.3,      58.3,      67.3,     76.3, ... 
                    <input name="s10e8n1" type="text" id="s10e8n1" size="2" />
                    <input name="s10e8n2" type="text" id="s10e8n2" size="2" />
                    <br />
                  </p>
                  <p>9° RENGLON   3, 5, 4, 6, 5, 7, ... 
                    <input name="s10e9n1" type="text" id="s10e9n1" size="2" />
                    <input name="s10e9n2" type="text" id="s10e9n2" size="2" />
                    <br />
                  </p>
                  <p>10° RENGLON  7, 11, 15, 16, 20, 24, 25, 29, ... 
                    <input name="s10e10n1" type="text" id="s10e10n1" size="2" />
                    <input name="s10e10n2" type="text" id="s10e10n2" size="2" />
                    <br />
                    </p>
                  <p>11° RENGLON  1/25,  1/5,  1,  5, ... 
                    <input name="s10e11n1" type="text" id="s10e11n1" size="2" />
                    <input name="s10e11n2" type="text" id="s10e11n2" size="2" />
                  </p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>
                    <input name="register" type="submit" id="register" value="ENVIAR" />
                  </p>
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




include("Conexion2.php");
 if(isset($_POST['register'])){
	 /////SERIE I
	if (!empty($_POST['s1e1'])&&($_POST['s1e1'])=='b'){
 	$I++;
	}
	if (!empty($_POST['s1e2'])&&($_POST['s1e2'])=='a'){
 	$I++;
	}
	if (!empty($_POST['s1e3'])&&($_POST['s1e3'])=='b'){
 	$I++;
	} 
	if (!empty($_POST['s1e4'])&&($_POST['s1e4'])=='a'){
 	$I++;
	}
	if (!empty($_POST['s1e5'])&&($_POST['s1e5'])=='b'){
 	$I++;
	}
	if (!empty($_POST['s1e6'])&&($_POST['s1e6'])=='d'){
 	$I++;
	}
	if (!empty($_POST['s1e7'])&&($_POST['s1e7'])=='c'){
 	$I++;
	}
	if (!empty($_POST['s1e8'])&&($_POST['s1e8'])=='a'){
 	$I++;
	}
	if (!empty($_POST['s1e9'])&&($_POST['s1e9'])=='c'){
 	$I++;
	}
	if (!empty($_POST['s1e10'])&&($_POST['s1e10'])=='c'){
 	$I++;
	}
	if (!empty($_POST['s1e11'])&&($_POST['s1e11'])=='c'){
 	$I++;
	}
	if (!empty($_POST['s1e12'])&&($_POST['s1e12'])=='b'){
 	$I++;
	}
	if (!empty($_POST['s1e13'])&&($_POST['s1e13'])=='b'){
 	$I++;
	}
	if (!empty($_POST['s1e14'])&&($_POST['s1e14'])=='c'){
 	$I++;
	}
	if (!empty($_POST['s1e15'])&&($_POST['s1e15'])=='a'){
 	$I++;
	}
	if (!empty($_POST['s1e16'])&&($_POST['s1e16'])=='c'){
 	$I++;
	}
	
	
	
	
	/////////////// SERIE II
	if (!empty($_POST['s2e1'])&&($_POST['s2e1'])=='c'){
 	$II++;
	}
	if (!empty($_POST['s2e2'])&&($_POST['s2e2'])=='a'){
 	$II++;
	}
	if (!empty($_POST['s2e3'])&&($_POST['s2e3'])=='b'){
 	$II++;
	}
	if (!empty($_POST['s2e4'])&&($_POST['s2e4'])=='c'){
 	$II++;
	}
	if (!empty($_POST['s2e5'])&&($_POST['s2e5'])=='c'){
 	$II++;
	}
	if (!empty($_POST['s2e6'])&&($_POST['s2e6'])=='b'){
 	$II++;
	}
	if (!empty($_POST['s2e7'])&&($_POST['s2e7'])=='c'){
 	$II++;
	}
	if (!empty($_POST['s2e8'])&&($_POST['s2e8'])=='c'){
 	$II++;
	}
	if (!empty($_POST['s2e9'])&&($_POST['s2e9'])=='b'){
 	$II++;
	}
	if (!empty($_POST['s2e10'])&&($_POST['s2e10'])=='a'){
 	$II++;
	}
	if (!empty($_POST['s2e11'])&&($_POST['s2e11'])=='b'){
 	$II++;
	}
	
	
	
	
	//////////SERIE III
	if (!empty($_REQUEST['s3e1']) && $_REQUEST['s3e1']=="o" || !empty($_REQUEST['s3e1']) && $_REQUEST['s3e1']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e2']) && $_REQUEST['s3e2']=="i" || !empty($_REQUEST['s3e2']) && $_REQUEST['s3e2']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e3']) && $_REQUEST['s3e3']=="o" || !empty($_REQUEST['s3e3']) && $_REQUEST['s3e3']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e4']) && $_REQUEST['s3e4']=="o" || !empty($_REQUEST['s3e4']) && $_REQUEST['s3e4']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e5']) && $_REQUEST['s3e5']=="o" || !empty($_REQUEST['s3e5']) && $_REQUEST['s3e5']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e6']) && $_REQUEST['s3e6']=="o" || !empty($_REQUEST['s3e6']) && $_REQUEST['s3e6']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e7']) && $_REQUEST['s3e7']=="i" || !empty($_REQUEST['s3e7']) && $_REQUEST['s3e7']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e8']) && $_REQUEST['s3e8']=="i" || !empty($_REQUEST['s3e8']) && $_REQUEST['s3e8']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e9']) && $_REQUEST['s3e9']=="o" || !empty($_REQUEST['s3e9']) && $_REQUEST['s3e9']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e10']) && $_REQUEST['s3e10']=="i" || !empty($_REQUEST['s3e10']) && $_REQUEST['s3e10']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e11']) && $_REQUEST['s3e11']=="o" || !empty($_REQUEST['s3e11']) && $_REQUEST['s3e11']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e12']) && $_REQUEST['s3e12']=="o" || !empty($_REQUEST['s3e12']) && $_REQUEST['s3e12']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e13']) && $_REQUEST['s3e13']=="o" || !empty($_REQUEST['s3e13']) && $_REQUEST['s3e13']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e14']) && $_REQUEST['s3e14']=="i" || !empty($_REQUEST['s3e14']) && $_REQUEST['s3e14']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e15']) && $_REQUEST['s3e15']=="o" || !empty($_REQUEST['s3e15']) && $_REQUEST['s3e15']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e16']) && $_REQUEST['s3e16']=="o" || !empty($_REQUEST['s3e16']) && $_REQUEST['s3e16']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e17']) && $_REQUEST['s3e17']=="i" || !empty($_REQUEST['s3e17']) && $_REQUEST['s3e17']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e18']) && $_REQUEST['s3e18']=="o" || !empty($_REQUEST['s3e18']) && $_REQUEST['s3e18']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e19']) && $_REQUEST['s3e19']=="i" || !empty($_REQUEST['s3e19']) && $_REQUEST['s3e19']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e20']) && $_REQUEST['s3e20']=="o" || !empty($_REQUEST['s3e20']) && $_REQUEST['s3e20']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e21']) && $_REQUEST['s3e21']=="o" || !empty($_REQUEST['s3e21']) && $_REQUEST['s3e21']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e22']) && $_REQUEST['s3e22']=="o" || !empty($_REQUEST['s3e22']) && $_REQUEST['s3e22']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e23']) && $_REQUEST['s3e23']=="i" || !empty($_REQUEST['s3e23']) && $_REQUEST['s3e23']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e24']) && $_REQUEST['s3e24']=="i" || !empty($_REQUEST['s3e24']) && $_REQUEST['s3e24']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e25']) && $_REQUEST['s3e25']=="i" || !empty($_REQUEST['s3e25']) && $_REQUEST['s3e25']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e26']) && $_REQUEST['s3e26']=="o" || !empty($_REQUEST['s3e26']) && $_REQUEST['s3e26']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e27']) && $_REQUEST['s3e27']=="i" || !empty($_REQUEST['s3e27']) && $_REQUEST['s3e27']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e28']) && $_REQUEST['s3e28']=="i" || !empty($_REQUEST['s3e28']) && $_REQUEST['s3e28']=="I"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e29']) && $_REQUEST['s3e29']=="o" || !empty($_REQUEST['s3e29']) && $_REQUEST['s3e29']=="O"){
 		$III++;
	}
	if (!empty($_REQUEST['s3e30']) && $_REQUEST['s3e30']=="i" || !empty($_REQUEST['s3e30']) && $_REQUEST['s3e30']=="I"){
 		$III++;
	}
	
	
	
	//////SERIE IV
	if (isset($_POST['s4e1b']) && isset($_POST['s4e1e'])){		
		$IV++;
	}
	if (isset($_POST['s4e2a']) && isset($_POST['s4e2c'])){		
		$IV++;
	}
	if (isset($_POST['s4e3c']) && isset($_POST['s4e3d'])){		
		$IV++;
	}
	if (isset($_POST['s4e4a']) && isset($_POST['s4e4c'])){		
		$IV++;
	}
	if (isset($_POST['s4e5b']) && isset($_POST['s4e5e'])){		
		$IV++;
	}
	if (isset($_POST['s4e6c']) && isset($_POST['s4e6e'])){		
		$IV++;
	}
	if (isset($_POST['s4e7b']) && isset($_POST['s4e7e'])){		
		$IV++;
	}
	if (isset($_POST['s4e8b']) && isset($_POST['s4e8e'])){		
		$IV++;
	}
	if (isset($_POST['s4e9a']) && isset($_POST['s4e9b'])){		
		$IV++;
	}
	if (isset($_POST['s4e10a']) && isset($_POST['s4e10c'])){		
		$IV++;
	}
	if (isset($_POST['s4e11b']) && isset($_POST['s4e11c'])){		
		$IV++;
	}
	if (isset($_POST['s4e12a']) && isset($_POST['s4e12b'])){		
		$IV++;
	}
	if (isset($_POST['s4e13c']) && isset($_POST['s4e13e'])){		
		$IV++;
	}
	if (isset($_POST['s4e14a']) && isset($_POST['s4e14d'])){		
		$IV++;
	}
	if (isset($_POST['s4e15a']) && isset($_POST['s4e15b'])){		
		$IV++;
	}
	if (isset($_POST['s4e16b']) && isset($_POST['s4e16e'])){		
		$IV++;
	}
	if (isset($_POST['s4e17a']) && isset($_POST['s4e17b'])){		
		$IV++;
	}
	if (isset($_POST['s4e18c']) && isset($_POST['s4e18d'])){		
		$IV++;
	}
	
	
	/////////////////// SERIE V
	if (!empty($_REQUEST['s5e1']) && $_REQUEST['s5e1']=="20"){
 		$V++;
	}
	if (!empty($_REQUEST['s5e2']) && $_REQUEST['s5e2']=="11"){
 		$V++;
	}
	if (!empty($_REQUEST['s5e3']) && $_REQUEST['s5e3']=="50"){
 		$V++;
	}
	if (!empty($_REQUEST['s5e4']) && $_REQUEST['s5e4']=="50"){
 		$V++;
	}
	if (!empty($_REQUEST['s5e5']) && $_REQUEST['s5e5']=="12"){
 		$V++;
	}
	if (!empty($_REQUEST['s5e6']) && $_REQUEST['s5e6']=="18"){
 		$V++;
	}
	if (!empty($_REQUEST['s5e7']) && $_REQUEST['s5e7']=="500"){
 		$V++;
	}
	if (!empty($_REQUEST['s5e8']) && $_REQUEST['s5e8']=="2"){
 		$V++;
	}
	if (!empty($_REQUEST['s5e9']) && $_REQUEST['s5e9']=="28"){
 		$V++;
	}
	if (!empty($_REQUEST['s5e10']) && $_REQUEST['s5e10']=="360"){
 		$V++;
	}
	if (!empty($_REQUEST['s5e11']) && $_REQUEST['s5e11']=="5"){
 		$V++;
	}
	if (!empty($_REQUEST['s5e12']) && $_REQUEST['s5e12']=="25"){
 		$V++;
	}
	
	
	
	/////////////////SERIE VI
	if ($_REQUEST['s6e1']=="Si"){
 		$VI++;
	}
	if ($_REQUEST['s6e2']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e3']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e4']=="Si"){
 		$VI++;
	}
	if ($_REQUEST['s6e5']=="Si"){
 		$VI++;
	}
	if ($_REQUEST['s6e6']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e7']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e8']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e9']=="Si"){
 		$VI++;
	}
	if ($_REQUEST['s6e10']=="Si"){
 		$VI++;
	}
	if ($_REQUEST['s6e11']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e12']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e13']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e14']=="Si"){
 		$VI++;
	}
	if ($_REQUEST['s6e15']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e16']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e17']=="Si"){
 		$VI++;
	}
	if ($_REQUEST['s6e18']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e19']=="No"){
 		$VI++;
	}
	if ($_REQUEST['s6e20']=="Si"){
 		$VI++;
	}
	
	
	
	/////////////////////////// SERIE VII
	if (!empty($_POST['s7e1'])&&($_POST['s7e1'])=='a'){
 	$VII++;
	}
	if (!empty($_POST['s7e2'])&&($_POST['s7e2'])=='a'){
 	$VII++;
	}
	if (!empty($_POST['s7e3'])&&($_POST['s7e3'])=='c'){
 	$VII++;
	}
	if (!empty($_POST['s7e4'])&&($_POST['s7e4'])=='b'){
 	$VII++;
	}
	if (!empty($_POST['s7e5'])&&($_POST['s7e5'])=='b'){
 	$VII++;
	}
	if (!empty($_POST['s7e6'])&&($_POST['s7e6'])=='d'){
 	$VII++;
	}
	if (!empty($_POST['s7e7'])&&($_POST['s7e7'])=='c'){
 	$VII++;
	}
	if (!empty($_POST['s7e8'])&&($_POST['s7e8'])=='a'){
 	$VII++;
	}
	if (!empty($_POST['s7e9'])&&($_POST['s7e9'])=='a'){
 	$VII++;
	}
	if (!empty($_POST['s7e10'])&&($_POST['s7e10'])=='d'){
 	$VII++;
	}
	if (!empty($_POST['s7e11'])&&($_POST['s7e11'])=='b'){
 	$VII++;
	}
	if (!empty($_POST['s7e12'])&&($_POST['s7e12'])=='c'){
 	$VII++;
	}
	if (!empty($_POST['s7e13'])&&($_POST['s7e13'])=='b'){
 	$VII++;
	}
	if (!empty($_POST['s7e14'])&&($_POST['s7e14'])=='c'){
 	$VII++;
	}
	if (!empty($_POST['s7e15'])&&($_POST['s7e15'])=='c'){
 	$VII++;
	}
	if (!empty($_POST['s7e16'])&&($_POST['s7e16'])=='c'){
 	$VII++;
	}
	if (!empty($_POST['s7e17'])&&($_POST['s7e17'])=='b'){
 	$VII++;
	}
	if (!empty($_POST['s7e18'])&&($_POST['s7e18'])=='c'){
 	$VII++;
	}
	if (!empty($_POST['s7e19'])&&($_POST['s7e19'])=='c'){
 	$VII++;
	}
	if (!empty($_POST['s7e20'])&&($_POST['s7e20'])=='c'){
 	$VII++;
	}
	
	
	
	//////////SERIE VIII
	if ($_REQUEST['s8e1']=="V"){
 		$VIII++;
	}
	if ($_REQUEST['s8e2']=="F"){
 		$VIII++;
	}
	if ($_REQUEST['s8e3']=="V"){
 		$VIII++;
	}
	if ($_REQUEST['s8e4']=="V"){
 		$VIII++;
	}
	if ($_REQUEST['s8e5']=="V"){
 		$VIII++;
	}
	if ($_REQUEST['s8e6']=="F"){
 		$VIII++;
	}
	if ($_REQUEST['s8e7']=="F"){
 		$VIII++;
	}
	if ($_REQUEST['s8e8']=="V"){
 		$VIII++;
	}
	if ($_REQUEST['s8e9']=="V"){
 		$VIII++;
	}
	if ($_REQUEST['s8e10']=="F"){
 		$VIII++;
	}
	if ($_REQUEST['s8e11']=="F"){
 		$VIII++;
	}
	if ($_REQUEST['s8e12']=="F"){
 		$VIII++;
	}
	if ($_REQUEST['s8e13']=="V"){
 		$VIII++;
	}
	if ($_REQUEST['s8e14']=="V"){
 		$VIII++;
	}
	if ($_REQUEST['s8e15']=="V"){
 		$VIII++;
	}
	if ($_REQUEST['s8e16']=="V"){
 		$VIII++;
	}
	if ($_REQUEST['s8e17']=="F"){
 		$VIII++;
	}
	
	
	///////////////SERIE IX
	if (!empty($_POST['s9e1'])&&($_POST['s9e1'])=='d'){
 	$IX++;
	}
	if (!empty($_POST['s9e2'])&&($_POST['s9e2'])=='e'){
 	$IX++;
	}
	if (!empty($_POST['s9e3'])&&($_POST['s9e3'])=='c'){
 	$IX++;
	}
	if (!empty($_POST['s9e4'])&&($_POST['s9e4'])=='a'){
 	$IX++;
	}
	if (!empty($_POST['s9e5'])&&($_POST['s9e5'])=='c'){
 	$IX++;
	}
	if (!empty($_POST['s9e6'])&&($_POST['s9e6'])=='d'){
 	$IX++;
	}
	if (!empty($_POST['s9e7'])&&($_POST['s9e7'])=='e'){
 	$IX++;
	}
	if (!empty($_POST['s9e8'])&&($_POST['s9e8'])=='a'){
 	$IX++;
	}
	if (!empty($_POST['s9e9'])&&($_POST['s9e9'])=='d'){
 	$IX++;
	}
	if (!empty($_POST['s9e10'])&&($_POST['s9e10'])=='c'){
 	$IX++;
	}
	if (!empty($_POST['s9e11'])&&($_POST['s9e11'])=='e'){
 	$IX++;
	}
	if (!empty($_POST['s9e12'])&&($_POST['s9e12'])=='e'){
 	$IX++;
	}
	if (!empty($_POST['s9e13'])&&($_POST['s9e13'])=='a'){
 	$IX++;
	}
	if (!empty($_POST['s9e14'])&&($_POST['s9e14'])=='e'){
 	$IX++;
	}
	if (!empty($_POST['s9e15'])&&($_POST['s9e15'])=='e'){
 	$IX++;
	}
	if (!empty($_POST['s9e16'])&&($_POST['s9e16'])=='a'){
 	$IX++;
	}
	if (!empty($_POST['s9e17'])&&($_POST['s9e17'])=='d'){
 	$IX++;
	}
	if (!empty($_POST['s9e18'])&&($_POST['s9e18'])=='e'){
 	$IX++;
	}
	
	
	////////////SERIE X
	if ($_REQUEST['s10e1n1']=="2" && $_REQUEST['s10e1n2']=="1"){
 		$X++;
	}
	if ($_REQUEST['s10e2n1']=="33" && $_REQUEST['s10e2n2']=="38"){
 		$X++;
	}
	if ($_REQUEST['s10e3n1']=="64" && $_REQUEST['s10e3n2']=="128"){
 		$X++;
	}
	if ($_REQUEST['s10e4n1']=="2" && $_REQUEST['s10e4n2']=="2"){
 		$X++;
	}
	if ($_REQUEST['s10e5n1']=="13" && $_REQUEST['s10e5n2']=="13 1/4"){
 		$X++;
	}
	if ($_REQUEST['s10e6n1']=="20" && $_REQUEST['s10e6n2']=="21"){
 		$X++;
	}
	if ($_REQUEST['s10e7n1']=="1/4" && $_REQUEST['s10e7n2']=="1/8"){
 		$X++;
	}
	if ($_REQUEST['s10e8n1']=="85.3" && $_REQUEST['s10e8n2']=="94.3"){
 		$X++;
	}
	if ($_REQUEST['s10e9n1']=="6" && $_REQUEST['s10e9n2']=="8"){
 		$X++;
	}
	if ($_REQUEST['s10e10n1']=="33" && $_REQUEST['s10e10n2']=="34"){
 		$X++;
	}
	if ($_REQUEST['s10e11n1']=="25" && $_REQUEST['s10e11n2']=="125"){
 		$X++;
	}
	
	
	
	
	
	// I SE QUEDA IGUAL
	// II SE MULTIPLICA POR 2
	// III MENOS 15 POR 2 MENOS A 15 IGUAL A 0
	// IV ASI COMO ESTA AMBOS DAN UNO SOLO
	// V POR DOS CADA UNO
	// VI ASIERTOS MENOS ERRORES MENOR A 10 IGUAL A 0
	// VII TAL Y COMO ESTA
	// VIII ASIERTOS MENOS ERRORES MENOR A LA MITAD IGUAL A 0 
	// IX TAL Y COMO ESTA
	// X AMBOS COMO UNO POR DOS
	
	$tempII=$II*2;
	$II=$tempII;
	
	$tempIII=$III-15;
	if($tempIII<=0){
		$III=0;
	}else{
		$III=$tempIII*2;	
	}
	
	$tempV=$V*2;
	$V=$tempV;
	
	$tempVI=20-$VI;
	if($tempVI>=10){
		$VI=0;
	}else{
		$VI=$VI-$tempVI;	
	}
	
	$tempVIII=17-$VIII;
	if($tempVIII>=8){
		$VIII=0;
	}else{
		$VIII=$VIII-$tempVIII;
	}
	
	$tempX=$X*2;
	$X=$tempX;
	
	
	include("Conexion2.php");	
	 mysqli_query($cnx,"UPDATE candidatos SET TermanI=$I, TermanII=$II, TermanIII=$III, TermanIV=$IV, TermanV=$V, TermanVI=$VI, TermanVII=$VII, TermanVIII=$VIII, TermanIX=$IX, TermanX=$X, StatusTerman='No' WHERE User= '$nombreUser'");
	/*
	?>
    <script>
	alert("<?php echo $X;?>");
    </script>
    <?php
		*/
		
	
	
	
	header("Location: /IndexUsuario.php");
 			}

////////////////////////////////////////////////////////////////





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
          <P><a href="info@sitename.com">Volkswagen Guadiana<br />
            Blvd. Francisco Villa y Estaño, Ciudad Industrial, Durango, Durango<br />
          </a> </P>
          <h3>Tel (618)814-22-55</h3>
          <p><a href="info@sitename.com">jalcaraz@vwdgo.com</a></p>
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
