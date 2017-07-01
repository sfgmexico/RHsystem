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
<title>Volkswagen Guadiana - Resultados de examenes</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
.page.padding-bottom .content_wrap .left-panel .generic-content .title form table {
	color: #FFF;
}
</style>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
        
        
        
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
          <p><a href="IndexAdministrador.php" target="_parent">REGRESAR</a> </p> 						
          <p>ESTAS VIENDO LOS RESULTADOS DE:
           
		   
              <input name="nombre" type="text" class="libg"  style="text-align:center"  value="<?php echo $nombreperfil?>" size="15" readonly />
          </p>
          
          <p>GRADO DE ESTUDIOS:
            <input name="escolaridad" type="text" class="libg" id="escolaridad" / value="<?php echo $newres["Escolaridad"];?>" size="10" readonly="readonly" />
          </p>
          <p>
  
            
            RESULTADOS:</p>
          <div >
          
           
            <?php
		  //////////////BARSIT
		  include("Conexion2.php");
			$query=mysqli_query($cnx,"select PuntosBarsit from candidatos where Nombre='$nombreperfil' and StatusBarsit='No'");
						
			if(mysqli_num_rows($query)<=0) { 
			    //die(mysql_error()); // TODO: better error handling
				}else{
					if($IPV=mysqli_fetch_array($query)){?>
			<p><h2>BARSIT:</h2></p>			
			<p class="icons" align="center" style="font-style: italic" ">
              <?php
		
			   
//////////
	  if($newres["PuntosBarsit"]<=15 && $newres["Escolaridad"]=="Primaria"){
		  
		  ?>
              MUY INFERIOR</p>
              <?php  
	  }
	   if($newres["PuntosBarsit"]>=16&&$newres["PuntosBarsit"]<=23 && $newres["Escolaridad"]=="Primaria"){
		  
		  ?>
            
            <p style="font-style: italic">INFERIOR</p>
              <?php  
	  }
	  
	  
      if($newres["PuntosBarsit"]>=24&&$newres["PuntosBarsit"]<=35 && $newres["Escolaridad"]=="Primaria"){
		  
		  ?>
            
            <p align="center" style="font-style: italic">MEDIANO</p>
              <?php  
	  }
	  
	  
       if($newres["PuntosBarsit"]>=36&&$newres["PuntosBarsit"]<=44 && $newres["Escolaridad"]=="Primaria"){
		  
		  ?>
            
            <p style="font-style: italic">SUPERIOR</p>
              <?php  
	  }
	  
	  
      if($newres["PuntosBarsit"]>44&& $newres["Escolaridad"]=="Primaria"){
		  
		  ?>
            
            <p style="font-style: italic">EXCELENTE</p>
              <?php  
	  }
	  
	    
	  
	  
	  if($newres["PuntosBarsit"]<=27 && $newres["Escolaridad"]!=="Primaria"){
		  
		  ?>
            </p>
            <p style="font-style: italic">MUY INFERIOR</p>
              <?php  
	  }
	   if($newres["PuntosBarsit"]>=28&&$newres["PuntosBarsit"]<=33 && $newres["Escolaridad"]!=="Primaria"){
		  
		  ?>
            
            <p style="font-style: italic">INFERIOR</p>
              <?php  
	  }
	  
	  
      if($newres["PuntosBarsit"]>=34&&$newres["PuntosBarsit"]<=43 && $newres["Escolaridad"]!=="Primaria"){
		  
		  ?>
            
            <p style="font-style: italic">MEDIANO</p>
              <?php  
	  }
	  
	  
       if($newres["PuntosBarsit"]>=44&&$newres["PuntosBarsit"]<=50 && $newres["Escolaridad"]!=="Primaria"){
		  
		  ?>
            
            <p align="center" style="font-style: italic">SUPERIOR</p>
              <?php  
	  }
	  
	  
      if($newres["PuntosBarsit"]>50&& $newres["Escolaridad"]!=="Primaria"){
		  
		  ?>
            
            <p style="font-style: italic">EXCELENTE</p>
              <?php  
	  }
	  
	 
			
						
						}
		  
				}
				////////////// FIN BARSIT
				            ////////////INICIA OBSERVACIÓN DE RESULTADOS CLEAVER
			include("Conexion2.php");
			$query=mysqli_query($cnx,"select CleaverDM,CleaverDL,CleaverDML,CleaverIM,CleaverIL,CleaverIML,CleaverSM,CleaverSL,CleaverSML,CleaverCM,CleaverCL,CleaverCML from candidatos where Nombre='$nombreperfil' and StatusCleaver='No'");
						
			if(mysqli_num_rows($query)<=0) { 
			    	//die(mysql_error()); // TODO: better error handling
					//echo "<p>NO SE HA REALIZADO EL EXAMEN O NO ESTA ACTIVO PARA ESTE USUARIO</p>";
				}else{
				
			
			if($Cleaver=mysqli_fetch_array($query)){
            ?>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
		$(function () {
    $('#container').highcharts({
        title: {
            text: 'RESULTADOS',
            x: -20 //center
        },
        subtitle: {
            text: 'RH',
            x: -20
        },
        xAxis: {
            categories: ['D', 'I', 'S', 'C']
        },
        yAxis: {
            title: {
                text: 'PORCENTAJE (%)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '%'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'NORMAL',
            data: [<?php echo $Cleaver['CleaverDML'];?>, <?php echo $Cleaver['CleaverIML'];?>, <?php echo $Cleaver['CleaverSML'];?>, <?php echo $Cleaver['CleaverCML'];?>]
        },{
            name: 'MOTIVACION',
            data: [<?php echo $Cleaver['CleaverDM'];?>, <?php echo $Cleaver['CleaverIM'];?>, <?php echo $Cleaver['CleaverSM'];?>, <?php echo $Cleaver['CleaverCM'];?>]
        },{
            name: 'PRESION',
            data: [<?php echo $Cleaver['CleaverDL'];?>, <?php echo $Cleaver['CleaverIL'];?>, <?php echo $Cleaver['CleaverSL'];?>, <?php echo $Cleaver['CleaverCL'];?>]
        }]
    });
});
		</script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>       



            <p style="font-style: italic"><h2>CLEAVER:</h2></p>
            <p style="font-style: italic">RESULTADOS:</p>
            <div id="container">Colocar aquí el contenido para  id "contenedor"</div>
            
            <p>&nbsp;</p>
            <p>INTERPRETACION:</p>
            <table width="100%" border="1">
              <tr>
                <td colspan="3" align="center">&nbsp;
                <?php
                if($Cleaver['CleaverDML']>=50){
					echo "EMPUJE (D+) - Le apasionan los retos. Puede ser considerado temerario por los demás. Siempre listo a la competencia. Cuando algo esta en juego, sale lo mejor de él. Tiene respeto por aquellos que ganan contra todas las expectativas. ";
				}else{
				echo "EMPUJE (D-) - Son personas apacibles que buscan la paz y la armonía. En donde existen problemas, ellos preferirán que sean otros los que inicien la acción, quizá hasta sacrificando su propio interés para adaptarse a las soluciones impuestas. La humildad es una virtud que valoran. ";	
				}
                
                
                ?>
                </td>
              </tr>
              </table>
            <p>&nbsp;</p>
            <table width="100%" border="1">
              <tr>
                <td colspan="3" align="center">&nbsp;
                  <?php
                if($Cleaver['CleaverIML']>=50){
					echo "INFLUENCIA (I+) - Abierto, persuasivo y sociable. Generalmente optimista, puede ver algo bueno en cualquier situación. Interesado principalmente en la gente, sus problemas y actividades. Dispuesto a ayudar a otros a promover sus proyectos, así como los suyos propios.  ";
				}else{
				echo "INFLUENCIA (I-) - Lógicas y objetivas en todo lo que hacen, con frecuencia se acusa a estas personas de no gustar de la gente. El problema no es de sentir atracción o afecto, sino lo que hacen al respecto. Socialmente pasivos, frecuentemente asumen el rol de observador en situaciones sociales. ";	
				}
                
                
                ?></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <table width="100%" border="1">
              <tr>
                <td colspan="3" align="center">&nbsp;
                  <?php
                if($Cleaver['CleaverSML']>=50){
					echo "CONSTANCIA (S+) - Generalmente amable, tranquilo y llevadero. Es poco demostrativo y controlado. Ya que no es de naturaleza explosiva de pronta reacción, puede ocultar sus sentimientos y ser rencoroso. Gusta de establecer relaciones amistosas cercanas con un grupo relativamente pequeño. ";
				}else{
				echo "CONSTANCIA (S-): Flexibles, variables y activos, estas personas ponen las cosas en movimiento. La variedad es el condimento de la vida. Además, es difícil pegarle a un blanco en constante movimiento. Estas personas se sienten cómodas con un alto ritmo de cambios de actividades. ";	
				}
                
                
                ?></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <table width="100%" border="1">
              <tr>
                <td colspan="3" align="center">&nbsp;
                  <?php
                if($Cleaver['CleaverCML']>=50){
					echo "CUMPLIMIENTO (C+) - Es generalmente pacífico y se adapta a las situaciones con el fin de evitar antagonismos. Siendo sensible, busca apreciación y es fácilmente herido por otros. Es humilde leal y dócil, tratando de hacer siempre las cosas lo mejor posible.  ";
				}else{
				echo "CUMPLIMIENTO (C-) - Independientes, desinhibidos y aventureros; estos espíritus libres disfrutan de la vida. Cualquier cosa nueva y diferente les emociona. Debido a que prefieren campos nuevos y mares desconocidos, con frecuencia estas personas preocupan a las más conservadores. ";	
				}
                
                
                ?></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>CARACTERISTICAS:</p>
            <p>
            <?php
            if($Cleaver['CleaverCML']>=50 && $Cleaver['CleaverDML']>=50){
				?>
                
              <table width="100%" border="1">
  <tr>
    <td>ADAPTABILIDAD - Tiende a actuar de una forma cuidadosa y conservadora en general está dispuesto a modificar o transigir en su posición con el objeto de lograr sus objetivos. Siendo un estricto observador de las políticas, puede aparecer arbitrario y poco flexible al seguir una regla o fórmula establecida. 
Prefiere una atmósfera libre de antagonismos y desea la armonía.&nbsp;</td>
  </tr>
</table>

                
                
                <p>&nbsp;</p>
                <table width="100%" border="1">
  <tr>
    <td>INDIVIDUALIDAD - Actúa de una manera directa y positiva ante la oposición.
Es una persona fuerte que toma posición y lucha por mantenerla. 
Está dispuesto a tomar riesgos y puede aún ignorar niveles jerárquicos.&nbsp;</td>
  </tr>
</table>
                <p>
                
                
                  <?php
				
			}//// IF COMPARADOR
			
			if($Cleaver['CleaverDML']==$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']>=50){?>
				
                <table width="100%" border="1">
  <tr>
    <td>AMBIVALENCIA ALTA - Ya que este individuo busca una igualdad entre la fuerza para obtener resultados y la calidad de los mismos, es visto con frecuencia como un  perfeccionista. 
No busca una respuesta a los problemas, sino que desea alcanzar la mejor respuesta. Podría, sin embargo, indicar que el individuo tiene dificultad en tomar la mayoría de sus decisiones. Los signos externos de esta situación son la tensión y vacilación.
&nbsp;</td>
  </tr>
</table>
				<?php
			}///if comparador
            
            if($Cleaver['CleaverDML']==$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<50){?>
				
                <table width="100%" border="1">
  <tr>
    <td>AMBIVALENCIA BAJA - Esta persona tiende a resistirse a las peticiones de adaptabilidad hechas por los demás. Prefiere operar solo, pero no luchará por su independencia. 
Se mostrará, en repetidas ocasiones, reacio a seguir sugerencias de otros, aunque pueda no tener ninguna otra idea que proponer.&nbsp;</td>
  </tr>
</table>
				<?php
			}///if comparador
            
			 if($Cleaver['CleaverCML']>=50 && $Cleaver['CleaverIML']>=50){?>
				
              <table width="100%" border="1">
  <tr>
    <td>PERFECCIONISMO - Esta persona tiende a ser un seguidor apegado del orden y los sistemas. 
Toma decisiones basadas en hechos conocidos o procedimientos establecidos. 
En todas sus actividades, trata meticulosamente de apegarse a los estándares establecidos, ya sea por sí mismo o por los demás.&nbsp;</td>
  </tr>
</table>
				<p>&nbsp;</p>
				<table width="100%" border="1">
  <tr>
    <td>CONFIANZA EN SÍ MISMO - Despliega confianza en sí mismo en la mayoría de sus tratos con otras personas. Aunque siempre lucha por ganarse a la gente, se muestra reacio a ceder su propio punto de vista. Esta persona siente que no importa qué situación se presente, él será capaz de actuar de forma exitosa.&nbsp;</td>
  </tr>
</table>
				<?php
			}///if comparador
            
			 if($Cleaver['CleaverCML']>=50 && $Cleaver['CleaverSML']>=50){?>
				
              <table width="100%" border="1">
  <tr>
    <td>SENSIBILIDAD - Esta persona estará muy consciente en evitar riesgos o problemas. 
Tiende a buscar significados ocultos. La tensión puede ser evidente particularmente si está bajo presión por obtener resultados. En general, se sentirá intranquilo mientras que no tenga una confirmación absoluta de que su decisión ha sido la correcta.&nbsp;</td>
  </tr>
</table>
				<p>&nbsp;</p>
				<table width="100%" border="1">
  <tr>
    <td>PERSISTENCIA - Tiende a ser un individuo persistente y perseverante que una vez que  decide algo, no fácilmente se desvía de su objetivo. Tenderá a tomar un ritmo de trabajo y a apegarse a él. Puede ser rígido e independiente cuando se aplica la fuerza para hacerle cambiar.&nbsp;</td>
  </tr>
</table>
				<?php
			}///if comparador
			
			if($Cleaver['CleaverDML']>=50 && $Cleaver['CleaverIML']>=50){?>
				
              <table width="100%" border="1">
  <tr>
    <td>CREATIVIDAD - Tiende a ser lógico, crítico e incisivo en sus enfoques hacia la obtención de metas. Se sentirá retado por problemas que requieren esfuerzos de análisis y originalidad. Será llano y crítico con la gente.&nbsp;</td>
  </tr>
</table>
				<p>&nbsp;</p>
				<table width="100%" border="1">
  <tr>
    <td>BUENA VOLUNTAD - Tiende a comportarse en una forma equilibrada y cordial, desplegando agresividad social en situaciones que percibe como favorables y sin amenazas.
 Tiende a mostrarse simpático y lucha por establecer relaciones armoniosas con la gente desde el primer contacto con ellos.&nbsp;</td>
  </tr>
</table>
				<?php
			}///if comparador
			
			if($Cleaver['CleaverDML']>=50 && $Cleaver['CleaverSML']>=50){?>
				
              <table width="100%" border="1">
  <tr>
    <td>EMPUJE - Responde rápidamente a los retos, demuestra movilidad y flexibilidad en sus enfoques, tiende a ser iniciador versátil respondiendo rápidamente a la competencia.&nbsp;</td>
  </tr>
</table>
				<p>&nbsp;</p>
				<table width="100%" border="1">
  <tr>
    <td>PACIENCIA - Tiende a ser constante y consistente prefiriendo tratar un proyecto o tarea a la vez. En general, esta persona dirigirá sus habilidades y experiencias hacia áreas que requieren profundización y especialización. 
Ecuánime bajo las presiones, busca estabilizar su ambiente y reacciona negativamente a los cambios en el mismo.
&nbsp;</td>
  </tr>
</table>
				<?php
			}///if comparador
			
			if($Cleaver['CleaverIML']>=50 && $Cleaver['CleaverSML']>=50){?>
				
              <table width="100%" border="1">
  <tr>
    <td>HABILIDAD DE CONTACTOS - Tiende a buscar a la gente con entusiasmo y chispa.

 Es una persona abierta que despliega un optimismo contagioso y trata  de ganarse a la gente a través de la persuasión de un acercamiento emotivo.
&nbsp;</td>
  </tr>
</table>
				<p>&nbsp;</p>
			  <table width="100%" border="1">
  <tr>
    <td>REFLEXIÓN (Concentración) - Tiende a ser un individuo controlado y paciente. Se mueve con moderación y premeditación en la mayoría de las situaciones con cuidado y concentración.&nbsp;</td>
  </tr>
</table>
				<?php
			}///if comparador
			?>
            
                  </p>
                </p>
              <p>ESTILO DE PERSONA:</p>
              <p>&nbsp;
              <?php 
              if(0<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=8){?>
				
           	  <table width="100%" border="1">
  				<tr>
			    <td>Complaciente y humilde.
					&nbsp;</td>
			    </tr>
			  </table>
		<?php		  
			  }
			  
			  if(9<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=17){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Pacífico y dócil.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(18<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=25){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Complaciente, facilitador y sencillo. 
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			   if(26<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=34){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Conservador, precavido y ecuánime. 
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(35<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=42){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Apacible, amable y servicial. 
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(43<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=51){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Moderado, modesto y cooperativo. 
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(52<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=58){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Directo, responsable y propositivo. 
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(59<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=67){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Fuerte, determinante y positivo.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(68<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=75){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Original, orientado a metas y decisivo.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(76<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=84){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Intrépido, resuelto y competitivo.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(85<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=92){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Arriesgado, agresivo y disputador.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(93<=$Cleaver['CleaverDML'] && $Cleaver['CleaverDML']<=100){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Enérgico, demandante e insuperable.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  //////////////////////////////////// termina estilo de persona para D
			  /////////////////////////////////// inicia estilo de persona en I
			  if(0<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=8){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td>Meditabundo
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(9<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=17){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Introspectivo y apartado.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(18<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=25){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Crítico y escéptico. 
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			   if(26<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=34){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Despegado, reflexivo y analítico.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(35<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=42){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Racional, lógico y discreto. 
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(43<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=51){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Veraz, objetivo y sereno. 
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(52<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=58){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Sociable, amable. 
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(59<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=67){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Estable, cálido y amistoso.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(68<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=75){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Animoso, extrovertido y confiable.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(76<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=84){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Persuasivo, convincente y alentador.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(85<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=92){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Magnético, optimista y demostrativo.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(93<=$Cleaver['CleaverIML'] && $Cleaver['CleaverIML']<=100){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Efusivo, carismático e inspirador.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  ////////////////////////////////////////////////////////////////////
			  ////////////////////////INICIA ESTILO DE PERSONA EN S
			  if(0<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=8){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Impetuoso, apasionado e impulsivo.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(9<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=17){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Intenso y presionado.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(18<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=25){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Inquieto, versátil y apresurado.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			   if(26<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=34){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Flexible, vigoroso e impaciente.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(35<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=42){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Activo, comprometido y hacendoso.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(43<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=51){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Vehemente, rápido y dinámico.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(52<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=58){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Calmado, tranquilo y mesurado.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(59<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=67){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Constante estable y sereno.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(68<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=75){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Consciente, paciente y confiable.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(76<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=84){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Habitual, ecuánime y predecible.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(85<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=92){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Metódico y cauto.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(93<=$Cleaver['CleaverSML'] && $Cleaver['CleaverSML']<=100){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Afanoso, estático y sistemático.
					&nbsp;</td>
			    </tr>
				</table>

		<?php		  
			  }
			  ///////////////////////////////////////////////////////////////////////
			  /////////////////////////// INICIA ESTILO DE PERSONA EN C
			  if(0<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=8){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Autónomo, desinhibido y revolucionario.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(9<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=17){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Radical e intrépido.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(18<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=25){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Autónomo e individualista.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			   if(26<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=34){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Independiente, libre e ingenioso.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(35<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=42){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Confiado en sí mismo, confiable y audaz.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(43<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=51){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Determinado y original.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(52<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=58){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Conservador, diplomático y convencional.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(59<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=67){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Metódico, ordenado y pulcro.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(68<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=75){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Precavido y complaciente.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(76<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=84){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Prudente, condescendiente.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(85<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=92){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Meticuloso, perfeccionista y exigente.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
			  if(93<=$Cleaver['CleaverCML'] && $Cleaver['CleaverCML']<=100){?>
				
              	<table width="100%" border="1">
  				<tr>
			    <td> Concienzudo, cuidadoso y cauteloso.
					&nbsp;</td>
			    </tr>
				</table>
		<?php		  
			  }
			  
              
			 
			}
				}
		  ////////////////////////FINALIZA OBSERVACIÓN DE CLEAVER		

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////INICIA RESULTADOS DOMINO
				
				include("Conexion2.php");
			$query=mysqli_query($cnx,"select PuntosDomino, CapDomino from candidatos where Nombre='$nombreperfil' and StatusDomino='No'");
						
			if(mysqli_num_rows($query)<=0) { 
			   // die(mysql_error()); // TODO: better error handling
				}else{
					if($Domino=mysqli_fetch_array($query)){
					?>
              </p>
              
            <p style="font-style: italic">&nbsp;</p>
            <p style="font-style: italic"><h2>RESULTADO PRUEBA DOMINO D48:</h2></p>
            <p style="font-style: italic">El(La) Candidato(a) obtuvo un resultado de: <strong><?php echo $Domino['PuntosDomino'];?> </strong>en la Prueba de Domino D48 por lo que la persona presenta, en base a sus capacidades lógicas,  una Capacidad de Inteligencia que se encuentra en un rango: <strong><?php echo $Domino['CapDomino'];?> </strong>comparado con el promedio de la población.</p>
            
            
          
		  <?php
					}
				}
				 
		
///////////////// FINALIZA RESULTADOS DOMINO				
				
			
				
//////////////////////INICIA RESULTADOS IPV

		  include("Conexion2.php");
			$query=mysqli_query($cnx,"select StatusCleaver,IPVI,IPVII,IPVIII,IPVIV,IPVV,IPVVI,IPVVII,IPVVIII,IPVIX,IPVR,IPVA,IPVDGV from candidatos where Nombre='$nombreperfil' and StatusIPV='No'");
						
			if(mysqli_num_rows($query)<=0) { 
			    //die(mysql_error()); // TODO: better error handling
				}else{
					if($IPV=mysqli_fetch_array($query)){
					?>
                   
		<script type="text/javascript">
		$(function () {
    $('#container2').highcharts({
        title: {
            text: 'RESULTADOS',
            x: -20 //center
        },
        subtitle: {
            text: 'RH',
            x: -20
        },
        xAxis: {
            categories: ['DGV', 'R', 'A', 'I','II','III','IV','V','VI','VII','VIII','IX']
        },
        yAxis: {
            title: {
                text: 'VALOR'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Resultados',
            data: [<?php echo $IPV['IPVDGV'];?>,<?php echo $IPV['IPVR'];?>,<?php echo $IPV['IPVA'];?>,<?php echo $IPV['IPVI'];?>,<?php echo $IPV['IPVII'];?>,<?php echo $IPV['IPVIII'];?>,<?php echo $IPV['IPVIV'];?>,<?php echo $IPV['IPVV'];?>,<?php echo $IPV['IPVVI'];?>,<?php echo $IPV['IPVVII'];?>,<?php echo $IPV['IPVVIII'];?>,<?php echo $IPV['IPVIX'];?> ]
        }]
    });
});
		</script>
        <?php 
		if($IPV['StatusCleaver']!="No"){
				echo '<script src="https://code.highcharts.com/highcharts.js"></script>';
		      	echo '<script src="https://code.highcharts.com/modules/exporting.js"></script>';
		}
        ?>
              </p>
              
            
            <p style="font-style: italic"><h2>RESULTADO PRUEBA IPV:</h2></p>
            
            
            <div id="container2">Colocar aquí el contenido para  id "container2"</div>
            <p style="font-style: italic">&nbsp;</p>
            <p style="font-style: italic">
            <?php
            if($IPV['IPVDGV']>=0 && $IPV['IPVDGV']<=2){
				echo '<p style="font-style: italic"> Disposición General para la Venta: No muestra una disposición general para la venta, es decir, le cuesta trabajo establecer relaciones con los demás, no cuenta con una actitud combativa ni control de sí mismo. Características indispensables para realizar actividades comerciales.&nbsp;</p>';
			}
            
			if($IPV['IPVDGV']>2 && $IPV['IPVDGV']<=4){
				echo '<p style="font-style: italic">  Disposición General para la Venta: Muestra una disposición general para la venta ligeramente menor que el promedio de la mayoría de la gente, es decir, posee cierta facilidad para establecer relaciones con los demás, tiene una actitud hasta cierto punto combativa y el suficiente control de sí mismo que le podrían ayudar en actividades relacionadas con la venta.&nbsp;</p>';
			}
			
			if($IPV['IPVDGV']>4 && $IPV['IPVDGV']<=6){
				echo '<p style="font-style: italic">   Disposición General para la Venta: Posee facilidad para establecer relaciones con los demás, muestra combatividad que le permite persuadir al cliente, pero al mismo tiempo, control de sí mismo. En sí, cuenta con rasgos de personalidad acordes a actividades comerciales.&nbsp;</p>';
			}
			
			if($IPV['IPVDGV']>6 && $IPV['IPVDGV']<=8){
				echo '<p style="font-style: italic">    Disposición General para la Venta: Muestra una disposición general para la venta ligeramente mayor que el promedio, es decir, posee facilidad para establecer relaciones con los demás, muestra combatividad que le permite persuadir al cliente y tiene control de sí mismo. En sí, cuenta con rasgos de personalidad idóneos para actividades comerciales.&nbsp;</p>';
			}
			
			if($IPV['IPVDGV']>8 && $IPV['IPVDGV']<=10){
				echo '<p style="font-style: italic">     Disposición General para la Venta: El índice de disposición general para la venta arriba del promedio, señala a una persona que posee una gran capacidad para establecer relaciones con los demás, muestra combatividad y bastante control de sí mismo que le permiten persuadir al cliente. En sí, cuenta con rasgos de personalidad idóneos para actividades comerciales.&nbsp;</p>';
			}
			
			//SELECCIONADOR PARA R
			if($IPV['IPVR']>=0 && $IPV['IPVR']<=2){
				echo '<p style="font-style: italic">  Receptividad: Es una persona que no es empática con los demás, se limita a oír, no escucha ni comprende, le cuesta mucho trabajo adaptarse a personas y circunstancias nuevas, tiene poco control de si mismo y poca resistencia a la frustración.&nbsp;</p>';
			}
            
			if($IPV['IPVR']>2 && $IPV['IPVR']<=4){
				echo '<p style="font-style: italic">   Receptividad: Es una persona que intenta entrar en empatía con los demás. Su capacidad de escuchar, comprender, adaptarse a personas y circunstancias, de autocontrol y resistencia a la frustración, están ligeramente abajo del promedio.&nbsp;</p>';
			}
			
			if($IPV['IPVR']>4 && $IPV['IPVR']<=6){
				echo '<p style="font-style: italic">    Receptividad: Es una persona que sabe ponerse en lugar de los demás, sabe escuchar y comprender, cuenta con capacidad de adaptación a personas y circunstancias, posee control de si mismo y resistencia a la frustración.&nbsp;</p>';
			}
			
			if($IPV['IPVR']>6 && $IPV['IPVR']<=8){
				echo '<p style="font-style: italic">     Receptividad: El índice de receptividad está ligeramente mayor que el promedio, por tanto, se puede decir, que es una persona que sabe ponerse en lugar de los demás, sabe escuchar y comprender, cuenta con capacidad de adaptación a personas y circunstancias, posee control de si mismo y resistencia a la frustración.&nbsp;</p>';
			}
			
			if($IPV['IPVR']>8 && $IPV['IPVR']<=10){
				echo '<p style="font-style: italic">      Receptividad: El índice de receptividad por arriba del promedio, muestra a una persona con gran capacidad de empatía, que sabe escuchar y comprender, que se adapta fácilmente a personas y circunstancias y que posee control de si mismo y resistencia a la frustración.&nbsp;</p>';
			}
			
			/////SELECCIONADOR PARA A
			if($IPV['IPVA']>=0 && $IPV['IPVA']<=2){
				echo '<p style="font-style: italic">   Agresividad: No se caracteriza por ser un persona activa y dinámica, no le gusta participar en actividades deportivas, no soporta situaciones conflictivas, no demuestra una actitud de poder o ascendencia suficiente para dominar, es inseguro e incapaz de enfrentar riesgos.&nbsp;</p>';
			}
            
			if($IPV['IPVA']>2 && $IPV['IPVA']<=4){
				echo '<p style="font-style: italic">    Agresividad: Es una persona que muestra un índice de agresividad comercial ligeramente menor que el promedio de la mayoría de la gente, es decir, es un tanto activo y dinámico, cuenta con cierta capacidad para soportar situaciones conflictivas, tiene una actitud de poder o ascendencia suficiente para dominar, intenta estar seguro de sí y puede ser capaz de enfrentar riesgos en casos necesarios.&nbsp;</p>';
			}
			
			if($IPV['IPVA']>4 && $IPV['IPVA']<=6){
				echo '<p style="font-style: italic">     Agresividad: Es una persona activa y dinámico, cuenta con capacidad para soportar y provocar situaciones conflictivas con el deseo de ganar, posee una actitud dominante por poder o ascendencia, seguro de sí, gusta de riesgos.&nbsp;</p>';
			}
			
			if($IPV['IPVA']>6 && $IPV['IPVA']<=8){
				echo '<p style="font-style: italic">      Agresividad: El índice de agresividad está ligeramente mayor que el promedio, es decir, es una persona activa y dinámico, cuenta con capacidad para soportar y provocar situaciones conflictivas con el deseo de ganar, domina por poder o ascendencia, seguro de sí y gusta de riesgos.&nbsp;</p>';
			}
			
			if($IPV['IPVA']>8 && $IPV['IPVA']<=10){
				echo '<p style="font-style: italic">       Agresividad: El índice de agresividad está ligeramente mayor que el promedio, es decir, es una persona activa y dinámico, cuenta con capacidad para soportar y provocar situaciones conflictivas con el deseo de ganar, domina por poder o ascendencia, seguro de sí y gusta de riesgos.&nbsp;</p>';
			}
			
			///SELECCIONADOR PARA I
			if($IPV['IPVI']>=0 && $IPV['IPVI']<=2){
				echo '<p style="font-style: italic">    Comprensión: Es una persona que no lo caracteriza la empatía y objetividad en sus relaciones humanas, no es intuitivo ni integrador.&nbsp;</p>';
			}
            
			if($IPV['IPVI']>2 && $IPV['IPVI']<=4){
				echo '<p style="font-style: italic">     Comprensión: Posee empatía y objetividad en sus relaciones humanas ligeramente por debajo del promedio, es intuitivo e integrador.&nbsp;</p>';
			}
			
			if($IPV['IPVI']>4 && $IPV['IPVI']<=6){
				echo '<p style="font-style: italic">      Comprensión: Es empático y objetivo en sus relaciones humanas, intuitivo y capaz de integrar en su contexto un suceso cualquiera.&nbsp;</p>';
			}
			
			if($IPV['IPVI']>6 && $IPV['IPVI']<=8){
				echo '<p style="font-style: italic">       Comprensión: El índice de comprensión está ligeramente arriba del promedio, por tanto, se puede decir que es empático y objetivo en sus relaciones humanas, intuitivo y capaz de integrar en su contexto un suceso cualquiera.
&nbsp;</p>';
			}
			
			if($IPV['IPVI']>8 && $IPV['IPVI']<=10){
				echo '<p style="font-style: italic">        Comprensión: El índice de comprensión por arriba del promedio, muestra a una persona por demás empático y objetivo en sus relaciones humanas, con gran capacidad intuitiva y capaz de integrar en su contexto un suceso cualquiera.&nbsp;</p>';
			}
			
			////SELECTOR PARA II
			if($IPV['IPVII']>=0 && $IPV['IPVII']<=2){
				echo '<p style="font-style: italic">     Adaptabilidad: No se adapta a situaciones y personas nuevas, es inflexible en sus actividades intelectuales y de relación.&nbsp;</p>';
			}
            
			if($IPV['IPVII']>2 && $IPV['IPVII']<=4){
				echo '<p style="font-style: italic">      Adaptabilidad: Puede llegar a adaptarse a situaciones y personas, y ser flexible en actividades tanto intelectuales como de relación, estás cualidades están ligeramente abajo del promedio de la norma.&nbsp;</p>';
			}
			
			if($IPV['IPVII']>4 && $IPV['IPVII']<=6){
				echo '<p style="font-style: italic">       Adaptabilidad: Cuenta con una habilidad para adaptarse fácil y rápidamente a situaciones y personas diferentes, es flexible en sus actividades tanto intelectuales como de relación.&nbsp;</p>';
			}
			
			if($IPV['IPVII']>6 && $IPV['IPVII']<=8){
				echo '<p style="font-style: italic">        Adaptabilidad: Su capacidad para adaptarse se encuentra ligeramente arriba del promedio, por lo que se adapta fácil y rápidamente a situaciones y personas, es flexible en sus actividades tanto intelectuales como de relación.
&nbsp;</p>';
			}
			
			if($IPV['IPVII']>8 && $IPV['IPVII']<=10){
				echo '<p style="font-style: italic">         Adaptabilidad: El índice de adaptabilidad por arriba del promedio, muestra a una persona con una gran habilidad para adaptarse a situaciones y personas de manera fácil y rápida, es muy flexible en sus actividades tanto intelectuales como de relación.&nbsp;</p>';
			}
			
			
			////SELECTOR PARA III	
			if($IPV['IPVIII']>=0 && $IPV['IPVIII']<=2){
				echo '<p style="font-style: italic">      Control de sí mismo: No posee control en sí mismo, no logra administrar su potencial psicológico y/o físico, regularmente no es organizado ni perseverante. 
&nbsp;</p>';
			}
            
			if($IPV['IPVIII']>2 && $IPV['IPVIII']<=4){
				echo '<p style="font-style: italic">       Control de sí mismo: Es una persona que muestra un índice de control en sí mismo ligeramente menor que el promedio de la mayoría de la gente, intenta ser dueño de sí mismo a través de la administración de su potencial psicológico y/o físico, regularmente suele ser organizado y perseverante.&nbsp;</p>';
			}
			
			if($IPV['IPVIII']>4 && $IPV['IPVIII']<=6){
				echo '<p style="font-style: italic">        Control de sí mismo: Es un individuo controlado, dueño de sí mismo, capaz de una buena administración de su potencial psicológico o físico, es una persona organizada y perseverante, hábil para ocultar sus sentimientos.&nbsp;</p>';
			}
			
			if($IPV['IPVIII']>6 && $IPV['IPVIII']<=8){
				echo '<p style="font-style: italic">         Control de sí mismo: El índice de control de sí mismo está ligeramente arriba del promedio, es decir, es un individuo controlado, dueño de sí mismo, capaz de una buena administración de su potencial psicológico o físico, es una persona organizada y perseverante, hábil para ocultar sus sentimientos.
&nbsp;</p>';
			}
			
			if($IPV['IPVIII']>8 && $IPV['IPVIII']<=10){
				echo '<p style="font-style: italic">          Control de sí mismo: El índice de control de si mismo por arriba del promedio, muestra a una persona con gran capacidad de autocontrol, dueño de sí mismo, el cual, administra eficientemente su potencial psicológico y físico, muy organizado y perseverante y muy hábil para ocultar sus sentimientos.&nbsp;</p>';
			}
			
			
			////SELECTOR PARA IV	
			if($IPV['IPVIV']>=0 && $IPV['IPVIV']<=2){
				echo '<p style="font-style: italic">       Tolerancia a la frustración: Es muy poco tolerante y aveces no logra dejar de personalizar las situaciones en que se ve implicado. 
&nbsp;</p>';
			}
            
			if($IPV['IPVIV']>2 && $IPV['IPVIV']<=4){
				echo '<p style="font-style: italic">        Tolerancia a la frustración: Es una persona que muestra un índice de tolerancia a la frustración ligeramente menor que el promedio de la mayoría de la gente, no siempre es capaz de soporta adecuadamente las acciones frustrantes, y aveces no logra dejar de personalizar las situaciones en que se ve implicado.&nbsp;</p>';
			}
			
			if($IPV['IPVIV']>4 && $IPV['IPVIV']<=6){
				echo '<p style="font-style: italic">         Tolerancia a la frustración: Es una persona que soporta adecuadamente las acciones frustrantes, capaz de comprender los fracasos y de no personalizar las situaciones en que se ve implicado.&nbsp;</p>';
			}
			
			if($IPV['IPVIV']>6 && $IPV['IPVIV']<=8){
				echo '<p style="font-style: italic">           Tolerancia a la frustración: El índice de tolerancia está ligeramente mayor que el promedio, es decir, es una persona que soporta adecuadamente las acciones frustrantes, capaz de comprender los fracasos y de no personalizar las situaciones en que se ve implicado.
&nbsp;</p>';
			}
			
			if($IPV['IPVIV']>8 && $IPV['IPVIV']<=10){
				echo '<p style="font-style: italic">           Tolerancia a la frustración: El índice de tolerancia a la frustración por arriba del promedio, muestra a una persona que posee una gran capacidad para soportar acciones frustrantes, que comprende los fracasos, e incluso puede llegar a aprender de ellos, así bien, cuando llega a tener un tropiezo no personalizar las situaciones en que se ve implicado.&nbsp;</p>';
			}
			
			
			
			
			////SELECTOR PARA V	
			if($IPV['IPVV']>=0 && $IPV['IPVV']<=2){
				echo '<p style="font-style: italic">        Combatividad: Le cuesta mucho trabajo soportar desacuerdos y no cuenta con una agresividad comercial. 
&nbsp;</p>';
			}
            
			if($IPV['IPVV']>2 && $IPV['IPVV']<=4){
				echo '<p style="font-style: italic">         Combatividad: Es una persona que no gusta de provocar conflictos y no siempre soporta los desacuerdos, su agresividad comercial está ligeramente menor que el promedio de la mayoría de la gente.&nbsp;</p>';
			}
			
			if($IPV['IPVV']>4 && $IPV['IPVV']<=6){
				echo '<p style="font-style: italic">          Combatividad: Es una persona capaz de entrar conflictos y soportar los desacuerdos, posee agresividad comercial.&nbsp;</p>';
			}
			
			if($IPV['IPVV']>6 && $IPV['IPVV']<=8){
				echo '<p style="font-style: italic">           Combatividad: El índice de combatividad está ligeramente mayor que el promedio, es decir, es una persona capaz de entrar en conflictos y soportar los desacuerdos. Posee agresividad comercial.
&nbsp;</p>';
			}
			
			if($IPV['IPVV']>8 && $IPV['IPVV']<=10){
				echo '<p style="font-style: italic">            Combatividad: El índice de combatividad por arriba del promedio, muestra a una persona capaz de provocar conflictos con la finalidad de persuadir, es capaz de soportar los desacuerdos, se caracteriza por ser polémico y porfiado. Posee una excelente agresividad comercial.&nbsp;</p>';
			}
			
			
			////SELECTOR PARA VI	
			if($IPV['IPVVI']>=0 && $IPV['IPVVI']<=2){
				echo '<p style="font-style: italic">         Dominio: Señala a una persona con poca voluntad de dominio, de manipular, persuadir y/o cautivar. 
&nbsp;</p>';
			}
            
			if($IPV['IPVVI']>2 && $IPV['IPVVI']<=4){
				echo '<p style="font-style: italic">          Dominio: Es una persona que muestra un índice de dominio ligeramente menor que el promedio de la mayoría de la gente, es decir, tiene el potencial para dominar, manipular, persuadir y cautivar, aún cuando la mayoría de las veces no lo hace.&nbsp;</p>';
			}
			
			if($IPV['IPVVI']>4 && $IPV['IPVVI']<=6){
				echo '<p style="font-style: italic">          Dominio: Señala a una persona con voluntad de dominio, con deseos de ganar, de manipular, persuasivo y cautivador, es dominante y con actitud ascendente propia de personas con jerarquía.&nbsp;</p>';
			}
			
			if($IPV['IPVVI']>6 && $IPV['IPVVI']<=8){
				echo '<p style="font-style: italic">            Dominio: El índice de dominio está ligeramente mayor que el promedio, por tanto, señala a una persona con voluntad de dominio, con deseos de ganar, de manipular, persuasivo y cautivador, es dominante y con actitud ascendente propia de personas con jerarquía.
&nbsp;</p>';
			}
			
			if($IPV['IPVVI']>8 && $IPV['IPVVI']<=10){
				echo '<p style="font-style: italic">            Dominio: El índice de domino por arriba del promedio, señala a una persona con una gran voluntad de dominio, con una actitud ganadora, manipulador, persuasivo y cautivador, es dominante y con actitud ascendente propia de personas con jerarquía.&nbsp;</p>';
			}
			
			
			////SELECTOR PARA VII	
			if($IPV['IPVVII']>=0 && $IPV['IPVVII']<=2){
				echo '<p style="font-style: italic">          Seguridad: Es inseguro, no goza de situaciones novedosas e inesperadas, difícilmente se enfrentaría a riesgos.
&nbsp;</p>';
			}
            
			if($IPV['IPVVII']>2 && $IPV['IPVVII']<=4){
				echo '<p style="font-style: italic">          Seguridad: Es una persona que muestra un índice de seguridad ligeramente menor que el promedio de la mayoría de la gente, es decir, no es tan seguro de sí, ni necesariamente goza de situaciones novedosas e inesperadas, es capaz de enfrentarse a riesgos pero solo en casos necesarios.&nbsp;</p>';
			}
			
			if($IPV['IPVVII']>4 && $IPV['IPVVII']<=6){
				echo '<p style="font-style: italic">           Seguridad: Es un individuo seguro de sí mismo, que le gustan las situaciones novedosas e inesperadas, capaz de enfrentarse a riesgos.&nbsp;</p>';
			}
			
			if($IPV['IPVVII']>6 && $IPV['IPVVII']<=8){
				echo '<p style="font-style: italic">             Seguridad: El índice de seguridad ligeramente arriba del promedio, señala a un individuo seguro de sí mismo, que le gustan las situaciones novedosas e inesperadas, capaz de enfrentarse a riesgos.
&nbsp;</p>';
			}
			
			if($IPV['IPVVII']>8 && $IPV['IPVVII']<=10){
				echo '<p style="font-style: italic">            Seguridad: El índice de seguridad por arriba del promedio, muestra a un individuo por demás seguro de sí mismo, que gusta de situaciones novedosas e inesperadas, capaz de enfrentarse a riesgos e incluso atreverse a buscarlos, siempre y cuando considere que éstos le traerán ganancias.&nbsp;</p>';
			}
			
			
			////SELECTOR PARA VIII	
			if($IPV['IPVVIII']>=0 && $IPV['IPVVIII']<=2){
				echo '<p style="font-style: italic">           Actividad: Es una persona que no gusta de actividades deportivas, suele ser pasivo.
&nbsp;</p>';
			}
            
			if($IPV['IPVVIII']>2 && $IPV['IPVVIII']<=4){
				echo '<p style="font-style: italic">           Actividad: Es una persona lo suficientemente activa para una actividad comercial (no lo idóneo, ya que su índice de actividad muestra un promedio ligeramente menor que el de la mayoría de la gente).&nbsp;</p>';
			}
			
			if($IPV['IPVVIII']>4 && $IPV['IPVVIII']<=6){
				echo '<p style="font-style: italic">            Actividad: Es una persona activa que no le gusta la pasividad.&nbsp;</p>';
			}
			
			if($IPV['IPVVIII']>6 && $IPV['IPVVIII']<=8){
				echo '<p style="font-style: italic">              Actividad: El índice de actividad ligeramente mayor que el promedio, señala a una persona activa que no le gusta la pasividad.
&nbsp;</p>';
			}
			
			if($IPV['IPVVIII']>8 && $IPV['IPVVIII']<=10){
				echo '<p style="font-style: italic">             Actividad: El índice de actividad por arriba del promedio, muestra a una persona que gusta de actividades deportivas, no soporta la pasividad física.&nbsp;</p>';
			}
			
			
			////SELECTOR PARA IX	
			if($IPV['IPVIX']>=0 && $IPV['IPVIX']<=2){
				echo '<p style="font-style: italic">            Sociabilidad: Es introvertido, le cuesta trabajo crear nuevos contactos y convivir con los demás, puede llegar a preferir estar solo que acompañado.
&nbsp;</p>';
			}
            
			if($IPV['IPVIX']>2 && $IPV['IPVIX']<=4){
				echo '<p style="font-style: italic">            Sociabilidad: Es una persona que muestra un índice de sociabilidad ligeramente menor que el promedio de la mayoría de la gente, así bien, muestra ser hasta cierto punto extrovertido y capaz de crear nuevos contactos; gusta de convivir con los demás y prefiere estar acompañado que solo.&nbsp;</p>';
			}
			
			if($IPV['IPVIX']>4 && $IPV['IPVIX']<=6){
				echo '<p style="font-style: italic">             Sociabilidad: Es extrovertido, capaz de crear nuevos contactos y convivir con los demás, es sensible a las relaciones humanas y prefiere estar acompañado que solo.&nbsp;</p>';
			}
			
			if($IPV['IPVIX']>6 && $IPV['IPVIX']<=8){
				echo '<p style="font-style: italic">              Sociabilidad: El índice de sociabilidad ligeramente mayor que el promedio, muestra a una persona extrovertido, capaz de crear nuevos contactos y convivir con los demás, sensible a las relaciones humanas y el cual prefiere estar acompañado que solo.
&nbsp;</p>';
			}
			
			if($IPV['IPVIX']>8 && $IPV['IPVIX']<=10){
				echo '<p style="font-style: italic">              Sociabilidad: El índice de sociabilidad por arriba del promedio, muestra a una persona extrovertido, que busca y crea nuevos contactos, gusta de convivir con los demás, es sensible a las relaciones humanas y prefiere estar acompañado que solo.&nbsp;</p>';
			}
			
			
			
			
			
			
            ?>
            &nbsp;</p>
          
		  <?php
					}
				}
		  ////////////// FIN DE RESULTADOS IPV
	  ////////////////// INICIA RESULTADOS KOSTICK
	  include("Conexion2.php");
			$query=mysqli_query($cnx,"select StatusCleaver,StatusIPV,KostickG,KostickL,KostickI,KostickT,KostickV, KostickS, KostickR, KostickD,KostickC,KostickE,KostickN,KostickA,KostickP,KostickX,KostickB,KostickO,KostickZ,KostickK,KostickF,KostickW from candidatos where Nombre='$nombreperfil' and StatusKostick='No'");
						
			if(mysqli_num_rows($query)<=0) { 
			    //die(mysql_error()); // TODO: better error handling
				}else{
					if($Kostick=mysqli_fetch_array($query)){
						?>
                        
                        
              <script type="text/javascript">
		$(function () {
    $('#containerk1').highcharts({
        title: {
            text: 'RESULTADOS',
            x: -20 //center
        },
        subtitle: {
            text: 'Kostick',
            x: -20
        },
        xAxis: {
            categories: ['Trabajador tenaz e intensivo','Actividad de liderazgo','Toma de decisiones/impulsividad','Tipo siempre activo','Tipo vigoroso','Extensión social (sociable)','Tipo teórico (pensador)','Interés en trabajo con detalles','Tipo organizado (sistemático)','Tipo emocionalmente restringido']
        },
        yAxis: {
            title: {
                text: 'VALOR'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Tipo de Personalidad',
            data: [<?php echo $Kostick['KostickG'];?>,<?php echo $Kostick['KostickL'];?>,<?php echo $Kostick['KostickI'];?>,<?php echo $Kostick['KostickT'];?>,<?php echo $Kostick['KostickV'];?>,<?php echo $Kostick['KostickS'];?>,<?php echo $Kostick['KostickR'];?>,<?php echo $Kostick['KostickD'];?>,<?php echo $Kostick['KostickC'];?>,<?php echo $Kostick['KostickE'];?>]
        }]
    });
});
		</script>
        

        
        <script type="text/javascript">
		$(function () {
    $('#containerk2').highcharts({
        title: {
            text: 'RESULTADOS',
            x: -20 //center
        },
        subtitle: {
            text: 'Kostick',
            x: -20
        },
        xAxis: {
            categories: ['De terminar una tarea','De logro','De controlar a otros','De ser notificado (ser considerado)','De pertenecer al grupo','De acercamiento y afecto (afinidad)','De cambio/no modificar','De ser agresivo/pasivo','De apoyo del supervisor o autoridad','De reglas y supervisión']
        },
        yAxis: {
            title: {
                text: 'VALOR'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Tipos de Necesidades',
            data: [<?php echo $Kostick['KostickN'];?>,<?php echo $Kostick['KostickA'];?>,<?php echo $Kostick['KostickP'];?>,<?php echo $Kostick['KostickX'];?>,<?php echo $Kostick['KostickB'];?>,<?php echo $Kostick['KostickO'];?>,<?php echo $Kostick['KostickZ'];?>,<?php echo $Kostick['KostickK'];?>,<?php echo $Kostick['KostickF'];?>,<?php echo $Kostick['KostickW'];?>]
        }]
    });
});
		</script>
        <?php
        if($Kostick['StatusCleaver']!="No" && $Kostick['StatusIPV']!="No"){
				echo '<script src="https://code.highcharts.com/highcharts.js"></script>';
		      	echo '<script src="https://code.highcharts.com/modules/exporting.js"></script>';
		}
        ?>
        
						<p><h2>RESULTADO DE PRUEBA KOSTICK</h2></p>
						<div id="containerk1">Colocar aquí el contenido para  id "containerk1"</div>
						<div id="containerk2">Colocar aquí el contenido para  id "containerk2"</div>
						<p>TIPO DE PERSONALIDAD POSITIVO (relevante)</p>
                        <?php
                        if($Kostick['KostickG']>=8 && $Kostick['KostickG']<=9){
							echo '<p style="font-style: italic">             Trabajador tenaz e intensivo: se identifica  con  el  trabajo  arduo comúnmente aparece como un trabajador intenso y dedicado.&nbsp;</p>';
						}
						if($Kostick['KostickG']==0){
							echo '<p style="font-style: italic">             Trabajador tenaz e intensivo: Probablemente este motivado por encontrar métodos para ahorrar tiempo al hacer las cosas.&nbsp;</p>';
						}
						
						//////
						if($Kostick['KostickL']>=8 && $Kostick['KostickL']>=9){
							echo '<p style="font-style: italic">             Actividad de liderazgo: Tiene confianza, se apoya del liderazgo. Se tiene confianza que no compite con sus subordinados.&nbsp;</p>';
						}
						if($Kostick['KostickL']==0){
							echo '<p style="font-style: italic">             Actividad de liderazgo: No es altamente competitivo. Puede estar contento de permanecer como trabajador y por lo tanto está hecho para un trabajo en el que no haya expectaciones por el liderazgo.&nbsp;</p>';
						}
						
						//////
						if($Kostick['KostickI']>=8 && $Kostick['KostickI']>=9){
							echo '<p style="font-style: italic">             Toma de decisiones/impulsividad: Es optimista, agresivo, entusiasta, rápido en dar respuestas y presiona PATRA acelerar la toma de decisiones.&nbsp;</p>';
						}
						if($Kostick['KostickI']>=0 && $Kostick['KostickI']<=1){
							echo '<p style="font-style: italic">             Toma de decisiones/impulsividad: Es muy precavido, sumamente serio.&nbsp;</p>';
						}
						/////////
						if($Kostick['KostickT']==9){
							echo '<p style="font-style: italic">             Tipo siempre activo: Trabaja aprisa y logra bastante. Está preparado internamente para la alta producción.&nbsp;</p>';
						}
						if($Kostick['KostickT']>=0 && $Kostick['KostickT']<=1){
							echo '<p style="font-style: italic">             Tipo siempre activo: Esta  persona  es tranquila, no está frustrada, sabe tomar las cosas como son y raras veces se apresura.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickV']>=8 && $Kostick['KostickV']<=9){
							echo '<p style="font-style: italic">             Tipo vigoroso: Tiene mucha energía para actividades físicas. Comúnmente es un individuo agradable,  que tiene  mucha  fuerza física, probablemente trabaja con herramientas, tiene una actividad deportiva.&nbsp;</p>';
						}
						if($Kostick['KostickV']>=0 && $Kostick['KostickV']<=2){
							echo '<p style="font-style: italic">             Tipo vigoroso: Tiene capacidad para permanecer sentado.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickS']>=7 && $Kostick['KostickS']<=9){
							echo '<p style="font-style: italic">             Extensión social (sociable): Crea  una  buena  atmósfera,  buenas relaciones sociales, se interesa por los derechos de los demás y de sí mismo y establece buenas comunicaciones.&nbsp;</p>';
						}
						if($Kostick['KostickS']==0){
							echo '<p style="font-style: italic">             Extensión social (sociable): Es  un  ganador,  un  trabajador que dirige bien la energía.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickR']>=8 && $Kostick['KostickR']<=9){
							echo '<p style="font-style: italic">             Tipo teórico (pensador): Es un planeador a largo plazo. Esta interesado en teoría y se refleja en su actividad.&nbsp;</p>';
						}
						if($Kostick['KostickR']==0){
							echo '<p style="font-style: italic">             Tipo teórico (pensador): Es una persona que hace las cosas más que un planeador teórico. Tiende a ser práctico.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickD']>=5 && $Kostick['KostickD']<=9){
							echo '<p style="font-style: italic">             Interés en trabajo con detalles: Encuentra gusto en trabajar con detalles. Esta interesado y preocupado acerca de la exactitud de las cosas.&nbsp;</p>';
						}
						if($Kostick['KostickD']==0){
							echo '<p style="font-style: italic">             Interés en trabajo con detalles: Puede ser un delegador y diferenciar detalles importantes.&nbsp;</p>';
						}
						
						////////
						if($Kostick['KostickC']==9){
							echo '<p style="font-style: italic">             Tipo organizado (sistemático): Es una persona que estructura las cosas y es agradable estar con ella porque es pulcra, ordenada y cuidadosa.&nbsp;</p>';
						}
						if($Kostick['KostickC']==0){
							echo '<p style="font-style: italic">             Tipo organizado (sistemático): Tolera la confusión. Es flexible en su manera de pensar.&nbsp;</p>';
						}
						
						///////
						if($Kostick['KostickE']>=7 && $Kostick['KostickE']<=9){
							echo '<p style="font-style: italic">             Tipo emocionalmente restringido: Es confiable, constante, calmado y tiene control emocional y madurez. Probablemente  es  maneja  bien  en situaciones emocionales.&nbsp;</p>';
						}
						if($Kostick['KostickE']>=0 && $Kostick['KostickE']<=2){
							echo '<p style="font-style: italic">             Tipo emocionalmente restringido: Es dramático y aporta mucha energía cuando trabaja. Se siente emocionalmente involucrado en su trabajo.&nbsp;</p>';
						}
                        ?>
						<p>TIPO DE PERSONALIDAD NEGATIVO (relevante)</p>
                        <?php
                        if($Kostick['KostickG']>=8 && $Kostick['KostickG']<=9){
							echo '<p style="font-style: italic">             Trabajador tenaz e intensivo: Es un trabajador arduo e intenso, una persona que desgraciadamente trabaja por el hecho de trabajar. Puede estar más intrigado con los procesos de trabajo que con los resultados.&nbsp;</p>';
						}
						if($Kostick['KostickG']==0){
							echo '<p style="font-style: italic">             Trabajador tenaz e intensivo: Lo último que quisiera hacer es identificarse con el trabajo arduo.&nbsp;</p>';
						}
						
						//////
						if($Kostick['KostickL']==9){
							echo '<p style="font-style: italic">             Actividad de liderazgo: Le interesa más la imagen y el status dentro del grupo en donde interactúa. Con frecuencia es un individuo ostentoso con exceso de confianza.&nbsp;</p>';
						}
						if($Kostick['KostickL']==0){
							echo '<p style="font-style: italic">             Actividad de liderazgo: Tiene un complejo en función del liderazgo. No se ve a sí mismo como un líder. No es dominante.&nbsp;</p>';
						}
						
						//////
						if($Kostick['KostickI']==9){
							echo '<p style="font-style: italic">             Toma de decisiones/impulsividad: Es una persona impulsiva que puede convertirse en mentalmente sobre activo y toma  decisiones  apresuradas.  Con frecuencia se impacienta.&nbsp;</p>';
						}
						if($Kostick['KostickI']>=0 && $Kostick['KostickI']<=1){
							echo '<p style="font-style: italic">             Toma de decisiones/impulsividad: Tiene problemas en la toma de decisiones, vacila demasiado.&nbsp;</p>';
						}
						/////////
						if($Kostick['KostickT']==9){
							echo '<p style="font-style: italic">             Tipo siempre activo: Tiene mucha visión interna y tiende a ser neurótico. Puede andar apresurado excesivamente. No pude lograr terminar su trabajo de forma eficiente.&nbsp;</p>';
						}
						if($Kostick['KostickT']>=0 && $Kostick['KostickT']<=1){
							echo '<p style="font-style: italic">             Tipo siempre activo: Poco le importa el tiempo y el ritmo de trabajo. Toma las cosas con mucha facilidad a un ritmo que resulta inconsistente.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickV']>=8 && $Kostick['KostickV']<=9){
							echo '<p style="font-style: italic">             Tipo vigoroso: Puede tender a involucrarse exageradamente en actividades físicas, cuando debería estar concentrado en alguna cosa. Puede tener dificultad para permanecer sentado durante ocho horas al día.&nbsp;</p>';
						}
						if($Kostick['KostickV']==0){
							echo '<p style="font-style: italic">             Tipo vigoroso: Se no ha estado enfermo recientemente puede ser un neurótico cansado.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickS']==9){
							echo '<p style="font-style: italic">             Extensión social (sociable): Puede estar preocupado por los aspectos sociales. Puede empelar bastante tiempo en las amenidades sociales en lugar de hacer un trabajo bien o resolver un conflicto.&nbsp;</p>';
						}
						if($Kostick['KostickS']==0){
							echo '<p style="font-style: italic">             Extensión social (sociable): A menudo no tiene tacto social. Es un introvertido y se siente torpe socialmente.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickR']>=8 && $Kostick['KostickR']<=9){
							echo '<p style="font-style: italic">             Tipo teórico (pensador): Es un soñador. Puede involucrarse tanto en la teoría que puede no hacer mucho en las situaciones prácticas y concretas.&nbsp;</p>';
						}
						if($Kostick['KostickR']==0){
							echo '<p style="font-style: italic">             Tipo teórico (pensador): No está interesado en la teoría. No puede planear suficiente y organizar las tareas.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickD']>=7 && $Kostick['KostickD']<=9){
							echo '<p style="font-style: italic">             Interés en trabajo con detalles: Puede perderse en el detalle y mal interpretar conceptos.&nbsp;</p>';
						}
						if($Kostick['KostickD']==0){
							echo '<p style="font-style: italic">             Interés en trabajo con detalles: No disfruta los detalles y por lo tanto puede tratar de evitarlos.&nbsp;</p>';
						}
						
						////////
						if($Kostick['KostickC']==9){
							echo '<p style="font-style: italic">             Tipo organizado (sistemático): Tiende a ser muy terco y rígido. Puede ser tan ordenado que llega al grado de interferir con eficiencia.&nbsp;</p>';
						}
						if($Kostick['KostickC']==0){
							echo '<p style="font-style: italic">             Tipo organizado (sistemático): No se preocupa demasiado en cuanto al orden y el sistema.&nbsp;</p>';
						}
						
						///////
						if($Kostick['KostickE']>=7 && $Kostick['KostickE']<=9){
							echo '<p style="font-style: italic">             Tipo emocionalmente restringido: Es tan calmado y controlado que puede parecer como emocionalmente pasivo, aburrido y sin influencia.&nbsp;</p>';
						}
						if($Kostick['KostickE']>=0 && $Kostick['KostickE']<=2){
							echo '<p style="font-style: italic">             Tipo emocionalmente restringido: Tiene poca restricción emocional. Cambia de estados de ánimo fácilmente. Cambia su actitud con su estado de ánimo.&nbsp;</p>';
						}
                        ?>
                        
                        
						<p>TIPO DE NECESIDADES POSITIVO (relevante)</p>
                        <?php
                        if($Kostick['KostickN']>=7 && $Kostick['KostickN']<=9){
							echo '<p style="font-style: italic">             De terminar una tarea: La puntuación de N alta representa el fuerte  deseo  del  examinado  para terminar el trabajo. Es confiable porque tiene un fuerte compromiso de terminar el trabajo que empieza. Con frecuencia prefiere un trabajo a la vez que dejar u trabajo sin terminar ya que le produce insatisfacción.&nbsp;</p>';
						}
						if($Kostick['KostickN']>=0 && $Kostick['KostickN']<=2){
							echo '<p style="font-style: italic">             De terminar una tarea: Puede manejar muchos trabajos a la vez. Al delegar, no involucra la obtención de un ego de personalidad en la tarea.&nbsp;</p>';
						}
						
						//////
						if($Kostick['KostickA']>=7 && $Kostick['KostickA']<=9){
							echo '<p style="font-style: italic">             De logro: Es  una persona ambiciosa,  tiene iniciativa con gran necesidad de obtener logros. Fija estándares altos para sí mismo y para los demás, le gusta el trabajo con  retos y tiene deseos de ser el mejor.&nbsp;</p>';
						}
						if($Kostick['KostickA']>=0 && $Kostick['KostickA']<=1){
							echo '<p style="font-style: italic">             De logro: Está contento y se distrae poco, a menos  que  el  empujen  demasiado fuerte. No siente impulso de avanzar.&nbsp;</p>';
						}
						
						//////
						if($Kostick['KostickP']>=8 && $Kostick['KostickP']<=9){
							echo '<p style="font-style: italic">             De controlar a otros: Le gusta tomar responsabilidades, con frecuencia le gusta influenciar a todos y a ayudarlos. Les agrada la función de liderazgo.&nbsp;</p>';
						}
						if($Kostick['KostickP']==0){
							echo '<p style="font-style: italic">             De controlar a otros: No es del tipo que sabotea y controla los esfuerzos del líder. Es tolerante.&nbsp;</p>';
						}
						/////////
						if($Kostick['KostickX']>=7 && $Kostick['KostickX']<=9){
							echo '<p style="font-style: italic">            De ser notificado (ser considerado): Tiene orgullo de sí mismo y de su estilo. Puede ser efectivo en grupos cuando  no  se  muestre  demasiado exhibicionista.&nbsp;</p>';
						}
						if($Kostick['KostickX']>=0 && $Kostick['KostickX']<=2){
							echo '<p style="font-style: italic">             De ser notificado (ser considerado): Puede tener una pequeña motivación a representar  un  papel  y  a  no  ser sincero. Es modesto.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickB']>=8 && $Kostick['KostickB']<=9){
							echo '<p style="font-style: italic">             De pertenecer al grupo: Esta bien consciente de las actividades del grupo. Tiene interés en cómo se siente el grupo y tiene un gusto natural por las personas.&nbsp;</p>';
						}
						if($Kostick['KostickB']==0){
							echo '<p style="font-style: italic">             De pertenecer al grupo: Puede  hacer frente  a  un  grupo y pensar independientemente de él. La presión  que el  grupo ejerce  no  le convence con facilidad.  Deben presentársele argumentos de peso.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickO']>=7 && $Kostick['KostickO']<=9){
							echo '<p style="font-style: italic">             De acercamiento y afecto (afinidad): Esta consciente de las necesidades de los  demás  y  probablemente  tiene conocimientos sutiles acerca de otros. Establece buenas relaciones muy cordiales y sinceras con las personas.&nbsp;</p>';
						}
						if($Kostick['KostickO']>=0 && $Kostick['KostickO']<=1){
							echo '<p style="font-style: italic">             De acercamiento y afecto (afinidad): Es muy analítico en su manera de pensar. Tiende a ser imparcial.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickZ']>=8 && $Kostick['KostickZ']<=9){
							echo '<p style="font-style: italic">             De cambio/no modificar: Es abierto a nuevas ideas y entusiasta acerca del cambio.&nbsp;</p>';
						}
						if($Kostick['KostickZ']>=0 && $Kostick['KostickZ']<=1){
							echo '<p style="font-style: italic">             De cambio/no modificar: Se puede adaptar a la rutina fácilmente sin aburrirse.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickK']>=7 && $Kostick['KostickK']<=9){
							echo '<p style="font-style: italic">             De ser agresivo/pasivo: Tiende a ser abierto y franco con las personas. Tiende a desmenuzar el conflicto  más  que  a ignorarlo  o evitarlo.&nbsp;</p>';
						}
						if($Kostick['KostickK']>=0 && $Kostick['KostickK']<=2){
							echo '<p style="font-style: italic">             De ser agresivo/pasivo: Puede ver las cosas desde una posición elevada y objetiva y no le gusta lastimar a nadie.&nbsp;</p>';
						}
						
						////////
						if($Kostick['KostickF']>=7 && $Kostick['KostickF']<=9){
							echo '<p style="font-style: italic">             De apoyo del supervisor o autoridad:Es un hombre bueno, leal, de compañía. Es sensible a cómo se siente la gente y tiene buenos conocimientos en cuanto a lo que se dice y se siente.&nbsp;</p>';
						}
						if($Kostick['KostickF']>=0 && $Kostick['KostickF']<=2){
							echo '<p style="font-style: italic">             De apoyo del supervisor o autoridad:No necesita ningún empuje de su jefe. Es motivado por el trabajo, no por la "palmada en la espalda" de su jefe.&nbsp;</p>';
						}
						
						///////
						if($Kostick['KostickW']>=7 && $Kostick['KostickW']<=9){
							echo '<p style="font-style: italic">             De reglas y supervisión: Es una persona que tiene gran respeto por las reglas. Puede seguir lo que se le indica sin distorsionarlo.&nbsp;</p>';
						}
						if($Kostick['KostickW']>=0 && $Kostick['KostickW']<=2){
							echo '<p style="font-style: italic">             De reglas y supervisión: Es autónomo. Esta dirigido hacia las metas mas que orientado al trabajo. Quiere saber qué debe hacerse, no cómo debe hacerse.&nbsp;</p>';
						}
                        ?>
                        
                        
			  <p>TIPO DE NECESIDADES NEGATIVO (relevante)</p>
						<p>
						  <?php
                        if($Kostick['KostickN']>=8 && $Kostick['KostickN']<=9){
							echo '<p style="font-style: italic">             De terminar una tarea: Tiene la mente en una sola dirección. Tiene poca visión y tiende a ser obstinado en sus convicciones. Ya sea eficiente o no, tiene dificultad en deshacerse de lo que esta haciendo. El de puntuación alta (9), tiene el apremio de terminar lo que inicia y puede repasar las posibles salidas.&nbsp;</p>';
						}
						if($Kostick['KostickN']>=0 && $Kostick['KostickN']<=2){
							echo '<p style="font-style: italic">             De terminar una tarea: Tiende a no terminar lo que empieza, tiene poco compromiso de la tarea encomendada. Posiblemente sea un buen "auxiliar de trabajo" y puede distraerse con facilidad.&nbsp;</p>';
						}
						
						//////
						if($Kostick['KostickA']>=7 && $Kostick['KostickA']<=9){
							echo '<p style="font-style: italic">             De logro: Tiende a estar descontento porque fija niveles de altura que nunca puede alcanzar. Puede irritara otras personas con sus expectaciones que usualmente no son altas. El supervisor puede encontrar dificultad para satisfacerlo. Desea reconocimientos, aumentos y promociones.&nbsp;</p>';
						}
						if($Kostick['KostickA']>=0 && $Kostick['KostickA']<=1){
							echo '<p style="font-style: italic">             De logro: No tiene iniciativa propia. Tiene poco empuje y avance. Se acomoda a ser el segundo mejor en términos de lo que realmente es capaz de hacer.&nbsp;</p>';
						}
						
						//////
						if($Kostick['KostickP']==9){
							echo '<p style="font-style: italic">             De controlar a otros: Podemos sospechar que no confía en que alguien dirija el "show". Es muy posesivo. Puede sabotear sutilmente esfuerzos acaparando la autoridad.&nbsp;</p>';
						}
						if($Kostick['KostickP']==0){
							echo '<p style="font-style: italic">             De controlar a otros: No toma de buen grado la responsabilidad por otros y posiblemente ni aún por sí mismo.&nbsp;</p>';
						}
						/////////
						if($Kostick['KostickX']>=7 && $Kostick['KostickX']<=9){
							echo '<p style="font-style: italic">            De ser notificado (ser considerado): Es un exhibicionista. Hace las cosas para causar buena impresión, más que para ser efectivo.&nbsp;</p>';
						}
						if($Kostick['KostickX']>=0 && $Kostick['KostickX']<=1){
							echo '<p style="font-style: italic">             De ser notificado (ser considerado): Es tímido y no se vende a sí mismo.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickB']>=8 && $Kostick['KostickB']<=9){
							echo '<p style="font-style: italic">             De pertenecer al grupo: Es dependiente del grupo. Puede ser demasiado sensitivo a las necesidades del mismo y cegarse a otras necesidades: como la de producción.&nbsp;</p>';
						}
						if($Kostick['KostickB']==0){
							echo '<p style="font-style: italic">             De pertenecer al grupo: Es básicamente un lobo solitario. No es sensitivo a las actividades y sentimientos del grupo.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickO']>=7 && $Kostick['KostickO']<=9){
							echo '<p style="font-style: italic">             De acercamiento y afecto (afinidad): Puede ser lastimado profundamente. Evalúa lo que le dicen en términos de sí es o no apreciado. Tiende a perjudicarse cuando juzga a otros porque vive en un mundo emocional controlado por relaciones interpersonales intensas.&nbsp;</p>';
						}
						if($Kostick['KostickO']==0){
							echo '<p style="font-style: italic">             De acercamiento y afecto (afinidad): Se resiste a intimar con las personas. Sería incompatible con puntuaciones altas en esta letra.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickZ']==9){
							echo '<p style="font-style: italic">             De cambio/no modificar: Es un soñador. Puede involucrarse tanto en la teoría que puede no hacer mucho en las situaciones prácticas y concretas.&nbsp;</p>';
						}
						if($Kostick['KostickZ']>=0 && $Kostick['KostickZ']<=1){
							echo '<p style="font-style: italic">             De cambio/no modificar: Es el tipo de "vara en el lodo" y ofrece resistencia al cambio.&nbsp;</p>';
						}
						
						/////////
						if($Kostick['KostickK']>=7 && $Kostick['KostickK']<=9){
							echo '<p style="font-style: italic">             De ser agresivo/pasivo: Se ofende con facilidad. Tiene una "basura en el hombro" y es fácil de malinterpretar negativamente lo que se le dice.&nbsp;</p>';
						}
						if($Kostick['KostickK']>=0 && $Kostick['KostickK']<=2){
							echo '<p style="font-style: italic">             De ser agresivo/pasivo: Es un introvertido emocionalmente que trata de embotellar sus sentimientos y tiene problema para enfrentarse a los conflictos.&nbsp;</p>';
						}
						
						////////
						if($Kostick['KostickF']>=7 && $Kostick['KostickF']<=9){
							echo '<p style="font-style: italic">             De apoyo del supervisor o autoridad: No está preocupado en cuanto a agradar a su jefe. Raras veces toma la posición de estar fuertemente en contra de una posición.&nbsp;</p>';
						}
						if($Kostick['KostickF']>=0 && $Kostick['KostickF']<=2){
							echo '<p style="font-style: italic">             De apoyo del supervisor o autoridad: Tiende a ser rebelde, está pronto a retar a la autoridad y bajarla de pedestal.&nbsp;</p>';
						}
						
						///////
						if($Kostick['KostickW']>=7 && $Kostick['KostickW']<=9){
							echo '<p style="font-style: italic">             De reglas y supervisión: No le agradan las reglas o tiene conflicto con ellas. No es autónomo.&nbsp;</p>';
						}
						if($Kostick['KostickW']>=0 && $Kostick['KostickW']<=2){
							echo '<p style="font-style: italic">             De reglas y supervisión: Tiene dificultad en seguir las reglas exactamente en la forma en que están establecidas. Le gusta ir y venir a su antojo.&nbsp;</p>';
						}
                        ?>
						  
						  
						  
						  <?php
					}
				}
					
		////////////////////////// FIN DE RESULTADOS KOSTICK
		  
		   ////////////////// INICIA RESULTADOS TERMAN
		  
	  include("Conexion2.php");
			$query2=mysqli_query($cnx,"select StatusCleaver,StatusIPV,StatusKostick,TermanI, TermanII,TermanIII,TermanIV, TermanV, TermanVI, TermanVII,TermanVIII,TermanIX, TermanX from candidatos where Nombre='$nombreperfil' and StatusTerman='No'");
						
			if(mysqli_num_rows($query2)<=0) { 
			    //die(mysql_error()); // TODO: better error handling
				}else{
					if($Terman=mysqli_fetch_array($query2)){
		?>
						  
						  
						  
			  </p>
						<p><h2>RESULTADOS DEL EXAMEN TERMAN</h2>
						  <script type="text/javascript">
		$(function () {
    $('#containerterman').highcharts({
        title: {
            text: 'RESULTADOS',
            x: -20 //center
        },
        subtitle: {
            text: 'Terman',
            x: -20
        },
        xAxis: {
            categories: ['Información','Juicio','Vocabulario','Síntesis','Concentración','Análisis','Abstracción','Planeación','Organización','Atención']
        },
        yAxis: {
            title: {
                text: 'VALOR'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Resultados',
            data: [<?php echo ($Terman['TermanI']*100)/16;?>,<?php echo ($Terman['TermanII']*100)/22;?>,<?php echo ($Terman['TermanIII']*100)/30;?>,<?php echo ($Terman['TermanIV']*100)/18;?>,<?php echo ($Terman['TermanV']*100)/24;?>,<?php echo ($Terman['TermanVI']*100)/20;?>,<?php echo ($Terman['TermanVII']*100)/20;?>,<?php echo ($Terman['TermanVIII']*100)/17;?>,<?php echo ($Terman['TermanIX']*100)/18;?>,<?php echo ($Terman['TermanX']*100)/22;?>]
        }]
    });
});
		                </script>
			 <?php
        if($Terman['StatusCleaver']!="No" && $Terman['StatusIPV']!="No" && $Terman['StatusKostick']!="No"){
				echo '<script src="https://code.highcharts.com/highcharts.js"></script>';
		      	echo '<script src="https://code.highcharts.com/modules/exporting.js"></script>';
		}
        ?>			  
						  
						  
						  
			  </p>
						<div id="containerterman">Colocar aquí el contenido para  id "containerterman"</div>
						<p>&nbsp;</p>
						<table width="100%" border="0" align="center">
						  <tr>
						    <th>SERIE</th>
						    <th>Categoría</th>
						    <th>Puntuación</th>
						    <th>Rango</th>
					      </tr>
						  <tr>
						    <td>I</td>
						    <td>Información</td>
						    <td><?php echo $Terman['TermanI'];?>&nbsp;</td>
						    <td>
<?php if($Terman['TermanI']==16){echo '<p style="font-style: italic">Sobresaliente.&nbsp;</p>'; }?>
<?php if($Terman['TermanI']==15){echo '<p style="font-style: italic">Superior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanI']==14){echo '<p style="font-style: italic">Térm. M. A.&nbsp;</p>'; }?> 
<?php if($Terman['TermanI']>=12 && $Terman['TermanI']<=13){echo '<p style="font-style: italic">Térm. Medio.&nbsp;</p>'; }?> 
<?php if($Terman['TermanI']>=10 && $Terman['TermanI']<=11){echo '<p style="font-style: italic">Térm. M. B.&nbsp;</p>'; }?> 
<?php if($Terman['TermanI']>=8 && $Terman['TermanI']<=9){echo '<p style="font-style: italic">Inferior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanI']<=7){echo '<p style="font-style: italic">Deficiente.&nbsp;</p>'; }?> 
                         
                            
                            
                            </td>
					      </tr>
						  <tr>
						    <td>II</td>
						    <td>Juicio</td>
						    <td><?php echo $Terman['TermanII'];?>&nbsp;</td>
						    <td>
<?php if($Terman['TermanII']==22){echo '<p style="font-style: italic">Sobresaliente.&nbsp;</p>'; }?>
<?php if($Terman['TermanII']>=20 && $Terman['TermanII']<=21){echo '<p style="font-style: italic">Superior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanII']>=18 && $Terman['TermanII']<=19){echo '<p style="font-style: italic">Térm. M. A.&nbsp;</p>'; }?> 
<?php if($Terman['TermanII']>=12 && $Terman['TermanII']<=17){echo '<p style="font-style: italic">Térm. Medio.&nbsp;</p>'; }?> 
<?php if($Terman['TermanII']>=10 && $Terman['TermanII']<=11){echo '<p style="font-style: italic">Térm. M. B.&nbsp;</p>'; }?> 
<?php if($Terman['TermanII']>=8 && $Terman['TermanII']<=9){echo '<p style="font-style: italic">Inferior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanII']<=7){echo '<p style="font-style: italic">Deficiente.&nbsp;</p>'; }?> 
                            
                            </td>
					      </tr>
						  <tr>
						    <td>III</td>
						    <td>Vocabulario</td>
						    <td><?php echo $Terman['TermanIII'];?>&nbsp;</td>
						    <td>
<?php if($Terman['TermanIII']>=29 && $Terman['TermanIII']<=30){echo '<p style="font-style: italic">Sobresaliente.&nbsp;</p>'; }?>
<?php if($Terman['TermanIII']>=27 && $Terman['TermanIII']<=28){echo '<p style="font-style: italic">Superior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIII']>=23 && $Terman['TermanIII']<=26){echo '<p style="font-style: italic">Térm. M. A.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIII']>=14 && $Terman['TermanIII']<=22){echo '<p style="font-style: italic">Térm. Medio.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIII']>=12 && $Terman['TermanIII']<=13){echo '<p style="font-style: italic">Térm. M. B.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIII']>=8 && $Terman['TermanIII']<=11){echo '<p style="font-style: italic">Inferior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIII']<=7){echo '<p style="font-style: italic">Deficiente.&nbsp;</p>'; }?> 
                            
                            
                            </td>
					      </tr>
						  <tr>
						    <td>IV</td>
						    <td>Síntesis</td>
						    <td><?php echo $Terman['TermanIV'];?>&nbsp;</td>
						    <td>
<?php if($Terman['TermanIV']==18){echo '<p style="font-style: italic">Sobresaliente.&nbsp;</p>'; }?>
<?php if($Terman['TermanIV']>=16 && $Terman['TermanIV']<=17){echo '<p style="font-style: italic">Superior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIV']>=14 && $Terman['TermanIV']<=15){echo '<p style="font-style: italic">Térm. M. A.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIV']>=10 && $Terman['TermanIV']<=13){echo '<p style="font-style: italic">Térm. Medio.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIV']>=7 && $Terman['TermanIV']<=9){echo '<p style="font-style: italic">Térm. M. B.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIV']==6){echo '<p style="font-style: italic">Inferior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIV']<=5){echo '<p style="font-style: italic">Deficiente.&nbsp;</p>'; }?> 
                            </td>
					      </tr>
						  <tr>
						    <td>V</td>
						    <td>Concentración</td>
						    <td><?php echo $Terman['TermanV'];?>&nbsp;</td>
						    <td>
<?php if($Terman['TermanV']==24){echo '<p style="font-style: italic">Sobresaliente.&nbsp;</p>'; }?>
<?php if($Terman['TermanV']>=20 && $Terman['TermanV']<=22){echo '<p style="font-style: italic">Superior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanV']>=16 && $Terman['TermanV']<=18){echo '<p style="font-style: italic">Térm. M. A.&nbsp;</p>'; }?> 
<?php if($Terman['TermanV']>=12 && $Terman['TermanV']<=14){echo '<p style="font-style: italic">Térm. Medio.&nbsp;</p>'; }?> 
<?php if($Terman['TermanV']>=8 && $Terman['TermanV']<=10){echo '<p style="font-style: italic">Térm. M. B.&nbsp;</p>'; }?> 
<?php if($Terman['TermanV']==6){echo '<p style="font-style: italic">Inferior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanV']<=4){echo '<p style="font-style: italic">Deficiente.&nbsp;</p>'; }?> 
                            </td>
					      </tr>
						  <tr>
						    <td>VI</td>
						    <td>Análisis</td>
						    <td><?php echo $Terman['TermanVI'];?>&nbsp;</td>
						    <td>
<?php if($Terman['TermanVI']==20){echo '<p style="font-style: italic">Sobresaliente.&nbsp;</p>'; }?>
<?php if($Terman['TermanVI']>=18 && $Terman['TermanVI']<=19){echo '<p style="font-style: italic">Superior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVI']>=15 && $Terman['TermanVI']<=17){echo '<p style="font-style: italic">Térm. M. A.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVI']>=9 && $Terman['TermanVI']<=14){echo '<p style="font-style: italic">Térm. Medio.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVI']>=7 && $Terman['TermanVI']<=8){echo '<p style="font-style: italic">Térm. M. B.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVI']>=5 && $Terman['TermanVI']<=6){echo '<p style="font-style: italic">Inferior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVI']<=4){echo '<p style="font-style: italic">Deficiente.&nbsp;</p>'; }?> 
                            </td>
					      </tr>
						  <tr>
						    <td>VII</td>
						    <td>Abstracción</td>
						    <td><?php echo $Terman['TermanVII'];?>&nbsp;</td>
						    <td>
<?php if($Terman['TermanVII']>=19 && $Terman['TermanVII']<=20){echo '<p style="font-style: italic">Sobresaliente.&nbsp;</p>'; }?>
<?php if($Terman['TermanVII']==18){echo '<p style="font-style: italic">Superior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVII']>=16 && $Terman['TermanVII']<=17){echo '<p style="font-style: italic">Térm. M. A.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVII']>=9 && $Terman['TermanVII']<=15){echo '<p style="font-style: italic">Térm. Medio.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVII']>=6 && $Terman['TermanVII']<=8){echo '<p style="font-style: italic">Térm. M. B.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVII']==5){echo '<p style="font-style: italic">Inferior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVII']<=4){echo '<p style="font-style: italic">Deficiente.&nbsp;</p>'; }?> 
                            </td>
					      </tr>
						  <tr>
						    <td>VIII</td>
						    <td>Planeación</td>
						    <td><?php echo $Terman['TermanVIII'];?>&nbsp;</td>
						    <td>
<?php if($Terman['TermanVIII']==17){echo '<p style="font-style: italic">Sobresaliente.&nbsp;</p>'; }?>
<?php if($Terman['TermanVIII']>=15 && $Terman['TermanVIII']<=16){echo '<p style="font-style: italic">Superior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVIII']>=13 && $Terman['TermanVIII']<=14){echo '<p style="font-style: italic">Térm. M. A.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVIII']>=8 && $Terman['TermanVIII']<=12){echo '<p style="font-style: italic">Térm. Medio.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVIII']==7){echo '<p style="font-style: italic">Térm. M. B.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVIII']==6){echo '<p style="font-style: italic">Inferior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanVIII']<=5){echo '<p style="font-style: italic">Deficiente.&nbsp;</p>'; }?> 
                            </td>
					      </tr>
						  <tr>
						    <td>IX</td>
						    <td>Organización</td>
						    <td><?php echo $Terman['TermanIX'];?>&nbsp;</td>
						    <td>
<?php if($Terman['TermanIX']==18){echo '<p style="font-style: italic">Sobresaliente.&nbsp;</p>'; }?>
<?php if($Terman['TermanIX']==17){echo '<p style="font-style: italic">Superior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIX']==16){echo '<p style="font-style: italic">Térm. M. A.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIX']>=10 && $Terman['TermanIX']<=15){echo '<p style="font-style: italic">Térm. Medio.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIX']==9){echo '<p style="font-style: italic">Térm. M. B.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIX']>=7 && $Terman['TermanIX']<=8){echo '<p style="font-style: italic">Inferior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanIX']<=6){echo '<p style="font-style: italic">Deficiente.&nbsp;</p>'; }?> 
                            </td>
					      </tr>
						  <tr>
						    <td>X</td>
						    <td>Atención</td>
						    <td><?php echo $Terman['TermanX'];?>&nbsp;</td>
						    <td>
<?php if($Terman['TermanX']>=20 && $Terman['TermanX']<=22){echo '<p style="font-style: italic">Sobresaliente.&nbsp;</p>'; }?>
<?php if($Terman['TermanX']==18){echo '<p style="font-style: italic">Superior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanX']==16){echo '<p style="font-style: italic">Térm. M. A.&nbsp;</p>'; }?> 
<?php if($Terman['TermanX']>=10 && $Terman['TermanX']<=14){echo '<p style="font-style: italic">Térm. Medio.&nbsp;</p>'; }?> 
<?php if($Terman['TermanX']==8){echo '<p style="font-style: italic">Térm. M. B.&nbsp;</p>'; }?> 
<?php if($Terman['TermanX']==6){echo '<p style="font-style: italic">Inferior.&nbsp;</p>'; }?> 
<?php if($Terman['TermanX']<=4){echo '<p style="font-style: italic">Deficiente.&nbsp;</p>'; }?> 
                            </td>
					      </tr>
			  </table>
						<p>&nbsp;</p>
						<p>Puntos Totales: <?php echo $puntosTerman=$Terman['TermanI']+$Terman['TermanII']+$Terman['TermanIII']+$Terman['TermanIV']+$Terman['TermanV']+$Terman['TermanVI']+$Terman['TermanVII']+$Terman['TermanVIII']+$Terman['TermanIX']+$Terman['TermanX'] ;?></p>
						
						<p>C.I. <?php 
						if($puntosTerman>=0 && $puntosTerman<=3){echo $ciTerman=54;}
						if($puntosTerman>=4 && $puntosTerman<=6){echo $ciTerman=55;}
						if($puntosTerman>=7 && $puntosTerman<=8){echo $ciTerman=56;}
						if($puntosTerman>=9 && $puntosTerman<=10){echo $ciTerman=57;}		
						if($puntosTerman>=11 && $puntosTerman<=13){echo $ciTerman=58;}
						if($puntosTerman>=14 && $puntosTerman<=16){echo $ciTerman=59;}
						if($puntosTerman>=17 && $puntosTerman<=18){echo $ciTerman=60;}
						if($puntosTerman>=19 && $puntosTerman<=21){echo $ciTerman=61;}
						if($puntosTerman>=22 && $puntosTerman<=23){echo $ciTerman=62;}
						if($puntosTerman>=24 && $puntosTerman<=26){echo $ciTerman=63;}
						if($puntosTerman>=27 && $puntosTerman<=28){echo $ciTerman=64;}
						if($puntosTerman>=29 && $puntosTerman<=31){echo $ciTerman=65;}
						if($puntosTerman>=32 && $puntosTerman<=33){echo $ciTerman=66;}
						if($puntosTerman>=34 && $puntosTerman<=36){echo $ciTerman=67;}
						if($puntosTerman>=37 && $puntosTerman<=38){echo $ciTerman=68;}
						if($puntosTerman>=39 && $puntosTerman<=41){echo $ciTerman=69;}
						if($puntosTerman>=42 && $puntosTerman<=43){echo $ciTerman=70;}
						if($puntosTerman>=44 && $puntosTerman<=46){echo $ciTerman=71;}
						if($puntosTerman>=47 && $puntosTerman<=48){echo $ciTerman=72;}
						if($puntosTerman>=49 && $puntosTerman<=51){echo $ciTerman=73;}
						if($puntosTerman>=52 && $puntosTerman<=53){echo $ciTerman=74;}
						if($puntosTerman>=54 && $puntosTerman<=56){echo $ciTerman=75;}
						if($puntosTerman>=57 && $puntosTerman<=58){echo $ciTerman=76;}
						if($puntosTerman>=59 && $puntosTerman<=61){echo $ciTerman=77;}
						if($puntosTerman>=62 && $puntosTerman<=63){echo $ciTerman=78;}
						if($puntosTerman>=64 && $puntosTerman<=66){echo $ciTerman=79;}
						if($puntosTerman>=67 && $puntosTerman<=69){echo $ciTerman=80;}
						if($puntosTerman>=70 && $puntosTerman<=71){echo $ciTerman=81;}
						if($puntosTerman>=72 && $puntosTerman<=74){echo $ciTerman=82;}
						if($puntosTerman>=75 && $puntosTerman<=76){echo $ciTerman=83;}
						if($puntosTerman>=77 && $puntosTerman<=80){echo $ciTerman=84;}
						if($puntosTerman>=81 && $puntosTerman<=82){echo $ciTerman=85;}
						if($puntosTerman>=83 && $puntosTerman<=85){echo $ciTerman=86;}
						if($puntosTerman==86){echo $ciTerman=87;}
						if($puntosTerman>=87 && $puntosTerman<=90){echo $ciTerman=88;}
						if($puntosTerman>=91 && $puntosTerman<=93){echo $ciTerman=89;}
						if($puntosTerman>=94 && $puntosTerman<=96){echo $ciTerman=90;}
						if($puntosTerman>=97 && $puntosTerman<=99){echo $ciTerman=91;}
						if($puntosTerman>=100 && $puntosTerman<=102){echo $ciTerman=92;}
						if($puntosTerman>=103 && $puntosTerman<=104){echo $ciTerman=93;}
						if($puntosTerman>=105 && $puntosTerman<=106){echo $ciTerman=94;}
						if($puntosTerman>=107 && $puntosTerman<=110){echo $ciTerman=95;}
						if($puntosTerman>=111 && $puntosTerman<=113){echo $ciTerman=96;}
						if($puntosTerman>=114 && $puntosTerman<=116){echo $ciTerman=97;}
						if($puntosTerman>=117 && $puntosTerman<=119){echo $ciTerman=98;}
						if($puntosTerman>=120 && $puntosTerman<=123){echo $ciTerman=99;}
						if($puntosTerman>=124 && $puntosTerman<=125){echo $ciTerman=100;}
						if($puntosTerman>=126 && $puntosTerman<=129){echo $ciTerman=101;}
						if($puntosTerman>=130 && $puntosTerman<=133){echo $ciTerman=102;}
						if($puntosTerman>=134 && $puntosTerman<=137){echo $ciTerman=103;}
						if($puntosTerman>=138 && $puntosTerman<=141){echo $ciTerman=104;}
						if($puntosTerman>=142 && $puntosTerman<=145){echo $ciTerman=105;}
						if($puntosTerman>=146 && $puntosTerman<=149){echo $ciTerman=106;}
						if($puntosTerman>=150 && $puntosTerman<=153){echo $ciTerman=107;}
						if($puntosTerman>=154 && $puntosTerman<=157){echo $ciTerman=108;}
						if($puntosTerman>=158 && $puntosTerman<=159){echo $ciTerman=109;}
						if($puntosTerman>=160 && $puntosTerman<=162){echo $ciTerman=110;}
						if($puntosTerman>=163 && $puntosTerman<=166){echo $ciTerman=111;}
						if($puntosTerman==167){echo $ciTerman=112;}
						if($puntosTerman>=168 && $puntosTerman<=170){echo $ciTerman=113;}
						if($puntosTerman>=171 && $puntosTerman<=173){echo $ciTerman=114;}
						if($puntosTerman>=174 && $puntosTerman<=175){echo $ciTerman=115;}
						if($puntosTerman>=176 && $puntosTerman<=177){echo $ciTerman=116;}
						if($puntosTerman>=178 && $puntosTerman<=180){echo $ciTerman=117;}
						if($puntosTerman>=181 && $puntosTerman<=183){echo $ciTerman=118;}
						if($puntosTerman>=184 && $puntosTerman<=185){echo $ciTerman=119;}
						if($puntosTerman==186){echo $ciTerman=120;}
						if($puntosTerman==187){echo $ciTerman=121;}
						if($puntosTerman==188){echo $ciTerman=122;}
						if($puntosTerman==189){echo $ciTerman=123;}
						if($puntosTerman==190){echo $ciTerman=124;}
						if($puntosTerman==191){echo $ciTerman=125;}
						if($puntosTerman==192){echo $ciTerman=126;}
						if($puntosTerman==193){echo $ciTerman=127;}
						if($puntosTerman==194){echo $ciTerman=128;}
						if($puntosTerman==195){echo $ciTerman=129;}
						if($puntosTerman==196){echo $ciTerman=130;}
						if($puntosTerman==197){echo $ciTerman=131;}
						if($puntosTerman==198){echo $ciTerman=132;}
						if($puntosTerman==199){echo $ciTerman=133;}
						if($puntosTerman==200){echo $ciTerman=134;}
						if($puntosTerman==201){echo $ciTerman=135;}
						if($puntosTerman==202){echo $ciTerman=136;}
						if($puntosTerman==203){echo $ciTerman=137;}
						if($puntosTerman==204){echo $ciTerman=138;}
						if($puntosTerman==205){echo $ciTerman=139;}
						if($puntosTerman==206){echo $ciTerman=140;}
						if($puntosTerman==207){echo $ciTerman=141;}
						
						
						
						?> </p>
                        
                        <p>Rango: <?php
                        if($ciTerman>=54 && $ciTerman<=69){echo "Deficiente.";}
						if($ciTerman>=70 && $ciTerman<=79){echo "Inferior.";}
						if($ciTerman>=80 && $ciTerman<=89){echo "Término Medio Bajo.";}
						if($ciTerman>=90 && $ciTerman<=109){echo "Término Medio.";}
						if($ciTerman>=110 && $ciTerman<=119){echo "Tèrmino Medio Alto.";}
						if($ciTerman>=120 && $ciTerman<=139){echo "Superior.";}
						if($ciTerman>=140 && $ciTerman<=141){echo "Sobresaliente.";}
                        ?>
                        </p>
                        
						<p>&nbsp;</p>
						<?php }
}
///////// FIN DE RESULTADOS TERMAN
		  
		  
		  

		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

		  
		  ?>
          
          </div>
          
          <p>&nbsp;</p>
                           
          </form>
          <p><a href="IndexAdministrador.php" target="_parent">REGRESAR</a> </p>  
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
          <p><a href="info@sitename.com">vw@vwdgo.com</a></p>
        </div>
      </div>
    
    </div>
  </div>
  <div class="clear"></div>
</div>
 
<!----footer-wrapper-------->
<!-- end of WRAPPER -->
</body>
<?php
}
?>
</html>



