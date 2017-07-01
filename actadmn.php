<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/icono.ico" />
<?php
include("carpetaraiz.php");
if(!isset($_SESSION)){
	
	session_start();
}
include("Conexion2.php");


$nombreUser= $_SESSION['User'];
	
//$Nick = $_SESSION['Nickname'];

$query="SELECT * from administradores WHERE (User='$nombreUser')";
$result=mysqli_query($cnx,$query);

if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
if($res=mysqli_fetch_array($result))
{	
			  
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Volkswagen Guadiana</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
.page.padding-bottom .content_wrap .left-panel .generic-content .title form table {
	color: #FFF;
}
.page.padding-bottom .content_wrap .left-panel .generic-content .title form table tr td span {
	text-align: center;
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
          <h1>ADMINISTRADOR:          </h1>
          <form method="post" action="">
            <?php
////////////////////////////////////////////////////VER PERFIL////////////////////////////////////////////////////////////////////////////////////		
include("Conexion2.php");
if(isset($_POST["aceptar"])){
$cargo1=$_REQUEST['cargo1'];
$dircargo1=$_REQUEST['dircargo1'];
$inecargo1=$_REQUEST['inecargo1'];
$puestocargo1=$_REQUEST['puestocargo1'];
$asist1=$_REQUEST['asist1'];
$dirasist1=$_REQUEST['dirasist1'];
$ineasist1=$_REQUEST['ineasist1'];
$puestoasist1=$_REQUEST['puestoasist1'];
$faltaincu=$_REQUEST['faltaincu'];
$trabajador=$_REQUEST['trabajador'];
$jornada=$_REQUEST['jornada'];
$horas=$_REQUEST['horas'];
$replica=$_REQUEST['replica'];
$cargo2=$_REQUEST['cargo2'];
$dircargo2=$_REQUEST['dircargo2'];
$inecargo2=$_REQUEST['inecargo2'];
$puestocargo2=$_REQUEST['puestocargo2'];
$asist2=$_REQUEST['asist2'];
$dirasist2=$_REQUEST['dirasist2'];
$ineasist2=$_REQUEST['ineasist2'];
$puestoasist2=$_REQUEST['puestoasist2'];
$manifiesto=$_REQUEST['manifiesto'];
$articulos=$_REQUEST['articulos'];
$sancion=$_REQUEST['sancion'];



if($cargo1=="" && $dircargo1=="" && $inecargo1=="" && $puestocargo1=="" && $asist1=="" && $dirasist1=="" && $ineasist1=="" && $puestoasist1=="" && $faltaincu=="" && $trabajador=="" && $jornada=="" && $horas=="" && $replica=="" && $cargo2=="" && $dircargo2=="" && $inecargo2=="" && $puestocargo2=="" && $asist2=="" && $dirasist2=="" && $ineasist2=="" && $puestoasist2=="" && $manifiesto=="" && $articulos=="" && $sancion==""){
?>
<script>
	alert("POR FAVOR, LLENA TODOS LOS CAMPOS");
</script>
<?php
}else{

$_SESSION['cargo1']=$cargo1;
$_SESSION['dircargo1']=$dircargo1;
$_SESSION['inecargo1']=$inecargo1;
$_SESSION['puestocargo1']=$puestocargo1;
$_SESSION['asist1']=$asist1;
$_SESSION['dirasist1']=$dirasist1;
$_SESSION['ineasist1']=$ineasist1;
$_SESSION['puestoasist1']=$puestoasist1;
$_SESSION['faltaincu']=$faltaincu;
$_SESSION['trabajador']=$trabajador;
$_SESSION['jornada']=$jornada;
$_SESSION['horas']=$horas;
$_SESSION['replica']=$replica;
$_SESSION['cargo2']=$cargo2;
$_SESSION['dircargo2']=$dircargo2;
$_SESSION['inecargo2']=$inecargo2;
$_SESSION['puestocargo2']=$puestocargo2;
$_SESSION['asist2']=$asist2;
$_SESSION['dirasist2']=$dirasist2;
$_SESSION['ineasist2']=$ineasist2;
$_SESSION['puestoasist2']=$puestoasist2;
$_SESSION['manifiesto']=$manifiesto;
$_SESSION['articulos']=$articulos;
$_SESSION['sancion']=$sancion;

header('Location: '.$raiz.'template2.php');	


	}
		}
////////////////////////////////////////////////////FIN VER PERFIL////////////////////////////////////////////////////////////////////////////////////		
	
?>

<?php
////////////////////////////////////////////////////ACTIVAR BARSIT////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST["cancelar"])){
header('Location: '.$raiz.'IndexAdministrador.php');
	}
		


?>


          <p>BIENVENIDO:
           
		   
              <input name="nombre" type="text" class="libg"  style="text-align:center"  value="<?php echo $res['Nombre'];?>" size="15" readonly />
              <?php
}
			?>
          </p>
          <p><h2>GENERACIÓN DE ACTA ADMINISTRATIVA </h2></p><p>&nbsp;</p>
          <p>DATOS A INGRESAR:</p>
          <table width="100%" border="0" id="tab1">
            <tr>
              <td width="40%"><h2>Testigo de Cargo</h2></td>
              <td width="60%">&nbsp;</td>
            </tr>
            <tr>
              <td>Nombre:</td>
              <td><input name="cargo1" type="text" class="mio" id="cargo1" size="100%"  /></td>
            </tr>
            <tr>
              <td>Dirección:</td>
              <td><input name="dircargo1" type="text" class="mio" id="dircargo1" /></td>
            </tr>
            <tr>
              <td>N° de INE:</td>
              <td><input name="inecargo1" type="text" class="mio" id="inecargo1" size="2" /></td>
            </tr>
            <tr>
              <td>Puesto:</td>
              <td><input name="puestocargo1" type="text" class="mio" id="puestocargo1" /></td>
            </tr>
            </table>
          <p>&nbsp;</p>
          <table width="100%" border="0" id="tab2">
            <tr>
              <td width="40%"><h2>Testigo de Asistencia</h2></td>
              <td width="60%">&nbsp;</td>
            </tr>
            <tr>
              <td>Nombre:</td>
              <td><input name="asist1" type="text" class="mio" id="asist1" size="100%"  /></td>
            </tr>
            <tr>
              <td>Dirección:</td>
              <td><input name="dirasist1" type="text" class="mio" id="dirasist1" /></td>
            </tr>
            <tr>
              <td>N° de INE:</td>
              <td><input name="ineasist1" type="text" class="mio" id="ineasist1" size="2" /></td>
            </tr>
            <tr>
              <td>Puesto:</td>
              <td><input name="puestoasist1" type="text" class="mio" id="puestoasist1" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <table width="100%" border="0" id="tab5">
            <tr>
              <td width="40%"><h2>Infractor</h2></td>
              <td width="60%">&nbsp;</td>
            </tr>
            <tr>
              <td>Nombre:</td>
              <td><input name="trabajador" type="text" class="mio" id="trabajador" size="100%"  /></td>
            </tr>
            <tr>
              <td>Jornada Laboral:</td>
              <td><input name="jornada" type="text" class="mio" id="jornada" /></td>
            </tr>
            <tr>
              <td>Horas por Día:</td>
              <td><input name="horas" type="text" class="mio" id="horas" size="2" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <table width="100%" border="0" id="tab7">
            <tr>
              <td width="40%"><h2>Falta Incurrida</h2></td>
              <td width="60%">&nbsp;</td>
            </tr>
            <tr>
              <td>Trabajador incurrio en:</td>
              <td><textarea name="faltaincu" cols="100%" class="mio" id="faltaincu"></textarea></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <table width="100%" border="0" id="tab6">
            <tr>
              <td width="40%"><h2>Derecho de Réplica</h2></td>
              <td width="60%">&nbsp;</td>
            </tr>
            <tr>
              <td>Comentario:</td>
              <td><textarea name="replica" cols="100%" class="mio" id="replica"></textarea></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <table width="100%" border="0" id="tab3">
            <tr>
              <td width="40%"><h2>Testigo de Cargo</h2></td>
              <td width="60%">&nbsp;</td>
            </tr>
            <tr>
              <td>Nombre:</td>
              <td><input name="cargo2" type="text" class="mio" id="cargo2" size="100%"  /></td>
            </tr>
            <tr>
              <td>Dirección:</td>
              <td><input name="dircargo2" type="text" class="mio" id="dircargo2" /></td>
            </tr>
            <tr>
              <td>N° de INE:</td>
              <td><input name="inecargo2" type="text" class="mio" id="inecargo2" size="2" /></td>
            </tr>
            <tr>
              <td>Puesto:</td>
              <td><input name="puestocargo2" type="text" class="mio" id="puestocargo2" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <table width="100%" border="0" id="tab4">
            <tr>
              <td width="40%"><h2>Testigo de Asistencia</h2></td>
              <td width="60%">&nbsp;</td>
            </tr>
            <tr>
              <td>Nombre:</td>
              <td><input name="asist2" type="text" class="mio" id="asist2" size="100%"  /></td>
            </tr>
            <tr>
              <td>Dirección:</td>
              <td><input name="dirasist2" type="text" class="mio" id="dirasist2" /></td>
            </tr>
            <tr>
              <td>N° de INE:</td>
              <td><input name="ineasist2" type="text" class="mio" id="ineasist2" size="2" /></td>
            </tr>
            <tr>
              <td>Puesto:</td>
              <td><input name="puestoasist2" type="text" class="mio" id="puestoasist2" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <table width="100%" border="0" id="tab8">
            <tr>
              <td width="40%"><h2>Manifiesto del personal</h2></td>
              <td width="60%">&nbsp;</td>
            </tr>
            <tr>
              <td>El personal que actúa hace constar que :</td>
              <td><textarea name="manifiesto" cols="100%" class="mio" id="manifiesto"></textarea></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <table width="100%" border="0" id="tab9">
            <tr>
              <td width="40%"><h2>Artículos Infringidos</h2></td>
              <td width="60%">&nbsp;</td>
            </tr>
            <tr>
              <td>Artículos:</td>
              <td><textarea name="articulos" cols="100%" class="mio" id="articulos"></textarea></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <table width="100%" border="0" id="tab10">
            <tr>
              <td width="40%"><h2>Sanción</h2></td>
              <td width="60%">&nbsp;</td>
            </tr>
            <tr>
              <td>Sanción:</td>
              <td><textarea name="sancion" cols="100%" class="mio" id="sancion"></textarea></td>
            </tr>
          </table>
          <p>
            <input name="aceptar" type="submit" class="footer-wrapper" id="aceptar" value="GENERAR" />
            <input name="cancelar" type="submit" class="footer-wrapper" id="cancelar" value="CANCELAR" />
          </p>
          <p>&nbsp;</p>
          </form>
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

