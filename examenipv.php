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


$I=0;
$II=0;
$III=0;
$IV=0;
$V=0;
$VI=0;
$VII=0;
$VIII=0;
$IX=0;
$DGV=0;
$R=0;
$A=0;
$I2=0;
$II2=0;
$III2=0;
$IV2=0;
$V2=0;
$VI2=0;
$VII2=0;
$VIII2=0;
$IX2=0;
$DGV2=0;
$R2=0;
$A2=0;

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examen IPV</title>
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
                  <h1>EXAMEN IPV</h1>
                  <p>LEA ESTO CON MUCHA ATENCIÓN</p>
                  <p> En las páginas siguientes encontrará cierto número de situaciones y de preguntas seguidas de varias respuestas posibles. SE LE PIDE QUE ESCOJA UNA ALTERNATIVA - Y UNA SOLA - PARA CADA PREGUNTA; la que de manera espontáneale parezca preferible.</p>
                  <p><strong>En algunas cuestiones estará usted personalmente implicado; por ejemplo:-</strong></p>
                  <p>Si usted pudiera elegir el tipo de vivienda de manera completamente libre, ¿qué preferiría?:                    </p>
                  <p>A. Una casa en el campo con un gran jardín.                                                                                                                </p>
                  <p>B. Un lujoso apartamento en una gran ciudad.                                                                                                                 </p>
                  <p>C. Una casa situada en una calle tranquila de una pequeña ciudad. </p>
                  <p><strong>Otras se refieren a personas ajenas, como:-</strong></p>
                  <p><br />
                    J... está comprando en un gran almacén cuando advierte que alguien esconde discretamente un disco bajosu jersey. ¿Qué hará J...?:</p>
                  <p>A. Dar cuenta del hecho al primer vendedor que encuentre.                                                                                    </p>
                  <p>B. No hacer nada porque piensa que no es cosa suya.                                                                                             </p>
                  <p>C. Indicar al infractor con el gesto o de palabra que ha visto lo que ha hecho.</p>
                  <p>En este caso, usted contestará lo que, según su propia opinión, es más probable que haga J...</p>
                  <p>En realidad, no hay respuestas buenas ni malas: cada uno piensa y actúa como cree conveniente en función  de su carácter,de sus intereses, etc. </p>
                  <p><strong>PREGUNTAS:</strong>                  
                  <p>1. T... Debe salir de viaje con una persona de la que no conoce nada. ¿Sobre cuál  de los siguientes aspectos de esa persona es preferible informar a T. para que el viaje resulte mejor?</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><P>
                        <input type="radio" name="e1" id="radio" value="e1a" />
                        <label for="e1">A. Su estilo de vida</label>
                      </P>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e1" id="radio2" value="e1b" />
                        <label for="e1">B. Los puntos que tengan en común</label>
                      </p>                        &nbsp;</td>
                      <td><P>
                        <input type="radio" name="e1" id="radio3" value="e1c" />
                        <label for="e1">C. Su actividad y responsabilidades profesionales</label>
                      </P>                        &nbsp;</td>
                    </tr>
                  </table>
                  <p></p>                
                  <p>2. Entre los siguientes tipos de vendedores de prendas confeccionadas, ¿Cuál es el que tiene más probabilidades de éxito?.</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e2" id="radio4" value="e2a" />
                        <label for="radio4">A. El que presente las últimas novedades.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e2" id="radio5" value="e2b" />
                        <label for="radio5">B. El que, tratando de conocer el estilo de su cliente, se interese por su modo de vida.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e2" id="radio6" value="e2c" />
                        <label for="radio6">C. El que posea una buena capacidad de convencer.</label>
                      </p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p></p>
                  <p>3. B...Tiene un proyecto importante para la promoción de un nuevo producto y va a exponer su idea ante el Comité de Dirección. ¿Cuál de las siguientes cualidades le será mas útil para persuadir a su auditorio?</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e3" id="radio7" value="e3a" />
                        <label for="radio7">A. Competencia técnica y un conocimiento perfecto del tema..</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e3" id="radio8" value="e3b" />
                        <label for="radio8">B. Capacidad para modificar sus razonamientos según la actitud del auditorio.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e3" id="radio9" value="e3c" />
                        <label for="radio9">C. Facultad para mantener el orden de sus ideas a pesar de las interrupciones.</label>
                      </p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p></p>
                  <p>4. Se envía a G..., contra su voluntad, a un país extranjero, por el cual no se siente atraído en principio, para una estancia de varias semanas. ¿Cuál será su actitud?</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e4" id="radio10" value="e4a" />
                        <label for="radio10">A. Estimar que la duración de su estancia es demasiado corta para conseguir integrarse.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e4" id="radio11" value="e4b" />
                        <label for="radio11"></label>
                        B. Tratar de aprender la lengua para comprender mejor a este país y vivir más a gusto en el.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e4" id="radio12" value="e4c" />
                        <label for="radio12"></label>
                        C. No tener más que los contactos estrictamente necesarios para la buena marcha de su trabajo.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>5. Según su opinión, las personas que dicen siempre «su» verdad a los demás, aunque ésta sea desagradable, lo hacen, en general, porque:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e5" id="radio13" value="e5a" />
                        <label for="radio13">A. No saben controlar sus impulsos y dicen espontáneamente lo que piensan.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e5" id="radio14" value="e5b" />
                        B. No les gusta la hipocresía</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e5" id="radio15" value="e5c" />
                        C. Piensan que esto simplifica las relaciones.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>6. Un buen amigo de C... había comenzado bastante brillantemente su carrera profesional, pero los resultados no han sido los que cabria esperar y termino teniendo numerosos fracasos. ¿Qué piensa C... acerca de ésto?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e6" id="radio16" value="e6a" />
                        <label for="radio16"></label>
                        A. Que las condiciones no le han sido favorables.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e6" id="radio17" value="e6b" />
                        <label for="radio17"></label>
                        B. Que no estaba a la altura necesaria</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e6" id="radio18" value="e6c" />
                        <label for="radio18"></label>
                        C. Que no ha utilizado bien los medios para salir adelante.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>7. B.. encuentra, en casa de unos amigos, a una persona que aparenta una edad muy inferior a la que realmente tiene¿Qué opinará B...?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e7" id="radio19" value="e7a" />
                        <label for="radio19"></label>
                        A.«Probablemente ha encontrado en la vida la que le convenía»</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e7" id="radio20" value="e7b" />
                        B.«Tiene buena suerte; es cuestión de naturaleza»</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e7" id="radio21" value="e7c" />
                        <label for="radio21">C.«Seguramente ha tenido una vida fácil»</label>
                      </p></td>
                    </tr>
                  </table>
                  <p>8. Para expansionarse, S... decide aprender judo. Después de unos meses de entrenamiento se da cuenta de que progresa muy lentamente. ¿Cuál será su reacción?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e8" id="radio22" value="e8a" />
                        <label for="radio22">A. Pensando que realmente no esta hecho para el judo, elegirá otro deporte.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e8" id="radio23" value="e8b" />
                        <label for="radio23"></label>
                        B. Convencido de que no está dotado para las actividades corporales buscará otra forma de actividad.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e8" id="radio24" value="e8c" />
                        C. Continuará sus esfuerzos con la esperanza de que seguramente serán un día coronados por el éxito.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>9. P... se acuesta una noche  muy fatigado, pero no puede dormirse porque sus vecinos del piso superior han organizado una fiesta muy ruidosa. ¿Qué hará?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e9" id="radio25" value="e9a" />
                        A. Subir y advertir a sus vecinos.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e9" id="radio26" value="e9b" />
                        B. Dar con la escoba algunos golpes en el techo.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e9" id="radio27" value="e9c" />
                        <label for="radio27"></label>
                        C. Tomar un somnífero y tratar de dormir cueste lo que cueste.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>10. G..., que carece de teléfono, llega a una oficina de telégrafos para enviar un telegrama a la hora de cerrar. El encargado le dice que es demasiado tarde, que va a cerrar. ¿Qué hará G...?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e10" id="radio28" value="e10a" />
                        A. Ir a casa de un amigo que tiene teléfono para poner el telegrama por teléfono.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e10" id="radio29" value="e10b" />
                        <label for="radio29"></label>
                        B. Convencer al encargado de que su telegrama es muy urgente y que debe salir inmediatamente.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e10" id="radio30" value="e10c" />
                        <label for="radio30"></label>
                        C. Ir a una oficina de telégrafos que cierra mas tarde.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>11. X... hace un viaje de turismo por un país en que es costumbre discutir los precios. ¿Cuál será su actitud?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e11" id="radio31" value="e11a" />
                        A. Hará pocas compras porque le molesta tener que discutir siempre.                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e11" id="radio32" value="e11b" />
                        <label for="radio32"></label>
                        B. Hará numerosas compras, incluso un poco inútiles, porque le encanta discutir los precios.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e11" id="radio33" value="e11c" />
                        <label for="radio33"></label>
                        C. Convencido de que le timarían, preferirá los almacenes de precios fijos.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>12. Sin tener en cuenta la formación y competencia necesarias, ¿cuál de las siguientes direcciones de servicios le gustaría asumir?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e12" id="radio34" value="e12a" />
                        <label for="radio34">A. Gestión.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e12" id="radio35" value="e12b" />
                        <label for="radio35"></label>
                        B. Personal.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e12" id="radio36" value="e12c" />
                        C. Publicidad.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>13. Un escritor poco conocido acaba de recibir el premio Planeta. ¿Qué cree usted que preferirá hacer?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e13" id="radio37" value="e13a" />
                        A. Escribir menos y aprovecharse de su éxito para salir, recibir a la gente y a hacer una vida de sociedad.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e13" id="radio38" value="e13b" />
                        <label for="radio38"></label>
                        B. Intentar escribir una obra maestra.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e13" id="radio39" value="e13c" />
                        C. Dedicarse a la pintura e intentar triunfar también en ella.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>14. Si usted se encontrara en una situación de examen en la que pudiera elegir entre dos temas, ¿cuál escogería?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e14" id="radio40" value="e14a" />
                        A. Un tema ampliamente tratado durante el curso con el que tiene, casi, la plena seguridad de alcanzar la nota media necesaria.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e14" id="radio41" value="e14b" />
                        <label for="radio41"></label>
                        B. Un tema que le permita con un minimo de conocimientos, pero con mucha lógica e imaginación, obtener una calificación muy buena pero, quizá, también muy mala.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e14" id="radio42" value="e14c" />
                        <label for="radio42">C.</label>
                      </p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>15. Entre las siguientes actividades de descanso físico en la naturaleza, ¿cuál prefiere usted?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e15" id="radio43" value="e15a" />
                        A. Una vuelta por la bahía cuando el mar está agitado.
                        <label for="radio43">.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e15" id="radio44" value="e15b" />
                        B. Un baño de sol en una playa de arena fina, en un hermoso día de verano con el aire en calma.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e15" id="radio45" value="e15c" />
                        <label for="radio45"></label>
                        C. Un paseo por el campo en primavera.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>16. ¿Que es, a su juicio, lo que atrae a más gente en los viajes o estancias en el extranjero?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e16" id="radio46" value="e16a" /><label for="radio46">A. Los paisajes nuevos.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e16" id="radio47" value="e16b" />
                      B. El descubrimiento de otra civilización artística.</p></td>
                      <td><p>
                        <input type="radio" name="e16" id="radio48" value="e16c" />
                      C. El contacto con una población de costumbres muy diferentes.</p></td>
                    </tr>
                  </table>
                  <p>17. P... camina rápidamente por la calle y parece que tiene prisa. Un joven que realiza una encuesta le detiene para hacerle algunas preguntas extrañas, pero divertidas. ¿Qué hará P...?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e17" id="radio49" value="e17a" />
                        <label for="radio49">A. Rehusar con firmeza contestar a las preguntas.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e17" id="radio50" value="e17b" />
                        B. Responder rápidamente, porque lo encuentra divertido.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e17" id="radio51" value="e17c" />
                        <label for="radio51"></label>
                        C. Excusarse de no tener tiempo para responder, sintiendo de verdad no poder hacerlo.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>18. L... trabaja en una empresa en que recibe muy pocas informaciones a nivel oficial. ¿Qué opina usted de ello?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e18" id="radio52" value="e18a" />
                        <label for="radio52">A. Que será muy difícil obtener información.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e18" id="radio53" value="e18b" />
                        <label for="radio53"></label>
                        B. Que con los «rumores de pasillo», eso no constituye problema.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e18" id="radio54" value="e18c" />
                        <label for="radio54"></label>
                        C. Que, de hecho, es muy fácil estar informado; bastará conocer a algunas personas bien situadas.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>19. Son las once de la noche. Hay numerosos vehículos estacionados en la calle, algunos de ellos sobre las acera. P... ve desde su ventana a uno que trata de abrir la puerta de un coche; parece que no tiene llave y utiliza un destornillador. ¿Cuál será la reacción?</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e19" id="radio55" value="e19a" />
                        A. «Probablemente es un ratero que trata de robar un coche. ¿Y si yo llamase a la policía?»
                        <label for="radio55">.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e19" id="radio56" value="e19b" />
                        B. «Alguien ha quedado atrapado en la acera y trata de mover un coche para salir»</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e19" id="radio57" value="e19c" />
                        <label for="radio57"></label>
                        C. «¿Qué estará haciendo? Parece que utiliza un destornillador»</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>20. Cuando un niño ha cometido una gran tontería, ¿cuál es, a su modo de ver, la mejor reacción?</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e20" id="radio58" value="e20a" />
                        <label for="radio58">A. Castigarle, explicándole por qué se hace..</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e20" id="radio59" value="e20b" />
                        <label for="radio59"></label>
                        B. Explicarle la significación de su tontería situándola en su contexto.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e20" id="radio60" value="e20c" />
                        <label for="radio60"></label>
                        C. Apelar al amor propio del niño.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>21. B... tiene varios hijos y ha decidido intervenir en la educación sexual de cada uno de ellos. ¿Qué procedimiento le parece a usted que adoptará probablemente?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e21" id="radio61" value="e21a" />
                        <label for="radio61">A. Reflexionar sobre el asunto y preparar, con el hijo mayor, un tipo de intervención que luego mantendrá con los demás hijos..</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e21" id="radio62" value="e21b" />
                        <label for="radio62"></label>
                        B. Seguir su intuición o sus sentimientos.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e21" id="radio63" value="e21c" />
                        <label for="radio63">C. Adoptar un modo de proceder distinto para cada hijo.</label>
                      </p></td>
                    </tr>
                  </table>
                  <p>22. ¿Cuál es para un niño la manera más «astuta» de presentar unas calificaciones escolares poco brillantes?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e22" id="radio64" value="e22a" />
                        <label for="radio64">A. Enseñarlas lo antes posible para librarse de ello.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e22" id="radio65" value="e22b" />
                      B. Presentarlas el lunes a la hora del desayuno.</p></td>
                      <td><p>
                        <input type="radio" name="e22" id="radio66" value="e22c" />
                        <label for="radio66"></label>
                        C. Presentarlas en el momento en que pueda aportar, además, alguna compensación.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                 
                  <p>23. El hijo de G... ha entrado en el despacho de su padre a pesar de que éste se lo tiene prohibido, y ha derramado un frasco de tinta sobre papeles importantes. G... furioso, le da un buen manotazo. ¿Qué pensara G... un tiempo después?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e23" id="radio67" value="e23a" /><label for="radio67">A. Que un buen un azote de vez en cuando no viene mal.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e23" id="radio68" value="e23b" />
                        B. Que tal vez se ha excedido un  poco.</p></td>
                      <td><p>
                        <input type="radio" name="e23" id="radio69" value="e23c" />
                        <label for="radio69"></label>
                        C. Que es conveniente enfadarse de verdad una vez para no tener que volver a hacerlo.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>24. Una persona con la que D... se relaciona muy frecuentemente acaba de jugarle un mala pasada. ¿Cuál será la reacción de D...?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e24" id="radio70" value="e24a" /><label for="radio70">A. No muestra ninguna, pero se da cuenta de que le será muy difícil ocultar durante mucho tiempo su resentimiento.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e24" id="radio71" value="e24b" />
                        B. No dice nada porque piensa que el daño causado es tal vez menor de que había creído.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e24" id="radio72" value="e24c" />
                        <label for="radio72"></label>
                        C. Se esfuerza en ocultar su resentimiento para no entorpecer sus futuras relaciones.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>25. N... asiste a una comida. Se da cuenta de que a causa de una opinión que se le ha escapado acaba de provocar una situación tensa en el grupo. ¿Qué le parece a usted que será para el lo más desagradable?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e25" id="radio73" value="e25a" />
                        A. El sentimiento de que algo va a dificultar notablemente el contacto.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e25" id="radio74" value="e25b" />
                        B. El pensamiento de que se le va a juzgar a causa de esa observación.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e25" id="radio75" value="e25c" />
                        <label for="radio75"></label>
                        C. El disgusto de haber hablado sin pensar.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>26. R... esta jugando a las cartas con sus amigos; a pesar de sus esfuerzos, pierde varias veces seguidas. ¿Cuál es, según usted, su reacción más probable?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e26" id="radio76" value="e26a" />
                        <label for="radio76">A. «Después de todo, esta tarde he aprendido bastante. Seguramente ganaré la próxima vez».</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e26" id="radio77" value="e26b" />
                        <label for="radio77">B. «Siempre ocurre lo mismo; el juego de las cartas no se me da bien»</label>
                      </p></td>
                      <td><p>
                        <input type="radio" name="e26" id="radio78" value="e26c" />
                        C. «Realmente no estoy en forma esta tarde»</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>27. R... está sentado en un cine al lado de personas que no se callan y hacen frecuentes comentarios. ¿Qué hará R...?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e27" id="radio79" value="e27a" />
                        A. Rogarles que se callen.
                        <label for="radio79">.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e27" id="radio80" value="e27b" />
                        <label for="radio80"></label>
                        B. Cambiarse de lugar.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e27" id="radio81" value="e27c" />
                        C. Concentrarse más en la película para evitar la molestia.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>28. T... trabaja en una gran empresa. Ha efectuado algunos cambios en la organización del trabajo y es muy criticado por gran parte de sus colegas. ¿Cuál será la reacción de T...?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e28" id="radio82" value="e28a" />
                        A. Tratar de justificar su posición  ante sus colegas.
                        <label for="radio82">.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e28" id="radio83" value="e28b" />
                        B. Pensar que, en cualquier caso, nunca se consigue la unanimidad.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e28" id="radio84" value="e28c" />
                        <label for="radio84"></label>
                        C. Replantearse el problema.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>29. ¿Qué piensa usted cuando ve a un niño enfrentarse a los adultos?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="radio" id="radio85" value="radio" />
                        <label for="radio85"></label>
                        A. Está mal educado.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="radio2" id="radio86" value="radio2" />
                        B. Probablemente tiene serias dificultades en sus relaciones con los demás.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="radio3" id="radio87" value="radio3" />
                        C. Posee una fuerte personalidad.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>30. M... debe contratar a un colaborador que se encargará de la dirección de un servicio. Teniendo en cuenta el hecho de que tendrá responsabilidades jerárquicas, ¿a cual de la cualidades siguientes dará M... más importancia?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e30" id="radio88" value="e30a" />
                        A. Tener autoridad</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e30" id="radio89" value="e30b" />
                        <label for="radio89"></label>
                        B. Ser convincente.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e30" id="radio90" value="e30c" />
                        C. Ser justo.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>31. Entre los siguientes estilos de conducir un automóvil en carretera, ¿cuál es, a su parecer, el más frecuentemente adoptado por los automovilistas?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e31" id="radio91" value="e31a" />
                        <label for="radio91">A. Pensando en la mecánica y en la seguridad, apenas fuerzan la velocidad de su vehículo.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e31" id="radio92" value="e31b" />
                        B. Estimando que es tan peligroso circular demasiado despacio como demasiado deprisa, adelantan  a los vehículos que les obligan a ir lentamente.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e31" id="radio93" value="e31c" />
                        <label for="radio93"></label>
                        C. Toleran de mala gana no tener vía libre y adelantan sistemáticamente a los vehículos que van delante de ellos.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>32. ¿Qué es lo que más valora cuando usted va a un restaurante?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e32" id="radio94" value="e32a" />
                        A. Una buena cocina.
                        <label for="radio94">.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e32" id="radio95" value="e32b" />
                        B. Un ambiente agradable.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e32" id="radio96" value="e32c" />
                        <label for="radio96"></label>
                        C. La posibilidad de comer el plato especial de la casa.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>33. Una señora va de compras a un almacén que se encuentra bastante lejos de su casa. A la puerta del almacén  se da cuenta de que ha olvidado su monedero y su talonario de cheques. Sin tener en cuenta el tiempo de que dispone, ¿qué piensa usted que hará?</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e33" id="radio97" value="e33a" />
                        <label for="radio97">A. Volver a su casa a buscar lo que ha olvidado.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e33" id="radio98" value="e33b" />
                        <label for="radio98"></label>
                        B. Ver si conoce a alguien por la zona que pueda prestarle dinero o tratar de que le vendan a crédito.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e33" id="radio99" value="e33c" />
                        <label for="radio99"></label>
                        C. Dejar las compras para otra ocasión y aprovechar la oportunidad de dar un paseo por el barrio.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>34. M... está soltero. Ha tenido un año de trabajo muy fuerte y debe tomar una decisión sobre sus vacaciones. ¿Qué elegirá?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e34" id="radio100" value="e34a" />
                        <label for="radio100"></label>
                        A. Pasar un mes en la costa para poder leer, caminar y descansar.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e34" id="radio101" value="e34b" />
                        <label for="radio101"></label>
                        B. Visitar una región del país que no conoce.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e34" id="radio102" value="e34c" />
                        <label for="radio102"></label>
                        C. Hacer una larga marcha a pie o en bicicleta porque piensa que el deporte es el mejor de los descansos.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>35. ¿Cuál es, a su modo de ver, la mejor manera de descansar durante el fin de semana para un hombre que trabaja todos los demás días?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e35" id="radio103" value="e35a" />
                        <label for="radio103"></label>
                        A. Reunirse con los amigos.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e35" id="radio104" value="e35b" />
                        <label for="radio104"></label>
                        B. Ir al cine.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e35" id="radio105" value="e35c" />
                        <label for="radio105"></label>
                        C. Leer.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>36. Si usted dispusiera de un año de libertad y de los medios necesarios para hacer lo que quisiera, ¿cuál elegiría entre las actividades siguientes?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e36" id="radio106" value="e36a" />
                        <label for="radio106"></label>
                        A. Dar la vuelta al mundo en solitario a bordo de un velero.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e36" id="radio107" value="e36b" />
                        <label for="radio107"></label>
                        B. Participar en una carrera automovilística Madrid-Bombay.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e36" id="radio108" value="e36c" />
                        <label for="radio108">C. Visitar el mayor número posible de países.</label>
                      </p></td>
                    </tr>
                  </table>
                  <p>37. Un empleado administrativo, incorporado recientemente a la empresa, pide a X..., uno de sus compañeros, que le preste una pequeña suma de dinero hasta el mes siguiente. ¿Qué hará X...?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e37" id="radio109" value="e37a" />
                        <label for="radio109"></label>
                        A. Le prestará el dinero sin hacerle ninguna pregunta para no ponerle en un aprieto.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e37" id="radio110" value="e37b" />
                        <label for="radio110">B. Le prestará el dinero porque a él le gustaría que el hicieran lo mismo si lo necesitara.</label>
                      </p></td>
                      <td><p>
                        <input type="radio" name="e37" id="radio111" value="e37c" />
                        <label for="radio111">C. No le dará el dinero, considerando que su compañero tiene, probablemente, buenos amigos dispuestos a ayudarle.</label>
                      </p></td>
                    </tr>
                  </table>
                  <p>38. B... se ha puesto, sin quererlo en, fuera de la legalidad y debe escoger a un abogado para que le defienda. ¿Sobre cuál de los criterios siguientes basará su elección?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e38" id="radio112" value="e38a" />
                        <label for="radio112"></label>
                        A. Su reputación de elocuencia.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e38" id="radio113" value="e38b" />
                        <label for="radio113"></label>
                        B. Sus buenas relaciones con la magistratura.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e38" id="radio114" value="e38c" />
                        <label for="radio114"></label>
                        C. Su perspicacia psicológica.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>39. E... ha sido nombrado recientemente para un puesto que implica responsabilidades jerárquicas importantes. ¿Qué actitud tomará probablemente frente a sus subordinados?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e39" id="radio115" value="e39a" />
                        <label for="radio115"></label>
                        A. Modificar su forma de mandar según las personas y las circunstancias.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e39" id="radio116" value="e39b" />
                        <label for="radio116">B. Fijarse un sistema de mando bien elaborado e idéntico para todos.</label>
                      </p></td>
                      <td><p>
                        <input type="radio" name="e39" id="radio117" value="e39c" />
                        <label for="radio117">C. Basándose en la experiencia, dejarse guiar por su intuición.</label>
                      </p></td>
                    </tr>
                  </table>
                  <p>40. R... tiene que hablar sobre informática a empleados que no tienen ningún conocimiento en este campo. ¿Cuál de las siguientes alternativas le planteará menos problemas?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e40" id="radio118" value="e40a" />
                        A. Utilizar un vocabulario comprensible para todo el mundo.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e40" id="radio119" value="e40b" />
                        <label for="radio119"></label>
                        B. Interesar al auditorio y mantener su atención.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e40" id="radio120" value="e40c" />
                        <label for="radio120">C. Hacer participar a todos los asistentes.</label>
                      </p></td>
                    </tr>
                  </table>
                  <p>41.L... asiste a un partido de fútbol entre dos equipos muy conocidos. El partido es muy disputado y los dos equipos rinden al máximo. Entre los espectadores el entusiasmo es tremendo y:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e41" id="radio121" value="e41a" />
                        <label for="radio121">A. L... se contenta con aplaudir las jugadas más brillantes.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e41" id="radio122" value="e41b" />
                        <label for="radio122"></label>
                        B. L... es dominado por la agitación general: grita y gesticula como los otros.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e41" id="radio123" value="e41c" />
                        <label for="radio123">C. L... discute con sus vecinos sobre las jugadas de los futbolistas.</label>
                      </p></td>
                    </tr>
                  </table>
                  <p> 42. B... atraviesa la calle por un paso de peatones con el semáforo en rojo. Un coche llega a gran velocidad y se detiene repentinamente a pocos centímetros de B. ¿Cuál va a ser la reacción inmediata de éste?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e42" id="radio124" value="e42a" />
                        <label for="radio124">A. Hará una observación irónica al mismo tiempo que maldice interiormente al conductor.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e42" id="radio125" value="e42b" />
                        B. Dará airadamente su opinión al conductor sobre su manera de conducir.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e42" id="radio126" value="e42c" />
                        <label for="radio126"></label>
                        C. Lanzará al conductor algunos insultos que no puede reprimir.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>43. A su modo de ver, ¿cuál es, entre los siguientes aspectos, el más desatendido actualmente en la educación de su hijo?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e43" id="radio127" value="e43a" />
                        <label for="radio127"></label>
                        A. La aceptación de responsabilidades.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e43" id="radio128" value="e43b" />
                        <label for="radio128"></label>
                        B. El gusto por el trabajo bien hecho.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e43" id="radio129" value="e43c" />
                        <label for="radio129"></label>
                        C. La capacidad para desenvolverse solo rápidamente.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>44. T... acaba de fracasar en un exámen. Uno de sus amigos le dice que algunos fracasos son útiles en la vida. ¿Qué responderá él?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e44" id="radio130" value="e44a" />
                        <label for="radio130"></label>
                        A. «Se ve que no estás en mi lugar; yo preferiría no pasar por esto»</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e44" id="radio131" value="e44b" />
                        <label for="radio131"></label>
                        B. «Puede que tengas razón»</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e44" id="radio132" value="e44c" />
                        <label for="radio132"></label>
                        C. «Admite, por lo menos, que cuando ocurre es difícil de aceptar»</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>45. L... se encuentra en una reunión amistosa. Sabe muy bien que la mayor parte de las personas presentes tienen opiniones muy diferentes a las suyas. ¿Qué piensa usted que hará?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e45" id="radio133" value="e45a" />
                        <label for="radio133"></label>
                        A. Evitar toda discusión.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e45" id="radio134" value="e45b" />
                        <label for="radio134"></label>
                        B. Provocar la discusión.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e45" id="radio135" value="e45c" />
                        C. Dar su opinión  si no puede evitarlo.</p></td>
                    </tr>
                  </table>
                  <p>46. ¿Qué cualidad le parece más útil en las relaciones sociales?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e46" id="radio136" value="e46a" />
                        <label for="radio136"></label>
                        A. La tolerancia.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e46" id="radio137" value="e46b" />
                        <label for="radio137"></label>
                        B. La sinceridad.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e46" id="radio138" value="e46c" />
                        <label for="radio138"></label>
                        C. La aceptación de compromisos.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>47. M... acaba de modificar totalmente su apartamento. Invita a sus amigos a la inauguración. Entre los cumplidos que le hagan, ¿cuál será para él el más agradable?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e47" id="radio139" value="e47a" />
                        <label for="radio139"></label>
                        A. Una felicitación sobre su buen gusto.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e47" id="radio140" value="e47b" />
                        <label for="radio140"></label>
                        B. Un elogio sobre la forma en que ha sacado partido de la disposición de las habitaciones.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e47" id="radio141" value="e47c" />
                        <label for="radio141">C. Una alabanza a su originalidad, por que su decoración no se parece a ninguna otra ya vista.</label>
                      </p></td>
                    </tr>
                  </table>
                  <p>48. S... llega en el momento de una discusión entre dos personas a las que conoce poco. El tema del que hablan, muy específico, le es totalmente desconocido y apenas le interesa. ¿Cuál será su reacción?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e48" id="radio142" value="e48a" />
                        <label for="radio142"></label>
                        A. Interviene para informarse, aún a riesgo de parecer ignorante.                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e48" id="radio143" value="e48b" />
                        <label for="radio143"></label>
                        B. Trata de interesarse porque no quiere parecer incorrecto.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e48" id="radio144" value="e48c" />
                        <label for="radio144"></label>
                        C. No interviene, porque no puede aportar un punto de vista interesante sobre el asunto.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>49. R... llega con retraso a una reunión de copropietarios. ¿Qué es lo que probablemente le molestará más?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e49" id="radio145" value="e49a" />
                        <label for="radio145"></label>
                        A. La idea de que hayan podido aprovecharse de su ausencia para tomar una decisión con la que él no esté de acuerdo.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e49" id="radio146" value="e49b" />
                        B. El temor de tener dificultad para integrarse en  la discusión.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e49" id="radio147" value="e49c" />
                        <label for="radio147"></label>
                        C. La perspectiva de parecer descortés.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>50. Se ha pedido a F... un informe lo más objetivo posible sobre su modo de ser. ¿Quien decidirá él que lo haga?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e50" id="radio148" value="e50a" />
                        A. Su mujer.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e50" id="radio149" value="e50b" />
                        <label for="radio149"></label>
                        B. Un grupo de amigos.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e50" id="radio150" value="e50c" />
                        C. El mismo.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>51. X... quiere construir una casa. ¿Cuál de las siguientes soluciones elegirá?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e51" id="radio151" value="e51a" />
                        <label for="radio151"></label>
                        A. Llamar a un arquitecto.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e51" id="radio152" value="e51b" />
                        <label for="radio152"></label>
                        B. Hacer los planos él mismo y trabajar directamente con un constructor.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e51" id="radio153" value="e51c" />
                        <label for="radio153"></label>
                        C. Hacer los planos con un amigo que acaba de hacer una casa.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>52. T... es un hombre de negocios generalmente muy ocupado. Una cita anulada a última hora le permite tener una mañana libre totalmente imprevista. ¿Cómo cree usted que la utilizará?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e52" id="radio154" value="e52a" /><label for="radio154">A. Aprovechará para levantarse pronto y pasar la mañana practicando su deporte favorito.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e52" id="radio155" value="e52b" />
                        <label for="radio155"></label>
                        B. Hará el balance de la semana que acaba de pasar.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e52" id="radio156" value="e52c" />
                        <label for="radio156"></label>
                        C. Constituirá para él una ocasión muy poco habitual de poder «perder su tiempo» y la aprovechará.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>53. D... va a un país del que no conoce nada. Para preparar su viaje, ¿qué cree usted que hará?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e53" id="radio157" value="e53a" />
                        <label for="radio157"></label>
                        A. Leer libros y guías sobre ese país.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e53" id="radio158" value="e53b" />
                        <label for="radio158">B. Preguntar a amigos o parientes que conocen bien el país.</label>
                      </p></td>
                      <td><p>
                        <input type="radio" name="e53" id="radio159" value="e53c" />
                        <label for="radio159">C. Esperar a estar en el país para ver e informarse.</label>
                      </p></td>
                    </tr>
                  </table>
                  <p>54. Se oye frecuentemente decir que si una persona cae de repente sobre la acera a las seis de la tarde, un momento en que las calles están abarrotadas, ningún viandante se detiene para ofrecer su ayuda a la persona en dificultades. ¿A qué cree usted que debe?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e54" id="radio160" value="e54a" />
                        A. A una total indiferencia por lo que puede ocurrir a los demás.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e54" id="radio161" value="e54b" />
                        <label for="radio161"></label>
                        B. Al miedo ante una situación inesperada.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e54" id="radio162" value="e54c" />
                        <label for="radio162"></label>
                        C. Al temor de ocuparse de lo que no le compete a uno.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>55. Una señora va a consultar a un médico sobre una infección que le parece bastante banal. El médico la interroga ampliamente antes de examinarla. Ella contesta, por supuesto, a las preguntas, pero, en el fondo, ¿qué pensará?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e55" id="radio163" value="e55a" />
                        <label for="radio163"></label>
                        A. «En su lugar, yo comenzaría por hacer el exámen y preguntaría después»</p>
                        &nbsp;</td>
                      <td><p>
                        <input name="e55" type="radio" id="radio164" value="e55b" />
                        <label for="radio164"></label>
                        B. «El debe intentar conocer en qué circunstancias ha cogido esta enfermedad»</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e55" id="radio165" value="e55c" />
                        C. «Está bien que me haga preguntas, pero hay algunas en las que no veo relación ninguna con lo que yo tengo»                      </p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>56. C... tiene que contratar empleados de oficina; dispone de poco tiempo. ¿Qué método empleará?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e56" id="radio166" value="e56a" />
                        <label for="radio166">A. Tener una entrevista con los candidatos.</label>
                      </p></td>
                      <td><p>
                        <input type="radio" name="e56" id="radio167" value="e56b" />
                        B. Examinar cada «curriculum vitae» y sus referencias.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e56" id="radio168" value="e56c" />
                        <label for="radio168"></label>
                        C. Hacerles una prueba práctica en el trabajo.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>57. El mejor delegado de personal es aquel que:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e57" id="radio169" value="e57a" />
                        <label for="radio169"></label>
                        A. Es un buen negociador.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e57" id="radio170" value="e57b" />
                        <label for="radio170"></label>
                        B. Está convencido de la justicia de la reivindicación.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e57" id="radio171" value="e57c" />
                        <label for="radio171"></label>
                        C. Está bien integrado con el personal.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>58. La señora D... trata inútilmente de hacer que coma su hijo de cinco años; éste se resiste violentamente. ¿Qué hará ella?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e58" id="radio172" value="e58a" />
                        <label for="radio172"></label>
                        A. Forzarle a comer considerando que el niño lo hace por capricho.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e58" id="radio173" value="e58b" />
                        <label for="radio173"></label>
                        B. Hacerlo un pequeño chantaje del tipo: «Demuestra a mamá que eres bueno y que la quieres»</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e58" id="radio174" value="e58c" />
                        <label for="radio174">C. Dejar al niño, pensando que comerá más en la comida siguiente.</label>
                      </p></td>
                    </tr>
                  </table>
                  <p>59. Se habla frecuentemente del respeto a las «reglas de juego». En general, se trata de:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e59" id="radio175" value="e59a" />
                        <label for="radio175">A. Una disposición profunda, estable y claramente definida.</label>
                      </p></td>
                      <td><p>
                        <input type="radio" name="e59" id="radio176" value="e59b" />
                        B. La aceptación a desempeñar en cada instante el papel que conviene.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e59" id="radio177" value="e59c" />
                        <label for="radio177"></label>
                        C. Una sumisión sincera a las costumbres de un grupo.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>60. C..., que es aficionado al bricolaje decide tapizar él mismo un sillón valioso. Cuando llega a la mitad de su trabajo se da cuenta de que corre el peligro de fracasar en su intento. ¿Cuál será su decisión?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e60" id="radio178" value="e60a" />
                        <label for="radio178"></label>
                        A. Confiar el sillón a un especialista que realizará un trabajo impecable.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e60" id="radio179" value="e60b" />
                        <label for="radio179"></label>
                        B. Deshacer lo que ya ha hecho y comenzar otra vez desde cero.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e60" id="radio180" value="e60c" />
                        <label for="radio180"></label>
                        C. Dejar durante unos días su trabajo para reemprenderlo cuando esté en mejores condiciones.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>61. C... va a ir con su mujer al campo durante los días de Pascua. Previniendo la afluencia, ha reservado billetes de ferrocarril. Salen de su casa a la hora justa, pero un embotellamiento en los alrededores les hace perder el tren. ¿Cómo cree usted que reaccionará?</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e61" id="radio181" value="e61a" />
                        <label for="radio181"></label>
                        A. «Siempre pasa lo mismo. Si hubieras estado preparada antes no hubiera ocurrido eso»</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e61" id="radio182" value="e61b" />
                        B. «Se han fastidiado las vacaciones... No me apetece nada viajar de pie en el tren siguiente»</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e61" id="radio183" value="e61c" />
                        <label for="radio183"></label>
                        C. «!Que le vamos a hacer! Voy a devolver los billetes y nos quedaremos en casa»</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>62. A su juicio, la mayoría de los fracasos son debidos a:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e62" id="radio184" value="e62a" />
                        <label for="radio184">A. Incapacidad.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e62" id="radio185" value="e62b" />
                        B. Coincidencia de circunstancias negativas.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e62" id="radio186" value="e62c" />
                        C. Fallos ocasionales.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>63. F... ha encargado un frigorífico. En su ausencia, lo depositan en casa del conserje. El embalaje está estropeado, por lo cual el frigorífico ha sufrido algunos daños. F... decide hacer una gestión ante los servicios de distribución. ¿De qué forma se comportará?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e63" id="radio187" value="e63a" />
                        <label for="radio187">A. Escribirá a los citados servicios conservando una copia de la carta.</label>
                      </p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e63" id="radio188" value="e63b" />
                        <label for="radio188"></label>
                        B. Irá personalmente a reclamar.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e63" id="radio189" value="e63c" />
                        <label for="radio189"></label>
                        C. Rogará a uno de sus amigos, empleado en esa casa, que intervenga.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>64. Con ocasión de un viaje organizado, B.... se encuentra con personas que no conoce. Al cabo de unos días se da cuenta de que la mayoría de las personas le tienen poca simpatía. ¿Cómo cree usted que reaccionará?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e64" id="radio190" value="e64a" />
                        <label for="radio190"></label>
                        A. Lo tiene sin cuidado, porque para él lo importante es que el viaje esté bien organizado y que el guía sea eficaz.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e64" id="radio191" value="e64b" />
                        <label for="radio191"></label>
                        B. Está un poco molesto y trata de hacer un esfuerzo por resultar más simpático.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e64" id="radio192" value="e64c" />
                        <label for="radio192"></label>
                        C. Esto le amarga, en parte, sus vacaciones y propone que, en la próxima ocasión se irá con sus amigos.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>65. R... hace un viaje con algunos amigos. Una tarde el grupo se separa después de haberse puesto de acuerdo en la hora para la salida. A lo largo de esta tarde, R... descubre un monumento que le interesa mucho visitar, pero, si lo hace, le será imposible llegar a tiempo, ¿qué hará?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e65" id="radio193" value="e65a" />
                        <label for="radio193"></label>
                        A. Hace la visita porque piensa que no tendrá ya ocasión de volver a este lugar y que de todas maneras habrá otros que llegarán tarde también.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e65" id="radio194" value="e65b" />
                        <label for="radio194"></label>
                        B. Renuncia a esta visita porque le parece más importante no hacer esperar a los demás.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e65" id="radio195" value="e65c" />
                        <label for="radio195"></label>
                        C. Trata de encontrar a sus amigos para persuadirles de que hagan la visita con él, aún a riesgo de desorganizar la última parte del viaje.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>66. ¿Cuál de estas profesiones le parece a usted la más envidiable?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e66" id="radio196" value="e66a" />
                        <label for="radio196"></label>
                        A. Gerente de una pequeña empresa.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e66" id="radio197" value="e66b" />
                        <label for="radio197"></label>
                        B. Director adjunto de una empresa internacional.</p></td>
                      <td><p>
                        <input type="radio" name="e66" id="radio198" value="e66c" />
                        <label for="radio198"></label>
                        C. Asesor científico de alto nivel.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>67. A causa de un accidente que ha causado la muerte de los padres de un niño pequeño, J... tiene que encargarse del niño con carácter definitivo. ¿Cuál será la actitud más probable que tendrá a este respecto?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e67" id="radio199" value="e67a" />
                        <label for="radio199"></label>
                        A. Teme verse obligado a revisar su sistema de educación.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e67" id="radio200" value="e67b" />
                        <label for="radio200"></label>
                        B. Confía en el buen carácter del niño.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e67" id="radio201" value="e67c" />
                        <label for="radio201"></label>
                        C. Busca otras alternativas para el niño.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>68. Un amigo propone a T... llevarle en su velero a hacer un pequeño crucero. T... nunca ha practicado la vela. ¿Qué cree usted que decidirá?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e68" id="radio202" value="e68a" />
                        <label for="radio202"></label>
                        A. Aceptar, pensando que podrá desenvolverse bien.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e68" id="radio203" value="e68b" />
                        B. Arreglárselas para hacer antes algunas horas de vela en una escuela.</p></td>
                      <td><p>
                        <input type="radio" name="e68" id="radio204" value="e68c" />
                        <label for="radio204"></label>
                        C. No aceptar, ante el temor de ser una molestia para su amigo.</p></td>
                    </tr>
                  </table>
                  <p>69. T... va hacia el trabajo por su camino habitual. Una furgoneta de reparto le bloquea durante un buen rato en una calle estrecha. A juicio de usted, ¿qué será lo más desagradable para T...?</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e69" id="radio205" value="e69a" />
                        <label for="radio205"></label>
                        A. La perspectiva de llegar con retraso a su despacho.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e69" id="radio206" value="e69b" />
                        <label for="radio206"></label>
                        B. El hecho de tener que esperar sin poder moverse ni hacer nada.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e69" id="radio207" value="e69c" />
                        <label for="radio207"></label>
                        C. Los toques de claxon -inútiles- de otros automovilistas.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>70.G... Trabaja en una empresa para la que debe efectuar frecuentes desplazamientos. Acostumbra a hacer dos horas de atletismo todas las semanas en una sesión de entrenamiento colectivo. A juicio de usted, ¿cuál es su actitud en el curso de esta sesión?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e70" id="radio208" value="e70a" />
                        A. Insiste en ciertas especialidades que le permitan mantenerse en buena forma.</p></td>
                      <td><p>
                        <input type="radio" name="e70" id="radio209" value="e70b" />
                        <label for="radio209"></label>
                        B. Realiza todas las actividades propuestas, pero sin esforzarse demasiado, porque tiene un trabajo cansado.</p></td>
                      <td><p>
                        <input type="radio" name="e70" id="radio210" value="e70c" />
                        <label for="radio210"></label>
                        C. Se entrega a fondo y frecuentemente termina agotado, porque no concibe el deporte de otra manera.</p></td>
                    </tr>
                  </table>
                  <p>71. Según su criterio, ¿cuál es la ventaja de tener un perro en apartamento de la ciudad?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e71" id="radio211" value="e71a" />
                        <label for="radio211"></label>
                        A. Permite sentirse menos solo.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e71" id="radio212" value="e71b" />
                        <label for="radio212"></label>
                        B. Favorece la ocasión de caminar un poco cada día paseando al perro.</p></td>
                      <td><p>
                        <input type="radio" name="e71" id="radio213" value="e71c" />
                        <label for="radio213"></label>
                        C. Vigila el apartamento.</p></td>
                    </tr>
                  </table>
                  <p>72. En el transcurso de una reunión en que S... se ha encontrado con amigos, les propone terminar la velada en su casa. Al enterarse, se une a ellos una persona que mantenía alejada del grupo y a la que el estima poco. ¿Cuál será la reacción de S...?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e72" id="radio214" value="e72a" />
                        <label for="radio214">A. Piensa que, después de todo, tendrá ocasión de conocer mejor a esta persona.</label>
                      </p></td>
                      <td><p>
                        <input type="radio" name="e72" id="radio215" value="e72b" />
                        <label for="radio215"></label>
                        B. Estimando que se ha invitado a sí misma, no se ocupará de ella en toda la noche.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e72" id="radio216" value="e72c" />
                        <label for="radio216"></label>
                        C. Lamenta haber hablado demasiado alto.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>73. El director de un centro de delincuentes debe contratar a un nuevo educador. ¿A cuál  de estas cualidades dará más importancia?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e73" id="radio217" value="e73a" />
                        <label for="radio217"></label>
                        A. Ser irreprochable y poder servir de modelo.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e73" id="radio218" value="e73b" />
                        B. Tener buenos conocimientos pedagógicos.</p></td>
                      <td><p>
                        <input type="radio" name="e73" id="radio219" value="e73c" />
                        <label for="radio219"></label>
                        C. Saber escuchar.</p></td>
                    </tr>
                  </table>
                  <p>74. Según su opinión, ¿qué es más importante en una persona que da una fiesta?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e74" id="radio220" value="e74a" />
                        A. Permitir a todos expresarse.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e74" id="radio221" value="e74b" />
                        <label for="radio221"></label>
                        B. Invitar a personas que puedan coincidir con sus intereses.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e74" id="radio222" value="e74c" />
                        <label for="radio222"></label>
                        C. Cuidar de que a nadie le falte nada.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>75. R... ha de exponer un proyecto a un colega que no conoce. Para que R... pueda hacerse comprender por su interlocutor, es preferible que:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e75" id="radio223" value="e75a" />
                        <label for="radio223"></label>
                        A. Sepa cuál es su formación académica.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e75" id="radio224" value="e75b" />
                        B. Conozca sus antecedentes profesionales.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e75" id="radio225" value="e75c" />
                        C. Lea el informe sobre un trabajo hecho por su colega.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>76. Si tuviera que hacer un  reproche a la profesión médica, ¿cuál escogería?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e76" id="radio226" value="e76a" />
                        <label for="radio226"></label>
                        A. No consagra suficiente tiempo a cada enfermo.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e76" id="radio227" value="e76b" />
                        <label for="radio227"></label>
                        B. Da demasiada importancia al dinero.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e76" id="radio228" value="e76c" />
                        <label for="radio228"></label>
                        C. Utiliza a menudo un vocabulario incomprensible.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>77.N ... tiene que escoger un plan de formación para las personas de su departamento. Desearía una formación interesante para todos, pero, a la vez, eficaz y rentable. ¿Qué elegirá?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e77" id="radio229" value="e77a" />
                        <label for="radio229">A. Un plan organizado en función de las necesidades del departamento y en el que todas las fases estén definidas de antemano.</label>
                      </p></td>
                      <td><p>
                        <input type="radio" name="e77" id="radio230" value="e77b" />
                        B. Un plan que tenga en cuenta a cada participante.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e77" id="radio231" value="e77c" />
                        <label for="radio231"></label>
                        C. Un plan que incluya de manera regular exámenes de control.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>78. M... acaba de tener un ataque de hígado. Sin embargo un amigo le llama para invitarle a comer, precisando que le ha preparado su plato favorito. Supuesto que este plato está contraindicado para él en este momento, ¿cuál será la reacción de M...?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e78" id="radio232" value="e78a" />
                        <label for="radio232"></label>
                        A. Aceptar la invitación pensando que por una vez no hará caso de su régimen.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e78" id="radio233" value="e78b" />
                        B. Proponer que se aplace esta invitación para más adelante, cuando acabe con su régimen.</p></td>
                      <td><p>
                        <input type="radio" name="e78" id="radio234" value="e78c" />
                        <label for="radio234"></label>
                        C.</p></td>
                    </tr>
                  </table>
                  <p>79. M... no está satisfecho con la Seguridad Social. Lo que más le desagrada es:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e79" id="radio235" value="e79a" />
                        <label for="radio235"></label>
                        A. Lo absurdo de algunas disposiciones de esta entidad.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e79" id="radio236" value="e79b" />
                        B. La gran dificultad de atenerse a la complejidad de su reglamentación.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e79" id="radio237" value="e79c" />
                        <label for="radio237"></label>
                        C. La falta de atención a aspectos que él cree fundamentales.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>80. N... ha decidido consagrar una parte de su tiempo libre a ayudar a las personas de la tercera edad. Existen varias posibilidades. ¿Cuál elegirá en último lugar cuando no hay otras alternativas?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e80" id="radio238" value="e80a" />
                        <label for="radio238"></label>
                        A. Acompañar a las personas ancianas durante el paseo.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e80" id="radio239" value="e80b" />
                        <label for="radio239"></label>
                        B. Visitar a una persona mayor cada semana.</p></td>
                      <td><p>
                        <input type="radio" name="e80" id="radio240" value="e80c" />
                        <label for="radio240"></label>
                        C. Hacer colectas para la construcción de una hogar de ancianos.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>81. Entre los siguientes argumentos publicitarios, ¿cuál tiene más probabilidades de influir en el público?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e81" id="radio241" value="e81a" />
                        <label for="radio241"></label>
                        A. La muestra.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e81" id="radio242" value="e81b" />
                        <label for="radio242"></label>
                        B. El «slogan»</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e81" id="radio243" value="e81c" />
                        <label for="radio243"></label>
                        C. El testimonio de una «estrella»</p></td>
                    </tr>
                  </table>
                  <p>82. En el transcurso de un viaje en tren, D... se encuentra en un compartimento abarrotado. Su vecino fuma y el humo le molesta mucho. Ya le ha rogado que dejara de fumar, sin resultado. ¿Qué hará?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e82" id="radio244" value="e82a" />
                        <label for="radio244"></label>
                        A. Pedir el parecer de otros viajeros del compartimento.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e82" id="radio245" value="e82b" />
                        <label for="radio245"></label>
                        B. Abrir la ventana.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e82" id="radio246" value="e82c" />
                        <label for="radio246"></label>
                        C. Hablar de nuevo con su vecino con el objeto de convencerlo de que deje de fumar.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>83. El director del departamento de una empresa de  productos alimenticios desea lanzar al mercado un nuevo postre. Dispone de un presupuesto que puede repartir en los tres conceptos que se citan a continuación. ¿En cuál de ellos empleará más dinero?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e83" id="radio247" value="e83a" />
                        <label for="radio247"></label>
                        A. En estudios de mercado para conocer los gustos de los futuros compradores.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e83" id="radio248" value="e83b" />
                        <label for="radio248"></label>
                        B. En publicidad para dar a conocer su producto.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e83" id="radio249" value="e83c" />
                        <label for="radio249"></label>
                        C. En la investigación de envases y presentación.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>84. B... toma parte en una discusión muy animada en el transcurso de la cual sus opiniones son muy atacadas. Entre las actitudes siguientes , ¿cuál será la que adopte?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e84" id="radio250" value="e84a" />
                        <label for="radio250"></label>
                        A. Tratar por todos los medios de convencer a los demás.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e84" id="radio251" value="e84b" />
                        <label for="radio251"></label>
                        B. Divertirse simplemente en el juego de la discusión.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e84" id="radio252" value="e84c" />
                        <label for="radio252"></label>
                        C. Dejarse convencer cuando vea que sus posiciones son poco defendibles.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>85. Cuando usted va a un restaurante, ¿qué tipo de plato prefiere?</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e85" id="radio253" value="e85a" />
                        <label for="radio253"></label>
                        A. Uno que ya conoce y que le gusta de modo especial.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e85" id="radio254" value="e85b" />
                        <label for="radio254"></label>
                        B. La especialidad de la casa.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e85" id="radio255" value="e85c" />
                        <label for="radio255"></label>
                        C. Un plato exótico que usted desconoce en absoluto.</p>
                        &nbsp;</td>
                    </tr>
                  </table>
                  <p>86. Después de un naufragio, C... llega sólo a una isla desierta. El clima es muy agradable y la vegetación le permitirá encontrar el alimento necesario. ¿Qué es, a su modo de ver, lo que probablemente le planteará  menos problemas?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e86" id="radio256" value="e86a" />
                        <label for="radio256"></label>
                        A. El carácter nuevo e insólito de la situación.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e86" id="radio257" value="e86b" />
                        <label for="radio257"></label>
                        B. La soledad.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e86" id="radio258" value="e86c" />
                        C. La falta de algunos atractivos de la vida anterior.</p></td>
                    </tr>
                  </table>
                  <p>87. J... dirige una importante firma automovilista. Puede escoger entre varias políticas comerciales. ¿Cuál elegirá?:</p>
                  <table width="100%" border="0">
                    <tr>
                      <td><p>
                        <input type="radio" name="e87" id="radio259" value="e87a" />
                        <label for="radio259"></label>
                        A. Orientar sus esfuerzos para sacar de vez en cuando modelos especiales.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e87" id="radio260" value="e87b" />
                        <label for="radio260"></label>
                        B. Buscar los efectos de moda y atender a una clientela particular.</p>
                        &nbsp;</td>
                      <td><p>
                        <input type="radio" name="e87" id="radio261" value="e87c" />
                        <label for="radio261"></label>
                        C. Ofrecer de ordinario modelos clásicos.</p></td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
             
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

/////SUMA DE PUNTOS DE "D" en "M"


include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['e1'])&&($_POST['e1'])=='e1b'){
 	$I++;
	}
	if (!empty($_POST['e2'])&&($_POST['e2'])=='e2b'){
 	$I++;
	}
	if (!empty($_POST['e19'])&&($_POST['e19'])=='e19c'){
 	$I++;
	}
	if (!empty($_POST['e20'])&&($_POST['e20'])=='e20b'){
 	$I++;
	}
	if (!empty($_POST['e37'])&&($_POST['e37'])=='e37a'){
 	$I++;
	}
	if (!empty($_POST['e38'])&&($_POST['e38'])=='e38c'){
 	$I++;
	}
	if (!empty($_POST['e55'])&&($_POST['e55'])=='e55b'){
 	$I++;
	}
	if (!empty($_POST['e56'])&&($_POST['e56'])=='e56a'){
 	$I++;
	}
	if (!empty($_POST['e73'])&&($_POST['e73'])=='e73c'){
 	$I++;
	}
	if (!empty($_POST['e74'])&&($_POST['e74'])=='e74a'){
 	$I++;
	}
	if (!empty($_POST['e75'])&&($_POST['e75'])=='e75c'){
 	$I++;
	}
	
	
	if (!empty($_POST['e3'])&&($_POST['e3'])=='e3b'){
 	$II++;
	}
	if (!empty($_POST['e4'])&&($_POST['e4'])=='e4b'){
 	$II++;
	}
	if (!empty($_POST['e21'])&&($_POST['e21'])=='e21c'){
 	$II++;
	}
	if (!empty($_POST['e22'])&&($_POST['e22'])=='e22c'){
 	$II++;
	}
	if (!empty($_POST['e39'])&&($_POST['e39'])=='e39a'){
 	$II++;
	}
	if (!empty($_POST['e40'])&&($_POST['e40'])=='e40a'){
 	$II++;
	}
	if (!empty($_POST['e57'])&&($_POST['e57'])=='e57a'){
 	$II++;
	}
	if (!empty($_POST['e58'])&&($_POST['e58'])=='e58c'){
 	$II++;
	}
	if (!empty($_POST['e59'])&&($_POST['e59'])=='e59b'){
 	$II++;
	}
	if (!empty($_POST['e76'])&&($_POST['e76'])=='e76c'){
 	$II++;
	}
	if (!empty($_POST['e77'])&&($_POST['e77'])=='e77b'){
 	$II++;
	}	
	
	
	if (!empty($_POST['e5'])&&($_POST['e5'])=='e5a'){
 	$III++;
	}
	if (!empty($_POST['e6'])&&($_POST['e6'])=='e6c'){
 	$III++;
	}
	if (!empty($_POST['e7'])&&($_POST['e7'])=='e7a'){
 	$III++;
	}
	if (!empty($_POST['e23'])&&($_POST['e23'])=='e23b'){
 	$III++;
	}
	if (!empty($_POST['e24'])&&($_POST['e24'])=='e24c'){
 	$III++;
	}
	if (!empty($_POST['e25'])&&($_POST['e25'])=='e25c'){
 	$III++;
	}
	if (!empty($_POST['e41'])&&($_POST['e41'])=='e41a'){
 	$III++;
	}
	if (!empty($_POST['e42'])&&($_POST['e42'])=='e42a'){
 	$III++;
	}
	if (!empty($_POST['e43'])&&($_POST['e43'])=='e43b'){
 	$III++;
	}
	if (!empty($_POST['e60'])&&($_POST['e60'])=='e60a'){
 	$III++;
	}
	if (!empty($_POST['e78'])&&($_POST['e78'])=='e78b'){
 	$III++;
	}
	
	
	if (!empty($_POST['e8'])&&($_POST['e8'])=='e8b'){
 	$IV++;
	}
	if (!empty($_POST['e26'])&&($_POST['e26'])=='e26b'){
 	$IV++;
	}
	if (!empty($_POST['e44'])&&($_POST['e44'])=='e44a'){
 	$IV++;
	}
	if (!empty($_POST['e61'])&&($_POST['e61'])=='e61b'){
 	$IV++;
	}
	if (!empty($_POST['e62'])&&($_POST['e62'])=='e62a'){
 	$IV++;
	}
	if (!empty($_POST['e79'])&&($_POST['e79'])=='e79b'){
 	$IV++;
	}
	if (!empty($_POST['e80'])&&($_POST['e80'])=='e80c'){
 	$IV++;
	}
	if (!empty($_POST['e81'])&&($_POST['e81'])=='e81c'){
 	$IV++;
	}
	
	
	if (!empty($_POST['e9'])&&($_POST['e9'])=='e9a'){
 	$V++;
	}
	if (!empty($_POST['e10'])&&($_POST['e10'])=='e10b'){
 	$V++;
	}
	if (!empty($_POST['e11'])&&($_POST['e11'])=='e11b'){
 	$V++;
	}
	if (!empty($_POST['e27'])&&($_POST['e27'])=='e27a'){
 	$V++;
	}
	if (!empty($_POST['e28'])&&($_POST['e28'])=='e28c'){
 	$V++;
	}
	if (!empty($_POST['e29'])&&($_POST['e29'])=='e29c'){
 	$V++;
	}
	if (!empty($_POST['e45'])&&($_POST['e45'])=='e45b'){
 	$V++;
	}
	if (!empty($_POST['e46'])&&($_POST['e46'])=='e46b'){
 	$V++;
	}
	if (!empty($_POST['e63'])&&($_POST['e63'])=='e63b'){
 	$V++;
	}
	if (!empty($_POST['e64'])&&($_POST['e64'])=='e64a'){
 	$V++;
	}
	if (!empty($_POST['e82'])&&($_POST['e82'])=='e82c'){
 	$V++;
	}
	
	
	
	if (!empty($_POST['e12'])&&($_POST['e12'])=='e12c'){
 	$VI++;
	}
	if (!empty($_POST['e13'])&&($_POST['e13'])=='e13b'){
 	$VI++;
	}
	if (!empty($_POST['e30'])&&($_POST['e30'])=='e30b'){
 	$VI++;
	}
	if (!empty($_POST['e31'])&&($_POST['e31'])=='e31c'){
 	$VI++;
	}
	if (!empty($_POST['e47'])&&($_POST['e47'])=='e47c'){
 	$VI++;
	}
	if (!empty($_POST['e48'])&&($_POST['e48'])=='e48a'){
 	$VI++;
	}
	if (!empty($_POST['e49'])&&($_POST['e49'])=='e49a'){
 	$VI++;
	}
	if (!empty($_POST['e65'])&&($_POST['e65'])=='e65c'){
 	$VI++;
	}
	if (!empty($_POST['e66'])&&($_POST['e66'])=='e66a'){
 	$VI++;
	}
	if (!empty($_POST['e83'])&&($_POST['e83'])=='e83b'){
 	$VI++;
	}
	if (!empty($_POST['e84'])&&($_POST['e84'])=='e84a'){
 	$VI++;
	}
	
	
	if (!empty($_POST['e14'])&&($_POST['e14'])=='e14a'){
 	$VII++;
	}
	if (!empty($_POST['e32'])&&($_POST['e32'])=='e32c'){
 	$VII++;
	}
	if (!empty($_POST['e50'])&&($_POST['e50'])=='e50c'){
 	$VII++;
	}
	if (!empty($_POST['e67'])&&($_POST['e67'])=='e67b'){
 	$VII++;
	}
	if (!empty($_POST['e68'])&&($_POST['e68'])=='e68a'){
 	$VII++;
	}
	if (!empty($_POST['e85'])&&($_POST['e85'])=='e85c'){
 	$VII++;
	}
	if (!empty($_POST['e86'])&&($_POST['e86'])=='e86a'){
 	$VII++;
	}
	if (!empty($_POST['e87'])&&($_POST['e87'])=='e87a'){
 	$VII++;
	}
	
	if (!empty($_POST['e15'])&&($_POST['e15'])=='e15a'){
 	$VIII++;
	}
	if (!empty($_POST['e33'])&&($_POST['e33'])=='e33b'){
 	$VIII++;
	}
	if (!empty($_POST['e34'])&&($_POST['e34'])=='e34c'){
 	$VIII++;
	}
	if (!empty($_POST['e51'])&&($_POST['e51'])=='e51b'){
 	$VIII++;
	}
	if (!empty($_POST['e52'])&&($_POST['e52'])=='e52a'){
 	$VIII++;
	}
	if (!empty($_POST['e69'])&&($_POST['e69'])=='e69b'){
 	$VIII++;
	}
	if (!empty($_POST['e70'])&&($_POST['e70'])=='e70c'){
 	$VIII++;
	}
	if (!empty($_POST['e71'])&&($_POST['e71'])=='e71b'){
 	$VIII++;
	}
	
	
	if (!empty($_POST['e16'])&&($_POST['e16'])=='e16c'){
 	$IX++;
	}
	if (!empty($_POST['e17'])&&($_POST['e17'])=='e17b'){
 	$IX++;
	}
	if (!empty($_POST['e18'])&&($_POST['e18'])=='e18c'){
 	$IX++;
	}
	if (!empty($_POST['e35'])&&($_POST['e35'])=='e35a'){
 	$IX++;
	}
	if (!empty($_POST['e36'])&&($_POST['e36'])=='e36c'){
 	$IX++;
	}
	if (!empty($_POST['e53'])&&($_POST['e53'])=='e53b'){
 	$IX++;
	}
	if (!empty($_POST['e54'])&&($_POST['e54'])=='e54a'){
 	$IX++;
	}
	if (!empty($_POST['e72'])&&($_POST['e72'])=='e72a'){
 	$IX++;
	}
	
	
	
	if (!empty($_POST['e1'])&&($_POST['e1'])=='e1b'){
 	$DGV++;
	}
	if (!empty($_POST['e2'])&&($_POST['e2'])=='e2b'){
 	$DGV++;
	}
	if (!empty($_POST['e3'])&&($_POST['e3'])=='e3b'){
 	$DGV++;
	}
	if (!empty($_POST['e4'])&&($_POST['e4'])=='e4b'){
 	$DGV++;
	}
	if (!empty($_POST['e5'])&&($_POST['e5'])=='e5a'){
 	$DGV++;
	}
	if (!empty($_POST['e6'])&&($_POST['e6'])=='e6c'){
 	$DGV++;
	}
	if (!empty($_POST['e7'])&&($_POST['e7'])=='e7a'){
 	$DGV++;
	}
	if (!empty($_POST['e8'])&&($_POST['e8'])=='e8a'){
 	$DGV++;
	}
	if (!empty($_POST['e8'])&&($_POST['e8'])=='e8c'){
 	$DGV++;
	}
	if (!empty($_POST['e9'])&&($_POST['e9'])=='e9a'){
 	$DGV++;
	}
	if (!empty($_POST['e10'])&&($_POST['e10'])=='e10b'){
 	$DGV++;
	}
	if (!empty($_POST['e11'])&&($_POST['e11'])=='e11b'){
 	$DGV++;
	}
	if (!empty($_POST['e12'])&&($_POST['e12'])=='e12c'){
 	$DGV++;
	}
	if (!empty($_POST['e13'])&&($_POST['e13'])=='e13b'){
 	$DGV++;
	}
	if (!empty($_POST['e14'])&&($_POST['e14'])=='e14b'){
 	$DGV++;
	}
	if (!empty($_POST['e15'])&&($_POST['e15'])=='e15a'){
 	$DGV++;
	}
	if (!empty($_POST['e16'])&&($_POST['e16'])=='e16c'){
 	$DGV++;
	}
	if (!empty($_POST['e17'])&&($_POST['e17'])=='e17b'){
 	$DGV++;
	}
	if (!empty($_POST['e18'])&&($_POST['e18'])=='e18c'){
 	$DGV++;
	}
	
	$IV=8-$IV;
	$R=$I+$II+$III+$IV;
	$A=$V+$VI+$VII+$VIII;
	
	
	 
	
	
	///RESULTADO DE I
	if($I>=0 && $I<=1){
		$I2=1;	
	}
	if($I==2){
		$I2=2;
	}
	if($I==3){
		$I2=3;
	}
	if($I==4){
		$I2=4;
	}
	if($I==5){
		$I2=6;
	}
	if($I==6){
		$I2=7;
	}
	if($I==7){
		$I2=8;
	}
	if($I==8){
		$I2=9;
	}
	if($I>=9 && $I<=11){
		$I2=10;
	}
	
	///RESULTADO DE II
	if($II>=0 && $II<=1){
		$II2=1;	
	}
	if($II==2){
		$II2=2;
	}
	if($II==3){
		$II2=3;
	}
	if($II==4){
		$II2=4;
	}
	if($II==5){
		$II2=6;
	}
	if($II==6){
		$II2=7;
	}
	if($II==7){
		$II2=8;
	}
	if($II==8){
		$II2=9;
	}
	if($II>=9 && $II<=11){
		$II2=10;
	}
	
	///RESULTADO DE III
	if($III>=0 && $III<=2){
		$III2=1;	
	}
	if($III==3){
		$III2=2;
	}
	if($III==4){
		$III2=4;
	}
	if($III==5){
		$III2=5;
	}
	if($III==6){
		$III2=6;
	}
	if($III==7){
		$III2=7;
	}
	if($III==8){
		$III2=9;
	}
	if($III>=9 && $III<=11){
		$III2=10;
	}
	
	
	//RESULTADOS IV
	if($IV>=0 && $IV<=2){
		$IV2=1;	
	}
	if($IV==3){
		$IV2=3;
	}
	if($IV==4){
		$IV2=4;
	}
	if($IV==5){
		$IV2=6;
	}
	if($IV==6){
		$IV2=7;
	}
	if($IV==7){
		$IV2=9;
	}
	if($IV==8){
		$IV2=10;
	}
	
	///RESULTADO DE V
	if($V>=0 && $V<=2){
		$V2=1;	
	}
	if($V==3){
		$V2=2;
	}
	if($V==4){
		$V2=4;
	}
	if($V==5){
		$V2=5;
	}
	if($V==6){
		$V2=6;
	}
	if($V==7){
		$V2=7;
	}
	if($V==8){
		$V2=9;
	}
	if($V>=9 && $V<=11){
		$V2=10;
	}
	
	
	///RESULTADO DE VI
	if($VI>=0 && $VI<=2){
		$VI2=1;	
	}
	if($VI==3){
		$VI2=2;
	}
	if($VI==4){
		$VI2=4;
	}
	if($VI==5){
		$VI2=5;
	}
	if($VI==6){
		$VI2=6;
	}
	if($VI==7){
		$VI2=7;
	}
	if($VI==8){
		$VI2=9;
	}
	if($VI>=9 && $VI<=11){
		$VI2=10;
	}
	
	
	///RESULTADO DE VII
	if($VII>=0 && $VII<=1){
		$VII2=1;	
	}
	if($VII==2){
		$VII2=2;
	}
	if($VII==3){
		$VII2=4;
	}
	if($VII==4){
		$VII2=5;
	}
	if($VII==5){
		$VII2=6;
	}
	if($VII==6){
		$VII2=7;
	}
	if($VII==7){
		$VII2=9;
	}
	if($VII==8){
		$VII2=10;
	}
	
	
	
	///RESULTADO DE VIII
	if($VIII==0){
		$VIII2=1;	
	}
	if($VIII==1){
		$VIII2=2;
	}
	if($VIII==2){
		$VIII2=4;
	}
	if($VIII==3){
		$VIII2=6;
	}
	if($VIII==4){
		$VIII2=8;
	}
	if($VIII>=5 && $VIII<=8){
		$VIII2=10;
	}
	
	
	
	/////RESULTADO DE IX
	if($IX>=0 && $IX<=1){
		$IX2=1;	
	}
	if($IX==2){
		$IX2=2;
	}
	if($IX==3){
		$IX2=4;
	}
	if($IX==4){
		$IX2=5;
	}
	if($IX==5){
		$IX2=6;
	}
	if($IX==6){
		$IX2=8;
	}
	if($IX==7){
		$IX2=9;
	}
	if($IX==8){
		$IX2=10;
	}
	
	
	///RESULTADO DE R
	if($R>=0 && $R<=12){
		$R2=1;	
	}
	if($R>=13 && $R<=14){
		$R2=2;	
	}
	if($R>=15 && $R<=16){
		$R2=3;	
	}
	if($R>=17 && $R<=18){
		$R2=4;	
	}
	if($R>=19 && $R<=20){
		$R2=5;	
	}
	if($R>=21 && $R<=22){
		$R2=6;	
	}
	if($R>=23 && $R<=24){
		$R2=7;	
	}
	if($R>=25 && $R<=26){
		$R2=8;	
	}
	if($R>=27 && $R<=28){
		$R2=9;	
	}
	if($R>=29 && $R<=41){
		$R2=10;	
	}
	
	
	
	////RESULTADO DE A
	if($A>=0 && $A<=6){
		$A2=1;	
	}
	if($A>=7 && $A<=8){
		$A2=2;	
	}
	if($A>=9 && $A<=10){
		$A2=3;	
	}
	if($A>=11 && $A<=12){
		$A2=4;	
	}
	if($A==13){
		$A2=5;	
	}
	if($A>=14 && $A<=15){
		$A2=6;	
	}
	if($A>=16 && $A<=17){
		$A2=7;	
	}
	if($A>=18 && $A<=19){
		$A2=8;	
	}
	if($A>=20 && $A<=21){
		$A2=9;	
	}
	if($A>=22 && $A<=38){
		$A2=10;	
	}
	
	
	///RESULTADO DE DGV
	if($DGV>=0 && $DGV<=5){
		$DGV2=1;	
	}
	if($DGV>=6 && $DGV<=7){
		$DGV2=2;	
	}
	if($DGV==8){
		$DGV2=3;	
	}
	if($DGV>=9){
		$DGV2=4;	
	}
	if($DGV>=10){
		$DGV2=5;	
	}
	if($DGV>=11){
		$DGV2=6;	
	}
	if($DGV>=12 && $DGV<=13){
		$DGV2=7;	
	}
	if($DGV>=14){
		$DGV2=8;	
	}
	if($DGV>=15){
		$DGV2=9;	
	}
	if($DGV>=16 && $DGV<=21){
		$DGV2=10;	
	}
	
	
	
	
	include("Conexion2.php");	
	 mysqli_query($cnx,"UPDATE candidatos SET IPVI=$I2, IPVII=$II2, IPVIII=$III2,IPVIV=$IV2, IPVV=$V2, IPVVI=$VI2, IPVVII=$VII2, IPVVIII=$VIII2, IPVIX=$IX2, IPVDGV=$DGV2, IPVR=$R2, IPVA=$A2, StatusIPV='No' WHERE User= '$nombreUser'");

	
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
