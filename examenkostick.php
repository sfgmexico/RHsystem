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


$G=0;
$L=0;
$I=0;
$T=0;
$V=0;
$S=0;
$R=0;
$D=0;
$C=0;
$E=0;
$N=0;
$A=0;
$P=0;
$X=0;
$B=0;
$O=0;
$Z=0;
$F=0;
$W=0;


?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examen Kostick</title>
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
                  <h1>EXAMEN KOSTICK</h1>
                  <p>LEA ESTO CON MUCHA ATENCIÓN</p>
                  <p>Instrucciones: Hay 90 pares de frases, usted debe elegir de cada par,  aquella que más se asemeje a  su forma de ser o de pensar. A veces tendrá la impresión de que ninguna frases se asemeja a su manera  de ser, o al contrario, que ambas lo hacen, en cualquier caso usted debe optar por una de las dos.<br />
                  Lea a continuación cada una de las  afirmaciones y conteste en su hoja de respuestas de acuerdo a sus preferencias.  No existe límite de tiempo, sin embargo no se detenga mucho  tiempo en contestar, sea espontáneo y sincero  con  sus respuestas.</p>
<p><strong>ME IDENTIFICO CON:</strong>                  
<table width="100%" border="1">
  <tr>
    <td><p>1. </p>
      <p>
        <input name="e1" type="radio" id="radio" value="1" />
        Soy trabajador tenaz. </p>
      <p>
        <input type="radio" name="e1" id="radio2" value="2" />
        No soy voluble.
  &nbsp;</p></td>
    <td><p>2. </p>
      <p>
        <input type="radio" name="e2" id="radio3" value="1" />
        Me gusta hacer el trabajo mejor que los demás. </p>
      <p>
        <input type="radio" name="e2" id="radio4" value="2" />
        Me gusta seguir con lo que he empezado hasta terminarlo
  &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>3.   </p>
      <p>
        <input type="radio" name="e3" id="radio5" value="1" />
        Me  gusta   enseñar  a    la   gente cómo hacer las cosas.</p>
      <p> 
        <input type="radio" name="e3" id="radio6" value="2" />
        Me  gusta hacer las cosas lo mejor posible.</p></td>
    <td><p>4.   </p>
      <p>
        <input type="radio" name="e4" id="radio7" value="1" />
        Me    gusta    hacer     las    cosas graciosas.</p>
      <p> 
        <input type="radio" name="e4" id="radio8" value="2" />
        Me gusta decir a la  gente lo que tiene que hacer</p></td>
  </tr>
  <tr>
    <td><p>5.	</p>
      <p>
        <input type="radio" name="e5" id="radio9" value="1" />
        Me gusta pertenecer a grupos.        </p>
      <p>
        <input type="radio" name="e5" id="radio10" value="2" />
        Me gusta sobresalir en los grupos.
        &nbsp;</p></td>
    <td><p>6.	</p>
      <p>
        <input type="radio" name="e6" id="radio11" value="1" />
        Me gusta tener un amigo íntimo. </p>
      <p>
        <input type="radio" name="e6" id="radio12" value="2" />
        En   un   grupo   me   gusta   tener varios amigos&nbsp;</p></td>
  </tr>
  <tr>
    <td><p>7.	</p>
      <p>
        <input type="radio" name="e7" id="radio13" value="1" />
        Yo cambio rápidamente cuando lo creo necesario.        </p>
      <p>
        <input type="radio" name="e7" id="radio14" value="2" />
        Yo intento tener amigos íntimos
        &nbsp;</p></td>
    <td><p>8.	</p>
      <p>
        <input type="radio" name="e8" id="radio15" value="1" />
        Me gusta "pagar con la misma
        moneda" cuando alguien me
        ofende.        </p>
      <p>
        <input type="radio" name="e8" id="radio16" value="2" />
        Me gusta hacer cosas nuevas y diferentes.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>9.   </p>
      <p>
        <input type="radio" name="e9" id="radio17" value="1" />
        Quiero que mi jefe me estime.</p>
      <p> 
        <input type="radio" name="e9" id="radio18" value="2" />
        Me gusta decir a la gente cuando está equivocada.</p></td>
    <td><p>10. </p>
      <p>
        <input type="radio" name="e10" id="radio19" value="1" />
        Me gusta seguir las instrucciones<br />
        que me dan.</p>
      <p> 
        <input type="radio" name="e10" id="radio20" value="2" />
        Me gusta agradar a mis superiores.</p></td>
  </tr>
  <tr>
    <td><p>11.   </p>
      <p>
        <input type="radio" name="e11" id="radio21" value="1" />
        Me esfuerzo mucho.</p>
      <p> 
        <input type="radio" name="e11" id="radio22" value="2" />
        Soy  ordenado, pongo todo es su lugar.</p></td>
    <td><p>12. </p>
      <p>
        <input type="radio" name="e12" id="radio23" value="1" />
        Yo logro que la gente haga lo que<br />
        tiene que hacer.</p>
      <p> 
        <input type="radio" name="e12" id="radio24" value="2" />
        No me altero fácilmente.</p></td>
  </tr>
  <tr>
    <td><p>13. </p>
      <p>
        <input type="radio" name="e13" id="radio25" value="1" />
        Me gusta decir al grupo lo que<br />
        tiene que hacer.</p>
      <p> 
        <input type="radio" name="e13" id="radio26" value="2" />
        Cuando comienzo un  trabajo, no lo dejo hasta terminarlo.</p></td>
    <td><p>14. </p>
      <p>
        <input type="radio" name="e14" id="radio27" value="1" />
        Me gusta ser animado e<br />
        interesante.</p>
      <p> 
        <input type="radio" name="e14" id="radio28" value="2" />
        Yo quiero ser una  persona rica y famosa.</p></td>
  </tr>
  <tr>
    <td><p>15. </p>
      <p>
        <input type="radio" name="e15" id="radio29" value="1" />
        Me gusta identificarme con<br />
        grupos.</p>
      <p> 
        <input type="radio" name="e15" id="radio30" value="2" />
        Me  gusta ayudar a las personas a que tomen una conclusión.</p></td>
    <td><p>16. </p>
      <p>
        <input type="radio" name="e16" id="radio31" value="1" />
        Me preocupa cuando alguien no<br />
        me estima.</p>
      <p> 
        <input type="radio" name="e16" id="radio32" value="2" />
        Me gusta que la  gente note mi presencia.</p></td>
  </tr>
  <tr>
    <td><p>17. </p>
      <p>
        <input type="radio" name="e17" id="radio33" value="1" />
        Me gusta experimentar cosas<br />
        nuevas.</p>
      <p> 
        <input type="radio" name="e17" id="radio34" value="2" />
        Prefiero  trabajar con otras personas que solo.</p></td>
    <td><p>18. </p>
      <p>
        <input type="radio" name="e18" id="radio35" value="1" />
        Algunas veces culpo a otros<br />
        cuando las cosas salen mal.</p>
      <p> 
        <input type="radio" name="e18" id="radio36" value="2" />
        Me  molesta  cuando le soy antipático a alguien.</p></td>
  </tr>
  <tr>
    <td><p>19. </p>
      <p>
        <input type="radio" name="e19" id="radio37" value="1" />
        Me gusta complacer a mis<br />
        superiores</p>
      <p>
        <input type="radio" name="e19" id="radio38" value="2" />
        Me gusta experimentar trabajos nuevos y diferentes</p></td>
    <td><p>20. </p>
      <p>
        <input type="radio" name="e20" id="e20" value="1" />
        <label for="e20"></label>
        Me gusta que me den instrucciones precisas para hacer<br />
        un trabajo.</p>
      <p>
        <input type="radio" name="e20" id="e20" value="2" />
        <label for="e26"></label>
        Me gustaría decírselo a la gente  cuando me molestan.</p></td>
  </tr>
  <tr>
    <td><p>21. </p>
      <p>
        <input type="radio" name="e21" id="radio39" value="1" />
        Siempre trabajo intensamente.</p>
      <p> 
        <input type="radio" name="e21" id="radio40" value="2" />
        Me  gusta hacer las cosas una por una detalladamente.</p></td>
    <td><p>22. </p>
      <p>
        <input type="radio" name="e22" id="radio41" value="1" />
        Soy un buen dirigente.</p>
      <p> 
        <input type="radio" name="e22" id="radio42" value="2" />
        Yo organizo muy bien mi trabajo.</p></td>
  </tr>
  <tr>
    <td><p>23. </p>
      <p>
        <input type="radio" name="e23" id="radio43" value="1" />
        Me enfado con facilidad.</p>
      <p> 
        <input type="radio" name="e23" id="radio44" value="2" />
        Soy   lento    para   la   toma    de decisiones.</p></td>
    <td><p>24.	</p>
      <p>
        <input type="radio" name="e24" id="radio45" value="1" />
        Me   gusta   trabajar   en   varias actividades al mismo tiempo.        </p>
      <p>
        <input type="radio" name="e24" id="radio46" value="2" />
        Cuando estoy en un grupo, me gusta estar callado.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>25.	</p>
      <p>
        <input type="radio" name="e25" id="radio47" value="1" />
        Me gusta que me inviten.        </p>
      <p>
        <input type="radio" name="e25" id="radio48" value="2" />
        Me gusta hacer las cosas mejor que los demás.
        &nbsp;</p></td>
    <td><p>26.	</p>
      <p>
        <input type="radio" name="e26" id="radio49" value="1" />
        Me gusta tener amigos íntimos.        </p>
      <p>
        <input type="radio" name="e26" id="radio50" value="2" />
        Me gusta aconsejar a los demás.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>27.	</p>
      <p>
        <input type="radio" name="e27" id="radio51" value="1" />
        Me gusta hacer cosas nuevas y diferentes.        </p>
      <p>
        <input type="radio" name="e27" id="radio52" value="2" />
        Me gusta hablar de la forma como obtengo mis éxitos.
        &nbsp;</p></td>
    <td><p>28. </p>
      <p>
        <input type="radio" name="e28" id="radio53" value="1" />
        Cuando tengo razón me gusta<br />
        luchar por ella.</p>
      <p> 
        <input type="radio" name="e28" id="radio54" value="2" />
        Me gusta permanecer a un grupo.</p></td>
  </tr>
  <tr>
    <td><p>29.	</p>
      <p>
        <input type="radio" name="e29" id="radio55" value="1" />
        Evito ser diferente a los demás. </p>
      <p>
        <input type="radio" name="e29" id="radio56" value="2" />
        Intento  acercarme   mucho  a   la gente.&nbsp;</p></td>
    <td><p>30.	</p>
      <p>
        <input type="radio" name="e30" id="radio57" value="1" />
        Me gusta que me digan exactamente como hacer mi trabajo.        </p>
      <p>
        <input type="radio" name="e30" id="radio58" value="2" />
        Me aburro fácilmente.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>31.	</p>
      <p>
        <input type="radio" name="e31" id="radio59" value="1" />
        Trabajo intensamente. </p>
      <p>
        <input type="radio" name="e31" id="radio60" value="2" />
        Pienso y planeo mucho.&nbsp;</p></td>
    <td><p>32.	</p>
      <p>
        <input type="radio" name="e32" id="radio61" value="1" />
        Yo dirijo al grupo.        </p>
      <p>
        <input type="radio" name="e32" id="radio62" value="2" />
        Los pequeños detalles me interesan.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>33. </p>
      <p>
        <input type="radio" name="e33" id="radio63" value="1" />
        Tomo decisiones fácil y<br />
        rápidamente.</p>
      <p> 
        <input type="radio" name="e33" id="radio64" value="2" />
        Tengo  mis cosas limpias y ordenadas.</p></td>
    <td><p>34. </p>
      <p>
        <input type="radio" name="e34" id="radio65" value="1" />
        Hago las  cosas con rapidez.</p>
      <p> 
        <input type="radio" name="e34" id="radio66" value="2" />
        Yo casi nunca me  enojo ni me pongo triste.</p></td>
  </tr>
  <tr>
    <td><p>35.  </p>
      <p>
        <input type="radio" name="e35" id="radio67" value="1" />
        Me gusta  ser parte del grupo.</p>
      <p> 
        <input type="radio" name="e35" id="radio68" value="2" />
        Me  gusta hacer un solo trabajo a la vez.</p></td>
    <td><p>36.  </p>
      <p>
        <input type="radio" name="e36" id="radio69" value="1" />
        Intento hacer amigos íntimos.</p>
      <p> 
        <input type="radio" name="e36" id="radio70" value="2" />
        Yo pongo empeño en ser el mejor.</p></td>
  </tr>
  <tr>
    <td><p>37.  </p>
      <p>
        <input type="radio" name="e37" id="radio71" value="1" />
        Me gustan los nuevos modelos en<br />
        trajes y coches.</p>
      <p> 
        <input type="radio" name="e37" id="radio72" value="2" />
        Me   gusta    ser   responsable   por otros.</p></td>
    <td><p>38.  </p>
      <p>
        <input type="radio" name="e38" id="radio73" value="1" />
        Me gusta discutir.</p>
      <p> 
        <input type="radio" name="e38" id="radio74" value="2" />
        Me    gusta     que    me    pongan atención.</p></td>
  </tr>
  <tr>
    <td><p>39.  </p>
      <p>
        <input type="radio" name="e39" id="radio75" value="1" />
        Me     gusta     agradar      a     mis superiores.</p>
      <p> 
        <input type="radio" name="e39" id="radio76" value="2" />
        Estoy  interesado en ser parte del grupo.</p></td>
    <td><p>40.  </p>
      <p>
        <input type="radio" name="e40" id="radio77" value="1" />
        Me gusta apegarme a las reglas<br />
        establecidas.</p>
      <p> 
        <input type="radio" name="e40" id="radio78" value="2" />
        Me   gusta    que   la   gente    me conozca muy bien.</p></td>
  </tr>
  <tr>
    <td><p>41.	</p>
      <p>
        <input type="radio" name="e41" id="radio79" value="1" />
        Me esfuerzo mucho.        </p>
      <p>
        <input type="radio" name="e41" id="radio80" value="2" />
        Soy muy amigable.
        &nbsp;</p></td>
    <td><p>42.	</p>
      <p>
        <input type="radio" name="e42" id="radio81" value="1" />
        La gente piensa que soy un buen "dirigente".</p>
      <p>
        <input type="radio" name="e42" id="radio82" value="2" />
        Pienso las cosas con cuidado y detenidamente.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>43.  </p>
      <p>
        <input type="radio" name="e43" id="radio83" value="1" />
        A menudo me arriesgo. </p>
      <p>
        <input type="radio" name="e43" id="radio84" value="2" />
        Me gusta darle  importancia a las cosas joviales.</p></td>
    <td><p>44.  </p>
      <p>
        <input type="radio" name="e44" id="radio85" value="1" />
        La gente piensa que trabajo con<br />
        rapidez.</p>
      <p> 
        <input type="radio" name="e44" id="radio86" value="2" />
        La gente piensa que  tengo mis cosas limpias y ordenadas.</p></td>
  </tr>
  <tr>
    <td><p>45.  </p>
      <p>
        <input type="radio" name="e45" id="radio87" value="1" />
        Me gusta jugar y hacer deporte.</p>
      <p>
        <input type="radio" name="e45" id="radio88" value="2" />
        Soy muy agradable.</p></td>
    <td><p>46. </p>
      <p>
        <input type="radio" name="e46" id="radio89" value="1" />
        Me gusta que la gente sea unida<br />
        y sea amistosa.</p>
      <p> 
        <input type="radio" name="e46" id="radio90" value="2" />
        Siempre   trato    de   terminar   un trabajo difícil.</p></td>
  </tr>
  <tr>
    <td><p>47. </p>
      <p>
        <input type="radio" name="e47" id="radio91" value="1" />
        Me gusta experimentar y probar<br />
        nuevas cosas.</p>
      <p> 
        <input type="radio" name="e47" id="radio92" value="2" />
        Me gusta hacer bien  un trabajo difícil.</p></td>
    <td><p>48. </p>
      <p>
        <input type="radio" name="e48" id="radio93" value="1" />
        Me     gusta     que      me     traten justamente.</p>
      <p> 
        <input type="radio" name="e48" id="radio94" value="2" />
        Me  gusta decir a los demás cómo hacer las cosas.</p></td>
  </tr>
  <tr>
    <td><p>49. </p>
      <p>
        <input type="radio" name="e49" id="radio95" value="1" />
        Me   gusta    hacer   aquello   que esperan de mi.</p>
      <p> 
        <input type="radio" name="e49" id="radio96" value="2" />
        Me    gusta     que    me    pongan atención.</p></td>
    <td><p>50.	</p>
      <p>
        <input type="radio" name="e50" id="radio97" value="1" />
        Me    gusta    tener  instrucciones precisas para hacer un trabajo.        </p>
      <p>
        <input type="radio" name="e50" id="radio98" value="2" />
        Me gusta estar con la gente.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>51.	</p>
      <p>
        <input type="radio" name="e51" id="radio99" value="1" />
        Siempre trato de hacer mi trabajo perfecto.</p>
      <p>
        <input type="radio" name="e51" id="radio100" value="2" />
        Me dicen que soy prácticamente incasable.
        &nbsp;</p></td>
    <td><p>52.	</p>
      <p>
        <input type="radio" name="e52" id="radio101" value="1" />
        Soy el tipo "dirigente". </p>
      <p>
        <input type="radio" name="e52" id="radio102" value="2" />
        Hago amigos fácilmente.&nbsp;</p></td>
  </tr>
  <tr>
    <td><p>53.	</p>
      <p>
        <input type="radio" name="e53" id="radio103" value="1" />
        Asumo riesgos. </p>
      <p>
        <input type="radio" name="e53" id="radio104" value="2" />
        Pienso mucho.&nbsp;</p></td>
    <td><p>54.	</p>
      <p>
        <input type="radio" name="e54" id="radio105" value="1" />
        Trabajo   a   un   paso   rápido   y constante.</p>
      <p>
        <input type="radio" name="e54" id="radio106" value="2" />
        Disfruto trabajando con detalles.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>55. </p>
      <p>
        <input type="radio" name="e55" id="radio107" value="1" />
        Tengo    mucha    energía para juegos y deportes.</p>
      <p>
        <input type="radio" name="e55" id="radio108" value="2" />
        Tengo    mis     cosas    limpias     y ordenadas.</p></td>
    <td><p>56. </p>
      <p>
        <input type="radio" name="e56" id="radio109" value="1" />
        Me llevo bien con todo el mundo. </p>
      <p>
        <input type="radio" name="e56" id="radio110" value="2" />
        Soy de  temperamento estable.</p></td>
  </tr>
  <tr>
    <td><p>57.  </p>
      <p>
        <input type="radio" name="e57" id="radio111" value="1" />
        Quiero conocer nueva gente  y hacer cosas nuevas.</p>
      <p> 
        <input type="radio" name="e57" id="radio112" value="2" />
        Siempre quiero terminar el trabajo que he empezado.</p></td>
    <td><p>58. </p>
      <p>
        <input type="radio" name="e58" id="radio113" value="1" />
        Normalmente sostengo mis creencias.</p>
      <p>
        <input type="radio" name="e58" id="radio114" value="2" />
        Normalmente me  gusta trabajar intensamente.</p></td>
  </tr>
  <tr>
    <td><p>59.  </p>
      <p>
        <input type="radio" name="e59" id="radio115" value="1" />
        Me gustan las sugerencias de las<br />
        personas que admiro.</p>
      <p> 
        <input type="radio" name="e59" id="radio116" value="2" />
        Me gusta tener mi  cargo a otras personas.</p></td>
    <td><p>60.  </p>
      <p>
        <input type="radio" name="e60" id="radio117" value="1" />
        Me dejo influenciar fácilmente por<br />
        otras personas.</p>
      <p> 
        <input type="radio" name="e60" id="radio118" value="2" />
        Me  gusta que me pongan mucha atención.</p></td>
  </tr>
  <tr>
    <td><p>61.  </p>
      <p>
        <input type="radio" name="e61" id="radio119" value="1" />
        Normalmente trabajo intensamente.</p>
      <p>
        <input type="radio" name="e61" id="radio120" value="2" />
        Normalmente  trabajo con rapidez.</p></td>
    <td><p>62.	</p>
      <p>
        <input type="radio" name="e62" id="radio121" value="1" />
        Cuando hablo el grupo escucha. </p>
      <p>
        <input type="radio" name="e62" id="radio122" value="2" />
        Soy hábil con herramientas.&nbsp;</p></td>
  </tr>
  <tr>
    <td><p>63.	</p>
      <p>
        <input type="radio" name="e63" id="radio123" value="1" />
        Soy lento en hacer amigos.        </p>
      <p>
        <input type="radio" name="e63" id="radio124" value="2" />
        Me toma tiempo para llegar a una conclusión.
        &nbsp;</p></td>
    <td><p>64.	</p>
      <p>
        <input type="radio" name="e64" id="radio125" value="1" />
        Normalmente como de prisa. </p>
      <p>
        <input type="radio" name="e64" id="radio126" value="2" />
        Me gusta leer.&nbsp;</p></td>
  </tr>
  <tr>
    <td><p>65.	</p>
      <p>
        <input type="radio" name="e65" id="radio127" value="1" />
        Me gusta  el  trabajo en  donde puedo moverme.</p>
      <p>
        <input type="radio" name="e65" id="radio128" value="2" />
        Me gusta el trabajo que tiene que hacerse con cuidado.
        &nbsp;</p></td>
    <td><p>66. </p>
      <p>
        <input type="radio" name="e66" id="radio129" value="1" />
        Hago el mayor número posible de<br />
        amigos.</p>
      <p> 
        <input type="radio" name="e66" id="radio130" value="2" />
        Encuentro  lo que me he guardado.</p></td>
  </tr>
  <tr>
    <td><p>67.	</p>
      <p>
        <input type="radio" name="e67" id="radio131" value="1" />
        Pienso las cosas con anticipación.</p>
      <p>
        <input type="radio" name="e67" id="radio132" value="2" />
        Siempre soy agradable.&nbsp;</p></td>
    <td><p>68.	</p>
      <p>
        <input type="radio" name="e68" id="radio133" value="1" />
        Yo cuido mucho mi reputación. </p>
      <p>
        <input type="radio" name="e68" id="radio134" value="2" />
        Yo   le pongo atención a un problema hasta que se resuelve.&nbsp;</p></td>
  </tr>
  <tr>
    <td><p>69. </p>
      <p>
        <input type="radio" name="e69" id="radio135" value="1" />
        Me gusta agradar a la gente que<br />
        admiro.</p>
      <p> 
        <input type="radio" name="e69" id="radio136" value="2" />
        Quiero  tener éxito.</p></td>
    <td><p>70. </p>
      <p>
        <input type="radio" name="e70" id="radio137" value="1" />
        Me    gusta    que     otros    tomen decisiones para el grupo.</p>
      <p> 
        <input type="radio" name="e70" id="radio138" value="2" />
        A mí me gusta tomar  decisiones para el grupo.</p></td>
  </tr>
  <tr>
    <td><p>71.	</p>
      <p>
        <input type="radio" name="e71" id="radio139" value="1" />
        Siempre me esfuerzo mucho. </p>
      <p>
        <input type="radio" name="e71" id="radio140" value="2" />
        Tomo      decisiones      fácil      y rápidamente.&nbsp;</p></td>
    <td><p>72.	</p>
      <p>
        <input type="radio" name="e72" id="radio141" value="1" />
        El grupo hace normalmente lo que yo quiero.        </p>
      <p>
        <input type="radio" name="e72" id="radio142" value="2" />
        Normalmente tengo prisa.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>73.</p>
      <p>
        <input type="radio" name="e73" id="radio143" value="1" /> 
        A menudo me siento cansado.</p>
      <p> 
        <input type="radio" name="e73" id="radio144" value="2" />
        Soy lento para tomar decisiones.</p></td>
    <td><p>74.	</p>
      <p>
        <input type="radio" name="e74" id="radio145" value="1" />
        Trabajo con rapidez.        </p>
      <p>
        <input type="radio" name="e74" id="radio146" value="2" />
        Hago amigos fácilmente.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>75.	</p>
      <p>
        <input type="radio" name="e75" id="radio147" value="1" />
        Soy activo y con mucho vigor.</p>
      <p>
        <input type="radio" name="e75" id="radio148" value="2" />
        Dedico mucho tiempo a pensar.&nbsp;</p></td>
    <td><p>76.	</p>
      <p>
        <input type="radio" name="e76" id="radio149" value="1" />
        Soy cordial con la gente.        </p>
      <p>
        <input type="radio" name="e76" id="radio150" value="2" />
        Me gusta el trabajo que requiere precisión.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>77.	</p>
      <p>
        <input type="radio" name="e77" id="radio151" value="1" />
        Pienso y planeo mucho. </p>
      <p>
        <input type="radio" name="e77" id="radio152" value="2" />
        Guardo cada cosa en su lugar.&nbsp;</p></td>
    <td><p>78.	</p>
      <p>
        <input type="radio" name="e78" id="radio153" value="1" />
        Me gusta el trabajo que requiere detalles.</p>
      <p>
        <input type="radio" name="e78" id="radio154" value="2" />
        Siempre termino el trabajo que he empezado.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>79. </p>
      <p>
        <input type="radio" name="e79" id="radio155" value="1" />
        Me gusta imitar a la gente que<br />
        admiro.</p>
      <p> 
        <input type="radio" name="e79" id="radio156" value="2" />
        Difícilmente me enojo.</p></td>
    <td><p>80.	</p>
      <p>
        <input type="radio" name="e80" id="radio157" value="1" />
        Me    gustan    las    instrucciones claras.        </p>
      <p>
        <input type="radio" name="e80" id="radio158" value="2" />
        Me gusta trabajar intensamente.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>81.</p>
      <p>
        <input type="radio" name="e81" id="radio159" value="1" /> 
        Yo trato de lograr lo que quiero.</p>
      <p> 
        <input type="radio" name="e81" id="radio160" value="2" />
        Soy un buen &quot;dirigente&quot;.</p></td>
    <td><p>82. </p>
      <p>
        <input type="radio" name="e82" id="radio161" value="1" />
        Hago   que   los    demás    trabajen intensamente.</p>
      <p> 
        <input type="radio" name="e82" id="radio162" value="2" />
        Soy  una persona que no se preocupa por nada.</p></td>
  </tr>
  <tr>
    <td><p>83.	</p>
      <p>
        <input type="radio" name="e83" id="radio163" value="1" />
        Yo me decido rápidamente. </p>
      <p>
        <input type="radio" name="e83" id="radio164" value="2" />
        Yo hablo rápidamente.&nbsp;</p></td>
    <td><p>84.	</p>
      <p>
        <input type="radio" name="e84" id="radio165" value="1" />
        Normalmente trabajo de prisa. </p>
      <p>
        <input type="radio" name="e84" id="radio166" value="2" />
        Hago ejercicio con regularidad.&nbsp;</p></td>
  </tr>
  <tr>
    <td><p>85.	</p>
      <p>
        <input type="radio" name="e85" id="radio168" value="1" />
        No me gusta conocer gente. </p>
      <p>
        <input type="radio" name="e85" id="radio167" value="2" />
        Me canso en seguida.&nbsp;</p></td>
    <td><p>86.	</p>
      <p>
        <input type="radio" name="e86" id="radio169" value="1" />
        Hago muchísimos amigos.        </p>
      <p>
        <input type="radio" name="e86" id="radio170" value="2" />
        Dedico mucho tiempo a pensar.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>87.	</p>
      <p>
        <input type="radio" name="e87" id="radio171" value="1" />
        Me gusta trabajar con problemas teóricos.</p>
      <p>
        <input type="radio" name="e87" id="radio172" value="2" />
        Me gusta trabajar con detalles.
        &nbsp;</p></td>
    <td><p>88.	</p>
      <p>
        <input type="radio" name="e88" id="radio173" value="1" />
        Me gusta trabajar con detalles.        </p>
      <p>
        <input type="radio" name="e88" id="radio174" value="2" />
        Me gusta organizar mi trabajo.
        &nbsp;</p></td>
  </tr>
  <tr>
    <td><p>89.	</p>
      <p>
        <input type="radio" name="e89" id="radio175" value="1" />
        Pongo las cosas en su lugar. </p>
      <p>
        <input type="radio" name="e89" id="radio176" value="2" />
        Siempre soy agradable.&nbsp;</p></td>
    <td><p>90.	</p>
      <p>
        <input type="radio" name="e90" id="radio177" value="1" />
        Me gusta que me digan lo que tengo que hacer.        </p>
      <p>
        <input type="radio" name="e90" id="radio178" value="2" />
        Yo   debo   terminar   lo   que   he iniciado.
        &nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
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




include("Conexion2.php");
 if(isset($_POST['register'])){
	
	if (!empty($_POST['e1'])&&($_POST['e1'])=='1'){
 	$G++;
	}
	if (!empty($_POST['e11'])&&($_POST['e11'])=='1'){
 	$G++;
	}
	if (!empty($_POST['e21'])&&($_POST['e21'])=='1'){
 	$G++;
	}
	if (!empty($_POST['e31'])&&($_POST['e31'])=='1'){
 	$G++;
	}
	if (!empty($_POST['e41'])&&($_POST['e41'])=='1'){
 	$G++;
	}
	if (!empty($_POST['e51'])&&($_POST['e51'])=='1'){
 	$G++;
	}
	if (!empty($_POST['e61'])&&($_POST['e61'])=='1'){
 	$G++;
	}
	if (!empty($_POST['e71'])&&($_POST['e71'])=='1'){
 	$G++;
	}
	if (!empty($_POST['e81'])&&($_POST['e81'])=='1'){
 	$G++;
	}
	
	if (!empty($_POST['e81'])&&($_POST['e81'])=='2'){
 	$L++;
	}
	if (!empty($_POST['e12'])&&($_POST['e12'])=='1'){
 	$L++;
	}
	if (!empty($_POST['e22'])&&($_POST['e22'])=='1'){
 	$L++;
	}
	if (!empty($_POST['e32'])&&($_POST['e32'])=='1'){
 	$L++;
	}
	if (!empty($_POST['e42'])&&($_POST['e42'])=='1'){
 	$L++;
	}
	if (!empty($_POST['e52'])&&($_POST['e52'])=='1'){
 	$L++;
	}
	if (!empty($_POST['e62'])&&($_POST['e62'])=='1'){
 	$L++;
	}
	if (!empty($_POST['e72'])&&($_POST['e72'])=='1'){
 	$L++;
	}
	if (!empty($_POST['e82'])&&($_POST['e82'])=='1'){
 	$L++;
	}
	
	if (!empty($_POST['e71'])&&($_POST['e71'])=='2'){
 	$I++;
	}
	if (!empty($_POST['e82'])&&($_POST['e82'])=='2'){
 	$I++;
	}
	if (!empty($_POST['e23'])&&($_POST['e23'])=='1'){
 	$I++;
	}
	if (!empty($_POST['e33'])&&($_POST['e33'])=='1'){
 	$I++;
	}
	if (!empty($_POST['e43'])&&($_POST['e43'])=='1'){
 	$I++;
	}
	if (!empty($_POST['e53'])&&($_POST['e53'])=='1'){
 	$I++;
	}
	if (!empty($_POST['e63'])&&($_POST['e63'])=='1'){
 	$I++;
	}
	if (!empty($_POST['e73'])&&($_POST['e73'])=='1'){
 	$I++;
	}
	if (!empty($_POST['e83'])&&($_POST['e83'])=='1'){
 	$I++;
	}
	
	
	if (!empty($_POST['e61'])&&($_POST['e61'])=='2'){
 	$T++;
	}
	if (!empty($_POST['e72'])&&($_POST['e72'])=='2'){
 	$T++;
	}
	if (!empty($_POST['e83'])&&($_POST['e83'])=='2'){
 	$T++;
	}
	if (!empty($_POST['e34'])&&($_POST['e34'])=='1'){
 	$T++;
	}
	if (!empty($_POST['e44'])&&($_POST['e44'])=='1'){
 	$T++;
	}
	if (!empty($_POST['e54'])&&($_POST['e54'])=='1'){
 	$T++;
	}
	if (!empty($_POST['e64'])&&($_POST['e64'])=='1'){
 	$T++;
	}
	if (!empty($_POST['e74'])&&($_POST['e74'])=='1'){
 	$T++;
	}
	if (!empty($_POST['e84'])&&($_POST['e84'])=='1'){
 	$T++;
	}
	
	/////////
	if (!empty($_POST['e51'])&&($_POST['e51'])=='2'){
 	$V++;
	}
	if (!empty($_POST['e62'])&&($_POST['e62'])=='2'){
 	$V++;
	}
	if (!empty($_POST['e73'])&&($_POST['e73'])=='2'){
 	$V++;
	}
	if (!empty($_POST['e84'])&&($_POST['e84'])=='2'){
 	$V++;
	}
	if (!empty($_POST['e45'])&&($_POST['e45'])=='1'){
 	$V++;
	}
	if (!empty($_POST['e55'])&&($_POST['e55'])=='1'){
 	$V++;
	}
	if (!empty($_POST['e65'])&&($_POST['e65'])=='1'){
 	$V++;
	}
	if (!empty($_POST['e75'])&&($_POST['e75'])=='1'){
 	$V++;
	}
	if (!empty($_POST['e85'])&&($_POST['e85'])=='1'){
 	$V++;
	}
	
	////
	
	if (!empty($_POST['e41'])&&($_POST['e41'])=='2'){
 	$S++;
	}
	if (!empty($_POST['e52'])&&($_POST['e52'])=='2'){
 	$S++;
	}
	if (!empty($_POST['e63'])&&($_POST['e63'])=='2'){
 	$S++;
	}
	if (!empty($_POST['e74'])&&($_POST['e74'])=='2'){
 	$S++;
	}
	if (!empty($_POST['e85'])&&($_POST['e85'])=='2'){
 	$S++;
	}
	if (!empty($_POST['e56'])&&($_POST['e56'])=='1'){
 	$S++;
	}
	if (!empty($_POST['e66'])&&($_POST['e66'])=='1'){
 	$S++;
	}
	if (!empty($_POST['e76'])&&($_POST['e76'])=='1'){
 	$S++;
	}
	if (!empty($_POST['e86'])&&($_POST['e86'])=='1'){
 	$S++;
	}
	
	/////
	
	if (!empty($_POST['e31'])&&($_POST['e31'])=='2'){
 	$R++;
	}
	if (!empty($_POST['e42'])&&($_POST['e42'])=='2'){
 	$R++;
	}
	if (!empty($_POST['e53'])&&($_POST['e53'])=='2'){
 	$R++;
	}
	if (!empty($_POST['e64'])&&($_POST['e64'])=='2'){
 	$R++;
	}
	if (!empty($_POST['e75'])&&($_POST['e75'])=='2'){
 	$R++;
	}
	if (!empty($_POST['e86'])&&($_POST['e86'])=='2'){
 	$R++;
	}
	if (!empty($_POST['e67'])&&($_POST['e67'])=='1'){
 	$R++;
	}
	if (!empty($_POST['e77'])&&($_POST['e77'])=='1'){
 	$R++;
	}
	if (!empty($_POST['e87'])&&($_POST['e87'])=='1'){
 	$R++;
	}
	
	////
	
	if (!empty($_POST['e21'])&&($_POST['e21'])=='2'){
 	$D++;
	}
	if (!empty($_POST['e32'])&&($_POST['e32'])=='2'){
 	$D++;
	}
	if (!empty($_POST['e43'])&&($_POST['e43'])=='2'){
 	$D++;
	}
	if (!empty($_POST['e54'])&&($_POST['e54'])=='2'){
 	$D++;
	}
	if (!empty($_POST['e65'])&&($_POST['e65'])=='2'){
 	$D++;
	}
	if (!empty($_POST['e76'])&&($_POST['e76'])=='2'){
 	$D++;
	}
	if (!empty($_POST['e87'])&&($_POST['e87'])=='2'){
 	$D++;
	}
	if (!empty($_POST['e78'])&&($_POST['e78'])=='1'){
 	$D++;
	}
	if (!empty($_POST['e88'])&&($_POST['e88'])=='1'){
 	$D++;
	}
	
	////
	
	if (!empty($_POST['e11'])&&($_POST['e11'])=='2'){
 	$C++;
	}
	if (!empty($_POST['e22'])&&($_POST['e22'])=='2'){
 	$C++;
	}
	if (!empty($_POST['e33'])&&($_POST['e33'])=='2'){
 	$C++;
	}
	if (!empty($_POST['e44'])&&($_POST['e44'])=='2'){
 	$C++;
	}
	if (!empty($_POST['e55'])&&($_POST['e55'])=='2'){
 	$C++;
	}
	if (!empty($_POST['e66'])&&($_POST['e66'])=='2'){
 	$C++;
	}
	if (!empty($_POST['e77'])&&($_POST['e77'])=='2'){
 	$C++;
	}
	if (!empty($_POST['e88'])&&($_POST['e88'])=='2'){
 	$C++;
	}
	if (!empty($_POST['e89'])&&($_POST['e89'])=='1'){
 	$C++;
	}
	
	////
	
	if (!empty($_POST['e1'])&&($_POST['e1'])=='2'){
 	$E++;
	}
	if (!empty($_POST['e12'])&&($_POST['e12'])=='2'){
 	$E++;
	}
	if (!empty($_POST['e23'])&&($_POST['e23'])=='2'){
 	$E++;
	}
	if (!empty($_POST['e34'])&&($_POST['e34'])=='2'){
 	$E++;
	}
	if (!empty($_POST['e45'])&&($_POST['e45'])=='2'){
 	$E++;
	}
	if (!empty($_POST['e56'])&&($_POST['e56'])=='2'){
 	$E++;
	}
	if (!empty($_POST['e67'])&&($_POST['e67'])=='2'){
 	$E++;
	}
	if (!empty($_POST['e78'])&&($_POST['e78'])=='2'){
 	$E++;
	}
	if (!empty($_POST['e89'])&&($_POST['e89'])=='2'){
 	$E++;
	}
	
	////
	
	if (!empty($_POST['e2'])&&($_POST['e2'])=='2'){
 	$N++;
	}
	if (!empty($_POST['e13'])&&($_POST['e13'])=='2'){
 	$N++;
	}
	if (!empty($_POST['e24'])&&($_POST['e24'])=='2'){
 	$N++;
	}
	if (!empty($_POST['e35'])&&($_POST['e35'])=='2'){
 	$N++;
	}
	if (!empty($_POST['e46'])&&($_POST['e46'])=='2'){
 	$N++;
	}
	if (!empty($_POST['e57'])&&($_POST['e57'])=='2'){
 	$N++;
	}
	if (!empty($_POST['e68'])&&($_POST['e68'])=='2'){
 	$N++;
	}
	if (!empty($_POST['e79'])&&($_POST['e79'])=='2'){
 	$N++;
	}
	if (!empty($_POST['e90'])&&($_POST['e90'])=='2'){
 	$N++;
	}
	
	
	////
	
	if (!empty($_POST['e2'])&&($_POST['e2'])=='1'){
 	$A++;
	}
	if (!empty($_POST['e3'])&&($_POST['e3'])=='2'){
 	$A++;
	}
	if (!empty($_POST['e14'])&&($_POST['e14'])=='2'){
 	$A++;
	}
	if (!empty($_POST['e25'])&&($_POST['e25'])=='2'){
 	$A++;
	}
	if (!empty($_POST['e36'])&&($_POST['e36'])=='2'){
 	$A++;
	}
	if (!empty($_POST['e47'])&&($_POST['e47'])=='2'){
 	$A++;
	}
	if (!empty($_POST['e58'])&&($_POST['e58'])=='2'){
 	$A++;
	}
	if (!empty($_POST['e69'])&&($_POST['e69'])=='2'){
 	$A++;
	}
	if (!empty($_POST['e80'])&&($_POST['e80'])=='2'){
 	$A++;
	}
	
	/////
	
	if (!empty($_POST['e3'])&&($_POST['e3'])=='1'){
 	$P++;
	}
	if (!empty($_POST['e13'])&&($_POST['e13'])=='1'){
 	$P++;
	}
	if (!empty($_POST['e4'])&&($_POST['e4'])=='2'){
 	$P++;
	}
	if (!empty($_POST['e15'])&&($_POST['e15'])=='2'){
 	$P++;
	}
	if (!empty($_POST['e26'])&&($_POST['e26'])=='2'){
 	$P++;
	}
	if (!empty($_POST['e37'])&&($_POST['e37'])=='2'){
 	$P++;
	}
	if (!empty($_POST['e48'])&&($_POST['e48'])=='2'){
 	$P++;
	}
	if (!empty($_POST['e59'])&&($_POST['e59'])=='2'){
 	$P++;
	}
	if (!empty($_POST['e70'])&&($_POST['e70'])=='2'){
 	$P++;
	}
	
	///
	
	if (!empty($_POST['e4'])&&($_POST['e4'])=='1'){
 	$X++;
	}
	if (!empty($_POST['e14'])&&($_POST['e14'])=='1'){
 	$X++;
	}
	if (!empty($_POST['e24'])&&($_POST['e24'])=='1'){
 	$X++;
	}
	if (!empty($_POST['e5'])&&($_POST['e5'])=='2'){
 	$X++;
	}
	if (!empty($_POST['e16'])&&($_POST['e16'])=='2'){
 	$X++;
	}
	if (!empty($_POST['e27'])&&($_POST['e27'])=='2'){
 	$X++;
	}
	if (!empty($_POST['e38'])&&($_POST['e38'])=='2'){
 	$X++;
	}
	if (!empty($_POST['e49'])&&($_POST['e49'])=='2'){
 	$X++;
	}
	if (!empty($_POST['e60'])&&($_POST['e60'])=='2'){
 	$X++;
	}
	
	////
	
	if (!empty($_POST['e5'])&&($_POST['e5'])=='1'){
 	$B++;
	}
	if (!empty($_POST['e15'])&&($_POST['e15'])=='1'){
 	$B++;
	}
	if (!empty($_POST['e25'])&&($_POST['e25'])=='1'){
 	$B++;
	}
	if (!empty($_POST['e35'])&&($_POST['e35'])=='1'){
 	$B++;
	}
	if (!empty($_POST['e6'])&&($_POST['e6'])=='2'){
 	$B++;
	}
	if (!empty($_POST['e17'])&&($_POST['e17'])=='2'){
 	$B++;
	}
	if (!empty($_POST['e28'])&&($_POST['e28'])=='2'){
 	$B++;
	}
	if (!empty($_POST['e39'])&&($_POST['e39'])=='2'){
 	$B++;
	}
	if (!empty($_POST['e50'])&&($_POST['e50'])=='2'){
 	$B++;
	}
	
	/////
	
	if (!empty($_POST['e6'])&&($_POST['e6'])=='1'){
 	$O++;
	}
	if (!empty($_POST['e16'])&&($_POST['e16'])=='1'){
 	$O++;
	}
	if (!empty($_POST['e26'])&&($_POST['e26'])=='1'){
 	$O++;
	}
	if (!empty($_POST['e36'])&&($_POST['e36'])=='1'){
 	$O++;
	}
	if (!empty($_POST['e46'])&&($_POST['e46'])=='1'){
 	$O++;
	}
	if (!empty($_POST['e7'])&&($_POST['e7'])=='2'){
 	$O++;
	}
	if (!empty($_POST['e18'])&&($_POST['e18'])=='2'){
 	$O++;
	}
	if (!empty($_POST['29'])&&($_POST['e29'])=='2'){
 	$O++;
	}
	if (!empty($_POST['e40'])&&($_POST['e40'])=='2'){
 	$O++;
	}
	
	/////
	
	if (!empty($_POST['e7'])&&($_POST['e7'])=='1'){
 	$Z++;
	}
	if (!empty($_POST['e17'])&&($_POST['e17'])=='1'){
 	$Z++;
	}
	if (!empty($_POST['e27'])&&($_POST['e27'])=='1'){
 	$Z++;
	}
	if (!empty($_POST['e37'])&&($_POST['e37'])=='1'){
 	$Z++;
	}
	if (!empty($_POST['e47'])&&($_POST['e47'])=='1'){
 	$Z++;
	}
	if (!empty($_POST['e57'])&&($_POST['e57'])=='1'){
 	$Z++;
	}
	if (!empty($_POST['e8'])&&($_POST['e8'])=='2'){
 	$Z++;
	}
	if (!empty($_POST['e19'])&&($_POST['e19'])=='2'){
 	$Z++;
	}
	if (!empty($_POST['e30'])&&($_POST['e30'])=='2'){
 	$Z++;
	}
	
	/////
	
	if (!empty($_POST['e8'])&&($_POST['e8'])=='1'){
 	$K++;
	}
	if (!empty($_POST['e18'])&&($_POST['e18'])=='1'){
 	$K++;
	}
	if (!empty($_POST['e28'])&&($_POST['e28'])=='1'){
 	$K++;
	}
	if (!empty($_POST['e38'])&&($_POST['e38'])=='1'){
 	$K++;
	}
	if (!empty($_POST['e48'])&&($_POST['e48'])=='1'){
 	$K++;
	}
	if (!empty($_POST['e58'])&&($_POST['e58'])=='1'){
 	$K++;
	}
	if (!empty($_POST['e68'])&&($_POST['e68'])=='1'){
 	$K++;
	}
	if (!empty($_POST['e9'])&&($_POST['e9'])=='2'){
 	$K++;
	}
	if (!empty($_POST['e20'])&&($_POST['e20'])=='2'){
 	$K++;
	}
	
	////
	
	if (!empty($_POST['e9'])&&($_POST['e9'])=='1'){
 	$F++;
	}
	if (!empty($_POST['e19'])&&($_POST['e19'])=='1'){
 	$F++;
	}
	if (!empty($_POST['e29'])&&($_POST['e29'])=='1'){
 	$F++;
	}
	if (!empty($_POST['e39'])&&($_POST['e39'])=='1'){
 	$F++;
	}
	if (!empty($_POST['e49'])&&($_POST['e49'])=='1'){
 	$F++;
	}
	if (!empty($_POST['e59'])&&($_POST['e59'])=='1'){
 	$F++;
	}
	if (!empty($_POST['e69'])&&($_POST['e69'])=='1'){
 	$F++;
	}
	if (!empty($_POST['e79'])&&($_POST['e79'])=='1'){
 	$F++;
	}
	if (!empty($_POST['e10'])&&($_POST['e10'])=='2'){
 	$F++;
	}
	
	/////
	
	
	if (!empty($_POST['e10'])&&($_POST['e10'])=='1'){
 	$W++;
	}
	if (!empty($_POST['e20'])&&($_POST['e20'])=='1'){
 	$W++;
	}
	if (!empty($_POST['e30'])&&($_POST['e30'])=='1'){
 	$W++;
	}
	if (!empty($_POST['e40'])&&($_POST['e40'])=='1'){
 	$W++;
	}
	if (!empty($_POST['e50'])&&($_POST['e50'])=='1'){
 	$W++;
	}
	if (!empty($_POST['e60'])&&($_POST['e60'])=='1'){
 	$W++;
	}
	if (!empty($_POST['e70'])&&($_POST['e70'])=='1'){
 	$W++;
	}
	if (!empty($_POST['e80'])&&($_POST['e80'])=='1'){
 	$W++;
	}
	if (!empty($_POST['e90'])&&($_POST['e90'])=='1'){
 	$W++;
	}
	
	
	include("Conexion2.php");	
	 mysqli_query($cnx,"UPDATE candidatos SET KostickG='$G', KostickL='$L',KostickI='$I',KostickT='$T',KostickV='$V', KostickS='$S', KostickR='$R',KostickD='$D',KostickC='$C',KostickE='$E',KostickN='$N',KostickA='$A',KostickP='$P',KostickX='$X',KostickB='$B',KostickO='$O',KostickZ='$Z',KostickK='$K',KostickF='$F',KostickW='$W' ,StatusKostick='No' WHERE User= '$nombreUser'");
	
	
	
	
	
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
