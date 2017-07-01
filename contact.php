<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/icono.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Volkswagen Guadiana - Registro de aspirante</title>
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
          <h1>PORFAVOR LLENA LOS SIGUIENTES CAMPOS:</h1>
          <h2>&nbsp;</h2>
        </div>
        <div class="content">
          <div class="address martop"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <form id="form1" name="form1" method="post" action="">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>NOMBRE: </p>
      <p>
        <label for="boxnombre2"></label>
        <input type="text" required name="boxnombre" id="boxnombre2" />
      </p>
      <p>ESCOLARIDAD:</p>
      <p>
        <label for="boxescolaridad"></label>
        <select name="boxescolaridad" id="boxescolaridad">
          <option value="Ninguna" selected="selected">NINGUNA</option>
          <option value="Primaria">PRIMARIA</option>
          <option value="Secundaria">SECUNDARIA</option>
          <option value="Preparatoria">PREPARATORIA</option>
          <option value="Universidad">UNIVERSIDAD</option>
        </select>
      </p>
      <p>
        <label for="boxescolaridad"></label>
      </p>
      <p>EDAD:</p>
      <p>
        <label for="boxedad"></label>
        <select name="boxedad" id="boxedad">
          <option value="---------">------</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="32">32</option>
          <option value="33">33</option>
          <option value="34">34</option>
          <option value="35">35</option>
          <option value="36">36</option>
          <option value="37">37</option>
          <option value="38">38</option>
          <option value="39">39</option>
          <option value="40">40</option>
          <option value="41">41</option>
          <option value="42">42</option>
          <option value="43">43</option>
          <option value="44">44</option>
          <option value="45">45</option>
          <option value="46">46</option>
          <option value="47">47</option>
          <option value="48">48</option>
          <option value="49">49</option>
          <option value="50">50</option>
          <option value="51">51</option>
          <option value="52">52</option>
          <option value="53">53</option>
          <option value="54">54</option>
          <option value="55">55</option>
          <option value="56">56</option>
          <option value="57">57</option>
          <option value="58">58</option>
          <option value="59">59</option>
          <option value="60">60</option>
        </select>
      </p>
      <p>PUESTO:</p>
      <p>
        <label for="boxpuesto"></label>
        <input type="text" name="boxpuesto" id="boxpuesto" />
      </p>
      <p>CORREO ELECTRONICO:</p>
      <p>
        <label for="boxusuario"></label>
        <input type="text" id="boxusuario" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  REQUIRED name="boxcorreo" />
      </p>
      <p>ESTADO CIVIL:</p>
      <p>
        <label for="listestado"></label>
        <select name="listestado" id="listestado">
          <option value="------------">-------------------</option>
          <option value="soltero">SOLTERO/A</option>
          <option value="casado">CASADO/A</option>
          <option value="viudo">VIUDO/A</option>
          <option value="divorciado">DIVORCIADO/A</option>
        </select>
      </p>
      <p>SEXO:</p>
      <p>
        <label for="boxsexo"></label>
        <label for="sexo"></label>
        <label for="prueba"></label>
        <select name="sexo" id="sexo">
          <option value="----------" selected="selected">---------</option>
          <option value="Masculino">MASCULINO</option>
          <option value="Femenino">FEMENINO</option>
        </select>
      </p>
      <p>
        <label for="sexo2"></label>
      NOMBRE DE USUARIO:</p>
      <p>
        <label for="boxusuario"></label>
        <label for="boxusuario2"></label>
        <label for="usuario"></label>
        <input type="text" name="usuario" id="usuario" />
      </p>
      <p>
        <label for="user"></label>
      PASSWORD:</p>
      <p>
        <label for="contra1"></label>
        <label for="contrase1"></label>
        <input type="password" name="contrase1" id="contrase1" />
      </p>
      <p>CONFIRMA PASSWORD:</p>
      <p>
        <label for="contra2"></label>
        <label for="contrase2"></label>
        <input type="password" name="contrase2" id="contrase2" />
      </p>
      <p>
        <input type="submit" name="botonregistro" id="botonregistro" value="REGISTRAR" />
      </p>
    </form>
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



<?php
include("Conexion2.php");
if(isset($_POST['botonregistro'])) {
    $name=$_REQUEST['boxnombre'];
	$school= $_REQUEST['boxescolaridad'];
	$age=$_REQUEST['boxedad'];
	$charge=$_REQUEST['boxpuesto'];
	$mail=$_REQUEST['boxcorreo'];
	$relation=$_REQUEST['listestado'];
	$sex=$_REQUEST['sexo'];
	$nickname=$_REQUEST['usuario'];
	$password=md5($_REQUEST['contrase1']);
	$repassword=$_REQUEST['contrase2'];
	if($name==""|| $school=="" || $age=="" || $charge=="" || $mail=="" || $relation=="" ||  $nickname=="" || $password=="" || $repassword=="") 
    {
        ?>
               <script> 
						alert("POR FAVOR LLENE TODOS LOS CAMPOS");
						window.location='<?php $_SERVER['SERVER_HOST'];?>/contact.php';

							
				</script>         
			<?php
    }
    else
    {   
        $sql = 'SELECT * FROM candidatos';
        $rec = mysqli_query($cnx,$sql);
		
		$verificar_usuario = 0;
while($result = mysqli_fetch_object($rec))
        {
            if($result->User == $_POST['usuario'])
            {
                $verificar_usuario = 1;
            }
        }
 
        if($verificar_usuario==0)
        {
            if($_POST['contrase1'] == $_POST['contrase2'])
            {
				
			mysqli_query($cnx,"INSERT INTO candidatos(Nombre,Escolaridad,Edad,Puesto,Correo,Estado,prueba,User,Password,PuntosBarsit) VALUES('$name','$school','$age','$charge','$mail','$relation','$sex','$nickname','$password',0) ")
                          or die ("Problemas en el select".mysql_error());
						  
				
                                ?>
               <script> 
						alert("INGRESA CON TU USUARIO Y CONTRASEÑA");

							window.location='<?php $_SERVER['SERVER_HOST'];?>/LoginUsuario.php';
			</script>
			<?php	  

				
									
            }
            else
            {
               ?>
               <script> 
						alert("LAS CONTRASEÑAS NO SON IGUALES, INTENTE OTRA VEZ");

							window.location='<?php $_SERVER['SERVER_HOST'];?>/contact.php';
			</script>
			<?php
            }
        }
        else
        {
           ?>
               <script> 
						alert("EL NOMBRE DE USUARIO YA EXISTE, PRUEBE CON OTRO");

							window.location='<?php $_SERVER['SERVER_HOST'];?>/contact.php';
			</script>
			<?php  
        }
    }
}
?>



	