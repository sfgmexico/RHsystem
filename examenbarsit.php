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
			  
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examen Barsit</title>
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
                  <h1>EXAMEN BARSIT</h1>
                  <p>LEA ESTO CON MUCHA ATENCIÓN</p>
                  <p>Usted tendrá que ir resolviendo cuestiones parecidas a  éstas.<br />
                    Para los ejercicios de ejemplo anote la letra que indique  la respuesta correcta o escriba los números que se le indiquen en su hoja de  respuestas en la sección <strong>&ldquo;EJEMPLOS&rdquo;</strong>.</p>
                  <p><strong>EJEMPLOS:</strong><br />
                    1. ¿Qué palabra nos dice que es una manzana?<br />
                    a) Libro   b) Piedra    c) Casa   d) Fruto   e) Anima</p>
                  <p><br />
                    2. ¿Qué palabra nos dice lo contrario de bueno?<br />
                    a) Anterior   b)  Mejor   c) Malo   d) Simpático   e) Deseable</p>
                  <p><br />
                    3. De estas 5 palabras una pertenece a una clase diferente:  ¿Cuál es?<br />
                    a) Gato   b) Perro   c) Zapato   d) Caballo   e) Vaca </p>
                  <p>A  continuación se encuentran 60 preguntas parecidas a éstas. Para hacer este ejercicio le darán 10 minutos que usted debe aprovechar  lo mejor que pueda. Recuerde que es mejor hacer las cosas bien que deprisa,  pero si no sabe cómo resolver una pregunta no se entretenga mucho en ella y  pase a la siguiente. </p>
                  <p>1. El queso se fabrica de:<br />
                    <input type="radio" name="pr" id="a1" value="a1" />
                    <label for="a1"></label>
                    Las flores   
                    <input type="radio" name="pr" id="b1" value="b1" />
                    La harina   
                    <input type="radio" name="pr" id="c1" value="c1" />
                    La leche   
                    <input type="radio" name="pr" id="d1" value="d1" />
                    Las uvas   
                    <input type="radio" name="pr" id="e1" value="e1" />
                    El azúcar </p>
                  <p></p>
                  <p>2. Lo contrario de abierto es:<br />
                    <input type="radio" name="pr2" id="a2" value="a2" />
                    Liso   
                    <input type="radio" name="pr2" id="b2" value="b2" />
                    Cerrado    
                    <input type="radio" name="pr2" id="c2" value="c2" />
                    Delante   
                    <input type="radio" name="pr2" id="d2" value="d2" />
                    Claro   
                    <input type="radio" name="pr2" id="e2" value="e2" />
                    Despejado</p>
                  <p>&nbsp;</p>
                  <p>3. De estas cinco palabras una pertenece a una clase  diferente. ¿Cual es?<br />
                    <input type="radio" name="pr3" id="a3" value="a3" />
                    Rojo   
                    <input type="radio" name="pr3" id="b3" value="b3" />
                    Amarillo   
                    <input type="radio" name="pr3" id="c3" value="c3" />
                    Morado   
                    <input type="radio" name="pr3" id="d3" value="d3" />
                    Bandera   
                    <input type="radio" name="pr3" id="e3" value="e3" />
                    Verde </p>
                  <p>&nbsp;</p>
                  <p>4. El pájaro canta y el perro:<br />
                    <input type="radio" name="pr4" id="a4" value="a4" />
                    Habla   
                    <input type="radio" name="pr4" id="b4" value="b4" />
                    Rebuzna   
                    <input type="radio" name="pr4" id="c4" value="c4" />
                    Cacarea    
                    <input type="radio" name="pr4" id="d4" value="d4" />
                    Maulla  
                    <input type="radio" name="pr4" id="e4" value="e4" />
                    Ladra</p>
                  <p>5. Escriba los dos números que faltan a esta serie:<br />
                    10    15    20    25   
                    <label for="box51"></label>
                    <input name="box51" type="text" id="box51" size="5" />
                    35    40    45   
                    <input name="box52" type="text" id="box52" size="5" />
                    55</p>
                  <p>&nbsp;</p>
                  <p>6. Para medir la temperatura se emplea el:<br />
                    <input type="radio" name="pr6" id="a6" value="a6" />
                    Litro  
                    <input type="radio" name="pr6" id="b6" value="b6" />
                    Gramo   
                    <input type="radio" name="pr6" id="c6" value="c6" />
                    Termómetro   
                    <input type="radio" name="pr6" id="d6" value="d6" />
                    Metro   
                    <input type="radio" name="pr6" id="e6" value="e6" />
                    Kilovatio </p>
                  <p>&nbsp;</p>
                  <p>7. Lo contrario de dormido es:<br />
                    <input type="radio" name="pr7" id="a7" value="a7" />
                    Noche   
                    <input type="radio" name="pr7" id="b7" value="b7" />
                    Luz   
                    <input type="radio" name="pr7" id="c7" value="c7" />
                    Amanecer   
                    <input type="radio" name="pr7" id="d7" value="d7" />
                    Despierto   
                    <input type="radio" name="pr7" id="e7" value="e7" />
                    Claridad</p>
                  <p>8. De estas cinco palabras una pertenece a una clase  diferente. ¿Cuál es?<br />
                    <input type="radio" name="pr8" id="a8" value="a8" />
                    Agua   
                    <input type="radio" name="pr8" id="b8" value="b8" />
                    Platino   
                    <input type="radio" name="pr8" id="c8" value="c8" />
                    Café   
                    <input type="radio" name="pr8" id="d8" value="d8" />
                    Té   
                    <input type="radio" name="pr8" id="e8" value="e8" />
                    Cerveza</p>
                  <p>&nbsp;</p>
                  <p>9. El zapato protege al pie y el sombrero protege a:<br />
                    <input type="radio" name="pr9" id="a9" value="a9" />
                    la cabeza   
                    <input type="radio" name="pr9" id="b9" value="b9" />
                    la  mano   
                    <input type="radio" name="pr9" id="c9" value="c9" />
                    el dedo  
                    <input type="radio" name="pr9" id="d9" value="d9" />
                    el brazo   
                    <input type="radio" name="pr9" id="e9" value="e9" />
                    la rodilla</p>
                  <p>&nbsp;</p>
                  <p>10. Escriba los dos números que faltan a esta serie:<br />
                    6    9    12   
                    <input name="box101" type="text" id="box101" size="5" />
                    18    21    24    
                    <input name="box102" type="text" id="box102" size="5" />
                    30</p>
                  <p>&nbsp;</p>
                  <p>11. El triángulo es una figura formada por:<br />
                    <input type="radio" name="pr11" id="a11" value="a11" />
                    4 lados   
                    <input type="radio" name="pr11" id="b11" value="b11" />
                    6  lados   
                    <input type="radio" name="pr11" id="c11" value="c11" />
                    5 lados   
                    <input type="radio" name="pr11" id="d11" value="d11" />
                    3 lados   
                    <input type="radio" name="pr11" id="e11" value="e11" />
                    9 lados</p>
                  <p>&nbsp;</p>
                  <p>12. Lo contrario de negro es:<br />
                    <input type="radio" name="pr12" id="a12" value="a12" />
                    oscuro   
                    <input type="radio" name="pr12" id="b12" value="b12" />
                    sombra
                    <input type="radio" name="pr12" id="c12" value="c12" />
                    opaco
                    <input type="radio" name="pr12" id="d12" value="d12" />
                    sucio
                    <input type="radio" name="pr12" id="e12" value="e12" />
                    blanco</p>
                  <p>&nbsp;</p>
                  <p>13. De estas cinco palabras una pertenece a una clase  diferente. ¿Cuál es?<br />
                    <input type="radio" name="pr13" id="a13" value="a13" />
                    Pedro   
                    <input type="radio" name="pr13" id="b13" value="b13" />
                    Enrique
                    <input type="radio" name="pr13" id="c13" value="c13" />
                    Ana
                    <input type="radio" name="pr13" id="d13" value="d13" />
                    José
                    <input type="radio" name="pr13" id="e13" value="e13" />
                    Carlos</p>
                  <p>&nbsp;</p>
                  <p>14. El naranjo es un árbol y el perro es:<br />
                    <input type="radio" name="pr14" id="a14" value="a14" />
                    un objeto
                    <input type="radio" name="pr14" id="b14" value="b14" />
                    un  animal
                    <input type="radio" name="pr14" id="c14" value="c14" />
                    una cosa
                    <input type="radio" name="pr14" id="d14" value="d14" />
                    un mineral
                    <input type="radio" name="pr14" id="e14" value="e14" />
                    un vegetal</p>
                  <p>&nbsp;</p>
                  <p>15. Escriba los números que faltan a esta serie:<br />
                    7    9    11     13   
                    <input name="box151" type="text" id="box151" size="5" />
                    17   
                    <input name="box152" type="text" id="box152" size="5" />
                    21    23</p>
                  <p>&nbsp;</p>
                  <p>16. El gato es un:<br />
                    <input type="radio" name="pr16" id="a16" value="a16" />
                    insecto
                    <input type="radio" name="pr16" id="b16" value="b16" />
                    mamífero
                    <input type="radio" name="pr16" id="c16" value="c16" />
                    ave
                    <input type="radio" name="pr16" id="d16" value="d16" />
                    pez
                    <input type="radio" name="pr16" id="e16" value="e16" />
                    reptil</p>
                  <p>&nbsp;</p>
                  <p>17. Lo contrario de triste es:<br />
                    <input type="radio" name="pr17" id="a17" value="a17" />
                    alegre
                    <input type="radio" name="pr17" id="b17" value="b17" />
                    preocupado
                    <input type="radio" name="pr17" id="c17" value="c17" />
                    dolorido
                    <input type="radio" name="pr17" id="d17" value="d17" />
                    desgraciado
                    <input type="radio" name="pr17" id="e17" value="e17" />
                    enfermo</p>
                  <p>&nbsp;</p>
                  <p>18. De estas cinco palabras una pertenece a una clase  diferente. ¿Cuál es?<br />
                    <input type="radio" name="pr18" id="a18" value="b18" />
                    Bogotá
                    <input type="radio" name="pr18" id="b18" value="b18" />
                    Lima
                    <input type="radio" name="pr18" id="c18" value="c18" />
                    Alpes
                    <input type="radio" name="pr18" id="d18" value="d18" />
                    Caracas
                    <input type="radio" name="pr18" id="e18" value="e18" />
                    Quito</p>
                  <p>&nbsp;</p>
                  <p>19. La piel cubre al hombre y las plumas cubren a:<br />
                    <input type="radio" name="pr19" id="a19" value="a19" />
                    la vaca
                    <input type="radio" name="pr19" id="b19" value="b19" />
                    el  perro
                    <input type="radio" name="pr19" id="c19" value="c19" />
                    el gato
                    <input type="radio" name="pr19" id="d19" value="d19" />
                    la gallina
                    <input type="radio" name="pr19" id="e19" value="e19" />
                    el caballo</p>
                  <p>&nbsp;</p>
                  <p>20. Escriba los dos números que faltan a esta serie:<br />
                    7    14    21     28
                    <input name="box201" type="text" id="box201" size="5" />
                    42    49   
                    <input name="box202" type="text" id="box202" size="5" />
                    63    70</p>
                  <p>&nbsp;</p>
                  <p>21. Treinta es el triple de:<br />
                    <input type="radio" name="pr21" id="a21" value="a21" />
                    quince 
                    <input type="radio" name="pr21" id="b21" value="b21" />
                    tres
                    <input type="radio" name="pr21" id="c21" value="c21" />
                    diez
                    <input type="radio" name="pr21" id="d21" value="d21" />
                    doce
                    <input type="radio" name="pr21" id="e21" value="e21" />
                    cinco</p>
                  <p>&nbsp;</p>
                  <p>22. Lo contrario de calor es:<br />
                    <input type="radio" name="pr22" id="a22" value="a22" />
                    sudor
                    <input type="radio" name="pr22" id="b22" value="b22" />
                    fatiga
                    <input type="radio" name="pr22" id="c22" value="c22" />
                    blanco
                    <input type="radio" name="pr22" id="d22" value="d22" />
                    frío
                    <input type="radio" name="pr22" id="e22" value="e22" />
                    luz</p>
                  <p>&nbsp;</p>
                  <p>23. De estas cinco palabras una pertenece a una clase  diferente. ¿Cuál es?<br />
                    <input type="radio" name="pr23" id="a23" value="a23" />
                    cuchara
                    <input type="radio" name="pr23" id="b23" value="b23" />
                    plato
                    <input type="radio" name="pr23" id="c23" value="c23" />
                    tenedor
                    <input type="radio" name="pr23" id="d23" value="d23" />
                    cuchillo
                    <input type="radio" name="pr23" id="e23" value="e23" />
                    cucharita</p>
                  <p>&nbsp;</p>
                  <p>24. Para coser se emplea la aguja y para dibujar se emplea  él:<br />
                    <input type="radio" name="pr24" id="a24" value="a24" />
                    lápiz
                    <input type="radio" name="pr24" id="b24" value="b24" />
                    bastón
                    <input type="radio" name="pr24" id="c24" value="c24" />
                    tintero
                    <input type="radio" name="pr24" id="d24" value="d24" />
                    pie
                    <input type="radio" name="pr24" id="e24" value="e24" />
                    el ojo</p>
                  <p>&nbsp;</p>
                  <p>25. Escriba los dos números que faltan a esta serie:<br />
                    40    36    32     28    
                    <input name="box251" type="text" id="box251" size="5" />
                    20    16     12    
                    <input name="box252" type="text" id="box252" size="5" />
                    4</p>
                  <p>&nbsp;</p>
                  <p>26. La Cordillera de los Andes esta en:<br />
                    <input type="radio" name="pr26" id="a26" value="a26" />
                    Europa
                    <input type="radio" name="pr26" id="b26" value="b26" />
                    Asia
                    <input type="radio" name="pr26" id="c26" value="c26" />
                    América
                    <input type="radio" name="pr26" id="d26" value="d26" />
                    Australia
                    <input type="radio" name="pr26" id="e26" value="e26" />
                    Africa</p>
                  <p>&nbsp;</p>
                  <p>27. Lo contrario de arriba es:<br />
                    <input type="radio" name="pr27" id="a27" value="a27" />
                    dentro
                    <input type="radio" name="pr27" id="b27" value="b27" />
                    abajo
                    <input type="radio" name="pr27" id="c27" value="c27" />
                    cerca
                    <input type="radio" name="pr27" id="d27" value="d27" />
                    completo
                    <input type="radio" name="pr27" id="e27" value="e27" />
                    lejos</p>
                  <p>&nbsp;</p>
                  <p>28. De estas cinco palabras una pertenece a una clase  diferente. ¿Cuál es?<br />
                    <input type="radio" name="pr28" id="a28" value="a28" />
                    General 
                    <input type="radio" name="pr28" id="b28" value="b28" />
                    Teniente
                    <input type="radio" name="pr28" id="c28" value="c28" />
                    Capitán
                    <input type="radio" name="pr28" id="d28" value="d28" />
                    Presidente
                    <input type="radio" name="pr28" id="e28" value="e28" />
                    Coronel</p>
                  <p>&nbsp;</p>
                  <p>29. Con el cuero se fabrica el calzado y con la tela:<br />
                    <input type="radio" name="pr29" id="a29" value="a29" />
                    piel
                    <input type="radio" name="pr29" id="b29" value="b29" />
                    lana
                    <input type="radio" name="pr29" id="c29" value="c29" />
                    algodó
                    <input type="radio" name="pr29" id="d29" value="d29" />
                    seda
                    <input type="radio" name="pr29" id="e29" value="e29" />
                    vestidos</p>
                  <p>&nbsp;</p>
                  <p>30. Escriba los dos números que faltan a esta serie:<br />
                    64    58    52     46    
                    <input name="box301" type="text" id="box301" size="5" />
                    34    28    
                    <input name="box302" type="text" id="box302" size="5" />
                    16    10    4</p>
                  <p>&nbsp;</p>
                  <p>31. Roma es la capital de:<br />
                    <input type="radio" name="pr31" id="a31" value="a31" />
                    Nicaragua
                    <input type="radio" name="pr31" id="b31" value="b31" />
                    España
                    <input type="radio" name="pr31" id="c31" value="c31" />
                    Grecia
                    <input type="radio" name="pr31" id="d31" value="d31" />
                    Italia
                    <input type="radio" name="pr31" id="e31" value="e31" />
                    Paraguay</p>
                  <p>&nbsp;</p>
                  <p>32. Lo contrario de Sí es:<br />
                    <input type="radio" name="pr32" id="a32" value="a32" />
                    Antes
                    <input type="radio" name="pr32" id="b32" value="b32" />
                    Afirmar
                    <input type="radio" name="pr32" id="c32" value="c32" />
                    Duda
                    <input type="radio" name="pr32" id="d32" value="d32" />
                    Luego
                    <input type="radio" name="pr32" id="e32" value="e32" />
                    No</p>
                  <p>&nbsp;</p>
                  <p>33. De estas cinco palabras una pertenece a una clase  diferente. ¿Cuál es?<br />
                    <input type="radio" name="pr33" id="a33" value="a33" />
                    Vaso
                    <input type="radio" name="pr33" id="b33" value="b33" />
                    Copa
                    <input type="radio" name="pr33" id="c33" value="c33" />
                    Agua
                    <input type="radio" name="pr33" id="d33" value="d33" />
                    Jarra
                    <input type="radio" name="pr33" id="e33" value="e33" />
                    Taza</p>
                  <p>&nbsp;</p>
                  <p>34. La nariz sirve para oler y los ojos sirven para:<br />
                    <input type="radio" name="pr34" id="a34" value="a34" />
                    oír
                    <input type="radio" name="pr34" id="b34" value="b34" />
                    ver
                    <input type="radio" name="pr34" id="c34" value="c34" />
                    gustar
                    <input type="radio" name="pr34" id="d34" value="d34" />
                    tocar
                    <input type="radio" name="pr34" id="e34" value="e34" />
                    andar</p>
                  <p>&nbsp;</p>
                  <p>35. Escriba los dos números que faltan a esta serie:<br />
                    5    10    20    
                    <input name="351" type="text" id="351" size="5" />
                    80     160    
                    <input name="352" type="text" id="352" size="5" />
                    640    1,280</p>
                  <p>&nbsp;</p>
                  <p>36. El idioma oficial de Haití es el:<br />
                    <input type="radio" name="pr36" id="a36" value="a36" />
                    inglés
                    <input type="radio" name="pr36" id="b36" value="b36" />                 
                    francés
                    <input type="radio" name="pr36" id="c36" value="c36" />
                    español 
                    <input type="radio" name="pr36" id="d36" value="d36" />
                    holandés 
                    <input type="radio" name="pr36" id="e36" value="e36" />
                    portugués</p>
                                      <p>&nbsp;</p>
                                      <p>37. Lo contrario de despacio es:<br />
                    <input type="radio" name="pr37" id="a37" value="a37" />
                    de prisa
                    <input type="radio" name="pr37" id="b37" value="b37" />
                    lento
                    <input type="radio" name="pr37" id="c37" value="c37" />
                    pausado
                    <input type="radio" name="pr37" id="d37" value="d37" />
                    débil
                    <input type="radio" name="pr37" id="e37" value="e37" />
                    grueso</p>
                                      <p>&nbsp;</p>
                                      <p>38. De estas cinco palabras una pertenece a una clase  diferente. ¿Cuál es?<br />
                    <input type="radio" name="pr38" id="a38" value="a38" />
                    carpintero
                    <input type="radio" name="pr38" id="b38" value="b38" />
                    herrero 
                    <input type="radio" name="pr38" id="c38" value="c38" />
                    médico
                    <input type="radio" name="pr38" id="d38" value="d38" />
                    albañil
                    <input type="radio" name="pr38" id="e38" value="e38" />
                    zapatero</p>
                                      <p>&nbsp;</p>
                                      <p>39. Al lunes sigue el martes y a enero sigue:<br />
                    <input type="radio" name="pr39" id="a39" value="a39" />
                    junio
                    <input type="radio" name="pr39" id="b39" value="b39" />
                    viernes
                    <input type="radio" name="pr39" id="c39" value="c39" />
                    mes
                    <input type="radio" name="pr39" id="d39" value="d39" />
                    febrero
                    <input type="radio" name="pr39" id="e39" value="e39" />
                    año</p>
                                      <p>&nbsp;</p>
                                      <p>40. Escriba los dos números que faltan a esta serie:<br />
                                      
                    2    4    
                      <input name="401" type="text" id="401" size="5" />
                       16    32    
                    <input name="402" type="text" id="402" size="5" />
                       128     256</p>
                                      <p>&nbsp;</p>
                                      <p>41. Fernando de Magallanes fue un famoso:<br />
                    <input type="radio" name="pr41" id="a41" value="a41" />
                    militar
                    <input type="radio" name="pr41" id="b41" value="b41" />
                    aviador
                    <input type="radio" name="pr41" id="c41" value="c41" />
                    navegante
                    <input type="radio" name="pr41" id="d41" value="d41" />
                    sabio
                    <input type="radio" name="pr41" id="e41" value="e41" />
                    sacerdote</p>
                                      <p>&nbsp;</p>
                                      <p>42. Lo contrario de blando es:<br />
                    <input type="radio" name="pr42" id="a42" value="a42" />
                    suave
                    <input type="radio" name="pr42" id="b42" value="b42" />
                    duro
                    <input type="radio" name="pr42" id="c42" value="c42" />
                    liso
                    <input type="radio" name="pr42" id="d42" value="d42" />
                    grueso
                    <input type="radio" name="pr42" id="e42" value="e42" />
                    débil</p>
                                      <p>&nbsp;</p>
                                      <p>43. De estas cinco palabras una pertenece a una clase  diferente. ¿Cuál es?<br />
                    <input type="radio" name="pr43" id="a43" value="a43" />
                    ver
                    <input type="radio" name="pr43" id="b43" value="b43" />
                    oír
                    <input type="radio" name="pr43" id="c43" value="c43" />
                    oler
                    <input type="radio" name="pr43" id="d43" value="d43" />
                    gustar
                    <input type="radio" name="pr43" id="e43" value="e43" />
                    andar</p>
                                      <p>&nbsp;</p>
                                      <p>44. El codo articula el brazo, la rodilla articula:<br />
                    <input type="radio" name="pr44" id="a44" value="a44" />
                    el corazón
                    <input type="radio" name="pr44" id="b44" value="b44" />
                    los  dedos
                    <input type="radio" name="pr44" id="c44" value="c44" />
                    los pulmones
                    <input type="radio" name="pr44" id="d44" value="d44" />
                    el cerebro
                    <input type="radio" name="pr44" id="e44" value="e44" />
                    la pierna</p>
                                      <p>&nbsp;</p>
                                      <p>45. Escriba los dos números que faltan a esta serie:<br />
                                        5    6    8    11    15     20    
                                          <input name="451" type="text" id="451" size="5" />
                       33    41     
                    <input name="452" type="text" id="452" size="5" />
                                      </p>
                                      <p>&nbsp;</p>
                                      <p>46. Cristóbal Colón descubrió América en el siglo:<br />
                    <input type="radio" name="pr46" id="a46" value="a46" />
                    XIII
                    <input type="radio" name="pr46" id="b46" value="b46" />
                    XVII
                    <input type="radio" name="pr46" id="c46" value="c46" />
                    IV
                    <input type="radio" name="pr46" id="d46" value="d46" />
                    XV
                    <input type="radio" name="pr46" id="e46" value="e46" />
                    XIV</p>
                                      <p>&nbsp;</p>
                                      <p>47. Lo contrario de fuera es:<br />
                    <input type="radio" name="pr47" id="a47" value="a47" />
                    libre
                    <input type="radio" name="pr47" id="b47" value="b47" />
                    lejos
                    <input type="radio" name="pr47" id="c47" value="c47" />
                    distinto
                    <input type="radio" name="pr47" id="d47" value="d47" />
                    malo
                    <input type="radio" name="pr47" id="e47" value="e47" />
                    dentro</p>
                                      <p>&nbsp;</p>
                                      <p>48. De estas cinco palabras una pertenece a una clase  diferente. ¿Cuál es?<br />
                    <input type="radio" name="pr48" id="a48" value="a48" />
                    Venus
                    <input type="radio" name="pr48" id="b48" value="b48" />
                    Júpiter
                    <input type="radio" name="pr48" id="c48" value="c48" />
                    Satélite 
                    <input type="radio" name="pr48" id="d48" value="d48" />
                    Urano 
                    <input type="radio" name="pr48" id="e48" value="e48" />
                    Neptuno</p>
                                      <p>&nbsp;</p>
                                      <p>49. Octubre es anterior a noviembre y jueves es anterior  a:<br />
                    <input type="radio" name="pr49" id="a49" value="a49" />
                    diciembre
                    <input type="radio" name="pr49" id="b49" value="b49" />
                    viernes 
                    <input type="radio" name="pr49" id="c49" value="c49" />
                    septiembre 
                    <input type="radio" name="pr49" id="d49" value="d49" />
                    miércoles 
                    <input type="radio" name="pr49" id="e49" value="e49" />
                    día</p>
                                      <p>&nbsp;</p>
                                      <p>50. Escriba los dos números que faltan a esta serie:<br />
                                        90    80    71    63     
                                          <input name="501" type="text" id="501" size="5" />
                       50    45    
                    <input name="502" type="text" id="502" size="5" />
                       38     36    35</p>
                                      <p>&nbsp;</p>
                                      <p>51. Los primeros ferrocarriles empezaron a funcionar  básicamente:<br />
                    <input type="radio" name="pr51" id="a51" value="a51" />
                    1,900
                    <input type="radio" name="pr51" id="b51" value="b51" />
                    1,800
                    <input type="radio" name="pr51" id="c51" value="c51" />
                    1,825  
                    <input type="radio" name="pr51" id="d51" value="d51" />
                    1,750
                    <input type="radio" name="pr51" id="e51" value="e51" />
                    1,710</p>
                                      <p>&nbsp;</p>
                                      <p>52. Lo contrario de empezar es:<br />
                    <input type="radio" name="pr52" id="a52" value="a52" />
                    iniciar
                    <input type="radio" name="pr52" id="b52" value="b52" />
                    adelantar
                    <input type="radio" name="pr52" id="c52" value="c52" />
                    obstruir 
                    <input type="radio" name="pr52" id="d52" value="d52" />
                    terminar
                    <input type="radio" name="pr52" id="e52" value="e52" />
                    buscar</p>
                                      <p>&nbsp;</p>
                                      <p>53. De estas cinco palabras una pertenece a una clase  diferente. ¿Cuál es?<br />
                    <input type="radio" name="pr53" id="a53" value="a53" />
                    feliz 
                    <input type="radio" name="pr53" id="b53" value="b53" />
                    triste 
                    <input type="radio" name="pr53" id="c53" value="c53" />
                    satisfecho 
                    <input type="radio" name="pr53" id="d53" value="d53" />
                    alegre   
                    <input type="radio" name="pr53" id="e53" value="e53" />
                    contento</p>
                                      <p>&nbsp;</p>
                                      <p>54. La paz viene después de la guerra y la calma viene  después de:<br />
                    <input type="radio" name="pr54" id="a54" value="a54" />
                    la tormenta 
                    <input type="radio" name="pr54" id="b54" value="b54" />
                    el crepúsculo 
                    <input type="radio" name="pr54" id="c54" value="c54" />
                    el bienestar
                    <input type="radio" name="pr54" id="d54" value="d54" />
                    la  felicidad 
                    <input type="radio" name="pr54" id="e54" value="e54" />
                    el ocaso</p>
                  <p>&nbsp;</p>
                  <p>55. Escriba los números que faltan a esta serie:<br />
                    120    100    82    66     
                      <input name="551" type="text" id="551" size="5" />
                         40    30   
                    <input name="552" type="text" id="552" size="5" />
   					16    12    10</p>
                  <p>&nbsp;</p>
                  <p>56. La bitácora es de uso indispensable en:<br />
                  <input type="radio" name="pr56" id="a56" value="a56" />
                  música
                  <input type="radio" name="pr56" id="b56" value="b56" />
                  biología 
                  <input type="radio" name="pr56" id="c56" value="c56" />
                  navegación 
                  <input type="radio" name="pr56" id="d56" value="d56" />
                  teatro
                  <input type="radio" name="pr56" id="e56" value="e56" />
                  química</p>
                                    <p>&nbsp;</p>
                                    <p>57. Lo contrario de homogéneo es:<br />
                  <input type="radio" name="pr57" id="a57" value="a57" />
                  compacto
                  <input type="radio" name="pr57" id="b57" value="b57" />
                  heterogéneo 
                  <input type="radio" name="pr57" id="c57" value="c57" />
                  abstracto 
                  <input type="radio" name="pr57" id="d57" value="d57" />
                  sutil 
                  <input type="radio" name="pr57" id="e57" value="e57" />
                  neutro</p>
                                    <p>&nbsp;</p>
                                    <p>58. De estas cinco palabras una pertenece a una clase  diferente. ¿Cuál es?<br />
                  <input type="radio" name="pr58" id="a58" value="a58" />
                  Strawinski
                  <input type="radio" name="pr58" id="a58" value="a58" />
                  Bach 
                  <input type="radio" name="pr58" id="a58" value="a58" />
                  Mozart
                  <input type="radio" name="pr58" id="a58" value="a58" />
                  Newton
                  <input type="radio" name="pr58" id="a58" value="a58" />
                  Chopin</p>
                                    <p>&nbsp;</p>
                                    <p>59. La biblioteca es para guardar libros y la pinacoteca  para guardar:<br />
                  <input type="radio" name="pr59" id="a59" value="a59" />
                  periódicos
                  <input type="radio" name="pr59" id="b59" value="b59" />
                  discos 
                  <input type="radio" name="pr59" id="c59" value="c59" />
                  películas
                  <input type="radio" name="pr59" id="d59" value="d59" />
                  monedas 
                  <input type="radio" name="pr59" id="e59" value="e59" />
                  cuadros</p>
                                    <p>&nbsp;</p>
                                    <p>60. Escriba los números que faltan a esta serie:<br />
                                      6,561    2,187    729    
                                        <input name="601" type="text" id="601" size="5" />
                     81     
                  <input name="602" type="text" id="602" size="5" />
                      9    3</p>
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

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr'])&&($_POST['pr'])=='c1'){
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
 

 
//////////////////////////////////////////////////////////////////

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr2'])&&($_POST['pr2'])=='b2'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
	
 
 //////////////////////////////////////////////////////////////////
 
 include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr3'])&&($_POST['pr3'])=='d3'){
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
 
	
 
 //////////////////////////////////////////////////////////////////
 
 include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr4'])&&($_POST['pr4'])=='e4'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
 

	
 //////////////////////////////////////////////////////////////////
 
 
 include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box51'])&&($_POST['box51'])==30){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
 
 //////pregunta 5
  include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box52'])&&($_POST['box52'])==50){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
 
 //////pregunta 5

 
 //////////////////////////////////////////////////////////////////
 
  include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr6'])&&($_POST['pr6'])=='c6'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
 //////////////////////////////////////////////////////////////////		
 
  include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr7'])&&($_POST['pr7'])=='d7'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
 
 //////////////////////////////////////////////////////////////////		
 
 include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr8'])&&($_POST['pr8'])=='b8'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
 
//////////////////////////////////////////////////////////////////		
 
 include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr9'])&&($_POST['pr9'])=='a9'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}

//////////////////////////////////////////////////////////////////		


 include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box101'])&&($_POST['box101'])==15){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box102'])&&($_POST['box102'])==27){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}			
//////pregunta 10


//////////////////////////////////////////////////////////////////		
	include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr11'])&&($_POST['pr11'])=='d11'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}		
			
//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr12'])&&($_POST['pr12'])=='e12'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr13'])&&($_POST['pr13'])=='c13'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr14'])&&($_POST['pr14'])=='b14'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box151'])&&($_POST['box151'])==15){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
			
			
include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box152'])&&($_POST['box152'])==19){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}			
//////pregunta 15


//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr16'])&&($_POST['pr16'])=='b16'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	


//////////////////////////////////////////////////////////////////		


include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr17'])&&($_POST['pr17'])=='a17'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	
//////////////////////////////////////////////////////////////////		


include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr18'])&&($_POST['pr18'])=='c18'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	


//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr19'])&&($_POST['pr19'])=='d19'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
			
//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box201'])&&($_POST['box201'])==35){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box202'])&&($_POST['box202'])==56){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}			
//////pregunta 20


//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr21'])&&($_POST['pr21'])=='c21'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}


//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr22'])&&($_POST['pr22'])=='d22'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr23'])&&($_POST['pr23'])=='b23'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr24'])&&($_POST['pr24'])=='a24'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}


//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box251'])&&($_POST['box251'])==24){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
			
			
include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box252'])&&($_POST['box252'])==8){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}			
//////pregunta 25


//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr26'])&&($_POST['pr26'])=='c26'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr27'])&&($_POST['pr27'])=='b27'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
			//////////////////////////////////////////////////////////////////		
		
include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr28'])&&($_POST['pr28'])=='d28'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}			
//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr29'])&&($_POST['pr29'])=='e29'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box301'])&&($_POST['box301'])==40){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
			
			
include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box302'])&&($_POST['box302'])==22){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	
//////pregunta 30


//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr31'])&&($_POST['pr31'])=='d31'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr32'])&&($_POST['pr32'])=='e32'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr33'])&&($_POST['pr33'])=='c33'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr34'])&&($_POST['pr34'])=='b34'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box351'])&&($_POST['box351'])==40){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
			
			
include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box352'])&&($_POST['box352'])==320){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

/////pregunta 35

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr36'])&&($_POST['pr36'])=='b36'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	



//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr37'])&&($_POST['pr37'])=='a37'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	


//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr38'])&&($_POST['pr38'])=='c38'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		


include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr39'])&&($_POST['pr39'])=='d39'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		


include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box401'])&&($_POST['box401'])==8){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
			
			
include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box402'])&&($_POST['box402'])==64){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

////////////pregunta 40

//////////////////////////////////////////////////////////////////		


include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr41'])&&($_POST['pr41'])=='c41'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	
			
//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr42'])&&($_POST['pr42'])=='b42'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	


//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr43'])&&($_POST['pr43'])=='e43'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr44'])&&($_POST['pr44'])=='e44'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		


include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box451'])&&($_POST['box451'])==26){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
			
			
include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box452'])&&($_POST['box452'])==50){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

////pregunta 45


//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr46'])&&($_POST['pr46'])=='d46'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	
//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr47'])&&($_POST['pr47'])=='e47'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	


//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr48'])&&($_POST['pr48'])=='c48'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	
//////////////////////////////////////////////////////////////////		


include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr49'])&&($_POST['pr49'])=='b49'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box501'])&&($_POST['box501'])==56){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
			
			
include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box502'])&&($_POST['box502'])==41){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	


/////pregunta 50

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr51'])&&($_POST['pr51'])=='c51'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr52'])&&($_POST['pr52'])=='d52'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr53'])&&($_POST['pr53'])=='b53'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr54'])&&($_POST['pr54'])=='a54'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}

//////////////////////////////////////////////////////////////////		


include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box551'])&&($_POST['box551'])==52){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
			
			
include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box552'])&&($_POST['box552'])==22){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	
////pregunta 55


//////////////////////////////////////////////////////////////////		


include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr56'])&&($_POST['pr56'])=='c56'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");
	}
 			}
//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr57'])&&($_POST['pr57'])=='b57'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");
	}
 			}

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr58'])&&($_POST['pr58'])=='d58'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");
	}
 			}

//////////////////////////////////////////////////////////////////		

include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['pr59'])&&($_POST['pr59'])=='e59'){
 
 	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");
	}
 			}
			
//////////////////////////////////////////////////////////////////					


include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box601'])&&($_POST['box601'])==243){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}
			
			
include("Conexion2.php");
 if(isset($_POST['register'])){
	if (!empty($_POST['box602'])&&($_POST['box602'])==27){
	
 mysqli_query($cnx,"UPDATE candidatos SET PuntosBarsit=PuntosBarsit+1 WHERE User= '$nombreUser'");

	}
 			}	
			
			
if(isset($_POST['register'])){
	
	mysqli_query($cnx,"UPDATE candidatos SET StatusBarsit='No' WHERE User= '$nombreUser'");
	header("Location: /IndexUsuario.php");

	
 			}	


////////pregunta 60

//////////////////////////////////////////////////////////////////					
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
